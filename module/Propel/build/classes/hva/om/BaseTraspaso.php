<?php


/**
 * Base class that represents a row from the 'traspaso' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseTraspaso extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TraspasoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TraspasoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idinventariolugar field.
     * @var        int
     */
    protected $idinventariolugar;

    /**
     * The value for the idlugarremitente field.
     * @var        int
     */
    protected $idlugarremitente;

    /**
     * The value for the idlugardestinatario field.
     * @var        int
     */
    protected $idlugardestinatario;

    /**
     * The value for the traspaso_fecha field.
     * @var        string
     */
    protected $traspaso_fecha;

    /**
     * The value for the traspaso_status field.
     * @var        string
     */
    protected $traspaso_status;

    /**
     * @var        Lugar
     */
    protected $aLugarRelatedByIdlugardestinatario;

    /**
     * @var        Lugar
     */
    protected $aLugarRelatedByIdlugarremitente;

    /**
     * @var        PropelObjectCollection|Traspasodetalles[] Collection to store aggregation of Traspasodetalles objects.
     */
    protected $collTraspasodetalless;
    protected $collTraspasodetallessPartial;

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
    protected $traspasodetallessScheduledForDeletion = null;

    /**
     * Get the [idinventariolugar] column value.
     *
     * @return int
     */
    public function getIdinventariolugar()
    {

        return $this->idinventariolugar;
    }

    /**
     * Get the [idlugarremitente] column value.
     *
     * @return int
     */
    public function getIdlugarremitente()
    {

        return $this->idlugarremitente;
    }

    /**
     * Get the [idlugardestinatario] column value.
     *
     * @return int
     */
    public function getIdlugardestinatario()
    {

        return $this->idlugardestinatario;
    }

    /**
     * Get the [optionally formatted] temporal [traspaso_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getTraspasoFecha($format = 'Y-m-d H:i:s')
    {
        if ($this->traspaso_fecha === null) {
            return null;
        }

        if ($this->traspaso_fecha === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->traspaso_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->traspaso_fecha, true), $x);
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
     * Get the [traspaso_status] column value.
     *
     * @return string
     */
    public function getTraspasoStatus()
    {

        return $this->traspaso_status;
    }

    /**
     * Set the value of [idinventariolugar] column.
     *
     * @param  int $v new value
     * @return Traspaso The current object (for fluent API support)
     */
    public function setIdinventariolugar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idinventariolugar !== $v) {
            $this->idinventariolugar = $v;
            $this->modifiedColumns[] = TraspasoPeer::IDINVENTARIOLUGAR;
        }


        return $this;
    } // setIdinventariolugar()

    /**
     * Set the value of [idlugarremitente] column.
     *
     * @param  int $v new value
     * @return Traspaso The current object (for fluent API support)
     */
    public function setIdlugarremitente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idlugarremitente !== $v) {
            $this->idlugarremitente = $v;
            $this->modifiedColumns[] = TraspasoPeer::IDLUGARREMITENTE;
        }

        if ($this->aLugarRelatedByIdlugarremitente !== null && $this->aLugarRelatedByIdlugarremitente->getIdlugar() !== $v) {
            $this->aLugarRelatedByIdlugarremitente = null;
        }


        return $this;
    } // setIdlugarremitente()

    /**
     * Set the value of [idlugardestinatario] column.
     *
     * @param  int $v new value
     * @return Traspaso The current object (for fluent API support)
     */
    public function setIdlugardestinatario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idlugardestinatario !== $v) {
            $this->idlugardestinatario = $v;
            $this->modifiedColumns[] = TraspasoPeer::IDLUGARDESTINATARIO;
        }

        if ($this->aLugarRelatedByIdlugardestinatario !== null && $this->aLugarRelatedByIdlugardestinatario->getIdlugar() !== $v) {
            $this->aLugarRelatedByIdlugardestinatario = null;
        }


        return $this;
    } // setIdlugardestinatario()

    /**
     * Sets the value of [traspaso_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Traspaso The current object (for fluent API support)
     */
    public function setTraspasoFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->traspaso_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->traspaso_fecha !== null && $tmpDt = new DateTime($this->traspaso_fecha)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->traspaso_fecha = $newDateAsString;
                $this->modifiedColumns[] = TraspasoPeer::TRASPASO_FECHA;
            }
        } // if either are not null


        return $this;
    } // setTraspasoFecha()

    /**
     * Set the value of [traspaso_status] column.
     *
     * @param  string $v new value
     * @return Traspaso The current object (for fluent API support)
     */
    public function setTraspasoStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->traspaso_status !== $v) {
            $this->traspaso_status = $v;
            $this->modifiedColumns[] = TraspasoPeer::TRASPASO_STATUS;
        }


        return $this;
    } // setTraspasoStatus()

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

            $this->idinventariolugar = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idlugarremitente = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idlugardestinatario = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->traspaso_fecha = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->traspaso_status = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = TraspasoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Traspaso object", $e);
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

        if ($this->aLugarRelatedByIdlugarremitente !== null && $this->idlugarremitente !== $this->aLugarRelatedByIdlugarremitente->getIdlugar()) {
            $this->aLugarRelatedByIdlugarremitente = null;
        }
        if ($this->aLugarRelatedByIdlugardestinatario !== null && $this->idlugardestinatario !== $this->aLugarRelatedByIdlugardestinatario->getIdlugar()) {
            $this->aLugarRelatedByIdlugardestinatario = null;
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
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TraspasoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aLugarRelatedByIdlugardestinatario = null;
            $this->aLugarRelatedByIdlugarremitente = null;
            $this->collTraspasodetalless = null;

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
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TraspasoQuery::create()
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
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TraspasoPeer::addInstanceToPool($this);
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

            if ($this->aLugarRelatedByIdlugardestinatario !== null) {
                if ($this->aLugarRelatedByIdlugardestinatario->isModified() || $this->aLugarRelatedByIdlugardestinatario->isNew()) {
                    $affectedRows += $this->aLugarRelatedByIdlugardestinatario->save($con);
                }
                $this->setLugarRelatedByIdlugardestinatario($this->aLugarRelatedByIdlugardestinatario);
            }

            if ($this->aLugarRelatedByIdlugarremitente !== null) {
                if ($this->aLugarRelatedByIdlugarremitente->isModified() || $this->aLugarRelatedByIdlugarremitente->isNew()) {
                    $affectedRows += $this->aLugarRelatedByIdlugarremitente->save($con);
                }
                $this->setLugarRelatedByIdlugarremitente($this->aLugarRelatedByIdlugarremitente);
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

            if ($this->traspasodetallessScheduledForDeletion !== null) {
                if (!$this->traspasodetallessScheduledForDeletion->isEmpty()) {
                    TraspasodetallesQuery::create()
                        ->filterByPrimaryKeys($this->traspasodetallessScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->traspasodetallessScheduledForDeletion = null;
                }
            }

            if ($this->collTraspasodetalless !== null) {
                foreach ($this->collTraspasodetalless as $referrerFK) {
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

        $this->modifiedColumns[] = TraspasoPeer::IDINVENTARIOLUGAR;
        if (null !== $this->idinventariolugar) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TraspasoPeer::IDINVENTARIOLUGAR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TraspasoPeer::IDINVENTARIOLUGAR)) {
            $modifiedColumns[':p' . $index++]  = '`idinventariolugar`';
        }
        if ($this->isColumnModified(TraspasoPeer::IDLUGARREMITENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idlugarremitente`';
        }
        if ($this->isColumnModified(TraspasoPeer::IDLUGARDESTINATARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idlugardestinatario`';
        }
        if ($this->isColumnModified(TraspasoPeer::TRASPASO_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`traspaso_fecha`';
        }
        if ($this->isColumnModified(TraspasoPeer::TRASPASO_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`traspaso_status`';
        }

        $sql = sprintf(
            'INSERT INTO `traspaso` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idinventariolugar`':
                        $stmt->bindValue($identifier, $this->idinventariolugar, PDO::PARAM_INT);
                        break;
                    case '`idlugarremitente`':
                        $stmt->bindValue($identifier, $this->idlugarremitente, PDO::PARAM_INT);
                        break;
                    case '`idlugardestinatario`':
                        $stmt->bindValue($identifier, $this->idlugardestinatario, PDO::PARAM_INT);
                        break;
                    case '`traspaso_fecha`':
                        $stmt->bindValue($identifier, $this->traspaso_fecha, PDO::PARAM_STR);
                        break;
                    case '`traspaso_status`':
                        $stmt->bindValue($identifier, $this->traspaso_status, PDO::PARAM_STR);
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
        $this->setIdinventariolugar($pk);

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

            if ($this->aLugarRelatedByIdlugardestinatario !== null) {
                if (!$this->aLugarRelatedByIdlugardestinatario->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aLugarRelatedByIdlugardestinatario->getValidationFailures());
                }
            }

            if ($this->aLugarRelatedByIdlugarremitente !== null) {
                if (!$this->aLugarRelatedByIdlugarremitente->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aLugarRelatedByIdlugarremitente->getValidationFailures());
                }
            }


            if (($retval = TraspasoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collTraspasodetalless !== null) {
                    foreach ($this->collTraspasodetalless as $referrerFK) {
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
        $pos = TraspasoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdinventariolugar();
                break;
            case 1:
                return $this->getIdlugarremitente();
                break;
            case 2:
                return $this->getIdlugardestinatario();
                break;
            case 3:
                return $this->getTraspasoFecha();
                break;
            case 4:
                return $this->getTraspasoStatus();
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
        if (isset($alreadyDumpedObjects['Traspaso'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Traspaso'][serialize($this->getPrimaryKey())] = true;
        $keys = TraspasoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdinventariolugar(),
            $keys[1] => $this->getIdlugarremitente(),
            $keys[2] => $this->getIdlugardestinatario(),
            $keys[3] => $this->getTraspasoFecha(),
            $keys[4] => $this->getTraspasoStatus(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aLugarRelatedByIdlugardestinatario) {
                $result['LugarRelatedByIdlugardestinatario'] = $this->aLugarRelatedByIdlugardestinatario->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aLugarRelatedByIdlugarremitente) {
                $result['LugarRelatedByIdlugarremitente'] = $this->aLugarRelatedByIdlugarremitente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collTraspasodetalless) {
                $result['Traspasodetalless'] = $this->collTraspasodetalless->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = TraspasoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdinventariolugar($value);
                break;
            case 1:
                $this->setIdlugarremitente($value);
                break;
            case 2:
                $this->setIdlugardestinatario($value);
                break;
            case 3:
                $this->setTraspasoFecha($value);
                break;
            case 4:
                $this->setTraspasoStatus($value);
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
        $keys = TraspasoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdinventariolugar($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdlugarremitente($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdlugardestinatario($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTraspasoFecha($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTraspasoStatus($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TraspasoPeer::DATABASE_NAME);

        if ($this->isColumnModified(TraspasoPeer::IDINVENTARIOLUGAR)) $criteria->add(TraspasoPeer::IDINVENTARIOLUGAR, $this->idinventariolugar);
        if ($this->isColumnModified(TraspasoPeer::IDLUGARREMITENTE)) $criteria->add(TraspasoPeer::IDLUGARREMITENTE, $this->idlugarremitente);
        if ($this->isColumnModified(TraspasoPeer::IDLUGARDESTINATARIO)) $criteria->add(TraspasoPeer::IDLUGARDESTINATARIO, $this->idlugardestinatario);
        if ($this->isColumnModified(TraspasoPeer::TRASPASO_FECHA)) $criteria->add(TraspasoPeer::TRASPASO_FECHA, $this->traspaso_fecha);
        if ($this->isColumnModified(TraspasoPeer::TRASPASO_STATUS)) $criteria->add(TraspasoPeer::TRASPASO_STATUS, $this->traspaso_status);

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
        $criteria = new Criteria(TraspasoPeer::DATABASE_NAME);
        $criteria->add(TraspasoPeer::IDINVENTARIOLUGAR, $this->idinventariolugar);
        $criteria->add(TraspasoPeer::IDLUGARREMITENTE, $this->idlugarremitente);
        $criteria->add(TraspasoPeer::IDLUGARDESTINATARIO, $this->idlugardestinatario);

        return $criteria;
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getIdinventariolugar();
        $pks[1] = $this->getIdlugarremitente();
        $pks[2] = $this->getIdlugardestinatario();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setIdinventariolugar($keys[0]);
        $this->setIdlugarremitente($keys[1]);
        $this->setIdlugardestinatario($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdinventariolugar()) && (null === $this->getIdlugarremitente()) && (null === $this->getIdlugardestinatario());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Traspaso (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdlugarremitente($this->getIdlugarremitente());
        $copyObj->setIdlugardestinatario($this->getIdlugardestinatario());
        $copyObj->setTraspasoFecha($this->getTraspasoFecha());
        $copyObj->setTraspasoStatus($this->getTraspasoStatus());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getTraspasodetalless() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTraspasodetalles($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdinventariolugar(NULL); // this is a auto-increment column, so set to default value
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
     * @return Traspaso Clone of current object.
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
     * @return TraspasoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TraspasoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Lugar object.
     *
     * @param                  Lugar $v
     * @return Traspaso The current object (for fluent API support)
     * @throws PropelException
     */
    public function setLugarRelatedByIdlugardestinatario(Lugar $v = null)
    {
        if ($v === null) {
            $this->setIdlugardestinatario(NULL);
        } else {
            $this->setIdlugardestinatario($v->getIdlugar());
        }

        $this->aLugarRelatedByIdlugardestinatario = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Lugar object, it will not be re-added.
        if ($v !== null) {
            $v->addTraspasoRelatedByIdlugardestinatario($this);
        }


        return $this;
    }


    /**
     * Get the associated Lugar object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Lugar The associated Lugar object.
     * @throws PropelException
     */
    public function getLugarRelatedByIdlugardestinatario(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aLugarRelatedByIdlugardestinatario === null && ($this->idlugardestinatario !== null) && $doQuery) {
            $this->aLugarRelatedByIdlugardestinatario = LugarQuery::create()->findPk($this->idlugardestinatario, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aLugarRelatedByIdlugardestinatario->addTraspasosRelatedByIdlugardestinatario($this);
             */
        }

        return $this->aLugarRelatedByIdlugardestinatario;
    }

    /**
     * Declares an association between this object and a Lugar object.
     *
     * @param                  Lugar $v
     * @return Traspaso The current object (for fluent API support)
     * @throws PropelException
     */
    public function setLugarRelatedByIdlugarremitente(Lugar $v = null)
    {
        if ($v === null) {
            $this->setIdlugarremitente(NULL);
        } else {
            $this->setIdlugarremitente($v->getIdlugar());
        }

        $this->aLugarRelatedByIdlugarremitente = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Lugar object, it will not be re-added.
        if ($v !== null) {
            $v->addTraspasoRelatedByIdlugarremitente($this);
        }


        return $this;
    }


    /**
     * Get the associated Lugar object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Lugar The associated Lugar object.
     * @throws PropelException
     */
    public function getLugarRelatedByIdlugarremitente(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aLugarRelatedByIdlugarremitente === null && ($this->idlugarremitente !== null) && $doQuery) {
            $this->aLugarRelatedByIdlugarremitente = LugarQuery::create()->findPk($this->idlugarremitente, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aLugarRelatedByIdlugarremitente->addTraspasosRelatedByIdlugarremitente($this);
             */
        }

        return $this->aLugarRelatedByIdlugarremitente;
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
        if ('Traspasodetalles' == $relationName) {
            $this->initTraspasodetalless();
        }
    }

    /**
     * Clears out the collTraspasodetalless collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Traspaso The current object (for fluent API support)
     * @see        addTraspasodetalless()
     */
    public function clearTraspasodetalless()
    {
        $this->collTraspasodetalless = null; // important to set this to null since that means it is uninitialized
        $this->collTraspasodetallessPartial = null;

        return $this;
    }

    /**
     * reset is the collTraspasodetalless collection loaded partially
     *
     * @return void
     */
    public function resetPartialTraspasodetalless($v = true)
    {
        $this->collTraspasodetallessPartial = $v;
    }

    /**
     * Initializes the collTraspasodetalless collection.
     *
     * By default this just sets the collTraspasodetalless collection to an empty array (like clearcollTraspasodetalless());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTraspasodetalless($overrideExisting = true)
    {
        if (null !== $this->collTraspasodetalless && !$overrideExisting) {
            return;
        }
        $this->collTraspasodetalless = new PropelObjectCollection();
        $this->collTraspasodetalless->setModel('Traspasodetalles');
    }

    /**
     * Gets an array of Traspasodetalles objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Traspaso is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Traspasodetalles[] List of Traspasodetalles objects
     * @throws PropelException
     */
    public function getTraspasodetalless($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTraspasodetallessPartial && !$this->isNew();
        if (null === $this->collTraspasodetalless || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTraspasodetalless) {
                // return empty collection
                $this->initTraspasodetalless();
            } else {
                $collTraspasodetalless = TraspasodetallesQuery::create(null, $criteria)
                    ->filterByTraspaso($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTraspasodetallessPartial && count($collTraspasodetalless)) {
                      $this->initTraspasodetalless(false);

                      foreach ($collTraspasodetalless as $obj) {
                        if (false == $this->collTraspasodetalless->contains($obj)) {
                          $this->collTraspasodetalless->append($obj);
                        }
                      }

                      $this->collTraspasodetallessPartial = true;
                    }

                    $collTraspasodetalless->getInternalIterator()->rewind();

                    return $collTraspasodetalless;
                }

                if ($partial && $this->collTraspasodetalless) {
                    foreach ($this->collTraspasodetalless as $obj) {
                        if ($obj->isNew()) {
                            $collTraspasodetalless[] = $obj;
                        }
                    }
                }

                $this->collTraspasodetalless = $collTraspasodetalless;
                $this->collTraspasodetallessPartial = false;
            }
        }

        return $this->collTraspasodetalless;
    }

    /**
     * Sets a collection of Traspasodetalles objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $traspasodetalless A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Traspaso The current object (for fluent API support)
     */
    public function setTraspasodetalless(PropelCollection $traspasodetalless, PropelPDO $con = null)
    {
        $traspasodetallessToDelete = $this->getTraspasodetalless(new Criteria(), $con)->diff($traspasodetalless);


        $this->traspasodetallessScheduledForDeletion = $traspasodetallessToDelete;

        foreach ($traspasodetallessToDelete as $traspasodetallesRemoved) {
            $traspasodetallesRemoved->setTraspaso(null);
        }

        $this->collTraspasodetalless = null;
        foreach ($traspasodetalless as $traspasodetalles) {
            $this->addTraspasodetalles($traspasodetalles);
        }

        $this->collTraspasodetalless = $traspasodetalless;
        $this->collTraspasodetallessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Traspasodetalles objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Traspasodetalles objects.
     * @throws PropelException
     */
    public function countTraspasodetalless(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTraspasodetallessPartial && !$this->isNew();
        if (null === $this->collTraspasodetalless || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTraspasodetalless) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTraspasodetalless());
            }
            $query = TraspasodetallesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByTraspaso($this)
                ->count($con);
        }

        return count($this->collTraspasodetalless);
    }

    /**
     * Method called to associate a Traspasodetalles object to this object
     * through the Traspasodetalles foreign key attribute.
     *
     * @param    Traspasodetalles $l Traspasodetalles
     * @return Traspaso The current object (for fluent API support)
     */
    public function addTraspasodetalles(Traspasodetalles $l)
    {
        if ($this->collTraspasodetalless === null) {
            $this->initTraspasodetalless();
            $this->collTraspasodetallessPartial = true;
        }

        if (!in_array($l, $this->collTraspasodetalless->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTraspasodetalles($l);

            if ($this->traspasodetallessScheduledForDeletion and $this->traspasodetallessScheduledForDeletion->contains($l)) {
                $this->traspasodetallessScheduledForDeletion->remove($this->traspasodetallessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Traspasodetalles $traspasodetalles The traspasodetalles object to add.
     */
    protected function doAddTraspasodetalles($traspasodetalles)
    {
        $this->collTraspasodetalless[]= $traspasodetalles;
        $traspasodetalles->setTraspaso($this);
    }

    /**
     * @param	Traspasodetalles $traspasodetalles The traspasodetalles object to remove.
     * @return Traspaso The current object (for fluent API support)
     */
    public function removeTraspasodetalles($traspasodetalles)
    {
        if ($this->getTraspasodetalless()->contains($traspasodetalles)) {
            $this->collTraspasodetalless->remove($this->collTraspasodetalless->search($traspasodetalles));
            if (null === $this->traspasodetallessScheduledForDeletion) {
                $this->traspasodetallessScheduledForDeletion = clone $this->collTraspasodetalless;
                $this->traspasodetallessScheduledForDeletion->clear();
            }
            $this->traspasodetallessScheduledForDeletion[]= clone $traspasodetalles;
            $traspasodetalles->setTraspaso(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Traspaso is new, it will return
     * an empty collection; or if this Traspaso has previously
     * been saved, it will retrieve related Traspasodetalless from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Traspaso.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Traspasodetalles[] List of Traspasodetalles objects
     */
    public function getTraspasodetallessJoinLugarinventario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TraspasodetallesQuery::create(null, $criteria);
        $query->joinWith('Lugarinventario', $join_behavior);

        return $this->getTraspasodetalless($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idinventariolugar = null;
        $this->idlugarremitente = null;
        $this->idlugardestinatario = null;
        $this->traspaso_fecha = null;
        $this->traspaso_status = null;
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
            if ($this->collTraspasodetalless) {
                foreach ($this->collTraspasodetalless as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aLugarRelatedByIdlugardestinatario instanceof Persistent) {
              $this->aLugarRelatedByIdlugardestinatario->clearAllReferences($deep);
            }
            if ($this->aLugarRelatedByIdlugarremitente instanceof Persistent) {
              $this->aLugarRelatedByIdlugarremitente->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collTraspasodetalless instanceof PropelCollection) {
            $this->collTraspasodetalless->clearIterator();
        }
        $this->collTraspasodetalless = null;
        $this->aLugarRelatedByIdlugardestinatario = null;
        $this->aLugarRelatedByIdlugarremitente = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TraspasoPeer::DEFAULT_STRING_FORMAT);
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
