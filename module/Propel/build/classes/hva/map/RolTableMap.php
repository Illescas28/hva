<?php



/**
 * This class defines the structure of the 'rol' table.
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
class RolTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.RolTableMap';

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
        $this->setName('rol');
        $this->setPhpName('Rol');
        $this->setClassname('Rol');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idrol', 'Idrol', 'INTEGER', true, null, null);
        $this->addColumn('rol_nombre', 'RolNombre', 'VARCHAR', true, 100, null);
        $this->addColumn('rol_descripcion', 'RolDescripcion', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empleado', 'Empleado', RelationMap::ONE_TO_MANY, array('idrol' => 'idrol', ), 'CASCADE', 'CASCADE', 'Empleados');
        $this->addRelation('Rolmodulo', 'Rolmodulo', RelationMap::ONE_TO_MANY, array('idrol' => 'idrol', ), 'CASCADE', 'CASCADE', 'Rolmodulos');
    } // buildRelations()

} // RolTableMap
