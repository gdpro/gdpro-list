<?php
namespace Gdpro\Listing\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class AccountTypeListingFactory
 * @package Gdpro\Listing\Factory
 */
class AccountTypeListingFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        return new \Gdpro\Listing\AccountTypeListing(
            $services->get('MvcTranslator')
        );
    }
}

