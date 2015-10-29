<?php
namespace Gdpro\Listing\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class VehicleStateListingFactory
 * @package Gdpro\Listing\Factory
 */
class VehicleStateListingFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        return new \Gdpro\Listing\VehicleStateListing(
            $services->get('MvcTranslator')
        );
    }
}
