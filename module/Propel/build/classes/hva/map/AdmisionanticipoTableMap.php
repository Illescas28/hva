<?php



/**
 * This class defines the structure of the 'admisionanticipo' table.
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
class AdmisionanticipoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'hva.map.AdmisionanticipoTableMap';

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
        $this->setName('admisionanticipo');
        $this->setPhpName('Admisionanticipo');
        $this->setClassname('Admisionanticipo');
        $this->setPackage('hva');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idadmisionanticipo', 'Idadmisionanticipo', 'INTEGER', true, null, null);
        $this->addForeignKey('idadmision', 'Idadmision', 'INTEGER', 'admision', 'idadmision', true, null, null);
        $this->addColumn('admisionanticipo_fecha', 'AdmisionanticipoFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('admisionanticipo_cantidad', 'AdmisionanticipoCantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('admisionanticipo_nota', 'AdmisionanticipoNota', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Admision', 'Admision', RelationMap::MANY_TO_ONE, array('idadmision' => 'idadmision', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // AdmisionanticipoTableMap
