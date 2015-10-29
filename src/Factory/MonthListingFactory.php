<?php
namespace Gdpro\Listing\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class MonthListingFactory
 * @package Gdpro\Listing\Factory
 */
class MonthListingFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        return new \Gdpro\Listing\MonthListing(
            $services->get('MvcTranslator')
        );
    }
}

