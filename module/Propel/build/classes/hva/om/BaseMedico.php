<?php


/**
 * Base class that represents a row from the 'medico' table.
 *
 *
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseMedico extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MedicoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MedicoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

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
     * The value for the medico_nombre field.
     * @var        string
     */
    protected $medico_nombre;

    /**
     * The value for the medico_apellidopaterno field.
     * @var        string
     */
    protected $medico_apellidopaterno;

    /**
     * The value for the medico_apellidomaterno field.
     * @var        string
     */
    protected $medico_apellidomaterno;

    /**
     * The value for the medico_calle field.
     * @var        string
     */
    protected $medico_calle;

    /**
     * The value for the medico_noexterior field.
     * @var        string
     */
    protected $medico_noexterior;

    /**
     * The value for the medico_nointerior field.
     * @var        string
     */
    protected $medico_nointerior;

    /**
     * The value for the medico_colonia field.
     * @var        string
     */
    protected $medico_colonia;

    /**
     * The value for the medico_codigopostal field.
     * @var        string
     */
    protected $medico_codigopostal;

    /**
     * The value for the medico_ciudad field.
     * @var        string
     */
    protected $medico_ciudad;

    /**
     * The value for the medico_estado field.
     * @var        string
     */
    protected $medico_estado;

    /**
     * The value for the medico_pais field.
     * @var        string
     */
    protected $medico_pais;

    /**
     * The value for the medico_telefono field.
     * @var        string
     */
    protected $medico_telefono;

    /**
     * The value for the medico_telefonocelular field.
     * @var        string
     */
    protected $medico_telefonocelular;

    /**
     * The value for the medico_clave field.
     * @var        string
     */
    protected $medico_clave;

    /**
     * The value for the medico_dgp field.
     * @var        string
     */
    protected $medico_dgp;

    /**
     * The value for the medico_ssa field.
     * @var        string
     */
    protected $medico_ssa;

    /**
     * The value for the medico_ae field.
     * @var        string
     */
    protected $medico_ae;

    /**
     * The value for the medico_fotografia field.
     * @var        string
     */
    protected $medico_fotografia;

    /**
     * The value for the medico_perfilcompleto field.
     * @var        boolean
     */
    protected $medico_perfilcompleto;

    /**
     * @var        Especialidad
     */
    protected $aEspecialidad;

    /**
     * @var        PropelObjectCollection|Admision[] Collection to store aggregation of Admision objects.
     */
    protected $collAdmisions;
    protected $collAdmisionsPartial;

    /**
     * @var        PropelObjectCollection|Cita[] Collection to store aggregation of Cita objects.
     */
    protected $collCitas;
    protected $collCitasPartial;

    /**
     * @var        PropelObjectCollection|Consulta[] Collection to store aggregation of Consulta objects.
     */
    protected $collConsultas;
    protected $collConsultasPartial;

    /**
     * @var        PropelObjectCollection|Medicoespecialidad[] Collection to store aggregation of Medicoespecialidad objects.
     */
    protected $collMedicoespecialidads;
    protected $collMedicoespecialidadsPartial;

    /**
     * @var        PropelObjectCollection|Medicofacturacion[] Collection to store aggregation of Medicofacturacion objects.
     */
    protected $collMedicofacturacions;
    protected $collMedicofacturacionsPartial;

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
    protected $admisionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $citasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $consultasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $medicoespecialidadsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $medicofacturacionsScheduledForDeletion = null;

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
     * Get the [medico_nombre] column value.
     *
     * @return string
     */
    public function getMedicoNombre()
    {

        return $this->medico_nombre;
    }

    /**
     * Get the [medico_apellidopaterno] column value.
     *
     * @return string
     */
    public function getMedicoApellidopaterno()
    {

        return $this->medico_apellidopaterno;
    }

    /**
     * Get the [medico_apellidomaterno] column value.
     *
     * @return string
     */
    public function getMedicoApellidomaterno()
    {

        return $this->medico_apellidomaterno;
    }

    /**
     * Get the [medico_calle] column value.
     *
     * @return string
     */
    public function getMedicoCalle()
    {

        return $this->medico_calle;
    }

    /**
     * Get the [medico_noexterior] column value.
     *
     * @return string
     */
    public function getMedicoNoexterior()
    {

        return $this->medico_noexterior;
    }

    /**
     * Get the [medico_nointerior] column value.
     *
     * @return string
     */
    public function getMedicoNointerior()
    {

        return $this->medico_nointerior;
    }

    /**
     * Get the [medico_colonia] column value.
     *
     * @return string
     */
    public function getMedicoColonia()
    {

        return $this->medico_colonia;
    }

    /**
     * Get the [medico_codigopostal] column value.
     *
     * @return string
     */
    public function getMedicoCodigopostal()
    {

        return $this->medico_codigopostal;
    }

    /**
     * Get the [medico_ciudad] column value.
     *
     * @return string
     */
    public function getMedicoCiudad()
    {

        return $this->medico_ciudad;
    }

    /**
     * Get the [medico_estado] column value.
     *
     * @return string
     */
    public function getMedicoEstado()
    {

        return $this->medico_estado;
    }

    /**
     * Get the [medico_pais] column value.
     *
     * @return string
     */
    public function getMedicoPais()
    {

        return $this->medico_pais;
    }

    /**
     * Get the [medico_telefono] column value.
     *
     * @return string
     */
    public function getMedicoTelefono()
    {

        return $this->medico_telefono;
    }

    /**
     * Get the [medico_telefonocelular] column value.
     *
     * @return string
     */
    public function getMedicoTelefonocelular()
    {

        return $this->medico_telefonocelular;
    }

    /**
     * Get the [medico_clave] column value.
     *
     * @return string
     */
    public function getMedicoClave()
    {

        return $this->medico_clave;
    }

    /**
     * Get the [medico_dgp] column value.
     *
     * @return string
     */
    public function getMedicoDgp()
    {

        return $this->medico_dgp;
    }

    /**
     * Get the [medico_ssa] column value.
     *
     * @return string
     */
    public function getMedicoSsa()
    {

        return $this->medico_ssa;
    }

    /**
     * Get the [medico_ae] column value.
     *
     * @return string
     */
    public function getMedicoAe()
    {

        return $this->medico_ae;
    }

    /**
     * Get the [medico_fotografia] column value.
     *
     * @return string
     */
    public function getMedicoFotografia()
    {

        return $this->medico_fotografia;
    }

    /**
     * Get the [medico_perfilcompleto] column value.
     *
     * @return boolean
     */
    public function getMedicoPerfilcompleto()
    {

        return $this->medico_perfilcompleto;
    }

    /**
     * Set the value of [idmedico] column.
     *
     * @param  int $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setIdmedico($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idmedico !== $v) {
            $this->idmedico = $v;
            $this->modifiedColumns[] = MedicoPeer::IDMEDICO;
        }


        return $this;
    } // setIdmedico()

    /**
     * Set the value of [idespecialidad] column.
     *
     * @param  int $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setIdespecialidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idespecialidad !== $v) {
            $this->idespecialidad = $v;
            $this->modifiedColumns[] = MedicoPeer::IDESPECIALIDAD;
        }

        if ($this->aEspecialidad !== null && $this->aEspecialidad->getIdespecialidad() !== $v) {
            $this->aEspecialidad = null;
        }


        return $this;
    } // setIdespecialidad()

    /**
     * Set the value of [medico_nombre] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_nombre !== $v) {
            $this->medico_nombre = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_NOMBRE;
        }


        return $this;
    } // setMedicoNombre()

    /**
     * Set the value of [medico_apellidopaterno] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoApellidopaterno($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_apellidopaterno !== $v) {
            $this->medico_apellidopaterno = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_APELLIDOPATERNO;
        }


        return $this;
    } // setMedicoApellidopaterno()

    /**
     * Set the value of [medico_apellidomaterno] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoApellidomaterno($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_apellidomaterno !== $v) {
            $this->medico_apellidomaterno = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_APELLIDOMATERNO;
        }


        return $this;
    } // setMedicoApellidomaterno()

    /**
     * Set the value of [medico_calle] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_calle !== $v) {
            $this->medico_calle = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_CALLE;
        }


        return $this;
    } // setMedicoCalle()

    /**
     * Set the value of [medico_noexterior] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoNoexterior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_noexterior !== $v) {
            $this->medico_noexterior = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_NOEXTERIOR;
        }


        return $this;
    } // setMedicoNoexterior()

    /**
     * Set the value of [medico_nointerior] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoNointerior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_nointerior !== $v) {
            $this->medico_nointerior = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_NOINTERIOR;
        }


        return $this;
    } // setMedicoNointerior()

    /**
     * Set the value of [medico_colonia] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_colonia !== $v) {
            $this->medico_colonia = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_COLONIA;
        }


        return $this;
    } // setMedicoColonia()

    /**
     * Set the value of [medico_codigopostal] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoCodigopostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_codigopostal !== $v) {
            $this->medico_codigopostal = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_CODIGOPOSTAL;
        }


        return $this;
    } // setMedicoCodigopostal()

    /**
     * Set the value of [medico_ciudad] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_ciudad !== $v) {
            $this->medico_ciudad = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_CIUDAD;
        }


        return $this;
    } // setMedicoCiudad()

    /**
     * Set the value of [medico_estado] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_estado !== $v) {
            $this->medico_estado = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_ESTADO;
        }


        return $this;
    } // setMedicoEstado()

    /**
     * Set the value of [medico_pais] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoPais($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_pais !== $v) {
            $this->medico_pais = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_PAIS;
        }


        return $this;
    } // setMedicoPais()

    /**
     * Set the value of [medico_telefono] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_telefono !== $v) {
            $this->medico_telefono = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_TELEFONO;
        }


        return $this;
    } // setMedicoTelefono()

    /**
     * Set the value of [medico_telefonocelular] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoTelefonocelular($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_telefonocelular !== $v) {
            $this->medico_telefonocelular = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_TELEFONOCELULAR;
        }


        return $this;
    } // setMedicoTelefonocelular()

    /**
     * Set the value of [medico_clave] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoClave($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_clave !== $v) {
            $this->medico_clave = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_CLAVE;
        }


        return $this;
    } // setMedicoClave()

    /**
     * Set the value of [medico_dgp] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoDgp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_dgp !== $v) {
            $this->medico_dgp = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_DGP;
        }


        return $this;
    } // setMedicoDgp()

    /**
     * Set the value of [medico_ssa] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoSsa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_ssa !== $v) {
            $this->medico_ssa = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_SSA;
        }


        return $this;
    } // setMedicoSsa()

    /**
     * Set the value of [medico_ae] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoAe($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_ae !== $v) {
            $this->medico_ae = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_AE;
        }


        return $this;
    } // setMedicoAe()

    /**
     * Set the value of [medico_fotografia] column.
     *
     * @param  string $v new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoFotografia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medico_fotografia !== $v) {
            $this->medico_fotografia = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_FOTOGRAFIA;
        }


        return $this;
    } // setMedicoFotografia()

    /**
     * Sets the value of the [medico_perfilcompleto] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoPerfilcompleto($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->medico_perfilcompleto !== $v) {
            $this->medico_perfilcompleto = $v;
            $this->modifiedColumns[] = MedicoPeer::MEDICO_PERFILCOMPLETO;
        }


        return $this;
    } // setMedicoPerfilcompleto()

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

            $this->idmedico = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idespecialidad = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->medico_nombre = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->medico_apellidopaterno = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->medico_apellidomaterno = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->medico_calle = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->medico_noexterior = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->medico_nointerior = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->medico_colonia = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->medico_codigopostal = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->medico_ciudad = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->medico_estado = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->medico_pais = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->medico_telefono = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->medico_telefonocelular = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->medico_clave = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->medico_dgp = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->medico_ssa = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->medico_ae = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->medico_fotografia = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->medico_perfilcompleto = ($row[$startcol + 20] !== null) ? (boolean) $row[$startcol + 20] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 21; // 21 = MedicoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Medico object", $e);
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
            $con = Propel::getConnection(MedicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MedicoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEspecialidad = null;
            $this->collAdmisions = null;

            $this->collCitas = null;

            $this->collConsultas = null;

            $this->collMedicoespecialidads = null;

            $this->collMedicofacturacions = null;

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
            $con = Propel::getConnection(MedicoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MedicoQuery::create()
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
            $con = Propel::getConnection(MedicoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MedicoPeer::addInstanceToPool($this);
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

            if ($this->admisionsScheduledForDeletion !== null) {
                if (!$this->admisionsScheduledForDeletion->isEmpty()) {
                    AdmisionQuery::create()
                        ->filterByPrimaryKeys($this->admisionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->admisionsScheduledForDeletion = null;
                }
            }

            if ($this->collAdmisions !== null) {
                foreach ($this->collAdmisions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->citasScheduledForDeletion !== null) {
                if (!$this->citasScheduledForDeletion->isEmpty()) {
                    CitaQuery::create()
                        ->filterByPrimaryKeys($this->citasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->citasScheduledForDeletion = null;
                }
            }

            if ($this->collCitas !== null) {
                foreach ($this->collCitas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->consultasScheduledForDeletion !== null) {
                if (!$this->consultasScheduledForDeletion->isEmpty()) {
                    ConsultaQuery::create()
                        ->filterByPrimaryKeys($this->consultasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->consultasScheduledForDeletion = null;
                }
            }

            if ($this->collConsultas !== null) {
                foreach ($this->collConsultas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->medicoespecialidadsScheduledForDeletion !== null) {
                if (!$this->medicoespecialidadsScheduledForDeletion->isEmpty()) {
                    MedicoespecialidadQuery::create()
                        ->filterByPrimaryKeys($this->medicoespecialidadsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->medicoespecialidadsScheduledForDeletion = null;
                }
            }

            if ($this->collMedicoespecialidads !== null) {
                foreach ($this->collMedicoespecialidads as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->medicofacturacionsScheduledForDeletion !== null) {
                if (!$this->medicofacturacionsScheduledForDeletion->isEmpty()) {
                    MedicofacturacionQuery::create()
                        ->filterByPrimaryKeys($this->medicofacturacionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->medicofacturacionsScheduledForDeletion = null;
                }
            }

            if ($this->collMedicofacturacions !== null) {
                foreach ($this->collMedicofacturacions as $referrerFK) {
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

        $this->modifiedColumns[] = MedicoPeer::IDMEDICO;
        if (null !== $this->idmedico) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . MedicoPeer::IDMEDICO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(MedicoPeer::IDMEDICO)) {
            $modifiedColumns[':p' . $index++]  = '`idmedico`';
        }
        if ($this->isColumnModified(MedicoPeer::IDESPECIALIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`idespecialidad`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`medico_nombre`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_APELLIDOPATERNO)) {
            $modifiedColumns[':p' . $index++]  = '`medico_apellidopaterno`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_APELLIDOMATERNO)) {
            $modifiedColumns[':p' . $index++]  = '`medico_apellidomaterno`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`medico_calle`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_NOEXTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`medico_noexterior`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_NOINTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`medico_nointerior`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`medico_colonia`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_CODIGOPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`medico_codigopostal`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`medico_ciudad`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`medico_estado`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_PAIS)) {
            $modifiedColumns[':p' . $index++]  = '`medico_pais`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`medico_telefono`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_TELEFONOCELULAR)) {
            $modifiedColumns[':p' . $index++]  = '`medico_telefonocelular`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_CLAVE)) {
            $modifiedColumns[':p' . $index++]  = '`medico_clave`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_DGP)) {
            $modifiedColumns[':p' . $index++]  = '`medico_dgp`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_SSA)) {
            $modifiedColumns[':p' . $index++]  = '`medico_ssa`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_AE)) {
            $modifiedColumns[':p' . $index++]  = '`medico_ae`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_FOTOGRAFIA)) {
            $modifiedColumns[':p' . $index++]  = '`medico_fotografia`';
        }
        if ($this->isColumnModified(MedicoPeer::MEDICO_PERFILCOMPLETO)) {
            $modifiedColumns[':p' . $index++]  = '`medico_perfilcompleto`';
        }

        $sql = sprintf(
            'INSERT INTO `medico` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idmedico`':
                        $stmt->bindValue($identifier, $this->idmedico, PDO::PARAM_INT);
                        break;
                    case '`idespecialidad`':
                        $stmt->bindValue($identifier, $this->idespecialidad, PDO::PARAM_INT);
                        break;
                    case '`medico_nombre`':
                        $stmt->bindValue($identifier, $this->medico_nombre, PDO::PARAM_STR);
                        break;
                    case '`medico_apellidopaterno`':
                        $stmt->bindValue($identifier, $this->medico_apellidopaterno, PDO::PARAM_STR);
                        break;
                    case '`medico_apellidomaterno`':
                        $stmt->bindValue($identifier, $this->medico_apellidomaterno, PDO::PARAM_STR);
                        break;
                    case '`medico_calle`':
                        $stmt->bindValue($identifier, $this->medico_calle, PDO::PARAM_STR);
                        break;
                    case '`medico_noexterior`':
                        $stmt->bindValue($identifier, $this->medico_noexterior, PDO::PARAM_STR);
                        break;
                    case '`medico_nointerior`':
                        $stmt->bindValue($identifier, $this->medico_nointerior, PDO::PARAM_STR);
                        break;
                    case '`medico_colonia`':
                        $stmt->bindValue($identifier, $this->medico_colonia, PDO::PARAM_STR);
                        break;
                    case '`medico_codigopostal`':
                        $stmt->bindValue($identifier, $this->medico_codigopostal, PDO::PARAM_STR);
                        break;
                    case '`medico_ciudad`':
                        $stmt->bindValue($identifier, $this->medico_ciudad, PDO::PARAM_STR);
                        break;
                    case '`medico_estado`':
                        $stmt->bindValue($identifier, $this->medico_estado, PDO::PARAM_STR);
                        break;
                    case '`medico_pais`':
                        $stmt->bindValue($identifier, $this->medico_pais, PDO::PARAM_STR);
                        break;
                    case '`medico_telefono`':
                        $stmt->bindValue($identifier, $this->medico_telefono, PDO::PARAM_STR);
                        break;
                    case '`medico_telefonocelular`':
                        $stmt->bindValue($identifier, $this->medico_telefonocelular, PDO::PARAM_STR);
                        break;
                    case '`medico_clave`':
                        $stmt->bindValue($identifier, $this->medico_clave, PDO::PARAM_STR);
                        break;
                    case '`medico_dgp`':
                        $stmt->bindValue($identifier, $this->medico_dgp, PDO::PARAM_STR);
                        break;
                    case '`medico_ssa`':
                        $stmt->bindValue($identifier, $this->medico_ssa, PDO::PARAM_STR);
                        break;
                    case '`medico_ae`':
                        $stmt->bindValue($identifier, $this->medico_ae, PDO::PARAM_STR);
                        break;
                    case '`medico_fotografia`':
                        $stmt->bindValue($identifier, $this->medico_fotografia, PDO::PARAM_STR);
                        break;
                    case '`medico_perfilcompleto`':
                        $stmt->bindValue($identifier, (int) $this->medico_perfilcompleto, PDO::PARAM_INT);
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
        $this->setIdmedico($pk);

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


            if (($retval = MedicoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAdmisions !== null) {
                    foreach ($this->collAdmisions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCitas !== null) {
                    foreach ($this->collCitas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collConsultas !== null) {
                    foreach ($this->collConsultas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collMedicoespecialidads !== null) {
                    foreach ($this->collMedicoespecialidads as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collMedicofacturacions !== null) {
                    foreach ($this->collMedicofacturacions as $referrerFK) {
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
        $pos = MedicoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdmedico();
                break;
            case 1:
                return $this->getIdespecialidad();
                break;
            case 2:
                return $this->getMedicoNombre();
                break;
            case 3:
                return $this->getMedicoApellidopaterno();
                break;
            case 4:
                return $this->getMedicoApellidomaterno();
                break;
            case 5:
                return $this->getMedicoCalle();
                break;
            case 6:
                return $this->getMedicoNoexterior();
                break;
            case 7:
                return $this->getMedicoNointerior();
                break;
            case 8:
                return $this->getMedicoColonia();
                break;
            case 9:
                return $this->getMedicoCodigopostal();
                break;
            case 10:
                return $this->getMedicoCiudad();
                break;
            case 11:
                return $this->getMedicoEstado();
                break;
            case 12:
                return $this->getMedicoPais();
                break;
            case 13:
                return $this->getMedicoTelefono();
                break;
            case 14:
                return $this->getMedicoTelefonocelular();
                break;
            case 15:
                return $this->getMedicoClave();
                break;
            case 16:
                return $this->getMedicoDgp();
                break;
            case 17:
                return $this->getMedicoSsa();
                break;
            case 18:
                return $this->getMedicoAe();
                break;
            case 19:
                return $this->getMedicoFotografia();
                break;
            case 20:
                return $this->getMedicoPerfilcompleto();
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
        if (isset($alreadyDumpedObjects['Medico'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Medico'][$this->getPrimaryKey()] = true;
        $keys = MedicoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdmedico(),
            $keys[1] => $this->getIdespecialidad(),
            $keys[2] => $this->getMedicoNombre(),
            $keys[3] => $this->getMedicoApellidopaterno(),
            $keys[4] => $this->getMedicoApellidomaterno(),
            $keys[5] => $this->getMedicoCalle(),
            $keys[6] => $this->getMedicoNoexterior(),
            $keys[7] => $this->getMedicoNointerior(),
            $keys[8] => $this->getMedicoColonia(),
            $keys[9] => $this->getMedicoCodigopostal(),
            $keys[10] => $this->getMedicoCiudad(),
            $keys[11] => $this->getMedicoEstado(),
            $keys[12] => $this->getMedicoPais(),
            $keys[13] => $this->getMedicoTelefono(),
            $keys[14] => $this->getMedicoTelefonocelular(),
            $keys[15] => $this->getMedicoClave(),
            $keys[16] => $this->getMedicoDgp(),
            $keys[17] => $this->getMedicoSsa(),
            $keys[18] => $this->getMedicoAe(),
            $keys[19] => $this->getMedicoFotografia(),
            $keys[20] => $this->getMedicoPerfilcompleto(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEspecialidad) {
                $result['Especialidad'] = $this->aEspecialidad->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collAdmisions) {
                $result['Admisions'] = $this->collAdmisions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCitas) {
                $result['Citas'] = $this->collCitas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collConsultas) {
                $result['Consultas'] = $this->collConsultas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collMedicoespecialidads) {
                $result['Medicoespecialidads'] = $this->collMedicoespecialidads->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collMedicofacturacions) {
                $result['Medicofacturacions'] = $this->collMedicofacturacions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = MedicoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdmedico($value);
                break;
            case 1:
                $this->setIdespecialidad($value);
                break;
            case 2:
                $this->setMedicoNombre($value);
                break;
            case 3:
                $this->setMedicoApellidopaterno($value);
                break;
            case 4:
                $this->setMedicoApellidomaterno($value);
                break;
            case 5:
                $this->setMedicoCalle($value);
                break;
            case 6:
                $this->setMedicoNoexterior($value);
                break;
            case 7:
                $this->setMedicoNointerior($value);
                break;
            case 8:
                $this->setMedicoColonia($value);
                break;
            case 9:
                $this->setMedicoCodigopostal($value);
                break;
            case 10:
                $this->setMedicoCiudad($value);
                break;
            case 11:
                $this->setMedicoEstado($value);
                break;
            case 12:
                $this->setMedicoPais($value);
                break;
            case 13:
                $this->setMedicoTelefono($value);
                break;
            case 14:
                $this->setMedicoTelefonocelular($value);
                break;
            case 15:
                $this->setMedicoClave($value);
                break;
            case 16:
                $this->setMedicoDgp($value);
                break;
            case 17:
                $this->setMedicoSsa($value);
                break;
            case 18:
                $this->setMedicoAe($value);
                break;
            case 19:
                $this->setMedicoFotografia($value);
                break;
            case 20:
                $this->setMedicoPerfilcompleto($value);
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
        $keys = MedicoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdmedico($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdespecialidad($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setMedicoNombre($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMedicoApellidopaterno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMedicoApellidomaterno($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMedicoCalle($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMedicoNoexterior($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMedicoNointerior($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMedicoColonia($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMedicoCodigopostal($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setMedicoCiudad($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMedicoEstado($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setMedicoPais($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setMedicoTelefono($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setMedicoTelefonocelular($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setMedicoClave($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMedicoDgp($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setMedicoSsa($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setMedicoAe($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setMedicoFotografia($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setMedicoPerfilcompleto($arr[$keys[20]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MedicoPeer::DATABASE_NAME);

        if ($this->isColumnModified(MedicoPeer::IDMEDICO)) $criteria->add(MedicoPeer::IDMEDICO, $this->idmedico);
        if ($this->isColumnModified(MedicoPeer::IDESPECIALIDAD)) $criteria->add(MedicoPeer::IDESPECIALIDAD, $this->idespecialidad);
        if ($this->isColumnModified(MedicoPeer::MEDICO_NOMBRE)) $criteria->add(MedicoPeer::MEDICO_NOMBRE, $this->medico_nombre);
        if ($this->isColumnModified(MedicoPeer::MEDICO_APELLIDOPATERNO)) $criteria->add(MedicoPeer::MEDICO_APELLIDOPATERNO, $this->medico_apellidopaterno);
        if ($this->isColumnModified(MedicoPeer::MEDICO_APELLIDOMATERNO)) $criteria->add(MedicoPeer::MEDICO_APELLIDOMATERNO, $this->medico_apellidomaterno);
        if ($this->isColumnModified(MedicoPeer::MEDICO_CALLE)) $criteria->add(MedicoPeer::MEDICO_CALLE, $this->medico_calle);
        if ($this->isColumnModified(MedicoPeer::MEDICO_NOEXTERIOR)) $criteria->add(MedicoPeer::MEDICO_NOEXTERIOR, $this->medico_noexterior);
        if ($this->isColumnModified(MedicoPeer::MEDICO_NOINTERIOR)) $criteria->add(MedicoPeer::MEDICO_NOINTERIOR, $this->medico_nointerior);
        if ($this->isColumnModified(MedicoPeer::MEDICO_COLONIA)) $criteria->add(MedicoPeer::MEDICO_COLONIA, $this->medico_colonia);
        if ($this->isColumnModified(MedicoPeer::MEDICO_CODIGOPOSTAL)) $criteria->add(MedicoPeer::MEDICO_CODIGOPOSTAL, $this->medico_codigopostal);
        if ($this->isColumnModified(MedicoPeer::MEDICO_CIUDAD)) $criteria->add(MedicoPeer::MEDICO_CIUDAD, $this->medico_ciudad);
        if ($this->isColumnModified(MedicoPeer::MEDICO_ESTADO)) $criteria->add(MedicoPeer::MEDICO_ESTADO, $this->medico_estado);
        if ($this->isColumnModified(MedicoPeer::MEDICO_PAIS)) $criteria->add(MedicoPeer::MEDICO_PAIS, $this->medico_pais);
        if ($this->isColumnModified(MedicoPeer::MEDICO_TELEFONO)) $criteria->add(MedicoPeer::MEDICO_TELEFONO, $this->medico_telefono);
        if ($this->isColumnModified(MedicoPeer::MEDICO_TELEFONOCELULAR)) $criteria->add(MedicoPeer::MEDICO_TELEFONOCELULAR, $this->medico_telefonocelular);
        if ($this->isColumnModified(MedicoPeer::MEDICO_CLAVE)) $criteria->add(MedicoPeer::MEDICO_CLAVE, $this->medico_clave);
        if ($this->isColumnModified(MedicoPeer::MEDICO_DGP)) $criteria->add(MedicoPeer::MEDICO_DGP, $this->medico_dgp);
        if ($this->isColumnModified(MedicoPeer::MEDICO_SSA)) $criteria->add(MedicoPeer::MEDICO_SSA, $this->medico_ssa);
        if ($this->isColumnModified(MedicoPeer::MEDICO_AE)) $criteria->add(MedicoPeer::MEDICO_AE, $this->medico_ae);
        if ($this->isColumnModified(MedicoPeer::MEDICO_FOTOGRAFIA)) $criteria->add(MedicoPeer::MEDICO_FOTOGRAFIA, $this->medico_fotografia);
        if ($this->isColumnModified(MedicoPeer::MEDICO_PERFILCOMPLETO)) $criteria->add(MedicoPeer::MEDICO_PERFILCOMPLETO, $this->medico_perfilcompleto);

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
        $criteria = new Criteria(MedicoPeer::DATABASE_NAME);
        $criteria->add(MedicoPeer::IDMEDICO, $this->idmedico);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdmedico();
    }

    /**
     * Generic method to set the primary key (idmedico column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdmedico($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdmedico();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Medico (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdespecialidad($this->getIdespecialidad());
        $copyObj->setMedicoNombre($this->getMedicoNombre());
        $copyObj->setMedicoApellidopaterno($this->getMedicoApellidopaterno());
        $copyObj->setMedicoApellidomaterno($this->getMedicoApellidomaterno());
        $copyObj->setMedicoCalle($this->getMedicoCalle());
        $copyObj->setMedicoNoexterior($this->getMedicoNoexterior());
        $copyObj->setMedicoNointerior($this->getMedicoNointerior());
        $copyObj->setMedicoColonia($this->getMedicoColonia());
        $copyObj->setMedicoCodigopostal($this->getMedicoCodigopostal());
        $copyObj->setMedicoCiudad($this->getMedicoCiudad());
        $copyObj->setMedicoEstado($this->getMedicoEstado());
        $copyObj->setMedicoPais($this->getMedicoPais());
        $copyObj->setMedicoTelefono($this->getMedicoTelefono());
        $copyObj->setMedicoTelefonocelular($this->getMedicoTelefonocelular());
        $copyObj->setMedicoClave($this->getMedicoClave());
        $copyObj->setMedicoDgp($this->getMedicoDgp());
        $copyObj->setMedicoSsa($this->getMedicoSsa());
        $copyObj->setMedicoAe($this->getMedicoAe());
        $copyObj->setMedicoFotografia($this->getMedicoFotografia());
        $copyObj->setMedicoPerfilcompleto($this->getMedicoPerfilcompleto());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getAdmisions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAdmision($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCitas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCita($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getConsultas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addConsulta($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getMedicoespecialidads() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addMedicoespecialidad($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getMedicofacturacions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addMedicofacturacion($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdmedico(NULL); // this is a auto-increment column, so set to default value
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
     * @return Medico Clone of current object.
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
     * @return MedicoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MedicoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Especialidad object.
     *
     * @param                  Especialidad $v
     * @return Medico The current object (for fluent API support)
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
            $v->addMedico($this);
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
                $this->aEspecialidad->addMedicos($this);
             */
        }

        return $this->aEspecialidad;
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
        if ('Admision' == $relationName) {
            $this->initAdmisions();
        }
        if ('Cita' == $relationName) {
            $this->initCitas();
        }
        if ('Consulta' == $relationName) {
            $this->initConsultas();
        }
        if ('Medicoespecialidad' == $relationName) {
            $this->initMedicoespecialidads();
        }
        if ('Medicofacturacion' == $relationName) {
            $this->initMedicofacturacions();
        }
    }

    /**
     * Clears out the collAdmisions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Medico The current object (for fluent API support)
     * @see        addAdmisions()
     */
    public function clearAdmisions()
    {
        $this->collAdmisions = null; // important to set this to null since that means it is uninitialized
        $this->collAdmisionsPartial = null;

        return $this;
    }

    /**
     * reset is the collAdmisions collection loaded partially
     *
     * @return void
     */
    public function resetPartialAdmisions($v = true)
    {
        $this->collAdmisionsPartial = $v;
    }

    /**
     * Initializes the collAdmisions collection.
     *
     * By default this just sets the collAdmisions collection to an empty array (like clearcollAdmisions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAdmisions($overrideExisting = true)
    {
        if (null !== $this->collAdmisions && !$overrideExisting) {
            return;
        }
        $this->collAdmisions = new PropelObjectCollection();
        $this->collAdmisions->setModel('Admision');
    }

    /**
     * Gets an array of Admision objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Medico is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Admision[] List of Admision objects
     * @throws PropelException
     */
    public function getAdmisions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collAdmisionsPartial && !$this->isNew();
        if (null === $this->collAdmisions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAdmisions) {
                // return empty collection
                $this->initAdmisions();
            } else {
                $collAdmisions = AdmisionQuery::create(null, $criteria)
                    ->filterByMedico($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collAdmisionsPartial && count($collAdmisions)) {
                      $this->initAdmisions(false);

                      foreach ($collAdmisions as $obj) {
                        if (false == $this->collAdmisions->contains($obj)) {
                          $this->collAdmisions->append($obj);
                        }
                      }

                      $this->collAdmisionsPartial = true;
                    }

                    $collAdmisions->getInternalIterator()->rewind();

                    return $collAdmisions;
                }

                if ($partial && $this->collAdmisions) {
                    foreach ($this->collAdmisions as $obj) {
                        if ($obj->isNew()) {
                            $collAdmisions[] = $obj;
                        }
                    }
                }

                $this->collAdmisions = $collAdmisions;
                $this->collAdmisionsPartial = false;
            }
        }

        return $this->collAdmisions;
    }

    /**
     * Sets a collection of Admision objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $admisions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Medico The current object (for fluent API support)
     */
    public function setAdmisions(PropelCollection $admisions, PropelPDO $con = null)
    {
        $admisionsToDelete = $this->getAdmisions(new Criteria(), $con)->diff($admisions);


        $this->admisionsScheduledForDeletion = $admisionsToDelete;

        foreach ($admisionsToDelete as $admisionRemoved) {
            $admisionRemoved->setMedico(null);
        }

        $this->collAdmisions = null;
        foreach ($admisions as $admision) {
            $this->addAdmision($admision);
        }

        $this->collAdmisions = $admisions;
        $this->collAdmisionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Admision objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Admision objects.
     * @throws PropelException
     */
    public function countAdmisions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collAdmisionsPartial && !$this->isNew();
        if (null === $this->collAdmisions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAdmisions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getAdmisions());
            }
            $query = AdmisionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByMedico($this)
                ->count($con);
        }

        return count($this->collAdmisions);
    }

    /**
     * Method called to associate a Admision object to this object
     * through the Admision foreign key attribute.
     *
     * @param    Admision $l Admision
     * @return Medico The current object (for fluent API support)
     */
    public function addAdmision(Admision $l)
    {
        if ($this->collAdmisions === null) {
            $this->initAdmisions();
            $this->collAdmisionsPartial = true;
        }

        if (!in_array($l, $this->collAdmisions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAdmision($l);

            if ($this->admisionsScheduledForDeletion and $this->admisionsScheduledForDeletion->contains($l)) {
                $this->admisionsScheduledForDeletion->remove($this->admisionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Admision $admision The admision object to add.
     */
    protected function doAddAdmision($admision)
    {
        $this->collAdmisions[]= $admision;
        $admision->setMedico($this);
    }

    /**
     * @param	Admision $admision The admision object to remove.
     * @return Medico The current object (for fluent API support)
     */
    public function removeAdmision($admision)
    {
        if ($this->getAdmisions()->contains($admision)) {
            $this->collAdmisions->remove($this->collAdmisions->search($admision));
            if (null === $this->admisionsScheduledForDeletion) {
                $this->admisionsScheduledForDeletion = clone $this->collAdmisions;
                $this->admisionsScheduledForDeletion->clear();
            }
            $this->admisionsScheduledForDeletion[]= clone $admision;
            $admision->setMedico(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Medico is new, it will return
     * an empty collection; or if this Medico has previously
     * been saved, it will retrieve related Admisions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Medico.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Admision[] List of Admision objects
     */
    public function getAdmisionsJoinCuarto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AdmisionQuery::create(null, $criteria);
        $query->joinWith('Cuarto', $join_behavior);

        return $this->getAdmisions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Medico is new, it will return
     * an empty collection; or if this Medico has previously
     * been saved, it will retrieve related Admisions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Medico.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Admision[] List of Admision objects
     */
    public function getAdmisionsJoinPaciente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AdmisionQuery::create(null, $criteria);
        $query->joinWith('Paciente', $join_behavior);

        return $this->getAdmisions($query, $con);
    }

    /**
     * Clears out the collCitas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Medico The current object (for fluent API support)
     * @see        addCitas()
     */
    public function clearCitas()
    {
        $this->collCitas = null; // important to set this to null since that means it is uninitialized
        $this->collCitasPartial = null;

        return $this;
    }

    /**
     * reset is the collCitas collection loaded partially
     *
     * @return void
     */
    public function resetPartialCitas($v = true)
    {
        $this->collCitasPartial = $v;
    }

    /**
     * Initializes the collCitas collection.
     *
     * By default this just sets the collCitas collection to an empty array (like clearcollCitas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCitas($overrideExisting = true)
    {
        if (null !== $this->collCitas && !$overrideExisting) {
            return;
        }
        $this->collCitas = new PropelObjectCollection();
        $this->collCitas->setModel('Cita');
    }

    /**
     * Gets an array of Cita objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Medico is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Cita[] List of Cita objects
     * @throws PropelException
     */
    public function getCitas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCitasPartial && !$this->isNew();
        if (null === $this->collCitas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCitas) {
                // return empty collection
                $this->initCitas();
            } else {
                $collCitas = CitaQuery::create(null, $criteria)
                    ->filterByMedico($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCitasPartial && count($collCitas)) {
                      $this->initCitas(false);

                      foreach ($collCitas as $obj) {
                        if (false == $this->collCitas->contains($obj)) {
                          $this->collCitas->append($obj);
                        }
                      }

                      $this->collCitasPartial = true;
                    }

                    $collCitas->getInternalIterator()->rewind();

                    return $collCitas;
                }

                if ($partial && $this->collCitas) {
                    foreach ($this->collCitas as $obj) {
                        if ($obj->isNew()) {
                            $collCitas[] = $obj;
                        }
                    }
                }

                $this->collCitas = $collCitas;
                $this->collCitasPartial = false;
            }
        }

        return $this->collCitas;
    }

    /**
     * Sets a collection of Cita objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $citas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Medico The current object (for fluent API support)
     */
    public function setCitas(PropelCollection $citas, PropelPDO $con = null)
    {
        $citasToDelete = $this->getCitas(new Criteria(), $con)->diff($citas);


        $this->citasScheduledForDeletion = $citasToDelete;

        foreach ($citasToDelete as $citaRemoved) {
            $citaRemoved->setMedico(null);
        }

        $this->collCitas = null;
        foreach ($citas as $cita) {
            $this->addCita($cita);
        }

        $this->collCitas = $citas;
        $this->collCitasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Cita objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Cita objects.
     * @throws PropelException
     */
    public function countCitas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCitasPartial && !$this->isNew();
        if (null === $this->collCitas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCitas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCitas());
            }
            $query = CitaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByMedico($this)
                ->count($con);
        }

        return count($this->collCitas);
    }

    /**
     * Method called to associate a Cita object to this object
     * through the Cita foreign key attribute.
     *
     * @param    Cita $l Cita
     * @return Medico The current object (for fluent API support)
     */
    public function addCita(Cita $l)
    {
        if ($this->collCitas === null) {
            $this->initCitas();
            $this->collCitasPartial = true;
        }

        if (!in_array($l, $this->collCitas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCita($l);

            if ($this->citasScheduledForDeletion and $this->citasScheduledForDeletion->contains($l)) {
                $this->citasScheduledForDeletion->remove($this->citasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Cita $cita The cita object to add.
     */
    protected function doAddCita($cita)
    {
        $this->collCitas[]= $cita;
        $cita->setMedico($this);
    }

    /**
     * @param	Cita $cita The cita object to remove.
     * @return Medico The current object (for fluent API support)
     */
    public function removeCita($cita)
    {
        if ($this->getCitas()->contains($cita)) {
            $this->collCitas->remove($this->collCitas->search($cita));
            if (null === $this->citasScheduledForDeletion) {
                $this->citasScheduledForDeletion = clone $this->collCitas;
                $this->citasScheduledForDeletion->clear();
            }
            $this->citasScheduledForDeletion[]= $cita;
            $cita->setMedico(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Medico is new, it will return
     * an empty collection; or if this Medico has previously
     * been saved, it will retrieve related Citas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Medico.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cita[] List of Cita objects
     */
    public function getCitasJoinPaciente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CitaQuery::create(null, $criteria);
        $query->joinWith('Paciente', $join_behavior);

        return $this->getCitas($query, $con);
    }

    /**
     * Clears out the collConsultas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Medico The current object (for fluent API support)
     * @see        addConsultas()
     */
    public function clearConsultas()
    {
        $this->collConsultas = null; // important to set this to null since that means it is uninitialized
        $this->collConsultasPartial = null;

        return $this;
    }

    /**
     * reset is the collConsultas collection loaded partially
     *
     * @return void
     */
    public function resetPartialConsultas($v = true)
    {
        $this->collConsultasPartial = $v;
    }

    /**
     * Initializes the collConsultas collection.
     *
     * By default this just sets the collConsultas collection to an empty array (like clearcollConsultas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initConsultas($overrideExisting = true)
    {
        if (null !== $this->collConsultas && !$overrideExisting) {
            return;
        }
        $this->collConsultas = new PropelObjectCollection();
        $this->collConsultas->setModel('Consulta');
    }

    /**
     * Gets an array of Consulta objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Medico is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Consulta[] List of Consulta objects
     * @throws PropelException
     */
    public function getConsultas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collConsultasPartial && !$this->isNew();
        if (null === $this->collConsultas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collConsultas) {
                // return empty collection
                $this->initConsultas();
            } else {
                $collConsultas = ConsultaQuery::create(null, $criteria)
                    ->filterByMedico($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collConsultasPartial && count($collConsultas)) {
                      $this->initConsultas(false);

                      foreach ($collConsultas as $obj) {
                        if (false == $this->collConsultas->contains($obj)) {
                          $this->collConsultas->append($obj);
                        }
                      }

                      $this->collConsultasPartial = true;
                    }

                    $collConsultas->getInternalIterator()->rewind();

                    return $collConsultas;
                }

                if ($partial && $this->collConsultas) {
                    foreach ($this->collConsultas as $obj) {
                        if ($obj->isNew()) {
                            $collConsultas[] = $obj;
                        }
                    }
                }

                $this->collConsultas = $collConsultas;
                $this->collConsultasPartial = false;
            }
        }

        return $this->collConsultas;
    }

    /**
     * Sets a collection of Consulta objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $consultas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Medico The current object (for fluent API support)
     */
    public function setConsultas(PropelCollection $consultas, PropelPDO $con = null)
    {
        $consultasToDelete = $this->getConsultas(new Criteria(), $con)->diff($consultas);


        $this->consultasScheduledForDeletion = $consultasToDelete;

        foreach ($consultasToDelete as $consultaRemoved) {
            $consultaRemoved->setMedico(null);
        }

        $this->collConsultas = null;
        foreach ($consultas as $consulta) {
            $this->addConsulta($consulta);
        }

        $this->collConsultas = $consultas;
        $this->collConsultasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Consulta objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Consulta objects.
     * @throws PropelException
     */
    public function countConsultas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collConsultasPartial && !$this->isNew();
        if (null === $this->collConsultas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collConsultas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getConsultas());
            }
            $query = ConsultaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByMedico($this)
                ->count($con);
        }

        return count($this->collConsultas);
    }

    /**
     * Method called to associate a Consulta object to this object
     * through the Consulta foreign key attribute.
     *
     * @param    Consulta $l Consulta
     * @return Medico The current object (for fluent API support)
     */
    public function addConsulta(Consulta $l)
    {
        if ($this->collConsultas === null) {
            $this->initConsultas();
            $this->collConsultasPartial = true;
        }

        if (!in_array($l, $this->collConsultas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddConsulta($l);

            if ($this->consultasScheduledForDeletion and $this->consultasScheduledForDeletion->contains($l)) {
                $this->consultasScheduledForDeletion->remove($this->consultasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Consulta $consulta The consulta object to add.
     */
    protected function doAddConsulta($consulta)
    {
        $this->collConsultas[]= $consulta;
        $consulta->setMedico($this);
    }

    /**
     * @param	Consulta $consulta The consulta object to remove.
     * @return Medico The current object (for fluent API support)
     */
    public function removeConsulta($consulta)
    {
        if ($this->getConsultas()->contains($consulta)) {
            $this->collConsultas->remove($this->collConsultas->search($consulta));
            if (null === $this->consultasScheduledForDeletion) {
                $this->consultasScheduledForDeletion = clone $this->collConsultas;
                $this->consultasScheduledForDeletion->clear();
            }
            $this->consultasScheduledForDeletion[]= clone $consulta;
            $consulta->setMedico(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Medico is new, it will return
     * an empty collection; or if this Medico has previously
     * been saved, it will retrieve related Consultas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Medico.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Consulta[] List of Consulta objects
     */
    public function getConsultasJoinConsultorio($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ConsultaQuery::create(null, $criteria);
        $query->joinWith('Consultorio', $join_behavior);

        return $this->getConsultas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Medico is new, it will return
     * an empty collection; or if this Medico has previously
     * been saved, it will retrieve related Consultas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Medico.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Consulta[] List of Consulta objects
     */
    public function getConsultasJoinPaciente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ConsultaQuery::create(null, $criteria);
        $query->joinWith('Paciente', $join_behavior);

        return $this->getConsultas($query, $con);
    }

    /**
     * Clears out the collMedicoespecialidads collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Medico The current object (for fluent API support)
     * @see        addMedicoespecialidads()
     */
    public function clearMedicoespecialidads()
    {
        $this->collMedicoespecialidads = null; // important to set this to null since that means it is uninitialized
        $this->collMedicoespecialidadsPartial = null;

        return $this;
    }

    /**
     * reset is the collMedicoespecialidads collection loaded partially
     *
     * @return void
     */
    public function resetPartialMedicoespecialidads($v = true)
    {
        $this->collMedicoespecialidadsPartial = $v;
    }

    /**
     * Initializes the collMedicoespecialidads collection.
     *
     * By default this just sets the collMedicoespecialidads collection to an empty array (like clearcollMedicoespecialidads());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initMedicoespecialidads($overrideExisting = true)
    {
        if (null !== $this->collMedicoespecialidads && !$overrideExisting) {
            return;
        }
        $this->collMedicoespecialidads = new PropelObjectCollection();
        $this->collMedicoespecialidads->setModel('Medicoespecialidad');
    }

    /**
     * Gets an array of Medicoespecialidad objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Medico is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Medicoespecialidad[] List of Medicoespecialidad objects
     * @throws PropelException
     */
    public function getMedicoespecialidads($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collMedicoespecialidadsPartial && !$this->isNew();
        if (null === $this->collMedicoespecialidads || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collMedicoespecialidads) {
                // return empty collection
                $this->initMedicoespecialidads();
            } else {
                $collMedicoespecialidads = MedicoespecialidadQuery::create(null, $criteria)
                    ->filterByMedico($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collMedicoespecialidadsPartial && count($collMedicoespecialidads)) {
                      $this->initMedicoespecialidads(false);

                      foreach ($collMedicoespecialidads as $obj) {
                        if (false == $this->collMedicoespecialidads->contains($obj)) {
                          $this->collMedicoespecialidads->append($obj);
                        }
                      }

                      $this->collMedicoespecialidadsPartial = true;
                    }

                    $collMedicoespecialidads->getInternalIterator()->rewind();

                    return $collMedicoespecialidads;
                }

                if ($partial && $this->collMedicoespecialidads) {
                    foreach ($this->collMedicoespecialidads as $obj) {
                        if ($obj->isNew()) {
                            $collMedicoespecialidads[] = $obj;
                        }
                    }
                }

                $this->collMedicoespecialidads = $collMedicoespecialidads;
                $this->collMedicoespecialidadsPartial = false;
            }
        }

        return $this->collMedicoespecialidads;
    }

    /**
     * Sets a collection of Medicoespecialidad objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $medicoespecialidads A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicoespecialidads(PropelCollection $medicoespecialidads, PropelPDO $con = null)
    {
        $medicoespecialidadsToDelete = $this->getMedicoespecialidads(new Criteria(), $con)->diff($medicoespecialidads);


        $this->medicoespecialidadsScheduledForDeletion = $medicoespecialidadsToDelete;

        foreach ($medicoespecialidadsToDelete as $medicoespecialidadRemoved) {
            $medicoespecialidadRemoved->setMedico(null);
        }

        $this->collMedicoespecialidads = null;
        foreach ($medicoespecialidads as $medicoespecialidad) {
            $this->addMedicoespecialidad($medicoespecialidad);
        }

        $this->collMedicoespecialidads = $medicoespecialidads;
        $this->collMedicoespecialidadsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Medicoespecialidad objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Medicoespecialidad objects.
     * @throws PropelException
     */
    public function countMedicoespecialidads(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collMedicoespecialidadsPartial && !$this->isNew();
        if (null === $this->collMedicoespecialidads || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collMedicoespecialidads) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getMedicoespecialidads());
            }
            $query = MedicoespecialidadQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByMedico($this)
                ->count($con);
        }

        return count($this->collMedicoespecialidads);
    }

    /**
     * Method called to associate a Medicoespecialidad object to this object
     * through the Medicoespecialidad foreign key attribute.
     *
     * @param    Medicoespecialidad $l Medicoespecialidad
     * @return Medico The current object (for fluent API support)
     */
    public function addMedicoespecialidad(Medicoespecialidad $l)
    {
        if ($this->collMedicoespecialidads === null) {
            $this->initMedicoespecialidads();
            $this->collMedicoespecialidadsPartial = true;
        }

        if (!in_array($l, $this->collMedicoespecialidads->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddMedicoespecialidad($l);

            if ($this->medicoespecialidadsScheduledForDeletion and $this->medicoespecialidadsScheduledForDeletion->contains($l)) {
                $this->medicoespecialidadsScheduledForDeletion->remove($this->medicoespecialidadsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Medicoespecialidad $medicoespecialidad The medicoespecialidad object to add.
     */
    protected function doAddMedicoespecialidad($medicoespecialidad)
    {
        $this->collMedicoespecialidads[]= $medicoespecialidad;
        $medicoespecialidad->setMedico($this);
    }

    /**
     * @param	Medicoespecialidad $medicoespecialidad The medicoespecialidad object to remove.
     * @return Medico The current object (for fluent API support)
     */
    public function removeMedicoespecialidad($medicoespecialidad)
    {
        if ($this->getMedicoespecialidads()->contains($medicoespecialidad)) {
            $this->collMedicoespecialidads->remove($this->collMedicoespecialidads->search($medicoespecialidad));
            if (null === $this->medicoespecialidadsScheduledForDeletion) {
                $this->medicoespecialidadsScheduledForDeletion = clone $this->collMedicoespecialidads;
                $this->medicoespecialidadsScheduledForDeletion->clear();
            }
            $this->medicoespecialidadsScheduledForDeletion[]= clone $medicoespecialidad;
            $medicoespecialidad->setMedico(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Medico is new, it will return
     * an empty collection; or if this Medico has previously
     * been saved, it will retrieve related Medicoespecialidads from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Medico.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Medicoespecialidad[] List of Medicoespecialidad objects
     */
    public function getMedicoespecialidadsJoinEspecialidad($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = MedicoespecialidadQuery::create(null, $criteria);
        $query->joinWith('Especialidad', $join_behavior);

        return $this->getMedicoespecialidads($query, $con);
    }

    /**
     * Clears out the collMedicofacturacions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Medico The current object (for fluent API support)
     * @see        addMedicofacturacions()
     */
    public function clearMedicofacturacions()
    {
        $this->collMedicofacturacions = null; // important to set this to null since that means it is uninitialized
        $this->collMedicofacturacionsPartial = null;

        return $this;
    }

    /**
     * reset is the collMedicofacturacions collection loaded partially
     *
     * @return void
     */
    public function resetPartialMedicofacturacions($v = true)
    {
        $this->collMedicofacturacionsPartial = $v;
    }

    /**
     * Initializes the collMedicofacturacions collection.
     *
     * By default this just sets the collMedicofacturacions collection to an empty array (like clearcollMedicofacturacions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initMedicofacturacions($overrideExisting = true)
    {
        if (null !== $this->collMedicofacturacions && !$overrideExisting) {
            return;
        }
        $this->collMedicofacturacions = new PropelObjectCollection();
        $this->collMedicofacturacions->setModel('Medicofacturacion');
    }

    /**
     * Gets an array of Medicofacturacion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Medico is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Medicofacturacion[] List of Medicofacturacion objects
     * @throws PropelException
     */
    public function getMedicofacturacions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collMedicofacturacionsPartial && !$this->isNew();
        if (null === $this->collMedicofacturacions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collMedicofacturacions) {
                // return empty collection
                $this->initMedicofacturacions();
            } else {
                $collMedicofacturacions = MedicofacturacionQuery::create(null, $criteria)
                    ->filterByMedico($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collMedicofacturacionsPartial && count($collMedicofacturacions)) {
                      $this->initMedicofacturacions(false);

                      foreach ($collMedicofacturacions as $obj) {
                        if (false == $this->collMedicofacturacions->contains($obj)) {
                          $this->collMedicofacturacions->append($obj);
                        }
                      }

                      $this->collMedicofacturacionsPartial = true;
                    }

                    $collMedicofacturacions->getInternalIterator()->rewind();

                    return $collMedicofacturacions;
                }

                if ($partial && $this->collMedicofacturacions) {
                    foreach ($this->collMedicofacturacions as $obj) {
                        if ($obj->isNew()) {
                            $collMedicofacturacions[] = $obj;
                        }
                    }
                }

                $this->collMedicofacturacions = $collMedicofacturacions;
                $this->collMedicofacturacionsPartial = false;
            }
        }

        return $this->collMedicofacturacions;
    }

    /**
     * Sets a collection of Medicofacturacion objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $medicofacturacions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Medico The current object (for fluent API support)
     */
    public function setMedicofacturacions(PropelCollection $medicofacturacions, PropelPDO $con = null)
    {
        $medicofacturacionsToDelete = $this->getMedicofacturacions(new Criteria(), $con)->diff($medicofacturacions);


        $this->medicofacturacionsScheduledForDeletion = $medicofacturacionsToDelete;

        foreach ($medicofacturacionsToDelete as $medicofacturacionRemoved) {
            $medicofacturacionRemoved->setMedico(null);
        }

        $this->collMedicofacturacions = null;
        foreach ($medicofacturacions as $medicofacturacion) {
            $this->addMedicofacturacion($medicofacturacion);
        }

        $this->collMedicofacturacions = $medicofacturacions;
        $this->collMedicofacturacionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Medicofacturacion objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Medicofacturacion objects.
     * @throws PropelException
     */
    public function countMedicofacturacions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collMedicofacturacionsPartial && !$this->isNew();
        if (null === $this->collMedicofacturacions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collMedicofacturacions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getMedicofacturacions());
            }
            $query = MedicofacturacionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByMedico($this)
                ->count($con);
        }

        return count($this->collMedicofacturacions);
    }

    /**
     * Method called to associate a Medicofacturacion object to this object
     * through the Medicofacturacion foreign key attribute.
     *
     * @param    Medicofacturacion $l Medicofacturacion
     * @return Medico The current object (for fluent API support)
     */
    public function addMedicofacturacion(Medicofacturacion $l)
    {
        if ($this->collMedicofacturacions === null) {
            $this->initMedicofacturacions();
            $this->collMedicofacturacionsPartial = true;
        }

        if (!in_array($l, $this->collMedicofacturacions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddMedicofacturacion($l);

            if ($this->medicofacturacionsScheduledForDeletion and $this->medicofacturacionsScheduledForDeletion->contains($l)) {
                $this->medicofacturacionsScheduledForDeletion->remove($this->medicofacturacionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Medicofacturacion $medicofacturacion The medicofacturacion object to add.
     */
    protected function doAddMedicofacturacion($medicofacturacion)
    {
        $this->collMedicofacturacions[]= $medicofacturacion;
        $medicofacturacion->setMedico($this);
    }

    /**
     * @param	Medicofacturacion $medicofacturacion The medicofacturacion object to remove.
     * @return Medico The current object (for fluent API support)
     */
    public function removeMedicofacturacion($medicofacturacion)
    {
        if ($this->getMedicofacturacions()->contains($medicofacturacion)) {
            $this->collMedicofacturacions->remove($this->collMedicofacturacions->search($medicofacturacion));
            if (null === $this->medicofacturacionsScheduledForDeletion) {
                $this->medicofacturacionsScheduledForDeletion = clone $this->collMedicofacturacions;
                $this->medicofacturacionsScheduledForDeletion->clear();
            }
            $this->medicofacturacionsScheduledForDeletion[]= clone $medicofacturacion;
            $medicofacturacion->setMedico(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idmedico = null;
        $this->idespecialidad = null;
        $this->medico_nombre = null;
        $this->medico_apellidopaterno = null;
        $this->medico_apellidomaterno = null;
        $this->medico_calle = null;
        $this->medico_noexterior = null;
        $this->medico_nointerior = null;
        $this->medico_colonia = null;
        $this->medico_codigopostal = null;
        $this->medico_ciudad = null;
        $this->medico_estado = null;
        $this->medico_pais = null;
        $this->medico_telefono = null;
        $this->medico_telefonocelular = null;
        $this->medico_clave = null;
        $this->medico_dgp = null;
        $this->medico_ssa = null;
        $this->medico_ae = null;
        $this->medico_fotografia = null;
        $this->medico_perfilcompleto = null;
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
            if ($this->collAdmisions) {
                foreach ($this->collAdmisions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCitas) {
                foreach ($this->collCitas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collConsultas) {
                foreach ($this->collConsultas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collMedicoespecialidads) {
                foreach ($this->collMedicoespecialidads as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collMedicofacturacions) {
                foreach ($this->collMedicofacturacions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aEspecialidad instanceof Persistent) {
              $this->aEspecialidad->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collAdmisions instanceof PropelCollection) {
            $this->collAdmisions->clearIterator();
        }
        $this->collAdmisions = null;
        if ($this->collCitas instanceof PropelCollection) {
            $this->collCitas->clearIterator();
        }
        $this->collCitas = null;
        if ($this->collConsultas instanceof PropelCollection) {
            $this->collConsultas->clearIterator();
        }
        $this->collConsultas = null;
        if ($this->collMedicoespecialidads instanceof PropelCollection) {
            $this->collMedicoespecialidads->clearIterator();
        }
        $this->collMedicoespecialidads = null;
        if ($this->collMedicofacturacions instanceof PropelCollection) {
            $this->collMedicofacturacions->clearIterator();
        }
        $this->collMedicofacturacions = null;
        $this->aEspecialidad = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(MedicoPeer::DEFAULT_STRING_FORMAT);
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
