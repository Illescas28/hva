<?php


/**
 * Base class that represents a query for the 'paciente' table.
 *
 *
 *
 * @method PacienteQuery orderByIdpaciente($order = Criteria::ASC) Order by the idpaciente column
 * @method PacienteQuery orderByPacienteNombre($order = Criteria::ASC) Order by the paciente_nombre column
 * @method PacienteQuery orderByPacienteAp($order = Criteria::ASC) Order by the paciente_ap column
 * @method PacienteQuery orderByPacienteAm($order = Criteria::ASC) Order by the paciente_am column
 * @method PacienteQuery orderByPacienteCalle($order = Criteria::ASC) Order by the paciente_calle column
 * @method PacienteQuery orderByPacienteNoexterior($order = Criteria::ASC) Order by the paciente_noexterior column
 * @method PacienteQuery orderByPacienteNointerior($order = Criteria::ASC) Order by the paciente_nointerior column
 * @method PacienteQuery orderByPacienteColonia($order = Criteria::ASC) Order by the paciente_colonia column
 * @method PacienteQuery orderByPacienteCodigopostal($order = Criteria::ASC) Order by the paciente_codigopostal column
 * @method PacienteQuery orderByPacienteCiudad($order = Criteria::ASC) Order by the paciente_ciudad column
 * @method PacienteQuery orderByPacienteEstado($order = Criteria::ASC) Order by the paciente_estado column
 * @method PacienteQuery orderByPacientePais($order = Criteria::ASC) Order by the paciente_pais column
 * @method PacienteQuery orderByPacienteTelefono($order = Criteria::ASC) Order by the paciente_telefono column
 * @method PacienteQuery orderByPacienteTelefonocelular($order = Criteria::ASC) Order by the paciente_telefonocelular column
 * @method PacienteQuery orderByPacienteFechanacimiento($order = Criteria::ASC) Order by the paciente_fechanacimiento column
 * @method PacienteQuery orderByPacienteSexo($order = Criteria::ASC) Order by the paciente_sexo column
 * @method PacienteQuery orderByPacienteEstadocivil($order = Criteria::ASC) Order by the paciente_estadocivil column
 * @method PacienteQuery orderByPacienteOcupacion($order = Criteria::ASC) Order by the paciente_ocupacion column
 * @method PacienteQuery orderByPacienteConyuge($order = Criteria::ASC) Order by the paciente_conyuge column
 * @method PacienteQuery orderByPacientePadre($order = Criteria::ASC) Order by the paciente_padre column
 * @method PacienteQuery orderByPacienteMadre($order = Criteria::ASC) Order by the paciente_madre column
 * @method PacienteQuery orderByPacienteResponsable($order = Criteria::ASC) Order by the paciente_responsable column
 * @method PacienteQuery orderByPacienteTelefonoresponsable($order = Criteria::ASC) Order by the paciente_telefonoresponsable column
 *
 * @method PacienteQuery groupByIdpaciente() Group by the idpaciente column
 * @method PacienteQuery groupByPacienteNombre() Group by the paciente_nombre column
 * @method PacienteQuery groupByPacienteAp() Group by the paciente_ap column
 * @method PacienteQuery groupByPacienteAm() Group by the paciente_am column
 * @method PacienteQuery groupByPacienteCalle() Group by the paciente_calle column
 * @method PacienteQuery groupByPacienteNoexterior() Group by the paciente_noexterior column
 * @method PacienteQuery groupByPacienteNointerior() Group by the paciente_nointerior column
 * @method PacienteQuery groupByPacienteColonia() Group by the paciente_colonia column
 * @method PacienteQuery groupByPacienteCodigopostal() Group by the paciente_codigopostal column
 * @method PacienteQuery groupByPacienteCiudad() Group by the paciente_ciudad column
 * @method PacienteQuery groupByPacienteEstado() Group by the paciente_estado column
 * @method PacienteQuery groupByPacientePais() Group by the paciente_pais column
 * @method PacienteQuery groupByPacienteTelefono() Group by the paciente_telefono column
 * @method PacienteQuery groupByPacienteTelefonocelular() Group by the paciente_telefonocelular column
 * @method PacienteQuery groupByPacienteFechanacimiento() Group by the paciente_fechanacimiento column
 * @method PacienteQuery groupByPacienteSexo() Group by the paciente_sexo column
 * @method PacienteQuery groupByPacienteEstadocivil() Group by the paciente_estadocivil column
 * @method PacienteQuery groupByPacienteOcupacion() Group by the paciente_ocupacion column
 * @method PacienteQuery groupByPacienteConyuge() Group by the paciente_conyuge column
 * @method PacienteQuery groupByPacientePadre() Group by the paciente_padre column
 * @method PacienteQuery groupByPacienteMadre() Group by the paciente_madre column
 * @method PacienteQuery groupByPacienteResponsable() Group by the paciente_responsable column
 * @method PacienteQuery groupByPacienteTelefonoresponsable() Group by the paciente_telefonoresponsable column
 *
 * @method PacienteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PacienteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PacienteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PacienteQuery leftJoinAdmision($relationAlias = null) Adds a LEFT JOIN clause to the query using the Admision relation
 * @method PacienteQuery rightJoinAdmision($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Admision relation
 * @method PacienteQuery innerJoinAdmision($relationAlias = null) Adds a INNER JOIN clause to the query using the Admision relation
 *
 * @method PacienteQuery leftJoinCita($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cita relation
 * @method PacienteQuery rightJoinCita($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cita relation
 * @method PacienteQuery innerJoinCita($relationAlias = null) Adds a INNER JOIN clause to the query using the Cita relation
 *
 * @method PacienteQuery leftJoinConsulta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Consulta relation
 * @method PacienteQuery rightJoinConsulta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Consulta relation
 * @method PacienteQuery innerJoinConsulta($relationAlias = null) Adds a INNER JOIN clause to the query using the Consulta relation
 *
 * @method PacienteQuery leftJoinPacientefacturacion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pacientefacturacion relation
 * @method PacienteQuery rightJoinPacientefacturacion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pacientefacturacion relation
 * @method PacienteQuery innerJoinPacientefacturacion($relationAlias = null) Adds a INNER JOIN clause to the query using the Pacientefacturacion relation
 *
 * @method PacienteQuery leftJoinVenta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Venta relation
 * @method PacienteQuery rightJoinVenta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Venta relation
 * @method PacienteQuery innerJoinVenta($relationAlias = null) Adds a INNER JOIN clause to the query using the Venta relation
 *
 * @method Paciente findOne(PropelPDO $con = null) Return the first Paciente matching the query
 * @method Paciente findOneOrCreate(PropelPDO $con = null) Return the first Paciente matching the query, or a new Paciente object populated from the query conditions when no match is found
 *
 * @method Paciente findOneByPacienteNombre(string $paciente_nombre) Return the first Paciente filtered by the paciente_nombre column
 * @method Paciente findOneByPacienteAp(string $paciente_ap) Return the first Paciente filtered by the paciente_ap column
 * @method Paciente findOneByPacienteAm(string $paciente_am) Return the first Paciente filtered by the paciente_am column
 * @method Paciente findOneByPacienteCalle(string $paciente_calle) Return the first Paciente filtered by the paciente_calle column
 * @method Paciente findOneByPacienteNoexterior(string $paciente_noexterior) Return the first Paciente filtered by the paciente_noexterior column
 * @method Paciente findOneByPacienteNointerior(string $paciente_nointerior) Return the first Paciente filtered by the paciente_nointerior column
 * @method Paciente findOneByPacienteColonia(string $paciente_colonia) Return the first Paciente filtered by the paciente_colonia column
 * @method Paciente findOneByPacienteCodigopostal(string $paciente_codigopostal) Return the first Paciente filtered by the paciente_codigopostal column
 * @method Paciente findOneByPacienteCiudad(string $paciente_ciudad) Return the first Paciente filtered by the paciente_ciudad column
 * @method Paciente findOneByPacienteEstado(string $paciente_estado) Return the first Paciente filtered by the paciente_estado column
 * @method Paciente findOneByPacientePais(string $paciente_pais) Return the first Paciente filtered by the paciente_pais column
 * @method Paciente findOneByPacienteTelefono(string $paciente_telefono) Return the first Paciente filtered by the paciente_telefono column
 * @method Paciente findOneByPacienteTelefonocelular(string $paciente_telefonocelular) Return the first Paciente filtered by the paciente_telefonocelular column
 * @method Paciente findOneByPacienteFechanacimiento(string $paciente_fechanacimiento) Return the first Paciente filtered by the paciente_fechanacimiento column
 * @method Paciente findOneByPacienteSexo(string $paciente_sexo) Return the first Paciente filtered by the paciente_sexo column
 * @method Paciente findOneByPacienteEstadocivil(string $paciente_estadocivil) Return the first Paciente filtered by the paciente_estadocivil column
 * @method Paciente findOneByPacienteOcupacion(string $paciente_ocupacion) Return the first Paciente filtered by the paciente_ocupacion column
 * @method Paciente findOneByPacienteConyuge(string $paciente_conyuge) Return the first Paciente filtered by the paciente_conyuge column
 * @method Paciente findOneByPacientePadre(string $paciente_padre) Return the first Paciente filtered by the paciente_padre column
 * @method Paciente findOneByPacienteMadre(string $paciente_madre) Return the first Paciente filtered by the paciente_madre column
 * @method Paciente findOneByPacienteResponsable(string $paciente_responsable) Return the first Paciente filtered by the paciente_responsable column
 * @method Paciente findOneByPacienteTelefonoresponsable(string $paciente_telefonoresponsable) Return the first Paciente filtered by the paciente_telefonoresponsable column
 *
 * @method array findByIdpaciente(int $idpaciente) Return Paciente objects filtered by the idpaciente column
 * @method array findByPacienteNombre(string $paciente_nombre) Return Paciente objects filtered by the paciente_nombre column
 * @method array findByPacienteAp(string $paciente_ap) Return Paciente objects filtered by the paciente_ap column
 * @method array findByPacienteAm(string $paciente_am) Return Paciente objects filtered by the paciente_am column
 * @method array findByPacienteCalle(string $paciente_calle) Return Paciente objects filtered by the paciente_calle column
 * @method array findByPacienteNoexterior(string $paciente_noexterior) Return Paciente objects filtered by the paciente_noexterior column
 * @method array findByPacienteNointerior(string $paciente_nointerior) Return Paciente objects filtered by the paciente_nointerior column
 * @method array findByPacienteColonia(string $paciente_colonia) Return Paciente objects filtered by the paciente_colonia column
 * @method array findByPacienteCodigopostal(string $paciente_codigopostal) Return Paciente objects filtered by the paciente_codigopostal column
 * @method array findByPacienteCiudad(string $paciente_ciudad) Return Paciente objects filtered by the paciente_ciudad column
 * @method array findByPacienteEstado(string $paciente_estado) Return Paciente objects filtered by the paciente_estado column
 * @method array findByPacientePais(string $paciente_pais) Return Paciente objects filtered by the paciente_pais column
 * @method array findByPacienteTelefono(string $paciente_telefono) Return Paciente objects filtered by the paciente_telefono column
 * @method array findByPacienteTelefonocelular(string $paciente_telefonocelular) Return Paciente objects filtered by the paciente_telefonocelular column
 * @method array findByPacienteFechanacimiento(string $paciente_fechanacimiento) Return Paciente objects filtered by the paciente_fechanacimiento column
 * @method array findByPacienteSexo(string $paciente_sexo) Return Paciente objects filtered by the paciente_sexo column
 * @method array findByPacienteEstadocivil(string $paciente_estadocivil) Return Paciente objects filtered by the paciente_estadocivil column
 * @method array findByPacienteOcupacion(string $paciente_ocupacion) Return Paciente objects filtered by the paciente_ocupacion column
 * @method array findByPacienteConyuge(string $paciente_conyuge) Return Paciente objects filtered by the paciente_conyuge column
 * @method array findByPacientePadre(string $paciente_padre) Return Paciente objects filtered by the paciente_padre column
 * @method array findByPacienteMadre(string $paciente_madre) Return Paciente objects filtered by the paciente_madre column
 * @method array findByPacienteResponsable(string $paciente_responsable) Return Paciente objects filtered by the paciente_responsable column
 * @method array findByPacienteTelefonoresponsable(string $paciente_telefonoresponsable) Return Paciente objects filtered by the paciente_telefonoresponsable column
 *
 * @package    propel.generator.hva.om
 */
