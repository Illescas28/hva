<?php
namespace Venta\Paciente\Form;

use Zend\Form\Form;

class PacienteForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('PacienteForm');
        $this->setAttribute('method', 'post');

        // pacientefacturacion
        $this->add(array(
            'name' => 'pacientefacturacion_rfc',
            'type' => 'Text',
            'options' => array(
                'label' => 'RFC',
            ),
        ));

        // paciente
        $this->add(array(
            'name' => 'idpaciente',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'paciente_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre',
            ),
        ));
        $this->add(array(
            'name' => 'paciente_ap',
            'type' => 'Text',
            'options' => array(
                'label' => 'Apellido Paterno',
            ),
        ));
        $this->add(array(
            'name' => 'paciente_am',
            'type' => 'Text',
            'options' => array(
                'label' => 'Apellido Materno',
            ),
        ));
        $this->add(array(
            'name' => 'paciente_calle',
            'type' => 'Text',
            'options' => array(
                'label' => 'Calle',
            ),
        ));
        $this->add(array(
            'name' => 'paciente_noexterior',
            'type' => 'Text',
            'options' => array(
                'label' => 'No. Exterior',
            ),
        ));
        $this->add(array(
            'name' => 'paciente_nointerior',
            'type' => 'Text',
            'options' => array(
                'label' => 'No. Interior',
            ),
        ));
        $this->add(array(
            'name' => 'paciente_colonia',
            'type' => 'Text',
            'options' => array(
                'label' => 'Colonia',
            ),
        ));
        $this->add(array(
            'name' => 'paciente_codigopostal',
            'type' => 'Text',
            'options' => array(
                'label' => 'Código Postal',
            ),
        ));
        $this->add(array(
            'name' => 'paciente_ciudad',
            'type' => 'Text',
            'options' => array(
                'label' => 'Ciudad',
            ),
        ));

        $this->add(array(
            'name' => 'paciente_estado',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Estado',
                'empty_option' => 'Seleccione un estado',
                'value_options' => array (
                    'Aguascalientes' => 'Aguascalientes',
                    'Baja California' => 'Baja California',
                    'Baja California Sur' => 'Baja California Sur',
                    'Campeche' => 'Campeche',
                    'Chiapas' => 'Chiapas',
                    'Chihuahua' => 'Chihuahua',
                    'Coahuila de Zaragoza' => 'Coahuila de Zaragoza',
                    'Colima' => 'Colima',
                    'Distrito Federal' => 'Distrito Federal',
                    'Durango' => 'Durango',
                    'Guanajuato' => 'Guanajuato',
                    'Guerrero' => 'Guerrero',
                    'Hidalgo' => 'Hidalgo',
                    'Jalisco' => 'Jalisco',
                    'Mexico' => 'Mexico',
                    'Michoacan de Ocampo' => 'Michoacan de Ocampo',
                    '1Morelos7' => 'Morelos',
                    'Nayarit' => 'Nayarit',
                    'Nuevo Leon' => 'Nuevo Leon',
                    'Oaxaca' => 'Oaxaca',
                    'Puebla' => 'Puebla',
                    'Queretaro de Arteaga' => 'Queretaro de Arteaga',
                    'Quintana Roo' => 'Quintana Roo',
                    'San Luis Potosi' => 'San Luis Potosi',
                    'Sinaloa' => 'Sinaloa',
                    'Sonora' => 'Sonora',
                    'Tabasco' => 'Tabasco',
                    'Tamaulipas' => 'Tamaulipas',
                    'Tlaxcala' => 'Tlaxcala',
                    'Veracruz-Llave' => 'Veracruz-Llave',
                    'Yucatan' => 'Yucatan',
                    'Zacatecas' => 'Zacatecas',
                ),
            ),
        ));
        $this->add(array(
            'name' => 'paciente_pais',
            'type' => 'Text',
            'options' => array(
                'label' => 'País',
            ),
        ));
        $this->add(array(
            'name' => 'paciente_telefono',
            'type' => 'Text',
            'options' => array(
                'label' => 'Teléfono de Casa',
            ),
        ));
        $this->add(array(
            'name' => 'paciente_telefonocelular',
            'type' => 'Text',
            'options' => array(
                'label' => 'Celular',
            ),
        ));
        $this->add(array(
            'name' => 'paciente_fechanacimiento',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha de nacimiento',
            ),
            'attributes' => array(
                'id' => 'fecha'
            )
        ));
        $this->add(array(
            'name' => 'paciente_sexo',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Sexo',
                'empty_option' => 'Seleccione su sexo',
                'value_options' => array('Masculino' => 'Masculino','Femenino' => 'Femenino'),
            ),
        ));
        $this->add(array(
            'name' => 'paciente_estadocivil',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Estado Civil',
                'empty_option' => 'Seleccione su estado civil',
                'value_options' => array('Soltero(a)' => 'Soltero(a)', 'Casado(a)' => 'Casado(a)','Divorciado(a)' => 'Divorciado(a)', 'Viudo(a)' => 'Viudo(a)'),
            ),
        ));
        $this->add(array(
            'name' => 'paciente_ocupacion',
            'type' => 'Text',
            'options' => array(
                'label' => 'Ocupación',
            ),
        ));
        $this->add(array(
            'name' => 'paciente_conyuge',
            'type' => 'Text',
            'options' => array(
                'label' => 'Conyuge',
            ),
        ));
        $this->add(array(
            'name' => 'paciente_padre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Padre',
            ),
        ));
        $this->add(array(
            'name' => 'paciente_madre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Madre',
            ),
        ));
        $this->add(array(
            'name' => 'paciente_responsable',
            'type' => 'Text',
            'options' => array(
                'label' => 'Responsable',
            ),
        ));
        $this->add(array(
            'name' => 'paciente_telefonoresponsable',
            'type' => 'Text',
            'options' => array(
                'label' => 'Teléfono de Emergencias',
            ),
        ));

    }
}