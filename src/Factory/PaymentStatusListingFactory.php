<?php
namespace Gdpro\Listing\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class PaymentStatusListingFactory
 * @package Gdpro\Listing\Factory
 */
class PaymentStatusListingFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        return new \Gdpro\Listing\PaymentStatusListing(
            $services->get('MvcTranslator')
        );
    }
}

