<?php

namespace Catalogos\Proveedor\Form;

use Zend\Form\Form;

class ProveedorForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('ProveedorForm');
        
        $this->add(array(
            'name' => 'proveedor_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre de la empresa *',
            ),
            'attributes' => array(
                'required' => 'required',
            ),
        ));
        $this->add(array(
            'name' => 'proveedor_contacto',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre de Contácto *',
            ),
            'attributes' => array(
                'required' => 'required',
            ),
        ));
        $this->add(array(
            'name' => 'proveedor_direccion',
            'type' => 'Text',
            'options' => array(
                'label' => 'Dirección',
            ),
        ));
        $this->add(array(
            'name' => 'proveedor_direccion2',
            'type' => 'Text',
            'options' => array(
                'label' => 'Dirección 2',
            ),
        ));
        $this->add(array(
            'name' => 'proveedor_colonia',
            'type' => 'Text',
            'options' => array(
                'label' => 'Colonia',
            ),
        ));
        $this->add(array(
            'name' => 'proveedor_codigopostal',
            'type' => 'Text',
            'options' => array(
                'label' => 'Código Postal',
            ),
        ));
        $this->add(array(
            'name' => 'proveedor_ciudad',
            'type' => 'Text',
            'options' => array(
                'label' => 'Ciudad',
            ),
        ));
        $this->add(array(
            'name' => 'proveedor_estado',
            'type' => 'Text',
            'options' => array(
                'label' => 'Estado',
            ),
        ));
        $this->add(array(
            'name' => 'proveedor_pais',
            'type' => 'Text',
            'options' => array(
                'label' => 'País',
            ),
        ));
        $this->add(array(
            'name' => 'proveedor_email',
            'type' => 'Text',
            'options' => array(
                'label' => 'Correo electronico *',
            ),
            'attributes' => array(
                'required' => 'required',
            ),
        ));
        $this->add(array(
            'name' => 'proveedor_telefono',
            'type' => 'Text',
            'options' => array(
                'label' => 'Teléfono *',
            ),
            'attributes' => array(
                'required' => 'required',
            ),
        ));
        $this->add(array(
            'name' => 'proveedor_telefonocelular',
            'type' => 'Text',
            'options' => array(
                'label' => 'Celular *',
            ),
            'attributes' => array(
                'required' => 'required',
            ),
        ));
        $this->add(array(
            'name' => 'proveedor_fax',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fax',
            ),
        ));
        $this->add(array(
            'name' => 'proveedor_rfc',
            'type' => 'Text',
            'options' => array(
                'label' => 'RFC *',
            ),
            'attributes' => array(
                'required' => 'required',
            ),
            
        ));

    }
}