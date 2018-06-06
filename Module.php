<?php
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
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}
