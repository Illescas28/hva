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
        $this->addColumn('banco_nombre', 'BancoNombre', 'VARCHAR', true, 100, null);
        $this->addColumn('banco_cuenta', 'BancoCuenta', 'VARCHAR', true, 45, null);
        $this->addColumn('banco_descripcion', 'BancoDescripcion', 'LONGVARCHAR', false, null, null);
        $this->addColumn('banco_balance', 'BancoBalance', 'DECIMAL', true, 10, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Bancotransaccion', 'Bancotransaccion', RelationMap::ONE_TO_MANY, array('idbanco' => 'idbanco', ), 'CASCADE', 'CASCADE', 'Bancotransaccions');
    } // buildRelations()

} // BancoTableMap
