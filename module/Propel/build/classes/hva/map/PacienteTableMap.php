<?php



/**
 * This class defines the structure of the 'paciente' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.hva.map
 */
class PacienteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.PacienteTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('paciente');
        $this->setPhpName('Paciente');
        $this->setClassname('Paciente');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idpaciente', 'Idpaciente', 'INTEGER', true, null, null);
        $this->addColumn('paciente_nombre', 'PacienteNombre', 'VARCHAR', true, 250, null);
        $this->addColumn('paciente_ap', 'PacienteAp', 'VARCHAR', true, 100, null);
        $this->addColumn('paciente_am', 'PacienteAm', 'VARCHAR', true, 45, null);
        $this->addColumn('paciente_calle', 'PacienteCalle', 'VARCHAR', true, 45, null);
        $this->addColumn('paciente_noexterior', 'PacienteNoexterior', 'VARCHAR', true, 45, null);
        $this->addColumn('paciente_nointerior', 'PacienteNointerior', 'VARCHAR', false, 45, null);
        $this->addColumn('paciente_colonia', 'PacienteColonia', 'VARCHAR', true, 45, null);
        $this->addColumn('paciente_codigopostal', 'PacienteCodigopostal', 'VARCHAR', true, 5, null);
        $this->addColumn('paciente_ciudad', 'PacienteCiudad', 'VARCHAR', true, 45, null);
        $this->addColumn('paciente_estado', 'PacienteEstado', 'VARCHAR', true, 45, null);
        $this->addColumn('paciente_pais', 'PacientePais', 'VARCHAR', true, 45, null);
        $this->addColumn('paciente_telefono', 'PacienteTelefono', 'VARCHAR', true, 45, null);
        $this->addColumn('paciente_telefonocelular', 'PacienteTelefonocelular', 'VARCHAR', true, 45, null);
        $this->addColumn('paciente_fechanacimiento', 'PacienteFechanacimiento', 'DATE', true, null, null);
        $this->addColumn('paciente_sexo', 'PacienteSexo', 'CHAR', true, null, null);
        $this->getColumn('paciente_sexo', false)->setValueSet(array (
  0 => 'Masculino',
  1 => 'Femenino',
));
        $this->addColumn('paciente_estadocivil', 'PacienteEstadocivil', 'CHAR', true, null, null);
        $this->getColumn('paciente_estadocivil', false)->setValueSet(array (
  0 => 'Soltero(a',
));
        $this->addColumn('paciente_ocupacion', 'PacienteOcupacion', 'VARCHAR', true, 45, null);
        $this->addColumn('paciente_conyuge', 'PacienteConyuge', 'VARCHAR', false, 45, null);
        $this->addColumn('paciente_padre', 'PacientePadre', 'VARCHAR', true, 45, null);
        $this->addColumn('paciente_madre', 'PacienteMadre', 'VARCHAR', true, 45, null);
        $this->addColumn('paciente_responsable', 'PacienteResponsable', 'VARCHAR', true, 45, null);
        $this->addColumn('paciente_telefonoresponsable', 'PacienteTelefonoresponsable', 'VARCHAR', true, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Admision', 'Admision', RelationMap::ONE_TO_MANY, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE', 'Admisions');
        $this->addRelation('Cita', 'Cita', RelationMap::ONE_TO_MANY, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE', 'Citas');
        $this->addRelation('Consulta', 'Consulta', RelationMap::ONE_TO_MANY, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE', 'Consultas');
        $this->addRelation('Pacientefacturacion', 'Pacientefacturacion', RelationMap::ONE_TO_MANY, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE', 'Pacientefacturacions');
        $this->addRelation('Venta', 'Venta', RelationMap::ONE_TO_MANY, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE', 'Ventas');
    } // buildRelations()

} // PacienteTableMap
