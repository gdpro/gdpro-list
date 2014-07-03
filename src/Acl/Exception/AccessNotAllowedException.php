<?php
namespace GdproAcl\Acl\Exception;

class AccessNotAllowedException extends \Exception
{

    protected $message = 'ACL Exception: The role given is not authorized to access to this privilege for this resource';
}