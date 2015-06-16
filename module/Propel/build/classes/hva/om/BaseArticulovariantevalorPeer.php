<?php


/**
 * Base static class for performing query and update operations on the 'articulovariantevalor' table.
 *
 *
 *
 * @package propel.generator.hva.om
 */
abstract class BaseArticulovariantevalorPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'hva';

    /** the table name for this class */
    const TABLE_NAME = 'articulovariantevalor';

    /** the related Propel class for this table */
    const OM_CLASS = 'Articulovariantevalor';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ArticulovariantevalorTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 5;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 5;

    /** the column name for the idarticulovariantevalor field */
    const IDARTICULOVARIANTEVALOR = 'articulovariantevalor.idarticulovariantevalor';

    /** the column name for the idarticulo field */
    const IDARTICULO = 'articulovariantevalor.idarticulo';

    /** the column name for the idpropiedad field */
    const IDPROPIEDAD = 'articulovariantevalor.idpropiedad';

    /** the column name for the idpropiedadvalor field */
    const IDPROPIEDADVALOR = 'articulovariantevalor.idpropiedadvalor';

    /** the column name for the idarticulovariante field */
    const IDARTICULOVARIANTE = 'articulovariantevalor.idarticulovariante';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Articulovariantevalor objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Articulovariantevalor[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ArticulovariantevalorPeer::$fieldNames[ArticulovariantevalorPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idarticulovariantevalor', 'Idarticulo', 'Idpropiedad', 'Idpropiedadvalor', 'Idarticulovariante', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idarticulovariantevalor', 'idarticulo', 'idpropiedad', 'idpropiedadvalor', 'idarticulovariante', ),
        BasePeer::TYPE_COLNAME => array (ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR, ArticulovariantevalorPeer::IDARTICULO, ArticulovariantevalorPeer::IDPROPIEDAD, ArticulovariantevalorPeer::IDPROPIEDADVALOR, ArticulovariantevalorPeer::IDARTICULOVARIANTE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDARTICULOVARIANTEVALOR', 'IDARTICULO', 'IDPROPIEDAD', 'IDPROPIEDADVALOR', 'IDARTICULOVARIANTE', ),
        BasePeer::TYPE_FIELDNAME => array ('idarticulovariantevalor', 'idarticulo', 'idpropiedad', 'idpropiedadvalor', 'idarticulovariante', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ArticulovariantevalorPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idarticulovariantevalor' => 0, 'Idarticulo' => 1, 'Idpropiedad' => 2, 'Idpropiedadvalor' => 3, 'Idarticulovariante' => 4, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idarticulovariantevalor' => 0, 'idarticulo' => 1, 'idpropiedad' => 2, 'idpropiedadvalor' => 3, 'idarticulovariante' => 4, ),
        BasePeer::TYPE_COLNAME => array (ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR => 0, ArticulovariantevalorPeer::IDARTICULO => 1, ArticulovariantevalorPeer::IDPROPIEDAD => 2, ArticulovariantevalorPeer::IDPROPIEDADVALOR => 3, ArticulovariantevalorPeer::IDARTICULOVARIANTE => 4, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDARTICULOVARIANTEVALOR' => 0, 'IDARTICULO' => 1, 'IDPROPIEDAD' => 2, 'IDPROPIEDADVALOR' => 3, 'IDARTICULOVARIANTE' => 4, ),
        BasePeer::TYPE_FIELDNAME => array ('idarticulovariantevalor' => 0, 'idarticulo' => 1, 'idpropiedad' => 2, 'idpropiedadvalor' => 3, 'idarticulovariante' => 4, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
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
        $toNames = ArticulovariantevalorPeer::getFieldNames($toType);
        $key = isset(ArticulovariantevalorPeer::$fieldKeys[$fromType][$name]) ? ArticulovariantevalorPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ArticulovariantevalorPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ArticulovariantevalorPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ArticulovariantevalorPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ArticulovariantevalorPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ArticulovariantevalorPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR);
            $criteria->addSelectColumn(ArticulovariantevalorPeer::IDARTICULO);
            $criteria->addSelectColumn(ArticulovariantevalorPeer::IDPROPIEDAD);
            $criteria->addSelectColumn(ArticulovariantevalorPeer::IDPROPIEDADVALOR);
            $criteria->addSelectColumn(ArticulovariantevalorPeer::IDARTICULOVARIANTE);
        } else {
            $criteria->addSelectColumn($alias . '.idarticulovariantevalor');
            $criteria->addSelectColumn($alias . '.idarticulo');
            $criteria->addSelectColumn($alias . '.idpropiedad');
            $criteria->addSelectColumn($alias . '.idpropiedadvalor');
            $criteria->addSelectColumn($alias . '.idarticulovariante');
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
        $criteria->setPrimaryTableName(ArticulovariantevalorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ArticulovariantevalorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Articulovariantevalor
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ArticulovariantevalorPeer::doSelect($critcopy, $con);
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
        return ArticulovariantevalorPeer::populateObjects(ArticulovariantevalorPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ArticulovariantevalorPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);

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
     * @param Articulovariantevalor $obj A Articulovariantevalor object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdarticulovariantevalor();
            } // if key === null
            ArticulovariantevalorPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Articulovariantevalor object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Articulovariantevalor) {
                $key = (string) $value->getIdarticulovariantevalor();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Articulovariantevalor object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ArticulovariantevalorPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Articulovariantevalor Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ArticulovariantevalorPeer::$instances[$key])) {
                return ArticulovariantevalorPeer::$instances[$key];
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
        foreach (ArticulovariantevalorPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ArticulovariantevalorPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to articulovariantevalor
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
        $cls = ArticulovariantevalorPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ArticulovariantevalorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ArticulovariantevalorPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ArticulovariantevalorPeer::addInstanceToPool($obj, $key);
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
     * @return array (Articulovariantevalor object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ArticulovariantevalorPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ArticulovariantevalorPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ArticulovariantevalorPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ArticulovariantevalorPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ArticulovariantevalorPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Articulo table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinArticulo(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ArticulovariantevalorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ArticulovariantevalorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULO, ArticuloPeer::IDARTICULO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Articulovariante table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinArticulovariante(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ArticulovariantevalorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ArticulovariantevalorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULOVARIANTE, ArticulovariantePeer::IDARTICULOVARIANTE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Propiedad table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPropiedad(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ArticulovariantevalorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ArticulovariantevalorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDAD, PropiedadPeer::IDPROPIEDAD, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Propiedadvalor table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPropiedadvalor(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ArticulovariantevalorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ArticulovariantevalorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDADVALOR, PropiedadvalorPeer::IDPROPIEDADVALOR, $join_behavior);

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
     * Selects a collection of Articulovariantevalor objects pre-filled with their Articulo objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Articulovariantevalor objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinArticulo(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);
        }

        ArticulovariantevalorPeer::addSelectColumns($criteria);
        $startcol = ArticulovariantevalorPeer::NUM_HYDRATE_COLUMNS;
        ArticuloPeer::addSelectColumns($criteria);

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULO, ArticuloPeer::IDARTICULO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ArticulovariantevalorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ArticulovariantevalorPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ArticulovariantevalorPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ArticulovariantevalorPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ArticuloPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ArticuloPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ArticuloPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ArticuloPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Articulovariantevalor) to $obj2 (Articulo)
                $obj2->addArticulovariantevalor($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Articulovariantevalor objects pre-filled with their Articulovariante objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Articulovariantevalor objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinArticulovariante(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);
        }

        ArticulovariantevalorPeer::addSelectColumns($criteria);
        $startcol = ArticulovariantevalorPeer::NUM_HYDRATE_COLUMNS;
        ArticulovariantePeer::addSelectColumns($criteria);

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULOVARIANTE, ArticulovariantePeer::IDARTICULOVARIANTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ArticulovariantevalorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ArticulovariantevalorPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ArticulovariantevalorPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ArticulovariantevalorPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ArticulovariantePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ArticulovariantePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ArticulovariantePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ArticulovariantePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Articulovariantevalor) to $obj2 (Articulovariante)
                $obj2->addArticulovariantevalor($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Articulovariantevalor objects pre-filled with their Propiedad objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Articulovariantevalor objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPropiedad(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);
        }

        ArticulovariantevalorPeer::addSelectColumns($criteria);
        $startcol = ArticulovariantevalorPeer::NUM_HYDRATE_COLUMNS;
        PropiedadPeer::addSelectColumns($criteria);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDAD, PropiedadPeer::IDPROPIEDAD, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ArticulovariantevalorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ArticulovariantevalorPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ArticulovariantevalorPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ArticulovariantevalorPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PropiedadPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PropiedadPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PropiedadPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PropiedadPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Articulovariantevalor) to $obj2 (Propiedad)
                $obj2->addArticulovariantevalor($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Articulovariantevalor objects pre-filled with their Propiedadvalor objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Articulovariantevalor objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPropiedadvalor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);
        }

        ArticulovariantevalorPeer::addSelectColumns($criteria);
        $startcol = ArticulovariantevalorPeer::NUM_HYDRATE_COLUMNS;
        PropiedadvalorPeer::addSelectColumns($criteria);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDADVALOR, PropiedadvalorPeer::IDPROPIEDADVALOR, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ArticulovariantevalorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ArticulovariantevalorPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ArticulovariantevalorPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ArticulovariantevalorPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PropiedadvalorPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PropiedadvalorPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PropiedadvalorPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PropiedadvalorPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Articulovariantevalor) to $obj2 (Propiedadvalor)
                $obj2->addArticulovariantevalor($obj1);

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
        $criteria->setPrimaryTableName(ArticulovariantevalorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ArticulovariantevalorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULO, ArticuloPeer::IDARTICULO, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULOVARIANTE, ArticulovariantePeer::IDARTICULOVARIANTE, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDAD, PropiedadPeer::IDPROPIEDAD, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDADVALOR, PropiedadvalorPeer::IDPROPIEDADVALOR, $join_behavior);

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
     * Selects a collection of Articulovariantevalor objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Articulovariantevalor objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);
        }

        ArticulovariantevalorPeer::addSelectColumns($criteria);
        $startcol2 = ArticulovariantevalorPeer::NUM_HYDRATE_COLUMNS;

        ArticuloPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ArticuloPeer::NUM_HYDRATE_COLUMNS;

        ArticulovariantePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ArticulovariantePeer::NUM_HYDRATE_COLUMNS;

        PropiedadPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + PropiedadPeer::NUM_HYDRATE_COLUMNS;

        PropiedadvalorPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + PropiedadvalorPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULO, ArticuloPeer::IDARTICULO, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULOVARIANTE, ArticulovariantePeer::IDARTICULOVARIANTE, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDAD, PropiedadPeer::IDPROPIEDAD, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDADVALOR, PropiedadvalorPeer::IDPROPIEDADVALOR, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ArticulovariantevalorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ArticulovariantevalorPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ArticulovariantevalorPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ArticulovariantevalorPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Articulo rows

            $key2 = ArticuloPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ArticuloPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ArticuloPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ArticuloPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Articulovariantevalor) to the collection in $obj2 (Articulo)
                $obj2->addArticulovariantevalor($obj1);
            } // if joined row not null

            // Add objects for joined Articulovariante rows

            $key3 = ArticulovariantePeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ArticulovariantePeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ArticulovariantePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ArticulovariantePeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Articulovariantevalor) to the collection in $obj3 (Articulovariante)
                $obj3->addArticulovariantevalor($obj1);
            } // if joined row not null

            // Add objects for joined Propiedad rows

            $key4 = PropiedadPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = PropiedadPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = PropiedadPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    PropiedadPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Articulovariantevalor) to the collection in $obj4 (Propiedad)
                $obj4->addArticulovariantevalor($obj1);
            } // if joined row not null

            // Add objects for joined Propiedadvalor rows

            $key5 = PropiedadvalorPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = PropiedadvalorPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = PropiedadvalorPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    PropiedadvalorPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Articulovariantevalor) to the collection in $obj5 (Propiedadvalor)
                $obj5->addArticulovariantevalor($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Articulo table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptArticulo(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ArticulovariantevalorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ArticulovariantevalorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULOVARIANTE, ArticulovariantePeer::IDARTICULOVARIANTE, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDAD, PropiedadPeer::IDPROPIEDAD, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDADVALOR, PropiedadvalorPeer::IDPROPIEDADVALOR, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Articulovariante table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptArticulovariante(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ArticulovariantevalorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ArticulovariantevalorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULO, ArticuloPeer::IDARTICULO, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDAD, PropiedadPeer::IDPROPIEDAD, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDADVALOR, PropiedadvalorPeer::IDPROPIEDADVALOR, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Propiedad table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPropiedad(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ArticulovariantevalorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ArticulovariantevalorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULO, ArticuloPeer::IDARTICULO, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULOVARIANTE, ArticulovariantePeer::IDARTICULOVARIANTE, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDADVALOR, PropiedadvalorPeer::IDPROPIEDADVALOR, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Propiedadvalor table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPropiedadvalor(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ArticulovariantevalorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ArticulovariantevalorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULO, ArticuloPeer::IDARTICULO, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULOVARIANTE, ArticulovariantePeer::IDARTICULOVARIANTE, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDAD, PropiedadPeer::IDPROPIEDAD, $join_behavior);

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
     * Selects a collection of Articulovariantevalor objects pre-filled with all related objects except Articulo.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Articulovariantevalor objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptArticulo(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);
        }

        ArticulovariantevalorPeer::addSelectColumns($criteria);
        $startcol2 = ArticulovariantevalorPeer::NUM_HYDRATE_COLUMNS;

        ArticulovariantePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ArticulovariantePeer::NUM_HYDRATE_COLUMNS;

        PropiedadPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + PropiedadPeer::NUM_HYDRATE_COLUMNS;

        PropiedadvalorPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + PropiedadvalorPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULOVARIANTE, ArticulovariantePeer::IDARTICULOVARIANTE, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDAD, PropiedadPeer::IDPROPIEDAD, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDADVALOR, PropiedadvalorPeer::IDPROPIEDADVALOR, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ArticulovariantevalorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ArticulovariantevalorPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ArticulovariantevalorPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ArticulovariantevalorPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Articulovariante rows

                $key2 = ArticulovariantePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ArticulovariantePeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ArticulovariantePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ArticulovariantePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Articulovariantevalor) to the collection in $obj2 (Articulovariante)
                $obj2->addArticulovariantevalor($obj1);

            } // if joined row is not null

                // Add objects for joined Propiedad rows

                $key3 = PropiedadPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = PropiedadPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = PropiedadPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    PropiedadPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Articulovariantevalor) to the collection in $obj3 (Propiedad)
                $obj3->addArticulovariantevalor($obj1);

            } // if joined row is not null

                // Add objects for joined Propiedadvalor rows

                $key4 = PropiedadvalorPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = PropiedadvalorPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = PropiedadvalorPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    PropiedadvalorPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Articulovariantevalor) to the collection in $obj4 (Propiedadvalor)
                $obj4->addArticulovariantevalor($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Articulovariantevalor objects pre-filled with all related objects except Articulovariante.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Articulovariantevalor objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptArticulovariante(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);
        }

        ArticulovariantevalorPeer::addSelectColumns($criteria);
        $startcol2 = ArticulovariantevalorPeer::NUM_HYDRATE_COLUMNS;

        ArticuloPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ArticuloPeer::NUM_HYDRATE_COLUMNS;

        PropiedadPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + PropiedadPeer::NUM_HYDRATE_COLUMNS;

        PropiedadvalorPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + PropiedadvalorPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULO, ArticuloPeer::IDARTICULO, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDAD, PropiedadPeer::IDPROPIEDAD, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDADVALOR, PropiedadvalorPeer::IDPROPIEDADVALOR, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ArticulovariantevalorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ArticulovariantevalorPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ArticulovariantevalorPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ArticulovariantevalorPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Articulo rows

                $key2 = ArticuloPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ArticuloPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ArticuloPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ArticuloPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Articulovariantevalor) to the collection in $obj2 (Articulo)
                $obj2->addArticulovariantevalor($obj1);

            } // if joined row is not null

                // Add objects for joined Propiedad rows

                $key3 = PropiedadPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = PropiedadPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = PropiedadPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    PropiedadPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Articulovariantevalor) to the collection in $obj3 (Propiedad)
                $obj3->addArticulovariantevalor($obj1);

            } // if joined row is not null

                // Add objects for joined Propiedadvalor rows

                $key4 = PropiedadvalorPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = PropiedadvalorPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = PropiedadvalorPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    PropiedadvalorPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Articulovariantevalor) to the collection in $obj4 (Propiedadvalor)
                $obj4->addArticulovariantevalor($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Articulovariantevalor objects pre-filled with all related objects except Propiedad.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Articulovariantevalor objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPropiedad(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);
        }

        ArticulovariantevalorPeer::addSelectColumns($criteria);
        $startcol2 = ArticulovariantevalorPeer::NUM_HYDRATE_COLUMNS;

        ArticuloPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ArticuloPeer::NUM_HYDRATE_COLUMNS;

        ArticulovariantePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ArticulovariantePeer::NUM_HYDRATE_COLUMNS;

        PropiedadvalorPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + PropiedadvalorPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULO, ArticuloPeer::IDARTICULO, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULOVARIANTE, ArticulovariantePeer::IDARTICULOVARIANTE, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDADVALOR, PropiedadvalorPeer::IDPROPIEDADVALOR, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ArticulovariantevalorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ArticulovariantevalorPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ArticulovariantevalorPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ArticulovariantevalorPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Articulo rows

                $key2 = ArticuloPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ArticuloPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ArticuloPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ArticuloPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Articulovariantevalor) to the collection in $obj2 (Articulo)
                $obj2->addArticulovariantevalor($obj1);

            } // if joined row is not null

                // Add objects for joined Articulovariante rows

                $key3 = ArticulovariantePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ArticulovariantePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ArticulovariantePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ArticulovariantePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Articulovariantevalor) to the collection in $obj3 (Articulovariante)
                $obj3->addArticulovariantevalor($obj1);

            } // if joined row is not null

                // Add objects for joined Propiedadvalor rows

                $key4 = PropiedadvalorPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = PropiedadvalorPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = PropiedadvalorPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    PropiedadvalorPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Articulovariantevalor) to the collection in $obj4 (Propiedadvalor)
                $obj4->addArticulovariantevalor($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Articulovariantevalor objects pre-filled with all related objects except Propiedadvalor.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Articulovariantevalor objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPropiedadvalor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);
        }

        ArticulovariantevalorPeer::addSelectColumns($criteria);
        $startcol2 = ArticulovariantevalorPeer::NUM_HYDRATE_COLUMNS;

        ArticuloPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ArticuloPeer::NUM_HYDRATE_COLUMNS;

        ArticulovariantePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ArticulovariantePeer::NUM_HYDRATE_COLUMNS;

        PropiedadPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + PropiedadPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULO, ArticuloPeer::IDARTICULO, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDARTICULOVARIANTE, ArticulovariantePeer::IDARTICULOVARIANTE, $join_behavior);

        $criteria->addJoin(ArticulovariantevalorPeer::IDPROPIEDAD, PropiedadPeer::IDPROPIEDAD, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ArticulovariantevalorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ArticulovariantevalorPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ArticulovariantevalorPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ArticulovariantevalorPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Articulo rows

                $key2 = ArticuloPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ArticuloPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ArticuloPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ArticuloPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Articulovariantevalor) to the collection in $obj2 (Articulo)
                $obj2->addArticulovariantevalor($obj1);

            } // if joined row is not null

                // Add objects for joined Articulovariante rows

                $key3 = ArticulovariantePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ArticulovariantePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ArticulovariantePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ArticulovariantePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Articulovariantevalor) to the collection in $obj3 (Articulovariante)
                $obj3->addArticulovariantevalor($obj1);

            } // if joined row is not null

                // Add objects for joined Propiedad rows

                $key4 = PropiedadPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = PropiedadPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = PropiedadPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    PropiedadPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Articulovariantevalor) to the collection in $obj4 (Propiedad)
                $obj4->addArticulovariantevalor($obj1);

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
        return Propel::getDatabaseMap(ArticulovariantevalorPeer::DATABASE_NAME)->getTable(ArticulovariantevalorPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseArticulovariantevalorPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseArticulovariantevalorPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ArticulovariantevalorTableMap());
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
        return ArticulovariantevalorPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Articulovariantevalor or Criteria object.
     *
     * @param      mixed $values Criteria or Articulovariantevalor object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Articulovariantevalor object
        }

        if ($criteria->containsKey(ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR) && $criteria->keyContainsValue(ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Articulovariantevalor or Criteria object.
     *
     * @param      mixed $values Criteria or Articulovariantevalor object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ArticulovariantevalorPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR);
            $value = $criteria->remove(ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR);
            if ($value) {
                $selectCriteria->add(ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ArticulovariantevalorPeer::TABLE_NAME);
            }

        } else { // $values is Articulovariantevalor object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the articulovariantevalor table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ArticulovariantevalorPeer::TABLE_NAME, $con, ArticulovariantevalorPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArticulovariantevalorPeer::clearInstancePool();
            ArticulovariantevalorPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Articulovariantevalor or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Articulovariantevalor object or primary key or array of primary keys
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
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ArticulovariantevalorPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Articulovariantevalor) { // it's a model object
            // invalidate the cache for this single object
            ArticulovariantevalorPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ArticulovariantevalorPeer::DATABASE_NAME);
            $criteria->add(ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ArticulovariantevalorPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ArticulovariantevalorPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ArticulovariantevalorPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Articulovariantevalor object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Articulovariantevalor $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ArticulovariantevalorPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ArticulovariantevalorPeer::TABLE_NAME);

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

        return BasePeer::doValidate(ArticulovariantevalorPeer::DATABASE_NAME, ArticulovariantevalorPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Articulovariantevalor
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ArticulovariantevalorPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ArticulovariantevalorPeer::DATABASE_NAME);
        $criteria->add(ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR, $pk);

        $v = ArticulovariantevalorPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Articulovariantevalor[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ArticulovariantevalorPeer::DATABASE_NAME);
            $criteria->add(ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR, $pks, Criteria::IN);
            $objs = ArticulovariantevalorPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseArticulovariantevalorPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseArticulovariantevalorPeer::buildTableMap();

