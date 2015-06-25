<?php



/**
 * This class defines the structure of the 'gasto' table.
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
class GastoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.GastoTableMap';

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
        $this->setName('gasto');
        $this->setPhpName('Gasto');
        $this->setClassname('Gasto');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idgasto', 'Idgasto', 'INTEGER', true, null, null);
        $this->addColumn('gasto_nombre', 'GastoNombre', 'VARCHAR', true, 45, null);
        $this->addColumn('gasto_descripcion', 'GastoDescripcion', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Cajachicadetalle', 'Cajachicadetalle', RelationMap::ONE_TO_MANY, array('idgasto' => 'idgasto', ), 'CASCADE', 'CASCADE', 'Cajachicadetalles');
    } // buildRelations()

} // GastoTableMap
