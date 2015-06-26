<?php



/**
 * This class defines the structure of the 'empleado' table.
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
class EmpleadoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.EmpleadoTableMap';

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
        $this->setName('empleado');
        $this->setPhpName('Empleado');
        $this->setClassname('Empleado');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idempleado', 'Idempleado', 'INTEGER', true, null, null);
        $this->addForeignKey('idrol', 'Idrol', 'INTEGER', 'rol', 'idrol', true, null, null);
        $this->addColumn('empleado_nombre', 'EmpleadoNombre', 'VARCHAR', true, 45, null);
        $this->addColumn('empleado_apellidopaterno', 'EmpleadoApellidopaterno', 'VARCHAR', true, 45, null);
        $this->addColumn('empleado_apellidomaterno', 'EmpleadoApellidomaterno', 'VARCHAR', true, 45, null);
        $this->addColumn('empleado_nombreusuario', 'EmpleadoNombreusuario', 'VARCHAR', true, 45, null);
        $this->addColumn('empleado_password', 'EmpleadoPassword', 'VARCHAR', true, 45, null);
        $this->addColumn('empleado_email', 'EmpleadoEmail', 'VARCHAR', true, 100, null);
        $this->addColumn('empleado_imagen', 'EmpleadoImagen', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Rol', 'Rol', RelationMap::MANY_TO_ONE, array('idrol' => 'idrol', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Empleadofacturacion', 'Empleadofacturacion', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Empleadofacturacions');
    } // buildRelations()

} // EmpleadoTableMap
