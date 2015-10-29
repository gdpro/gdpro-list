<?php
namespace Gdpro\Listing\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class GenderListingFactory
 * @package Gdpro\Listing\Factory
 */
class GenderListingFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        return new \Gdpro\Listing\GenderListing(
            $services->get('MvcTranslator')
        );
    }
}

