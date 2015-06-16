<?php


/**
 * Base class that represents a row from the 'articulovariantereorden' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseArticulovariantereorden extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ArticulovariantereordenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ArticulovariantereordenPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idarticulovariantereorden field.
     * @var        int
     */
    protected $idarticulovariantereorden;

    /**
     * The value for the idlugar field.
     * @var        int
     */
    protected $idlugar;

    /**
     * The value for the idarticulovariante field.
     * @var        int
     */
    protected $idarticulovariante;

    /**
     * The value for the minimo field.
     * @var        string
     */
    protected $minimo;

    /**
     * The value for the maximo field.
     * @var        string
     */
    protected $maximo;

    /**
     * The value for the reorden field.
     * @var        string
     */
    protected $reorden;

    /**
     * @var        Articulovariante
     */
    protected $aArticulovariante;

    /**
     * @var        Lugar
     */
    protected $aLugar;

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
     * Get the [idarticulovariantereorden] column value.
     *
     * @return int
     */
    public function getIdarticulovariantereorden()
    {

        return $this->idarticulovariantereorden;
    }

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
     * Get the [idarticulovariante] column value.
     *
     * @return int
     */
    public function getIdarticulovariante()
    {

        return $this->idarticulovariante;
    }

    /**
     * Get the [minimo] column value.
     *
     * @return string
     */
    public function getMinimo()
    {

        return $this->minimo;
    }

    /**
     * Get the [maximo] column value.
     *
     * @return string
     */
    public function getMaximo()
    {

        return $this->maximo;
    }

    /**
     * Get the [reorden] column value.
     *
     * @return string
     */
    public function getReorden()
    {

        return $this->reorden;
    }

    /**
     * Set the value of [idarticulovariantereorden] column.
     *
     * @param  int $v new value
     * @return Articulovariantereorden The current object (for fluent API support)
     */
    public function setIdarticulovariantereorden($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idarticulovariantereorden !== $v) {
            $this->idarticulovariantereorden = $v;
            $this->modifiedColumns[] = ArticulovariantereordenPeer::IDARTICULOVARIANTEREORDEN;
        }


        return $this;
    } // setIdarticulovariantereorden()

    /**
     * Set the value of [idlugar] column.
     *
     * @param  int $v new value
     * @return Articulovariantereorden The current object (for fluent API support)
     */
    public function setIdlugar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idlugar !== $v) {
            $this->idlugar = $v;
            $this->modifiedColumns[] = ArticulovariantereordenPeer::IDLUGAR;
        }

        if ($this->aLugar !== null && $this->aLugar->getIdlugar() !== $v) {
            $this->aLugar = null;
        }


        return $this;
    } // setIdlugar()

    /**
     * Set the value of [idarticulovariante] column.
     *
     * @param  int $v new value
     * @return Articulovariantereorden The current object (for fluent API support)
     */
    public function setIdarticulovariante($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idarticulovariante !== $v) {
            $this->idarticulovariante = $v;
            $this->modifiedColumns[] = ArticulovariantereordenPeer::IDARTICULOVARIANTE;
        }

        if ($this->aArticulovariante !== null && $this->aArticulovariante->getIdarticulovariante() !== $v) {
            $this->aArticulovariante = null;
        }


        return $this;
    } // setIdarticulovariante()

    /**
     * Set the value of [minimo] column.
     *
     * @param  string $v new value
     * @return Articulovariantereorden The current object (for fluent API support)
     */
    public function setMinimo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->minimo !== $v) {
            $this->minimo = $v;
            $this->modifiedColumns[] = ArticulovariantereordenPeer::MINIMO;
        }


        return $this;
    } // setMinimo()

    /**
     * Set the value of [maximo] column.
     *
     * @param  string $v new value
     * @return Articulovariantereorden The current object (for fluent API support)
     */
    public function setMaximo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->maximo !== $v) {
            $this->maximo = $v;
            $this->modifiedColumns[] = ArticulovariantereordenPeer::MAXIMO;
        }


        return $this;
    } // setMaximo()

    /**
     * Set the value of [reorden] column.
     *
     * @param  string $v new value
     * @return Articulovariantereorden The current object (for fluent API support)
     */
    public function setReorden($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reorden !== $v) {
            $this->reorden = $v;
            $this->modifiedColumns[] = ArticulovariantereordenPeer::REORDEN;
        }


        return $this;
    } // setReorden()

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

            $this->idarticulovariantereorden = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idlugar = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idarticulovariante = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->minimo = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->maximo = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->reorden = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = ArticulovariantereordenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Articulovariantereorden object", $e);
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

        if ($this->aLugar !== null && $this->idlugar !== $this->aLugar->getIdlugar()) {
            $this->aLugar = null;
        }
        if ($this->aArticulovariante !== null && $this->idarticulovariante !== $this->aArticulovariante->getIdarticulovariante()) {
            $this->aArticulovariante = null;
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
            $con = Propel::getConnection(ArticulovariantereordenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ArticulovariantereordenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aArticulovariante = null;
            $this->aLugar = null;
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
            $con = Propel::getConnection(ArticulovariantereordenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ArticulovariantereordenQuery::create()
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
            $con = Propel::getConnection(ArticulovariantereordenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ArticulovariantereordenPeer::addInstanceToPool($this);
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

            if ($this->aArticulovariante !== null) {
                if ($this->aArticulovariante->isModified() || $this->aArticulovariante->isNew()) {
                    $affectedRows += $this->aArticulovariante->save($con);
                }
                $this->setArticulovariante($this->aArticulovariante);
            }

            if ($this->aLugar !== null) {
                if ($this->aLugar->isModified() || $this->aLugar->isNew()) {
                    $affectedRows += $this->aLugar->save($con);
                }
                $this->setLugar($this->aLugar);
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

        $this->modifiedColumns[] = ArticulovariantereordenPeer::IDARTICULOVARIANTEREORDEN;
        if (null !== $this->idarticulovariantereorden) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ArticulovariantereordenPeer::IDARTICULOVARIANTEREORDEN . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ArticulovariantereordenPeer::IDARTICULOVARIANTEREORDEN)) {
            $modifiedColumns[':p' . $index++]  = '`idarticulovariantereorden`';
        }
        if ($this->isColumnModified(ArticulovariantereordenPeer::IDLUGAR)) {
            $modifiedColumns[':p' . $index++]  = '`idlugar`';
        }
        if ($this->isColumnModified(ArticulovariantereordenPeer::IDARTICULOVARIANTE)) {
            $modifiedColumns[':p' . $index++]  = '`idarticulovariante`';
        }
        if ($this->isColumnModified(ArticulovariantereordenPeer::MINIMO)) {
            $modifiedColumns[':p' . $index++]  = '`minimo`';
        }
        if ($this->isColumnModified(ArticulovariantereordenPeer::MAXIMO)) {
            $modifiedColumns[':p' . $index++]  = '`maximo`';
        }
        if ($this->isColumnModified(ArticulovariantereordenPeer::REORDEN)) {
            $modifiedColumns[':p' . $index++]  = '`reorden`';
        }

        $sql = sprintf(
            'INSERT INTO `articulovariantereorden` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idarticulovariantereorden`':
                        $stmt->bindValue($identifier, $this->idarticulovariantereorden, PDO::PARAM_INT);
                        break;
                    case '`idlugar`':
                        $stmt->bindValue($identifier, $this->idlugar, PDO::PARAM_INT);
                        break;
                    case '`idarticulovariante`':
                        $stmt->bindValue($identifier, $this->idarticulovariante, PDO::PARAM_INT);
                        break;
                    case '`minimo`':
                        $stmt->bindValue($identifier, $this->minimo, PDO::PARAM_STR);
                        break;
                    case '`maximo`':
                        $stmt->bindValue($identifier, $this->maximo, PDO::PARAM_STR);
                        break;
                    case '`reorden`':
                        $stmt->bindValue($identifier, $this->reorden, PDO::PARAM_STR);
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
        $this->setIdarticulovariantereorden($pk);

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

            if ($this->aArticulovariante !== null) {
                if (!$this->aArticulovariante->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aArticulovariante->getValidationFailures());
                }
            }

            if ($this->aLugar !== null) {
                if (!$this->aLugar->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aLugar->getValidationFailures());
                }
            }


            if (($retval = ArticulovariantereordenPeer::doValidate($this, $columns)) !== true) {
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
        $pos = ArticulovariantereordenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdarticulovariantereorden();
                break;
            case 1:
                return $this->getIdlugar();
                break;
            case 2:
                return $this->getIdarticulovariante();
                break;
            case 3:
                return $this->getMinimo();
                break;
            case 4:
                return $this->getMaximo();
                break;
            case 5:
                return $this->getReorden();
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
        if (isset($alreadyDumpedObjects['Articulovariantereorden'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Articulovariantereorden'][$this->getPrimaryKey()] = true;
        $keys = ArticulovariantereordenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdarticulovariantereorden(),
            $keys[1] => $this->getIdlugar(),
            $keys[2] => $this->getIdarticulovariante(),
            $keys[3] => $this->getMinimo(),
            $keys[4] => $this->getMaximo(),
            $keys[5] => $this->getReorden(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aArticulovariante) {
                $result['Articulovariante'] = $this->aArticulovariante->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aLugar) {
                $result['Lugar'] = $this->aLugar->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = ArticulovariantereordenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdarticulovariantereorden($value);
                break;
            case 1:
                $this->setIdlugar($value);
                break;
            case 2:
                $this->setIdarticulovariante($value);
                break;
            case 3:
                $this->setMinimo($value);
                break;
            case 4:
                $this->setMaximo($value);
                break;
            case 5:
                $this->setReorden($value);
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
        $keys = ArticulovariantereordenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdarticulovariantereorden($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdlugar($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdarticulovariante($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMinimo($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMaximo($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setReorden($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ArticulovariantereordenPeer::DATABASE_NAME);

        if ($this->isColumnModified(ArticulovariantereordenPeer::IDARTICULOVARIANTEREORDEN)) $criteria->add(ArticulovariantereordenPeer::IDARTICULOVARIANTEREORDEN, $this->idarticulovariantereorden);
        if ($this->isColumnModified(ArticulovariantereordenPeer::IDLUGAR)) $criteria->add(ArticulovariantereordenPeer::IDLUGAR, $this->idlugar);
        if ($this->isColumnModified(ArticulovariantereordenPeer::IDARTICULOVARIANTE)) $criteria->add(ArticulovariantereordenPeer::IDARTICULOVARIANTE, $this->idarticulovariante);
        if ($this->isColumnModified(ArticulovariantereordenPeer::MINIMO)) $criteria->add(ArticulovariantereordenPeer::MINIMO, $this->minimo);
        if ($this->isColumnModified(ArticulovariantereordenPeer::MAXIMO)) $criteria->add(ArticulovariantereordenPeer::MAXIMO, $this->maximo);
        if ($this->isColumnModified(ArticulovariantereordenPeer::REORDEN)) $criteria->add(ArticulovariantereordenPeer::REORDEN, $this->reorden);

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
        $criteria = new Criteria(ArticulovariantereordenPeer::DATABASE_NAME);
        $criteria->add(ArticulovariantereordenPeer::IDARTICULOVARIANTEREORDEN, $this->idarticulovariantereorden);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdarticulovariantereorden();
    }

    /**
     * Generic method to set the primary key (idarticulovariantereorden column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdarticulovariantereorden($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdarticulovariantereorden();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Articulovariantereorden (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdlugar($this->getIdlugar());
        $copyObj->setIdarticulovariante($this->getIdarticulovariante());
        $copyObj->setMinimo($this->getMinimo());
        $copyObj->setMaximo($this->getMaximo());
        $copyObj->setReorden($this->getReorden());

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
            $copyObj->setIdarticulovariantereorden(NULL); // this is a auto-increment column, so set to default value
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
     * @return Articulovariantereorden Clone of current object.
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
     * @return ArticulovariantereordenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ArticulovariantereordenPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Articulovariante object.
     *
     * @param                  Articulovariante $v
     * @return Articulovariantereorden The current object (for fluent API support)
     * @throws PropelException
     */
    public function setArticulovariante(Articulovariante $v = null)
    {
        if ($v === null) {
            $this->setIdarticulovariante(NULL);
        } else {
            $this->setIdarticulovariante($v->getIdarticulovariante());
        }

        $this->aArticulovariante = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Articulovariante object, it will not be re-added.
        if ($v !== null) {
            $v->addArticulovariantereorden($this);
        }


        return $this;
    }


    /**
     * Get the associated Articulovariante object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Articulovariante The associated Articulovariante object.
     * @throws PropelException
     */
    public function getArticulovariante(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aArticulovariante === null && ($this->idarticulovariante !== null) && $doQuery) {
            $this->aArticulovariante = ArticulovarianteQuery::create()->findPk($this->idarticulovariante, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aArticulovariante->addArticulovariantereordens($this);
             */
        }

        return $this->aArticulovariante;
    }

    /**
     * Declares an association between this object and a Lugar object.
     *
     * @param                  Lugar $v
     * @return Articulovariantereorden The current object (for fluent API support)
     * @throws PropelException
     */
    public function setLugar(Lugar $v = null)
    {
        if ($v === null) {
            $this->setIdlugar(NULL);
        } else {
            $this->setIdlugar($v->getIdlugar());
        }

        $this->aLugar = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Lugar object, it will not be re-added.
        if ($v !== null) {
            $v->addArticulovariantereorden($this);
        }


        return $this;
    }


    /**
     * Get the associated Lugar object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Lugar The associated Lugar object.
     * @throws PropelException
     */
    public function getLugar(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aLugar === null && ($this->idlugar !== null) && $doQuery) {
            $this->aLugar = LugarQuery::create()->findPk($this->idlugar, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aLugar->addArticulovariantereordens($this);
             */
        }

        return $this->aLugar;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idarticulovariantereorden = null;
        $this->idlugar = null;
        $this->idarticulovariante = null;
        $this->minimo = null;
        $this->maximo = null;
        $this->reorden = null;
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
            if ($this->aArticulovariante instanceof Persistent) {
              $this->aArticulovariante->clearAllReferences($deep);
            }
            if ($this->aLugar instanceof Persistent) {
              $this->aLugar->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aArticulovariante = null;
        $this->aLugar = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ArticulovariantereordenPeer::DEFAULT_STRING_FORMAT);
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
