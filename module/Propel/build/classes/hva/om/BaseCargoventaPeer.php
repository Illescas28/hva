<?php


/**
 * Base static class for performing query and update operations on the 'cargoventa' table.
 *
 *
 *
 * @package propel.generator.hva.om
 */
abstract class BaseCargoventaPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'hva';

    /** the table name for this class */
    const TABLE_NAME = 'cargoventa';

    /** the related Propel class for this table */
    const OM_CLASS = 'Cargoventa';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CargoventaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the idcargoventa field */
    const IDCARGOVENTA = 'cargoventa.idcargoventa';

    /** the column name for the idventa field */
    const IDVENTA = 'cargoventa.idventa';

    /** the column name for the idlugarinventario field */
    const IDLUGARINVENTARIO = 'cargoventa.idlugarinventario';

    /** the column name for the idservicio field */
    const IDSERVICIO = 'cargoventa.idservicio';

    /** the column name for the cargoventa_tipo field */
    const CARGOVENTA_TIPO = 'cargoventa.cargoventa_tipo';

    /** the column name for the cargoventa_fecha field */
    const CARGOVENTA_FECHA = 'cargoventa.cargoventa_fecha';

    /** the column name for the cantidad field */
    const CANTIDAD = 'cargoventa.cantidad';

    /** the column name for the monto field */
    const MONTO = 'cargoventa.monto';

    /** The enumerated values for the cargoventa_tipo field */
    const CARGOVENTA_TIPO_ARTICULO = 'articulo';
    const CARGOVENTA_TIPO_SERVICIO = 'servicio';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Cargoventa objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Cargoventa[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CargoventaPeer::$fieldNames[CargoventaPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idcargoventa', 'Idventa', 'Idlugarinventario', 'Idservicio', 'CargoventaTipo', 'CargoventaFecha', 'Cantidad', 'Monto', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcargoventa', 'idventa', 'idlugarinventario', 'idservicio', 'cargoventaTipo', 'cargoventaFecha', 'cantidad', 'monto', ),
        BasePeer::TYPE_COLNAME => array (CargoventaPeer::IDCARGOVENTA, CargoventaPeer::IDVENTA, CargoventaPeer::IDLUGARINVENTARIO, CargoventaPeer::IDSERVICIO, CargoventaPeer::CARGOVENTA_TIPO, CargoventaPeer::CARGOVENTA_FECHA, CargoventaPeer::CANTIDAD, CargoventaPeer::MONTO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCARGOVENTA', 'IDVENTA', 'IDLUGARINVENTARIO', 'IDSERVICIO', 'CARGOVENTA_TIPO', 'CARGOVENTA_FECHA', 'CANTIDAD', 'MONTO', ),
        BasePeer::TYPE_FIELDNAME => array ('idcargoventa', 'idventa', 'idlugarinventario', 'idservicio', 'cargoventa_tipo', 'cargoventa_fecha', 'cantidad', 'monto', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CargoventaPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idcargoventa' => 0, 'Idventa' => 1, 'Idlugarinventario' => 2, 'Idservicio' => 3, 'CargoventaTipo' => 4, 'CargoventaFecha' => 5, 'Cantidad' => 6, 'Monto' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcargoventa' => 0, 'idventa' => 1, 'idlugarinventario' => 2, 'idservicio' => 3, 'cargoventaTipo' => 4, 'cargoventaFecha' => 5, 'cantidad' => 6, 'monto' => 7, ),
        BasePeer::TYPE_COLNAME => array (CargoventaPeer::IDCARGOVENTA => 0, CargoventaPeer::IDVENTA => 1, CargoventaPeer::IDLUGARINVENTARIO => 2, CargoventaPeer::IDSERVICIO => 3, CargoventaPeer::CARGOVENTA_TIPO => 4, CargoventaPeer::CARGOVENTA_FECHA => 5, CargoventaPeer::CANTIDAD => 6, CargoventaPeer::MONTO => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCARGOVENTA' => 0, 'IDVENTA' => 1, 'IDLUGARINVENTARIO' => 2, 'IDSERVICIO' => 3, 'CARGOVENTA_TIPO' => 4, 'CARGOVENTA_FECHA' => 5, 'CANTIDAD' => 6, 'MONTO' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('idcargoventa' => 0, 'idventa' => 1, 'idlugarinventario' => 2, 'idservicio' => 3, 'cargoventa_tipo' => 4, 'cargoventa_fecha' => 5, 'cantidad' => 6, 'monto' => 7, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CargoventaPeer::CARGOVENTA_TIPO => array(
            CargoventaPeer::CARGOVENTA_TIPO_ARTICULO,
            CargoventaPeer::CARGOVENTA_TIPO_SERVICIO,
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
        $toNames = CargoventaPeer::getFieldNames($toType);
        $key = isset(CargoventaPeer::$fieldKeys[$fromType][$name]) ? CargoventaPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CargoventaPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CargoventaPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CargoventaPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CargoventaPeer::$enumValueSets;
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
        $valueSets = CargoventaPeer::getValueSets();

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
        $values = CargoventaPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CargoventaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CargoventaPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CargoventaPeer::IDCARGOVENTA);
            $criteria->addSelectColumn(CargoventaPeer::IDVENTA);
            $criteria->addSelectColumn(CargoventaPeer::IDLUGARINVENTARIO);
            $criteria->addSelectColumn(CargoventaPeer::IDSERVICIO);
            $criteria->addSelectColumn(CargoventaPeer::CARGOVENTA_TIPO);
            $criteria->addSelectColumn(CargoventaPeer::CARGOVENTA_FECHA);
            $criteria->addSelectColumn(CargoventaPeer::CANTIDAD);
            $criteria->addSelectColumn(CargoventaPeer::MONTO);
        } else {
            $criteria->addSelectColumn($alias . '.idcargoventa');
            $criteria->addSelectColumn($alias . '.idventa');
            $criteria->addSelectColumn($alias . '.idlugarinventario');
            $criteria->addSelectColumn($alias . '.idservicio');
            $criteria->addSelectColumn($alias . '.cargoventa_tipo');
            $criteria->addSelectColumn($alias . '.cargoventa_fecha');
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
        $criteria->setPrimaryTableName(CargoventaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoventaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CargoventaPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CargoventaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Cargoventa
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CargoventaPeer::doSelect($critcopy, $con);
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
        return CargoventaPeer::populateObjects(CargoventaPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CargoventaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CargoventaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CargoventaPeer::DATABASE_NAME);

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
     * @param Cargoventa $obj A Cargoventa object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdcargoventa();
            } // if key === null
            CargoventaPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Cargoventa object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Cargoventa) {
                $key = (string) $value->getIdcargoventa();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Cargoventa object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CargoventaPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Cargoventa Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CargoventaPeer::$instances[$key])) {
                return CargoventaPeer::$instances[$key];
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
        foreach (CargoventaPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CargoventaPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to cargoventa
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
        $cls = CargoventaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CargoventaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CargoventaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CargoventaPeer::addInstanceToPool($obj, $key);
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
     * @return array (Cargoventa object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CargoventaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CargoventaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CargoventaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CargoventaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CargoventaPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        $criteria->setPrimaryTableName(CargoventaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoventaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CargoventaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoventaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoventaPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(CargoventaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoventaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CargoventaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoventaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoventaPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Venta table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinVenta(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CargoventaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoventaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CargoventaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoventaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoventaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
     * Selects a collection of Cargoventa objects pre-filled with their Lugarinventario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoventa objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinLugarinventario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CargoventaPeer::DATABASE_NAME);
        }

        CargoventaPeer::addSelectColumns($criteria);
        $startcol = CargoventaPeer::NUM_HYDRATE_COLUMNS;
        LugarinventarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(CargoventaPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoventaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoventaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CargoventaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoventaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Cargoventa) to $obj2 (Lugarinventario)
                $obj2->addCargoventa($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cargoventa objects pre-filled with their Servicio objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoventa objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinServicio(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CargoventaPeer::DATABASE_NAME);
        }

        CargoventaPeer::addSelectColumns($criteria);
        $startcol = CargoventaPeer::NUM_HYDRATE_COLUMNS;
        ServicioPeer::addSelectColumns($criteria);

        $criteria->addJoin(CargoventaPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoventaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoventaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CargoventaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoventaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Cargoventa) to $obj2 (Servicio)
                $obj2->addCargoventa($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cargoventa objects pre-filled with their Venta objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoventa objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinVenta(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CargoventaPeer::DATABASE_NAME);
        }

        CargoventaPeer::addSelectColumns($criteria);
        $startcol = CargoventaPeer::NUM_HYDRATE_COLUMNS;
        VentaPeer::addSelectColumns($criteria);

        $criteria->addJoin(CargoventaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoventaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoventaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CargoventaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoventaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = VentaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = VentaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    VentaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Cargoventa) to $obj2 (Venta)
                $obj2->addCargoventa($obj1);

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
        $criteria->setPrimaryTableName(CargoventaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoventaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CargoventaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoventaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoventaPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $criteria->addJoin(CargoventaPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

        $criteria->addJoin(CargoventaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
     * Selects a collection of Cargoventa objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoventa objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CargoventaPeer::DATABASE_NAME);
        }

        CargoventaPeer::addSelectColumns($criteria);
        $startcol2 = CargoventaPeer::NUM_HYDRATE_COLUMNS;

        LugarinventarioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + LugarinventarioPeer::NUM_HYDRATE_COLUMNS;

        ServicioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ServicioPeer::NUM_HYDRATE_COLUMNS;

        VentaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + VentaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CargoventaPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $criteria->addJoin(CargoventaPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

        $criteria->addJoin(CargoventaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoventaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoventaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CargoventaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoventaPeer::addInstanceToPool($obj1, $key1);
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
                } // if obj2 loaded

                // Add the $obj1 (Cargoventa) to the collection in $obj2 (Lugarinventario)
                $obj2->addCargoventa($obj1);
            } // if joined row not null

            // Add objects for joined Servicio rows

            $key3 = ServicioPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ServicioPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ServicioPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ServicioPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Cargoventa) to the collection in $obj3 (Servicio)
                $obj3->addCargoventa($obj1);
            } // if joined row not null

            // Add objects for joined Venta rows

            $key4 = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = VentaPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = VentaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    VentaPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Cargoventa) to the collection in $obj4 (Venta)
                $obj4->addCargoventa($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
        $criteria->setPrimaryTableName(CargoventaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoventaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CargoventaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoventaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoventaPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

        $criteria->addJoin(CargoventaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
        $criteria->setPrimaryTableName(CargoventaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoventaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CargoventaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoventaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoventaPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $criteria->addJoin(CargoventaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Venta table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptVenta(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CargoventaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CargoventaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CargoventaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CargoventaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CargoventaPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $criteria->addJoin(CargoventaPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

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
     * Selects a collection of Cargoventa objects pre-filled with all related objects except Lugarinventario.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoventa objects.
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
            $criteria->setDbName(CargoventaPeer::DATABASE_NAME);
        }

        CargoventaPeer::addSelectColumns($criteria);
        $startcol2 = CargoventaPeer::NUM_HYDRATE_COLUMNS;

        ServicioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ServicioPeer::NUM_HYDRATE_COLUMNS;

        VentaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + VentaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CargoventaPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);

        $criteria->addJoin(CargoventaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoventaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoventaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CargoventaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoventaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Servicio rows

                $key2 = ServicioPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ServicioPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ServicioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ServicioPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Cargoventa) to the collection in $obj2 (Servicio)
                $obj2->addCargoventa($obj1);

            } // if joined row is not null

                // Add objects for joined Venta rows

                $key3 = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = VentaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = VentaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    VentaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Cargoventa) to the collection in $obj3 (Venta)
                $obj3->addCargoventa($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cargoventa objects pre-filled with all related objects except Servicio.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoventa objects.
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
            $criteria->setDbName(CargoventaPeer::DATABASE_NAME);
        }

        CargoventaPeer::addSelectColumns($criteria);
        $startcol2 = CargoventaPeer::NUM_HYDRATE_COLUMNS;

        LugarinventarioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + LugarinventarioPeer::NUM_HYDRATE_COLUMNS;

        VentaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + VentaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CargoventaPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $criteria->addJoin(CargoventaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoventaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoventaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CargoventaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoventaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Cargoventa) to the collection in $obj2 (Lugarinventario)
                $obj2->addCargoventa($obj1);

            } // if joined row is not null

                // Add objects for joined Venta rows

                $key3 = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = VentaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = VentaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    VentaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Cargoventa) to the collection in $obj3 (Venta)
                $obj3->addCargoventa($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cargoventa objects pre-filled with all related objects except Venta.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cargoventa objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptVenta(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CargoventaPeer::DATABASE_NAME);
        }

        CargoventaPeer::addSelectColumns($criteria);
        $startcol2 = CargoventaPeer::NUM_HYDRATE_COLUMNS;

        LugarinventarioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + LugarinventarioPeer::NUM_HYDRATE_COLUMNS;

        ServicioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ServicioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CargoventaPeer::IDLUGARINVENTARIO, LugarinventarioPeer::IDLUGARINVENTARIO, $join_behavior);

        $criteria->addJoin(CargoventaPeer::IDSERVICIO, ServicioPeer::IDSERVICIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CargoventaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CargoventaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CargoventaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CargoventaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Cargoventa) to the collection in $obj2 (Lugarinventario)
                $obj2->addCargoventa($obj1);

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

                // Add the $obj1 (Cargoventa) to the collection in $obj3 (Servicio)
                $obj3->addCargoventa($obj1);

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
        return Propel::getDatabaseMap(CargoventaPeer::DATABASE_NAME)->getTable(CargoventaPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCargoventaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCargoventaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CargoventaTableMap());
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
        return CargoventaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Cargoventa or Criteria object.
     *
     * @param      mixed $values Criteria or Cargoventa object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CargoventaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Cargoventa object
        }

        if ($criteria->containsKey(CargoventaPeer::IDCARGOVENTA) && $criteria->keyContainsValue(CargoventaPeer::IDCARGOVENTA) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CargoventaPeer::IDCARGOVENTA.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CargoventaPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Cargoventa or Criteria object.
     *
     * @param      mixed $values Criteria or Cargoventa object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CargoventaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CargoventaPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CargoventaPeer::IDCARGOVENTA);
            $value = $criteria->remove(CargoventaPeer::IDCARGOVENTA);
            if ($value) {
                $selectCriteria->add(CargoventaPeer::IDCARGOVENTA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CargoventaPeer::TABLE_NAME);
            }

        } else { // $values is Cargoventa object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CargoventaPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the cargoventa table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CargoventaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CargoventaPeer::TABLE_NAME, $con, CargoventaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CargoventaPeer::clearInstancePool();
            CargoventaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Cargoventa or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Cargoventa object or primary key or array of primary keys
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
            $con = Propel::getConnection(CargoventaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CargoventaPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Cargoventa) { // it's a model object
            // invalidate the cache for this single object
            CargoventaPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CargoventaPeer::DATABASE_NAME);
            $criteria->add(CargoventaPeer::IDCARGOVENTA, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CargoventaPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CargoventaPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CargoventaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Cargoventa object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Cargoventa $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CargoventaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CargoventaPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CargoventaPeer::DATABASE_NAME, CargoventaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Cargoventa
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CargoventaPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CargoventaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CargoventaPeer::DATABASE_NAME);
        $criteria->add(CargoventaPeer::IDCARGOVENTA, $pk);

        $v = CargoventaPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Cargoventa[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CargoventaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CargoventaPeer::DATABASE_NAME);
            $criteria->add(CargoventaPeer::IDCARGOVENTA, $pks, Criteria::IN);
            $objs = CargoventaPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCargoventaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCargoventaPeer::buildTableMap();

