<?php



/**
 * This class defines the structure of the 'cajachicadetalle' table.
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
class CajachicadetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.CajachicadetalleTableMap';

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
        $this->setName('cajachicadetalle');
        $this->setPhpName('Cajachicadetalle');
        $this->setClassname('Cajachicadetalle');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcajachicadetalle', 'Idcajachicadetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idcajachica', 'Idcajachica', 'INTEGER', 'cajachica', 'idcajachica', true, null, null);
        $this->addForeignKey('idgasto', 'Idgasto', 'INTEGER', 'gasto', 'idgasto', true, null, null);
        $this->addColumn('cajachicadetalle_cantidad', 'CajachicadetalleCantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('cajachicadetalle_monto', 'CajachicadetalleMonto', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Cajachica', 'Cajachica', RelationMap::MANY_TO_ONE, array('idcajachica' => 'idcajachica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Gasto', 'Gasto', RelationMap::MANY_TO_ONE, array('idgasto' => 'idgasto', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CajachicadetalleTableMap
