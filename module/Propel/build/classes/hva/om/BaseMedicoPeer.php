<?php


/**
 * Base static class for performing query and update operations on the 'medico' table.
 *
 *
 *
 * @package propel.generator.hva.om
 */
abstract class BaseMedicoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'hva';

    /** the table name for this class */
    const TABLE_NAME = 'medico';

    /** the related Propel class for this table */
    const OM_CLASS = 'Medico';

    /** the related TableMap class for this table */
    const TM_CLASS = 'MedicoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 21;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 21;

    /** the column name for the idmedico field */
    const IDMEDICO = 'medico.idmedico';

    /** the column name for the idespecialidad field */
    const IDESPECIALIDAD = 'medico.idespecialidad';

    /** the column name for the medico_nombre field */
    const MEDICO_NOMBRE = 'medico.medico_nombre';

    /** the column name for the medico_apellidopaterno field */
    const MEDICO_APELLIDOPATERNO = 'medico.medico_apellidopaterno';

    /** the column name for the medico_apellidomaterno field */
    const MEDICO_APELLIDOMATERNO = 'medico.medico_apellidomaterno';

    /** the column name for the medico_calle field */
    const MEDICO_CALLE = 'medico.medico_calle';

    /** the column name for the medico_noexterior field */
    const MEDICO_NOEXTERIOR = 'medico.medico_noexterior';

    /** the column name for the medico_nointerior field */
    const MEDICO_NOINTERIOR = 'medico.medico_nointerior';

    /** the column name for the medico_colonia field */
    const MEDICO_COLONIA = 'medico.medico_colonia';

    /** the column name for the medico_codigopostal field */
    const MEDICO_CODIGOPOSTAL = 'medico.medico_codigopostal';

    /** the column name for the medico_ciudad field */
    const MEDICO_CIUDAD = 'medico.medico_ciudad';

    /** the column name for the medico_estado field */
    const MEDICO_ESTADO = 'medico.medico_estado';

    /** the column name for the medico_pais field */
    const MEDICO_PAIS = 'medico.medico_pais';

    /** the column name for the medico_telefono field */
    const MEDICO_TELEFONO = 'medico.medico_telefono';

    /** the column name for the medico_telefonocelular field */
    const MEDICO_TELEFONOCELULAR = 'medico.medico_telefonocelular';

    /** the column name for the medico_clave field */
    const MEDICO_CLAVE = 'medico.medico_clave';

    /** the column name for the medico_dgp field */
    const MEDICO_DGP = 'medico.medico_dgp';

    /** the column name for the medico_ssa field */
    const MEDICO_SSA = 'medico.medico_ssa';

    /** the column name for the medico_ae field */
    const MEDICO_AE = 'medico.medico_ae';

    /** the column name for the medico_fotografia field */
    const MEDICO_FOTOGRAFIA = 'medico.medico_fotografia';

    /** the column name for the medico_perfilcompleto field */
    const MEDICO_PERFILCOMPLETO = 'medico.medico_perfilcompleto';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Medico objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Medico[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. MedicoPeer::$fieldNames[MedicoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idmedico', 'Idespecialidad', 'MedicoNombre', 'MedicoApellidopaterno', 'MedicoApellidomaterno', 'MedicoCalle', 'MedicoNoexterior', 'MedicoNointerior', 'MedicoColonia', 'MedicoCodigopostal', 'MedicoCiudad', 'MedicoEstado', 'MedicoPais', 'MedicoTelefono', 'MedicoTelefonocelular', 'MedicoClave', 'MedicoDgp', 'MedicoSsa', 'MedicoAe', 'MedicoFotografia', 'MedicoPerfilcompleto', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idmedico', 'idespecialidad', 'medicoNombre', 'medicoApellidopaterno', 'medicoApellidomaterno', 'medicoCalle', 'medicoNoexterior', 'medicoNointerior', 'medicoColonia', 'medicoCodigopostal', 'medicoCiudad', 'medicoEstado', 'medicoPais', 'medicoTelefono', 'medicoTelefonocelular', 'medicoClave', 'medicoDgp', 'medicoSsa', 'medicoAe', 'medicoFotografia', 'medicoPerfilcompleto', ),
        BasePeer::TYPE_COLNAME => array (MedicoPeer::IDMEDICO, MedicoPeer::IDESPECIALIDAD, MedicoPeer::MEDICO_NOMBRE, MedicoPeer::MEDICO_APELLIDOPATERNO, MedicoPeer::MEDICO_APELLIDOMATERNO, MedicoPeer::MEDICO_CALLE, MedicoPeer::MEDICO_NOEXTERIOR, MedicoPeer::MEDICO_NOINTERIOR, MedicoPeer::MEDICO_COLONIA, MedicoPeer::MEDICO_CODIGOPOSTAL, MedicoPeer::MEDICO_CIUDAD, MedicoPeer::MEDICO_ESTADO, MedicoPeer::MEDICO_PAIS, MedicoPeer::MEDICO_TELEFONO, MedicoPeer::MEDICO_TELEFONOCELULAR, MedicoPeer::MEDICO_CLAVE, MedicoPeer::MEDICO_DGP, MedicoPeer::MEDICO_SSA, MedicoPeer::MEDICO_AE, MedicoPeer::MEDICO_FOTOGRAFIA, MedicoPeer::MEDICO_PERFILCOMPLETO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDMEDICO', 'IDESPECIALIDAD', 'MEDICO_NOMBRE', 'MEDICO_APELLIDOPATERNO', 'MEDICO_APELLIDOMATERNO', 'MEDICO_CALLE', 'MEDICO_NOEXTERIOR', 'MEDICO_NOINTERIOR', 'MEDICO_COLONIA', 'MEDICO_CODIGOPOSTAL', 'MEDICO_CIUDAD', 'MEDICO_ESTADO', 'MEDICO_PAIS', 'MEDICO_TELEFONO', 'MEDICO_TELEFONOCELULAR', 'MEDICO_CLAVE', 'MEDICO_DGP', 'MEDICO_SSA', 'MEDICO_AE', 'MEDICO_FOTOGRAFIA', 'MEDICO_PERFILCOMPLETO', ),
        BasePeer::TYPE_FIELDNAME => array ('idmedico', 'idespecialidad', 'medico_nombre', 'medico_apellidopaterno', 'medico_apellidomaterno', 'medico_calle', 'medico_noexterior', 'medico_nointerior', 'medico_colonia', 'medico_codigopostal', 'medico_ciudad', 'medico_estado', 'medico_pais', 'medico_telefono', 'medico_telefonocelular', 'medico_clave', 'medico_dgp', 'medico_ssa', 'medico_ae', 'medico_fotografia', 'medico_perfilcompleto', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. MedicoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idmedico' => 0, 'Idespecialidad' => 1, 'MedicoNombre' => 2, 'MedicoApellidopaterno' => 3, 'MedicoApellidomaterno' => 4, 'MedicoCalle' => 5, 'MedicoNoexterior' => 6, 'MedicoNointerior' => 7, 'MedicoColonia' => 8, 'MedicoCodigopostal' => 9, 'MedicoCiudad' => 10, 'MedicoEstado' => 11, 'MedicoPais' => 12, 'MedicoTelefono' => 13, 'MedicoTelefonocelular' => 14, 'MedicoClave' => 15, 'MedicoDgp' => 16, 'MedicoSsa' => 17, 'MedicoAe' => 18, 'MedicoFotografia' => 19, 'MedicoPerfilcompleto' => 20, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idmedico' => 0, 'idespecialidad' => 1, 'medicoNombre' => 2, 'medicoApellidopaterno' => 3, 'medicoApellidomaterno' => 4, 'medicoCalle' => 5, 'medicoNoexterior' => 6, 'medicoNointerior' => 7, 'medicoColonia' => 8, 'medicoCodigopostal' => 9, 'medicoCiudad' => 10, 'medicoEstado' => 11, 'medicoPais' => 12, 'medicoTelefono' => 13, 'medicoTelefonocelular' => 14, 'medicoClave' => 15, 'medicoDgp' => 16, 'medicoSsa' => 17, 'medicoAe' => 18, 'medicoFotografia' => 19, 'medicoPerfilcompleto' => 20, ),
        BasePeer::TYPE_COLNAME => array (MedicoPeer::IDMEDICO => 0, MedicoPeer::IDESPECIALIDAD => 1, MedicoPeer::MEDICO_NOMBRE => 2, MedicoPeer::MEDICO_APELLIDOPATERNO => 3, MedicoPeer::MEDICO_APELLIDOMATERNO => 4, MedicoPeer::MEDICO_CALLE => 5, MedicoPeer::MEDICO_NOEXTERIOR => 6, MedicoPeer::MEDICO_NOINTERIOR => 7, MedicoPeer::MEDICO_COLONIA => 8, MedicoPeer::MEDICO_CODIGOPOSTAL => 9, MedicoPeer::MEDICO_CIUDAD => 10, MedicoPeer::MEDICO_ESTADO => 11, MedicoPeer::MEDICO_PAIS => 12, MedicoPeer::MEDICO_TELEFONO => 13, MedicoPeer::MEDICO_TELEFONOCELULAR => 14, MedicoPeer::MEDICO_CLAVE => 15, MedicoPeer::MEDICO_DGP => 16, MedicoPeer::MEDICO_SSA => 17, MedicoPeer::MEDICO_AE => 18, MedicoPeer::MEDICO_FOTOGRAFIA => 19, MedicoPeer::MEDICO_PERFILCOMPLETO => 20, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDMEDICO' => 0, 'IDESPECIALIDAD' => 1, 'MEDICO_NOMBRE' => 2, 'MEDICO_APELLIDOPATERNO' => 3, 'MEDICO_APELLIDOMATERNO' => 4, 'MEDICO_CALLE' => 5, 'MEDICO_NOEXTERIOR' => 6, 'MEDICO_NOINTERIOR' => 7, 'MEDICO_COLONIA' => 8, 'MEDICO_CODIGOPOSTAL' => 9, 'MEDICO_CIUDAD' => 10, 'MEDICO_ESTADO' => 11, 'MEDICO_PAIS' => 12, 'MEDICO_TELEFONO' => 13, 'MEDICO_TELEFONOCELULAR' => 14, 'MEDICO_CLAVE' => 15, 'MEDICO_DGP' => 16, 'MEDICO_SSA' => 17, 'MEDICO_AE' => 18, 'MEDICO_FOTOGRAFIA' => 19, 'MEDICO_PERFILCOMPLETO' => 20, ),
        BasePeer::TYPE_FIELDNAME => array ('idmedico' => 0, 'idespecialidad' => 1, 'medico_nombre' => 2, 'medico_apellidopaterno' => 3, 'medico_apellidomaterno' => 4, 'medico_calle' => 5, 'medico_noexterior' => 6, 'medico_nointerior' => 7, 'medico_colonia' => 8, 'medico_codigopostal' => 9, 'medico_ciudad' => 10, 'medico_estado' => 11, 'medico_pais' => 12, 'medico_telefono' => 13, 'medico_telefonocelular' => 14, 'medico_clave' => 15, 'medico_dgp' => 16, 'medico_ssa' => 17, 'medico_ae' => 18, 'medico_fotografia' => 19, 'medico_perfilcompleto' => 20, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
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
        $toNames = MedicoPeer::getFieldNames($toType);
        $key = isset(MedicoPeer::$fieldKeys[$fromType][$name]) ? MedicoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(MedicoPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, MedicoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return MedicoPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. MedicoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(MedicoPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(MedicoPeer::IDMEDICO);
            $criteria->addSelectColumn(MedicoPeer::IDESPECIALIDAD);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_NOMBRE);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_APELLIDOPATERNO);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_APELLIDOMATERNO);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_CALLE);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_NOEXTERIOR);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_NOINTERIOR);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_COLONIA);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_CODIGOPOSTAL);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_CIUDAD);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_ESTADO);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_PAIS);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_TELEFONO);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_TELEFONOCELULAR);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_CLAVE);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_DGP);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_SSA);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_AE);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_FOTOGRAFIA);
            $criteria->addSelectColumn(MedicoPeer::MEDICO_PERFILCOMPLETO);
        } else {
            $criteria->addSelectColumn($alias . '.idmedico');
            $criteria->addSelectColumn($alias . '.idespecialidad');
            $criteria->addSelectColumn($alias . '.medico_nombre');
            $criteria->addSelectColumn($alias . '.medico_apellidopaterno');
            $criteria->addSelectColumn($alias . '.medico_apellidomaterno');
            $criteria->addSelectColumn($alias . '.medico_calle');
            $criteria->addSelectColumn($alias . '.medico_noexterior');
            $criteria->addSelectColumn($alias . '.medico_nointerior');
            $criteria->addSelectColumn($alias . '.medico_colonia');
            $criteria->addSelectColumn($alias . '.medico_codigopostal');
            $criteria->addSelectColumn($alias . '.medico_ciudad');
            $criteria->addSelectColumn($alias . '.medico_estado');
            $criteria->addSelectColumn($alias . '.medico_pais');
            $criteria->addSelectColumn($alias . '.medico_telefono');
            $criteria->addSelectColumn($alias . '.medico_telefonocelular');
            $criteria->addSelectColumn($alias . '.medico_clave');
            $criteria->addSelectColumn($alias . '.medico_dgp');
            $criteria->addSelectColumn($alias . '.medico_ssa');
            $criteria->addSelectColumn($alias . '.medico_ae');
            $criteria->addSelectColumn($alias . '.medico_fotografia');
            $criteria->addSelectColumn($alias . '.medico_perfilcompleto');
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
        $criteria->setPrimaryTableName(MedicoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MedicoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(MedicoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(MedicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Medico
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = MedicoPeer::doSelect($critcopy, $con);
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
        return MedicoPeer::populateObjects(MedicoPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(MedicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            MedicoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(MedicoPeer::DATABASE_NAME);

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
     * @param Medico $obj A Medico object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdmedico();
            } // if key === null
            MedicoPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Medico object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Medico) {
                $key = (string) $value->getIdmedico();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Medico object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(MedicoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Medico Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(MedicoPeer::$instances[$key])) {
                return MedicoPeer::$instances[$key];
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
        foreach (MedicoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        MedicoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to medico
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in AdmisionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        AdmisionPeer::clearInstancePool();
        // Invalidate objects in CitaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CitaPeer::clearInstancePool();
        // Invalidate objects in ConsultaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ConsultaPeer::clearInstancePool();
        // Invalidate objects in MedicoespecialidadPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        MedicoespecialidadPeer::clearInstancePool();
        // Invalidate objects in MedicofacturacionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        MedicofacturacionPeer::clearInstancePool();
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
        $cls = MedicoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = MedicoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = MedicoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MedicoPeer::addInstanceToPool($obj, $key);
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
     * @return array (Medico object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = MedicoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = MedicoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + MedicoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MedicoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            MedicoPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Especialidad table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEspecialidad(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(MedicoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MedicoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(MedicoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(MedicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(MedicoPeer::IDESPECIALIDAD, EspecialidadPeer::IDESPECIALIDAD, $join_behavior);

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
     * Selects a collection of Medico objects pre-filled with their Especialidad objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Medico objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEspecialidad(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(MedicoPeer::DATABASE_NAME);
        }

        MedicoPeer::addSelectColumns($criteria);
        $startcol = MedicoPeer::NUM_HYDRATE_COLUMNS;
        EspecialidadPeer::addSelectColumns($criteria);

        $criteria->addJoin(MedicoPeer::IDESPECIALIDAD, EspecialidadPeer::IDESPECIALIDAD, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = MedicoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = MedicoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = MedicoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                MedicoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = EspecialidadPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = EspecialidadPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EspecialidadPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    EspecialidadPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Medico) to $obj2 (Especialidad)
                $obj2->addMedico($obj1);

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
        $criteria->setPrimaryTableName(MedicoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MedicoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(MedicoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(MedicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(MedicoPeer::IDESPECIALIDAD, EspecialidadPeer::IDESPECIALIDAD, $join_behavior);

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
     * Selects a collection of Medico objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Medico objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(MedicoPeer::DATABASE_NAME);
        }

        MedicoPeer::addSelectColumns($criteria);
        $startcol2 = MedicoPeer::NUM_HYDRATE_COLUMNS;

        EspecialidadPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EspecialidadPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(MedicoPeer::IDESPECIALIDAD, EspecialidadPeer::IDESPECIALIDAD, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = MedicoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = MedicoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = MedicoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                MedicoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Especialidad rows

            $key2 = EspecialidadPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = EspecialidadPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EspecialidadPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    EspecialidadPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Medico) to the collection in $obj2 (Especialidad)
                $obj2->addMedico($obj1);
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
        return Propel::getDatabaseMap(MedicoPeer::DATABASE_NAME)->getTable(MedicoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseMedicoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseMedicoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \MedicoTableMap());
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
        return MedicoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Medico or Criteria object.
     *
     * @param      mixed $values Criteria or Medico object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MedicoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Medico object
        }

        if ($criteria->containsKey(MedicoPeer::IDMEDICO) && $criteria->keyContainsValue(MedicoPeer::IDMEDICO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.MedicoPeer::IDMEDICO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(MedicoPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Medico or Criteria object.
     *
     * @param      mixed $values Criteria or Medico object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MedicoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(MedicoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(MedicoPeer::IDMEDICO);
            $value = $criteria->remove(MedicoPeer::IDMEDICO);
            if ($value) {
                $selectCriteria->add(MedicoPeer::IDMEDICO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MedicoPeer::TABLE_NAME);
            }

        } else { // $values is Medico object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(MedicoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the medico table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MedicoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += MedicoPeer::doOnDeleteCascade(new Criteria(MedicoPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(MedicoPeer::TABLE_NAME, $con, MedicoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MedicoPeer::clearInstancePool();
            MedicoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Medico or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Medico object or primary key or array of primary keys
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
            $con = Propel::getConnection(MedicoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Medico) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MedicoPeer::DATABASE_NAME);
            $criteria->add(MedicoPeer::IDMEDICO, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(MedicoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += MedicoPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                MedicoPeer::clearInstancePool();
            } elseif ($values instanceof Medico) { // it's a model object
                MedicoPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    MedicoPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            MedicoPeer::clearRelatedInstancePool();
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
        $objects = MedicoPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Admision objects
            $criteria = new Criteria(AdmisionPeer::DATABASE_NAME);

            $criteria->add(AdmisionPeer::IDMEDICO, $obj->getIdmedico());
            $affectedRows += AdmisionPeer::doDelete($criteria, $con);

            // delete related Cita objects
            $criteria = new Criteria(CitaPeer::DATABASE_NAME);

            $criteria->add(CitaPeer::IDMEDICO, $obj->getIdmedico());
            $affectedRows += CitaPeer::doDelete($criteria, $con);

            // delete related Consulta objects
            $criteria = new Criteria(ConsultaPeer::DATABASE_NAME);

            $criteria->add(ConsultaPeer::IDMEDICO, $obj->getIdmedico());
            $affectedRows += ConsultaPeer::doDelete($criteria, $con);

            // delete related Medicoespecialidad objects
            $criteria = new Criteria(MedicoespecialidadPeer::DATABASE_NAME);

            $criteria->add(MedicoespecialidadPeer::IDMEDICO, $obj->getIdmedico());
            $affectedRows += MedicoespecialidadPeer::doDelete($criteria, $con);

            // delete related Medicofacturacion objects
            $criteria = new Criteria(MedicofacturacionPeer::DATABASE_NAME);

            $criteria->add(MedicofacturacionPeer::IDMEDICO, $obj->getIdmedico());
            $affectedRows += MedicofacturacionPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Medico object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Medico $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(MedicoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(MedicoPeer::TABLE_NAME);

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

        return BasePeer::doValidate(MedicoPeer::DATABASE_NAME, MedicoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Medico
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = MedicoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(MedicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(MedicoPeer::DATABASE_NAME);
        $criteria->add(MedicoPeer::IDMEDICO, $pk);

        $v = MedicoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Medico[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MedicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(MedicoPeer::DATABASE_NAME);
            $criteria->add(MedicoPeer::IDMEDICO, $pks, Criteria::IN);
            $objs = MedicoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseMedicoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseMedicoPeer::buildTableMap();

