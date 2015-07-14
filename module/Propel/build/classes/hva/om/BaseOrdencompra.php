<?php


/**
 * Base class that represents a row from the 'ordencompra' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseOrdencompra extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OrdencompraPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OrdencompraPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idordencompra field.
     * @var        int
     */
    protected $idordencompra;

    /**
     * The value for the idproveedor field.
     * @var        int
     */
    protected $idproveedor;

    /**
     * The value for the ordencompra_nofactura field.
     * @var        string
     */
    protected $ordencompra_nofactura;

    /**
     * The value for the ordencompra_facturapdf field.
     * @var        string
     */
    protected $ordencompra_facturapdf;

    /**
     * The value for the ordencompra_fecha field.
     * @var        string
     */
    protected $ordencompra_fecha;

    /**
     * The value for the ordencompra_importe field.
     * @var        string
     */
    protected $ordencompra_importe;

    /**
     * The value for the ordencompra_status field.
     * @var        string
     */
    protected $ordencompra_status;

    /**
     * The value for the ordencompra_fechaapagar field.
     * @var        string
     */
    protected $ordencompra_fechaapagar;

    /**
     * @var        Proveedor
     */
    protected $aProveedor;

    /**
     * @var        PropelObjectCollection|Ordencompradetalle[] Collection to store aggregation of Ordencompradetalle objects.
     */
    protected $collOrdencompradetalles;
    protected $collOrdencompradetallesPartial;

    /**
     * @var        PropelObjectCollection|Traspaso[] Collection to store aggregation of Traspaso objects.
     */
    protected $collTraspasos;
    protected $collTraspasosPartial;

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
    protected $ordencompradetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $traspasosScheduledForDeletion = null;

    /**
     * Get the [idordencompra] column value.
     *
     * @return int
     */
    public function getIdordencompra()
    {

        return $this->idordencompra;
    }

    /**
     * Get the [idproveedor] column value.
     *
     * @return int
     */
    public function getIdproveedor()
    {

        return $this->idproveedor;
    }

    /**
     * Get the [ordencompra_nofactura] column value.
     *
     * @return string
     */
    public function getOrdencompraNofactura()
    {

        return $this->ordencompra_nofactura;
    }

    /**
     * Get the [ordencompra_facturapdf] column value.
     *
     * @return string
     */
    public function getOrdencompraFacturapdf()
    {

        return $this->ordencompra_facturapdf;
    }

    /**
     * Get the [optionally formatted] temporal [ordencompra_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOrdencompraFecha($format = 'Y-m-d H:i:s')
    {
        if ($this->ordencompra_fecha === null) {
            return null;
        }

        if ($this->ordencompra_fecha === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->ordencompra_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->ordencompra_fecha, true), $x);
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
     * Get the [ordencompra_importe] column value.
     *
     * @return string
     */
    public function getOrdencompraImporte()
    {

        return $this->ordencompra_importe;
    }

    /**
     * Get the [ordencompra_status] column value.
     *
     * @return string
     */
    public function getOrdencompraStatus()
    {

        return $this->ordencompra_status;
    }

    /**
     * Get the [optionally formatted] temporal [ordencompra_fechaapagar] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOrdencompraFechaapagar($format = '%x')
    {
        if ($this->ordencompra_fechaapagar === null) {
            return null;
        }

        if ($this->ordencompra_fechaapagar === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->ordencompra_fechaapagar);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->ordencompra_fechaapagar, true), $x);
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
     * Set the value of [idordencompra] column.
     *
     * @param  int $v new value
     * @return Ordencompra The current object (for fluent API support)
     */
    public function setIdordencompra($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idordencompra !== $v) {
            $this->idordencompra = $v;
            $this->modifiedColumns[] = OrdencompraPeer::IDORDENCOMPRA;
        }


        return $this;
    } // setIdordencompra()

    /**
     * Set the value of [idproveedor] column.
     *
     * @param  int $v new value
     * @return Ordencompra The current object (for fluent API support)
     */
    public function setIdproveedor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproveedor !== $v) {
            $this->idproveedor = $v;
            $this->modifiedColumns[] = OrdencompraPeer::IDPROVEEDOR;
        }

        if ($this->aProveedor !== null && $this->aProveedor->getIdproveedor() !== $v) {
            $this->aProveedor = null;
        }


        return $this;
    } // setIdproveedor()

    /**
     * Set the value of [ordencompra_nofactura] column.
     *
     * @param  string $v new value
     * @return Ordencompra The current object (for fluent API support)
     */
    public function setOrdencompraNofactura($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ordencompra_nofactura !== $v) {
            $this->ordencompra_nofactura = $v;
            $this->modifiedColumns[] = OrdencompraPeer::ORDENCOMPRA_NOFACTURA;
        }


        return $this;
    } // setOrdencompraNofactura()

    /**
     * Set the value of [ordencompra_facturapdf] column.
     *
     * @param  string $v new value
     * @return Ordencompra The current object (for fluent API support)
     */
    public function setOrdencompraFacturapdf($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ordencompra_facturapdf !== $v) {
            $this->ordencompra_facturapdf = $v;
            $this->modifiedColumns[] = OrdencompraPeer::ORDENCOMPRA_FACTURAPDF;
        }


        return $this;
    } // setOrdencompraFacturapdf()

    /**
     * Sets the value of [ordencompra_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ordencompra The current object (for fluent API support)
     */
    public function setOrdencompraFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ordencompra_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->ordencompra_fecha !== null && $tmpDt = new DateTime($this->ordencompra_fecha)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ordencompra_fecha = $newDateAsString;
                $this->modifiedColumns[] = OrdencompraPeer::ORDENCOMPRA_FECHA;
            }
        } // if either are not null


        return $this;
    } // setOrdencompraFecha()

    /**
     * Set the value of [ordencompra_importe] column.
     *
     * @param  string $v new value
     * @return Ordencompra The current object (for fluent API support)
     */
    public function setOrdencompraImporte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ordencompra_importe !== $v) {
            $this->ordencompra_importe = $v;
            $this->modifiedColumns[] = OrdencompraPeer::ORDENCOMPRA_IMPORTE;
        }


        return $this;
    } // setOrdencompraImporte()

    /**
     * Set the value of [ordencompra_status] column.
     *
     * @param  string $v new value
     * @return Ordencompra The current object (for fluent API support)
     */
    public function setOrdencompraStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ordencompra_status !== $v) {
            $this->ordencompra_status = $v;
            $this->modifiedColumns[] = OrdencompraPeer::ORDENCOMPRA_STATUS;
        }


        return $this;
    } // setOrdencompraStatus()

    /**
     * Sets the value of [ordencompra_fechaapagar] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ordencompra The current object (for fluent API support)
     */
    public function setOrdencompraFechaapagar($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ordencompra_fechaapagar !== null || $dt !== null) {
            $currentDateAsString = ($this->ordencompra_fechaapagar !== null && $tmpDt = new DateTime($this->ordencompra_fechaapagar)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ordencompra_fechaapagar = $newDateAsString;
                $this->modifiedColumns[] = OrdencompraPeer::ORDENCOMPRA_FECHAAPAGAR;
            }
        } // if either are not null


        return $this;
    } // setOrdencompraFechaapagar()

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

            $this->idordencompra = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idproveedor = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->ordencompra_nofactura = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->ordencompra_facturapdf = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->ordencompra_fecha = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->ordencompra_importe = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->ordencompra_status = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->ordencompra_fechaapagar = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = OrdencompraPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Ordencompra object", $e);
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

        if ($this->aProveedor !== null && $this->idproveedor !== $this->aProveedor->getIdproveedor()) {
            $this->aProveedor = null;
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
            $con = Propel::getConnection(OrdencompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OrdencompraPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aProveedor = null;
            $this->collOrdencompradetalles = null;

            $this->collTraspasos = null;

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
            $con = Propel::getConnection(OrdencompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OrdencompraQuery::create()
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
            $con = Propel::getConnection(OrdencompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OrdencompraPeer::addInstanceToPool($this);
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

            if ($this->aProveedor !== null) {
                if ($this->aProveedor->isModified() || $this->aProveedor->isNew()) {
                    $affectedRows += $this->aProveedor->save($con);
                }
                $this->setProveedor($this->aProveedor);
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

            if ($this->ordencompradetallesScheduledForDeletion !== null) {
                if (!$this->ordencompradetallesScheduledForDeletion->isEmpty()) {
                    OrdencompradetalleQuery::create()
                        ->filterByPrimaryKeys($this->ordencompradetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ordencompradetallesScheduledForDeletion = null;
                }
            }

            if ($this->collOrdencompradetalles !== null) {
                foreach ($this->collOrdencompradetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->traspasosScheduledForDeletion !== null) {
                if (!$this->traspasosScheduledForDeletion->isEmpty()) {
                    TraspasoQuery::create()
                        ->filterByPrimaryKeys($this->traspasosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->traspasosScheduledForDeletion = null;
                }
            }

            if ($this->collTraspasos !== null) {
                foreach ($this->collTraspasos as $referrerFK) {
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

        $this->modifiedColumns[] = OrdencompraPeer::IDORDENCOMPRA;
        if (null !== $this->idordencompra) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OrdencompraPeer::IDORDENCOMPRA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OrdencompraPeer::IDORDENCOMPRA)) {
            $modifiedColumns[':p' . $index++]  = '`idordencompra`';
        }
        if ($this->isColumnModified(OrdencompraPeer::IDPROVEEDOR)) {
            $modifiedColumns[':p' . $index++]  = '`idproveedor`';
        }
        if ($this->isColumnModified(OrdencompraPeer::ORDENCOMPRA_NOFACTURA)) {
            $modifiedColumns[':p' . $index++]  = '`ordencompra_nofactura`';
        }
        if ($this->isColumnModified(OrdencompraPeer::ORDENCOMPRA_FACTURAPDF)) {
            $modifiedColumns[':p' . $index++]  = '`ordencompra_facturapdf`';
        }
        if ($this->isColumnModified(OrdencompraPeer::ORDENCOMPRA_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`ordencompra_fecha`';
        }
        if ($this->isColumnModified(OrdencompraPeer::ORDENCOMPRA_IMPORTE)) {
            $modifiedColumns[':p' . $index++]  = '`ordencompra_importe`';
        }
        if ($this->isColumnModified(OrdencompraPeer::ORDENCOMPRA_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`ordencompra_status`';
        }
        if ($this->isColumnModified(OrdencompraPeer::ORDENCOMPRA_FECHAAPAGAR)) {
            $modifiedColumns[':p' . $index++]  = '`ordencompra_fechaapagar`';
        }

        $sql = sprintf(
            'INSERT INTO `ordencompra` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idordencompra`':
                        $stmt->bindValue($identifier, $this->idordencompra, PDO::PARAM_INT);
                        break;
                    case '`idproveedor`':
                        $stmt->bindValue($identifier, $this->idproveedor, PDO::PARAM_INT);
                        break;
                    case '`ordencompra_nofactura`':
                        $stmt->bindValue($identifier, $this->ordencompra_nofactura, PDO::PARAM_STR);
                        break;
                    case '`ordencompra_facturapdf`':
                        $stmt->bindValue($identifier, $this->ordencompra_facturapdf, PDO::PARAM_STR);
                        break;
                    case '`ordencompra_fecha`':
                        $stmt->bindValue($identifier, $this->ordencompra_fecha, PDO::PARAM_STR);
                        break;
                    case '`ordencompra_importe`':
                        $stmt->bindValue($identifier, $this->ordencompra_importe, PDO::PARAM_STR);
                        break;
                    case '`ordencompra_status`':
                        $stmt->bindValue($identifier, $this->ordencompra_status, PDO::PARAM_STR);
                        break;
                    case '`ordencompra_fechaapagar`':
                        $stmt->bindValue($identifier, $this->ordencompra_fechaapagar, PDO::PARAM_STR);
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
        $this->setIdordencompra($pk);

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

            if ($this->aProveedor !== null) {
                if (!$this->aProveedor->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProveedor->getValidationFailures());
                }
            }


            if (($retval = OrdencompraPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collOrdencompradetalles !== null) {
                    foreach ($this->collOrdencompradetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTraspasos !== null) {
                    foreach ($this->collTraspasos as $referrerFK) {
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
        $pos = OrdencompraPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdordencompra();
                break;
            case 1:
                return $this->getIdproveedor();
                break;
            case 2:
                return $this->getOrdencompraNofactura();
                break;
            case 3:
                return $this->getOrdencompraFacturapdf();
                break;
            case 4:
                return $this->getOrdencompraFecha();
                break;
            case 5:
                return $this->getOrdencompraImporte();
                break;
            case 6:
                return $this->getOrdencompraStatus();
                break;
            case 7:
                return $this->getOrdencompraFechaapagar();
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
        if (isset($alreadyDumpedObjects['Ordencompra'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Ordencompra'][$this->getPrimaryKey()] = true;
        $keys = OrdencompraPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdordencompra(),
            $keys[1] => $this->getIdproveedor(),
            $keys[2] => $this->getOrdencompraNofactura(),
            $keys[3] => $this->getOrdencompraFacturapdf(),
            $keys[4] => $this->getOrdencompraFecha(),
            $keys[5] => $this->getOrdencompraImporte(),
            $keys[6] => $this->getOrdencompraStatus(),
            $keys[7] => $this->getOrdencompraFechaapagar(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aProveedor) {
                $result['Proveedor'] = $this->aProveedor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collOrdencompradetalles) {
                $result['Ordencompradetalles'] = $this->collOrdencompradetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTraspasos) {
                $result['Traspasos'] = $this->collTraspasos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = OrdencompraPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdordencompra($value);
                break;
            case 1:
                $this->setIdproveedor($value);
                break;
            case 2:
                $this->setOrdencompraNofactura($value);
                break;
            case 3:
                $this->setOrdencompraFacturapdf($value);
                break;
            case 4:
                $this->setOrdencompraFecha($value);
                break;
            case 5:
                $this->setOrdencompraImporte($value);
                break;
            case 6:
                $this->setOrdencompraStatus($value);
                break;
            case 7:
                $this->setOrdencompraFechaapagar($value);
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
        $keys = OrdencompraPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdordencompra($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdproveedor($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOrdencompraNofactura($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOrdencompraFacturapdf($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOrdencompraFecha($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOrdencompraImporte($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOrdencompraStatus($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOrdencompraFechaapagar($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OrdencompraPeer::DATABASE_NAME);

        if ($this->isColumnModified(OrdencompraPeer::IDORDENCOMPRA)) $criteria->add(OrdencompraPeer::IDORDENCOMPRA, $this->idordencompra);
        if ($this->isColumnModified(OrdencompraPeer::IDPROVEEDOR)) $criteria->add(OrdencompraPeer::IDPROVEEDOR, $this->idproveedor);
        if ($this->isColumnModified(OrdencompraPeer::ORDENCOMPRA_NOFACTURA)) $criteria->add(OrdencompraPeer::ORDENCOMPRA_NOFACTURA, $this->ordencompra_nofactura);
        if ($this->isColumnModified(OrdencompraPeer::ORDENCOMPRA_FACTURAPDF)) $criteria->add(OrdencompraPeer::ORDENCOMPRA_FACTURAPDF, $this->ordencompra_facturapdf);
        if ($this->isColumnModified(OrdencompraPeer::ORDENCOMPRA_FECHA)) $criteria->add(OrdencompraPeer::ORDENCOMPRA_FECHA, $this->ordencompra_fecha);
        if ($this->isColumnModified(OrdencompraPeer::ORDENCOMPRA_IMPORTE)) $criteria->add(OrdencompraPeer::ORDENCOMPRA_IMPORTE, $this->ordencompra_importe);
        if ($this->isColumnModified(OrdencompraPeer::ORDENCOMPRA_STATUS)) $criteria->add(OrdencompraPeer::ORDENCOMPRA_STATUS, $this->ordencompra_status);
        if ($this->isColumnModified(OrdencompraPeer::ORDENCOMPRA_FECHAAPAGAR)) $criteria->add(OrdencompraPeer::ORDENCOMPRA_FECHAAPAGAR, $this->ordencompra_fechaapagar);

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
        $criteria = new Criteria(OrdencompraPeer::DATABASE_NAME);
        $criteria->add(OrdencompraPeer::IDORDENCOMPRA, $this->idordencompra);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdordencompra();
    }

    /**
     * Generic method to set the primary key (idordencompra column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdordencompra($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdordencompra();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Ordencompra (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdproveedor($this->getIdproveedor());
        $copyObj->setOrdencompraNofactura($this->getOrdencompraNofactura());
        $copyObj->setOrdencompraFacturapdf($this->getOrdencompraFacturapdf());
        $copyObj->setOrdencompraFecha($this->getOrdencompraFecha());
        $copyObj->setOrdencompraImporte($this->getOrdencompraImporte());
        $copyObj->setOrdencompraStatus($this->getOrdencompraStatus());
        $copyObj->setOrdencompraFechaapagar($this->getOrdencompraFechaapagar());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getOrdencompradetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOrdencompradetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTraspasos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTraspaso($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdordencompra(NULL); // this is a auto-increment column, so set to default value
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
     * @return Ordencompra Clone of current object.
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
     * @return OrdencompraPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OrdencompraPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Proveedor object.
     *
     * @param                  Proveedor $v
     * @return Ordencompra The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProveedor(Proveedor $v = null)
    {
        if ($v === null) {
            $this->setIdproveedor(NULL);
        } else {
            $this->setIdproveedor($v->getIdproveedor());
        }

        $this->aProveedor = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Proveedor object, it will not be re-added.
        if ($v !== null) {
            $v->addOrdencompra($this);
        }


        return $this;
    }


    /**
     * Get the associated Proveedor object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Proveedor The associated Proveedor object.
     * @throws PropelException
     */
    public function getProveedor(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProveedor === null && ($this->idproveedor !== null) && $doQuery) {
            $this->aProveedor = ProveedorQuery::create()->findPk($this->idproveedor, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProveedor->addOrdencompras($this);
             */
        }

        return $this->aProveedor;
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
        if ('Ordencompradetalle' == $relationName) {
            $this->initOrdencompradetalles();
        }
        if ('Traspaso' == $relationName) {
            $this->initTraspasos();
        }
    }

    /**
     * Clears out the collOrdencompradetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Ordencompra The current object (for fluent API support)
     * @see        addOrdencompradetalles()
     */
    public function clearOrdencompradetalles()
    {
        $this->collOrdencompradetalles = null; // important to set this to null since that means it is uninitialized
        $this->collOrdencompradetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collOrdencompradetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialOrdencompradetalles($v = true)
    {
        $this->collOrdencompradetallesPartial = $v;
    }

    /**
     * Initializes the collOrdencompradetalles collection.
     *
     * By default this just sets the collOrdencompradetalles collection to an empty array (like clearcollOrdencompradetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOrdencompradetalles($overrideExisting = true)
    {
        if (null !== $this->collOrdencompradetalles && !$overrideExisting) {
            return;
        }
        $this->collOrdencompradetalles = new PropelObjectCollection();
        $this->collOrdencompradetalles->setModel('Ordencompradetalle');
    }

    /**
     * Gets an array of Ordencompradetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Ordencompra is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Ordencompradetalle[] List of Ordencompradetalle objects
     * @throws PropelException
     */
    public function getOrdencompradetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOrdencompradetallesPartial && !$this->isNew();
        if (null === $this->collOrdencompradetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOrdencompradetalles) {
                // return empty collection
                $this->initOrdencompradetalles();
            } else {
                $collOrdencompradetalles = OrdencompradetalleQuery::create(null, $criteria)
                    ->filterByOrdencompra($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOrdencompradetallesPartial && count($collOrdencompradetalles)) {
                      $this->initOrdencompradetalles(false);

                      foreach ($collOrdencompradetalles as $obj) {
                        if (false == $this->collOrdencompradetalles->contains($obj)) {
                          $this->collOrdencompradetalles->append($obj);
                        }
                      }

                      $this->collOrdencompradetallesPartial = true;
                    }

                    $collOrdencompradetalles->getInternalIterator()->rewind();

                    return $collOrdencompradetalles;
                }

                if ($partial && $this->collOrdencompradetalles) {
                    foreach ($this->collOrdencompradetalles as $obj) {
                        if ($obj->isNew()) {
                            $collOrdencompradetalles[] = $obj;
                        }
                    }
                }

                $this->collOrdencompradetalles = $collOrdencompradetalles;
                $this->collOrdencompradetallesPartial = false;
            }
        }

        return $this->collOrdencompradetalles;
    }

    /**
     * Sets a collection of Ordencompradetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ordencompradetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Ordencompra The current object (for fluent API support)
     */
    public function setOrdencompradetalles(PropelCollection $ordencompradetalles, PropelPDO $con = null)
    {
        $ordencompradetallesToDelete = $this->getOrdencompradetalles(new Criteria(), $con)->diff($ordencompradetalles);


        $this->ordencompradetallesScheduledForDeletion = $ordencompradetallesToDelete;

        foreach ($ordencompradetallesToDelete as $ordencompradetalleRemoved) {
            $ordencompradetalleRemoved->setOrdencompra(null);
        }

        $this->collOrdencompradetalles = null;
        foreach ($ordencompradetalles as $ordencompradetalle) {
            $this->addOrdencompradetalle($ordencompradetalle);
        }

        $this->collOrdencompradetalles = $ordencompradetalles;
        $this->collOrdencompradetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Ordencompradetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Ordencompradetalle objects.
     * @throws PropelException
     */
    public function countOrdencompradetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOrdencompradetallesPartial && !$this->isNew();
        if (null === $this->collOrdencompradetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOrdencompradetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOrdencompradetalles());
            }
            $query = OrdencompradetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOrdencompra($this)
                ->count($con);
        }

        return count($this->collOrdencompradetalles);
    }

    /**
     * Method called to associate a Ordencompradetalle object to this object
     * through the Ordencompradetalle foreign key attribute.
     *
     * @param    Ordencompradetalle $l Ordencompradetalle
     * @return Ordencompra The current object (for fluent API support)
     */
    public function addOrdencompradetalle(Ordencompradetalle $l)
    {
        if ($this->collOrdencompradetalles === null) {
            $this->initOrdencompradetalles();
            $this->collOrdencompradetallesPartial = true;
        }

        if (!in_array($l, $this->collOrdencompradetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOrdencompradetalle($l);

            if ($this->ordencompradetallesScheduledForDeletion and $this->ordencompradetallesScheduledForDeletion->contains($l)) {
                $this->ordencompradetallesScheduledForDeletion->remove($this->ordencompradetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Ordencompradetalle $ordencompradetalle The ordencompradetalle object to add.
     */
    protected function doAddOrdencompradetalle($ordencompradetalle)
    {
        $this->collOrdencompradetalles[]= $ordencompradetalle;
        $ordencompradetalle->setOrdencompra($this);
    }

    /**
     * @param	Ordencompradetalle $ordencompradetalle The ordencompradetalle object to remove.
     * @return Ordencompra The current object (for fluent API support)
     */
    public function removeOrdencompradetalle($ordencompradetalle)
    {
        if ($this->getOrdencompradetalles()->contains($ordencompradetalle)) {
            $this->collOrdencompradetalles->remove($this->collOrdencompradetalles->search($ordencompradetalle));
            if (null === $this->ordencompradetallesScheduledForDeletion) {
                $this->ordencompradetallesScheduledForDeletion = clone $this->collOrdencompradetalles;
                $this->ordencompradetallesScheduledForDeletion->clear();
            }
            $this->ordencompradetallesScheduledForDeletion[]= clone $ordencompradetalle;
            $ordencompradetalle->setOrdencompra(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Ordencompra is new, it will return
     * an empty collection; or if this Ordencompra has previously
     * been saved, it will retrieve related Ordencompradetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Ordencompra.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordencompradetalle[] List of Ordencompradetalle objects
     */
    public function getOrdencompradetallesJoinArticulovariante($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdencompradetalleQuery::create(null, $criteria);
        $query->joinWith('Articulovariante', $join_behavior);

        return $this->getOrdencompradetalles($query, $con);
    }

    /**
     * Clears out the collTraspasos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Ordencompra The current object (for fluent API support)
     * @see        addTraspasos()
     */
    public function clearTraspasos()
    {
        $this->collTraspasos = null; // important to set this to null since that means it is uninitialized
        $this->collTraspasosPartial = null;

        return $this;
    }

    /**
     * reset is the collTraspasos collection loaded partially
     *
     * @return void
     */
    public function resetPartialTraspasos($v = true)
    {
        $this->collTraspasosPartial = $v;
    }

    /**
     * Initializes the collTraspasos collection.
     *
     * By default this just sets the collTraspasos collection to an empty array (like clearcollTraspasos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTraspasos($overrideExisting = true)
    {
        if (null !== $this->collTraspasos && !$overrideExisting) {
            return;
        }
        $this->collTraspasos = new PropelObjectCollection();
        $this->collTraspasos->setModel('Traspaso');
    }

    /**
     * Gets an array of Traspaso objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Ordencompra is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Traspaso[] List of Traspaso objects
     * @throws PropelException
     */
    public function getTraspasos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTraspasosPartial && !$this->isNew();
        if (null === $this->collTraspasos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTraspasos) {
                // return empty collection
                $this->initTraspasos();
            } else {
                $collTraspasos = TraspasoQuery::create(null, $criteria)
                    ->filterByOrdencompra($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTraspasosPartial && count($collTraspasos)) {
                      $this->initTraspasos(false);

                      foreach ($collTraspasos as $obj) {
                        if (false == $this->collTraspasos->contains($obj)) {
                          $this->collTraspasos->append($obj);
                        }
                      }

                      $this->collTraspasosPartial = true;
                    }

                    $collTraspasos->getInternalIterator()->rewind();

                    return $collTraspasos;
                }

                if ($partial && $this->collTraspasos) {
                    foreach ($this->collTraspasos as $obj) {
                        if ($obj->isNew()) {
                            $collTraspasos[] = $obj;
                        }
                    }
                }

                $this->collTraspasos = $collTraspasos;
                $this->collTraspasosPartial = false;
            }
        }

        return $this->collTraspasos;
    }

    /**
     * Sets a collection of Traspaso objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $traspasos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Ordencompra The current object (for fluent API support)
     */
    public function setTraspasos(PropelCollection $traspasos, PropelPDO $con = null)
    {
        $traspasosToDelete = $this->getTraspasos(new Criteria(), $con)->diff($traspasos);


        $this->traspasosScheduledForDeletion = $traspasosToDelete;

        foreach ($traspasosToDelete as $traspasoRemoved) {
            $traspasoRemoved->setOrdencompra(null);
        }

        $this->collTraspasos = null;
        foreach ($traspasos as $traspaso) {
            $this->addTraspaso($traspaso);
        }

        $this->collTraspasos = $traspasos;
        $this->collTraspasosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Traspaso objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Traspaso objects.
     * @throws PropelException
     */
    public function countTraspasos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTraspasosPartial && !$this->isNew();
        if (null === $this->collTraspasos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTraspasos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTraspasos());
            }
            $query = TraspasoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOrdencompra($this)
                ->count($con);
        }

        return count($this->collTraspasos);
    }

    /**
     * Method called to associate a Traspaso object to this object
     * through the Traspaso foreign key attribute.
     *
     * @param    Traspaso $l Traspaso
     * @return Ordencompra The current object (for fluent API support)
     */
    public function addTraspaso(Traspaso $l)
    {
        if ($this->collTraspasos === null) {
            $this->initTraspasos();
            $this->collTraspasosPartial = true;
        }

        if (!in_array($l, $this->collTraspasos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTraspaso($l);

            if ($this->traspasosScheduledForDeletion and $this->traspasosScheduledForDeletion->contains($l)) {
                $this->traspasosScheduledForDeletion->remove($this->traspasosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Traspaso $traspaso The traspaso object to add.
     */
    protected function doAddTraspaso($traspaso)
    {
        $this->collTraspasos[]= $traspaso;
        $traspaso->setOrdencompra($this);
    }

    /**
     * @param	Traspaso $traspaso The traspaso object to remove.
     * @return Ordencompra The current object (for fluent API support)
     */
    public function removeTraspaso($traspaso)
    {
        if ($this->getTraspasos()->contains($traspaso)) {
            $this->collTraspasos->remove($this->collTraspasos->search($traspaso));
            if (null === $this->traspasosScheduledForDeletion) {
                $this->traspasosScheduledForDeletion = clone $this->collTraspasos;
                $this->traspasosScheduledForDeletion->clear();
            }
            $this->traspasosScheduledForDeletion[]= clone $traspaso;
            $traspaso->setOrdencompra(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Ordencompra is new, it will return
     * an empty collection; or if this Ordencompra has previously
     * been saved, it will retrieve related Traspasos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Ordencompra.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Traspaso[] List of Traspaso objects
     */
    public function getTraspasosJoinLugarRelatedByIdlugardestinatario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TraspasoQuery::create(null, $criteria);
        $query->joinWith('LugarRelatedByIdlugardestinatario', $join_behavior);

        return $this->getTraspasos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Ordencompra is new, it will return
     * an empty collection; or if this Ordencompra has previously
     * been saved, it will retrieve related Traspasos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Ordencompra.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Traspaso[] List of Traspaso objects
     */
    public function getTraspasosJoinLugarRelatedByIdlugarremitente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TraspasoQuery::create(null, $criteria);
        $query->joinWith('LugarRelatedByIdlugarremitente', $join_behavior);

        return $this->getTraspasos($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idordencompra = null;
        $this->idproveedor = null;
        $this->ordencompra_nofactura = null;
        $this->ordencompra_facturapdf = null;
        $this->ordencompra_fecha = null;
        $this->ordencompra_importe = null;
        $this->ordencompra_status = null;
        $this->ordencompra_fechaapagar = null;
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
            if ($this->collOrdencompradetalles) {
                foreach ($this->collOrdencompradetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTraspasos) {
                foreach ($this->collTraspasos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aProveedor instanceof Persistent) {
              $this->aProveedor->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collOrdencompradetalles instanceof PropelCollection) {
            $this->collOrdencompradetalles->clearIterator();
        }
        $this->collOrdencompradetalles = null;
        if ($this->collTraspasos instanceof PropelCollection) {
            $this->collTraspasos->clearIterator();
        }
        $this->collTraspasos = null;
        $this->aProveedor = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OrdencompraPeer::DEFAULT_STRING_FORMAT);
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
