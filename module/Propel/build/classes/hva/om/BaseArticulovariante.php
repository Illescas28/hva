<?php


/**
 * Base class that represents a row from the 'articulovariante' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseArticulovariante extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ArticulovariantePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ArticulovariantePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idarticulovariante field.
     * @var        int
     */
    protected $idarticulovariante;

    /**
     * The value for the idarticulo field.
     * @var        int
     */
    protected $idarticulo;

    /**
     * The value for the articulovariante_codigobarras field.
     * @var        string
     */
    protected $articulovariante_codigobarras;

    /**
     * The value for the articulovariante_costo field.
     * @var        string
     */
    protected $articulovariante_costo;

    /**
     * The value for the articulovariante_precio field.
     * @var        string
     */
    protected $articulovariante_precio;

    /**
     * The value for the articulovariante_iva field.
     * @var        string
     */
    protected $articulovariante_iva;

    /**
     * The value for the articulovariante_imagen field.
     * @var        string
     */
    protected $articulovariante_imagen;

    /**
     * @var        Articulo
     */
    protected $aArticulo;

    /**
     * @var        PropelObjectCollection|Articulovariantereorden[] Collection to store aggregation of Articulovariantereorden objects.
     */
    protected $collArticulovariantereordens;
    protected $collArticulovariantereordensPartial;

    /**
     * @var        PropelObjectCollection|Articulovariantevalor[] Collection to store aggregation of Articulovariantevalor objects.
     */
    protected $collArticulovariantevalors;
    protected $collArticulovariantevalorsPartial;

    /**
     * @var        PropelObjectCollection|Ordencompradetalle[] Collection to store aggregation of Ordencompradetalle objects.
     */
    protected $collOrdencompradetalles;
    protected $collOrdencompradetallesPartial;

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
    protected $articulovariantevalorsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ordencompradetallesScheduledForDeletion = null;

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
     * Get the [idarticulo] column value.
     *
     * @return int
     */
    public function getIdarticulo()
    {

        return $this->idarticulo;
    }

    /**
     * Get the [articulovariante_codigobarras] column value.
     *
     * @return string
     */
    public function getArticulovarianteCodigobarras()
    {

        return $this->articulovariante_codigobarras;
    }

    /**
     * Get the [articulovariante_costo] column value.
     *
     * @return string
     */
    public function getArticulovarianteCosto()
    {

        return $this->articulovariante_costo;
    }

    /**
     * Get the [articulovariante_precio] column value.
     *
     * @return string
     */
    public function getArticulovariantePrecio()
    {

        return $this->articulovariante_precio;
    }

    /**
     * Get the [articulovariante_iva] column value.
     *
     * @return string
     */
    public function getArticulovarianteIva()
    {

        return $this->articulovariante_iva;
    }

    /**
     * Get the [articulovariante_imagen] column value.
     *
     * @return string
     */
    public function getArticulovarianteImagen()
    {

        return $this->articulovariante_imagen;
    }

    /**
     * Set the value of [idarticulovariante] column.
     *
     * @param  int $v new value
     * @return Articulovariante The current object (for fluent API support)
     */
    public function setIdarticulovariante($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idarticulovariante !== $v) {
            $this->idarticulovariante = $v;
            $this->modifiedColumns[] = ArticulovariantePeer::IDARTICULOVARIANTE;
        }


        return $this;
    } // setIdarticulovariante()

    /**
     * Set the value of [idarticulo] column.
     *
     * @param  int $v new value
     * @return Articulovariante The current object (for fluent API support)
     */
    public function setIdarticulo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idarticulo !== $v) {
            $this->idarticulo = $v;
            $this->modifiedColumns[] = ArticulovariantePeer::IDARTICULO;
        }

        if ($this->aArticulo !== null && $this->aArticulo->getIdarticulo() !== $v) {
            $this->aArticulo = null;
        }


        return $this;
    } // setIdarticulo()

    /**
     * Set the value of [articulovariante_codigobarras] column.
     *
     * @param  string $v new value
     * @return Articulovariante The current object (for fluent API support)
     */
    public function setArticulovarianteCodigobarras($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->articulovariante_codigobarras !== $v) {
            $this->articulovariante_codigobarras = $v;
            $this->modifiedColumns[] = ArticulovariantePeer::ARTICULOVARIANTE_CODIGOBARRAS;
        }


        return $this;
    } // setArticulovarianteCodigobarras()

    /**
     * Set the value of [articulovariante_costo] column.
     *
     * @param  string $v new value
     * @return Articulovariante The current object (for fluent API support)
     */
    public function setArticulovarianteCosto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->articulovariante_costo !== $v) {
            $this->articulovariante_costo = $v;
            $this->modifiedColumns[] = ArticulovariantePeer::ARTICULOVARIANTE_COSTO;
        }


        return $this;
    } // setArticulovarianteCosto()

    /**
     * Set the value of [articulovariante_precio] column.
     *
     * @param  string $v new value
     * @return Articulovariante The current object (for fluent API support)
     */
    public function setArticulovariantePrecio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->articulovariante_precio !== $v) {
            $this->articulovariante_precio = $v;
            $this->modifiedColumns[] = ArticulovariantePeer::ARTICULOVARIANTE_PRECIO;
        }


        return $this;
    } // setArticulovariantePrecio()

    /**
     * Set the value of [articulovariante_iva] column.
     *
     * @param  string $v new value
     * @return Articulovariante The current object (for fluent API support)
     */
    public function setArticulovarianteIva($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->articulovariante_iva !== $v) {
            $this->articulovariante_iva = $v;
            $this->modifiedColumns[] = ArticulovariantePeer::ARTICULOVARIANTE_IVA;
        }


        return $this;
    } // setArticulovarianteIva()

    /**
     * Set the value of [articulovariante_imagen] column.
     *
     * @param  string $v new value
     * @return Articulovariante The current object (for fluent API support)
     */
    public function setArticulovarianteImagen($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->articulovariante_imagen !== $v) {
            $this->articulovariante_imagen = $v;
            $this->modifiedColumns[] = ArticulovariantePeer::ARTICULOVARIANTE_IMAGEN;
        }


        return $this;
    } // setArticulovarianteImagen()

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

            $this->idarticulovariante = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idarticulo = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->articulovariante_codigobarras = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->articulovariante_costo = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->articulovariante_precio = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->articulovariante_iva = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->articulovariante_imagen = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = ArticulovariantePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Articulovariante object", $e);
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
            $con = Propel::getConnection(ArticulovariantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ArticulovariantePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aArticulo = null;
            $this->collArticulovariantereordens = null;

            $this->collArticulovariantevalors = null;

            $this->collOrdencompradetalles = null;

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
            $con = Propel::getConnection(ArticulovariantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ArticulovarianteQuery::create()
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
            $con = Propel::getConnection(ArticulovariantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ArticulovariantePeer::addInstanceToPool($this);
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

            if ($this->ordencompradetallesScheduledForDeletion !== null) {
                if (!$this->ordencompradetallesScheduledForDeletion->isEmpty()) {
                    OrdencompradetalleQuery::create()
                        ->filterByPrimaryKeys($this->ordencompradetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ordencompradetallesScheduledForDeletion = null;
                }
            }

            if ($this->collOrdencompradetalles !== null) {
                foreach ($this->collOrdencompradetalles as $referrerFK) {
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

        $this->modifiedColumns[] = ArticulovariantePeer::IDARTICULOVARIANTE;
        if (null !== $this->idarticulovariante) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ArticulovariantePeer::IDARTICULOVARIANTE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ArticulovariantePeer::IDARTICULOVARIANTE)) {
            $modifiedColumns[':p' . $index++]  = '`idarticulovariante`';
        }
        if ($this->isColumnModified(ArticulovariantePeer::IDARTICULO)) {
            $modifiedColumns[':p' . $index++]  = '`idarticulo`';
        }
        if ($this->isColumnModified(ArticulovariantePeer::ARTICULOVARIANTE_CODIGOBARRAS)) {
            $modifiedColumns[':p' . $index++]  = '`articulovariante_codigobarras`';
        }
        if ($this->isColumnModified(ArticulovariantePeer::ARTICULOVARIANTE_COSTO)) {
            $modifiedColumns[':p' . $index++]  = '`articulovariante_costo`';
        }
        if ($this->isColumnModified(ArticulovariantePeer::ARTICULOVARIANTE_PRECIO)) {
            $modifiedColumns[':p' . $index++]  = '`articulovariante_precio`';
        }
        if ($this->isColumnModified(ArticulovariantePeer::ARTICULOVARIANTE_IVA)) {
            $modifiedColumns[':p' . $index++]  = '`articulovariante_iva`';
        }
        if ($this->isColumnModified(ArticulovariantePeer::ARTICULOVARIANTE_IMAGEN)) {
            $modifiedColumns[':p' . $index++]  = '`articulovariante_imagen`';
        }

        $sql = sprintf(
            'INSERT INTO `articulovariante` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idarticulovariante`':
                        $stmt->bindValue($identifier, $this->idarticulovariante, PDO::PARAM_INT);
                        break;
                    case '`idarticulo`':
                        $stmt->bindValue($identifier, $this->idarticulo, PDO::PARAM_INT);
                        break;
                    case '`articulovariante_codigobarras`':
                        $stmt->bindValue($identifier, $this->articulovariante_codigobarras, PDO::PARAM_STR);
                        break;
                    case '`articulovariante_costo`':
                        $stmt->bindValue($identifier, $this->articulovariante_costo, PDO::PARAM_STR);
                        break;
                    case '`articulovariante_precio`':
                        $stmt->bindValue($identifier, $this->articulovariante_precio, PDO::PARAM_STR);
                        break;
                    case '`articulovariante_iva`':
                        $stmt->bindValue($identifier, $this->articulovariante_iva, PDO::PARAM_STR);
                        break;
                    case '`articulovariante_imagen`':
                        $stmt->bindValue($identifier, $this->articulovariante_imagen, PDO::PARAM_STR);
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
        $this->setIdarticulovariante($pk);

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


            if (($retval = ArticulovariantePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collArticulovariantereordens !== null) {
                    foreach ($this->collArticulovariantereordens as $referrerFK) {
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

                if ($this->collOrdencompradetalles !== null) {
                    foreach ($this->collOrdencompradetalles as $referrerFK) {
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
        $pos = ArticulovariantePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdarticulovariante();
                break;
            case 1:
                return $this->getIdarticulo();
                break;
            case 2:
                return $this->getArticulovarianteCodigobarras();
                break;
            case 3:
                return $this->getArticulovarianteCosto();
                break;
            case 4:
                return $this->getArticulovariantePrecio();
                break;
            case 5:
                return $this->getArticulovarianteIva();
                break;
            case 6:
                return $this->getArticulovarianteImagen();
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
        if (isset($alreadyDumpedObjects['Articulovariante'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Articulovariante'][$this->getPrimaryKey()] = true;
        $keys = ArticulovariantePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdarticulovariante(),
            $keys[1] => $this->getIdarticulo(),
            $keys[2] => $this->getArticulovarianteCodigobarras(),
            $keys[3] => $this->getArticulovarianteCosto(),
            $keys[4] => $this->getArticulovariantePrecio(),
            $keys[5] => $this->getArticulovarianteIva(),
            $keys[6] => $this->getArticulovarianteImagen(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aArticulo) {
                $result['Articulo'] = $this->aArticulo->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collArticulovariantereordens) {
                $result['Articulovariantereordens'] = $this->collArticulovariantereordens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collArticulovariantevalors) {
                $result['Articulovariantevalors'] = $this->collArticulovariantevalors->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOrdencompradetalles) {
                $result['Ordencompradetalles'] = $this->collOrdencompradetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ArticulovariantePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdarticulovariante($value);
                break;
            case 1:
                $this->setIdarticulo($value);
                break;
            case 2:
                $this->setArticulovarianteCodigobarras($value);
                break;
            case 3:
                $this->setArticulovarianteCosto($value);
                break;
            case 4:
                $this->setArticulovariantePrecio($value);
                break;
            case 5:
                $this->setArticulovarianteIva($value);
                break;
            case 6:
                $this->setArticulovarianteImagen($value);
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
        $keys = ArticulovariantePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdarticulovariante($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdarticulo($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setArticulovarianteCodigobarras($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setArticulovarianteCosto($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setArticulovariantePrecio($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setArticulovarianteIva($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setArticulovarianteImagen($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ArticulovariantePeer::DATABASE_NAME);

        if ($this->isColumnModified(ArticulovariantePeer::IDARTICULOVARIANTE)) $criteria->add(ArticulovariantePeer::IDARTICULOVARIANTE, $this->idarticulovariante);
        if ($this->isColumnModified(ArticulovariantePeer::IDARTICULO)) $criteria->add(ArticulovariantePeer::IDARTICULO, $this->idarticulo);
        if ($this->isColumnModified(ArticulovariantePeer::ARTICULOVARIANTE_CODIGOBARRAS)) $criteria->add(ArticulovariantePeer::ARTICULOVARIANTE_CODIGOBARRAS, $this->articulovariante_codigobarras);
        if ($this->isColumnModified(ArticulovariantePeer::ARTICULOVARIANTE_COSTO)) $criteria->add(ArticulovariantePeer::ARTICULOVARIANTE_COSTO, $this->articulovariante_costo);
        if ($this->isColumnModified(ArticulovariantePeer::ARTICULOVARIANTE_PRECIO)) $criteria->add(ArticulovariantePeer::ARTICULOVARIANTE_PRECIO, $this->articulovariante_precio);
        if ($this->isColumnModified(ArticulovariantePeer::ARTICULOVARIANTE_IVA)) $criteria->add(ArticulovariantePeer::ARTICULOVARIANTE_IVA, $this->articulovariante_iva);
        if ($this->isColumnModified(ArticulovariantePeer::ARTICULOVARIANTE_IMAGEN)) $criteria->add(ArticulovariantePeer::ARTICULOVARIANTE_IMAGEN, $this->articulovariante_imagen);

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
        $criteria = new Criteria(ArticulovariantePeer::DATABASE_NAME);
        $criteria->add(ArticulovariantePeer::IDARTICULOVARIANTE, $this->idarticulovariante);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdarticulovariante();
    }

    /**
     * Generic method to set the primary key (idarticulovariante column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdarticulovariante($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdarticulovariante();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Articulovariante (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdarticulo($this->getIdarticulo());
        $copyObj->setArticulovarianteCodigobarras($this->getArticulovarianteCodigobarras());
        $copyObj->setArticulovarianteCosto($this->getArticulovarianteCosto());
        $copyObj->setArticulovariantePrecio($this->getArticulovariantePrecio());
        $copyObj->setArticulovarianteIva($this->getArticulovarianteIva());
        $copyObj->setArticulovarianteImagen($this->getArticulovarianteImagen());

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

            foreach ($this->getArticulovariantevalors() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addArticulovariantevalor($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOrdencompradetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOrdencompradetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdarticulovariante(NULL); // this is a auto-increment column, so set to default value
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
     * @return Articulovariante Clone of current object.
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
     * @return ArticulovariantePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ArticulovariantePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Articulo object.
     *
     * @param                  Articulo $v
     * @return Articulovariante The current object (for fluent API support)
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
            $v->addArticulovariante($this);
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
                $this->aArticulo->addArticulovariantes($this);
             */
        }

        return $this->aArticulo;
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
        if ('Articulovariantevalor' == $relationName) {
            $this->initArticulovariantevalors();
        }
        if ('Ordencompradetalle' == $relationName) {
            $this->initOrdencompradetalles();
        }
    }

    /**
     * Clears out the collArticulovariantereordens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Articulovariante The current object (for fluent API support)
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
     * If this Articulovariante is new, it will return
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
                    ->filterByArticulovariante($this)
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
     * @return Articulovariante The current object (for fluent API support)
     */
    public function setArticulovariantereordens(PropelCollection $articulovariantereordens, PropelPDO $con = null)
    {
        $articulovariantereordensToDelete = $this->getArticulovariantereordens(new Criteria(), $con)->diff($articulovariantereordens);


        $this->articulovariantereordensScheduledForDeletion = $articulovariantereordensToDelete;

        foreach ($articulovariantereordensToDelete as $articulovariantereordenRemoved) {
            $articulovariantereordenRemoved->setArticulovariante(null);
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
                ->filterByArticulovariante($this)
                ->count($con);
        }

        return count($this->collArticulovariantereordens);
    }

    /**
     * Method called to associate a Articulovariantereorden object to this object
     * through the Articulovariantereorden foreign key attribute.
     *
     * @param    Articulovariantereorden $l Articulovariantereorden
     * @return Articulovariante The current object (for fluent API support)
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
        $articulovariantereorden->setArticulovariante($this);
    }

    /**
     * @param	Articulovariantereorden $articulovariantereorden The articulovariantereorden object to remove.
     * @return Articulovariante The current object (for fluent API support)
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
            $articulovariantereorden->setArticulovariante(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Articulovariante is new, it will return
     * an empty collection; or if this Articulovariante has previously
     * been saved, it will retrieve related Articulovariantereordens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Articulovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Articulovariantereorden[] List of Articulovariantereorden objects
     */
    public function getArticulovariantereordensJoinLugar($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ArticulovariantereordenQuery::create(null, $criteria);
        $query->joinWith('Lugar', $join_behavior);

        return $this->getArticulovariantereordens($query, $con);
    }

    /**
     * Clears out the collArticulovariantevalors collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Articulovariante The current object (for fluent API support)
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
     * If this Articulovariante is new, it will return
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
                    ->filterByArticulovariante($this)
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
     * @return Articulovariante The current object (for fluent API support)
     */
    public function setArticulovariantevalors(PropelCollection $articulovariantevalors, PropelPDO $con = null)
    {
        $articulovariantevalorsToDelete = $this->getArticulovariantevalors(new Criteria(), $con)->diff($articulovariantevalors);


        $this->articulovariantevalorsScheduledForDeletion = $articulovariantevalorsToDelete;

        foreach ($articulovariantevalorsToDelete as $articulovariantevalorRemoved) {
            $articulovariantevalorRemoved->setArticulovariante(null);
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
                ->filterByArticulovariante($this)
                ->count($con);
        }

        return count($this->collArticulovariantevalors);
    }

    /**
     * Method called to associate a Articulovariantevalor object to this object
     * through the Articulovariantevalor foreign key attribute.
     *
     * @param    Articulovariantevalor $l Articulovariantevalor
     * @return Articulovariante The current object (for fluent API support)
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
        $articulovariantevalor->setArticulovariante($this);
    }

    /**
     * @param	Articulovariantevalor $articulovariantevalor The articulovariantevalor object to remove.
     * @return Articulovariante The current object (for fluent API support)
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
            $articulovariantevalor->setArticulovariante(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Articulovariante is new, it will return
     * an empty collection; or if this Articulovariante has previously
     * been saved, it will retrieve related Articulovariantevalors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Articulovariante.
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
     * Otherwise if this Articulovariante is new, it will return
     * an empty collection; or if this Articulovariante has previously
     * been saved, it will retrieve related Articulovariantevalors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Articulovariante.
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
     * Otherwise if this Articulovariante is new, it will return
     * an empty collection; or if this Articulovariante has previously
     * been saved, it will retrieve related Articulovariantevalors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Articulovariante.
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
     * Clears out the collOrdencompradetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Articulovariante The current object (for fluent API support)
     * @see        addOrdencompradetalles()
     */
    public function clearOrdencompradetalles()
    {
        $this->collOrdencompradetalles = null; // important to set this to null since that means it is uninitialized
        $this->collOrdencompradetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collOrdencompradetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialOrdencompradetalles($v = true)
    {
        $this->collOrdencompradetallesPartial = $v;
    }

    /**
     * Initializes the collOrdencompradetalles collection.
     *
     * By default this just sets the collOrdencompradetalles collection to an empty array (like clearcollOrdencompradetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOrdencompradetalles($overrideExisting = true)
    {
        if (null !== $this->collOrdencompradetalles && !$overrideExisting) {
            return;
        }
        $this->collOrdencompradetalles = new PropelObjectCollection();
        $this->collOrdencompradetalles->setModel('Ordencompradetalle');
    }

    /**
     * Gets an array of Ordencompradetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Articulovariante is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Ordencompradetalle[] List of Ordencompradetalle objects
     * @throws PropelException
     */
    public function getOrdencompradetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOrdencompradetallesPartial && !$this->isNew();
        if (null === $this->collOrdencompradetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOrdencompradetalles) {
                // return empty collection
                $this->initOrdencompradetalles();
            } else {
                $collOrdencompradetalles = OrdencompradetalleQuery::create(null, $criteria)
                    ->filterByArticulovariante($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOrdencompradetallesPartial && count($collOrdencompradetalles)) {
                      $this->initOrdencompradetalles(false);

                      foreach ($collOrdencompradetalles as $obj) {
                        if (false == $this->collOrdencompradetalles->contains($obj)) {
                          $this->collOrdencompradetalles->append($obj);
                        }
                      }

                      $this->collOrdencompradetallesPartial = true;
                    }

                    $collOrdencompradetalles->getInternalIterator()->rewind();

                    return $collOrdencompradetalles;
                }

                if ($partial && $this->collOrdencompradetalles) {
                    foreach ($this->collOrdencompradetalles as $obj) {
                        if ($obj->isNew()) {
                            $collOrdencompradetalles[] = $obj;
                        }
                    }
                }

                $this->collOrdencompradetalles = $collOrdencompradetalles;
                $this->collOrdencompradetallesPartial = false;
            }
        }

        return $this->collOrdencompradetalles;
    }

    /**
     * Sets a collection of Ordencompradetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ordencompradetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Articulovariante The current object (for fluent API support)
     */
    public function setOrdencompradetalles(PropelCollection $ordencompradetalles, PropelPDO $con = null)
    {
        $ordencompradetallesToDelete = $this->getOrdencompradetalles(new Criteria(), $con)->diff($ordencompradetalles);


        $this->ordencompradetallesScheduledForDeletion = $ordencompradetallesToDelete;

        foreach ($ordencompradetallesToDelete as $ordencompradetalleRemoved) {
            $ordencompradetalleRemoved->setArticulovariante(null);
        }

        $this->collOrdencompradetalles = null;
        foreach ($ordencompradetalles as $ordencompradetalle) {
            $this->addOrdencompradetalle($ordencompradetalle);
        }

        $this->collOrdencompradetalles = $ordencompradetalles;
        $this->collOrdencompradetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Ordencompradetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Ordencompradetalle objects.
     * @throws PropelException
     */
    public function countOrdencompradetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOrdencompradetallesPartial && !$this->isNew();
        if (null === $this->collOrdencompradetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOrdencompradetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOrdencompradetalles());
            }
            $query = OrdencompradetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByArticulovariante($this)
                ->count($con);
        }

        return count($this->collOrdencompradetalles);
    }

    /**
     * Method called to associate a Ordencompradetalle object to this object
     * through the Ordencompradetalle foreign key attribute.
     *
     * @param    Ordencompradetalle $l Ordencompradetalle
     * @return Articulovariante The current object (for fluent API support)
     */
    public function addOrdencompradetalle(Ordencompradetalle $l)
    {
        if ($this->collOrdencompradetalles === null) {
            $this->initOrdencompradetalles();
            $this->collOrdencompradetallesPartial = true;
        }

        if (!in_array($l, $this->collOrdencompradetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOrdencompradetalle($l);

            if ($this->ordencompradetallesScheduledForDeletion and $this->ordencompradetallesScheduledForDeletion->contains($l)) {
                $this->ordencompradetallesScheduledForDeletion->remove($this->ordencompradetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Ordencompradetalle $ordencompradetalle The ordencompradetalle object to add.
     */
    protected function doAddOrdencompradetalle($ordencompradetalle)
    {
        $this->collOrdencompradetalles[]= $ordencompradetalle;
        $ordencompradetalle->setArticulovariante($this);
    }

    /**
     * @param	Ordencompradetalle $ordencompradetalle The ordencompradetalle object to remove.
     * @return Articulovariante The current object (for fluent API support)
     */
    public function removeOrdencompradetalle($ordencompradetalle)
    {
        if ($this->getOrdencompradetalles()->contains($ordencompradetalle)) {
            $this->collOrdencompradetalles->remove($this->collOrdencompradetalles->search($ordencompradetalle));
            if (null === $this->ordencompradetallesScheduledForDeletion) {
                $this->ordencompradetallesScheduledForDeletion = clone $this->collOrdencompradetalles;
                $this->ordencompradetallesScheduledForDeletion->clear();
            }
            $this->ordencompradetallesScheduledForDeletion[]= clone $ordencompradetalle;
            $ordencompradetalle->setArticulovariante(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Articulovariante is new, it will return
     * an empty collection; or if this Articulovariante has previously
     * been saved, it will retrieve related Ordencompradetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Articulovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordencompradetalle[] List of Ordencompradetalle objects
     */
    public function getOrdencompradetallesJoinOrdencompra($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdencompradetalleQuery::create(null, $criteria);
        $query->joinWith('Ordencompra', $join_behavior);

        return $this->getOrdencompradetalles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idarticulovariante = null;
        $this->idarticulo = null;
        $this->articulovariante_codigobarras = null;
        $this->articulovariante_costo = null;
        $this->articulovariante_precio = null;
        $this->articulovariante_iva = null;
        $this->articulovariante_imagen = null;
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
            if ($this->collArticulovariantevalors) {
                foreach ($this->collArticulovariantevalors as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOrdencompradetalles) {
                foreach ($this->collOrdencompradetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aArticulo instanceof Persistent) {
              $this->aArticulo->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collArticulovariantereordens instanceof PropelCollection) {
            $this->collArticulovariantereordens->clearIterator();
        }
        $this->collArticulovariantereordens = null;
        if ($this->collArticulovariantevalors instanceof PropelCollection) {
            $this->collArticulovariantevalors->clearIterator();
        }
        $this->collArticulovariantevalors = null;
        if ($this->collOrdencompradetalles instanceof PropelCollection) {
            $this->collOrdencompradetalles->clearIterator();
        }
        $this->collOrdencompradetalles = null;
        $this->aArticulo = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ArticulovariantePeer::DEFAULT_STRING_FORMAT);
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
