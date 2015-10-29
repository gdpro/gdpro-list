<?php
namespace Gdpro\Listing\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class TaxableHorsePowerListingFactory
 * @package Gdpro\Listing\Factory
 */
class TaxableHorsePowerListingFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        return new \Gdpro\Listing\TaxableHorsePowerListing(
            $services->get('MvcTranslator')
        );
    }
}
