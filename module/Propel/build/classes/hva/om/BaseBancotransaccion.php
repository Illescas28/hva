<?php


/**
 * Base class that represents a row from the 'bancotransaccion' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseBancotransaccion extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'BancotransaccionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        BancotransaccionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idbancotransaccion field.
     * @var        int
     */
    protected $idbancotransaccion;

    /**
     * The value for the idbanco field.
     * @var        int
     */
    protected $idbanco;

    /**
     * The value for the bancotransaccion_tipo field.
     * @var        string
     */
    protected $bancotransaccion_tipo;

    /**
     * The value for the bancotransaccion_referencia field.
     * @var        string
     */
    protected $bancotransaccion_referencia;

    /**
     * The value for the idtransaccion field.
     * @var        int
     */
    protected $idtransaccion;

    /**
     * The value for the bancotransaccion_cantidad field.
     * @var        string
     */
    protected $bancotransaccion_cantidad;

    /**
     * The value for the bancotransaccion_fecha field.
     * @var        string
     */
    protected $bancotransaccion_fecha;

    /**
     * The value for the bancotransaccion_nota field.
     * @var        string
     */
    protected $bancotransaccion_nota;

    /**
     * @var        Banco
     */
    protected $aBanco;

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
     * Get the [idbancotransaccion] column value.
     *
     * @return int
     */
    public function getIdbancotransaccion()
    {

        return $this->idbancotransaccion;
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
     * Get the [bancotransaccion_tipo] column value.
     *
     * @return string
     */
    public function getBancotransaccionTipo()
    {

        return $this->bancotransaccion_tipo;
    }

    /**
     * Get the [bancotransaccion_referencia] column value.
     *
     * @return string
     */
    public function getBancotransaccionReferencia()
    {

        return $this->bancotransaccion_referencia;
    }

    /**
     * Get the [idtransaccion] column value.
     *
     * @return int
     */
    public function getIdtransaccion()
    {

        return $this->idtransaccion;
    }

    /**
     * Get the [bancotransaccion_cantidad] column value.
     *
     * @return string
     */
    public function getBancotransaccionCantidad()
    {

        return $this->bancotransaccion_cantidad;
    }

    /**
     * Get the [optionally formatted] temporal [bancotransaccion_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getBancotransaccionFecha($format = 'Y-m-d H:i:s')
    {
        if ($this->bancotransaccion_fecha === null) {
            return null;
        }

        if ($this->bancotransaccion_fecha === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->bancotransaccion_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->bancotransaccion_fecha, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [bancotransaccion_nota] column value.
     *
     * @return string
     */
    public function getBancotransaccionNota()
    {

        return $this->bancotransaccion_nota;
    }

    /**
     * Set the value of [idbancotransaccion] column.
     *
     * @param  int $v new value
     * @return Bancotransaccion The current object (for fluent API support)
     */
    public function setIdbancotransaccion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idbancotransaccion !== $v) {
            $this->idbancotransaccion = $v;
            $this->modifiedColumns[] = BancotransaccionPeer::IDBANCOTRANSACCION;
        }


        return $this;
    } // setIdbancotransaccion()

    /**
     * Set the value of [idbanco] column.
     *
     * @param  int $v new value
     * @return Bancotransaccion The current object (for fluent API support)
     */
    public function setIdbanco($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idbanco !== $v) {
            $this->idbanco = $v;
            $this->modifiedColumns[] = BancotransaccionPeer::IDBANCO;
        }

        if ($this->aBanco !== null && $this->aBanco->getIdbanco() !== $v) {
            $this->aBanco = null;
        }


        return $this;
    } // setIdbanco()

    /**
     * Set the value of [bancotransaccion_tipo] column.
     *
     * @param  string $v new value
     * @return Bancotransaccion The current object (for fluent API support)
     */
    public function setBancotransaccionTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bancotransaccion_tipo !== $v) {
            $this->bancotransaccion_tipo = $v;
            $this->modifiedColumns[] = BancotransaccionPeer::BANCOTRANSACCION_TIPO;
        }


        return $this;
    } // setBancotransaccionTipo()

    /**
     * Set the value of [bancotransaccion_referencia] column.
     *
     * @param  string $v new value
     * @return Bancotransaccion The current object (for fluent API support)
     */
    public function setBancotransaccionReferencia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bancotransaccion_referencia !== $v) {
            $this->bancotransaccion_referencia = $v;
            $this->modifiedColumns[] = BancotransaccionPeer::BANCOTRANSACCION_REFERENCIA;
        }


        return $this;
    } // setBancotransaccionReferencia()

    /**
     * Set the value of [idtransaccion] column.
     *
     * @param  int $v new value
     * @return Bancotransaccion The current object (for fluent API support)
     */
    public function setIdtransaccion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idtransaccion !== $v) {
            $this->idtransaccion = $v;
            $this->modifiedColumns[] = BancotransaccionPeer::IDTRANSACCION;
        }


        return $this;
    } // setIdtransaccion()

    /**
     * Set the value of [bancotransaccion_cantidad] column.
     *
     * @param  string $v new value
     * @return Bancotransaccion The current object (for fluent API support)
     */
    public function setBancotransaccionCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bancotransaccion_cantidad !== $v) {
            $this->bancotransaccion_cantidad = $v;
            $this->modifiedColumns[] = BancotransaccionPeer::BANCOTRANSACCION_CANTIDAD;
        }


        return $this;
    } // setBancotransaccionCantidad()

    /**
     * Sets the value of [bancotransaccion_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Bancotransaccion The current object (for fluent API support)
     */
    public function setBancotransaccionFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->bancotransaccion_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->bancotransaccion_fecha !== null && $tmpDt = new DateTime($this->bancotransaccion_fecha)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->bancotransaccion_fecha = $newDateAsString;
                $this->modifiedColumns[] = BancotransaccionPeer::BANCOTRANSACCION_FECHA;
            }
        } // if either are not null


        return $this;
    } // setBancotransaccionFecha()

    /**
     * Set the value of [bancotransaccion_nota] column.
     *
     * @param  string $v new value
     * @return Bancotransaccion The current object (for fluent API support)
     */
    public function setBancotransaccionNota($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bancotransaccion_nota !== $v) {
            $this->bancotransaccion_nota = $v;
            $this->modifiedColumns[] = BancotransaccionPeer::BANCOTRANSACCION_NOTA;
        }


        return $this;
    } // setBancotransaccionNota()

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

            $this->idbancotransaccion = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idbanco = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->bancotransaccion_tipo = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->bancotransaccion_referencia = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->idtransaccion = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->bancotransaccion_cantidad = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->bancotransaccion_fecha = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->bancotransaccion_nota = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = BancotransaccionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Bancotransaccion object", $e);
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

        if ($this->aBanco !== null && $this->idbanco !== $this->aBanco->getIdbanco()) {
            $this->aBanco = null;
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
            $con = Propel::getConnection(BancotransaccionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = BancotransaccionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aBanco = null;
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
            $con = Propel::getConnection(BancotransaccionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = BancotransaccionQuery::create()
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
            $con = Propel::getConnection(BancotransaccionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                BancotransaccionPeer::addInstanceToPool($this);
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

            if ($this->aBanco !== null) {
                if ($this->aBanco->isModified() || $this->aBanco->isNew()) {
                    $affectedRows += $this->aBanco->save($con);
                }
                $this->setBanco($this->aBanco);
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

        $this->modifiedColumns[] = BancotransaccionPeer::IDBANCOTRANSACCION;
        if (null !== $this->idbancotransaccion) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . BancotransaccionPeer::IDBANCOTRANSACCION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(BancotransaccionPeer::IDBANCOTRANSACCION)) {
            $modifiedColumns[':p' . $index++]  = '`idbancotransaccion`';
        }
        if ($this->isColumnModified(BancotransaccionPeer::IDBANCO)) {
            $modifiedColumns[':p' . $index++]  = '`idbanco`';
        }
        if ($this->isColumnModified(BancotransaccionPeer::BANCOTRANSACCION_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`bancotransaccion_tipo`';
        }
        if ($this->isColumnModified(BancotransaccionPeer::BANCOTRANSACCION_REFERENCIA)) {
            $modifiedColumns[':p' . $index++]  = '`bancotransaccion_referencia`';
        }
        if ($this->isColumnModified(BancotransaccionPeer::IDTRANSACCION)) {
            $modifiedColumns[':p' . $index++]  = '`idtransaccion`';
        }
        if ($this->isColumnModified(BancotransaccionPeer::BANCOTRANSACCION_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`bancotransaccion_cantidad`';
        }
        if ($this->isColumnModified(BancotransaccionPeer::BANCOTRANSACCION_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`bancotransaccion_fecha`';
        }
        if ($this->isColumnModified(BancotransaccionPeer::BANCOTRANSACCION_NOTA)) {
            $modifiedColumns[':p' . $index++]  = '`bancotransaccion_nota`';
        }

        $sql = sprintf(
            'INSERT INTO `bancotransaccion` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idbancotransaccion`':
                        $stmt->bindValue($identifier, $this->idbancotransaccion, PDO::PARAM_INT);
                        break;
                    case '`idbanco`':
                        $stmt->bindValue($identifier, $this->idbanco, PDO::PARAM_INT);
                        break;
                    case '`bancotransaccion_tipo`':
                        $stmt->bindValue($identifier, $this->bancotransaccion_tipo, PDO::PARAM_STR);
                        break;
                    case '`bancotransaccion_referencia`':
                        $stmt->bindValue($identifier, $this->bancotransaccion_referencia, PDO::PARAM_STR);
                        break;
                    case '`idtransaccion`':
                        $stmt->bindValue($identifier, $this->idtransaccion, PDO::PARAM_INT);
                        break;
                    case '`bancotransaccion_cantidad`':
                        $stmt->bindValue($identifier, $this->bancotransaccion_cantidad, PDO::PARAM_STR);
                        break;
                    case '`bancotransaccion_fecha`':
                        $stmt->bindValue($identifier, $this->bancotransaccion_fecha, PDO::PARAM_STR);
                        break;
                    case '`bancotransaccion_nota`':
                        $stmt->bindValue($identifier, $this->bancotransaccion_nota, PDO::PARAM_STR);
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
        $this->setIdbancotransaccion($pk);

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

            if ($this->aBanco !== null) {
                if (!$this->aBanco->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aBanco->getValidationFailures());
                }
            }


            if (($retval = BancotransaccionPeer::doValidate($this, $columns)) !== true) {
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
        $pos = BancotransaccionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdbancotransaccion();
                break;
            case 1:
                return $this->getIdbanco();
                break;
            case 2:
                return $this->getBancotransaccionTipo();
                break;
            case 3:
                return $this->getBancotransaccionReferencia();
                break;
            case 4:
                return $this->getIdtransaccion();
                break;
            case 5:
                return $this->getBancotransaccionCantidad();
                break;
            case 6:
                return $this->getBancotransaccionFecha();
                break;
            case 7:
                return $this->getBancotransaccionNota();
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
        if (isset($alreadyDumpedObjects['Bancotransaccion'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Bancotransaccion'][$this->getPrimaryKey()] = true;
        $keys = BancotransaccionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdbancotransaccion(),
            $keys[1] => $this->getIdbanco(),
            $keys[2] => $this->getBancotransaccionTipo(),
            $keys[3] => $this->getBancotransaccionReferencia(),
            $keys[4] => $this->getIdtransaccion(),
            $keys[5] => $this->getBancotransaccionCantidad(),
            $keys[6] => $this->getBancotransaccionFecha(),
            $keys[7] => $this->getBancotransaccionNota(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aBanco) {
                $result['Banco'] = $this->aBanco->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = BancotransaccionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdbancotransaccion($value);
                break;
            case 1:
                $this->setIdbanco($value);
                break;
            case 2:
                $this->setBancotransaccionTipo($value);
                break;
            case 3:
                $this->setBancotransaccionReferencia($value);
                break;
            case 4:
                $this->setIdtransaccion($value);
                break;
            case 5:
                $this->setBancotransaccionCantidad($value);
                break;
            case 6:
                $this->setBancotransaccionFecha($value);
                break;
            case 7:
                $this->setBancotransaccionNota($value);
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
        $keys = BancotransaccionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdbancotransaccion($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdbanco($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setBancotransaccionTipo($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setBancotransaccionReferencia($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdtransaccion($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setBancotransaccionCantidad($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setBancotransaccionFecha($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setBancotransaccionNota($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(BancotransaccionPeer::DATABASE_NAME);

        if ($this->isColumnModified(BancotransaccionPeer::IDBANCOTRANSACCION)) $criteria->add(BancotransaccionPeer::IDBANCOTRANSACCION, $this->idbancotransaccion);
        if ($this->isColumnModified(BancotransaccionPeer::IDBANCO)) $criteria->add(BancotransaccionPeer::IDBANCO, $this->idbanco);
        if ($this->isColumnModified(BancotransaccionPeer::BANCOTRANSACCION_TIPO)) $criteria->add(BancotransaccionPeer::BANCOTRANSACCION_TIPO, $this->bancotransaccion_tipo);
        if ($this->isColumnModified(BancotransaccionPeer::BANCOTRANSACCION_REFERENCIA)) $criteria->add(BancotransaccionPeer::BANCOTRANSACCION_REFERENCIA, $this->bancotransaccion_referencia);
        if ($this->isColumnModified(BancotransaccionPeer::IDTRANSACCION)) $criteria->add(BancotransaccionPeer::IDTRANSACCION, $this->idtransaccion);
        if ($this->isColumnModified(BancotransaccionPeer::BANCOTRANSACCION_CANTIDAD)) $criteria->add(BancotransaccionPeer::BANCOTRANSACCION_CANTIDAD, $this->bancotransaccion_cantidad);
        if ($this->isColumnModified(BancotransaccionPeer::BANCOTRANSACCION_FECHA)) $criteria->add(BancotransaccionPeer::BANCOTRANSACCION_FECHA, $this->bancotransaccion_fecha);
        if ($this->isColumnModified(BancotransaccionPeer::BANCOTRANSACCION_NOTA)) $criteria->add(BancotransaccionPeer::BANCOTRANSACCION_NOTA, $this->bancotransaccion_nota);

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
        $criteria = new Criteria(BancotransaccionPeer::DATABASE_NAME);
        $criteria->add(BancotransaccionPeer::IDBANCOTRANSACCION, $this->idbancotransaccion);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdbancotransaccion();
    }

    /**
     * Generic method to set the primary key (idbancotransaccion column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdbancotransaccion($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdbancotransaccion();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Bancotransaccion (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdbanco($this->getIdbanco());
        $copyObj->setBancotransaccionTipo($this->getBancotransaccionTipo());
        $copyObj->setBancotransaccionReferencia($this->getBancotransaccionReferencia());
        $copyObj->setIdtransaccion($this->getIdtransaccion());
        $copyObj->setBancotransaccionCantidad($this->getBancotransaccionCantidad());
        $copyObj->setBancotransaccionFecha($this->getBancotransaccionFecha());
        $copyObj->setBancotransaccionNota($this->getBancotransaccionNota());

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
            $copyObj->setIdbancotransaccion(NULL); // this is a auto-increment column, so set to default value
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
     * @return Bancotransaccion Clone of current object.
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
     * @return BancotransaccionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new BancotransaccionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Banco object.
     *
     * @param                  Banco $v
     * @return Bancotransaccion The current object (for fluent API support)
     * @throws PropelException
     */
    public function setBanco(Banco $v = null)
    {
        if ($v === null) {
            $this->setIdbanco(NULL);
        } else {
            $this->setIdbanco($v->getIdbanco());
        }

        $this->aBanco = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Banco object, it will not be re-added.
        if ($v !== null) {
            $v->addBancotransaccion($this);
        }


        return $this;
    }


    /**
     * Get the associated Banco object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Banco The associated Banco object.
     * @throws PropelException
     */
    public function getBanco(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aBanco === null && ($this->idbanco !== null) && $doQuery) {
            $this->aBanco = BancoQuery::create()->findPk($this->idbanco, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aBanco->addBancotransaccions($this);
             */
        }

        return $this->aBanco;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idbancotransaccion = null;
        $this->idbanco = null;
        $this->bancotransaccion_tipo = null;
        $this->bancotransaccion_referencia = null;
        $this->idtransaccion = null;
        $this->bancotransaccion_cantidad = null;
        $this->bancotransaccion_fecha = null;
        $this->bancotransaccion_nota = null;
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
            if ($this->aBanco instanceof Persistent) {
              $this->aBanco->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aBanco = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(BancotransaccionPeer::DEFAULT_STRING_FORMAT);
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
