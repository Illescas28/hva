<?php


/**
 * Base class that represents a row from the 'cajachicadetalle' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseCajachicadetalle extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CajachicadetallePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CajachicadetallePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idcajachicadetalle field.
     * @var        int
     */
    protected $idcajachicadetalle;

    /**
     * The value for the idcajachica field.
     * @var        int
     */
    protected $idcajachica;

    /**
     * The value for the idgasto field.
     * @var        int
     */
    protected $idgasto;

    /**
     * The value for the cajachicadetalle_cantidad field.
     * @var        string
     */
    protected $cajachicadetalle_cantidad;

    /**
     * The value for the cajachicadetalle_monto field.
     * @var        string
     */
    protected $cajachicadetalle_monto;

    /**
     * @var        Cajachica
     */
    protected $aCajachica;

    /**
     * @var        Gasto
     */
    protected $aGasto;

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
     * Get the [idcajachicadetalle] column value.
     *
     * @return int
     */
    public function getIdcajachicadetalle()
    {

        return $this->idcajachicadetalle;
    }

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
     * Get the [idgasto] column value.
     *
     * @return int
     */
    public function getIdgasto()
    {

        return $this->idgasto;
    }

    /**
     * Get the [cajachicadetalle_cantidad] column value.
     *
     * @return string
     */
    public function getCajachicadetalleCantidad()
    {

        return $this->cajachicadetalle_cantidad;
    }

    /**
     * Get the [cajachicadetalle_monto] column value.
     *
     * @return string
     */
    public function getCajachicadetalleMonto()
    {

        return $this->cajachicadetalle_monto;
    }

    /**
     * Set the value of [idcajachicadetalle] column.
     *
     * @param  int $v new value
     * @return Cajachicadetalle The current object (for fluent API support)
     */
    public function setIdcajachicadetalle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcajachicadetalle !== $v) {
            $this->idcajachicadetalle = $v;
            $this->modifiedColumns[] = CajachicadetallePeer::IDCAJACHICADETALLE;
        }


        return $this;
    } // setIdcajachicadetalle()

    /**
     * Set the value of [idcajachica] column.
     *
     * @param  int $v new value
     * @return Cajachicadetalle The current object (for fluent API support)
     */
    public function setIdcajachica($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcajachica !== $v) {
            $this->idcajachica = $v;
            $this->modifiedColumns[] = CajachicadetallePeer::IDCAJACHICA;
        }

        if ($this->aCajachica !== null && $this->aCajachica->getIdcajachica() !== $v) {
            $this->aCajachica = null;
        }


        return $this;
    } // setIdcajachica()

    /**
     * Set the value of [idgasto] column.
     *
     * @param  int $v new value
     * @return Cajachicadetalle The current object (for fluent API support)
     */
    public function setIdgasto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idgasto !== $v) {
            $this->idgasto = $v;
            $this->modifiedColumns[] = CajachicadetallePeer::IDGASTO;
        }

        if ($this->aGasto !== null && $this->aGasto->getIdgasto() !== $v) {
            $this->aGasto = null;
        }


        return $this;
    } // setIdgasto()

    /**
     * Set the value of [cajachicadetalle_cantidad] column.
     *
     * @param  string $v new value
     * @return Cajachicadetalle The current object (for fluent API support)
     */
    public function setCajachicadetalleCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cajachicadetalle_cantidad !== $v) {
            $this->cajachicadetalle_cantidad = $v;
            $this->modifiedColumns[] = CajachicadetallePeer::CAJACHICADETALLE_CANTIDAD;
        }


        return $this;
    } // setCajachicadetalleCantidad()

    /**
     * Set the value of [cajachicadetalle_monto] column.
     *
     * @param  string $v new value
     * @return Cajachicadetalle The current object (for fluent API support)
     */
    public function setCajachicadetalleMonto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cajachicadetalle_monto !== $v) {
            $this->cajachicadetalle_monto = $v;
            $this->modifiedColumns[] = CajachicadetallePeer::CAJACHICADETALLE_MONTO;
        }


        return $this;
    } // setCajachicadetalleMonto()

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

            $this->idcajachicadetalle = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idcajachica = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idgasto = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->cajachicadetalle_cantidad = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->cajachicadetalle_monto = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = CajachicadetallePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Cajachicadetalle object", $e);
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

        if ($this->aCajachica !== null && $this->idcajachica !== $this->aCajachica->getIdcajachica()) {
            $this->aCajachica = null;
        }
        if ($this->aGasto !== null && $this->idgasto !== $this->aGasto->getIdgasto()) {
            $this->aGasto = null;
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
            $con = Propel::getConnection(CajachicadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CajachicadetallePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCajachica = null;
            $this->aGasto = null;
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
            $con = Propel::getConnection(CajachicadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CajachicadetalleQuery::create()
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
            $con = Propel::getConnection(CajachicadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CajachicadetallePeer::addInstanceToPool($this);
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

            if ($this->aCajachica !== null) {
                if ($this->aCajachica->isModified() || $this->aCajachica->isNew()) {
                    $affectedRows += $this->aCajachica->save($con);
                }
                $this->setCajachica($this->aCajachica);
            }

            if ($this->aGasto !== null) {
                if ($this->aGasto->isModified() || $this->aGasto->isNew()) {
                    $affectedRows += $this->aGasto->save($con);
                }
                $this->setGasto($this->aGasto);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CajachicadetallePeer::IDCAJACHICADETALLE)) {
            $modifiedColumns[':p' . $index++]  = '`idcajachicadetalle`';
        }
        if ($this->isColumnModified(CajachicadetallePeer::IDCAJACHICA)) {
            $modifiedColumns[':p' . $index++]  = '`idcajachica`';
        }
        if ($this->isColumnModified(CajachicadetallePeer::IDGASTO)) {
            $modifiedColumns[':p' . $index++]  = '`idgasto`';
        }
        if ($this->isColumnModified(CajachicadetallePeer::CAJACHICADETALLE_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`cajachicadetalle_cantidad`';
        }
        if ($this->isColumnModified(CajachicadetallePeer::CAJACHICADETALLE_MONTO)) {
            $modifiedColumns[':p' . $index++]  = '`cajachicadetalle_monto`';
        }

        $sql = sprintf(
            'INSERT INTO `cajachicadetalle` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idcajachicadetalle`':
                        $stmt->bindValue($identifier, $this->idcajachicadetalle, PDO::PARAM_INT);
                        break;
                    case '`idcajachica`':
                        $stmt->bindValue($identifier, $this->idcajachica, PDO::PARAM_INT);
                        break;
                    case '`idgasto`':
                        $stmt->bindValue($identifier, $this->idgasto, PDO::PARAM_INT);
                        break;
                    case '`cajachicadetalle_cantidad`':
                        $stmt->bindValue($identifier, $this->cajachicadetalle_cantidad, PDO::PARAM_STR);
                        break;
                    case '`cajachicadetalle_monto`':
                        $stmt->bindValue($identifier, $this->cajachicadetalle_monto, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

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

            if ($this->aCajachica !== null) {
                if (!$this->aCajachica->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCajachica->getValidationFailures());
                }
            }

            if ($this->aGasto !== null) {
                if (!$this->aGasto->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGasto->getValidationFailures());
                }
            }


            if (($retval = CajachicadetallePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CajachicadetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdcajachicadetalle();
                break;
            case 1:
                return $this->getIdcajachica();
                break;
            case 2:
                return $this->getIdgasto();
                break;
            case 3:
                return $this->getCajachicadetalleCantidad();
                break;
            case 4:
                return $this->getCajachicadetalleMonto();
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
        if (isset($alreadyDumpedObjects['Cajachicadetalle'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Cajachicadetalle'][$this->getPrimaryKey()] = true;
        $keys = CajachicadetallePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdcajachicadetalle(),
            $keys[1] => $this->getIdcajachica(),
            $keys[2] => $this->getIdgasto(),
            $keys[3] => $this->getCajachicadetalleCantidad(),
            $keys[4] => $this->getCajachicadetalleMonto(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCajachica) {
                $result['Cajachica'] = $this->aCajachica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aGasto) {
                $result['Gasto'] = $this->aGasto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CajachicadetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdcajachicadetalle($value);
                break;
            case 1:
                $this->setIdcajachica($value);
                break;
            case 2:
                $this->setIdgasto($value);
                break;
            case 3:
                $this->setCajachicadetalleCantidad($value);
                break;
            case 4:
                $this->setCajachicadetalleMonto($value);
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
        $keys = CajachicadetallePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdcajachicadetalle($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdcajachica($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdgasto($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCajachicadetalleCantidad($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCajachicadetalleMonto($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CajachicadetallePeer::DATABASE_NAME);

        if ($this->isColumnModified(CajachicadetallePeer::IDCAJACHICADETALLE)) $criteria->add(CajachicadetallePeer::IDCAJACHICADETALLE, $this->idcajachicadetalle);
        if ($this->isColumnModified(CajachicadetallePeer::IDCAJACHICA)) $criteria->add(CajachicadetallePeer::IDCAJACHICA, $this->idcajachica);
        if ($this->isColumnModified(CajachicadetallePeer::IDGASTO)) $criteria->add(CajachicadetallePeer::IDGASTO, $this->idgasto);
        if ($this->isColumnModified(CajachicadetallePeer::CAJACHICADETALLE_CANTIDAD)) $criteria->add(CajachicadetallePeer::CAJACHICADETALLE_CANTIDAD, $this->cajachicadetalle_cantidad);
        if ($this->isColumnModified(CajachicadetallePeer::CAJACHICADETALLE_MONTO)) $criteria->add(CajachicadetallePeer::CAJACHICADETALLE_MONTO, $this->cajachicadetalle_monto);

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
        $criteria = new Criteria(CajachicadetallePeer::DATABASE_NAME);
        $criteria->add(CajachicadetallePeer::IDCAJACHICADETALLE, $this->idcajachicadetalle);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdcajachicadetalle();
    }

    /**
     * Generic method to set the primary key (idcajachicadetalle column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdcajachicadetalle($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdcajachicadetalle();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Cajachicadetalle (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdcajachica($this->getIdcajachica());
        $copyObj->setIdgasto($this->getIdgasto());
        $copyObj->setCajachicadetalleCantidad($this->getCajachicadetalleCantidad());
        $copyObj->setCajachicadetalleMonto($this->getCajachicadetalleMonto());

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
            $copyObj->setIdcajachicadetalle(NULL); // this is a auto-increment column, so set to default value
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
     * @return Cajachicadetalle Clone of current object.
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
     * @return CajachicadetallePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CajachicadetallePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Cajachica object.
     *
     * @param                  Cajachica $v
     * @return Cajachicadetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCajachica(Cajachica $v = null)
    {
        if ($v === null) {
            $this->setIdcajachica(NULL);
        } else {
            $this->setIdcajachica($v->getIdcajachica());
        }

        $this->aCajachica = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Cajachica object, it will not be re-added.
        if ($v !== null) {
            $v->addCajachicadetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Cajachica object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Cajachica The associated Cajachica object.
     * @throws PropelException
     */
    public function getCajachica(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCajachica === null && ($this->idcajachica !== null) && $doQuery) {
            $this->aCajachica = CajachicaQuery::create()->findPk($this->idcajachica, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCajachica->addCajachicadetalles($this);
             */
        }

        return $this->aCajachica;
    }

    /**
     * Declares an association between this object and a Gasto object.
     *
     * @param                  Gasto $v
     * @return Cajachicadetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGasto(Gasto $v = null)
    {
        if ($v === null) {
            $this->setIdgasto(NULL);
        } else {
            $this->setIdgasto($v->getIdgasto());
        }

        $this->aGasto = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Gasto object, it will not be re-added.
        if ($v !== null) {
            $v->addCajachicadetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Gasto object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Gasto The associated Gasto object.
     * @throws PropelException
     */
    public function getGasto(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGasto === null && ($this->idgasto !== null) && $doQuery) {
            $this->aGasto = GastoQuery::create()->findPk($this->idgasto, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGasto->addCajachicadetalles($this);
             */
        }

        return $this->aGasto;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idcajachicadetalle = null;
        $this->idcajachica = null;
        $this->idgasto = null;
        $this->cajachicadetalle_cantidad = null;
        $this->cajachicadetalle_monto = null;
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
            if ($this->aCajachica instanceof Persistent) {
              $this->aCajachica->clearAllReferences($deep);
            }
            if ($this->aGasto instanceof Persistent) {
              $this->aGasto->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCajachica = null;
        $this->aGasto = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CajachicadetallePeer::DEFAULT_STRING_FORMAT);
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
