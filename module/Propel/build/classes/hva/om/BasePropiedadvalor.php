<?php


/**
 * Base class that represents a row from the 'propiedadvalor' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BasePropiedadvalor extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PropiedadvalorPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PropiedadvalorPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idpropiedadvalor field.
     * @var        int
     */
    protected $idpropiedadvalor;

    /**
     * The value for the idpropiedad field.
     * @var        int
     */
    protected $idpropiedad;

    /**
     * The value for the idarticulo field.
     * @var        int
     */
    protected $idarticulo;

    /**
     * The value for the propiedadvalor_nombre field.
     * @var        string
     */
    protected $propiedadvalor_nombre;

    /**
     * @var        Articulo
     */
    protected $aArticulo;

    /**
     * @var        Propiedad
     */
    protected $aPropiedad;

    /**
     * @var        PropelObjectCollection|Articulovariantevalor[] Collection to store aggregation of Articulovariantevalor objects.
     */
    protected $collArticulovariantevalors;
    protected $collArticulovariantevalorsPartial;

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
    protected $articulovariantevalorsScheduledForDeletion = null;

    /**
     * Get the [idpropiedadvalor] column value.
     *
     * @return int
     */
    public function getIdpropiedadvalor()
    {

        return $this->idpropiedadvalor;
    }

    /**
     * Get the [idpropiedad] column value.
     *
     * @return int
     */
    public function getIdpropiedad()
    {

        return $this->idpropiedad;
    }

    /**
     * Get the [idarticulo] column value.
     *
     * @return int
     */
    public function getIdarticulo()
    {

        return $this->idarticulo;
    }

    /**
     * Get the [propiedadvalor_nombre] column value.
     *
     * @return string
     */
    public function getPropiedadvalorNombre()
    {

        return $this->propiedadvalor_nombre;
    }

    /**
     * Set the value of [idpropiedadvalor] column.
     *
     * @param  int $v new value
     * @return Propiedadvalor The current object (for fluent API support)
     */
    public function setIdpropiedadvalor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpropiedadvalor !== $v) {
            $this->idpropiedadvalor = $v;
            $this->modifiedColumns[] = PropiedadvalorPeer::IDPROPIEDADVALOR;
        }


        return $this;
    } // setIdpropiedadvalor()

    /**
     * Set the value of [idpropiedad] column.
     *
     * @param  int $v new value
     * @return Propiedadvalor The current object (for fluent API support)
     */
    public function setIdpropiedad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpropiedad !== $v) {
            $this->idpropiedad = $v;
            $this->modifiedColumns[] = PropiedadvalorPeer::IDPROPIEDAD;
        }

        if ($this->aPropiedad !== null && $this->aPropiedad->getIdpropiedad() !== $v) {
            $this->aPropiedad = null;
        }


        return $this;
    } // setIdpropiedad()

    /**
     * Set the value of [idarticulo] column.
     *
     * @param  int $v new value
     * @return Propiedadvalor The current object (for fluent API support)
     */
    public function setIdarticulo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idarticulo !== $v) {
            $this->idarticulo = $v;
            $this->modifiedColumns[] = PropiedadvalorPeer::IDARTICULO;
        }

        if ($this->aArticulo !== null && $this->aArticulo->getIdarticulo() !== $v) {
            $this->aArticulo = null;
        }


        return $this;
    } // setIdarticulo()

    /**
     * Set the value of [propiedadvalor_nombre] column.
     *
     * @param  string $v new value
     * @return Propiedadvalor The current object (for fluent API support)
     */
    public function setPropiedadvalorNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->propiedadvalor_nombre !== $v) {
            $this->propiedadvalor_nombre = $v;
            $this->modifiedColumns[] = PropiedadvalorPeer::PROPIEDADVALOR_NOMBRE;
        }


        return $this;
    } // setPropiedadvalorNombre()

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

            $this->idpropiedadvalor = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idpropiedad = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idarticulo = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->propiedadvalor_nombre = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 4; // 4 = PropiedadvalorPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Propiedadvalor object", $e);
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

        if ($this->aPropiedad !== null && $this->idpropiedad !== $this->aPropiedad->getIdpropiedad()) {
            $this->aPropiedad = null;
        }
        if ($this->aArticulo !== null && $this->idarticulo !== $this->aArticulo->getIdarticulo()) {
            $this->aArticulo = null;
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
            $con = Propel::getConnection(PropiedadvalorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PropiedadvalorPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aArticulo = null;
            $this->aPropiedad = null;
            $this->collArticulovariantevalors = null;

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
            $con = Propel::getConnection(PropiedadvalorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PropiedadvalorQuery::create()
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
            $con = Propel::getConnection(PropiedadvalorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PropiedadvalorPeer::addInstanceToPool($this);
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

            if ($this->aArticulo !== null) {
                if ($this->aArticulo->isModified() || $this->aArticulo->isNew()) {
                    $affectedRows += $this->aArticulo->save($con);
                }
                $this->setArticulo($this->aArticulo);
            }

            if ($this->aPropiedad !== null) {
                if ($this->aPropiedad->isModified() || $this->aPropiedad->isNew()) {
                    $affectedRows += $this->aPropiedad->save($con);
                }
                $this->setPropiedad($this->aPropiedad);
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

            if ($this->articulovariantevalorsScheduledForDeletion !== null) {
                if (!$this->articulovariantevalorsScheduledForDeletion->isEmpty()) {
                    ArticulovariantevalorQuery::create()
                        ->filterByPrimaryKeys($this->articulovariantevalorsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->articulovariantevalorsScheduledForDeletion = null;
                }
            }

            if ($this->collArticulovariantevalors !== null) {
                foreach ($this->collArticulovariantevalors as $referrerFK) {
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

        $this->modifiedColumns[] = PropiedadvalorPeer::IDPROPIEDADVALOR;
        if (null !== $this->idpropiedadvalor) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PropiedadvalorPeer::IDPROPIEDADVALOR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PropiedadvalorPeer::IDPROPIEDADVALOR)) {
            $modifiedColumns[':p' . $index++]  = '`idpropiedadvalor`';
        }
        if ($this->isColumnModified(PropiedadvalorPeer::IDPROPIEDAD)) {
            $modifiedColumns[':p' . $index++]  = '`idpropiedad`';
        }
        if ($this->isColumnModified(PropiedadvalorPeer::IDARTICULO)) {
            $modifiedColumns[':p' . $index++]  = '`idarticulo`';
        }
        if ($this->isColumnModified(PropiedadvalorPeer::PROPIEDADVALOR_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`propiedadvalor_nombre`';
        }

        $sql = sprintf(
            'INSERT INTO `propiedadvalor` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idpropiedadvalor`':
                        $stmt->bindValue($identifier, $this->idpropiedadvalor, PDO::PARAM_INT);
                        break;
                    case '`idpropiedad`':
                        $stmt->bindValue($identifier, $this->idpropiedad, PDO::PARAM_INT);
                        break;
                    case '`idarticulo`':
                        $stmt->bindValue($identifier, $this->idarticulo, PDO::PARAM_INT);
                        break;
                    case '`propiedadvalor_nombre`':
                        $stmt->bindValue($identifier, $this->propiedadvalor_nombre, PDO::PARAM_STR);
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
        $this->setIdpropiedadvalor($pk);

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

            if ($this->aArticulo !== null) {
                if (!$this->aArticulo->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aArticulo->getValidationFailures());
                }
            }

            if ($this->aPropiedad !== null) {
                if (!$this->aPropiedad->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPropiedad->getValidationFailures());
                }
            }


            if (($retval = PropiedadvalorPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collArticulovariantevalors !== null) {
                    foreach ($this->collArticulovariantevalors as $referrerFK) {
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
        $pos = PropiedadvalorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdpropiedadvalor();
                break;
            case 1:
                return $this->getIdpropiedad();
                break;
            case 2:
                return $this->getIdarticulo();
                break;
            case 3:
                return $this->getPropiedadvalorNombre();
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
        if (isset($alreadyDumpedObjects['Propiedadvalor'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Propiedadvalor'][$this->getPrimaryKey()] = true;
        $keys = PropiedadvalorPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdpropiedadvalor(),
            $keys[1] => $this->getIdpropiedad(),
            $keys[2] => $this->getIdarticulo(),
            $keys[3] => $this->getPropiedadvalorNombre(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aArticulo) {
                $result['Articulo'] = $this->aArticulo->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPropiedad) {
                $result['Propiedad'] = $this->aPropiedad->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collArticulovariantevalors) {
                $result['Articulovariantevalors'] = $this->collArticulovariantevalors->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = PropiedadvalorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdpropiedadvalor($value);
                break;
            case 1:
                $this->setIdpropiedad($value);
                break;
            case 2:
                $this->setIdarticulo($value);
                break;
            case 3:
                $this->setPropiedadvalorNombre($value);
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
        $keys = PropiedadvalorPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdpropiedadvalor($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdpropiedad($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdarticulo($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPropiedadvalorNombre($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PropiedadvalorPeer::DATABASE_NAME);

        if ($this->isColumnModified(PropiedadvalorPeer::IDPROPIEDADVALOR)) $criteria->add(PropiedadvalorPeer::IDPROPIEDADVALOR, $this->idpropiedadvalor);
        if ($this->isColumnModified(PropiedadvalorPeer::IDPROPIEDAD)) $criteria->add(PropiedadvalorPeer::IDPROPIEDAD, $this->idpropiedad);
        if ($this->isColumnModified(PropiedadvalorPeer::IDARTICULO)) $criteria->add(PropiedadvalorPeer::IDARTICULO, $this->idarticulo);
        if ($this->isColumnModified(PropiedadvalorPeer::PROPIEDADVALOR_NOMBRE)) $criteria->add(PropiedadvalorPeer::PROPIEDADVALOR_NOMBRE, $this->propiedadvalor_nombre);

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
        $criteria = new Criteria(PropiedadvalorPeer::DATABASE_NAME);
        $criteria->add(PropiedadvalorPeer::IDPROPIEDADVALOR, $this->idpropiedadvalor);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdpropiedadvalor();
    }

    /**
     * Generic method to set the primary key (idpropiedadvalor column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdpropiedadvalor($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdpropiedadvalor();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Propiedadvalor (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdpropiedad($this->getIdpropiedad());
        $copyObj->setIdarticulo($this->getIdarticulo());
        $copyObj->setPropiedadvalorNombre($this->getPropiedadvalorNombre());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getArticulovariantevalors() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addArticulovariantevalor($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdpropiedadvalor(NULL); // this is a auto-increment column, so set to default value
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
     * @return Propiedadvalor Clone of current object.
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
     * @return PropiedadvalorPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PropiedadvalorPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Articulo object.
     *
     * @param                  Articulo $v
     * @return Propiedadvalor The current object (for fluent API support)
     * @throws PropelException
     */
    public function setArticulo(Articulo $v = null)
    {
        if ($v === null) {
            $this->setIdarticulo(NULL);
        } else {
            $this->setIdarticulo($v->getIdarticulo());
        }

        $this->aArticulo = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Articulo object, it will not be re-added.
        if ($v !== null) {
            $v->addPropiedadvalor($this);
        }


        return $this;
    }


    /**
     * Get the associated Articulo object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Articulo The associated Articulo object.
     * @throws PropelException
     */
    public function getArticulo(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aArticulo === null && ($this->idarticulo !== null) && $doQuery) {
            $this->aArticulo = ArticuloQuery::create()->findPk($this->idarticulo, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aArticulo->addPropiedadvalors($this);
             */
        }

        return $this->aArticulo;
    }

    /**
     * Declares an association between this object and a Propiedad object.
     *
     * @param                  Propiedad $v
     * @return Propiedadvalor The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPropiedad(Propiedad $v = null)
    {
        if ($v === null) {
            $this->setIdpropiedad(NULL);
        } else {
            $this->setIdpropiedad($v->getIdpropiedad());
        }

        $this->aPropiedad = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Propiedad object, it will not be re-added.
        if ($v !== null) {
            $v->addPropiedadvalor($this);
        }


        return $this;
    }


    /**
     * Get the associated Propiedad object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Propiedad The associated Propiedad object.
     * @throws PropelException
     */
    public function getPropiedad(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPropiedad === null && ($this->idpropiedad !== null) && $doQuery) {
            $this->aPropiedad = PropiedadQuery::create()->findPk($this->idpropiedad, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPropiedad->addPropiedadvalors($this);
             */
        }

        return $this->aPropiedad;
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
        if ('Articulovariantevalor' == $relationName) {
            $this->initArticulovariantevalors();
        }
    }

    /**
     * Clears out the collArticulovariantevalors collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Propiedadvalor The current object (for fluent API support)
     * @see        addArticulovariantevalors()
     */
    public function clearArticulovariantevalors()
    {
        $this->collArticulovariantevalors = null; // important to set this to null since that means it is uninitialized
        $this->collArticulovariantevalorsPartial = null;

        return $this;
    }

    /**
     * reset is the collArticulovariantevalors collection loaded partially
     *
     * @return void
     */
    public function resetPartialArticulovariantevalors($v = true)
    {
        $this->collArticulovariantevalorsPartial = $v;
    }

    /**
     * Initializes the collArticulovariantevalors collection.
     *
     * By default this just sets the collArticulovariantevalors collection to an empty array (like clearcollArticulovariantevalors());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initArticulovariantevalors($overrideExisting = true)
    {
        if (null !== $this->collArticulovariantevalors && !$overrideExisting) {
            return;
        }
        $this->collArticulovariantevalors = new PropelObjectCollection();
        $this->collArticulovariantevalors->setModel('Articulovariantevalor');
    }

    /**
     * Gets an array of Articulovariantevalor objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Propiedadvalor is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Articulovariantevalor[] List of Articulovariantevalor objects
     * @throws PropelException
     */
    public function getArticulovariantevalors($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collArticulovariantevalorsPartial && !$this->isNew();
        if (null === $this->collArticulovariantevalors || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collArticulovariantevalors) {
                // return empty collection
                $this->initArticulovariantevalors();
            } else {
                $collArticulovariantevalors = ArticulovariantevalorQuery::create(null, $criteria)
                    ->filterByPropiedadvalor($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collArticulovariantevalorsPartial && count($collArticulovariantevalors)) {
                      $this->initArticulovariantevalors(false);

                      foreach ($collArticulovariantevalors as $obj) {
                        if (false == $this->collArticulovariantevalors->contains($obj)) {
                          $this->collArticulovariantevalors->append($obj);
                        }
                      }

                      $this->collArticulovariantevalorsPartial = true;
                    }

                    $collArticulovariantevalors->getInternalIterator()->rewind();

                    return $collArticulovariantevalors;
                }

                if ($partial && $this->collArticulovariantevalors) {
                    foreach ($this->collArticulovariantevalors as $obj) {
                        if ($obj->isNew()) {
                            $collArticulovariantevalors[] = $obj;
                        }
                    }
                }

                $this->collArticulovariantevalors = $collArticulovariantevalors;
                $this->collArticulovariantevalorsPartial = false;
            }
        }

        return $this->collArticulovariantevalors;
    }

    /**
     * Sets a collection of Articulovariantevalor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $articulovariantevalors A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Propiedadvalor The current object (for fluent API support)
     */
    public function setArticulovariantevalors(PropelCollection $articulovariantevalors, PropelPDO $con = null)
    {
        $articulovariantevalorsToDelete = $this->getArticulovariantevalors(new Criteria(), $con)->diff($articulovariantevalors);


        $this->articulovariantevalorsScheduledForDeletion = $articulovariantevalorsToDelete;

        foreach ($articulovariantevalorsToDelete as $articulovariantevalorRemoved) {
            $articulovariantevalorRemoved->setPropiedadvalor(null);
        }

        $this->collArticulovariantevalors = null;
        foreach ($articulovariantevalors as $articulovariantevalor) {
            $this->addArticulovariantevalor($articulovariantevalor);
        }

        $this->collArticulovariantevalors = $articulovariantevalors;
        $this->collArticulovariantevalorsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Articulovariantevalor objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Articulovariantevalor objects.
     * @throws PropelException
     */
    public function countArticulovariantevalors(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collArticulovariantevalorsPartial && !$this->isNew();
        if (null === $this->collArticulovariantevalors || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collArticulovariantevalors) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getArticulovariantevalors());
            }
            $query = ArticulovariantevalorQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPropiedadvalor($this)
                ->count($con);
        }

        return count($this->collArticulovariantevalors);
    }

    /**
     * Method called to associate a Articulovariantevalor object to this object
     * through the Articulovariantevalor foreign key attribute.
     *
     * @param    Articulovariantevalor $l Articulovariantevalor
     * @return Propiedadvalor The current object (for fluent API support)
     */
    public function addArticulovariantevalor(Articulovariantevalor $l)
    {
        if ($this->collArticulovariantevalors === null) {
            $this->initArticulovariantevalors();
            $this->collArticulovariantevalorsPartial = true;
        }

        if (!in_array($l, $this->collArticulovariantevalors->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddArticulovariantevalor($l);

            if ($this->articulovariantevalorsScheduledForDeletion and $this->articulovariantevalorsScheduledForDeletion->contains($l)) {
                $this->articulovariantevalorsScheduledForDeletion->remove($this->articulovariantevalorsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Articulovariantevalor $articulovariantevalor The articulovariantevalor object to add.
     */
    protected function doAddArticulovariantevalor($articulovariantevalor)
    {
        $this->collArticulovariantevalors[]= $articulovariantevalor;
        $articulovariantevalor->setPropiedadvalor($this);
    }

    /**
     * @param	Articulovariantevalor $articulovariantevalor The articulovariantevalor object to remove.
     * @return Propiedadvalor The current object (for fluent API support)
     */
    public function removeArticulovariantevalor($articulovariantevalor)
    {
        if ($this->getArticulovariantevalors()->contains($articulovariantevalor)) {
            $this->collArticulovariantevalors->remove($this->collArticulovariantevalors->search($articulovariantevalor));
            if (null === $this->articulovariantevalorsScheduledForDeletion) {
                $this->articulovariantevalorsScheduledForDeletion = clone $this->collArticulovariantevalors;
                $this->articulovariantevalorsScheduledForDeletion->clear();
            }
            $this->articulovariantevalorsScheduledForDeletion[]= clone $articulovariantevalor;
            $articulovariantevalor->setPropiedadvalor(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Propiedadvalor is new, it will return
     * an empty collection; or if this Propiedadvalor has previously
     * been saved, it will retrieve related Articulovariantevalors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Propiedadvalor.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Articulovariantevalor[] List of Articulovariantevalor objects
     */
    public function getArticulovariantevalorsJoinArticulo($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ArticulovariantevalorQuery::create(null, $criteria);
        $query->joinWith('Articulo', $join_behavior);

        return $this->getArticulovariantevalors($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Propiedadvalor is new, it will return
     * an empty collection; or if this Propiedadvalor has previously
     * been saved, it will retrieve related Articulovariantevalors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Propiedadvalor.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Articulovariantevalor[] List of Articulovariantevalor objects
     */
    public function getArticulovariantevalorsJoinArticulovariante($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ArticulovariantevalorQuery::create(null, $criteria);
        $query->joinWith('Articulovariante', $join_behavior);

        return $this->getArticulovariantevalors($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Propiedadvalor is new, it will return
     * an empty collection; or if this Propiedadvalor has previously
     * been saved, it will retrieve related Articulovariantevalors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Propiedadvalor.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Articulovariantevalor[] List of Articulovariantevalor objects
     */
    public function getArticulovariantevalorsJoinPropiedad($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ArticulovariantevalorQuery::create(null, $criteria);
        $query->joinWith('Propiedad', $join_behavior);

        return $this->getArticulovariantevalors($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idpropiedadvalor = null;
        $this->idpropiedad = null;
        $this->idarticulo = null;
        $this->propiedadvalor_nombre = null;
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
            if ($this->collArticulovariantevalors) {
                foreach ($this->collArticulovariantevalors as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aArticulo instanceof Persistent) {
              $this->aArticulo->clearAllReferences($deep);
            }
            if ($this->aPropiedad instanceof Persistent) {
              $this->aPropiedad->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collArticulovariantevalors instanceof PropelCollection) {
            $this->collArticulovariantevalors->clearIterator();
        }
        $this->collArticulovariantevalors = null;
        $this->aArticulo = null;
        $this->aPropiedad = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PropiedadvalorPeer::DEFAULT_STRING_FORMAT);
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
