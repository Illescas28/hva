<?php


/**
 * Base class that represents a row from the 'rol' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseRol extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RolPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RolPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idrol field.
     * @var        int
     */
    protected $idrol;

    /**
     * The value for the rol_nombre field.
     * @var        string
     */
    protected $rol_nombre;

    /**
     * The value for the rol_descripcion field.
     * @var        string
     */
    protected $rol_descripcion;

    /**
     * @var        PropelObjectCollection|Empleado[] Collection to store aggregation of Empleado objects.
     */
    protected $collEmpleados;
    protected $collEmpleadosPartial;

    /**
     * @var        PropelObjectCollection|Rolmodulo[] Collection to store aggregation of Rolmodulo objects.
     */
    protected $collRolmodulos;
    protected $collRolmodulosPartial;

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
    protected $empleadosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $rolmodulosScheduledForDeletion = null;

    /**
     * Get the [idrol] column value.
     *
     * @return int
     */
    public function getIdrol()
    {

        return $this->idrol;
    }

    /**
     * Get the [rol_nombre] column value.
     *
     * @return string
     */
    public function getRolNombre()
    {

        return $this->rol_nombre;
    }

    /**
     * Get the [rol_descripcion] column value.
     *
     * @return string
     */
    public function getRolDescripcion()
    {

        return $this->rol_descripcion;
    }

    /**
     * Set the value of [idrol] column.
     *
     * @param  int $v new value
     * @return Rol The current object (for fluent API support)
     */
    public function setIdrol($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idrol !== $v) {
            $this->idrol = $v;
            $this->modifiedColumns[] = RolPeer::IDROL;
        }


        return $this;
    } // setIdrol()

    /**
     * Set the value of [rol_nombre] column.
     *
     * @param  string $v new value
     * @return Rol The current object (for fluent API support)
     */
    public function setRolNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rol_nombre !== $v) {
            $this->rol_nombre = $v;
            $this->modifiedColumns[] = RolPeer::ROL_NOMBRE;
        }


        return $this;
    } // setRolNombre()

    /**
     * Set the value of [rol_descripcion] column.
     *
     * @param  string $v new value
     * @return Rol The current object (for fluent API support)
     */
    public function setRolDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rol_descripcion !== $v) {
            $this->rol_descripcion = $v;
            $this->modifiedColumns[] = RolPeer::ROL_DESCRIPCION;
        }


        return $this;
    } // setRolDescripcion()

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

            $this->idrol = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->rol_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->rol_descripcion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = RolPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Rol object", $e);
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
            $con = Propel::getConnection(RolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RolPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collEmpleados = null;

            $this->collRolmodulos = null;

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
            $con = Propel::getConnection(RolPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RolQuery::create()
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
            $con = Propel::getConnection(RolPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RolPeer::addInstanceToPool($this);
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

            if ($this->empleadosScheduledForDeletion !== null) {
                if (!$this->empleadosScheduledForDeletion->isEmpty()) {
                    EmpleadoQuery::create()
                        ->filterByPrimaryKeys($this->empleadosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->empleadosScheduledForDeletion = null;
                }
            }

            if ($this->collEmpleados !== null) {
                foreach ($this->collEmpleados as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->rolmodulosScheduledForDeletion !== null) {
                if (!$this->rolmodulosScheduledForDeletion->isEmpty()) {
                    RolmoduloQuery::create()
                        ->filterByPrimaryKeys($this->rolmodulosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->rolmodulosScheduledForDeletion = null;
                }
            }

            if ($this->collRolmodulos !== null) {
                foreach ($this->collRolmodulos as $referrerFK) {
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

        $this->modifiedColumns[] = RolPeer::IDROL;
        if (null !== $this->idrol) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RolPeer::IDROL . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RolPeer::IDROL)) {
            $modifiedColumns[':p' . $index++]  = '`idrol`';
        }
        if ($this->isColumnModified(RolPeer::ROL_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`rol_nombre`';
        }
        if ($this->isColumnModified(RolPeer::ROL_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`rol_descripcion`';
        }

        $sql = sprintf(
            'INSERT INTO `rol` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idrol`':
                        $stmt->bindValue($identifier, $this->idrol, PDO::PARAM_INT);
                        break;
                    case '`rol_nombre`':
                        $stmt->bindValue($identifier, $this->rol_nombre, PDO::PARAM_STR);
                        break;
                    case '`rol_descripcion`':
                        $stmt->bindValue($identifier, $this->rol_descripcion, PDO::PARAM_STR);
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
        $this->setIdrol($pk);

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


            if (($retval = RolPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collEmpleados !== null) {
                    foreach ($this->collEmpleados as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collRolmodulos !== null) {
                    foreach ($this->collRolmodulos as $referrerFK) {
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
        $pos = RolPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdrol();
                break;
            case 1:
                return $this->getRolNombre();
                break;
            case 2:
                return $this->getRolDescripcion();
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
        if (isset($alreadyDumpedObjects['Rol'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Rol'][$this->getPrimaryKey()] = true;
        $keys = RolPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdrol(),
            $keys[1] => $this->getRolNombre(),
            $keys[2] => $this->getRolDescripcion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collEmpleados) {
                $result['Empleados'] = $this->collEmpleados->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRolmodulos) {
                $result['Rolmodulos'] = $this->collRolmodulos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = RolPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdrol($value);
                break;
            case 1:
                $this->setRolNombre($value);
                break;
            case 2:
                $this->setRolDescripcion($value);
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
        $keys = RolPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdrol($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRolNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRolDescripcion($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RolPeer::DATABASE_NAME);

        if ($this->isColumnModified(RolPeer::IDROL)) $criteria->add(RolPeer::IDROL, $this->idrol);
        if ($this->isColumnModified(RolPeer::ROL_NOMBRE)) $criteria->add(RolPeer::ROL_NOMBRE, $this->rol_nombre);
        if ($this->isColumnModified(RolPeer::ROL_DESCRIPCION)) $criteria->add(RolPeer::ROL_DESCRIPCION, $this->rol_descripcion);

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
        $criteria = new Criteria(RolPeer::DATABASE_NAME);
        $criteria->add(RolPeer::IDROL, $this->idrol);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdrol();
    }

    /**
     * Generic method to set the primary key (idrol column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdrol($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdrol();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Rol (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRolNombre($this->getRolNombre());
        $copyObj->setRolDescripcion($this->getRolDescripcion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getEmpleados() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEmpleado($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getRolmodulos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRolmodulo($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdrol(NULL); // this is a auto-increment column, so set to default value
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
     * @return Rol Clone of current object.
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
     * @return RolPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RolPeer();
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
        if ('Empleado' == $relationName) {
            $this->initEmpleados();
        }
        if ('Rolmodulo' == $relationName) {
            $this->initRolmodulos();
        }
    }

    /**
     * Clears out the collEmpleados collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Rol The current object (for fluent API support)
     * @see        addEmpleados()
     */
    public function clearEmpleados()
    {
        $this->collEmpleados = null; // important to set this to null since that means it is uninitialized
        $this->collEmpleadosPartial = null;

        return $this;
    }

    /**
     * reset is the collEmpleados collection loaded partially
     *
     * @return void
     */
    public function resetPartialEmpleados($v = true)
    {
        $this->collEmpleadosPartial = $v;
    }

    /**
     * Initializes the collEmpleados collection.
     *
     * By default this just sets the collEmpleados collection to an empty array (like clearcollEmpleados());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEmpleados($overrideExisting = true)
    {
        if (null !== $this->collEmpleados && !$overrideExisting) {
            return;
        }
        $this->collEmpleados = new PropelObjectCollection();
        $this->collEmpleados->setModel('Empleado');
    }

    /**
     * Gets an array of Empleado objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Rol is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Empleado[] List of Empleado objects
     * @throws PropelException
     */
    public function getEmpleados($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadosPartial && !$this->isNew();
        if (null === $this->collEmpleados || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEmpleados) {
                // return empty collection
                $this->initEmpleados();
            } else {
                $collEmpleados = EmpleadoQuery::create(null, $criteria)
                    ->filterByRol($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEmpleadosPartial && count($collEmpleados)) {
                      $this->initEmpleados(false);

                      foreach ($collEmpleados as $obj) {
                        if (false == $this->collEmpleados->contains($obj)) {
                          $this->collEmpleados->append($obj);
                        }
                      }

                      $this->collEmpleadosPartial = true;
                    }

                    $collEmpleados->getInternalIterator()->rewind();

                    return $collEmpleados;
                }

                if ($partial && $this->collEmpleados) {
                    foreach ($this->collEmpleados as $obj) {
                        if ($obj->isNew()) {
                            $collEmpleados[] = $obj;
                        }
                    }
                }

                $this->collEmpleados = $collEmpleados;
                $this->collEmpleadosPartial = false;
            }
        }

        return $this->collEmpleados;
    }

    /**
     * Sets a collection of Empleado objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $empleados A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Rol The current object (for fluent API support)
     */
    public function setEmpleados(PropelCollection $empleados, PropelPDO $con = null)
    {
        $empleadosToDelete = $this->getEmpleados(new Criteria(), $con)->diff($empleados);


        $this->empleadosScheduledForDeletion = $empleadosToDelete;

        foreach ($empleadosToDelete as $empleadoRemoved) {
            $empleadoRemoved->setRol(null);
        }

        $this->collEmpleados = null;
        foreach ($empleados as $empleado) {
            $this->addEmpleado($empleado);
        }

        $this->collEmpleados = $empleados;
        $this->collEmpleadosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Empleado objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Empleado objects.
     * @throws PropelException
     */
    public function countEmpleados(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadosPartial && !$this->isNew();
        if (null === $this->collEmpleados || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEmpleados) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEmpleados());
            }
            $query = EmpleadoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRol($this)
                ->count($con);
        }

        return count($this->collEmpleados);
    }

    /**
     * Method called to associate a Empleado object to this object
     * through the Empleado foreign key attribute.
     *
     * @param    Empleado $l Empleado
     * @return Rol The current object (for fluent API support)
     */
    public function addEmpleado(Empleado $l)
    {
        if ($this->collEmpleados === null) {
            $this->initEmpleados();
            $this->collEmpleadosPartial = true;
        }

        if (!in_array($l, $this->collEmpleados->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEmpleado($l);

            if ($this->empleadosScheduledForDeletion and $this->empleadosScheduledForDeletion->contains($l)) {
                $this->empleadosScheduledForDeletion->remove($this->empleadosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Empleado $empleado The empleado object to add.
     */
    protected function doAddEmpleado($empleado)
    {
        $this->collEmpleados[]= $empleado;
        $empleado->setRol($this);
    }

    /**
     * @param	Empleado $empleado The empleado object to remove.
     * @return Rol The current object (for fluent API support)
     */
    public function removeEmpleado($empleado)
    {
        if ($this->getEmpleados()->contains($empleado)) {
            $this->collEmpleados->remove($this->collEmpleados->search($empleado));
            if (null === $this->empleadosScheduledForDeletion) {
                $this->empleadosScheduledForDeletion = clone $this->collEmpleados;
                $this->empleadosScheduledForDeletion->clear();
            }
            $this->empleadosScheduledForDeletion[]= clone $empleado;
            $empleado->setRol(null);
        }

        return $this;
    }

    /**
     * Clears out the collRolmodulos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Rol The current object (for fluent API support)
     * @see        addRolmodulos()
     */
    public function clearRolmodulos()
    {
        $this->collRolmodulos = null; // important to set this to null since that means it is uninitialized
        $this->collRolmodulosPartial = null;

        return $this;
    }

    /**
     * reset is the collRolmodulos collection loaded partially
     *
     * @return void
     */
    public function resetPartialRolmodulos($v = true)
    {
        $this->collRolmodulosPartial = $v;
    }

    /**
     * Initializes the collRolmodulos collection.
     *
     * By default this just sets the collRolmodulos collection to an empty array (like clearcollRolmodulos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRolmodulos($overrideExisting = true)
    {
        if (null !== $this->collRolmodulos && !$overrideExisting) {
            return;
        }
        $this->collRolmodulos = new PropelObjectCollection();
        $this->collRolmodulos->setModel('Rolmodulo');
    }

    /**
     * Gets an array of Rolmodulo objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Rol is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Rolmodulo[] List of Rolmodulo objects
     * @throws PropelException
     */
    public function getRolmodulos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRolmodulosPartial && !$this->isNew();
        if (null === $this->collRolmodulos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRolmodulos) {
                // return empty collection
                $this->initRolmodulos();
            } else {
                $collRolmodulos = RolmoduloQuery::create(null, $criteria)
                    ->filterByRol($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRolmodulosPartial && count($collRolmodulos)) {
                      $this->initRolmodulos(false);

                      foreach ($collRolmodulos as $obj) {
                        if (false == $this->collRolmodulos->contains($obj)) {
                          $this->collRolmodulos->append($obj);
                        }
                      }

                      $this->collRolmodulosPartial = true;
                    }

                    $collRolmodulos->getInternalIterator()->rewind();

                    return $collRolmodulos;
                }

                if ($partial && $this->collRolmodulos) {
                    foreach ($this->collRolmodulos as $obj) {
                        if ($obj->isNew()) {
                            $collRolmodulos[] = $obj;
                        }
                    }
                }

                $this->collRolmodulos = $collRolmodulos;
                $this->collRolmodulosPartial = false;
            }
        }

        return $this->collRolmodulos;
    }

    /**
     * Sets a collection of Rolmodulo objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $rolmodulos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Rol The current object (for fluent API support)
     */
    public function setRolmodulos(PropelCollection $rolmodulos, PropelPDO $con = null)
    {
        $rolmodulosToDelete = $this->getRolmodulos(new Criteria(), $con)->diff($rolmodulos);


        $this->rolmodulosScheduledForDeletion = $rolmodulosToDelete;

        foreach ($rolmodulosToDelete as $rolmoduloRemoved) {
            $rolmoduloRemoved->setRol(null);
        }

        $this->collRolmodulos = null;
        foreach ($rolmodulos as $rolmodulo) {
            $this->addRolmodulo($rolmodulo);
        }

        $this->collRolmodulos = $rolmodulos;
        $this->collRolmodulosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Rolmodulo objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Rolmodulo objects.
     * @throws PropelException
     */
    public function countRolmodulos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRolmodulosPartial && !$this->isNew();
        if (null === $this->collRolmodulos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRolmodulos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRolmodulos());
            }
            $query = RolmoduloQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRol($this)
                ->count($con);
        }

        return count($this->collRolmodulos);
    }

    /**
     * Method called to associate a Rolmodulo object to this object
     * through the Rolmodulo foreign key attribute.
     *
     * @param    Rolmodulo $l Rolmodulo
     * @return Rol The current object (for fluent API support)
     */
    public function addRolmodulo(Rolmodulo $l)
    {
        if ($this->collRolmodulos === null) {
            $this->initRolmodulos();
            $this->collRolmodulosPartial = true;
        }

        if (!in_array($l, $this->collRolmodulos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRolmodulo($l);

            if ($this->rolmodulosScheduledForDeletion and $this->rolmodulosScheduledForDeletion->contains($l)) {
                $this->rolmodulosScheduledForDeletion->remove($this->rolmodulosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Rolmodulo $rolmodulo The rolmodulo object to add.
     */
    protected function doAddRolmodulo($rolmodulo)
    {
        $this->collRolmodulos[]= $rolmodulo;
        $rolmodulo->setRol($this);
    }

    /**
     * @param	Rolmodulo $rolmodulo The rolmodulo object to remove.
     * @return Rol The current object (for fluent API support)
     */
    public function removeRolmodulo($rolmodulo)
    {
        if ($this->getRolmodulos()->contains($rolmodulo)) {
            $this->collRolmodulos->remove($this->collRolmodulos->search($rolmodulo));
            if (null === $this->rolmodulosScheduledForDeletion) {
                $this->rolmodulosScheduledForDeletion = clone $this->collRolmodulos;
                $this->rolmodulosScheduledForDeletion->clear();
            }
            $this->rolmodulosScheduledForDeletion[]= clone $rolmodulo;
            $rolmodulo->setRol(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Rol is new, it will return
     * an empty collection; or if this Rol has previously
     * been saved, it will retrieve related Rolmodulos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Rol.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Rolmodulo[] List of Rolmodulo objects
     */
    public function getRolmodulosJoinModulo($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RolmoduloQuery::create(null, $criteria);
        $query->joinWith('Modulo', $join_behavior);

        return $this->getRolmodulos($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idrol = null;
        $this->rol_nombre = null;
        $this->rol_descripcion = null;
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
            if ($this->collEmpleados) {
                foreach ($this->collEmpleados as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRolmodulos) {
                foreach ($this->collRolmodulos as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collEmpleados instanceof PropelCollection) {
            $this->collEmpleados->clearIterator();
        }
        $this->collEmpleados = null;
        if ($this->collRolmodulos instanceof PropelCollection) {
            $this->collRolmodulos->clearIterator();
        }
        $this->collRolmodulos = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RolPeer::DEFAULT_STRING_FORMAT);
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
