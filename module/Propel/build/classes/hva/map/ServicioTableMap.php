<?php



/**
 * This class defines the structure of the 'servicio' table.
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
class ServicioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.ServicioTableMap';

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
        $this->setName('servicio');
        $this->setPhpName('Servicio');
        $this->setClassname('Servicio');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idservicio', 'Idservicio', 'INTEGER', true, null, null);
        $this->addColumn('servicio_nombre', 'ServicioNombre', 'VARCHAR', true, 300, null);
        $this->addColumn('servicio_descripcion', 'ServicioDescripcion', 'LONGVARCHAR', true, null, null);
        $this->addColumn('servicio_costo', 'ServicioCosto', 'DECIMAL', true, 10, null);
        $this->addColumn('servicio_precio', 'ServicioPrecio', 'DECIMAL', true, 10, null);
        $this->addColumn('servicio_iva', 'ServicioIva', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Cargoadmision', 'Cargoadmision', RelationMap::ONE_TO_MANY, array('idservicio' => 'idservicio', ), 'CASCADE', 'CASCADE', 'Cargoadmisions');
        $this->addRelation('Cargoconsulta', 'Cargoconsulta', RelationMap::ONE_TO_MANY, array('idservicio' => 'idservicio', ), 'CASCADE', 'CASCADE', 'Cargoconsultas');
        $this->addRelation('Cargoventa', 'Cargoventa', RelationMap::ONE_TO_MANY, array('idservicio' => 'idservicio', ), 'CASCADE', 'CASCADE', 'Cargoventas');
    } // buildRelations()

} // ServicioTableMap
