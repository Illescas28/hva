<?php


/**
 * Base static class for performing query and update operations on the 'cargoadmision' table.
 *
 *
 *
 * @package propel.generator.hva.om
 */
abstract class BaseCargoadmisionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'hva';

    /** the table name for this class */
    const TABLE_NAME = 'cargoadmision';

    /** the related Propel class for this table */
    const OM_CLASS = 'Cargoadmision';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CargoadmisionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the idcargoadmision field */
    const IDCARGOADMISION = 'cargoadmision.idcargoadmision';

    /** the column name for the idadmision field */
    const IDADMISION = 'cargoadmision.idadmision';

    /** the column name for the idlugarinventario field */
    const IDLUGARINVENTARIO = 'cargoadmision.idlugarinventario';

    /** the column name for the idservicio field */
    const IDSERVICIO = 'cargoadmision.idservicio';

    /** the column name for the cargoadmision_tipo field */
    const CARGOADMISION_TIPO = 'cargoadmision.cargoadmision_tipo';

    /** the column name for the cargoadmision_fecha field */
    const CARGOADMISION_FECHA = 'cargoadmision.cargoadmision_fecha';

    /** the column name for the cargoadmision_cantidad field */
    const CARGOADMISION_CANTIDAD = 'cargoadmision.cargoadmision_cantidad';

    /** the column name for the cargoadmision_monto field */
    const CARGOADMISION_MONTO = 'cargoadmision.cargoadmision_monto';

    /** The enumerated values for the cargoadmision_tipo field */
    const CARGOADMISION_TIPO_ARTICULO = 'articulo';
    const CARGOADMISION_TIPO_SERVICIO = 'servicio';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Cargoadmision objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Cargoadmision[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CargoadmisionPeer::$fieldNames[CargoadmisionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idcargoadmision', 'Idadmision', 'Idlugarinventario', 'Idservicio', 'CargoadmisionTipo', 'CargoadmisionFecha', 'CargoadmisionCantidad', 'CargoadmisionMonto', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcargoadmision', 'idadmision', 'idlugarinventario', 'idservicio', 'cargoadmisionTipo', 'cargoadmisionFecha', 'cargoadmisionCantidad', 'cargoadmisionMonto', ),
        BasePeer::TYPE_COLNAME => array (CargoadmisionPeer::IDCARGOADMISION, CargoadmisionPeer::IDADMISION, CargoadmisionPeer::IDLUGARINVENTARIO, CargoadmisionPeer::IDSERVICIO, CargoadmisionPeer::CARGOADMISION_TIPO, CargoadmisionPeer::CARGOADMISION_FECHA, CargoadmisionPeer::CARGOADMISION_CANTIDAD, CargoadmisionPeer::CARGOADMISION_MONTO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCARGOADMISION', 'IDADMISION', 'IDLUGARINVENTARIO', 'IDSERVICIO', 'CARGOADMISION_TIPO', 'CARGOADMISION_FECHA', 'CARGOADMISION_CANTIDAD', 'CARGOADMISION_MONTO', ),
        BasePeer::TYPE_FIELDNAME => array ('idcargoadmision', 'idadmision', 'idlugarinventario', 'idservicio', 'cargoadmision_tipo', 'cargoadmision_fecha', 'cargoadmision_cantidad', 'cargoadmision_monto', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CargoadmisionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idcargoadmision' => 0, 'Idadmision' => 1, 'Idlugarinventario' => 2, 'Idservicio' => 3, 'CargoadmisionTipo' => 4, 'CargoadmisionFecha' => 5, 'CargoadmisionCantidad' => 6, 'CargoadmisionMonto' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcargoadmision' => 0, 'idadmision' => 1, 'idlugarinventario' => 2, 'idservicio' => 3, 'cargoadmisionTipo' => 4, 'cargoadmisionFecha' => 5, 'cargoadmisionCantidad' => 6, 'cargoadmisionMonto' => 7, ),
        BasePeer::TYPE_COLNAME => array (CargoadmisionPeer::IDCARGOADMISION => 0, CargoadmisionPeer::IDADMISION => 1, CargoadmisionPeer::IDLUGARINVENTARIO => 2, CargoadmisionPeer::IDSERVICIO => 3, CargoadmisionPeer::CARGOADMISION_TIPO => 4, CargoadmisionPeer::CARGOADMISION_FECHA => 5, CargoadmisionPeer::CARGOADMISION_CANTIDAD => 6, CargoadmisionPeer::CARGOADMISION_MONTO => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCARGOADMISION' => 0, 'IDADMISION' => 1, 'IDLUGARINVENTARIO' => 2, 'IDSERVICIO' => 3, 'CARGOADMISION_TIPO' => 4, 'CARGOADMISION_FECHA' => 5, 'CARGOADMISION_CANTIDAD' => 6, 'CARGOADMISION_MONTO' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('idcargoadmision' => 0, 'idadmision' => 1, 'idlugarinventario' => 2, 'idservicio' => 3, 'cargoadmision_tipo' => 4, 'cargoadmision_fecha' => 5, 'cargoadmision_cantidad' => 6, 'cargoadmision_monto' => 7, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CargoadmisionPeer::CARGOADMISION_TIPO => array(
            CargoadmisionPeer::CARGOADMISION_TIPO_ARTICULO,
            CargoadmisionPeer::CARGOADMISION_TIPO_SERVICIO,
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
        $toNames = CargoadmisionPeer::getFieldNames($toType);
        $key = isset(CargoadmisionPeer::$fieldKeys[$fromType][$name]) ? CargoadmisionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CargoadmisionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CargoadmisionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CargoadmisionPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CargoadmisionPeer::$enumValueSets;
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
        $valueSets = CargoadmisionPeer::getValueSets();

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
        $values = CargoadmisionPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CargoadmisionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CargoadmisionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CargoadmisionPeer::IDCARGOADMISION);
            $criteria->addSelectColumn(CargoadmisionPeer::IDADMISION);
            $criteria->addSelectColumn(CargoadmisionPeer::IDLUGARINVENTARIO);
            $criteria->addSelectColumn(CargoadmisionPeer::IDSERVICIO);
            $criteria->addSelectColumn(CargoadmisionPeer::CARGOADMISION_TIPO);
            $criteria->addSelectColumn(CargoadmisionPeer::CARGOADMISION_FECHA);
            $criteria->addSelectColumn(CargoadmisionPeer::CARGOADMISION_CANTIDAD);
            $criteria->addSelectColumn(CargoadmisionPeer::CARGOADMISION_MONTO);
        } else {
            $criteria->addSelectColumn($alias . '.idcargoadmision');
            $criteria->addSelectColumn($alias . '.idadmision');
            $criteria->addSelectColumn($alias . '.idlugarinventario');
            $criteria->addSelectColumn($alias . '.idservicio');
            $criteria->addSelectColumn($alias . '.cargoadmision_tipo');
            $criteria->addSelectColumn($alias . '.cargoadmision_fecha');
            $criteria->addSelectColumn($alias . '.cargoadmision_cantidad');
            $criteria->addSelectColumn($alias . '.cargoadmision_monto');
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
        $criteria->setPrimaryTableName(CargoadmisionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoadmisionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CargoadmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Cargoadmision
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CargoadmisionPeer::doSelect($critcopy, $con);
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
        return CargoadmisionPeer::populateObjects(CargoadmisionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CargoadmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CargoadmisionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);

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
     * @param Cargoadmision $obj A Cargoadmision object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdcargoadmision();
            } // if key === null
            CargoadmisionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Cargoadmision object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Cargoadmision) {
                $key = (string) $value->getIdcargoadmision();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Cargoadmision object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CargoadmisionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Cargoadmision Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CargoadmisionPeer::$instances[$key])) {
                return CargoadmisionPeer::$instances[$key];
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
        foreach (CargoadmisionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CargoadmisionPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to cargoadmision
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
        $cls = CargoadmisionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CargoadmisionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CargoadmisionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CargoadmisionPeer::addInstanceToPool($obj, $key);
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
     * @return array (Cargoadmision object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CargoadmisionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CargoadmisionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CargoadmisionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CargoadmisionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CargoadmisionPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Admision table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAdmision(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CargoadmisionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoadmisionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoadmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoadmisionPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

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
        $criteria->setPrimaryTableName(CargoadmisionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoadmisionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoadmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoadmisionPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(CargoadmisionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoadmisionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoadmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoadmisionPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

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
     * Selects a collection of Cargoadmision objects pre-filled with their Admision objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoadmision objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAdmision(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);
        }

        CargoadmisionPeer::addSelectColumns($criteria);
        $startcol = CargoadmisionPeer::NUM_HYDRATE_COLUMNS;
        AdmisionPeer::addSelectColumns($criteria);

        $criteria->addJoin(CargoadmisionPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoadmisionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoadmisionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CargoadmisionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoadmisionPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = AdmisionPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = AdmisionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = AdmisionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    AdmisionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Cargoadmision) to $obj2 (Admision)
                $obj2->addCargoadmision($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cargoadmision objects pre-filled with their Lugarinventario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoadmision objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinLugarinventario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);
        }

        CargoadmisionPeer::addSelectColumns($criteria);
        $startcol = CargoadmisionPeer::NUM_HYDRATE_COLUMNS;
        LugarinventarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(CargoadmisionPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoadmisionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoadmisionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CargoadmisionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoadmisionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Cargoadmision) to $obj2 (Lugarinventario)
                $obj2->addCargoadmision($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cargoadmision objects pre-filled with their Servicio objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoadmision objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinServicio(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);
        }

        CargoadmisionPeer::addSelectColumns($criteria);
        $startcol = CargoadmisionPeer::NUM_HYDRATE_COLUMNS;
        ServicioPeer::addSelectColumns($criteria);

        $criteria->addJoin(CargoadmisionPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoadmisionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoadmisionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CargoadmisionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoadmisionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Cargoadmision) to $obj2 (Servicio)
                $obj2->addCargoadmision($obj1);

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
        $criteria->setPrimaryTableName(CargoadmisionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoadmisionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoadmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoadmisionPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

        $criteria->addJoin(CargoadmisionPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $criteria->addJoin(CargoadmisionPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

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
     * Selects a collection of Cargoadmision objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoadmision objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);
        }

        CargoadmisionPeer::addSelectColumns($criteria);
        $startcol2 = CargoadmisionPeer::NUM_HYDRATE_COLUMNS;

        AdmisionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AdmisionPeer::NUM_HYDRATE_COLUMNS;

        LugarinventarioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + LugarinventarioPeer::NUM_HYDRATE_COLUMNS;

        ServicioPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ServicioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CargoadmisionPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

        $criteria->addJoin(CargoadmisionPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $criteria->addJoin(CargoadmisionPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoadmisionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoadmisionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CargoadmisionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoadmisionPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Admision rows

            $key2 = AdmisionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = AdmisionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = AdmisionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AdmisionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Cargoadmision) to the collection in $obj2 (Admision)
                $obj2->addCargoadmision($obj1);
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

                // Add the $obj1 (Cargoadmision) to the collection in $obj3 (Lugarinventario)
                $obj3->addCargoadmision($obj1);
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

                // Add the $obj1 (Cargoadmision) to the collection in $obj4 (Servicio)
                $obj4->addCargoadmision($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Admision table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptAdmision(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CargoadmisionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoadmisionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoadmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoadmisionPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $criteria->addJoin(CargoadmisionPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

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
        $criteria->setPrimaryTableName(CargoadmisionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoadmisionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoadmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoadmisionPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

        $criteria->addJoin(CargoadmisionPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

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
        $criteria->setPrimaryTableName(CargoadmisionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoadmisionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoadmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoadmisionPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

        $criteria->addJoin(CargoadmisionPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

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
     * Selects a collection of Cargoadmision objects pre-filled with all related objects except Admision.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoadmision objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptAdmision(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);
        }

        CargoadmisionPeer::addSelectColumns($criteria);
        $startcol2 = CargoadmisionPeer::NUM_HYDRATE_COLUMNS;

        LugarinventarioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + LugarinventarioPeer::NUM_HYDRATE_COLUMNS;

        ServicioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ServicioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CargoadmisionPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $criteria->addJoin(CargoadmisionPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoadmisionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoadmisionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CargoadmisionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoadmisionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Cargoadmision) to the collection in $obj2 (Lugarinventario)
                $obj2->addCargoadmision($obj1);

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

                // Add the $obj1 (Cargoadmision) to the collection in $obj3 (Servicio)
                $obj3->addCargoadmision($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cargoadmision objects pre-filled with all related objects except Lugarinventario.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoadmision objects.
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
            $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);
        }

        CargoadmisionPeer::addSelectColumns($criteria);
        $startcol2 = CargoadmisionPeer::NUM_HYDRATE_COLUMNS;

        AdmisionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AdmisionPeer::NUM_HYDRATE_COLUMNS;

        ServicioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ServicioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CargoadmisionPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

        $criteria->addJoin(CargoadmisionPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoadmisionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoadmisionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CargoadmisionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoadmisionPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Admision rows

                $key2 = AdmisionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = AdmisionPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = AdmisionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AdmisionPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Cargoadmision) to the collection in $obj2 (Admision)
                $obj2->addCargoadmision($obj1);

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

                // Add the $obj1 (Cargoadmision) to the collection in $obj3 (Servicio)
                $obj3->addCargoadmision($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cargoadmision objects pre-filled with all related objects except Servicio.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoadmision objects.
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
            $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);
        }

        CargoadmisionPeer::addSelectColumns($criteria);
        $startcol2 = CargoadmisionPeer::NUM_HYDRATE_COLUMNS;

        AdmisionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AdmisionPeer::NUM_HYDRATE_COLUMNS;

        LugarinventarioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + LugarinventarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CargoadmisionPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

        $criteria->addJoin(CargoadmisionPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoadmisionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoadmisionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CargoadmisionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoadmisionPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Admision rows

                $key2 = AdmisionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = AdmisionPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = AdmisionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AdmisionPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Cargoadmision) to the collection in $obj2 (Admision)
                $obj2->addCargoadmision($obj1);

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

                // Add the $obj1 (Cargoadmision) to the collection in $obj3 (Lugarinventario)
                $obj3->addCargoadmision($obj1);

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
        return Propel::getDatabaseMap(CargoadmisionPeer::DATABASE_NAME)->getTable(CargoadmisionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCargoadmisionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCargoadmisionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CargoadmisionTableMap());
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
        return CargoadmisionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Cargoadmision or Criteria object.
     *
     * @param      mixed $values Criteria or Cargoadmision object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CargoadmisionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Cargoadmision object
        }

        if ($criteria->containsKey(CargoadmisionPeer::IDCARGOADMISION) && $criteria->keyContainsValue(CargoadmisionPeer::IDCARGOADMISION) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CargoadmisionPeer::IDCARGOADMISION.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Cargoadmision or Criteria object.
     *
     * @param      mixed $values Criteria or Cargoadmision object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CargoadmisionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CargoadmisionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CargoadmisionPeer::IDCARGOADMISION);
            $value = $criteria->remove(CargoadmisionPeer::IDCARGOADMISION);
            if ($value) {
                $selectCriteria->add(CargoadmisionPeer::IDCARGOADMISION, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CargoadmisionPeer::TABLE_NAME);
            }

        } else { // $values is Cargoadmision object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the cargoadmision table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CargoadmisionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CargoadmisionPeer::TABLE_NAME, $con, CargoadmisionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CargoadmisionPeer::clearInstancePool();
            CargoadmisionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Cargoadmision or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Cargoadmision object or primary key or array of primary keys
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
            $con = Propel::getConnection(CargoadmisionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CargoadmisionPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Cargoadmision) { // it's a model object
            // invalidate the cache for this single object
            CargoadmisionPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CargoadmisionPeer::DATABASE_NAME);
            $criteria->add(CargoadmisionPeer::IDCARGOADMISION, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CargoadmisionPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CargoadmisionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CargoadmisionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Cargoadmision object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Cargoadmision $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CargoadmisionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CargoadmisionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CargoadmisionPeer::DATABASE_NAME, CargoadmisionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Cargoadmision
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CargoadmisionPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CargoadmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CargoadmisionPeer::DATABASE_NAME);
        $criteria->add(CargoadmisionPeer::IDCARGOADMISION, $pk);

        $v = CargoadmisionPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Cargoadmision[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CargoadmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CargoadmisionPeer::DATABASE_NAME);
            $criteria->add(CargoadmisionPeer::IDCARGOADMISION, $pks, Criteria::IN);
            $objs = CargoadmisionPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCargoadmisionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCargoadmisionPeer::buildTableMap();

