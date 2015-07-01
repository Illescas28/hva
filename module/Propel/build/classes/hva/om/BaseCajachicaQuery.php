<?php


/**
 * Base class that represents a query for the 'cajachica' table.
 *
 *
 *
 * @method CajachicaQuery orderByIdcajachica($order = Criteria::ASC) Order by the idcajachica column
 * @method CajachicaQuery orderByIdconceptocajachica($order = Criteria::ASC) Order by the idconceptocajachica column
 * @method CajachicaQuery orderByCajachicaTipomovimiento($order = Criteria::ASC) Order by the cajachica_tipomovimiento column
 * @method CajachicaQuery orderByCajachicaCantidad($order = Criteria::ASC) Order by the cajachica_cantidad column
 * @method CajachicaQuery orderByCajachicaFecha($order = Criteria::ASC) Order by the cajachica_fecha column
 * @method CajachicaQuery orderByCajachicaBalance($order = Criteria::ASC) Order by the cajachica_balance column
 * @method CajachicaQuery orderByCajachicaNota($order = Criteria::ASC) Order by the cajachica_nota column
 *
 * @method CajachicaQuery groupByIdcajachica() Group by the idcajachica column
 * @method CajachicaQuery groupByIdconceptocajachica() Group by the idconceptocajachica column
 * @method CajachicaQuery groupByCajachicaTipomovimiento() Group by the cajachica_tipomovimiento column
 * @method CajachicaQuery groupByCajachicaCantidad() Group by the cajachica_cantidad column
 * @method CajachicaQuery groupByCajachicaFecha() Group by the cajachica_fecha column
 * @method CajachicaQuery groupByCajachicaBalance() Group by the cajachica_balance column
 * @method CajachicaQuery groupByCajachicaNota() Group by the cajachica_nota column
 *
 * @method CajachicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CajachicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CajachicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CajachicaQuery leftJoinConceptocajachica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Conceptocajachica relation
 * @method CajachicaQuery rightJoinConceptocajachica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Conceptocajachica relation
 * @method CajachicaQuery innerJoinConceptocajachica($relationAlias = null) Adds a INNER JOIN clause to the query using the Conceptocajachica relation
 *
 * @method Cajachica findOne(PropelPDO $con = null) Return the first Cajachica matching the query
 * @method Cajachica findOneOrCreate(PropelPDO $con = null) Return the first Cajachica matching the query, or a new Cajachica object populated from the query conditions when no match is found
 *
 * @method Cajachica findOneByIdconceptocajachica(int $idconceptocajachica) Return the first Cajachica filtered by the idconceptocajachica column
 * @method Cajachica findOneByCajachicaTipomovimiento(string $cajachica_tipomovimiento) Return the first Cajachica filtered by the cajachica_tipomovimiento column
 * @method Cajachica findOneByCajachicaCantidad(string $cajachica_cantidad) Return the first Cajachica filtered by the cajachica_cantidad column
 * @method Cajachica findOneByCajachicaFecha(string $cajachica_fecha) Return the first Cajachica filtered by the cajachica_fecha column
 * @method Cajachica findOneByCajachicaBalance(string $cajachica_balance) Return the first Cajachica filtered by the cajachica_balance column
 * @method Cajachica findOneByCajachicaNota(string $cajachica_nota) Return the first Cajachica filtered by the cajachica_nota column
 *
 * @method array findByIdcajachica(int $idcajachica) Return Cajachica objects filtered by the idcajachica column
 * @method array findByIdconceptocajachica(int $idconceptocajachica) Return Cajachica objects filtered by the idconceptocajachica column
 * @method array findByCajachicaTipomovimiento(string $cajachica_tipomovimiento) Return Cajachica objects filtered by the cajachica_tipomovimiento column
 * @method array findByCajachicaCantidad(string $cajachica_cantidad) Return Cajachica objects filtered by the cajachica_cantidad column
 * @method array findByCajachicaFecha(string $cajachica_fecha) Return Cajachica objects filtered by the cajachica_fecha column
 * @method array findByCajachicaBalance(string $cajachica_balance) Return Cajachica objects filtered by the cajachica_balance column
 * @method array findByCajachicaNota(string $cajachica_nota) Return Cajachica objects filtered by the cajachica_nota column
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
        $sql = 'SELECT `idcajachica`, `idconceptocajachica`, `cajachica_tipomovimiento`, `cajachica_cantidad`, `cajachica_fecha`, `cajachica_balance`, `cajachica_nota` FROM `cajachica` WHERE `idcajachica` = :p0';
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
     * Filter the query on the idconceptocajachica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconceptocajachica(1234); // WHERE idconceptocajachica = 1234
     * $query->filterByIdconceptocajachica(array(12, 34)); // WHERE idconceptocajachica IN (12, 34)
     * $query->filterByIdconceptocajachica(array('min' => 12)); // WHERE idconceptocajachica >= 12
     * $query->filterByIdconceptocajachica(array('max' => 12)); // WHERE idconceptocajachica <= 12
     * </code>
     *
     * @see       filterByConceptocajachica()
     *
     * @param     mixed $idconceptocajachica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CajachicaQuery The current query, for fluid interface
     */
    public function filterByIdconceptocajachica($idconceptocajachica = null, $comparison = null)
    {
        if (is_array($idconceptocajachica)) {
            $useMinMax = false;
            if (isset($idconceptocajachica['min'])) {
                $this->addUsingAlias(CajachicaPeer::IDCONCEPTOCAJACHICA, $idconceptocajachica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconceptocajachica['max'])) {
                $this->addUsingAlias(CajachicaPeer::IDCONCEPTOCAJACHICA, $idconceptocajachica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CajachicaPeer::IDCONCEPTOCAJACHICA, $idconceptocajachica, $comparison);
    }

    /**
     * Filter the query on the cajachica_tipomovimiento column
     *
     * Example usage:
     * <code>
     * $query->filterByCajachicaTipomovimiento('fooValue');   // WHERE cajachica_tipomovimiento = 'fooValue'
     * $query->filterByCajachicaTipomovimiento('%fooValue%'); // WHERE cajachica_tipomovimiento LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cajachicaTipomovimiento The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CajachicaQuery The current query, for fluid interface
     */
    public function filterByCajachicaTipomovimiento($cajachicaTipomovimiento = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cajachicaTipomovimiento)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cajachicaTipomovimiento)) {
                $cajachicaTipomovimiento = str_replace('*', '%', $cajachicaTipomovimiento);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CajachicaPeer::CAJACHICA_TIPOMOVIMIENTO, $cajachicaTipomovimiento, $comparison);
    }

    /**
     * Filter the query on the cajachica_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByCajachicaCantidad(1234); // WHERE cajachica_cantidad = 1234
     * $query->filterByCajachicaCantidad(array(12, 34)); // WHERE cajachica_cantidad IN (12, 34)
     * $query->filterByCajachicaCantidad(array('min' => 12)); // WHERE cajachica_cantidad >= 12
     * $query->filterByCajachicaCantidad(array('max' => 12)); // WHERE cajachica_cantidad <= 12
     * </code>
     *
     * @param     mixed $cajachicaCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CajachicaQuery The current query, for fluid interface
     */
    public function filterByCajachicaCantidad($cajachicaCantidad = null, $comparison = null)
    {
        if (is_array($cajachicaCantidad)) {
            $useMinMax = false;
            if (isset($cajachicaCantidad['min'])) {
                $this->addUsingAlias(CajachicaPeer::CAJACHICA_CANTIDAD, $cajachicaCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cajachicaCantidad['max'])) {
                $this->addUsingAlias(CajachicaPeer::CAJACHICA_CANTIDAD, $cajachicaCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CajachicaPeer::CAJACHICA_CANTIDAD, $cajachicaCantidad, $comparison);
    }

    /**
     * Filter the query on the cajachica_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByCajachicaFecha('2011-03-14'); // WHERE cajachica_fecha = '2011-03-14'
     * $query->filterByCajachicaFecha('now'); // WHERE cajachica_fecha = '2011-03-14'
     * $query->filterByCajachicaFecha(array('max' => 'yesterday')); // WHERE cajachica_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $cajachicaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CajachicaQuery The current query, for fluid interface
     */
    public function filterByCajachicaFecha($cajachicaFecha = null, $comparison = null)
    {
        if (is_array($cajachicaFecha)) {
            $useMinMax = false;
            if (isset($cajachicaFecha['min'])) {
                $this->addUsingAlias(CajachicaPeer::CAJACHICA_FECHA, $cajachicaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cajachicaFecha['max'])) {
                $this->addUsingAlias(CajachicaPeer::CAJACHICA_FECHA, $cajachicaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CajachicaPeer::CAJACHICA_FECHA, $cajachicaFecha, $comparison);
    }

    /**
     * Filter the query on the cajachica_balance column
     *
     * Example usage:
     * <code>
     * $query->filterByCajachicaBalance(1234); // WHERE cajachica_balance = 1234
     * $query->filterByCajachicaBalance(array(12, 34)); // WHERE cajachica_balance IN (12, 34)
     * $query->filterByCajachicaBalance(array('min' => 12)); // WHERE cajachica_balance >= 12
     * $query->filterByCajachicaBalance(array('max' => 12)); // WHERE cajachica_balance <= 12
     * </code>
     *
     * @param     mixed $cajachicaBalance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CajachicaQuery The current query, for fluid interface
     */
    public function filterByCajachicaBalance($cajachicaBalance = null, $comparison = null)
    {
        if (is_array($cajachicaBalance)) {
            $useMinMax = false;
            if (isset($cajachicaBalance['min'])) {
                $this->addUsingAlias(CajachicaPeer::CAJACHICA_BALANCE, $cajachicaBalance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cajachicaBalance['max'])) {
                $this->addUsingAlias(CajachicaPeer::CAJACHICA_BALANCE, $cajachicaBalance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CajachicaPeer::CAJACHICA_BALANCE, $cajachicaBalance, $comparison);
    }

    /**
     * Filter the query on the cajachica_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByCajachicaNota('fooValue');   // WHERE cajachica_nota = 'fooValue'
     * $query->filterByCajachicaNota('%fooValue%'); // WHERE cajachica_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cajachicaNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CajachicaQuery The current query, for fluid interface
     */
    public function filterByCajachicaNota($cajachicaNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cajachicaNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cajachicaNota)) {
                $cajachicaNota = str_replace('*', '%', $cajachicaNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CajachicaPeer::CAJACHICA_NOTA, $cajachicaNota, $comparison);
    }

    /**
     * Filter the query by a related Conceptocajachica object
     *
     * @param   Conceptocajachica|PropelObjectCollection $conceptocajachica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CajachicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConceptocajachica($conceptocajachica, $comparison = null)
    {
        if ($conceptocajachica instanceof Conceptocajachica) {
            return $this
                ->addUsingAlias(CajachicaPeer::IDCONCEPTOCAJACHICA, $conceptocajachica->getIdconceptocajachica(), $comparison);
        } elseif ($conceptocajachica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CajachicaPeer::IDCONCEPTOCAJACHICA, $conceptocajachica->toKeyValue('PrimaryKey', 'Idconceptocajachica'), $comparison);
        } else {
            throw new PropelException('filterByConceptocajachica() only accepts arguments of type Conceptocajachica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Conceptocajachica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CajachicaQuery The current query, for fluid interface
     */
    public function joinConceptocajachica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Conceptocajachica');

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
            $this->addJoinObject($join, 'Conceptocajachica');
        }

        return $this;
    }

    /**
     * Use the Conceptocajachica relation Conceptocajachica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ConceptocajachicaQuery A secondary query class using the current class as primary query
     */
    public function useConceptocajachicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinConceptocajachica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Conceptocajachica', 'ConceptocajachicaQuery');
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
