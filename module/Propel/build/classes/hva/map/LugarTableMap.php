<?php



/**
 * This class defines the structure of the 'lugar' table.
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
class LugarTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.LugarTableMap';

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
        $this->setName('lugar');
        $this->setPhpName('Lugar');
        $this->setClassname('Lugar');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idlugar', 'Idlugar', 'INTEGER', true, null, null);
        $this->addColumn('lugar_nombre', 'LugarNombre', 'VARCHAR', true, 45, null);
        $this->addColumn('lugar_descripcion', 'LugarDescripcion', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Articulovariantereorden', 'Articulovariantereorden', RelationMap::ONE_TO_MANY, array('idlugar' => 'idlugar', ), 'CASCADE', 'CASCADE', 'Articulovariantereordens');
        $this->addRelation('Lugarinventario', 'Lugarinventario', RelationMap::ONE_TO_MANY, array('idlugar' => 'idlugar', ), 'CASCADE', 'CASCADE', 'Lugarinventarios');
        $this->addRelation('TraspasoRelatedByIdlugardestinatario', 'Traspaso', RelationMap::ONE_TO_MANY, array('idlugar' => 'idlugardestinatario', ), 'CASCADE', 'CASCADE', 'TraspasosRelatedByIdlugardestinatario');
        $this->addRelation('TraspasoRelatedByIdlugarremitente', 'Traspaso', RelationMap::ONE_TO_MANY, array('idlugar' => 'idlugarremitente', ), 'CASCADE', 'CASCADE', 'TraspasosRelatedByIdlugarremitente');
    } // buildRelations()

} // LugarTableMap
