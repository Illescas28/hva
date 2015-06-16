<?php



/**
 * This class defines the structure of the 'propiedadvalor' table.
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
class PropiedadvalorTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.PropiedadvalorTableMap';

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
        $this->setName('propiedadvalor');
        $this->setPhpName('Propiedadvalor');
        $this->setClassname('Propiedadvalor');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idpropiedadvalor', 'Idpropiedadvalor', 'INTEGER', true, null, null);
        $this->addForeignKey('idpropiedad', 'Idpropiedad', 'INTEGER', 'propiedad', 'idpropiedad', true, null, null);
        $this->addForeignKey('idarticulo', 'Idarticulo', 'INTEGER', 'articulo', 'idarticulo', true, null, null);
        $this->addColumn('propiedadvalor_nombre', 'PropiedadvalorNombre', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Articulo', 'Articulo', RelationMap::MANY_TO_ONE, array('idarticulo' => 'idarticulo', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Propiedad', 'Propiedad', RelationMap::MANY_TO_ONE, array('idpropiedad' => 'idpropiedad', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Articulovariantevalor', 'Articulovariantevalor', RelationMap::ONE_TO_MANY, array('idpropiedadvalor' => 'idpropiedadvalor', ), 'CASCADE', 'CASCADE', 'Articulovariantevalors');
    } // buildRelations()

} // PropiedadvalorTableMap
