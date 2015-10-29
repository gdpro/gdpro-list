<?php
namespace Gdpro\Listing\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class AdStatusListingFactory
 * @package Gdpro\Listing\Factory
 */
class AdStatusListingFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        return new \Gdpro\Listing\AdStatusListing(
            $services->get('MvcTranslator')
        );
    }
}

