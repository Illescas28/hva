<?php



/**
 * This class defines the structure of the 'medico' table.
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
class MedicoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.MedicoTableMap';

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
        $this->setName('medico');
        $this->setPhpName('Medico');
        $this->setClassname('Medico');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idmedico', 'Idmedico', 'INTEGER', true, null, null);
        $this->addForeignKey('idespecialidad', 'Idespecialidad', 'INTEGER', 'especialidad', 'idespecialidad', true, null, null);
        $this->addColumn('medico_nombre', 'MedicoNombre', 'VARCHAR', true, 45, null);
        $this->addColumn('medico_apellidopaterno', 'MedicoApellidopaterno', 'VARCHAR', true, 45, null);
        $this->addColumn('medico_apellidomaterno', 'MedicoApellidomaterno', 'VARCHAR', true, 45, null);
        $this->addColumn('medico_calle', 'MedicoCalle', 'VARCHAR', false, 45, null);
        $this->addColumn('medico_noexterior', 'MedicoNoexterior', 'VARCHAR', false, 45, null);
        $this->addColumn('medico_nointerior', 'MedicoNointerior', 'VARCHAR', false, 45, null);
        $this->addColumn('medico_colonia', 'MedicoColonia', 'VARCHAR', false, 45, null);
        $this->addColumn('medico_codigopostal', 'MedicoCodigopostal', 'VARCHAR', false, 45, null);
        $this->addColumn('medico_ciudad', 'MedicoCiudad', 'VARCHAR', false, 45, null);
        $this->addColumn('medico_estado', 'MedicoEstado', 'VARCHAR', false, 45, null);
        $this->addColumn('medico_pais', 'MedicoPais', 'VARCHAR', false, 45, null);
        $this->addColumn('medico_telefono', 'MedicoTelefono', 'VARCHAR', false, 45, null);
        $this->addColumn('medico_telefonocelular', 'MedicoTelefonocelular', 'VARCHAR', true, 45, null);
        $this->addColumn('medico_clave', 'MedicoClave', 'VARCHAR', false, 45, null);
        $this->addColumn('medico_dgp', 'MedicoDgp', 'VARCHAR', true, 45, null);
        $this->addColumn('medico_ssa', 'MedicoSsa', 'VARCHAR', false, 45, null);
        $this->addColumn('medico_ae', 'MedicoAe', 'VARCHAR', false, 45, null);
        $this->addColumn('medico_fotografia', 'MedicoFotografia', 'LONGVARCHAR', false, null, null);
        $this->addColumn('medico_perfilcompleto', 'MedicoPerfilcompleto', 'BOOLEAN', true, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Especialidad', 'Especialidad', RelationMap::MANY_TO_ONE, array('idespecialidad' => 'idespecialidad', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Admision', 'Admision', RelationMap::ONE_TO_MANY, array('idmedico' => 'idmedico', ), 'CASCADE', 'CASCADE', 'Admisions');
        $this->addRelation('Cita', 'Cita', RelationMap::ONE_TO_MANY, array('idmedico' => 'idmedico', ), 'CASCADE', 'CASCADE', 'Citas');
        $this->addRelation('Consulta', 'Consulta', RelationMap::ONE_TO_MANY, array('idmedico' => 'idmedico', ), 'CASCADE', 'CASCADE', 'Consultas');
        $this->addRelation('Medicoespecialidad', 'Medicoespecialidad', RelationMap::ONE_TO_MANY, array('idmedico' => 'idmedico', ), 'CASCADE', 'CASCADE', 'Medicoespecialidads');
        $this->addRelation('Medicofacturacion', 'Medicofacturacion', RelationMap::ONE_TO_MANY, array('idmedico' => 'idmedico', ), 'CASCADE', 'CASCADE', 'Medicofacturacions');
    } // buildRelations()

} // MedicoTableMap
