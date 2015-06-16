<?php


/**
 * Base class that represents a query for the 'medico' table.
 *
 *
 *
 * @method MedicoQuery orderByIdmedico($order = Criteria::ASC) Order by the idmedico column
 * @method MedicoQuery orderByIdespecialidad($order = Criteria::ASC) Order by the idespecialidad column
 * @method MedicoQuery orderByMedicoNombre($order = Criteria::ASC) Order by the medico_nombre column
 * @method MedicoQuery orderByMedicoApellidopaterno($order = Criteria::ASC) Order by the medico_apellidopaterno column
 * @method MedicoQuery orderByMedicoApellidomaterno($order = Criteria::ASC) Order by the medico_apellidomaterno column
 * @method MedicoQuery orderByMedicoCalle($order = Criteria::ASC) Order by the medico_calle column
 * @method MedicoQuery orderByMedicoNoexterior($order = Criteria::ASC) Order by the medico_noexterior column
 * @method MedicoQuery orderByMedicoNointerior($order = Criteria::ASC) Order by the medico_nointerior column
 * @method MedicoQuery orderByMedicoColonia($order = Criteria::ASC) Order by the medico_colonia column
 * @method MedicoQuery orderByMedicoCodigopostal($order = Criteria::ASC) Order by the medico_codigopostal column
 * @method MedicoQuery orderByMedicoCiudad($order = Criteria::ASC) Order by the medico_ciudad column
 * @method MedicoQuery orderByMedicoEstado($order = Criteria::ASC) Order by the medico_estado column
 * @method MedicoQuery orderByMedicoPais($order = Criteria::ASC) Order by the medico_pais column
 * @method MedicoQuery orderByMedicoTelefono($order = Criteria::ASC) Order by the medico_telefono column
 * @method MedicoQuery orderByMedicoTelefonocelular($order = Criteria::ASC) Order by the medico_telefonocelular column
 * @method MedicoQuery orderByMedicoClave($order = Criteria::ASC) Order by the medico_clave column
 * @method MedicoQuery orderByMedicoDgp($order = Criteria::ASC) Order by the medico_dgp column
 * @method MedicoQuery orderByMedicoSsa($order = Criteria::ASC) Order by the medico_ssa column
 * @method MedicoQuery orderByMedicoAe($order = Criteria::ASC) Order by the medico_ae column
 * @method MedicoQuery orderByMedicoFotografia($order = Criteria::ASC) Order by the medico_fotografia column
 * @method MedicoQuery orderByMedicoPerfilcompleto($order = Criteria::ASC) Order by the medico_perfilcompleto column
 *
 * @method MedicoQuery groupByIdmedico() Group by the idmedico column
 * @method MedicoQuery groupByIdespecialidad() Group by the idespecialidad column
 * @method MedicoQuery groupByMedicoNombre() Group by the medico_nombre column
 * @method MedicoQuery groupByMedicoApellidopaterno() Group by the medico_apellidopaterno column
 * @method MedicoQuery groupByMedicoApellidomaterno() Group by the medico_apellidomaterno column
 * @method MedicoQuery groupByMedicoCalle() Group by the medico_calle column
 * @method MedicoQuery groupByMedicoNoexterior() Group by the medico_noexterior column
 * @method MedicoQuery groupByMedicoNointerior() Group by the medico_nointerior column
 * @method MedicoQuery groupByMedicoColonia() Group by the medico_colonia column
 * @method MedicoQuery groupByMedicoCodigopostal() Group by the medico_codigopostal column
 * @method MedicoQuery groupByMedicoCiudad() Group by the medico_ciudad column
 * @method MedicoQuery groupByMedicoEstado() Group by the medico_estado column
 * @method MedicoQuery groupByMedicoPais() Group by the medico_pais column
 * @method MedicoQuery groupByMedicoTelefono() Group by the medico_telefono column
 * @method MedicoQuery groupByMedicoTelefonocelular() Group by the medico_telefonocelular column
 * @method MedicoQuery groupByMedicoClave() Group by the medico_clave column
 * @method MedicoQuery groupByMedicoDgp() Group by the medico_dgp column
 * @method MedicoQuery groupByMedicoSsa() Group by the medico_ssa column
 * @method MedicoQuery groupByMedicoAe() Group by the medico_ae column
 * @method MedicoQuery groupByMedicoFotografia() Group by the medico_fotografia column
 * @method MedicoQuery groupByMedicoPerfilcompleto() Group by the medico_perfilcompleto column
 *
 * @method MedicoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MedicoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MedicoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MedicoQuery leftJoinEspecialidad($relationAlias = null) Adds a LEFT JOIN clause to the query using the Especialidad relation
 * @method MedicoQuery rightJoinEspecialidad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Especialidad relation
 * @method MedicoQuery innerJoinEspecialidad($relationAlias = null) Adds a INNER JOIN clause to the query using the Especialidad relation
 *
 * @method MedicoQuery leftJoinAdmision($relationAlias = null) Adds a LEFT JOIN clause to the query using the Admision relation
 * @method MedicoQuery rightJoinAdmision($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Admision relation
 * @method MedicoQuery innerJoinAdmision($relationAlias = null) Adds a INNER JOIN clause to the query using the Admision relation
 *
 * @method MedicoQuery leftJoinCita($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cita relation
 * @method MedicoQuery rightJoinCita($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cita relation
 * @method MedicoQuery innerJoinCita($relationAlias = null) Adds a INNER JOIN clause to the query using the Cita relation
 *
 * @method MedicoQuery leftJoinConsulta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Consulta relation
 * @method MedicoQuery rightJoinConsulta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Consulta relation
 * @method MedicoQuery innerJoinConsulta($relationAlias = null) Adds a INNER JOIN clause to the query using the Consulta relation
 *
 * @method MedicoQuery leftJoinMedicoespecialidad($relationAlias = null) Adds a LEFT JOIN clause to the query using the Medicoespecialidad relation
 * @method MedicoQuery rightJoinMedicoespecialidad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Medicoespecialidad relation
 * @method MedicoQuery innerJoinMedicoespecialidad($relationAlias = null) Adds a INNER JOIN clause to the query using the Medicoespecialidad relation
 *
 * @method MedicoQuery leftJoinMedicofacturacion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Medicofacturacion relation
 * @method MedicoQuery rightJoinMedicofacturacion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Medicofacturacion relation
 * @method MedicoQuery innerJoinMedicofacturacion($relationAlias = null) Adds a INNER JOIN clause to the query using the Medicofacturacion relation
 *
 * @method Medico findOne(PropelPDO $con = null) Return the first Medico matching the query
 * @method Medico findOneOrCreate(PropelPDO $con = null) Return the first Medico matching the query, or a new Medico object populated from the query conditions when no match is found
 *
 * @method Medico findOneByIdespecialidad(int $idespecialidad) Return the first Medico filtered by the idespecialidad column
 * @method Medico findOneByMedicoNombre(string $medico_nombre) Return the first Medico filtered by the medico_nombre column
 * @method Medico findOneByMedicoApellidopaterno(string $medico_apellidopaterno) Return the first Medico filtered by the medico_apellidopaterno column
 * @method Medico findOneByMedicoApellidomaterno(string $medico_apellidomaterno) Return the first Medico filtered by the medico_apellidomaterno column
 * @method Medico findOneByMedicoCalle(string $medico_calle) Return the first Medico filtered by the medico_calle column
 * @method Medico findOneByMedicoNoexterior(string $medico_noexterior) Return the first Medico filtered by the medico_noexterior column
 * @method Medico findOneByMedicoNointerior(string $medico_nointerior) Return the first Medico filtered by the medico_nointerior column
 * @method Medico findOneByMedicoColonia(string $medico_colonia) Return the first Medico filtered by the medico_colonia column
 * @method Medico findOneByMedicoCodigopostal(string $medico_codigopostal) Return the first Medico filtered by the medico_codigopostal column
 * @method Medico findOneByMedicoCiudad(string $medico_ciudad) Return the first Medico filtered by the medico_ciudad column
 * @method Medico findOneByMedicoEstado(string $medico_estado) Return the first Medico filtered by the medico_estado column
 * @method Medico findOneByMedicoPais(string $medico_pais) Return the first Medico filtered by the medico_pais column
 * @method Medico findOneByMedicoTelefono(string $medico_telefono) Return the first Medico filtered by the medico_telefono column
 * @method Medico findOneByMedicoTelefonocelular(string $medico_telefonocelular) Return the first Medico filtered by the medico_telefonocelular column
 * @method Medico findOneByMedicoClave(string $medico_clave) Return the first Medico filtered by the medico_clave column
 * @method Medico findOneByMedicoDgp(string $medico_dgp) Return the first Medico filtered by the medico_dgp column
 * @method Medico findOneByMedicoSsa(string $medico_ssa) Return the first Medico filtered by the medico_ssa column
 * @method Medico findOneByMedicoAe(string $medico_ae) Return the first Medico filtered by the medico_ae column
 * @method Medico findOneByMedicoFotografia(string $medico_fotografia) Return the first Medico filtered by the medico_fotografia column
 * @method Medico findOneByMedicoPerfilcompleto(boolean $medico_perfilcompleto) Return the first Medico filtered by the medico_perfilcompleto column
 *
 * @method array findByIdmedico(int $idmedico) Return Medico objects filtered by the idmedico column
 * @method array findByIdespecialidad(int $idespecialidad) Return Medico objects filtered by the idespecialidad column
 * @method array findByMedicoNombre(string $medico_nombre) Return Medico objects filtered by the medico_nombre column
 * @method array findByMedicoApellidopaterno(string $medico_apellidopaterno) Return Medico objects filtered by the medico_apellidopaterno column
 * @method array findByMedicoApellidomaterno(string $medico_apellidomaterno) Return Medico objects filtered by the medico_apellidomaterno column
 * @method array findByMedicoCalle(string $medico_calle) Return Medico objects filtered by the medico_calle column
 * @method array findByMedicoNoexterior(string $medico_noexterior) Return Medico objects filtered by the medico_noexterior column
 * @method array findByMedicoNointerior(string $medico_nointerior) Return Medico objects filtered by the medico_nointerior column
 * @method array findByMedicoColonia(string $medico_colonia) Return Medico objects filtered by the medico_colonia column
 * @method array findByMedicoCodigopostal(string $medico_codigopostal) Return Medico objects filtered by the medico_codigopostal column
 * @method array findByMedicoCiudad(string $medico_ciudad) Return Medico objects filtered by the medico_ciudad column
 * @method array findByMedicoEstado(string $medico_estado) Return Medico objects filtered by the medico_estado column
 * @method array findByMedicoPais(string $medico_pais) Return Medico objects filtered by the medico_pais column
 * @method array findByMedicoTelefono(string $medico_telefono) Return Medico objects filtered by the medico_telefono column
 * @method array findByMedicoTelefonocelular(string $medico_telefonocelular) Return Medico objects filtered by the medico_telefonocelular column
 * @method array findByMedicoClave(string $medico_clave) Return Medico objects filtered by the medico_clave column
 * @method array findByMedicoDgp(string $medico_dgp) Return Medico objects filtered by the medico_dgp column
 * @method array findByMedicoSsa(string $medico_ssa) Return Medico objects filtered by the medico_ssa column
 * @method array findByMedicoAe(string $medico_ae) Return Medico objects filtered by the medico_ae column
 * @method array findByMedicoFotografia(string $medico_fotografia) Return Medico objects filtered by the medico_fotografia column
 * @method array findByMedicoPerfilcompleto(boolean $medico_perfilcompleto) Return Medico objects filtered by the medico_perfilcompleto column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseMedicoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMedicoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'hva';
        }
        if (null === $modelName) {
            $modelName = 'Medico';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MedicoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MedicoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MedicoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MedicoQuery) {
            return $criteria;
        }
        $query = new MedicoQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Medico|Medico[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MedicoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MedicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Medico A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdmedico($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Medico A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idmedico`, `idespecialidad`, `medico_nombre`, `medico_apellidopaterno`, `medico_apellidomaterno`, `medico_calle`, `medico_noexterior`, `medico_nointerior`, `medico_colonia`, `medico_codigopostal`, `medico_ciudad`, `medico_estado`, `medico_pais`, `medico_telefono`, `medico_telefonocelular`, `medico_clave`, `medico_dgp`, `medico_ssa`, `medico_ae`, `medico_fotografia`, `medico_perfilcompleto` FROM `medico` WHERE `idmedico` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Medico();
            $obj->hydrate($row);
            MedicoPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Medico|Medico[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Medico[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MedicoPeer::IDMEDICO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MedicoPeer::IDMEDICO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idmedico column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmedico(1234); // WHERE idmedico = 1234
     * $query->filterByIdmedico(array(12, 34)); // WHERE idmedico IN (12, 34)
     * $query->filterByIdmedico(array('min' => 12)); // WHERE idmedico >= 12
     * $query->filterByIdmedico(array('max' => 12)); // WHERE idmedico <= 12
     * </code>
     *
     * @param     mixed $idmedico The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByIdmedico($idmedico = null, $comparison = null)
    {
        if (is_array($idmedico)) {
            $useMinMax = false;
            if (isset($idmedico['min'])) {
                $this->addUsingAlias(MedicoPeer::IDMEDICO, $idmedico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmedico['max'])) {
                $this->addUsingAlias(MedicoPeer::IDMEDICO, $idmedico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MedicoPeer::IDMEDICO, $idmedico, $comparison);
    }

    /**
     * Filter the query on the idespecialidad column
     *
     * Example usage:
     * <code>
     * $query->filterByIdespecialidad(1234); // WHERE idespecialidad = 1234
     * $query->filterByIdespecialidad(array(12, 34)); // WHERE idespecialidad IN (12, 34)
     * $query->filterByIdespecialidad(array('min' => 12)); // WHERE idespecialidad >= 12
     * $query->filterByIdespecialidad(array('max' => 12)); // WHERE idespecialidad <= 12
     * </code>
     *
     * @see       filterByEspecialidad()
     *
     * @param     mixed $idespecialidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByIdespecialidad($idespecialidad = null, $comparison = null)
    {
        if (is_array($idespecialidad)) {
            $useMinMax = false;
            if (isset($idespecialidad['min'])) {
                $this->addUsingAlias(MedicoPeer::IDESPECIALIDAD, $idespecialidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idespecialidad['max'])) {
                $this->addUsingAlias(MedicoPeer::IDESPECIALIDAD, $idespecialidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MedicoPeer::IDESPECIALIDAD, $idespecialidad, $comparison);
    }

    /**
     * Filter the query on the medico_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoNombre('fooValue');   // WHERE medico_nombre = 'fooValue'
     * $query->filterByMedicoNombre('%fooValue%'); // WHERE medico_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoNombre($medicoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoNombre)) {
                $medicoNombre = str_replace('*', '%', $medicoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_NOMBRE, $medicoNombre, $comparison);
    }

    /**
     * Filter the query on the medico_apellidopaterno column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoApellidopaterno('fooValue');   // WHERE medico_apellidopaterno = 'fooValue'
     * $query->filterByMedicoApellidopaterno('%fooValue%'); // WHERE medico_apellidopaterno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoApellidopaterno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoApellidopaterno($medicoApellidopaterno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoApellidopaterno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoApellidopaterno)) {
                $medicoApellidopaterno = str_replace('*', '%', $medicoApellidopaterno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_APELLIDOPATERNO, $medicoApellidopaterno, $comparison);
    }

    /**
     * Filter the query on the medico_apellidomaterno column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoApellidomaterno('fooValue');   // WHERE medico_apellidomaterno = 'fooValue'
     * $query->filterByMedicoApellidomaterno('%fooValue%'); // WHERE medico_apellidomaterno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoApellidomaterno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoApellidomaterno($medicoApellidomaterno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoApellidomaterno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoApellidomaterno)) {
                $medicoApellidomaterno = str_replace('*', '%', $medicoApellidomaterno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_APELLIDOMATERNO, $medicoApellidomaterno, $comparison);
    }

    /**
     * Filter the query on the medico_calle column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoCalle('fooValue');   // WHERE medico_calle = 'fooValue'
     * $query->filterByMedicoCalle('%fooValue%'); // WHERE medico_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoCalle($medicoCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoCalle)) {
                $medicoCalle = str_replace('*', '%', $medicoCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_CALLE, $medicoCalle, $comparison);
    }

    /**
     * Filter the query on the medico_noexterior column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoNoexterior('fooValue');   // WHERE medico_noexterior = 'fooValue'
     * $query->filterByMedicoNoexterior('%fooValue%'); // WHERE medico_noexterior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoNoexterior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoNoexterior($medicoNoexterior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoNoexterior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoNoexterior)) {
                $medicoNoexterior = str_replace('*', '%', $medicoNoexterior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_NOEXTERIOR, $medicoNoexterior, $comparison);
    }

    /**
     * Filter the query on the medico_nointerior column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoNointerior('fooValue');   // WHERE medico_nointerior = 'fooValue'
     * $query->filterByMedicoNointerior('%fooValue%'); // WHERE medico_nointerior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoNointerior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoNointerior($medicoNointerior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoNointerior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoNointerior)) {
                $medicoNointerior = str_replace('*', '%', $medicoNointerior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_NOINTERIOR, $medicoNointerior, $comparison);
    }

    /**
     * Filter the query on the medico_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoColonia('fooValue');   // WHERE medico_colonia = 'fooValue'
     * $query->filterByMedicoColonia('%fooValue%'); // WHERE medico_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoColonia($medicoColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoColonia)) {
                $medicoColonia = str_replace('*', '%', $medicoColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_COLONIA, $medicoColonia, $comparison);
    }

    /**
     * Filter the query on the medico_codigopostal column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoCodigopostal('fooValue');   // WHERE medico_codigopostal = 'fooValue'
     * $query->filterByMedicoCodigopostal('%fooValue%'); // WHERE medico_codigopostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoCodigopostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoCodigopostal($medicoCodigopostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoCodigopostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoCodigopostal)) {
                $medicoCodigopostal = str_replace('*', '%', $medicoCodigopostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_CODIGOPOSTAL, $medicoCodigopostal, $comparison);
    }

    /**
     * Filter the query on the medico_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoCiudad('fooValue');   // WHERE medico_ciudad = 'fooValue'
     * $query->filterByMedicoCiudad('%fooValue%'); // WHERE medico_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoCiudad($medicoCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoCiudad)) {
                $medicoCiudad = str_replace('*', '%', $medicoCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_CIUDAD, $medicoCiudad, $comparison);
    }

    /**
     * Filter the query on the medico_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoEstado('fooValue');   // WHERE medico_estado = 'fooValue'
     * $query->filterByMedicoEstado('%fooValue%'); // WHERE medico_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoEstado($medicoEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoEstado)) {
                $medicoEstado = str_replace('*', '%', $medicoEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_ESTADO, $medicoEstado, $comparison);
    }

    /**
     * Filter the query on the medico_pais column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoPais('fooValue');   // WHERE medico_pais = 'fooValue'
     * $query->filterByMedicoPais('%fooValue%'); // WHERE medico_pais LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoPais The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoPais($medicoPais = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoPais)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoPais)) {
                $medicoPais = str_replace('*', '%', $medicoPais);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_PAIS, $medicoPais, $comparison);
    }

    /**
     * Filter the query on the medico_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoTelefono('fooValue');   // WHERE medico_telefono = 'fooValue'
     * $query->filterByMedicoTelefono('%fooValue%'); // WHERE medico_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoTelefono($medicoTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoTelefono)) {
                $medicoTelefono = str_replace('*', '%', $medicoTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_TELEFONO, $medicoTelefono, $comparison);
    }

    /**
     * Filter the query on the medico_telefonocelular column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoTelefonocelular('fooValue');   // WHERE medico_telefonocelular = 'fooValue'
     * $query->filterByMedicoTelefonocelular('%fooValue%'); // WHERE medico_telefonocelular LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoTelefonocelular The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoTelefonocelular($medicoTelefonocelular = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoTelefonocelular)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoTelefonocelular)) {
                $medicoTelefonocelular = str_replace('*', '%', $medicoTelefonocelular);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_TELEFONOCELULAR, $medicoTelefonocelular, $comparison);
    }

    /**
     * Filter the query on the medico_clave column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoClave('fooValue');   // WHERE medico_clave = 'fooValue'
     * $query->filterByMedicoClave('%fooValue%'); // WHERE medico_clave LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoClave The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoClave($medicoClave = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoClave)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoClave)) {
                $medicoClave = str_replace('*', '%', $medicoClave);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_CLAVE, $medicoClave, $comparison);
    }

    /**
     * Filter the query on the medico_dgp column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoDgp('fooValue');   // WHERE medico_dgp = 'fooValue'
     * $query->filterByMedicoDgp('%fooValue%'); // WHERE medico_dgp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoDgp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoDgp($medicoDgp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoDgp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoDgp)) {
                $medicoDgp = str_replace('*', '%', $medicoDgp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_DGP, $medicoDgp, $comparison);
    }

    /**
     * Filter the query on the medico_ssa column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoSsa('fooValue');   // WHERE medico_ssa = 'fooValue'
     * $query->filterByMedicoSsa('%fooValue%'); // WHERE medico_ssa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoSsa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoSsa($medicoSsa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoSsa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoSsa)) {
                $medicoSsa = str_replace('*', '%', $medicoSsa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_SSA, $medicoSsa, $comparison);
    }

    /**
     * Filter the query on the medico_ae column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoAe('fooValue');   // WHERE medico_ae = 'fooValue'
     * $query->filterByMedicoAe('%fooValue%'); // WHERE medico_ae LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoAe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoAe($medicoAe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoAe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoAe)) {
                $medicoAe = str_replace('*', '%', $medicoAe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_AE, $medicoAe, $comparison);
    }

    /**
     * Filter the query on the medico_fotografia column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoFotografia('fooValue');   // WHERE medico_fotografia = 'fooValue'
     * $query->filterByMedicoFotografia('%fooValue%'); // WHERE medico_fotografia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicoFotografia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoFotografia($medicoFotografia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicoFotografia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicoFotografia)) {
                $medicoFotografia = str_replace('*', '%', $medicoFotografia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_FOTOGRAFIA, $medicoFotografia, $comparison);
    }

    /**
     * Filter the query on the medico_perfilcompleto column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicoPerfilcompleto(true); // WHERE medico_perfilcompleto = true
     * $query->filterByMedicoPerfilcompleto('yes'); // WHERE medico_perfilcompleto = true
     * </code>
     *
     * @param     boolean|string $medicoPerfilcompleto The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function filterByMedicoPerfilcompleto($medicoPerfilcompleto = null, $comparison = null)
    {
        if (is_string($medicoPerfilcompleto)) {
            $medicoPerfilcompleto = in_array(strtolower($medicoPerfilcompleto), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(MedicoPeer::MEDICO_PERFILCOMPLETO, $medicoPerfilcompleto, $comparison);
    }

    /**
     * Filter the query by a related Especialidad object
     *
     * @param   Especialidad|PropelObjectCollection $especialidad The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MedicoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEspecialidad($especialidad, $comparison = null)
    {
        if ($especialidad instanceof Especialidad) {
            return $this
                ->addUsingAlias(MedicoPeer::IDESPECIALIDAD, $especialidad->getIdespecialidad(), $comparison);
        } elseif ($especialidad instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MedicoPeer::IDESPECIALIDAD, $especialidad->toKeyValue('PrimaryKey', 'Idespecialidad'), $comparison);
        } else {
            throw new PropelException('filterByEspecialidad() only accepts arguments of type Especialidad or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Especialidad relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function joinEspecialidad($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Especialidad');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Especialidad');
        }

        return $this;
    }

    /**
     * Use the Especialidad relation Especialidad object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EspecialidadQuery A secondary query class using the current class as primary query
     */
    public function useEspecialidadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEspecialidad($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Especialidad', 'EspecialidadQuery');
    }

    /**
     * Filter the query by a related Admision object
     *
     * @param   Admision|PropelObjectCollection $admision  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MedicoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAdmision($admision, $comparison = null)
    {
        if ($admision instanceof Admision) {
            return $this
                ->addUsingAlias(MedicoPeer::IDMEDICO, $admision->getIdmedico(), $comparison);
        } elseif ($admision instanceof PropelObjectCollection) {
            return $this
                ->useAdmisionQuery()
                ->filterByPrimaryKeys($admision->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAdmision() only accepts arguments of type Admision or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Admision relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function joinAdmision($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Admision');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Admision');
        }

        return $this;
    }

    /**
     * Use the Admision relation Admision object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AdmisionQuery A secondary query class using the current class as primary query
     */
    public function useAdmisionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAdmision($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Admision', 'AdmisionQuery');
    }

    /**
     * Filter the query by a related Cita object
     *
     * @param   Cita|PropelObjectCollection $cita  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MedicoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCita($cita, $comparison = null)
    {
        if ($cita instanceof Cita) {
            return $this
                ->addUsingAlias(MedicoPeer::IDMEDICO, $cita->getIdmedico(), $comparison);
        } elseif ($cita instanceof PropelObjectCollection) {
            return $this
                ->useCitaQuery()
                ->filterByPrimaryKeys($cita->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCita() only accepts arguments of type Cita or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cita relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function joinCita($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cita');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Cita');
        }

        return $this;
    }

    /**
     * Use the Cita relation Cita object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CitaQuery A secondary query class using the current class as primary query
     */
    public function useCitaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCita($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cita', 'CitaQuery');
    }

    /**
     * Filter the query by a related Consulta object
     *
     * @param   Consulta|PropelObjectCollection $consulta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MedicoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConsulta($consulta, $comparison = null)
    {
        if ($consulta instanceof Consulta) {
            return $this
                ->addUsingAlias(MedicoPeer::IDMEDICO, $consulta->getIdmedico(), $comparison);
        } elseif ($consulta instanceof PropelObjectCollection) {
            return $this
                ->useConsultaQuery()
                ->filterByPrimaryKeys($consulta->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByConsulta() only accepts arguments of type Consulta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Consulta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function joinConsulta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Consulta');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Consulta');
        }

        return $this;
    }

    /**
     * Use the Consulta relation Consulta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ConsultaQuery A secondary query class using the current class as primary query
     */
    public function useConsultaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinConsulta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Consulta', 'ConsultaQuery');
    }

    /**
     * Filter the query by a related Medicoespecialidad object
     *
     * @param   Medicoespecialidad|PropelObjectCollection $medicoespecialidad  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MedicoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMedicoespecialidad($medicoespecialidad, $comparison = null)
    {
        if ($medicoespecialidad instanceof Medicoespecialidad) {
            return $this
                ->addUsingAlias(MedicoPeer::IDMEDICO, $medicoespecialidad->getIdmedico(), $comparison);
        } elseif ($medicoespecialidad instanceof PropelObjectCollection) {
            return $this
                ->useMedicoespecialidadQuery()
                ->filterByPrimaryKeys($medicoespecialidad->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByMedicoespecialidad() only accepts arguments of type Medicoespecialidad or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Medicoespecialidad relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function joinMedicoespecialidad($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Medicoespecialidad');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Medicoespecialidad');
        }

        return $this;
    }

    /**
     * Use the Medicoespecialidad relation Medicoespecialidad object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MedicoespecialidadQuery A secondary query class using the current class as primary query
     */
    public function useMedicoespecialidadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMedicoespecialidad($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Medicoespecialidad', 'MedicoespecialidadQuery');
    }

    /**
     * Filter the query by a related Medicofacturacion object
     *
     * @param   Medicofacturacion|PropelObjectCollection $medicofacturacion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MedicoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMedicofacturacion($medicofacturacion, $comparison = null)
    {
        if ($medicofacturacion instanceof Medicofacturacion) {
            return $this
                ->addUsingAlias(MedicoPeer::IDMEDICO, $medicofacturacion->getIdmedico(), $comparison);
        } elseif ($medicofacturacion instanceof PropelObjectCollection) {
            return $this
                ->useMedicofacturacionQuery()
                ->filterByPrimaryKeys($medicofacturacion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByMedicofacturacion() only accepts arguments of type Medicofacturacion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Medicofacturacion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function joinMedicofacturacion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Medicofacturacion');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Medicofacturacion');
        }

        return $this;
    }

    /**
     * Use the Medicofacturacion relation Medicofacturacion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MedicofacturacionQuery A secondary query class using the current class as primary query
     */
    public function useMedicofacturacionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMedicofacturacion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Medicofacturacion', 'MedicofacturacionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Medico $medico Object to remove from the list of results
     *
     * @return MedicoQuery The current query, for fluid interface
     */
    public function prune($medico = null)
    {
        if ($medico) {
            $this->addUsingAlias(MedicoPeer::IDMEDICO, $medico->getIdmedico(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
