<?php


/**
 * Base class that represents a row from the 'pacientefacturacion' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BasePacientefacturacion extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PacientefacturacionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PacientefacturacionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idpacientefacturacion field.
     * @var        int
     */
    protected $idpacientefacturacion;

    /**
     * The value for the idpaciente field.
     * @var        int
     */
    protected $idpaciente;

    /**
     * The value for the pacientefacturacion_razonsocial field.
     * @var        string
     */
    protected $pacientefacturacion_razonsocial;

    /**
     * The value for the pacientefacturacion_rfc field.
     * @var        string
     */
    protected $pacientefacturacion_rfc;

    /**
     * The value for the pacientefacturacion_calle field.
     * @var        string
     */
    protected $pacientefacturacion_calle;

    /**
     * The value for the pacientefacturacion_noexterior field.
     * @var        string
     */
    protected $pacientefacturacion_noexterior;

    /**
     * The value for the pacientefacturacion_nointerior field.
     * @var        string
     */
    protected $pacientefacturacion_nointerior;

    /**
     * The value for the pacientefacturacion_colonia field.
     * @var        string
     */
    protected $pacientefacturacion_colonia;

    /**
     * The value for the pacientefacturacion_ciudad field.
     * @var        string
     */
    protected $pacientefacturacion_ciudad;

    /**
     * The value for the pacientefacturacion_estado field.
     * @var        string
     */
    protected $pacientefacturacion_estado;

    /**
     * The value for the pacientefacturacion_pais field.
     * @var        string
     */
    protected $pacientefacturacion_pais;

    /**
     * The value for the pacientefacturacion_codigopostal field.
     * @var        string
     */
    protected $pacientefacturacion_codigopostal;

    /**
     * The value for the pacientefacturacion_telefono field.
     * @var        string
     */
    protected $pacientefacturacion_telefono;

    /**
     * The value for the pacientefacturacion_email field.
     * @var        string
     */
    protected $pacientefacturacion_email;

    /**
     * @var        Paciente
     */
    protected $aPaciente;

    /**
     * @var        PropelObjectCollection|Factura[] Collection to store aggregation of Factura objects.
     */
    protected $collFacturas;
    protected $collFacturasPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $facturasScheduledForDeletion = null;

    /**
     * Get the [idpacientefacturacion] column value.
     *
     * @return int
     */
    public function getIdpacientefacturacion()
    {

        return $this->idpacientefacturacion;
    }

    /**
     * Get the [idpaciente] column value.
     *
     * @return int
     */
    public function getIdpaciente()
    {

        return $this->idpaciente;
    }

    /**
     * Get the [pacientefacturacion_razonsocial] column value.
     *
     * @return string
     */
    public function getPacientefacturacionRazonsocial()
    {

        return $this->pacientefacturacion_razonsocial;
    }

    /**
     * Get the [pacientefacturacion_rfc] column value.
     *
     * @return string
     */
    public function getPacientefacturacionRfc()
    {

        return $this->pacientefacturacion_rfc;
    }

    /**
     * Get the [pacientefacturacion_calle] column value.
     *
     * @return string
     */
    public function getPacientefacturacionCalle()
    {

        return $this->pacientefacturacion_calle;
    }

    /**
     * Get the [pacientefacturacion_noexterior] column value.
     *
     * @return string
     */
    public function getPacientefacturacionNoexterior()
    {

        return $this->pacientefacturacion_noexterior;
    }

    /**
     * Get the [pacientefacturacion_nointerior] column value.
     *
     * @return string
     */
    public function getPacientefacturacionNointerior()
    {

        return $this->pacientefacturacion_nointerior;
    }

    /**
     * Get the [pacientefacturacion_colonia] column value.
     *
     * @return string
     */
    public function getPacientefacturacionColonia()
    {

        return $this->pacientefacturacion_colonia;
    }

    /**
     * Get the [pacientefacturacion_ciudad] column value.
     *
     * @return string
     */
    public function getPacientefacturacionCiudad()
    {

        return $this->pacientefacturacion_ciudad;
    }

    /**
     * Get the [pacientefacturacion_estado] column value.
     *
     * @return string
     */
    public function getPacientefacturacionEstado()
    {

        return $this->pacientefacturacion_estado;
    }

    /**
     * Get the [pacientefacturacion_pais] column value.
     *
     * @return string
     */
    public function getPacientefacturacionPais()
    {

        return $this->pacientefacturacion_pais;
    }

    /**
     * Get the [pacientefacturacion_codigopostal] column value.
     *
     * @return string
     */
    public function getPacientefacturacionCodigopostal()
    {

        return $this->pacientefacturacion_codigopostal;
    }

    /**
     * Get the [pacientefacturacion_telefono] column value.
     *
     * @return string
     */
    public function getPacientefacturacionTelefono()
    {

        return $this->pacientefacturacion_telefono;
    }

    /**
     * Get the [pacientefacturacion_email] column value.
     *
     * @return string
     */
    public function getPacientefacturacionEmail()
    {

        return $this->pacientefacturacion_email;
    }

    /**
     * Set the value of [idpacientefacturacion] column.
     *
     * @param  int $v new value
     * @return Pacientefacturacion The current object (for fluent API support)
     */
    public function setIdpacientefacturacion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpacientefacturacion !== $v) {
            $this->idpacientefacturacion = $v;
            $this->modifiedColumns[] = PacientefacturacionPeer::IDPACIENTEFACTURACION;
        }


        return $this;
    } // setIdpacientefacturacion()

    /**
     * Set the value of [idpaciente] column.
     *
     * @param  int $v new value
     * @return Pacientefacturacion The current object (for fluent API support)
     */
    public function setIdpaciente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpaciente !== $v) {
            $this->idpaciente = $v;
            $this->modifiedColumns[] = PacientefacturacionPeer::IDPACIENTE;
        }

        if ($this->aPaciente !== null && $this->aPaciente->getIdpaciente() !== $v) {
            $this->aPaciente = null;
        }


        return $this;
    } // setIdpaciente()

    /**
     * Set the value of [pacientefacturacion_razonsocial] column.
     *
     * @param  string $v new value
     * @return Pacientefacturacion The current object (for fluent API support)
     */
    public function setPacientefacturacionRazonsocial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pacientefacturacion_razonsocial !== $v) {
            $this->pacientefacturacion_razonsocial = $v;
            $this->modifiedColumns[] = PacientefacturacionPeer::PACIENTEFACTURACION_RAZONSOCIAL;
        }


        return $this;
    } // setPacientefacturacionRazonsocial()

    /**
     * Set the value of [pacientefacturacion_rfc] column.
     *
     * @param  string $v new value
     * @return Pacientefacturacion The current object (for fluent API support)
     */
    public function setPacientefacturacionRfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pacientefacturacion_rfc !== $v) {
            $this->pacientefacturacion_rfc = $v;
            $this->modifiedColumns[] = PacientefacturacionPeer::PACIENTEFACTURACION_RFC;
        }


        return $this;
    } // setPacientefacturacionRfc()

    /**
     * Set the value of [pacientefacturacion_calle] column.
     *
     * @param  string $v new value
     * @return Pacientefacturacion The current object (for fluent API support)
     */
    public function setPacientefacturacionCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pacientefacturacion_calle !== $v) {
            $this->pacientefacturacion_calle = $v;
            $this->modifiedColumns[] = PacientefacturacionPeer::PACIENTEFACTURACION_CALLE;
        }


        return $this;
    } // setPacientefacturacionCalle()

    /**
     * Set the value of [pacientefacturacion_noexterior] column.
     *
     * @param  string $v new value
     * @return Pacientefacturacion The current object (for fluent API support)
     */
    public function setPacientefacturacionNoexterior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pacientefacturacion_noexterior !== $v) {
            $this->pacientefacturacion_noexterior = $v;
            $this->modifiedColumns[] = PacientefacturacionPeer::PACIENTEFACTURACION_NOEXTERIOR;
        }


        return $this;
    } // setPacientefacturacionNoexterior()

    /**
     * Set the value of [pacientefacturacion_nointerior] column.
     *
     * @param  string $v new value
     * @return Pacientefacturacion The current object (for fluent API support)
     */
    public function setPacientefacturacionNointerior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pacientefacturacion_nointerior !== $v) {
            $this->pacientefacturacion_nointerior = $v;
            $this->modifiedColumns[] = PacientefacturacionPeer::PACIENTEFACTURACION_NOINTERIOR;
        }


        return $this;
    } // setPacientefacturacionNointerior()

    /**
     * Set the value of [pacientefacturacion_colonia] column.
     *
     * @param  string $v new value
     * @return Pacientefacturacion The current object (for fluent API support)
     */
    public function setPacientefacturacionColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pacientefacturacion_colonia !== $v) {
            $this->pacientefacturacion_colonia = $v;
            $this->modifiedColumns[] = PacientefacturacionPeer::PACIENTEFACTURACION_COLONIA;
        }


        return $this;
    } // setPacientefacturacionColonia()

    /**
     * Set the value of [pacientefacturacion_ciudad] column.
     *
     * @param  string $v new value
     * @return Pacientefacturacion The current object (for fluent API support)
     */
    public function setPacientefacturacionCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pacientefacturacion_ciudad !== $v) {
            $this->pacientefacturacion_ciudad = $v;
            $this->modifiedColumns[] = PacientefacturacionPeer::PACIENTEFACTURACION_CIUDAD;
        }


        return $this;
    } // setPacientefacturacionCiudad()

    /**
     * Set the value of [pacientefacturacion_estado] column.
     *
     * @param  string $v new value
     * @return Pacientefacturacion The current object (for fluent API support)
     */
    public function setPacientefacturacionEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pacientefacturacion_estado !== $v) {
            $this->pacientefacturacion_estado = $v;
            $this->modifiedColumns[] = PacientefacturacionPeer::PACIENTEFACTURACION_ESTADO;
        }


        return $this;
    } // setPacientefacturacionEstado()

    /**
     * Set the value of [pacientefacturacion_pais] column.
     *
     * @param  string $v new value
     * @return Pacientefacturacion The current object (for fluent API support)
     */
    public function setPacientefacturacionPais($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pacientefacturacion_pais !== $v) {
            $this->pacientefacturacion_pais = $v;
            $this->modifiedColumns[] = PacientefacturacionPeer::PACIENTEFACTURACION_PAIS;
        }


        return $this;
    } // setPacientefacturacionPais()

    /**
     * Set the value of [pacientefacturacion_codigopostal] column.
     *
     * @param  string $v new value
     * @return Pacientefacturacion The current object (for fluent API support)
     */
    public function setPacientefacturacionCodigopostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pacientefacturacion_codigopostal !== $v) {
            $this->pacientefacturacion_codigopostal = $v;
            $this->modifiedColumns[] = PacientefacturacionPeer::PACIENTEFACTURACION_CODIGOPOSTAL;
        }


        return $this;
    } // setPacientefacturacionCodigopostal()

    /**
     * Set the value of [pacientefacturacion_telefono] column.
     *
     * @param  string $v new value
     * @return Pacientefacturacion The current object (for fluent API support)
     */
    public function setPacientefacturacionTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pacientefacturacion_telefono !== $v) {
            $this->pacientefacturacion_telefono = $v;
            $this->modifiedColumns[] = PacientefacturacionPeer::PACIENTEFACTURACION_TELEFONO;
        }


        return $this;
    } // setPacientefacturacionTelefono()

    /**
     * Set the value of [pacientefacturacion_email] column.
     *
     * @param  string $v new value
     * @return Pacientefacturacion The current object (for fluent API support)
     */
    public function setPacientefacturacionEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pacientefacturacion_email !== $v) {
            $this->pacientefacturacion_email = $v;
            $this->modifiedColumns[] = PacientefacturacionPeer::PACIENTEFACTURACION_EMAIL;
        }


        return $this;
    } // setPacientefacturacionEmail()

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

            $this->idpacientefacturacion = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idpaciente = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->pacientefacturacion_razonsocial = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->pacientefacturacion_rfc = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->pacientefacturacion_calle = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->pacientefacturacion_noexterior = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->pacientefacturacion_nointerior = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->pacientefacturacion_colonia = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->pacientefacturacion_ciudad = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->pacientefacturacion_estado = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->pacientefacturacion_pais = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->pacientefacturacion_codigopostal = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->pacientefacturacion_telefono = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->pacientefacturacion_email = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = PacientefacturacionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Pacientefacturacion object", $e);
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

        if ($this->aPaciente !== null && $this->idpaciente !== $this->aPaciente->getIdpaciente()) {
            $this->aPaciente = null;
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
            $con = Propel::getConnection(PacientefacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PacientefacturacionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aPaciente = null;
            $this->collFacturas = null;

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
            $con = Propel::getConnection(PacientefacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PacientefacturacionQuery::create()
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
            $con = Propel::getConnection(PacientefacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PacientefacturacionPeer::addInstanceToPool($this);
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

            if ($this->aPaciente !== null) {
                if ($this->aPaciente->isModified() || $this->aPaciente->isNew()) {
                    $affectedRows += $this->aPaciente->save($con);
                }
                $this->setPaciente($this->aPaciente);
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

            if ($this->facturasScheduledForDeletion !== null) {
                if (!$this->facturasScheduledForDeletion->isEmpty()) {
                    FacturaQuery::create()
                        ->filterByPrimaryKeys($this->facturasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->facturasScheduledForDeletion = null;
                }
            }

            if ($this->collFacturas !== null) {
                foreach ($this->collFacturas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = PacientefacturacionPeer::IDPACIENTEFACTURACION;
        if (null !== $this->idpacientefacturacion) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PacientefacturacionPeer::IDPACIENTEFACTURACION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PacientefacturacionPeer::IDPACIENTEFACTURACION)) {
            $modifiedColumns[':p' . $index++]  = '`idpacientefacturacion`';
        }
        if ($this->isColumnModified(PacientefacturacionPeer::IDPACIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idpaciente`';
        }
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_RAZONSOCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`pacientefacturacion_razonsocial`';
        }
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_RFC)) {
            $modifiedColumns[':p' . $index++]  = '`pacientefacturacion_rfc`';
        }
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`pacientefacturacion_calle`';
        }
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_NOEXTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`pacientefacturacion_noexterior`';
        }
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_NOINTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`pacientefacturacion_nointerior`';
        }
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`pacientefacturacion_colonia`';
        }
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`pacientefacturacion_ciudad`';
        }
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`pacientefacturacion_estado`';
        }
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_PAIS)) {
            $modifiedColumns[':p' . $index++]  = '`pacientefacturacion_pais`';
        }
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_CODIGOPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`pacientefacturacion_codigopostal`';
        }
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`pacientefacturacion_telefono`';
        }
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`pacientefacturacion_email`';
        }

        $sql = sprintf(
            'INSERT INTO `pacientefacturacion` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idpacientefacturacion`':
                        $stmt->bindValue($identifier, $this->idpacientefacturacion, PDO::PARAM_INT);
                        break;
                    case '`idpaciente`':
                        $stmt->bindValue($identifier, $this->idpaciente, PDO::PARAM_INT);
                        break;
                    case '`pacientefacturacion_razonsocial`':
                        $stmt->bindValue($identifier, $this->pacientefacturacion_razonsocial, PDO::PARAM_STR);
                        break;
                    case '`pacientefacturacion_rfc`':
                        $stmt->bindValue($identifier, $this->pacientefacturacion_rfc, PDO::PARAM_STR);
                        break;
                    case '`pacientefacturacion_calle`':
                        $stmt->bindValue($identifier, $this->pacientefacturacion_calle, PDO::PARAM_STR);
                        break;
                    case '`pacientefacturacion_noexterior`':
                        $stmt->bindValue($identifier, $this->pacientefacturacion_noexterior, PDO::PARAM_STR);
                        break;
                    case '`pacientefacturacion_nointerior`':
                        $stmt->bindValue($identifier, $this->pacientefacturacion_nointerior, PDO::PARAM_STR);
                        break;
                    case '`pacientefacturacion_colonia`':
                        $stmt->bindValue($identifier, $this->pacientefacturacion_colonia, PDO::PARAM_STR);
                        break;
                    case '`pacientefacturacion_ciudad`':
                        $stmt->bindValue($identifier, $this->pacientefacturacion_ciudad, PDO::PARAM_STR);
                        break;
                    case '`pacientefacturacion_estado`':
                        $stmt->bindValue($identifier, $this->pacientefacturacion_estado, PDO::PARAM_STR);
                        break;
                    case '`pacientefacturacion_pais`':
                        $stmt->bindValue($identifier, $this->pacientefacturacion_pais, PDO::PARAM_STR);
                        break;
                    case '`pacientefacturacion_codigopostal`':
                        $stmt->bindValue($identifier, $this->pacientefacturacion_codigopostal, PDO::PARAM_STR);
                        break;
                    case '`pacientefacturacion_telefono`':
                        $stmt->bindValue($identifier, $this->pacientefacturacion_telefono, PDO::PARAM_STR);
                        break;
                    case '`pacientefacturacion_email`':
                        $stmt->bindValue($identifier, $this->pacientefacturacion_email, PDO::PARAM_STR);
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
        $this->setIdpacientefacturacion($pk);

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

            if ($this->aPaciente !== null) {
                if (!$this->aPaciente->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPaciente->getValidationFailures());
                }
            }


            if (($retval = PacientefacturacionPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collFacturas !== null) {
                    foreach ($this->collFacturas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = PacientefacturacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdpacientefacturacion();
                break;
            case 1:
                return $this->getIdpaciente();
                break;
            case 2:
                return $this->getPacientefacturacionRazonsocial();
                break;
            case 3:
                return $this->getPacientefacturacionRfc();
                break;
            case 4:
                return $this->getPacientefacturacionCalle();
                break;
            case 5:
                return $this->getPacientefacturacionNoexterior();
                break;
            case 6:
                return $this->getPacientefacturacionNointerior();
                break;
            case 7:
                return $this->getPacientefacturacionColonia();
                break;
            case 8:
                return $this->getPacientefacturacionCiudad();
                break;
            case 9:
                return $this->getPacientefacturacionEstado();
                break;
            case 10:
                return $this->getPacientefacturacionPais();
                break;
            case 11:
                return $this->getPacientefacturacionCodigopostal();
                break;
            case 12:
                return $this->getPacientefacturacionTelefono();
                break;
            case 13:
                return $this->getPacientefacturacionEmail();
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
        if (isset($alreadyDumpedObjects['Pacientefacturacion'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Pacientefacturacion'][$this->getPrimaryKey()] = true;
        $keys = PacientefacturacionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdpacientefacturacion(),
            $keys[1] => $this->getIdpaciente(),
            $keys[2] => $this->getPacientefacturacionRazonsocial(),
            $keys[3] => $this->getPacientefacturacionRfc(),
            $keys[4] => $this->getPacientefacturacionCalle(),
            $keys[5] => $this->getPacientefacturacionNoexterior(),
            $keys[6] => $this->getPacientefacturacionNointerior(),
            $keys[7] => $this->getPacientefacturacionColonia(),
            $keys[8] => $this->getPacientefacturacionCiudad(),
            $keys[9] => $this->getPacientefacturacionEstado(),
            $keys[10] => $this->getPacientefacturacionPais(),
            $keys[11] => $this->getPacientefacturacionCodigopostal(),
            $keys[12] => $this->getPacientefacturacionTelefono(),
            $keys[13] => $this->getPacientefacturacionEmail(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aPaciente) {
                $result['Paciente'] = $this->aPaciente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collFacturas) {
                $result['Facturas'] = $this->collFacturas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = PacientefacturacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdpacientefacturacion($value);
                break;
            case 1:
                $this->setIdpaciente($value);
                break;
            case 2:
                $this->setPacientefacturacionRazonsocial($value);
                break;
            case 3:
                $this->setPacientefacturacionRfc($value);
                break;
            case 4:
                $this->setPacientefacturacionCalle($value);
                break;
            case 5:
                $this->setPacientefacturacionNoexterior($value);
                break;
            case 6:
                $this->setPacientefacturacionNointerior($value);
                break;
            case 7:
                $this->setPacientefacturacionColonia($value);
                break;
            case 8:
                $this->setPacientefacturacionCiudad($value);
                break;
            case 9:
                $this->setPacientefacturacionEstado($value);
                break;
            case 10:
                $this->setPacientefacturacionPais($value);
                break;
            case 11:
                $this->setPacientefacturacionCodigopostal($value);
                break;
            case 12:
                $this->setPacientefacturacionTelefono($value);
                break;
            case 13:
                $this->setPacientefacturacionEmail($value);
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
        $keys = PacientefacturacionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdpacientefacturacion($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdpaciente($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPacientefacturacionRazonsocial($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPacientefacturacionRfc($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPacientefacturacionCalle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPacientefacturacionNoexterior($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPacientefacturacionNointerior($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPacientefacturacionColonia($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPacientefacturacionCiudad($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPacientefacturacionEstado($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPacientefacturacionPais($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPacientefacturacionCodigopostal($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPacientefacturacionTelefono($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPacientefacturacionEmail($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PacientefacturacionPeer::DATABASE_NAME);

        if ($this->isColumnModified(PacientefacturacionPeer::IDPACIENTEFACTURACION)) $criteria->add(PacientefacturacionPeer::IDPACIENTEFACTURACION, $this->idpacientefacturacion);
        if ($this->isColumnModified(PacientefacturacionPeer::IDPACIENTE)) $criteria->add(PacientefacturacionPeer::IDPACIENTE, $this->idpaciente);
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_RAZONSOCIAL)) $criteria->add(PacientefacturacionPeer::PACIENTEFACTURACION_RAZONSOCIAL, $this->pacientefacturacion_razonsocial);
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_RFC)) $criteria->add(PacientefacturacionPeer::PACIENTEFACTURACION_RFC, $this->pacientefacturacion_rfc);
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_CALLE)) $criteria->add(PacientefacturacionPeer::PACIENTEFACTURACION_CALLE, $this->pacientefacturacion_calle);
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_NOEXTERIOR)) $criteria->add(PacientefacturacionPeer::PACIENTEFACTURACION_NOEXTERIOR, $this->pacientefacturacion_noexterior);
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_NOINTERIOR)) $criteria->add(PacientefacturacionPeer::PACIENTEFACTURACION_NOINTERIOR, $this->pacientefacturacion_nointerior);
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_COLONIA)) $criteria->add(PacientefacturacionPeer::PACIENTEFACTURACION_COLONIA, $this->pacientefacturacion_colonia);
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_CIUDAD)) $criteria->add(PacientefacturacionPeer::PACIENTEFACTURACION_CIUDAD, $this->pacientefacturacion_ciudad);
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_ESTADO)) $criteria->add(PacientefacturacionPeer::PACIENTEFACTURACION_ESTADO, $this->pacientefacturacion_estado);
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_PAIS)) $criteria->add(PacientefacturacionPeer::PACIENTEFACTURACION_PAIS, $this->pacientefacturacion_pais);
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_CODIGOPOSTAL)) $criteria->add(PacientefacturacionPeer::PACIENTEFACTURACION_CODIGOPOSTAL, $this->pacientefacturacion_codigopostal);
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_TELEFONO)) $criteria->add(PacientefacturacionPeer::PACIENTEFACTURACION_TELEFONO, $this->pacientefacturacion_telefono);
        if ($this->isColumnModified(PacientefacturacionPeer::PACIENTEFACTURACION_EMAIL)) $criteria->add(PacientefacturacionPeer::PACIENTEFACTURACION_EMAIL, $this->pacientefacturacion_email);

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
        $criteria = new Criteria(PacientefacturacionPeer::DATABASE_NAME);
        $criteria->add(PacientefacturacionPeer::IDPACIENTEFACTURACION, $this->idpacientefacturacion);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdpacientefacturacion();
    }

    /**
     * Generic method to set the primary key (idpacientefacturacion column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdpacientefacturacion($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdpacientefacturacion();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Pacientefacturacion (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdpaciente($this->getIdpaciente());
        $copyObj->setPacientefacturacionRazonsocial($this->getPacientefacturacionRazonsocial());
        $copyObj->setPacientefacturacionRfc($this->getPacientefacturacionRfc());
        $copyObj->setPacientefacturacionCalle($this->getPacientefacturacionCalle());
        $copyObj->setPacientefacturacionNoexterior($this->getPacientefacturacionNoexterior());
        $copyObj->setPacientefacturacionNointerior($this->getPacientefacturacionNointerior());
        $copyObj->setPacientefacturacionColonia($this->getPacientefacturacionColonia());
        $copyObj->setPacientefacturacionCiudad($this->getPacientefacturacionCiudad());
        $copyObj->setPacientefacturacionEstado($this->getPacientefacturacionEstado());
        $copyObj->setPacientefacturacionPais($this->getPacientefacturacionPais());
        $copyObj->setPacientefacturacionCodigopostal($this->getPacientefacturacionCodigopostal());
        $copyObj->setPacientefacturacionTelefono($this->getPacientefacturacionTelefono());
        $copyObj->setPacientefacturacionEmail($this->getPacientefacturacionEmail());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getFacturas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFactura($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdpacientefacturacion(NULL); // this is a auto-increment column, so set to default value
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
     * @return Pacientefacturacion Clone of current object.
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
     * @return PacientefacturacionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PacientefacturacionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Paciente object.
     *
     * @param                  Paciente $v
     * @return Pacientefacturacion The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPaciente(Paciente $v = null)
    {
        if ($v === null) {
            $this->setIdpaciente(NULL);
        } else {
            $this->setIdpaciente($v->getIdpaciente());
        }

        $this->aPaciente = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Paciente object, it will not be re-added.
        if ($v !== null) {
            $v->addPacientefacturacion($this);
        }


        return $this;
    }


    /**
     * Get the associated Paciente object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Paciente The associated Paciente object.
     * @throws PropelException
     */
    public function getPaciente(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPaciente === null && ($this->idpaciente !== null) && $doQuery) {
            $this->aPaciente = PacienteQuery::create()->findPk($this->idpaciente, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPaciente->addPacientefacturacions($this);
             */
        }

        return $this->aPaciente;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Factura' == $relationName) {
            $this->initFacturas();
        }
    }

    /**
     * Clears out the collFacturas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Pacientefacturacion The current object (for fluent API support)
     * @see        addFacturas()
     */
    public function clearFacturas()
    {
        $this->collFacturas = null; // important to set this to null since that means it is uninitialized
        $this->collFacturasPartial = null;

        return $this;
    }

    /**
     * reset is the collFacturas collection loaded partially
     *
     * @return void
     */
    public function resetPartialFacturas($v = true)
    {
        $this->collFacturasPartial = $v;
    }

    /**
     * Initializes the collFacturas collection.
     *
     * By default this just sets the collFacturas collection to an empty array (like clearcollFacturas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initFacturas($overrideExisting = true)
    {
        if (null !== $this->collFacturas && !$overrideExisting) {
            return;
        }
        $this->collFacturas = new PropelObjectCollection();
        $this->collFacturas->setModel('Factura');
    }

    /**
     * Gets an array of Factura objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Pacientefacturacion is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Factura[] List of Factura objects
     * @throws PropelException
     */
    public function getFacturas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collFacturasPartial && !$this->isNew();
        if (null === $this->collFacturas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collFacturas) {
                // return empty collection
                $this->initFacturas();
            } else {
                $collFacturas = FacturaQuery::create(null, $criteria)
                    ->filterByPacientefacturacion($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collFacturasPartial && count($collFacturas)) {
                      $this->initFacturas(false);

                      foreach ($collFacturas as $obj) {
                        if (false == $this->collFacturas->contains($obj)) {
                          $this->collFacturas->append($obj);
                        }
                      }

                      $this->collFacturasPartial = true;
                    }

                    $collFacturas->getInternalIterator()->rewind();

                    return $collFacturas;
                }

                if ($partial && $this->collFacturas) {
                    foreach ($this->collFacturas as $obj) {
                        if ($obj->isNew()) {
                            $collFacturas[] = $obj;
                        }
                    }
                }

                $this->collFacturas = $collFacturas;
                $this->collFacturasPartial = false;
            }
        }

        return $this->collFacturas;
    }

    /**
     * Sets a collection of Factura objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $facturas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Pacientefacturacion The current object (for fluent API support)
     */
    public function setFacturas(PropelCollection $facturas, PropelPDO $con = null)
    {
        $facturasToDelete = $this->getFacturas(new Criteria(), $con)->diff($facturas);


        $this->facturasScheduledForDeletion = $facturasToDelete;

        foreach ($facturasToDelete as $facturaRemoved) {
            $facturaRemoved->setPacientefacturacion(null);
        }

        $this->collFacturas = null;
        foreach ($facturas as $factura) {
            $this->addFactura($factura);
        }

        $this->collFacturas = $facturas;
        $this->collFacturasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Factura objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Factura objects.
     * @throws PropelException
     */
    public function countFacturas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collFacturasPartial && !$this->isNew();
        if (null === $this->collFacturas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collFacturas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getFacturas());
            }
            $query = FacturaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPacientefacturacion($this)
                ->count($con);
        }

        return count($this->collFacturas);
    }

    /**
     * Method called to associate a Factura object to this object
     * through the Factura foreign key attribute.
     *
     * @param    Factura $l Factura
     * @return Pacientefacturacion The current object (for fluent API support)
     */
    public function addFactura(Factura $l)
    {
        if ($this->collFacturas === null) {
            $this->initFacturas();
            $this->collFacturasPartial = true;
        }

        if (!in_array($l, $this->collFacturas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddFactura($l);

            if ($this->facturasScheduledForDeletion and $this->facturasScheduledForDeletion->contains($l)) {
                $this->facturasScheduledForDeletion->remove($this->facturasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Factura $factura The factura object to add.
     */
    protected function doAddFactura($factura)
    {
        $this->collFacturas[]= $factura;
        $factura->setPacientefacturacion($this);
    }

    /**
     * @param	Factura $factura The factura object to remove.
     * @return Pacientefacturacion The current object (for fluent API support)
     */
    public function removeFactura($factura)
    {
        if ($this->getFacturas()->contains($factura)) {
            $this->collFacturas->remove($this->collFacturas->search($factura));
            if (null === $this->facturasScheduledForDeletion) {
                $this->facturasScheduledForDeletion = clone $this->collFacturas;
                $this->facturasScheduledForDeletion->clear();
            }
            $this->facturasScheduledForDeletion[]= clone $factura;
            $factura->setPacientefacturacion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Pacientefacturacion is new, it will return
     * an empty collection; or if this Pacientefacturacion has previously
     * been saved, it will retrieve related Facturas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Pacientefacturacion.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factura[] List of Factura objects
     */
    public function getFacturasJoinAdmision($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturaQuery::create(null, $criteria);
        $query->joinWith('Admision', $join_behavior);

        return $this->getFacturas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Pacientefacturacion is new, it will return
     * an empty collection; or if this Pacientefacturacion has previously
     * been saved, it will retrieve related Facturas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Pacientefacturacion.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factura[] List of Factura objects
     */
    public function getFacturasJoinConsulta($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturaQuery::create(null, $criteria);
        $query->joinWith('Consulta', $join_behavior);

        return $this->getFacturas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Pacientefacturacion is new, it will return
     * an empty collection; or if this Pacientefacturacion has previously
     * been saved, it will retrieve related Facturas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Pacientefacturacion.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factura[] List of Factura objects
     */
    public function getFacturasJoinVenta($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturaQuery::create(null, $criteria);
        $query->joinWith('Venta', $join_behavior);

        return $this->getFacturas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idpacientefacturacion = null;
        $this->idpaciente = null;
        $this->pacientefacturacion_razonsocial = null;
        $this->pacientefacturacion_rfc = null;
        $this->pacientefacturacion_calle = null;
        $this->pacientefacturacion_noexterior = null;
        $this->pacientefacturacion_nointerior = null;
        $this->pacientefacturacion_colonia = null;
        $this->pacientefacturacion_ciudad = null;
        $this->pacientefacturacion_estado = null;
        $this->pacientefacturacion_pais = null;
        $this->pacientefacturacion_codigopostal = null;
        $this->pacientefacturacion_telefono = null;
        $this->pacientefacturacion_email = null;
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
            if ($this->collFacturas) {
                foreach ($this->collFacturas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aPaciente instanceof Persistent) {
              $this->aPaciente->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collFacturas instanceof PropelCollection) {
            $this->collFacturas->clearIterator();
        }
        $this->collFacturas = null;
        $this->aPaciente = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PacientefacturacionPeer::DEFAULT_STRING_FORMAT);
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
