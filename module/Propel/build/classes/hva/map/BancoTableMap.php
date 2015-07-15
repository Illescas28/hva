<?php



/**
 * This class defines the structure of the 'banco' table.
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
class BancoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.BancoTableMap';

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
        $this->setName('banco');
        $this->setPhpName('Banco');
        $this->setClassname('Banco');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idbanco', 'Idbanco', 'INTEGER', true, null, null);
        $this->addForeignKey('idconceptobanco', 'Idconceptobanco', 'INTEGER', 'conceptobanco', 'idbancotransaccion', true, null, null);
        $this->addColumn('banco_fecha', 'BancoFecha', 'VARCHAR', true, 100, null);
        $this->addColumn('banco_tipomovimiento', 'BancoTipomovimiento', 'CHAR', true, null, null);
        $this->getColumn('banco_tipomovimiento', false)->setValueSet(array (
  0 => 'cargo',
  1 => 'abono',
));
        $this->addColumn('banco_cantidad', 'BancoCantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('banco_balance', 'BancoBalance', 'DECIMAL', true, 10, 0);
        $this->addColumn('banco_comprobante', 'BancoComprobante', 'VARCHAR', false, 255, null);
        $this->addColumn('banco_nota', 'BancoNota', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Conceptobanco', 'Conceptobanco', RelationMap::MANY_TO_ONE, array('idconceptobanco' => 'idbancotransaccion', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Referenciaabono', 'Referenciaabono', RelationMap::ONE_TO_MANY, array('idbanco' => 'idbanco', ), 'CASCADE', 'CASCADE', 'Referenciaabonos');
    } // buildRelations()

} // BancoTableMap
