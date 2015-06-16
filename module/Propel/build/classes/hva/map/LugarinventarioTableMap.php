<?php



/**
 * This class defines the structure of the 'lugarinventario' table.
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
class LugarinventarioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.LugarinventarioTableMap';

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
        $this->setName('lugarinventario');
        $this->setPhpName('Lugarinventario');
        $this->setClassname('Lugarinventario');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idlugarinventario', 'Idlugarinventario', 'INTEGER', true, null, null);
        $this->addForeignKey('idlugar', 'Idlugar', 'INTEGER', 'lugar', 'idlugar', true, null, null);
        $this->addForeignKey('idordencompradetalle', 'Idordencompradetalle', 'INTEGER', 'ordencompradetalle', 'idordencompradetalle', true, null, null);
        $this->addColumn('lugarinventario_cantidad', 'LugarinventarioCantidad', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Lugar', 'Lugar', RelationMap::MANY_TO_ONE, array('idlugar' => 'idlugar', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Ordencompradetalle', 'Ordencompradetalle', RelationMap::MANY_TO_ONE, array('idordencompradetalle' => 'idordencompradetalle', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Cargoadmision', 'Cargoadmision', RelationMap::ONE_TO_MANY, array('idlugarinventario' => 'idlugarinventario', ), 'CASCADE', 'CASCADE', 'Cargoadmisions');
        $this->addRelation('Cargoconsulta', 'Cargoconsulta', RelationMap::ONE_TO_MANY, array('idlugarinventario' => 'idlugarinventario', ), 'CASCADE', 'CASCADE', 'Cargoconsultas');
        $this->addRelation('Cargoventa', 'Cargoventa', RelationMap::ONE_TO_MANY, array('idlugarinventario' => 'idlugarinventario', ), 'CASCADE', 'CASCADE', 'Cargoventas');
        $this->addRelation('Traspasodetalles', 'Traspasodetalles', RelationMap::ONE_TO_MANY, array('idlugarinventario' => 'idlugarinventario', ), 'CASCADE', 'CASCADE', 'Traspasodetalless');
    } // buildRelations()

} // LugarinventarioTableMap
