<?php



/**
 * This class defines the structure of the 'bancotransaccion' table.
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
class BancotransaccionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.BancotransaccionTableMap';

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
        $this->setName('bancotransaccion');
        $this->setPhpName('Bancotransaccion');
        $this->setClassname('Bancotransaccion');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idbancotransaccion', 'Idbancotransaccion', 'INTEGER', true, null, null);
        $this->addForeignKey('idbanco', 'Idbanco', 'INTEGER', 'banco', 'idbanco', true, null, null);
        $this->addColumn('bancotransaccion_tipo', 'BancotransaccionTipo', 'CHAR', true, null, null);
        $this->getColumn('bancotransaccion_tipo', false)->setValueSet(array (
  0 => 'egreso',
  1 => 'ingreso',
));
        $this->addColumn('bancotransaccion_referencia', 'BancotransaccionReferencia', 'CHAR', true, null, null);
        $this->getColumn('bancotransaccion_referencia', false)->setValueSet(array (
  0 => 'caja chica',
  1 => 'consulta',
  2 => 'compra',
  3 => 'admision',
));
        $this->addColumn('idtransaccion', 'Idtransaccion', 'INTEGER', false, null, null);
        $this->addColumn('bancotransaccion_cantidad', 'BancotransaccionCantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('bancotransaccion_fecha', 'BancotransaccionFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('bancotransaccion_nota', 'BancotransaccionNota', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Banco', 'Banco', RelationMap::MANY_TO_ONE, array('idbanco' => 'idbanco', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // BancotransaccionTableMap
