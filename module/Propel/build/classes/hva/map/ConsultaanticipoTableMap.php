<?php



/**
 * This class defines the structure of the 'consultaanticipo' table.
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
class ConsultaanticipoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.ConsultaanticipoTableMap';

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
        $this->setName('consultaanticipo');
        $this->setPhpName('Consultaanticipo');
        $this->setClassname('Consultaanticipo');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idconsultaanticipo', 'Idconsultaanticipo', 'INTEGER', true, null, null);
        $this->addForeignKey('idconsulta', 'Idconsulta', 'INTEGER', 'consulta', 'idconsulta', true, null, null);
        $this->addColumn('consultaanticipo_fecha', 'ConsultaanticipoFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('consultaanticipo_cantidad', 'ConsultaanticipoCantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('consultaanticipo_nota', 'ConsultaanticipoNota', 'LONGVARCHAR', false, null, null);
        $this->addColumn('consultaanticipo_tipo', 'ConsultaanticipoTipo', 'CHAR', false, null, null);
        $this->getColumn('consultaanticipo_tipo', false)->setValueSet(array (
  0 => 'Efectivo',
  1 => 'Tarjeta de debito',
  2 => 'Tarjeta de credito',
  3 => 'Cheque',
  4 => 'No identificado',
  5 => 'SPEI',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Consulta', 'Consulta', RelationMap::MANY_TO_ONE, array('idconsulta' => 'idconsulta', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ConsultaanticipoTableMap
