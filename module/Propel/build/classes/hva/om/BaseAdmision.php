<?php


/**
 * Base class that represents a row from the 'admision' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseAdmision extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AdmisionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AdmisionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idadmision field.
     * @var        int
     */
    protected $idadmision;

    /**
     * The value for the idpaciente field.
     * @var        int
     */
    protected $idpaciente;

    /**
     * The value for the idmedico field.
     * @var        int
     */
    protected $idmedico;

    /**
     * The value for the idcuarto field.
     * @var        int
     */
    protected $idcuarto;

    /**
     * The value for the admision_fechaadmision field.
     * @var        string
     */
    protected $admision_fechaadmision;

    /**
     * The value for the admision_fechasalida field.
     * @var        string
     */
    protected $admision_fechasalida;

    /**
     * The value for the admision_diagnostico field.
     * @var        string
     */
    protected $admision_diagnostico;

    /**
     * The value for the admision_observaciones field.
     * @var        string
     */
    protected $admision_observaciones;

    /**
     * The value for the admision_status field.
     * Note: this column has a database default value of: 'pendiente'
     * @var        string
     */
    protected $admision_status;

    /**
     * The value for the admision_total field.
     * @var        string
     */
    protected $admision_total;

    /**
     * The value for the admision_pagadaen field.
     * @var        string
     */
    protected $admision_pagadaen;

    /**
     * @var        Cuarto
     */
    protected $aCuarto;

    /**
     * @var        Medico
     */
    protected $aMedico;

    /**
     * @var        Paciente
     */
    protected $aPaciente;

    /**
     * @var        PropelObjectCollection|Admisionanticipo[] Collection to store aggregation of Admisionanticipo objects.
     */
    protected $collAdmisionanticipos;
    protected $collAdmisionanticiposPartial;

    /**
     * @var        PropelObjectCollection|Cargoadmision[] Collection to store aggregation of Cargoadmision objects.
     */
    protected $collCargoadmisions;
    protected $collCargoadmisionsPartial;

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
    protected $admisionanticiposScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $cargoadmisionsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->admision_status = 'pendiente';
    }

    /**
     * Initializes internal state of BaseAdmision object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [idadmision] column value.
     *
     * @return int
     */
    public function getIdadmision()
    {

        return $this->idadmision;
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
     * Get the [idmedico] column value.
     *
     * @return int
     */
    public function getIdmedico()
    {

        return $this->idmedico;
    }

    /**
     * Get the [idcuarto] column value.
     *
     * @return int
     */
    public function getIdcuarto()
    {

        return $this->idcuarto;
    }

    /**
     * Get the [optionally formatted] temporal [admision_fechaadmision] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getAdmisionFechaadmision($format = 'Y-m-d H:i:s')
    {
        if ($this->admision_fechaadmision === null) {
            return null;
        }

        if ($this->admision_fechaadmision === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->admision_fechaadmision);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->admision_fechaadmision, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [admision_fechasalida] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getAdmisionFechasalida($format = 'Y-m-d H:i:s')
    {
        if ($this->admision_fechasalida === null) {
            return null;
        }

        if ($this->admision_fechasalida === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->admision_fechasalida);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->admision_fechasalida, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [admision_diagnostico] column value.
     *
     * @return string
     */
    public function getAdmisionDiagnostico()
    {

        return $this->admision_diagnostico;
    }

    /**
     * Get the [admision_observaciones] column value.
     *
     * @return string
     */
    public function getAdmisionObservaciones()
    {

        return $this->admision_observaciones;
    }

    /**
     * Get the [admision_status] column value.
     *
     * @return string
     */
    public function getAdmisionStatus()
    {

        return $this->admision_status;
    }

    /**
     * Get the [admision_total] column value.
     *
     * @return string
     */
    public function getAdmisionTotal()
    {

        return $this->admision_total;
    }

    /**
     * Get the [optionally formatted] temporal [admision_pagadaen] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getAdmisionPagadaen($format = 'Y-m-d H:i:s')
    {
        if ($this->admision_pagadaen === null) {
            return null;
        }

        if ($this->admision_pagadaen === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->admision_pagadaen);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->admision_pagadaen, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Set the value of [idadmision] column.
     *
     * @param  int $v new value
     * @return Admision The current object (for fluent API support)
     */
    public function setIdadmision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idadmision !== $v) {
            $this->idadmision = $v;
            $this->modifiedColumns[] = AdmisionPeer::IDADMISION;
        }


        return $this;
    } // setIdadmision()

    /**
     * Set the value of [idpaciente] column.
     *
     * @param  int $v new value
     * @return Admision The current object (for fluent API support)
     */
    public function setIdpaciente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpaciente !== $v) {
            $this->idpaciente = $v;
            $this->modifiedColumns[] = AdmisionPeer::IDPACIENTE;
        }

        if ($this->aPaciente !== null && $this->aPaciente->getIdpaciente() !== $v) {
            $this->aPaciente = null;
        }


        return $this;
    } // setIdpaciente()

    /**
     * Set the value of [idmedico] column.
     *
     * @param  int $v new value
     * @return Admision The current object (for fluent API support)
     */
    public function setIdmedico($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idmedico !== $v) {
            $this->idmedico = $v;
            $this->modifiedColumns[] = AdmisionPeer::IDMEDICO;
        }

        if ($this->aMedico !== null && $this->aMedico->getIdmedico() !== $v) {
            $this->aMedico = null;
        }


        return $this;
    } // setIdmedico()

    /**
     * Set the value of [idcuarto] column.
     *
     * @param  int $v new value
     * @return Admision The current object (for fluent API support)
     */
    public function setIdcuarto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcuarto !== $v) {
            $this->idcuarto = $v;
            $this->modifiedColumns[] = AdmisionPeer::IDCUARTO;
        }

        if ($this->aCuarto !== null && $this->aCuarto->getIdcuarto() !== $v) {
            $this->aCuarto = null;
        }


        return $this;
    } // setIdcuarto()

    /**
     * Sets the value of [admision_fechaadmision] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Admision The current object (for fluent API support)
     */
    public function setAdmisionFechaadmision($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->admision_fechaadmision !== null || $dt !== null) {
            $currentDateAsString = ($this->admision_fechaadmision !== null && $tmpDt = new DateTime($this->admision_fechaadmision)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->admision_fechaadmision = $newDateAsString;
                $this->modifiedColumns[] = AdmisionPeer::ADMISION_FECHAADMISION;
            }
        } // if either are not null


        return $this;
    } // setAdmisionFechaadmision()

    /**
     * Sets the value of [admision_fechasalida] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Admision The current object (for fluent API support)
     */
    public function setAdmisionFechasalida($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->admision_fechasalida !== null || $dt !== null) {
            $currentDateAsString = ($this->admision_fechasalida !== null && $tmpDt = new DateTime($this->admision_fechasalida)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->admision_fechasalida = $newDateAsString;
                $this->modifiedColumns[] = AdmisionPeer::ADMISION_FECHASALIDA;
            }
        } // if either are not null


        return $this;
    } // setAdmisionFechasalida()

    /**
     * Set the value of [admision_diagnostico] column.
     *
     * @param  string $v new value
     * @return Admision The current object (for fluent API support)
     */
    public function setAdmisionDiagnostico($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->admision_diagnostico !== $v) {
            $this->admision_diagnostico = $v;
            $this->modifiedColumns[] = AdmisionPeer::ADMISION_DIAGNOSTICO;
        }


        return $this;
    } // setAdmisionDiagnostico()

    /**
     * Set the value of [admision_observaciones] column.
     *
     * @param  string $v new value
     * @return Admision The current object (for fluent API support)
     */
    public function setAdmisionObservaciones($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->admision_observaciones !== $v) {
            $this->admision_observaciones = $v;
            $this->modifiedColumns[] = AdmisionPeer::ADMISION_OBSERVACIONES;
        }


        return $this;
    } // setAdmisionObservaciones()

    /**
     * Set the value of [admision_status] column.
     *
     * @param  string $v new value
     * @return Admision The current object (for fluent API support)
     */
    public function setAdmisionStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->admision_status !== $v) {
            $this->admision_status = $v;
            $this->modifiedColumns[] = AdmisionPeer::ADMISION_STATUS;
        }


        return $this;
    } // setAdmisionStatus()

    /**
     * Set the value of [admision_total] column.
     *
     * @param  string $v new value
     * @return Admision The current object (for fluent API support)
     */
    public function setAdmisionTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->admision_total !== $v) {
            $this->admision_total = $v;
            $this->modifiedColumns[] = AdmisionPeer::ADMISION_TOTAL;
        }


        return $this;
    } // setAdmisionTotal()

    /**
     * Sets the value of [admision_pagadaen] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Admision The current object (for fluent API support)
     */
    public function setAdmisionPagadaen($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->admision_pagadaen !== null || $dt !== null) {
            $currentDateAsString = ($this->admision_pagadaen !== null && $tmpDt = new DateTime($this->admision_pagadaen)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->admision_pagadaen = $newDateAsString;
                $this->modifiedColumns[] = AdmisionPeer::ADMISION_PAGADAEN;
            }
        } // if either are not null


        return $this;
    } // setAdmisionPagadaen()

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
            if ($this->admision_status !== 'pendiente') {
                return false;
            }

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

            $this->idadmision = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idpaciente = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idmedico = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idcuarto = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->admision_fechaadmision = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->admision_fechasalida = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->admision_diagnostico = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->admision_observaciones = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->admision_status = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->admision_total = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->admision_pagadaen = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = AdmisionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Admision object", $e);
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
        if ($this->aMedico !== null && $this->idmedico !== $this->aMedico->getIdmedico()) {
            $this->aMedico = null;
        }
        if ($this->aCuarto !== null && $this->idcuarto !== $this->aCuarto->getIdcuarto()) {
            $this->aCuarto = null;
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
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AdmisionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCuarto = null;
            $this->aMedico = null;
            $this->aPaciente = null;
            $this->collAdmisionanticipos = null;

            $this->collCargoadmisions = null;

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
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AdmisionQuery::create()
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
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                AdmisionPeer::addInstanceToPool($this);
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

            if ($this->aCuarto !== null) {
                if ($this->aCuarto->isModified() || $this->aCuarto->isNew()) {
                    $affectedRows += $this->aCuarto->save($con);
                }
                $this->setCuarto($this->aCuarto);
            }

            if ($this->aMedico !== null) {
                if ($this->aMedico->isModified() || $this->aMedico->isNew()) {
                    $affectedRows += $this->aMedico->save($con);
                }
                $this->setMedico($this->aMedico);
            }

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

            if ($this->admisionanticiposScheduledForDeletion !== null) {
                if (!$this->admisionanticiposScheduledForDeletion->isEmpty()) {
                    AdmisionanticipoQuery::create()
                        ->filterByPrimaryKeys($this->admisionanticiposScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->admisionanticiposScheduledForDeletion = null;
                }
            }

            if ($this->collAdmisionanticipos !== null) {
                foreach ($this->collAdmisionanticipos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->cargoadmisionsScheduledForDeletion !== null) {
                if (!$this->cargoadmisionsScheduledForDeletion->isEmpty()) {
                    CargoadmisionQuery::create()
                        ->filterByPrimaryKeys($this->cargoadmisionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->cargoadmisionsScheduledForDeletion = null;
                }
            }

            if ($this->collCargoadmisions !== null) {
                foreach ($this->collCargoadmisions as $referrerFK) {
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

        $this->modifiedColumns[] = AdmisionPeer::IDADMISION;
        if (null !== $this->idadmision) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AdmisionPeer::IDADMISION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AdmisionPeer::IDADMISION)) {
            $modifiedColumns[':p' . $index++]  = '`idadmision`';
        }
        if ($this->isColumnModified(AdmisionPeer::IDPACIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idpaciente`';
        }
        if ($this->isColumnModified(AdmisionPeer::IDMEDICO)) {
            $modifiedColumns[':p' . $index++]  = '`idmedico`';
        }
        if ($this->isColumnModified(AdmisionPeer::IDCUARTO)) {
            $modifiedColumns[':p' . $index++]  = '`idcuarto`';
        }
        if ($this->isColumnModified(AdmisionPeer::ADMISION_FECHAADMISION)) {
            $modifiedColumns[':p' . $index++]  = '`admision_fechaadmision`';
        }
        if ($this->isColumnModified(AdmisionPeer::ADMISION_FECHASALIDA)) {
            $modifiedColumns[':p' . $index++]  = '`admision_fechasalida`';
        }
        if ($this->isColumnModified(AdmisionPeer::ADMISION_DIAGNOSTICO)) {
            $modifiedColumns[':p' . $index++]  = '`admision_diagnostico`';
        }
        if ($this->isColumnModified(AdmisionPeer::ADMISION_OBSERVACIONES)) {
            $modifiedColumns[':p' . $index++]  = '`admision_observaciones`';
        }
        if ($this->isColumnModified(AdmisionPeer::ADMISION_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`admision_status`';
        }
        if ($this->isColumnModified(AdmisionPeer::ADMISION_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`admision_total`';
        }
        if ($this->isColumnModified(AdmisionPeer::ADMISION_PAGADAEN)) {
            $modifiedColumns[':p' . $index++]  = '`admision_pagadaen`';
        }

        $sql = sprintf(
            'INSERT INTO `admision` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idadmision`':
                        $stmt->bindValue($identifier, $this->idadmision, PDO::PARAM_INT);
                        break;
                    case '`idpaciente`':
                        $stmt->bindValue($identifier, $this->idpaciente, PDO::PARAM_INT);
                        break;
                    case '`idmedico`':
                        $stmt->bindValue($identifier, $this->idmedico, PDO::PARAM_INT);
                        break;
                    case '`idcuarto`':
                        $stmt->bindValue($identifier, $this->idcuarto, PDO::PARAM_INT);
                        break;
                    case '`admision_fechaadmision`':
                        $stmt->bindValue($identifier, $this->admision_fechaadmision, PDO::PARAM_STR);
                        break;
                    case '`admision_fechasalida`':
                        $stmt->bindValue($identifier, $this->admision_fechasalida, PDO::PARAM_STR);
                        break;
                    case '`admision_diagnostico`':
                        $stmt->bindValue($identifier, $this->admision_diagnostico, PDO::PARAM_STR);
                        break;
                    case '`admision_observaciones`':
                        $stmt->bindValue($identifier, $this->admision_observaciones, PDO::PARAM_STR);
                        break;
                    case '`admision_status`':
                        $stmt->bindValue($identifier, $this->admision_status, PDO::PARAM_STR);
                        break;
                    case '`admision_total`':
                        $stmt->bindValue($identifier, $this->admision_total, PDO::PARAM_STR);
                        break;
                    case '`admision_pagadaen`':
                        $stmt->bindValue($identifier, $this->admision_pagadaen, PDO::PARAM_STR);
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
        $this->setIdadmision($pk);

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

            if ($this->aCuarto !== null) {
                if (!$this->aCuarto->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCuarto->getValidationFailures());
                }
            }

            if ($this->aMedico !== null) {
                if (!$this->aMedico->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aMedico->getValidationFailures());
                }
            }

            if ($this->aPaciente !== null) {
                if (!$this->aPaciente->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPaciente->getValidationFailures());
                }
            }


            if (($retval = AdmisionPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAdmisionanticipos !== null) {
                    foreach ($this->collAdmisionanticipos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCargoadmisions !== null) {
                    foreach ($this->collCargoadmisions as $referrerFK) {
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
        $pos = AdmisionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdadmision();
                break;
            case 1:
                return $this->getIdpaciente();
                break;
            case 2:
                return $this->getIdmedico();
                break;
            case 3:
                return $this->getIdcuarto();
                break;
            case 4:
                return $this->getAdmisionFechaadmision();
                break;
            case 5:
                return $this->getAdmisionFechasalida();
                break;
            case 6:
                return $this->getAdmisionDiagnostico();
                break;
            case 7:
                return $this->getAdmisionObservaciones();
                break;
            case 8:
                return $this->getAdmisionStatus();
                break;
            case 9:
                return $this->getAdmisionTotal();
                break;
            case 10:
                return $this->getAdmisionPagadaen();
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
        if (isset($alreadyDumpedObjects['Admision'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Admision'][$this->getPrimaryKey()] = true;
        $keys = AdmisionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdadmision(),
            $keys[1] => $this->getIdpaciente(),
            $keys[2] => $this->getIdmedico(),
            $keys[3] => $this->getIdcuarto(),
            $keys[4] => $this->getAdmisionFechaadmision(),
            $keys[5] => $this->getAdmisionFechasalida(),
            $keys[6] => $this->getAdmisionDiagnostico(),
            $keys[7] => $this->getAdmisionObservaciones(),
            $keys[8] => $this->getAdmisionStatus(),
            $keys[9] => $this->getAdmisionTotal(),
            $keys[10] => $this->getAdmisionPagadaen(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCuarto) {
                $result['Cuarto'] = $this->aCuarto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aMedico) {
                $result['Medico'] = $this->aMedico->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPaciente) {
                $result['Paciente'] = $this->aPaciente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collAdmisionanticipos) {
                $result['Admisionanticipos'] = $this->collAdmisionanticipos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCargoadmisions) {
                $result['Cargoadmisions'] = $this->collCargoadmisions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = AdmisionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdadmision($value);
                break;
            case 1:
                $this->setIdpaciente($value);
                break;
            case 2:
                $this->setIdmedico($value);
                break;
            case 3:
                $this->setIdcuarto($value);
                break;
            case 4:
                $this->setAdmisionFechaadmision($value);
                break;
            case 5:
                $this->setAdmisionFechasalida($value);
                break;
            case 6:
                $this->setAdmisionDiagnostico($value);
                break;
            case 7:
                $this->setAdmisionObservaciones($value);
                break;
            case 8:
                $this->setAdmisionStatus($value);
                break;
            case 9:
                $this->setAdmisionTotal($value);
                break;
            case 10:
                $this->setAdmisionPagadaen($value);
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
        $keys = AdmisionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdadmision($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdpaciente($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdmedico($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdcuarto($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAdmisionFechaadmision($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAdmisionFechasalida($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAdmisionDiagnostico($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAdmisionObservaciones($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAdmisionStatus($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAdmisionTotal($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAdmisionPagadaen($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AdmisionPeer::DATABASE_NAME);

        if ($this->isColumnModified(AdmisionPeer::IDADMISION)) $criteria->add(AdmisionPeer::IDADMISION, $this->idadmision);
        if ($this->isColumnModified(AdmisionPeer::IDPACIENTE)) $criteria->add(AdmisionPeer::IDPACIENTE, $this->idpaciente);
        if ($this->isColumnModified(AdmisionPeer::IDMEDICO)) $criteria->add(AdmisionPeer::IDMEDICO, $this->idmedico);
        if ($this->isColumnModified(AdmisionPeer::IDCUARTO)) $criteria->add(AdmisionPeer::IDCUARTO, $this->idcuarto);
        if ($this->isColumnModified(AdmisionPeer::ADMISION_FECHAADMISION)) $criteria->add(AdmisionPeer::ADMISION_FECHAADMISION, $this->admision_fechaadmision);
        if ($this->isColumnModified(AdmisionPeer::ADMISION_FECHASALIDA)) $criteria->add(AdmisionPeer::ADMISION_FECHASALIDA, $this->admision_fechasalida);
        if ($this->isColumnModified(AdmisionPeer::ADMISION_DIAGNOSTICO)) $criteria->add(AdmisionPeer::ADMISION_DIAGNOSTICO, $this->admision_diagnostico);
        if ($this->isColumnModified(AdmisionPeer::ADMISION_OBSERVACIONES)) $criteria->add(AdmisionPeer::ADMISION_OBSERVACIONES, $this->admision_observaciones);
        if ($this->isColumnModified(AdmisionPeer::ADMISION_STATUS)) $criteria->add(AdmisionPeer::ADMISION_STATUS, $this->admision_status);
        if ($this->isColumnModified(AdmisionPeer::ADMISION_TOTAL)) $criteria->add(AdmisionPeer::ADMISION_TOTAL, $this->admision_total);
        if ($this->isColumnModified(AdmisionPeer::ADMISION_PAGADAEN)) $criteria->add(AdmisionPeer::ADMISION_PAGADAEN, $this->admision_pagadaen);

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
        $criteria = new Criteria(AdmisionPeer::DATABASE_NAME);
        $criteria->add(AdmisionPeer::IDADMISION, $this->idadmision);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdadmision();
    }

    /**
     * Generic method to set the primary key (idadmision column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdadmision($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdadmision();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Admision (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdpaciente($this->getIdpaciente());
        $copyObj->setIdmedico($this->getIdmedico());
        $copyObj->setIdcuarto($this->getIdcuarto());
        $copyObj->setAdmisionFechaadmision($this->getAdmisionFechaadmision());
        $copyObj->setAdmisionFechasalida($this->getAdmisionFechasalida());
        $copyObj->setAdmisionDiagnostico($this->getAdmisionDiagnostico());
        $copyObj->setAdmisionObservaciones($this->getAdmisionObservaciones());
        $copyObj->setAdmisionStatus($this->getAdmisionStatus());
        $copyObj->setAdmisionTotal($this->getAdmisionTotal());
        $copyObj->setAdmisionPagadaen($this->getAdmisionPagadaen());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getAdmisionanticipos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAdmisionanticipo($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCargoadmisions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCargoadmision($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdadmision(NULL); // this is a auto-increment column, so set to default value
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
     * @return Admision Clone of current object.
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
     * @return AdmisionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AdmisionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Cuarto object.
     *
     * @param                  Cuarto $v
     * @return Admision The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCuarto(Cuarto $v = null)
    {
        if ($v === null) {
            $this->setIdcuarto(NULL);
        } else {
            $this->setIdcuarto($v->getIdcuarto());
        }

        $this->aCuarto = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Cuarto object, it will not be re-added.
        if ($v !== null) {
            $v->addAdmision($this);
        }


        return $this;
    }


    /**
     * Get the associated Cuarto object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Cuarto The associated Cuarto object.
     * @throws PropelException
     */
    public function getCuarto(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCuarto === null && ($this->idcuarto !== null) && $doQuery) {
            $this->aCuarto = CuartoQuery::create()->findPk($this->idcuarto, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCuarto->addAdmisions($this);
             */
        }

        return $this->aCuarto;
    }

    /**
     * Declares an association between this object and a Medico object.
     *
     * @param                  Medico $v
     * @return Admision The current object (for fluent API support)
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
            $v->addAdmision($this);
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
                $this->aMedico->addAdmisions($this);
             */
        }

        return $this->aMedico;
    }

    /**
     * Declares an association between this object and a Paciente object.
     *
     * @param                  Paciente $v
     * @return Admision The current object (for fluent API support)
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
            $v->addAdmision($this);
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
                $this->aPaciente->addAdmisions($this);
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
        if ('Admisionanticipo' == $relationName) {
            $this->initAdmisionanticipos();
        }
        if ('Cargoadmision' == $relationName) {
            $this->initCargoadmisions();
        }
    }

    /**
     * Clears out the collAdmisionanticipos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Admision The current object (for fluent API support)
     * @see        addAdmisionanticipos()
     */
    public function clearAdmisionanticipos()
    {
        $this->collAdmisionanticipos = null; // important to set this to null since that means it is uninitialized
        $this->collAdmisionanticiposPartial = null;

        return $this;
    }

    /**
     * reset is the collAdmisionanticipos collection loaded partially
     *
     * @return void
     */
    public function resetPartialAdmisionanticipos($v = true)
    {
        $this->collAdmisionanticiposPartial = $v;
    }

    /**
     * Initializes the collAdmisionanticipos collection.
     *
     * By default this just sets the collAdmisionanticipos collection to an empty array (like clearcollAdmisionanticipos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAdmisionanticipos($overrideExisting = true)
    {
        if (null !== $this->collAdmisionanticipos && !$overrideExisting) {
            return;
        }
        $this->collAdmisionanticipos = new PropelObjectCollection();
        $this->collAdmisionanticipos->setModel('Admisionanticipo');
    }

    /**
     * Gets an array of Admisionanticipo objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Admision is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Admisionanticipo[] List of Admisionanticipo objects
     * @throws PropelException
     */
    public function getAdmisionanticipos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collAdmisionanticiposPartial && !$this->isNew();
        if (null === $this->collAdmisionanticipos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAdmisionanticipos) {
                // return empty collection
                $this->initAdmisionanticipos();
            } else {
                $collAdmisionanticipos = AdmisionanticipoQuery::create(null, $criteria)
                    ->filterByAdmision($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collAdmisionanticiposPartial && count($collAdmisionanticipos)) {
                      $this->initAdmisionanticipos(false);

                      foreach ($collAdmisionanticipos as $obj) {
                        if (false == $this->collAdmisionanticipos->contains($obj)) {
                          $this->collAdmisionanticipos->append($obj);
                        }
                      }

                      $this->collAdmisionanticiposPartial = true;
                    }

                    $collAdmisionanticipos->getInternalIterator()->rewind();

                    return $collAdmisionanticipos;
                }

                if ($partial && $this->collAdmisionanticipos) {
                    foreach ($this->collAdmisionanticipos as $obj) {
                        if ($obj->isNew()) {
                            $collAdmisionanticipos[] = $obj;
                        }
                    }
                }

                $this->collAdmisionanticipos = $collAdmisionanticipos;
                $this->collAdmisionanticiposPartial = false;
            }
        }

        return $this->collAdmisionanticipos;
    }

    /**
     * Sets a collection of Admisionanticipo objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $admisionanticipos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Admision The current object (for fluent API support)
     */
    public function setAdmisionanticipos(PropelCollection $admisionanticipos, PropelPDO $con = null)
    {
        $admisionanticiposToDelete = $this->getAdmisionanticipos(new Criteria(), $con)->diff($admisionanticipos);


        $this->admisionanticiposScheduledForDeletion = $admisionanticiposToDelete;

        foreach ($admisionanticiposToDelete as $admisionanticipoRemoved) {
            $admisionanticipoRemoved->setAdmision(null);
        }

        $this->collAdmisionanticipos = null;
        foreach ($admisionanticipos as $admisionanticipo) {
            $this->addAdmisionanticipo($admisionanticipo);
        }

        $this->collAdmisionanticipos = $admisionanticipos;
        $this->collAdmisionanticiposPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Admisionanticipo objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Admisionanticipo objects.
     * @throws PropelException
     */
    public function countAdmisionanticipos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collAdmisionanticiposPartial && !$this->isNew();
        if (null === $this->collAdmisionanticipos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAdmisionanticipos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getAdmisionanticipos());
            }
            $query = AdmisionanticipoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAdmision($this)
                ->count($con);
        }

        return count($this->collAdmisionanticipos);
    }

    /**
     * Method called to associate a Admisionanticipo object to this object
     * through the Admisionanticipo foreign key attribute.
     *
     * @param    Admisionanticipo $l Admisionanticipo
     * @return Admision The current object (for fluent API support)
     */
    public function addAdmisionanticipo(Admisionanticipo $l)
    {
        if ($this->collAdmisionanticipos === null) {
            $this->initAdmisionanticipos();
            $this->collAdmisionanticiposPartial = true;
        }

        if (!in_array($l, $this->collAdmisionanticipos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAdmisionanticipo($l);

            if ($this->admisionanticiposScheduledForDeletion and $this->admisionanticiposScheduledForDeletion->contains($l)) {
                $this->admisionanticiposScheduledForDeletion->remove($this->admisionanticiposScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Admisionanticipo $admisionanticipo The admisionanticipo object to add.
     */
    protected function doAddAdmisionanticipo($admisionanticipo)
    {
        $this->collAdmisionanticipos[]= $admisionanticipo;
        $admisionanticipo->setAdmision($this);
    }

    /**
     * @param	Admisionanticipo $admisionanticipo The admisionanticipo object to remove.
     * @return Admision The current object (for fluent API support)
     */
    public function removeAdmisionanticipo($admisionanticipo)
    {
        if ($this->getAdmisionanticipos()->contains($admisionanticipo)) {
            $this->collAdmisionanticipos->remove($this->collAdmisionanticipos->search($admisionanticipo));
            if (null === $this->admisionanticiposScheduledForDeletion) {
                $this->admisionanticiposScheduledForDeletion = clone $this->collAdmisionanticipos;
                $this->admisionanticiposScheduledForDeletion->clear();
            }
            $this->admisionanticiposScheduledForDeletion[]= clone $admisionanticipo;
            $admisionanticipo->setAdmision(null);
        }

        return $this;
    }

    /**
     * Clears out the collCargoadmisions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Admision The current object (for fluent API support)
     * @see        addCargoadmisions()
     */
    public function clearCargoadmisions()
    {
        $this->collCargoadmisions = null; // important to set this to null since that means it is uninitialized
        $this->collCargoadmisionsPartial = null;

        return $this;
    }

    /**
     * reset is the collCargoadmisions collection loaded partially
     *
     * @return void
     */
    public function resetPartialCargoadmisions($v = true)
    {
        $this->collCargoadmisionsPartial = $v;
    }

    /**
     * Initializes the collCargoadmisions collection.
     *
     * By default this just sets the collCargoadmisions collection to an empty array (like clearcollCargoadmisions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCargoadmisions($overrideExisting = true)
    {
        if (null !== $this->collCargoadmisions && !$overrideExisting) {
            return;
        }
        $this->collCargoadmisions = new PropelObjectCollection();
        $this->collCargoadmisions->setModel('Cargoadmision');
    }

    /**
     * Gets an array of Cargoadmision objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Admision is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Cargoadmision[] List of Cargoadmision objects
     * @throws PropelException
     */
    public function getCargoadmisions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCargoadmisionsPartial && !$this->isNew();
        if (null === $this->collCargoadmisions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCargoadmisions) {
                // return empty collection
                $this->initCargoadmisions();
            } else {
                $collCargoadmisions = CargoadmisionQuery::create(null, $criteria)
                    ->filterByAdmision($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCargoadmisionsPartial && count($collCargoadmisions)) {
                      $this->initCargoadmisions(false);

                      foreach ($collCargoadmisions as $obj) {
                        if (false == $this->collCargoadmisions->contains($obj)) {
                          $this->collCargoadmisions->append($obj);
                        }
                      }

                      $this->collCargoadmisionsPartial = true;
                    }

                    $collCargoadmisions->getInternalIterator()->rewind();

                    return $collCargoadmisions;
                }

                if ($partial && $this->collCargoadmisions) {
                    foreach ($this->collCargoadmisions as $obj) {
                        if ($obj->isNew()) {
                            $collCargoadmisions[] = $obj;
                        }
                    }
                }

                $this->collCargoadmisions = $collCargoadmisions;
                $this->collCargoadmisionsPartial = false;
            }
        }

        return $this->collCargoadmisions;
    }

    /**
     * Sets a collection of Cargoadmision objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $cargoadmisions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Admision The current object (for fluent API support)
     */
    public function setCargoadmisions(PropelCollection $cargoadmisions, PropelPDO $con = null)
    {
        $cargoadmisionsToDelete = $this->getCargoadmisions(new Criteria(), $con)->diff($cargoadmisions);


        $this->cargoadmisionsScheduledForDeletion = $cargoadmisionsToDelete;

        foreach ($cargoadmisionsToDelete as $cargoadmisionRemoved) {
            $cargoadmisionRemoved->setAdmision(null);
        }

        $this->collCargoadmisions = null;
        foreach ($cargoadmisions as $cargoadmision) {
            $this->addCargoadmision($cargoadmision);
        }

        $this->collCargoadmisions = $cargoadmisions;
        $this->collCargoadmisionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Cargoadmision objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Cargoadmision objects.
     * @throws PropelException
     */
    public function countCargoadmisions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCargoadmisionsPartial && !$this->isNew();
        if (null === $this->collCargoadmisions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCargoadmisions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCargoadmisions());
            }
            $query = CargoadmisionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAdmision($this)
                ->count($con);
        }

        return count($this->collCargoadmisions);
    }

    /**
     * Method called to associate a Cargoadmision object to this object
     * through the Cargoadmision foreign key attribute.
     *
     * @param    Cargoadmision $l Cargoadmision
     * @return Admision The current object (for fluent API support)
     */
    public function addCargoadmision(Cargoadmision $l)
    {
        if ($this->collCargoadmisions === null) {
            $this->initCargoadmisions();
            $this->collCargoadmisionsPartial = true;
        }

        if (!in_array($l, $this->collCargoadmisions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCargoadmision($l);

            if ($this->cargoadmisionsScheduledForDeletion and $this->cargoadmisionsScheduledForDeletion->contains($l)) {
                $this->cargoadmisionsScheduledForDeletion->remove($this->cargoadmisionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Cargoadmision $cargoadmision The cargoadmision object to add.
     */
    protected function doAddCargoadmision($cargoadmision)
    {
        $this->collCargoadmisions[]= $cargoadmision;
        $cargoadmision->setAdmision($this);
    }

    /**
     * @param	Cargoadmision $cargoadmision The cargoadmision object to remove.
     * @return Admision The current object (for fluent API support)
     */
    public function removeCargoadmision($cargoadmision)
    {
        if ($this->getCargoadmisions()->contains($cargoadmision)) {
            $this->collCargoadmisions->remove($this->collCargoadmisions->search($cargoadmision));
            if (null === $this->cargoadmisionsScheduledForDeletion) {
                $this->cargoadmisionsScheduledForDeletion = clone $this->collCargoadmisions;
                $this->cargoadmisionsScheduledForDeletion->clear();
            }
            $this->cargoadmisionsScheduledForDeletion[]= clone $cargoadmision;
            $cargoadmision->setAdmision(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Admision is new, it will return
     * an empty collection; or if this Admision has previously
     * been saved, it will retrieve related Cargoadmisions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Admision.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cargoadmision[] List of Cargoadmision objects
     */
    public function getCargoadmisionsJoinLugarinventario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CargoadmisionQuery::create(null, $criteria);
        $query->joinWith('Lugarinventario', $join_behavior);

        return $this->getCargoadmisions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Admision is new, it will return
     * an empty collection; or if this Admision has previously
     * been saved, it will retrieve related Cargoadmisions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Admision.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cargoadmision[] List of Cargoadmision objects
     */
    public function getCargoadmisionsJoinServicio($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CargoadmisionQuery::create(null, $criteria);
        $query->joinWith('Servicio', $join_behavior);

        return $this->getCargoadmisions($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idadmision = null;
        $this->idpaciente = null;
        $this->idmedico = null;
        $this->idcuarto = null;
        $this->admision_fechaadmision = null;
        $this->admision_fechasalida = null;
        $this->admision_diagnostico = null;
        $this->admision_observaciones = null;
        $this->admision_status = null;
        $this->admision_total = null;
        $this->admision_pagadaen = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
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
            if ($this->collAdmisionanticipos) {
                foreach ($this->collAdmisionanticipos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCargoadmisions) {
                foreach ($this->collCargoadmisions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCuarto instanceof Persistent) {
              $this->aCuarto->clearAllReferences($deep);
            }
            if ($this->aMedico instanceof Persistent) {
              $this->aMedico->clearAllReferences($deep);
            }
            if ($this->aPaciente instanceof Persistent) {
              $this->aPaciente->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collAdmisionanticipos instanceof PropelCollection) {
            $this->collAdmisionanticipos->clearIterator();
        }
        $this->collAdmisionanticipos = null;
        if ($this->collCargoadmisions instanceof PropelCollection) {
            $this->collCargoadmisions->clearIterator();
        }
        $this->collCargoadmisions = null;
        $this->aCuarto = null;
        $this->aMedico = null;
        $this->aPaciente = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AdmisionPeer::DEFAULT_STRING_FORMAT);
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
