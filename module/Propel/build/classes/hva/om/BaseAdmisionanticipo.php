<?php


/**
 * Base class that represents a row from the 'admisionanticipo' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseAdmisionanticipo extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AdmisionanticipoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AdmisionanticipoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idadmisionanticipo field.
     * @var        int
     */
    protected $idadmisionanticipo;

    /**
     * The value for the idadmision field.
     * @var        int
     */
    protected $idadmision;

    /**
     * The value for the admisionanticipo_fecha field.
     * @var        string
     */
    protected $admisionanticipo_fecha;

    /**
     * The value for the admisionanticipo_cantidad field.
     * @var        string
     */
    protected $admisionanticipo_cantidad;

    /**
     * The value for the admisionanticipo_nota field.
     * @var        string
     */
    protected $admisionanticipo_nota;

    /**
     * @var        Admision
     */
    protected $aAdmision;

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
     * Get the [idadmisionanticipo] column value.
     *
     * @return int
     */
    public function getIdadmisionanticipo()
    {

        return $this->idadmisionanticipo;
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
     * Get the [optionally formatted] temporal [admisionanticipo_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getAdmisionanticipoFecha($format = 'Y-m-d H:i:s')
    {
        if ($this->admisionanticipo_fecha === null) {
            return null;
        }

        if ($this->admisionanticipo_fecha === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->admisionanticipo_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->admisionanticipo_fecha, true), $x);
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
     * Get the [admisionanticipo_cantidad] column value.
     *
     * @return string
     */
    public function getAdmisionanticipoCantidad()
    {

        return $this->admisionanticipo_cantidad;
    }

    /**
     * Get the [admisionanticipo_nota] column value.
     *
     * @return string
     */
    public function getAdmisionanticipoNota()
    {

        return $this->admisionanticipo_nota;
    }

    /**
     * Set the value of [idadmisionanticipo] column.
     *
     * @param  int $v new value
     * @return Admisionanticipo The current object (for fluent API support)
     */
    public function setIdadmisionanticipo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idadmisionanticipo !== $v) {
            $this->idadmisionanticipo = $v;
            $this->modifiedColumns[] = AdmisionanticipoPeer::IDADMISIONANTICIPO;
        }


        return $this;
    } // setIdadmisionanticipo()

    /**
     * Set the value of [idadmision] column.
     *
     * @param  int $v new value
     * @return Admisionanticipo The current object (for fluent API support)
     */
    public function setIdadmision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idadmision !== $v) {
            $this->idadmision = $v;
            $this->modifiedColumns[] = AdmisionanticipoPeer::IDADMISION;
        }

        if ($this->aAdmision !== null && $this->aAdmision->getIdadmision() !== $v) {
            $this->aAdmision = null;
        }


        return $this;
    } // setIdadmision()

    /**
     * Sets the value of [admisionanticipo_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Admisionanticipo The current object (for fluent API support)
     */
    public function setAdmisionanticipoFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->admisionanticipo_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->admisionanticipo_fecha !== null && $tmpDt = new DateTime($this->admisionanticipo_fecha)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->admisionanticipo_fecha = $newDateAsString;
                $this->modifiedColumns[] = AdmisionanticipoPeer::ADMISIONANTICIPO_FECHA;
            }
        } // if either are not null


        return $this;
    } // setAdmisionanticipoFecha()

    /**
     * Set the value of [admisionanticipo_cantidad] column.
     *
     * @param  string $v new value
     * @return Admisionanticipo The current object (for fluent API support)
     */
    public function setAdmisionanticipoCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->admisionanticipo_cantidad !== $v) {
            $this->admisionanticipo_cantidad = $v;
            $this->modifiedColumns[] = AdmisionanticipoPeer::ADMISIONANTICIPO_CANTIDAD;
        }


        return $this;
    } // setAdmisionanticipoCantidad()

    /**
     * Set the value of [admisionanticipo_nota] column.
     *
     * @param  string $v new value
     * @return Admisionanticipo The current object (for fluent API support)
     */
    public function setAdmisionanticipoNota($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->admisionanticipo_nota !== $v) {
            $this->admisionanticipo_nota = $v;
            $this->modifiedColumns[] = AdmisionanticipoPeer::ADMISIONANTICIPO_NOTA;
        }


        return $this;
    } // setAdmisionanticipoNota()

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

            $this->idadmisionanticipo = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idadmision = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->admisionanticipo_fecha = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->admisionanticipo_cantidad = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->admisionanticipo_nota = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = AdmisionanticipoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Admisionanticipo object", $e);
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

        if ($this->aAdmision !== null && $this->idadmision !== $this->aAdmision->getIdadmision()) {
            $this->aAdmision = null;
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
            $con = Propel::getConnection(AdmisionanticipoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AdmisionanticipoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aAdmision = null;
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
            $con = Propel::getConnection(AdmisionanticipoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AdmisionanticipoQuery::create()
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
            $con = Propel::getConnection(AdmisionanticipoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                AdmisionanticipoPeer::addInstanceToPool($this);
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

            if ($this->aAdmision !== null) {
                if ($this->aAdmision->isModified() || $this->aAdmision->isNew()) {
                    $affectedRows += $this->aAdmision->save($con);
                }
                $this->setAdmision($this->aAdmision);
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

        $this->modifiedColumns[] = AdmisionanticipoPeer::IDADMISIONANTICIPO;
        if (null !== $this->idadmisionanticipo) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AdmisionanticipoPeer::IDADMISIONANTICIPO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AdmisionanticipoPeer::IDADMISIONANTICIPO)) {
            $modifiedColumns[':p' . $index++]  = '`idadmisionanticipo`';
        }
        if ($this->isColumnModified(AdmisionanticipoPeer::IDADMISION)) {
            $modifiedColumns[':p' . $index++]  = '`idadmision`';
        }
        if ($this->isColumnModified(AdmisionanticipoPeer::ADMISIONANTICIPO_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`admisionanticipo_fecha`';
        }
        if ($this->isColumnModified(AdmisionanticipoPeer::ADMISIONANTICIPO_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`admisionanticipo_cantidad`';
        }
        if ($this->isColumnModified(AdmisionanticipoPeer::ADMISIONANTICIPO_NOTA)) {
            $modifiedColumns[':p' . $index++]  = '`admisionanticipo_nota`';
        }

        $sql = sprintf(
            'INSERT INTO `admisionanticipo` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idadmisionanticipo`':
                        $stmt->bindValue($identifier, $this->idadmisionanticipo, PDO::PARAM_INT);
                        break;
                    case '`idadmision`':
                        $stmt->bindValue($identifier, $this->idadmision, PDO::PARAM_INT);
                        break;
                    case '`admisionanticipo_fecha`':
                        $stmt->bindValue($identifier, $this->admisionanticipo_fecha, PDO::PARAM_STR);
                        break;
                    case '`admisionanticipo_cantidad`':
                        $stmt->bindValue($identifier, $this->admisionanticipo_cantidad, PDO::PARAM_STR);
                        break;
                    case '`admisionanticipo_nota`':
                        $stmt->bindValue($identifier, $this->admisionanticipo_nota, PDO::PARAM_STR);
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
        $this->setIdadmisionanticipo($pk);

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

            if ($this->aAdmision !== null) {
                if (!$this->aAdmision->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAdmision->getValidationFailures());
                }
            }


            if (($retval = AdmisionanticipoPeer::doValidate($this, $columns)) !== true) {
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
        $pos = AdmisionanticipoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdadmisionanticipo();
                break;
            case 1:
                return $this->getIdadmision();
                break;
            case 2:
                return $this->getAdmisionanticipoFecha();
                break;
            case 3:
                return $this->getAdmisionanticipoCantidad();
                break;
            case 4:
                return $this->getAdmisionanticipoNota();
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
        if (isset($alreadyDumpedObjects['Admisionanticipo'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Admisionanticipo'][$this->getPrimaryKey()] = true;
        $keys = AdmisionanticipoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdadmisionanticipo(),
            $keys[1] => $this->getIdadmision(),
            $keys[2] => $this->getAdmisionanticipoFecha(),
            $keys[3] => $this->getAdmisionanticipoCantidad(),
            $keys[4] => $this->getAdmisionanticipoNota(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aAdmision) {
                $result['Admision'] = $this->aAdmision->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = AdmisionanticipoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdadmisionanticipo($value);
                break;
            case 1:
                $this->setIdadmision($value);
                break;
            case 2:
                $this->setAdmisionanticipoFecha($value);
                break;
            case 3:
                $this->setAdmisionanticipoCantidad($value);
                break;
            case 4:
                $this->setAdmisionanticipoNota($value);
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
        $keys = AdmisionanticipoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdadmisionanticipo($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdadmision($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAdmisionanticipoFecha($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAdmisionanticipoCantidad($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAdmisionanticipoNota($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AdmisionanticipoPeer::DATABASE_NAME);

        if ($this->isColumnModified(AdmisionanticipoPeer::IDADMISIONANTICIPO)) $criteria->add(AdmisionanticipoPeer::IDADMISIONANTICIPO, $this->idadmisionanticipo);
        if ($this->isColumnModified(AdmisionanticipoPeer::IDADMISION)) $criteria->add(AdmisionanticipoPeer::IDADMISION, $this->idadmision);
        if ($this->isColumnModified(AdmisionanticipoPeer::ADMISIONANTICIPO_FECHA)) $criteria->add(AdmisionanticipoPeer::ADMISIONANTICIPO_FECHA, $this->admisionanticipo_fecha);
        if ($this->isColumnModified(AdmisionanticipoPeer::ADMISIONANTICIPO_CANTIDAD)) $criteria->add(AdmisionanticipoPeer::ADMISIONANTICIPO_CANTIDAD, $this->admisionanticipo_cantidad);
        if ($this->isColumnModified(AdmisionanticipoPeer::ADMISIONANTICIPO_NOTA)) $criteria->add(AdmisionanticipoPeer::ADMISIONANTICIPO_NOTA, $this->admisionanticipo_nota);

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
        $criteria = new Criteria(AdmisionanticipoPeer::DATABASE_NAME);
        $criteria->add(AdmisionanticipoPeer::IDADMISIONANTICIPO, $this->idadmisionanticipo);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdadmisionanticipo();
    }

    /**
     * Generic method to set the primary key (idadmisionanticipo column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdadmisionanticipo($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdadmisionanticipo();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Admisionanticipo (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdadmision($this->getIdadmision());
        $copyObj->setAdmisionanticipoFecha($this->getAdmisionanticipoFecha());
        $copyObj->setAdmisionanticipoCantidad($this->getAdmisionanticipoCantidad());
        $copyObj->setAdmisionanticipoNota($this->getAdmisionanticipoNota());

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
            $copyObj->setIdadmisionanticipo(NULL); // this is a auto-increment column, so set to default value
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
     * @return Admisionanticipo Clone of current object.
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
     * @return AdmisionanticipoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AdmisionanticipoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Admision object.
     *
     * @param                  Admision $v
     * @return Admisionanticipo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAdmision(Admision $v = null)
    {
        if ($v === null) {
            $this->setIdadmision(NULL);
        } else {
            $this->setIdadmision($v->getIdadmision());
        }

        $this->aAdmision = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Admision object, it will not be re-added.
        if ($v !== null) {
            $v->addAdmisionanticipo($this);
        }


        return $this;
    }


    /**
     * Get the associated Admision object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Admision The associated Admision object.
     * @throws PropelException
     */
    public function getAdmision(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aAdmision === null && ($this->idadmision !== null) && $doQuery) {
            $this->aAdmision = AdmisionQuery::create()->findPk($this->idadmision, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAdmision->addAdmisionanticipos($this);
             */
        }

        return $this->aAdmision;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idadmisionanticipo = null;
        $this->idadmision = null;
        $this->admisionanticipo_fecha = null;
        $this->admisionanticipo_cantidad = null;
        $this->admisionanticipo_nota = null;
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
            if ($this->aAdmision instanceof Persistent) {
              $this->aAdmision->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aAdmision = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AdmisionanticipoPeer::DEFAULT_STRING_FORMAT);
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
