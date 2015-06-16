<?php


/**
 * Base class that represents a query for the 'cajachicadetalle' table.
 *
 *
 *
 * @method CajachicadetalleQuery orderByIdcajachicadetalle($order = Criteria::ASC) Order by the idcajachicadetalle column
 * @method CajachicadetalleQuery orderByIdcajachica($order = Criteria::ASC) Order by the idcajachica column
 * @method CajachicadetalleQuery orderByIdgasto($order = Criteria::ASC) Order by the idgasto column
 * @method CajachicadetalleQuery orderByCajachicadetalleCantidad($order = Criteria::ASC) Order by the cajachicadetalle_cantidad column
 * @method CajachicadetalleQuery orderByCajachicadetalleMonto($order = Criteria::ASC) Order by the cajachicadetalle_monto column
 *
 * @method CajachicadetalleQuery groupByIdcajachicadetalle() Group by the idcajachicadetalle column
 * @method CajachicadetalleQuery groupByIdcajachica() Group by the idcajachica column
 * @method CajachicadetalleQuery groupByIdgasto() Group by the idgasto column
 * @method CajachicadetalleQuery groupByCajachicadetalleCantidad() Group by the cajachicadetalle_cantidad column
 * @method CajachicadetalleQuery groupByCajachicadetalleMonto() Group by the cajachicadetalle_monto column
 *
 * @method CajachicadetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CajachicadetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CajachicadetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CajachicadetalleQuery leftJoinCajachica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cajachica relation
 * @method CajachicadetalleQuery rightJoinCajachica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cajachica relation
 * @method CajachicadetalleQuery innerJoinCajachica($relationAlias = null) Adds a INNER JOIN clause to the query using the Cajachica relation
 *
 * @method CajachicadetalleQuery leftJoinGasto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Gasto relation
 * @method CajachicadetalleQuery rightJoinGasto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Gasto relation
 * @method CajachicadetalleQuery innerJoinGasto($relationAlias = null) Adds a INNER JOIN clause to the query using the Gasto relation
 *
 * @method Cajachicadetalle findOne(PropelPDO $con = null) Return the first Cajachicadetalle matching the query
 * @method Cajachicadetalle findOneOrCreate(PropelPDO $con = null) Return the first Cajachicadetalle matching the query, or a new Cajachicadetalle object populated from the query conditions when no match is found
 *
 * @method Cajachicadetalle findOneByIdcajachica(int $idcajachica) Return the first Cajachicadetalle filtered by the idcajachica column
 * @method Cajachicadetalle findOneByIdgasto(int $idgasto) Return the first Cajachicadetalle filtered by the idgasto column
 * @method Cajachicadetalle findOneByCajachicadetalleCantidad(string $cajachicadetalle_cantidad) Return the first Cajachicadetalle filtered by the cajachicadetalle_cantidad column
 * @method Cajachicadetalle findOneByCajachicadetalleMonto(string $cajachicadetalle_monto) Return the first Cajachicadetalle filtered by the cajachicadetalle_monto column
 *
 * @method array findByIdcajachicadetalle(int $idcajachicadetalle) Return Cajachicadetalle objects filtered by the idcajachicadetalle column
 * @method array findByIdcajachica(int $idcajachica) Return Cajachicadetalle objects filtered by the idcajachica column
 * @method array findByIdgasto(int $idgasto) Return Cajachicadetalle objects filtered by the idgasto column
 * @method array findByCajachicadetalleCantidad(string $cajachicadetalle_cantidad) Return Cajachicadetalle objects filtered by the cajachicadetalle_cantidad column
 * @method array findByCajachicadetalleMonto(string $cajachicadetalle_monto) Return Cajachicadetalle objects filtered by the cajachicadetalle_monto column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseCajachicadetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCajachicadetalleQuery object.
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
            $modelName = 'Cajachicadetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CajachicadetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CajachicadetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CajachicadetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CajachicadetalleQuery) {
            return $criteria;
        }
        $query = new CajachicadetalleQuery(null, null, $modelAlias);

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
     * @return   Cajachicadetalle|Cajachicadetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CajachicadetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CajachicadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cajachicadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcajachicadetalle($key, $con = null)
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
     * @return                 Cajachicadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcajachicadetalle`, `idcajachica`, `idgasto`, `cajachicadetalle_cantidad`, `cajachicadetalle_monto` FROM `cajachicadetalle` WHERE `idcajachicadetalle` = :p0';
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
            $obj = new Cajachicadetalle();
            $obj->hydrate($row);
            CajachicadetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cajachicadetalle|Cajachicadetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cajachicadetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return CajachicadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CajachicadetallePeer::IDCAJACHICADETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CajachicadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CajachicadetallePeer::IDCAJACHICADETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcajachicadetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcajachicadetalle(1234); // WHERE idcajachicadetalle = 1234
     * $query->filterByIdcajachicadetalle(array(12, 34)); // WHERE idcajachicadetalle IN (12, 34)
     * $query->filterByIdcajachicadetalle(array('min' => 12)); // WHERE idcajachicadetalle >= 12
     * $query->filterByIdcajachicadetalle(array('max' => 12)); // WHERE idcajachicadetalle <= 12
     * </code>
     *
     * @param     mixed $idcajachicadetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CajachicadetalleQuery The current query, for fluid interface
     */
    public function filterByIdcajachicadetalle($idcajachicadetalle = null, $comparison = null)
    {
        if (is_array($idcajachicadetalle)) {
            $useMinMax = false;
            if (isset($idcajachicadetalle['min'])) {
                $this->addUsingAlias(CajachicadetallePeer::IDCAJACHICADETALLE, $idcajachicadetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcajachicadetalle['max'])) {
                $this->addUsingAlias(CajachicadetallePeer::IDCAJACHICADETALLE, $idcajachicadetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CajachicadetallePeer::IDCAJACHICADETALLE, $idcajachicadetalle, $comparison);
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
     * @see       filterByCajachica()
     *
     * @param     mixed $idcajachica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CajachicadetalleQuery The current query, for fluid interface
     */
    public function filterByIdcajachica($idcajachica = null, $comparison = null)
    {
        if (is_array($idcajachica)) {
            $useMinMax = false;
            if (isset($idcajachica['min'])) {
                $this->addUsingAlias(CajachicadetallePeer::IDCAJACHICA, $idcajachica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcajachica['max'])) {
                $this->addUsingAlias(CajachicadetallePeer::IDCAJACHICA, $idcajachica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CajachicadetallePeer::IDCAJACHICA, $idcajachica, $comparison);
    }

    /**
     * Filter the query on the idgasto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdgasto(1234); // WHERE idgasto = 1234
     * $query->filterByIdgasto(array(12, 34)); // WHERE idgasto IN (12, 34)
     * $query->filterByIdgasto(array('min' => 12)); // WHERE idgasto >= 12
     * $query->filterByIdgasto(array('max' => 12)); // WHERE idgasto <= 12
     * </code>
     *
     * @see       filterByGasto()
     *
     * @param     mixed $idgasto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CajachicadetalleQuery The current query, for fluid interface
     */
    public function filterByIdgasto($idgasto = null, $comparison = null)
    {
        if (is_array($idgasto)) {
            $useMinMax = false;
            if (isset($idgasto['min'])) {
                $this->addUsingAlias(CajachicadetallePeer::IDGASTO, $idgasto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idgasto['max'])) {
                $this->addUsingAlias(CajachicadetallePeer::IDGASTO, $idgasto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CajachicadetallePeer::IDGASTO, $idgasto, $comparison);
    }

    /**
     * Filter the query on the cajachicadetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByCajachicadetalleCantidad(1234); // WHERE cajachicadetalle_cantidad = 1234
     * $query->filterByCajachicadetalleCantidad(array(12, 34)); // WHERE cajachicadetalle_cantidad IN (12, 34)
     * $query->filterByCajachicadetalleCantidad(array('min' => 12)); // WHERE cajachicadetalle_cantidad >= 12
     * $query->filterByCajachicadetalleCantidad(array('max' => 12)); // WHERE cajachicadetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $cajachicadetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CajachicadetalleQuery The current query, for fluid interface
     */
    public function filterByCajachicadetalleCantidad($cajachicadetalleCantidad = null, $comparison = null)
    {
        if (is_array($cajachicadetalleCantidad)) {
            $useMinMax = false;
            if (isset($cajachicadetalleCantidad['min'])) {
                $this->addUsingAlias(CajachicadetallePeer::CAJACHICADETALLE_CANTIDAD, $cajachicadetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cajachicadetalleCantidad['max'])) {
                $this->addUsingAlias(CajachicadetallePeer::CAJACHICADETALLE_CANTIDAD, $cajachicadetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CajachicadetallePeer::CAJACHICADETALLE_CANTIDAD, $cajachicadetalleCantidad, $comparison);
    }

    /**
     * Filter the query on the cajachicadetalle_monto column
     *
     * Example usage:
     * <code>
     * $query->filterByCajachicadetalleMonto(1234); // WHERE cajachicadetalle_monto = 1234
     * $query->filterByCajachicadetalleMonto(array(12, 34)); // WHERE cajachicadetalle_monto IN (12, 34)
     * $query->filterByCajachicadetalleMonto(array('min' => 12)); // WHERE cajachicadetalle_monto >= 12
     * $query->filterByCajachicadetalleMonto(array('max' => 12)); // WHERE cajachicadetalle_monto <= 12
     * </code>
     *
     * @param     mixed $cajachicadetalleMonto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CajachicadetalleQuery The current query, for fluid interface
     */
    public function filterByCajachicadetalleMonto($cajachicadetalleMonto = null, $comparison = null)
    {
        if (is_array($cajachicadetalleMonto)) {
            $useMinMax = false;
            if (isset($cajachicadetalleMonto['min'])) {
                $this->addUsingAlias(CajachicadetallePeer::CAJACHICADETALLE_MONTO, $cajachicadetalleMonto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cajachicadetalleMonto['max'])) {
                $this->addUsingAlias(CajachicadetallePeer::CAJACHICADETALLE_MONTO, $cajachicadetalleMonto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CajachicadetallePeer::CAJACHICADETALLE_MONTO, $cajachicadetalleMonto, $comparison);
    }

    /**
     * Filter the query by a related Cajachica object
     *
     * @param   Cajachica|PropelObjectCollection $cajachica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CajachicadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCajachica($cajachica, $comparison = null)
    {
        if ($cajachica instanceof Cajachica) {
            return $this
                ->addUsingAlias(CajachicadetallePeer::IDCAJACHICA, $cajachica->getIdcajachica(), $comparison);
        } elseif ($cajachica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CajachicadetallePeer::IDCAJACHICA, $cajachica->toKeyValue('PrimaryKey', 'Idcajachica'), $comparison);
        } else {
            throw new PropelException('filterByCajachica() only accepts arguments of type Cajachica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cajachica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CajachicadetalleQuery The current query, for fluid interface
     */
    public function joinCajachica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cajachica');

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
            $this->addJoinObject($join, 'Cajachica');
        }

        return $this;
    }

    /**
     * Use the Cajachica relation Cajachica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CajachicaQuery A secondary query class using the current class as primary query
     */
    public function useCajachicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCajachica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cajachica', 'CajachicaQuery');
    }

    /**
     * Filter the query by a related Gasto object
     *
     * @param   Gasto|PropelObjectCollection $gasto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CajachicadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGasto($gasto, $comparison = null)
    {
        if ($gasto instanceof Gasto) {
            return $this
                ->addUsingAlias(CajachicadetallePeer::IDGASTO, $gasto->getIdgasto(), $comparison);
        } elseif ($gasto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CajachicadetallePeer::IDGASTO, $gasto->toKeyValue('PrimaryKey', 'Idgasto'), $comparison);
        } else {
            throw new PropelException('filterByGasto() only accepts arguments of type Gasto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Gasto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CajachicadetalleQuery The current query, for fluid interface
     */
    public function joinGasto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Gasto');

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
            $this->addJoinObject($join, 'Gasto');
        }

        return $this;
    }

    /**
     * Use the Gasto relation Gasto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   GastoQuery A secondary query class using the current class as primary query
     */
    public function useGastoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGasto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Gasto', 'GastoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Cajachicadetalle $cajachicadetalle Object to remove from the list of results
     *
     * @return CajachicadetalleQuery The current query, for fluid interface
     */
    public function prune($cajachicadetalle = null)
    {
        if ($cajachicadetalle) {
            $this->addUsingAlias(CajachicadetallePeer::IDCAJACHICADETALLE, $cajachicadetalle->getIdcajachicadetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
