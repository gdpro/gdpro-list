<?php
namespace GdproList\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class HonorificListFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        return new \GdproList\HonorificList(
            $services->get('MvcTranslator')
        );
    }
}

