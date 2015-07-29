<?php


/**
 * Base static class for performing query and update operations on the 'admision' table.
 *
 *
 *
 * @package propel.generator.hva.om
 */
abstract class BaseAdmisionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'hva';

    /** the table name for this class */
    const TABLE_NAME = 'admision';

    /** the related Propel class for this table */
    const OM_CLASS = 'Admision';

    /** the related TableMap class for this table */
    const TM_CLASS = 'AdmisionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the idadmision field */
    const IDADMISION = 'admision.idadmision';

    /** the column name for the idpaciente field */
    const IDPACIENTE = 'admision.idpaciente';

    /** the column name for the idmedico field */
    const IDMEDICO = 'admision.idmedico';

    /** the column name for the idcuarto field */
    const IDCUARTO = 'admision.idcuarto';

    /** the column name for the admision_fechaadmision field */
    const ADMISION_FECHAADMISION = 'admision.admision_fechaadmision';

    /** the column name for the admision_fechasalida field */
    const ADMISION_FECHASALIDA = 'admision.admision_fechasalida';

    /** the column name for the admision_diagnostico field */
    const ADMISION_DIAGNOSTICO = 'admision.admision_diagnostico';

    /** the column name for the admision_observaciones field */
    const ADMISION_OBSERVACIONES = 'admision.admision_observaciones';

    /** the column name for the admision_status field */
    const ADMISION_STATUS = 'admision.admision_status';

    /** the column name for the admision_total field */
    const ADMISION_TOTAL = 'admision.admision_total';

    /** the column name for the admision_pagadaen field */
    const ADMISION_PAGADAEN = 'admision.admision_pagadaen';

    /** the column name for the admision_tipodepago field */
    const ADMISION_TIPODEPAGO = 'admision.admision_tipodepago';

    /** the column name for the admision_referenciapago field */
    const ADMISION_REFERENCIAPAGO = 'admision.admision_referenciapago';

    /** the column name for the admision_facturada field */
    const ADMISION_FACTURADA = 'admision.admision_facturada';

    /** the column name for the admision_registrada field */
    const ADMISION_REGISTRADA = 'admision.admision_registrada';

    /** The enumerated values for the admision_status field */
    const ADMISION_STATUS_PAGADA = 'pagada';
    const ADMISION_STATUS_NO_PAGADA = 'no pagada';
    const ADMISION_STATUS_PENDIENTE = 'pendiente';

    /** The enumerated values for the admision_tipodepago field */
<<<<<<< HEAD
    const ADMISION_TIPODEPAGO_EFECTIVO = 'Efectivo';
    const ADMISION_TIPODEPAGO_TARJETA_DE_DEBITO = 'Tarjeta de debito';
    const ADMISION_TIPODEPAGO_TARJETA_DE_CREDITO = 'Tarjeta de credito';
    const ADMISION_TIPODEPAGO_CHEQUE = 'Cheque';
    const ADMISION_TIPODEPAGO_NO_IDENTIFICADO = 'No identificado';
    const ADMISION_TIPODEPAGO_SPEI = 'SPEI';
=======
    const ADMISION_TIPODEPAGO_EFECTIVO = 'efectivo';
    const ADMISION_TIPODEPAGO_TARJETA_DEBITO = 'tarjeta debito';
    const ADMISION_TIPODEPAGO_TARJETA_CREDITO = 'tarjeta credito';
    const ADMISION_TIPODEPAGO_CHEQUE = 'cheque';
    const ADMISION_TIPODEPAGO_NO_IDENTIFICADO = 'no identificado';
