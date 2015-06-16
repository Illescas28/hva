<?php

namespace Shared\Session;

use Zend\Session\Container;

class SessionManager {
    
    public static function init(array $empleadoData) {

        $empleadoSession = new Container('empleado_session');
        
        $empleadoSession->empleado_info = $empleadoData['empleado_info'];
        $empleadoSession->empleado_rol = $empleadoData['empleado_rol'];
        $empleadoSession->empleado_acl = $empleadoData['empleado_acl'];

    }
    
    public static function destroy(){
        $empleadoSession = new Container('empleado_session');
        $empleadoSession->getManager()->getStorage()->clear('empleado_session');
        
    }
    
    public static function sessionExist(){
        
        $empleadoSession = new Container('empleado_session');
        if(isset($_SESSION['empleado_session'])){
            return true;
        }
        return false;
    }
}
