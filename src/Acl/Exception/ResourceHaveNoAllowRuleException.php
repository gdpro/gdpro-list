<?php
namespace GdproAcl\Acl\Exception;

class ResourceHaveNoAllowRuleException extends \Exception
{

    protected $message = 'ACL Exception: resource "{{resource}}" is set in Resources list but dont have allow rules.';

    public function __construct($resource)
    {
        $this->message = str_replace('{{resource}}', $resource, $this->message);
    }
}