abstract class BasePacienteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePacienteQuery object.
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
            $modelName = 'Paciente';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PacienteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PacienteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PacienteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PacienteQuery) {
            return $criteria;
        }
        $query = new PacienteQuery(null, null, $modelAlias);

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
     * @return   Paciente|Paciente[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PacientePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PacientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Paciente A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdpaciente($key, $con = null)
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
     * @return                 Paciente A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idpaciente`, `paciente_nombre`, `paciente_ap`, `paciente_am`, `paciente_calle`, `paciente_noexterior`, `paciente_nointerior`, `paciente_colonia`, `paciente_codigopostal`, `paciente_ciudad`, `paciente_estado`, `paciente_pais`, `paciente_telefono`, `paciente_telefonocelular`, `paciente_fechanacimiento`, `paciente_sexo`, `paciente_estadocivil`, `paciente_ocupacion`, `paciente_conyuge`, `paciente_padre`, `paciente_madre`, `paciente_responsable`, `paciente_telefonoresponsable` FROM `paciente` WHERE `idpaciente` = :p0';
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
            $obj = new Paciente();
            $obj->hydrate($row);
            PacientePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Paciente|Paciente[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Paciente[]|mixed the list of results, formatted by the current formatter
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
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PacientePeer::IDPACIENTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PacientePeer::IDPACIENTE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idpaciente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpaciente(1234); // WHERE idpaciente = 1234
     * $query->filterByIdpaciente(array(12, 34)); // WHERE idpaciente IN (12, 34)
     * $query->filterByIdpaciente(array('min' => 12)); // WHERE idpaciente >= 12
     * $query->filterByIdpaciente(array('max' => 12)); // WHERE idpaciente <= 12
     * </code>
     *
     * @param     mixed $idpaciente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByIdpaciente($idpaciente = null, $comparison = null)
    {
        if (is_array($idpaciente)) {
            $useMinMax = false;
            if (isset($idpaciente['min'])) {
                $this->addUsingAlias(PacientePeer::IDPACIENTE, $idpaciente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpaciente['max'])) {
                $this->addUsingAlias(PacientePeer::IDPACIENTE, $idpaciente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientePeer::IDPACIENTE, $idpaciente, $comparison);
    }

    /**
     * Filter the query on the paciente_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteNombre('fooValue');   // WHERE paciente_nombre = 'fooValue'
     * $query->filterByPacienteNombre('%fooValue%'); // WHERE paciente_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteNombre($pacienteNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteNombre)) {
                $pacienteNombre = str_replace('*', '%', $pacienteNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_NOMBRE, $pacienteNombre, $comparison);
    }

    /**
     * Filter the query on the paciente_ap column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteAp('fooValue');   // WHERE paciente_ap = 'fooValue'
     * $query->filterByPacienteAp('%fooValue%'); // WHERE paciente_ap LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteAp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteAp($pacienteAp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteAp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteAp)) {
                $pacienteAp = str_replace('*', '%', $pacienteAp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_AP, $pacienteAp, $comparison);
    }

    /**
     * Filter the query on the paciente_am column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteAm('fooValue');   // WHERE paciente_am = 'fooValue'
     * $query->filterByPacienteAm('%fooValue%'); // WHERE paciente_am LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteAm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteAm($pacienteAm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteAm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteAm)) {
                $pacienteAm = str_replace('*', '%', $pacienteAm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_AM, $pacienteAm, $comparison);
    }

    /**
     * Filter the query on the paciente_calle column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteCalle('fooValue');   // WHERE paciente_calle = 'fooValue'
     * $query->filterByPacienteCalle('%fooValue%'); // WHERE paciente_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteCalle($pacienteCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteCalle)) {
                $pacienteCalle = str_replace('*', '%', $pacienteCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_CALLE, $pacienteCalle, $comparison);
    }

    /**
     * Filter the query on the paciente_noexterior column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteNoexterior('fooValue');   // WHERE paciente_noexterior = 'fooValue'
     * $query->filterByPacienteNoexterior('%fooValue%'); // WHERE paciente_noexterior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteNoexterior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteNoexterior($pacienteNoexterior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteNoexterior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteNoexterior)) {
                $pacienteNoexterior = str_replace('*', '%', $pacienteNoexterior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_NOEXTERIOR, $pacienteNoexterior, $comparison);
    }

    /**
     * Filter the query on the paciente_nointerior column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteNointerior('fooValue');   // WHERE paciente_nointerior = 'fooValue'
     * $query->filterByPacienteNointerior('%fooValue%'); // WHERE paciente_nointerior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteNointerior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteNointerior($pacienteNointerior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteNointerior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteNointerior)) {
                $pacienteNointerior = str_replace('*', '%', $pacienteNointerior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_NOINTERIOR, $pacienteNointerior, $comparison);
    }

    /**
     * Filter the query on the paciente_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteColonia('fooValue');   // WHERE paciente_colonia = 'fooValue'
     * $query->filterByPacienteColonia('%fooValue%'); // WHERE paciente_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteColonia($pacienteColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteColonia)) {
                $pacienteColonia = str_replace('*', '%', $pacienteColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_COLONIA, $pacienteColonia, $comparison);
    }

    /**
     * Filter the query on the paciente_codigopostal column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteCodigopostal('fooValue');   // WHERE paciente_codigopostal = 'fooValue'
     * $query->filterByPacienteCodigopostal('%fooValue%'); // WHERE paciente_codigopostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteCodigopostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteCodigopostal($pacienteCodigopostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteCodigopostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteCodigopostal)) {
                $pacienteCodigopostal = str_replace('*', '%', $pacienteCodigopostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_CODIGOPOSTAL, $pacienteCodigopostal, $comparison);
    }

    /**
     * Filter the query on the paciente_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteCiudad('fooValue');   // WHERE paciente_ciudad = 'fooValue'
     * $query->filterByPacienteCiudad('%fooValue%'); // WHERE paciente_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteCiudad($pacienteCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteCiudad)) {
                $pacienteCiudad = str_replace('*', '%', $pacienteCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_CIUDAD, $pacienteCiudad, $comparison);
    }

    /**
     * Filter the query on the paciente_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteEstado('fooValue');   // WHERE paciente_estado = 'fooValue'
     * $query->filterByPacienteEstado('%fooValue%'); // WHERE paciente_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteEstado($pacienteEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteEstado)) {
                $pacienteEstado = str_replace('*', '%', $pacienteEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_ESTADO, $pacienteEstado, $comparison);
    }

    /**
     * Filter the query on the paciente_pais column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientePais('fooValue');   // WHERE paciente_pais = 'fooValue'
     * $query->filterByPacientePais('%fooValue%'); // WHERE paciente_pais LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacientePais The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacientePais($pacientePais = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacientePais)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacientePais)) {
                $pacientePais = str_replace('*', '%', $pacientePais);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_PAIS, $pacientePais, $comparison);
    }

    /**
     * Filter the query on the paciente_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteTelefono('fooValue');   // WHERE paciente_telefono = 'fooValue'
     * $query->filterByPacienteTelefono('%fooValue%'); // WHERE paciente_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteTelefono($pacienteTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteTelefono)) {
                $pacienteTelefono = str_replace('*', '%', $pacienteTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_TELEFONO, $pacienteTelefono, $comparison);
    }

    /**
     * Filter the query on the paciente_telefonocelular column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteTelefonocelular('fooValue');   // WHERE paciente_telefonocelular = 'fooValue'
     * $query->filterByPacienteTelefonocelular('%fooValue%'); // WHERE paciente_telefonocelular LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteTelefonocelular The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteTelefonocelular($pacienteTelefonocelular = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteTelefonocelular)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteTelefonocelular)) {
                $pacienteTelefonocelular = str_replace('*', '%', $pacienteTelefonocelular);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_TELEFONOCELULAR, $pacienteTelefonocelular, $comparison);
    }

    /**
     * Filter the query on the paciente_fechanacimiento column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteFechanacimiento('2011-03-14'); // WHERE paciente_fechanacimiento = '2011-03-14'
     * $query->filterByPacienteFechanacimiento('now'); // WHERE paciente_fechanacimiento = '2011-03-14'
     * $query->filterByPacienteFechanacimiento(array('max' => 'yesterday')); // WHERE paciente_fechanacimiento < '2011-03-13'
     * </code>
     *
     * @param     mixed $pacienteFechanacimiento The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteFechanacimiento($pacienteFechanacimiento = null, $comparison = null)
    {
        if (is_array($pacienteFechanacimiento)) {
            $useMinMax = false;
            if (isset($pacienteFechanacimiento['min'])) {
                $this->addUsingAlias(PacientePeer::PACIENTE_FECHANACIMIENTO, $pacienteFechanacimiento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pacienteFechanacimiento['max'])) {
                $this->addUsingAlias(PacientePeer::PACIENTE_FECHANACIMIENTO, $pacienteFechanacimiento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_FECHANACIMIENTO, $pacienteFechanacimiento, $comparison);
    }

    /**
     * Filter the query on the paciente_sexo column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteSexo('fooValue');   // WHERE paciente_sexo = 'fooValue'
     * $query->filterByPacienteSexo('%fooValue%'); // WHERE paciente_sexo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteSexo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteSexo($pacienteSexo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteSexo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteSexo)) {
                $pacienteSexo = str_replace('*', '%', $pacienteSexo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_SEXO, $pacienteSexo, $comparison);
    }

    /**
     * Filter the query on the paciente_estadocivil column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteEstadocivil('fooValue');   // WHERE paciente_estadocivil = 'fooValue'
     * $query->filterByPacienteEstadocivil('%fooValue%'); // WHERE paciente_estadocivil LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteEstadocivil The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteEstadocivil($pacienteEstadocivil = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteEstadocivil)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteEstadocivil)) {
                $pacienteEstadocivil = str_replace('*', '%', $pacienteEstadocivil);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_ESTADOCIVIL, $pacienteEstadocivil, $comparison);
    }

    /**
     * Filter the query on the paciente_ocupacion column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteOcupacion('fooValue');   // WHERE paciente_ocupacion = 'fooValue'
     * $query->filterByPacienteOcupacion('%fooValue%'); // WHERE paciente_ocupacion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteOcupacion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteOcupacion($pacienteOcupacion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteOcupacion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteOcupacion)) {
                $pacienteOcupacion = str_replace('*', '%', $pacienteOcupacion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_OCUPACION, $pacienteOcupacion, $comparison);
    }

    /**
     * Filter the query on the paciente_conyuge column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteConyuge('fooValue');   // WHERE paciente_conyuge = 'fooValue'
     * $query->filterByPacienteConyuge('%fooValue%'); // WHERE paciente_conyuge LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteConyuge The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteConyuge($pacienteConyuge = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteConyuge)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteConyuge)) {
                $pacienteConyuge = str_replace('*', '%', $pacienteConyuge);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_CONYUGE, $pacienteConyuge, $comparison);
    }

    /**
     * Filter the query on the paciente_padre column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientePadre('fooValue');   // WHERE paciente_padre = 'fooValue'
     * $query->filterByPacientePadre('%fooValue%'); // WHERE paciente_padre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacientePadre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacientePadre($pacientePadre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacientePadre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacientePadre)) {
                $pacientePadre = str_replace('*', '%', $pacientePadre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_PADRE, $pacientePadre, $comparison);
    }

    /**
     * Filter the query on the paciente_madre column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteMadre('fooValue');   // WHERE paciente_madre = 'fooValue'
     * $query->filterByPacienteMadre('%fooValue%'); // WHERE paciente_madre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteMadre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteMadre($pacienteMadre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteMadre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteMadre)) {
                $pacienteMadre = str_replace('*', '%', $pacienteMadre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_MADRE, $pacienteMadre, $comparison);
    }

    /**
     * Filter the query on the paciente_responsable column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteResponsable('fooValue');   // WHERE paciente_responsable = 'fooValue'
     * $query->filterByPacienteResponsable('%fooValue%'); // WHERE paciente_responsable LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteResponsable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteResponsable($pacienteResponsable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteResponsable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteResponsable)) {
                $pacienteResponsable = str_replace('*', '%', $pacienteResponsable);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_RESPONSABLE, $pacienteResponsable, $comparison);
    }

    /**
     * Filter the query on the paciente_telefonoresponsable column
     *
     * Example usage:
     * <code>
     * $query->filterByPacienteTelefonoresponsable('fooValue');   // WHERE paciente_telefonoresponsable = 'fooValue'
     * $query->filterByPacienteTelefonoresponsable('%fooValue%'); // WHERE paciente_telefonoresponsable LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacienteTelefonoresponsable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function filterByPacienteTelefonoresponsable($pacienteTelefonoresponsable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacienteTelefonoresponsable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacienteTelefonoresponsable)) {
                $pacienteTelefonoresponsable = str_replace('*', '%', $pacienteTelefonoresponsable);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientePeer::PACIENTE_TELEFONORESPONSABLE, $pacienteTelefonoresponsable, $comparison);
    }

    /**
     * Filter the query by a related Admision object
     *
     * @param   Admision|PropelObjectCollection $admision  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAdmision($admision, $comparison = null)
    {
        if ($admision instanceof Admision) {
            return $this
                ->addUsingAlias(PacientePeer::IDPACIENTE, $admision->getIdpaciente(), $comparison);
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
     * @return PacienteQuery The current query, for fluid interface
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
     * @return                 PacienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCita($cita, $comparison = null)
    {
        if ($cita instanceof Cita) {
            return $this
                ->addUsingAlias(PacientePeer::IDPACIENTE, $cita->getIdpaciente(), $comparison);
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
     * @return PacienteQuery The current query, for fluid interface
     */
    public function joinCita($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useCitaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @return                 PacienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConsulta($consulta, $comparison = null)
    {
        if ($consulta instanceof Consulta) {
            return $this
                ->addUsingAlias(PacientePeer::IDPACIENTE, $consulta->getIdpaciente(), $comparison);
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
     * @return PacienteQuery The current query, for fluid interface
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
     * Filter the query by a related Pacientefacturacion object
     *
     * @param   Pacientefacturacion|PropelObjectCollection $pacientefacturacion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPacientefacturacion($pacientefacturacion, $comparison = null)
    {
        if ($pacientefacturacion instanceof Pacientefacturacion) {
            return $this
                ->addUsingAlias(PacientePeer::IDPACIENTE, $pacientefacturacion->getIdpaciente(), $comparison);
        } elseif ($pacientefacturacion instanceof PropelObjectCollection) {
            return $this
                ->usePacientefacturacionQuery()
                ->filterByPrimaryKeys($pacientefacturacion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPacientefacturacion() only accepts arguments of type Pacientefacturacion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pacientefacturacion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function joinPacientefacturacion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pacientefacturacion');

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
            $this->addJoinObject($join, 'Pacientefacturacion');
        }

        return $this;
    }

    /**
     * Use the Pacientefacturacion relation Pacientefacturacion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacientefacturacionQuery A secondary query class using the current class as primary query
     */
    public function usePacientefacturacionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPacientefacturacion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pacientefacturacion', 'PacientefacturacionQuery');
    }

    /**
     * Filter the query by a related Venta object
     *
     * @param   Venta|PropelObjectCollection $venta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVenta($venta, $comparison = null)
    {
        if ($venta instanceof Venta) {
            return $this
                ->addUsingAlias(PacientePeer::IDPACIENTE, $venta->getIdpaciente(), $comparison);
        } elseif ($venta instanceof PropelObjectCollection) {
            return $this
                ->useVentaQuery()
                ->filterByPrimaryKeys($venta->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVenta() only accepts arguments of type Venta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Venta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function joinVenta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Venta');

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
            $this->addJoinObject($join, 'Venta');
        }

        return $this;
    }

    /**
     * Use the Venta relation Venta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentaQuery A secondary query class using the current class as primary query
     */
    public function useVentaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVenta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Venta', 'VentaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Paciente $paciente Object to remove from the list of results
     *
     * @return PacienteQuery The current query, for fluid interface
     */
    public function prune($paciente = null)
    {
        if ($paciente) {
            $this->addUsingAlias(PacientePeer::IDPACIENTE, $paciente->getIdpaciente(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
