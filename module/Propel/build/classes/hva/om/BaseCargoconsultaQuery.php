<?php


/**
 * Base class that represents a query for the 'cargoconsulta' table.
 *
 *
 *
 * @method CargoconsultaQuery orderByIdcargoconsulta($order = Criteria::ASC) Order by the idcargoconsulta column
 * @method CargoconsultaQuery orderByIdconsulta($order = Criteria::ASC) Order by the idconsulta column
 * @method CargoconsultaQuery orderByIdlugarinventario($order = Criteria::ASC) Order by the idlugarinventario column
 * @method CargoconsultaQuery orderByIdservicio($order = Criteria::ASC) Order by the idservicio column
 * @method CargoconsultaQuery orderByCargoconsultaTipo($order = Criteria::ASC) Order by the cargoconsulta_tipo column
 * @method CargoconsultaQuery orderByCargoconsultaFecha($order = Criteria::ASC) Order by the cargoconsulta_fecha column
 * @method CargoconsultaQuery orderByCantidad($order = Criteria::ASC) Order by the cantidad column
 * @method CargoconsultaQuery orderByMonto($order = Criteria::ASC) Order by the monto column
 *
 * @method CargoconsultaQuery groupByIdcargoconsulta() Group by the idcargoconsulta column
 * @method CargoconsultaQuery groupByIdconsulta() Group by the idconsulta column
 * @method CargoconsultaQuery groupByIdlugarinventario() Group by the idlugarinventario column
 * @method CargoconsultaQuery groupByIdservicio() Group by the idservicio column
 * @method CargoconsultaQuery groupByCargoconsultaTipo() Group by the cargoconsulta_tipo column
 * @method CargoconsultaQuery groupByCargoconsultaFecha() Group by the cargoconsulta_fecha column
 * @method CargoconsultaQuery groupByCantidad() Group by the cantidad column
 * @method CargoconsultaQuery groupByMonto() Group by the monto column
 *
 * @method CargoconsultaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CargoconsultaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CargoconsultaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CargoconsultaQuery leftJoinConsulta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Consulta relation
 * @method CargoconsultaQuery rightJoinConsulta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Consulta relation
 * @method CargoconsultaQuery innerJoinConsulta($relationAlias = null) Adds a INNER JOIN clause to the query using the Consulta relation
 *
 * @method CargoconsultaQuery leftJoinLugarinventario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Lugarinventario relation
 * @method CargoconsultaQuery rightJoinLugarinventario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Lugarinventario relation
 * @method CargoconsultaQuery innerJoinLugarinventario($relationAlias = null) Adds a INNER JOIN clause to the query using the Lugarinventario relation
 *
 * @method CargoconsultaQuery leftJoinServicio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Servicio relation
 * @method CargoconsultaQuery rightJoinServicio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Servicio relation
 * @method CargoconsultaQuery innerJoinServicio($relationAlias = null) Adds a INNER JOIN clause to the query using the Servicio relation
 *
 * @method Cargoconsulta findOne(PropelPDO $con = null) Return the first Cargoconsulta matching the query
 * @method Cargoconsulta findOneOrCreate(PropelPDO $con = null) Return the first Cargoconsulta matching the query, or a new Cargoconsulta object populated from the query conditions when no match is found
 *
 * @method Cargoconsulta findOneByIdconsulta(int $idconsulta) Return the first Cargoconsulta filtered by the idconsulta column
 * @method Cargoconsulta findOneByIdlugarinventario(int $idlugarinventario) Return the first Cargoconsulta filtered by the idlugarinventario column
 * @method Cargoconsulta findOneByIdservicio(int $idservicio) Return the first Cargoconsulta filtered by the idservicio column
 * @method Cargoconsulta findOneByCargoconsultaTipo(string $cargoconsulta_tipo) Return the first Cargoconsulta filtered by the cargoconsulta_tipo column
 * @method Cargoconsulta findOneByCargoconsultaFecha(string $cargoconsulta_fecha) Return the first Cargoconsulta filtered by the cargoconsulta_fecha column
 * @method Cargoconsulta findOneByCantidad(string $cantidad) Return the first Cargoconsulta filtered by the cantidad column
 * @method Cargoconsulta findOneByMonto(string $monto) Return the first Cargoconsulta filtered by the monto column
 *
 * @method array findByIdcargoconsulta(int $idcargoconsulta) Return Cargoconsulta objects filtered by the idcargoconsulta column
 * @method array findByIdconsulta(int $idconsulta) Return Cargoconsulta objects filtered by the idconsulta column
 * @method array findByIdlugarinventario(int $idlugarinventario) Return Cargoconsulta objects filtered by the idlugarinventario column
 * @method array findByIdservicio(int $idservicio) Return Cargoconsulta objects filtered by the idservicio column
 * @method array findByCargoconsultaTipo(string $cargoconsulta_tipo) Return Cargoconsulta objects filtered by the cargoconsulta_tipo column
 * @method array findByCargoconsultaFecha(string $cargoconsulta_fecha) Return Cargoconsulta objects filtered by the cargoconsulta_fecha column
 * @method array findByCantidad(string $cantidad) Return Cargoconsulta objects filtered by the cantidad column
 * @method array findByMonto(string $monto) Return Cargoconsulta objects filtered by the monto column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseCargoconsultaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCargoconsultaQuery object.
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
            $modelName = 'Cargoconsulta';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CargoconsultaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CargoconsultaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CargoconsultaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CargoconsultaQuery) {
            return $criteria;
        }
        $query = new CargoconsultaQuery(null, null, $modelAlias);

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
     * @return   Cargoconsulta|Cargoconsulta[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CargoconsultaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CargoconsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cargoconsulta A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcargoconsulta($key, $con = null)
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
     * @return                 Cargoconsulta A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcargoconsulta`, `idconsulta`, `idlugarinventario`, `idservicio`, `cargoconsulta_tipo`, `cargoconsulta_fecha`, `cantidad`, `monto` FROM `cargoconsulta` WHERE `idcargoconsulta` = :p0';
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
            $obj = new Cargoconsulta();
            $obj->hydrate($row);
            CargoconsultaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cargoconsulta|Cargoconsulta[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cargoconsulta[]|mixed the list of results, formatted by the current formatter
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
     * @return CargoconsultaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CargoconsultaPeer::IDCARGOCONSULTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CargoconsultaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CargoconsultaPeer::IDCARGOCONSULTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcargoconsulta column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcargoconsulta(1234); // WHERE idcargoconsulta = 1234
     * $query->filterByIdcargoconsulta(array(12, 34)); // WHERE idcargoconsulta IN (12, 34)
     * $query->filterByIdcargoconsulta(array('min' => 12)); // WHERE idcargoconsulta >= 12
     * $query->filterByIdcargoconsulta(array('max' => 12)); // WHERE idcargoconsulta <= 12
     * </code>
     *
     * @param     mixed $idcargoconsulta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoconsultaQuery The current query, for fluid interface
     */
    public function filterByIdcargoconsulta($idcargoconsulta = null, $comparison = null)
    {
        if (is_array($idcargoconsulta)) {
            $useMinMax = false;
            if (isset($idcargoconsulta['min'])) {
                $this->addUsingAlias(CargoconsultaPeer::IDCARGOCONSULTA, $idcargoconsulta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcargoconsulta['max'])) {
                $this->addUsingAlias(CargoconsultaPeer::IDCARGOCONSULTA, $idcargoconsulta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoconsultaPeer::IDCARGOCONSULTA, $idcargoconsulta, $comparison);
    }

    /**
     * Filter the query on the idconsulta column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconsulta(1234); // WHERE idconsulta = 1234
     * $query->filterByIdconsulta(array(12, 34)); // WHERE idconsulta IN (12, 34)
     * $query->filterByIdconsulta(array('min' => 12)); // WHERE idconsulta >= 12
     * $query->filterByIdconsulta(array('max' => 12)); // WHERE idconsulta <= 12
     * </code>
     *
     * @see       filterByConsulta()
     *
     * @param     mixed $idconsulta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoconsultaQuery The current query, for fluid interface
     */
    public function filterByIdconsulta($idconsulta = null, $comparison = null)
    {
        if (is_array($idconsulta)) {
            $useMinMax = false;
            if (isset($idconsulta['min'])) {
                $this->addUsingAlias(CargoconsultaPeer::IDCONSULTA, $idconsulta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconsulta['max'])) {
                $this->addUsingAlias(CargoconsultaPeer::IDCONSULTA, $idconsulta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoconsultaPeer::IDCONSULTA, $idconsulta, $comparison);
    }

    /**
     * Filter the query on the idlugarinventario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdlugarinventario(1234); // WHERE idlugarinventario = 1234
     * $query->filterByIdlugarinventario(array(12, 34)); // WHERE idlugarinventario IN (12, 34)
     * $query->filterByIdlugarinventario(array('min' => 12)); // WHERE idlugarinventario >= 12
     * $query->filterByIdlugarinventario(array('max' => 12)); // WHERE idlugarinventario <= 12
     * </code>
     *
     * @see       filterByLugarinventario()
     *
     * @param     mixed $idlugarinventario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoconsultaQuery The current query, for fluid interface
     */
    public function filterByIdlugarinventario($idlugarinventario = null, $comparison = null)
    {
        if (is_array($idlugarinventario)) {
            $useMinMax = false;
            if (isset($idlugarinventario['min'])) {
                $this->addUsingAlias(CargoconsultaPeer::IDLUGARINVENTARIO, $idlugarinventario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idlugarinventario['max'])) {
                $this->addUsingAlias(CargoconsultaPeer::IDLUGARINVENTARIO, $idlugarinventario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoconsultaPeer::IDLUGARINVENTARIO, $idlugarinventario, $comparison);
    }

    /**
     * Filter the query on the idservicio column
     *
     * Example usage:
     * <code>
     * $query->filterByIdservicio(1234); // WHERE idservicio = 1234
     * $query->filterByIdservicio(array(12, 34)); // WHERE idservicio IN (12, 34)
     * $query->filterByIdservicio(array('min' => 12)); // WHERE idservicio >= 12
     * $query->filterByIdservicio(array('max' => 12)); // WHERE idservicio <= 12
     * </code>
     *
     * @see       filterByServicio()
     *
     * @param     mixed $idservicio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoconsultaQuery The current query, for fluid interface
     */
    public function filterByIdservicio($idservicio = null, $comparison = null)
    {
        if (is_array($idservicio)) {
            $useMinMax = false;
            if (isset($idservicio['min'])) {
                $this->addUsingAlias(CargoconsultaPeer::IDSERVICIO, $idservicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idservicio['max'])) {
                $this->addUsingAlias(CargoconsultaPeer::IDSERVICIO, $idservicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoconsultaPeer::IDSERVICIO, $idservicio, $comparison);
    }

    /**
     * Filter the query on the cargoconsulta_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByCargoconsultaTipo('fooValue');   // WHERE cargoconsulta_tipo = 'fooValue'
     * $query->filterByCargoconsultaTipo('%fooValue%'); // WHERE cargoconsulta_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cargoconsultaTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoconsultaQuery The current query, for fluid interface
     */
    public function filterByCargoconsultaTipo($cargoconsultaTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cargoconsultaTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cargoconsultaTipo)) {
                $cargoconsultaTipo = str_replace('*', '%', $cargoconsultaTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CargoconsultaPeer::CARGOCONSULTA_TIPO, $cargoconsultaTipo, $comparison);
    }

    /**
     * Filter the query on the cargoconsulta_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByCargoconsultaFecha('2011-03-14'); // WHERE cargoconsulta_fecha = '2011-03-14'
     * $query->filterByCargoconsultaFecha('now'); // WHERE cargoconsulta_fecha = '2011-03-14'
     * $query->filterByCargoconsultaFecha(array('max' => 'yesterday')); // WHERE cargoconsulta_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $cargoconsultaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoconsultaQuery The current query, for fluid interface
     */
    public function filterByCargoconsultaFecha($cargoconsultaFecha = null, $comparison = null)
    {
        if (is_array($cargoconsultaFecha)) {
            $useMinMax = false;
            if (isset($cargoconsultaFecha['min'])) {
                $this->addUsingAlias(CargoconsultaPeer::CARGOCONSULTA_FECHA, $cargoconsultaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cargoconsultaFecha['max'])) {
                $this->addUsingAlias(CargoconsultaPeer::CARGOCONSULTA_FECHA, $cargoconsultaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoconsultaPeer::CARGOCONSULTA_FECHA, $cargoconsultaFecha, $comparison);
    }

    /**
     * Filter the query on the cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByCantidad(1234); // WHERE cantidad = 1234
     * $query->filterByCantidad(array(12, 34)); // WHERE cantidad IN (12, 34)
     * $query->filterByCantidad(array('min' => 12)); // WHERE cantidad >= 12
     * $query->filterByCantidad(array('max' => 12)); // WHERE cantidad <= 12
     * </code>
     *
     * @param     mixed $cantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoconsultaQuery The current query, for fluid interface
     */
    public function filterByCantidad($cantidad = null, $comparison = null)
    {
        if (is_array($cantidad)) {
            $useMinMax = false;
            if (isset($cantidad['min'])) {
                $this->addUsingAlias(CargoconsultaPeer::CANTIDAD, $cantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cantidad['max'])) {
                $this->addUsingAlias(CargoconsultaPeer::CANTIDAD, $cantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoconsultaPeer::CANTIDAD, $cantidad, $comparison);
    }

    /**
     * Filter the query on the monto column
     *
     * Example usage:
     * <code>
     * $query->filterByMonto(1234); // WHERE monto = 1234
     * $query->filterByMonto(array(12, 34)); // WHERE monto IN (12, 34)
     * $query->filterByMonto(array('min' => 12)); // WHERE monto >= 12
     * $query->filterByMonto(array('max' => 12)); // WHERE monto <= 12
     * </code>
     *
     * @param     mixed $monto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoconsultaQuery The current query, for fluid interface
     */
    public function filterByMonto($monto = null, $comparison = null)
    {
        if (is_array($monto)) {
            $useMinMax = false;
            if (isset($monto['min'])) {
                $this->addUsingAlias(CargoconsultaPeer::MONTO, $monto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($monto['max'])) {
                $this->addUsingAlias(CargoconsultaPeer::MONTO, $monto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoconsultaPeer::MONTO, $monto, $comparison);
    }

    /**
     * Filter the query by a related Consulta object
     *
     * @param   Consulta|PropelObjectCollection $consulta The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CargoconsultaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConsulta($consulta, $comparison = null)
    {
        if ($consulta instanceof Consulta) {
            return $this
                ->addUsingAlias(CargoconsultaPeer::IDCONSULTA, $consulta->getIdconsulta(), $comparison);
        } elseif ($consulta instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CargoconsultaPeer::IDCONSULTA, $consulta->toKeyValue('PrimaryKey', 'Idconsulta'), $comparison);
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
     * @return CargoconsultaQuery The current query, for fluid interface
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
     * Filter the query by a related Lugarinventario object
     *
     * @param   Lugarinventario|PropelObjectCollection $lugarinventario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CargoconsultaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLugarinventario($lugarinventario, $comparison = null)
    {
        if ($lugarinventario instanceof Lugarinventario) {
            return $this
                ->addUsingAlias(CargoconsultaPeer::IDLUGARINVENTARIO, $lugarinventario->getIdlugarinventario(), $comparison);
        } elseif ($lugarinventario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CargoconsultaPeer::IDLUGARINVENTARIO, $lugarinventario->toKeyValue('PrimaryKey', 'Idlugarinventario'), $comparison);
        } else {
            throw new PropelException('filterByLugarinventario() only accepts arguments of type Lugarinventario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Lugarinventario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CargoconsultaQuery The current query, for fluid interface
     */
    public function joinLugarinventario($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Lugarinventario');

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
            $this->addJoinObject($join, 'Lugarinventario');
        }

        return $this;
    }

    /**
     * Use the Lugarinventario relation Lugarinventario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LugarinventarioQuery A secondary query class using the current class as primary query
     */
    public function useLugarinventarioQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinLugarinventario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Lugarinventario', 'LugarinventarioQuery');
    }

    /**
     * Filter the query by a related Servicio object
     *
     * @param   Servicio|PropelObjectCollection $servicio The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CargoconsultaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByServicio($servicio, $comparison = null)
    {
        if ($servicio instanceof Servicio) {
            return $this
                ->addUsingAlias(CargoconsultaPeer::IDSERVICIO, $servicio->getIdservicio(), $comparison);
        } elseif ($servicio instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CargoconsultaPeer::IDSERVICIO, $servicio->toKeyValue('PrimaryKey', 'Idservicio'), $comparison);
        } else {
            throw new PropelException('filterByServicio() only accepts arguments of type Servicio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Servicio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CargoconsultaQuery The current query, for fluid interface
     */
    public function joinServicio($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Servicio');

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
            $this->addJoinObject($join, 'Servicio');
        }

        return $this;
    }

    /**
     * Use the Servicio relation Servicio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ServicioQuery A secondary query class using the current class as primary query
     */
    public function useServicioQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinServicio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Servicio', 'ServicioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Cargoconsulta $cargoconsulta Object to remove from the list of results
     *
     * @return CargoconsultaQuery The current query, for fluid interface
     */
    public function prune($cargoconsulta = null)
    {
        if ($cargoconsulta) {
            $this->addUsingAlias(CargoconsultaPeer::IDCARGOCONSULTA, $cargoconsulta->getIdcargoconsulta(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
