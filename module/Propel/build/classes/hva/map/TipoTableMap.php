<?php



/**
 * This class defines the structure of the 'tipo' table.
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
class TipoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.TipoTableMap';

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
        $this->setName('tipo');
        $this->setPhpName('Tipo');
        $this->setClassname('Tipo');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idtipo', 'Idtipo', 'INTEGER', true, null, null);
        $this->addColumn('tipo_nombre', 'TipoNombre', 'VARCHAR', true, 300, null);
        $this->addColumn('tipo_descripcion', 'TipoDescripcion', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Articulo', 'Articulo', RelationMap::ONE_TO_MANY, array('idtipo' => 'idtipo', ), 'CASCADE', 'CASCADE', 'Articulos');
    } // buildRelations()

} // TipoTableMap
