<?php
namespace Gdpro\Listing\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class QuotationStatusListingFactory
 * @package Gdpro\Listing\Factory
 */
class QuotationStatusListingFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        return new \Gdpro\Listing\QuotationStatusListing(
            $services->get('MvcTranslator')
        );
    }
}

