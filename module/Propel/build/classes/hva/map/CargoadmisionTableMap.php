<?php



/**
 * This class defines the structure of the 'cargoadmision' table.
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
class CargoadmisionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.CargoadmisionTableMap';

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
        $this->setName('cargoadmision');
        $this->setPhpName('Cargoadmision');
        $this->setClassname('Cargoadmision');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcargoadmision', 'Idcargoadmision', 'INTEGER', true, null, null);
        $this->addForeignKey('idadmision', 'Idadmision', 'INTEGER', 'admision', 'idadmision', true, null, null);
        $this->addForeignKey('idlugarinventario', 'Idlugarinventario', 'INTEGER', 'lugarinventario', 'idlugarinventario', false, null, null);
        $this->addForeignKey('idservicio', 'Idservicio', 'INTEGER', 'servicio', 'idservicio', false, null, null);
        $this->addColumn('cargoadmision_tipo', 'CargoadmisionTipo', 'CHAR', true, null, null);
        $this->getColumn('cargoadmision_tipo', false)->setValueSet(array (
  0 => 'articulo',
  1 => 'servicio',
));
        $this->addColumn('cargoadmision_fecha', 'CargoadmisionFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('cargoadmision_cantidad', 'CargoadmisionCantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('cargoadmision_monto', 'CargoadmisionMonto', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Admision', 'Admision', RelationMap::MANY_TO_ONE, array('idadmision' => 'idadmision', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Lugarinventario', 'Lugarinventario', RelationMap::MANY_TO_ONE, array('idlugarinventario' => 'idlugarinventario', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Servicio', 'Servicio', RelationMap::MANY_TO_ONE, array('idservicio' => 'idservicio', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CargoadmisionTableMap
