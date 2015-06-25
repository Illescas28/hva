<?php



/**
 * This class defines the structure of the 'medicoespecialidad' table.
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
class MedicoespecialidadTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.MedicoespecialidadTableMap';

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
        $this->setName('medicoespecialidad');
        $this->setPhpName('Medicoespecialidad');
        $this->setClassname('Medicoespecialidad');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idmedicoespecialidad', 'Idmedicoespecialidad', 'INTEGER', true, null, null);
        $this->addForeignKey('idmedico', 'Idmedico', 'INTEGER', 'medico', 'idmedico', true, null, null);
        $this->addForeignKey('idespecialidad', 'Idespecialidad', 'INTEGER', 'especialidad', 'idespecialidad', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Especialidad', 'Especialidad', RelationMap::MANY_TO_ONE, array('idespecialidad' => 'idespecialidad', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Medico', 'Medico', RelationMap::MANY_TO_ONE, array('idmedico' => 'idmedico', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // MedicoespecialidadTableMap
