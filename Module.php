<?php
<<<<<<< HEAD
namespace GdproAcl;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

=======
namespace GdproList;

use Zend\Mvc\MvcEvent;
use Zend\Validator\AbstractValidator;

/**
 * Class Module
 * @package GdproList
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
>>>>>>> e566ee1b2af6244be6f79657ff203b14da18658c
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

<<<<<<< HEAD
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
=======
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
>>>>>>> e566ee1b2af6244be6f79657ff203b14da18658c
        );
    }
}
