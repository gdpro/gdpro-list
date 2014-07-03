<?php
namespace GdproAcl\Acl\Exception;

class RoleNotDefinedException extends \Exception
{

    protected $message = 'ACL Exception: role "{{role}}" have not been set in the roles list.';

    public function __construct($role)
    {
        $this->message = str_replace('{{role}}', $role, $this->message);
    }
}