<?php



/**
 * This class defines the structure of the 'articulo' table.
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
class ArticuloTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.ArticuloTableMap';

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
        $this->setName('articulo');
        $this->setPhpName('Articulo');
        $this->setClassname('Articulo');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idarticulo', 'Idarticulo', 'INTEGER', true, null, null);
        $this->addForeignKey('idtipo', 'Idtipo', 'INTEGER', 'tipo', 'idtipo', true, null, null);
        $this->addColumn('articulo_nombre', 'ArticuloNombre', 'VARCHAR', false, 300, null);
        $this->addColumn('articulo_descripcion', 'ArticuloDescripcion', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Tipo', 'Tipo', RelationMap::MANY_TO_ONE, array('idtipo' => 'idtipo', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Articulovariante', 'Articulovariante', RelationMap::ONE_TO_MANY, array('idarticulo' => 'idarticulo', ), 'CASCADE', 'CASCADE', 'Articulovariantes');
        $this->addRelation('Articulovariantevalor', 'Articulovariantevalor', RelationMap::ONE_TO_MANY, array('idarticulo' => 'idarticulo', ), 'CASCADE', 'CASCADE', 'Articulovariantevalors');
        $this->addRelation('Propiedad', 'Propiedad', RelationMap::ONE_TO_MANY, array('idarticulo' => 'idarticulo', ), 'CASCADE', 'CASCADE', 'Propiedads');
        $this->addRelation('Propiedadvalor', 'Propiedadvalor', RelationMap::ONE_TO_MANY, array('idarticulo' => 'idarticulo', ), 'CASCADE', 'CASCADE', 'Propiedadvalors');
    } // buildRelations()

} // ArticuloTableMap
