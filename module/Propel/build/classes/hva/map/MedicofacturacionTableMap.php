<?php



/**
 * This class defines the structure of the 'medicofacturacion' table.
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
class MedicofacturacionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.MedicofacturacionTableMap';

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
        $this->setName('medicofacturacion');
        $this->setPhpName('Medicofacturacion');
        $this->setClassname('Medicofacturacion');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idmedicofacturacion', 'Idmedicofacturacion', 'INTEGER', true, null, null);
        $this->addForeignKey('idmedico', 'Idmedico', 'INTEGER', 'medico', 'idmedico', true, null, null);
        $this->addColumn('medicofacturacion_razonsocial', 'MedicofacturacionRazonsocial', 'VARCHAR', false, 45, null);
        $this->addColumn('medicofacturacion_rfc', 'MedicofacturacionRfc', 'VARCHAR', false, 45, null);
        $this->addColumn('medicofacturacion_calle', 'MedicofacturacionCalle', 'VARCHAR', false, 45, null);
        $this->addColumn('medicofacturacion_noexterior', 'MedicofacturacionNoexterior', 'VARCHAR', false, 45, null);
        $this->addColumn('medicofacturacion_nointerior', 'MedicofacturacionNointerior', 'VARCHAR', false, 45, null);
        $this->addColumn('medicofacturacion_colonia', 'MedicofacturacionColonia', 'VARCHAR', false, 45, null);
        $this->addColumn('medicofacturacion_ciudad', 'MedicofacturacionCiudad', 'VARCHAR', false, 45, null);
        $this->addColumn('medicofacturacion_estado', 'MedicofacturacionEstado', 'VARCHAR', false, 45, null);
        $this->addColumn('medicofacturacion_pais', 'MedicofacturacionPais', 'VARCHAR', false, 45, null);
        $this->addColumn('medicofacturacion_codigopostal', 'MedicofacturacionCodigopostal', 'VARCHAR', false, 45, null);
        $this->addColumn('medicofacturacion_telefono', 'MedicofacturacionTelefono', 'VARCHAR', false, 45, null);
        $this->addColumn('medicofacturacion_email', 'MedicofacturacionEmail', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Medico', 'Medico', RelationMap::MANY_TO_ONE, array('idmedico' => 'idmedico', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // MedicofacturacionTableMap
