<?php
namespace GdproList\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class EventPrivacyStatusListFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        return new \GdproList\EventPrivacyStatusList(
            $services->get('MvcTranslator')
        );
    }
}

