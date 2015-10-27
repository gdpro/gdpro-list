<?php
namespace GdproList\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class MonthListFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        return new \GdproList\MonthList(
            $services->get('MvcTranslator')
        );
    }
}

