<?php


/**
 * Base class that represents a row from the 'factura' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseFactura extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FacturaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FacturaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idfactura field.
     * @var        int
     */
    protected $idfactura;

    /**
     * The value for the iddatosfacturacion field.
     * @var        int
     */
    protected $iddatosfacturacion;

    /**
     * The value for the idconsulta field.
     * @var        int
     */
    protected $idconsulta;

    /**
     * The value for the factura_url_xml field.
     * @var        string
     */
    protected $factura_url_xml;

    /**
     * The value for the factura_url_pdf field.
     * @var        string
     */
    protected $factura_url_pdf;

    /**
     * The value for the factura_fecha field.
     * @var        string
     */
    protected $factura_fecha;

    /**
     * The value for the factura_sellosat field.
     * @var        string
     */
    protected $factura_sellosat;

    /**
     * The value for the factura_certificadosat field.
     * @var        string
     */
    protected $factura_certificadosat;

    /**
     * The value for the factura_cadenaoriginal field.
     * @var        string
     */
    protected $factura_cadenaoriginal;

    /**
     * The value for the factura_cfdi field.
     * @var        string
     */
    protected $factura_cfdi;

    /**
     * The value for the factura_mensaje field.
     * @var        string
     */
    protected $factura_mensaje;

    /**
     * The value for the factura_qrcode field.
     * @var        string
     */
    protected $factura_qrcode;

    /**
     * The value for the factura_tipodepago field.
     * @var        string
     */
    protected $factura_tipodepago;

    /**
     * The value for the factura_status field.
     * @var        string
     */
    protected $factura_status;

    /**
     * The value for the factura_tipo field.
     * @var        string
     */
    protected $factura_tipo;

    /**
     * @var        Consulta
     */
    protected $aConsulta;

    /**
     * @var        Pacientefacturacion
     */
    protected $aPacientefacturacion;

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
     * Get the [idfactura] column value.
     *
     * @return int
     */
    public function getIdfactura()
    {

        return $this->idfactura;
    }

    /**
     * Get the [iddatosfacturacion] column value.
     *
     * @return int
     */
    public function getIddatosfacturacion()
    {

        return $this->iddatosfacturacion;
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
     * Get the [factura_url_xml] column value.
     *
     * @return string
     */
    public function getFacturaUrlXml()
    {

        return $this->factura_url_xml;
    }

    /**
     * Get the [factura_url_pdf] column value.
     *
     * @return string
     */
    public function getFacturaUrlPdf()
    {

        return $this->factura_url_pdf;
    }

    /**
     * Get the [optionally formatted] temporal [factura_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFacturaFecha($format = 'Y-m-d H:i:s')
    {
        if ($this->factura_fecha === null) {
            return null;
        }

        if ($this->factura_fecha === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->factura_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->factura_fecha, true), $x);
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
     * Get the [factura_sellosat] column value.
     *
     * @return string
     */
    public function getFacturaSellosat()
    {

        return $this->factura_sellosat;
    }

    /**
     * Get the [factura_certificadosat] column value.
     *
     * @return string
     */
    public function getFacturaCertificadosat()
    {

        return $this->factura_certificadosat;
    }

    /**
     * Get the [factura_cadenaoriginal] column value.
     *
     * @return string
     */
    public function getFacturaCadenaoriginal()
    {

        return $this->factura_cadenaoriginal;
    }

    /**
     * Get the [factura_cfdi] column value.
     *
     * @return string
     */
    public function getFacturaCfdi()
    {

        return $this->factura_cfdi;
    }

    /**
     * Get the [factura_mensaje] column value.
     *
     * @return string
     */
    public function getFacturaMensaje()
    {

        return $this->factura_mensaje;
    }

    /**
     * Get the [factura_qrcode] column value.
     *
     * @return string
     */
    public function getFacturaQrcode()
    {

        return $this->factura_qrcode;
    }

    /**
     * Get the [factura_tipodepago] column value.
     *
     * @return string
     */
    public function getFacturaTipodepago()
    {

        return $this->factura_tipodepago;
    }

    /**
     * Get the [factura_status] column value.
     *
     * @return string
     */
    public function getFacturaStatus()
    {

        return $this->factura_status;
    }

    /**
     * Get the [factura_tipo] column value.
     *
     * @return string
     */
    public function getFacturaTipo()
    {

        return $this->factura_tipo;
    }

    /**
     * Set the value of [idfactura] column.
     *
     * @param  int $v new value
     * @return Factura The current object (for fluent API support)
     */
    public function setIdfactura($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idfactura !== $v) {
            $this->idfactura = $v;
            $this->modifiedColumns[] = FacturaPeer::IDFACTURA;
        }


        return $this;
    } // setIdfactura()

    /**
     * Set the value of [iddatosfacturacion] column.
     *
     * @param  int $v new value
     * @return Factura The current object (for fluent API support)
     */
    public function setIddatosfacturacion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->iddatosfacturacion !== $v) {
            $this->iddatosfacturacion = $v;
            $this->modifiedColumns[] = FacturaPeer::IDDATOSFACTURACION;
        }

        if ($this->aPacientefacturacion !== null && $this->aPacientefacturacion->getIdpacientefacturacion() !== $v) {
            $this->aPacientefacturacion = null;
        }


        return $this;
    } // setIddatosfacturacion()

    /**
     * Set the value of [idconsulta] column.
     *
     * @param  int $v new value
     * @return Factura The current object (for fluent API support)
     */
    public function setIdconsulta($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idconsulta !== $v) {
            $this->idconsulta = $v;
            $this->modifiedColumns[] = FacturaPeer::IDCONSULTA;
        }

        if ($this->aConsulta !== null && $this->aConsulta->getIdconsulta() !== $v) {
            $this->aConsulta = null;
        }


        return $this;
    } // setIdconsulta()

    /**
     * Set the value of [factura_url_xml] column.
     *
     * @param  string $v new value
     * @return Factura The current object (for fluent API support)
     */
    public function setFacturaUrlXml($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->factura_url_xml !== $v) {
            $this->factura_url_xml = $v;
            $this->modifiedColumns[] = FacturaPeer::FACTURA_URL_XML;
        }


        return $this;
    } // setFacturaUrlXml()

    /**
     * Set the value of [factura_url_pdf] column.
     *
     * @param  string $v new value
     * @return Factura The current object (for fluent API support)
     */
    public function setFacturaUrlPdf($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->factura_url_pdf !== $v) {
            $this->factura_url_pdf = $v;
            $this->modifiedColumns[] = FacturaPeer::FACTURA_URL_PDF;
        }


        return $this;
    } // setFacturaUrlPdf()

    /**
     * Sets the value of [factura_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Factura The current object (for fluent API support)
     */
    public function setFacturaFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->factura_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->factura_fecha !== null && $tmpDt = new DateTime($this->factura_fecha)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->factura_fecha = $newDateAsString;
                $this->modifiedColumns[] = FacturaPeer::FACTURA_FECHA;
            }
        } // if either are not null


        return $this;
    } // setFacturaFecha()

    /**
     * Set the value of [factura_sellosat] column.
     *
     * @param  string $v new value
     * @return Factura The current object (for fluent API support)
     */
    public function setFacturaSellosat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->factura_sellosat !== $v) {
            $this->factura_sellosat = $v;
            $this->modifiedColumns[] = FacturaPeer::FACTURA_SELLOSAT;
        }


        return $this;
    } // setFacturaSellosat()

    /**
     * Set the value of [factura_certificadosat] column.
     *
     * @param  string $v new value
     * @return Factura The current object (for fluent API support)
     */
    public function setFacturaCertificadosat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->factura_certificadosat !== $v) {
            $this->factura_certificadosat = $v;
            $this->modifiedColumns[] = FacturaPeer::FACTURA_CERTIFICADOSAT;
        }


        return $this;
    } // setFacturaCertificadosat()

    /**
     * Set the value of [factura_cadenaoriginal] column.
     *
     * @param  string $v new value
     * @return Factura The current object (for fluent API support)
     */
    public function setFacturaCadenaoriginal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->factura_cadenaoriginal !== $v) {
            $this->factura_cadenaoriginal = $v;
            $this->modifiedColumns[] = FacturaPeer::FACTURA_CADENAORIGINAL;
        }


        return $this;
    } // setFacturaCadenaoriginal()

    /**
     * Set the value of [factura_cfdi] column.
     *
     * @param  string $v new value
     * @return Factura The current object (for fluent API support)
     */
    public function setFacturaCfdi($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->factura_cfdi !== $v) {
            $this->factura_cfdi = $v;
            $this->modifiedColumns[] = FacturaPeer::FACTURA_CFDI;
        }


        return $this;
    } // setFacturaCfdi()

    /**
     * Set the value of [factura_mensaje] column.
     *
     * @param  string $v new value
     * @return Factura The current object (for fluent API support)
     */
    public function setFacturaMensaje($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->factura_mensaje !== $v) {
            $this->factura_mensaje = $v;
            $this->modifiedColumns[] = FacturaPeer::FACTURA_MENSAJE;
        }


        return $this;
    } // setFacturaMensaje()

    /**
     * Set the value of [factura_qrcode] column.
     *
     * @param  string $v new value
     * @return Factura The current object (for fluent API support)
     */
    public function setFacturaQrcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->factura_qrcode !== $v) {
            $this->factura_qrcode = $v;
            $this->modifiedColumns[] = FacturaPeer::FACTURA_QRCODE;
        }


        return $this;
    } // setFacturaQrcode()

    /**
     * Set the value of [factura_tipodepago] column.
     *
     * @param  string $v new value
     * @return Factura The current object (for fluent API support)
     */
    public function setFacturaTipodepago($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->factura_tipodepago !== $v) {
            $this->factura_tipodepago = $v;
            $this->modifiedColumns[] = FacturaPeer::FACTURA_TIPODEPAGO;
        }


        return $this;
    } // setFacturaTipodepago()

    /**
     * Set the value of [factura_status] column.
     *
     * @param  string $v new value
     * @return Factura The current object (for fluent API support)
     */
    public function setFacturaStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->factura_status !== $v) {
            $this->factura_status = $v;
            $this->modifiedColumns[] = FacturaPeer::FACTURA_STATUS;
        }


        return $this;
    } // setFacturaStatus()

    /**
     * Set the value of [factura_tipo] column.
     *
     * @param  string $v new value
     * @return Factura The current object (for fluent API support)
     */
    public function setFacturaTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->factura_tipo !== $v) {
            $this->factura_tipo = $v;
            $this->modifiedColumns[] = FacturaPeer::FACTURA_TIPO;
        }


        return $this;
    } // setFacturaTipo()

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

            $this->idfactura = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->iddatosfacturacion = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idconsulta = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->factura_url_xml = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->factura_url_pdf = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->factura_fecha = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->factura_sellosat = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->factura_certificadosat = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->factura_cadenaoriginal = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->factura_cfdi = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->factura_mensaje = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->factura_qrcode = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->factura_tipodepago = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->factura_status = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->factura_tipo = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = FacturaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Factura object", $e);
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

        if ($this->aPacientefacturacion !== null && $this->iddatosfacturacion !== $this->aPacientefacturacion->getIdpacientefacturacion()) {
            $this->aPacientefacturacion = null;
        }
        if ($this->aConsulta !== null && $this->idconsulta !== $this->aConsulta->getIdconsulta()) {
            $this->aConsulta = null;
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
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FacturaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aConsulta = null;
            $this->aPacientefacturacion = null;
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
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FacturaQuery::create()
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
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FacturaPeer::addInstanceToPool($this);
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

            if ($this->aConsulta !== null) {
                if ($this->aConsulta->isModified() || $this->aConsulta->isNew()) {
                    $affectedRows += $this->aConsulta->save($con);
                }
                $this->setConsulta($this->aConsulta);
            }

            if ($this->aPacientefacturacion !== null) {
                if ($this->aPacientefacturacion->isModified() || $this->aPacientefacturacion->isNew()) {
                    $affectedRows += $this->aPacientefacturacion->save($con);
                }
                $this->setPacientefacturacion($this->aPacientefacturacion);
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

        $this->modifiedColumns[] = FacturaPeer::IDFACTURA;
        if (null !== $this->idfactura) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . FacturaPeer::IDFACTURA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(FacturaPeer::IDFACTURA)) {
            $modifiedColumns[':p' . $index++]  = '`idfactura`';
        }
        if ($this->isColumnModified(FacturaPeer::IDDATOSFACTURACION)) {
            $modifiedColumns[':p' . $index++]  = '`iddatosfacturacion`';
        }
        if ($this->isColumnModified(FacturaPeer::IDCONSULTA)) {
            $modifiedColumns[':p' . $index++]  = '`idconsulta`';
        }
        if ($this->isColumnModified(FacturaPeer::FACTURA_URL_XML)) {
            $modifiedColumns[':p' . $index++]  = '`factura_url_xml`';
        }
        if ($this->isColumnModified(FacturaPeer::FACTURA_URL_PDF)) {
            $modifiedColumns[':p' . $index++]  = '`factura_url_pdf`';
        }
        if ($this->isColumnModified(FacturaPeer::FACTURA_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`factura_fecha`';
        }
        if ($this->isColumnModified(FacturaPeer::FACTURA_SELLOSAT)) {
            $modifiedColumns[':p' . $index++]  = '`factura_sellosat`';
        }
        if ($this->isColumnModified(FacturaPeer::FACTURA_CERTIFICADOSAT)) {
            $modifiedColumns[':p' . $index++]  = '`factura_certificadosat`';
        }
        if ($this->isColumnModified(FacturaPeer::FACTURA_CADENAORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`factura_cadenaoriginal`';
        }
        if ($this->isColumnModified(FacturaPeer::FACTURA_CFDI)) {
            $modifiedColumns[':p' . $index++]  = '`factura_cfdi`';
        }
        if ($this->isColumnModified(FacturaPeer::FACTURA_MENSAJE)) {
            $modifiedColumns[':p' . $index++]  = '`factura_mensaje`';
        }
        if ($this->isColumnModified(FacturaPeer::FACTURA_QRCODE)) {
            $modifiedColumns[':p' . $index++]  = '`factura_qrcode`';
        }
        if ($this->isColumnModified(FacturaPeer::FACTURA_TIPODEPAGO)) {
            $modifiedColumns[':p' . $index++]  = '`factura_tipodepago`';
        }
        if ($this->isColumnModified(FacturaPeer::FACTURA_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`factura_status`';
        }
        if ($this->isColumnModified(FacturaPeer::FACTURA_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`factura_tipo`';
        }

        $sql = sprintf(
            'INSERT INTO `factura` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idfactura`':
                        $stmt->bindValue($identifier, $this->idfactura, PDO::PARAM_INT);
                        break;
                    case '`iddatosfacturacion`':
                        $stmt->bindValue($identifier, $this->iddatosfacturacion, PDO::PARAM_INT);
                        break;
                    case '`idconsulta`':
                        $stmt->bindValue($identifier, $this->idconsulta, PDO::PARAM_INT);
                        break;
                    case '`factura_url_xml`':
                        $stmt->bindValue($identifier, $this->factura_url_xml, PDO::PARAM_STR);
                        break;
                    case '`factura_url_pdf`':
                        $stmt->bindValue($identifier, $this->factura_url_pdf, PDO::PARAM_STR);
                        break;
                    case '`factura_fecha`':
                        $stmt->bindValue($identifier, $this->factura_fecha, PDO::PARAM_STR);
                        break;
                    case '`factura_sellosat`':
                        $stmt->bindValue($identifier, $this->factura_sellosat, PDO::PARAM_STR);
                        break;
                    case '`factura_certificadosat`':
                        $stmt->bindValue($identifier, $this->factura_certificadosat, PDO::PARAM_STR);
                        break;
                    case '`factura_cadenaoriginal`':
                        $stmt->bindValue($identifier, $this->factura_cadenaoriginal, PDO::PARAM_STR);
                        break;
                    case '`factura_cfdi`':
                        $stmt->bindValue($identifier, $this->factura_cfdi, PDO::PARAM_STR);
                        break;
                    case '`factura_mensaje`':
                        $stmt->bindValue($identifier, $this->factura_mensaje, PDO::PARAM_STR);
                        break;
                    case '`factura_qrcode`':
                        $stmt->bindValue($identifier, $this->factura_qrcode, PDO::PARAM_STR);
                        break;
                    case '`factura_tipodepago`':
                        $stmt->bindValue($identifier, $this->factura_tipodepago, PDO::PARAM_STR);
                        break;
                    case '`factura_status`':
                        $stmt->bindValue($identifier, $this->factura_status, PDO::PARAM_STR);
                        break;
                    case '`factura_tipo`':
                        $stmt->bindValue($identifier, $this->factura_tipo, PDO::PARAM_STR);
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
        $this->setIdfactura($pk);

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

            if ($this->aConsulta !== null) {
                if (!$this->aConsulta->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aConsulta->getValidationFailures());
                }
            }

            if ($this->aPacientefacturacion !== null) {
                if (!$this->aPacientefacturacion->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPacientefacturacion->getValidationFailures());
                }
            }


            if (($retval = FacturaPeer::doValidate($this, $columns)) !== true) {
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
        $pos = FacturaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdfactura();
                break;
            case 1:
                return $this->getIddatosfacturacion();
                break;
            case 2:
                return $this->getIdconsulta();
                break;
            case 3:
                return $this->getFacturaUrlXml();
                break;
            case 4:
                return $this->getFacturaUrlPdf();
                break;
            case 5:
                return $this->getFacturaFecha();
                break;
            case 6:
                return $this->getFacturaSellosat();
                break;
            case 7:
                return $this->getFacturaCertificadosat();
                break;
            case 8:
                return $this->getFacturaCadenaoriginal();
                break;
            case 9:
                return $this->getFacturaCfdi();
                break;
            case 10:
                return $this->getFacturaMensaje();
                break;
            case 11:
                return $this->getFacturaQrcode();
                break;
            case 12:
                return $this->getFacturaTipodepago();
                break;
            case 13:
                return $this->getFacturaStatus();
                break;
            case 14:
                return $this->getFacturaTipo();
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
        if (isset($alreadyDumpedObjects['Factura'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Factura'][$this->getPrimaryKey()] = true;
        $keys = FacturaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdfactura(),
            $keys[1] => $this->getIddatosfacturacion(),
            $keys[2] => $this->getIdconsulta(),
            $keys[3] => $this->getFacturaUrlXml(),
            $keys[4] => $this->getFacturaUrlPdf(),
            $keys[5] => $this->getFacturaFecha(),
            $keys[6] => $this->getFacturaSellosat(),
            $keys[7] => $this->getFacturaCertificadosat(),
            $keys[8] => $this->getFacturaCadenaoriginal(),
            $keys[9] => $this->getFacturaCfdi(),
            $keys[10] => $this->getFacturaMensaje(),
            $keys[11] => $this->getFacturaQrcode(),
            $keys[12] => $this->getFacturaTipodepago(),
            $keys[13] => $this->getFacturaStatus(),
            $keys[14] => $this->getFacturaTipo(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aConsulta) {
                $result['Consulta'] = $this->aConsulta->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPacientefacturacion) {
                $result['Pacientefacturacion'] = $this->aPacientefacturacion->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = FacturaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdfactura($value);
                break;
            case 1:
                $this->setIddatosfacturacion($value);
                break;
            case 2:
                $this->setIdconsulta($value);
                break;
            case 3:
                $this->setFacturaUrlXml($value);
                break;
            case 4:
                $this->setFacturaUrlPdf($value);
                break;
            case 5:
                $this->setFacturaFecha($value);
                break;
            case 6:
                $this->setFacturaSellosat($value);
                break;
            case 7:
                $this->setFacturaCertificadosat($value);
                break;
            case 8:
                $this->setFacturaCadenaoriginal($value);
                break;
            case 9:
                $this->setFacturaCfdi($value);
                break;
            case 10:
                $this->setFacturaMensaje($value);
                break;
            case 11:
                $this->setFacturaQrcode($value);
                break;
            case 12:
                $this->setFacturaTipodepago($value);
                break;
            case 13:
                $this->setFacturaStatus($value);
                break;
            case 14:
                $this->setFacturaTipo($value);
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
        $keys = FacturaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdfactura($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIddatosfacturacion($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdconsulta($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFacturaUrlXml($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setFacturaUrlPdf($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFacturaFecha($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setFacturaSellosat($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setFacturaCertificadosat($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFacturaCadenaoriginal($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setFacturaCfdi($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFacturaMensaje($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setFacturaQrcode($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setFacturaTipodepago($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setFacturaStatus($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setFacturaTipo($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FacturaPeer::DATABASE_NAME);

        if ($this->isColumnModified(FacturaPeer::IDFACTURA)) $criteria->add(FacturaPeer::IDFACTURA, $this->idfactura);
        if ($this->isColumnModified(FacturaPeer::IDDATOSFACTURACION)) $criteria->add(FacturaPeer::IDDATOSFACTURACION, $this->iddatosfacturacion);
        if ($this->isColumnModified(FacturaPeer::IDCONSULTA)) $criteria->add(FacturaPeer::IDCONSULTA, $this->idconsulta);
        if ($this->isColumnModified(FacturaPeer::FACTURA_URL_XML)) $criteria->add(FacturaPeer::FACTURA_URL_XML, $this->factura_url_xml);
        if ($this->isColumnModified(FacturaPeer::FACTURA_URL_PDF)) $criteria->add(FacturaPeer::FACTURA_URL_PDF, $this->factura_url_pdf);
        if ($this->isColumnModified(FacturaPeer::FACTURA_FECHA)) $criteria->add(FacturaPeer::FACTURA_FECHA, $this->factura_fecha);
        if ($this->isColumnModified(FacturaPeer::FACTURA_SELLOSAT)) $criteria->add(FacturaPeer::FACTURA_SELLOSAT, $this->factura_sellosat);
        if ($this->isColumnModified(FacturaPeer::FACTURA_CERTIFICADOSAT)) $criteria->add(FacturaPeer::FACTURA_CERTIFICADOSAT, $this->factura_certificadosat);
        if ($this->isColumnModified(FacturaPeer::FACTURA_CADENAORIGINAL)) $criteria->add(FacturaPeer::FACTURA_CADENAORIGINAL, $this->factura_cadenaoriginal);
        if ($this->isColumnModified(FacturaPeer::FACTURA_CFDI)) $criteria->add(FacturaPeer::FACTURA_CFDI, $this->factura_cfdi);
        if ($this->isColumnModified(FacturaPeer::FACTURA_MENSAJE)) $criteria->add(FacturaPeer::FACTURA_MENSAJE, $this->factura_mensaje);
        if ($this->isColumnModified(FacturaPeer::FACTURA_QRCODE)) $criteria->add(FacturaPeer::FACTURA_QRCODE, $this->factura_qrcode);
        if ($this->isColumnModified(FacturaPeer::FACTURA_TIPODEPAGO)) $criteria->add(FacturaPeer::FACTURA_TIPODEPAGO, $this->factura_tipodepago);
        if ($this->isColumnModified(FacturaPeer::FACTURA_STATUS)) $criteria->add(FacturaPeer::FACTURA_STATUS, $this->factura_status);
        if ($this->isColumnModified(FacturaPeer::FACTURA_TIPO)) $criteria->add(FacturaPeer::FACTURA_TIPO, $this->factura_tipo);

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
        $criteria = new Criteria(FacturaPeer::DATABASE_NAME);
        $criteria->add(FacturaPeer::IDFACTURA, $this->idfactura);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdfactura();
    }

    /**
     * Generic method to set the primary key (idfactura column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdfactura($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdfactura();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Factura (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIddatosfacturacion($this->getIddatosfacturacion());
        $copyObj->setIdconsulta($this->getIdconsulta());
        $copyObj->setFacturaUrlXml($this->getFacturaUrlXml());
        $copyObj->setFacturaUrlPdf($this->getFacturaUrlPdf());
        $copyObj->setFacturaFecha($this->getFacturaFecha());
        $copyObj->setFacturaSellosat($this->getFacturaSellosat());
        $copyObj->setFacturaCertificadosat($this->getFacturaCertificadosat());
        $copyObj->setFacturaCadenaoriginal($this->getFacturaCadenaoriginal());
        $copyObj->setFacturaCfdi($this->getFacturaCfdi());
        $copyObj->setFacturaMensaje($this->getFacturaMensaje());
        $copyObj->setFacturaQrcode($this->getFacturaQrcode());
        $copyObj->setFacturaTipodepago($this->getFacturaTipodepago());
        $copyObj->setFacturaStatus($this->getFacturaStatus());
        $copyObj->setFacturaTipo($this->getFacturaTipo());

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
            $copyObj->setIdfactura(NULL); // this is a auto-increment column, so set to default value
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
     * @return Factura Clone of current object.
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
     * @return FacturaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FacturaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Consulta object.
     *
     * @param                  Consulta $v
     * @return Factura The current object (for fluent API support)
     * @throws PropelException
     */
    public function setConsulta(Consulta $v = null)
    {
        if ($v === null) {
            $this->setIdconsulta(NULL);
        } else {
            $this->setIdconsulta($v->getIdconsulta());
        }

        $this->aConsulta = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Consulta object, it will not be re-added.
        if ($v !== null) {
            $v->addFactura($this);
        }


        return $this;
    }


    /**
     * Get the associated Consulta object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Consulta The associated Consulta object.
     * @throws PropelException
     */
    public function getConsulta(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aConsulta === null && ($this->idconsulta !== null) && $doQuery) {
            $this->aConsulta = ConsultaQuery::create()->findPk($this->idconsulta, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aConsulta->addFacturas($this);
             */
        }

        return $this->aConsulta;
    }

    /**
     * Declares an association between this object and a Pacientefacturacion object.
     *
     * @param                  Pacientefacturacion $v
     * @return Factura The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPacientefacturacion(Pacientefacturacion $v = null)
    {
        if ($v === null) {
            $this->setIddatosfacturacion(NULL);
        } else {
            $this->setIddatosfacturacion($v->getIdpacientefacturacion());
        }

        $this->aPacientefacturacion = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Pacientefacturacion object, it will not be re-added.
        if ($v !== null) {
            $v->addFactura($this);
        }


        return $this;
    }


    /**
     * Get the associated Pacientefacturacion object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Pacientefacturacion The associated Pacientefacturacion object.
     * @throws PropelException
     */
    public function getPacientefacturacion(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPacientefacturacion === null && ($this->iddatosfacturacion !== null) && $doQuery) {
            $this->aPacientefacturacion = PacientefacturacionQuery::create()->findPk($this->iddatosfacturacion, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPacientefacturacion->addFacturas($this);
             */
        }

        return $this->aPacientefacturacion;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idfactura = null;
        $this->iddatosfacturacion = null;
        $this->idconsulta = null;
        $this->factura_url_xml = null;
        $this->factura_url_pdf = null;
        $this->factura_fecha = null;
        $this->factura_sellosat = null;
        $this->factura_certificadosat = null;
        $this->factura_cadenaoriginal = null;
        $this->factura_cfdi = null;
        $this->factura_mensaje = null;
        $this->factura_qrcode = null;
        $this->factura_tipodepago = null;
        $this->factura_status = null;
        $this->factura_tipo = null;
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
            if ($this->aConsulta instanceof Persistent) {
              $this->aConsulta->clearAllReferences($deep);
            }
            if ($this->aPacientefacturacion instanceof Persistent) {
              $this->aPacientefacturacion->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aConsulta = null;
        $this->aPacientefacturacion = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(FacturaPeer::DEFAULT_STRING_FORMAT);
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
