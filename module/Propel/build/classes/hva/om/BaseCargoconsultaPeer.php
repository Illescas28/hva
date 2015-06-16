<?php


/**
 * Base static class for performing query and update operations on the 'cargoconsulta' table.
 *
 *
 *
 * @package propel.generator.hva.om
 */
abstract class BaseCargoconsultaPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'hva';

    /** the table name for this class */
    const TABLE_NAME = 'cargoconsulta';

    /** the related Propel class for this table */
    const OM_CLASS = 'Cargoconsulta';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CargoconsultaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the idcargoconsulta field */
    const IDCARGOCONSULTA = 'cargoconsulta.idcargoconsulta';

    /** the column name for the idconsulta field */
    const IDCONSULTA = 'cargoconsulta.idconsulta';

    /** the column name for the idlugarinventario field */
    const IDLUGARINVENTARIO = 'cargoconsulta.idlugarinventario';

    /** the column name for the idservicio field */
    const IDSERVICIO = 'cargoconsulta.idservicio';

    /** the column name for the cargoconsulta_tipo field */
    const CARGOCONSULTA_TIPO = 'cargoconsulta.cargoconsulta_tipo';

    /** the column name for the cargoconsulta_fecha field */
    const CARGOCONSULTA_FECHA = 'cargoconsulta.cargoconsulta_fecha';

    /** the column name for the cantidad field */
    const CANTIDAD = 'cargoconsulta.cantidad';

    /** the column name for the monto field */
    const MONTO = 'cargoconsulta.monto';

    /** The enumerated values for the cargoconsulta_tipo field */
    const CARGOCONSULTA_TIPO_ARTICULO = 'articulo';
    const CARGOCONSULTA_TIPO_SERVICIO = 'servicio';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Cargoconsulta objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Cargoconsulta[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CargoconsultaPeer::$fieldNames[CargoconsultaPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idcargoconsulta', 'Idconsulta', 'Idlugarinventario', 'Idservicio', 'CargoconsultaTipo', 'CargoconsultaFecha', 'Cantidad', 'Monto', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcargoconsulta', 'idconsulta', 'idlugarinventario', 'idservicio', 'cargoconsultaTipo', 'cargoconsultaFecha', 'cantidad', 'monto', ),
        BasePeer::TYPE_COLNAME => array (CargoconsultaPeer::IDCARGOCONSULTA, CargoconsultaPeer::IDCONSULTA, CargoconsultaPeer::IDLUGARINVENTARIO, CargoconsultaPeer::IDSERVICIO, CargoconsultaPeer::CARGOCONSULTA_TIPO, CargoconsultaPeer::CARGOCONSULTA_FECHA, CargoconsultaPeer::CANTIDAD, CargoconsultaPeer::MONTO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCARGOCONSULTA', 'IDCONSULTA', 'IDLUGARINVENTARIO', 'IDSERVICIO', 'CARGOCONSULTA_TIPO', 'CARGOCONSULTA_FECHA', 'CANTIDAD', 'MONTO', ),
        BasePeer::TYPE_FIELDNAME => array ('idcargoconsulta', 'idconsulta', 'idlugarinventario', 'idservicio', 'cargoconsulta_tipo', 'cargoconsulta_fecha', 'cantidad', 'monto', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CargoconsultaPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idcargoconsulta' => 0, 'Idconsulta' => 1, 'Idlugarinventario' => 2, 'Idservicio' => 3, 'CargoconsultaTipo' => 4, 'CargoconsultaFecha' => 5, 'Cantidad' => 6, 'Monto' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcargoconsulta' => 0, 'idconsulta' => 1, 'idlugarinventario' => 2, 'idservicio' => 3, 'cargoconsultaTipo' => 4, 'cargoconsultaFecha' => 5, 'cantidad' => 6, 'monto' => 7, ),
        BasePeer::TYPE_COLNAME => array (CargoconsultaPeer::IDCARGOCONSULTA => 0, CargoconsultaPeer::IDCONSULTA => 1, CargoconsultaPeer::IDLUGARINVENTARIO => 2, CargoconsultaPeer::IDSERVICIO => 3, CargoconsultaPeer::CARGOCONSULTA_TIPO => 4, CargoconsultaPeer::CARGOCONSULTA_FECHA => 5, CargoconsultaPeer::CANTIDAD => 6, CargoconsultaPeer::MONTO => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCARGOCONSULTA' => 0, 'IDCONSULTA' => 1, 'IDLUGARINVENTARIO' => 2, 'IDSERVICIO' => 3, 'CARGOCONSULTA_TIPO' => 4, 'CARGOCONSULTA_FECHA' => 5, 'CANTIDAD' => 6, 'MONTO' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('idcargoconsulta' => 0, 'idconsulta' => 1, 'idlugarinventario' => 2, 'idservicio' => 3, 'cargoconsulta_tipo' => 4, 'cargoconsulta_fecha' => 5, 'cantidad' => 6, 'monto' => 7, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CargoconsultaPeer::CARGOCONSULTA_TIPO => array(
            CargoconsultaPeer::CARGOCONSULTA_TIPO_ARTICULO,
            CargoconsultaPeer::CARGOCONSULTA_TIPO_SERVICIO,
        ),
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = CargoconsultaPeer::getFieldNames($toType);
        $key = isset(CargoconsultaPeer::$fieldKeys[$fromType][$name]) ? CargoconsultaPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CargoconsultaPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, CargoconsultaPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CargoconsultaPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CargoconsultaPeer::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     *
     * @param string $colname The ENUM column name.
     *
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = CargoconsultaPeer::getValueSets();

        if (!isset($valueSets[$colname])) {
            throw new PropelException(sprintf('Column "%s" has no ValueSet.', $colname));
        }

        return $valueSets[$colname];
    }

    /**
     * Gets the SQL value for the ENUM column value
     *
     * @param string $colname ENUM column name.
     * @param string $enumVal ENUM value.
     *
     * @return int SQL value
     */
    public static function getSqlValueForEnum($colname, $enumVal)
    {
        $values = CargoconsultaPeer::getValueSet($colname);
        if (!in_array($enumVal, $values)) {
            throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $colname));
        }

        return array_search($enumVal, $values);
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. CargoconsultaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CargoconsultaPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(CargoconsultaPeer::IDCARGOCONSULTA);
            $criteria->addSelectColumn(CargoconsultaPeer::IDCONSULTA);
            $criteria->addSelectColumn(CargoconsultaPeer::IDLUGARINVENTARIO);
            $criteria->addSelectColumn(CargoconsultaPeer::IDSERVICIO);
            $criteria->addSelectColumn(CargoconsultaPeer::CARGOCONSULTA_TIPO);
            $criteria->addSelectColumn(CargoconsultaPeer::CARGOCONSULTA_FECHA);
            $criteria->addSelectColumn(CargoconsultaPeer::CANTIDAD);
            $criteria->addSelectColumn(CargoconsultaPeer::MONTO);
        } else {
            $criteria->addSelectColumn($alias . '.idcargoconsulta');
            $criteria->addSelectColumn($alias . '.idconsulta');
            $criteria->addSelectColumn($alias . '.idlugarinventario');
            $criteria->addSelectColumn($alias . '.idservicio');
            $criteria->addSelectColumn($alias . '.cargoconsulta_tipo');
            $criteria->addSelectColumn($alias . '.cargoconsulta_fecha');
            $criteria->addSelectColumn($alias . '.cantidad');
            $criteria->addSelectColumn($alias . '.monto');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CargoconsultaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoconsultaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CargoconsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Cargoconsulta
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CargoconsultaPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return CargoconsultaPeer::populateObjects(CargoconsultaPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CargoconsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CargoconsultaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Cargoconsulta $obj A Cargoconsulta object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdcargoconsulta();
            } // if key === null
            CargoconsultaPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Cargoconsulta object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Cargoconsulta) {
                $key = (string) $value->getIdcargoconsulta();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Cargoconsulta object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CargoconsultaPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Cargoconsulta Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CargoconsultaPeer::$instances[$key])) {
                return CargoconsultaPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (CargoconsultaPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CargoconsultaPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to cargoconsulta
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = CargoconsultaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CargoconsultaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CargoconsultaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CargoconsultaPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Cargoconsulta object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CargoconsultaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CargoconsultaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CargoconsultaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CargoconsultaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CargoconsultaPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Consulta table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinConsulta(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CargoconsultaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoconsultaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoconsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoconsultaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Lugarinventario table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinLugarinventario(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CargoconsultaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoconsultaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoconsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoconsultaPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Servicio table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinServicio(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CargoconsultaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoconsultaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoconsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoconsultaPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Cargoconsulta objects pre-filled with their Consulta objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoconsulta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinConsulta(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);
        }

        CargoconsultaPeer::addSelectColumns($criteria);
        $startcol = CargoconsultaPeer::NUM_HYDRATE_COLUMNS;
        ConsultaPeer::addSelectColumns($criteria);

        $criteria->addJoin(CargoconsultaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoconsultaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoconsultaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CargoconsultaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoconsultaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ConsultaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ConsultaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ConsultaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ConsultaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Cargoconsulta) to $obj2 (Consulta)
                $obj2->addCargoconsulta($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cargoconsulta objects pre-filled with their Lugarinventario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoconsulta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinLugarinventario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);
        }

        CargoconsultaPeer::addSelectColumns($criteria);
        $startcol = CargoconsultaPeer::NUM_HYDRATE_COLUMNS;
        LugarinventarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(CargoconsultaPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoconsultaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoconsultaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CargoconsultaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoconsultaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = LugarinventarioPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = LugarinventarioPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = LugarinventarioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    LugarinventarioPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Cargoconsulta) to $obj2 (Lugarinventario)
                $obj2->addCargoconsulta($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cargoconsulta objects pre-filled with their Servicio objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoconsulta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinServicio(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);
        }

        CargoconsultaPeer::addSelectColumns($criteria);
        $startcol = CargoconsultaPeer::NUM_HYDRATE_COLUMNS;
        ServicioPeer::addSelectColumns($criteria);

        $criteria->addJoin(CargoconsultaPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoconsultaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoconsultaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CargoconsultaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoconsultaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ServicioPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ServicioPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ServicioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ServicioPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Cargoconsulta) to $obj2 (Servicio)
                $obj2->addCargoconsulta($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CargoconsultaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoconsultaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoconsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoconsultaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

        $criteria->addJoin(CargoconsultaPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $criteria->addJoin(CargoconsultaPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of Cargoconsulta objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoconsulta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);
        }

        CargoconsultaPeer::addSelectColumns($criteria);
        $startcol2 = CargoconsultaPeer::NUM_HYDRATE_COLUMNS;

        ConsultaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ConsultaPeer::NUM_HYDRATE_COLUMNS;

        LugarinventarioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + LugarinventarioPeer::NUM_HYDRATE_COLUMNS;

        ServicioPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ServicioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CargoconsultaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

        $criteria->addJoin(CargoconsultaPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $criteria->addJoin(CargoconsultaPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoconsultaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoconsultaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CargoconsultaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoconsultaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Consulta rows

            $key2 = ConsultaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ConsultaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ConsultaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ConsultaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Cargoconsulta) to the collection in $obj2 (Consulta)
                $obj2->addCargoconsulta($obj1);
            } // if joined row not null

            // Add objects for joined Lugarinventario rows

            $key3 = LugarinventarioPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = LugarinventarioPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = LugarinventarioPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    LugarinventarioPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Cargoconsulta) to the collection in $obj3 (Lugarinventario)
                $obj3->addCargoconsulta($obj1);
            } // if joined row not null

            // Add objects for joined Servicio rows

            $key4 = ServicioPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = ServicioPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = ServicioPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ServicioPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Cargoconsulta) to the collection in $obj4 (Servicio)
                $obj4->addCargoconsulta($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Consulta table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptConsulta(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CargoconsultaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoconsultaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoconsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoconsultaPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $criteria->addJoin(CargoconsultaPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Lugarinventario table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptLugarinventario(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CargoconsultaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoconsultaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoconsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoconsultaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

        $criteria->addJoin(CargoconsultaPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Servicio table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptServicio(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CargoconsultaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoconsultaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoconsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoconsultaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

        $criteria->addJoin(CargoconsultaPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Cargoconsulta objects pre-filled with all related objects except Consulta.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoconsulta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptConsulta(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);
        }

        CargoconsultaPeer::addSelectColumns($criteria);
        $startcol2 = CargoconsultaPeer::NUM_HYDRATE_COLUMNS;

        LugarinventarioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + LugarinventarioPeer::NUM_HYDRATE_COLUMNS;

        ServicioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ServicioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CargoconsultaPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $criteria->addJoin(CargoconsultaPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoconsultaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoconsultaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CargoconsultaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoconsultaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Lugarinventario rows

                $key2 = LugarinventarioPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = LugarinventarioPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = LugarinventarioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    LugarinventarioPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Cargoconsulta) to the collection in $obj2 (Lugarinventario)
                $obj2->addCargoconsulta($obj1);

            } // if joined row is not null

                // Add objects for joined Servicio rows

                $key3 = ServicioPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ServicioPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ServicioPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ServicioPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Cargoconsulta) to the collection in $obj3 (Servicio)
                $obj3->addCargoconsulta($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cargoconsulta objects pre-filled with all related objects except Lugarinventario.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoconsulta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptLugarinventario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);
        }

        CargoconsultaPeer::addSelectColumns($criteria);
        $startcol2 = CargoconsultaPeer::NUM_HYDRATE_COLUMNS;

        ConsultaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ConsultaPeer::NUM_HYDRATE_COLUMNS;

        ServicioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ServicioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CargoconsultaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

        $criteria->addJoin(CargoconsultaPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoconsultaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoconsultaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CargoconsultaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoconsultaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Consulta rows

                $key2 = ConsultaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ConsultaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ConsultaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ConsultaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Cargoconsulta) to the collection in $obj2 (Consulta)
                $obj2->addCargoconsulta($obj1);

            } // if joined row is not null

                // Add objects for joined Servicio rows

                $key3 = ServicioPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ServicioPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ServicioPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ServicioPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Cargoconsulta) to the collection in $obj3 (Servicio)
                $obj3->addCargoconsulta($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cargoconsulta objects pre-filled with all related objects except Servicio.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoconsulta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptServicio(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);
        }

        CargoconsultaPeer::addSelectColumns($criteria);
        $startcol2 = CargoconsultaPeer::NUM_HYDRATE_COLUMNS;

        ConsultaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ConsultaPeer::NUM_HYDRATE_COLUMNS;

        LugarinventarioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + LugarinventarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CargoconsultaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

        $criteria->addJoin(CargoconsultaPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoconsultaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoconsultaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CargoconsultaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoconsultaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Consulta rows

                $key2 = ConsultaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ConsultaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ConsultaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ConsultaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Cargoconsulta) to the collection in $obj2 (Consulta)
                $obj2->addCargoconsulta($obj1);

            } // if joined row is not null

                // Add objects for joined Lugarinventario rows

                $key3 = LugarinventarioPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = LugarinventarioPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = LugarinventarioPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    LugarinventarioPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Cargoconsulta) to the collection in $obj3 (Lugarinventario)
                $obj3->addCargoconsulta($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(CargoconsultaPeer::DATABASE_NAME)->getTable(CargoconsultaPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCargoconsultaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCargoconsultaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CargoconsultaTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return CargoconsultaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Cargoconsulta or Criteria object.
     *
     * @param      mixed $values Criteria or Cargoconsulta object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CargoconsultaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Cargoconsulta object
        }

        if ($criteria->containsKey(CargoconsultaPeer::IDCARGOCONSULTA) && $criteria->keyContainsValue(CargoconsultaPeer::IDCARGOCONSULTA) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CargoconsultaPeer::IDCARGOCONSULTA.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Cargoconsulta or Criteria object.
     *
     * @param      mixed $values Criteria or Cargoconsulta object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CargoconsultaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CargoconsultaPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CargoconsultaPeer::IDCARGOCONSULTA);
            $value = $criteria->remove(CargoconsultaPeer::IDCARGOCONSULTA);
            if ($value) {
                $selectCriteria->add(CargoconsultaPeer::IDCARGOCONSULTA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CargoconsultaPeer::TABLE_NAME);
            }

        } else { // $values is Cargoconsulta object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the cargoconsulta table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CargoconsultaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CargoconsultaPeer::TABLE_NAME, $con, CargoconsultaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CargoconsultaPeer::clearInstancePool();
            CargoconsultaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Cargoconsulta or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Cargoconsulta object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(CargoconsultaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CargoconsultaPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Cargoconsulta) { // it's a model object
            // invalidate the cache for this single object
            CargoconsultaPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CargoconsultaPeer::DATABASE_NAME);
            $criteria->add(CargoconsultaPeer::IDCARGOCONSULTA, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CargoconsultaPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CargoconsultaPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CargoconsultaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Cargoconsulta object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Cargoconsulta $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CargoconsultaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CargoconsultaPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(CargoconsultaPeer::DATABASE_NAME, CargoconsultaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Cargoconsulta
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CargoconsultaPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CargoconsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CargoconsultaPeer::DATABASE_NAME);
        $criteria->add(CargoconsultaPeer::IDCARGOCONSULTA, $pk);

        $v = CargoconsultaPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Cargoconsulta[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CargoconsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CargoconsultaPeer::DATABASE_NAME);
            $criteria->add(CargoconsultaPeer::IDCARGOCONSULTA, $pks, Criteria::IN);
            $objs = CargoconsultaPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCargoconsultaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCargoconsultaPeer::buildTableMap();

