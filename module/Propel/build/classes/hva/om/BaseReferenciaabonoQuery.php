<?php


/**
 * Base class that represents a query for the 'referenciaabono' table.
 *
 *
 *
 * @method ReferenciaabonoQuery orderByIdreferenciaabono($order = Criteria::ASC) Order by the idreferenciaabono column
 * @method ReferenciaabonoQuery orderByIdbanco($order = Criteria::ASC) Order by the idbanco column
 * @method ReferenciaabonoQuery orderByReferenciaabonoArchivo($order = Criteria::ASC) Order by the referenciaabono_archivo column
 *
 * @method ReferenciaabonoQuery groupByIdreferenciaabono() Group by the idreferenciaabono column
 * @method ReferenciaabonoQuery groupByIdbanco() Group by the idbanco column
 * @method ReferenciaabonoQuery groupByReferenciaabonoArchivo() Group by the referenciaabono_archivo column
 *
 * @method ReferenciaabonoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ReferenciaabonoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ReferenciaabonoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ReferenciaabonoQuery leftJoinBanco($relationAlias = null) Adds a LEFT JOIN clause to the query using the Banco relation
 * @method ReferenciaabonoQuery rightJoinBanco($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Banco relation
 * @method ReferenciaabonoQuery innerJoinBanco($relationAlias = null) Adds a INNER JOIN clause to the query using the Banco relation
 *
 * @method Referenciaabono findOne(PropelPDO $con = null) Return the first Referenciaabono matching the query
 * @method Referenciaabono findOneOrCreate(PropelPDO $con = null) Return the first Referenciaabono matching the query, or a new Referenciaabono object populated from the query conditions when no match is found
 *
 * @method Referenciaabono findOneByIdbanco(int $idbanco) Return the first Referenciaabono filtered by the idbanco column
 * @method Referenciaabono findOneByReferenciaabonoArchivo(string $referenciaabono_archivo) Return the first Referenciaabono filtered by the referenciaabono_archivo column
 *
 * @method array findByIdreferenciaabono(int $idreferenciaabono) Return Referenciaabono objects filtered by the idreferenciaabono column
 * @method array findByIdbanco(int $idbanco) Return Referenciaabono objects filtered by the idbanco column
 * @method array findByReferenciaabonoArchivo(string $referenciaabono_archivo) Return Referenciaabono objects filtered by the referenciaabono_archivo column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseReferenciaabonoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseReferenciaabonoQuery object.
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
            $modelName = 'Referenciaabono';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ReferenciaabonoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ReferenciaabonoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ReferenciaabonoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ReferenciaabonoQuery) {
            return $criteria;
        }
        $query = new ReferenciaabonoQuery(null, null, $modelAlias);

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
     * @return   Referenciaabono|Referenciaabono[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ReferenciaabonoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ReferenciaabonoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Referenciaabono A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdreferenciaabono($key, $con = null)
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
     * @return                 Referenciaabono A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idreferenciaabono`, `idbanco`, `referenciaabono_archivo` FROM `referenciaabono` WHERE `idreferenciaabono` = :p0';
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
            $obj = new Referenciaabono();
            $obj->hydrate($row);
            ReferenciaabonoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Referenciaabono|Referenciaabono[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Referenciaabono[]|mixed the list of results, formatted by the current formatter
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
     * @return ReferenciaabonoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ReferenciaabonoPeer::IDREFERENCIAABONO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ReferenciaabonoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ReferenciaabonoPeer::IDREFERENCIAABONO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idreferenciaabono column
     *
     * Example usage:
     * <code>
     * $query->filterByIdreferenciaabono(1234); // WHERE idreferenciaabono = 1234
     * $query->filterByIdreferenciaabono(array(12, 34)); // WHERE idreferenciaabono IN (12, 34)
     * $query->filterByIdreferenciaabono(array('min' => 12)); // WHERE idreferenciaabono >= 12
     * $query->filterByIdreferenciaabono(array('max' => 12)); // WHERE idreferenciaabono <= 12
     * </code>
     *
     * @param     mixed $idreferenciaabono The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReferenciaabonoQuery The current query, for fluid interface
     */
    public function filterByIdreferenciaabono($idreferenciaabono = null, $comparison = null)
    {
        if (is_array($idreferenciaabono)) {
            $useMinMax = false;
            if (isset($idreferenciaabono['min'])) {
                $this->addUsingAlias(ReferenciaabonoPeer::IDREFERENCIAABONO, $idreferenciaabono['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idreferenciaabono['max'])) {
                $this->addUsingAlias(ReferenciaabonoPeer::IDREFERENCIAABONO, $idreferenciaabono['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReferenciaabonoPeer::IDREFERENCIAABONO, $idreferenciaabono, $comparison);
    }

    /**
     * Filter the query on the idbanco column
     *
     * Example usage:
     * <code>
     * $query->filterByIdbanco(1234); // WHERE idbanco = 1234
     * $query->filterByIdbanco(array(12, 34)); // WHERE idbanco IN (12, 34)
     * $query->filterByIdbanco(array('min' => 12)); // WHERE idbanco >= 12
     * $query->filterByIdbanco(array('max' => 12)); // WHERE idbanco <= 12
     * </code>
     *
     * @see       filterByBanco()
     *
     * @param     mixed $idbanco The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReferenciaabonoQuery The current query, for fluid interface
     */
    public function filterByIdbanco($idbanco = null, $comparison = null)
    {
        if (is_array($idbanco)) {
            $useMinMax = false;
            if (isset($idbanco['min'])) {
                $this->addUsingAlias(ReferenciaabonoPeer::IDBANCO, $idbanco['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idbanco['max'])) {
                $this->addUsingAlias(ReferenciaabonoPeer::IDBANCO, $idbanco['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReferenciaabonoPeer::IDBANCO, $idbanco, $comparison);
    }

    /**
     * Filter the query on the referenciaabono_archivo column
     *
     * Example usage:
     * <code>
     * $query->filterByReferenciaabonoArchivo('fooValue');   // WHERE referenciaabono_archivo = 'fooValue'
     * $query->filterByReferenciaabonoArchivo('%fooValue%'); // WHERE referenciaabono_archivo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referenciaabonoArchivo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReferenciaabonoQuery The current query, for fluid interface
     */
    public function filterByReferenciaabonoArchivo($referenciaabonoArchivo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referenciaabonoArchivo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $referenciaabonoArchivo)) {
                $referenciaabonoArchivo = str_replace('*', '%', $referenciaabonoArchivo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReferenciaabonoPeer::REFERENCIAABONO_ARCHIVO, $referenciaabonoArchivo, $comparison);
    }

    /**
     * Filter the query by a related Banco object
     *
     * @param   Banco|PropelObjectCollection $banco The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ReferenciaabonoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByBanco($banco, $comparison = null)
    {
        if ($banco instanceof Banco) {
            return $this
                ->addUsingAlias(ReferenciaabonoPeer::IDBANCO, $banco->getIdbanco(), $comparison);
        } elseif ($banco instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ReferenciaabonoPeer::IDBANCO, $banco->toKeyValue('PrimaryKey', 'Idbanco'), $comparison);
        } else {
            throw new PropelException('filterByBanco() only accepts arguments of type Banco or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Banco relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ReferenciaabonoQuery The current query, for fluid interface
     */
    public function joinBanco($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Banco');

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
            $this->addJoinObject($join, 'Banco');
        }

        return $this;
    }

    /**
     * Use the Banco relation Banco object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   BancoQuery A secondary query class using the current class as primary query
     */
    public function useBancoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinBanco($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Banco', 'BancoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Referenciaabono $referenciaabono Object to remove from the list of results
     *
     * @return ReferenciaabonoQuery The current query, for fluid interface
     */
    public function prune($referenciaabono = null)
    {
        if ($referenciaabono) {
            $this->addUsingAlias(ReferenciaabonoPeer::IDREFERENCIAABONO, $referenciaabono->getIdreferenciaabono(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
