<?php


/**
 * Base static class for performing query and update operations on the 'lugarinventario' table.
 *
 *
 *
 * @package propel.generator.hva.om
 */
abstract class BaseLugarinventarioPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'hva';

    /** the table name for this class */
    const TABLE_NAME = 'lugarinventario';

    /** the related Propel class for this table */
    const OM_CLASS = 'Lugarinventario';

    /** the related TableMap class for this table */
    const TM_CLASS = 'LugarinventarioTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 4;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 4;

    /** the column name for the idlugarinventario field */
    const IDLUGARINVENTARIO = 'lugarinventario.idlugarinventario';

    /** the column name for the idlugar field */
    const IDLUGAR = 'lugarinventario.idlugar';

    /** the column name for the idordencompradetalle field */
    const IDORDENCOMPRADETALLE = 'lugarinventario.idordencompradetalle';

    /** the column name for the lugarinventario_cantidad field */
    const LUGARINVENTARIO_CANTIDAD = 'lugarinventario.lugarinventario_cantidad';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Lugarinventario objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Lugarinventario[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. LugarinventarioPeer::$fieldNames[LugarinventarioPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idlugarinventario', 'Idlugar', 'Idordencompradetalle', 'LugarinventarioCantidad', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idlugarinventario', 'idlugar', 'idordencompradetalle', 'lugarinventarioCantidad', ),
        BasePeer::TYPE_COLNAME => array (LugarinventarioPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGAR, LugarinventarioPeer::IDORDENCOMPRADETALLE, LugarinventarioPeer::LUGARINVENTARIO_CANTIDAD, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDLUGARINVENTARIO', 'IDLUGAR', 'IDORDENCOMPRADETALLE', 'LUGARINVENTARIO_CANTIDAD', ),
        BasePeer::TYPE_FIELDNAME => array ('idlugarinventario', 'idlugar', 'idordencompradetalle', 'lugarinventario_cantidad', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. LugarinventarioPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idlugarinventario' => 0, 'Idlugar' => 1, 'Idordencompradetalle' => 2, 'LugarinventarioCantidad' => 3, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idlugarinventario' => 0, 'idlugar' => 1, 'idordencompradetalle' => 2, 'lugarinventarioCantidad' => 3, ),
        BasePeer::TYPE_COLNAME => array (LugarinventarioPeer::IDLUGARINVENTARIO => 0, LugarinventarioPeer::IDLUGAR => 1, LugarinventarioPeer::IDORDENCOMPRADETALLE => 2, LugarinventarioPeer::LUGARINVENTARIO_CANTIDAD => 3, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDLUGARINVENTARIO' => 0, 'IDLUGAR' => 1, 'IDORDENCOMPRADETALLE' => 2, 'LUGARINVENTARIO_CANTIDAD' => 3, ),
        BasePeer::TYPE_FIELDNAME => array ('idlugarinventario' => 0, 'idlugar' => 1, 'idordencompradetalle' => 2, 'lugarinventario_cantidad' => 3, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
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
        $toNames = LugarinventarioPeer::getFieldNames($toType);
        $key = isset(LugarinventarioPeer::$fieldKeys[$fromType][$name]) ? LugarinventarioPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(LugarinventarioPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, LugarinventarioPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return LugarinventarioPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. LugarinventarioPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(LugarinventarioPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(LugarinventarioPeer::IDLUGARINVENTARIO);
            $criteria->addSelectColumn(LugarinventarioPeer::IDLUGAR);
            $criteria->addSelectColumn(LugarinventarioPeer::IDORDENCOMPRADETALLE);
            $criteria->addSelectColumn(LugarinventarioPeer::LUGARINVENTARIO_CANTIDAD);
        } else {
            $criteria->addSelectColumn($alias . '.idlugarinventario');
            $criteria->addSelectColumn($alias . '.idlugar');
            $criteria->addSelectColumn($alias . '.idordencompradetalle');
            $criteria->addSelectColumn($alias . '.lugarinventario_cantidad');
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
        $criteria->setPrimaryTableName(LugarinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LugarinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(LugarinventarioPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(LugarinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Lugarinventario
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = LugarinventarioPeer::doSelect($critcopy, $con);
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
        return LugarinventarioPeer::populateObjects(LugarinventarioPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(LugarinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            LugarinventarioPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(LugarinventarioPeer::DATABASE_NAME);

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
     * @param Lugarinventario $obj A Lugarinventario object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdlugarinventario();
            } // if key === null
            LugarinventarioPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Lugarinventario object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Lugarinventario) {
                $key = (string) $value->getIdlugarinventario();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Lugarinventario object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(LugarinventarioPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Lugarinventario Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(LugarinventarioPeer::$instances[$key])) {
                return LugarinventarioPeer::$instances[$key];
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
        foreach (LugarinventarioPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        LugarinventarioPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to lugarinventario
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CargoadmisionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CargoadmisionPeer::clearInstancePool();
        // Invalidate objects in CargoconsultaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CargoconsultaPeer::clearInstancePool();
        // Invalidate objects in CargoventaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CargoventaPeer::clearInstancePool();
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
        $cls = LugarinventarioPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = LugarinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = LugarinventarioPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                LugarinventarioPeer::addInstanceToPool($obj, $key);
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
     * @return array (Lugarinventario object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = LugarinventarioPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = LugarinventarioPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + LugarinventarioPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = LugarinventarioPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            LugarinventarioPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Lugar table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinLugar(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(LugarinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LugarinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(LugarinventarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(LugarinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(LugarinventarioPeer::IDLUGAR, LugarPeer::IDLUGAR, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Ordencompradetalle table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOrdencompradetalle(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(LugarinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LugarinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(LugarinventarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(LugarinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(LugarinventarioPeer::IDORDENCOMPRADETALLE, OrdencompradetallePeer::IDORDENCOMPRADETALLE, $join_behavior);

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
     * Selects a collection of Lugarinventario objects pre-filled with their Lugar objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Lugarinventario objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinLugar(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(LugarinventarioPeer::DATABASE_NAME);
        }

        LugarinventarioPeer::addSelectColumns($criteria);
        $startcol = LugarinventarioPeer::NUM_HYDRATE_COLUMNS;
        LugarPeer::addSelectColumns($criteria);

        $criteria->addJoin(LugarinventarioPeer::IDLUGAR, LugarPeer::IDLUGAR, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = LugarinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = LugarinventarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = LugarinventarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                LugarinventarioPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Lugarinventario) to $obj2 (Lugar)
                $obj2->addLugarinventario($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Lugarinventario objects pre-filled with their Ordencompradetalle objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Lugarinventario objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOrdencompradetalle(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(LugarinventarioPeer::DATABASE_NAME);
        }

        LugarinventarioPeer::addSelectColumns($criteria);
        $startcol = LugarinventarioPeer::NUM_HYDRATE_COLUMNS;
        OrdencompradetallePeer::addSelectColumns($criteria);

        $criteria->addJoin(LugarinventarioPeer::IDORDENCOMPRADETALLE, OrdencompradetallePeer::IDORDENCOMPRADETALLE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = LugarinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = LugarinventarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = LugarinventarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                LugarinventarioPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = OrdencompradetallePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = OrdencompradetallePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = OrdencompradetallePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    OrdencompradetallePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Lugarinventario) to $obj2 (Ordencompradetalle)
                $obj2->addLugarinventario($obj1);

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
        $criteria->setPrimaryTableName(LugarinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LugarinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(LugarinventarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(LugarinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(LugarinventarioPeer::IDLUGAR, LugarPeer::IDLUGAR, $join_behavior);

        $criteria->addJoin(LugarinventarioPeer::IDORDENCOMPRADETALLE, OrdencompradetallePeer::IDORDENCOMPRADETALLE, $join_behavior);

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
     * Selects a collection of Lugarinventario objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Lugarinventario objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(LugarinventarioPeer::DATABASE_NAME);
        }

        LugarinventarioPeer::addSelectColumns($criteria);
        $startcol2 = LugarinventarioPeer::NUM_HYDRATE_COLUMNS;

        LugarPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + LugarPeer::NUM_HYDRATE_COLUMNS;

        OrdencompradetallePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + OrdencompradetallePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(LugarinventarioPeer::IDLUGAR, LugarPeer::IDLUGAR, $join_behavior);

        $criteria->addJoin(LugarinventarioPeer::IDORDENCOMPRADETALLE, OrdencompradetallePeer::IDORDENCOMPRADETALLE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = LugarinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = LugarinventarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = LugarinventarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                LugarinventarioPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Lugarinventario) to the collection in $obj2 (Lugar)
                $obj2->addLugarinventario($obj1);
            } // if joined row not null

            // Add objects for joined Ordencompradetalle rows

            $key3 = OrdencompradetallePeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = OrdencompradetallePeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = OrdencompradetallePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    OrdencompradetallePeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Lugarinventario) to the collection in $obj3 (Ordencompradetalle)
                $obj3->addLugarinventario($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Lugar table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptLugar(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(LugarinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LugarinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(LugarinventarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(LugarinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(LugarinventarioPeer::IDORDENCOMPRADETALLE, OrdencompradetallePeer::IDORDENCOMPRADETALLE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Ordencompradetalle table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOrdencompradetalle(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(LugarinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LugarinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(LugarinventarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(LugarinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(LugarinventarioPeer::IDLUGAR, LugarPeer::IDLUGAR, $join_behavior);

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
     * Selects a collection of Lugarinventario objects pre-filled with all related objects except Lugar.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Lugarinventario objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptLugar(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(LugarinventarioPeer::DATABASE_NAME);
        }

        LugarinventarioPeer::addSelectColumns($criteria);
        $startcol2 = LugarinventarioPeer::NUM_HYDRATE_COLUMNS;

        OrdencompradetallePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OrdencompradetallePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(LugarinventarioPeer::IDORDENCOMPRADETALLE, OrdencompradetallePeer::IDORDENCOMPRADETALLE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = LugarinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = LugarinventarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = LugarinventarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                LugarinventarioPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Ordencompradetalle rows

                $key2 = OrdencompradetallePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = OrdencompradetallePeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = OrdencompradetallePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OrdencompradetallePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Lugarinventario) to the collection in $obj2 (Ordencompradetalle)
                $obj2->addLugarinventario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Lugarinventario objects pre-filled with all related objects except Ordencompradetalle.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Lugarinventario objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOrdencompradetalle(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(LugarinventarioPeer::DATABASE_NAME);
        }

        LugarinventarioPeer::addSelectColumns($criteria);
        $startcol2 = LugarinventarioPeer::NUM_HYDRATE_COLUMNS;

        LugarPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + LugarPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(LugarinventarioPeer::IDLUGAR, LugarPeer::IDLUGAR, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = LugarinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = LugarinventarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = LugarinventarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                LugarinventarioPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (Lugarinventario) to the collection in $obj2 (Lugar)
                $obj2->addLugarinventario($obj1);

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
        return Propel::getDatabaseMap(LugarinventarioPeer::DATABASE_NAME)->getTable(LugarinventarioPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseLugarinventarioPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseLugarinventarioPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \LugarinventarioTableMap());
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
        return LugarinventarioPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Lugarinventario or Criteria object.
     *
     * @param      mixed $values Criteria or Lugarinventario object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LugarinventarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Lugarinventario object
        }

        if ($criteria->containsKey(LugarinventarioPeer::IDLUGARINVENTARIO) && $criteria->keyContainsValue(LugarinventarioPeer::IDLUGARINVENTARIO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.LugarinventarioPeer::IDLUGARINVENTARIO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(LugarinventarioPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Lugarinventario or Criteria object.
     *
     * @param      mixed $values Criteria or Lugarinventario object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LugarinventarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(LugarinventarioPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(LugarinventarioPeer::IDLUGARINVENTARIO);
            $value = $criteria->remove(LugarinventarioPeer::IDLUGARINVENTARIO);
            if ($value) {
                $selectCriteria->add(LugarinventarioPeer::IDLUGARINVENTARIO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(LugarinventarioPeer::TABLE_NAME);
            }

        } else { // $values is Lugarinventario object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(LugarinventarioPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the lugarinventario table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LugarinventarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += LugarinventarioPeer::doOnDeleteCascade(new Criteria(LugarinventarioPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(LugarinventarioPeer::TABLE_NAME, $con, LugarinventarioPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            LugarinventarioPeer::clearInstancePool();
            LugarinventarioPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Lugarinventario or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Lugarinventario object or primary key or array of primary keys
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
            $con = Propel::getConnection(LugarinventarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Lugarinventario) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(LugarinventarioPeer::DATABASE_NAME);
            $criteria->add(LugarinventarioPeer::IDLUGARINVENTARIO, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(LugarinventarioPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += LugarinventarioPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                LugarinventarioPeer::clearInstancePool();
            } elseif ($values instanceof Lugarinventario) { // it's a model object
                LugarinventarioPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    LugarinventarioPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            LugarinventarioPeer::clearRelatedInstancePool();
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
        $objects = LugarinventarioPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Cargoadmision objects
            $criteria = new Criteria(CargoadmisionPeer::DATABASE_NAME);

            $criteria->add(CargoadmisionPeer::IDLUGARINVENTARIO, $obj->getIdlugarinventario());
            $affectedRows += CargoadmisionPeer::doDelete($criteria, $con);

            // delete related Cargoconsulta objects
            $criteria = new Criteria(CargoconsultaPeer::DATABASE_NAME);

            $criteria->add(CargoconsultaPeer::IDLUGARINVENTARIO, $obj->getIdlugarinventario());
            $affectedRows += CargoconsultaPeer::doDelete($criteria, $con);

            // delete related Cargoventa objects
            $criteria = new Criteria(CargoventaPeer::DATABASE_NAME);

            $criteria->add(CargoventaPeer::IDLUGARINVENTARIO, $obj->getIdlugarinventario());
            $affectedRows += CargoventaPeer::doDelete($criteria, $con);

            // delete related Traspasodetalles objects
            $criteria = new Criteria(TraspasodetallesPeer::DATABASE_NAME);

            $criteria->add(TraspasodetallesPeer::IDLUGARINVENTARIO, $obj->getIdlugarinventario());
            $affectedRows += TraspasodetallesPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Lugarinventario object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Lugarinventario $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(LugarinventarioPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(LugarinventarioPeer::TABLE_NAME);

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

        return BasePeer::doValidate(LugarinventarioPeer::DATABASE_NAME, LugarinventarioPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Lugarinventario
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = LugarinventarioPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(LugarinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(LugarinventarioPeer::DATABASE_NAME);
        $criteria->add(LugarinventarioPeer::IDLUGARINVENTARIO, $pk);

        $v = LugarinventarioPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Lugarinventario[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LugarinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(LugarinventarioPeer::DATABASE_NAME);
            $criteria->add(LugarinventarioPeer::IDLUGARINVENTARIO, $pks, Criteria::IN);
            $objs = LugarinventarioPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseLugarinventarioPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseLugarinventarioPeer::buildTableMap();

