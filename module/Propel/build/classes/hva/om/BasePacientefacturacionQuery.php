<?php


/**
 * Base class that represents a query for the 'pacientefacturacion' table.
 *
 *
 *
 * @method PacientefacturacionQuery orderByIdpacientefacturacion($order = Criteria::ASC) Order by the idpacientefacturacion column
 * @method PacientefacturacionQuery orderByIdpaciente($order = Criteria::ASC) Order by the idpaciente column
 * @method PacientefacturacionQuery orderByPacientefacturacionRazonsocial($order = Criteria::ASC) Order by the pacientefacturacion_razonsocial column
 * @method PacientefacturacionQuery orderByPacientefacturacionRfc($order = Criteria::ASC) Order by the pacientefacturacion_rfc column
 * @method PacientefacturacionQuery orderByPacientefacturacionCalle($order = Criteria::ASC) Order by the pacientefacturacion_calle column
 * @method PacientefacturacionQuery orderByPacientefacturacionNoexterior($order = Criteria::ASC) Order by the pacientefacturacion_noexterior column
 * @method PacientefacturacionQuery orderByPacientefacturacionNointerior($order = Criteria::ASC) Order by the pacientefacturacion_nointerior column
 * @method PacientefacturacionQuery orderByPacientefacturacionColonia($order = Criteria::ASC) Order by the pacientefacturacion_colonia column
 * @method PacientefacturacionQuery orderByPacientefacturacionCiudad($order = Criteria::ASC) Order by the pacientefacturacion_ciudad column
 * @method PacientefacturacionQuery orderByPacientefacturacionEstado($order = Criteria::ASC) Order by the pacientefacturacion_estado column
 * @method PacientefacturacionQuery orderByPacientefacturacionPais($order = Criteria::ASC) Order by the pacientefacturacion_pais column
 * @method PacientefacturacionQuery orderByPacientefacturacionCodigopostal($order = Criteria::ASC) Order by the pacientefacturacion_codigopostal column
 * @method PacientefacturacionQuery orderByPacientefacturacionTelefono($order = Criteria::ASC) Order by the pacientefacturacion_telefono column
 * @method PacientefacturacionQuery orderByPacientefacturacionEmail($order = Criteria::ASC) Order by the pacientefacturacion_email column
 *
 * @method PacientefacturacionQuery groupByIdpacientefacturacion() Group by the idpacientefacturacion column
 * @method PacientefacturacionQuery groupByIdpaciente() Group by the idpaciente column
 * @method PacientefacturacionQuery groupByPacientefacturacionRazonsocial() Group by the pacientefacturacion_razonsocial column
 * @method PacientefacturacionQuery groupByPacientefacturacionRfc() Group by the pacientefacturacion_rfc column
 * @method PacientefacturacionQuery groupByPacientefacturacionCalle() Group by the pacientefacturacion_calle column
 * @method PacientefacturacionQuery groupByPacientefacturacionNoexterior() Group by the pacientefacturacion_noexterior column
 * @method PacientefacturacionQuery groupByPacientefacturacionNointerior() Group by the pacientefacturacion_nointerior column
 * @method PacientefacturacionQuery groupByPacientefacturacionColonia() Group by the pacientefacturacion_colonia column
 * @method PacientefacturacionQuery groupByPacientefacturacionCiudad() Group by the pacientefacturacion_ciudad column
 * @method PacientefacturacionQuery groupByPacientefacturacionEstado() Group by the pacientefacturacion_estado column
 * @method PacientefacturacionQuery groupByPacientefacturacionPais() Group by the pacientefacturacion_pais column
 * @method PacientefacturacionQuery groupByPacientefacturacionCodigopostal() Group by the pacientefacturacion_codigopostal column
 * @method PacientefacturacionQuery groupByPacientefacturacionTelefono() Group by the pacientefacturacion_telefono column
 * @method PacientefacturacionQuery groupByPacientefacturacionEmail() Group by the pacientefacturacion_email column
 *
 * @method PacientefacturacionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PacientefacturacionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PacientefacturacionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PacientefacturacionQuery leftJoinPaciente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paciente relation
 * @method PacientefacturacionQuery rightJoinPaciente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paciente relation
 * @method PacientefacturacionQuery innerJoinPaciente($relationAlias = null) Adds a INNER JOIN clause to the query using the Paciente relation
 *
 * @method PacientefacturacionQuery leftJoinFactura($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factura relation
 * @method PacientefacturacionQuery rightJoinFactura($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factura relation
 * @method PacientefacturacionQuery innerJoinFactura($relationAlias = null) Adds a INNER JOIN clause to the query using the Factura relation
 *
 * @method Pacientefacturacion findOne(PropelPDO $con = null) Return the first Pacientefacturacion matching the query
 * @method Pacientefacturacion findOneOrCreate(PropelPDO $con = null) Return the first Pacientefacturacion matching the query, or a new Pacientefacturacion object populated from the query conditions when no match is found
 *
 * @method Pacientefacturacion findOneByIdpaciente(int $idpaciente) Return the first Pacientefacturacion filtered by the idpaciente column
 * @method Pacientefacturacion findOneByPacientefacturacionRazonsocial(string $pacientefacturacion_razonsocial) Return the first Pacientefacturacion filtered by the pacientefacturacion_razonsocial column
 * @method Pacientefacturacion findOneByPacientefacturacionRfc(string $pacientefacturacion_rfc) Return the first Pacientefacturacion filtered by the pacientefacturacion_rfc column
 * @method Pacientefacturacion findOneByPacientefacturacionCalle(string $pacientefacturacion_calle) Return the first Pacientefacturacion filtered by the pacientefacturacion_calle column
 * @method Pacientefacturacion findOneByPacientefacturacionNoexterior(string $pacientefacturacion_noexterior) Return the first Pacientefacturacion filtered by the pacientefacturacion_noexterior column
 * @method Pacientefacturacion findOneByPacientefacturacionNointerior(string $pacientefacturacion_nointerior) Return the first Pacientefacturacion filtered by the pacientefacturacion_nointerior column
 * @method Pacientefacturacion findOneByPacientefacturacionColonia(string $pacientefacturacion_colonia) Return the first Pacientefacturacion filtered by the pacientefacturacion_colonia column
 * @method Pacientefacturacion findOneByPacientefacturacionCiudad(string $pacientefacturacion_ciudad) Return the first Pacientefacturacion filtered by the pacientefacturacion_ciudad column
 * @method Pacientefacturacion findOneByPacientefacturacionEstado(string $pacientefacturacion_estado) Return the first Pacientefacturacion filtered by the pacientefacturacion_estado column
 * @method Pacientefacturacion findOneByPacientefacturacionPais(string $pacientefacturacion_pais) Return the first Pacientefacturacion filtered by the pacientefacturacion_pais column
 * @method Pacientefacturacion findOneByPacientefacturacionCodigopostal(string $pacientefacturacion_codigopostal) Return the first Pacientefacturacion filtered by the pacientefacturacion_codigopostal column
 * @method Pacientefacturacion findOneByPacientefacturacionTelefono(string $pacientefacturacion_telefono) Return the first Pacientefacturacion filtered by the pacientefacturacion_telefono column
 * @method Pacientefacturacion findOneByPacientefacturacionEmail(string $pacientefacturacion_email) Return the first Pacientefacturacion filtered by the pacientefacturacion_email column
 *
 * @method array findByIdpacientefacturacion(int $idpacientefacturacion) Return Pacientefacturacion objects filtered by the idpacientefacturacion column
 * @method array findByIdpaciente(int $idpaciente) Return Pacientefacturacion objects filtered by the idpaciente column
 * @method array findByPacientefacturacionRazonsocial(string $pacientefacturacion_razonsocial) Return Pacientefacturacion objects filtered by the pacientefacturacion_razonsocial column
 * @method array findByPacientefacturacionRfc(string $pacientefacturacion_rfc) Return Pacientefacturacion objects filtered by the pacientefacturacion_rfc column
 * @method array findByPacientefacturacionCalle(string $pacientefacturacion_calle) Return Pacientefacturacion objects filtered by the pacientefacturacion_calle column
 * @method array findByPacientefacturacionNoexterior(string $pacientefacturacion_noexterior) Return Pacientefacturacion objects filtered by the pacientefacturacion_noexterior column
 * @method array findByPacientefacturacionNointerior(string $pacientefacturacion_nointerior) Return Pacientefacturacion objects filtered by the pacientefacturacion_nointerior column
 * @method array findByPacientefacturacionColonia(string $pacientefacturacion_colonia) Return Pacientefacturacion objects filtered by the pacientefacturacion_colonia column
 * @method array findByPacientefacturacionCiudad(string $pacientefacturacion_ciudad) Return Pacientefacturacion objects filtered by the pacientefacturacion_ciudad column
 * @method array findByPacientefacturacionEstado(string $pacientefacturacion_estado) Return Pacientefacturacion objects filtered by the pacientefacturacion_estado column
 * @method array findByPacientefacturacionPais(string $pacientefacturacion_pais) Return Pacientefacturacion objects filtered by the pacientefacturacion_pais column
 * @method array findByPacientefacturacionCodigopostal(string $pacientefacturacion_codigopostal) Return Pacientefacturacion objects filtered by the pacientefacturacion_codigopostal column
 * @method array findByPacientefacturacionTelefono(string $pacientefacturacion_telefono) Return Pacientefacturacion objects filtered by the pacientefacturacion_telefono column
 * @method array findByPacientefacturacionEmail(string $pacientefacturacion_email) Return Pacientefacturacion objects filtered by the pacientefacturacion_email column
 *
 * @package    propel.generator.hva.om
 */
