<?php



/**
 * This class defines the structure of the 'pacientefacturacion' table.
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
class PacientefacturacionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.PacientefacturacionTableMap';

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
        $this->setName('pacientefacturacion');
        $this->setPhpName('Pacientefacturacion');
        $this->setClassname('Pacientefacturacion');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idpacientefacturacion', 'Idpacientefacturacion', 'INTEGER', true, null, null);
        $this->addForeignKey('idpaciente', 'Idpaciente', 'INTEGER', 'paciente', 'idpaciente', true, null, null);
        $this->addColumn('pacientefacturacion_razonsocial', 'PacientefacturacionRazonsocial', 'VARCHAR', false, 45, null);
        $this->addColumn('pacientefacturacion_rfc', 'PacientefacturacionRfc', 'VARCHAR', false, 45, null);
        $this->addColumn('pacientefacturacion_calle', 'PacientefacturacionCalle', 'VARCHAR', false, 45, null);
        $this->addColumn('pacientefacturacion_noexterior', 'PacientefacturacionNoexterior', 'VARCHAR', false, 45, null);
        $this->addColumn('pacientefacturacion_nointerior', 'PacientefacturacionNointerior', 'VARCHAR', false, 45, null);
        $this->addColumn('pacientefacturacion_colonia', 'PacientefacturacionColonia', 'VARCHAR', false, 45, null);
        $this->addColumn('pacientefacturacion_ciudad', 'PacientefacturacionCiudad', 'VARCHAR', false, 45, null);
        $this->addColumn('pacientefacturacion_estado', 'PacientefacturacionEstado', 'VARCHAR', false, 45, null);
        $this->addColumn('pacientefacturacion_pais', 'PacientefacturacionPais', 'VARCHAR', false, 45, null);
        $this->addColumn('pacientefacturacion_codigopostal', 'PacientefacturacionCodigopostal', 'VARCHAR', false, 45, null);
        $this->addColumn('pacientefacturacion_telefono', 'PacientefacturacionTelefono', 'VARCHAR', false, 45, null);
        $this->addColumn('pacientefacturacion_email', 'PacientefacturacionEmail', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Paciente', 'Paciente', RelationMap::MANY_TO_ONE, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Factura', 'Factura', RelationMap::ONE_TO_MANY, array('idpacientefacturacion' => 'iddatosfacturacion', ), 'CASCADE', 'CASCADE', 'Facturas');
    } // buildRelations()

} // PacientefacturacionTableMap
