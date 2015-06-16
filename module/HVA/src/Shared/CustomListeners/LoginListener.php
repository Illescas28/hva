<?php

namespace Shared\CustomListeners;

use Zend\Mvc\MvcEvent;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use Shared\Session\SessionManager;

class LoginListener implements ListenerAggregateInterface
{
   protected $listeners=array();
   /*
    * Enlace con el listener de la aplicacion con la accion principal de onDispatch y maxima prioridad 1000
    */
   public function attach(EventManagerInterface $events){
        $this->listeners[]=$events->attach(MvcEvent::EVENT_DISPATCH,array($this,'onDispatch'),900);
   }

   //Elimina todos los eventos para que se use el onDispatch
   public function detach(EventManagerInterface $events)
   {
       
       foreach($this->listeners as $index => $listener){
           if($events->detach($listener)){
               unset($this->listeners[$index]);
           }
       }
   }

   //Decisiones personalizadas
   public function onDispatch (MvcEvent $e){
       //Verificamos si no existe una sesion creada
       if(!SessionManager::sessionExist()){
           $e->getRouteMatch()->setParam('controller', 'Auth\Controller\Auth');
           $e->getRouteMatch()->setParam('action', 'login');
           //$e->getRouteMatch()->setParam('redirect_url' ,$_SERVER['REDIRECT_URL']);
       }
       
   }

}