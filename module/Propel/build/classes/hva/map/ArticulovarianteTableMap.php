<?php



/**
 * This class defines the structure of the 'articulovariante' table.
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
class ArticulovarianteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.ArticulovarianteTableMap';

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
        $this->setName('articulovariante');
        $this->setPhpName('Articulovariante');
        $this->setClassname('Articulovariante');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idarticulovariante', 'Idarticulovariante', 'INTEGER', true, null, null);
        $this->addForeignKey('idarticulo', 'Idarticulo', 'INTEGER', 'articulo', 'idarticulo', true, null, null);
        $this->addColumn('articulovariante_codigobarras', 'ArticulovarianteCodigobarras', 'VARCHAR', false, 100, null);
        $this->addColumn('articulovariante_costo', 'ArticulovarianteCosto', 'DECIMAL', false, 10, 0);
        $this->addColumn('articulovariante_precio', 'ArticulovariantePrecio', 'DECIMAL', false, 10, 0);
        $this->addColumn('articulovariante_iva', 'ArticulovarianteIva', 'CHAR', false, null, '16');
        $this->getColumn('articulovariante_iva', false)->setValueSet(array (
  0 => 'exento',
  1 => '0',
  2 => '16',
));
        $this->addColumn('articulovariante_imagen', 'ArticulovarianteImagen', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Articulo', 'Articulo', RelationMap::MANY_TO_ONE, array('idarticulo' => 'idarticulo', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Articulovariantereorden', 'Articulovariantereorden', RelationMap::ONE_TO_MANY, array('idarticulovariante' => 'idarticulovariante', ), 'CASCADE', 'CASCADE', 'Articulovariantereordens');
        $this->addRelation('Articulovariantevalor', 'Articulovariantevalor', RelationMap::ONE_TO_MANY, array('idarticulovariante' => 'idarticulovariante', ), 'CASCADE', 'CASCADE', 'Articulovariantevalors');
        $this->addRelation('Ordencompradetalle', 'Ordencompradetalle', RelationMap::ONE_TO_MANY, array('idarticulovariante' => 'idarticulovariante', ), 'CASCADE', 'CASCADE', 'Ordencompradetalles');
    } // buildRelations()

} // ArticulovarianteTableMap
