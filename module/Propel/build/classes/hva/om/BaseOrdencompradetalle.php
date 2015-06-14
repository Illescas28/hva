<?php


/**
 * Base class that represents a row from the 'ordencompradetalle' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseOrdencompradetalle extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OrdencompradetallePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OrdencompradetallePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idordencompradetalle field.
     * @var        int
     */
    protected $idordencompradetalle;

    /**
     * The value for the idordencompra field.
     * @var        int
     */
    protected $idordencompra;

    /**
     * The value for the idarticulovariante field.
     * @var        int
     */
    protected $idarticulovariante;

    /**
     * The value for the ordencompradetalle_cantidad field.
     * @var        string
     */
    protected $ordencompradetalle_cantidad;

    /**
     * The value for the ordencompradetalle_costo field.
     * @var        string
     */
    protected $ordencompradetalle_costo;

    /**
     * The value for the ordencompradetalle_precio field.
     * @var        string
     */
    protected $ordencompradetalle_precio;

    /**
     * The value for the ordencompradetalle_importe field.
     * @var        string
     */
    protected $ordencompradetalle_importe;

    /**
     * The value for the ordencompradetalle_caducidad field.
     * @var        string
     */
    protected $ordencompradetalle_caducidad;

    /**
     * The value for the ordencompradetalle_existencia field.
     * @var        string
     */
    protected $ordencompradetalle_existencia;

    /**
     * @var        Articulovariante
     */
    protected $aArticulovariante;

    /**
     * @var        Ordencompra
     */
    protected $aOrdencompra;

    /**
     * @var        PropelObjectCollection|Lugarinventario[] Collection to store aggregation of Lugarinventario objects.
     */
    protected $collLugarinventarios;
    protected $collLugarinventariosPartial;

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
    protected $lugarinventariosScheduledForDeletion = null;

    /**
     * Get the [idordencompradetalle] column value.
     *
     * @return int
     */
    public function getIdordencompradetalle()
    {

        return $this->idordencompradetalle;
    }

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
     * Get the [idarticulovariante] column value.
     *
     * @return int
     */
    public function getIdarticulovariante()
    {

        return $this->idarticulovariante;
    }

    /**
     * Get the [ordencompradetalle_cantidad] column value.
     *
     * @return string
     */
    public function getOrdencompradetalleCantidad()
    {

        return $this->ordencompradetalle_cantidad;
    }

    /**
     * Get the [ordencompradetalle_costo] column value.
     *
     * @return string
     */
    public function getOrdencompradetalleCosto()
    {

        return $this->ordencompradetalle_costo;
    }

    /**
     * Get the [ordencompradetalle_precio] column value.
     *
     * @return string
     */
    public function getOrdencompradetallePrecio()
    {

        return $this->ordencompradetalle_precio;
    }

    /**
     * Get the [ordencompradetalle_importe] column value.
     *
     * @return string
     */
    public function getOrdencompradetalleImporte()
    {

        return $this->ordencompradetalle_importe;
    }

    /**
     * Get the [optionally formatted] temporal [ordencompradetalle_caducidad] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOrdencompradetalleCaducidad($format = '%x')
    {
        if ($this->ordencompradetalle_caducidad === null) {
            return null;
        }

        if ($this->ordencompradetalle_caducidad === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->ordencompradetalle_caducidad);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->ordencompradetalle_caducidad, true), $x);
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
     * Get the [ordencompradetalle_existencia] column value.
     *
     * @return string
     */
    public function getOrdencompradetalleExistencia()
    {

        return $this->ordencompradetalle_existencia;
    }

    /**
     * Set the value of [idordencompradetalle] column.
     *
     * @param  int $v new value
     * @return Ordencompradetalle The current object (for fluent API support)
     */
    public function setIdordencompradetalle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idordencompradetalle !== $v) {
            $this->idordencompradetalle = $v;
            $this->modifiedColumns[] = OrdencompradetallePeer::IDORDENCOMPRADETALLE;
        }


        return $this;
    } // setIdordencompradetalle()

    /**
     * Set the value of [idordencompra] column.
     *
     * @param  int $v new value
     * @return Ordencompradetalle The current object (for fluent API support)
     */
    public function setIdordencompra($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idordencompra !== $v) {
            $this->idordencompra = $v;
            $this->modifiedColumns[] = OrdencompradetallePeer::IDORDENCOMPRA;
        }

        if ($this->aOrdencompra !== null && $this->aOrdencompra->getIdordencompra() !== $v) {
            $this->aOrdencompra = null;
        }


        return $this;
    } // setIdordencompra()

    /**
     * Set the value of [idarticulovariante] column.
     *
     * @param  int $v new value
     * @return Ordencompradetalle The current object (for fluent API support)
     */
    public function setIdarticulovariante($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idarticulovariante !== $v) {
            $this->idarticulovariante = $v;
            $this->modifiedColumns[] = OrdencompradetallePeer::IDARTICULOVARIANTE;
        }

        if ($this->aArticulovariante !== null && $this->aArticulovariante->getIdarticulovariante() !== $v) {
            $this->aArticulovariante = null;
        }


        return $this;
    } // setIdarticulovariante()

    /**
     * Set the value of [ordencompradetalle_cantidad] column.
     *
     * @param  string $v new value
     * @return Ordencompradetalle The current object (for fluent API support)
     */
    public function setOrdencompradetalleCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ordencompradetalle_cantidad !== $v) {
            $this->ordencompradetalle_cantidad = $v;
            $this->modifiedColumns[] = OrdencompradetallePeer::ORDENCOMPRADETALLE_CANTIDAD;
        }


        return $this;
    } // setOrdencompradetalleCantidad()

    /**
     * Set the value of [ordencompradetalle_costo] column.
     *
     * @param  string $v new value
     * @return Ordencompradetalle The current object (for fluent API support)
     */
    public function setOrdencompradetalleCosto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ordencompradetalle_costo !== $v) {
            $this->ordencompradetalle_costo = $v;
            $this->modifiedColumns[] = OrdencompradetallePeer::ORDENCOMPRADETALLE_COSTO;
        }


        return $this;
    } // setOrdencompradetalleCosto()

    /**
     * Set the value of [ordencompradetalle_precio] column.
     *
     * @param  string $v new value
     * @return Ordencompradetalle The current object (for fluent API support)
     */
    public function setOrdencompradetallePrecio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ordencompradetalle_precio !== $v) {
            $this->ordencompradetalle_precio = $v;
            $this->modifiedColumns[] = OrdencompradetallePeer::ORDENCOMPRADETALLE_PRECIO;
        }


        return $this;
    } // setOrdencompradetallePrecio()

    /**
     * Set the value of [ordencompradetalle_importe] column.
     *
     * @param  string $v new value
     * @return Ordencompradetalle The current object (for fluent API support)
     */
    public function setOrdencompradetalleImporte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ordencompradetalle_importe !== $v) {
            $this->ordencompradetalle_importe = $v;
            $this->modifiedColumns[] = OrdencompradetallePeer::ORDENCOMPRADETALLE_IMPORTE;
        }


        return $this;
    } // setOrdencompradetalleImporte()

    /**
     * Sets the value of [ordencompradetalle_caducidad] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ordencompradetalle The current object (for fluent API support)
     */
    public function setOrdencompradetalleCaducidad($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ordencompradetalle_caducidad !== null || $dt !== null) {
            $currentDateAsString = ($this->ordencompradetalle_caducidad !== null && $tmpDt = new DateTime($this->ordencompradetalle_caducidad)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ordencompradetalle_caducidad = $newDateAsString;
                $this->modifiedColumns[] = OrdencompradetallePeer::ORDENCOMPRADETALLE_CADUCIDAD;
            }
        } // if either are not null


        return $this;
    } // setOrdencompradetalleCaducidad()

    /**
     * Set the value of [ordencompradetalle_existencia] column.
     *
     * @param  string $v new value
     * @return Ordencompradetalle The current object (for fluent API support)
     */
    public function setOrdencompradetalleExistencia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ordencompradetalle_existencia !== $v) {
            $this->ordencompradetalle_existencia = $v;
            $this->modifiedColumns[] = OrdencompradetallePeer::ORDENCOMPRADETALLE_EXISTENCIA;
        }


        return $this;
    } // setOrdencompradetalleExistencia()

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

            $this->idordencompradetalle = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idordencompra = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idarticulovariante = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->ordencompradetalle_cantidad = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->ordencompradetalle_costo = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->ordencompradetalle_precio = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->ordencompradetalle_importe = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->ordencompradetalle_caducidad = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->ordencompradetalle_existencia = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = OrdencompradetallePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Ordencompradetalle object", $e);
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

        if ($this->aOrdencompra !== null && $this->idordencompra !== $this->aOrdencompra->getIdordencompra()) {
            $this->aOrdencompra = null;
        }
        if ($this->aArticulovariante !== null && $this->idarticulovariante !== $this->aArticulovariante->getIdarticulovariante()) {
            $this->aArticulovariante = null;
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
            $con = Propel::getConnection(OrdencompradetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OrdencompradetallePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aArticulovariante = null;
            $this->aOrdencompra = null;
            $this->collLugarinventarios = null;

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
            $con = Propel::getConnection(OrdencompradetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OrdencompradetalleQuery::create()
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
            $con = Propel::getConnection(OrdencompradetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OrdencompradetallePeer::addInstanceToPool($this);
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

            if ($this->aArticulovariante !== null) {
                if ($this->aArticulovariante->isModified() || $this->aArticulovariante->isNew()) {
                    $affectedRows += $this->aArticulovariante->save($con);
                }
                $this->setArticulovariante($this->aArticulovariante);
            }

            if ($this->aOrdencompra !== null) {
                if ($this->aOrdencompra->isModified() || $this->aOrdencompra->isNew()) {
                    $affectedRows += $this->aOrdencompra->save($con);
                }
                $this->setOrdencompra($this->aOrdencompra);
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

            if ($this->lugarinventariosScheduledForDeletion !== null) {
                if (!$this->lugarinventariosScheduledForDeletion->isEmpty()) {
                    LugarinventarioQuery::create()
                        ->filterByPrimaryKeys($this->lugarinventariosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->lugarinventariosScheduledForDeletion = null;
                }
            }

            if ($this->collLugarinventarios !== null) {
                foreach ($this->collLugarinventarios as $referrerFK) {
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

        $this->modifiedColumns[] = OrdencompradetallePeer::IDORDENCOMPRADETALLE;
        if (null !== $this->idordencompradetalle) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OrdencompradetallePeer::IDORDENCOMPRADETALLE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OrdencompradetallePeer::IDORDENCOMPRADETALLE)) {
            $modifiedColumns[':p' . $index++]  = '`idordencompradetalle`';
        }
        if ($this->isColumnModified(OrdencompradetallePeer::IDORDENCOMPRA)) {
            $modifiedColumns[':p' . $index++]  = '`idordencompra`';
        }
        if ($this->isColumnModified(OrdencompradetallePeer::IDARTICULOVARIANTE)) {
            $modifiedColumns[':p' . $index++]  = '`idarticulovariante`';
        }
        if ($this->isColumnModified(OrdencompradetallePeer::ORDENCOMPRADETALLE_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`ordencompradetalle_cantidad`';
        }
        if ($this->isColumnModified(OrdencompradetallePeer::ORDENCOMPRADETALLE_COSTO)) {
            $modifiedColumns[':p' . $index++]  = '`ordencompradetalle_costo`';
        }
        if ($this->isColumnModified(OrdencompradetallePeer::ORDENCOMPRADETALLE_PRECIO)) {
            $modifiedColumns[':p' . $index++]  = '`ordencompradetalle_precio`';
        }
        if ($this->isColumnModified(OrdencompradetallePeer::ORDENCOMPRADETALLE_IMPORTE)) {
            $modifiedColumns[':p' . $index++]  = '`ordencompradetalle_importe`';
        }
        if ($this->isColumnModified(OrdencompradetallePeer::ORDENCOMPRADETALLE_CADUCIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`ordencompradetalle_caducidad`';
        }
        if ($this->isColumnModified(OrdencompradetallePeer::ORDENCOMPRADETALLE_EXISTENCIA)) {
            $modifiedColumns[':p' . $index++]  = '`ordencompradetalle_existencia`';
        }

        $sql = sprintf(
            'INSERT INTO `ordencompradetalle` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idordencompradetalle`':
                        $stmt->bindValue($identifier, $this->idordencompradetalle, PDO::PARAM_INT);
                        break;
                    case '`idordencompra`':
                        $stmt->bindValue($identifier, $this->idordencompra, PDO::PARAM_INT);
                        break;
                    case '`idarticulovariante`':
                        $stmt->bindValue($identifier, $this->idarticulovariante, PDO::PARAM_INT);
                        break;
                    case '`ordencompradetalle_cantidad`':
                        $stmt->bindValue($identifier, $this->ordencompradetalle_cantidad, PDO::PARAM_STR);
                        break;
                    case '`ordencompradetalle_costo`':
                        $stmt->bindValue($identifier, $this->ordencompradetalle_costo, PDO::PARAM_STR);
                        break;
                    case '`ordencompradetalle_precio`':
                        $stmt->bindValue($identifier, $this->ordencompradetalle_precio, PDO::PARAM_STR);
                        break;
                    case '`ordencompradetalle_importe`':
                        $stmt->bindValue($identifier, $this->ordencompradetalle_importe, PDO::PARAM_STR);
                        break;
                    case '`ordencompradetalle_caducidad`':
                        $stmt->bindValue($identifier, $this->ordencompradetalle_caducidad, PDO::PARAM_STR);
                        break;
                    case '`ordencompradetalle_existencia`':
                        $stmt->bindValue($identifier, $this->ordencompradetalle_existencia, PDO::PARAM_STR);
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
        $this->setIdordencompradetalle($pk);

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

            if ($this->aArticulovariante !== null) {
                if (!$this->aArticulovariante->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aArticulovariante->getValidationFailures());
                }
            }

            if ($this->aOrdencompra !== null) {
                if (!$this->aOrdencompra->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOrdencompra->getValidationFailures());
                }
            }


            if (($retval = OrdencompradetallePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collLugarinventarios !== null) {
                    foreach ($this->collLugarinventarios as $referrerFK) {
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
        $pos = OrdencompradetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdordencompradetalle();
                break;
            case 1:
                return $this->getIdordencompra();
                break;
            case 2:
                return $this->getIdarticulovariante();
                break;
            case 3:
                return $this->getOrdencompradetalleCantidad();
                break;
            case 4:
                return $this->getOrdencompradetalleCosto();
                break;
            case 5:
                return $this->getOrdencompradetallePrecio();
                break;
            case 6:
                return $this->getOrdencompradetalleImporte();
                break;
            case 7:
                return $this->getOrdencompradetalleCaducidad();
                break;
            case 8:
                return $this->getOrdencompradetalleExistencia();
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
        if (isset($alreadyDumpedObjects['Ordencompradetalle'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Ordencompradetalle'][$this->getPrimaryKey()] = true;
        $keys = OrdencompradetallePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdordencompradetalle(),
            $keys[1] => $this->getIdordencompra(),
            $keys[2] => $this->getIdarticulovariante(),
            $keys[3] => $this->getOrdencompradetalleCantidad(),
            $keys[4] => $this->getOrdencompradetalleCosto(),
            $keys[5] => $this->getOrdencompradetallePrecio(),
            $keys[6] => $this->getOrdencompradetalleImporte(),
            $keys[7] => $this->getOrdencompradetalleCaducidad(),
            $keys[8] => $this->getOrdencompradetalleExistencia(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aArticulovariante) {
                $result['Articulovariante'] = $this->aArticulovariante->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aOrdencompra) {
                $result['Ordencompra'] = $this->aOrdencompra->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collLugarinventarios) {
                $result['Lugarinventarios'] = $this->collLugarinventarios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = OrdencompradetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdordencompradetalle($value);
                break;
            case 1:
                $this->setIdordencompra($value);
                break;
            case 2:
                $this->setIdarticulovariante($value);
                break;
            case 3:
                $this->setOrdencompradetalleCantidad($value);
                break;
            case 4:
                $this->setOrdencompradetalleCosto($value);
                break;
            case 5:
                $this->setOrdencompradetallePrecio($value);
                break;
            case 6:
                $this->setOrdencompradetalleImporte($value);
                break;
            case 7:
                $this->setOrdencompradetalleCaducidad($value);
                break;
            case 8:
                $this->setOrdencompradetalleExistencia($value);
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
        $keys = OrdencompradetallePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdordencompradetalle($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdordencompra($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdarticulovariante($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOrdencompradetalleCantidad($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOrdencompradetalleCosto($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOrdencompradetallePrecio($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOrdencompradetalleImporte($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOrdencompradetalleCaducidad($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOrdencompradetalleExistencia($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OrdencompradetallePeer::DATABASE_NAME);

        if ($this->isColumnModified(OrdencompradetallePeer::IDORDENCOMPRADETALLE)) $criteria->add(OrdencompradetallePeer::IDORDENCOMPRADETALLE, $this->idordencompradetalle);
        if ($this->isColumnModified(OrdencompradetallePeer::IDORDENCOMPRA)) $criteria->add(OrdencompradetallePeer::IDORDENCOMPRA, $this->idordencompra);
        if ($this->isColumnModified(OrdencompradetallePeer::IDARTICULOVARIANTE)) $criteria->add(OrdencompradetallePeer::IDARTICULOVARIANTE, $this->idarticulovariante);
        if ($this->isColumnModified(OrdencompradetallePeer::ORDENCOMPRADETALLE_CANTIDAD)) $criteria->add(OrdencompradetallePeer::ORDENCOMPRADETALLE_CANTIDAD, $this->ordencompradetalle_cantidad);
        if ($this->isColumnModified(OrdencompradetallePeer::ORDENCOMPRADETALLE_COSTO)) $criteria->add(OrdencompradetallePeer::ORDENCOMPRADETALLE_COSTO, $this->ordencompradetalle_costo);
        if ($this->isColumnModified(OrdencompradetallePeer::ORDENCOMPRADETALLE_PRECIO)) $criteria->add(OrdencompradetallePeer::ORDENCOMPRADETALLE_PRECIO, $this->ordencompradetalle_precio);
        if ($this->isColumnModified(OrdencompradetallePeer::ORDENCOMPRADETALLE_IMPORTE)) $criteria->add(OrdencompradetallePeer::ORDENCOMPRADETALLE_IMPORTE, $this->ordencompradetalle_importe);
        if ($this->isColumnModified(OrdencompradetallePeer::ORDENCOMPRADETALLE_CADUCIDAD)) $criteria->add(OrdencompradetallePeer::ORDENCOMPRADETALLE_CADUCIDAD, $this->ordencompradetalle_caducidad);
        if ($this->isColumnModified(OrdencompradetallePeer::ORDENCOMPRADETALLE_EXISTENCIA)) $criteria->add(OrdencompradetallePeer::ORDENCOMPRADETALLE_EXISTENCIA, $this->ordencompradetalle_existencia);

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
        $criteria = new Criteria(OrdencompradetallePeer::DATABASE_NAME);
        $criteria->add(OrdencompradetallePeer::IDORDENCOMPRADETALLE, $this->idordencompradetalle);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdordencompradetalle();
    }

    /**
     * Generic method to set the primary key (idordencompradetalle column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdordencompradetalle($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdordencompradetalle();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Ordencompradetalle (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdordencompra($this->getIdordencompra());
        $copyObj->setIdarticulovariante($this->getIdarticulovariante());
        $copyObj->setOrdencompradetalleCantidad($this->getOrdencompradetalleCantidad());
        $copyObj->setOrdencompradetalleCosto($this->getOrdencompradetalleCosto());
        $copyObj->setOrdencompradetallePrecio($this->getOrdencompradetallePrecio());
        $copyObj->setOrdencompradetalleImporte($this->getOrdencompradetalleImporte());
        $copyObj->setOrdencompradetalleCaducidad($this->getOrdencompradetalleCaducidad());
        $copyObj->setOrdencompradetalleExistencia($this->getOrdencompradetalleExistencia());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getLugarinventarios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLugarinventario($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdordencompradetalle(NULL); // this is a auto-increment column, so set to default value
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
     * @return Ordencompradetalle Clone of current object.
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
     * @return OrdencompradetallePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OrdencompradetallePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Articulovariante object.
     *
     * @param                  Articulovariante $v
     * @return Ordencompradetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setArticulovariante(Articulovariante $v = null)
    {
        if ($v === null) {
            $this->setIdarticulovariante(NULL);
        } else {
            $this->setIdarticulovariante($v->getIdarticulovariante());
        }

        $this->aArticulovariante = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Articulovariante object, it will not be re-added.
        if ($v !== null) {
            $v->addOrdencompradetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Articulovariante object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Articulovariante The associated Articulovariante object.
     * @throws PropelException
     */
    public function getArticulovariante(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aArticulovariante === null && ($this->idarticulovariante !== null) && $doQuery) {
            $this->aArticulovariante = ArticulovarianteQuery::create()->findPk($this->idarticulovariante, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aArticulovariante->addOrdencompradetalles($this);
             */
        }

        return $this->aArticulovariante;
    }

    /**
     * Declares an association between this object and a Ordencompra object.
     *
     * @param                  Ordencompra $v
     * @return Ordencompradetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOrdencompra(Ordencompra $v = null)
    {
        if ($v === null) {
            $this->setIdordencompra(NULL);
        } else {
            $this->setIdordencompra($v->getIdordencompra());
        }

        $this->aOrdencompra = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Ordencompra object, it will not be re-added.
        if ($v !== null) {
            $v->addOrdencompradetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Ordencompra object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Ordencompra The associated Ordencompra object.
     * @throws PropelException
     */
    public function getOrdencompra(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOrdencompra === null && ($this->idordencompra !== null) && $doQuery) {
            $this->aOrdencompra = OrdencompraQuery::create()->findPk($this->idordencompra, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOrdencompra->addOrdencompradetalles($this);
             */
        }

        return $this->aOrdencompra;
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
        if ('Lugarinventario' == $relationName) {
            $this->initLugarinventarios();
        }
    }

    /**
     * Clears out the collLugarinventarios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Ordencompradetalle The current object (for fluent API support)
     * @see        addLugarinventarios()
     */
    public function clearLugarinventarios()
    {
        $this->collLugarinventarios = null; // important to set this to null since that means it is uninitialized
        $this->collLugarinventariosPartial = null;

        return $this;
    }

    /**
     * reset is the collLugarinventarios collection loaded partially
     *
     * @return void
     */
    public function resetPartialLugarinventarios($v = true)
    {
        $this->collLugarinventariosPartial = $v;
    }

    /**
     * Initializes the collLugarinventarios collection.
     *
     * By default this just sets the collLugarinventarios collection to an empty array (like clearcollLugarinventarios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLugarinventarios($overrideExisting = true)
    {
        if (null !== $this->collLugarinventarios && !$overrideExisting) {
            return;
        }
        $this->collLugarinventarios = new PropelObjectCollection();
        $this->collLugarinventarios->setModel('Lugarinventario');
    }

    /**
     * Gets an array of Lugarinventario objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Ordencompradetalle is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Lugarinventario[] List of Lugarinventario objects
     * @throws PropelException
     */
    public function getLugarinventarios($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLugarinventariosPartial && !$this->isNew();
        if (null === $this->collLugarinventarios || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLugarinventarios) {
                // return empty collection
                $this->initLugarinventarios();
            } else {
                $collLugarinventarios = LugarinventarioQuery::create(null, $criteria)
                    ->filterByOrdencompradetalle($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLugarinventariosPartial && count($collLugarinventarios)) {
                      $this->initLugarinventarios(false);

                      foreach ($collLugarinventarios as $obj) {
                        if (false == $this->collLugarinventarios->contains($obj)) {
                          $this->collLugarinventarios->append($obj);
                        }
                      }

                      $this->collLugarinventariosPartial = true;
                    }

                    $collLugarinventarios->getInternalIterator()->rewind();

                    return $collLugarinventarios;
                }

                if ($partial && $this->collLugarinventarios) {
                    foreach ($this->collLugarinventarios as $obj) {
                        if ($obj->isNew()) {
                            $collLugarinventarios[] = $obj;
                        }
                    }
                }

                $this->collLugarinventarios = $collLugarinventarios;
                $this->collLugarinventariosPartial = false;
            }
        }

        return $this->collLugarinventarios;
    }

    /**
     * Sets a collection of Lugarinventario objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lugarinventarios A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Ordencompradetalle The current object (for fluent API support)
     */
    public function setLugarinventarios(PropelCollection $lugarinventarios, PropelPDO $con = null)
    {
        $lugarinventariosToDelete = $this->getLugarinventarios(new Criteria(), $con)->diff($lugarinventarios);


        $this->lugarinventariosScheduledForDeletion = $lugarinventariosToDelete;

        foreach ($lugarinventariosToDelete as $lugarinventarioRemoved) {
            $lugarinventarioRemoved->setOrdencompradetalle(null);
        }

        $this->collLugarinventarios = null;
        foreach ($lugarinventarios as $lugarinventario) {
            $this->addLugarinventario($lugarinventario);
        }

        $this->collLugarinventarios = $lugarinventarios;
        $this->collLugarinventariosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Lugarinventario objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Lugarinventario objects.
     * @throws PropelException
     */
    public function countLugarinventarios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLugarinventariosPartial && !$this->isNew();
        if (null === $this->collLugarinventarios || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLugarinventarios) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLugarinventarios());
            }
            $query = LugarinventarioQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOrdencompradetalle($this)
                ->count($con);
        }

        return count($this->collLugarinventarios);
    }

    /**
     * Method called to associate a Lugarinventario object to this object
     * through the Lugarinventario foreign key attribute.
     *
     * @param    Lugarinventario $l Lugarinventario
     * @return Ordencompradetalle The current object (for fluent API support)
     */
    public function addLugarinventario(Lugarinventario $l)
    {
        if ($this->collLugarinventarios === null) {
            $this->initLugarinventarios();
            $this->collLugarinventariosPartial = true;
        }

        if (!in_array($l, $this->collLugarinventarios->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLugarinventario($l);

            if ($this->lugarinventariosScheduledForDeletion and $this->lugarinventariosScheduledForDeletion->contains($l)) {
                $this->lugarinventariosScheduledForDeletion->remove($this->lugarinventariosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Lugarinventario $lugarinventario The lugarinventario object to add.
     */
    protected function doAddLugarinventario($lugarinventario)
    {
        $this->collLugarinventarios[]= $lugarinventario;
        $lugarinventario->setOrdencompradetalle($this);
    }

    /**
     * @param	Lugarinventario $lugarinventario The lugarinventario object to remove.
     * @return Ordencompradetalle The current object (for fluent API support)
     */
    public function removeLugarinventario($lugarinventario)
    {
        if ($this->getLugarinventarios()->contains($lugarinventario)) {
            $this->collLugarinventarios->remove($this->collLugarinventarios->search($lugarinventario));
            if (null === $this->lugarinventariosScheduledForDeletion) {
                $this->lugarinventariosScheduledForDeletion = clone $this->collLugarinventarios;
                $this->lugarinventariosScheduledForDeletion->clear();
            }
            $this->lugarinventariosScheduledForDeletion[]= clone $lugarinventario;
            $lugarinventario->setOrdencompradetalle(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Ordencompradetalle is new, it will return
     * an empty collection; or if this Ordencompradetalle has previously
     * been saved, it will retrieve related Lugarinventarios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Ordencompradetalle.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Lugarinventario[] List of Lugarinventario objects
     */
    public function getLugarinventariosJoinLugar($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LugarinventarioQuery::create(null, $criteria);
        $query->joinWith('Lugar', $join_behavior);

        return $this->getLugarinventarios($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idordencompradetalle = null;
        $this->idordencompra = null;
        $this->idarticulovariante = null;
        $this->ordencompradetalle_cantidad = null;
        $this->ordencompradetalle_costo = null;
        $this->ordencompradetalle_precio = null;
        $this->ordencompradetalle_importe = null;
        $this->ordencompradetalle_caducidad = null;
        $this->ordencompradetalle_existencia = null;
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
            if ($this->collLugarinventarios) {
                foreach ($this->collLugarinventarios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aArticulovariante instanceof Persistent) {
              $this->aArticulovariante->clearAllReferences($deep);
            }
            if ($this->aOrdencompra instanceof Persistent) {
              $this->aOrdencompra->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collLugarinventarios instanceof PropelCollection) {
            $this->collLugarinventarios->clearIterator();
        }
        $this->collLugarinventarios = null;
        $this->aArticulovariante = null;
        $this->aOrdencompra = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OrdencompradetallePeer::DEFAULT_STRING_FORMAT);
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
