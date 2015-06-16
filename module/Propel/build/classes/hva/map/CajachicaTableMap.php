<?php



/**
 * This class defines the structure of the 'cajachica' table.
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
class CajachicaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.CajachicaTableMap';

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
        $this->setName('cajachica');
        $this->setPhpName('Cajachica');
        $this->setClassname('Cajachica');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcajachica', 'Idcajachica', 'INTEGER', true, null, null);
        $this->addColumn('cajachica_nombre', 'CajachicaNombre', 'VARCHAR', true, 45, null);
        $this->addColumn('cajachica_descripcion', 'CajachicaDescripcion', 'VARCHAR', false, 45, null);
        $this->addColumn('cajachica_fechainicio', 'CajachicaFechainicio', 'DATE', true, null, null);
        $this->addColumn('cajachica_fechafinal', 'CajachicaFechafinal', 'DATE', false, null, null);
        $this->addColumn('cajachica_total', 'CajachicaTotal', 'DECIMAL', false, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Cajachicadetalle', 'Cajachicadetalle', RelationMap::ONE_TO_MANY, array('idcajachica' => 'idcajachica', ), 'CASCADE', 'CASCADE', 'Cajachicadetalles');
        $this->addRelation('Venta', 'Venta', RelationMap::ONE_TO_MANY, array('idcajachica' => 'idcajachica', ), 'CASCADE', 'CASCADE', 'Ventas');
    } // buildRelations()

} // CajachicaTableMap
