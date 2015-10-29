<?php
namespace Gdpro\Listing\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class HonorificListingFactory
 * @package Gdpro\Listing\Factory
 */
class HonorificListingFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        return new \Gdpro\Listing\HonorificListing(
            $services->get('MvcTranslator')
        );
    }
}

