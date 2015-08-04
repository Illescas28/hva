<?php



/**
 * This class defines the structure of the 'factura' table.
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
class FacturaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.FacturaTableMap';

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
        $this->setName('factura');
        $this->setPhpName('Factura');
        $this->setClassname('Factura');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idfactura', 'Idfactura', 'INTEGER', true, null, null);
        $this->addForeignKey('iddatosfacturacion', 'Iddatosfacturacion', 'INTEGER', 'pacientefacturacion', 'idpacientefacturacion', true, null, null);
        $this->addForeignKey('idconsulta', 'Idconsulta', 'INTEGER', 'consulta', 'idconsulta', false, null, null);
        $this->addForeignKey('idadmision', 'Idadmision', 'INTEGER', 'admision', 'idadmision', false, null, null);
        $this->addForeignKey('idventa', 'Idventa', 'INTEGER', 'venta', 'idventa', false, null, null);
        $this->addColumn('factura_url_xml', 'FacturaUrlXml', 'VARCHAR', true, 45, null);
        $this->addColumn('factura_url_pdf', 'FacturaUrlPdf', 'VARCHAR', true, 45, null);
        $this->addColumn('factura_fecha', 'FacturaFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('factura_sellosat', 'FacturaSellosat', 'LONGVARCHAR', true, null, null);
        $this->addColumn('factura_certificadosat', 'FacturaCertificadosat', 'LONGVARCHAR', true, null, null);
        $this->addColumn('factura_cadenaoriginal', 'FacturaCadenaoriginal', 'VARCHAR', false, 45, null);
        $this->addColumn('factura_cfdi', 'FacturaCfdi', 'VARCHAR', true, 45, null);
        $this->addColumn('factura_mensaje', 'FacturaMensaje', 'VARCHAR', true, 45, null);
        $this->addColumn('factura_qrcode', 'FacturaQrcode', 'VARCHAR', false, 45, null);
        $this->addColumn('factura_tipodepago', 'FacturaTipodepago', 'CHAR', false, null, null);
        $this->getColumn('factura_tipodepago', false)->setValueSet(array (
  0 => 'unico',
  1 => 'parcial',
));
        $this->addColumn('factura_status', 'FacturaStatus', 'CHAR', false, null, null);
        $this->getColumn('factura_status', false)->setValueSet(array (
  0 => 'creada',
  1 => 'cancelada',
));
        $this->addColumn('factura_tipo', 'FacturaTipo', 'CHAR', false, null, null);
        $this->getColumn('factura_tipo', false)->setValueSet(array (
  0 => 'ingreso',
  1 => 'egreso',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Admision', 'Admision', RelationMap::MANY_TO_ONE, array('idadmision' => 'idadmision', ), null, null);
        $this->addRelation('Consulta', 'Consulta', RelationMap::MANY_TO_ONE, array('idconsulta' => 'idconsulta', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Pacientefacturacion', 'Pacientefacturacion', RelationMap::MANY_TO_ONE, array('iddatosfacturacion' => 'idpacientefacturacion', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Venta', 'Venta', RelationMap::MANY_TO_ONE, array('idventa' => 'idventa', ), null, null);
    } // buildRelations()

} // FacturaTableMap
