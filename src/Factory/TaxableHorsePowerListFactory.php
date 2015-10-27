<?php
namespace GdproList\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TaxableHorsePowerListFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        return new \GdproList\TaxableHorsePowerList(
            $services->get('MvcTranslator')
        );
    }
}
