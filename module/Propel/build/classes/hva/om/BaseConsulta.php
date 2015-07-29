<?php


/**
 * Base class that represents a row from the 'consulta' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseConsulta extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ConsultaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ConsultaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idconsulta field.
     * @var        int
     */
    protected $idconsulta;

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
     * The value for the idconsultorio field.
     * @var        int
     */
    protected $idconsultorio;

    /**
     * The value for the consulta_fecha field.
     * @var        string
     */
    protected $consulta_fecha;

    /**
     * The value for the consulta_hora field.
     * @var        string
     */
    protected $consulta_hora;

    /**
     * The value for the consulta_diagnostico field.
     * @var        string
     */
    protected $consulta_diagnostico;

    /**
     * The value for the consulta_observaciones field.
     * @var        string
     */
    protected $consulta_observaciones;

    /**
     * The value for the consulta_status field.
     * Note: this column has a database default value of: 'pendiente'
     * @var        string
     */
    protected $consulta_status;

    /**
     * The value for the consulta_total field.
     * @var        string
     */
    protected $consulta_total;

    /**
     * The value for the consulta_tipodepago field.
     * @var        string
     */
    protected $consulta_tipodepago;

    /**
     * The value for the consulta_referenciapago field.
     * @var        string
     */
    protected $consulta_referenciapago;

    /**
     * The value for the consulta_facturada field.
     * @var        boolean
     */
    protected $consulta_facturada;

    /**
     * The value for the consulta_registrada field.
     * @var        boolean
     */
    protected $consulta_registrada;

    /**
     * @var        Consultorio
     */
    protected $aConsultorio;

    /**
     * @var        Medico
     */
    protected $aMedico;

    /**
     * @var        Paciente
     */
    protected $aPaciente;

    /**
     * @var        PropelObjectCollection|Cargoconsulta[] Collection to store aggregation of Cargoconsulta objects.
     */
    protected $collCargoconsultas;
    protected $collCargoconsultasPartial;

    /**
     * @var        PropelObjectCollection|Consultaanticipo[] Collection to store aggregation of Consultaanticipo objects.
     */
    protected $collConsultaanticipos;
    protected $collConsultaanticiposPartial;

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
    protected $cargoconsultasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $consultaanticiposScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $facturasScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->consulta_status = 'pendiente';
    }

    /**
     * Initializes internal state of BaseConsulta object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [idconsulta] column value.
     *
     * @return int
     */
    public function getIdconsulta()
    {

        return $this->idconsulta;
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
     * Get the [idconsultorio] column value.
     *
     * @return int
     */
    public function getIdconsultorio()
    {

        return $this->idconsultorio;
    }

    /**
     * Get the [optionally formatted] temporal [consulta_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getConsultaFecha($format = '%x')
    {
        if ($this->consulta_fecha === null) {
            return null;
        }

        if ($this->consulta_fecha === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->consulta_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->consulta_fecha, true), $x);
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
     * Get the [optionally formatted] temporal [consulta_hora] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getConsultaHora($format = '%X')
    {
        if ($this->consulta_hora === null) {
            return null;
        }


        try {
            $dt = new DateTime($this->consulta_hora);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->consulta_hora, true), $x);
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
     * Get the [consulta_diagnostico] column value.
     *
     * @return string
     */
    public function getConsultaDiagnostico()
    {

        return $this->consulta_diagnostico;
    }

    /**
     * Get the [consulta_observaciones] column value.
     *
     * @return string
     */
    public function getConsultaObservaciones()
    {

        return $this->consulta_observaciones;
    }

    /**
     * Get the [consulta_status] column value.
     *
     * @return string
     */
    public function getConsultaStatus()
    {

        return $this->consulta_status;
    }

    /**
     * Get the [consulta_total] column value.
     *
     * @return string
     */
    public function getConsultaTotal()
    {

        return $this->consulta_total;
    }

    /**
     * Get the [consulta_tipodepago] column value.
     *
     * @return string
     */
    public function getConsultaTipodepago()
    {

        return $this->consulta_tipodepago;
    }

    /**
     * Get the [consulta_referenciapago] column value.
     *
     * @return string
     */
    public function getConsultaReferenciapago()
    {

        return $this->consulta_referenciapago;
    }

    /**
     * Get the [consulta_facturada] column value.
     *
     * @return boolean
     */
    public function getConsultaFacturada()
    {

        return $this->consulta_facturada;
    }

    /**
     * Get the [consulta_registrada] column value.
     *
     * @return boolean
     */
    public function getConsultaRegistrada()
    {

        return $this->consulta_registrada;
    }

    /**
     * Set the value of [idconsulta] column.
     *
     * @param  int $v new value
     * @return Consulta The current object (for fluent API support)
     */
    public function setIdconsulta($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idconsulta !== $v) {
            $this->idconsulta = $v;
            $this->modifiedColumns[] = ConsultaPeer::IDCONSULTA;
        }


        return $this;
    } // setIdconsulta()

    /**
     * Set the value of [idpaciente] column.
     *
     * @param  int $v new value
     * @return Consulta The current object (for fluent API support)
     */
    public function setIdpaciente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpaciente !== $v) {
            $this->idpaciente = $v;
            $this->modifiedColumns[] = ConsultaPeer::IDPACIENTE;
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
     * @return Consulta The current object (for fluent API support)
     */
    public function setIdmedico($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idmedico !== $v) {
            $this->idmedico = $v;
            $this->modifiedColumns[] = ConsultaPeer::IDMEDICO;
        }

        if ($this->aMedico !== null && $this->aMedico->getIdmedico() !== $v) {
            $this->aMedico = null;
        }


        return $this;
    } // setIdmedico()

    /**
     * Set the value of [idconsultorio] column.
     *
     * @param  int $v new value
     * @return Consulta The current object (for fluent API support)
     */
    public function setIdconsultorio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idconsultorio !== $v) {
            $this->idconsultorio = $v;
            $this->modifiedColumns[] = ConsultaPeer::IDCONSULTORIO;
        }

        if ($this->aConsultorio !== null && $this->aConsultorio->getIdconsultorio() !== $v) {
            $this->aConsultorio = null;
        }


        return $this;
    } // setIdconsultorio()

    /**
     * Sets the value of [consulta_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Consulta The current object (for fluent API support)
     */
    public function setConsultaFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->consulta_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->consulta_fecha !== null && $tmpDt = new DateTime($this->consulta_fecha)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->consulta_fecha = $newDateAsString;
                $this->modifiedColumns[] = ConsultaPeer::CONSULTA_FECHA;
            }
        } // if either are not null


        return $this;
    } // setConsultaFecha()

    /**
     * Sets the value of [consulta_hora] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Consulta The current object (for fluent API support)
     */
    public function setConsultaHora($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->consulta_hora !== null || $dt !== null) {
            $currentDateAsString = ($this->consulta_hora !== null && $tmpDt = new DateTime($this->consulta_hora)) ? $tmpDt->format('H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->consulta_hora = $newDateAsString;
                $this->modifiedColumns[] = ConsultaPeer::CONSULTA_HORA;
            }
        } // if either are not null


        return $this;
    } // setConsultaHora()

    /**
     * Set the value of [consulta_diagnostico] column.
     *
     * @param  string $v new value
     * @return Consulta The current object (for fluent API support)
     */
    public function setConsultaDiagnostico($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->consulta_diagnostico !== $v) {
            $this->consulta_diagnostico = $v;
            $this->modifiedColumns[] = ConsultaPeer::CONSULTA_DIAGNOSTICO;
        }


        return $this;
    } // setConsultaDiagnostico()

    /**
     * Set the value of [consulta_observaciones] column.
     *
     * @param  string $v new value
     * @return Consulta The current object (for fluent API support)
     */
    public function setConsultaObservaciones($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->consulta_observaciones !== $v) {
            $this->consulta_observaciones = $v;
            $this->modifiedColumns[] = ConsultaPeer::CONSULTA_OBSERVACIONES;
        }


        return $this;
    } // setConsultaObservaciones()

    /**
     * Set the value of [consulta_status] column.
     *
     * @param  string $v new value
     * @return Consulta The current object (for fluent API support)
     */
    public function setConsultaStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->consulta_status !== $v) {
            $this->consulta_status = $v;
            $this->modifiedColumns[] = ConsultaPeer::CONSULTA_STATUS;
        }


        return $this;
    } // setConsultaStatus()

    /**
     * Set the value of [consulta_total] column.
     *
     * @param  string $v new value
     * @return Consulta The current object (for fluent API support)
     */
    public function setConsultaTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consulta_total !== $v) {
            $this->consulta_total = $v;
            $this->modifiedColumns[] = ConsultaPeer::CONSULTA_TOTAL;
        }


        return $this;
    } // setConsultaTotal()

    /**
     * Set the value of [consulta_tipodepago] column.
     *
     * @param  string $v new value
     * @return Consulta The current object (for fluent API support)
     */
    public function setConsultaTipodepago($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->consulta_tipodepago !== $v) {
            $this->consulta_tipodepago = $v;
            $this->modifiedColumns[] = ConsultaPeer::CONSULTA_TIPODEPAGO;
        }


        return $this;
    } // setConsultaTipodepago()

    /**
     * Set the value of [consulta_referenciapago] column.
     *
     * @param  string $v new value
     * @return Consulta The current object (for fluent API support)
     */
    public function setConsultaReferenciapago($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->consulta_referenciapago !== $v) {
            $this->consulta_referenciapago = $v;
            $this->modifiedColumns[] = ConsultaPeer::CONSULTA_REFERENCIAPAGO;
        }


        return $this;
    } // setConsultaReferenciapago()

    /**
     * Sets the value of the [consulta_facturada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Consulta The current object (for fluent API support)
     */
    public function setConsultaFacturada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->consulta_facturada !== $v) {
            $this->consulta_facturada = $v;
            $this->modifiedColumns[] = ConsultaPeer::CONSULTA_FACTURADA;
        }


        return $this;
    } // setConsultaFacturada()

    /**
     * Sets the value of the [consulta_registrada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Consulta The current object (for fluent API support)
     */
    public function setConsultaRegistrada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->consulta_registrada !== $v) {
            $this->consulta_registrada = $v;
            $this->modifiedColumns[] = ConsultaPeer::CONSULTA_REGISTRADA;
        }


        return $this;
    } // setConsultaRegistrada()

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
            if ($this->consulta_status !== 'pendiente') {
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

            $this->idconsulta = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idpaciente = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idmedico = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idconsultorio = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->consulta_fecha = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->consulta_hora = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->consulta_diagnostico = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->consulta_observaciones = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->consulta_status = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->consulta_total = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->consulta_tipodepago = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->consulta_referenciapago = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->consulta_facturada = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
            $this->consulta_registrada = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = ConsultaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Consulta object", $e);
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
        if ($this->aConsultorio !== null && $this->idconsultorio !== $this->aConsultorio->getIdconsultorio()) {
            $this->aConsultorio = null;
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
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ConsultaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aConsultorio = null;
            $this->aMedico = null;
            $this->aPaciente = null;
            $this->collCargoconsultas = null;

            $this->collConsultaanticipos = null;

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
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ConsultaQuery::create()
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
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ConsultaPeer::addInstanceToPool($this);
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

            if ($this->aConsultorio !== null) {
                if ($this->aConsultorio->isModified() || $this->aConsultorio->isNew()) {
                    $affectedRows += $this->aConsultorio->save($con);
                }
                $this->setConsultorio($this->aConsultorio);
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

            if ($this->cargoconsultasScheduledForDeletion !== null) {
                if (!$this->cargoconsultasScheduledForDeletion->isEmpty()) {
                    CargoconsultaQuery::create()
                        ->filterByPrimaryKeys($this->cargoconsultasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->cargoconsultasScheduledForDeletion = null;
                }
            }

            if ($this->collCargoconsultas !== null) {
                foreach ($this->collCargoconsultas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->consultaanticiposScheduledForDeletion !== null) {
                if (!$this->consultaanticiposScheduledForDeletion->isEmpty()) {
                    ConsultaanticipoQuery::create()
                        ->filterByPrimaryKeys($this->consultaanticiposScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->consultaanticiposScheduledForDeletion = null;
                }
            }

            if ($this->collConsultaanticipos !== null) {
                foreach ($this->collConsultaanticipos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = ConsultaPeer::IDCONSULTA;
        if (null !== $this->idconsulta) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ConsultaPeer::IDCONSULTA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ConsultaPeer::IDCONSULTA)) {
            $modifiedColumns[':p' . $index++]  = '`idconsulta`';
        }
        if ($this->isColumnModified(ConsultaPeer::IDPACIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idpaciente`';
        }
        if ($this->isColumnModified(ConsultaPeer::IDMEDICO)) {
            $modifiedColumns[':p' . $index++]  = '`idmedico`';
        }
        if ($this->isColumnModified(ConsultaPeer::IDCONSULTORIO)) {
            $modifiedColumns[':p' . $index++]  = '`idconsultorio`';
        }
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`consulta_fecha`';
        }
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_HORA)) {
            $modifiedColumns[':p' . $index++]  = '`consulta_hora`';
        }
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_DIAGNOSTICO)) {
            $modifiedColumns[':p' . $index++]  = '`consulta_diagnostico`';
        }
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_OBSERVACIONES)) {
            $modifiedColumns[':p' . $index++]  = '`consulta_observaciones`';
        }
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`consulta_status`';
        }
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`consulta_total`';
        }
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_TIPODEPAGO)) {
            $modifiedColumns[':p' . $index++]  = '`consulta_tipodepago`';
        }
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_REFERENCIAPAGO)) {
            $modifiedColumns[':p' . $index++]  = '`consulta_referenciapago`';
        }
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_FACTURADA)) {
            $modifiedColumns[':p' . $index++]  = '`consulta_facturada`';
        }
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_REGISTRADA)) {
            $modifiedColumns[':p' . $index++]  = '`consulta_registrada`';
        }

        $sql = sprintf(
            'INSERT INTO `consulta` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idconsulta`':
                        $stmt->bindValue($identifier, $this->idconsulta, PDO::PARAM_INT);
                        break;
                    case '`idpaciente`':
                        $stmt->bindValue($identifier, $this->idpaciente, PDO::PARAM_INT);
                        break;
                    case '`idmedico`':
                        $stmt->bindValue($identifier, $this->idmedico, PDO::PARAM_INT);
                        break;
                    case '`idconsultorio`':
                        $stmt->bindValue($identifier, $this->idconsultorio, PDO::PARAM_INT);
                        break;
                    case '`consulta_fecha`':
                        $stmt->bindValue($identifier, $this->consulta_fecha, PDO::PARAM_STR);
                        break;
                    case '`consulta_hora`':
                        $stmt->bindValue($identifier, $this->consulta_hora, PDO::PARAM_STR);
                        break;
                    case '`consulta_diagnostico`':
                        $stmt->bindValue($identifier, $this->consulta_diagnostico, PDO::PARAM_STR);
                        break;
                    case '`consulta_observaciones`':
                        $stmt->bindValue($identifier, $this->consulta_observaciones, PDO::PARAM_STR);
                        break;
                    case '`consulta_status`':
                        $stmt->bindValue($identifier, $this->consulta_status, PDO::PARAM_STR);
                        break;
                    case '`consulta_total`':
                        $stmt->bindValue($identifier, $this->consulta_total, PDO::PARAM_STR);
                        break;
                    case '`consulta_tipodepago`':
                        $stmt->bindValue($identifier, $this->consulta_tipodepago, PDO::PARAM_STR);
                        break;
                    case '`consulta_referenciapago`':
                        $stmt->bindValue($identifier, $this->consulta_referenciapago, PDO::PARAM_STR);
                        break;
                    case '`consulta_facturada`':
                        $stmt->bindValue($identifier, (int) $this->consulta_facturada, PDO::PARAM_INT);
                        break;
                    case '`consulta_registrada`':
                        $stmt->bindValue($identifier, (int) $this->consulta_registrada, PDO::PARAM_INT);
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
        $this->setIdconsulta($pk);

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

            if ($this->aConsultorio !== null) {
                if (!$this->aConsultorio->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aConsultorio->getValidationFailures());
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


            if (($retval = ConsultaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCargoconsultas !== null) {
                    foreach ($this->collCargoconsultas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collConsultaanticipos !== null) {
                    foreach ($this->collConsultaanticipos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = ConsultaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdconsulta();
                break;
            case 1:
                return $this->getIdpaciente();
                break;
            case 2:
                return $this->getIdmedico();
                break;
            case 3:
                return $this->getIdconsultorio();
                break;
            case 4:
                return $this->getConsultaFecha();
                break;
            case 5:
                return $this->getConsultaHora();
                break;
            case 6:
                return $this->getConsultaDiagnostico();
                break;
            case 7:
                return $this->getConsultaObservaciones();
                break;
            case 8:
                return $this->getConsultaStatus();
                break;
            case 9:
                return $this->getConsultaTotal();
                break;
            case 10:
                return $this->getConsultaTipodepago();
                break;
            case 11:
                return $this->getConsultaReferenciapago();
                break;
            case 12:
                return $this->getConsultaFacturada();
                break;
            case 13:
                return $this->getConsultaRegistrada();
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
        if (isset($alreadyDumpedObjects['Consulta'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Consulta'][$this->getPrimaryKey()] = true;
        $keys = ConsultaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdconsulta(),
            $keys[1] => $this->getIdpaciente(),
            $keys[2] => $this->getIdmedico(),
            $keys[3] => $this->getIdconsultorio(),
            $keys[4] => $this->getConsultaFecha(),
            $keys[5] => $this->getConsultaHora(),
            $keys[6] => $this->getConsultaDiagnostico(),
            $keys[7] => $this->getConsultaObservaciones(),
            $keys[8] => $this->getConsultaStatus(),
            $keys[9] => $this->getConsultaTotal(),
            $keys[10] => $this->getConsultaTipodepago(),
            $keys[11] => $this->getConsultaReferenciapago(),
            $keys[12] => $this->getConsultaFacturada(),
            $keys[13] => $this->getConsultaRegistrada(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aConsultorio) {
                $result['Consultorio'] = $this->aConsultorio->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aMedico) {
                $result['Medico'] = $this->aMedico->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPaciente) {
                $result['Paciente'] = $this->aPaciente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCargoconsultas) {
                $result['Cargoconsultas'] = $this->collCargoconsultas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collConsultaanticipos) {
                $result['Consultaanticipos'] = $this->collConsultaanticipos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ConsultaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdconsulta($value);
                break;
            case 1:
                $this->setIdpaciente($value);
                break;
            case 2:
                $this->setIdmedico($value);
                break;
            case 3:
                $this->setIdconsultorio($value);
                break;
            case 4:
                $this->setConsultaFecha($value);
                break;
            case 5:
                $this->setConsultaHora($value);
                break;
            case 6:
                $this->setConsultaDiagnostico($value);
                break;
            case 7:
                $this->setConsultaObservaciones($value);
                break;
            case 8:
                $this->setConsultaStatus($value);
                break;
            case 9:
                $this->setConsultaTotal($value);
                break;
            case 10:
                $this->setConsultaTipodepago($value);
                break;
            case 11:
                $this->setConsultaReferenciapago($value);
                break;
            case 12:
                $this->setConsultaFacturada($value);
                break;
            case 13:
                $this->setConsultaRegistrada($value);
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
        $keys = ConsultaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdconsulta($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdpaciente($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdmedico($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdconsultorio($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setConsultaFecha($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setConsultaHora($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setConsultaDiagnostico($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setConsultaObservaciones($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setConsultaStatus($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setConsultaTotal($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setConsultaTipodepago($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setConsultaReferenciapago($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setConsultaFacturada($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setConsultaRegistrada($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ConsultaPeer::DATABASE_NAME);

        if ($this->isColumnModified(ConsultaPeer::IDCONSULTA)) $criteria->add(ConsultaPeer::IDCONSULTA, $this->idconsulta);
        if ($this->isColumnModified(ConsultaPeer::IDPACIENTE)) $criteria->add(ConsultaPeer::IDPACIENTE, $this->idpaciente);
        if ($this->isColumnModified(ConsultaPeer::IDMEDICO)) $criteria->add(ConsultaPeer::IDMEDICO, $this->idmedico);
        if ($this->isColumnModified(ConsultaPeer::IDCONSULTORIO)) $criteria->add(ConsultaPeer::IDCONSULTORIO, $this->idconsultorio);
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_FECHA)) $criteria->add(ConsultaPeer::CONSULTA_FECHA, $this->consulta_fecha);
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_HORA)) $criteria->add(ConsultaPeer::CONSULTA_HORA, $this->consulta_hora);
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_DIAGNOSTICO)) $criteria->add(ConsultaPeer::CONSULTA_DIAGNOSTICO, $this->consulta_diagnostico);
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_OBSERVACIONES)) $criteria->add(ConsultaPeer::CONSULTA_OBSERVACIONES, $this->consulta_observaciones);
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_STATUS)) $criteria->add(ConsultaPeer::CONSULTA_STATUS, $this->consulta_status);
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_TOTAL)) $criteria->add(ConsultaPeer::CONSULTA_TOTAL, $this->consulta_total);
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_TIPODEPAGO)) $criteria->add(ConsultaPeer::CONSULTA_TIPODEPAGO, $this->consulta_tipodepago);
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_REFERENCIAPAGO)) $criteria->add(ConsultaPeer::CONSULTA_REFERENCIAPAGO, $this->consulta_referenciapago);
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_FACTURADA)) $criteria->add(ConsultaPeer::CONSULTA_FACTURADA, $this->consulta_facturada);
        if ($this->isColumnModified(ConsultaPeer::CONSULTA_REGISTRADA)) $criteria->add(ConsultaPeer::CONSULTA_REGISTRADA, $this->consulta_registrada);

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
        $criteria = new Criteria(ConsultaPeer::DATABASE_NAME);
        $criteria->add(ConsultaPeer::IDCONSULTA, $this->idconsulta);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdconsulta();
    }

    /**
     * Generic method to set the primary key (idconsulta column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdconsulta($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdconsulta();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Consulta (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdpaciente($this->getIdpaciente());
        $copyObj->setIdmedico($this->getIdmedico());
        $copyObj->setIdconsultorio($this->getIdconsultorio());
        $copyObj->setConsultaFecha($this->getConsultaFecha());
        $copyObj->setConsultaHora($this->getConsultaHora());
        $copyObj->setConsultaDiagnostico($this->getConsultaDiagnostico());
        $copyObj->setConsultaObservaciones($this->getConsultaObservaciones());
        $copyObj->setConsultaStatus($this->getConsultaStatus());
        $copyObj->setConsultaTotal($this->getConsultaTotal());
        $copyObj->setConsultaTipodepago($this->getConsultaTipodepago());
        $copyObj->setConsultaReferenciapago($this->getConsultaReferenciapago());
        $copyObj->setConsultaFacturada($this->getConsultaFacturada());
        $copyObj->setConsultaRegistrada($this->getConsultaRegistrada());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCargoconsultas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCargoconsulta($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getConsultaanticipos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addConsultaanticipo($relObj->copy($deepCopy));
                }
            }

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
            $copyObj->setIdconsulta(NULL); // this is a auto-increment column, so set to default value
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
     * @return Consulta Clone of current object.
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
     * @return ConsultaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ConsultaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Consultorio object.
     *
     * @param                  Consultorio $v
     * @return Consulta The current object (for fluent API support)
     * @throws PropelException
     */
    public function setConsultorio(Consultorio $v = null)
    {
        if ($v === null) {
            $this->setIdconsultorio(NULL);
        } else {
            $this->setIdconsultorio($v->getIdconsultorio());
        }

        $this->aConsultorio = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Consultorio object, it will not be re-added.
        if ($v !== null) {
            $v->addConsulta($this);
        }


        return $this;
    }


    /**
     * Get the associated Consultorio object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Consultorio The associated Consultorio object.
     * @throws PropelException
     */
    public function getConsultorio(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aConsultorio === null && ($this->idconsultorio !== null) && $doQuery) {
            $this->aConsultorio = ConsultorioQuery::create()->findPk($this->idconsultorio, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aConsultorio->addConsultas($this);
             */
        }

        return $this->aConsultorio;
    }

    /**
     * Declares an association between this object and a Medico object.
     *
     * @param                  Medico $v
     * @return Consulta The current object (for fluent API support)
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
            $v->addConsulta($this);
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
                $this->aMedico->addConsultas($this);
             */
        }

        return $this->aMedico;
    }

    /**
     * Declares an association between this object and a Paciente object.
     *
     * @param                  Paciente $v
     * @return Consulta The current object (for fluent API support)
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
            $v->addConsulta($this);
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
                $this->aPaciente->addConsultas($this);
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
        if ('Cargoconsulta' == $relationName) {
            $this->initCargoconsultas();
        }
        if ('Consultaanticipo' == $relationName) {
            $this->initConsultaanticipos();
        }
        if ('Factura' == $relationName) {
            $this->initFacturas();
        }
    }

    /**
     * Clears out the collCargoconsultas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Consulta The current object (for fluent API support)
     * @see        addCargoconsultas()
     */
    public function clearCargoconsultas()
    {
        $this->collCargoconsultas = null; // important to set this to null since that means it is uninitialized
        $this->collCargoconsultasPartial = null;

        return $this;
    }

    /**
     * reset is the collCargoconsultas collection loaded partially
     *
     * @return void
     */
    public function resetPartialCargoconsultas($v = true)
    {
        $this->collCargoconsultasPartial = $v;
    }

    /**
     * Initializes the collCargoconsultas collection.
     *
     * By default this just sets the collCargoconsultas collection to an empty array (like clearcollCargoconsultas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCargoconsultas($overrideExisting = true)
    {
        if (null !== $this->collCargoconsultas && !$overrideExisting) {
            return;
        }
        $this->collCargoconsultas = new PropelObjectCollection();
        $this->collCargoconsultas->setModel('Cargoconsulta');
    }

    /**
     * Gets an array of Cargoconsulta objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Consulta is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Cargoconsulta[] List of Cargoconsulta objects
     * @throws PropelException
     */
    public function getCargoconsultas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCargoconsultasPartial && !$this->isNew();
        if (null === $this->collCargoconsultas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCargoconsultas) {
                // return empty collection
                $this->initCargoconsultas();
            } else {
                $collCargoconsultas = CargoconsultaQuery::create(null, $criteria)
                    ->filterByConsulta($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCargoconsultasPartial && count($collCargoconsultas)) {
                      $this->initCargoconsultas(false);

                      foreach ($collCargoconsultas as $obj) {
                        if (false == $this->collCargoconsultas->contains($obj)) {
                          $this->collCargoconsultas->append($obj);
                        }
                      }

                      $this->collCargoconsultasPartial = true;
                    }

                    $collCargoconsultas->getInternalIterator()->rewind();

                    return $collCargoconsultas;
                }

                if ($partial && $this->collCargoconsultas) {
                    foreach ($this->collCargoconsultas as $obj) {
                        if ($obj->isNew()) {
                            $collCargoconsultas[] = $obj;
                        }
                    }
                }

                $this->collCargoconsultas = $collCargoconsultas;
                $this->collCargoconsultasPartial = false;
            }
        }

        return $this->collCargoconsultas;
    }

    /**
     * Sets a collection of Cargoconsulta objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $cargoconsultas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Consulta The current object (for fluent API support)
     */
    public function setCargoconsultas(PropelCollection $cargoconsultas, PropelPDO $con = null)
    {
        $cargoconsultasToDelete = $this->getCargoconsultas(new Criteria(), $con)->diff($cargoconsultas);


        $this->cargoconsultasScheduledForDeletion = $cargoconsultasToDelete;

        foreach ($cargoconsultasToDelete as $cargoconsultaRemoved) {
            $cargoconsultaRemoved->setConsulta(null);
        }

        $this->collCargoconsultas = null;
        foreach ($cargoconsultas as $cargoconsulta) {
            $this->addCargoconsulta($cargoconsulta);
        }

        $this->collCargoconsultas = $cargoconsultas;
        $this->collCargoconsultasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Cargoconsulta objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Cargoconsulta objects.
     * @throws PropelException
     */
    public function countCargoconsultas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCargoconsultasPartial && !$this->isNew();
        if (null === $this->collCargoconsultas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCargoconsultas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCargoconsultas());
            }
            $query = CargoconsultaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByConsulta($this)
                ->count($con);
        }

        return count($this->collCargoconsultas);
    }

    /**
     * Method called to associate a Cargoconsulta object to this object
     * through the Cargoconsulta foreign key attribute.
     *
     * @param    Cargoconsulta $l Cargoconsulta
     * @return Consulta The current object (for fluent API support)
     */
    public function addCargoconsulta(Cargoconsulta $l)
    {
        if ($this->collCargoconsultas === null) {
            $this->initCargoconsultas();
            $this->collCargoconsultasPartial = true;
        }

        if (!in_array($l, $this->collCargoconsultas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCargoconsulta($l);

            if ($this->cargoconsultasScheduledForDeletion and $this->cargoconsultasScheduledForDeletion->contains($l)) {
                $this->cargoconsultasScheduledForDeletion->remove($this->cargoconsultasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Cargoconsulta $cargoconsulta The cargoconsulta object to add.
     */
    protected function doAddCargoconsulta($cargoconsulta)
    {
        $this->collCargoconsultas[]= $cargoconsulta;
        $cargoconsulta->setConsulta($this);
    }

    /**
     * @param	Cargoconsulta $cargoconsulta The cargoconsulta object to remove.
     * @return Consulta The current object (for fluent API support)
     */
    public function removeCargoconsulta($cargoconsulta)
    {
        if ($this->getCargoconsultas()->contains($cargoconsulta)) {
            $this->collCargoconsultas->remove($this->collCargoconsultas->search($cargoconsulta));
            if (null === $this->cargoconsultasScheduledForDeletion) {
                $this->cargoconsultasScheduledForDeletion = clone $this->collCargoconsultas;
                $this->cargoconsultasScheduledForDeletion->clear();
            }
            $this->cargoconsultasScheduledForDeletion[]= clone $cargoconsulta;
            $cargoconsulta->setConsulta(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Consulta is new, it will return
     * an empty collection; or if this Consulta has previously
     * been saved, it will retrieve related Cargoconsultas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Consulta.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cargoconsulta[] List of Cargoconsulta objects
     */
    public function getCargoconsultasJoinLugarinventario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CargoconsultaQuery::create(null, $criteria);
        $query->joinWith('Lugarinventario', $join_behavior);

        return $this->getCargoconsultas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Consulta is new, it will return
     * an empty collection; or if this Consulta has previously
     * been saved, it will retrieve related Cargoconsultas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Consulta.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cargoconsulta[] List of Cargoconsulta objects
     */
    public function getCargoconsultasJoinServicio($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CargoconsultaQuery::create(null, $criteria);
        $query->joinWith('Servicio', $join_behavior);

        return $this->getCargoconsultas($query, $con);
    }

    /**
     * Clears out the collConsultaanticipos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Consulta The current object (for fluent API support)
     * @see        addConsultaanticipos()
     */
    public function clearConsultaanticipos()
    {
        $this->collConsultaanticipos = null; // important to set this to null since that means it is uninitialized
        $this->collConsultaanticiposPartial = null;

        return $this;
    }

    /**
     * reset is the collConsultaanticipos collection loaded partially
     *
     * @return void
     */
    public function resetPartialConsultaanticipos($v = true)
    {
        $this->collConsultaanticiposPartial = $v;
    }

    /**
     * Initializes the collConsultaanticipos collection.
     *
     * By default this just sets the collConsultaanticipos collection to an empty array (like clearcollConsultaanticipos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initConsultaanticipos($overrideExisting = true)
    {
        if (null !== $this->collConsultaanticipos && !$overrideExisting) {
            return;
        }
        $this->collConsultaanticipos = new PropelObjectCollection();
        $this->collConsultaanticipos->setModel('Consultaanticipo');
    }

    /**
     * Gets an array of Consultaanticipo objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Consulta is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Consultaanticipo[] List of Consultaanticipo objects
     * @throws PropelException
     */
    public function getConsultaanticipos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collConsultaanticiposPartial && !$this->isNew();
        if (null === $this->collConsultaanticipos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collConsultaanticipos) {
                // return empty collection
                $this->initConsultaanticipos();
            } else {
                $collConsultaanticipos = ConsultaanticipoQuery::create(null, $criteria)
                    ->filterByConsulta($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collConsultaanticiposPartial && count($collConsultaanticipos)) {
                      $this->initConsultaanticipos(false);

                      foreach ($collConsultaanticipos as $obj) {
                        if (false == $this->collConsultaanticipos->contains($obj)) {
                          $this->collConsultaanticipos->append($obj);
                        }
                      }

                      $this->collConsultaanticiposPartial = true;
                    }

                    $collConsultaanticipos->getInternalIterator()->rewind();

                    return $collConsultaanticipos;
                }

                if ($partial && $this->collConsultaanticipos) {
                    foreach ($this->collConsultaanticipos as $obj) {
                        if ($obj->isNew()) {
                            $collConsultaanticipos[] = $obj;
                        }
                    }
                }

                $this->collConsultaanticipos = $collConsultaanticipos;
                $this->collConsultaanticiposPartial = false;
            }
        }

        return $this->collConsultaanticipos;
    }

    /**
     * Sets a collection of Consultaanticipo objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $consultaanticipos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Consulta The current object (for fluent API support)
     */
    public function setConsultaanticipos(PropelCollection $consultaanticipos, PropelPDO $con = null)
    {
        $consultaanticiposToDelete = $this->getConsultaanticipos(new Criteria(), $con)->diff($consultaanticipos);


        $this->consultaanticiposScheduledForDeletion = $consultaanticiposToDelete;

        foreach ($consultaanticiposToDelete as $consultaanticipoRemoved) {
            $consultaanticipoRemoved->setConsulta(null);
        }

        $this->collConsultaanticipos = null;
        foreach ($consultaanticipos as $consultaanticipo) {
            $this->addConsultaanticipo($consultaanticipo);
        }

        $this->collConsultaanticipos = $consultaanticipos;
        $this->collConsultaanticiposPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Consultaanticipo objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Consultaanticipo objects.
     * @throws PropelException
     */
    public function countConsultaanticipos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collConsultaanticiposPartial && !$this->isNew();
        if (null === $this->collConsultaanticipos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collConsultaanticipos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getConsultaanticipos());
            }
            $query = ConsultaanticipoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByConsulta($this)
                ->count($con);
        }

        return count($this->collConsultaanticipos);
    }

    /**
     * Method called to associate a Consultaanticipo object to this object
     * through the Consultaanticipo foreign key attribute.
     *
     * @param    Consultaanticipo $l Consultaanticipo
     * @return Consulta The current object (for fluent API support)
     */
    public function addConsultaanticipo(Consultaanticipo $l)
    {
        if ($this->collConsultaanticipos === null) {
            $this->initConsultaanticipos();
            $this->collConsultaanticiposPartial = true;
        }

        if (!in_array($l, $this->collConsultaanticipos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddConsultaanticipo($l);

            if ($this->consultaanticiposScheduledForDeletion and $this->consultaanticiposScheduledForDeletion->contains($l)) {
                $this->consultaanticiposScheduledForDeletion->remove($this->consultaanticiposScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Consultaanticipo $consultaanticipo The consultaanticipo object to add.
     */
    protected function doAddConsultaanticipo($consultaanticipo)
    {
        $this->collConsultaanticipos[]= $consultaanticipo;
        $consultaanticipo->setConsulta($this);
    }

    /**
     * @param	Consultaanticipo $consultaanticipo The consultaanticipo object to remove.
     * @return Consulta The current object (for fluent API support)
     */
    public function removeConsultaanticipo($consultaanticipo)
    {
        if ($this->getConsultaanticipos()->contains($consultaanticipo)) {
            $this->collConsultaanticipos->remove($this->collConsultaanticipos->search($consultaanticipo));
            if (null === $this->consultaanticiposScheduledForDeletion) {
                $this->consultaanticiposScheduledForDeletion = clone $this->collConsultaanticipos;
                $this->consultaanticiposScheduledForDeletion->clear();
            }
            $this->consultaanticiposScheduledForDeletion[]= clone $consultaanticipo;
            $consultaanticipo->setConsulta(null);
        }

        return $this;
    }

    /**
     * Clears out the collFacturas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Consulta The current object (for fluent API support)
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
     * If this Consulta is new, it will return
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
                    ->filterByConsulta($this)
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
     * @return Consulta The current object (for fluent API support)
     */
    public function setFacturas(PropelCollection $facturas, PropelPDO $con = null)
    {
        $facturasToDelete = $this->getFacturas(new Criteria(), $con)->diff($facturas);


        $this->facturasScheduledForDeletion = $facturasToDelete;

        foreach ($facturasToDelete as $facturaRemoved) {
            $facturaRemoved->setConsulta(null);
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
                ->filterByConsulta($this)
                ->count($con);
        }

        return count($this->collFacturas);
    }

    /**
     * Method called to associate a Factura object to this object
     * through the Factura foreign key attribute.
     *
     * @param    Factura $l Factura
     * @return Consulta The current object (for fluent API support)
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
        $factura->setConsulta($this);
    }

    /**
     * @param	Factura $factura The factura object to remove.
     * @return Consulta The current object (for fluent API support)
     */
    public function removeFactura($factura)
    {
        if ($this->getFacturas()->contains($factura)) {
            $this->collFacturas->remove($this->collFacturas->search($factura));
            if (null === $this->facturasScheduledForDeletion) {
                $this->facturasScheduledForDeletion = clone $this->collFacturas;
                $this->facturasScheduledForDeletion->clear();
            }
            $this->facturasScheduledForDeletion[]= $factura;
            $factura->setConsulta(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Consulta is new, it will return
     * an empty collection; or if this Consulta has previously
     * been saved, it will retrieve related Facturas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Consulta.
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
     * Otherwise if this Consulta is new, it will return
     * an empty collection; or if this Consulta has previously
     * been saved, it will retrieve related Facturas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Consulta.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Factura[] List of Factura objects
     */
    public function getFacturasJoinPacientefacturacion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FacturaQuery::create(null, $criteria);
        $query->joinWith('Pacientefacturacion', $join_behavior);

        return $this->getFacturas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Consulta is new, it will return
     * an empty collection; or if this Consulta has previously
     * been saved, it will retrieve related Facturas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Consulta.
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
        $this->idconsulta = null;
        $this->idpaciente = null;
        $this->idmedico = null;
        $this->idconsultorio = null;
        $this->consulta_fecha = null;
        $this->consulta_hora = null;
        $this->consulta_diagnostico = null;
        $this->consulta_observaciones = null;
        $this->consulta_status = null;
        $this->consulta_total = null;
        $this->consulta_tipodepago = null;
        $this->consulta_referenciapago = null;
        $this->consulta_facturada = null;
        $this->consulta_registrada = null;
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
            if ($this->collCargoconsultas) {
                foreach ($this->collCargoconsultas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collConsultaanticipos) {
                foreach ($this->collConsultaanticipos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collFacturas) {
                foreach ($this->collFacturas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aConsultorio instanceof Persistent) {
              $this->aConsultorio->clearAllReferences($deep);
            }
            if ($this->aMedico instanceof Persistent) {
              $this->aMedico->clearAllReferences($deep);
            }
            if ($this->aPaciente instanceof Persistent) {
              $this->aPaciente->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCargoconsultas instanceof PropelCollection) {
            $this->collCargoconsultas->clearIterator();
        }
        $this->collCargoconsultas = null;
        if ($this->collConsultaanticipos instanceof PropelCollection) {
            $this->collConsultaanticipos->clearIterator();
        }
        $this->collConsultaanticipos = null;
        if ($this->collFacturas instanceof PropelCollection) {
            $this->collFacturas->clearIterator();
        }
        $this->collFacturas = null;
        $this->aConsultorio = null;
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
        return (string) $this->exportTo(ConsultaPeer::DEFAULT_STRING_FORMAT);
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