>>>>>>> 3723f745aefa31c777ebad292f25ad93ec2218fa

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Admision objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Admision[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. AdmisionPeer::$fieldNames[AdmisionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idadmision', 'Idpaciente', 'Idmedico', 'Idcuarto', 'AdmisionFechaadmision', 'AdmisionFechasalida', 'AdmisionDiagnostico', 'AdmisionObservaciones', 'AdmisionStatus', 'AdmisionTotal', 'AdmisionPagadaen', 'AdmisionTipodepago', 'AdmisionReferenciapago', 'AdmisionFacturada', 'AdmisionRegistrada', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idadmision', 'idpaciente', 'idmedico', 'idcuarto', 'admisionFechaadmision', 'admisionFechasalida', 'admisionDiagnostico', 'admisionObservaciones', 'admisionStatus', 'admisionTotal', 'admisionPagadaen', 'admisionTipodepago', 'admisionReferenciapago', 'admisionFacturada', 'admisionRegistrada', ),
        BasePeer::TYPE_COLNAME => array (AdmisionPeer::IDADMISION, AdmisionPeer::IDPACIENTE, AdmisionPeer::IDMEDICO, AdmisionPeer::IDCUARTO, AdmisionPeer::ADMISION_FECHAADMISION, AdmisionPeer::ADMISION_FECHASALIDA, AdmisionPeer::ADMISION_DIAGNOSTICO, AdmisionPeer::ADMISION_OBSERVACIONES, AdmisionPeer::ADMISION_STATUS, AdmisionPeer::ADMISION_TOTAL, AdmisionPeer::ADMISION_PAGADAEN, AdmisionPeer::ADMISION_TIPODEPAGO, AdmisionPeer::ADMISION_REFERENCIAPAGO, AdmisionPeer::ADMISION_FACTURADA, AdmisionPeer::ADMISION_REGISTRADA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDADMISION', 'IDPACIENTE', 'IDMEDICO', 'IDCUARTO', 'ADMISION_FECHAADMISION', 'ADMISION_FECHASALIDA', 'ADMISION_DIAGNOSTICO', 'ADMISION_OBSERVACIONES', 'ADMISION_STATUS', 'ADMISION_TOTAL', 'ADMISION_PAGADAEN', 'ADMISION_TIPODEPAGO', 'ADMISION_REFERENCIAPAGO', 'ADMISION_FACTURADA', 'ADMISION_REGISTRADA', ),
        BasePeer::TYPE_FIELDNAME => array ('idadmision', 'idpaciente', 'idmedico', 'idcuarto', 'admision_fechaadmision', 'admision_fechasalida', 'admision_diagnostico', 'admision_observaciones', 'admision_status', 'admision_total', 'admision_pagadaen', 'admision_tipodepago', 'admision_referenciapago', 'admision_facturada', 'admision_registrada', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. AdmisionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idadmision' => 0, 'Idpaciente' => 1, 'Idmedico' => 2, 'Idcuarto' => 3, 'AdmisionFechaadmision' => 4, 'AdmisionFechasalida' => 5, 'AdmisionDiagnostico' => 6, 'AdmisionObservaciones' => 7, 'AdmisionStatus' => 8, 'AdmisionTotal' => 9, 'AdmisionPagadaen' => 10, 'AdmisionTipodepago' => 11, 'AdmisionReferenciapago' => 12, 'AdmisionFacturada' => 13, 'AdmisionRegistrada' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idadmision' => 0, 'idpaciente' => 1, 'idmedico' => 2, 'idcuarto' => 3, 'admisionFechaadmision' => 4, 'admisionFechasalida' => 5, 'admisionDiagnostico' => 6, 'admisionObservaciones' => 7, 'admisionStatus' => 8, 'admisionTotal' => 9, 'admisionPagadaen' => 10, 'admisionTipodepago' => 11, 'admisionReferenciapago' => 12, 'admisionFacturada' => 13, 'admisionRegistrada' => 14, ),
        BasePeer::TYPE_COLNAME => array (AdmisionPeer::IDADMISION => 0, AdmisionPeer::IDPACIENTE => 1, AdmisionPeer::IDMEDICO => 2, AdmisionPeer::IDCUARTO => 3, AdmisionPeer::ADMISION_FECHAADMISION => 4, AdmisionPeer::ADMISION_FECHASALIDA => 5, AdmisionPeer::ADMISION_DIAGNOSTICO => 6, AdmisionPeer::ADMISION_OBSERVACIONES => 7, AdmisionPeer::ADMISION_STATUS => 8, AdmisionPeer::ADMISION_TOTAL => 9, AdmisionPeer::ADMISION_PAGADAEN => 10, AdmisionPeer::ADMISION_TIPODEPAGO => 11, AdmisionPeer::ADMISION_REFERENCIAPAGO => 12, AdmisionPeer::ADMISION_FACTURADA => 13, AdmisionPeer::ADMISION_REGISTRADA => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDADMISION' => 0, 'IDPACIENTE' => 1, 'IDMEDICO' => 2, 'IDCUARTO' => 3, 'ADMISION_FECHAADMISION' => 4, 'ADMISION_FECHASALIDA' => 5, 'ADMISION_DIAGNOSTICO' => 6, 'ADMISION_OBSERVACIONES' => 7, 'ADMISION_STATUS' => 8, 'ADMISION_TOTAL' => 9, 'ADMISION_PAGADAEN' => 10, 'ADMISION_TIPODEPAGO' => 11, 'ADMISION_REFERENCIAPAGO' => 12, 'ADMISION_FACTURADA' => 13, 'ADMISION_REGISTRADA' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('idadmision' => 0, 'idpaciente' => 1, 'idmedico' => 2, 'idcuarto' => 3, 'admision_fechaadmision' => 4, 'admision_fechasalida' => 5, 'admision_diagnostico' => 6, 'admision_observaciones' => 7, 'admision_status' => 8, 'admision_total' => 9, 'admision_pagadaen' => 10, 'admision_tipodepago' => 11, 'admision_referenciapago' => 12, 'admision_facturada' => 13, 'admision_registrada' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        AdmisionPeer::ADMISION_STATUS => array(
            AdmisionPeer::ADMISION_STATUS_PAGADA,
            AdmisionPeer::ADMISION_STATUS_NO_PAGADA,
            AdmisionPeer::ADMISION_STATUS_PENDIENTE,
        ),
        AdmisionPeer::ADMISION_TIPODEPAGO => array(
            AdmisionPeer::ADMISION_TIPODEPAGO_EFECTIVO,
            AdmisionPeer::ADMISION_TIPODEPAGO_TARJETA_DE_DEBITO,
            AdmisionPeer::ADMISION_TIPODEPAGO_TARJETA_DE_CREDITO,
            AdmisionPeer::ADMISION_TIPODEPAGO_CHEQUE,
            AdmisionPeer::ADMISION_TIPODEPAGO_NO_IDENTIFICADO,
<<<<<<< HEAD
            AdmisionPeer::ADMISION_TIPODEPAGO_SPEI,
=======
>>>>>>> 3723f745aefa31c777ebad292f25ad93ec2218fa
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
        $toNames = AdmisionPeer::getFieldNames($toType);
        $key = isset(AdmisionPeer::$fieldKeys[$fromType][$name]) ? AdmisionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(AdmisionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, AdmisionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return AdmisionPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return AdmisionPeer::$enumValueSets;
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
        $valueSets = AdmisionPeer::getValueSets();

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
        $values = AdmisionPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. AdmisionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AdmisionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(AdmisionPeer::IDADMISION);
            $criteria->addSelectColumn(AdmisionPeer::IDPACIENTE);
            $criteria->addSelectColumn(AdmisionPeer::IDMEDICO);
            $criteria->addSelectColumn(AdmisionPeer::IDCUARTO);
            $criteria->addSelectColumn(AdmisionPeer::ADMISION_FECHAADMISION);
            $criteria->addSelectColumn(AdmisionPeer::ADMISION_FECHASALIDA);
            $criteria->addSelectColumn(AdmisionPeer::ADMISION_DIAGNOSTICO);
            $criteria->addSelectColumn(AdmisionPeer::ADMISION_OBSERVACIONES);
            $criteria->addSelectColumn(AdmisionPeer::ADMISION_STATUS);
            $criteria->addSelectColumn(AdmisionPeer::ADMISION_TOTAL);
            $criteria->addSelectColumn(AdmisionPeer::ADMISION_PAGADAEN);
            $criteria->addSelectColumn(AdmisionPeer::ADMISION_TIPODEPAGO);
            $criteria->addSelectColumn(AdmisionPeer::ADMISION_REFERENCIAPAGO);
            $criteria->addSelectColumn(AdmisionPeer::ADMISION_FACTURADA);
            $criteria->addSelectColumn(AdmisionPeer::ADMISION_REGISTRADA);
        } else {
            $criteria->addSelectColumn($alias . '.idadmision');
            $criteria->addSelectColumn($alias . '.idpaciente');
            $criteria->addSelectColumn($alias . '.idmedico');
            $criteria->addSelectColumn($alias . '.idcuarto');
            $criteria->addSelectColumn($alias . '.admision_fechaadmision');
            $criteria->addSelectColumn($alias . '.admision_fechasalida');
            $criteria->addSelectColumn($alias . '.admision_diagnostico');
            $criteria->addSelectColumn($alias . '.admision_observaciones');
            $criteria->addSelectColumn($alias . '.admision_status');
            $criteria->addSelectColumn($alias . '.admision_total');
            $criteria->addSelectColumn($alias . '.admision_pagadaen');
            $criteria->addSelectColumn($alias . '.admision_tipodepago');
            $criteria->addSelectColumn($alias . '.admision_referenciapago');
            $criteria->addSelectColumn($alias . '.admision_facturada');
            $criteria->addSelectColumn($alias . '.admision_registrada');
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
        $criteria->setPrimaryTableName(AdmisionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AdmisionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(AdmisionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Admision
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AdmisionPeer::doSelect($critcopy, $con);
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
        return AdmisionPeer::populateObjects(AdmisionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AdmisionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(AdmisionPeer::DATABASE_NAME);

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
     * @param Admision $obj A Admision object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdadmision();
            } // if key === null
            AdmisionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Admision object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Admision) {
                $key = (string) $value->getIdadmision();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Admision object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(AdmisionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Admision Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(AdmisionPeer::$instances[$key])) {
                return AdmisionPeer::$instances[$key];
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
        foreach (AdmisionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        AdmisionPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to admision
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in AdmisionanticipoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        AdmisionanticipoPeer::clearInstancePool();
        // Invalidate objects in CargoadmisionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CargoadmisionPeer::clearInstancePool();
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
        $cls = AdmisionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = AdmisionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = AdmisionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AdmisionPeer::addInstanceToPool($obj, $key);
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
     * @return array (Admision object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = AdmisionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = AdmisionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + AdmisionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AdmisionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            AdmisionPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Cuarto table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCuarto(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AdmisionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AdmisionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(AdmisionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AdmisionPeer::IDCUARTO, CuartoPeer::IDCUARTO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Medico table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinMedico(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AdmisionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AdmisionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(AdmisionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AdmisionPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Paciente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPaciente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AdmisionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AdmisionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(AdmisionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AdmisionPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
     * Selects a collection of Admision objects pre-filled with their Cuarto objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Admision objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCuarto(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AdmisionPeer::DATABASE_NAME);
        }

        AdmisionPeer::addSelectColumns($criteria);
        $startcol = AdmisionPeer::NUM_HYDRATE_COLUMNS;
        CuartoPeer::addSelectColumns($criteria);

        $criteria->addJoin(AdmisionPeer::IDCUARTO, CuartoPeer::IDCUARTO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AdmisionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AdmisionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AdmisionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AdmisionPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CuartoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CuartoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CuartoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CuartoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Admision) to $obj2 (Cuarto)
                $obj2->addAdmision($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Admision objects pre-filled with their Medico objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Admision objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinMedico(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AdmisionPeer::DATABASE_NAME);
        }

        AdmisionPeer::addSelectColumns($criteria);
        $startcol = AdmisionPeer::NUM_HYDRATE_COLUMNS;
        MedicoPeer::addSelectColumns($criteria);

        $criteria->addJoin(AdmisionPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AdmisionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AdmisionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AdmisionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AdmisionPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = MedicoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = MedicoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = MedicoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    MedicoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Admision) to $obj2 (Medico)
                $obj2->addAdmision($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Admision objects pre-filled with their Paciente objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Admision objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPaciente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AdmisionPeer::DATABASE_NAME);
        }

        AdmisionPeer::addSelectColumns($criteria);
        $startcol = AdmisionPeer::NUM_HYDRATE_COLUMNS;
        PacientePeer::addSelectColumns($criteria);

        $criteria->addJoin(AdmisionPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AdmisionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AdmisionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AdmisionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AdmisionPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PacientePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PacientePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PacientePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PacientePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Admision) to $obj2 (Paciente)
                $obj2->addAdmision($obj1);

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
        $criteria->setPrimaryTableName(AdmisionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AdmisionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(AdmisionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AdmisionPeer::IDCUARTO, CuartoPeer::IDCUARTO, $join_behavior);

        $criteria->addJoin(AdmisionPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

        $criteria->addJoin(AdmisionPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
     * Selects a collection of Admision objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Admision objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AdmisionPeer::DATABASE_NAME);
        }

        AdmisionPeer::addSelectColumns($criteria);
        $startcol2 = AdmisionPeer::NUM_HYDRATE_COLUMNS;

        CuartoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CuartoPeer::NUM_HYDRATE_COLUMNS;

        MedicoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + MedicoPeer::NUM_HYDRATE_COLUMNS;

        PacientePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + PacientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AdmisionPeer::IDCUARTO, CuartoPeer::IDCUARTO, $join_behavior);

        $criteria->addJoin(AdmisionPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

        $criteria->addJoin(AdmisionPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AdmisionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AdmisionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AdmisionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AdmisionPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Cuarto rows

            $key2 = CuartoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CuartoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CuartoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CuartoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Admision) to the collection in $obj2 (Cuarto)
                $obj2->addAdmision($obj1);
            } // if joined row not null

            // Add objects for joined Medico rows

            $key3 = MedicoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = MedicoPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = MedicoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    MedicoPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Admision) to the collection in $obj3 (Medico)
                $obj3->addAdmision($obj1);
            } // if joined row not null

            // Add objects for joined Paciente rows

            $key4 = PacientePeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = PacientePeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = PacientePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    PacientePeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Admision) to the collection in $obj4 (Paciente)
                $obj4->addAdmision($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Cuarto table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCuarto(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AdmisionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AdmisionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(AdmisionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AdmisionPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

        $criteria->addJoin(AdmisionPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Medico table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptMedico(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AdmisionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AdmisionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(AdmisionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AdmisionPeer::IDCUARTO, CuartoPeer::IDCUARTO, $join_behavior);

        $criteria->addJoin(AdmisionPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Paciente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPaciente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AdmisionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AdmisionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(AdmisionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AdmisionPeer::IDCUARTO, CuartoPeer::IDCUARTO, $join_behavior);

        $criteria->addJoin(AdmisionPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

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
     * Selects a collection of Admision objects pre-filled with all related objects except Cuarto.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Admision objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCuarto(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AdmisionPeer::DATABASE_NAME);
        }

        AdmisionPeer::addSelectColumns($criteria);
        $startcol2 = AdmisionPeer::NUM_HYDRATE_COLUMNS;

        MedicoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + MedicoPeer::NUM_HYDRATE_COLUMNS;

        PacientePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + PacientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AdmisionPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

        $criteria->addJoin(AdmisionPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AdmisionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AdmisionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AdmisionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AdmisionPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Medico rows

                $key2 = MedicoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = MedicoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = MedicoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    MedicoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Admision) to the collection in $obj2 (Medico)
                $obj2->addAdmision($obj1);

            } // if joined row is not null

                // Add objects for joined Paciente rows

                $key3 = PacientePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = PacientePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = PacientePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    PacientePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Admision) to the collection in $obj3 (Paciente)
                $obj3->addAdmision($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Admision objects pre-filled with all related objects except Medico.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Admision objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptMedico(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AdmisionPeer::DATABASE_NAME);
        }

        AdmisionPeer::addSelectColumns($criteria);
        $startcol2 = AdmisionPeer::NUM_HYDRATE_COLUMNS;

        CuartoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CuartoPeer::NUM_HYDRATE_COLUMNS;

        PacientePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + PacientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AdmisionPeer::IDCUARTO, CuartoPeer::IDCUARTO, $join_behavior);

        $criteria->addJoin(AdmisionPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AdmisionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AdmisionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AdmisionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AdmisionPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Cuarto rows

                $key2 = CuartoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CuartoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CuartoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CuartoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Admision) to the collection in $obj2 (Cuarto)
                $obj2->addAdmision($obj1);

            } // if joined row is not null

                // Add objects for joined Paciente rows

                $key3 = PacientePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = PacientePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = PacientePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    PacientePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Admision) to the collection in $obj3 (Paciente)
                $obj3->addAdmision($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Admision objects pre-filled with all related objects except Paciente.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Admision objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPaciente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AdmisionPeer::DATABASE_NAME);
        }

        AdmisionPeer::addSelectColumns($criteria);
        $startcol2 = AdmisionPeer::NUM_HYDRATE_COLUMNS;

        CuartoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CuartoPeer::NUM_HYDRATE_COLUMNS;

        MedicoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + MedicoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AdmisionPeer::IDCUARTO, CuartoPeer::IDCUARTO, $join_behavior);

        $criteria->addJoin(AdmisionPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AdmisionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AdmisionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AdmisionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AdmisionPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Cuarto rows

                $key2 = CuartoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CuartoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CuartoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CuartoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Admision) to the collection in $obj2 (Cuarto)
                $obj2->addAdmision($obj1);

            } // if joined row is not null

                // Add objects for joined Medico rows

                $key3 = MedicoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = MedicoPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = MedicoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    MedicoPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Admision) to the collection in $obj3 (Medico)
                $obj3->addAdmision($obj1);

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
        return Propel::getDatabaseMap(AdmisionPeer::DATABASE_NAME)->getTable(AdmisionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseAdmisionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseAdmisionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \AdmisionTableMap());
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
        return AdmisionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Admision or Criteria object.
     *
     * @param      mixed $values Criteria or Admision object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Admision object
        }

        if ($criteria->containsKey(AdmisionPeer::IDADMISION) && $criteria->keyContainsValue(AdmisionPeer::IDADMISION) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.AdmisionPeer::IDADMISION.')');
        }


        // Set the correct dbName
        $criteria->setDbName(AdmisionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Admision or Criteria object.
     *
     * @param      mixed $values Criteria or Admision object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(AdmisionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AdmisionPeer::IDADMISION);
            $value = $criteria->remove(AdmisionPeer::IDADMISION);
            if ($value) {
                $selectCriteria->add(AdmisionPeer::IDADMISION, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AdmisionPeer::TABLE_NAME);
            }

        } else { // $values is Admision object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(AdmisionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the admision table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += AdmisionPeer::doOnDeleteCascade(new Criteria(AdmisionPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(AdmisionPeer::TABLE_NAME, $con, AdmisionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AdmisionPeer::clearInstancePool();
            AdmisionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Admision or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Admision object or primary key or array of primary keys
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
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Admision) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(AdmisionPeer::DATABASE_NAME);
            $criteria->add(AdmisionPeer::IDADMISION, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(AdmisionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += AdmisionPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                AdmisionPeer::clearInstancePool();
            } elseif ($values instanceof Admision) { // it's a model object
                AdmisionPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    AdmisionPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            AdmisionPeer::clearRelatedInstancePool();
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
        $objects = AdmisionPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Admisionanticipo objects
            $criteria = new Criteria(AdmisionanticipoPeer::DATABASE_NAME);

            $criteria->add(AdmisionanticipoPeer::IDADMISION, $obj->getIdadmision());
            $affectedRows += AdmisionanticipoPeer::doDelete($criteria, $con);

            // delete related Cargoadmision objects
            $criteria = new Criteria(CargoadmisionPeer::DATABASE_NAME);

            $criteria->add(CargoadmisionPeer::IDADMISION, $obj->getIdadmision());
            $affectedRows += CargoadmisionPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Admision object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Admision $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AdmisionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AdmisionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(AdmisionPeer::DATABASE_NAME, AdmisionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Admision
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = AdmisionPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(AdmisionPeer::DATABASE_NAME);
        $criteria->add(AdmisionPeer::IDADMISION, $pk);

        $v = AdmisionPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Admision[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(AdmisionPeer::DATABASE_NAME);
            $criteria->add(AdmisionPeer::IDADMISION, $pks, Criteria::IN);
            $objs = AdmisionPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseAdmisionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAdmisionPeer::buildTableMap();

