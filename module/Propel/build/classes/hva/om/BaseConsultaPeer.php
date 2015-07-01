<?php


/**
 * Base static class for performing query and update operations on the 'consulta' table.
 *
 *
 *
 * @package propel.generator.hva.om
 */
abstract class BaseConsultaPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'hva';

    /** the table name for this class */
    const TABLE_NAME = 'consulta';

    /** the related Propel class for this table */
    const OM_CLASS = 'Consulta';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ConsultaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the idconsulta field */
    const IDCONSULTA = 'consulta.idconsulta';

    /** the column name for the idpaciente field */
    const IDPACIENTE = 'consulta.idpaciente';

    /** the column name for the idmedico field */
    const IDMEDICO = 'consulta.idmedico';

    /** the column name for the idconsultorio field */
    const IDCONSULTORIO = 'consulta.idconsultorio';

    /** the column name for the consulta_fecha field */
    const CONSULTA_FECHA = 'consulta.consulta_fecha';

    /** the column name for the consulta_hora field */
    const CONSULTA_HORA = 'consulta.consulta_hora';

    /** the column name for the consulta_diagnostico field */
    const CONSULTA_DIAGNOSTICO = 'consulta.consulta_diagnostico';

    /** the column name for the consulta_observaciones field */
    const CONSULTA_OBSERVACIONES = 'consulta.consulta_observaciones';

    /** the column name for the consulta_status field */
    const CONSULTA_STATUS = 'consulta.consulta_status';

    /** the column name for the consulta_total field */
    const CONSULTA_TOTAL = 'consulta.consulta_total';

    /** the column name for the consulta_tipodepago field */
    const CONSULTA_TIPODEPAGO = 'consulta.consulta_tipodepago';

    /** the column name for the consulta_referenciapago field */
    const CONSULTA_REFERENCIAPAGO = 'consulta.consulta_referenciapago';

    /** the column name for the consulta_facturada field */
    const CONSULTA_FACTURADA = 'consulta.consulta_facturada';

    /** the column name for the consulta_registrada field */
    const CONSULTA_REGISTRADA = 'consulta.consulta_registrada';

    /** The enumerated values for the consulta_status field */
    const CONSULTA_STATUS_PAGADA = 'pagada';
    const CONSULTA_STATUS_NO_PAGADA = 'no pagada';
    const CONSULTA_STATUS_PENDIENTE = 'pendiente';

    /** The enumerated values for the consulta_tipodepago field */
    const CONSULTA_TIPODEPAGO_EFECTIVO = 'efectivo';
    const CONSULTA_TIPODEPAGO_TARJETA_DEBITO = 'tarjeta debito';
    const CONSULTA_TIPODEPAGO_TARJETA_CREDITO = 'tarjeta credito';
    const CONSULTA_TIPODEPAGO_CHEQUE = 'cheque';
    const CONSULTA_TIPODEPAGO_NO_IDENTIFICADO = 'no identificado';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Consulta objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Consulta[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ConsultaPeer::$fieldNames[ConsultaPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idconsulta', 'Idpaciente', 'Idmedico', 'Idconsultorio', 'ConsultaFecha', 'ConsultaHora', 'ConsultaDiagnostico', 'ConsultaObservaciones', 'ConsultaStatus', 'ConsultaTotal', 'ConsultaTipodepago', 'ConsultaReferenciapago', 'ConsultaFacturada', 'ConsultaRegistrada', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idconsulta', 'idpaciente', 'idmedico', 'idconsultorio', 'consultaFecha', 'consultaHora', 'consultaDiagnostico', 'consultaObservaciones', 'consultaStatus', 'consultaTotal', 'consultaTipodepago', 'consultaReferenciapago', 'consultaFacturada', 'consultaRegistrada', ),
        BasePeer::TYPE_COLNAME => array (ConsultaPeer::IDCONSULTA, ConsultaPeer::IDPACIENTE, ConsultaPeer::IDMEDICO, ConsultaPeer::IDCONSULTORIO, ConsultaPeer::CONSULTA_FECHA, ConsultaPeer::CONSULTA_HORA, ConsultaPeer::CONSULTA_DIAGNOSTICO, ConsultaPeer::CONSULTA_OBSERVACIONES, ConsultaPeer::CONSULTA_STATUS, ConsultaPeer::CONSULTA_TOTAL, ConsultaPeer::CONSULTA_TIPODEPAGO, ConsultaPeer::CONSULTA_REFERENCIAPAGO, ConsultaPeer::CONSULTA_FACTURADA, ConsultaPeer::CONSULTA_REGISTRADA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCONSULTA', 'IDPACIENTE', 'IDMEDICO', 'IDCONSULTORIO', 'CONSULTA_FECHA', 'CONSULTA_HORA', 'CONSULTA_DIAGNOSTICO', 'CONSULTA_OBSERVACIONES', 'CONSULTA_STATUS', 'CONSULTA_TOTAL', 'CONSULTA_TIPODEPAGO', 'CONSULTA_REFERENCIAPAGO', 'CONSULTA_FACTURADA', 'CONSULTA_REGISTRADA', ),
        BasePeer::TYPE_FIELDNAME => array ('idconsulta', 'idpaciente', 'idmedico', 'idconsultorio', 'consulta_fecha', 'consulta_hora', 'consulta_diagnostico', 'consulta_observaciones', 'consulta_status', 'consulta_total', 'consulta_tipodepago', 'consulta_referenciapago', 'consulta_facturada', 'consulta_registrada', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ConsultaPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idconsulta' => 0, 'Idpaciente' => 1, 'Idmedico' => 2, 'Idconsultorio' => 3, 'ConsultaFecha' => 4, 'ConsultaHora' => 5, 'ConsultaDiagnostico' => 6, 'ConsultaObservaciones' => 7, 'ConsultaStatus' => 8, 'ConsultaTotal' => 9, 'ConsultaTipodepago' => 10, 'ConsultaReferenciapago' => 11, 'ConsultaFacturada' => 12, 'ConsultaRegistrada' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idconsulta' => 0, 'idpaciente' => 1, 'idmedico' => 2, 'idconsultorio' => 3, 'consultaFecha' => 4, 'consultaHora' => 5, 'consultaDiagnostico' => 6, 'consultaObservaciones' => 7, 'consultaStatus' => 8, 'consultaTotal' => 9, 'consultaTipodepago' => 10, 'consultaReferenciapago' => 11, 'consultaFacturada' => 12, 'consultaRegistrada' => 13, ),
        BasePeer::TYPE_COLNAME => array (ConsultaPeer::IDCONSULTA => 0, ConsultaPeer::IDPACIENTE => 1, ConsultaPeer::IDMEDICO => 2, ConsultaPeer::IDCONSULTORIO => 3, ConsultaPeer::CONSULTA_FECHA => 4, ConsultaPeer::CONSULTA_HORA => 5, ConsultaPeer::CONSULTA_DIAGNOSTICO => 6, ConsultaPeer::CONSULTA_OBSERVACIONES => 7, ConsultaPeer::CONSULTA_STATUS => 8, ConsultaPeer::CONSULTA_TOTAL => 9, ConsultaPeer::CONSULTA_TIPODEPAGO => 10, ConsultaPeer::CONSULTA_REFERENCIAPAGO => 11, ConsultaPeer::CONSULTA_FACTURADA => 12, ConsultaPeer::CONSULTA_REGISTRADA => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCONSULTA' => 0, 'IDPACIENTE' => 1, 'IDMEDICO' => 2, 'IDCONSULTORIO' => 3, 'CONSULTA_FECHA' => 4, 'CONSULTA_HORA' => 5, 'CONSULTA_DIAGNOSTICO' => 6, 'CONSULTA_OBSERVACIONES' => 7, 'CONSULTA_STATUS' => 8, 'CONSULTA_TOTAL' => 9, 'CONSULTA_TIPODEPAGO' => 10, 'CONSULTA_REFERENCIAPAGO' => 11, 'CONSULTA_FACTURADA' => 12, 'CONSULTA_REGISTRADA' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('idconsulta' => 0, 'idpaciente' => 1, 'idmedico' => 2, 'idconsultorio' => 3, 'consulta_fecha' => 4, 'consulta_hora' => 5, 'consulta_diagnostico' => 6, 'consulta_observaciones' => 7, 'consulta_status' => 8, 'consulta_total' => 9, 'consulta_tipodepago' => 10, 'consulta_referenciapago' => 11, 'consulta_facturada' => 12, 'consulta_registrada' => 13, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        ConsultaPeer::CONSULTA_STATUS => array(
            ConsultaPeer::CONSULTA_STATUS_PAGADA,
            ConsultaPeer::CONSULTA_STATUS_NO_PAGADA,
            ConsultaPeer::CONSULTA_STATUS_PENDIENTE,
        ),
        ConsultaPeer::CONSULTA_TIPODEPAGO => array(
            ConsultaPeer::CONSULTA_TIPODEPAGO_EFECTIVO,
            ConsultaPeer::CONSULTA_TIPODEPAGO_TARJETA_DEBITO,
            ConsultaPeer::CONSULTA_TIPODEPAGO_TARJETA_CREDITO,
            ConsultaPeer::CONSULTA_TIPODEPAGO_CHEQUE,
            ConsultaPeer::CONSULTA_TIPODEPAGO_NO_IDENTIFICADO,
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
        $toNames = ConsultaPeer::getFieldNames($toType);
        $key = isset(ConsultaPeer::$fieldKeys[$fromType][$name]) ? ConsultaPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ConsultaPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ConsultaPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ConsultaPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return ConsultaPeer::$enumValueSets;
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
        $valueSets = ConsultaPeer::getValueSets();

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
        $values = ConsultaPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. ConsultaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ConsultaPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ConsultaPeer::IDCONSULTA);
            $criteria->addSelectColumn(ConsultaPeer::IDPACIENTE);
            $criteria->addSelectColumn(ConsultaPeer::IDMEDICO);
            $criteria->addSelectColumn(ConsultaPeer::IDCONSULTORIO);
            $criteria->addSelectColumn(ConsultaPeer::CONSULTA_FECHA);
            $criteria->addSelectColumn(ConsultaPeer::CONSULTA_HORA);
            $criteria->addSelectColumn(ConsultaPeer::CONSULTA_DIAGNOSTICO);
            $criteria->addSelectColumn(ConsultaPeer::CONSULTA_OBSERVACIONES);
            $criteria->addSelectColumn(ConsultaPeer::CONSULTA_STATUS);
            $criteria->addSelectColumn(ConsultaPeer::CONSULTA_TOTAL);
            $criteria->addSelectColumn(ConsultaPeer::CONSULTA_TIPODEPAGO);
            $criteria->addSelectColumn(ConsultaPeer::CONSULTA_REFERENCIAPAGO);
            $criteria->addSelectColumn(ConsultaPeer::CONSULTA_FACTURADA);
            $criteria->addSelectColumn(ConsultaPeer::CONSULTA_REGISTRADA);
        } else {
            $criteria->addSelectColumn($alias . '.idconsulta');
            $criteria->addSelectColumn($alias . '.idpaciente');
            $criteria->addSelectColumn($alias . '.idmedico');
            $criteria->addSelectColumn($alias . '.idconsultorio');
            $criteria->addSelectColumn($alias . '.consulta_fecha');
            $criteria->addSelectColumn($alias . '.consulta_hora');
            $criteria->addSelectColumn($alias . '.consulta_diagnostico');
            $criteria->addSelectColumn($alias . '.consulta_observaciones');
            $criteria->addSelectColumn($alias . '.consulta_status');
            $criteria->addSelectColumn($alias . '.consulta_total');
            $criteria->addSelectColumn($alias . '.consulta_tipodepago');
            $criteria->addSelectColumn($alias . '.consulta_referenciapago');
            $criteria->addSelectColumn($alias . '.consulta_facturada');
            $criteria->addSelectColumn($alias . '.consulta_registrada');
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
        $criteria->setPrimaryTableName(ConsultaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ConsultaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ConsultaPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Consulta
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ConsultaPeer::doSelect($critcopy, $con);
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
        return ConsultaPeer::populateObjects(ConsultaPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ConsultaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ConsultaPeer::DATABASE_NAME);

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
     * @param Consulta $obj A Consulta object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdconsulta();
            } // if key === null
            ConsultaPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Consulta object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Consulta) {
                $key = (string) $value->getIdconsulta();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Consulta object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ConsultaPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Consulta Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ConsultaPeer::$instances[$key])) {
                return ConsultaPeer::$instances[$key];
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
        foreach (ConsultaPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ConsultaPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to consulta
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CargoconsultaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CargoconsultaPeer::clearInstancePool();
        // Invalidate objects in ConsultaanticipoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ConsultaanticipoPeer::clearInstancePool();
        // Invalidate objects in FacturaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        FacturaPeer::clearInstancePool();
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
        $cls = ConsultaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ConsultaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ConsultaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ConsultaPeer::addInstanceToPool($obj, $key);
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
     * @return array (Consulta object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ConsultaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ConsultaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ConsultaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ConsultaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ConsultaPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Consultorio table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinConsultorio(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ConsultaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ConsultaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ConsultaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ConsultaPeer::IDCONSULTORIO, ConsultorioPeer::IDCONSULTORIO, $join_behavior);

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
        $criteria->setPrimaryTableName(ConsultaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ConsultaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ConsultaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ConsultaPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

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
        $criteria->setPrimaryTableName(ConsultaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ConsultaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ConsultaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ConsultaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
     * Selects a collection of Consulta objects pre-filled with their Consultorio objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Consulta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinConsultorio(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ConsultaPeer::DATABASE_NAME);
        }

        ConsultaPeer::addSelectColumns($criteria);
        $startcol = ConsultaPeer::NUM_HYDRATE_COLUMNS;
        ConsultorioPeer::addSelectColumns($criteria);

        $criteria->addJoin(ConsultaPeer::IDCONSULTORIO, ConsultorioPeer::IDCONSULTORIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ConsultaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ConsultaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ConsultaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ConsultaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ConsultorioPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ConsultorioPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ConsultorioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ConsultorioPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Consulta) to $obj2 (Consultorio)
                $obj2->addConsulta($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Consulta objects pre-filled with their Medico objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Consulta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinMedico(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ConsultaPeer::DATABASE_NAME);
        }

        ConsultaPeer::addSelectColumns($criteria);
        $startcol = ConsultaPeer::NUM_HYDRATE_COLUMNS;
        MedicoPeer::addSelectColumns($criteria);

        $criteria->addJoin(ConsultaPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ConsultaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ConsultaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ConsultaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ConsultaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Consulta) to $obj2 (Medico)
                $obj2->addConsulta($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Consulta objects pre-filled with their Paciente objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Consulta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPaciente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ConsultaPeer::DATABASE_NAME);
        }

        ConsultaPeer::addSelectColumns($criteria);
        $startcol = ConsultaPeer::NUM_HYDRATE_COLUMNS;
        PacientePeer::addSelectColumns($criteria);

        $criteria->addJoin(ConsultaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ConsultaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ConsultaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ConsultaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ConsultaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Consulta) to $obj2 (Paciente)
                $obj2->addConsulta($obj1);

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
        $criteria->setPrimaryTableName(ConsultaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ConsultaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ConsultaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ConsultaPeer::IDCONSULTORIO, ConsultorioPeer::IDCONSULTORIO, $join_behavior);

        $criteria->addJoin(ConsultaPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

        $criteria->addJoin(ConsultaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
     * Selects a collection of Consulta objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Consulta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ConsultaPeer::DATABASE_NAME);
        }

        ConsultaPeer::addSelectColumns($criteria);
        $startcol2 = ConsultaPeer::NUM_HYDRATE_COLUMNS;

        ConsultorioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ConsultorioPeer::NUM_HYDRATE_COLUMNS;

        MedicoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + MedicoPeer::NUM_HYDRATE_COLUMNS;

        PacientePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + PacientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ConsultaPeer::IDCONSULTORIO, ConsultorioPeer::IDCONSULTORIO, $join_behavior);

        $criteria->addJoin(ConsultaPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

        $criteria->addJoin(ConsultaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ConsultaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ConsultaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ConsultaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ConsultaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Consultorio rows

            $key2 = ConsultorioPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ConsultorioPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ConsultorioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ConsultorioPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Consulta) to the collection in $obj2 (Consultorio)
                $obj2->addConsulta($obj1);
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

                // Add the $obj1 (Consulta) to the collection in $obj3 (Medico)
                $obj3->addConsulta($obj1);
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

                // Add the $obj1 (Consulta) to the collection in $obj4 (Paciente)
                $obj4->addConsulta($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Consultorio table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptConsultorio(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ConsultaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ConsultaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ConsultaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ConsultaPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

        $criteria->addJoin(ConsultaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
        $criteria->setPrimaryTableName(ConsultaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ConsultaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ConsultaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ConsultaPeer::IDCONSULTORIO, ConsultorioPeer::IDCONSULTORIO, $join_behavior);

        $criteria->addJoin(ConsultaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);

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
        $criteria->setPrimaryTableName(ConsultaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ConsultaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ConsultaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ConsultaPeer::IDCONSULTORIO, ConsultorioPeer::IDCONSULTORIO, $join_behavior);

        $criteria->addJoin(ConsultaPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

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
     * Selects a collection of Consulta objects pre-filled with all related objects except Consultorio.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Consulta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptConsultorio(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ConsultaPeer::DATABASE_NAME);
        }

        ConsultaPeer::addSelectColumns($criteria);
        $startcol2 = ConsultaPeer::NUM_HYDRATE_COLUMNS;

        MedicoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + MedicoPeer::NUM_HYDRATE_COLUMNS;

        PacientePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + PacientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ConsultaPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);

        $criteria->addJoin(ConsultaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ConsultaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ConsultaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ConsultaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ConsultaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Consulta) to the collection in $obj2 (Medico)
                $obj2->addConsulta($obj1);

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

                // Add the $obj1 (Consulta) to the collection in $obj3 (Paciente)
                $obj3->addConsulta($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Consulta objects pre-filled with all related objects except Medico.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Consulta objects.
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
            $criteria->setDbName(ConsultaPeer::DATABASE_NAME);
        }

        ConsultaPeer::addSelectColumns($criteria);
        $startcol2 = ConsultaPeer::NUM_HYDRATE_COLUMNS;

        ConsultorioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ConsultorioPeer::NUM_HYDRATE_COLUMNS;

        PacientePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + PacientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ConsultaPeer::IDCONSULTORIO, ConsultorioPeer::IDCONSULTORIO, $join_behavior);

        $criteria->addJoin(ConsultaPeer::IDPACIENTE, PacientePeer::IDPACIENTE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ConsultaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ConsultaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ConsultaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ConsultaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Consultorio rows

                $key2 = ConsultorioPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ConsultorioPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ConsultorioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ConsultorioPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Consulta) to the collection in $obj2 (Consultorio)
                $obj2->addConsulta($obj1);

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

                // Add the $obj1 (Consulta) to the collection in $obj3 (Paciente)
                $obj3->addConsulta($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Consulta objects pre-filled with all related objects except Paciente.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Consulta objects.
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
            $criteria->setDbName(ConsultaPeer::DATABASE_NAME);
        }

        ConsultaPeer::addSelectColumns($criteria);
        $startcol2 = ConsultaPeer::NUM_HYDRATE_COLUMNS;

        ConsultorioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ConsultorioPeer::NUM_HYDRATE_COLUMNS;

        MedicoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + MedicoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ConsultaPeer::IDCONSULTORIO, ConsultorioPeer::IDCONSULTORIO, $join_behavior);

        $criteria->addJoin(ConsultaPeer::IDMEDICO, MedicoPeer::IDMEDICO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ConsultaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ConsultaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ConsultaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ConsultaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Consultorio rows

                $key2 = ConsultorioPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ConsultorioPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ConsultorioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ConsultorioPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Consulta) to the collection in $obj2 (Consultorio)
                $obj2->addConsulta($obj1);

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

                // Add the $obj1 (Consulta) to the collection in $obj3 (Medico)
                $obj3->addConsulta($obj1);

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
        return Propel::getDatabaseMap(ConsultaPeer::DATABASE_NAME)->getTable(ConsultaPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseConsultaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseConsultaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ConsultaTableMap());
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
        return ConsultaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Consulta or Criteria object.
     *
     * @param      mixed $values Criteria or Consulta object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Consulta object
        }

        if ($criteria->containsKey(ConsultaPeer::IDCONSULTA) && $criteria->keyContainsValue(ConsultaPeer::IDCONSULTA) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ConsultaPeer::IDCONSULTA.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ConsultaPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Consulta or Criteria object.
     *
     * @param      mixed $values Criteria or Consulta object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ConsultaPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ConsultaPeer::IDCONSULTA);
            $value = $criteria->remove(ConsultaPeer::IDCONSULTA);
            if ($value) {
                $selectCriteria->add(ConsultaPeer::IDCONSULTA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ConsultaPeer::TABLE_NAME);
            }

        } else { // $values is Consulta object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ConsultaPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the consulta table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += ConsultaPeer::doOnDeleteCascade(new Criteria(ConsultaPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(ConsultaPeer::TABLE_NAME, $con, ConsultaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConsultaPeer::clearInstancePool();
            ConsultaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Consulta or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Consulta object or primary key or array of primary keys
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
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Consulta) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ConsultaPeer::DATABASE_NAME);
            $criteria->add(ConsultaPeer::IDCONSULTA, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(ConsultaPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += ConsultaPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                ConsultaPeer::clearInstancePool();
            } elseif ($values instanceof Consulta) { // it's a model object
                ConsultaPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    ConsultaPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ConsultaPeer::clearRelatedInstancePool();
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
        $objects = ConsultaPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Cargoconsulta objects
            $criteria = new Criteria(CargoconsultaPeer::DATABASE_NAME);

            $criteria->add(CargoconsultaPeer::IDCONSULTA, $obj->getIdconsulta());
            $affectedRows += CargoconsultaPeer::doDelete($criteria, $con);

            // delete related Consultaanticipo objects
            $criteria = new Criteria(ConsultaanticipoPeer::DATABASE_NAME);

            $criteria->add(ConsultaanticipoPeer::IDCONSULTA, $obj->getIdconsulta());
            $affectedRows += ConsultaanticipoPeer::doDelete($criteria, $con);

            // delete related Factura objects
            $criteria = new Criteria(FacturaPeer::DATABASE_NAME);

            $criteria->add(FacturaPeer::IDCONSULTA, $obj->getIdconsulta());
            $affectedRows += FacturaPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Consulta object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Consulta $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ConsultaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ConsultaPeer::TABLE_NAME);

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

        return BasePeer::doValidate(ConsultaPeer::DATABASE_NAME, ConsultaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Consulta
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ConsultaPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ConsultaPeer::DATABASE_NAME);
        $criteria->add(ConsultaPeer::IDCONSULTA, $pk);

        $v = ConsultaPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Consulta[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ConsultaPeer::DATABASE_NAME);
            $criteria->add(ConsultaPeer::IDCONSULTA, $pks, Criteria::IN);
            $objs = ConsultaPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseConsultaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseConsultaPeer::buildTableMap();

