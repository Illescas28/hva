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
        $this->addForeignKey('idconceptocajachica', 'Idconceptocajachica', 'INTEGER', 'conceptocajachica', 'idconceptocajachica', true, null, null);
        $this->addColumn('cajachica_tipomovimiento', 'CajachicaTipomovimiento', 'CHAR', true, null, null);
        $this->getColumn('cajachica_tipomovimiento', false)->setValueSet(array (
  0 => 'cargo',
  1 => 'abono',
));
        $this->addColumn('cajachica_cantidad', 'CajachicaCantidad', 'DECIMAL', false, 10, null);
        $this->addColumn('cajachica_fecha', 'CajachicaFecha', 'DATE', true, null, null);
        $this->addColumn('cajachica_balance', 'CajachicaBalance', 'DECIMAL', false, 10, null);
        $this->addColumn('cajachica_comprobante', 'CajachicaComprobante', 'VARCHAR', false, 45, null);
        $this->addColumn('cajachica_nota', 'CajachicaNota', 'LONGVARCHAR', false, null, null);
        $this->addColumn('cajachica_pacientedoctor', 'CajachicaPacientedoctor', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Conceptocajachica', 'Conceptocajachica', RelationMap::MANY_TO_ONE, array('idconceptocajachica' => 'idconceptocajachica', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CajachicaTableMap
