<?php



/**
 * This class defines the structure of the 'venta' table.
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
class VentaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.VentaTableMap';

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
        $this->setName('venta');
        $this->setPhpName('Venta');
        $this->setClassname('Venta');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idventa', 'Idventa', 'INTEGER', true, null, null);
        $this->addForeignKey('idpaciente', 'Idpaciente', 'INTEGER', 'paciente', 'idpaciente', true, null, null);
        $this->addColumn('venta_fecha', 'VentaFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('venta_tipodepago', 'VentaTipodepago', 'CHAR', false, null, null);
        $this->getColumn('venta_tipodepago', false)->setValueSet(array (
  0 => 'efectivo',
  1 => 'tarjeta debito',
  2 => 'tarjeta credito',
  3 => 'cheque',
));
        $this->addColumn('venta_status', 'VentaStatus', 'CHAR', false, null, null);
        $this->getColumn('venta_status', false)->setValueSet(array (
  0 => 'pagada',
  1 => 'no pagada',
  2 => 'pendiente',
));
        $this->addColumn('venta_facturada', 'VentaFacturada', 'BOOLEAN', false, 1, null);
        $this->addColumn('venta_registrada', 'VentaRegistrada', 'BOOLEAN', false, 1, null);
        $this->addColumn('venta_total', 'VentaTotal', 'DECIMAL', false, 10, null);
        $this->addColumn('venta_referenciapago', 'VentaReferenciapago', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Paciente', 'Paciente', RelationMap::MANY_TO_ONE, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Cargoventa', 'Cargoventa', RelationMap::ONE_TO_MANY, array('idventa' => 'idventa', ), 'CASCADE', 'CASCADE', 'Cargoventas');
    } // buildRelations()

} // VentaTableMap
