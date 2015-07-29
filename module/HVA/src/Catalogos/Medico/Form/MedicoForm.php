<?php

namespace Catalogos\Medico\Form;

use Zend\Form\Form;

class MedicoForm extends Form
{
    public function __construct(array $especialidades =null)
    {
        // we want to ignore the name passed
        parent::__construct('MedicoForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'idespecialidad',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Especialidad',
                'empty_option' => 'Seleccione una especialidad *',
                'value_options' => $especialidades,
            ),
            'attributes' => array(
                'required' => 'required'
            ),
        ));
        
        $this->add(array(
            'name' => 'medico_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre *',  
            ),
            'attributes' => array(
                'required' => 'required'
            ),
        ));
        $this->add(array(
            'name' => 'medico_apellidopaterno',
            'type' => 'Text',
            'options' => array(
                'label' => 'Apellido Paterno *',
            ),
            'attributes' => array(
                'required' => 'required'
            ),
        ));
        $this->add(array(
            'name' => 'medico_apellidomaterno',
            'type' => 'Text',
            'options' => array(
                'label' => 'Apellido Materno *',
            ),
            'attributes' => array(
                'required' => 'required'
            ),
        ));
        $this->add(array(
            'name' => 'medico_calle',
            'type' => 'Text',
            'options' => array(
                'label' => 'Calle',
            ),
        ));
        $this->add(array(
            'name' => 'medico_noexterior',
            'type' => 'Text',
            'options' => array(
                'label' => 'No. Exterior',
            ),
        ));
        $this->add(array(
            'name' => 'medico_nointerior',
            'type' => 'Text',
            'options' => array(
                'label' => 'No. Interior',
            ),
        ));
        $this->add(array(
            'name' => 'medico_colonia',
            'type' => 'Text',
            'options' => array(
                'label' => 'Colonia',
            ),
        ));
        $this->add(array(
            'name' => 'medico_codigopostal',
            'type' => 'Text',
            'options' => array(
                'label' => 'Código postal',
            ),
        ));
        $this->add(array(
            'name' => 'medico_ciudad',
            'type' => 'Text',
            'options' => array(
                'label' => 'Ciudad',
            ),
        ));
        $this->add(array(
            'name' => 'medico_estado',
            'type' => 'Text',
            'options' => array(
                'label' => 'Estado',
            ),
        ));
        $this->add(array(
            'name' => 'medico_pais',
            'type' => 'Text',
            'options' => array(
                'label' => 'País',
            ),
        ));
        $this->add(array(
            'name' => 'medico_telefono',
            'type' => 'Text',
            'options' => array(
                'label' => 'Casa',
            ),
        ));
        $this->add(array(
            'name' => 'medico_telefonocelular',
            'type' => 'Text',
            'options' => array(
                'label' => 'Celular *',
            ),
            'attributes' => array(
                'required' => 'required'
            ),
        ));
        $this->add(array(
            'name' => 'medico_clave',
            'type' => 'Text',
            'options' => array(
                'label' => 'Clave',
            ),
        ));
        $this->add(array(
            'name' => 'medico_dgp',
            'type' => 'Text',
            'options' => array(
                'label' => 'D.G.P *',
            ),
            'attributes' => array(
                'required' => 'required'
            ),
        ));
        $this->add(array(
            'name' => 'medico_ssa',
            'type' => 'Text',
            'options' => array(
                'label' => 'S.S.A',
            ),
        ));
        $this->add(array(
            'name' => 'medico_ae',
            'type' => 'Text',
            'options' => array(
                'label' => 'A.E',
            ),
        ));

       
    }
}