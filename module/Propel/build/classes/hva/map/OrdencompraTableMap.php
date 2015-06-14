<?php



/**
 * This class defines the structure of the 'ordencompra' table.
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
class OrdencompraTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.OrdencompraTableMap';

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
        $this->setName('ordencompra');
        $this->setPhpName('Ordencompra');
        $this->setClassname('Ordencompra');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idordencompra', 'Idordencompra', 'INTEGER', true, null, null);
        $this->addForeignKey('idproveedor', 'Idproveedor', 'INTEGER', 'proveedor', 'idproveedor', true, null, null);
        $this->addColumn('ordencompra_nofactura', 'OrdencompraNofactura', 'VARCHAR', true, 45, null);
        $this->addColumn('ordencompra_facturapdf', 'OrdencompraFacturapdf', 'LONGVARCHAR', false, null, null);
        $this->addColumn('ordencompra_fecha', 'OrdencompraFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('ordencompra_importe', 'OrdencompraImporte', 'DECIMAL', true, 10, null);
        $this->addColumn('ordencompra_status', 'OrdencompraStatus', 'CHAR', true, null, null);
        $this->getColumn('ordencompra_status', false)->setValueSet(array (
  0 => 'pagada',
  1 => 'no pagada',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Proveedor', 'Proveedor', RelationMap::MANY_TO_ONE, array('idproveedor' => 'idproveedor', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Ordencompradetalle', 'Ordencompradetalle', RelationMap::ONE_TO_MANY, array('idordencompra' => 'idordencompra', ), 'CASCADE', 'CASCADE', 'Ordencompradetalles');
    } // buildRelations()

} // OrdencompraTableMap
