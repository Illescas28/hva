<?php


/**
 * Base class that represents a row from the 'medicoespecialidad' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseMedicoespecialidad extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MedicoespecialidadPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MedicoespecialidadPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idmedicoespecialidad field.
     * @var        int
     */
    protected $idmedicoespecialidad;

    /**
     * The value for the idmedico field.
     * @var        int
     */
    protected $idmedico;

    /**
     * The value for the idespecialidad field.
     * @var        int
     */
    protected $idespecialidad;

    /**
     * @var        Especialidad
     */
    protected $aEspecialidad;

    /**
     * @var        Medico
     */
    protected $aMedico;

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
     * Get the [idmedicoespecialidad] column value.
     *
     * @return int
     */
    public function getIdmedicoespecialidad()
    {

        return $this->idmedicoespecialidad;
    }

    /**
     * Get the [idmedico] column value.
     *
     * @return int
     */
    public function getIdmedico()
    {

        return $this->idmedico;
    }

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
     * Set the value of [idmedicoespecialidad] column.
     *
     * @param  int $v new value
     * @return Medicoespecialidad The current object (for fluent API support)
     */
    public function setIdmedicoespecialidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idmedicoespecialidad !== $v) {
            $this->idmedicoespecialidad = $v;
            $this->modifiedColumns[] = MedicoespecialidadPeer::IDMEDICOESPECIALIDAD;
        }


        return $this;
    } // setIdmedicoespecialidad()

    /**
     * Set the value of [idmedico] column.
     *
     * @param  int $v new value
     * @return Medicoespecialidad The current object (for fluent API support)
     */
    public function setIdmedico($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idmedico !== $v) {
            $this->idmedico = $v;
            $this->modifiedColumns[] = MedicoespecialidadPeer::IDMEDICO;
        }

        if ($this->aMedico !== null && $this->aMedico->getIdmedico() !== $v) {
            $this->aMedico = null;
        }


        return $this;
    } // setIdmedico()

    /**
     * Set the value of [idespecialidad] column.
     *
     * @param  int $v new value
     * @return Medicoespecialidad The current object (for fluent API support)
     */
    public function setIdespecialidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idespecialidad !== $v) {
            $this->idespecialidad = $v;
            $this->modifiedColumns[] = MedicoespecialidadPeer::IDESPECIALIDAD;
        }

        if ($this->aEspecialidad !== null && $this->aEspecialidad->getIdespecialidad() !== $v) {
            $this->aEspecialidad = null;
        }


        return $this;
    } // setIdespecialidad()

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

            $this->idmedicoespecialidad = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idmedico = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idespecialidad = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = MedicoespecialidadPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Medicoespecialidad object", $e);
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

        if ($this->aMedico !== null && $this->idmedico !== $this->aMedico->getIdmedico()) {
            $this->aMedico = null;
        }
        if ($this->aEspecialidad !== null && $this->idespecialidad !== $this->aEspecialidad->getIdespecialidad()) {
            $this->aEspecialidad = null;
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
            $con = Propel::getConnection(MedicoespecialidadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MedicoespecialidadPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEspecialidad = null;
            $this->aMedico = null;
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
            $con = Propel::getConnection(MedicoespecialidadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MedicoespecialidadQuery::create()
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
            $con = Propel::getConnection(MedicoespecialidadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MedicoespecialidadPeer::addInstanceToPool($this);
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

            if ($this->aEspecialidad !== null) {
                if ($this->aEspecialidad->isModified() || $this->aEspecialidad->isNew()) {
                    $affectedRows += $this->aEspecialidad->save($con);
                }
                $this->setEspecialidad($this->aEspecialidad);
            }

            if ($this->aMedico !== null) {
                if ($this->aMedico->isModified() || $this->aMedico->isNew()) {
                    $affectedRows += $this->aMedico->save($con);
                }
                $this->setMedico($this->aMedico);
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

        $this->modifiedColumns[] = MedicoespecialidadPeer::IDMEDICOESPECIALIDAD;
        if (null !== $this->idmedicoespecialidad) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . MedicoespecialidadPeer::IDMEDICOESPECIALIDAD . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(MedicoespecialidadPeer::IDMEDICOESPECIALIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`idmedicoespecialidad`';
        }
        if ($this->isColumnModified(MedicoespecialidadPeer::IDMEDICO)) {
            $modifiedColumns[':p' . $index++]  = '`idmedico`';
        }
        if ($this->isColumnModified(MedicoespecialidadPeer::IDESPECIALIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`idespecialidad`';
        }

        $sql = sprintf(
            'INSERT INTO `medicoespecialidad` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idmedicoespecialidad`':
                        $stmt->bindValue($identifier, $this->idmedicoespecialidad, PDO::PARAM_INT);
                        break;
                    case '`idmedico`':
                        $stmt->bindValue($identifier, $this->idmedico, PDO::PARAM_INT);
                        break;
                    case '`idespecialidad`':
                        $stmt->bindValue($identifier, $this->idespecialidad, PDO::PARAM_INT);
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
        $this->setIdmedicoespecialidad($pk);

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

            if ($this->aEspecialidad !== null) {
                if (!$this->aEspecialidad->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEspecialidad->getValidationFailures());
                }
            }

            if ($this->aMedico !== null) {
                if (!$this->aMedico->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aMedico->getValidationFailures());
                }
            }


            if (($retval = MedicoespecialidadPeer::doValidate($this, $columns)) !== true) {
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
        $pos = MedicoespecialidadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdmedicoespecialidad();
                break;
            case 1:
                return $this->getIdmedico();
                break;
            case 2:
                return $this->getIdespecialidad();
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
        if (isset($alreadyDumpedObjects['Medicoespecialidad'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Medicoespecialidad'][$this->getPrimaryKey()] = true;
        $keys = MedicoespecialidadPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdmedicoespecialidad(),
            $keys[1] => $this->getIdmedico(),
            $keys[2] => $this->getIdespecialidad(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEspecialidad) {
                $result['Especialidad'] = $this->aEspecialidad->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aMedico) {
                $result['Medico'] = $this->aMedico->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = MedicoespecialidadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdmedicoespecialidad($value);
                break;
            case 1:
                $this->setIdmedico($value);
                break;
            case 2:
                $this->setIdespecialidad($value);
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
        $keys = MedicoespecialidadPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdmedicoespecialidad($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdmedico($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdespecialidad($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MedicoespecialidadPeer::DATABASE_NAME);

        if ($this->isColumnModified(MedicoespecialidadPeer::IDMEDICOESPECIALIDAD)) $criteria->add(MedicoespecialidadPeer::IDMEDICOESPECIALIDAD, $this->idmedicoespecialidad);
        if ($this->isColumnModified(MedicoespecialidadPeer::IDMEDICO)) $criteria->add(MedicoespecialidadPeer::IDMEDICO, $this->idmedico);
        if ($this->isColumnModified(MedicoespecialidadPeer::IDESPECIALIDAD)) $criteria->add(MedicoespecialidadPeer::IDESPECIALIDAD, $this->idespecialidad);

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
        $criteria = new Criteria(MedicoespecialidadPeer::DATABASE_NAME);
        $criteria->add(MedicoespecialidadPeer::IDMEDICOESPECIALIDAD, $this->idmedicoespecialidad);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdmedicoespecialidad();
    }

    /**
     * Generic method to set the primary key (idmedicoespecialidad column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdmedicoespecialidad($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdmedicoespecialidad();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Medicoespecialidad (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdmedico($this->getIdmedico());
        $copyObj->setIdespecialidad($this->getIdespecialidad());

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
            $copyObj->setIdmedicoespecialidad(NULL); // this is a auto-increment column, so set to default value
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
     * @return Medicoespecialidad Clone of current object.
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
     * @return MedicoespecialidadPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MedicoespecialidadPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Especialidad object.
     *
     * @param                  Especialidad $v
     * @return Medicoespecialidad The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEspecialidad(Especialidad $v = null)
    {
        if ($v === null) {
            $this->setIdespecialidad(NULL);
        } else {
            $this->setIdespecialidad($v->getIdespecialidad());
        }

        $this->aEspecialidad = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Especialidad object, it will not be re-added.
        if ($v !== null) {
            $v->addMedicoespecialidad($this);
        }


        return $this;
    }


    /**
     * Get the associated Especialidad object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Especialidad The associated Especialidad object.
     * @throws PropelException
     */
    public function getEspecialidad(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEspecialidad === null && ($this->idespecialidad !== null) && $doQuery) {
            $this->aEspecialidad = EspecialidadQuery::create()->findPk($this->idespecialidad, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEspecialidad->addMedicoespecialidads($this);
             */
        }

        return $this->aEspecialidad;
    }

    /**
     * Declares an association between this object and a Medico object.
     *
     * @param                  Medico $v
     * @return Medicoespecialidad The current object (for fluent API support)
     * @throws PropelException
     */
    public function setMedico(Medico $v = null)
    {
        if ($v === null) {
            $this->setIdmedico(NULL);
        } else {
            $this->setIdmedico($v->getIdmedico());
        }

        $this->aMedico = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Medico object, it will not be re-added.
        if ($v !== null) {
            $v->addMedicoespecialidad($this);
        }


        return $this;
    }


    /**
     * Get the associated Medico object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Medico The associated Medico object.
     * @throws PropelException
     */
    public function getMedico(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aMedico === null && ($this->idmedico !== null) && $doQuery) {
            $this->aMedico = MedicoQuery::create()->findPk($this->idmedico, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aMedico->addMedicoespecialidads($this);
             */
        }

        return $this->aMedico;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idmedicoespecialidad = null;
        $this->idmedico = null;
        $this->idespecialidad = null;
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
            if ($this->aEspecialidad instanceof Persistent) {
              $this->aEspecialidad->clearAllReferences($deep);
            }
            if ($this->aMedico instanceof Persistent) {
              $this->aMedico->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aEspecialidad = null;
        $this->aMedico = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(MedicoespecialidadPeer::DEFAULT_STRING_FORMAT);
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
