<?php



/**
 * This class defines the structure of the 'modulo' table.
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
class ModuloTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.ModuloTableMap';

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
        $this->setName('modulo');
        $this->setPhpName('Modulo');
        $this->setClassname('Modulo');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idmodulo', 'Idmodulo', 'INTEGER', true, null, null);
        $this->addColumn('modulo_nombre', 'ModuloNombre', 'VARCHAR', true, 250, null);
        $this->addColumn('modulo_descripcion', 'ModuloDescripcion', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Rolmodulo', 'Rolmodulo', RelationMap::ONE_TO_MANY, array('idmodulo' => 'idmodulo', ), 'CASCADE', 'CASCADE', 'Rolmodulos');
    } // buildRelations()

} // ModuloTableMap
