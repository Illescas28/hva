<?php

namespace Pacientes\Admision\Filter;

// Add these import statements
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class AdmisionFilter implements InputFilterAwareInterface
{
    protected $inputFilter;                       // <-- Add this variable

    // Add content to these methods:
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used");
    }

    public function getInputFilter()
    {

        if (!$this->inputFilter) {
            $inputFilter = new InputFilter();

            $inputFilter->add(array(
                'name'     => 'idmedico',
                'required' => true,
                'filters'  => array(
                    array('name' => 'Int'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'idcuarto',
                'required' => true,
                'filters'  => array(
                    array('name' => 'Int'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'idpaciente',
                'required' => true,
                'filters'  => array(
                    array('name' => 'Int'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'admision_fechaadmision',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'admision_fechasalida',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'admision_diagnostico',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'admision_observaciones',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'admision_status',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'admision_total',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'admision_pagadaen',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'admision_tipodepago',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'admision_referenciapago',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'admision_facturada',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            $inputFilter->add(array(
                'name'     => 'admision_registrada',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));

            $this->inputFilter = $inputFilter;
        }

        return $this->inputFilter;
    }
}
