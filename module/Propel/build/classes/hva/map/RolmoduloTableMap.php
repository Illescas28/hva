<?php



/**
 * This class defines the structure of the 'rolmodulo' table.
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
class RolmoduloTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.RolmoduloTableMap';

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
        $this->setName('rolmodulo');
        $this->setPhpName('Rolmodulo');
        $this->setClassname('Rolmodulo');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idrolmodulo', 'Idrolmodulo', 'INTEGER', true, null, null);
        $this->addForeignKey('idrol', 'Idrol', 'INTEGER', 'rol', 'idrol', true, null, null);
        $this->addForeignKey('idmodulo', 'Idmodulo', 'INTEGER', 'modulo', 'idmodulo', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Modulo', 'Modulo', RelationMap::MANY_TO_ONE, array('idmodulo' => 'idmodulo', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Rol', 'Rol', RelationMap::MANY_TO_ONE, array('idrol' => 'idrol', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // RolmoduloTableMap
