<?php

namespace Catalogos\Banco\Form;

use Zend\Form\Form;

class BancoForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('BancoForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'banco_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre del banco',
            ),
        ));
        $this->add(array(
            'name' => 'banco_cuenta',
            'type' => 'Text',
            'options' => array(
                'label' => 'Número de cuenta',
            ),
        ));
        $this->add(array(
            'name' => 'banco_balance',
            'type' => 'Text',
            'options' => array(
                'label' => 'Balance',
            ),
        ));
        
        $this->add(array(
            'name' => 'banco_descripcion',
            'type' => 'Text',
            'options' => array(
                'label' => 'Descripción',
            ),
        ));
        
    }
}