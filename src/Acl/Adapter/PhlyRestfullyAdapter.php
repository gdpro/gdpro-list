<?php
namespace GdproAcl\Acl\Adapter;

use BillingSystemApi\Acl\Adapter\AdapterInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\EventManager\Event;
use Zend\ServiceManager\ServiceLocatorAwareInterface;

/**
 *
 * @author gary
 *        
 */
class PhlyRestfullyAdapter implements AdapterInterface, ServiceLocatorAwareInterface
{

    protected $event;

    /**
     * Service Locator
     * 
     * @var ServiceLocatorInterface
     */
    protected $serviceLocator;

    public function __construct(Event $event)
    {
        $this->setEvent($event);
    }

    public function getResource()
    {
        // Get Controller from route match
        $controller = $this->getEvent()
            ->getRouteMatch()
            ->getParam('controller');
        
        // Get listener from config with controller
        $config = $this->getServiceLocator()->get('config');
        $listener = $config['phlyrestfully']['resources'][$controller]['listener'];
        
        return $listener;
    }

    public function getPrivilege()
    {
        // Get Privilege from Target
        return $this->getEvent()->getName();
    }

    public function getRole()
    {
        $role = $this->getServiceLocator()
            ->get('RestAuthenticatedUser')
            ->getPermissions();
        return $role;
    }

    public function getRoles()
    {
        $config = $this->getServiceLocator()->get('config');
        return $config['acl']['roles'];
    }

    public function getResources()
    {
        $config = $this->getServiceLocator()->get('config');
        return $config['acl']['resources'];
    }

    public function getRules()
    {
        $config = $this->getServiceLocator()->get('config');
        return $config['acl']['rules'];
    }

    public function setEvent(Event $event)
    {
        $this->event = $event;
        return $this;
    }

    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set service locator
     * 
     * @param ServiceLocatorInterface $serviceLocator            
     */
    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
        
        return $this;
    }

    /**
     * Get service locator
     *
     * @return ServiceLocatorInterface
     */
    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }
}
