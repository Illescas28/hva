<?php


/**
 * Base static class for performing query and update operations on the 'articulovariante' table.
 *
 *
 *
 * @package propel.generator.hva.om
 */
abstract class BaseArticulovariantePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'hva';

    /** the table name for this class */
    const TABLE_NAME = 'articulovariante';

    /** the related Propel class for this table */
    const OM_CLASS = 'Articulovariante';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ArticulovarianteTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 7;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 7;

    /** the column name for the idarticulovariante field */
    const IDARTICULOVARIANTE = 'articulovariante.idarticulovariante';

    /** the column name for the idarticulo field */
    const IDARTICULO = 'articulovariante.idarticulo';

    /** the column name for the articulovariante_codigobarras field */
    const ARTICULOVARIANTE_CODIGOBARRAS = 'articulovariante.articulovariante_codigobarras';

    /** the column name for the articulovariante_costo field */
    const ARTICULOVARIANTE_COSTO = 'articulovariante.articulovariante_costo';

    /** the column name for the articulovariante_precio field */
    const ARTICULOVARIANTE_PRECIO = 'articulovariante.articulovariante_precio';

    /** the column name for the articulovariante_iva field */
    const ARTICULOVARIANTE_IVA = 'articulovariante.articulovariante_iva';

    /** the column name for the articulovariante_imagen field */
    const ARTICULOVARIANTE_IMAGEN = 'articulovariante.articulovariante_imagen';

    /** The enumerated values for the articulovariante_iva field */
    const ARTICULOVARIANTE_IVA_EXENTO = 'exento';
    const ARTICULOVARIANTE_IVA_0 = '0';
    const ARTICULOVARIANTE_IVA_16 = '16';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Articulovariante objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Articulovariante[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ArticulovariantePeer::$fieldNames[ArticulovariantePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idarticulovariante', 'Idarticulo', 'ArticulovarianteCodigobarras', 'ArticulovarianteCosto', 'ArticulovariantePrecio', 'ArticulovarianteIva', 'ArticulovarianteImagen', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idarticulovariante', 'idarticulo', 'articulovarianteCodigobarras', 'articulovarianteCosto', 'articulovariantePrecio', 'articulovarianteIva', 'articulovarianteImagen', ),
        BasePeer::TYPE_COLNAME => array (ArticulovariantePeer::IDARTICULOVARIANTE, ArticulovariantePeer::IDARTICULO, ArticulovariantePeer::ARTICULOVARIANTE_CODIGOBARRAS, ArticulovariantePeer::ARTICULOVARIANTE_COSTO, ArticulovariantePeer::ARTICULOVARIANTE_PRECIO, ArticulovariantePeer::ARTICULOVARIANTE_IVA, ArticulovariantePeer::ARTICULOVARIANTE_IMAGEN, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDARTICULOVARIANTE', 'IDARTICULO', 'ARTICULOVARIANTE_CODIGOBARRAS', 'ARTICULOVARIANTE_COSTO', 'ARTICULOVARIANTE_PRECIO', 'ARTICULOVARIANTE_IVA', 'ARTICULOVARIANTE_IMAGEN', ),
        BasePeer::TYPE_FIELDNAME => array ('idarticulovariante', 'idarticulo', 'articulovariante_codigobarras', 'articulovariante_costo', 'articulovariante_precio', 'articulovariante_iva', 'articulovariante_imagen', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ArticulovariantePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idarticulovariante' => 0, 'Idarticulo' => 1, 'ArticulovarianteCodigobarras' => 2, 'ArticulovarianteCosto' => 3, 'ArticulovariantePrecio' => 4, 'ArticulovarianteIva' => 5, 'ArticulovarianteImagen' => 6, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idarticulovariante' => 0, 'idarticulo' => 1, 'articulovarianteCodigobarras' => 2, 'articulovarianteCosto' => 3, 'articulovariantePrecio' => 4, 'articulovarianteIva' => 5, 'articulovarianteImagen' => 6, ),
        BasePeer::TYPE_COLNAME => array (ArticulovariantePeer::IDARTICULOVARIANTE => 0, ArticulovariantePeer::IDARTICULO => 1, ArticulovariantePeer::ARTICULOVARIANTE_CODIGOBARRAS => 2, ArticulovariantePeer::ARTICULOVARIANTE_COSTO => 3, ArticulovariantePeer::ARTICULOVARIANTE_PRECIO => 4, ArticulovariantePeer::ARTICULOVARIANTE_IVA => 5, ArticulovariantePeer::ARTICULOVARIANTE_IMAGEN => 6, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDARTICULOVARIANTE' => 0, 'IDARTICULO' => 1, 'ARTICULOVARIANTE_CODIGOBARRAS' => 2, 'ARTICULOVARIANTE_COSTO' => 3, 'ARTICULOVARIANTE_PRECIO' => 4, 'ARTICULOVARIANTE_IVA' => 5, 'ARTICULOVARIANTE_IMAGEN' => 6, ),
        BasePeer::TYPE_FIELDNAME => array ('idarticulovariante' => 0, 'idarticulo' => 1, 'articulovariante_codigobarras' => 2, 'articulovariante_costo' => 3, 'articulovariante_precio' => 4, 'articulovariante_iva' => 5, 'articulovariante_imagen' => 6, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        ArticulovariantePeer::ARTICULOVARIANTE_IVA => array(
            ArticulovariantePeer::ARTICULOVARIANTE_IVA_EXENTO,
            ArticulovariantePeer::ARTICULOVARIANTE_IVA_0,
            ArticulovariantePeer::ARTICULOVARIANTE_IVA_16,
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
        $toNames = ArticulovariantePeer::getFieldNames($toType);
        $key = isset(ArticulovariantePeer::$fieldKeys[$fromType][$name]) ? ArticulovariantePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ArticulovariantePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ArticulovariantePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ArticulovariantePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return ArticulovariantePeer::$enumValueSets;
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
        $valueSets = ArticulovariantePeer::getValueSets();

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
        $values = ArticulovariantePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. ArticulovariantePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ArticulovariantePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ArticulovariantePeer::IDARTICULOVARIANTE);
            $criteria->addSelectColumn(ArticulovariantePeer::IDARTICULO);
            $criteria->addSelectColumn(ArticulovariantePeer::ARTICULOVARIANTE_CODIGOBARRAS);
            $criteria->addSelectColumn(ArticulovariantePeer::ARTICULOVARIANTE_COSTO);
            $criteria->addSelectColumn(ArticulovariantePeer::ARTICULOVARIANTE_PRECIO);
            $criteria->addSelectColumn(ArticulovariantePeer::ARTICULOVARIANTE_IVA);
            $criteria->addSelectColumn(ArticulovariantePeer::ARTICULOVARIANTE_IMAGEN);
        } else {
            $criteria->addSelectColumn($alias . '.idarticulovariante');
            $criteria->addSelectColumn($alias . '.idarticulo');
            $criteria->addSelectColumn($alias . '.articulovariante_codigobarras');
            $criteria->addSelectColumn($alias . '.articulovariante_costo');
            $criteria->addSelectColumn($alias . '.articulovariante_precio');
            $criteria->addSelectColumn($alias . '.articulovariante_iva');
            $criteria->addSelectColumn($alias . '.articulovariante_imagen');
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
        $criteria->setPrimaryTableName(ArticulovariantePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ArticulovariantePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ArticulovariantePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Articulovariante
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ArticulovariantePeer::doSelect($critcopy, $con);
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
        return ArticulovariantePeer::populateObjects(ArticulovariantePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ArticulovariantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ArticulovariantePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ArticulovariantePeer::DATABASE_NAME);

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
     * @param Articulovariante $obj A Articulovariante object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdarticulovariante();
            } // if key === null
            ArticulovariantePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Articulovariante object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Articulovariante) {
                $key = (string) $value->getIdarticulovariante();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Articulovariante object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ArticulovariantePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Articulovariante Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ArticulovariantePeer::$instances[$key])) {
                return ArticulovariantePeer::$instances[$key];
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
        foreach (ArticulovariantePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ArticulovariantePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to articulovariante
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in ArticulovariantereordenPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ArticulovariantereordenPeer::clearInstancePool();
        // Invalidate objects in ArticulovariantevalorPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ArticulovariantevalorPeer::clearInstancePool();
        // Invalidate objects in OrdencompradetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        OrdencompradetallePeer::clearInstancePool();
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
        $cls = ArticulovariantePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ArticulovariantePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ArticulovariantePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ArticulovariantePeer::addInstanceToPool($obj, $key);
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
     * @return array (Articulovariante object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ArticulovariantePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ArticulovariantePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ArticulovariantePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ArticulovariantePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ArticulovariantePeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(ArticulovariantePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ArticulovariantePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ArticulovariantePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ArticulovariantePeer::IDARTICULO, ArticuloPeer::IDARTICULO, $join_behavior);

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
     * Selects a collection of Articulovariante objects pre-filled with their Articulo objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Articulovariante objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinArticulo(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ArticulovariantePeer::DATABASE_NAME);
        }

        ArticulovariantePeer::addSelectColumns($criteria);
        $startcol = ArticulovariantePeer::NUM_HYDRATE_COLUMNS;
        ArticuloPeer::addSelectColumns($criteria);

        $criteria->addJoin(ArticulovariantePeer::IDARTICULO, ArticuloPeer::IDARTICULO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ArticulovariantePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ArticulovariantePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ArticulovariantePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ArticulovariantePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Articulovariante) to $obj2 (Articulo)
                $obj2->addArticulovariante($obj1);

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
        $criteria->setPrimaryTableName(ArticulovariantePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ArticulovariantePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ArticulovariantePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ArticulovariantePeer::IDARTICULO, ArticuloPeer::IDARTICULO, $join_behavior);

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
     * Selects a collection of Articulovariante objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Articulovariante objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ArticulovariantePeer::DATABASE_NAME);
        }

        ArticulovariantePeer::addSelectColumns($criteria);
        $startcol2 = ArticulovariantePeer::NUM_HYDRATE_COLUMNS;

        ArticuloPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ArticuloPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ArticulovariantePeer::IDARTICULO, ArticuloPeer::IDARTICULO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ArticulovariantePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ArticulovariantePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ArticulovariantePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ArticulovariantePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Articulovariante) to the collection in $obj2 (Articulo)
                $obj2->addArticulovariante($obj1);
            } // if joined row not null

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
        return Propel::getDatabaseMap(ArticulovariantePeer::DATABASE_NAME)->getTable(ArticulovariantePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseArticulovariantePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseArticulovariantePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ArticulovarianteTableMap());
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
        return ArticulovariantePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Articulovariante or Criteria object.
     *
     * @param      mixed $values Criteria or Articulovariante object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Articulovariante object
        }

        if ($criteria->containsKey(ArticulovariantePeer::IDARTICULOVARIANTE) && $criteria->keyContainsValue(ArticulovariantePeer::IDARTICULOVARIANTE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ArticulovariantePeer::IDARTICULOVARIANTE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ArticulovariantePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Articulovariante or Criteria object.
     *
     * @param      mixed $values Criteria or Articulovariante object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ArticulovariantePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ArticulovariantePeer::IDARTICULOVARIANTE);
            $value = $criteria->remove(ArticulovariantePeer::IDARTICULOVARIANTE);
            if ($value) {
                $selectCriteria->add(ArticulovariantePeer::IDARTICULOVARIANTE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ArticulovariantePeer::TABLE_NAME);
            }

        } else { // $values is Articulovariante object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ArticulovariantePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the articulovariante table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += ArticulovariantePeer::doOnDeleteCascade(new Criteria(ArticulovariantePeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(ArticulovariantePeer::TABLE_NAME, $con, ArticulovariantePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ArticulovariantePeer::clearInstancePool();
            ArticulovariantePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Articulovariante or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Articulovariante object or primary key or array of primary keys
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
            $con = Propel::getConnection(ArticulovariantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Articulovariante) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ArticulovariantePeer::DATABASE_NAME);
            $criteria->add(ArticulovariantePeer::IDARTICULOVARIANTE, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(ArticulovariantePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += ArticulovariantePeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                ArticulovariantePeer::clearInstancePool();
            } elseif ($values instanceof Articulovariante) { // it's a model object
                ArticulovariantePeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    ArticulovariantePeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ArticulovariantePeer::clearRelatedInstancePool();
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
        $objects = ArticulovariantePeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Articulovariantereorden objects
            $criteria = new Criteria(ArticulovariantereordenPeer::DATABASE_NAME);

            $criteria->add(ArticulovariantereordenPeer::IDARTICULOVARIANTE, $obj->getIdarticulovariante());
            $affectedRows += ArticulovariantereordenPeer::doDelete($criteria, $con);

            // delete related Articulovariantevalor objects
            $criteria = new Criteria(ArticulovariantevalorPeer::DATABASE_NAME);

            $criteria->add(ArticulovariantevalorPeer::IDARTICULOVARIANTE, $obj->getIdarticulovariante());
            $affectedRows += ArticulovariantevalorPeer::doDelete($criteria, $con);

            // delete related Ordencompradetalle objects
            $criteria = new Criteria(OrdencompradetallePeer::DATABASE_NAME);

            $criteria->add(OrdencompradetallePeer::IDARTICULOVARIANTE, $obj->getIdarticulovariante());
            $affectedRows += OrdencompradetallePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Articulovariante object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Articulovariante $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ArticulovariantePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ArticulovariantePeer::TABLE_NAME);

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

        return BasePeer::doValidate(ArticulovariantePeer::DATABASE_NAME, ArticulovariantePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Articulovariante
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ArticulovariantePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ArticulovariantePeer::DATABASE_NAME);
        $criteria->add(ArticulovariantePeer::IDARTICULOVARIANTE, $pk);

        $v = ArticulovariantePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Articulovariante[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ArticulovariantePeer::DATABASE_NAME);
            $criteria->add(ArticulovariantePeer::IDARTICULOVARIANTE, $pks, Criteria::IN);
            $objs = ArticulovariantePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseArticulovariantePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseArticulovariantePeer::buildTableMap();

