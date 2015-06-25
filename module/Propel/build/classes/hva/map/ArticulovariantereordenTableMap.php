<?php



/**
 * This class defines the structure of the 'articulovariantereorden' table.
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
class ArticulovariantereordenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.ArticulovariantereordenTableMap';

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
        $this->setName('articulovariantereorden');
        $this->setPhpName('Articulovariantereorden');
        $this->setClassname('Articulovariantereorden');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idarticulovariantereorden', 'Idarticulovariantereorden', 'INTEGER', true, null, null);
        $this->addForeignKey('idlugar', 'Idlugar', 'INTEGER', 'lugar', 'idlugar', true, null, null);
        $this->addForeignKey('idarticulovariante', 'Idarticulovariante', 'INTEGER', 'articulovariante', 'idarticulovariante', true, null, null);
        $this->addColumn('minimo', 'Minimo', 'DECIMAL', true, 10, null);
        $this->addColumn('maximo', 'Maximo', 'DECIMAL', true, 10, null);
        $this->addColumn('reorden', 'Reorden', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Articulovariante', 'Articulovariante', RelationMap::MANY_TO_ONE, array('idarticulovariante' => 'idarticulovariante', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Lugar', 'Lugar', RelationMap::MANY_TO_ONE, array('idlugar' => 'idlugar', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ArticulovariantereordenTableMap
