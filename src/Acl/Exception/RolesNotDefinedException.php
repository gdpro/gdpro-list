<?php
namespace GdproAcl\Acl\Exception;

class RolesNotDefinedException extends \Exception
{

    protected $message = 'ACL Exception: The list of ACL Roles have not been defined.';
}