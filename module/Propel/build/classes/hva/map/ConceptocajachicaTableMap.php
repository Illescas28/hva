<?php



/**
 * This class defines the structure of the 'conceptocajachica' table.
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
class ConceptocajachicaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.ConceptocajachicaTableMap';

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
        $this->setName('conceptocajachica');
        $this->setPhpName('Conceptocajachica');
        $this->setClassname('Conceptocajachica');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idconceptocajachica', 'Idconceptocajachica', 'INTEGER', true, null, null);
        $this->addColumn('conceptocajachica_nombre', 'ConceptocajachicaNombre', 'VARCHAR', true, 45, null);
        $this->addColumn('conceptocajachica_descripcion', 'ConceptocajachicaDescripcion', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Cajachica', 'Cajachica', RelationMap::ONE_TO_MANY, array('idconceptocajachica' => 'idconceptocajachica', ), 'CASCADE', 'CASCADE', 'Cajachicas');
    } // buildRelations()

} // ConceptocajachicaTableMap
