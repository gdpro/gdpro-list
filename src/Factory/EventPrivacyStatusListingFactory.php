<?php
namespace Gdpro\Listing\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class EventPrivacyStatusListingFactory
 * @package Gdpro\Listing\Factory
 */
class EventPrivacyStatusListingFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        return new \Gdpro\Listing\EventPrivacyStatusListing(
            $services->get('MvcTranslator')
        );
    }
}

