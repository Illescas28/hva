<?php


/**
 * Base class that represents a query for the 'cajachica' table.
 *
 *
 *
 * @method CajachicaQuery orderByIdcajachica($order = Criteria::ASC) Order by the idcajachica column
 * @method CajachicaQuery orderByCajachicaNombre($order = Criteria::ASC) Order by the cajachica_nombre column
 * @method CajachicaQuery orderByCajachicaDescripcion($order = Criteria::ASC) Order by the cajachica_descripcion column
 * @method CajachicaQuery orderByCajachicaFechainicio($order = Criteria::ASC) Order by the cajachica_fechainicio column
 * @method CajachicaQuery orderByCajachicaFechafinal($order = Criteria::ASC) Order by the cajachica_fechafinal column
 * @method CajachicaQuery orderByCajachicaTotal($order = Criteria::ASC) Order by the cajachica_total column
 *
 * @method CajachicaQuery groupByIdcajachica() Group by the idcajachica column
 * @method CajachicaQuery groupByCajachicaNombre() Group by the cajachica_nombre column
 * @method CajachicaQuery groupByCajachicaDescripcion() Group by the cajachica_descripcion column
 * @method CajachicaQuery groupByCajachicaFechainicio() Group by the cajachica_fechainicio column
 * @method CajachicaQuery groupByCajachicaFechafinal() Group by the cajachica_fechafinal column
 * @method CajachicaQuery groupByCajachicaTotal() Group by the cajachica_total column
 *
 * @method CajachicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CajachicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CajachicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CajachicaQuery leftJoinCajachicadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cajachicadetalle relation
 * @method CajachicaQuery rightJoinCajachicadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cajachicadetalle relation
 * @method CajachicaQuery innerJoinCajachicadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Cajachicadetalle relation
 *
 * @method CajachicaQuery leftJoinVenta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Venta relation
 * @method CajachicaQuery rightJoinVenta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Venta relation
 * @method CajachicaQuery innerJoinVenta($relationAlias = null) Adds a INNER JOIN clause to the query using the Venta relation
 *
 * @method Cajachica findOne(PropelPDO $con = null) Return the first Cajachica matching the query
 * @method Cajachica findOneOrCreate(PropelPDO $con = null) Return the first Cajachica matching the query, or a new Cajachica object populated from the query conditions when no match is found
 *
 * @method Cajachica findOneByCajachicaNombre(string $cajachica_nombre) Return the first Cajachica filtered by the cajachica_nombre column
 * @method Cajachica findOneByCajachicaDescripcion(string $cajachica_descripcion) Return the first Cajachica filtered by the cajachica_descripcion column
 * @method Cajachica findOneByCajachicaFechainicio(string $cajachica_fechainicio) Return the first Cajachica filtered by the cajachica_fechainicio column
 * @method Cajachica findOneByCajachicaFechafinal(string $cajachica_fechafinal) Return the first Cajachica filtered by the cajachica_fechafinal column
 * @method Cajachica findOneByCajachicaTotal(string $cajachica_total) Return the first Cajachica filtered by the cajachica_total column
 *
 * @method array findByIdcajachica(int $idcajachica) Return Cajachica objects filtered by the idcajachica column
 * @method array findByCajachicaNombre(string $cajachica_nombre) Return Cajachica objects filtered by the cajachica_nombre column
 * @method array findByCajachicaDescripcion(string $cajachica_descripcion) Return Cajachica objects filtered by the cajachica_descripcion column
 * @method array findByCajachicaFechainicio(string $cajachica_fechainicio) Return Cajachica objects filtered by the cajachica_fechainicio column
 * @method array findByCajachicaFechafinal(string $cajachica_fechafinal) Return Cajachica objects filtered by the cajachica_fechafinal column
 * @method array findByCajachicaTotal(string $cajachica_total) Return Cajachica objects filtered by the cajachica_total column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseCajachicaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCajachicaQuery object.
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
            $modelName = 'Cajachica';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CajachicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CajachicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CajachicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CajachicaQuery) {
            return $criteria;
        }
        $query = new CajachicaQuery(null, null, $modelAlias);

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
     * @return   Cajachica|Cajachica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CajachicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CajachicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cajachica A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcajachica($key, $con = null)
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
     * @return                 Cajachica A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcajachica`, `cajachica_nombre`, `cajachica_descripcion`, `cajachica_fechainicio`, `cajachica_fechafinal`, `cajachica_total` FROM `cajachica` WHERE `idcajachica` = :p0';
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
            $obj = new Cajachica();
            $obj->hydrate($row);
            CajachicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cajachica|Cajachica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cajachica[]|mixed the list of results, formatted by the current formatter
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
     * @return CajachicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CajachicaPeer::IDCAJACHICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CajachicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CajachicaPeer::IDCAJACHICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcajachica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcajachica(1234); // WHERE idcajachica = 1234
     * $query->filterByIdcajachica(array(12, 34)); // WHERE idcajachica IN (12, 34)
     * $query->filterByIdcajachica(array('min' => 12)); // WHERE idcajachica >= 12
     * $query->filterByIdcajachica(array('max' => 12)); // WHERE idcajachica <= 12
     * </code>
     *
     * @param     mixed $idcajachica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CajachicaQuery The current query, for fluid interface
     */
    public function filterByIdcajachica($idcajachica = null, $comparison = null)
    {
        if (is_array($idcajachica)) {
            $useMinMax = false;
            if (isset($idcajachica['min'])) {
                $this->addUsingAlias(CajachicaPeer::IDCAJACHICA, $idcajachica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcajachica['max'])) {
                $this->addUsingAlias(CajachicaPeer::IDCAJACHICA, $idcajachica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CajachicaPeer::IDCAJACHICA, $idcajachica, $comparison);
    }

    /**
     * Filter the query on the cajachica_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByCajachicaNombre('fooValue');   // WHERE cajachica_nombre = 'fooValue'
     * $query->filterByCajachicaNombre('%fooValue%'); // WHERE cajachica_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cajachicaNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CajachicaQuery The current query, for fluid interface
     */
    public function filterByCajachicaNombre($cajachicaNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cajachicaNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cajachicaNombre)) {
                $cajachicaNombre = str_replace('*', '%', $cajachicaNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CajachicaPeer::CAJACHICA_NOMBRE, $cajachicaNombre, $comparison);
    }

    /**
     * Filter the query on the cajachica_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByCajachicaDescripcion('fooValue');   // WHERE cajachica_descripcion = 'fooValue'
     * $query->filterByCajachicaDescripcion('%fooValue%'); // WHERE cajachica_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cajachicaDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CajachicaQuery The current query, for fluid interface
     */
    public function filterByCajachicaDescripcion($cajachicaDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cajachicaDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cajachicaDescripcion)) {
                $cajachicaDescripcion = str_replace('*', '%', $cajachicaDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CajachicaPeer::CAJACHICA_DESCRIPCION, $cajachicaDescripcion, $comparison);
    }

    /**
     * Filter the query on the cajachica_fechainicio column
     *
     * Example usage:
     * <code>
     * $query->filterByCajachicaFechainicio('2011-03-14'); // WHERE cajachica_fechainicio = '2011-03-14'
     * $query->filterByCajachicaFechainicio('now'); // WHERE cajachica_fechainicio = '2011-03-14'
     * $query->filterByCajachicaFechainicio(array('max' => 'yesterday')); // WHERE cajachica_fechainicio < '2011-03-13'
     * </code>
     *
     * @param     mixed $cajachicaFechainicio The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CajachicaQuery The current query, for fluid interface
     */
    public function filterByCajachicaFechainicio($cajachicaFechainicio = null, $comparison = null)
    {
        if (is_array($cajachicaFechainicio)) {
            $useMinMax = false;
            if (isset($cajachicaFechainicio['min'])) {
                $this->addUsingAlias(CajachicaPeer::CAJACHICA_FECHAINICIO, $cajachicaFechainicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cajachicaFechainicio['max'])) {
                $this->addUsingAlias(CajachicaPeer::CAJACHICA_FECHAINICIO, $cajachicaFechainicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CajachicaPeer::CAJACHICA_FECHAINICIO, $cajachicaFechainicio, $comparison);
    }

    /**
     * Filter the query on the cajachica_fechafinal column
     *
     * Example usage:
     * <code>
     * $query->filterByCajachicaFechafinal('2011-03-14'); // WHERE cajachica_fechafinal = '2011-03-14'
     * $query->filterByCajachicaFechafinal('now'); // WHERE cajachica_fechafinal = '2011-03-14'
     * $query->filterByCajachicaFechafinal(array('max' => 'yesterday')); // WHERE cajachica_fechafinal < '2011-03-13'
     * </code>
     *
     * @param     mixed $cajachicaFechafinal The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CajachicaQuery The current query, for fluid interface
     */
    public function filterByCajachicaFechafinal($cajachicaFechafinal = null, $comparison = null)
    {
        if (is_array($cajachicaFechafinal)) {
            $useMinMax = false;
            if (isset($cajachicaFechafinal['min'])) {
                $this->addUsingAlias(CajachicaPeer::CAJACHICA_FECHAFINAL, $cajachicaFechafinal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cajachicaFechafinal['max'])) {
                $this->addUsingAlias(CajachicaPeer::CAJACHICA_FECHAFINAL, $cajachicaFechafinal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CajachicaPeer::CAJACHICA_FECHAFINAL, $cajachicaFechafinal, $comparison);
    }

    /**
     * Filter the query on the cajachica_total column
     *
     * Example usage:
     * <code>
     * $query->filterByCajachicaTotal(1234); // WHERE cajachica_total = 1234
     * $query->filterByCajachicaTotal(array(12, 34)); // WHERE cajachica_total IN (12, 34)
     * $query->filterByCajachicaTotal(array('min' => 12)); // WHERE cajachica_total >= 12
     * $query->filterByCajachicaTotal(array('max' => 12)); // WHERE cajachica_total <= 12
     * </code>
     *
     * @param     mixed $cajachicaTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CajachicaQuery The current query, for fluid interface
     */
    public function filterByCajachicaTotal($cajachicaTotal = null, $comparison = null)
    {
        if (is_array($cajachicaTotal)) {
            $useMinMax = false;
            if (isset($cajachicaTotal['min'])) {
                $this->addUsingAlias(CajachicaPeer::CAJACHICA_TOTAL, $cajachicaTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cajachicaTotal['max'])) {
                $this->addUsingAlias(CajachicaPeer::CAJACHICA_TOTAL, $cajachicaTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CajachicaPeer::CAJACHICA_TOTAL, $cajachicaTotal, $comparison);
    }

    /**
     * Filter the query by a related Cajachicadetalle object
     *
     * @param   Cajachicadetalle|PropelObjectCollection $cajachicadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CajachicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCajachicadetalle($cajachicadetalle, $comparison = null)
    {
        if ($cajachicadetalle instanceof Cajachicadetalle) {
            return $this
                ->addUsingAlias(CajachicaPeer::IDCAJACHICA, $cajachicadetalle->getIdcajachica(), $comparison);
        } elseif ($cajachicadetalle instanceof PropelObjectCollection) {
            return $this
                ->useCajachicadetalleQuery()
                ->filterByPrimaryKeys($cajachicadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCajachicadetalle() only accepts arguments of type Cajachicadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cajachicadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CajachicaQuery The current query, for fluid interface
     */
    public function joinCajachicadetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cajachicadetalle');

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
            $this->addJoinObject($join, 'Cajachicadetalle');
        }

        return $this;
    }

    /**
     * Use the Cajachicadetalle relation Cajachicadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CajachicadetalleQuery A secondary query class using the current class as primary query
     */
    public function useCajachicadetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCajachicadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cajachicadetalle', 'CajachicadetalleQuery');
    }

    /**
     * Filter the query by a related Venta object
     *
     * @param   Venta|PropelObjectCollection $venta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CajachicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVenta($venta, $comparison = null)
    {
        if ($venta instanceof Venta) {
            return $this
                ->addUsingAlias(CajachicaPeer::IDCAJACHICA, $venta->getIdcajachica(), $comparison);
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
     * @return CajachicaQuery The current query, for fluid interface
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
     * @param   Cajachica $cajachica Object to remove from the list of results
     *
     * @return CajachicaQuery The current query, for fluid interface
     */
    public function prune($cajachica = null)
    {
        if ($cajachica) {
            $this->addUsingAlias(CajachicaPeer::IDCAJACHICA, $cajachica->getIdcajachica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
