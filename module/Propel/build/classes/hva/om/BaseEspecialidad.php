<?php


/**
 * Base class that represents a row from the 'especialidad' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseEspecialidad extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EspecialidadPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EspecialidadPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idespecialidad field.
     * @var        int
     */
    protected $idespecialidad;

    /**
     * The value for the especialidad_nombre field.
     * @var        string
     */
    protected $especialidad_nombre;

    /**
     * The value for the especialidad_descripcion field.
     * @var        string
     */
    protected $especialidad_descripcion;

    /**
     * @var        PropelObjectCollection|Medico[] Collection to store aggregation of Medico objects.
     */
    protected $collMedicos;
    protected $collMedicosPartial;

    /**
     * @var        PropelObjectCollection|Medicoespecialidad[] Collection to store aggregation of Medicoespecialidad objects.
     */
    protected $collMedicoespecialidads;
    protected $collMedicoespecialidadsPartial;

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
    protected $medicosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $medicoespecialidadsScheduledForDeletion = null;

    /**
     * Get the [idespecialidad] column value.
     *
     * @return int
     */
    public function getIdespecialidad()
    {

        return $this->idespecialidad;
    }

    /**
     * Get the [especialidad_nombre] column value.
     *
     * @return string
     */
    public function getEspecialidadNombre()
    {

        return $this->especialidad_nombre;
    }

    /**
     * Get the [especialidad_descripcion] column value.
     *
     * @return string
     */
    public function getEspecialidadDescripcion()
    {

        return $this->especialidad_descripcion;
    }

    /**
     * Set the value of [idespecialidad] column.
     *
     * @param  int $v new value
     * @return Especialidad The current object (for fluent API support)
     */
    public function setIdespecialidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idespecialidad !== $v) {
            $this->idespecialidad = $v;
            $this->modifiedColumns[] = EspecialidadPeer::IDESPECIALIDAD;
        }


        return $this;
    } // setIdespecialidad()

    /**
     * Set the value of [especialidad_nombre] column.
     *
     * @param  string $v new value
     * @return Especialidad The current object (for fluent API support)
     */
    public function setEspecialidadNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->especialidad_nombre !== $v) {
            $this->especialidad_nombre = $v;
            $this->modifiedColumns[] = EspecialidadPeer::ESPECIALIDAD_NOMBRE;
        }


        return $this;
    } // setEspecialidadNombre()

    /**
     * Set the value of [especialidad_descripcion] column.
     *
     * @param  string $v new value
     * @return Especialidad The current object (for fluent API support)
     */
    public function setEspecialidadDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->especialidad_descripcion !== $v) {
            $this->especialidad_descripcion = $v;
            $this->modifiedColumns[] = EspecialidadPeer::ESPECIALIDAD_DESCRIPCION;
        }


        return $this;
    } // setEspecialidadDescripcion()

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

            $this->idespecialidad = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->especialidad_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->especialidad_descripcion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = EspecialidadPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Especialidad object", $e);
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
            $con = Propel::getConnection(EspecialidadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EspecialidadPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collMedicos = null;

            $this->collMedicoespecialidads = null;

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
            $con = Propel::getConnection(EspecialidadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EspecialidadQuery::create()
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
            $con = Propel::getConnection(EspecialidadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EspecialidadPeer::addInstanceToPool($this);
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

            if ($this->medicosScheduledForDeletion !== null) {
                if (!$this->medicosScheduledForDeletion->isEmpty()) {
                    MedicoQuery::create()
                        ->filterByPrimaryKeys($this->medicosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->medicosScheduledForDeletion = null;
                }
            }

            if ($this->collMedicos !== null) {
                foreach ($this->collMedicos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->medicoespecialidadsScheduledForDeletion !== null) {
                if (!$this->medicoespecialidadsScheduledForDeletion->isEmpty()) {
                    MedicoespecialidadQuery::create()
                        ->filterByPrimaryKeys($this->medicoespecialidadsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->medicoespecialidadsScheduledForDeletion = null;
                }
            }

            if ($this->collMedicoespecialidads !== null) {
                foreach ($this->collMedicoespecialidads as $referrerFK) {
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

        $this->modifiedColumns[] = EspecialidadPeer::IDESPECIALIDAD;
        if (null !== $this->idespecialidad) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EspecialidadPeer::IDESPECIALIDAD . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EspecialidadPeer::IDESPECIALIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`idespecialidad`';
        }
        if ($this->isColumnModified(EspecialidadPeer::ESPECIALIDAD_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`especialidad_nombre`';
        }
        if ($this->isColumnModified(EspecialidadPeer::ESPECIALIDAD_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`especialidad_descripcion`';
        }

        $sql = sprintf(
            'INSERT INTO `especialidad` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idespecialidad`':
                        $stmt->bindValue($identifier, $this->idespecialidad, PDO::PARAM_INT);
                        break;
                    case '`especialidad_nombre`':
                        $stmt->bindValue($identifier, $this->especialidad_nombre, PDO::PARAM_STR);
                        break;
                    case '`especialidad_descripcion`':
                        $stmt->bindValue($identifier, $this->especialidad_descripcion, PDO::PARAM_STR);
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
        $this->setIdespecialidad($pk);

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


            if (($retval = EspecialidadPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collMedicos !== null) {
                    foreach ($this->collMedicos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collMedicoespecialidads !== null) {
                    foreach ($this->collMedicoespecialidads as $referrerFK) {
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
        $pos = EspecialidadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdespecialidad();
                break;
            case 1:
                return $this->getEspecialidadNombre();
                break;
            case 2:
                return $this->getEspecialidadDescripcion();
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
        if (isset($alreadyDumpedObjects['Especialidad'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Especialidad'][$this->getPrimaryKey()] = true;
        $keys = EspecialidadPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdespecialidad(),
            $keys[1] => $this->getEspecialidadNombre(),
            $keys[2] => $this->getEspecialidadDescripcion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collMedicos) {
                $result['Medicos'] = $this->collMedicos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collMedicoespecialidads) {
                $result['Medicoespecialidads'] = $this->collMedicoespecialidads->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = EspecialidadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdespecialidad($value);
                break;
            case 1:
                $this->setEspecialidadNombre($value);
                break;
            case 2:
                $this->setEspecialidadDescripcion($value);
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
        $keys = EspecialidadPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdespecialidad($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEspecialidadNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEspecialidadDescripcion($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EspecialidadPeer::DATABASE_NAME);

        if ($this->isColumnModified(EspecialidadPeer::IDESPECIALIDAD)) $criteria->add(EspecialidadPeer::IDESPECIALIDAD, $this->idespecialidad);
        if ($this->isColumnModified(EspecialidadPeer::ESPECIALIDAD_NOMBRE)) $criteria->add(EspecialidadPeer::ESPECIALIDAD_NOMBRE, $this->especialidad_nombre);
        if ($this->isColumnModified(EspecialidadPeer::ESPECIALIDAD_DESCRIPCION)) $criteria->add(EspecialidadPeer::ESPECIALIDAD_DESCRIPCION, $this->especialidad_descripcion);

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
        $criteria = new Criteria(EspecialidadPeer::DATABASE_NAME);
        $criteria->add(EspecialidadPeer::IDESPECIALIDAD, $this->idespecialidad);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdespecialidad();
    }

    /**
     * Generic method to set the primary key (idespecialidad column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdespecialidad($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdespecialidad();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Especialidad (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEspecialidadNombre($this->getEspecialidadNombre());
        $copyObj->setEspecialidadDescripcion($this->getEspecialidadDescripcion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getMedicos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addMedico($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getMedicoespecialidads() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addMedicoespecialidad($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdespecialidad(NULL); // this is a auto-increment column, so set to default value
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
     * @return Especialidad Clone of current object.
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
     * @return EspecialidadPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EspecialidadPeer();
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
        if ('Medico' == $relationName) {
            $this->initMedicos();
        }
        if ('Medicoespecialidad' == $relationName) {
            $this->initMedicoespecialidads();
        }
    }

    /**
     * Clears out the collMedicos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Especialidad The current object (for fluent API support)
     * @see        addMedicos()
     */
    public function clearMedicos()
    {
        $this->collMedicos = null; // important to set this to null since that means it is uninitialized
        $this->collMedicosPartial = null;

        return $this;
    }

    /**
     * reset is the collMedicos collection loaded partially
     *
     * @return void
     */
    public function resetPartialMedicos($v = true)
    {
        $this->collMedicosPartial = $v;
    }

    /**
     * Initializes the collMedicos collection.
     *
     * By default this just sets the collMedicos collection to an empty array (like clearcollMedicos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initMedicos($overrideExisting = true)
    {
        if (null !== $this->collMedicos && !$overrideExisting) {
            return;
        }
        $this->collMedicos = new PropelObjectCollection();
        $this->collMedicos->setModel('Medico');
    }

    /**
     * Gets an array of Medico objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Especialidad is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Medico[] List of Medico objects
     * @throws PropelException
     */
    public function getMedicos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collMedicosPartial && !$this->isNew();
        if (null === $this->collMedicos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collMedicos) {
                // return empty collection
                $this->initMedicos();
            } else {
                $collMedicos = MedicoQuery::create(null, $criteria)
                    ->filterByEspecialidad($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collMedicosPartial && count($collMedicos)) {
                      $this->initMedicos(false);

                      foreach ($collMedicos as $obj) {
                        if (false == $this->collMedicos->contains($obj)) {
                          $this->collMedicos->append($obj);
                        }
                      }

                      $this->collMedicosPartial = true;
                    }

                    $collMedicos->getInternalIterator()->rewind();

                    return $collMedicos;
                }

                if ($partial && $this->collMedicos) {
                    foreach ($this->collMedicos as $obj) {
                        if ($obj->isNew()) {
                            $collMedicos[] = $obj;
                        }
                    }
                }

                $this->collMedicos = $collMedicos;
                $this->collMedicosPartial = false;
            }
        }

        return $this->collMedicos;
    }

    /**
     * Sets a collection of Medico objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $medicos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Especialidad The current object (for fluent API support)
     */
    public function setMedicos(PropelCollection $medicos, PropelPDO $con = null)
    {
        $medicosToDelete = $this->getMedicos(new Criteria(), $con)->diff($medicos);


        $this->medicosScheduledForDeletion = $medicosToDelete;

        foreach ($medicosToDelete as $medicoRemoved) {
            $medicoRemoved->setEspecialidad(null);
        }

        $this->collMedicos = null;
        foreach ($medicos as $medico) {
            $this->addMedico($medico);
        }

        $this->collMedicos = $medicos;
        $this->collMedicosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Medico objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Medico objects.
     * @throws PropelException
     */
    public function countMedicos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collMedicosPartial && !$this->isNew();
        if (null === $this->collMedicos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collMedicos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getMedicos());
            }
            $query = MedicoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEspecialidad($this)
                ->count($con);
        }

        return count($this->collMedicos);
    }

    /**
     * Method called to associate a Medico object to this object
     * through the Medico foreign key attribute.
     *
     * @param    Medico $l Medico
     * @return Especialidad The current object (for fluent API support)
     */
    public function addMedico(Medico $l)
    {
        if ($this->collMedicos === null) {
            $this->initMedicos();
            $this->collMedicosPartial = true;
        }

        if (!in_array($l, $this->collMedicos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddMedico($l);

            if ($this->medicosScheduledForDeletion and $this->medicosScheduledForDeletion->contains($l)) {
                $this->medicosScheduledForDeletion->remove($this->medicosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Medico $medico The medico object to add.
     */
    protected function doAddMedico($medico)
    {
        $this->collMedicos[]= $medico;
        $medico->setEspecialidad($this);
    }

    /**
     * @param	Medico $medico The medico object to remove.
     * @return Especialidad The current object (for fluent API support)
     */
    public function removeMedico($medico)
    {
        if ($this->getMedicos()->contains($medico)) {
            $this->collMedicos->remove($this->collMedicos->search($medico));
            if (null === $this->medicosScheduledForDeletion) {
                $this->medicosScheduledForDeletion = clone $this->collMedicos;
                $this->medicosScheduledForDeletion->clear();
            }
            $this->medicosScheduledForDeletion[]= clone $medico;
            $medico->setEspecialidad(null);
        }

        return $this;
    }

    /**
     * Clears out the collMedicoespecialidads collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Especialidad The current object (for fluent API support)
     * @see        addMedicoespecialidads()
     */
    public function clearMedicoespecialidads()
    {
        $this->collMedicoespecialidads = null; // important to set this to null since that means it is uninitialized
        $this->collMedicoespecialidadsPartial = null;

        return $this;
    }

    /**
     * reset is the collMedicoespecialidads collection loaded partially
     *
     * @return void
     */
    public function resetPartialMedicoespecialidads($v = true)
    {
        $this->collMedicoespecialidadsPartial = $v;
    }

    /**
     * Initializes the collMedicoespecialidads collection.
     *
     * By default this just sets the collMedicoespecialidads collection to an empty array (like clearcollMedicoespecialidads());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initMedicoespecialidads($overrideExisting = true)
    {
        if (null !== $this->collMedicoespecialidads && !$overrideExisting) {
            return;
        }
        $this->collMedicoespecialidads = new PropelObjectCollection();
        $this->collMedicoespecialidads->setModel('Medicoespecialidad');
    }

    /**
     * Gets an array of Medicoespecialidad objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Especialidad is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Medicoespecialidad[] List of Medicoespecialidad objects
     * @throws PropelException
     */
    public function getMedicoespecialidads($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collMedicoespecialidadsPartial && !$this->isNew();
        if (null === $this->collMedicoespecialidads || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collMedicoespecialidads) {
                // return empty collection
                $this->initMedicoespecialidads();
            } else {
                $collMedicoespecialidads = MedicoespecialidadQuery::create(null, $criteria)
                    ->filterByEspecialidad($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collMedicoespecialidadsPartial && count($collMedicoespecialidads)) {
                      $this->initMedicoespecialidads(false);

                      foreach ($collMedicoespecialidads as $obj) {
                        if (false == $this->collMedicoespecialidads->contains($obj)) {
                          $this->collMedicoespecialidads->append($obj);
                        }
                      }

                      $this->collMedicoespecialidadsPartial = true;
                    }

                    $collMedicoespecialidads->getInternalIterator()->rewind();

                    return $collMedicoespecialidads;
                }

                if ($partial && $this->collMedicoespecialidads) {
                    foreach ($this->collMedicoespecialidads as $obj) {
                        if ($obj->isNew()) {
                            $collMedicoespecialidads[] = $obj;
                        }
                    }
                }

                $this->collMedicoespecialidads = $collMedicoespecialidads;
                $this->collMedicoespecialidadsPartial = false;
            }
        }

        return $this->collMedicoespecialidads;
    }

    /**
     * Sets a collection of Medicoespecialidad objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $medicoespecialidads A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Especialidad The current object (for fluent API support)
     */
    public function setMedicoespecialidads(PropelCollection $medicoespecialidads, PropelPDO $con = null)
    {
        $medicoespecialidadsToDelete = $this->getMedicoespecialidads(new Criteria(), $con)->diff($medicoespecialidads);


        $this->medicoespecialidadsScheduledForDeletion = $medicoespecialidadsToDelete;

        foreach ($medicoespecialidadsToDelete as $medicoespecialidadRemoved) {
            $medicoespecialidadRemoved->setEspecialidad(null);
        }

        $this->collMedicoespecialidads = null;
        foreach ($medicoespecialidads as $medicoespecialidad) {
            $this->addMedicoespecialidad($medicoespecialidad);
        }

        $this->collMedicoespecialidads = $medicoespecialidads;
        $this->collMedicoespecialidadsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Medicoespecialidad objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Medicoespecialidad objects.
     * @throws PropelException
     */
    public function countMedicoespecialidads(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collMedicoespecialidadsPartial && !$this->isNew();
        if (null === $this->collMedicoespecialidads || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collMedicoespecialidads) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getMedicoespecialidads());
            }
            $query = MedicoespecialidadQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEspecialidad($this)
                ->count($con);
        }

        return count($this->collMedicoespecialidads);
    }

    /**
     * Method called to associate a Medicoespecialidad object to this object
     * through the Medicoespecialidad foreign key attribute.
     *
     * @param    Medicoespecialidad $l Medicoespecialidad
     * @return Especialidad The current object (for fluent API support)
     */
    public function addMedicoespecialidad(Medicoespecialidad $l)
    {
        if ($this->collMedicoespecialidads === null) {
            $this->initMedicoespecialidads();
            $this->collMedicoespecialidadsPartial = true;
        }

        if (!in_array($l, $this->collMedicoespecialidads->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddMedicoespecialidad($l);

            if ($this->medicoespecialidadsScheduledForDeletion and $this->medicoespecialidadsScheduledForDeletion->contains($l)) {
                $this->medicoespecialidadsScheduledForDeletion->remove($this->medicoespecialidadsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Medicoespecialidad $medicoespecialidad The medicoespecialidad object to add.
     */
    protected function doAddMedicoespecialidad($medicoespecialidad)
    {
        $this->collMedicoespecialidads[]= $medicoespecialidad;
        $medicoespecialidad->setEspecialidad($this);
    }

    /**
     * @param	Medicoespecialidad $medicoespecialidad The medicoespecialidad object to remove.
     * @return Especialidad The current object (for fluent API support)
     */
    public function removeMedicoespecialidad($medicoespecialidad)
    {
        if ($this->getMedicoespecialidads()->contains($medicoespecialidad)) {
            $this->collMedicoespecialidads->remove($this->collMedicoespecialidads->search($medicoespecialidad));
            if (null === $this->medicoespecialidadsScheduledForDeletion) {
                $this->medicoespecialidadsScheduledForDeletion = clone $this->collMedicoespecialidads;
                $this->medicoespecialidadsScheduledForDeletion->clear();
            }
            $this->medicoespecialidadsScheduledForDeletion[]= clone $medicoespecialidad;
            $medicoespecialidad->setEspecialidad(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Especialidad is new, it will return
     * an empty collection; or if this Especialidad has previously
     * been saved, it will retrieve related Medicoespecialidads from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Especialidad.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Medicoespecialidad[] List of Medicoespecialidad objects
     */
    public function getMedicoespecialidadsJoinMedico($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = MedicoespecialidadQuery::create(null, $criteria);
        $query->joinWith('Medico', $join_behavior);

        return $this->getMedicoespecialidads($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idespecialidad = null;
        $this->especialidad_nombre = null;
        $this->especialidad_descripcion = null;
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
            if ($this->collMedicos) {
                foreach ($this->collMedicos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collMedicoespecialidads) {
                foreach ($this->collMedicoespecialidads as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collMedicos instanceof PropelCollection) {
            $this->collMedicos->clearIterator();
        }
        $this->collMedicos = null;
        if ($this->collMedicoespecialidads instanceof PropelCollection) {
            $this->collMedicoespecialidads->clearIterator();
        }
        $this->collMedicoespecialidads = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EspecialidadPeer::DEFAULT_STRING_FORMAT);
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
