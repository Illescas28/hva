<?php



/**
 * This class defines the structure of the 'ordencompradetalle' table.
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
class OrdencompradetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.OrdencompradetalleTableMap';

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
        $this->setName('ordencompradetalle');
        $this->setPhpName('Ordencompradetalle');
        $this->setClassname('Ordencompradetalle');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idordencompradetalle', 'Idordencompradetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idordencompra', 'Idordencompra', 'INTEGER', 'ordencompra', 'idordencompra', true, null, null);
        $this->addForeignKey('idarticulovariante', 'Idarticulovariante', 'INTEGER', 'articulovariante', 'idarticulovariante', true, null, null);
        $this->addColumn('ordencompradetalle_cantidad', 'OrdencompradetalleCantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('ordencompradetalle_costo', 'OrdencompradetalleCosto', 'DECIMAL', true, 10, null);
        $this->addColumn('ordencompradetalle_precio', 'OrdencompradetallePrecio', 'DECIMAL', true, 10, null);
        $this->addColumn('ordencompradetalle_importe', 'OrdencompradetalleImporte', 'DECIMAL', true, 10, null);
        $this->addColumn('ordencompradetalle_caducidad', 'OrdencompradetalleCaducidad', 'DATE', false, null, null);
        $this->addColumn('ordencompradetalle_existencia', 'OrdencompradetalleExistencia', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Articulovariante', 'Articulovariante', RelationMap::MANY_TO_ONE, array('idarticulovariante' => 'idarticulovariante', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Ordencompra', 'Ordencompra', RelationMap::MANY_TO_ONE, array('idordencompra' => 'idordencompra', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Lugarinventario', 'Lugarinventario', RelationMap::ONE_TO_MANY, array('idordencompradetalle' => 'idordencompradetalle', ), 'CASCADE', 'CASCADE', 'Lugarinventarios');
    } // buildRelations()

} // OrdencompradetalleTableMap
