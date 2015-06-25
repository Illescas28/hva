<?php


/**
 * Base class that represents a query for the 'cargoventa' table.
 *
 *
 *
 * @method CargoventaQuery orderByIdcargoventa($order = Criteria::ASC) Order by the idcargoventa column
 * @method CargoventaQuery orderByIdventa($order = Criteria::ASC) Order by the idventa column
 * @method CargoventaQuery orderByIdlugarinventario($order = Criteria::ASC) Order by the idlugarinventario column
 * @method CargoventaQuery orderByIdservicio($order = Criteria::ASC) Order by the idservicio column
 * @method CargoventaQuery orderByCargoventaTipo($order = Criteria::ASC) Order by the cargoventa_tipo column
 * @method CargoventaQuery orderByCargoventaFecha($order = Criteria::ASC) Order by the cargoventa_fecha column
 * @method CargoventaQuery orderByCantidad($order = Criteria::ASC) Order by the cantidad column
 * @method CargoventaQuery orderByMonto($order = Criteria::ASC) Order by the monto column
 *
 * @method CargoventaQuery groupByIdcargoventa() Group by the idcargoventa column
 * @method CargoventaQuery groupByIdventa() Group by the idventa column
 * @method CargoventaQuery groupByIdlugarinventario() Group by the idlugarinventario column
 * @method CargoventaQuery groupByIdservicio() Group by the idservicio column
 * @method CargoventaQuery groupByCargoventaTipo() Group by the cargoventa_tipo column
 * @method CargoventaQuery groupByCargoventaFecha() Group by the cargoventa_fecha column
 * @method CargoventaQuery groupByCantidad() Group by the cantidad column
 * @method CargoventaQuery groupByMonto() Group by the monto column
 *
 * @method CargoventaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CargoventaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CargoventaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CargoventaQuery leftJoinLugarinventario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Lugarinventario relation
 * @method CargoventaQuery rightJoinLugarinventario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Lugarinventario relation
 * @method CargoventaQuery innerJoinLugarinventario($relationAlias = null) Adds a INNER JOIN clause to the query using the Lugarinventario relation
 *
 * @method CargoventaQuery leftJoinServicio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Servicio relation
 * @method CargoventaQuery rightJoinServicio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Servicio relation
 * @method CargoventaQuery innerJoinServicio($relationAlias = null) Adds a INNER JOIN clause to the query using the Servicio relation
 *
 * @method CargoventaQuery leftJoinVenta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Venta relation
 * @method CargoventaQuery rightJoinVenta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Venta relation
 * @method CargoventaQuery innerJoinVenta($relationAlias = null) Adds a INNER JOIN clause to the query using the Venta relation
 *
 * @method Cargoventa findOne(PropelPDO $con = null) Return the first Cargoventa matching the query
 * @method Cargoventa findOneOrCreate(PropelPDO $con = null) Return the first Cargoventa matching the query, or a new Cargoventa object populated from the query conditions when no match is found
 *
 * @method Cargoventa findOneByIdventa(int $idventa) Return the first Cargoventa filtered by the idventa column
 * @method Cargoventa findOneByIdlugarinventario(int $idlugarinventario) Return the first Cargoventa filtered by the idlugarinventario column
 * @method Cargoventa findOneByIdservicio(int $idservicio) Return the first Cargoventa filtered by the idservicio column
 * @method Cargoventa findOneByCargoventaTipo(string $cargoventa_tipo) Return the first Cargoventa filtered by the cargoventa_tipo column
 * @method Cargoventa findOneByCargoventaFecha(string $cargoventa_fecha) Return the first Cargoventa filtered by the cargoventa_fecha column
 * @method Cargoventa findOneByCantidad(string $cantidad) Return the first Cargoventa filtered by the cantidad column
 * @method Cargoventa findOneByMonto(string $monto) Return the first Cargoventa filtered by the monto column
 *
 * @method array findByIdcargoventa(int $idcargoventa) Return Cargoventa objects filtered by the idcargoventa column
 * @method array findByIdventa(int $idventa) Return Cargoventa objects filtered by the idventa column
 * @method array findByIdlugarinventario(int $idlugarinventario) Return Cargoventa objects filtered by the idlugarinventario column
 * @method array findByIdservicio(int $idservicio) Return Cargoventa objects filtered by the idservicio column
 * @method array findByCargoventaTipo(string $cargoventa_tipo) Return Cargoventa objects filtered by the cargoventa_tipo column
 * @method array findByCargoventaFecha(string $cargoventa_fecha) Return Cargoventa objects filtered by the cargoventa_fecha column
 * @method array findByCantidad(string $cantidad) Return Cargoventa objects filtered by the cantidad column
 * @method array findByMonto(string $monto) Return Cargoventa objects filtered by the monto column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseCargoventaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCargoventaQuery object.
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
            $modelName = 'Cargoventa';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CargoventaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CargoventaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CargoventaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CargoventaQuery) {
            return $criteria;
        }
        $query = new CargoventaQuery(null, null, $modelAlias);

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
     * @return   Cargoventa|Cargoventa[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CargoventaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CargoventaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cargoventa A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcargoventa($key, $con = null)
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
     * @return                 Cargoventa A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcargoventa`, `idventa`, `idlugarinventario`, `idservicio`, `cargoventa_tipo`, `cargoventa_fecha`, `cantidad`, `monto` FROM `cargoventa` WHERE `idcargoventa` = :p0';
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
            $obj = new Cargoventa();
            $obj->hydrate($row);
            CargoventaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cargoventa|Cargoventa[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cargoventa[]|mixed the list of results, formatted by the current formatter
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
     * @return CargoventaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CargoventaPeer::IDCARGOVENTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CargoventaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CargoventaPeer::IDCARGOVENTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcargoventa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcargoventa(1234); // WHERE idcargoventa = 1234
     * $query->filterByIdcargoventa(array(12, 34)); // WHERE idcargoventa IN (12, 34)
     * $query->filterByIdcargoventa(array('min' => 12)); // WHERE idcargoventa >= 12
     * $query->filterByIdcargoventa(array('max' => 12)); // WHERE idcargoventa <= 12
     * </code>
     *
     * @param     mixed $idcargoventa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoventaQuery The current query, for fluid interface
     */
    public function filterByIdcargoventa($idcargoventa = null, $comparison = null)
    {
        if (is_array($idcargoventa)) {
            $useMinMax = false;
            if (isset($idcargoventa['min'])) {
                $this->addUsingAlias(CargoventaPeer::IDCARGOVENTA, $idcargoventa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcargoventa['max'])) {
                $this->addUsingAlias(CargoventaPeer::IDCARGOVENTA, $idcargoventa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoventaPeer::IDCARGOVENTA, $idcargoventa, $comparison);
    }

    /**
     * Filter the query on the idventa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdventa(1234); // WHERE idventa = 1234
     * $query->filterByIdventa(array(12, 34)); // WHERE idventa IN (12, 34)
     * $query->filterByIdventa(array('min' => 12)); // WHERE idventa >= 12
     * $query->filterByIdventa(array('max' => 12)); // WHERE idventa <= 12
     * </code>
     *
     * @see       filterByVenta()
     *
     * @param     mixed $idventa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoventaQuery The current query, for fluid interface
     */
    public function filterByIdventa($idventa = null, $comparison = null)
    {
        if (is_array($idventa)) {
            $useMinMax = false;
            if (isset($idventa['min'])) {
                $this->addUsingAlias(CargoventaPeer::IDVENTA, $idventa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idventa['max'])) {
                $this->addUsingAlias(CargoventaPeer::IDVENTA, $idventa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoventaPeer::IDVENTA, $idventa, $comparison);
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
     * @return CargoventaQuery The current query, for fluid interface
     */
    public function filterByIdlugarinventario($idlugarinventario = null, $comparison = null)
    {
        if (is_array($idlugarinventario)) {
            $useMinMax = false;
            if (isset($idlugarinventario['min'])) {
                $this->addUsingAlias(CargoventaPeer::IDLUGARINVENTARIO, $idlugarinventario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idlugarinventario['max'])) {
                $this->addUsingAlias(CargoventaPeer::IDLUGARINVENTARIO, $idlugarinventario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoventaPeer::IDLUGARINVENTARIO, $idlugarinventario, $comparison);
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
     * @return CargoventaQuery The current query, for fluid interface
     */
    public function filterByIdservicio($idservicio = null, $comparison = null)
    {
        if (is_array($idservicio)) {
            $useMinMax = false;
            if (isset($idservicio['min'])) {
                $this->addUsingAlias(CargoventaPeer::IDSERVICIO, $idservicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idservicio['max'])) {
                $this->addUsingAlias(CargoventaPeer::IDSERVICIO, $idservicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoventaPeer::IDSERVICIO, $idservicio, $comparison);
    }

    /**
     * Filter the query on the cargoventa_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByCargoventaTipo('fooValue');   // WHERE cargoventa_tipo = 'fooValue'
     * $query->filterByCargoventaTipo('%fooValue%'); // WHERE cargoventa_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cargoventaTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoventaQuery The current query, for fluid interface
     */
    public function filterByCargoventaTipo($cargoventaTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cargoventaTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cargoventaTipo)) {
                $cargoventaTipo = str_replace('*', '%', $cargoventaTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CargoventaPeer::CARGOVENTA_TIPO, $cargoventaTipo, $comparison);
    }

    /**
     * Filter the query on the cargoventa_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByCargoventaFecha('2011-03-14'); // WHERE cargoventa_fecha = '2011-03-14'
     * $query->filterByCargoventaFecha('now'); // WHERE cargoventa_fecha = '2011-03-14'
     * $query->filterByCargoventaFecha(array('max' => 'yesterday')); // WHERE cargoventa_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $cargoventaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoventaQuery The current query, for fluid interface
     */
    public function filterByCargoventaFecha($cargoventaFecha = null, $comparison = null)
    {
        if (is_array($cargoventaFecha)) {
            $useMinMax = false;
            if (isset($cargoventaFecha['min'])) {
                $this->addUsingAlias(CargoventaPeer::CARGOVENTA_FECHA, $cargoventaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cargoventaFecha['max'])) {
                $this->addUsingAlias(CargoventaPeer::CARGOVENTA_FECHA, $cargoventaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoventaPeer::CARGOVENTA_FECHA, $cargoventaFecha, $comparison);
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
     * @return CargoventaQuery The current query, for fluid interface
     */
    public function filterByCantidad($cantidad = null, $comparison = null)
    {
        if (is_array($cantidad)) {
            $useMinMax = false;
            if (isset($cantidad['min'])) {
                $this->addUsingAlias(CargoventaPeer::CANTIDAD, $cantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cantidad['max'])) {
                $this->addUsingAlias(CargoventaPeer::CANTIDAD, $cantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoventaPeer::CANTIDAD, $cantidad, $comparison);
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
     * @return CargoventaQuery The current query, for fluid interface
     */
    public function filterByMonto($monto = null, $comparison = null)
    {
        if (is_array($monto)) {
            $useMinMax = false;
            if (isset($monto['min'])) {
                $this->addUsingAlias(CargoventaPeer::MONTO, $monto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($monto['max'])) {
                $this->addUsingAlias(CargoventaPeer::MONTO, $monto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoventaPeer::MONTO, $monto, $comparison);
    }

    /**
     * Filter the query by a related Lugarinventario object
     *
     * @param   Lugarinventario|PropelObjectCollection $lugarinventario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CargoventaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLugarinventario($lugarinventario, $comparison = null)
    {
        if ($lugarinventario instanceof Lugarinventario) {
            return $this
                ->addUsingAlias(CargoventaPeer::IDLUGARINVENTARIO, $lugarinventario->getIdlugarinventario(), $comparison);
        } elseif ($lugarinventario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CargoventaPeer::IDLUGARINVENTARIO, $lugarinventario->toKeyValue('PrimaryKey', 'Idlugarinventario'), $comparison);
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
     * @return CargoventaQuery The current query, for fluid interface
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
     * @return                 CargoventaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByServicio($servicio, $comparison = null)
    {
        if ($servicio instanceof Servicio) {
            return $this
                ->addUsingAlias(CargoventaPeer::IDSERVICIO, $servicio->getIdservicio(), $comparison);
        } elseif ($servicio instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CargoventaPeer::IDSERVICIO, $servicio->toKeyValue('PrimaryKey', 'Idservicio'), $comparison);
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
     * @return CargoventaQuery The current query, for fluid interface
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
     * Filter the query by a related Venta object
     *
     * @param   Venta|PropelObjectCollection $venta The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CargoventaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVenta($venta, $comparison = null)
    {
        if ($venta instanceof Venta) {
            return $this
                ->addUsingAlias(CargoventaPeer::IDVENTA, $venta->getIdventa(), $comparison);
        } elseif ($venta instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CargoventaPeer::IDVENTA, $venta->toKeyValue('PrimaryKey', 'Idventa'), $comparison);
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
     * @return CargoventaQuery The current query, for fluid interface
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
     * @param   Cargoventa $cargoventa Object to remove from the list of results
     *
     * @return CargoventaQuery The current query, for fluid interface
     */
    public function prune($cargoventa = null)
    {
        if ($cargoventa) {
            $this->addUsingAlias(CargoventaPeer::IDCARGOVENTA, $cargoventa->getIdcargoventa(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
