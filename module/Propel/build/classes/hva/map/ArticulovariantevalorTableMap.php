<?php



/**
 * This class defines the structure of the 'articulovariantevalor' table.
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
class ArticulovariantevalorTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.ArticulovariantevalorTableMap';

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
        $this->setName('articulovariantevalor');
        $this->setPhpName('Articulovariantevalor');
        $this->setClassname('Articulovariantevalor');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idarticulovariantevalor', 'Idarticulovariantevalor', 'INTEGER', true, null, null);
        $this->addForeignKey('idarticulo', 'Idarticulo', 'INTEGER', 'articulo', 'idarticulo', true, null, null);
        $this->addForeignKey('idpropiedad', 'Idpropiedad', 'INTEGER', 'propiedad', 'idpropiedad', true, null, null);
        $this->addForeignKey('idpropiedadvalor', 'Idpropiedadvalor', 'INTEGER', 'propiedadvalor', 'idpropiedadvalor', true, null, null);
        $this->addForeignKey('idarticulovariante', 'Idarticulovariante', 'INTEGER', 'articulovariante', 'idarticulovariante', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Articulo', 'Articulo', RelationMap::MANY_TO_ONE, array('idarticulo' => 'idarticulo', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Articulovariante', 'Articulovariante', RelationMap::MANY_TO_ONE, array('idarticulovariante' => 'idarticulovariante', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Propiedad', 'Propiedad', RelationMap::MANY_TO_ONE, array('idpropiedad' => 'idpropiedad', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Propiedadvalor', 'Propiedadvalor', RelationMap::MANY_TO_ONE, array('idpropiedadvalor' => 'idpropiedadvalor', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ArticulovariantevalorTableMap
