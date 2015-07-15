<?php


/**
 * Base class that represents a row from the 'conceptobanco' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseConceptobanco extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ConceptobancoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ConceptobancoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idbancotransaccion field.
     * @var        int
     */
    protected $idbancotransaccion;

    /**
     * The value for the bancotransaccion_nombre field.
     * @var        string
     */
    protected $bancotransaccion_nombre;

    /**
     * The value for the bancotransaccion_descripcion field.
     * @var        string
     */
    protected $bancotransaccion_descripcion;

    /**
     * @var        PropelObjectCollection|Banco[] Collection to store aggregation of Banco objects.
     */
    protected $collBancos;
    protected $collBancosPartial;

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
    protected $bancosScheduledForDeletion = null;

    /**
     * Get the [idbancotransaccion] column value.
     *
     * @return int
     */
    public function getIdbancotransaccion()
    {

        return $this->idbancotransaccion;
    }

    /**
     * Get the [bancotransaccion_nombre] column value.
     *
     * @return string
     */
    public function getBancotransaccionNombre()
    {

        return $this->bancotransaccion_nombre;
    }

    /**
     * Get the [bancotransaccion_descripcion] column value.
     *
     * @return string
     */
    public function getBancotransaccionDescripcion()
    {

        return $this->bancotransaccion_descripcion;
    }

    /**
     * Set the value of [idbancotransaccion] column.
     *
     * @param  int $v new value
     * @return Conceptobanco The current object (for fluent API support)
     */
    public function setIdbancotransaccion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idbancotransaccion !== $v) {
            $this->idbancotransaccion = $v;
            $this->modifiedColumns[] = ConceptobancoPeer::IDBANCOTRANSACCION;
        }


        return $this;
    } // setIdbancotransaccion()

    /**
     * Set the value of [bancotransaccion_nombre] column.
     *
     * @param  string $v new value
     * @return Conceptobanco The current object (for fluent API support)
     */
    public function setBancotransaccionNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bancotransaccion_nombre !== $v) {
            $this->bancotransaccion_nombre = $v;
            $this->modifiedColumns[] = ConceptobancoPeer::BANCOTRANSACCION_NOMBRE;
        }


        return $this;
    } // setBancotransaccionNombre()

    /**
     * Set the value of [bancotransaccion_descripcion] column.
     *
     * @param  string $v new value
     * @return Conceptobanco The current object (for fluent API support)
     */
    public function setBancotransaccionDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bancotransaccion_descripcion !== $v) {
            $this->bancotransaccion_descripcion = $v;
            $this->modifiedColumns[] = ConceptobancoPeer::BANCOTRANSACCION_DESCRIPCION;
        }


        return $this;
    } // setBancotransaccionDescripcion()

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

            $this->idbancotransaccion = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->bancotransaccion_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->bancotransaccion_descripcion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = ConceptobancoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Conceptobanco object", $e);
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
            $con = Propel::getConnection(ConceptobancoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ConceptobancoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collBancos = null;

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
            $con = Propel::getConnection(ConceptobancoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ConceptobancoQuery::create()
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
            $con = Propel::getConnection(ConceptobancoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ConceptobancoPeer::addInstanceToPool($this);
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

            if ($this->bancosScheduledForDeletion !== null) {
                if (!$this->bancosScheduledForDeletion->isEmpty()) {
                    BancoQuery::create()
                        ->filterByPrimaryKeys($this->bancosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->bancosScheduledForDeletion = null;
                }
            }

            if ($this->collBancos !== null) {
                foreach ($this->collBancos as $referrerFK) {
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

        $this->modifiedColumns[] = ConceptobancoPeer::IDBANCOTRANSACCION;
        if (null !== $this->idbancotransaccion) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ConceptobancoPeer::IDBANCOTRANSACCION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ConceptobancoPeer::IDBANCOTRANSACCION)) {
            $modifiedColumns[':p' . $index++]  = '`idbancotransaccion`';
        }
        if ($this->isColumnModified(ConceptobancoPeer::BANCOTRANSACCION_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`bancotransaccion_nombre`';
        }
        if ($this->isColumnModified(ConceptobancoPeer::BANCOTRANSACCION_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`bancotransaccion_descripcion`';
        }

        $sql = sprintf(
            'INSERT INTO `conceptobanco` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idbancotransaccion`':
                        $stmt->bindValue($identifier, $this->idbancotransaccion, PDO::PARAM_INT);
                        break;
                    case '`bancotransaccion_nombre`':
                        $stmt->bindValue($identifier, $this->bancotransaccion_nombre, PDO::PARAM_STR);
                        break;
                    case '`bancotransaccion_descripcion`':
                        $stmt->bindValue($identifier, $this->bancotransaccion_descripcion, PDO::PARAM_STR);
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
        $this->setIdbancotransaccion($pk);

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


            if (($retval = ConceptobancoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collBancos !== null) {
                    foreach ($this->collBancos as $referrerFK) {
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
        $pos = ConceptobancoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdbancotransaccion();
                break;
            case 1:
                return $this->getBancotransaccionNombre();
                break;
            case 2:
                return $this->getBancotransaccionDescripcion();
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
        if (isset($alreadyDumpedObjects['Conceptobanco'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Conceptobanco'][$this->getPrimaryKey()] = true;
        $keys = ConceptobancoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdbancotransaccion(),
            $keys[1] => $this->getBancotransaccionNombre(),
            $keys[2] => $this->getBancotransaccionDescripcion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collBancos) {
                $result['Bancos'] = $this->collBancos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ConceptobancoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdbancotransaccion($value);
                break;
            case 1:
                $this->setBancotransaccionNombre($value);
                break;
            case 2:
                $this->setBancotransaccionDescripcion($value);
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
        $keys = ConceptobancoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdbancotransaccion($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setBancotransaccionNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setBancotransaccionDescripcion($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ConceptobancoPeer::DATABASE_NAME);

        if ($this->isColumnModified(ConceptobancoPeer::IDBANCOTRANSACCION)) $criteria->add(ConceptobancoPeer::IDBANCOTRANSACCION, $this->idbancotransaccion);
        if ($this->isColumnModified(ConceptobancoPeer::BANCOTRANSACCION_NOMBRE)) $criteria->add(ConceptobancoPeer::BANCOTRANSACCION_NOMBRE, $this->bancotransaccion_nombre);
        if ($this->isColumnModified(ConceptobancoPeer::BANCOTRANSACCION_DESCRIPCION)) $criteria->add(ConceptobancoPeer::BANCOTRANSACCION_DESCRIPCION, $this->bancotransaccion_descripcion);

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
        $criteria = new Criteria(ConceptobancoPeer::DATABASE_NAME);
        $criteria->add(ConceptobancoPeer::IDBANCOTRANSACCION, $this->idbancotransaccion);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdbancotransaccion();
    }

    /**
     * Generic method to set the primary key (idbancotransaccion column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdbancotransaccion($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdbancotransaccion();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Conceptobanco (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBancotransaccionNombre($this->getBancotransaccionNombre());
        $copyObj->setBancotransaccionDescripcion($this->getBancotransaccionDescripcion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getBancos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addBanco($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdbancotransaccion(NULL); // this is a auto-increment column, so set to default value
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
     * @return Conceptobanco Clone of current object.
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
     * @return ConceptobancoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ConceptobancoPeer();
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
        if ('Banco' == $relationName) {
            $this->initBancos();
        }
    }

    /**
     * Clears out the collBancos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Conceptobanco The current object (for fluent API support)
     * @see        addBancos()
     */
    public function clearBancos()
    {
        $this->collBancos = null; // important to set this to null since that means it is uninitialized
        $this->collBancosPartial = null;

        return $this;
    }

    /**
     * reset is the collBancos collection loaded partially
     *
     * @return void
     */
    public function resetPartialBancos($v = true)
    {
        $this->collBancosPartial = $v;
    }

    /**
     * Initializes the collBancos collection.
     *
     * By default this just sets the collBancos collection to an empty array (like clearcollBancos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initBancos($overrideExisting = true)
    {
        if (null !== $this->collBancos && !$overrideExisting) {
            return;
        }
        $this->collBancos = new PropelObjectCollection();
        $this->collBancos->setModel('Banco');
    }

    /**
     * Gets an array of Banco objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Conceptobanco is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Banco[] List of Banco objects
     * @throws PropelException
     */
    public function getBancos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collBancosPartial && !$this->isNew();
        if (null === $this->collBancos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collBancos) {
                // return empty collection
                $this->initBancos();
            } else {
                $collBancos = BancoQuery::create(null, $criteria)
                    ->filterByConceptobanco($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collBancosPartial && count($collBancos)) {
                      $this->initBancos(false);

                      foreach ($collBancos as $obj) {
                        if (false == $this->collBancos->contains($obj)) {
                          $this->collBancos->append($obj);
                        }
                      }

                      $this->collBancosPartial = true;
                    }

                    $collBancos->getInternalIterator()->rewind();

                    return $collBancos;
                }

                if ($partial && $this->collBancos) {
                    foreach ($this->collBancos as $obj) {
                        if ($obj->isNew()) {
                            $collBancos[] = $obj;
                        }
                    }
                }

                $this->collBancos = $collBancos;
                $this->collBancosPartial = false;
            }
        }

        return $this->collBancos;
    }

    /**
     * Sets a collection of Banco objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $bancos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Conceptobanco The current object (for fluent API support)
     */
    public function setBancos(PropelCollection $bancos, PropelPDO $con = null)
    {
        $bancosToDelete = $this->getBancos(new Criteria(), $con)->diff($bancos);


        $this->bancosScheduledForDeletion = $bancosToDelete;

        foreach ($bancosToDelete as $bancoRemoved) {
            $bancoRemoved->setConceptobanco(null);
        }

        $this->collBancos = null;
        foreach ($bancos as $banco) {
            $this->addBanco($banco);
        }

        $this->collBancos = $bancos;
        $this->collBancosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Banco objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Banco objects.
     * @throws PropelException
     */
    public function countBancos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collBancosPartial && !$this->isNew();
        if (null === $this->collBancos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collBancos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getBancos());
            }
            $query = BancoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByConceptobanco($this)
                ->count($con);
        }

        return count($this->collBancos);
    }

    /**
     * Method called to associate a Banco object to this object
     * through the Banco foreign key attribute.
     *
     * @param    Banco $l Banco
     * @return Conceptobanco The current object (for fluent API support)
     */
    public function addBanco(Banco $l)
    {
        if ($this->collBancos === null) {
            $this->initBancos();
            $this->collBancosPartial = true;
        }

        if (!in_array($l, $this->collBancos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddBanco($l);

            if ($this->bancosScheduledForDeletion and $this->bancosScheduledForDeletion->contains($l)) {
                $this->bancosScheduledForDeletion->remove($this->bancosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Banco $banco The banco object to add.
     */
    protected function doAddBanco($banco)
    {
        $this->collBancos[]= $banco;
        $banco->setConceptobanco($this);
    }

    /**
     * @param	Banco $banco The banco object to remove.
     * @return Conceptobanco The current object (for fluent API support)
     */
    public function removeBanco($banco)
    {
        if ($this->getBancos()->contains($banco)) {
            $this->collBancos->remove($this->collBancos->search($banco));
            if (null === $this->bancosScheduledForDeletion) {
                $this->bancosScheduledForDeletion = clone $this->collBancos;
                $this->bancosScheduledForDeletion->clear();
            }
            $this->bancosScheduledForDeletion[]= clone $banco;
            $banco->setConceptobanco(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idbancotransaccion = null;
        $this->bancotransaccion_nombre = null;
        $this->bancotransaccion_descripcion = null;
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
            if ($this->collBancos) {
                foreach ($this->collBancos as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collBancos instanceof PropelCollection) {
            $this->collBancos->clearIterator();
        }
        $this->collBancos = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ConceptobancoPeer::DEFAULT_STRING_FORMAT);
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
