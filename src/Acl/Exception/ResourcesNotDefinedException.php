<?php
namespace GdproAcl\Acl\Exception;

class ResourcesNotDefinedException extends \Exception
{

    protected $message = 'ACL Exception: The list of ACL Resources have not been defined.';
}