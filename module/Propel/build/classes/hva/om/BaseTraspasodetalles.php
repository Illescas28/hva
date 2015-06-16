<?php


/**
 * Base class that represents a row from the 'traspasodetalles' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseTraspasodetalles extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TraspasodetallesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TraspasodetallesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idtraspasodetalles field.
     * @var        int
     */
    protected $idtraspasodetalles;

    /**
     * The value for the idtraspaso field.
     * @var        int
     */
    protected $idtraspaso;

    /**
     * The value for the idlugarinventario field.
     * @var        int
     */
    protected $idlugarinventario;

    /**
     * The value for the traspaso_cantidad field.
     * @var        string
     */
    protected $traspaso_cantidad;

    /**
     * @var        Lugarinventario
     */
    protected $aLugarinventario;

    /**
     * @var        Traspaso
     */
    protected $aTraspaso;

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
     * Get the [idtraspasodetalles] column value.
     *
     * @return int
     */
    public function getIdtraspasodetalles()
    {

        return $this->idtraspasodetalles;
    }

    /**
     * Get the [idtraspaso] column value.
     *
     * @return int
     */
    public function getIdtraspaso()
    {

        return $this->idtraspaso;
    }

    /**
     * Get the [idlugarinventario] column value.
     *
     * @return int
     */
    public function getIdlugarinventario()
    {

        return $this->idlugarinventario;
    }

    /**
     * Get the [traspaso_cantidad] column value.
     *
     * @return string
     */
    public function getTraspasoCantidad()
    {

        return $this->traspaso_cantidad;
    }

    /**
     * Set the value of [idtraspasodetalles] column.
     *
     * @param  int $v new value
     * @return Traspasodetalles The current object (for fluent API support)
     */
    public function setIdtraspasodetalles($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idtraspasodetalles !== $v) {
            $this->idtraspasodetalles = $v;
            $this->modifiedColumns[] = TraspasodetallesPeer::IDTRASPASODETALLES;
        }


        return $this;
    } // setIdtraspasodetalles()

    /**
     * Set the value of [idtraspaso] column.
     *
     * @param  int $v new value
     * @return Traspasodetalles The current object (for fluent API support)
     */
    public function setIdtraspaso($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idtraspaso !== $v) {
            $this->idtraspaso = $v;
            $this->modifiedColumns[] = TraspasodetallesPeer::IDTRASPASO;
        }

        if ($this->aTraspaso !== null && $this->aTraspaso->getIdinventariolugar() !== $v) {
            $this->aTraspaso = null;
        }


        return $this;
    } // setIdtraspaso()

    /**
     * Set the value of [idlugarinventario] column.
     *
     * @param  int $v new value
     * @return Traspasodetalles The current object (for fluent API support)
     */
    public function setIdlugarinventario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idlugarinventario !== $v) {
            $this->idlugarinventario = $v;
            $this->modifiedColumns[] = TraspasodetallesPeer::IDLUGARINVENTARIO;
        }

        if ($this->aLugarinventario !== null && $this->aLugarinventario->getIdlugarinventario() !== $v) {
            $this->aLugarinventario = null;
        }


        return $this;
    } // setIdlugarinventario()

    /**
     * Set the value of [traspaso_cantidad] column.
     *
     * @param  string $v new value
     * @return Traspasodetalles The current object (for fluent API support)
     */
    public function setTraspasoCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->traspaso_cantidad !== $v) {
            $this->traspaso_cantidad = $v;
            $this->modifiedColumns[] = TraspasodetallesPeer::TRASPASO_CANTIDAD;
        }


        return $this;
    } // setTraspasoCantidad()

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

            $this->idtraspasodetalles = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idtraspaso = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idlugarinventario = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->traspaso_cantidad = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 4; // 4 = TraspasodetallesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Traspasodetalles object", $e);
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

        if ($this->aTraspaso !== null && $this->idtraspaso !== $this->aTraspaso->getIdinventariolugar()) {
            $this->aTraspaso = null;
        }
        if ($this->aLugarinventario !== null && $this->idlugarinventario !== $this->aLugarinventario->getIdlugarinventario()) {
            $this->aLugarinventario = null;
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
            $con = Propel::getConnection(TraspasodetallesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TraspasodetallesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aLugarinventario = null;
            $this->aTraspaso = null;
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
            $con = Propel::getConnection(TraspasodetallesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TraspasodetallesQuery::create()
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
            $con = Propel::getConnection(TraspasodetallesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TraspasodetallesPeer::addInstanceToPool($this);
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

            if ($this->aLugarinventario !== null) {
                if ($this->aLugarinventario->isModified() || $this->aLugarinventario->isNew()) {
                    $affectedRows += $this->aLugarinventario->save($con);
                }
                $this->setLugarinventario($this->aLugarinventario);
            }

            if ($this->aTraspaso !== null) {
                if ($this->aTraspaso->isModified() || $this->aTraspaso->isNew()) {
                    $affectedRows += $this->aTraspaso->save($con);
                }
                $this->setTraspaso($this->aTraspaso);
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

        $this->modifiedColumns[] = TraspasodetallesPeer::IDTRASPASODETALLES;
        if (null !== $this->idtraspasodetalles) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TraspasodetallesPeer::IDTRASPASODETALLES . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TraspasodetallesPeer::IDTRASPASODETALLES)) {
            $modifiedColumns[':p' . $index++]  = '`idtraspasodetalles`';
        }
        if ($this->isColumnModified(TraspasodetallesPeer::IDTRASPASO)) {
            $modifiedColumns[':p' . $index++]  = '`idtraspaso`';
        }
        if ($this->isColumnModified(TraspasodetallesPeer::IDLUGARINVENTARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idlugarinventario`';
        }
        if ($this->isColumnModified(TraspasodetallesPeer::TRASPASO_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`traspaso_cantidad`';
        }

        $sql = sprintf(
            'INSERT INTO `traspasodetalles` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idtraspasodetalles`':
                        $stmt->bindValue($identifier, $this->idtraspasodetalles, PDO::PARAM_INT);
                        break;
                    case '`idtraspaso`':
                        $stmt->bindValue($identifier, $this->idtraspaso, PDO::PARAM_INT);
                        break;
                    case '`idlugarinventario`':
                        $stmt->bindValue($identifier, $this->idlugarinventario, PDO::PARAM_INT);
                        break;
                    case '`traspaso_cantidad`':
                        $stmt->bindValue($identifier, $this->traspaso_cantidad, PDO::PARAM_STR);
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
        $this->setIdtraspasodetalles($pk);

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

            if ($this->aLugarinventario !== null) {
                if (!$this->aLugarinventario->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aLugarinventario->getValidationFailures());
                }
            }

            if ($this->aTraspaso !== null) {
                if (!$this->aTraspaso->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTraspaso->getValidationFailures());
                }
            }


            if (($retval = TraspasodetallesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = TraspasodetallesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdtraspasodetalles();
                break;
            case 1:
                return $this->getIdtraspaso();
                break;
            case 2:
                return $this->getIdlugarinventario();
                break;
            case 3:
                return $this->getTraspasoCantidad();
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
        if (isset($alreadyDumpedObjects['Traspasodetalles'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Traspasodetalles'][$this->getPrimaryKey()] = true;
        $keys = TraspasodetallesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdtraspasodetalles(),
            $keys[1] => $this->getIdtraspaso(),
            $keys[2] => $this->getIdlugarinventario(),
            $keys[3] => $this->getTraspasoCantidad(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aLugarinventario) {
                $result['Lugarinventario'] = $this->aLugarinventario->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTraspaso) {
                $result['Traspaso'] = $this->aTraspaso->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = TraspasodetallesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdtraspasodetalles($value);
                break;
            case 1:
                $this->setIdtraspaso($value);
                break;
            case 2:
                $this->setIdlugarinventario($value);
                break;
            case 3:
                $this->setTraspasoCantidad($value);
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
        $keys = TraspasodetallesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdtraspasodetalles($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdtraspaso($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdlugarinventario($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTraspasoCantidad($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TraspasodetallesPeer::DATABASE_NAME);

        if ($this->isColumnModified(TraspasodetallesPeer::IDTRASPASODETALLES)) $criteria->add(TraspasodetallesPeer::IDTRASPASODETALLES, $this->idtraspasodetalles);
        if ($this->isColumnModified(TraspasodetallesPeer::IDTRASPASO)) $criteria->add(TraspasodetallesPeer::IDTRASPASO, $this->idtraspaso);
        if ($this->isColumnModified(TraspasodetallesPeer::IDLUGARINVENTARIO)) $criteria->add(TraspasodetallesPeer::IDLUGARINVENTARIO, $this->idlugarinventario);
        if ($this->isColumnModified(TraspasodetallesPeer::TRASPASO_CANTIDAD)) $criteria->add(TraspasodetallesPeer::TRASPASO_CANTIDAD, $this->traspaso_cantidad);

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
        $criteria = new Criteria(TraspasodetallesPeer::DATABASE_NAME);
        $criteria->add(TraspasodetallesPeer::IDTRASPASODETALLES, $this->idtraspasodetalles);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdtraspasodetalles();
    }

    /**
     * Generic method to set the primary key (idtraspasodetalles column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdtraspasodetalles($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdtraspasodetalles();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Traspasodetalles (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdtraspaso($this->getIdtraspaso());
        $copyObj->setIdlugarinventario($this->getIdlugarinventario());
        $copyObj->setTraspasoCantidad($this->getTraspasoCantidad());

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
            $copyObj->setIdtraspasodetalles(NULL); // this is a auto-increment column, so set to default value
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
     * @return Traspasodetalles Clone of current object.
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
     * @return TraspasodetallesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TraspasodetallesPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Lugarinventario object.
     *
     * @param                  Lugarinventario $v
     * @return Traspasodetalles The current object (for fluent API support)
     * @throws PropelException
     */
    public function setLugarinventario(Lugarinventario $v = null)
    {
        if ($v === null) {
            $this->setIdlugarinventario(NULL);
        } else {
            $this->setIdlugarinventario($v->getIdlugarinventario());
        }

        $this->aLugarinventario = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Lugarinventario object, it will not be re-added.
        if ($v !== null) {
            $v->addTraspasodetalles($this);
        }


        return $this;
    }


    /**
     * Get the associated Lugarinventario object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Lugarinventario The associated Lugarinventario object.
     * @throws PropelException
     */
    public function getLugarinventario(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aLugarinventario === null && ($this->idlugarinventario !== null) && $doQuery) {
            $this->aLugarinventario = LugarinventarioQuery::create()->findPk($this->idlugarinventario, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aLugarinventario->addTraspasodetalless($this);
             */
        }

        return $this->aLugarinventario;
    }

    /**
     * Declares an association between this object and a Traspaso object.
     *
     * @param                  Traspaso $v
     * @return Traspasodetalles The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTraspaso(Traspaso $v = null)
    {
        if ($v === null) {
            $this->setIdtraspaso(NULL);
        } else {
            $this->setIdtraspaso($v->getIdinventariolugar());
        }

        $this->aTraspaso = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Traspaso object, it will not be re-added.
        if ($v !== null) {
            $v->addTraspasodetalles($this);
        }


        return $this;
    }


    /**
     * Get the associated Traspaso object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Traspaso The associated Traspaso object.
     * @throws PropelException
     */
    public function getTraspaso(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTraspaso === null && ($this->idtraspaso !== null) && $doQuery) {
            $this->aTraspaso = TraspasoQuery::create()
                ->filterByTraspasodetalles($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTraspaso->addTraspasodetalless($this);
             */
        }

        return $this->aTraspaso;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idtraspasodetalles = null;
        $this->idtraspaso = null;
        $this->idlugarinventario = null;
        $this->traspaso_cantidad = null;
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
            if ($this->aLugarinventario instanceof Persistent) {
              $this->aLugarinventario->clearAllReferences($deep);
            }
            if ($this->aTraspaso instanceof Persistent) {
              $this->aTraspaso->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aLugarinventario = null;
        $this->aTraspaso = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TraspasodetallesPeer::DEFAULT_STRING_FORMAT);
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
