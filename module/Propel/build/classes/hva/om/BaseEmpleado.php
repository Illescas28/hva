<?php


/**
 * Base class that represents a row from the 'empleado' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseEmpleado extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EmpleadoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EmpleadoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idempleado field.
     * @var        int
     */
    protected $idempleado;

    /**
     * The value for the idrol field.
     * @var        int
     */
    protected $idrol;

    /**
     * The value for the empleado_nombre field.
     * @var        string
     */
    protected $empleado_nombre;

    /**
     * The value for the empleado_apellidopaterno field.
     * @var        string
     */
    protected $empleado_apellidopaterno;

    /**
     * The value for the empleado_apellidomaterno field.
     * @var        string
     */
    protected $empleado_apellidomaterno;

    /**
     * The value for the empleado_nombreusuario field.
     * @var        string
     */
    protected $empleado_nombreusuario;

    /**
     * The value for the empleado_password field.
     * @var        string
     */
    protected $empleado_password;

    /**
     * The value for the empleado_email field.
     * @var        string
     */
    protected $empleado_email;

    /**
     * @var        Rol
     */
    protected $aRol;

    /**
     * @var        PropelObjectCollection|Empleadofacturacion[] Collection to store aggregation of Empleadofacturacion objects.
     */
    protected $collEmpleadofacturacions;
    protected $collEmpleadofacturacionsPartial;

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
    protected $empleadofacturacionsScheduledForDeletion = null;

    /**
     * Get the [idempleado] column value.
     *
     * @return int
     */
    public function getIdempleado()
    {

        return $this->idempleado;
    }

    /**
     * Get the [idrol] column value.
     *
     * @return int
     */
    public function getIdrol()
    {

        return $this->idrol;
    }

    /**
     * Get the [empleado_nombre] column value.
     *
     * @return string
     */
    public function getEmpleadoNombre()
    {

        return $this->empleado_nombre;
    }

    /**
     * Get the [empleado_apellidopaterno] column value.
     *
     * @return string
     */
    public function getEmpleadoApellidopaterno()
    {

        return $this->empleado_apellidopaterno;
    }

    /**
     * Get the [empleado_apellidomaterno] column value.
     *
     * @return string
     */
    public function getEmpleadoApellidomaterno()
    {

        return $this->empleado_apellidomaterno;
    }

    /**
     * Get the [empleado_nombreusuario] column value.
     *
     * @return string
     */
    public function getEmpleadoNombreusuario()
    {

        return $this->empleado_nombreusuario;
    }

    /**
     * Get the [empleado_password] column value.
     *
     * @return string
     */
    public function getEmpleadoPassword()
    {

        return $this->empleado_password;
    }

    /**
     * Get the [empleado_email] column value.
     *
     * @return string
     */
    public function getEmpleadoEmail()
    {

        return $this->empleado_email;
    }

    /**
     * Set the value of [idempleado] column.
     *
     * @param  int $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setIdempleado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleado !== $v) {
            $this->idempleado = $v;
            $this->modifiedColumns[] = EmpleadoPeer::IDEMPLEADO;
        }


        return $this;
    } // setIdempleado()

    /**
     * Set the value of [idrol] column.
     *
     * @param  int $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setIdrol($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idrol !== $v) {
            $this->idrol = $v;
            $this->modifiedColumns[] = EmpleadoPeer::IDROL;
        }

        if ($this->aRol !== null && $this->aRol->getIdrol() !== $v) {
            $this->aRol = null;
        }


        return $this;
    } // setIdrol()

    /**
     * Set the value of [empleado_nombre] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_nombre !== $v) {
            $this->empleado_nombre = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_NOMBRE;
        }


        return $this;
    } // setEmpleadoNombre()

    /**
     * Set the value of [empleado_apellidopaterno] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoApellidopaterno($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_apellidopaterno !== $v) {
            $this->empleado_apellidopaterno = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_APELLIDOPATERNO;
        }


        return $this;
    } // setEmpleadoApellidopaterno()

    /**
     * Set the value of [empleado_apellidomaterno] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoApellidomaterno($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_apellidomaterno !== $v) {
            $this->empleado_apellidomaterno = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_APELLIDOMATERNO;
        }


        return $this;
    } // setEmpleadoApellidomaterno()

    /**
     * Set the value of [empleado_nombreusuario] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoNombreusuario($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_nombreusuario !== $v) {
            $this->empleado_nombreusuario = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_NOMBREUSUARIO;
        }


        return $this;
    } // setEmpleadoNombreusuario()

    /**
     * Set the value of [empleado_password] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoPassword($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_password !== $v) {
            $this->empleado_password = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_PASSWORD;
        }


        return $this;
    } // setEmpleadoPassword()

    /**
     * Set the value of [empleado_email] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_email !== $v) {
            $this->empleado_email = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_EMAIL;
        }


        return $this;
    } // setEmpleadoEmail()

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

            $this->idempleado = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idrol = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->empleado_nombre = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->empleado_apellidopaterno = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->empleado_apellidomaterno = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->empleado_nombreusuario = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->empleado_password = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->empleado_email = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = EmpleadoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Empleado object", $e);
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

        if ($this->aRol !== null && $this->idrol !== $this->aRol->getIdrol()) {
            $this->aRol = null;
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
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EmpleadoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aRol = null;
            $this->collEmpleadofacturacions = null;

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
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EmpleadoQuery::create()
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
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EmpleadoPeer::addInstanceToPool($this);
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

            if ($this->aRol !== null) {
                if ($this->aRol->isModified() || $this->aRol->isNew()) {
                    $affectedRows += $this->aRol->save($con);
                }
                $this->setRol($this->aRol);
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

            if ($this->empleadofacturacionsScheduledForDeletion !== null) {
                if (!$this->empleadofacturacionsScheduledForDeletion->isEmpty()) {
                    EmpleadofacturacionQuery::create()
                        ->filterByPrimaryKeys($this->empleadofacturacionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->empleadofacturacionsScheduledForDeletion = null;
                }
            }

            if ($this->collEmpleadofacturacions !== null) {
                foreach ($this->collEmpleadofacturacions as $referrerFK) {
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

        $this->modifiedColumns[] = EmpleadoPeer::IDEMPLEADO;
        if (null !== $this->idempleado) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EmpleadoPeer::IDEMPLEADO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EmpleadoPeer::IDEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleado`';
        }
        if ($this->isColumnModified(EmpleadoPeer::IDROL)) {
            $modifiedColumns[':p' . $index++]  = '`idrol`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_nombre`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_APELLIDOPATERNO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_apellidopaterno`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_APELLIDOMATERNO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_apellidomaterno`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NOMBREUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_nombreusuario`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_password`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_email`';
        }

        $sql = sprintf(
            'INSERT INTO `empleado` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idempleado`':
                        $stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_INT);
                        break;
                    case '`idrol`':
                        $stmt->bindValue($identifier, $this->idrol, PDO::PARAM_INT);
                        break;
                    case '`empleado_nombre`':
                        $stmt->bindValue($identifier, $this->empleado_nombre, PDO::PARAM_STR);
                        break;
                    case '`empleado_apellidopaterno`':
                        $stmt->bindValue($identifier, $this->empleado_apellidopaterno, PDO::PARAM_STR);
                        break;
                    case '`empleado_apellidomaterno`':
                        $stmt->bindValue($identifier, $this->empleado_apellidomaterno, PDO::PARAM_STR);
                        break;
                    case '`empleado_nombreusuario`':
                        $stmt->bindValue($identifier, $this->empleado_nombreusuario, PDO::PARAM_STR);
                        break;
                    case '`empleado_password`':
                        $stmt->bindValue($identifier, $this->empleado_password, PDO::PARAM_STR);
                        break;
                    case '`empleado_email`':
                        $stmt->bindValue($identifier, $this->empleado_email, PDO::PARAM_STR);
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
        $this->setIdempleado($pk);

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

            if ($this->aRol !== null) {
                if (!$this->aRol->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRol->getValidationFailures());
                }
            }


            if (($retval = EmpleadoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collEmpleadofacturacions !== null) {
                    foreach ($this->collEmpleadofacturacions as $referrerFK) {
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
        $pos = EmpleadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdempleado();
                break;
            case 1:
                return $this->getIdrol();
                break;
            case 2:
                return $this->getEmpleadoNombre();
                break;
            case 3:
                return $this->getEmpleadoApellidopaterno();
                break;
            case 4:
                return $this->getEmpleadoApellidomaterno();
                break;
            case 5:
                return $this->getEmpleadoNombreusuario();
                break;
            case 6:
                return $this->getEmpleadoPassword();
                break;
            case 7:
                return $this->getEmpleadoEmail();
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
        if (isset($alreadyDumpedObjects['Empleado'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Empleado'][$this->getPrimaryKey()] = true;
        $keys = EmpleadoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdempleado(),
            $keys[1] => $this->getIdrol(),
            $keys[2] => $this->getEmpleadoNombre(),
            $keys[3] => $this->getEmpleadoApellidopaterno(),
            $keys[4] => $this->getEmpleadoApellidomaterno(),
            $keys[5] => $this->getEmpleadoNombreusuario(),
            $keys[6] => $this->getEmpleadoPassword(),
            $keys[7] => $this->getEmpleadoEmail(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aRol) {
                $result['Rol'] = $this->aRol->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collEmpleadofacturacions) {
                $result['Empleadofacturacions'] = $this->collEmpleadofacturacions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = EmpleadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdempleado($value);
                break;
            case 1:
                $this->setIdrol($value);
                break;
            case 2:
                $this->setEmpleadoNombre($value);
                break;
            case 3:
                $this->setEmpleadoApellidopaterno($value);
                break;
            case 4:
                $this->setEmpleadoApellidomaterno($value);
                break;
            case 5:
                $this->setEmpleadoNombreusuario($value);
                break;
            case 6:
                $this->setEmpleadoPassword($value);
                break;
            case 7:
                $this->setEmpleadoEmail($value);
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
        $keys = EmpleadoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdempleado($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdrol($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEmpleadoNombre($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEmpleadoApellidopaterno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEmpleadoApellidomaterno($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEmpleadoNombreusuario($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEmpleadoPassword($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEmpleadoEmail($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EmpleadoPeer::DATABASE_NAME);

        if ($this->isColumnModified(EmpleadoPeer::IDEMPLEADO)) $criteria->add(EmpleadoPeer::IDEMPLEADO, $this->idempleado);
        if ($this->isColumnModified(EmpleadoPeer::IDROL)) $criteria->add(EmpleadoPeer::IDROL, $this->idrol);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NOMBRE)) $criteria->add(EmpleadoPeer::EMPLEADO_NOMBRE, $this->empleado_nombre);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_APELLIDOPATERNO)) $criteria->add(EmpleadoPeer::EMPLEADO_APELLIDOPATERNO, $this->empleado_apellidopaterno);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_APELLIDOMATERNO)) $criteria->add(EmpleadoPeer::EMPLEADO_APELLIDOMATERNO, $this->empleado_apellidomaterno);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NOMBREUSUARIO)) $criteria->add(EmpleadoPeer::EMPLEADO_NOMBREUSUARIO, $this->empleado_nombreusuario);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_PASSWORD)) $criteria->add(EmpleadoPeer::EMPLEADO_PASSWORD, $this->empleado_password);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_EMAIL)) $criteria->add(EmpleadoPeer::EMPLEADO_EMAIL, $this->empleado_email);

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
        $criteria = new Criteria(EmpleadoPeer::DATABASE_NAME);
        $criteria->add(EmpleadoPeer::IDEMPLEADO, $this->idempleado);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdempleado();
    }

    /**
     * Generic method to set the primary key (idempleado column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdempleado($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdempleado();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Empleado (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdrol($this->getIdrol());
        $copyObj->setEmpleadoNombre($this->getEmpleadoNombre());
        $copyObj->setEmpleadoApellidopaterno($this->getEmpleadoApellidopaterno());
        $copyObj->setEmpleadoApellidomaterno($this->getEmpleadoApellidomaterno());
        $copyObj->setEmpleadoNombreusuario($this->getEmpleadoNombreusuario());
        $copyObj->setEmpleadoPassword($this->getEmpleadoPassword());
        $copyObj->setEmpleadoEmail($this->getEmpleadoEmail());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getEmpleadofacturacions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEmpleadofacturacion($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdempleado(NULL); // this is a auto-increment column, so set to default value
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
     * @return Empleado Clone of current object.
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
     * @return EmpleadoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EmpleadoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Rol object.
     *
     * @param                  Rol $v
     * @return Empleado The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRol(Rol $v = null)
    {
        if ($v === null) {
            $this->setIdrol(NULL);
        } else {
            $this->setIdrol($v->getIdrol());
        }

        $this->aRol = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Rol object, it will not be re-added.
        if ($v !== null) {
            $v->addEmpleado($this);
        }


        return $this;
    }


    /**
     * Get the associated Rol object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Rol The associated Rol object.
     * @throws PropelException
     */
    public function getRol(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRol === null && ($this->idrol !== null) && $doQuery) {
            $this->aRol = RolQuery::create()->findPk($this->idrol, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRol->addEmpleados($this);
             */
        }

        return $this->aRol;
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
        if ('Empleadofacturacion' == $relationName) {
            $this->initEmpleadofacturacions();
        }
    }

    /**
     * Clears out the collEmpleadofacturacions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addEmpleadofacturacions()
     */
    public function clearEmpleadofacturacions()
    {
        $this->collEmpleadofacturacions = null; // important to set this to null since that means it is uninitialized
        $this->collEmpleadofacturacionsPartial = null;

        return $this;
    }

    /**
     * reset is the collEmpleadofacturacions collection loaded partially
     *
     * @return void
     */
    public function resetPartialEmpleadofacturacions($v = true)
    {
        $this->collEmpleadofacturacionsPartial = $v;
    }

    /**
     * Initializes the collEmpleadofacturacions collection.
     *
     * By default this just sets the collEmpleadofacturacions collection to an empty array (like clearcollEmpleadofacturacions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEmpleadofacturacions($overrideExisting = true)
    {
        if (null !== $this->collEmpleadofacturacions && !$overrideExisting) {
            return;
        }
        $this->collEmpleadofacturacions = new PropelObjectCollection();
        $this->collEmpleadofacturacions->setModel('Empleadofacturacion');
    }

    /**
     * Gets an array of Empleadofacturacion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Empleadofacturacion[] List of Empleadofacturacion objects
     * @throws PropelException
     */
    public function getEmpleadofacturacions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadofacturacionsPartial && !$this->isNew();
        if (null === $this->collEmpleadofacturacions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEmpleadofacturacions) {
                // return empty collection
                $this->initEmpleadofacturacions();
            } else {
                $collEmpleadofacturacions = EmpleadofacturacionQuery::create(null, $criteria)
                    ->filterByEmpleado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEmpleadofacturacionsPartial && count($collEmpleadofacturacions)) {
                      $this->initEmpleadofacturacions(false);

                      foreach ($collEmpleadofacturacions as $obj) {
                        if (false == $this->collEmpleadofacturacions->contains($obj)) {
                          $this->collEmpleadofacturacions->append($obj);
                        }
                      }

                      $this->collEmpleadofacturacionsPartial = true;
                    }

                    $collEmpleadofacturacions->getInternalIterator()->rewind();

                    return $collEmpleadofacturacions;
                }

                if ($partial && $this->collEmpleadofacturacions) {
                    foreach ($this->collEmpleadofacturacions as $obj) {
                        if ($obj->isNew()) {
                            $collEmpleadofacturacions[] = $obj;
                        }
                    }
                }

                $this->collEmpleadofacturacions = $collEmpleadofacturacions;
                $this->collEmpleadofacturacionsPartial = false;
            }
        }

        return $this->collEmpleadofacturacions;
    }

    /**
     * Sets a collection of Empleadofacturacion objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $empleadofacturacions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadofacturacions(PropelCollection $empleadofacturacions, PropelPDO $con = null)
    {
        $empleadofacturacionsToDelete = $this->getEmpleadofacturacions(new Criteria(), $con)->diff($empleadofacturacions);


        $this->empleadofacturacionsScheduledForDeletion = $empleadofacturacionsToDelete;

        foreach ($empleadofacturacionsToDelete as $empleadofacturacionRemoved) {
            $empleadofacturacionRemoved->setEmpleado(null);
        }

        $this->collEmpleadofacturacions = null;
        foreach ($empleadofacturacions as $empleadofacturacion) {
            $this->addEmpleadofacturacion($empleadofacturacion);
        }

        $this->collEmpleadofacturacions = $empleadofacturacions;
        $this->collEmpleadofacturacionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Empleadofacturacion objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Empleadofacturacion objects.
     * @throws PropelException
     */
    public function countEmpleadofacturacions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEmpleadofacturacionsPartial && !$this->isNew();
        if (null === $this->collEmpleadofacturacions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEmpleadofacturacions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEmpleadofacturacions());
            }
            $query = EmpleadofacturacionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleado($this)
                ->count($con);
        }

        return count($this->collEmpleadofacturacions);
    }

    /**
     * Method called to associate a Empleadofacturacion object to this object
     * through the Empleadofacturacion foreign key attribute.
     *
     * @param    Empleadofacturacion $l Empleadofacturacion
     * @return Empleado The current object (for fluent API support)
     */
    public function addEmpleadofacturacion(Empleadofacturacion $l)
    {
        if ($this->collEmpleadofacturacions === null) {
            $this->initEmpleadofacturacions();
            $this->collEmpleadofacturacionsPartial = true;
        }

        if (!in_array($l, $this->collEmpleadofacturacions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEmpleadofacturacion($l);

            if ($this->empleadofacturacionsScheduledForDeletion and $this->empleadofacturacionsScheduledForDeletion->contains($l)) {
                $this->empleadofacturacionsScheduledForDeletion->remove($this->empleadofacturacionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Empleadofacturacion $empleadofacturacion The empleadofacturacion object to add.
     */
    protected function doAddEmpleadofacturacion($empleadofacturacion)
    {
        $this->collEmpleadofacturacions[]= $empleadofacturacion;
        $empleadofacturacion->setEmpleado($this);
    }

    /**
     * @param	Empleadofacturacion $empleadofacturacion The empleadofacturacion object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeEmpleadofacturacion($empleadofacturacion)
    {
        if ($this->getEmpleadofacturacions()->contains($empleadofacturacion)) {
            $this->collEmpleadofacturacions->remove($this->collEmpleadofacturacions->search($empleadofacturacion));
            if (null === $this->empleadofacturacionsScheduledForDeletion) {
                $this->empleadofacturacionsScheduledForDeletion = clone $this->collEmpleadofacturacions;
                $this->empleadofacturacionsScheduledForDeletion->clear();
            }
            $this->empleadofacturacionsScheduledForDeletion[]= clone $empleadofacturacion;
            $empleadofacturacion->setEmpleado(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idempleado = null;
        $this->idrol = null;
        $this->empleado_nombre = null;
        $this->empleado_apellidopaterno = null;
        $this->empleado_apellidomaterno = null;
        $this->empleado_nombreusuario = null;
        $this->empleado_password = null;
        $this->empleado_email = null;
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
            if ($this->collEmpleadofacturacions) {
                foreach ($this->collEmpleadofacturacions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aRol instanceof Persistent) {
              $this->aRol->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collEmpleadofacturacions instanceof PropelCollection) {
            $this->collEmpleadofacturacions->clearIterator();
        }
        $this->collEmpleadofacturacions = null;
        $this->aRol = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EmpleadoPeer::DEFAULT_STRING_FORMAT);
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
