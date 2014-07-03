<?php
namespace GdproAcl\Acl\Exception;

class RulesNotDefinedException extends \Exception
{

    protected $message = 'ACL Exception: The list of ACL rules have not been defined.';
}