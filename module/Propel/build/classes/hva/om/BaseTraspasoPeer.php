<?php


/**
 * Base static class for performing query and update operations on the 'traspaso' table.
 *
 *
 *
 * @package propel.generator.hva.om
 */
abstract class BaseTraspasoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'hva';

    /** the table name for this class */
    const TABLE_NAME = 'traspaso';

    /** the related Propel class for this table */
    const OM_CLASS = 'Traspaso';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TraspasoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 5;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 5;

    /** the column name for the idinventariolugar field */
    const IDINVENTARIOLUGAR = 'traspaso.idinventariolugar';

    /** the column name for the idlugarremitente field */
    const IDLUGARREMITENTE = 'traspaso.idlugarremitente';

    /** the column name for the idlugardestinatario field */
    const IDLUGARDESTINATARIO = 'traspaso.idlugardestinatario';

    /** the column name for the traspaso_fecha field */
    const TRASPASO_FECHA = 'traspaso.traspaso_fecha';

    /** the column name for the traspaso_status field */
    const TRASPASO_STATUS = 'traspaso.traspaso_status';

    /** The enumerated values for the traspaso_status field */
    const TRASPASO_STATUS_RECIBIDO = 'recibido';
    const TRASPASO_STATUS_CANCELADO = 'cancelado';
    const TRASPASO_STATUS_EN_TRANSITO = 'en transito';
    const TRASPASO_STATUS_NO_RECIBIDO = 'no recibido';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Traspaso objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Traspaso[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TraspasoPeer::$fieldNames[TraspasoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idinventariolugar', 'Idlugarremitente', 'Idlugardestinatario', 'TraspasoFecha', 'TraspasoStatus', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idinventariolugar', 'idlugarremitente', 'idlugardestinatario', 'traspasoFecha', 'traspasoStatus', ),
        BasePeer::TYPE_COLNAME => array (TraspasoPeer::IDINVENTARIOLUGAR, TraspasoPeer::IDLUGARREMITENTE, TraspasoPeer::IDLUGARDESTINATARIO, TraspasoPeer::TRASPASO_FECHA, TraspasoPeer::TRASPASO_STATUS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDINVENTARIOLUGAR', 'IDLUGARREMITENTE', 'IDLUGARDESTINATARIO', 'TRASPASO_FECHA', 'TRASPASO_STATUS', ),
        BasePeer::TYPE_FIELDNAME => array ('idinventariolugar', 'idlugarremitente', 'idlugardestinatario', 'traspaso_fecha', 'traspaso_status', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TraspasoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idinventariolugar' => 0, 'Idlugarremitente' => 1, 'Idlugardestinatario' => 2, 'TraspasoFecha' => 3, 'TraspasoStatus' => 4, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idinventariolugar' => 0, 'idlugarremitente' => 1, 'idlugardestinatario' => 2, 'traspasoFecha' => 3, 'traspasoStatus' => 4, ),
        BasePeer::TYPE_COLNAME => array (TraspasoPeer::IDINVENTARIOLUGAR => 0, TraspasoPeer::IDLUGARREMITENTE => 1, TraspasoPeer::IDLUGARDESTINATARIO => 2, TraspasoPeer::TRASPASO_FECHA => 3, TraspasoPeer::TRASPASO_STATUS => 4, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDINVENTARIOLUGAR' => 0, 'IDLUGARREMITENTE' => 1, 'IDLUGARDESTINATARIO' => 2, 'TRASPASO_FECHA' => 3, 'TRASPASO_STATUS' => 4, ),
        BasePeer::TYPE_FIELDNAME => array ('idinventariolugar' => 0, 'idlugarremitente' => 1, 'idlugardestinatario' => 2, 'traspaso_fecha' => 3, 'traspaso_status' => 4, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        TraspasoPeer::TRASPASO_STATUS => array(
            TraspasoPeer::TRASPASO_STATUS_RECIBIDO,
            TraspasoPeer::TRASPASO_STATUS_CANCELADO,
            TraspasoPeer::TRASPASO_STATUS_EN_TRANSITO,
            TraspasoPeer::TRASPASO_STATUS_NO_RECIBIDO,
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
        $toNames = TraspasoPeer::getFieldNames($toType);
        $key = isset(TraspasoPeer::$fieldKeys[$fromType][$name]) ? TraspasoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TraspasoPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, TraspasoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TraspasoPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return TraspasoPeer::$enumValueSets;
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
        $valueSets = TraspasoPeer::getValueSets();

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
        $values = TraspasoPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. TraspasoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TraspasoPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(TraspasoPeer::IDINVENTARIOLUGAR);
            $criteria->addSelectColumn(TraspasoPeer::IDLUGARREMITENTE);
            $criteria->addSelectColumn(TraspasoPeer::IDLUGARDESTINATARIO);
            $criteria->addSelectColumn(TraspasoPeer::TRASPASO_FECHA);
            $criteria->addSelectColumn(TraspasoPeer::TRASPASO_STATUS);
        } else {
            $criteria->addSelectColumn($alias . '.idinventariolugar');
            $criteria->addSelectColumn($alias . '.idlugarremitente');
            $criteria->addSelectColumn($alias . '.idlugardestinatario');
            $criteria->addSelectColumn($alias . '.traspaso_fecha');
            $criteria->addSelectColumn($alias . '.traspaso_status');
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
        $criteria->setPrimaryTableName(TraspasoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TraspasoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TraspasoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Traspaso
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TraspasoPeer::doSelect($critcopy, $con);
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
        return TraspasoPeer::populateObjects(TraspasoPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TraspasoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TraspasoPeer::DATABASE_NAME);

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
     * @param Traspaso $obj A Traspaso object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdinventariolugar(), (string) $obj->getIdlugarremitente(), (string) $obj->getIdlugardestinatario()));
            } // if key === null
            TraspasoPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Traspaso object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Traspaso) {
                $key = serialize(array((string) $value->getIdinventariolugar(), (string) $value->getIdlugarremitente(), (string) $value->getIdlugardestinatario()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Traspaso object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TraspasoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Traspaso Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TraspasoPeer::$instances[$key])) {
                return TraspasoPeer::$instances[$key];
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
        foreach (TraspasoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TraspasoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to traspaso
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in TraspasodetallesPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        TraspasodetallesPeer::clearInstancePool();
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 2] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2]));
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

        return array((int) $row[$startcol], (int) $row[$startcol + 1], (int) $row[$startcol + 2]);
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
        $cls = TraspasoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TraspasoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TraspasoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TraspasoPeer::addInstanceToPool($obj, $key);
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
     * @return array (Traspaso object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TraspasoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TraspasoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TraspasoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TraspasoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TraspasoPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related LugarRelatedByIdlugardestinatario table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinLugarRelatedByIdlugardestinatario(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TraspasoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TraspasoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TraspasoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TraspasoPeer::IDLUGARDESTINATARIO, LugarPeer::IDLUGAR, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related LugarRelatedByIdlugarremitente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinLugarRelatedByIdlugarremitente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TraspasoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TraspasoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TraspasoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TraspasoPeer::IDLUGARREMITENTE, LugarPeer::IDLUGAR, $join_behavior);

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
     * Selects a collection of Traspaso objects pre-filled with their Lugar objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Traspaso objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinLugarRelatedByIdlugardestinatario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TraspasoPeer::DATABASE_NAME);
        }

        TraspasoPeer::addSelectColumns($criteria);
        $startcol = TraspasoPeer::NUM_HYDRATE_COLUMNS;
        LugarPeer::addSelectColumns($criteria);

        $criteria->addJoin(TraspasoPeer::IDLUGARDESTINATARIO, LugarPeer::IDLUGAR, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TraspasoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TraspasoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TraspasoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TraspasoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = LugarPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = LugarPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = LugarPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    LugarPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Traspaso) to $obj2 (Lugar)
                $obj2->addTraspasoRelatedByIdlugardestinatario($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Traspaso objects pre-filled with their Lugar objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Traspaso objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinLugarRelatedByIdlugarremitente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TraspasoPeer::DATABASE_NAME);
        }

        TraspasoPeer::addSelectColumns($criteria);
        $startcol = TraspasoPeer::NUM_HYDRATE_COLUMNS;
        LugarPeer::addSelectColumns($criteria);

        $criteria->addJoin(TraspasoPeer::IDLUGARREMITENTE, LugarPeer::IDLUGAR, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TraspasoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TraspasoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TraspasoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TraspasoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = LugarPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = LugarPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = LugarPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    LugarPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Traspaso) to $obj2 (Lugar)
                $obj2->addTraspasoRelatedByIdlugarremitente($obj1);

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
        $criteria->setPrimaryTableName(TraspasoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TraspasoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TraspasoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TraspasoPeer::IDLUGARDESTINATARIO, LugarPeer::IDLUGAR, $join_behavior);

        $criteria->addJoin(TraspasoPeer::IDLUGARREMITENTE, LugarPeer::IDLUGAR, $join_behavior);

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
     * Selects a collection of Traspaso objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Traspaso objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TraspasoPeer::DATABASE_NAME);
        }

        TraspasoPeer::addSelectColumns($criteria);
        $startcol2 = TraspasoPeer::NUM_HYDRATE_COLUMNS;

        LugarPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + LugarPeer::NUM_HYDRATE_COLUMNS;

        LugarPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + LugarPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TraspasoPeer::IDLUGARDESTINATARIO, LugarPeer::IDLUGAR, $join_behavior);

        $criteria->addJoin(TraspasoPeer::IDLUGARREMITENTE, LugarPeer::IDLUGAR, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TraspasoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TraspasoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TraspasoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TraspasoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Lugar rows

            $key2 = LugarPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = LugarPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = LugarPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    LugarPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Traspaso) to the collection in $obj2 (Lugar)
                $obj2->addTraspasoRelatedByIdlugardestinatario($obj1);
            } // if joined row not null

            // Add objects for joined Lugar rows

            $key3 = LugarPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = LugarPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = LugarPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    LugarPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Traspaso) to the collection in $obj3 (Lugar)
                $obj3->addTraspasoRelatedByIdlugarremitente($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related LugarRelatedByIdlugardestinatario table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptLugarRelatedByIdlugardestinatario(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TraspasoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TraspasoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TraspasoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

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
     * Returns the number of rows matching criteria, joining the related LugarRelatedByIdlugarremitente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptLugarRelatedByIdlugarremitente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TraspasoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TraspasoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TraspasoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

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
     * Selects a collection of Traspaso objects pre-filled with all related objects except LugarRelatedByIdlugardestinatario.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Traspaso objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptLugarRelatedByIdlugardestinatario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TraspasoPeer::DATABASE_NAME);
        }

        TraspasoPeer::addSelectColumns($criteria);
        $startcol2 = TraspasoPeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TraspasoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TraspasoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TraspasoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TraspasoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Traspaso objects pre-filled with all related objects except LugarRelatedByIdlugarremitente.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Traspaso objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptLugarRelatedByIdlugarremitente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TraspasoPeer::DATABASE_NAME);
        }

        TraspasoPeer::addSelectColumns($criteria);
        $startcol2 = TraspasoPeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TraspasoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TraspasoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TraspasoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TraspasoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

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
        return Propel::getDatabaseMap(TraspasoPeer::DATABASE_NAME)->getTable(TraspasoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTraspasoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTraspasoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \TraspasoTableMap());
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
        return TraspasoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Traspaso or Criteria object.
     *
     * @param      mixed $values Criteria or Traspaso object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Traspaso object
        }

        if ($criteria->containsKey(TraspasoPeer::IDINVENTARIOLUGAR) && $criteria->keyContainsValue(TraspasoPeer::IDINVENTARIOLUGAR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TraspasoPeer::IDINVENTARIOLUGAR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(TraspasoPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Traspaso or Criteria object.
     *
     * @param      mixed $values Criteria or Traspaso object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TraspasoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TraspasoPeer::IDINVENTARIOLUGAR);
            $value = $criteria->remove(TraspasoPeer::IDINVENTARIOLUGAR);
            if ($value) {
                $selectCriteria->add(TraspasoPeer::IDINVENTARIOLUGAR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TraspasoPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(TraspasoPeer::IDLUGARREMITENTE);
            $value = $criteria->remove(TraspasoPeer::IDLUGARREMITENTE);
            if ($value) {
                $selectCriteria->add(TraspasoPeer::IDLUGARREMITENTE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TraspasoPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(TraspasoPeer::IDLUGARDESTINATARIO);
            $value = $criteria->remove(TraspasoPeer::IDLUGARDESTINATARIO);
            if ($value) {
                $selectCriteria->add(TraspasoPeer::IDLUGARDESTINATARIO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TraspasoPeer::TABLE_NAME);
            }

        } else { // $values is Traspaso object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TraspasoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the traspaso table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += TraspasoPeer::doOnDeleteCascade(new Criteria(TraspasoPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(TraspasoPeer::TABLE_NAME, $con, TraspasoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TraspasoPeer::clearInstancePool();
            TraspasoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Traspaso or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Traspaso object or primary key or array of primary keys
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
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Traspaso) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TraspasoPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(TraspasoPeer::IDINVENTARIOLUGAR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(TraspasoPeer::IDLUGARREMITENTE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(TraspasoPeer::IDLUGARDESTINATARIO, $value[2]));
                $criteria->addOr($criterion);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(TraspasoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += TraspasoPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                TraspasoPeer::clearInstancePool();
            } elseif ($values instanceof Traspaso) { // it's a model object
                TraspasoPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    TraspasoPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            TraspasoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = TraspasoPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Traspasodetalles objects
            $criteria = new Criteria(TraspasodetallesPeer::DATABASE_NAME);

            $criteria->add(TraspasodetallesPeer::IDTRASPASO, $obj->getIdinventariolugar());
            $affectedRows += TraspasodetallesPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Traspaso object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Traspaso $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TraspasoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TraspasoPeer::TABLE_NAME);

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

        return BasePeer::doValidate(TraspasoPeer::DATABASE_NAME, TraspasoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $idinventariolugar
     * @param   int $idlugarremitente
     * @param   int $idlugardestinatario
     * @param      PropelPDO $con
     * @return Traspaso
     */
    public static function retrieveByPK($idinventariolugar, $idlugarremitente, $idlugardestinatario, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $idinventariolugar, (string) $idlugarremitente, (string) $idlugardestinatario));
         if (null !== ($obj = TraspasoPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(TraspasoPeer::DATABASE_NAME);
        $criteria->add(TraspasoPeer::IDINVENTARIOLUGAR, $idinventariolugar);
        $criteria->add(TraspasoPeer::IDLUGARREMITENTE, $idlugarremitente);
        $criteria->add(TraspasoPeer::IDLUGARDESTINATARIO, $idlugardestinatario);
        $v = TraspasoPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseTraspasoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTraspasoPeer::buildTableMap();

