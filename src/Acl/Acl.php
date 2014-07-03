<?php
namespace Gdpro\Acl;

use Gdpro\Acl\Adapter\AdapterInterface;
use Zend\Permissions\Acl\Acl as BaseAcl;
use Zend\Permissions\Acl\Role\GenericRole as Role;
use Zend\Permissions\Acl\Resource\GenericResource as Resource;

class Acl extends BaseAcl
{
    /**
     *
     * @var AdapterInterface
     */
    protected $adapter = null;

    /**
     * @param AdapterInterface $adapter
     */
    public function __construct(AdapterInterface $adapter)
    {
        $this->setAdapter($adapter);
        
        // Check adapter
        if (! $roles = $adapter->getRoles())
            throw new Exception\RolesNotDefinedException();
        if (! $resources = $adapter->getResources())
            throw new Exception\ResourcesNotDefinedException();
        if (! $rules = $adapter->getRules())
            throw new Exception\RulesNotDefinedException();
            
            // Init Roles, Resources & Privileges
        $this->initRoles($roles);
        $this->initResources($resources);
        $this->initRules($rules);
    }

    /**
     * Check if ACL is Authorized
     *
     * @return Ambigous <boolean, NULL>
     */
    public function isAuthorized()
    {
        // Get current Role, Resource & Privilege
        $role = $this->getAdapter()->getRole();
        $resource = $this->getAdapter()->getResource();
        $privilege = $this->getAdapter()->getPrivilege();
        
        // if resource is defined in ACL resource
        if ($this->hasResource($resource)) {
            
            // If role is not define in ACL, we return an exception
            if (! $this->hasRole($role)) {
                throw new Exception\RoleNotDefinedException($role);
            }
            
            $rules = $this->getAdapter()->getRules();
            
            // If the resource is defined in resources list but dont have rules, we generate exception
            if (isset($rules['allow']))
                $resourcesDefinedInRules = array_keys($rules['allow']);
            
            if (! in_array($resource, $resourcesDefinedInRules)) {
                throw new Exception\ResourceHaveNoAllowRuleException($resource);
            }
            
            // If the resource dont have allow rule the resource, we dont authorize
            $privilegesDefinedInResource = array_keys($rules['allow'][$resource]);
            if (! in_array($privilege, $privilegesDefinedInResource))
                throw new Exception\ResourcePrivilegeHaveNoAllowRuleException($resource, $privilege);
                
                // Check if trio role, resource & privilege allowed
            $isAuthorized = parent::isAllowed($role, $resource, $privilege);
            
            if ($isAuthorized) {
                return true;
            } else {
                throw new Exception\AccessNotAllowedException();
            }
        }
        return true;
    }

    /**
     * Load Roles
     */
    protected function initRoles($roles)
    {
        // Add each Role to the ACL
        foreach ($roles as $role => $parentRole) {
            if (isset($role)) {
                $this->addRole(new Role($role), $parentRole);
            } else {
                $role = $parentRole;
                $this->addRole(new Role($role));
            }
        }
    }

    /**
     * Load Resources
     */
    protected function initResources($resources)
    {
        // Add each resource to the ACL
        foreach ($resources as $resource) {
            $this->addResource(new Resource($resource));
        }
    }

    /**
     * Load the list of privilege from the
     */
    protected function initRules($rules)
    {
        // Foreach rules of type allow and deny
        $types = array(
            'allow',
            'deny'
        );
        foreach ($types as $type) {
            // If there is rule the current type
            if (isset($rules[$type])) {
                // Foreach Allowed Resource
                foreach ($rules[$type] as $resource => $privileges) {
                    // If resource empty it mean we didnt define privilege, dont add it.
                    if (! empty($resource)) {
                        $this->addPrivileges($type, $resource, $privileges);
                    }
                }
            }
        }
    }

    /**
     * Add privileges
     * 
     * @param string $type            
     * @param string $resource            
     * @param string|array $privileges            
     */
    protected function addPrivileges($type, $resource, $privileges)
    {
        // If privileges is an array
        if (is_array($privileges)) {
            // For each privileges
            foreach ($privileges as $privilege => $roles) {
                // if there is an index (action) for the role, add it.
                if (! empty($privilege)) {
                    $this->addRoles($type, $roles, $resource, $privilege);
                }
            }
        }
    }

    /**
     * Add roles
     * 
     * @param string $type            
     * @param string|array $roles            
     * @param string $resource            
     * @param string $privilege            
     */
    protected function addRoles($type, $roles, $resource, $privilege)
    {
        // If roles is an array
        if (is_array($roles)) {
            // For each roles
            foreach ($roles as $role => $assertionsOrRole) {
                $this->addAssertionsOrRole($type, $role, $resource, $privilege, $assertionsOrRole);
            }
        } else { // Add role
            $role = $roles;
            // Check if role is defined in roles and add it
            if(in_array($role, $this->getRoles())) {
                $this->$type($role, $resource, $privilege);
            }
        }
    }

    /**
     * Add assertions or one role
     * 
     * @param string $type            
     * @param string $role            
     * @param string $resource            
     * @param string $privilege            
     * @param string $assertionsOrRole            
     */
    protected function addAssertionsOrRole($type, $role, $resource, $privilege, $assertionsOrRole)
    {
        // if key is in array it means we have role with assertion
        if (in_array($assertionsOrRole, $this->getRoles())) {
            $assertions = null;
            $role = $assertionsOrRole;
            $this->$type($role, $resource, $privilege);
        } else {
            $assertions = $assertionsOrRole;
            $this->addAssertions($type, $role, $resource, $privilege, $assertions);
        }
    }

    /**
     * Add Assertions
     * 
     * @param string $type            
     * @param string $role            
     * @param string $resource            
     * @param string $privilege            
     * @param string|array $assertions            
     */
    protected function addAssertions($type, $role, $resource, $privilege, $assertions)
    {
        // If assertions is an array
        if (is_array($assertions)) {
            // Foreach assertions
            foreach ($assertions as $assertion) {
                $this->addAssertion($type, $role, $resource, $privilege, $assertion);
            }
        } else {
            $assertion = $assertions;
            $this->addAssertion($type, $role, $resource, $privilege, $assertion);
        }
    }

    /**
     * Add Assertion
     * 
     * @param string $ruleType            
     * @param string $assertionName            
     */
    public function addAssertion($type, $role, $resource, $privilege, $assertion)
    {
        $assertionClassName = '\\' . $assertion;
        $assertionClass = new $assertionClassName();
        
        $this->$type($role, $resource, $privilege, $assertionClass);
    }

    /**
     * Get Acl Adapter
     */
    public function getAdapter()
    {
        return $this->adapter;
    }

    /**
     * Set Adapter
     *
     * @param \BillingSystemApi\Acl\Adapter\AdapterInterface $adapter            
     * @return \BillingSystemApi\Acl\Acl
     */
    public function setAdapter(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
        return $this;
    }
}

