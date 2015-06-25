<?php



/**
 * This class defines the structure of the 'cargoconsulta' table.
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
class CargoconsultaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.CargoconsultaTableMap';

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
        $this->setName('cargoconsulta');
        $this->setPhpName('Cargoconsulta');
        $this->setClassname('Cargoconsulta');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcargoconsulta', 'Idcargoconsulta', 'INTEGER', true, null, null);
        $this->addForeignKey('idconsulta', 'Idconsulta', 'INTEGER', 'consulta', 'idconsulta', true, null, null);
        $this->addForeignKey('idlugarinventario', 'Idlugarinventario', 'INTEGER', 'lugarinventario', 'idlugarinventario', false, null, null);
        $this->addForeignKey('idservicio', 'Idservicio', 'INTEGER', 'servicio', 'idservicio', false, null, null);
        $this->addColumn('cargoconsulta_tipo', 'CargoconsultaTipo', 'CHAR', true, null, null);
        $this->getColumn('cargoconsulta_tipo', false)->setValueSet(array (
  0 => 'articulo',
  1 => 'servicio',
));
        $this->addColumn('cargoconsulta_fecha', 'CargoconsultaFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('cantidad', 'Cantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('monto', 'Monto', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Consulta', 'Consulta', RelationMap::MANY_TO_ONE, array('idconsulta' => 'idconsulta', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Lugarinventario', 'Lugarinventario', RelationMap::MANY_TO_ONE, array('idlugarinventario' => 'idlugarinventario', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Servicio', 'Servicio', RelationMap::MANY_TO_ONE, array('idservicio' => 'idservicio', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CargoconsultaTableMap
