<?php


/**
 * Base class that represents a row from the 'medicofacturacion' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseMedicofacturacion extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MedicofacturacionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MedicofacturacionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idmedicofacturacion field.
     * @var        int
     */
    protected $idmedicofacturacion;

    /**
     * The value for the idmedico field.
     * @var        int
     */
    protected $idmedico;

    /**
     * The value for the medicofacturacion_razonsocial field.
     * @var        string
     */
    protected $medicofacturacion_razonsocial;

    /**
     * The value for the medicofacturacion_rfc field.
     * @var        string
     */
    protected $medicofacturacion_rfc;

    /**
     * The value for the medicofacturacion_calle field.
     * @var        string
     */
    protected $medicofacturacion_calle;

    /**
     * The value for the medicofacturacion_noexterior field.
     * @var        string
     */
    protected $medicofacturacion_noexterior;

    /**
     * The value for the medicofacturacion_nointerior field.
     * @var        string
     */
    protected $medicofacturacion_nointerior;

    /**
     * The value for the medicofacturacion_colonia field.
     * @var        string
     */
    protected $medicofacturacion_colonia;

    /**
     * The value for the medicofacturacion_ciudad field.
     * @var        string
     */
    protected $medicofacturacion_ciudad;

    /**
     * The value for the medicofacturacion_estado field.
     * @var        string
     */
    protected $medicofacturacion_estado;

    /**
     * The value for the medicofacturacion_pais field.
     * @var        string
     */
    protected $medicofacturacion_pais;

    /**
     * The value for the medicofacturacion_codigopostal field.
     * @var        string
     */
    protected $medicofacturacion_codigopostal;

    /**
     * The value for the medicofacturacion_telefono field.
     * @var        string
     */
    protected $medicofacturacion_telefono;

    /**
     * The value for the medicofacturacion_email field.
     * @var        string
     */
    protected $medicofacturacion_email;

    /**
     * @var        Medico
     */
    protected $aMedico;

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
     * Get the [idmedicofacturacion] column value.
     *
     * @return int
     */
    public function getIdmedicofacturacion()
    {

        return $this->idmedicofacturacion;
    }

    /**
     * Get the [idmedico] column value.
     *
     * @return int
     */
    public function getIdmedico()
    {

        return $this->idmedico;
    }

    /**
     * Get the [medicofacturacion_razonsocial] column value.
     *
     * @return string
     */
    public function getMedicofacturacionRazonsocial()
    {

        return $this->medicofacturacion_razonsocial;
    }

    /**
     * Get the [medicofacturacion_rfc] column value.
     *
     * @return string
     */
    public function getMedicofacturacionRfc()
    {

        return $this->medicofacturacion_rfc;
    }

    /**
     * Get the [medicofacturacion_calle] column value.
     *
     * @return string
     */
    public function getMedicofacturacionCalle()
    {

        return $this->medicofacturacion_calle;
    }

    /**
     * Get the [medicofacturacion_noexterior] column value.
     *
     * @return string
     */
    public function getMedicofacturacionNoexterior()
    {

        return $this->medicofacturacion_noexterior;
    }

    /**
     * Get the [medicofacturacion_nointerior] column value.
     *
     * @return string
     */
    public function getMedicofacturacionNointerior()
    {

        return $this->medicofacturacion_nointerior;
    }

    /**
     * Get the [medicofacturacion_colonia] column value.
     *
     * @return string
     */
    public function getMedicofacturacionColonia()
    {

        return $this->medicofacturacion_colonia;
    }

    /**
     * Get the [medicofacturacion_ciudad] column value.
     *
     * @return string
     */
    public function getMedicofacturacionCiudad()
    {

        return $this->medicofacturacion_ciudad;
    }

    /**
     * Get the [medicofacturacion_estado] column value.
     *
     * @return string
     */
    public function getMedicofacturacionEstado()
    {

        return $this->medicofacturacion_estado;
    }

    /**
     * Get the [medicofacturacion_pais] column value.
     *
     * @return string
     */
    public function getMedicofacturacionPais()
    {

        return $this->medicofacturacion_pais;
    }

    /**
     * Get the [medicofacturacion_codigopostal] column value.
     *
     * @return string
     */
    public function getMedicofacturacionCodigopostal()
    {

        return $this->medicofacturacion_codigopostal;
    }

    /**
     * Get the [medicofacturacion_telefono] column value.
     *
     * @return string
     */
    public function getMedicofacturacionTelefono()
    {

        return $this->medicofacturacion_telefono;
    }

    /**
     * Get the [medicofacturacion_email] column value.
     *
     * @return string
     */
    public function getMedicofacturacionEmail()
    {

        return $this->medicofacturacion_email;
    }

    /**
     * Set the value of [idmedicofacturacion] column.
     *
     * @param  int $v new value
     * @return Medicofacturacion The current object (for fluent API support)
     */
    public function setIdmedicofacturacion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idmedicofacturacion !== $v) {
            $this->idmedicofacturacion = $v;
            $this->modifiedColumns[] = MedicofacturacionPeer::IDMEDICOFACTURACION;
        }


        return $this;
    } // setIdmedicofacturacion()

    /**
     * Set the value of [idmedico] column.
     *
     * @param  int $v new value
     * @return Medicofacturacion The current object (for fluent API support)
     */
    public function setIdmedico($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idmedico !== $v) {
            $this->idmedico = $v;
            $this->modifiedColumns[] = MedicofacturacionPeer::IDMEDICO;
        }

        if ($this->aMedico !== null && $this->aMedico->getIdmedico() !== $v) {
            $this->aMedico = null;
        }


        return $this;
    } // setIdmedico()

    /**
     * Set the value of [medicofacturacion_razonsocial] column.
     *
     * @param  string $v new value
     * @return Medicofacturacion The current object (for fluent API support)
     */
    public function setMedicofacturacionRazonsocial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medicofacturacion_razonsocial !== $v) {
            $this->medicofacturacion_razonsocial = $v;
            $this->modifiedColumns[] = MedicofacturacionPeer::MEDICOFACTURACION_RAZONSOCIAL;
        }


        return $this;
    } // setMedicofacturacionRazonsocial()

    /**
     * Set the value of [medicofacturacion_rfc] column.
     *
     * @param  string $v new value
     * @return Medicofacturacion The current object (for fluent API support)
     */
    public function setMedicofacturacionRfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medicofacturacion_rfc !== $v) {
            $this->medicofacturacion_rfc = $v;
            $this->modifiedColumns[] = MedicofacturacionPeer::MEDICOFACTURACION_RFC;
        }


        return $this;
    } // setMedicofacturacionRfc()

    /**
     * Set the value of [medicofacturacion_calle] column.
     *
     * @param  string $v new value
     * @return Medicofacturacion The current object (for fluent API support)
     */
    public function setMedicofacturacionCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medicofacturacion_calle !== $v) {
            $this->medicofacturacion_calle = $v;
            $this->modifiedColumns[] = MedicofacturacionPeer::MEDICOFACTURACION_CALLE;
        }


        return $this;
    } // setMedicofacturacionCalle()

    /**
     * Set the value of [medicofacturacion_noexterior] column.
     *
     * @param  string $v new value
     * @return Medicofacturacion The current object (for fluent API support)
     */
    public function setMedicofacturacionNoexterior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medicofacturacion_noexterior !== $v) {
            $this->medicofacturacion_noexterior = $v;
            $this->modifiedColumns[] = MedicofacturacionPeer::MEDICOFACTURACION_NOEXTERIOR;
        }


        return $this;
    } // setMedicofacturacionNoexterior()

    /**
     * Set the value of [medicofacturacion_nointerior] column.
     *
     * @param  string $v new value
     * @return Medicofacturacion The current object (for fluent API support)
     */
    public function setMedicofacturacionNointerior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medicofacturacion_nointerior !== $v) {
            $this->medicofacturacion_nointerior = $v;
            $this->modifiedColumns[] = MedicofacturacionPeer::MEDICOFACTURACION_NOINTERIOR;
        }


        return $this;
    } // setMedicofacturacionNointerior()

    /**
     * Set the value of [medicofacturacion_colonia] column.
     *
     * @param  string $v new value
     * @return Medicofacturacion The current object (for fluent API support)
     */
    public function setMedicofacturacionColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medicofacturacion_colonia !== $v) {
            $this->medicofacturacion_colonia = $v;
            $this->modifiedColumns[] = MedicofacturacionPeer::MEDICOFACTURACION_COLONIA;
        }


        return $this;
    } // setMedicofacturacionColonia()

    /**
     * Set the value of [medicofacturacion_ciudad] column.
     *
     * @param  string $v new value
     * @return Medicofacturacion The current object (for fluent API support)
     */
    public function setMedicofacturacionCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medicofacturacion_ciudad !== $v) {
            $this->medicofacturacion_ciudad = $v;
            $this->modifiedColumns[] = MedicofacturacionPeer::MEDICOFACTURACION_CIUDAD;
        }


        return $this;
    } // setMedicofacturacionCiudad()

    /**
     * Set the value of [medicofacturacion_estado] column.
     *
     * @param  string $v new value
     * @return Medicofacturacion The current object (for fluent API support)
     */
    public function setMedicofacturacionEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medicofacturacion_estado !== $v) {
            $this->medicofacturacion_estado = $v;
            $this->modifiedColumns[] = MedicofacturacionPeer::MEDICOFACTURACION_ESTADO;
        }


        return $this;
    } // setMedicofacturacionEstado()

    /**
     * Set the value of [medicofacturacion_pais] column.
     *
     * @param  string $v new value
     * @return Medicofacturacion The current object (for fluent API support)
     */
    public function setMedicofacturacionPais($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medicofacturacion_pais !== $v) {
            $this->medicofacturacion_pais = $v;
            $this->modifiedColumns[] = MedicofacturacionPeer::MEDICOFACTURACION_PAIS;
        }


        return $this;
    } // setMedicofacturacionPais()

    /**
     * Set the value of [medicofacturacion_codigopostal] column.
     *
     * @param  string $v new value
     * @return Medicofacturacion The current object (for fluent API support)
     */
    public function setMedicofacturacionCodigopostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medicofacturacion_codigopostal !== $v) {
            $this->medicofacturacion_codigopostal = $v;
            $this->modifiedColumns[] = MedicofacturacionPeer::MEDICOFACTURACION_CODIGOPOSTAL;
        }


        return $this;
    } // setMedicofacturacionCodigopostal()

    /**
     * Set the value of [medicofacturacion_telefono] column.
     *
     * @param  string $v new value
     * @return Medicofacturacion The current object (for fluent API support)
     */
    public function setMedicofacturacionTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medicofacturacion_telefono !== $v) {
            $this->medicofacturacion_telefono = $v;
            $this->modifiedColumns[] = MedicofacturacionPeer::MEDICOFACTURACION_TELEFONO;
        }


        return $this;
    } // setMedicofacturacionTelefono()

    /**
     * Set the value of [medicofacturacion_email] column.
     *
     * @param  string $v new value
     * @return Medicofacturacion The current object (for fluent API support)
     */
    public function setMedicofacturacionEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medicofacturacion_email !== $v) {
            $this->medicofacturacion_email = $v;
            $this->modifiedColumns[] = MedicofacturacionPeer::MEDICOFACTURACION_EMAIL;
        }


        return $this;
    } // setMedicofacturacionEmail()

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

            $this->idmedicofacturacion = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idmedico = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->medicofacturacion_razonsocial = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->medicofacturacion_rfc = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->medicofacturacion_calle = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->medicofacturacion_noexterior = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->medicofacturacion_nointerior = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->medicofacturacion_colonia = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->medicofacturacion_ciudad = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->medicofacturacion_estado = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->medicofacturacion_pais = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->medicofacturacion_codigopostal = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->medicofacturacion_telefono = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->medicofacturacion_email = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = MedicofacturacionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Medicofacturacion object", $e);
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

        if ($this->aMedico !== null && $this->idmedico !== $this->aMedico->getIdmedico()) {
            $this->aMedico = null;
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
            $con = Propel::getConnection(MedicofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MedicofacturacionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aMedico = null;
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
            $con = Propel::getConnection(MedicofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MedicofacturacionQuery::create()
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
            $con = Propel::getConnection(MedicofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MedicofacturacionPeer::addInstanceToPool($this);
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

            if ($this->aMedico !== null) {
                if ($this->aMedico->isModified() || $this->aMedico->isNew()) {
                    $affectedRows += $this->aMedico->save($con);
                }
                $this->setMedico($this->aMedico);
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

        $this->modifiedColumns[] = MedicofacturacionPeer::IDMEDICOFACTURACION;
        if (null !== $this->idmedicofacturacion) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . MedicofacturacionPeer::IDMEDICOFACTURACION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(MedicofacturacionPeer::IDMEDICOFACTURACION)) {
            $modifiedColumns[':p' . $index++]  = '`idmedicofacturacion`';
        }
        if ($this->isColumnModified(MedicofacturacionPeer::IDMEDICO)) {
            $modifiedColumns[':p' . $index++]  = '`idmedico`';
        }
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_RAZONSOCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`medicofacturacion_razonsocial`';
        }
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_RFC)) {
            $modifiedColumns[':p' . $index++]  = '`medicofacturacion_rfc`';
        }
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`medicofacturacion_calle`';
        }
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_NOEXTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`medicofacturacion_noexterior`';
        }
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_NOINTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`medicofacturacion_nointerior`';
        }
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`medicofacturacion_colonia`';
        }
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`medicofacturacion_ciudad`';
        }
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`medicofacturacion_estado`';
        }
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_PAIS)) {
            $modifiedColumns[':p' . $index++]  = '`medicofacturacion_pais`';
        }
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_CODIGOPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`medicofacturacion_codigopostal`';
        }
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`medicofacturacion_telefono`';
        }
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`medicofacturacion_email`';
        }

        $sql = sprintf(
            'INSERT INTO `medicofacturacion` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idmedicofacturacion`':
                        $stmt->bindValue($identifier, $this->idmedicofacturacion, PDO::PARAM_INT);
                        break;
                    case '`idmedico`':
                        $stmt->bindValue($identifier, $this->idmedico, PDO::PARAM_INT);
                        break;
                    case '`medicofacturacion_razonsocial`':
                        $stmt->bindValue($identifier, $this->medicofacturacion_razonsocial, PDO::PARAM_STR);
                        break;
                    case '`medicofacturacion_rfc`':
                        $stmt->bindValue($identifier, $this->medicofacturacion_rfc, PDO::PARAM_STR);
                        break;
                    case '`medicofacturacion_calle`':
                        $stmt->bindValue($identifier, $this->medicofacturacion_calle, PDO::PARAM_STR);
                        break;
                    case '`medicofacturacion_noexterior`':
                        $stmt->bindValue($identifier, $this->medicofacturacion_noexterior, PDO::PARAM_STR);
                        break;
                    case '`medicofacturacion_nointerior`':
                        $stmt->bindValue($identifier, $this->medicofacturacion_nointerior, PDO::PARAM_STR);
                        break;
                    case '`medicofacturacion_colonia`':
                        $stmt->bindValue($identifier, $this->medicofacturacion_colonia, PDO::PARAM_STR);
                        break;
                    case '`medicofacturacion_ciudad`':
                        $stmt->bindValue($identifier, $this->medicofacturacion_ciudad, PDO::PARAM_STR);
                        break;
                    case '`medicofacturacion_estado`':
                        $stmt->bindValue($identifier, $this->medicofacturacion_estado, PDO::PARAM_STR);
                        break;
                    case '`medicofacturacion_pais`':
                        $stmt->bindValue($identifier, $this->medicofacturacion_pais, PDO::PARAM_STR);
                        break;
                    case '`medicofacturacion_codigopostal`':
                        $stmt->bindValue($identifier, $this->medicofacturacion_codigopostal, PDO::PARAM_STR);
                        break;
                    case '`medicofacturacion_telefono`':
                        $stmt->bindValue($identifier, $this->medicofacturacion_telefono, PDO::PARAM_STR);
                        break;
                    case '`medicofacturacion_email`':
                        $stmt->bindValue($identifier, $this->medicofacturacion_email, PDO::PARAM_STR);
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
        $this->setIdmedicofacturacion($pk);

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

            if ($this->aMedico !== null) {
                if (!$this->aMedico->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aMedico->getValidationFailures());
                }
            }


            if (($retval = MedicofacturacionPeer::doValidate($this, $columns)) !== true) {
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
        $pos = MedicofacturacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdmedicofacturacion();
                break;
            case 1:
                return $this->getIdmedico();
                break;
            case 2:
                return $this->getMedicofacturacionRazonsocial();
                break;
            case 3:
                return $this->getMedicofacturacionRfc();
                break;
            case 4:
                return $this->getMedicofacturacionCalle();
                break;
            case 5:
                return $this->getMedicofacturacionNoexterior();
                break;
            case 6:
                return $this->getMedicofacturacionNointerior();
                break;
            case 7:
                return $this->getMedicofacturacionColonia();
                break;
            case 8:
                return $this->getMedicofacturacionCiudad();
                break;
            case 9:
                return $this->getMedicofacturacionEstado();
                break;
            case 10:
                return $this->getMedicofacturacionPais();
                break;
            case 11:
                return $this->getMedicofacturacionCodigopostal();
                break;
            case 12:
                return $this->getMedicofacturacionTelefono();
                break;
            case 13:
                return $this->getMedicofacturacionEmail();
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
        if (isset($alreadyDumpedObjects['Medicofacturacion'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Medicofacturacion'][$this->getPrimaryKey()] = true;
        $keys = MedicofacturacionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdmedicofacturacion(),
            $keys[1] => $this->getIdmedico(),
            $keys[2] => $this->getMedicofacturacionRazonsocial(),
            $keys[3] => $this->getMedicofacturacionRfc(),
            $keys[4] => $this->getMedicofacturacionCalle(),
            $keys[5] => $this->getMedicofacturacionNoexterior(),
            $keys[6] => $this->getMedicofacturacionNointerior(),
            $keys[7] => $this->getMedicofacturacionColonia(),
            $keys[8] => $this->getMedicofacturacionCiudad(),
            $keys[9] => $this->getMedicofacturacionEstado(),
            $keys[10] => $this->getMedicofacturacionPais(),
            $keys[11] => $this->getMedicofacturacionCodigopostal(),
            $keys[12] => $this->getMedicofacturacionTelefono(),
            $keys[13] => $this->getMedicofacturacionEmail(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aMedico) {
                $result['Medico'] = $this->aMedico->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = MedicofacturacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdmedicofacturacion($value);
                break;
            case 1:
                $this->setIdmedico($value);
                break;
            case 2:
                $this->setMedicofacturacionRazonsocial($value);
                break;
            case 3:
                $this->setMedicofacturacionRfc($value);
                break;
            case 4:
                $this->setMedicofacturacionCalle($value);
                break;
            case 5:
                $this->setMedicofacturacionNoexterior($value);
                break;
            case 6:
                $this->setMedicofacturacionNointerior($value);
                break;
            case 7:
                $this->setMedicofacturacionColonia($value);
                break;
            case 8:
                $this->setMedicofacturacionCiudad($value);
                break;
            case 9:
                $this->setMedicofacturacionEstado($value);
                break;
            case 10:
                $this->setMedicofacturacionPais($value);
                break;
            case 11:
                $this->setMedicofacturacionCodigopostal($value);
                break;
            case 12:
                $this->setMedicofacturacionTelefono($value);
                break;
            case 13:
                $this->setMedicofacturacionEmail($value);
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
        $keys = MedicofacturacionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdmedicofacturacion($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdmedico($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setMedicofacturacionRazonsocial($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMedicofacturacionRfc($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMedicofacturacionCalle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMedicofacturacionNoexterior($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMedicofacturacionNointerior($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMedicofacturacionColonia($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMedicofacturacionCiudad($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMedicofacturacionEstado($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setMedicofacturacionPais($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMedicofacturacionCodigopostal($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setMedicofacturacionTelefono($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setMedicofacturacionEmail($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MedicofacturacionPeer::DATABASE_NAME);

        if ($this->isColumnModified(MedicofacturacionPeer::IDMEDICOFACTURACION)) $criteria->add(MedicofacturacionPeer::IDMEDICOFACTURACION, $this->idmedicofacturacion);
        if ($this->isColumnModified(MedicofacturacionPeer::IDMEDICO)) $criteria->add(MedicofacturacionPeer::IDMEDICO, $this->idmedico);
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_RAZONSOCIAL)) $criteria->add(MedicofacturacionPeer::MEDICOFACTURACION_RAZONSOCIAL, $this->medicofacturacion_razonsocial);
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_RFC)) $criteria->add(MedicofacturacionPeer::MEDICOFACTURACION_RFC, $this->medicofacturacion_rfc);
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_CALLE)) $criteria->add(MedicofacturacionPeer::MEDICOFACTURACION_CALLE, $this->medicofacturacion_calle);
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_NOEXTERIOR)) $criteria->add(MedicofacturacionPeer::MEDICOFACTURACION_NOEXTERIOR, $this->medicofacturacion_noexterior);
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_NOINTERIOR)) $criteria->add(MedicofacturacionPeer::MEDICOFACTURACION_NOINTERIOR, $this->medicofacturacion_nointerior);
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_COLONIA)) $criteria->add(MedicofacturacionPeer::MEDICOFACTURACION_COLONIA, $this->medicofacturacion_colonia);
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_CIUDAD)) $criteria->add(MedicofacturacionPeer::MEDICOFACTURACION_CIUDAD, $this->medicofacturacion_ciudad);
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_ESTADO)) $criteria->add(MedicofacturacionPeer::MEDICOFACTURACION_ESTADO, $this->medicofacturacion_estado);
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_PAIS)) $criteria->add(MedicofacturacionPeer::MEDICOFACTURACION_PAIS, $this->medicofacturacion_pais);
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_CODIGOPOSTAL)) $criteria->add(MedicofacturacionPeer::MEDICOFACTURACION_CODIGOPOSTAL, $this->medicofacturacion_codigopostal);
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_TELEFONO)) $criteria->add(MedicofacturacionPeer::MEDICOFACTURACION_TELEFONO, $this->medicofacturacion_telefono);
        if ($this->isColumnModified(MedicofacturacionPeer::MEDICOFACTURACION_EMAIL)) $criteria->add(MedicofacturacionPeer::MEDICOFACTURACION_EMAIL, $this->medicofacturacion_email);

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
        $criteria = new Criteria(MedicofacturacionPeer::DATABASE_NAME);
        $criteria->add(MedicofacturacionPeer::IDMEDICOFACTURACION, $this->idmedicofacturacion);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdmedicofacturacion();
    }

    /**
     * Generic method to set the primary key (idmedicofacturacion column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdmedicofacturacion($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdmedicofacturacion();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Medicofacturacion (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdmedico($this->getIdmedico());
        $copyObj->setMedicofacturacionRazonsocial($this->getMedicofacturacionRazonsocial());
        $copyObj->setMedicofacturacionRfc($this->getMedicofacturacionRfc());
        $copyObj->setMedicofacturacionCalle($this->getMedicofacturacionCalle());
        $copyObj->setMedicofacturacionNoexterior($this->getMedicofacturacionNoexterior());
        $copyObj->setMedicofacturacionNointerior($this->getMedicofacturacionNointerior());
        $copyObj->setMedicofacturacionColonia($this->getMedicofacturacionColonia());
        $copyObj->setMedicofacturacionCiudad($this->getMedicofacturacionCiudad());
        $copyObj->setMedicofacturacionEstado($this->getMedicofacturacionEstado());
        $copyObj->setMedicofacturacionPais($this->getMedicofacturacionPais());
        $copyObj->setMedicofacturacionCodigopostal($this->getMedicofacturacionCodigopostal());
        $copyObj->setMedicofacturacionTelefono($this->getMedicofacturacionTelefono());
        $copyObj->setMedicofacturacionEmail($this->getMedicofacturacionEmail());

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
            $copyObj->setIdmedicofacturacion(NULL); // this is a auto-increment column, so set to default value
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
     * @return Medicofacturacion Clone of current object.
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
     * @return MedicofacturacionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MedicofacturacionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Medico object.
     *
     * @param                  Medico $v
     * @return Medicofacturacion The current object (for fluent API support)
     * @throws PropelException
     */
    public function setMedico(Medico $v = null)
    {
        if ($v === null) {
            $this->setIdmedico(NULL);
        } else {
            $this->setIdmedico($v->getIdmedico());
        }

        $this->aMedico = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Medico object, it will not be re-added.
        if ($v !== null) {
            $v->addMedicofacturacion($this);
        }


        return $this;
    }


    /**
     * Get the associated Medico object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Medico The associated Medico object.
     * @throws PropelException
     */
    public function getMedico(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aMedico === null && ($this->idmedico !== null) && $doQuery) {
            $this->aMedico = MedicoQuery::create()->findPk($this->idmedico, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aMedico->addMedicofacturacions($this);
             */
        }

        return $this->aMedico;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idmedicofacturacion = null;
        $this->idmedico = null;
        $this->medicofacturacion_razonsocial = null;
        $this->medicofacturacion_rfc = null;
        $this->medicofacturacion_calle = null;
        $this->medicofacturacion_noexterior = null;
        $this->medicofacturacion_nointerior = null;
        $this->medicofacturacion_colonia = null;
        $this->medicofacturacion_ciudad = null;
        $this->medicofacturacion_estado = null;
        $this->medicofacturacion_pais = null;
        $this->medicofacturacion_codigopostal = null;
        $this->medicofacturacion_telefono = null;
        $this->medicofacturacion_email = null;
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
            if ($this->aMedico instanceof Persistent) {
              $this->aMedico->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aMedico = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(MedicofacturacionPeer::DEFAULT_STRING_FORMAT);
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
