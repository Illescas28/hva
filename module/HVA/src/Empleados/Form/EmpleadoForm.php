<?php

namespace Empleados\Form;

use Zend\Form\Form;

class EmpleadoForm extends Form
{
    public function __construct(array $roles)
    {
        // we want to ignore the name passed
        parent::__construct('EmpleadoForm');
        $this->setAttribute('method', 'POST');
        
        $this->add(array(
            'name' => 'idrol',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Seleccione el rol del empleado*',
                'value_options' => $roles,
            ),
        ));

        $this->add(array(
            'name' => 'empleado_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre *',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_apellidopaterno',
            'type' => 'Text',
            'options' => array(
                'label' => 'Apellido Paterno *',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_apellidomaterno',
            'type' => 'Text',
            'options' => array(
                'label' => 'Apellido Materno *',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_email',
            'type' => 'Text',
            'options' => array(
                'label' => 'Correo Electronico *',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_nombreusuario',
            'type' => 'Text',
            'options' => array(
                'label' => 'Usuario *',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_password',
            'type' => 'Password',
            'options' => array(
                'label' => 'Contraseña *',
            ),
        ));
        
        
        
        
    }
}