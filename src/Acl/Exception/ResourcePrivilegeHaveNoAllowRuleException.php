<?php
namespace GdproAcl\Acl\Exception;

class ResourcePrivilegeHaveNoAllowRuleException extends \Exception
{

    protected $message = 'ACL Exception: The resource "{{resource}}" don\'t have defined allowed rule for the privilege "{{privilege}}".';

    public function __construct($resource, $privilege)
    {
        $this->message = str_replace('{{resource}}', $resource, $this->message);
        $this->message = str_replace('{{privilege}}', $privilege, $this->message);
    }
}