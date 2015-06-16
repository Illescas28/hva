<?php


/**
 * Base class that represents a row from the 'banco' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseBanco extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'BancoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        BancoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idbanco field.
     * @var        int
     */
    protected $idbanco;

    /**
     * The value for the banco_nombre field.
     * @var        string
     */
    protected $banco_nombre;

    /**
     * The value for the banco_cuenta field.
     * @var        string
     */
    protected $banco_cuenta;

    /**
     * The value for the banco_descripcion field.
     * @var        string
     */
    protected $banco_descripcion;

    /**
     * The value for the banco_balance field.
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $banco_balance;

    /**
     * @var        PropelObjectCollection|Bancotransaccion[] Collection to store aggregation of Bancotransaccion objects.
     */
    protected $collBancotransaccions;
    protected $collBancotransaccionsPartial;

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
    protected $bancotransaccionsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->banco_balance = '0.00';
    }

    /**
     * Initializes internal state of BaseBanco object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [idbanco] column value.
     *
     * @return int
     */
    public function getIdbanco()
    {

        return $this->idbanco;
    }

    /**
     * Get the [banco_nombre] column value.
     *
     * @return string
     */
    public function getBancoNombre()
    {

        return $this->banco_nombre;
    }

    /**
     * Get the [banco_cuenta] column value.
     *
     * @return string
     */
    public function getBancoCuenta()
    {

        return $this->banco_cuenta;
    }

    /**
     * Get the [banco_descripcion] column value.
     *
     * @return string
     */
    public function getBancoDescripcion()
    {

        return $this->banco_descripcion;
    }

    /**
     * Get the [banco_balance] column value.
     *
     * @return string
     */
    public function getBancoBalance()
    {

        return $this->banco_balance;
    }

    /**
     * Set the value of [idbanco] column.
     *
     * @param  int $v new value
     * @return Banco The current object (for fluent API support)
     */
    public function setIdbanco($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idbanco !== $v) {
            $this->idbanco = $v;
            $this->modifiedColumns[] = BancoPeer::IDBANCO;
        }


        return $this;
    } // setIdbanco()

    /**
     * Set the value of [banco_nombre] column.
     *
     * @param  string $v new value
     * @return Banco The current object (for fluent API support)
     */
    public function setBancoNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->banco_nombre !== $v) {
            $this->banco_nombre = $v;
            $this->modifiedColumns[] = BancoPeer::BANCO_NOMBRE;
        }


        return $this;
    } // setBancoNombre()

    /**
     * Set the value of [banco_cuenta] column.
     *
     * @param  string $v new value
     * @return Banco The current object (for fluent API support)
     */
    public function setBancoCuenta($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->banco_cuenta !== $v) {
            $this->banco_cuenta = $v;
            $this->modifiedColumns[] = BancoPeer::BANCO_CUENTA;
        }


        return $this;
    } // setBancoCuenta()

    /**
     * Set the value of [banco_descripcion] column.
     *
     * @param  string $v new value
     * @return Banco The current object (for fluent API support)
     */
    public function setBancoDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->banco_descripcion !== $v) {
            $this->banco_descripcion = $v;
            $this->modifiedColumns[] = BancoPeer::BANCO_DESCRIPCION;
        }


        return $this;
    } // setBancoDescripcion()

    /**
     * Set the value of [banco_balance] column.
     *
     * @param  string $v new value
     * @return Banco The current object (for fluent API support)
     */
    public function setBancoBalance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->banco_balance !== $v) {
            $this->banco_balance = $v;
            $this->modifiedColumns[] = BancoPeer::BANCO_BALANCE;
        }


        return $this;
    } // setBancoBalance()

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
            if ($this->banco_balance !== '0.00') {
                return false;
            }

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

            $this->idbanco = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->banco_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->banco_cuenta = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->banco_descripcion = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->banco_balance = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = BancoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Banco object", $e);
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
            $con = Propel::getConnection(BancoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = BancoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collBancotransaccions = null;

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
            $con = Propel::getConnection(BancoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = BancoQuery::create()
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
            $con = Propel::getConnection(BancoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                BancoPeer::addInstanceToPool($this);
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

            if ($this->bancotransaccionsScheduledForDeletion !== null) {
                if (!$this->bancotransaccionsScheduledForDeletion->isEmpty()) {
                    BancotransaccionQuery::create()
                        ->filterByPrimaryKeys($this->bancotransaccionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->bancotransaccionsScheduledForDeletion = null;
                }
            }

            if ($this->collBancotransaccions !== null) {
                foreach ($this->collBancotransaccions as $referrerFK) {
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

        $this->modifiedColumns[] = BancoPeer::IDBANCO;
        if (null !== $this->idbanco) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . BancoPeer::IDBANCO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(BancoPeer::IDBANCO)) {
            $modifiedColumns[':p' . $index++]  = '`idbanco`';
        }
        if ($this->isColumnModified(BancoPeer::BANCO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`banco_nombre`';
        }
        if ($this->isColumnModified(BancoPeer::BANCO_CUENTA)) {
            $modifiedColumns[':p' . $index++]  = '`banco_cuenta`';
        }
        if ($this->isColumnModified(BancoPeer::BANCO_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`banco_descripcion`';
        }
        if ($this->isColumnModified(BancoPeer::BANCO_BALANCE)) {
            $modifiedColumns[':p' . $index++]  = '`banco_balance`';
        }

        $sql = sprintf(
            'INSERT INTO `banco` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idbanco`':
                        $stmt->bindValue($identifier, $this->idbanco, PDO::PARAM_INT);
                        break;
                    case '`banco_nombre`':
                        $stmt->bindValue($identifier, $this->banco_nombre, PDO::PARAM_STR);
                        break;
                    case '`banco_cuenta`':
                        $stmt->bindValue($identifier, $this->banco_cuenta, PDO::PARAM_STR);
                        break;
                    case '`banco_descripcion`':
                        $stmt->bindValue($identifier, $this->banco_descripcion, PDO::PARAM_STR);
                        break;
                    case '`banco_balance`':
                        $stmt->bindValue($identifier, $this->banco_balance, PDO::PARAM_STR);
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
        $this->setIdbanco($pk);

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


            if (($retval = BancoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collBancotransaccions !== null) {
                    foreach ($this->collBancotransaccions as $referrerFK) {
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
        $pos = BancoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdbanco();
                break;
            case 1:
                return $this->getBancoNombre();
                break;
            case 2:
                return $this->getBancoCuenta();
                break;
            case 3:
                return $this->getBancoDescripcion();
                break;
            case 4:
                return $this->getBancoBalance();
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
        if (isset($alreadyDumpedObjects['Banco'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Banco'][$this->getPrimaryKey()] = true;
        $keys = BancoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdbanco(),
            $keys[1] => $this->getBancoNombre(),
            $keys[2] => $this->getBancoCuenta(),
            $keys[3] => $this->getBancoDescripcion(),
            $keys[4] => $this->getBancoBalance(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collBancotransaccions) {
                $result['Bancotransaccions'] = $this->collBancotransaccions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = BancoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdbanco($value);
                break;
            case 1:
                $this->setBancoNombre($value);
                break;
            case 2:
                $this->setBancoCuenta($value);
                break;
            case 3:
                $this->setBancoDescripcion($value);
                break;
            case 4:
                $this->setBancoBalance($value);
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
        $keys = BancoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdbanco($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setBancoNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setBancoCuenta($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setBancoDescripcion($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setBancoBalance($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(BancoPeer::DATABASE_NAME);

        if ($this->isColumnModified(BancoPeer::IDBANCO)) $criteria->add(BancoPeer::IDBANCO, $this->idbanco);
        if ($this->isColumnModified(BancoPeer::BANCO_NOMBRE)) $criteria->add(BancoPeer::BANCO_NOMBRE, $this->banco_nombre);
        if ($this->isColumnModified(BancoPeer::BANCO_CUENTA)) $criteria->add(BancoPeer::BANCO_CUENTA, $this->banco_cuenta);
        if ($this->isColumnModified(BancoPeer::BANCO_DESCRIPCION)) $criteria->add(BancoPeer::BANCO_DESCRIPCION, $this->banco_descripcion);
        if ($this->isColumnModified(BancoPeer::BANCO_BALANCE)) $criteria->add(BancoPeer::BANCO_BALANCE, $this->banco_balance);

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
        $criteria = new Criteria(BancoPeer::DATABASE_NAME);
        $criteria->add(BancoPeer::IDBANCO, $this->idbanco);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdbanco();
    }

    /**
     * Generic method to set the primary key (idbanco column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdbanco($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdbanco();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Banco (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBancoNombre($this->getBancoNombre());
        $copyObj->setBancoCuenta($this->getBancoCuenta());
        $copyObj->setBancoDescripcion($this->getBancoDescripcion());
        $copyObj->setBancoBalance($this->getBancoBalance());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getBancotransaccions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addBancotransaccion($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdbanco(NULL); // this is a auto-increment column, so set to default value
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
     * @return Banco Clone of current object.
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
     * @return BancoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new BancoPeer();
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
        if ('Bancotransaccion' == $relationName) {
            $this->initBancotransaccions();
        }
    }

    /**
     * Clears out the collBancotransaccions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Banco The current object (for fluent API support)
     * @see        addBancotransaccions()
     */
    public function clearBancotransaccions()
    {
        $this->collBancotransaccions = null; // important to set this to null since that means it is uninitialized
        $this->collBancotransaccionsPartial = null;

        return $this;
    }

    /**
     * reset is the collBancotransaccions collection loaded partially
     *
     * @return void
     */
    public function resetPartialBancotransaccions($v = true)
    {
        $this->collBancotransaccionsPartial = $v;
    }

    /**
     * Initializes the collBancotransaccions collection.
     *
     * By default this just sets the collBancotransaccions collection to an empty array (like clearcollBancotransaccions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initBancotransaccions($overrideExisting = true)
    {
        if (null !== $this->collBancotransaccions && !$overrideExisting) {
            return;
        }
        $this->collBancotransaccions = new PropelObjectCollection();
        $this->collBancotransaccions->setModel('Bancotransaccion');
    }

    /**
     * Gets an array of Bancotransaccion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Banco is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Bancotransaccion[] List of Bancotransaccion objects
     * @throws PropelException
     */
    public function getBancotransaccions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collBancotransaccionsPartial && !$this->isNew();
        if (null === $this->collBancotransaccions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collBancotransaccions) {
                // return empty collection
                $this->initBancotransaccions();
            } else {
                $collBancotransaccions = BancotransaccionQuery::create(null, $criteria)
                    ->filterByBanco($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collBancotransaccionsPartial && count($collBancotransaccions)) {
                      $this->initBancotransaccions(false);

                      foreach ($collBancotransaccions as $obj) {
                        if (false == $this->collBancotransaccions->contains($obj)) {
                          $this->collBancotransaccions->append($obj);
                        }
                      }

                      $this->collBancotransaccionsPartial = true;
                    }

                    $collBancotransaccions->getInternalIterator()->rewind();

                    return $collBancotransaccions;
                }

                if ($partial && $this->collBancotransaccions) {
                    foreach ($this->collBancotransaccions as $obj) {
                        if ($obj->isNew()) {
                            $collBancotransaccions[] = $obj;
                        }
                    }
                }

                $this->collBancotransaccions = $collBancotransaccions;
                $this->collBancotransaccionsPartial = false;
            }
        }

        return $this->collBancotransaccions;
    }

    /**
     * Sets a collection of Bancotransaccion objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $bancotransaccions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Banco The current object (for fluent API support)
     */
    public function setBancotransaccions(PropelCollection $bancotransaccions, PropelPDO $con = null)
    {
        $bancotransaccionsToDelete = $this->getBancotransaccions(new Criteria(), $con)->diff($bancotransaccions);


        $this->bancotransaccionsScheduledForDeletion = $bancotransaccionsToDelete;

        foreach ($bancotransaccionsToDelete as $bancotransaccionRemoved) {
            $bancotransaccionRemoved->setBanco(null);
        }

        $this->collBancotransaccions = null;
        foreach ($bancotransaccions as $bancotransaccion) {
            $this->addBancotransaccion($bancotransaccion);
        }

        $this->collBancotransaccions = $bancotransaccions;
        $this->collBancotransaccionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Bancotransaccion objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Bancotransaccion objects.
     * @throws PropelException
     */
    public function countBancotransaccions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collBancotransaccionsPartial && !$this->isNew();
        if (null === $this->collBancotransaccions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collBancotransaccions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getBancotransaccions());
            }
            $query = BancotransaccionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByBanco($this)
                ->count($con);
        }

        return count($this->collBancotransaccions);
    }

    /**
     * Method called to associate a Bancotransaccion object to this object
     * through the Bancotransaccion foreign key attribute.
     *
     * @param    Bancotransaccion $l Bancotransaccion
     * @return Banco The current object (for fluent API support)
     */
    public function addBancotransaccion(Bancotransaccion $l)
    {
        if ($this->collBancotransaccions === null) {
            $this->initBancotransaccions();
            $this->collBancotransaccionsPartial = true;
        }

        if (!in_array($l, $this->collBancotransaccions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddBancotransaccion($l);

            if ($this->bancotransaccionsScheduledForDeletion and $this->bancotransaccionsScheduledForDeletion->contains($l)) {
                $this->bancotransaccionsScheduledForDeletion->remove($this->bancotransaccionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Bancotransaccion $bancotransaccion The bancotransaccion object to add.
     */
    protected function doAddBancotransaccion($bancotransaccion)
    {
        $this->collBancotransaccions[]= $bancotransaccion;
        $bancotransaccion->setBanco($this);
    }

    /**
     * @param	Bancotransaccion $bancotransaccion The bancotransaccion object to remove.
     * @return Banco The current object (for fluent API support)
     */
    public function removeBancotransaccion($bancotransaccion)
    {
        if ($this->getBancotransaccions()->contains($bancotransaccion)) {
            $this->collBancotransaccions->remove($this->collBancotransaccions->search($bancotransaccion));
            if (null === $this->bancotransaccionsScheduledForDeletion) {
                $this->bancotransaccionsScheduledForDeletion = clone $this->collBancotransaccions;
                $this->bancotransaccionsScheduledForDeletion->clear();
            }
            $this->bancotransaccionsScheduledForDeletion[]= clone $bancotransaccion;
            $bancotransaccion->setBanco(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idbanco = null;
        $this->banco_nombre = null;
        $this->banco_cuenta = null;
        $this->banco_descripcion = null;
        $this->banco_balance = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
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
            if ($this->collBancotransaccions) {
                foreach ($this->collBancotransaccions as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collBancotransaccions instanceof PropelCollection) {
            $this->collBancotransaccions->clearIterator();
        }
        $this->collBancotransaccions = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(BancoPeer::DEFAULT_STRING_FORMAT);
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
