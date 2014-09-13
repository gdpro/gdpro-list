<?php
namespace GdproList\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class VehicleStateListFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        return new \GdproList\VehicleStateList(
            $services->get('MvcTranslator')
        );
    }
}
