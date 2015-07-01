<?php



/**
 * This class defines the structure of the 'admision' table.
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
class AdmisionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.AdmisionTableMap';

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
        $this->setName('admision');
        $this->setPhpName('Admision');
        $this->setClassname('Admision');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idadmision', 'Idadmision', 'INTEGER', true, null, null);
        $this->addForeignKey('idpaciente', 'Idpaciente', 'INTEGER', 'paciente', 'idpaciente', true, null, null);
        $this->addForeignKey('idmedico', 'Idmedico', 'INTEGER', 'medico', 'idmedico', true, null, null);
        $this->addForeignKey('idcuarto', 'Idcuarto', 'INTEGER', 'cuarto', 'idcuarto', true, null, null);
        $this->addColumn('admision_fechaadmision', 'AdmisionFechaadmision', 'TIMESTAMP', true, null, null);
        $this->addColumn('admision_fechasalida', 'AdmisionFechasalida', 'TIMESTAMP', false, null, null);
        $this->addColumn('admision_diagnostico', 'AdmisionDiagnostico', 'LONGVARCHAR', false, null, null);
        $this->addColumn('admision_observaciones', 'AdmisionObservaciones', 'LONGVARCHAR', false, null, null);
        $this->addColumn('admision_status', 'AdmisionStatus', 'CHAR', false, null, 'pendiente');
        $this->getColumn('admision_status', false)->setValueSet(array (
  0 => 'pagada',
  1 => 'no pagada',
  2 => 'pendiente',
));
        $this->addColumn('admision_total', 'AdmisionTotal', 'DECIMAL', false, 10, null);
        $this->addColumn('admision_pagadaen', 'AdmisionPagadaen', 'TIMESTAMP', false, null, null);
        $this->addColumn('admision_tipodepago', 'AdmisionTipodepago', 'CHAR', false, null, null);
        $this->getColumn('admision_tipodepago', false)->setValueSet(array (
  0 => 'efectivo',
  1 => 'tarjeta debito',
  2 => 'tarjeta credito',
  3 => 'cheque',
  4 => 'no identificado',
));
        $this->addColumn('admision_referenciapago', 'AdmisionReferenciapago', 'VARCHAR', false, 45, null);
        $this->addColumn('admision_facturada', 'AdmisionFacturada', 'BOOLEAN', false, 1, null);
        $this->addColumn('admision_registrada', 'AdmisionRegistrada', 'BOOLEAN', false, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Cuarto', 'Cuarto', RelationMap::MANY_TO_ONE, array('idcuarto' => 'idcuarto', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Medico', 'Medico', RelationMap::MANY_TO_ONE, array('idmedico' => 'idmedico', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Paciente', 'Paciente', RelationMap::MANY_TO_ONE, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Admisionanticipo', 'Admisionanticipo', RelationMap::ONE_TO_MANY, array('idadmision' => 'idadmision', ), 'CASCADE', 'CASCADE', 'Admisionanticipos');
        $this->addRelation('Cargoadmision', 'Cargoadmision', RelationMap::ONE_TO_MANY, array('idadmision' => 'idadmision', ), 'CASCADE', 'CASCADE', 'Cargoadmisions');
    } // buildRelations()

} // AdmisionTableMap
