<?php


/**
 * Base class that represents a row from the 'articulo' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseArticulo extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ArticuloPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ArticuloPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idarticulo field.
     * @var        int
     */
    protected $idarticulo;

    /**
     * The value for the idtipo field.
     * @var        int
     */
    protected $idtipo;

    /**
     * The value for the articulo_nombre field.
     * @var        string
     */
    protected $articulo_nombre;

    /**
     * The value for the articulo_descripcion field.
     * @var        string
     */
    protected $articulo_descripcion;

    /**
     * @var        Tipo
     */
    protected $aTipo;

    /**
     * @var        PropelObjectCollection|Articulovariante[] Collection to store aggregation of Articulovariante objects.
     */
    protected $collArticulovariantes;
    protected $collArticulovariantesPartial;

    /**
     * @var        PropelObjectCollection|Articulovariantevalor[] Collection to store aggregation of Articulovariantevalor objects.
     */
    protected $collArticulovariantevalors;
    protected $collArticulovariantevalorsPartial;

    /**
     * @var        PropelObjectCollection|Propiedad[] Collection to store aggregation of Propiedad objects.
     */
    protected $collPropiedads;
    protected $collPropiedadsPartial;

    /**
     * @var        PropelObjectCollection|Propiedadvalor[] Collection to store aggregation of Propiedadvalor objects.
     */
    protected $collPropiedadvalors;
    protected $collPropiedadvalorsPartial;

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
    protected $articulovariantesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $articulovariantevalorsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $propiedadsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $propiedadvalorsScheduledForDeletion = null;

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
     * Get the [idtipo] column value.
     *
     * @return int
     */
    public function getIdtipo()
    {

        return $this->idtipo;
    }

    /**
     * Get the [articulo_nombre] column value.
     *
     * @return string
     */
    public function getArticuloNombre()
    {

        return $this->articulo_nombre;
    }

    /**
     * Get the [articulo_descripcion] column value.
     *
     * @return string
     */
    public function getArticuloDescripcion()
    {

        return $this->articulo_descripcion;
    }

    /**
     * Set the value of [idarticulo] column.
     *
     * @param  int $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setIdarticulo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idarticulo !== $v) {
            $this->idarticulo = $v;
            $this->modifiedColumns[] = ArticuloPeer::IDARTICULO;
        }


        return $this;
    } // setIdarticulo()

    /**
     * Set the value of [idtipo] column.
     *
     * @param  int $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setIdtipo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idtipo !== $v) {
            $this->idtipo = $v;
            $this->modifiedColumns[] = ArticuloPeer::IDTIPO;
        }

        if ($this->aTipo !== null && $this->aTipo->getIdtipo() !== $v) {
            $this->aTipo = null;
        }


        return $this;
    } // setIdtipo()

    /**
     * Set the value of [articulo_nombre] column.
     *
     * @param  string $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setArticuloNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->articulo_nombre !== $v) {
            $this->articulo_nombre = $v;
            $this->modifiedColumns[] = ArticuloPeer::ARTICULO_NOMBRE;
        }


        return $this;
    } // setArticuloNombre()

    /**
     * Set the value of [articulo_descripcion] column.
     *
     * @param  string $v new value
     * @return Articulo The current object (for fluent API support)
     */
    public function setArticuloDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->articulo_descripcion !== $v) {
            $this->articulo_descripcion = $v;
            $this->modifiedColumns[] = ArticuloPeer::ARTICULO_DESCRIPCION;
        }


        return $this;
    } // setArticuloDescripcion()

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

            $this->idarticulo = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idtipo = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->articulo_nombre = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->articulo_descripcion = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 4; // 4 = ArticuloPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Articulo object", $e);
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

        if ($this->aTipo !== null && $this->idtipo !== $this->aTipo->getIdtipo()) {
            $this->aTipo = null;
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
            $con = Propel::getConnection(ArticuloPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ArticuloPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aTipo = null;
            $this->collArticulovariantes = null;

            $this->collArticulovariantevalors = null;

            $this->collPropiedads = null;

            $this->collPropiedadvalors = null;

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
            $con = Propel::getConnection(ArticuloPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ArticuloQuery::create()
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
            $con = Propel::getConnection(ArticuloPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ArticuloPeer::addInstanceToPool($this);
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

            if ($this->aTipo !== null) {
                if ($this->aTipo->isModified() || $this->aTipo->isNew()) {
                    $affectedRows += $this->aTipo->save($con);
                }
                $this->setTipo($this->aTipo);
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

            if ($this->articulovariantesScheduledForDeletion !== null) {
                if (!$this->articulovariantesScheduledForDeletion->isEmpty()) {
                    ArticulovarianteQuery::create()
                        ->filterByPrimaryKeys($this->articulovariantesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->articulovariantesScheduledForDeletion = null;
                }
            }

            if ($this->collArticulovariantes !== null) {
                foreach ($this->collArticulovariantes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

            if ($this->propiedadsScheduledForDeletion !== null) {
                if (!$this->propiedadsScheduledForDeletion->isEmpty()) {
                    PropiedadQuery::create()
                        ->filterByPrimaryKeys($this->propiedadsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->propiedadsScheduledForDeletion = null;
                }
            }

            if ($this->collPropiedads !== null) {
                foreach ($this->collPropiedads as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->propiedadvalorsScheduledForDeletion !== null) {
                if (!$this->propiedadvalorsScheduledForDeletion->isEmpty()) {
                    PropiedadvalorQuery::create()
                        ->filterByPrimaryKeys($this->propiedadvalorsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->propiedadvalorsScheduledForDeletion = null;
                }
            }

            if ($this->collPropiedadvalors !== null) {
                foreach ($this->collPropiedadvalors as $referrerFK) {
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

        $this->modifiedColumns[] = ArticuloPeer::IDARTICULO;
        if (null !== $this->idarticulo) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ArticuloPeer::IDARTICULO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ArticuloPeer::IDARTICULO)) {
            $modifiedColumns[':p' . $index++]  = '`idarticulo`';
        }
        if ($this->isColumnModified(ArticuloPeer::IDTIPO)) {
            $modifiedColumns[':p' . $index++]  = '`idtipo`';
        }
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`articulo_nombre`';
        }
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`articulo_descripcion`';
        }

        $sql = sprintf(
            'INSERT INTO `articulo` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idarticulo`':
                        $stmt->bindValue($identifier, $this->idarticulo, PDO::PARAM_INT);
                        break;
                    case '`idtipo`':
                        $stmt->bindValue($identifier, $this->idtipo, PDO::PARAM_INT);
                        break;
                    case '`articulo_nombre`':
                        $stmt->bindValue($identifier, $this->articulo_nombre, PDO::PARAM_STR);
                        break;
                    case '`articulo_descripcion`':
                        $stmt->bindValue($identifier, $this->articulo_descripcion, PDO::PARAM_STR);
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
        $this->setIdarticulo($pk);

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

            if ($this->aTipo !== null) {
                if (!$this->aTipo->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTipo->getValidationFailures());
                }
            }


            if (($retval = ArticuloPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collArticulovariantes !== null) {
                    foreach ($this->collArticulovariantes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collArticulovariantevalors !== null) {
                    foreach ($this->collArticulovariantevalors as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPropiedads !== null) {
                    foreach ($this->collPropiedads as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPropiedadvalors !== null) {
                    foreach ($this->collPropiedadvalors as $referrerFK) {
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
        $pos = ArticuloPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdarticulo();
                break;
            case 1:
                return $this->getIdtipo();
                break;
            case 2:
                return $this->getArticuloNombre();
                break;
            case 3:
                return $this->getArticuloDescripcion();
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
        if (isset($alreadyDumpedObjects['Articulo'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Articulo'][$this->getPrimaryKey()] = true;
        $keys = ArticuloPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdarticulo(),
            $keys[1] => $this->getIdtipo(),
            $keys[2] => $this->getArticuloNombre(),
            $keys[3] => $this->getArticuloDescripcion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aTipo) {
                $result['Tipo'] = $this->aTipo->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collArticulovariantes) {
                $result['Articulovariantes'] = $this->collArticulovariantes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collArticulovariantevalors) {
                $result['Articulovariantevalors'] = $this->collArticulovariantevalors->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPropiedads) {
                $result['Propiedads'] = $this->collPropiedads->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPropiedadvalors) {
                $result['Propiedadvalors'] = $this->collPropiedadvalors->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ArticuloPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdarticulo($value);
                break;
            case 1:
                $this->setIdtipo($value);
                break;
            case 2:
                $this->setArticuloNombre($value);
                break;
            case 3:
                $this->setArticuloDescripcion($value);
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
        $keys = ArticuloPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdarticulo($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdtipo($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setArticuloNombre($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setArticuloDescripcion($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ArticuloPeer::DATABASE_NAME);

        if ($this->isColumnModified(ArticuloPeer::IDARTICULO)) $criteria->add(ArticuloPeer::IDARTICULO, $this->idarticulo);
        if ($this->isColumnModified(ArticuloPeer::IDTIPO)) $criteria->add(ArticuloPeer::IDTIPO, $this->idtipo);
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_NOMBRE)) $criteria->add(ArticuloPeer::ARTICULO_NOMBRE, $this->articulo_nombre);
        if ($this->isColumnModified(ArticuloPeer::ARTICULO_DESCRIPCION)) $criteria->add(ArticuloPeer::ARTICULO_DESCRIPCION, $this->articulo_descripcion);

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
        $criteria = new Criteria(ArticuloPeer::DATABASE_NAME);
        $criteria->add(ArticuloPeer::IDARTICULO, $this->idarticulo);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdarticulo();
    }

    /**
     * Generic method to set the primary key (idarticulo column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdarticulo($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdarticulo();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Articulo (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdtipo($this->getIdtipo());
        $copyObj->setArticuloNombre($this->getArticuloNombre());
        $copyObj->setArticuloDescripcion($this->getArticuloDescripcion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getArticulovariantes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addArticulovariante($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getArticulovariantevalors() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addArticulovariantevalor($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPropiedads() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPropiedad($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPropiedadvalors() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPropiedadvalor($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdarticulo(NULL); // this is a auto-increment column, so set to default value
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
     * @return Articulo Clone of current object.
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
     * @return ArticuloPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ArticuloPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Tipo object.
     *
     * @param                  Tipo $v
     * @return Articulo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTipo(Tipo $v = null)
    {
        if ($v === null) {
            $this->setIdtipo(NULL);
        } else {
            $this->setIdtipo($v->getIdtipo());
        }

        $this->aTipo = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Tipo object, it will not be re-added.
        if ($v !== null) {
            $v->addArticulo($this);
        }


        return $this;
    }


    /**
     * Get the associated Tipo object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Tipo The associated Tipo object.
     * @throws PropelException
     */
    public function getTipo(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTipo === null && ($this->idtipo !== null) && $doQuery) {
            $this->aTipo = TipoQuery::create()->findPk($this->idtipo, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTipo->addArticulos($this);
             */
        }

        return $this->aTipo;
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
        if ('Articulovariante' == $relationName) {
            $this->initArticulovariantes();
        }
        if ('Articulovariantevalor' == $relationName) {
            $this->initArticulovariantevalors();
        }
        if ('Propiedad' == $relationName) {
            $this->initPropiedads();
        }
        if ('Propiedadvalor' == $relationName) {
            $this->initPropiedadvalors();
        }
    }

    /**
     * Clears out the collArticulovariantes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Articulo The current object (for fluent API support)
     * @see        addArticulovariantes()
     */
    public function clearArticulovariantes()
    {
        $this->collArticulovariantes = null; // important to set this to null since that means it is uninitialized
        $this->collArticulovariantesPartial = null;

        return $this;
    }

    /**
     * reset is the collArticulovariantes collection loaded partially
     *
     * @return void
     */
    public function resetPartialArticulovariantes($v = true)
    {
        $this->collArticulovariantesPartial = $v;
    }

    /**
     * Initializes the collArticulovariantes collection.
     *
     * By default this just sets the collArticulovariantes collection to an empty array (like clearcollArticulovariantes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initArticulovariantes($overrideExisting = true)
    {
        if (null !== $this->collArticulovariantes && !$overrideExisting) {
            return;
        }
        $this->collArticulovariantes = new PropelObjectCollection();
        $this->collArticulovariantes->setModel('Articulovariante');
    }

    /**
     * Gets an array of Articulovariante objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Articulo is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Articulovariante[] List of Articulovariante objects
     * @throws PropelException
     */
    public function getArticulovariantes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collArticulovariantesPartial && !$this->isNew();
        if (null === $this->collArticulovariantes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collArticulovariantes) {
                // return empty collection
                $this->initArticulovariantes();
            } else {
                $collArticulovariantes = ArticulovarianteQuery::create(null, $criteria)
                    ->filterByArticulo($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collArticulovariantesPartial && count($collArticulovariantes)) {
                      $this->initArticulovariantes(false);

                      foreach ($collArticulovariantes as $obj) {
                        if (false == $this->collArticulovariantes->contains($obj)) {
                          $this->collArticulovariantes->append($obj);
                        }
                      }

                      $this->collArticulovariantesPartial = true;
                    }

                    $collArticulovariantes->getInternalIterator()->rewind();

                    return $collArticulovariantes;
                }

                if ($partial && $this->collArticulovariantes) {
                    foreach ($this->collArticulovariantes as $obj) {
                        if ($obj->isNew()) {
                            $collArticulovariantes[] = $obj;
                        }
                    }
                }

                $this->collArticulovariantes = $collArticulovariantes;
                $this->collArticulovariantesPartial = false;
            }
        }

        return $this->collArticulovariantes;
    }

    /**
     * Sets a collection of Articulovariante objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $articulovariantes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Articulo The current object (for fluent API support)
     */
    public function setArticulovariantes(PropelCollection $articulovariantes, PropelPDO $con = null)
    {
        $articulovariantesToDelete = $this->getArticulovariantes(new Criteria(), $con)->diff($articulovariantes);


        $this->articulovariantesScheduledForDeletion = $articulovariantesToDelete;

        foreach ($articulovariantesToDelete as $articulovarianteRemoved) {
            $articulovarianteRemoved->setArticulo(null);
        }

        $this->collArticulovariantes = null;
        foreach ($articulovariantes as $articulovariante) {
            $this->addArticulovariante($articulovariante);
        }

        $this->collArticulovariantes = $articulovariantes;
        $this->collArticulovariantesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Articulovariante objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Articulovariante objects.
     * @throws PropelException
     */
    public function countArticulovariantes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collArticulovariantesPartial && !$this->isNew();
        if (null === $this->collArticulovariantes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collArticulovariantes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getArticulovariantes());
            }
            $query = ArticulovarianteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByArticulo($this)
                ->count($con);
        }

        return count($this->collArticulovariantes);
    }

    /**
     * Method called to associate a Articulovariante object to this object
     * through the Articulovariante foreign key attribute.
     *
     * @param    Articulovariante $l Articulovariante
     * @return Articulo The current object (for fluent API support)
     */
    public function addArticulovariante(Articulovariante $l)
    {
        if ($this->collArticulovariantes === null) {
            $this->initArticulovariantes();
            $this->collArticulovariantesPartial = true;
        }

        if (!in_array($l, $this->collArticulovariantes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddArticulovariante($l);

            if ($this->articulovariantesScheduledForDeletion and $this->articulovariantesScheduledForDeletion->contains($l)) {
                $this->articulovariantesScheduledForDeletion->remove($this->articulovariantesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Articulovariante $articulovariante The articulovariante object to add.
     */
    protected function doAddArticulovariante($articulovariante)
    {
        $this->collArticulovariantes[]= $articulovariante;
        $articulovariante->setArticulo($this);
    }

    /**
     * @param	Articulovariante $articulovariante The articulovariante object to remove.
     * @return Articulo The current object (for fluent API support)
     */
    public function removeArticulovariante($articulovariante)
    {
        if ($this->getArticulovariantes()->contains($articulovariante)) {
            $this->collArticulovariantes->remove($this->collArticulovariantes->search($articulovariante));
            if (null === $this->articulovariantesScheduledForDeletion) {
                $this->articulovariantesScheduledForDeletion = clone $this->collArticulovariantes;
                $this->articulovariantesScheduledForDeletion->clear();
            }
            $this->articulovariantesScheduledForDeletion[]= clone $articulovariante;
            $articulovariante->setArticulo(null);
        }

        return $this;
    }

    /**
     * Clears out the collArticulovariantevalors collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Articulo The current object (for fluent API support)
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
     * If this Articulo is new, it will return
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
                    ->filterByArticulo($this)
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
     * @return Articulo The current object (for fluent API support)
     */
    public function setArticulovariantevalors(PropelCollection $articulovariantevalors, PropelPDO $con = null)
    {
        $articulovariantevalorsToDelete = $this->getArticulovariantevalors(new Criteria(), $con)->diff($articulovariantevalors);


        $this->articulovariantevalorsScheduledForDeletion = $articulovariantevalorsToDelete;

        foreach ($articulovariantevalorsToDelete as $articulovariantevalorRemoved) {
            $articulovariantevalorRemoved->setArticulo(null);
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
                ->filterByArticulo($this)
                ->count($con);
        }

        return count($this->collArticulovariantevalors);
    }

    /**
     * Method called to associate a Articulovariantevalor object to this object
     * through the Articulovariantevalor foreign key attribute.
     *
     * @param    Articulovariantevalor $l Articulovariantevalor
     * @return Articulo The current object (for fluent API support)
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
        $articulovariantevalor->setArticulo($this);
    }

    /**
     * @param	Articulovariantevalor $articulovariantevalor The articulovariantevalor object to remove.
     * @return Articulo The current object (for fluent API support)
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
            $articulovariantevalor->setArticulo(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Articulo is new, it will return
     * an empty collection; or if this Articulo has previously
     * been saved, it will retrieve related Articulovariantevalors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Articulo.
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
     * Otherwise if this Articulo is new, it will return
     * an empty collection; or if this Articulo has previously
     * been saved, it will retrieve related Articulovariantevalors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Articulo.
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
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Articulo is new, it will return
     * an empty collection; or if this Articulo has previously
     * been saved, it will retrieve related Articulovariantevalors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Articulo.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Articulovariantevalor[] List of Articulovariantevalor objects
     */
    public function getArticulovariantevalorsJoinPropiedadvalor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ArticulovariantevalorQuery::create(null, $criteria);
        $query->joinWith('Propiedadvalor', $join_behavior);

        return $this->getArticulovariantevalors($query, $con);
    }

    /**
     * Clears out the collPropiedads collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Articulo The current object (for fluent API support)
     * @see        addPropiedads()
     */
    public function clearPropiedads()
    {
        $this->collPropiedads = null; // important to set this to null since that means it is uninitialized
        $this->collPropiedadsPartial = null;

        return $this;
    }

    /**
     * reset is the collPropiedads collection loaded partially
     *
     * @return void
     */
    public function resetPartialPropiedads($v = true)
    {
        $this->collPropiedadsPartial = $v;
    }

    /**
     * Initializes the collPropiedads collection.
     *
     * By default this just sets the collPropiedads collection to an empty array (like clearcollPropiedads());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPropiedads($overrideExisting = true)
    {
        if (null !== $this->collPropiedads && !$overrideExisting) {
            return;
        }
        $this->collPropiedads = new PropelObjectCollection();
        $this->collPropiedads->setModel('Propiedad');
    }

    /**
     * Gets an array of Propiedad objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Articulo is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Propiedad[] List of Propiedad objects
     * @throws PropelException
     */
    public function getPropiedads($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPropiedadsPartial && !$this->isNew();
        if (null === $this->collPropiedads || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPropiedads) {
                // return empty collection
                $this->initPropiedads();
            } else {
                $collPropiedads = PropiedadQuery::create(null, $criteria)
                    ->filterByArticulo($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPropiedadsPartial && count($collPropiedads)) {
                      $this->initPropiedads(false);

                      foreach ($collPropiedads as $obj) {
                        if (false == $this->collPropiedads->contains($obj)) {
                          $this->collPropiedads->append($obj);
                        }
                      }

                      $this->collPropiedadsPartial = true;
                    }

                    $collPropiedads->getInternalIterator()->rewind();

                    return $collPropiedads;
                }

                if ($partial && $this->collPropiedads) {
                    foreach ($this->collPropiedads as $obj) {
                        if ($obj->isNew()) {
                            $collPropiedads[] = $obj;
                        }
                    }
                }

                $this->collPropiedads = $collPropiedads;
                $this->collPropiedadsPartial = false;
            }
        }

        return $this->collPropiedads;
    }

    /**
     * Sets a collection of Propiedad objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $propiedads A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Articulo The current object (for fluent API support)
     */
    public function setPropiedads(PropelCollection $propiedads, PropelPDO $con = null)
    {
        $propiedadsToDelete = $this->getPropiedads(new Criteria(), $con)->diff($propiedads);


        $this->propiedadsScheduledForDeletion = $propiedadsToDelete;

        foreach ($propiedadsToDelete as $propiedadRemoved) {
            $propiedadRemoved->setArticulo(null);
        }

        $this->collPropiedads = null;
        foreach ($propiedads as $propiedad) {
            $this->addPropiedad($propiedad);
        }

        $this->collPropiedads = $propiedads;
        $this->collPropiedadsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Propiedad objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Propiedad objects.
     * @throws PropelException
     */
    public function countPropiedads(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPropiedadsPartial && !$this->isNew();
        if (null === $this->collPropiedads || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPropiedads) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPropiedads());
            }
            $query = PropiedadQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByArticulo($this)
                ->count($con);
        }

        return count($this->collPropiedads);
    }

    /**
     * Method called to associate a Propiedad object to this object
     * through the Propiedad foreign key attribute.
     *
     * @param    Propiedad $l Propiedad
     * @return Articulo The current object (for fluent API support)
     */
    public function addPropiedad(Propiedad $l)
    {
        if ($this->collPropiedads === null) {
            $this->initPropiedads();
            $this->collPropiedadsPartial = true;
        }

        if (!in_array($l, $this->collPropiedads->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPropiedad($l);

            if ($this->propiedadsScheduledForDeletion and $this->propiedadsScheduledForDeletion->contains($l)) {
                $this->propiedadsScheduledForDeletion->remove($this->propiedadsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Propiedad $propiedad The propiedad object to add.
     */
    protected function doAddPropiedad($propiedad)
    {
        $this->collPropiedads[]= $propiedad;
        $propiedad->setArticulo($this);
    }

    /**
     * @param	Propiedad $propiedad The propiedad object to remove.
     * @return Articulo The current object (for fluent API support)
     */
    public function removePropiedad($propiedad)
    {
        if ($this->getPropiedads()->contains($propiedad)) {
            $this->collPropiedads->remove($this->collPropiedads->search($propiedad));
            if (null === $this->propiedadsScheduledForDeletion) {
                $this->propiedadsScheduledForDeletion = clone $this->collPropiedads;
                $this->propiedadsScheduledForDeletion->clear();
            }
            $this->propiedadsScheduledForDeletion[]= clone $propiedad;
            $propiedad->setArticulo(null);
        }

        return $this;
    }

    /**
     * Clears out the collPropiedadvalors collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Articulo The current object (for fluent API support)
     * @see        addPropiedadvalors()
     */
    public function clearPropiedadvalors()
    {
        $this->collPropiedadvalors = null; // important to set this to null since that means it is uninitialized
        $this->collPropiedadvalorsPartial = null;

        return $this;
    }

    /**
     * reset is the collPropiedadvalors collection loaded partially
     *
     * @return void
     */
    public function resetPartialPropiedadvalors($v = true)
    {
        $this->collPropiedadvalorsPartial = $v;
    }

    /**
     * Initializes the collPropiedadvalors collection.
     *
     * By default this just sets the collPropiedadvalors collection to an empty array (like clearcollPropiedadvalors());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPropiedadvalors($overrideExisting = true)
    {
        if (null !== $this->collPropiedadvalors && !$overrideExisting) {
            return;
        }
        $this->collPropiedadvalors = new PropelObjectCollection();
        $this->collPropiedadvalors->setModel('Propiedadvalor');
    }

    /**
     * Gets an array of Propiedadvalor objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Articulo is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Propiedadvalor[] List of Propiedadvalor objects
     * @throws PropelException
     */
    public function getPropiedadvalors($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPropiedadvalorsPartial && !$this->isNew();
        if (null === $this->collPropiedadvalors || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPropiedadvalors) {
                // return empty collection
                $this->initPropiedadvalors();
            } else {
                $collPropiedadvalors = PropiedadvalorQuery::create(null, $criteria)
                    ->filterByArticulo($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPropiedadvalorsPartial && count($collPropiedadvalors)) {
                      $this->initPropiedadvalors(false);

                      foreach ($collPropiedadvalors as $obj) {
                        if (false == $this->collPropiedadvalors->contains($obj)) {
                          $this->collPropiedadvalors->append($obj);
                        }
                      }

                      $this->collPropiedadvalorsPartial = true;
                    }

                    $collPropiedadvalors->getInternalIterator()->rewind();

                    return $collPropiedadvalors;
                }

                if ($partial && $this->collPropiedadvalors) {
                    foreach ($this->collPropiedadvalors as $obj) {
                        if ($obj->isNew()) {
                            $collPropiedadvalors[] = $obj;
                        }
                    }
                }

                $this->collPropiedadvalors = $collPropiedadvalors;
                $this->collPropiedadvalorsPartial = false;
            }
        }

        return $this->collPropiedadvalors;
    }

    /**
     * Sets a collection of Propiedadvalor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $propiedadvalors A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Articulo The current object (for fluent API support)
     */
    public function setPropiedadvalors(PropelCollection $propiedadvalors, PropelPDO $con = null)
    {
        $propiedadvalorsToDelete = $this->getPropiedadvalors(new Criteria(), $con)->diff($propiedadvalors);


        $this->propiedadvalorsScheduledForDeletion = $propiedadvalorsToDelete;

        foreach ($propiedadvalorsToDelete as $propiedadvalorRemoved) {
            $propiedadvalorRemoved->setArticulo(null);
        }

        $this->collPropiedadvalors = null;
        foreach ($propiedadvalors as $propiedadvalor) {
            $this->addPropiedadvalor($propiedadvalor);
        }

        $this->collPropiedadvalors = $propiedadvalors;
        $this->collPropiedadvalorsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Propiedadvalor objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Propiedadvalor objects.
     * @throws PropelException
     */
    public function countPropiedadvalors(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPropiedadvalorsPartial && !$this->isNew();
        if (null === $this->collPropiedadvalors || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPropiedadvalors) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPropiedadvalors());
            }
            $query = PropiedadvalorQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByArticulo($this)
                ->count($con);
        }

        return count($this->collPropiedadvalors);
    }

    /**
     * Method called to associate a Propiedadvalor object to this object
     * through the Propiedadvalor foreign key attribute.
     *
     * @param    Propiedadvalor $l Propiedadvalor
     * @return Articulo The current object (for fluent API support)
     */
    public function addPropiedadvalor(Propiedadvalor $l)
    {
        if ($this->collPropiedadvalors === null) {
            $this->initPropiedadvalors();
            $this->collPropiedadvalorsPartial = true;
        }

        if (!in_array($l, $this->collPropiedadvalors->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPropiedadvalor($l);

            if ($this->propiedadvalorsScheduledForDeletion and $this->propiedadvalorsScheduledForDeletion->contains($l)) {
                $this->propiedadvalorsScheduledForDeletion->remove($this->propiedadvalorsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Propiedadvalor $propiedadvalor The propiedadvalor object to add.
     */
    protected function doAddPropiedadvalor($propiedadvalor)
    {
        $this->collPropiedadvalors[]= $propiedadvalor;
        $propiedadvalor->setArticulo($this);
    }

    /**
     * @param	Propiedadvalor $propiedadvalor The propiedadvalor object to remove.
     * @return Articulo The current object (for fluent API support)
     */
    public function removePropiedadvalor($propiedadvalor)
    {
        if ($this->getPropiedadvalors()->contains($propiedadvalor)) {
            $this->collPropiedadvalors->remove($this->collPropiedadvalors->search($propiedadvalor));
            if (null === $this->propiedadvalorsScheduledForDeletion) {
                $this->propiedadvalorsScheduledForDeletion = clone $this->collPropiedadvalors;
                $this->propiedadvalorsScheduledForDeletion->clear();
            }
            $this->propiedadvalorsScheduledForDeletion[]= clone $propiedadvalor;
            $propiedadvalor->setArticulo(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Articulo is new, it will return
     * an empty collection; or if this Articulo has previously
     * been saved, it will retrieve related Propiedadvalors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Articulo.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Propiedadvalor[] List of Propiedadvalor objects
     */
    public function getPropiedadvalorsJoinPropiedad($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PropiedadvalorQuery::create(null, $criteria);
        $query->joinWith('Propiedad', $join_behavior);

        return $this->getPropiedadvalors($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idarticulo = null;
        $this->idtipo = null;
        $this->articulo_nombre = null;
        $this->articulo_descripcion = null;
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
            if ($this->collArticulovariantes) {
                foreach ($this->collArticulovariantes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collArticulovariantevalors) {
                foreach ($this->collArticulovariantevalors as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPropiedads) {
                foreach ($this->collPropiedads as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPropiedadvalors) {
                foreach ($this->collPropiedadvalors as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aTipo instanceof Persistent) {
              $this->aTipo->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collArticulovariantes instanceof PropelCollection) {
            $this->collArticulovariantes->clearIterator();
        }
        $this->collArticulovariantes = null;
        if ($this->collArticulovariantevalors instanceof PropelCollection) {
            $this->collArticulovariantevalors->clearIterator();
        }
        $this->collArticulovariantevalors = null;
        if ($this->collPropiedads instanceof PropelCollection) {
            $this->collPropiedads->clearIterator();
        }
        $this->collPropiedads = null;
        if ($this->collPropiedadvalors instanceof PropelCollection) {
            $this->collPropiedadvalors->clearIterator();
        }
        $this->collPropiedadvalors = null;
        $this->aTipo = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ArticuloPeer::DEFAULT_STRING_FORMAT);
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
