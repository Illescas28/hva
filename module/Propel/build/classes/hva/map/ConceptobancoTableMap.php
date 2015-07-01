<?php



/**
 * This class defines the structure of the 'conceptobanco' table.
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
class ConceptobancoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.ConceptobancoTableMap';

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
        $this->setName('conceptobanco');
        $this->setPhpName('Conceptobanco');
        $this->setClassname('Conceptobanco');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idbancotransaccion', 'Idbancotransaccion', 'INTEGER', true, null, null);
        $this->addColumn('bancotransaccion_nombre', 'BancotransaccionNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('bancotransaccion_descripcion', 'BancotransaccionDescripcion', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Banco', 'Banco', RelationMap::ONE_TO_MANY, array('idbancotransaccion' => 'idconceptobanco', ), 'CASCADE', 'CASCADE', 'Bancos');
    } // buildRelations()

} // ConceptobancoTableMap
