<?php



/**
 * This class defines the structure of the 'empleadofacturacion' table.
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
class EmpleadofacturacionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.EmpleadofacturacionTableMap';

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
        $this->setName('empleadofacturacion');
        $this->setPhpName('Empleadofacturacion');
        $this->setClassname('Empleadofacturacion');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idempleadofacturacion', 'Idempleadofacturacion', 'INTEGER', true, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addColumn('empleadofacturacion_razonsocial', 'EmpleadofacturacionRazonsocial', 'VARCHAR', false, 45, null);
        $this->addColumn('empleadofacturacion_rfc', 'EmpleadofacturacionRfc', 'VARCHAR', false, 45, null);
        $this->addColumn('empleadofacturacion_calle', 'EmpleadofacturacionCalle', 'VARCHAR', false, 45, null);
        $this->addColumn('empleadofacturacion_noexterior', 'EmpleadofacturacionNoexterior', 'VARCHAR', false, 45, null);
        $this->addColumn('empleadofacturacion_nointerior', 'EmpleadofacturacionNointerior', 'VARCHAR', false, 45, null);
        $this->addColumn('empleadofacturacion_colonia', 'EmpleadofacturacionColonia', 'VARCHAR', false, 45, null);
        $this->addColumn('empleadofacturacion_ciudad', 'EmpleadofacturacionCiudad', 'VARCHAR', false, 45, null);
        $this->addColumn('empleadofacturacion_estado', 'EmpleadofacturacionEstado', 'VARCHAR', false, 45, null);
        $this->addColumn('empleadofacturacion_pais', 'EmpleadofacturacionPais', 'VARCHAR', false, 45, null);
        $this->addColumn('empleadofacturacion_codigopostal', 'EmpleadofacturacionCodigopostal', 'VARCHAR', false, 45, null);
        $this->addColumn('empleadofacturacion_telefono', 'EmpleadofacturacionTelefono', 'VARCHAR', false, 45, null);
        $this->addColumn('empleadofacturacion_email', 'EmpleadofacturacionEmail', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // EmpleadofacturacionTableMap
