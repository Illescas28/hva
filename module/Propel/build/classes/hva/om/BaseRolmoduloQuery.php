<?php


/**
 * Base class that represents a query for the 'rolmodulo' table.
 *
 *
 *
 * @method RolmoduloQuery orderByIdrolmodulo($order = Criteria::ASC) Order by the idrolmodulo column
 * @method RolmoduloQuery orderByIdrol($order = Criteria::ASC) Order by the idrol column
 * @method RolmoduloQuery orderByIdmodulo($order = Criteria::ASC) Order by the idmodulo column
 *
 * @method RolmoduloQuery groupByIdrolmodulo() Group by the idrolmodulo column
 * @method RolmoduloQuery groupByIdrol() Group by the idrol column
 * @method RolmoduloQuery groupByIdmodulo() Group by the idmodulo column
 *
 * @method RolmoduloQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RolmoduloQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RolmoduloQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RolmoduloQuery leftJoinModulo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Modulo relation
 * @method RolmoduloQuery rightJoinModulo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Modulo relation
 * @method RolmoduloQuery innerJoinModulo($relationAlias = null) Adds a INNER JOIN clause to the query using the Modulo relation
 *
 * @method RolmoduloQuery leftJoinRol($relationAlias = null) Adds a LEFT JOIN clause to the query using the Rol relation
 * @method RolmoduloQuery rightJoinRol($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Rol relation
 * @method RolmoduloQuery innerJoinRol($relationAlias = null) Adds a INNER JOIN clause to the query using the Rol relation
 *
 * @method Rolmodulo findOne(PropelPDO $con = null) Return the first Rolmodulo matching the query
 * @method Rolmodulo findOneOrCreate(PropelPDO $con = null) Return the first Rolmodulo matching the query, or a new Rolmodulo object populated from the query conditions when no match is found
 *
 * @method Rolmodulo findOneByIdrol(int $idrol) Return the first Rolmodulo filtered by the idrol column
 * @method Rolmodulo findOneByIdmodulo(int $idmodulo) Return the first Rolmodulo filtered by the idmodulo column
 *
 * @method array findByIdrolmodulo(int $idrolmodulo) Return Rolmodulo objects filtered by the idrolmodulo column
 * @method array findByIdrol(int $idrol) Return Rolmodulo objects filtered by the idrol column
 * @method array findByIdmodulo(int $idmodulo) Return Rolmodulo objects filtered by the idmodulo column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseRolmoduloQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRolmoduloQuery object.
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
            $modelName = 'Rolmodulo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RolmoduloQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RolmoduloQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RolmoduloQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RolmoduloQuery) {
            return $criteria;
        }
        $query = new RolmoduloQuery(null, null, $modelAlias);

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
     * @return   Rolmodulo|Rolmodulo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RolmoduloPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RolmoduloPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Rolmodulo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdrolmodulo($key, $con = null)
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
     * @return                 Rolmodulo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idrolmodulo`, `idrol`, `idmodulo` FROM `rolmodulo` WHERE `idrolmodulo` = :p0';
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
            $obj = new Rolmodulo();
            $obj->hydrate($row);
            RolmoduloPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Rolmodulo|Rolmodulo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Rolmodulo[]|mixed the list of results, formatted by the current formatter
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
     * @return RolmoduloQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RolmoduloPeer::IDROLMODULO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RolmoduloQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RolmoduloPeer::IDROLMODULO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idrolmodulo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrolmodulo(1234); // WHERE idrolmodulo = 1234
     * $query->filterByIdrolmodulo(array(12, 34)); // WHERE idrolmodulo IN (12, 34)
     * $query->filterByIdrolmodulo(array('min' => 12)); // WHERE idrolmodulo >= 12
     * $query->filterByIdrolmodulo(array('max' => 12)); // WHERE idrolmodulo <= 12
     * </code>
     *
     * @param     mixed $idrolmodulo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RolmoduloQuery The current query, for fluid interface
     */
    public function filterByIdrolmodulo($idrolmodulo = null, $comparison = null)
    {
        if (is_array($idrolmodulo)) {
            $useMinMax = false;
            if (isset($idrolmodulo['min'])) {
                $this->addUsingAlias(RolmoduloPeer::IDROLMODULO, $idrolmodulo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrolmodulo['max'])) {
                $this->addUsingAlias(RolmoduloPeer::IDROLMODULO, $idrolmodulo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RolmoduloPeer::IDROLMODULO, $idrolmodulo, $comparison);
    }

    /**
     * Filter the query on the idrol column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrol(1234); // WHERE idrol = 1234
     * $query->filterByIdrol(array(12, 34)); // WHERE idrol IN (12, 34)
     * $query->filterByIdrol(array('min' => 12)); // WHERE idrol >= 12
     * $query->filterByIdrol(array('max' => 12)); // WHERE idrol <= 12
     * </code>
     *
     * @see       filterByRol()
     *
     * @param     mixed $idrol The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RolmoduloQuery The current query, for fluid interface
     */
    public function filterByIdrol($idrol = null, $comparison = null)
    {
        if (is_array($idrol)) {
            $useMinMax = false;
            if (isset($idrol['min'])) {
                $this->addUsingAlias(RolmoduloPeer::IDROL, $idrol['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrol['max'])) {
                $this->addUsingAlias(RolmoduloPeer::IDROL, $idrol['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RolmoduloPeer::IDROL, $idrol, $comparison);
    }

    /**
     * Filter the query on the idmodulo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmodulo(1234); // WHERE idmodulo = 1234
     * $query->filterByIdmodulo(array(12, 34)); // WHERE idmodulo IN (12, 34)
     * $query->filterByIdmodulo(array('min' => 12)); // WHERE idmodulo >= 12
     * $query->filterByIdmodulo(array('max' => 12)); // WHERE idmodulo <= 12
     * </code>
     *
     * @see       filterByModulo()
     *
     * @param     mixed $idmodulo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RolmoduloQuery The current query, for fluid interface
     */
    public function filterByIdmodulo($idmodulo = null, $comparison = null)
    {
        if (is_array($idmodulo)) {
            $useMinMax = false;
            if (isset($idmodulo['min'])) {
                $this->addUsingAlias(RolmoduloPeer::IDMODULO, $idmodulo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmodulo['max'])) {
                $this->addUsingAlias(RolmoduloPeer::IDMODULO, $idmodulo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RolmoduloPeer::IDMODULO, $idmodulo, $comparison);
    }

    /**
     * Filter the query by a related Modulo object
     *
     * @param   Modulo|PropelObjectCollection $modulo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RolmoduloQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByModulo($modulo, $comparison = null)
    {
        if ($modulo instanceof Modulo) {
            return $this
                ->addUsingAlias(RolmoduloPeer::IDMODULO, $modulo->getIdmodulo(), $comparison);
        } elseif ($modulo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RolmoduloPeer::IDMODULO, $modulo->toKeyValue('PrimaryKey', 'Idmodulo'), $comparison);
        } else {
            throw new PropelException('filterByModulo() only accepts arguments of type Modulo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Modulo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RolmoduloQuery The current query, for fluid interface
     */
    public function joinModulo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Modulo');

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
            $this->addJoinObject($join, 'Modulo');
        }

        return $this;
    }

    /**
     * Use the Modulo relation Modulo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ModuloQuery A secondary query class using the current class as primary query
     */
    public function useModuloQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinModulo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Modulo', 'ModuloQuery');
    }

    /**
     * Filter the query by a related Rol object
     *
     * @param   Rol|PropelObjectCollection $rol The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RolmoduloQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRol($rol, $comparison = null)
    {
        if ($rol instanceof Rol) {
            return $this
                ->addUsingAlias(RolmoduloPeer::IDROL, $rol->getIdrol(), $comparison);
        } elseif ($rol instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RolmoduloPeer::IDROL, $rol->toKeyValue('PrimaryKey', 'Idrol'), $comparison);
        } else {
            throw new PropelException('filterByRol() only accepts arguments of type Rol or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Rol relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RolmoduloQuery The current query, for fluid interface
     */
    public function joinRol($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Rol');

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
            $this->addJoinObject($join, 'Rol');
        }

        return $this;
    }

    /**
     * Use the Rol relation Rol object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RolQuery A secondary query class using the current class as primary query
     */
    public function useRolQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRol($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Rol', 'RolQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Rolmodulo $rolmodulo Object to remove from the list of results
     *
     * @return RolmoduloQuery The current query, for fluid interface
     */
    public function prune($rolmodulo = null)
    {
        if ($rolmodulo) {
            $this->addUsingAlias(RolmoduloPeer::IDROLMODULO, $rolmodulo->getIdrolmodulo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
