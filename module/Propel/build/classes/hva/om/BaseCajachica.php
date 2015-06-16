<?php


/**
 * Base class that represents a row from the 'cajachica' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseCajachica extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CajachicaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CajachicaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idcajachica field.
     * @var        int
     */
    protected $idcajachica;

    /**
     * The value for the cajachica_nombre field.
     * @var        string
     */
    protected $cajachica_nombre;

    /**
     * The value for the cajachica_descripcion field.
     * @var        string
     */
    protected $cajachica_descripcion;

    /**
     * The value for the cajachica_fechainicio field.
     * @var        string
     */
    protected $cajachica_fechainicio;

    /**
     * The value for the cajachica_fechafinal field.
     * @var        string
     */
    protected $cajachica_fechafinal;

    /**
     * The value for the cajachica_total field.
     * @var        string
     */
    protected $cajachica_total;

    /**
     * @var        PropelObjectCollection|Cajachicadetalle[] Collection to store aggregation of Cajachicadetalle objects.
     */
    protected $collCajachicadetalles;
    protected $collCajachicadetallesPartial;

    /**
     * @var        PropelObjectCollection|Venta[] Collection to store aggregation of Venta objects.
     */
    protected $collVentas;
    protected $collVentasPartial;

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
    protected $cajachicadetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ventasScheduledForDeletion = null;

    /**
     * Get the [idcajachica] column value.
     *
     * @return int
     */
    public function getIdcajachica()
    {

        return $this->idcajachica;
    }

    /**
     * Get the [cajachica_nombre] column value.
     *
     * @return string
     */
    public function getCajachicaNombre()
    {

        return $this->cajachica_nombre;
    }

    /**
     * Get the [cajachica_descripcion] column value.
     *
     * @return string
     */
    public function getCajachicaDescripcion()
    {

        return $this->cajachica_descripcion;
    }

    /**
     * Get the [optionally formatted] temporal [cajachica_fechainicio] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCajachicaFechainicio($format = '%x')
    {
        if ($this->cajachica_fechainicio === null) {
            return null;
        }

        if ($this->cajachica_fechainicio === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->cajachica_fechainicio);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->cajachica_fechainicio, true), $x);
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
     * Get the [optionally formatted] temporal [cajachica_fechafinal] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCajachicaFechafinal($format = '%x')
    {
        if ($this->cajachica_fechafinal === null) {
            return null;
        }

        if ($this->cajachica_fechafinal === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->cajachica_fechafinal);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->cajachica_fechafinal, true), $x);
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
     * Get the [cajachica_total] column value.
     *
     * @return string
     */
    public function getCajachicaTotal()
    {

        return $this->cajachica_total;
    }

    /**
     * Set the value of [idcajachica] column.
     *
     * @param  int $v new value
     * @return Cajachica The current object (for fluent API support)
     */
    public function setIdcajachica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcajachica !== $v) {
            $this->idcajachica = $v;
            $this->modifiedColumns[] = CajachicaPeer::IDCAJACHICA;
        }


        return $this;
    } // setIdcajachica()

    /**
     * Set the value of [cajachica_nombre] column.
     *
     * @param  string $v new value
     * @return Cajachica The current object (for fluent API support)
     */
    public function setCajachicaNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cajachica_nombre !== $v) {
            $this->cajachica_nombre = $v;
            $this->modifiedColumns[] = CajachicaPeer::CAJACHICA_NOMBRE;
        }


        return $this;
    } // setCajachicaNombre()

    /**
     * Set the value of [cajachica_descripcion] column.
     *
     * @param  string $v new value
     * @return Cajachica The current object (for fluent API support)
     */
    public function setCajachicaDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cajachica_descripcion !== $v) {
            $this->cajachica_descripcion = $v;
            $this->modifiedColumns[] = CajachicaPeer::CAJACHICA_DESCRIPCION;
        }


        return $this;
    } // setCajachicaDescripcion()

    /**
     * Sets the value of [cajachica_fechainicio] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cajachica The current object (for fluent API support)
     */
    public function setCajachicaFechainicio($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->cajachica_fechainicio !== null || $dt !== null) {
            $currentDateAsString = ($this->cajachica_fechainicio !== null && $tmpDt = new DateTime($this->cajachica_fechainicio)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->cajachica_fechainicio = $newDateAsString;
                $this->modifiedColumns[] = CajachicaPeer::CAJACHICA_FECHAINICIO;
            }
        } // if either are not null


        return $this;
    } // setCajachicaFechainicio()

    /**
     * Sets the value of [cajachica_fechafinal] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cajachica The current object (for fluent API support)
     */
    public function setCajachicaFechafinal($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->cajachica_fechafinal !== null || $dt !== null) {
            $currentDateAsString = ($this->cajachica_fechafinal !== null && $tmpDt = new DateTime($this->cajachica_fechafinal)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->cajachica_fechafinal = $newDateAsString;
                $this->modifiedColumns[] = CajachicaPeer::CAJACHICA_FECHAFINAL;
            }
        } // if either are not null


        return $this;
    } // setCajachicaFechafinal()

    /**
     * Set the value of [cajachica_total] column.
     *
     * @param  string $v new value
     * @return Cajachica The current object (for fluent API support)
     */
    public function setCajachicaTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cajachica_total !== $v) {
            $this->cajachica_total = $v;
            $this->modifiedColumns[] = CajachicaPeer::CAJACHICA_TOTAL;
        }


        return $this;
    } // setCajachicaTotal()

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

            $this->idcajachica = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->cajachica_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->cajachica_descripcion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->cajachica_fechainicio = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->cajachica_fechafinal = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->cajachica_total = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = CajachicaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Cajachica object", $e);
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
            $con = Propel::getConnection(CajachicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CajachicaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCajachicadetalles = null;

            $this->collVentas = null;

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
            $con = Propel::getConnection(CajachicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CajachicaQuery::create()
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
            $con = Propel::getConnection(CajachicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CajachicaPeer::addInstanceToPool($this);
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

            if ($this->cajachicadetallesScheduledForDeletion !== null) {
                if (!$this->cajachicadetallesScheduledForDeletion->isEmpty()) {
                    CajachicadetalleQuery::create()
                        ->filterByPrimaryKeys($this->cajachicadetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->cajachicadetallesScheduledForDeletion = null;
                }
            }

            if ($this->collCajachicadetalles !== null) {
                foreach ($this->collCajachicadetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ventasScheduledForDeletion !== null) {
                if (!$this->ventasScheduledForDeletion->isEmpty()) {
                    VentaQuery::create()
                        ->filterByPrimaryKeys($this->ventasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ventasScheduledForDeletion = null;
                }
            }

            if ($this->collVentas !== null) {
                foreach ($this->collVentas as $referrerFK) {
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

        $this->modifiedColumns[] = CajachicaPeer::IDCAJACHICA;
        if (null !== $this->idcajachica) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CajachicaPeer::IDCAJACHICA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CajachicaPeer::IDCAJACHICA)) {
            $modifiedColumns[':p' . $index++]  = '`idcajachica`';
        }
        if ($this->isColumnModified(CajachicaPeer::CAJACHICA_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`cajachica_nombre`';
        }
        if ($this->isColumnModified(CajachicaPeer::CAJACHICA_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`cajachica_descripcion`';
        }
        if ($this->isColumnModified(CajachicaPeer::CAJACHICA_FECHAINICIO)) {
            $modifiedColumns[':p' . $index++]  = '`cajachica_fechainicio`';
        }
        if ($this->isColumnModified(CajachicaPeer::CAJACHICA_FECHAFINAL)) {
            $modifiedColumns[':p' . $index++]  = '`cajachica_fechafinal`';
        }
        if ($this->isColumnModified(CajachicaPeer::CAJACHICA_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`cajachica_total`';
        }

        $sql = sprintf(
            'INSERT INTO `cajachica` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idcajachica`':
                        $stmt->bindValue($identifier, $this->idcajachica, PDO::PARAM_INT);
                        break;
                    case '`cajachica_nombre`':
                        $stmt->bindValue($identifier, $this->cajachica_nombre, PDO::PARAM_STR);
                        break;
                    case '`cajachica_descripcion`':
                        $stmt->bindValue($identifier, $this->cajachica_descripcion, PDO::PARAM_STR);
                        break;
                    case '`cajachica_fechainicio`':
                        $stmt->bindValue($identifier, $this->cajachica_fechainicio, PDO::PARAM_STR);
                        break;
                    case '`cajachica_fechafinal`':
                        $stmt->bindValue($identifier, $this->cajachica_fechafinal, PDO::PARAM_STR);
                        break;
                    case '`cajachica_total`':
                        $stmt->bindValue($identifier, $this->cajachica_total, PDO::PARAM_STR);
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
        $this->setIdcajachica($pk);

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


            if (($retval = CajachicaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCajachicadetalles !== null) {
                    foreach ($this->collCajachicadetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVentas !== null) {
                    foreach ($this->collVentas as $referrerFK) {
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
        $pos = CajachicaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdcajachica();
                break;
            case 1:
                return $this->getCajachicaNombre();
                break;
            case 2:
                return $this->getCajachicaDescripcion();
                break;
            case 3:
                return $this->getCajachicaFechainicio();
                break;
            case 4:
                return $this->getCajachicaFechafinal();
                break;
            case 5:
                return $this->getCajachicaTotal();
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
        if (isset($alreadyDumpedObjects['Cajachica'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Cajachica'][$this->getPrimaryKey()] = true;
        $keys = CajachicaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdcajachica(),
            $keys[1] => $this->getCajachicaNombre(),
            $keys[2] => $this->getCajachicaDescripcion(),
            $keys[3] => $this->getCajachicaFechainicio(),
            $keys[4] => $this->getCajachicaFechafinal(),
            $keys[5] => $this->getCajachicaTotal(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collCajachicadetalles) {
                $result['Cajachicadetalles'] = $this->collCajachicadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVentas) {
                $result['Ventas'] = $this->collVentas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CajachicaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdcajachica($value);
                break;
            case 1:
                $this->setCajachicaNombre($value);
                break;
            case 2:
                $this->setCajachicaDescripcion($value);
                break;
            case 3:
                $this->setCajachicaFechainicio($value);
                break;
            case 4:
                $this->setCajachicaFechafinal($value);
                break;
            case 5:
                $this->setCajachicaTotal($value);
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
        $keys = CajachicaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdcajachica($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCajachicaNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCajachicaDescripcion($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCajachicaFechainicio($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCajachicaFechafinal($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCajachicaTotal($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CajachicaPeer::DATABASE_NAME);

        if ($this->isColumnModified(CajachicaPeer::IDCAJACHICA)) $criteria->add(CajachicaPeer::IDCAJACHICA, $this->idcajachica);
        if ($this->isColumnModified(CajachicaPeer::CAJACHICA_NOMBRE)) $criteria->add(CajachicaPeer::CAJACHICA_NOMBRE, $this->cajachica_nombre);
        if ($this->isColumnModified(CajachicaPeer::CAJACHICA_DESCRIPCION)) $criteria->add(CajachicaPeer::CAJACHICA_DESCRIPCION, $this->cajachica_descripcion);
        if ($this->isColumnModified(CajachicaPeer::CAJACHICA_FECHAINICIO)) $criteria->add(CajachicaPeer::CAJACHICA_FECHAINICIO, $this->cajachica_fechainicio);
        if ($this->isColumnModified(CajachicaPeer::CAJACHICA_FECHAFINAL)) $criteria->add(CajachicaPeer::CAJACHICA_FECHAFINAL, $this->cajachica_fechafinal);
        if ($this->isColumnModified(CajachicaPeer::CAJACHICA_TOTAL)) $criteria->add(CajachicaPeer::CAJACHICA_TOTAL, $this->cajachica_total);

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
        $criteria = new Criteria(CajachicaPeer::DATABASE_NAME);
        $criteria->add(CajachicaPeer::IDCAJACHICA, $this->idcajachica);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdcajachica();
    }

    /**
     * Generic method to set the primary key (idcajachica column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdcajachica($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdcajachica();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Cajachica (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCajachicaNombre($this->getCajachicaNombre());
        $copyObj->setCajachicaDescripcion($this->getCajachicaDescripcion());
        $copyObj->setCajachicaFechainicio($this->getCajachicaFechainicio());
        $copyObj->setCajachicaFechafinal($this->getCajachicaFechafinal());
        $copyObj->setCajachicaTotal($this->getCajachicaTotal());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCajachicadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCajachicadetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVentas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVenta($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdcajachica(NULL); // this is a auto-increment column, so set to default value
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
     * @return Cajachica Clone of current object.
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
     * @return CajachicaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CajachicaPeer();
        }

        return self::$peer;
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
        if ('Cajachicadetalle' == $relationName) {
            $this->initCajachicadetalles();
        }
        if ('Venta' == $relationName) {
            $this->initVentas();
        }
    }

    /**
     * Clears out the collCajachicadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Cajachica The current object (for fluent API support)
     * @see        addCajachicadetalles()
     */
    public function clearCajachicadetalles()
    {
        $this->collCajachicadetalles = null; // important to set this to null since that means it is uninitialized
        $this->collCajachicadetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collCajachicadetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialCajachicadetalles($v = true)
    {
        $this->collCajachicadetallesPartial = $v;
    }

    /**
     * Initializes the collCajachicadetalles collection.
     *
     * By default this just sets the collCajachicadetalles collection to an empty array (like clearcollCajachicadetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCajachicadetalles($overrideExisting = true)
    {
        if (null !== $this->collCajachicadetalles && !$overrideExisting) {
            return;
        }
        $this->collCajachicadetalles = new PropelObjectCollection();
        $this->collCajachicadetalles->setModel('Cajachicadetalle');
    }

    /**
     * Gets an array of Cajachicadetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Cajachica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Cajachicadetalle[] List of Cajachicadetalle objects
     * @throws PropelException
     */
    public function getCajachicadetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCajachicadetallesPartial && !$this->isNew();
        if (null === $this->collCajachicadetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCajachicadetalles) {
                // return empty collection
                $this->initCajachicadetalles();
            } else {
                $collCajachicadetalles = CajachicadetalleQuery::create(null, $criteria)
                    ->filterByCajachica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCajachicadetallesPartial && count($collCajachicadetalles)) {
                      $this->initCajachicadetalles(false);

                      foreach ($collCajachicadetalles as $obj) {
                        if (false == $this->collCajachicadetalles->contains($obj)) {
                          $this->collCajachicadetalles->append($obj);
                        }
                      }

                      $this->collCajachicadetallesPartial = true;
                    }

                    $collCajachicadetalles->getInternalIterator()->rewind();

                    return $collCajachicadetalles;
                }

                if ($partial && $this->collCajachicadetalles) {
                    foreach ($this->collCajachicadetalles as $obj) {
                        if ($obj->isNew()) {
                            $collCajachicadetalles[] = $obj;
                        }
                    }
                }

                $this->collCajachicadetalles = $collCajachicadetalles;
                $this->collCajachicadetallesPartial = false;
            }
        }

        return $this->collCajachicadetalles;
    }

    /**
     * Sets a collection of Cajachicadetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $cajachicadetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Cajachica The current object (for fluent API support)
     */
    public function setCajachicadetalles(PropelCollection $cajachicadetalles, PropelPDO $con = null)
    {
        $cajachicadetallesToDelete = $this->getCajachicadetalles(new Criteria(), $con)->diff($cajachicadetalles);


        $this->cajachicadetallesScheduledForDeletion = $cajachicadetallesToDelete;

        foreach ($cajachicadetallesToDelete as $cajachicadetalleRemoved) {
            $cajachicadetalleRemoved->setCajachica(null);
        }

        $this->collCajachicadetalles = null;
        foreach ($cajachicadetalles as $cajachicadetalle) {
            $this->addCajachicadetalle($cajachicadetalle);
        }

        $this->collCajachicadetalles = $cajachicadetalles;
        $this->collCajachicadetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Cajachicadetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Cajachicadetalle objects.
     * @throws PropelException
     */
    public function countCajachicadetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCajachicadetallesPartial && !$this->isNew();
        if (null === $this->collCajachicadetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCajachicadetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCajachicadetalles());
            }
            $query = CajachicadetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCajachica($this)
                ->count($con);
        }

        return count($this->collCajachicadetalles);
    }

    /**
     * Method called to associate a Cajachicadetalle object to this object
     * through the Cajachicadetalle foreign key attribute.
     *
     * @param    Cajachicadetalle $l Cajachicadetalle
     * @return Cajachica The current object (for fluent API support)
     */
    public function addCajachicadetalle(Cajachicadetalle $l)
    {
        if ($this->collCajachicadetalles === null) {
            $this->initCajachicadetalles();
            $this->collCajachicadetallesPartial = true;
        }

        if (!in_array($l, $this->collCajachicadetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCajachicadetalle($l);

            if ($this->cajachicadetallesScheduledForDeletion and $this->cajachicadetallesScheduledForDeletion->contains($l)) {
                $this->cajachicadetallesScheduledForDeletion->remove($this->cajachicadetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Cajachicadetalle $cajachicadetalle The cajachicadetalle object to add.
     */
    protected function doAddCajachicadetalle($cajachicadetalle)
    {
        $this->collCajachicadetalles[]= $cajachicadetalle;
        $cajachicadetalle->setCajachica($this);
    }

    /**
     * @param	Cajachicadetalle $cajachicadetalle The cajachicadetalle object to remove.
     * @return Cajachica The current object (for fluent API support)
     */
    public function removeCajachicadetalle($cajachicadetalle)
    {
        if ($this->getCajachicadetalles()->contains($cajachicadetalle)) {
            $this->collCajachicadetalles->remove($this->collCajachicadetalles->search($cajachicadetalle));
            if (null === $this->cajachicadetallesScheduledForDeletion) {
                $this->cajachicadetallesScheduledForDeletion = clone $this->collCajachicadetalles;
                $this->cajachicadetallesScheduledForDeletion->clear();
            }
            $this->cajachicadetallesScheduledForDeletion[]= clone $cajachicadetalle;
            $cajachicadetalle->setCajachica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cajachica is new, it will return
     * an empty collection; or if this Cajachica has previously
     * been saved, it will retrieve related Cajachicadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cajachica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cajachicadetalle[] List of Cajachicadetalle objects
     */
    public function getCajachicadetallesJoinGasto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CajachicadetalleQuery::create(null, $criteria);
        $query->joinWith('Gasto', $join_behavior);

        return $this->getCajachicadetalles($query, $con);
    }

    /**
     * Clears out the collVentas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Cajachica The current object (for fluent API support)
     * @see        addVentas()
     */
    public function clearVentas()
    {
        $this->collVentas = null; // important to set this to null since that means it is uninitialized
        $this->collVentasPartial = null;

        return $this;
    }

    /**
     * reset is the collVentas collection loaded partially
     *
     * @return void
     */
    public function resetPartialVentas($v = true)
    {
        $this->collVentasPartial = $v;
    }

    /**
     * Initializes the collVentas collection.
     *
     * By default this just sets the collVentas collection to an empty array (like clearcollVentas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVentas($overrideExisting = true)
    {
        if (null !== $this->collVentas && !$overrideExisting) {
            return;
        }
        $this->collVentas = new PropelObjectCollection();
        $this->collVentas->setModel('Venta');
    }

    /**
     * Gets an array of Venta objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Cajachica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Venta[] List of Venta objects
     * @throws PropelException
     */
    public function getVentas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVentasPartial && !$this->isNew();
        if (null === $this->collVentas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVentas) {
                // return empty collection
                $this->initVentas();
            } else {
                $collVentas = VentaQuery::create(null, $criteria)
                    ->filterByCajachica($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVentasPartial && count($collVentas)) {
                      $this->initVentas(false);

                      foreach ($collVentas as $obj) {
                        if (false == $this->collVentas->contains($obj)) {
                          $this->collVentas->append($obj);
                        }
                      }

                      $this->collVentasPartial = true;
                    }

                    $collVentas->getInternalIterator()->rewind();

                    return $collVentas;
                }

                if ($partial && $this->collVentas) {
                    foreach ($this->collVentas as $obj) {
                        if ($obj->isNew()) {
                            $collVentas[] = $obj;
                        }
                    }
                }

                $this->collVentas = $collVentas;
                $this->collVentasPartial = false;
            }
        }

        return $this->collVentas;
    }

    /**
     * Sets a collection of Venta objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ventas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Cajachica The current object (for fluent API support)
     */
    public function setVentas(PropelCollection $ventas, PropelPDO $con = null)
    {
        $ventasToDelete = $this->getVentas(new Criteria(), $con)->diff($ventas);


        $this->ventasScheduledForDeletion = $ventasToDelete;

        foreach ($ventasToDelete as $ventaRemoved) {
            $ventaRemoved->setCajachica(null);
        }

        $this->collVentas = null;
        foreach ($ventas as $venta) {
            $this->addVenta($venta);
        }

        $this->collVentas = $ventas;
        $this->collVentasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Venta objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Venta objects.
     * @throws PropelException
     */
    public function countVentas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVentasPartial && !$this->isNew();
        if (null === $this->collVentas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVentas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVentas());
            }
            $query = VentaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCajachica($this)
                ->count($con);
        }

        return count($this->collVentas);
    }

    /**
     * Method called to associate a Venta object to this object
     * through the Venta foreign key attribute.
     *
     * @param    Venta $l Venta
     * @return Cajachica The current object (for fluent API support)
     */
    public function addVenta(Venta $l)
    {
        if ($this->collVentas === null) {
            $this->initVentas();
            $this->collVentasPartial = true;
        }

        if (!in_array($l, $this->collVentas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVenta($l);

            if ($this->ventasScheduledForDeletion and $this->ventasScheduledForDeletion->contains($l)) {
                $this->ventasScheduledForDeletion->remove($this->ventasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Venta $venta The venta object to add.
     */
    protected function doAddVenta($venta)
    {
        $this->collVentas[]= $venta;
        $venta->setCajachica($this);
    }

    /**
     * @param	Venta $venta The venta object to remove.
     * @return Cajachica The current object (for fluent API support)
     */
    public function removeVenta($venta)
    {
        if ($this->getVentas()->contains($venta)) {
            $this->collVentas->remove($this->collVentas->search($venta));
            if (null === $this->ventasScheduledForDeletion) {
                $this->ventasScheduledForDeletion = clone $this->collVentas;
                $this->ventasScheduledForDeletion->clear();
            }
            $this->ventasScheduledForDeletion[]= clone $venta;
            $venta->setCajachica(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cajachica is new, it will return
     * an empty collection; or if this Cajachica has previously
     * been saved, it will retrieve related Ventas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cajachica.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Venta[] List of Venta objects
     */
    public function getVentasJoinPaciente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentaQuery::create(null, $criteria);
        $query->joinWith('Paciente', $join_behavior);

        return $this->getVentas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idcajachica = null;
        $this->cajachica_nombre = null;
        $this->cajachica_descripcion = null;
        $this->cajachica_fechainicio = null;
        $this->cajachica_fechafinal = null;
        $this->cajachica_total = null;
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
            if ($this->collCajachicadetalles) {
                foreach ($this->collCajachicadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVentas) {
                foreach ($this->collVentas as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCajachicadetalles instanceof PropelCollection) {
            $this->collCajachicadetalles->clearIterator();
        }
        $this->collCajachicadetalles = null;
        if ($this->collVentas instanceof PropelCollection) {
            $this->collVentas->clearIterator();
        }
        $this->collVentas = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CajachicaPeer::DEFAULT_STRING_FORMAT);
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
