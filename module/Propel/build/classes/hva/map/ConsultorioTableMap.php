<?php



/**
 * This class defines the structure of the 'consultorio' table.
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
class ConsultorioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.ConsultorioTableMap';

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
        $this->setName('consultorio');
        $this->setPhpName('Consultorio');
        $this->setClassname('Consultorio');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idconsultorio', 'Idconsultorio', 'INTEGER', true, null, null);
        $this->addColumn('consultorio_nombre', 'ConsultorioNombre', 'VARCHAR', true, 300, null);
        $this->addColumn('consultorio_descripcion', 'ConsultorioDescripcion', 'LONGVARCHAR', true, null, null);
        $this->addColumn('consultorio_enuso', 'ConsultorioEnuso', 'BOOLEAN', true, 1, null);
        $this->addColumn('consultorio_extension', 'ConsultorioExtension', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Consulta', 'Consulta', RelationMap::ONE_TO_MANY, array('idconsultorio' => 'idconsultorio', ), 'CASCADE', 'CASCADE', 'Consultas');
    } // buildRelations()

} // ConsultorioTableMap
