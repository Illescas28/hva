<?php


/**
 * Base class that represents a query for the 'traspasodetalles' table.
 *
 *
 *
 * @method TraspasodetallesQuery orderByIdtraspasodetalles($order = Criteria::ASC) Order by the idtraspasodetalles column
 * @method TraspasodetallesQuery orderByIdtraspaso($order = Criteria::ASC) Order by the idtraspaso column
 * @method TraspasodetallesQuery orderByIdlugarinventario($order = Criteria::ASC) Order by the idlugarinventario column
 * @method TraspasodetallesQuery orderByTraspasoCantidad($order = Criteria::ASC) Order by the traspaso_cantidad column
 *
 * @method TraspasodetallesQuery groupByIdtraspasodetalles() Group by the idtraspasodetalles column
 * @method TraspasodetallesQuery groupByIdtraspaso() Group by the idtraspaso column
 * @method TraspasodetallesQuery groupByIdlugarinventario() Group by the idlugarinventario column
 * @method TraspasodetallesQuery groupByTraspasoCantidad() Group by the traspaso_cantidad column
 *
 * @method TraspasodetallesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TraspasodetallesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TraspasodetallesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TraspasodetallesQuery leftJoinLugarinventario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Lugarinventario relation
 * @method TraspasodetallesQuery rightJoinLugarinventario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Lugarinventario relation
 * @method TraspasodetallesQuery innerJoinLugarinventario($relationAlias = null) Adds a INNER JOIN clause to the query using the Lugarinventario relation
 *
 * @method TraspasodetallesQuery leftJoinTraspaso($relationAlias = null) Adds a LEFT JOIN clause to the query using the Traspaso relation
 * @method TraspasodetallesQuery rightJoinTraspaso($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Traspaso relation
 * @method TraspasodetallesQuery innerJoinTraspaso($relationAlias = null) Adds a INNER JOIN clause to the query using the Traspaso relation
 *
 * @method Traspasodetalles findOne(PropelPDO $con = null) Return the first Traspasodetalles matching the query
 * @method Traspasodetalles findOneOrCreate(PropelPDO $con = null) Return the first Traspasodetalles matching the query, or a new Traspasodetalles object populated from the query conditions when no match is found
 *
 * @method Traspasodetalles findOneByIdtraspaso(int $idtraspaso) Return the first Traspasodetalles filtered by the idtraspaso column
 * @method Traspasodetalles findOneByIdlugarinventario(int $idlugarinventario) Return the first Traspasodetalles filtered by the idlugarinventario column
 * @method Traspasodetalles findOneByTraspasoCantidad(string $traspaso_cantidad) Return the first Traspasodetalles filtered by the traspaso_cantidad column
 *
 * @method array findByIdtraspasodetalles(int $idtraspasodetalles) Return Traspasodetalles objects filtered by the idtraspasodetalles column
 * @method array findByIdtraspaso(int $idtraspaso) Return Traspasodetalles objects filtered by the idtraspaso column
 * @method array findByIdlugarinventario(int $idlugarinventario) Return Traspasodetalles objects filtered by the idlugarinventario column
 * @method array findByTraspasoCantidad(string $traspaso_cantidad) Return Traspasodetalles objects filtered by the traspaso_cantidad column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseTraspasodetallesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTraspasodetallesQuery object.
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
            $modelName = 'Traspasodetalles';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TraspasodetallesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TraspasodetallesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TraspasodetallesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TraspasodetallesQuery) {
            return $criteria;
        }
        $query = new TraspasodetallesQuery(null, null, $modelAlias);

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
     * @return   Traspasodetalles|Traspasodetalles[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TraspasodetallesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TraspasodetallesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Traspasodetalles A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdtraspasodetalles($key, $con = null)
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
     * @return                 Traspasodetalles A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idtraspasodetalles`, `idtraspaso`, `idlugarinventario`, `traspaso_cantidad` FROM `traspasodetalles` WHERE `idtraspasodetalles` = :p0';
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
            $obj = new Traspasodetalles();
            $obj->hydrate($row);
            TraspasodetallesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Traspasodetalles|Traspasodetalles[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Traspasodetalles[]|mixed the list of results, formatted by the current formatter
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
     * @return TraspasodetallesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TraspasodetallesPeer::IDTRASPASODETALLES, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TraspasodetallesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TraspasodetallesPeer::IDTRASPASODETALLES, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idtraspasodetalles column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtraspasodetalles(1234); // WHERE idtraspasodetalles = 1234
     * $query->filterByIdtraspasodetalles(array(12, 34)); // WHERE idtraspasodetalles IN (12, 34)
     * $query->filterByIdtraspasodetalles(array('min' => 12)); // WHERE idtraspasodetalles >= 12
     * $query->filterByIdtraspasodetalles(array('max' => 12)); // WHERE idtraspasodetalles <= 12
     * </code>
     *
     * @param     mixed $idtraspasodetalles The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TraspasodetallesQuery The current query, for fluid interface
     */
    public function filterByIdtraspasodetalles($idtraspasodetalles = null, $comparison = null)
    {
        if (is_array($idtraspasodetalles)) {
            $useMinMax = false;
            if (isset($idtraspasodetalles['min'])) {
                $this->addUsingAlias(TraspasodetallesPeer::IDTRASPASODETALLES, $idtraspasodetalles['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtraspasodetalles['max'])) {
                $this->addUsingAlias(TraspasodetallesPeer::IDTRASPASODETALLES, $idtraspasodetalles['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TraspasodetallesPeer::IDTRASPASODETALLES, $idtraspasodetalles, $comparison);
    }

    /**
     * Filter the query on the idtraspaso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtraspaso(1234); // WHERE idtraspaso = 1234
     * $query->filterByIdtraspaso(array(12, 34)); // WHERE idtraspaso IN (12, 34)
     * $query->filterByIdtraspaso(array('min' => 12)); // WHERE idtraspaso >= 12
     * $query->filterByIdtraspaso(array('max' => 12)); // WHERE idtraspaso <= 12
     * </code>
     *
     * @see       filterByTraspaso()
     *
     * @param     mixed $idtraspaso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TraspasodetallesQuery The current query, for fluid interface
     */
    public function filterByIdtraspaso($idtraspaso = null, $comparison = null)
    {
        if (is_array($idtraspaso)) {
            $useMinMax = false;
            if (isset($idtraspaso['min'])) {
                $this->addUsingAlias(TraspasodetallesPeer::IDTRASPASO, $idtraspaso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtraspaso['max'])) {
                $this->addUsingAlias(TraspasodetallesPeer::IDTRASPASO, $idtraspaso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TraspasodetallesPeer::IDTRASPASO, $idtraspaso, $comparison);
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
     * @return TraspasodetallesQuery The current query, for fluid interface
     */
    public function filterByIdlugarinventario($idlugarinventario = null, $comparison = null)
    {
        if (is_array($idlugarinventario)) {
            $useMinMax = false;
            if (isset($idlugarinventario['min'])) {
                $this->addUsingAlias(TraspasodetallesPeer::IDLUGARINVENTARIO, $idlugarinventario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idlugarinventario['max'])) {
                $this->addUsingAlias(TraspasodetallesPeer::IDLUGARINVENTARIO, $idlugarinventario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TraspasodetallesPeer::IDLUGARINVENTARIO, $idlugarinventario, $comparison);
    }

    /**
     * Filter the query on the traspaso_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByTraspasoCantidad(1234); // WHERE traspaso_cantidad = 1234
     * $query->filterByTraspasoCantidad(array(12, 34)); // WHERE traspaso_cantidad IN (12, 34)
     * $query->filterByTraspasoCantidad(array('min' => 12)); // WHERE traspaso_cantidad >= 12
     * $query->filterByTraspasoCantidad(array('max' => 12)); // WHERE traspaso_cantidad <= 12
     * </code>
     *
     * @param     mixed $traspasoCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TraspasodetallesQuery The current query, for fluid interface
     */
    public function filterByTraspasoCantidad($traspasoCantidad = null, $comparison = null)
    {
        if (is_array($traspasoCantidad)) {
            $useMinMax = false;
            if (isset($traspasoCantidad['min'])) {
                $this->addUsingAlias(TraspasodetallesPeer::TRASPASO_CANTIDAD, $traspasoCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($traspasoCantidad['max'])) {
                $this->addUsingAlias(TraspasodetallesPeer::TRASPASO_CANTIDAD, $traspasoCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TraspasodetallesPeer::TRASPASO_CANTIDAD, $traspasoCantidad, $comparison);
    }

    /**
     * Filter the query by a related Lugarinventario object
     *
     * @param   Lugarinventario|PropelObjectCollection $lugarinventario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TraspasodetallesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLugarinventario($lugarinventario, $comparison = null)
    {
        if ($lugarinventario instanceof Lugarinventario) {
            return $this
                ->addUsingAlias(TraspasodetallesPeer::IDLUGARINVENTARIO, $lugarinventario->getIdlugarinventario(), $comparison);
        } elseif ($lugarinventario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TraspasodetallesPeer::IDLUGARINVENTARIO, $lugarinventario->toKeyValue('PrimaryKey', 'Idlugarinventario'), $comparison);
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
     * @return TraspasodetallesQuery The current query, for fluid interface
     */
    public function joinLugarinventario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useLugarinventarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLugarinventario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Lugarinventario', 'LugarinventarioQuery');
    }

    /**
     * Filter the query by a related Traspaso object
     *
     * @param   Traspaso|PropelObjectCollection $traspaso The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TraspasodetallesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTraspaso($traspaso, $comparison = null)
    {
        if ($traspaso instanceof Traspaso) {
            return $this
                ->addUsingAlias(TraspasodetallesPeer::IDTRASPASO, $traspaso->getIdinventariolugar(), $comparison);
        } elseif ($traspaso instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TraspasodetallesPeer::IDTRASPASO, $traspaso->toKeyValue('Idinventariolugar', 'Idinventariolugar'), $comparison);
        } else {
            throw new PropelException('filterByTraspaso() only accepts arguments of type Traspaso or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Traspaso relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TraspasodetallesQuery The current query, for fluid interface
     */
    public function joinTraspaso($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Traspaso');

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
            $this->addJoinObject($join, 'Traspaso');
        }

        return $this;
    }

    /**
     * Use the Traspaso relation Traspaso object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TraspasoQuery A secondary query class using the current class as primary query
     */
    public function useTraspasoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTraspaso($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Traspaso', 'TraspasoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Traspasodetalles $traspasodetalles Object to remove from the list of results
     *
     * @return TraspasodetallesQuery The current query, for fluid interface
     */
    public function prune($traspasodetalles = null)
    {
        if ($traspasodetalles) {
            $this->addUsingAlias(TraspasodetallesPeer::IDTRASPASODETALLES, $traspasodetalles->getIdtraspasodetalles(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
