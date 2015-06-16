<?php



/**
 * This class defines the structure of the 'cita' table.
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
class CitaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.CitaTableMap';

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
        $this->setName('cita');
        $this->setPhpName('Cita');
        $this->setClassname('Cita');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcita', 'Idcita', 'INTEGER', true, null, null);
        $this->addForeignKey('idpaciente', 'Idpaciente', 'INTEGER', 'paciente', 'idpaciente', true, null, null);
        $this->addForeignKey('idmedico', 'Idmedico', 'INTEGER', 'medico', 'idmedico', false, null, null);
        $this->addColumn('cita_fecha', 'CitaFecha', 'DATE', true, null, null);
        $this->addColumn('cita_hora', 'CitaHora', 'TIME', true, null, null);
        $this->addColumn('cita_descripcion', 'CitaDescripcion', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Medico', 'Medico', RelationMap::MANY_TO_ONE, array('idmedico' => 'idmedico', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Paciente', 'Paciente', RelationMap::MANY_TO_ONE, array('idpaciente' => 'idpaciente', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CitaTableMap
