<?php


/**
 * Base class that represents a row from the 'venta' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseVenta extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'VentaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        VentaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idventa field.
     * @var        int
     */
    protected $idventa;

    /**
     * The value for the idpaciente field.
     * @var        int
     */
    protected $idpaciente;

    /**
     * The value for the venta_fecha field.
     * @var        string
     */
    protected $venta_fecha;

    /**
     * The value for the venta_tipodepago field.
     * @var        string
     */
    protected $venta_tipodepago;

    /**
     * The value for the venta_status field.
     * @var        string
     */
    protected $venta_status;

    /**
     * The value for the venta_facturada field.
     * @var        boolean
     */
    protected $venta_facturada;

    /**
     * The value for the venta_registrada field.
     * @var        boolean
     */
    protected $venta_registrada;

    /**
     * The value for the venta_total field.
     * @var        string
     */
    protected $venta_total;

    /**
     * The value for the venta_referenciapago field.
     * @var        string
     */
    protected $venta_referenciapago;

    /**
     * @var        Paciente
     */
    protected $aPaciente;

    /**
     * @var        PropelObjectCollection|Cargoventa[] Collection to store aggregation of Cargoventa objects.
     */
    protected $collCargoventas;
    protected $collCargoventasPartial;

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
    protected $cargoventasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $facturasScheduledForDeletion = null;

    /**
     * Get the [idventa] column value.
     *
     * @return int
     */
    public function getIdventa()
    {

        return $this->idventa;
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
     * Get the [optionally formatted] temporal [venta_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getVentaFecha($format = 'Y-m-d H:i:s')
    {
        if ($this->venta_fecha === null) {
            return null;
        }

        if ($this->venta_fecha === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->venta_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->venta_fecha, true), $x);
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
     * Get the [venta_tipodepago] column value.
     *
     * @return string
     */
    public function getVentaTipodepago()
    {

        return $this->venta_tipodepago;
    }

    /**
     * Get the [venta_status] column value.
     *
     * @return string
     */
    public function getVentaStatus()
    {

        return $this->venta_status;
    }

    /**
     * Get the [venta_facturada] column value.
     *
     * @return boolean
     */
    public function getVentaFacturada()
    {

        return $this->venta_facturada;
    }

    /**
     * Get the [venta_registrada] column value.
     *
     * @return boolean
     */
    public function getVentaRegistrada()
    {

        return $this->venta_registrada;
    }

    /**
     * Get the [venta_total] column value.
     *
     * @return string
     */
    public function getVentaTotal()
    {

        return $this->venta_total;
    }

    /**
     * Get the [venta_referenciapago] column value.
     *
     * @return string
     */
    public function getVentaReferenciapago()
    {

        return $this->venta_referenciapago;
    }

    /**
     * Set the value of [idventa] column.
     *
     * @param  int $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setIdventa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idventa !== $v) {
            $this->idventa = $v;
            $this->modifiedColumns[] = VentaPeer::IDVENTA;
        }


        return $this;
    } // setIdventa()

    /**
     * Set the value of [idpaciente] column.
     *
     * @param  int $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setIdpaciente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpaciente !== $v) {
            $this->idpaciente = $v;
            $this->modifiedColumns[] = VentaPeer::IDPACIENTE;
        }

        if ($this->aPaciente !== null && $this->aPaciente->getIdpaciente() !== $v) {
            $this->aPaciente = null;
        }


        return $this;
    } // setIdpaciente()

    /**
     * Sets the value of [venta_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->venta_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->venta_fecha !== null && $tmpDt = new DateTime($this->venta_fecha)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->venta_fecha = $newDateAsString;
                $this->modifiedColumns[] = VentaPeer::VENTA_FECHA;
            }
        } // if either are not null


        return $this;
    } // setVentaFecha()

    /**
     * Set the value of [venta_tipodepago] column.
     *
     * @param  string $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaTipodepago($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->venta_tipodepago !== $v) {
            $this->venta_tipodepago = $v;
            $this->modifiedColumns[] = VentaPeer::VENTA_TIPODEPAGO;
        }


        return $this;
    } // setVentaTipodepago()

    /**
     * Set the value of [venta_status] column.
     *
     * @param  string $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->venta_status !== $v) {
            $this->venta_status = $v;
            $this->modifiedColumns[] = VentaPeer::VENTA_STATUS;
        }


        return $this;
    } // setVentaStatus()

    /**
     * Sets the value of the [venta_facturada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaFacturada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->venta_facturada !== $v) {
            $this->venta_facturada = $v;
            $this->modifiedColumns[] = VentaPeer::VENTA_FACTURADA;
        }


        return $this;
    } // setVentaFacturada()

    /**
     * Sets the value of the [venta_registrada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaRegistrada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->venta_registrada !== $v) {
            $this->venta_registrada = $v;
            $this->modifiedColumns[] = VentaPeer::VENTA_REGISTRADA;
        }


        return $this;
    } // setVentaRegistrada()

    /**
     * Set the value of [venta_total] column.
     *
     * @param  string $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->venta_total !== $v) {
            $this->venta_total = $v;
            $this->modifiedColumns[] = VentaPeer::VENTA_TOTAL;
        }


        return $this;
    } // setVentaTotal()

    /**
     * Set the value of [venta_referenciapago] column.
     *
     * @param  string $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaReferenciapago($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->venta_referenciapago !== $v) {
            $this->venta_referenciapago = $v;
            $this->modifiedColumns[] = VentaPeer::VENTA_REFERENCIAPAGO;
        }


        return $this;
    } // setVentaReferenciapago()

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

            $this->idventa = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idpaciente = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->venta_fecha = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->venta_tipodepago = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->venta_status = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->venta_facturada = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
            $this->venta_registrada = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
            $this->venta_total = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->venta_referenciapago = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = VentaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Venta object", $e);
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
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = VentaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aPaciente = null;
            $this->collCargoventas = null;

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
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = VentaQuery::create()
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
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                VentaPeer::addInstanceToPool($this);
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

            if ($this->cargoventasScheduledForDeletion !== null) {
                if (!$this->cargoventasScheduledForDeletion->isEmpty()) {
                    CargoventaQuery::create()
                        ->filterByPrimaryKeys($this->cargoventasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->cargoventasScheduledForDeletion = null;
                }
            }

            if ($this->collCargoventas !== null) {
                foreach ($this->collCargoventas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->facturasScheduledForDeletion !== null) {
                if (!$this->facturasScheduledForDeletion->isEmpty()) {
                    foreach ($this->facturasScheduledForDeletion as $factura) {
                        // need to save related object because we set the relation to null
                        $factura->save($con);
                    }
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

        $this->modifiedColumns[] = VentaPeer::IDVENTA;
        if (null !== $this->idventa) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . VentaPeer::IDVENTA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(VentaPeer::IDVENTA)) {
            $modifiedColumns[':p' . $index++]  = '`idventa`';
        }
        if ($this->isColumnModified(VentaPeer::IDPACIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idpaciente`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`venta_fecha`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_TIPODEPAGO)) {
            $modifiedColumns[':p' . $index++]  = '`venta_tipodepago`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`venta_status`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_FACTURADA)) {
            $modifiedColumns[':p' . $index++]  = '`venta_facturada`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_REGISTRADA)) {
            $modifiedColumns[':p' . $index++]  = '`venta_registrada`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`venta_total`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_REFERENCIAPAGO)) {
            $modifiedColumns[':p' . $index++]  = '`venta_referenciapago`';
        }

        $sql = sprintf(
            'INSERT INTO `venta` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idventa`':
                        $stmt->bindValue($identifier, $this->idventa, PDO::PARAM_INT);
                        break;
                    case '`idpaciente`':
                        $stmt->bindValue($identifier, $this->idpaciente, PDO::PARAM_INT);
                        break;
                    case '`venta_fecha`':
                        $stmt->bindValue($identifier, $this->venta_fecha, PDO::PARAM_STR);
                        break;
                    case '`venta_tipodepago`':
                        $stmt->bindValue($identifier, $this->venta_tipodepago, PDO::PARAM_STR);
                        break;
                    case '`venta_status`':
                        $stmt->bindValue($identifier, $this->venta_status, PDO::PARAM_STR);
                        break;
                    case '`venta_facturada`':
                        $stmt->bindValue($identifier, (int) $this->venta_facturada, PDO::PARAM_INT);
                        break;
                    case '`venta_registrada`':
                        $stmt->bindValue($identifier, (int) $this->venta_registrada, PDO::PARAM_INT);
                        break;
                    case '`venta_total`':
                        $stmt->bindValue($identifier, $this->venta_total, PDO::PARAM_STR);
                        break;
                    case '`venta_referenciapago`':
                        $stmt->bindValue($identifier, $this->venta_referenciapago, PDO::PARAM_STR);
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
        $this->setIdventa($pk);

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


            if (($retval = VentaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCargoventas !== null) {
                    foreach ($this->collCargoventas as $referrerFK) {
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
        $pos = VentaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdventa();
                break;
            case 1:
                return $this->getIdpaciente();
                break;
            case 2:
                return $this->getVentaFecha();
                break;
            case 3:
                return $this->getVentaTipodepago();
                break;
            case 4:
                return $this->getVentaStatus();
                break;
            case 5:
                return $this->getVentaFacturada();
                break;
            case 6:
                return $this->getVentaRegistrada();
                break;
            case 7:
                return $this->getVentaTotal();
                break;
            case 8:
                return $this->getVentaReferenciapago();
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
        if (isset($alreadyDumpedObjects['Venta'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Venta'][$this->getPrimaryKey()] = true;
        $keys = VentaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdventa(),
            $keys[1] => $this->getIdpaciente(),
            $keys[2] => $this->getVentaFecha(),
            $keys[3] => $this->getVentaTipodepago(),
            $keys[4] => $this->getVentaStatus(),
            $keys[5] => $this->getVentaFacturada(),
            $keys[6] => $this->getVentaRegistrada(),
            $keys[7] => $this->getVentaTotal(),
            $keys[8] => $this->getVentaReferenciapago(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aPaciente) {
                $result['Paciente'] = $this->aPaciente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCargoventas) {
                $result['Cargoventas'] = $this->collCargoventas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = VentaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdventa($value);
                break;
            case 1:
                $this->setIdpaciente($value);
                break;
            case 2:
                $this->setVentaFecha($value);
                break;
            case 3:
                $this->setVentaTipodepago($value);
                break;
            case 4:
                $this->setVentaStatus($value);
                break;
            case 5:
                $this->setVentaFacturada($value);
                break;
            case 6:
                $this->setVentaRegistrada($value);
                break;
            case 7:
                $this->setVentaTotal($value);
                break;
            case 8:
                $this->setVentaReferenciapago($value);
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
        $keys = VentaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdventa($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdpaciente($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setVentaFecha($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setVentaTipodepago($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setVentaStatus($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setVentaFacturada($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setVentaRegistrada($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setVentaTotal($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVentaReferenciapago($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(VentaPeer::DATABASE_NAME);

        if ($this->isColumnModified(VentaPeer::IDVENTA)) $criteria->add(VentaPeer::IDVENTA, $this->idventa);
        if ($this->isColumnModified(VentaPeer::IDPACIENTE)) $criteria->add(VentaPeer::IDPACIENTE, $this->idpaciente);
        if ($this->isColumnModified(VentaPeer::VENTA_FECHA)) $criteria->add(VentaPeer::VENTA_FECHA, $this->venta_fecha);
        if ($this->isColumnModified(VentaPeer::VENTA_TIPODEPAGO)) $criteria->add(VentaPeer::VENTA_TIPODEPAGO, $this->venta_tipodepago);
        if ($this->isColumnModified(VentaPeer::VENTA_STATUS)) $criteria->add(VentaPeer::VENTA_STATUS, $this->venta_status);
        if ($this->isColumnModified(VentaPeer::VENTA_FACTURADA)) $criteria->add(VentaPeer::VENTA_FACTURADA, $this->venta_facturada);
        if ($this->isColumnModified(VentaPeer::VENTA_REGISTRADA)) $criteria->add(VentaPeer::VENTA_REGISTRADA, $this->venta_registrada);
        if ($this->isColumnModified(VentaPeer::VENTA_TOTAL)) $criteria->add(VentaPeer::VENTA_TOTAL, $this->venta_total);
        if ($this->isColumnModified(VentaPeer::VENTA_REFERENCIAPAGO)) $criteria->add(VentaPeer::VENTA_REFERENCIAPAGO, $this->venta_referenciapago);

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
        $criteria = new Criteria(VentaPeer::DATABASE_NAME);
        $criteria->add(VentaPeer::IDVENTA, $this->idventa);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdventa();
    }

    /**
     * Generic method to set the primary key (idventa column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdventa($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdventa();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Venta (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdpaciente($this->getIdpaciente());
        $copyObj->setVentaFecha($this->getVentaFecha());
        $copyObj->setVentaTipodepago($this->getVentaTipodepago());
        $copyObj->setVentaStatus($this->getVentaStatus());
        $copyObj->setVentaFacturada($this->getVentaFacturada());
        $copyObj->setVentaRegistrada($this->getVentaRegistrada());
        $copyObj->setVentaTotal($this->getVentaTotal());
        $copyObj->setVentaReferenciapago($this->getVentaReferenciapago());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCargoventas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCargoventa($relObj->copy($deepCopy));
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
            $copyObj->setIdventa(NULL); // this is a auto-increment column, so set to default value
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
     * @return Venta Clone of current object.
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
     * @return VentaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new VentaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Paciente object.
     *
     * @param                  Paciente $v
     * @return Venta The current object (for fluent API support)
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
            $v->addVenta($this);
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
                $this->aPaciente->addVentas($this);
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
        if ('Cargoventa' == $relationName) {
            $this->initCargoventas();
        }
        if ('Factura' == $relationName) {
            $this->initFacturas();
        }
    }

    /**
     * Clears out the collCargoventas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Venta The current object (for fluent API support)
     * @see        addCargoventas()
     */
    public function clearCargoventas()
    {
        $this->collCargoventas = null; // important to set this to null since that means it is uninitialized
        $this->collCargoventasPartial = null;

        return $this;
    }

    /**
     * reset is the collCargoventas collection loaded partially
     *
     * @return void
     */
    public function resetPartialCargoventas($v = true)
    {
        $this->collCargoventasPartial = $v;
    }

    /**
     * Initializes the collCargoventas collection.
     *
     * By default this just sets the collCargoventas collection to an empty array (like clearcollCargoventas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCargoventas($overrideExisting = true)
    {
        if (null !== $this->collCargoventas && !$overrideExisting) {
            return;
        }
        $this->collCargoventas = new PropelObjectCollection();
        $this->collCargoventas->setModel('Cargoventa');
    }

    /**
     * Gets an array of Cargoventa objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Venta is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Cargoventa[] List of Cargoventa objects
     * @throws PropelException
     */
    public function getCargoventas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCargoventasPartial && !$this->isNew();
        if (null === $this->collCargoventas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCargoventas) {
                // return empty collection
                $this->initCargoventas();
            } else {
                $collCargoventas = CargoventaQuery::create(null, $criteria)
                    ->filterByVenta($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCargoventasPartial && count($collCargoventas)) {
                      $this->initCargoventas(false);

                      foreach ($collCargoventas as $obj) {
                        if (false == $this->collCargoventas->contains($obj)) {
                          $this->collCargoventas->append($obj);
                        }
                      }

                      $this->collCargoventasPartial = true;
                    }

                    $collCargoventas->getInternalIterator()->rewind();

                    return $collCargoventas;
                }

                if ($partial && $this->collCargoventas) {
                    foreach ($this->collCargoventas as $obj) {
                        if ($obj->isNew()) {
                            $collCargoventas[] = $obj;
                        }
                    }
                }

                $this->collCargoventas = $collCargoventas;
                $this->collCargoventasPartial = false;
            }
        }

        return $this->collCargoventas;
    }

    /**
     * Sets a collection of Cargoventa objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $cargoventas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Venta The current object (for fluent API support)
     */
    public function setCargoventas(PropelCollection $cargoventas, PropelPDO $con = null)
    {
        $cargoventasToDelete = $this->getCargoventas(new Criteria(), $con)->diff($cargoventas);


        $this->cargoventasScheduledForDeletion = $cargoventasToDelete;

        foreach ($cargoventasToDelete as $cargoventaRemoved) {
            $cargoventaRemoved->setVenta(null);
        }

        $this->collCargoventas = null;
        foreach ($cargoventas as $cargoventa) {
            $this->addCargoventa($cargoventa);
        }

        $this->collCargoventas = $cargoventas;
        $this->collCargoventasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Cargoventa objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Cargoventa objects.
     * @throws PropelException
     */
    public function countCargoventas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCargoventasPartial && !$this->isNew();
        if (null === $this->collCargoventas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCargoventas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCargoventas());
            }
            $query = CargoventaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByVenta($this)
                ->count($con);
        }

        return count($this->collCargoventas);
    }

    /**
     * Method called to associate a Cargoventa object to this object
     * through the Cargoventa foreign key attribute.
     *
     * @param    Cargoventa $l Cargoventa
     * @return Venta The current object (for fluent API support)
     */
    public function addCargoventa(Cargoventa $l)
    {
        if ($this->collCargoventas === null) {
            $this->initCargoventas();
            $this->collCargoventasPartial = true;
        }

        if (!in_array($l, $this->collCargoventas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCargoventa($l);

            if ($this->cargoventasScheduledForDeletion and $this->cargoventasScheduledForDeletion->contains($l)) {
                $this->cargoventasScheduledForDeletion->remove($this->cargoventasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Cargoventa $cargoventa The cargoventa object to add.
     */
    protected function doAddCargoventa($cargoventa)
    {
        $this->collCargoventas[]= $cargoventa;
        $cargoventa->setVenta($this);
    }

    /**
     * @param	Cargoventa $cargoventa The cargoventa object to remove.
     * @return Venta The current object (for fluent API support)
     */
    public function removeCargoventa($cargoventa)
    {
        if ($this->getCargoventas()->contains($cargoventa)) {
            $this->collCargoventas->remove($this->collCargoventas->search($cargoventa));
            if (null === $this->cargoventasScheduledForDeletion) {
                $this->cargoventasScheduledForDeletion = clone $this->collCargoventas;
                $this->cargoventasScheduledForDeletion->clear();
            }
            $this->cargoventasScheduledForDeletion[]= clone $cargoventa;
            $cargoventa->setVenta(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Venta is new, it will return
     * an empty collection; or if this Venta has previously
     * been saved, it will retrieve related Cargoventas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Venta.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cargoventa[] List of Cargoventa objects
     */
    public function getCargoventasJoinLugarinventario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CargoventaQuery::create(null, $criteria);
        $query->joinWith('Lugarinventario', $join_behavior);

        return $this->getCargoventas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Venta is new, it will return
     * an empty collection; or if this Venta has previously
     * been saved, it will retrieve related Cargoventas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Venta.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cargoventa[] List of Cargoventa objects
     */
    public function getCargoventasJoinServicio($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CargoventaQuery::create(null, $criteria);
        $query->joinWith('Servicio', $join_behavior);

        return $this->getCargoventas($query, $con);
    }

    /**
     * Clears out the collFacturas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Venta The current object (for fluent API support)
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
     * If this Venta is new, it will return
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
                    ->filterByVenta($this)
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
     * @return Venta The current object (for fluent API support)
     */
    public function setFacturas(PropelCollection $facturas, PropelPDO $con = null)
    {
        $facturasToDelete = $this->getFacturas(new Criteria(), $con)->diff($facturas);


        $this->facturasScheduledForDeletion = $facturasToDelete;

        foreach ($facturasToDelete as $facturaRemoved) {
            $facturaRemoved->setVenta(null);
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
                ->filterByVenta($this)
                ->count($con);
        }

        return count($this->collFacturas);
    }

    /**
     * Method called to associate a Factura object to this object
     * through the Factura foreign key attribute.
     *
     * @param    Factura $l Factura
     * @return Venta The current object (for fluent API support)
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
        $factura->setVenta($this);
    }

    /**
     * @param	Factura $factura The factura object to remove.
     * @return Venta The current object (for fluent API support)
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
            $factura->setVenta(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Venta is new, it will return
     * an empty collection; or if this Venta has previously
     * been saved, it will retrieve related Facturas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Venta.
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
     * Otherwise if this Venta is new, it will return
     * an empty collection; or if this Venta has previously
     * been saved, it will retrieve related Facturas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Venta.
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
     * Otherwise if this Venta is new, it will return
     * an empty collection; or if this Venta has previously
     * been saved, it will retrieve related Facturas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Venta.
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
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idventa = null;
        $this->idpaciente = null;
        $this->venta_fecha = null;
        $this->venta_tipodepago = null;
        $this->venta_status = null;
        $this->venta_facturada = null;
        $this->venta_registrada = null;
        $this->venta_total = null;
        $this->venta_referenciapago = null;
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
            if ($this->collCargoventas) {
                foreach ($this->collCargoventas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
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

        if ($this->collCargoventas instanceof PropelCollection) {
            $this->collCargoventas->clearIterator();
        }
        $this->collCargoventas = null;
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
        return (string) $this->exportTo(VentaPeer::DEFAULT_STRING_FORMAT);
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
