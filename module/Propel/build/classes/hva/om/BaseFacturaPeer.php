<?php


/**
 * Base static class for performing query and update operations on the 'factura' table.
 *
 *
 *
 * @package propel.generator.hva.om
 */
abstract class BaseFacturaPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'hva';

    /** the table name for this class */
    const TABLE_NAME = 'factura';

    /** the related Propel class for this table */
    const OM_CLASS = 'Factura';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FacturaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the idfactura field */
    const IDFACTURA = 'factura.idfactura';

    /** the column name for the iddatosfacturacion field */
    const IDDATOSFACTURACION = 'factura.iddatosfacturacion';

    /** the column name for the idconsulta field */
    const IDCONSULTA = 'factura.idconsulta';

    /** the column name for the idadmision field */
    const IDADMISION = 'factura.idadmision';

    /** the column name for the idventa field */
    const IDVENTA = 'factura.idventa';

    /** the column name for the factura_url_xml field */
    const FACTURA_URL_XML = 'factura.factura_url_xml';

    /** the column name for the factura_url_pdf field */
    const FACTURA_URL_PDF = 'factura.factura_url_pdf';

    /** the column name for the factura_fecha field */
    const FACTURA_FECHA = 'factura.factura_fecha';

    /** the column name for the factura_sellosat field */
    const FACTURA_SELLOSAT = 'factura.factura_sellosat';

    /** the column name for the factura_certificadosat field */
    const FACTURA_CERTIFICADOSAT = 'factura.factura_certificadosat';

    /** the column name for the factura_cadenaoriginal field */
    const FACTURA_CADENAORIGINAL = 'factura.factura_cadenaoriginal';

    /** the column name for the factura_cfdi field */
    const FACTURA_CFDI = 'factura.factura_cfdi';

    /** the column name for the factura_mensaje field */
    const FACTURA_MENSAJE = 'factura.factura_mensaje';

    /** the column name for the factura_qrcode field */
    const FACTURA_QRCODE = 'factura.factura_qrcode';

    /** the column name for the factura_tipodepago field */
    const FACTURA_TIPODEPAGO = 'factura.factura_tipodepago';

    /** the column name for the factura_status field */
    const FACTURA_STATUS = 'factura.factura_status';

    /** the column name for the factura_tipo field */
    const FACTURA_TIPO = 'factura.factura_tipo';

    /** The enumerated values for the factura_tipodepago field */
    const FACTURA_TIPODEPAGO_UNICO = 'unico';
    const FACTURA_TIPODEPAGO_PARCIAL = 'parcial';

    /** The enumerated values for the factura_status field */
    const FACTURA_STATUS_CREADA = 'creada';
    const FACTURA_STATUS_CANCELADA = 'cancelada';

    /** The enumerated values for the factura_tipo field */
    const FACTURA_TIPO_INGRESO = 'ingreso';
    const FACTURA_TIPO_EGRESO = 'egreso';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Factura objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Factura[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FacturaPeer::$fieldNames[FacturaPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idfactura', 'Iddatosfacturacion', 'Idconsulta', 'Idadmision', 'Idventa', 'FacturaUrlXml', 'FacturaUrlPdf', 'FacturaFecha', 'FacturaSellosat', 'FacturaCertificadosat', 'FacturaCadenaoriginal', 'FacturaCfdi', 'FacturaMensaje', 'FacturaQrcode', 'FacturaTipodepago', 'FacturaStatus', 'FacturaTipo', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idfactura', 'iddatosfacturacion', 'idconsulta', 'idadmision', 'idventa', 'facturaUrlXml', 'facturaUrlPdf', 'facturaFecha', 'facturaSellosat', 'facturaCertificadosat', 'facturaCadenaoriginal', 'facturaCfdi', 'facturaMensaje', 'facturaQrcode', 'facturaTipodepago', 'facturaStatus', 'facturaTipo', ),
        BasePeer::TYPE_COLNAME => array (FacturaPeer::IDFACTURA, FacturaPeer::IDDATOSFACTURACION, FacturaPeer::IDCONSULTA, FacturaPeer::IDADMISION, FacturaPeer::IDVENTA, FacturaPeer::FACTURA_URL_XML, FacturaPeer::FACTURA_URL_PDF, FacturaPeer::FACTURA_FECHA, FacturaPeer::FACTURA_SELLOSAT, FacturaPeer::FACTURA_CERTIFICADOSAT, FacturaPeer::FACTURA_CADENAORIGINAL, FacturaPeer::FACTURA_CFDI, FacturaPeer::FACTURA_MENSAJE, FacturaPeer::FACTURA_QRCODE, FacturaPeer::FACTURA_TIPODEPAGO, FacturaPeer::FACTURA_STATUS, FacturaPeer::FACTURA_TIPO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDFACTURA', 'IDDATOSFACTURACION', 'IDCONSULTA', 'IDADMISION', 'IDVENTA', 'FACTURA_URL_XML', 'FACTURA_URL_PDF', 'FACTURA_FECHA', 'FACTURA_SELLOSAT', 'FACTURA_CERTIFICADOSAT', 'FACTURA_CADENAORIGINAL', 'FACTURA_CFDI', 'FACTURA_MENSAJE', 'FACTURA_QRCODE', 'FACTURA_TIPODEPAGO', 'FACTURA_STATUS', 'FACTURA_TIPO', ),
        BasePeer::TYPE_FIELDNAME => array ('idfactura', 'iddatosfacturacion', 'idconsulta', 'idadmision', 'idventa', 'factura_url_xml', 'factura_url_pdf', 'factura_fecha', 'factura_sellosat', 'factura_certificadosat', 'factura_cadenaoriginal', 'factura_cfdi', 'factura_mensaje', 'factura_qrcode', 'factura_tipodepago', 'factura_status', 'factura_tipo', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FacturaPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idfactura' => 0, 'Iddatosfacturacion' => 1, 'Idconsulta' => 2, 'Idadmision' => 3, 'Idventa' => 4, 'FacturaUrlXml' => 5, 'FacturaUrlPdf' => 6, 'FacturaFecha' => 7, 'FacturaSellosat' => 8, 'FacturaCertificadosat' => 9, 'FacturaCadenaoriginal' => 10, 'FacturaCfdi' => 11, 'FacturaMensaje' => 12, 'FacturaQrcode' => 13, 'FacturaTipodepago' => 14, 'FacturaStatus' => 15, 'FacturaTipo' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idfactura' => 0, 'iddatosfacturacion' => 1, 'idconsulta' => 2, 'idadmision' => 3, 'idventa' => 4, 'facturaUrlXml' => 5, 'facturaUrlPdf' => 6, 'facturaFecha' => 7, 'facturaSellosat' => 8, 'facturaCertificadosat' => 9, 'facturaCadenaoriginal' => 10, 'facturaCfdi' => 11, 'facturaMensaje' => 12, 'facturaQrcode' => 13, 'facturaTipodepago' => 14, 'facturaStatus' => 15, 'facturaTipo' => 16, ),
        BasePeer::TYPE_COLNAME => array (FacturaPeer::IDFACTURA => 0, FacturaPeer::IDDATOSFACTURACION => 1, FacturaPeer::IDCONSULTA => 2, FacturaPeer::IDADMISION => 3, FacturaPeer::IDVENTA => 4, FacturaPeer::FACTURA_URL_XML => 5, FacturaPeer::FACTURA_URL_PDF => 6, FacturaPeer::FACTURA_FECHA => 7, FacturaPeer::FACTURA_SELLOSAT => 8, FacturaPeer::FACTURA_CERTIFICADOSAT => 9, FacturaPeer::FACTURA_CADENAORIGINAL => 10, FacturaPeer::FACTURA_CFDI => 11, FacturaPeer::FACTURA_MENSAJE => 12, FacturaPeer::FACTURA_QRCODE => 13, FacturaPeer::FACTURA_TIPODEPAGO => 14, FacturaPeer::FACTURA_STATUS => 15, FacturaPeer::FACTURA_TIPO => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDFACTURA' => 0, 'IDDATOSFACTURACION' => 1, 'IDCONSULTA' => 2, 'IDADMISION' => 3, 'IDVENTA' => 4, 'FACTURA_URL_XML' => 5, 'FACTURA_URL_PDF' => 6, 'FACTURA_FECHA' => 7, 'FACTURA_SELLOSAT' => 8, 'FACTURA_CERTIFICADOSAT' => 9, 'FACTURA_CADENAORIGINAL' => 10, 'FACTURA_CFDI' => 11, 'FACTURA_MENSAJE' => 12, 'FACTURA_QRCODE' => 13, 'FACTURA_TIPODEPAGO' => 14, 'FACTURA_STATUS' => 15, 'FACTURA_TIPO' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('idfactura' => 0, 'iddatosfacturacion' => 1, 'idconsulta' => 2, 'idadmision' => 3, 'idventa' => 4, 'factura_url_xml' => 5, 'factura_url_pdf' => 6, 'factura_fecha' => 7, 'factura_sellosat' => 8, 'factura_certificadosat' => 9, 'factura_cadenaoriginal' => 10, 'factura_cfdi' => 11, 'factura_mensaje' => 12, 'factura_qrcode' => 13, 'factura_tipodepago' => 14, 'factura_status' => 15, 'factura_tipo' => 16, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        FacturaPeer::FACTURA_TIPODEPAGO => array(
            FacturaPeer::FACTURA_TIPODEPAGO_UNICO,
            FacturaPeer::FACTURA_TIPODEPAGO_PARCIAL,
        ),
        FacturaPeer::FACTURA_STATUS => array(
            FacturaPeer::FACTURA_STATUS_CREADA,
            FacturaPeer::FACTURA_STATUS_CANCELADA,
        ),
        FacturaPeer::FACTURA_TIPO => array(
            FacturaPeer::FACTURA_TIPO_INGRESO,
            FacturaPeer::FACTURA_TIPO_EGRESO,
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
        $toNames = FacturaPeer::getFieldNames($toType);
        $key = isset(FacturaPeer::$fieldKeys[$fromType][$name]) ? FacturaPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FacturaPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, FacturaPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FacturaPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return FacturaPeer::$enumValueSets;
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
        $valueSets = FacturaPeer::getValueSets();

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
        $values = FacturaPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. FacturaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FacturaPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(FacturaPeer::IDFACTURA);
            $criteria->addSelectColumn(FacturaPeer::IDDATOSFACTURACION);
            $criteria->addSelectColumn(FacturaPeer::IDCONSULTA);
            $criteria->addSelectColumn(FacturaPeer::IDADMISION);
            $criteria->addSelectColumn(FacturaPeer::IDVENTA);
            $criteria->addSelectColumn(FacturaPeer::FACTURA_URL_XML);
            $criteria->addSelectColumn(FacturaPeer::FACTURA_URL_PDF);
            $criteria->addSelectColumn(FacturaPeer::FACTURA_FECHA);
            $criteria->addSelectColumn(FacturaPeer::FACTURA_SELLOSAT);
            $criteria->addSelectColumn(FacturaPeer::FACTURA_CERTIFICADOSAT);
            $criteria->addSelectColumn(FacturaPeer::FACTURA_CADENAORIGINAL);
            $criteria->addSelectColumn(FacturaPeer::FACTURA_CFDI);
            $criteria->addSelectColumn(FacturaPeer::FACTURA_MENSAJE);
            $criteria->addSelectColumn(FacturaPeer::FACTURA_QRCODE);
            $criteria->addSelectColumn(FacturaPeer::FACTURA_TIPODEPAGO);
            $criteria->addSelectColumn(FacturaPeer::FACTURA_STATUS);
            $criteria->addSelectColumn(FacturaPeer::FACTURA_TIPO);
        } else {
            $criteria->addSelectColumn($alias . '.idfactura');
            $criteria->addSelectColumn($alias . '.iddatosfacturacion');
            $criteria->addSelectColumn($alias . '.idconsulta');
            $criteria->addSelectColumn($alias . '.idadmision');
            $criteria->addSelectColumn($alias . '.idventa');
            $criteria->addSelectColumn($alias . '.factura_url_xml');
            $criteria->addSelectColumn($alias . '.factura_url_pdf');
            $criteria->addSelectColumn($alias . '.factura_fecha');
            $criteria->addSelectColumn($alias . '.factura_sellosat');
            $criteria->addSelectColumn($alias . '.factura_certificadosat');
            $criteria->addSelectColumn($alias . '.factura_cadenaoriginal');
            $criteria->addSelectColumn($alias . '.factura_cfdi');
            $criteria->addSelectColumn($alias . '.factura_mensaje');
            $criteria->addSelectColumn($alias . '.factura_qrcode');
            $criteria->addSelectColumn($alias . '.factura_tipodepago');
            $criteria->addSelectColumn($alias . '.factura_status');
            $criteria->addSelectColumn($alias . '.factura_tipo');
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
        $criteria->setPrimaryTableName(FacturaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FacturaPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Factura
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FacturaPeer::doSelect($critcopy, $con);
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
        return FacturaPeer::populateObjects(FacturaPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FacturaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FacturaPeer::DATABASE_NAME);

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
     * @param Factura $obj A Factura object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdfactura();
            } // if key === null
            FacturaPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Factura object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Factura) {
                $key = (string) $value->getIdfactura();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Factura object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FacturaPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Factura Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FacturaPeer::$instances[$key])) {
                return FacturaPeer::$instances[$key];
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
        foreach (FacturaPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FacturaPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to factura
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
        $cls = FacturaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FacturaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FacturaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FacturaPeer::addInstanceToPool($obj, $key);
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
     * @return array (Factura object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FacturaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FacturaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FacturaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FacturaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FacturaPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(FacturaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturaPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

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
        $criteria->setPrimaryTableName(FacturaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Pacientefacturacion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPacientefacturacion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturaPeer::IDDATOSFACTURACION, PacientefacturacionPeer::IDPACIENTEFACTURACION, $join_behavior);

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
        $criteria->setPrimaryTableName(FacturaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
     * Selects a collection of Factura objects pre-filled with their Admision objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factura objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAdmision(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturaPeer::DATABASE_NAME);
        }

        FacturaPeer::addSelectColumns($criteria);
        $startcol = FacturaPeer::NUM_HYDRATE_COLUMNS;
        AdmisionPeer::addSelectColumns($criteria);

        $criteria->addJoin(FacturaPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FacturaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Factura) to $obj2 (Admision)
                $obj2->addFactura($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factura objects pre-filled with their Consulta objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factura objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinConsulta(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturaPeer::DATABASE_NAME);
        }

        FacturaPeer::addSelectColumns($criteria);
        $startcol = FacturaPeer::NUM_HYDRATE_COLUMNS;
        ConsultaPeer::addSelectColumns($criteria);

        $criteria->addJoin(FacturaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FacturaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Factura) to $obj2 (Consulta)
                $obj2->addFactura($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factura objects pre-filled with their Pacientefacturacion objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factura objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPacientefacturacion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturaPeer::DATABASE_NAME);
        }

        FacturaPeer::addSelectColumns($criteria);
        $startcol = FacturaPeer::NUM_HYDRATE_COLUMNS;
        PacientefacturacionPeer::addSelectColumns($criteria);

        $criteria->addJoin(FacturaPeer::IDDATOSFACTURACION, PacientefacturacionPeer::IDPACIENTEFACTURACION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FacturaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PacientefacturacionPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PacientefacturacionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PacientefacturacionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PacientefacturacionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Factura) to $obj2 (Pacientefacturacion)
                $obj2->addFactura($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factura objects pre-filled with their Venta objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factura objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinVenta(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturaPeer::DATABASE_NAME);
        }

        FacturaPeer::addSelectColumns($criteria);
        $startcol = FacturaPeer::NUM_HYDRATE_COLUMNS;
        VentaPeer::addSelectColumns($criteria);

        $criteria->addJoin(FacturaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FacturaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Factura) to $obj2 (Venta)
                $obj2->addFactura($obj1);

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
        $criteria->setPrimaryTableName(FacturaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FacturaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturaPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDDATOSFACTURACION, PacientefacturacionPeer::IDPACIENTEFACTURACION, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
     * Selects a collection of Factura objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factura objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturaPeer::DATABASE_NAME);
        }

        FacturaPeer::addSelectColumns($criteria);
        $startcol2 = FacturaPeer::NUM_HYDRATE_COLUMNS;

        AdmisionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AdmisionPeer::NUM_HYDRATE_COLUMNS;

        ConsultaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ConsultaPeer::NUM_HYDRATE_COLUMNS;

        PacientefacturacionPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + PacientefacturacionPeer::NUM_HYDRATE_COLUMNS;

        VentaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + VentaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturaPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDDATOSFACTURACION, PacientefacturacionPeer::IDPACIENTEFACTURACION, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Factura) to the collection in $obj2 (Admision)
                $obj2->addFactura($obj1);
            } // if joined row not null

            // Add objects for joined Consulta rows

            $key3 = ConsultaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ConsultaPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ConsultaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ConsultaPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Factura) to the collection in $obj3 (Consulta)
                $obj3->addFactura($obj1);
            } // if joined row not null

            // Add objects for joined Pacientefacturacion rows

            $key4 = PacientefacturacionPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = PacientefacturacionPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = PacientefacturacionPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    PacientefacturacionPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Factura) to the collection in $obj4 (Pacientefacturacion)
                $obj4->addFactura($obj1);
            } // if joined row not null

            // Add objects for joined Venta rows

            $key5 = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = VentaPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = VentaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    VentaPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Factura) to the collection in $obj5 (Venta)
                $obj5->addFactura($obj1);
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
        $criteria->setPrimaryTableName(FacturaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FacturaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDDATOSFACTURACION, PacientefacturacionPeer::IDPACIENTEFACTURACION, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
        $criteria->setPrimaryTableName(FacturaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FacturaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturaPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDDATOSFACTURACION, PacientefacturacionPeer::IDPACIENTEFACTURACION, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Pacientefacturacion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPacientefacturacion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FacturaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FacturaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturaPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
        $criteria->setPrimaryTableName(FacturaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FacturaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FacturaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FacturaPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDDATOSFACTURACION, PacientefacturacionPeer::IDPACIENTEFACTURACION, $join_behavior);

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
     * Selects a collection of Factura objects pre-filled with all related objects except Admision.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factura objects.
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
            $criteria->setDbName(FacturaPeer::DATABASE_NAME);
        }

        FacturaPeer::addSelectColumns($criteria);
        $startcol2 = FacturaPeer::NUM_HYDRATE_COLUMNS;

        ConsultaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ConsultaPeer::NUM_HYDRATE_COLUMNS;

        PacientefacturacionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + PacientefacturacionPeer::NUM_HYDRATE_COLUMNS;

        VentaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + VentaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDDATOSFACTURACION, PacientefacturacionPeer::IDPACIENTEFACTURACION, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Factura) to the collection in $obj2 (Consulta)
                $obj2->addFactura($obj1);

            } // if joined row is not null

                // Add objects for joined Pacientefacturacion rows

                $key3 = PacientefacturacionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = PacientefacturacionPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = PacientefacturacionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    PacientefacturacionPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Factura) to the collection in $obj3 (Pacientefacturacion)
                $obj3->addFactura($obj1);

            } // if joined row is not null

                // Add objects for joined Venta rows

                $key4 = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = VentaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = VentaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    VentaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Factura) to the collection in $obj4 (Venta)
                $obj4->addFactura($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factura objects pre-filled with all related objects except Consulta.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factura objects.
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
            $criteria->setDbName(FacturaPeer::DATABASE_NAME);
        }

        FacturaPeer::addSelectColumns($criteria);
        $startcol2 = FacturaPeer::NUM_HYDRATE_COLUMNS;

        AdmisionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AdmisionPeer::NUM_HYDRATE_COLUMNS;

        PacientefacturacionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + PacientefacturacionPeer::NUM_HYDRATE_COLUMNS;

        VentaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + VentaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturaPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDDATOSFACTURACION, PacientefacturacionPeer::IDPACIENTEFACTURACION, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Factura) to the collection in $obj2 (Admision)
                $obj2->addFactura($obj1);

            } // if joined row is not null

                // Add objects for joined Pacientefacturacion rows

                $key3 = PacientefacturacionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = PacientefacturacionPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = PacientefacturacionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    PacientefacturacionPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Factura) to the collection in $obj3 (Pacientefacturacion)
                $obj3->addFactura($obj1);

            } // if joined row is not null

                // Add objects for joined Venta rows

                $key4 = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = VentaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = VentaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    VentaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Factura) to the collection in $obj4 (Venta)
                $obj4->addFactura($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factura objects pre-filled with all related objects except Pacientefacturacion.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factura objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPacientefacturacion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FacturaPeer::DATABASE_NAME);
        }

        FacturaPeer::addSelectColumns($criteria);
        $startcol2 = FacturaPeer::NUM_HYDRATE_COLUMNS;

        AdmisionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AdmisionPeer::NUM_HYDRATE_COLUMNS;

        ConsultaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ConsultaPeer::NUM_HYDRATE_COLUMNS;

        VentaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + VentaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturaPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Factura) to the collection in $obj2 (Admision)
                $obj2->addFactura($obj1);

            } // if joined row is not null

                // Add objects for joined Consulta rows

                $key3 = ConsultaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ConsultaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ConsultaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ConsultaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Factura) to the collection in $obj3 (Consulta)
                $obj3->addFactura($obj1);

            } // if joined row is not null

                // Add objects for joined Venta rows

                $key4 = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = VentaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = VentaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    VentaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Factura) to the collection in $obj4 (Venta)
                $obj4->addFactura($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Factura objects pre-filled with all related objects except Venta.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Factura objects.
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
            $criteria->setDbName(FacturaPeer::DATABASE_NAME);
        }

        FacturaPeer::addSelectColumns($criteria);
        $startcol2 = FacturaPeer::NUM_HYDRATE_COLUMNS;

        AdmisionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AdmisionPeer::NUM_HYDRATE_COLUMNS;

        ConsultaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ConsultaPeer::NUM_HYDRATE_COLUMNS;

        PacientefacturacionPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + PacientefacturacionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FacturaPeer::IDADMISION, AdmisionPeer::IDADMISION, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDCONSULTA, ConsultaPeer::IDCONSULTA, $join_behavior);

        $criteria->addJoin(FacturaPeer::IDDATOSFACTURACION, PacientefacturacionPeer::IDPACIENTEFACTURACION, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FacturaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FacturaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FacturaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FacturaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Factura) to the collection in $obj2 (Admision)
                $obj2->addFactura($obj1);

            } // if joined row is not null

                // Add objects for joined Consulta rows

                $key3 = ConsultaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ConsultaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ConsultaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ConsultaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Factura) to the collection in $obj3 (Consulta)
                $obj3->addFactura($obj1);

            } // if joined row is not null

                // Add objects for joined Pacientefacturacion rows

                $key4 = PacientefacturacionPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = PacientefacturacionPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = PacientefacturacionPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    PacientefacturacionPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Factura) to the collection in $obj4 (Pacientefacturacion)
                $obj4->addFactura($obj1);

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
        return Propel::getDatabaseMap(FacturaPeer::DATABASE_NAME)->getTable(FacturaPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFacturaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFacturaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FacturaTableMap());
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
        return FacturaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Factura or Criteria object.
     *
     * @param      mixed $values Criteria or Factura object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Factura object
        }

        if ($criteria->containsKey(FacturaPeer::IDFACTURA) && $criteria->keyContainsValue(FacturaPeer::IDFACTURA) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.FacturaPeer::IDFACTURA.')');
        }


        // Set the correct dbName
        $criteria->setDbName(FacturaPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Factura or Criteria object.
     *
     * @param      mixed $values Criteria or Factura object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FacturaPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FacturaPeer::IDFACTURA);
            $value = $criteria->remove(FacturaPeer::IDFACTURA);
            if ($value) {
                $selectCriteria->add(FacturaPeer::IDFACTURA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FacturaPeer::TABLE_NAME);
            }

        } else { // $values is Factura object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FacturaPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the factura table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FacturaPeer::TABLE_NAME, $con, FacturaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FacturaPeer::clearInstancePool();
            FacturaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Factura or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Factura object or primary key or array of primary keys
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
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FacturaPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Factura) { // it's a model object
            // invalidate the cache for this single object
            FacturaPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FacturaPeer::DATABASE_NAME);
            $criteria->add(FacturaPeer::IDFACTURA, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                FacturaPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FacturaPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FacturaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Factura object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Factura $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FacturaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FacturaPeer::TABLE_NAME);

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

        return BasePeer::doValidate(FacturaPeer::DATABASE_NAME, FacturaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Factura
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = FacturaPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(FacturaPeer::DATABASE_NAME);
        $criteria->add(FacturaPeer::IDFACTURA, $pk);

        $v = FacturaPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Factura[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(FacturaPeer::DATABASE_NAME);
            $criteria->add(FacturaPeer::IDFACTURA, $pks, Criteria::IN);
            $objs = FacturaPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseFacturaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFacturaPeer::buildTableMap();