abstract class BasePacientefacturacionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePacientefacturacionQuery object.
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
            $modelName = 'Pacientefacturacion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PacientefacturacionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PacientefacturacionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PacientefacturacionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PacientefacturacionQuery) {
            return $criteria;
        }
        $query = new PacientefacturacionQuery(null, null, $modelAlias);

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
     * @return   Pacientefacturacion|Pacientefacturacion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PacientefacturacionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PacientefacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Pacientefacturacion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdpacientefacturacion($key, $con = null)
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
     * @return                 Pacientefacturacion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idpacientefacturacion`, `idpaciente`, `pacientefacturacion_razonsocial`, `pacientefacturacion_rfc`, `pacientefacturacion_calle`, `pacientefacturacion_noexterior`, `pacientefacturacion_nointerior`, `pacientefacturacion_colonia`, `pacientefacturacion_ciudad`, `pacientefacturacion_estado`, `pacientefacturacion_pais`, `pacientefacturacion_codigopostal`, `pacientefacturacion_telefono`, `pacientefacturacion_email` FROM `pacientefacturacion` WHERE `idpacientefacturacion` = :p0';
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
            $obj = new Pacientefacturacion();
            $obj->hydrate($row);
            PacientefacturacionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Pacientefacturacion|Pacientefacturacion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Pacientefacturacion[]|mixed the list of results, formatted by the current formatter
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
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PacientefacturacionPeer::IDPACIENTEFACTURACION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PacientefacturacionPeer::IDPACIENTEFACTURACION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idpacientefacturacion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpacientefacturacion(1234); // WHERE idpacientefacturacion = 1234
     * $query->filterByIdpacientefacturacion(array(12, 34)); // WHERE idpacientefacturacion IN (12, 34)
     * $query->filterByIdpacientefacturacion(array('min' => 12)); // WHERE idpacientefacturacion >= 12
     * $query->filterByIdpacientefacturacion(array('max' => 12)); // WHERE idpacientefacturacion <= 12
     * </code>
     *
     * @param     mixed $idpacientefacturacion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function filterByIdpacientefacturacion($idpacientefacturacion = null, $comparison = null)
    {
        if (is_array($idpacientefacturacion)) {
            $useMinMax = false;
            if (isset($idpacientefacturacion['min'])) {
                $this->addUsingAlias(PacientefacturacionPeer::IDPACIENTEFACTURACION, $idpacientefacturacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpacientefacturacion['max'])) {
                $this->addUsingAlias(PacientefacturacionPeer::IDPACIENTEFACTURACION, $idpacientefacturacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientefacturacionPeer::IDPACIENTEFACTURACION, $idpacientefacturacion, $comparison);
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
     * @see       filterByPaciente()
     *
     * @param     mixed $idpaciente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function filterByIdpaciente($idpaciente = null, $comparison = null)
    {
        if (is_array($idpaciente)) {
            $useMinMax = false;
            if (isset($idpaciente['min'])) {
                $this->addUsingAlias(PacientefacturacionPeer::IDPACIENTE, $idpaciente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpaciente['max'])) {
                $this->addUsingAlias(PacientefacturacionPeer::IDPACIENTE, $idpaciente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PacientefacturacionPeer::IDPACIENTE, $idpaciente, $comparison);
    }

    /**
     * Filter the query on the pacientefacturacion_razonsocial column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientefacturacionRazonsocial('fooValue');   // WHERE pacientefacturacion_razonsocial = 'fooValue'
     * $query->filterByPacientefacturacionRazonsocial('%fooValue%'); // WHERE pacientefacturacion_razonsocial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacientefacturacionRazonsocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function filterByPacientefacturacionRazonsocial($pacientefacturacionRazonsocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacientefacturacionRazonsocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacientefacturacionRazonsocial)) {
                $pacientefacturacionRazonsocial = str_replace('*', '%', $pacientefacturacionRazonsocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientefacturacionPeer::PACIENTEFACTURACION_RAZONSOCIAL, $pacientefacturacionRazonsocial, $comparison);
    }

    /**
     * Filter the query on the pacientefacturacion_rfc column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientefacturacionRfc('fooValue');   // WHERE pacientefacturacion_rfc = 'fooValue'
     * $query->filterByPacientefacturacionRfc('%fooValue%'); // WHERE pacientefacturacion_rfc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacientefacturacionRfc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function filterByPacientefacturacionRfc($pacientefacturacionRfc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacientefacturacionRfc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacientefacturacionRfc)) {
                $pacientefacturacionRfc = str_replace('*', '%', $pacientefacturacionRfc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientefacturacionPeer::PACIENTEFACTURACION_RFC, $pacientefacturacionRfc, $comparison);
    }

    /**
     * Filter the query on the pacientefacturacion_calle column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientefacturacionCalle('fooValue');   // WHERE pacientefacturacion_calle = 'fooValue'
     * $query->filterByPacientefacturacionCalle('%fooValue%'); // WHERE pacientefacturacion_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacientefacturacionCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function filterByPacientefacturacionCalle($pacientefacturacionCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacientefacturacionCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacientefacturacionCalle)) {
                $pacientefacturacionCalle = str_replace('*', '%', $pacientefacturacionCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientefacturacionPeer::PACIENTEFACTURACION_CALLE, $pacientefacturacionCalle, $comparison);
    }

    /**
     * Filter the query on the pacientefacturacion_noexterior column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientefacturacionNoexterior('fooValue');   // WHERE pacientefacturacion_noexterior = 'fooValue'
     * $query->filterByPacientefacturacionNoexterior('%fooValue%'); // WHERE pacientefacturacion_noexterior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacientefacturacionNoexterior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function filterByPacientefacturacionNoexterior($pacientefacturacionNoexterior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacientefacturacionNoexterior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacientefacturacionNoexterior)) {
                $pacientefacturacionNoexterior = str_replace('*', '%', $pacientefacturacionNoexterior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientefacturacionPeer::PACIENTEFACTURACION_NOEXTERIOR, $pacientefacturacionNoexterior, $comparison);
    }

    /**
     * Filter the query on the pacientefacturacion_nointerior column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientefacturacionNointerior('fooValue');   // WHERE pacientefacturacion_nointerior = 'fooValue'
     * $query->filterByPacientefacturacionNointerior('%fooValue%'); // WHERE pacientefacturacion_nointerior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacientefacturacionNointerior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function filterByPacientefacturacionNointerior($pacientefacturacionNointerior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacientefacturacionNointerior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacientefacturacionNointerior)) {
                $pacientefacturacionNointerior = str_replace('*', '%', $pacientefacturacionNointerior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientefacturacionPeer::PACIENTEFACTURACION_NOINTERIOR, $pacientefacturacionNointerior, $comparison);
    }

    /**
     * Filter the query on the pacientefacturacion_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientefacturacionColonia('fooValue');   // WHERE pacientefacturacion_colonia = 'fooValue'
     * $query->filterByPacientefacturacionColonia('%fooValue%'); // WHERE pacientefacturacion_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacientefacturacionColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function filterByPacientefacturacionColonia($pacientefacturacionColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacientefacturacionColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacientefacturacionColonia)) {
                $pacientefacturacionColonia = str_replace('*', '%', $pacientefacturacionColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientefacturacionPeer::PACIENTEFACTURACION_COLONIA, $pacientefacturacionColonia, $comparison);
    }

    /**
     * Filter the query on the pacientefacturacion_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientefacturacionCiudad('fooValue');   // WHERE pacientefacturacion_ciudad = 'fooValue'
     * $query->filterByPacientefacturacionCiudad('%fooValue%'); // WHERE pacientefacturacion_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacientefacturacionCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function filterByPacientefacturacionCiudad($pacientefacturacionCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacientefacturacionCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacientefacturacionCiudad)) {
                $pacientefacturacionCiudad = str_replace('*', '%', $pacientefacturacionCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientefacturacionPeer::PACIENTEFACTURACION_CIUDAD, $pacientefacturacionCiudad, $comparison);
    }

    /**
     * Filter the query on the pacientefacturacion_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientefacturacionEstado('fooValue');   // WHERE pacientefacturacion_estado = 'fooValue'
     * $query->filterByPacientefacturacionEstado('%fooValue%'); // WHERE pacientefacturacion_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacientefacturacionEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function filterByPacientefacturacionEstado($pacientefacturacionEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacientefacturacionEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacientefacturacionEstado)) {
                $pacientefacturacionEstado = str_replace('*', '%', $pacientefacturacionEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientefacturacionPeer::PACIENTEFACTURACION_ESTADO, $pacientefacturacionEstado, $comparison);
    }

    /**
     * Filter the query on the pacientefacturacion_pais column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientefacturacionPais('fooValue');   // WHERE pacientefacturacion_pais = 'fooValue'
     * $query->filterByPacientefacturacionPais('%fooValue%'); // WHERE pacientefacturacion_pais LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacientefacturacionPais The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function filterByPacientefacturacionPais($pacientefacturacionPais = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacientefacturacionPais)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacientefacturacionPais)) {
                $pacientefacturacionPais = str_replace('*', '%', $pacientefacturacionPais);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientefacturacionPeer::PACIENTEFACTURACION_PAIS, $pacientefacturacionPais, $comparison);
    }

    /**
     * Filter the query on the pacientefacturacion_codigopostal column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientefacturacionCodigopostal('fooValue');   // WHERE pacientefacturacion_codigopostal = 'fooValue'
     * $query->filterByPacientefacturacionCodigopostal('%fooValue%'); // WHERE pacientefacturacion_codigopostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacientefacturacionCodigopostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function filterByPacientefacturacionCodigopostal($pacientefacturacionCodigopostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacientefacturacionCodigopostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacientefacturacionCodigopostal)) {
                $pacientefacturacionCodigopostal = str_replace('*', '%', $pacientefacturacionCodigopostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientefacturacionPeer::PACIENTEFACTURACION_CODIGOPOSTAL, $pacientefacturacionCodigopostal, $comparison);
    }

    /**
     * Filter the query on the pacientefacturacion_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientefacturacionTelefono('fooValue');   // WHERE pacientefacturacion_telefono = 'fooValue'
     * $query->filterByPacientefacturacionTelefono('%fooValue%'); // WHERE pacientefacturacion_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacientefacturacionTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function filterByPacientefacturacionTelefono($pacientefacturacionTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacientefacturacionTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacientefacturacionTelefono)) {
                $pacientefacturacionTelefono = str_replace('*', '%', $pacientefacturacionTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientefacturacionPeer::PACIENTEFACTURACION_TELEFONO, $pacientefacturacionTelefono, $comparison);
    }

    /**
     * Filter the query on the pacientefacturacion_email column
     *
     * Example usage:
     * <code>
     * $query->filterByPacientefacturacionEmail('fooValue');   // WHERE pacientefacturacion_email = 'fooValue'
     * $query->filterByPacientefacturacionEmail('%fooValue%'); // WHERE pacientefacturacion_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pacientefacturacionEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function filterByPacientefacturacionEmail($pacientefacturacionEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pacientefacturacionEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pacientefacturacionEmail)) {
                $pacientefacturacionEmail = str_replace('*', '%', $pacientefacturacionEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PacientefacturacionPeer::PACIENTEFACTURACION_EMAIL, $pacientefacturacionEmail, $comparison);
    }

    /**
     * Filter the query by a related Paciente object
     *
     * @param   Paciente|PropelObjectCollection $paciente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacientefacturacionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPaciente($paciente, $comparison = null)
    {
        if ($paciente instanceof Paciente) {
            return $this
                ->addUsingAlias(PacientefacturacionPeer::IDPACIENTE, $paciente->getIdpaciente(), $comparison);
        } elseif ($paciente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PacientefacturacionPeer::IDPACIENTE, $paciente->toKeyValue('PrimaryKey', 'Idpaciente'), $comparison);
        } else {
            throw new PropelException('filterByPaciente() only accepts arguments of type Paciente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Paciente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function joinPaciente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Paciente');

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
            $this->addJoinObject($join, 'Paciente');
        }

        return $this;
    }

    /**
     * Use the Paciente relation Paciente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacienteQuery A secondary query class using the current class as primary query
     */
    public function usePacienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPaciente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Paciente', 'PacienteQuery');
    }

    /**
     * Filter the query by a related Factura object
     *
     * @param   Factura|PropelObjectCollection $factura  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PacientefacturacionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactura($factura, $comparison = null)
    {
        if ($factura instanceof Factura) {
            return $this
                ->addUsingAlias(PacientefacturacionPeer::IDPACIENTEFACTURACION, $factura->getIddatosfacturacion(), $comparison);
        } elseif ($factura instanceof PropelObjectCollection) {
            return $this
                ->useFacturaQuery()
                ->filterByPrimaryKeys($factura->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFactura() only accepts arguments of type Factura or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Factura relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function joinFactura($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Factura');

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
            $this->addJoinObject($join, 'Factura');
        }

        return $this;
    }

    /**
     * Use the Factura relation Factura object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FacturaQuery A secondary query class using the current class as primary query
     */
    public function useFacturaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFactura($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Factura', 'FacturaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Pacientefacturacion $pacientefacturacion Object to remove from the list of results
     *
     * @return PacientefacturacionQuery The current query, for fluid interface
     */
    public function prune($pacientefacturacion = null)
    {
        if ($pacientefacturacion) {
            $this->addUsingAlias(PacientefacturacionPeer::IDPACIENTEFACTURACION, $pacientefacturacion->getIdpacientefacturacion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
