<?php



/**
 * This class defines the structure of the 'cargoventa' table.
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
class CargoventaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.CargoventaTableMap';

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
        $this->setName('cargoventa');
        $this->setPhpName('Cargoventa');
        $this->setClassname('Cargoventa');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcargoventa', 'Idcargoventa', 'INTEGER', true, null, null);
        $this->addForeignKey('idventa', 'Idventa', 'INTEGER', 'venta', 'idventa', true, null, null);
        $this->addForeignKey('idlugarinventario', 'Idlugarinventario', 'INTEGER', 'lugarinventario', 'idlugarinventario', false, null, null);
        $this->addForeignKey('idservicio', 'Idservicio', 'INTEGER', 'servicio', 'idservicio', false, null, null);
        $this->addColumn('cargoventa_tipo', 'CargoventaTipo', 'CHAR', true, null, null);
        $this->getColumn('cargoventa_tipo', false)->setValueSet(array (
  0 => 'articulo',
  1 => 'servicio',
));
        $this->addColumn('cargoventa_fecha', 'CargoventaFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('cantidad', 'Cantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('monto', 'Monto', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Lugarinventario', 'Lugarinventario', RelationMap::MANY_TO_ONE, array('idlugarinventario' => 'idlugarinventario', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Servicio', 'Servicio', RelationMap::MANY_TO_ONE, array('idservicio' => 'idservicio', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Venta', 'Venta', RelationMap::MANY_TO_ONE, array('idventa' => 'idventa', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CargoventaTableMap
