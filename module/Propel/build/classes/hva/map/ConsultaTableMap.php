<?php



/**
 * This class defines the structure of the 'consulta' table.
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
class ConsultaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.ConsultaTableMap';

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
        $this->setName('consulta');
        $this->setPhpName('Consulta');
        $this->setClassname('Consulta');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idconsulta', 'Idconsulta', 'INTEGER', true, null, null);
        $this->addForeignKey('idpaciente', 'Idpaciente', 'INTEGER', 'paciente', 'idpaciente', true, null, null);
        $this->addForeignKey('idmedico', 'Idmedico', 'INTEGER', 'medico', 'idmedico', true, null, null);
        $this->addForeignKey('idconsultorio', 'Idconsultorio', 'INTEGER', 'consultorio', 'idconsultorio', true, null, null);
        $this->addColumn('consulta_fecha', 'ConsultaFecha', 'DATE', true, null, null);
        $this->addColumn('consulta_hora', 'ConsultaHora', 'TIME', true, null, null);
        $this->addColumn('consulta_diagnostico', 'ConsultaDiagnostico', 'LONGVARCHAR', false, null, null);
        $this->addColumn('consulta_observaciones', 'ConsultaObservaciones', 'LONGVARCHAR', false, null, null);
        $this->addColumn('consulta_status', 'ConsultaStatus', 'CHAR', false, null, 'pendiente');
        $this->getColumn('consulta_status', false)->setValueSet(array (
  0 => 'pagada',
  1 => 'no pagada',
  2 => 'pendiente',
));
        $this->addColumn('consulta_total', 'ConsultaTotal', 'DECIMAL', false, 10, null);
        $this->addColumn('consulta_tipodepago', 'ConsultaTipodepago', 'CHAR', false, null, null);
        $this->getColumn('consulta_tipodepago', false)->setValueSet(array (
  0 => 'efectivo',
  1 => 'tarjeta debito',
  2 => 'tarjeta credito',
  3 => 'cheque',
));
        $this->addColumn('consulta_referenciapago', 'ConsultaReferenciapago', 'VARCHAR', false, 45, null);
        $this->addColumn('consulta_facturada', 'ConsultaFacturada', 'BOOLEAN', false, 1, null);
        $this->addColumn('consulta_registrada', 'ConsultaRegistrada', 'BOOLEAN', false, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Consultorio', 'Consultorio', RelationMap::MANY_TO_ONE, array('idconsultorio' => 'idconsultorio', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Medico', 'Medico', RelationMap::MANY_TO_ONE, array('idmedico' => 'idmedico', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Paciente', 'Paciente', RelationMap::MANY_TO_ONE, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Cargoconsulta', 'Cargoconsulta', RelationMap::ONE_TO_MANY, array('idconsulta' => 'idconsulta', ), 'CASCADE', 'CASCADE', 'Cargoconsultas');
        $this->addRelation('Consultaanticipo', 'Consultaanticipo', RelationMap::ONE_TO_MANY, array('idconsulta' => 'idconsulta', ), 'CASCADE', 'CASCADE', 'Consultaanticipos');
        $this->addRelation('Factura', 'Factura', RelationMap::ONE_TO_MANY, array('idconsulta' => 'idconsulta', ), 'CASCADE', 'CASCADE', 'Facturas');
    } // buildRelations()

} // ConsultaTableMap
