<?php


/**
 * Base class that represents a row from the 'empleadofacturacion' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseEmpleadofacturacion extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EmpleadofacturacionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EmpleadofacturacionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idempleadofacturacion field.
     * @var        int
     */
    protected $idempleadofacturacion;

    /**
     * The value for the idempleado field.
     * @var        int
     */
    protected $idempleado;

    /**
     * The value for the empleadofacturacion_razonsocial field.
     * @var        string
     */
    protected $empleadofacturacion_razonsocial;

    /**
     * The value for the empleadofacturacion_rfc field.
     * @var        string
     */
    protected $empleadofacturacion_rfc;

    /**
     * The value for the empleadofacturacion_calle field.
     * @var        string
     */
    protected $empleadofacturacion_calle;

    /**
     * The value for the empleadofacturacion_noexterior field.
     * @var        string
     */
    protected $empleadofacturacion_noexterior;

    /**
     * The value for the empleadofacturacion_nointerior field.
     * @var        string
     */
    protected $empleadofacturacion_nointerior;

    /**
     * The value for the empleadofacturacion_colonia field.
     * @var        string
     */
    protected $empleadofacturacion_colonia;

    /**
     * The value for the empleadofacturacion_ciudad field.
     * @var        string
     */
    protected $empleadofacturacion_ciudad;

    /**
     * The value for the empleadofacturacion_estado field.
     * @var        string
     */
    protected $empleadofacturacion_estado;

    /**
     * The value for the empleadofacturacion_pais field.
     * @var        string
     */
    protected $empleadofacturacion_pais;

    /**
     * The value for the empleadofacturacion_codigopostal field.
     * @var        string
     */
    protected $empleadofacturacion_codigopostal;

    /**
     * The value for the empleadofacturacion_telefono field.
     * @var        string
     */
    protected $empleadofacturacion_telefono;

    /**
     * The value for the empleadofacturacion_email field.
     * @var        string
     */
    protected $empleadofacturacion_email;

    /**
     * @var        Empleado
     */
    protected $aEmpleado;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Get the [idempleadofacturacion] column value.
     *
     * @return int
     */
    public function getIdempleadofacturacion()
    {

        return $this->idempleadofacturacion;
    }

    /**
     * Get the [idempleado] column value.
     *
     * @return int
     */
    public function getIdempleado()
    {

        return $this->idempleado;
    }

    /**
     * Get the [empleadofacturacion_razonsocial] column value.
     *
     * @return string
     */
    public function getEmpleadofacturacionRazonsocial()
    {

        return $this->empleadofacturacion_razonsocial;
    }

    /**
     * Get the [empleadofacturacion_rfc] column value.
     *
     * @return string
     */
    public function getEmpleadofacturacionRfc()
    {

        return $this->empleadofacturacion_rfc;
    }

    /**
     * Get the [empleadofacturacion_calle] column value.
     *
     * @return string
     */
    public function getEmpleadofacturacionCalle()
    {

        return $this->empleadofacturacion_calle;
    }

    /**
     * Get the [empleadofacturacion_noexterior] column value.
     *
     * @return string
     */
    public function getEmpleadofacturacionNoexterior()
    {

        return $this->empleadofacturacion_noexterior;
    }

    /**
     * Get the [empleadofacturacion_nointerior] column value.
     *
     * @return string
     */
    public function getEmpleadofacturacionNointerior()
    {

        return $this->empleadofacturacion_nointerior;
    }

    /**
     * Get the [empleadofacturacion_colonia] column value.
     *
     * @return string
     */
    public function getEmpleadofacturacionColonia()
    {

        return $this->empleadofacturacion_colonia;
    }

    /**
     * Get the [empleadofacturacion_ciudad] column value.
     *
     * @return string
     */
    public function getEmpleadofacturacionCiudad()
    {

        return $this->empleadofacturacion_ciudad;
    }

    /**
     * Get the [empleadofacturacion_estado] column value.
     *
     * @return string
     */
    public function getEmpleadofacturacionEstado()
    {

        return $this->empleadofacturacion_estado;
    }

    /**
     * Get the [empleadofacturacion_pais] column value.
     *
     * @return string
     */
    public function getEmpleadofacturacionPais()
    {

        return $this->empleadofacturacion_pais;
    }

    /**
     * Get the [empleadofacturacion_codigopostal] column value.
     *
     * @return string
     */
    public function getEmpleadofacturacionCodigopostal()
    {

        return $this->empleadofacturacion_codigopostal;
    }

    /**
     * Get the [empleadofacturacion_telefono] column value.
     *
     * @return string
     */
    public function getEmpleadofacturacionTelefono()
    {

        return $this->empleadofacturacion_telefono;
    }

    /**
     * Get the [empleadofacturacion_email] column value.
     *
     * @return string
     */
    public function getEmpleadofacturacionEmail()
    {

        return $this->empleadofacturacion_email;
    }

    /**
     * Set the value of [idempleadofacturacion] column.
     *
     * @param  int $v new value
     * @return Empleadofacturacion The current object (for fluent API support)
     */
    public function setIdempleadofacturacion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleadofacturacion !== $v) {
            $this->idempleadofacturacion = $v;
            $this->modifiedColumns[] = EmpleadofacturacionPeer::IDEMPLEADOFACTURACION;
        }


        return $this;
    } // setIdempleadofacturacion()

    /**
     * Set the value of [idempleado] column.
     *
     * @param  int $v new value
     * @return Empleadofacturacion The current object (for fluent API support)
     */
    public function setIdempleado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleado !== $v) {
            $this->idempleado = $v;
            $this->modifiedColumns[] = EmpleadofacturacionPeer::IDEMPLEADO;
        }

        if ($this->aEmpleado !== null && $this->aEmpleado->getIdempleado() !== $v) {
            $this->aEmpleado = null;
        }


        return $this;
    } // setIdempleado()

    /**
     * Set the value of [empleadofacturacion_razonsocial] column.
     *
     * @param  string $v new value
     * @return Empleadofacturacion The current object (for fluent API support)
     */
    public function setEmpleadofacturacionRazonsocial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleadofacturacion_razonsocial !== $v) {
            $this->empleadofacturacion_razonsocial = $v;
            $this->modifiedColumns[] = EmpleadofacturacionPeer::EMPLEADOFACTURACION_RAZONSOCIAL;
        }


        return $this;
    } // setEmpleadofacturacionRazonsocial()

    /**
     * Set the value of [empleadofacturacion_rfc] column.
     *
     * @param  string $v new value
     * @return Empleadofacturacion The current object (for fluent API support)
     */
    public function setEmpleadofacturacionRfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleadofacturacion_rfc !== $v) {
            $this->empleadofacturacion_rfc = $v;
            $this->modifiedColumns[] = EmpleadofacturacionPeer::EMPLEADOFACTURACION_RFC;
        }


        return $this;
    } // setEmpleadofacturacionRfc()

    /**
     * Set the value of [empleadofacturacion_calle] column.
     *
     * @param  string $v new value
     * @return Empleadofacturacion The current object (for fluent API support)
     */
    public function setEmpleadofacturacionCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleadofacturacion_calle !== $v) {
            $this->empleadofacturacion_calle = $v;
            $this->modifiedColumns[] = EmpleadofacturacionPeer::EMPLEADOFACTURACION_CALLE;
        }


        return $this;
    } // setEmpleadofacturacionCalle()

    /**
     * Set the value of [empleadofacturacion_noexterior] column.
     *
     * @param  string $v new value
     * @return Empleadofacturacion The current object (for fluent API support)
     */
    public function setEmpleadofacturacionNoexterior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleadofacturacion_noexterior !== $v) {
            $this->empleadofacturacion_noexterior = $v;
            $this->modifiedColumns[] = EmpleadofacturacionPeer::EMPLEADOFACTURACION_NOEXTERIOR;
        }


        return $this;
    } // setEmpleadofacturacionNoexterior()

    /**
     * Set the value of [empleadofacturacion_nointerior] column.
     *
     * @param  string $v new value
     * @return Empleadofacturacion The current object (for fluent API support)
     */
    public function setEmpleadofacturacionNointerior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleadofacturacion_nointerior !== $v) {
            $this->empleadofacturacion_nointerior = $v;
            $this->modifiedColumns[] = EmpleadofacturacionPeer::EMPLEADOFACTURACION_NOINTERIOR;
        }


        return $this;
    } // setEmpleadofacturacionNointerior()

    /**
     * Set the value of [empleadofacturacion_colonia] column.
     *
     * @param  string $v new value
     * @return Empleadofacturacion The current object (for fluent API support)
     */
    public function setEmpleadofacturacionColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleadofacturacion_colonia !== $v) {
            $this->empleadofacturacion_colonia = $v;
            $this->modifiedColumns[] = EmpleadofacturacionPeer::EMPLEADOFACTURACION_COLONIA;
        }


        return $this;
    } // setEmpleadofacturacionColonia()

    /**
     * Set the value of [empleadofacturacion_ciudad] column.
     *
     * @param  string $v new value
     * @return Empleadofacturacion The current object (for fluent API support)
     */
    public function setEmpleadofacturacionCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleadofacturacion_ciudad !== $v) {
            $this->empleadofacturacion_ciudad = $v;
            $this->modifiedColumns[] = EmpleadofacturacionPeer::EMPLEADOFACTURACION_CIUDAD;
        }


        return $this;
    } // setEmpleadofacturacionCiudad()

    /**
     * Set the value of [empleadofacturacion_estado] column.
     *
     * @param  string $v new value
     * @return Empleadofacturacion The current object (for fluent API support)
     */
    public function setEmpleadofacturacionEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleadofacturacion_estado !== $v) {
            $this->empleadofacturacion_estado = $v;
            $this->modifiedColumns[] = EmpleadofacturacionPeer::EMPLEADOFACTURACION_ESTADO;
        }


        return $this;
    } // setEmpleadofacturacionEstado()

    /**
     * Set the value of [empleadofacturacion_pais] column.
     *
     * @param  string $v new value
     * @return Empleadofacturacion The current object (for fluent API support)
     */
    public function setEmpleadofacturacionPais($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleadofacturacion_pais !== $v) {
            $this->empleadofacturacion_pais = $v;
            $this->modifiedColumns[] = EmpleadofacturacionPeer::EMPLEADOFACTURACION_PAIS;
        }


        return $this;
    } // setEmpleadofacturacionPais()

    /**
     * Set the value of [empleadofacturacion_codigopostal] column.
     *
     * @param  string $v new value
     * @return Empleadofacturacion The current object (for fluent API support)
     */
    public function setEmpleadofacturacionCodigopostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleadofacturacion_codigopostal !== $v) {
            $this->empleadofacturacion_codigopostal = $v;
            $this->modifiedColumns[] = EmpleadofacturacionPeer::EMPLEADOFACTURACION_CODIGOPOSTAL;
        }


        return $this;
    } // setEmpleadofacturacionCodigopostal()

    /**
     * Set the value of [empleadofacturacion_telefono] column.
     *
     * @param  string $v new value
     * @return Empleadofacturacion The current object (for fluent API support)
     */
    public function setEmpleadofacturacionTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleadofacturacion_telefono !== $v) {
            $this->empleadofacturacion_telefono = $v;
            $this->modifiedColumns[] = EmpleadofacturacionPeer::EMPLEADOFACTURACION_TELEFONO;
        }


        return $this;
    } // setEmpleadofacturacionTelefono()

    /**
     * Set the value of [empleadofacturacion_email] column.
     *
     * @param  string $v new value
     * @return Empleadofacturacion The current object (for fluent API support)
     */
    public function setEmpleadofacturacionEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleadofacturacion_email !== $v) {
            $this->empleadofacturacion_email = $v;
            $this->modifiedColumns[] = EmpleadofacturacionPeer::EMPLEADOFACTURACION_EMAIL;
        }


        return $this;
    } // setEmpleadofacturacionEmail()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->idempleadofacturacion = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempleado = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->empleadofacturacion_razonsocial = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->empleadofacturacion_rfc = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->empleadofacturacion_calle = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->empleadofacturacion_noexterior = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->empleadofacturacion_nointerior = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->empleadofacturacion_colonia = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->empleadofacturacion_ciudad = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->empleadofacturacion_estado = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->empleadofacturacion_pais = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->empleadofacturacion_codigopostal = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->empleadofacturacion_telefono = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->empleadofacturacion_email = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = EmpleadofacturacionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Empleadofacturacion object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aEmpleado !== null && $this->idempleado !== $this->aEmpleado->getIdempleado()) {
            $this->aEmpleado = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(EmpleadofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EmpleadofacturacionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEmpleado = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(EmpleadofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EmpleadofacturacionQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(EmpleadofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                EmpleadofacturacionPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aEmpleado !== null) {
                if ($this->aEmpleado->isModified() || $this->aEmpleado->isNew()) {
                    $affectedRows += $this->aEmpleado->save($con);
                }
                $this->setEmpleado($this->aEmpleado);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = EmpleadofacturacionPeer::IDEMPLEADOFACTURACION;
        if (null !== $this->idempleadofacturacion) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EmpleadofacturacionPeer::IDEMPLEADOFACTURACION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EmpleadofacturacionPeer::IDEMPLEADOFACTURACION)) {
            $modifiedColumns[':p' . $index++]  = '`idempleadofacturacion`';
        }
        if ($this->isColumnModified(EmpleadofacturacionPeer::IDEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleado`';
        }
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_RAZONSOCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`empleadofacturacion_razonsocial`';
        }
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_RFC)) {
            $modifiedColumns[':p' . $index++]  = '`empleadofacturacion_rfc`';
        }
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`empleadofacturacion_calle`';
        }
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_NOEXTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`empleadofacturacion_noexterior`';
        }
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_NOINTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`empleadofacturacion_nointerior`';
        }
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`empleadofacturacion_colonia`';
        }
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`empleadofacturacion_ciudad`';
        }
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`empleadofacturacion_estado`';
        }
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_PAIS)) {
            $modifiedColumns[':p' . $index++]  = '`empleadofacturacion_pais`';
        }
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_CODIGOPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`empleadofacturacion_codigopostal`';
        }
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`empleadofacturacion_telefono`';
        }
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`empleadofacturacion_email`';
        }

        $sql = sprintf(
            'INSERT INTO `empleadofacturacion` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idempleadofacturacion`':
                        $stmt->bindValue($identifier, $this->idempleadofacturacion, PDO::PARAM_INT);
                        break;
                    case '`idempleado`':
                        $stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_INT);
                        break;
                    case '`empleadofacturacion_razonsocial`':
                        $stmt->bindValue($identifier, $this->empleadofacturacion_razonsocial, PDO::PARAM_STR);
                        break;
                    case '`empleadofacturacion_rfc`':
                        $stmt->bindValue($identifier, $this->empleadofacturacion_rfc, PDO::PARAM_STR);
                        break;
                    case '`empleadofacturacion_calle`':
                        $stmt->bindValue($identifier, $this->empleadofacturacion_calle, PDO::PARAM_STR);
                        break;
                    case '`empleadofacturacion_noexterior`':
                        $stmt->bindValue($identifier, $this->empleadofacturacion_noexterior, PDO::PARAM_STR);
                        break;
                    case '`empleadofacturacion_nointerior`':
                        $stmt->bindValue($identifier, $this->empleadofacturacion_nointerior, PDO::PARAM_STR);
                        break;
                    case '`empleadofacturacion_colonia`':
                        $stmt->bindValue($identifier, $this->empleadofacturacion_colonia, PDO::PARAM_STR);
                        break;
                    case '`empleadofacturacion_ciudad`':
                        $stmt->bindValue($identifier, $this->empleadofacturacion_ciudad, PDO::PARAM_STR);
                        break;
                    case '`empleadofacturacion_estado`':
                        $stmt->bindValue($identifier, $this->empleadofacturacion_estado, PDO::PARAM_STR);
                        break;
                    case '`empleadofacturacion_pais`':
                        $stmt->bindValue($identifier, $this->empleadofacturacion_pais, PDO::PARAM_STR);
                        break;
                    case '`empleadofacturacion_codigopostal`':
                        $stmt->bindValue($identifier, $this->empleadofacturacion_codigopostal, PDO::PARAM_STR);
                        break;
                    case '`empleadofacturacion_telefono`':
                        $stmt->bindValue($identifier, $this->empleadofacturacion_telefono, PDO::PARAM_STR);
                        break;
                    case '`empleadofacturacion_email`':
                        $stmt->bindValue($identifier, $this->empleadofacturacion_email, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdempleadofacturacion($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aEmpleado !== null) {
                if (!$this->aEmpleado->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleado->getValidationFailures());
                }
            }


            if (($retval = EmpleadofacturacionPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = EmpleadofacturacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdempleadofacturacion();
                break;
            case 1:
                return $this->getIdempleado();
                break;
            case 2:
                return $this->getEmpleadofacturacionRazonsocial();
                break;
            case 3:
                return $this->getEmpleadofacturacionRfc();
                break;
            case 4:
                return $this->getEmpleadofacturacionCalle();
                break;
            case 5:
                return $this->getEmpleadofacturacionNoexterior();
                break;
            case 6:
                return $this->getEmpleadofacturacionNointerior();
                break;
            case 7:
                return $this->getEmpleadofacturacionColonia();
                break;
            case 8:
                return $this->getEmpleadofacturacionCiudad();
                break;
            case 9:
                return $this->getEmpleadofacturacionEstado();
                break;
            case 10:
                return $this->getEmpleadofacturacionPais();
                break;
            case 11:
                return $this->getEmpleadofacturacionCodigopostal();
                break;
            case 12:
                return $this->getEmpleadofacturacionTelefono();
                break;
            case 13:
                return $this->getEmpleadofacturacionEmail();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Empleadofacturacion'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Empleadofacturacion'][$this->getPrimaryKey()] = true;
        $keys = EmpleadofacturacionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdempleadofacturacion(),
            $keys[1] => $this->getIdempleado(),
            $keys[2] => $this->getEmpleadofacturacionRazonsocial(),
            $keys[3] => $this->getEmpleadofacturacionRfc(),
            $keys[4] => $this->getEmpleadofacturacionCalle(),
            $keys[5] => $this->getEmpleadofacturacionNoexterior(),
            $keys[6] => $this->getEmpleadofacturacionNointerior(),
            $keys[7] => $this->getEmpleadofacturacionColonia(),
            $keys[8] => $this->getEmpleadofacturacionCiudad(),
            $keys[9] => $this->getEmpleadofacturacionEstado(),
            $keys[10] => $this->getEmpleadofacturacionPais(),
            $keys[11] => $this->getEmpleadofacturacionCodigopostal(),
            $keys[12] => $this->getEmpleadofacturacionTelefono(),
            $keys[13] => $this->getEmpleadofacturacionEmail(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEmpleado) {
                $result['Empleado'] = $this->aEmpleado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = EmpleadofacturacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdempleadofacturacion($value);
                break;
            case 1:
                $this->setIdempleado($value);
                break;
            case 2:
                $this->setEmpleadofacturacionRazonsocial($value);
                break;
            case 3:
                $this->setEmpleadofacturacionRfc($value);
                break;
            case 4:
                $this->setEmpleadofacturacionCalle($value);
                break;
            case 5:
                $this->setEmpleadofacturacionNoexterior($value);
                break;
            case 6:
                $this->setEmpleadofacturacionNointerior($value);
                break;
            case 7:
                $this->setEmpleadofacturacionColonia($value);
                break;
            case 8:
                $this->setEmpleadofacturacionCiudad($value);
                break;
            case 9:
                $this->setEmpleadofacturacionEstado($value);
                break;
            case 10:
                $this->setEmpleadofacturacionPais($value);
                break;
            case 11:
                $this->setEmpleadofacturacionCodigopostal($value);
                break;
            case 12:
                $this->setEmpleadofacturacionTelefono($value);
                break;
            case 13:
                $this->setEmpleadofacturacionEmail($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = EmpleadofacturacionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdempleadofacturacion($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempleado($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEmpleadofacturacionRazonsocial($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEmpleadofacturacionRfc($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEmpleadofacturacionCalle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEmpleadofacturacionNoexterior($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEmpleadofacturacionNointerior($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEmpleadofacturacionColonia($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEmpleadofacturacionCiudad($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEmpleadofacturacionEstado($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEmpleadofacturacionPais($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEmpleadofacturacionCodigopostal($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setEmpleadofacturacionTelefono($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setEmpleadofacturacionEmail($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EmpleadofacturacionPeer::DATABASE_NAME);

        if ($this->isColumnModified(EmpleadofacturacionPeer::IDEMPLEADOFACTURACION)) $criteria->add(EmpleadofacturacionPeer::IDEMPLEADOFACTURACION, $this->idempleadofacturacion);
        if ($this->isColumnModified(EmpleadofacturacionPeer::IDEMPLEADO)) $criteria->add(EmpleadofacturacionPeer::IDEMPLEADO, $this->idempleado);
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_RAZONSOCIAL)) $criteria->add(EmpleadofacturacionPeer::EMPLEADOFACTURACION_RAZONSOCIAL, $this->empleadofacturacion_razonsocial);
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_RFC)) $criteria->add(EmpleadofacturacionPeer::EMPLEADOFACTURACION_RFC, $this->empleadofacturacion_rfc);
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_CALLE)) $criteria->add(EmpleadofacturacionPeer::EMPLEADOFACTURACION_CALLE, $this->empleadofacturacion_calle);
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_NOEXTERIOR)) $criteria->add(EmpleadofacturacionPeer::EMPLEADOFACTURACION_NOEXTERIOR, $this->empleadofacturacion_noexterior);
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_NOINTERIOR)) $criteria->add(EmpleadofacturacionPeer::EMPLEADOFACTURACION_NOINTERIOR, $this->empleadofacturacion_nointerior);
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_COLONIA)) $criteria->add(EmpleadofacturacionPeer::EMPLEADOFACTURACION_COLONIA, $this->empleadofacturacion_colonia);
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_CIUDAD)) $criteria->add(EmpleadofacturacionPeer::EMPLEADOFACTURACION_CIUDAD, $this->empleadofacturacion_ciudad);
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_ESTADO)) $criteria->add(EmpleadofacturacionPeer::EMPLEADOFACTURACION_ESTADO, $this->empleadofacturacion_estado);
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_PAIS)) $criteria->add(EmpleadofacturacionPeer::EMPLEADOFACTURACION_PAIS, $this->empleadofacturacion_pais);
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_CODIGOPOSTAL)) $criteria->add(EmpleadofacturacionPeer::EMPLEADOFACTURACION_CODIGOPOSTAL, $this->empleadofacturacion_codigopostal);
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_TELEFONO)) $criteria->add(EmpleadofacturacionPeer::EMPLEADOFACTURACION_TELEFONO, $this->empleadofacturacion_telefono);
        if ($this->isColumnModified(EmpleadofacturacionPeer::EMPLEADOFACTURACION_EMAIL)) $criteria->add(EmpleadofacturacionPeer::EMPLEADOFACTURACION_EMAIL, $this->empleadofacturacion_email);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(EmpleadofacturacionPeer::DATABASE_NAME);
        $criteria->add(EmpleadofacturacionPeer::IDEMPLEADOFACTURACION, $this->idempleadofacturacion);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdempleadofacturacion();
    }

    /**
     * Generic method to set the primary key (idempleadofacturacion column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdempleadofacturacion($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdempleadofacturacion();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Empleadofacturacion (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempleado($this->getIdempleado());
        $copyObj->setEmpleadofacturacionRazonsocial($this->getEmpleadofacturacionRazonsocial());
        $copyObj->setEmpleadofacturacionRfc($this->getEmpleadofacturacionRfc());
        $copyObj->setEmpleadofacturacionCalle($this->getEmpleadofacturacionCalle());
        $copyObj->setEmpleadofacturacionNoexterior($this->getEmpleadofacturacionNoexterior());
        $copyObj->setEmpleadofacturacionNointerior($this->getEmpleadofacturacionNointerior());
        $copyObj->setEmpleadofacturacionColonia($this->getEmpleadofacturacionColonia());
        $copyObj->setEmpleadofacturacionCiudad($this->getEmpleadofacturacionCiudad());
        $copyObj->setEmpleadofacturacionEstado($this->getEmpleadofacturacionEstado());
        $copyObj->setEmpleadofacturacionPais($this->getEmpleadofacturacionPais());
        $copyObj->setEmpleadofacturacionCodigopostal($this->getEmpleadofacturacionCodigopostal());
        $copyObj->setEmpleadofacturacionTelefono($this->getEmpleadofacturacionTelefono());
        $copyObj->setEmpleadofacturacionEmail($this->getEmpleadofacturacionEmail());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdempleadofacturacion(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Empleadofacturacion Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return EmpleadofacturacionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EmpleadofacturacionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Empleadofacturacion The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpleado(Empleado $v = null)
    {
        if ($v === null) {
            $this->setIdempleado(NULL);
        } else {
            $this->setIdempleado($v->getIdempleado());
        }

        $this->aEmpleado = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empleado object, it will not be re-added.
        if ($v !== null) {
            $v->addEmpleadofacturacion($this);
        }


        return $this;
    }


    /**
     * Get the associated Empleado object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Empleado The associated Empleado object.
     * @throws PropelException
     */
    public function getEmpleado(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpleado === null && ($this->idempleado !== null) && $doQuery) {
            $this->aEmpleado = EmpleadoQuery::create()->findPk($this->idempleado, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpleado->addEmpleadofacturacions($this);
             */
        }

        return $this->aEmpleado;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idempleadofacturacion = null;
        $this->idempleado = null;
        $this->empleadofacturacion_razonsocial = null;
        $this->empleadofacturacion_rfc = null;
        $this->empleadofacturacion_calle = null;
        $this->empleadofacturacion_noexterior = null;
        $this->empleadofacturacion_nointerior = null;
        $this->empleadofacturacion_colonia = null;
        $this->empleadofacturacion_ciudad = null;
        $this->empleadofacturacion_estado = null;
        $this->empleadofacturacion_pais = null;
        $this->empleadofacturacion_codigopostal = null;
        $this->empleadofacturacion_telefono = null;
        $this->empleadofacturacion_email = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->aEmpleado instanceof Persistent) {
              $this->aEmpleado->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aEmpleado = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EmpleadofacturacionPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
