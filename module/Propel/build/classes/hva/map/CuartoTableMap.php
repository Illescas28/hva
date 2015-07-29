<?php



/**
 * This class defines the structure of the 'cuarto' table.
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
class CuartoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.CuartoTableMap';

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
        $this->setName('cuarto');
        $this->setPhpName('Cuarto');
        $this->setClassname('Cuarto');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcuarto', 'Idcuarto', 'INTEGER', true, null, null);
        $this->addColumn('cuarto_nombre', 'CuartoNombre', 'VARCHAR', true, 300, null);
        $this->addColumn('cuarto_descripcion', 'CuartoDescripcion', 'LONGVARCHAR', false, null, null);
        $this->addColumn('cuarto_enuso', 'CuartoEnuso', 'BOOLEAN', true, 1, null);
        $this->addColumn('cuarto_extension', 'CuartoExtension', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Admision', 'Admision', RelationMap::ONE_TO_MANY, array('idcuarto' => 'idcuarto', ), 'CASCADE', 'CASCADE', 'Admisions');
    } // buildRelations()

} // CuartoTableMap
