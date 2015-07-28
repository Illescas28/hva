<?php



/**
 * This class defines the structure of the 'referenciaabono' table.
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
class ReferenciaabonoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.ReferenciaabonoTableMap';

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
        $this->setName('referenciaabono');
        $this->setPhpName('Referenciaabono');
        $this->setClassname('Referenciaabono');
        $this->setPackage('hva');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('idreferenciaabono', 'Idreferenciaabono', 'INTEGER', true, null, null);
        $this->addForeignKey('idbanco', 'Idbanco', 'INTEGER', 'banco', 'idbanco', false, null, null);
        $this->addColumn('referenciaabono_archivo', 'ReferenciaabonoArchivo', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Banco', 'Banco', RelationMap::MANY_TO_ONE, array('idbanco' => 'idbanco', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ReferenciaabonoTableMap
