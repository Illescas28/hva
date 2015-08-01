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
use Shared\Session\SessionManager;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
         
        $loginListener = new LoginListener();
        $loginListener->attach($eventManager);
        
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        
        $this -> initAcl($e);
        $e -> getApplication() -> getEventManager() -> attach('route', array($this, 'checkAcl'));
       
    }
    
    public function initAcl(MvcEvent $e) {
        $acl = new \Zend\Permissions\Acl\Acl();
        $roles = include __DIR__ . '/config/module.acl.roles.php';
        $allResources = array();
        foreach ($roles as $role => $resources) {
            $role = new \Zend\Permissions\Acl\Role\GenericRole($role); 
            $acl -> addRole($role);
            
                //adding resources
                foreach ($resources as $resource) {
                     // Edit 4
                     if(!$acl ->hasResource($resource)){
                        $acl -> addResource(new \Zend\Permissions\Acl\Resource\GenericResource($resource));
                     }
                     $acl -> allow($role, $resource);
                } 
        }
       
        //setting to view
        $e -> getViewModel() -> acl = $acl;

    }
    
    public function checkAcl(MvcEvent $e) {
        $route = $e -> getRouteMatch() -> getMatchedRouteName();
         
        //you set your role
        $userRole = SessionManager::getRol();
     
        if($route == 'auth'){
            return;
        }

        if ($e -> getViewModel() -> acl -> isAllowed($userRole, $route)) {
          return;  
        }else{
            $response = $e -> getResponse();
            //location to page or what ever
            $response -> getHeaders() -> addHeaderLine('Location', $e -> getRequest() -> getBaseUrl() . '/404');
            $response -> setStatusCode(404);
        }
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
                    'Venta'     => __DIR__ . '/src/' . 'Venta/',
                    'Catalogos' => __DIR__ . '/src/' . 'Catalogos/',
                    'Auth' => __DIR__ . '/src/' . 'Auth/',
                    'Compras' => __DIR__ . '/src/' . 'Compras/',
                    'Shared' => __DIR__ . '/src/' . 'Shared/',
                    'Empleados' => __DIR__ . '/src/' . 'Empleados/',
                    'Almacen' => __DIR__ . '/src/' . 'Almacen/',
                    'Cajachica' => __DIR__ . '/src/' . 'Cajachica/',
                    'Bancos' => __DIR__ . '/src/' . 'Bancos/',
                    'Reportes' => __DIR__ . '/src/' . 'Reportes/',
                ),
            ),
        );
    }
}
