<?php



/**
 * This class defines the structure of the 'traspaso' table.
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
class TraspasoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.TraspasoTableMap';

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
        $this->setName('traspaso');
        $this->setPhpName('Traspaso');
        $this->setClassname('Traspaso');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idinventariolugar', 'Idinventariolugar', 'INTEGER', true, null, null);
        $this->addForeignPrimaryKey('idlugarremitente', 'Idlugarremitente', 'INTEGER' , 'lugar', 'idlugar', true, null, null);
        $this->addForeignPrimaryKey('idlugardestinatario', 'Idlugardestinatario', 'INTEGER' , 'lugar', 'idlugar', true, null, null);
        $this->addColumn('traspaso_fecha', 'TraspasoFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('traspaso_status', 'TraspasoStatus', 'CHAR', true, null, null);
        $this->getColumn('traspaso_status', false)->setValueSet(array (
  0 => 'recibido',
  1 => 'cancelado',
  2 => 'en transito',
  3 => 'no recibido',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('LugarRelatedByIdlugardestinatario', 'Lugar', RelationMap::MANY_TO_ONE, array('idlugardestinatario' => 'idlugar', ), 'CASCADE', 'CASCADE');
        $this->addRelation('LugarRelatedByIdlugarremitente', 'Lugar', RelationMap::MANY_TO_ONE, array('idlugarremitente' => 'idlugar', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Traspasodetalles', 'Traspasodetalles', RelationMap::ONE_TO_MANY, array('idinventariolugar' => 'idtraspaso', ), 'CASCADE', 'CASCADE', 'Traspasodetalless');
    } // buildRelations()

} // TraspasoTableMap
