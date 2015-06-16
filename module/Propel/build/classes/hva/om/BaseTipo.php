<?php


/**
 * Base class that represents a row from the 'tipo' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseTipo extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TipoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TipoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idtipo field.
     * @var        int
     */
    protected $idtipo;

    /**
     * The value for the tipo_nombre field.
     * @var        string
     */
    protected $tipo_nombre;

    /**
     * The value for the tipo_descripcion field.
     * @var        string
     */
    protected $tipo_descripcion;

    /**
     * @var        PropelObjectCollection|Articulo[] Collection to store aggregation of Articulo objects.
     */
    protected $collArticulos;
    protected $collArticulosPartial;

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
    protected $articulosScheduledForDeletion = null;

    /**
     * Get the [idtipo] column value.
     *
     * @return int
     */
    public function getIdtipo()
    {

        return $this->idtipo;
    }

    /**
     * Get the [tipo_nombre] column value.
     *
     * @return string
     */
    public function getTipoNombre()
    {

        return $this->tipo_nombre;
    }

    /**
     * Get the [tipo_descripcion] column value.
     *
     * @return string
     */
    public function getTipoDescripcion()
    {

        return $this->tipo_descripcion;
    }

    /**
     * Set the value of [idtipo] column.
     *
     * @param  int $v new value
     * @return Tipo The current object (for fluent API support)
     */
    public function setIdtipo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idtipo !== $v) {
            $this->idtipo = $v;
            $this->modifiedColumns[] = TipoPeer::IDTIPO;
        }


        return $this;
    } // setIdtipo()

    /**
     * Set the value of [tipo_nombre] column.
     *
     * @param  string $v new value
     * @return Tipo The current object (for fluent API support)
     */
    public function setTipoNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tipo_nombre !== $v) {
            $this->tipo_nombre = $v;
            $this->modifiedColumns[] = TipoPeer::TIPO_NOMBRE;
        }


        return $this;
    } // setTipoNombre()

    /**
     * Set the value of [tipo_descripcion] column.
     *
     * @param  string $v new value
     * @return Tipo The current object (for fluent API support)
     */
    public function setTipoDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tipo_descripcion !== $v) {
            $this->tipo_descripcion = $v;
            $this->modifiedColumns[] = TipoPeer::TIPO_DESCRIPCION;
        }


        return $this;
    } // setTipoDescripcion()

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

            $this->idtipo = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->tipo_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->tipo_descripcion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = TipoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Tipo object", $e);
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
            $con = Propel::getConnection(TipoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TipoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collArticulos = null;

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
            $con = Propel::getConnection(TipoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TipoQuery::create()
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
            $con = Propel::getConnection(TipoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TipoPeer::addInstanceToPool($this);
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

            if ($this->articulosScheduledForDeletion !== null) {
                if (!$this->articulosScheduledForDeletion->isEmpty()) {
                    ArticuloQuery::create()
                        ->filterByPrimaryKeys($this->articulosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->articulosScheduledForDeletion = null;
                }
            }

            if ($this->collArticulos !== null) {
                foreach ($this->collArticulos as $referrerFK) {
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

        $this->modifiedColumns[] = TipoPeer::IDTIPO;
        if (null !== $this->idtipo) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TipoPeer::IDTIPO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TipoPeer::IDTIPO)) {
            $modifiedColumns[':p' . $index++]  = '`idtipo`';
        }
        if ($this->isColumnModified(TipoPeer::TIPO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`tipo_nombre`';
        }
        if ($this->isColumnModified(TipoPeer::TIPO_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`tipo_descripcion`';
        }

        $sql = sprintf(
            'INSERT INTO `tipo` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idtipo`':
                        $stmt->bindValue($identifier, $this->idtipo, PDO::PARAM_INT);
                        break;
                    case '`tipo_nombre`':
                        $stmt->bindValue($identifier, $this->tipo_nombre, PDO::PARAM_STR);
                        break;
                    case '`tipo_descripcion`':
                        $stmt->bindValue($identifier, $this->tipo_descripcion, PDO::PARAM_STR);
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
        $this->setIdtipo($pk);

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


            if (($retval = TipoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collArticulos !== null) {
                    foreach ($this->collArticulos as $referrerFK) {
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
        $pos = TipoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdtipo();
                break;
            case 1:
                return $this->getTipoNombre();
                break;
            case 2:
                return $this->getTipoDescripcion();
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
        if (isset($alreadyDumpedObjects['Tipo'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Tipo'][$this->getPrimaryKey()] = true;
        $keys = TipoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdtipo(),
            $keys[1] => $this->getTipoNombre(),
            $keys[2] => $this->getTipoDescripcion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collArticulos) {
                $result['Articulos'] = $this->collArticulos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = TipoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdtipo($value);
                break;
            case 1:
                $this->setTipoNombre($value);
                break;
            case 2:
                $this->setTipoDescripcion($value);
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
        $keys = TipoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdtipo($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setTipoNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTipoDescripcion($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TipoPeer::DATABASE_NAME);

        if ($this->isColumnModified(TipoPeer::IDTIPO)) $criteria->add(TipoPeer::IDTIPO, $this->idtipo);
        if ($this->isColumnModified(TipoPeer::TIPO_NOMBRE)) $criteria->add(TipoPeer::TIPO_NOMBRE, $this->tipo_nombre);
        if ($this->isColumnModified(TipoPeer::TIPO_DESCRIPCION)) $criteria->add(TipoPeer::TIPO_DESCRIPCION, $this->tipo_descripcion);

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
        $criteria = new Criteria(TipoPeer::DATABASE_NAME);
        $criteria->add(TipoPeer::IDTIPO, $this->idtipo);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdtipo();
    }

    /**
     * Generic method to set the primary key (idtipo column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdtipo($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdtipo();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Tipo (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTipoNombre($this->getTipoNombre());
        $copyObj->setTipoDescripcion($this->getTipoDescripcion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getArticulos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addArticulo($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdtipo(NULL); // this is a auto-increment column, so set to default value
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
     * @return Tipo Clone of current object.
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
     * @return TipoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TipoPeer();
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
        if ('Articulo' == $relationName) {
            $this->initArticulos();
        }
    }

    /**
     * Clears out the collArticulos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Tipo The current object (for fluent API support)
     * @see        addArticulos()
     */
    public function clearArticulos()
    {
        $this->collArticulos = null; // important to set this to null since that means it is uninitialized
        $this->collArticulosPartial = null;

        return $this;
    }

    /**
     * reset is the collArticulos collection loaded partially
     *
     * @return void
     */
    public function resetPartialArticulos($v = true)
    {
        $this->collArticulosPartial = $v;
    }

    /**
     * Initializes the collArticulos collection.
     *
     * By default this just sets the collArticulos collection to an empty array (like clearcollArticulos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initArticulos($overrideExisting = true)
    {
        if (null !== $this->collArticulos && !$overrideExisting) {
            return;
        }
        $this->collArticulos = new PropelObjectCollection();
        $this->collArticulos->setModel('Articulo');
    }

    /**
     * Gets an array of Articulo objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Tipo is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Articulo[] List of Articulo objects
     * @throws PropelException
     */
    public function getArticulos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collArticulosPartial && !$this->isNew();
        if (null === $this->collArticulos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collArticulos) {
                // return empty collection
                $this->initArticulos();
            } else {
                $collArticulos = ArticuloQuery::create(null, $criteria)
                    ->filterByTipo($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collArticulosPartial && count($collArticulos)) {
                      $this->initArticulos(false);

                      foreach ($collArticulos as $obj) {
                        if (false == $this->collArticulos->contains($obj)) {
                          $this->collArticulos->append($obj);
                        }
                      }

                      $this->collArticulosPartial = true;
                    }

                    $collArticulos->getInternalIterator()->rewind();

                    return $collArticulos;
                }

                if ($partial && $this->collArticulos) {
                    foreach ($this->collArticulos as $obj) {
                        if ($obj->isNew()) {
                            $collArticulos[] = $obj;
                        }
                    }
                }

                $this->collArticulos = $collArticulos;
                $this->collArticulosPartial = false;
            }
        }

        return $this->collArticulos;
    }

    /**
     * Sets a collection of Articulo objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $articulos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Tipo The current object (for fluent API support)
     */
    public function setArticulos(PropelCollection $articulos, PropelPDO $con = null)
    {
        $articulosToDelete = $this->getArticulos(new Criteria(), $con)->diff($articulos);


        $this->articulosScheduledForDeletion = $articulosToDelete;

        foreach ($articulosToDelete as $articuloRemoved) {
            $articuloRemoved->setTipo(null);
        }

        $this->collArticulos = null;
        foreach ($articulos as $articulo) {
            $this->addArticulo($articulo);
        }

        $this->collArticulos = $articulos;
        $this->collArticulosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Articulo objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Articulo objects.
     * @throws PropelException
     */
    public function countArticulos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collArticulosPartial && !$this->isNew();
        if (null === $this->collArticulos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collArticulos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getArticulos());
            }
            $query = ArticuloQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByTipo($this)
                ->count($con);
        }

        return count($this->collArticulos);
    }

    /**
     * Method called to associate a Articulo object to this object
     * through the Articulo foreign key attribute.
     *
     * @param    Articulo $l Articulo
     * @return Tipo The current object (for fluent API support)
     */
    public function addArticulo(Articulo $l)
    {
        if ($this->collArticulos === null) {
            $this->initArticulos();
            $this->collArticulosPartial = true;
        }

        if (!in_array($l, $this->collArticulos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddArticulo($l);

            if ($this->articulosScheduledForDeletion and $this->articulosScheduledForDeletion->contains($l)) {
                $this->articulosScheduledForDeletion->remove($this->articulosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Articulo $articulo The articulo object to add.
     */
    protected function doAddArticulo($articulo)
    {
        $this->collArticulos[]= $articulo;
        $articulo->setTipo($this);
    }

    /**
     * @param	Articulo $articulo The articulo object to remove.
     * @return Tipo The current object (for fluent API support)
     */
    public function removeArticulo($articulo)
    {
        if ($this->getArticulos()->contains($articulo)) {
            $this->collArticulos->remove($this->collArticulos->search($articulo));
            if (null === $this->articulosScheduledForDeletion) {
                $this->articulosScheduledForDeletion = clone $this->collArticulos;
                $this->articulosScheduledForDeletion->clear();
            }
            $this->articulosScheduledForDeletion[]= clone $articulo;
            $articulo->setTipo(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idtipo = null;
        $this->tipo_nombre = null;
        $this->tipo_descripcion = null;
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
            if ($this->collArticulos) {
                foreach ($this->collArticulos as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collArticulos instanceof PropelCollection) {
            $this->collArticulos->clearIterator();
        }
        $this->collArticulos = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TipoPeer::DEFAULT_STRING_FORMAT);
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
