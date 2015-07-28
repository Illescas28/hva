<?php


/**
 * Base class that represents a row from the 'lugar' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseLugar extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'LugarPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        LugarPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idlugar field.
     * @var        int
     */
    protected $idlugar;

    /**
     * The value for the lugar_nombre field.
     * @var        string
     */
    protected $lugar_nombre;

    /**
     * The value for the lugar_descripcion field.
     * @var        string
     */
    protected $lugar_descripcion;

    /**
     * @var        PropelObjectCollection|Articulovariantereorden[] Collection to store aggregation of Articulovariantereorden objects.
     */
    protected $collArticulovariantereordens;
    protected $collArticulovariantereordensPartial;

    /**
     * @var        PropelObjectCollection|Lugarinventario[] Collection to store aggregation of Lugarinventario objects.
     */
    protected $collLugarinventarios;
    protected $collLugarinventariosPartial;

    /**
     * @var        PropelObjectCollection|Traspaso[] Collection to store aggregation of Traspaso objects.
     */
    protected $collTraspasosRelatedByIdlugardestinatario;
    protected $collTraspasosRelatedByIdlugardestinatarioPartial;

    /**
     * @var        PropelObjectCollection|Traspaso[] Collection to store aggregation of Traspaso objects.
     */
    protected $collTraspasosRelatedByIdlugarremitente;
    protected $collTraspasosRelatedByIdlugarremitentePartial;

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
    protected $articulovariantereordensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $lugarinventariosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $traspasosRelatedByIdlugardestinatarioScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $traspasosRelatedByIdlugarremitenteScheduledForDeletion = null;

    /**
     * Get the [idlugar] column value.
     *
     * @return int
     */
    public function getIdlugar()
    {

        return $this->idlugar;
    }

    /**
     * Get the [lugar_nombre] column value.
     *
     * @return string
     */
    public function getLugarNombre()
    {

        return $this->lugar_nombre;
    }

    /**
     * Get the [lugar_descripcion] column value.
     *
     * @return string
     */
    public function getLugarDescripcion()
    {

        return $this->lugar_descripcion;
    }

    /**
     * Set the value of [idlugar] column.
     *
     * @param  int $v new value
     * @return Lugar The current object (for fluent API support)
     */
    public function setIdlugar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idlugar !== $v) {
            $this->idlugar = $v;
            $this->modifiedColumns[] = LugarPeer::IDLUGAR;
        }


        return $this;
    } // setIdlugar()

    /**
     * Set the value of [lugar_nombre] column.
     *
     * @param  string $v new value
     * @return Lugar The current object (for fluent API support)
     */
    public function setLugarNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lugar_nombre !== $v) {
            $this->lugar_nombre = $v;
            $this->modifiedColumns[] = LugarPeer::LUGAR_NOMBRE;
        }


        return $this;
    } // setLugarNombre()

    /**
     * Set the value of [lugar_descripcion] column.
     *
     * @param  string $v new value
     * @return Lugar The current object (for fluent API support)
     */
    public function setLugarDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lugar_descripcion !== $v) {
            $this->lugar_descripcion = $v;
            $this->modifiedColumns[] = LugarPeer::LUGAR_DESCRIPCION;
        }


        return $this;
    } // setLugarDescripcion()

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

            $this->idlugar = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->lugar_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->lugar_descripcion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = LugarPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Lugar object", $e);
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
            $con = Propel::getConnection(LugarPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = LugarPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collArticulovariantereordens = null;

            $this->collLugarinventarios = null;

            $this->collTraspasosRelatedByIdlugardestinatario = null;

            $this->collTraspasosRelatedByIdlugarremitente = null;

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
            $con = Propel::getConnection(LugarPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = LugarQuery::create()
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
            $con = Propel::getConnection(LugarPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                LugarPeer::addInstanceToPool($this);
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

            if ($this->articulovariantereordensScheduledForDeletion !== null) {
                if (!$this->articulovariantereordensScheduledForDeletion->isEmpty()) {
                    ArticulovariantereordenQuery::create()
                        ->filterByPrimaryKeys($this->articulovariantereordensScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->articulovariantereordensScheduledForDeletion = null;
                }
            }

            if ($this->collArticulovariantereordens !== null) {
                foreach ($this->collArticulovariantereordens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->lugarinventariosScheduledForDeletion !== null) {
                if (!$this->lugarinventariosScheduledForDeletion->isEmpty()) {
                    LugarinventarioQuery::create()
                        ->filterByPrimaryKeys($this->lugarinventariosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->lugarinventariosScheduledForDeletion = null;
                }
            }

            if ($this->collLugarinventarios !== null) {
                foreach ($this->collLugarinventarios as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->traspasosRelatedByIdlugardestinatarioScheduledForDeletion !== null) {
                if (!$this->traspasosRelatedByIdlugardestinatarioScheduledForDeletion->isEmpty()) {
                    TraspasoQuery::create()
                        ->filterByPrimaryKeys($this->traspasosRelatedByIdlugardestinatarioScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->traspasosRelatedByIdlugardestinatarioScheduledForDeletion = null;
                }
            }

            if ($this->collTraspasosRelatedByIdlugardestinatario !== null) {
                foreach ($this->collTraspasosRelatedByIdlugardestinatario as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->traspasosRelatedByIdlugarremitenteScheduledForDeletion !== null) {
                if (!$this->traspasosRelatedByIdlugarremitenteScheduledForDeletion->isEmpty()) {
                    TraspasoQuery::create()
                        ->filterByPrimaryKeys($this->traspasosRelatedByIdlugarremitenteScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->traspasosRelatedByIdlugarremitenteScheduledForDeletion = null;
                }
            }

            if ($this->collTraspasosRelatedByIdlugarremitente !== null) {
                foreach ($this->collTraspasosRelatedByIdlugarremitente as $referrerFK) {
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

        $this->modifiedColumns[] = LugarPeer::IDLUGAR;
        if (null !== $this->idlugar) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . LugarPeer::IDLUGAR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(LugarPeer::IDLUGAR)) {
            $modifiedColumns[':p' . $index++]  = '`idlugar`';
        }
        if ($this->isColumnModified(LugarPeer::LUGAR_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`lugar_nombre`';
        }
        if ($this->isColumnModified(LugarPeer::LUGAR_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`lugar_descripcion`';
        }

        $sql = sprintf(
            'INSERT INTO `lugar` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idlugar`':
                        $stmt->bindValue($identifier, $this->idlugar, PDO::PARAM_INT);
                        break;
                    case '`lugar_nombre`':
                        $stmt->bindValue($identifier, $this->lugar_nombre, PDO::PARAM_STR);
                        break;
                    case '`lugar_descripcion`':
                        $stmt->bindValue($identifier, $this->lugar_descripcion, PDO::PARAM_STR);
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
        $this->setIdlugar($pk);

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


            if (($retval = LugarPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collArticulovariantereordens !== null) {
                    foreach ($this->collArticulovariantereordens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collLugarinventarios !== null) {
                    foreach ($this->collLugarinventarios as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTraspasosRelatedByIdlugardestinatario !== null) {
                    foreach ($this->collTraspasosRelatedByIdlugardestinatario as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTraspasosRelatedByIdlugarremitente !== null) {
                    foreach ($this->collTraspasosRelatedByIdlugarremitente as $referrerFK) {
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
        $pos = LugarPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdlugar();
                break;
            case 1:
                return $this->getLugarNombre();
                break;
            case 2:
                return $this->getLugarDescripcion();
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
        if (isset($alreadyDumpedObjects['Lugar'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Lugar'][$this->getPrimaryKey()] = true;
        $keys = LugarPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdlugar(),
            $keys[1] => $this->getLugarNombre(),
            $keys[2] => $this->getLugarDescripcion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collArticulovariantereordens) {
                $result['Articulovariantereordens'] = $this->collArticulovariantereordens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collLugarinventarios) {
                $result['Lugarinventarios'] = $this->collLugarinventarios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTraspasosRelatedByIdlugardestinatario) {
                $result['TraspasosRelatedByIdlugardestinatario'] = $this->collTraspasosRelatedByIdlugardestinatario->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTraspasosRelatedByIdlugarremitente) {
                $result['TraspasosRelatedByIdlugarremitente'] = $this->collTraspasosRelatedByIdlugarremitente->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = LugarPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdlugar($value);
                break;
            case 1:
                $this->setLugarNombre($value);
                break;
            case 2:
                $this->setLugarDescripcion($value);
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
        $keys = LugarPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdlugar($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setLugarNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLugarDescripcion($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(LugarPeer::DATABASE_NAME);

        if ($this->isColumnModified(LugarPeer::IDLUGAR)) $criteria->add(LugarPeer::IDLUGAR, $this->idlugar);
        if ($this->isColumnModified(LugarPeer::LUGAR_NOMBRE)) $criteria->add(LugarPeer::LUGAR_NOMBRE, $this->lugar_nombre);
        if ($this->isColumnModified(LugarPeer::LUGAR_DESCRIPCION)) $criteria->add(LugarPeer::LUGAR_DESCRIPCION, $this->lugar_descripcion);

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
        $criteria = new Criteria(LugarPeer::DATABASE_NAME);
        $criteria->add(LugarPeer::IDLUGAR, $this->idlugar);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdlugar();
    }

    /**
     * Generic method to set the primary key (idlugar column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdlugar($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdlugar();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Lugar (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLugarNombre($this->getLugarNombre());
        $copyObj->setLugarDescripcion($this->getLugarDescripcion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getArticulovariantereordens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addArticulovariantereorden($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getLugarinventarios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addLugarinventario($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTraspasosRelatedByIdlugardestinatario() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTraspasoRelatedByIdlugardestinatario($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTraspasosRelatedByIdlugarremitente() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTraspasoRelatedByIdlugarremitente($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdlugar(NULL); // this is a auto-increment column, so set to default value
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
     * @return Lugar Clone of current object.
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
     * @return LugarPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new LugarPeer();
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
        if ('Articulovariantereorden' == $relationName) {
            $this->initArticulovariantereordens();
        }
        if ('Lugarinventario' == $relationName) {
            $this->initLugarinventarios();
        }
        if ('TraspasoRelatedByIdlugardestinatario' == $relationName) {
            $this->initTraspasosRelatedByIdlugardestinatario();
        }
        if ('TraspasoRelatedByIdlugarremitente' == $relationName) {
            $this->initTraspasosRelatedByIdlugarremitente();
        }
    }

    /**
     * Clears out the collArticulovariantereordens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Lugar The current object (for fluent API support)
     * @see        addArticulovariantereordens()
     */
    public function clearArticulovariantereordens()
    {
        $this->collArticulovariantereordens = null; // important to set this to null since that means it is uninitialized
        $this->collArticulovariantereordensPartial = null;

        return $this;
    }

    /**
     * reset is the collArticulovariantereordens collection loaded partially
     *
     * @return void
     */
    public function resetPartialArticulovariantereordens($v = true)
    {
        $this->collArticulovariantereordensPartial = $v;
    }

    /**
     * Initializes the collArticulovariantereordens collection.
     *
     * By default this just sets the collArticulovariantereordens collection to an empty array (like clearcollArticulovariantereordens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initArticulovariantereordens($overrideExisting = true)
    {
        if (null !== $this->collArticulovariantereordens && !$overrideExisting) {
            return;
        }
        $this->collArticulovariantereordens = new PropelObjectCollection();
        $this->collArticulovariantereordens->setModel('Articulovariantereorden');
    }

    /**
     * Gets an array of Articulovariantereorden objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Lugar is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Articulovariantereorden[] List of Articulovariantereorden objects
     * @throws PropelException
     */
    public function getArticulovariantereordens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collArticulovariantereordensPartial && !$this->isNew();
        if (null === $this->collArticulovariantereordens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collArticulovariantereordens) {
                // return empty collection
                $this->initArticulovariantereordens();
            } else {
                $collArticulovariantereordens = ArticulovariantereordenQuery::create(null, $criteria)
                    ->filterByLugar($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collArticulovariantereordensPartial && count($collArticulovariantereordens)) {
                      $this->initArticulovariantereordens(false);

                      foreach ($collArticulovariantereordens as $obj) {
                        if (false == $this->collArticulovariantereordens->contains($obj)) {
                          $this->collArticulovariantereordens->append($obj);
                        }
                      }

                      $this->collArticulovariantereordensPartial = true;
                    }

                    $collArticulovariantereordens->getInternalIterator()->rewind();

                    return $collArticulovariantereordens;
                }

                if ($partial && $this->collArticulovariantereordens) {
                    foreach ($this->collArticulovariantereordens as $obj) {
                        if ($obj->isNew()) {
                            $collArticulovariantereordens[] = $obj;
                        }
                    }
                }

                $this->collArticulovariantereordens = $collArticulovariantereordens;
                $this->collArticulovariantereordensPartial = false;
            }
        }

        return $this->collArticulovariantereordens;
    }

    /**
     * Sets a collection of Articulovariantereorden objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $articulovariantereordens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Lugar The current object (for fluent API support)
     */
    public function setArticulovariantereordens(PropelCollection $articulovariantereordens, PropelPDO $con = null)
    {
        $articulovariantereordensToDelete = $this->getArticulovariantereordens(new Criteria(), $con)->diff($articulovariantereordens);


        $this->articulovariantereordensScheduledForDeletion = $articulovariantereordensToDelete;

        foreach ($articulovariantereordensToDelete as $articulovariantereordenRemoved) {
            $articulovariantereordenRemoved->setLugar(null);
        }

        $this->collArticulovariantereordens = null;
        foreach ($articulovariantereordens as $articulovariantereorden) {
            $this->addArticulovariantereorden($articulovariantereorden);
        }

        $this->collArticulovariantereordens = $articulovariantereordens;
        $this->collArticulovariantereordensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Articulovariantereorden objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Articulovariantereorden objects.
     * @throws PropelException
     */
    public function countArticulovariantereordens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collArticulovariantereordensPartial && !$this->isNew();
        if (null === $this->collArticulovariantereordens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collArticulovariantereordens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getArticulovariantereordens());
            }
            $query = ArticulovariantereordenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByLugar($this)
                ->count($con);
        }

        return count($this->collArticulovariantereordens);
    }

    /**
     * Method called to associate a Articulovariantereorden object to this object
     * through the Articulovariantereorden foreign key attribute.
     *
     * @param    Articulovariantereorden $l Articulovariantereorden
     * @return Lugar The current object (for fluent API support)
     */
    public function addArticulovariantereorden(Articulovariantereorden $l)
    {
        if ($this->collArticulovariantereordens === null) {
            $this->initArticulovariantereordens();
            $this->collArticulovariantereordensPartial = true;
        }

        if (!in_array($l, $this->collArticulovariantereordens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddArticulovariantereorden($l);

            if ($this->articulovariantereordensScheduledForDeletion and $this->articulovariantereordensScheduledForDeletion->contains($l)) {
                $this->articulovariantereordensScheduledForDeletion->remove($this->articulovariantereordensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Articulovariantereorden $articulovariantereorden The articulovariantereorden object to add.
     */
    protected function doAddArticulovariantereorden($articulovariantereorden)
    {
        $this->collArticulovariantereordens[]= $articulovariantereorden;
        $articulovariantereorden->setLugar($this);
    }

    /**
     * @param	Articulovariantereorden $articulovariantereorden The articulovariantereorden object to remove.
     * @return Lugar The current object (for fluent API support)
     */
    public function removeArticulovariantereorden($articulovariantereorden)
    {
        if ($this->getArticulovariantereordens()->contains($articulovariantereorden)) {
            $this->collArticulovariantereordens->remove($this->collArticulovariantereordens->search($articulovariantereorden));
            if (null === $this->articulovariantereordensScheduledForDeletion) {
                $this->articulovariantereordensScheduledForDeletion = clone $this->collArticulovariantereordens;
                $this->articulovariantereordensScheduledForDeletion->clear();
            }
            $this->articulovariantereordensScheduledForDeletion[]= clone $articulovariantereorden;
            $articulovariantereorden->setLugar(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Lugar is new, it will return
     * an empty collection; or if this Lugar has previously
     * been saved, it will retrieve related Articulovariantereordens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Lugar.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Articulovariantereorden[] List of Articulovariantereorden objects
     */
    public function getArticulovariantereordensJoinArticulovariante($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ArticulovariantereordenQuery::create(null, $criteria);
        $query->joinWith('Articulovariante', $join_behavior);

        return $this->getArticulovariantereordens($query, $con);
    }

    /**
     * Clears out the collLugarinventarios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Lugar The current object (for fluent API support)
     * @see        addLugarinventarios()
     */
    public function clearLugarinventarios()
    {
        $this->collLugarinventarios = null; // important to set this to null since that means it is uninitialized
        $this->collLugarinventariosPartial = null;

        return $this;
    }

    /**
     * reset is the collLugarinventarios collection loaded partially
     *
     * @return void
     */
    public function resetPartialLugarinventarios($v = true)
    {
        $this->collLugarinventariosPartial = $v;
    }

    /**
     * Initializes the collLugarinventarios collection.
     *
     * By default this just sets the collLugarinventarios collection to an empty array (like clearcollLugarinventarios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initLugarinventarios($overrideExisting = true)
    {
        if (null !== $this->collLugarinventarios && !$overrideExisting) {
            return;
        }
        $this->collLugarinventarios = new PropelObjectCollection();
        $this->collLugarinventarios->setModel('Lugarinventario');
    }

    /**
     * Gets an array of Lugarinventario objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Lugar is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Lugarinventario[] List of Lugarinventario objects
     * @throws PropelException
     */
    public function getLugarinventarios($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collLugarinventariosPartial && !$this->isNew();
        if (null === $this->collLugarinventarios || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collLugarinventarios) {
                // return empty collection
                $this->initLugarinventarios();
            } else {
                $collLugarinventarios = LugarinventarioQuery::create(null, $criteria)
                    ->filterByLugar($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collLugarinventariosPartial && count($collLugarinventarios)) {
                      $this->initLugarinventarios(false);

                      foreach ($collLugarinventarios as $obj) {
                        if (false == $this->collLugarinventarios->contains($obj)) {
                          $this->collLugarinventarios->append($obj);
                        }
                      }

                      $this->collLugarinventariosPartial = true;
                    }

                    $collLugarinventarios->getInternalIterator()->rewind();

                    return $collLugarinventarios;
                }

                if ($partial && $this->collLugarinventarios) {
                    foreach ($this->collLugarinventarios as $obj) {
                        if ($obj->isNew()) {
                            $collLugarinventarios[] = $obj;
                        }
                    }
                }

                $this->collLugarinventarios = $collLugarinventarios;
                $this->collLugarinventariosPartial = false;
            }
        }

        return $this->collLugarinventarios;
    }

    /**
     * Sets a collection of Lugarinventario objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $lugarinventarios A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Lugar The current object (for fluent API support)
     */
    public function setLugarinventarios(PropelCollection $lugarinventarios, PropelPDO $con = null)
    {
        $lugarinventariosToDelete = $this->getLugarinventarios(new Criteria(), $con)->diff($lugarinventarios);


        $this->lugarinventariosScheduledForDeletion = $lugarinventariosToDelete;

        foreach ($lugarinventariosToDelete as $lugarinventarioRemoved) {
            $lugarinventarioRemoved->setLugar(null);
        }

        $this->collLugarinventarios = null;
        foreach ($lugarinventarios as $lugarinventario) {
            $this->addLugarinventario($lugarinventario);
        }

        $this->collLugarinventarios = $lugarinventarios;
        $this->collLugarinventariosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Lugarinventario objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Lugarinventario objects.
     * @throws PropelException
     */
    public function countLugarinventarios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collLugarinventariosPartial && !$this->isNew();
        if (null === $this->collLugarinventarios || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collLugarinventarios) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getLugarinventarios());
            }
            $query = LugarinventarioQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByLugar($this)
                ->count($con);
        }

        return count($this->collLugarinventarios);
    }

    /**
     * Method called to associate a Lugarinventario object to this object
     * through the Lugarinventario foreign key attribute.
     *
     * @param    Lugarinventario $l Lugarinventario
     * @return Lugar The current object (for fluent API support)
     */
    public function addLugarinventario(Lugarinventario $l)
    {
        if ($this->collLugarinventarios === null) {
            $this->initLugarinventarios();
            $this->collLugarinventariosPartial = true;
        }

        if (!in_array($l, $this->collLugarinventarios->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddLugarinventario($l);

            if ($this->lugarinventariosScheduledForDeletion and $this->lugarinventariosScheduledForDeletion->contains($l)) {
                $this->lugarinventariosScheduledForDeletion->remove($this->lugarinventariosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Lugarinventario $lugarinventario The lugarinventario object to add.
     */
    protected function doAddLugarinventario($lugarinventario)
    {
        $this->collLugarinventarios[]= $lugarinventario;
        $lugarinventario->setLugar($this);
    }

    /**
     * @param	Lugarinventario $lugarinventario The lugarinventario object to remove.
     * @return Lugar The current object (for fluent API support)
     */
    public function removeLugarinventario($lugarinventario)
    {
        if ($this->getLugarinventarios()->contains($lugarinventario)) {
            $this->collLugarinventarios->remove($this->collLugarinventarios->search($lugarinventario));
            if (null === $this->lugarinventariosScheduledForDeletion) {
                $this->lugarinventariosScheduledForDeletion = clone $this->collLugarinventarios;
                $this->lugarinventariosScheduledForDeletion->clear();
            }
            $this->lugarinventariosScheduledForDeletion[]= clone $lugarinventario;
            $lugarinventario->setLugar(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Lugar is new, it will return
     * an empty collection; or if this Lugar has previously
     * been saved, it will retrieve related Lugarinventarios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Lugar.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Lugarinventario[] List of Lugarinventario objects
     */
    public function getLugarinventariosJoinOrdencompradetalle($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = LugarinventarioQuery::create(null, $criteria);
        $query->joinWith('Ordencompradetalle', $join_behavior);

        return $this->getLugarinventarios($query, $con);
    }

    /**
     * Clears out the collTraspasosRelatedByIdlugardestinatario collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Lugar The current object (for fluent API support)
     * @see        addTraspasosRelatedByIdlugardestinatario()
     */
    public function clearTraspasosRelatedByIdlugardestinatario()
    {
        $this->collTraspasosRelatedByIdlugardestinatario = null; // important to set this to null since that means it is uninitialized
        $this->collTraspasosRelatedByIdlugardestinatarioPartial = null;

        return $this;
    }

    /**
     * reset is the collTraspasosRelatedByIdlugardestinatario collection loaded partially
     *
     * @return void
     */
    public function resetPartialTraspasosRelatedByIdlugardestinatario($v = true)
    {
        $this->collTraspasosRelatedByIdlugardestinatarioPartial = $v;
    }

    /**
     * Initializes the collTraspasosRelatedByIdlugardestinatario collection.
     *
     * By default this just sets the collTraspasosRelatedByIdlugardestinatario collection to an empty array (like clearcollTraspasosRelatedByIdlugardestinatario());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTraspasosRelatedByIdlugardestinatario($overrideExisting = true)
    {
        if (null !== $this->collTraspasosRelatedByIdlugardestinatario && !$overrideExisting) {
            return;
        }
        $this->collTraspasosRelatedByIdlugardestinatario = new PropelObjectCollection();
        $this->collTraspasosRelatedByIdlugardestinatario->setModel('Traspaso');
    }

    /**
     * Gets an array of Traspaso objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Lugar is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Traspaso[] List of Traspaso objects
     * @throws PropelException
     */
    public function getTraspasosRelatedByIdlugardestinatario($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTraspasosRelatedByIdlugardestinatarioPartial && !$this->isNew();
        if (null === $this->collTraspasosRelatedByIdlugardestinatario || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTraspasosRelatedByIdlugardestinatario) {
                // return empty collection
                $this->initTraspasosRelatedByIdlugardestinatario();
            } else {
                $collTraspasosRelatedByIdlugardestinatario = TraspasoQuery::create(null, $criteria)
                    ->filterByLugarRelatedByIdlugardestinatario($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTraspasosRelatedByIdlugardestinatarioPartial && count($collTraspasosRelatedByIdlugardestinatario)) {
                      $this->initTraspasosRelatedByIdlugardestinatario(false);

                      foreach ($collTraspasosRelatedByIdlugardestinatario as $obj) {
                        if (false == $this->collTraspasosRelatedByIdlugardestinatario->contains($obj)) {
                          $this->collTraspasosRelatedByIdlugardestinatario->append($obj);
                        }
                      }

                      $this->collTraspasosRelatedByIdlugardestinatarioPartial = true;
                    }

                    $collTraspasosRelatedByIdlugardestinatario->getInternalIterator()->rewind();

                    return $collTraspasosRelatedByIdlugardestinatario;
                }

                if ($partial && $this->collTraspasosRelatedByIdlugardestinatario) {
                    foreach ($this->collTraspasosRelatedByIdlugardestinatario as $obj) {
                        if ($obj->isNew()) {
                            $collTraspasosRelatedByIdlugardestinatario[] = $obj;
                        }
                    }
                }

                $this->collTraspasosRelatedByIdlugardestinatario = $collTraspasosRelatedByIdlugardestinatario;
                $this->collTraspasosRelatedByIdlugardestinatarioPartial = false;
            }
        }

        return $this->collTraspasosRelatedByIdlugardestinatario;
    }

    /**
     * Sets a collection of TraspasoRelatedByIdlugardestinatario objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $traspasosRelatedByIdlugardestinatario A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Lugar The current object (for fluent API support)
     */
    public function setTraspasosRelatedByIdlugardestinatario(PropelCollection $traspasosRelatedByIdlugardestinatario, PropelPDO $con = null)
    {
        $traspasosRelatedByIdlugardestinatarioToDelete = $this->getTraspasosRelatedByIdlugardestinatario(new Criteria(), $con)->diff($traspasosRelatedByIdlugardestinatario);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->traspasosRelatedByIdlugardestinatarioScheduledForDeletion = clone $traspasosRelatedByIdlugardestinatarioToDelete;

        foreach ($traspasosRelatedByIdlugardestinatarioToDelete as $traspasoRelatedByIdlugardestinatarioRemoved) {
            $traspasoRelatedByIdlugardestinatarioRemoved->setLugarRelatedByIdlugardestinatario(null);
        }

        $this->collTraspasosRelatedByIdlugardestinatario = null;
        foreach ($traspasosRelatedByIdlugardestinatario as $traspasoRelatedByIdlugardestinatario) {
            $this->addTraspasoRelatedByIdlugardestinatario($traspasoRelatedByIdlugardestinatario);
        }

        $this->collTraspasosRelatedByIdlugardestinatario = $traspasosRelatedByIdlugardestinatario;
        $this->collTraspasosRelatedByIdlugardestinatarioPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Traspaso objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Traspaso objects.
     * @throws PropelException
     */
    public function countTraspasosRelatedByIdlugardestinatario(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTraspasosRelatedByIdlugardestinatarioPartial && !$this->isNew();
        if (null === $this->collTraspasosRelatedByIdlugardestinatario || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTraspasosRelatedByIdlugardestinatario) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTraspasosRelatedByIdlugardestinatario());
            }
            $query = TraspasoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByLugarRelatedByIdlugardestinatario($this)
                ->count($con);
        }

        return count($this->collTraspasosRelatedByIdlugardestinatario);
    }

    /**
     * Method called to associate a Traspaso object to this object
     * through the Traspaso foreign key attribute.
     *
     * @param    Traspaso $l Traspaso
     * @return Lugar The current object (for fluent API support)
     */
    public function addTraspasoRelatedByIdlugardestinatario(Traspaso $l)
    {
        if ($this->collTraspasosRelatedByIdlugardestinatario === null) {
            $this->initTraspasosRelatedByIdlugardestinatario();
            $this->collTraspasosRelatedByIdlugardestinatarioPartial = true;
        }

        if (!in_array($l, $this->collTraspasosRelatedByIdlugardestinatario->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTraspasoRelatedByIdlugardestinatario($l);

            if ($this->traspasosRelatedByIdlugardestinatarioScheduledForDeletion and $this->traspasosRelatedByIdlugardestinatarioScheduledForDeletion->contains($l)) {
                $this->traspasosRelatedByIdlugardestinatarioScheduledForDeletion->remove($this->traspasosRelatedByIdlugardestinatarioScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	TraspasoRelatedByIdlugardestinatario $traspasoRelatedByIdlugardestinatario The traspasoRelatedByIdlugardestinatario object to add.
     */
    protected function doAddTraspasoRelatedByIdlugardestinatario($traspasoRelatedByIdlugardestinatario)
    {
        $this->collTraspasosRelatedByIdlugardestinatario[]= $traspasoRelatedByIdlugardestinatario;
        $traspasoRelatedByIdlugardestinatario->setLugarRelatedByIdlugardestinatario($this);
    }

    /**
     * @param	TraspasoRelatedByIdlugardestinatario $traspasoRelatedByIdlugardestinatario The traspasoRelatedByIdlugardestinatario object to remove.
     * @return Lugar The current object (for fluent API support)
     */
    public function removeTraspasoRelatedByIdlugardestinatario($traspasoRelatedByIdlugardestinatario)
    {
        if ($this->getTraspasosRelatedByIdlugardestinatario()->contains($traspasoRelatedByIdlugardestinatario)) {
            $this->collTraspasosRelatedByIdlugardestinatario->remove($this->collTraspasosRelatedByIdlugardestinatario->search($traspasoRelatedByIdlugardestinatario));
            if (null === $this->traspasosRelatedByIdlugardestinatarioScheduledForDeletion) {
                $this->traspasosRelatedByIdlugardestinatarioScheduledForDeletion = clone $this->collTraspasosRelatedByIdlugardestinatario;
                $this->traspasosRelatedByIdlugardestinatarioScheduledForDeletion->clear();
            }
            $this->traspasosRelatedByIdlugardestinatarioScheduledForDeletion[]= clone $traspasoRelatedByIdlugardestinatario;
            $traspasoRelatedByIdlugardestinatario->setLugarRelatedByIdlugardestinatario(null);
        }

        return $this;
    }

    /**
     * Clears out the collTraspasosRelatedByIdlugarremitente collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Lugar The current object (for fluent API support)
     * @see        addTraspasosRelatedByIdlugarremitente()
     */
    public function clearTraspasosRelatedByIdlugarremitente()
    {
        $this->collTraspasosRelatedByIdlugarremitente = null; // important to set this to null since that means it is uninitialized
        $this->collTraspasosRelatedByIdlugarremitentePartial = null;

        return $this;
    }

    /**
     * reset is the collTraspasosRelatedByIdlugarremitente collection loaded partially
     *
     * @return void
     */
    public function resetPartialTraspasosRelatedByIdlugarremitente($v = true)
    {
        $this->collTraspasosRelatedByIdlugarremitentePartial = $v;
    }

    /**
     * Initializes the collTraspasosRelatedByIdlugarremitente collection.
     *
     * By default this just sets the collTraspasosRelatedByIdlugarremitente collection to an empty array (like clearcollTraspasosRelatedByIdlugarremitente());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTraspasosRelatedByIdlugarremitente($overrideExisting = true)
    {
        if (null !== $this->collTraspasosRelatedByIdlugarremitente && !$overrideExisting) {
            return;
        }
        $this->collTraspasosRelatedByIdlugarremitente = new PropelObjectCollection();
        $this->collTraspasosRelatedByIdlugarremitente->setModel('Traspaso');
    }

    /**
     * Gets an array of Traspaso objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Lugar is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Traspaso[] List of Traspaso objects
     * @throws PropelException
     */
    public function getTraspasosRelatedByIdlugarremitente($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTraspasosRelatedByIdlugarremitentePartial && !$this->isNew();
        if (null === $this->collTraspasosRelatedByIdlugarremitente || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTraspasosRelatedByIdlugarremitente) {
                // return empty collection
                $this->initTraspasosRelatedByIdlugarremitente();
            } else {
                $collTraspasosRelatedByIdlugarremitente = TraspasoQuery::create(null, $criteria)
                    ->filterByLugarRelatedByIdlugarremitente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTraspasosRelatedByIdlugarremitentePartial && count($collTraspasosRelatedByIdlugarremitente)) {
                      $this->initTraspasosRelatedByIdlugarremitente(false);

                      foreach ($collTraspasosRelatedByIdlugarremitente as $obj) {
                        if (false == $this->collTraspasosRelatedByIdlugarremitente->contains($obj)) {
                          $this->collTraspasosRelatedByIdlugarremitente->append($obj);
                        }
                      }

                      $this->collTraspasosRelatedByIdlugarremitentePartial = true;
                    }

                    $collTraspasosRelatedByIdlugarremitente->getInternalIterator()->rewind();

                    return $collTraspasosRelatedByIdlugarremitente;
                }

                if ($partial && $this->collTraspasosRelatedByIdlugarremitente) {
                    foreach ($this->collTraspasosRelatedByIdlugarremitente as $obj) {
                        if ($obj->isNew()) {
                            $collTraspasosRelatedByIdlugarremitente[] = $obj;
                        }
                    }
                }

                $this->collTraspasosRelatedByIdlugarremitente = $collTraspasosRelatedByIdlugarremitente;
                $this->collTraspasosRelatedByIdlugarremitentePartial = false;
            }
        }

        return $this->collTraspasosRelatedByIdlugarremitente;
    }

    /**
     * Sets a collection of TraspasoRelatedByIdlugarremitente objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $traspasosRelatedByIdlugarremitente A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Lugar The current object (for fluent API support)
     */
    public function setTraspasosRelatedByIdlugarremitente(PropelCollection $traspasosRelatedByIdlugarremitente, PropelPDO $con = null)
    {
        $traspasosRelatedByIdlugarremitenteToDelete = $this->getTraspasosRelatedByIdlugarremitente(new Criteria(), $con)->diff($traspasosRelatedByIdlugarremitente);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->traspasosRelatedByIdlugarremitenteScheduledForDeletion = clone $traspasosRelatedByIdlugarremitenteToDelete;

        foreach ($traspasosRelatedByIdlugarremitenteToDelete as $traspasoRelatedByIdlugarremitenteRemoved) {
            $traspasoRelatedByIdlugarremitenteRemoved->setLugarRelatedByIdlugarremitente(null);
        }

        $this->collTraspasosRelatedByIdlugarremitente = null;
        foreach ($traspasosRelatedByIdlugarremitente as $traspasoRelatedByIdlugarremitente) {
            $this->addTraspasoRelatedByIdlugarremitente($traspasoRelatedByIdlugarremitente);
        }

        $this->collTraspasosRelatedByIdlugarremitente = $traspasosRelatedByIdlugarremitente;
        $this->collTraspasosRelatedByIdlugarremitentePartial = false;

        return $this;
    }

    /**
     * Returns the number of related Traspaso objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Traspaso objects.
     * @throws PropelException
     */
    public function countTraspasosRelatedByIdlugarremitente(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTraspasosRelatedByIdlugarremitentePartial && !$this->isNew();
        if (null === $this->collTraspasosRelatedByIdlugarremitente || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTraspasosRelatedByIdlugarremitente) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTraspasosRelatedByIdlugarremitente());
            }
            $query = TraspasoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByLugarRelatedByIdlugarremitente($this)
                ->count($con);
        }

        return count($this->collTraspasosRelatedByIdlugarremitente);
    }

    /**
     * Method called to associate a Traspaso object to this object
     * through the Traspaso foreign key attribute.
     *
     * @param    Traspaso $l Traspaso
     * @return Lugar The current object (for fluent API support)
     */
    public function addTraspasoRelatedByIdlugarremitente(Traspaso $l)
    {
        if ($this->collTraspasosRelatedByIdlugarremitente === null) {
            $this->initTraspasosRelatedByIdlugarremitente();
            $this->collTraspasosRelatedByIdlugarremitentePartial = true;
        }

        if (!in_array($l, $this->collTraspasosRelatedByIdlugarremitente->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTraspasoRelatedByIdlugarremitente($l);

            if ($this->traspasosRelatedByIdlugarremitenteScheduledForDeletion and $this->traspasosRelatedByIdlugarremitenteScheduledForDeletion->contains($l)) {
                $this->traspasosRelatedByIdlugarremitenteScheduledForDeletion->remove($this->traspasosRelatedByIdlugarremitenteScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	TraspasoRelatedByIdlugarremitente $traspasoRelatedByIdlugarremitente The traspasoRelatedByIdlugarremitente object to add.
     */
    protected function doAddTraspasoRelatedByIdlugarremitente($traspasoRelatedByIdlugarremitente)
    {
        $this->collTraspasosRelatedByIdlugarremitente[]= $traspasoRelatedByIdlugarremitente;
        $traspasoRelatedByIdlugarremitente->setLugarRelatedByIdlugarremitente($this);
    }

    /**
     * @param	TraspasoRelatedByIdlugarremitente $traspasoRelatedByIdlugarremitente The traspasoRelatedByIdlugarremitente object to remove.
     * @return Lugar The current object (for fluent API support)
     */
    public function removeTraspasoRelatedByIdlugarremitente($traspasoRelatedByIdlugarremitente)
    {
        if ($this->getTraspasosRelatedByIdlugarremitente()->contains($traspasoRelatedByIdlugarremitente)) {
            $this->collTraspasosRelatedByIdlugarremitente->remove($this->collTraspasosRelatedByIdlugarremitente->search($traspasoRelatedByIdlugarremitente));
            if (null === $this->traspasosRelatedByIdlugarremitenteScheduledForDeletion) {
                $this->traspasosRelatedByIdlugarremitenteScheduledForDeletion = clone $this->collTraspasosRelatedByIdlugarremitente;
                $this->traspasosRelatedByIdlugarremitenteScheduledForDeletion->clear();
            }
            $this->traspasosRelatedByIdlugarremitenteScheduledForDeletion[]= clone $traspasoRelatedByIdlugarremitente;
            $traspasoRelatedByIdlugarremitente->setLugarRelatedByIdlugarremitente(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idlugar = null;
        $this->lugar_nombre = null;
        $this->lugar_descripcion = null;
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
            if ($this->collArticulovariantereordens) {
                foreach ($this->collArticulovariantereordens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collLugarinventarios) {
                foreach ($this->collLugarinventarios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTraspasosRelatedByIdlugardestinatario) {
                foreach ($this->collTraspasosRelatedByIdlugardestinatario as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTraspasosRelatedByIdlugarremitente) {
                foreach ($this->collTraspasosRelatedByIdlugarremitente as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collArticulovariantereordens instanceof PropelCollection) {
            $this->collArticulovariantereordens->clearIterator();
        }
        $this->collArticulovariantereordens = null;
        if ($this->collLugarinventarios instanceof PropelCollection) {
            $this->collLugarinventarios->clearIterator();
        }
        $this->collLugarinventarios = null;
        if ($this->collTraspasosRelatedByIdlugardestinatario instanceof PropelCollection) {
            $this->collTraspasosRelatedByIdlugardestinatario->clearIterator();
        }
        $this->collTraspasosRelatedByIdlugardestinatario = null;
        if ($this->collTraspasosRelatedByIdlugarremitente instanceof PropelCollection) {
            $this->collTraspasosRelatedByIdlugarremitente->clearIterator();
        }
        $this->collTraspasosRelatedByIdlugarremitente = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(LugarPeer::DEFAULT_STRING_FORMAT);
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
