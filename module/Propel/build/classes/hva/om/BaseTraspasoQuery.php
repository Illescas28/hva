<?php


/**
 * Base class that represents a query for the 'traspaso' table.
 *
 *
 *
 * @method TraspasoQuery orderByIdinventariolugar($order = Criteria::ASC) Order by the idinventariolugar column
 * @method TraspasoQuery orderByIdlugarremitente($order = Criteria::ASC) Order by the idlugarremitente column
 * @method TraspasoQuery orderByIdlugardestinatario($order = Criteria::ASC) Order by the idlugardestinatario column
 * @method TraspasoQuery orderByTraspasoFecha($order = Criteria::ASC) Order by the traspaso_fecha column
 * @method TraspasoQuery orderByTraspasoStatus($order = Criteria::ASC) Order by the traspaso_status column
 *
 * @method TraspasoQuery groupByIdinventariolugar() Group by the idinventariolugar column
 * @method TraspasoQuery groupByIdlugarremitente() Group by the idlugarremitente column
 * @method TraspasoQuery groupByIdlugardestinatario() Group by the idlugardestinatario column
 * @method TraspasoQuery groupByTraspasoFecha() Group by the traspaso_fecha column
 * @method TraspasoQuery groupByTraspasoStatus() Group by the traspaso_status column
 *
 * @method TraspasoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TraspasoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TraspasoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TraspasoQuery leftJoinLugarRelatedByIdlugardestinatario($relationAlias = null) Adds a LEFT JOIN clause to the query using the LugarRelatedByIdlugardestinatario relation
 * @method TraspasoQuery rightJoinLugarRelatedByIdlugardestinatario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LugarRelatedByIdlugardestinatario relation
 * @method TraspasoQuery innerJoinLugarRelatedByIdlugardestinatario($relationAlias = null) Adds a INNER JOIN clause to the query using the LugarRelatedByIdlugardestinatario relation
 *
 * @method TraspasoQuery leftJoinLugarRelatedByIdlugarremitente($relationAlias = null) Adds a LEFT JOIN clause to the query using the LugarRelatedByIdlugarremitente relation
 * @method TraspasoQuery rightJoinLugarRelatedByIdlugarremitente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the LugarRelatedByIdlugarremitente relation
 * @method TraspasoQuery innerJoinLugarRelatedByIdlugarremitente($relationAlias = null) Adds a INNER JOIN clause to the query using the LugarRelatedByIdlugarremitente relation
 *
 * @method TraspasoQuery leftJoinTraspasodetalles($relationAlias = null) Adds a LEFT JOIN clause to the query using the Traspasodetalles relation
 * @method TraspasoQuery rightJoinTraspasodetalles($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Traspasodetalles relation
 * @method TraspasoQuery innerJoinTraspasodetalles($relationAlias = null) Adds a INNER JOIN clause to the query using the Traspasodetalles relation
 *
 * @method Traspaso findOne(PropelPDO $con = null) Return the first Traspaso matching the query
 * @method Traspaso findOneOrCreate(PropelPDO $con = null) Return the first Traspaso matching the query, or a new Traspaso object populated from the query conditions when no match is found
 *
 * @method Traspaso findOneByIdinventariolugar(int $idinventariolugar) Return the first Traspaso filtered by the idinventariolugar column
 * @method Traspaso findOneByIdlugarremitente(int $idlugarremitente) Return the first Traspaso filtered by the idlugarremitente column
 * @method Traspaso findOneByIdlugardestinatario(int $idlugardestinatario) Return the first Traspaso filtered by the idlugardestinatario column
 * @method Traspaso findOneByTraspasoFecha(string $traspaso_fecha) Return the first Traspaso filtered by the traspaso_fecha column
 * @method Traspaso findOneByTraspasoStatus(string $traspaso_status) Return the first Traspaso filtered by the traspaso_status column
 *
 * @method array findByIdinventariolugar(int $idinventariolugar) Return Traspaso objects filtered by the idinventariolugar column
 * @method array findByIdlugarremitente(int $idlugarremitente) Return Traspaso objects filtered by the idlugarremitente column
 * @method array findByIdlugardestinatario(int $idlugardestinatario) Return Traspaso objects filtered by the idlugardestinatario column
 * @method array findByTraspasoFecha(string $traspaso_fecha) Return Traspaso objects filtered by the traspaso_fecha column
 * @method array findByTraspasoStatus(string $traspaso_status) Return Traspaso objects filtered by the traspaso_status column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseTraspasoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTraspasoQuery object.
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
            $modelName = 'Traspaso';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TraspasoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TraspasoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TraspasoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TraspasoQuery) {
            return $criteria;
        }
        $query = new TraspasoQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$idinventariolugar, $idlugarremitente, $idlugardestinatario]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Traspaso|Traspaso[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TraspasoPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Traspaso A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idinventariolugar`, `idlugarremitente`, `idlugardestinatario`, `traspaso_fecha`, `traspaso_status` FROM `traspaso` WHERE `idinventariolugar` = :p0 AND `idlugarremitente` = :p1 AND `idlugardestinatario` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Traspaso();
            $obj->hydrate($row);
            TraspasoPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Traspaso|Traspaso[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Traspaso[]|mixed the list of results, formatted by the current formatter
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
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(TraspasoPeer::IDINVENTARIOLUGAR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(TraspasoPeer::IDLUGARREMITENTE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(TraspasoPeer::IDLUGARDESTINATARIO, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(TraspasoPeer::IDINVENTARIOLUGAR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(TraspasoPeer::IDLUGARREMITENTE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(TraspasoPeer::IDLUGARDESTINATARIO, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the idinventariolugar column
     *
     * Example usage:
     * <code>
     * $query->filterByIdinventariolugar(1234); // WHERE idinventariolugar = 1234
     * $query->filterByIdinventariolugar(array(12, 34)); // WHERE idinventariolugar IN (12, 34)
     * $query->filterByIdinventariolugar(array('min' => 12)); // WHERE idinventariolugar >= 12
     * $query->filterByIdinventariolugar(array('max' => 12)); // WHERE idinventariolugar <= 12
     * </code>
     *
     * @param     mixed $idinventariolugar The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function filterByIdinventariolugar($idinventariolugar = null, $comparison = null)
    {
        if (is_array($idinventariolugar)) {
            $useMinMax = false;
            if (isset($idinventariolugar['min'])) {
                $this->addUsingAlias(TraspasoPeer::IDINVENTARIOLUGAR, $idinventariolugar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idinventariolugar['max'])) {
                $this->addUsingAlias(TraspasoPeer::IDINVENTARIOLUGAR, $idinventariolugar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TraspasoPeer::IDINVENTARIOLUGAR, $idinventariolugar, $comparison);
    }

    /**
     * Filter the query on the idlugarremitente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdlugarremitente(1234); // WHERE idlugarremitente = 1234
     * $query->filterByIdlugarremitente(array(12, 34)); // WHERE idlugarremitente IN (12, 34)
     * $query->filterByIdlugarremitente(array('min' => 12)); // WHERE idlugarremitente >= 12
     * $query->filterByIdlugarremitente(array('max' => 12)); // WHERE idlugarremitente <= 12
     * </code>
     *
     * @see       filterByLugarRelatedByIdlugarremitente()
     *
     * @param     mixed $idlugarremitente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function filterByIdlugarremitente($idlugarremitente = null, $comparison = null)
    {
        if (is_array($idlugarremitente)) {
            $useMinMax = false;
            if (isset($idlugarremitente['min'])) {
                $this->addUsingAlias(TraspasoPeer::IDLUGARREMITENTE, $idlugarremitente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idlugarremitente['max'])) {
                $this->addUsingAlias(TraspasoPeer::IDLUGARREMITENTE, $idlugarremitente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TraspasoPeer::IDLUGARREMITENTE, $idlugarremitente, $comparison);
    }

    /**
     * Filter the query on the idlugardestinatario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdlugardestinatario(1234); // WHERE idlugardestinatario = 1234
     * $query->filterByIdlugardestinatario(array(12, 34)); // WHERE idlugardestinatario IN (12, 34)
     * $query->filterByIdlugardestinatario(array('min' => 12)); // WHERE idlugardestinatario >= 12
     * $query->filterByIdlugardestinatario(array('max' => 12)); // WHERE idlugardestinatario <= 12
     * </code>
     *
     * @see       filterByLugarRelatedByIdlugardestinatario()
     *
     * @param     mixed $idlugardestinatario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function filterByIdlugardestinatario($idlugardestinatario = null, $comparison = null)
    {
        if (is_array($idlugardestinatario)) {
            $useMinMax = false;
            if (isset($idlugardestinatario['min'])) {
                $this->addUsingAlias(TraspasoPeer::IDLUGARDESTINATARIO, $idlugardestinatario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idlugardestinatario['max'])) {
                $this->addUsingAlias(TraspasoPeer::IDLUGARDESTINATARIO, $idlugardestinatario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TraspasoPeer::IDLUGARDESTINATARIO, $idlugardestinatario, $comparison);
    }

    /**
     * Filter the query on the traspaso_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByTraspasoFecha('2011-03-14'); // WHERE traspaso_fecha = '2011-03-14'
     * $query->filterByTraspasoFecha('now'); // WHERE traspaso_fecha = '2011-03-14'
     * $query->filterByTraspasoFecha(array('max' => 'yesterday')); // WHERE traspaso_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $traspasoFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function filterByTraspasoFecha($traspasoFecha = null, $comparison = null)
    {
        if (is_array($traspasoFecha)) {
            $useMinMax = false;
            if (isset($traspasoFecha['min'])) {
                $this->addUsingAlias(TraspasoPeer::TRASPASO_FECHA, $traspasoFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($traspasoFecha['max'])) {
                $this->addUsingAlias(TraspasoPeer::TRASPASO_FECHA, $traspasoFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TraspasoPeer::TRASPASO_FECHA, $traspasoFecha, $comparison);
    }

    /**
     * Filter the query on the traspaso_status column
     *
     * Example usage:
     * <code>
     * $query->filterByTraspasoStatus('fooValue');   // WHERE traspaso_status = 'fooValue'
     * $query->filterByTraspasoStatus('%fooValue%'); // WHERE traspaso_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $traspasoStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function filterByTraspasoStatus($traspasoStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($traspasoStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $traspasoStatus)) {
                $traspasoStatus = str_replace('*', '%', $traspasoStatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TraspasoPeer::TRASPASO_STATUS, $traspasoStatus, $comparison);
    }

    /**
     * Filter the query by a related Lugar object
     *
     * @param   Lugar|PropelObjectCollection $lugar The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TraspasoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLugarRelatedByIdlugardestinatario($lugar, $comparison = null)
    {
        if ($lugar instanceof Lugar) {
            return $this
                ->addUsingAlias(TraspasoPeer::IDLUGARDESTINATARIO, $lugar->getIdlugar(), $comparison);
        } elseif ($lugar instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TraspasoPeer::IDLUGARDESTINATARIO, $lugar->toKeyValue('PrimaryKey', 'Idlugar'), $comparison);
        } else {
            throw new PropelException('filterByLugarRelatedByIdlugardestinatario() only accepts arguments of type Lugar or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LugarRelatedByIdlugardestinatario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function joinLugarRelatedByIdlugardestinatario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LugarRelatedByIdlugardestinatario');

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
            $this->addJoinObject($join, 'LugarRelatedByIdlugardestinatario');
        }

        return $this;
    }

    /**
     * Use the LugarRelatedByIdlugardestinatario relation Lugar object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LugarQuery A secondary query class using the current class as primary query
     */
    public function useLugarRelatedByIdlugardestinatarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLugarRelatedByIdlugardestinatario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LugarRelatedByIdlugardestinatario', 'LugarQuery');
    }

    /**
     * Filter the query by a related Lugar object
     *
     * @param   Lugar|PropelObjectCollection $lugar The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TraspasoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLugarRelatedByIdlugarremitente($lugar, $comparison = null)
    {
        if ($lugar instanceof Lugar) {
            return $this
                ->addUsingAlias(TraspasoPeer::IDLUGARREMITENTE, $lugar->getIdlugar(), $comparison);
        } elseif ($lugar instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TraspasoPeer::IDLUGARREMITENTE, $lugar->toKeyValue('PrimaryKey', 'Idlugar'), $comparison);
        } else {
            throw new PropelException('filterByLugarRelatedByIdlugarremitente() only accepts arguments of type Lugar or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the LugarRelatedByIdlugarremitente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function joinLugarRelatedByIdlugarremitente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('LugarRelatedByIdlugarremitente');

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
            $this->addJoinObject($join, 'LugarRelatedByIdlugarremitente');
        }

        return $this;
    }

    /**
     * Use the LugarRelatedByIdlugarremitente relation Lugar object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LugarQuery A secondary query class using the current class as primary query
     */
    public function useLugarRelatedByIdlugarremitenteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLugarRelatedByIdlugarremitente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'LugarRelatedByIdlugarremitente', 'LugarQuery');
    }

    /**
     * Filter the query by a related Traspasodetalles object
     *
     * @param   Traspasodetalles|PropelObjectCollection $traspasodetalles  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TraspasoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTraspasodetalles($traspasodetalles, $comparison = null)
    {
        if ($traspasodetalles instanceof Traspasodetalles) {
            return $this
                ->addUsingAlias(TraspasoPeer::IDINVENTARIOLUGAR, $traspasodetalles->getIdtraspaso(), $comparison);
        } elseif ($traspasodetalles instanceof PropelObjectCollection) {
            return $this
                ->useTraspasodetallesQuery()
                ->filterByPrimaryKeys($traspasodetalles->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTraspasodetalles() only accepts arguments of type Traspasodetalles or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Traspasodetalles relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function joinTraspasodetalles($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Traspasodetalles');

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
            $this->addJoinObject($join, 'Traspasodetalles');
        }

        return $this;
    }

    /**
     * Use the Traspasodetalles relation Traspasodetalles object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TraspasodetallesQuery A secondary query class using the current class as primary query
     */
    public function useTraspasodetallesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTraspasodetalles($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Traspasodetalles', 'TraspasodetallesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Traspaso $traspaso Object to remove from the list of results
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function prune($traspaso = null)
    {
        if ($traspaso) {
            $this->addCond('pruneCond0', $this->getAliasedColName(TraspasoPeer::IDINVENTARIOLUGAR), $traspaso->getIdinventariolugar(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(TraspasoPeer::IDLUGARREMITENTE), $traspaso->getIdlugarremitente(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(TraspasoPeer::IDLUGARDESTINATARIO), $traspaso->getIdlugardestinatario(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
