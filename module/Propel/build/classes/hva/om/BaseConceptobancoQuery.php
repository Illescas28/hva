<?php


/**
 * Base class that represents a query for the 'conceptobanco' table.
 *
 *
 *
 * @method ConceptobancoQuery orderByIdbancotransaccion($order = Criteria::ASC) Order by the idbancotransaccion column
 * @method ConceptobancoQuery orderByBancotransaccionNombre($order = Criteria::ASC) Order by the bancotransaccion_nombre column
 * @method ConceptobancoQuery orderByBancotransaccionDescripcion($order = Criteria::ASC) Order by the bancotransaccion_descripcion column
 *
 * @method ConceptobancoQuery groupByIdbancotransaccion() Group by the idbancotransaccion column
 * @method ConceptobancoQuery groupByBancotransaccionNombre() Group by the bancotransaccion_nombre column
 * @method ConceptobancoQuery groupByBancotransaccionDescripcion() Group by the bancotransaccion_descripcion column
 *
 * @method ConceptobancoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ConceptobancoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ConceptobancoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ConceptobancoQuery leftJoinBanco($relationAlias = null) Adds a LEFT JOIN clause to the query using the Banco relation
 * @method ConceptobancoQuery rightJoinBanco($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Banco relation
 * @method ConceptobancoQuery innerJoinBanco($relationAlias = null) Adds a INNER JOIN clause to the query using the Banco relation
 *
 * @method Conceptobanco findOne(PropelPDO $con = null) Return the first Conceptobanco matching the query
 * @method Conceptobanco findOneOrCreate(PropelPDO $con = null) Return the first Conceptobanco matching the query, or a new Conceptobanco object populated from the query conditions when no match is found
 *
 * @method Conceptobanco findOneByBancotransaccionNombre(string $bancotransaccion_nombre) Return the first Conceptobanco filtered by the bancotransaccion_nombre column
 * @method Conceptobanco findOneByBancotransaccionDescripcion(string $bancotransaccion_descripcion) Return the first Conceptobanco filtered by the bancotransaccion_descripcion column
 *
 * @method array findByIdbancotransaccion(int $idbancotransaccion) Return Conceptobanco objects filtered by the idbancotransaccion column
 * @method array findByBancotransaccionNombre(string $bancotransaccion_nombre) Return Conceptobanco objects filtered by the bancotransaccion_nombre column
 * @method array findByBancotransaccionDescripcion(string $bancotransaccion_descripcion) Return Conceptobanco objects filtered by the bancotransaccion_descripcion column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseConceptobancoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseConceptobancoQuery object.
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
            $modelName = 'Conceptobanco';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConceptobancoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ConceptobancoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ConceptobancoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConceptobancoQuery) {
            return $criteria;
        }
        $query = new ConceptobancoQuery(null, null, $modelAlias);

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
     * @return   Conceptobanco|Conceptobanco[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ConceptobancoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ConceptobancoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Conceptobanco A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdbancotransaccion($key, $con = null)
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
     * @return                 Conceptobanco A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idbancotransaccion`, `bancotransaccion_nombre`, `bancotransaccion_descripcion` FROM `conceptobanco` WHERE `idbancotransaccion` = :p0';
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
            $obj = new Conceptobanco();
            $obj->hydrate($row);
            ConceptobancoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Conceptobanco|Conceptobanco[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Conceptobanco[]|mixed the list of results, formatted by the current formatter
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
     * @return ConceptobancoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConceptobancoPeer::IDBANCOTRANSACCION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ConceptobancoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConceptobancoPeer::IDBANCOTRANSACCION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idbancotransaccion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdbancotransaccion(1234); // WHERE idbancotransaccion = 1234
     * $query->filterByIdbancotransaccion(array(12, 34)); // WHERE idbancotransaccion IN (12, 34)
     * $query->filterByIdbancotransaccion(array('min' => 12)); // WHERE idbancotransaccion >= 12
     * $query->filterByIdbancotransaccion(array('max' => 12)); // WHERE idbancotransaccion <= 12
     * </code>
     *
     * @param     mixed $idbancotransaccion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptobancoQuery The current query, for fluid interface
     */
    public function filterByIdbancotransaccion($idbancotransaccion = null, $comparison = null)
    {
        if (is_array($idbancotransaccion)) {
            $useMinMax = false;
            if (isset($idbancotransaccion['min'])) {
                $this->addUsingAlias(ConceptobancoPeer::IDBANCOTRANSACCION, $idbancotransaccion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idbancotransaccion['max'])) {
                $this->addUsingAlias(ConceptobancoPeer::IDBANCOTRANSACCION, $idbancotransaccion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConceptobancoPeer::IDBANCOTRANSACCION, $idbancotransaccion, $comparison);
    }

    /**
     * Filter the query on the bancotransaccion_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByBancotransaccionNombre('fooValue');   // WHERE bancotransaccion_nombre = 'fooValue'
     * $query->filterByBancotransaccionNombre('%fooValue%'); // WHERE bancotransaccion_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bancotransaccionNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptobancoQuery The current query, for fluid interface
     */
    public function filterByBancotransaccionNombre($bancotransaccionNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bancotransaccionNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bancotransaccionNombre)) {
                $bancotransaccionNombre = str_replace('*', '%', $bancotransaccionNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConceptobancoPeer::BANCOTRANSACCION_NOMBRE, $bancotransaccionNombre, $comparison);
    }

    /**
     * Filter the query on the bancotransaccion_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByBancotransaccionDescripcion('fooValue');   // WHERE bancotransaccion_descripcion = 'fooValue'
     * $query->filterByBancotransaccionDescripcion('%fooValue%'); // WHERE bancotransaccion_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bancotransaccionDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptobancoQuery The current query, for fluid interface
     */
    public function filterByBancotransaccionDescripcion($bancotransaccionDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bancotransaccionDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bancotransaccionDescripcion)) {
                $bancotransaccionDescripcion = str_replace('*', '%', $bancotransaccionDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConceptobancoPeer::BANCOTRANSACCION_DESCRIPCION, $bancotransaccionDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Banco object
     *
     * @param   Banco|PropelObjectCollection $banco  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConceptobancoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByBanco($banco, $comparison = null)
    {
        if ($banco instanceof Banco) {
            return $this
                ->addUsingAlias(ConceptobancoPeer::IDBANCOTRANSACCION, $banco->getIdconceptobanco(), $comparison);
        } elseif ($banco instanceof PropelObjectCollection) {
            return $this
                ->useBancoQuery()
                ->filterByPrimaryKeys($banco->getPrimaryKeys())
                ->endUse();
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
     * @return ConceptobancoQuery The current query, for fluid interface
     */
    public function joinBanco($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useBancoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBanco($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Banco', 'BancoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Conceptobanco $conceptobanco Object to remove from the list of results
     *
     * @return ConceptobancoQuery The current query, for fluid interface
     */
    public function prune($conceptobanco = null)
    {
        if ($conceptobanco) {
            $this->addUsingAlias(ConceptobancoPeer::IDBANCOTRANSACCION, $conceptobanco->getIdbancotransaccion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
