<?php



/**
 * This class defines the structure of the 'propiedad' table.
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
class PropiedadTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.PropiedadTableMap';

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
        $this->setName('propiedad');
        $this->setPhpName('Propiedad');
        $this->setClassname('Propiedad');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idpropiedad', 'Idpropiedad', 'INTEGER', true, null, null);
        $this->addForeignKey('idarticulo', 'Idarticulo', 'INTEGER', 'articulo', 'idarticulo', true, null, null);
        $this->addColumn('propiedad_nombre', 'PropiedadNombre', 'VARCHAR', true, 100, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Articulo', 'Articulo', RelationMap::MANY_TO_ONE, array('idarticulo' => 'idarticulo', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Articulovariantevalor', 'Articulovariantevalor', RelationMap::ONE_TO_MANY, array('idpropiedad' => 'idpropiedad', ), 'CASCADE', 'CASCADE', 'Articulovariantevalors');
        $this->addRelation('Propiedadvalor', 'Propiedadvalor', RelationMap::ONE_TO_MANY, array('idpropiedad' => 'idpropiedad', ), 'CASCADE', 'CASCADE', 'Propiedadvalors');
    } // buildRelations()

} // PropiedadTableMap
