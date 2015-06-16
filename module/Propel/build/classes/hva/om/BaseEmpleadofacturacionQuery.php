<?php


/**
 * Base class that represents a query for the 'empleadofacturacion' table.
 *
 *
 *
 * @method EmpleadofacturacionQuery orderByIdempleadofacturacion($order = Criteria::ASC) Order by the idempleadofacturacion column
 * @method EmpleadofacturacionQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method EmpleadofacturacionQuery orderByEmpleadofacturacionRazonsocial($order = Criteria::ASC) Order by the empleadofacturacion_razonsocial column
 * @method EmpleadofacturacionQuery orderByEmpleadofacturacionRfc($order = Criteria::ASC) Order by the empleadofacturacion_rfc column
 * @method EmpleadofacturacionQuery orderByEmpleadofacturacionCalle($order = Criteria::ASC) Order by the empleadofacturacion_calle column
 * @method EmpleadofacturacionQuery orderByEmpleadofacturacionNoexterior($order = Criteria::ASC) Order by the empleadofacturacion_noexterior column
 * @method EmpleadofacturacionQuery orderByEmpleadofacturacionNointerior($order = Criteria::ASC) Order by the empleadofacturacion_nointerior column
 * @method EmpleadofacturacionQuery orderByEmpleadofacturacionColonia($order = Criteria::ASC) Order by the empleadofacturacion_colonia column
 * @method EmpleadofacturacionQuery orderByEmpleadofacturacionCiudad($order = Criteria::ASC) Order by the empleadofacturacion_ciudad column
 * @method EmpleadofacturacionQuery orderByEmpleadofacturacionEstado($order = Criteria::ASC) Order by the empleadofacturacion_estado column
 * @method EmpleadofacturacionQuery orderByEmpleadofacturacionPais($order = Criteria::ASC) Order by the empleadofacturacion_pais column
 * @method EmpleadofacturacionQuery orderByEmpleadofacturacionCodigopostal($order = Criteria::ASC) Order by the empleadofacturacion_codigopostal column
 * @method EmpleadofacturacionQuery orderByEmpleadofacturacionTelefono($order = Criteria::ASC) Order by the empleadofacturacion_telefono column
 * @method EmpleadofacturacionQuery orderByEmpleadofacturacionEmail($order = Criteria::ASC) Order by the empleadofacturacion_email column
 *
 * @method EmpleadofacturacionQuery groupByIdempleadofacturacion() Group by the idempleadofacturacion column
 * @method EmpleadofacturacionQuery groupByIdempleado() Group by the idempleado column
 * @method EmpleadofacturacionQuery groupByEmpleadofacturacionRazonsocial() Group by the empleadofacturacion_razonsocial column
 * @method EmpleadofacturacionQuery groupByEmpleadofacturacionRfc() Group by the empleadofacturacion_rfc column
 * @method EmpleadofacturacionQuery groupByEmpleadofacturacionCalle() Group by the empleadofacturacion_calle column
 * @method EmpleadofacturacionQuery groupByEmpleadofacturacionNoexterior() Group by the empleadofacturacion_noexterior column
 * @method EmpleadofacturacionQuery groupByEmpleadofacturacionNointerior() Group by the empleadofacturacion_nointerior column
 * @method EmpleadofacturacionQuery groupByEmpleadofacturacionColonia() Group by the empleadofacturacion_colonia column
 * @method EmpleadofacturacionQuery groupByEmpleadofacturacionCiudad() Group by the empleadofacturacion_ciudad column
 * @method EmpleadofacturacionQuery groupByEmpleadofacturacionEstado() Group by the empleadofacturacion_estado column
 * @method EmpleadofacturacionQuery groupByEmpleadofacturacionPais() Group by the empleadofacturacion_pais column
 * @method EmpleadofacturacionQuery groupByEmpleadofacturacionCodigopostal() Group by the empleadofacturacion_codigopostal column
 * @method EmpleadofacturacionQuery groupByEmpleadofacturacionTelefono() Group by the empleadofacturacion_telefono column
 * @method EmpleadofacturacionQuery groupByEmpleadofacturacionEmail() Group by the empleadofacturacion_email column
 *
 * @method EmpleadofacturacionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmpleadofacturacionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmpleadofacturacionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmpleadofacturacionQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method EmpleadofacturacionQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method EmpleadofacturacionQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method Empleadofacturacion findOne(PropelPDO $con = null) Return the first Empleadofacturacion matching the query
 * @method Empleadofacturacion findOneOrCreate(PropelPDO $con = null) Return the first Empleadofacturacion matching the query, or a new Empleadofacturacion object populated from the query conditions when no match is found
 *
 * @method Empleadofacturacion findOneByIdempleado(int $idempleado) Return the first Empleadofacturacion filtered by the idempleado column
 * @method Empleadofacturacion findOneByEmpleadofacturacionRazonsocial(string $empleadofacturacion_razonsocial) Return the first Empleadofacturacion filtered by the empleadofacturacion_razonsocial column
 * @method Empleadofacturacion findOneByEmpleadofacturacionRfc(string $empleadofacturacion_rfc) Return the first Empleadofacturacion filtered by the empleadofacturacion_rfc column
 * @method Empleadofacturacion findOneByEmpleadofacturacionCalle(string $empleadofacturacion_calle) Return the first Empleadofacturacion filtered by the empleadofacturacion_calle column
 * @method Empleadofacturacion findOneByEmpleadofacturacionNoexterior(string $empleadofacturacion_noexterior) Return the first Empleadofacturacion filtered by the empleadofacturacion_noexterior column
 * @method Empleadofacturacion findOneByEmpleadofacturacionNointerior(string $empleadofacturacion_nointerior) Return the first Empleadofacturacion filtered by the empleadofacturacion_nointerior column
 * @method Empleadofacturacion findOneByEmpleadofacturacionColonia(string $empleadofacturacion_colonia) Return the first Empleadofacturacion filtered by the empleadofacturacion_colonia column
 * @method Empleadofacturacion findOneByEmpleadofacturacionCiudad(string $empleadofacturacion_ciudad) Return the first Empleadofacturacion filtered by the empleadofacturacion_ciudad column
 * @method Empleadofacturacion findOneByEmpleadofacturacionEstado(string $empleadofacturacion_estado) Return the first Empleadofacturacion filtered by the empleadofacturacion_estado column
 * @method Empleadofacturacion findOneByEmpleadofacturacionPais(string $empleadofacturacion_pais) Return the first Empleadofacturacion filtered by the empleadofacturacion_pais column
 * @method Empleadofacturacion findOneByEmpleadofacturacionCodigopostal(string $empleadofacturacion_codigopostal) Return the first Empleadofacturacion filtered by the empleadofacturacion_codigopostal column
 * @method Empleadofacturacion findOneByEmpleadofacturacionTelefono(string $empleadofacturacion_telefono) Return the first Empleadofacturacion filtered by the empleadofacturacion_telefono column
 * @method Empleadofacturacion findOneByEmpleadofacturacionEmail(string $empleadofacturacion_email) Return the first Empleadofacturacion filtered by the empleadofacturacion_email column
 *
 * @method array findByIdempleadofacturacion(int $idempleadofacturacion) Return Empleadofacturacion objects filtered by the idempleadofacturacion column
 * @method array findByIdempleado(int $idempleado) Return Empleadofacturacion objects filtered by the idempleado column
 * @method array findByEmpleadofacturacionRazonsocial(string $empleadofacturacion_razonsocial) Return Empleadofacturacion objects filtered by the empleadofacturacion_razonsocial column
 * @method array findByEmpleadofacturacionRfc(string $empleadofacturacion_rfc) Return Empleadofacturacion objects filtered by the empleadofacturacion_rfc column
 * @method array findByEmpleadofacturacionCalle(string $empleadofacturacion_calle) Return Empleadofacturacion objects filtered by the empleadofacturacion_calle column
 * @method array findByEmpleadofacturacionNoexterior(string $empleadofacturacion_noexterior) Return Empleadofacturacion objects filtered by the empleadofacturacion_noexterior column
 * @method array findByEmpleadofacturacionNointerior(string $empleadofacturacion_nointerior) Return Empleadofacturacion objects filtered by the empleadofacturacion_nointerior column
 * @method array findByEmpleadofacturacionColonia(string $empleadofacturacion_colonia) Return Empleadofacturacion objects filtered by the empleadofacturacion_colonia column
 * @method array findByEmpleadofacturacionCiudad(string $empleadofacturacion_ciudad) Return Empleadofacturacion objects filtered by the empleadofacturacion_ciudad column
 * @method array findByEmpleadofacturacionEstado(string $empleadofacturacion_estado) Return Empleadofacturacion objects filtered by the empleadofacturacion_estado column
 * @method array findByEmpleadofacturacionPais(string $empleadofacturacion_pais) Return Empleadofacturacion objects filtered by the empleadofacturacion_pais column
 * @method array findByEmpleadofacturacionCodigopostal(string $empleadofacturacion_codigopostal) Return Empleadofacturacion objects filtered by the empleadofacturacion_codigopostal column
 * @method array findByEmpleadofacturacionTelefono(string $empleadofacturacion_telefono) Return Empleadofacturacion objects filtered by the empleadofacturacion_telefono column
 * @method array findByEmpleadofacturacionEmail(string $empleadofacturacion_email) Return Empleadofacturacion objects filtered by the empleadofacturacion_email column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseEmpleadofacturacionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmpleadofacturacionQuery object.
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
            $modelName = 'Empleadofacturacion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmpleadofacturacionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EmpleadofacturacionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmpleadofacturacionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmpleadofacturacionQuery) {
            return $criteria;
        }
        $query = new EmpleadofacturacionQuery(null, null, $modelAlias);

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
     * @return   Empleadofacturacion|Empleadofacturacion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmpleadofacturacionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmpleadofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Empleadofacturacion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdempleadofacturacion($key, $con = null)
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
     * @return                 Empleadofacturacion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idempleadofacturacion`, `idempleado`, `empleadofacturacion_razonsocial`, `empleadofacturacion_rfc`, `empleadofacturacion_calle`, `empleadofacturacion_noexterior`, `empleadofacturacion_nointerior`, `empleadofacturacion_colonia`, `empleadofacturacion_ciudad`, `empleadofacturacion_estado`, `empleadofacturacion_pais`, `empleadofacturacion_codigopostal`, `empleadofacturacion_telefono`, `empleadofacturacion_email` FROM `empleadofacturacion` WHERE `idempleadofacturacion` = :p0';
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
            $obj = new Empleadofacturacion();
            $obj->hydrate($row);
            EmpleadofacturacionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Empleadofacturacion|Empleadofacturacion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Empleadofacturacion[]|mixed the list of results, formatted by the current formatter
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
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmpleadofacturacionPeer::IDEMPLEADOFACTURACION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmpleadofacturacionPeer::IDEMPLEADOFACTURACION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idempleadofacturacion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadofacturacion(1234); // WHERE idempleadofacturacion = 1234
     * $query->filterByIdempleadofacturacion(array(12, 34)); // WHERE idempleadofacturacion IN (12, 34)
     * $query->filterByIdempleadofacturacion(array('min' => 12)); // WHERE idempleadofacturacion >= 12
     * $query->filterByIdempleadofacturacion(array('max' => 12)); // WHERE idempleadofacturacion <= 12
     * </code>
     *
     * @param     mixed $idempleadofacturacion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function filterByIdempleadofacturacion($idempleadofacturacion = null, $comparison = null)
    {
        if (is_array($idempleadofacturacion)) {
            $useMinMax = false;
            if (isset($idempleadofacturacion['min'])) {
                $this->addUsingAlias(EmpleadofacturacionPeer::IDEMPLEADOFACTURACION, $idempleadofacturacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadofacturacion['max'])) {
                $this->addUsingAlias(EmpleadofacturacionPeer::IDEMPLEADOFACTURACION, $idempleadofacturacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadofacturacionPeer::IDEMPLEADOFACTURACION, $idempleadofacturacion, $comparison);
    }

    /**
     * Filter the query on the idempleado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleado(1234); // WHERE idempleado = 1234
     * $query->filterByIdempleado(array(12, 34)); // WHERE idempleado IN (12, 34)
     * $query->filterByIdempleado(array('min' => 12)); // WHERE idempleado >= 12
     * $query->filterByIdempleado(array('max' => 12)); // WHERE idempleado <= 12
     * </code>
     *
     * @see       filterByEmpleado()
     *
     * @param     mixed $idempleado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(EmpleadofacturacionPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(EmpleadofacturacionPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadofacturacionPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the empleadofacturacion_razonsocial column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadofacturacionRazonsocial('fooValue');   // WHERE empleadofacturacion_razonsocial = 'fooValue'
     * $query->filterByEmpleadofacturacionRazonsocial('%fooValue%'); // WHERE empleadofacturacion_razonsocial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadofacturacionRazonsocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function filterByEmpleadofacturacionRazonsocial($empleadofacturacionRazonsocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadofacturacionRazonsocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadofacturacionRazonsocial)) {
                $empleadofacturacionRazonsocial = str_replace('*', '%', $empleadofacturacionRazonsocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadofacturacionPeer::EMPLEADOFACTURACION_RAZONSOCIAL, $empleadofacturacionRazonsocial, $comparison);
    }

    /**
     * Filter the query on the empleadofacturacion_rfc column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadofacturacionRfc('fooValue');   // WHERE empleadofacturacion_rfc = 'fooValue'
     * $query->filterByEmpleadofacturacionRfc('%fooValue%'); // WHERE empleadofacturacion_rfc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadofacturacionRfc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function filterByEmpleadofacturacionRfc($empleadofacturacionRfc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadofacturacionRfc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadofacturacionRfc)) {
                $empleadofacturacionRfc = str_replace('*', '%', $empleadofacturacionRfc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadofacturacionPeer::EMPLEADOFACTURACION_RFC, $empleadofacturacionRfc, $comparison);
    }

    /**
     * Filter the query on the empleadofacturacion_calle column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadofacturacionCalle('fooValue');   // WHERE empleadofacturacion_calle = 'fooValue'
     * $query->filterByEmpleadofacturacionCalle('%fooValue%'); // WHERE empleadofacturacion_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadofacturacionCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function filterByEmpleadofacturacionCalle($empleadofacturacionCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadofacturacionCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadofacturacionCalle)) {
                $empleadofacturacionCalle = str_replace('*', '%', $empleadofacturacionCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadofacturacionPeer::EMPLEADOFACTURACION_CALLE, $empleadofacturacionCalle, $comparison);
    }

    /**
     * Filter the query on the empleadofacturacion_noexterior column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadofacturacionNoexterior('fooValue');   // WHERE empleadofacturacion_noexterior = 'fooValue'
     * $query->filterByEmpleadofacturacionNoexterior('%fooValue%'); // WHERE empleadofacturacion_noexterior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadofacturacionNoexterior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function filterByEmpleadofacturacionNoexterior($empleadofacturacionNoexterior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadofacturacionNoexterior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadofacturacionNoexterior)) {
                $empleadofacturacionNoexterior = str_replace('*', '%', $empleadofacturacionNoexterior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadofacturacionPeer::EMPLEADOFACTURACION_NOEXTERIOR, $empleadofacturacionNoexterior, $comparison);
    }

    /**
     * Filter the query on the empleadofacturacion_nointerior column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadofacturacionNointerior('fooValue');   // WHERE empleadofacturacion_nointerior = 'fooValue'
     * $query->filterByEmpleadofacturacionNointerior('%fooValue%'); // WHERE empleadofacturacion_nointerior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadofacturacionNointerior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function filterByEmpleadofacturacionNointerior($empleadofacturacionNointerior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadofacturacionNointerior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadofacturacionNointerior)) {
                $empleadofacturacionNointerior = str_replace('*', '%', $empleadofacturacionNointerior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadofacturacionPeer::EMPLEADOFACTURACION_NOINTERIOR, $empleadofacturacionNointerior, $comparison);
    }

    /**
     * Filter the query on the empleadofacturacion_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadofacturacionColonia('fooValue');   // WHERE empleadofacturacion_colonia = 'fooValue'
     * $query->filterByEmpleadofacturacionColonia('%fooValue%'); // WHERE empleadofacturacion_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadofacturacionColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function filterByEmpleadofacturacionColonia($empleadofacturacionColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadofacturacionColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadofacturacionColonia)) {
                $empleadofacturacionColonia = str_replace('*', '%', $empleadofacturacionColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadofacturacionPeer::EMPLEADOFACTURACION_COLONIA, $empleadofacturacionColonia, $comparison);
    }

    /**
     * Filter the query on the empleadofacturacion_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadofacturacionCiudad('fooValue');   // WHERE empleadofacturacion_ciudad = 'fooValue'
     * $query->filterByEmpleadofacturacionCiudad('%fooValue%'); // WHERE empleadofacturacion_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadofacturacionCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function filterByEmpleadofacturacionCiudad($empleadofacturacionCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadofacturacionCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadofacturacionCiudad)) {
                $empleadofacturacionCiudad = str_replace('*', '%', $empleadofacturacionCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadofacturacionPeer::EMPLEADOFACTURACION_CIUDAD, $empleadofacturacionCiudad, $comparison);
    }

    /**
     * Filter the query on the empleadofacturacion_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadofacturacionEstado('fooValue');   // WHERE empleadofacturacion_estado = 'fooValue'
     * $query->filterByEmpleadofacturacionEstado('%fooValue%'); // WHERE empleadofacturacion_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadofacturacionEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function filterByEmpleadofacturacionEstado($empleadofacturacionEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadofacturacionEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadofacturacionEstado)) {
                $empleadofacturacionEstado = str_replace('*', '%', $empleadofacturacionEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadofacturacionPeer::EMPLEADOFACTURACION_ESTADO, $empleadofacturacionEstado, $comparison);
    }

    /**
     * Filter the query on the empleadofacturacion_pais column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadofacturacionPais('fooValue');   // WHERE empleadofacturacion_pais = 'fooValue'
     * $query->filterByEmpleadofacturacionPais('%fooValue%'); // WHERE empleadofacturacion_pais LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadofacturacionPais The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function filterByEmpleadofacturacionPais($empleadofacturacionPais = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadofacturacionPais)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadofacturacionPais)) {
                $empleadofacturacionPais = str_replace('*', '%', $empleadofacturacionPais);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadofacturacionPeer::EMPLEADOFACTURACION_PAIS, $empleadofacturacionPais, $comparison);
    }

    /**
     * Filter the query on the empleadofacturacion_codigopostal column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadofacturacionCodigopostal('fooValue');   // WHERE empleadofacturacion_codigopostal = 'fooValue'
     * $query->filterByEmpleadofacturacionCodigopostal('%fooValue%'); // WHERE empleadofacturacion_codigopostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadofacturacionCodigopostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function filterByEmpleadofacturacionCodigopostal($empleadofacturacionCodigopostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadofacturacionCodigopostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadofacturacionCodigopostal)) {
                $empleadofacturacionCodigopostal = str_replace('*', '%', $empleadofacturacionCodigopostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadofacturacionPeer::EMPLEADOFACTURACION_CODIGOPOSTAL, $empleadofacturacionCodigopostal, $comparison);
    }

    /**
     * Filter the query on the empleadofacturacion_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadofacturacionTelefono('fooValue');   // WHERE empleadofacturacion_telefono = 'fooValue'
     * $query->filterByEmpleadofacturacionTelefono('%fooValue%'); // WHERE empleadofacturacion_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadofacturacionTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function filterByEmpleadofacturacionTelefono($empleadofacturacionTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadofacturacionTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadofacturacionTelefono)) {
                $empleadofacturacionTelefono = str_replace('*', '%', $empleadofacturacionTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadofacturacionPeer::EMPLEADOFACTURACION_TELEFONO, $empleadofacturacionTelefono, $comparison);
    }

    /**
     * Filter the query on the empleadofacturacion_email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadofacturacionEmail('fooValue');   // WHERE empleadofacturacion_email = 'fooValue'
     * $query->filterByEmpleadofacturacionEmail('%fooValue%'); // WHERE empleadofacturacion_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadofacturacionEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function filterByEmpleadofacturacionEmail($empleadofacturacionEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadofacturacionEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadofacturacionEmail)) {
                $empleadofacturacionEmail = str_replace('*', '%', $empleadofacturacionEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadofacturacionPeer::EMPLEADOFACTURACION_EMAIL, $empleadofacturacionEmail, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadofacturacionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(EmpleadofacturacionPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpleadofacturacionPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleado() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empleado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function joinEmpleado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empleado');

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
            $this->addJoinObject($join, 'Empleado');
        }

        return $this;
    }

    /**
     * Use the Empleado relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empleado', 'EmpleadoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Empleadofacturacion $empleadofacturacion Object to remove from the list of results
     *
     * @return EmpleadofacturacionQuery The current query, for fluid interface
     */
    public function prune($empleadofacturacion = null)
    {
        if ($empleadofacturacion) {
            $this->addUsingAlias(EmpleadofacturacionPeer::IDEMPLEADOFACTURACION, $empleadofacturacion->getIdempleadofacturacion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
