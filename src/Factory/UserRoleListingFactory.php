<?php
namespace Gdpro\Listing\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class UserRoleListingFactory
 * @package Gdpro\Listing\Factory
 */
class UserRoleListingFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $services)
    {
        return new \Gdpro\Listing\UserRoleListing(
            $services->get('MvcTranslator')
        );
    }
}

