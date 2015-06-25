<?php



/**
 * This class defines the structure of the 'traspasodetalles' table.
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
class TraspasodetallesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.TraspasodetallesTableMap';

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
        $this->setName('traspasodetalles');
        $this->setPhpName('Traspasodetalles');
        $this->setClassname('Traspasodetalles');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idtraspasodetalles', 'Idtraspasodetalles', 'INTEGER', true, null, null);
        $this->addForeignKey('idtraspaso', 'Idtraspaso', 'INTEGER', 'traspaso', 'idinventariolugar', true, null, null);
        $this->addForeignKey('idlugarinventario', 'Idlugarinventario', 'INTEGER', 'lugarinventario', 'idlugarinventario', true, null, null);
        $this->addColumn('traspaso_cantidad', 'TraspasoCantidad', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Lugarinventario', 'Lugarinventario', RelationMap::MANY_TO_ONE, array('idlugarinventario' => 'idlugarinventario', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Traspaso', 'Traspaso', RelationMap::MANY_TO_ONE, array('idtraspaso' => 'idinventariolugar', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // TraspasodetallesTableMap
