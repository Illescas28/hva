<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace HVA;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Shared\CustomListeners\LoginListener;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        
        $loginListener = new LoginListener();
        $loginListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                    'HVA' => __DIR__ . '/src/' . 'HVA/',
                    'Productos' => __DIR__ . '/src/' . 'Productos/',
                    'Pacientes' => __DIR__ . '/src/' . 'Pacientes/',
                    'Catalogos' => __DIR__ . '/src/' . 'Catalogos/',
                    'Auth' => __DIR__ . '/src/' . 'Auth/',
                    'Shared' => __DIR__ . '/src/' . 'Shared/',
                ),
            ),
        );
    }
}
