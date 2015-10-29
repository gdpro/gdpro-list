<?php
namespace Gdpro\Listing;

use Zend\Mvc\MvcEvent;
use Zend\Validator\AbstractValidator;

/**
 * Class Module
 * @package Gdpro\Listing
 */
class Module
{
    /**
     * @param MvcEvent $e
     */
    public function onBootstrap(MvcEvent $e)
    {
        $translator = $e->getApplication()->getServiceManager()->get('translator');
        AbstractValidator::setDefaultTranslator($translator);
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src/'
                ]
            ]
        );
    }
}
