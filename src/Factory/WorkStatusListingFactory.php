<?php
namespace Gdpro\Listing\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class WorkStatusListingFactory
 * @package Gdpro\Listing\Factory
 */
class WorkStatusListingFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        return new \Gdpro\Listing\WorkStatusListing(
            $services->get('MvcTranslator')
        );
    }
}
