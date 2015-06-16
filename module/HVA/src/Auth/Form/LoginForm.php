<?php

namespace Auth\Form;

use Zend\Form\Form;

class LoginForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('loginForm');
        
        $this->add(array(
            'name' => 'empleado_nombreusuario',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre de Usuario',
            ),
        ));
        $this->add(array(
            'name' => 'empleado_password',
            'type' => 'Password',
            'options' => array(
                'label' => 'Contraseña',
            ),
        ));
       
        $this->add(array(
            'name' => 'btn_ingresar',
            'type' => 'submit',
            'attributes' => array(
                'id' => 'loginButton',
                'class' => 'btn waves-effect waves-light',
            ),
            'options' => array(
                'label' => 'Ingresar',
            ),
        ));
    }
}