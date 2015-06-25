<?php


/**
 * Base class that represents a query for the 'articulovariantereorden' table.
 *
 *
 *
 * @method ArticulovariantereordenQuery orderByIdarticulovariantereorden($order = Criteria::ASC) Order by the idarticulovariantereorden column
 * @method ArticulovariantereordenQuery orderByIdlugar($order = Criteria::ASC) Order by the idlugar column
 * @method ArticulovariantereordenQuery orderByIdarticulovariante($order = Criteria::ASC) Order by the idarticulovariante column
 * @method ArticulovariantereordenQuery orderByMinimo($order = Criteria::ASC) Order by the minimo column
 * @method ArticulovariantereordenQuery orderByMaximo($order = Criteria::ASC) Order by the maximo column
 * @method ArticulovariantereordenQuery orderByReorden($order = Criteria::ASC) Order by the reorden column
 *
 * @method ArticulovariantereordenQuery groupByIdarticulovariantereorden() Group by the idarticulovariantereorden column
 * @method ArticulovariantereordenQuery groupByIdlugar() Group by the idlugar column
 * @method ArticulovariantereordenQuery groupByIdarticulovariante() Group by the idarticulovariante column
 * @method ArticulovariantereordenQuery groupByMinimo() Group by the minimo column
 * @method ArticulovariantereordenQuery groupByMaximo() Group by the maximo column
 * @method ArticulovariantereordenQuery groupByReorden() Group by the reorden column
 *
 * @method ArticulovariantereordenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ArticulovariantereordenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ArticulovariantereordenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ArticulovariantereordenQuery leftJoinArticulovariante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Articulovariante relation
 * @method ArticulovariantereordenQuery rightJoinArticulovariante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Articulovariante relation
 * @method ArticulovariantereordenQuery innerJoinArticulovariante($relationAlias = null) Adds a INNER JOIN clause to the query using the Articulovariante relation
 *
 * @method ArticulovariantereordenQuery leftJoinLugar($relationAlias = null) Adds a LEFT JOIN clause to the query using the Lugar relation
 * @method ArticulovariantereordenQuery rightJoinLugar($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Lugar relation
 * @method ArticulovariantereordenQuery innerJoinLugar($relationAlias = null) Adds a INNER JOIN clause to the query using the Lugar relation
 *
 * @method Articulovariantereorden findOne(PropelPDO $con = null) Return the first Articulovariantereorden matching the query
 * @method Articulovariantereorden findOneOrCreate(PropelPDO $con = null) Return the first Articulovariantereorden matching the query, or a new Articulovariantereorden object populated from the query conditions when no match is found
 *
 * @method Articulovariantereorden findOneByIdlugar(int $idlugar) Return the first Articulovariantereorden filtered by the idlugar column
 * @method Articulovariantereorden findOneByIdarticulovariante(int $idarticulovariante) Return the first Articulovariantereorden filtered by the idarticulovariante column
 * @method Articulovariantereorden findOneByMinimo(string $minimo) Return the first Articulovariantereorden filtered by the minimo column
 * @method Articulovariantereorden findOneByMaximo(string $maximo) Return the first Articulovariantereorden filtered by the maximo column
 * @method Articulovariantereorden findOneByReorden(string $reorden) Return the first Articulovariantereorden filtered by the reorden column
 *
 * @method array findByIdarticulovariantereorden(int $idarticulovariantereorden) Return Articulovariantereorden objects filtered by the idarticulovariantereorden column
 * @method array findByIdlugar(int $idlugar) Return Articulovariantereorden objects filtered by the idlugar column
 * @method array findByIdarticulovariante(int $idarticulovariante) Return Articulovariantereorden objects filtered by the idarticulovariante column
 * @method array findByMinimo(string $minimo) Return Articulovariantereorden objects filtered by the minimo column
 * @method array findByMaximo(string $maximo) Return Articulovariantereorden objects filtered by the maximo column
 * @method array findByReorden(string $reorden) Return Articulovariantereorden objects filtered by the reorden column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseArticulovariantereordenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseArticulovariantereordenQuery object.
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
            $modelName = 'Articulovariantereorden';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ArticulovariantereordenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ArticulovariantereordenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ArticulovariantereordenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ArticulovariantereordenQuery) {
            return $criteria;
        }
        $query = new ArticulovariantereordenQuery(null, null, $modelAlias);

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
     * @return   Articulovariantereorden|Articulovariantereorden[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ArticulovariantereordenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantereordenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Articulovariantereorden A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdarticulovariantereorden($key, $con = null)
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
     * @return                 Articulovariantereorden A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idarticulovariantereorden`, `idlugar`, `idarticulovariante`, `minimo`, `maximo`, `reorden` FROM `articulovariantereorden` WHERE `idarticulovariantereorden` = :p0';
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
            $obj = new Articulovariantereorden();
            $obj->hydrate($row);
            ArticulovariantereordenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Articulovariantereorden|Articulovariantereorden[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Articulovariantereorden[]|mixed the list of results, formatted by the current formatter
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
     * @return ArticulovariantereordenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ArticulovariantereordenPeer::IDARTICULOVARIANTEREORDEN, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ArticulovariantereordenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ArticulovariantereordenPeer::IDARTICULOVARIANTEREORDEN, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idarticulovariantereorden column
     *
     * Example usage:
     * <code>
     * $query->filterByIdarticulovariantereorden(1234); // WHERE idarticulovariantereorden = 1234
     * $query->filterByIdarticulovariantereorden(array(12, 34)); // WHERE idarticulovariantereorden IN (12, 34)
     * $query->filterByIdarticulovariantereorden(array('min' => 12)); // WHERE idarticulovariantereorden >= 12
     * $query->filterByIdarticulovariantereorden(array('max' => 12)); // WHERE idarticulovariantereorden <= 12
     * </code>
     *
     * @param     mixed $idarticulovariantereorden The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticulovariantereordenQuery The current query, for fluid interface
     */
    public function filterByIdarticulovariantereorden($idarticulovariantereorden = null, $comparison = null)
    {
        if (is_array($idarticulovariantereorden)) {
            $useMinMax = false;
            if (isset($idarticulovariantereorden['min'])) {
                $this->addUsingAlias(ArticulovariantereordenPeer::IDARTICULOVARIANTEREORDEN, $idarticulovariantereorden['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idarticulovariantereorden['max'])) {
                $this->addUsingAlias(ArticulovariantereordenPeer::IDARTICULOVARIANTEREORDEN, $idarticulovariantereorden['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticulovariantereordenPeer::IDARTICULOVARIANTEREORDEN, $idarticulovariantereorden, $comparison);
    }

    /**
     * Filter the query on the idlugar column
     *
     * Example usage:
     * <code>
     * $query->filterByIdlugar(1234); // WHERE idlugar = 1234
     * $query->filterByIdlugar(array(12, 34)); // WHERE idlugar IN (12, 34)
     * $query->filterByIdlugar(array('min' => 12)); // WHERE idlugar >= 12
     * $query->filterByIdlugar(array('max' => 12)); // WHERE idlugar <= 12
     * </code>
     *
     * @see       filterByLugar()
     *
     * @param     mixed $idlugar The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticulovariantereordenQuery The current query, for fluid interface
     */
    public function filterByIdlugar($idlugar = null, $comparison = null)
    {
        if (is_array($idlugar)) {
            $useMinMax = false;
            if (isset($idlugar['min'])) {
                $this->addUsingAlias(ArticulovariantereordenPeer::IDLUGAR, $idlugar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idlugar['max'])) {
                $this->addUsingAlias(ArticulovariantereordenPeer::IDLUGAR, $idlugar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticulovariantereordenPeer::IDLUGAR, $idlugar, $comparison);
    }

    /**
     * Filter the query on the idarticulovariante column
     *
     * Example usage:
     * <code>
     * $query->filterByIdarticulovariante(1234); // WHERE idarticulovariante = 1234
     * $query->filterByIdarticulovariante(array(12, 34)); // WHERE idarticulovariante IN (12, 34)
     * $query->filterByIdarticulovariante(array('min' => 12)); // WHERE idarticulovariante >= 12
     * $query->filterByIdarticulovariante(array('max' => 12)); // WHERE idarticulovariante <= 12
     * </code>
     *
     * @see       filterByArticulovariante()
     *
     * @param     mixed $idarticulovariante The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticulovariantereordenQuery The current query, for fluid interface
     */
    public function filterByIdarticulovariante($idarticulovariante = null, $comparison = null)
    {
        if (is_array($idarticulovariante)) {
            $useMinMax = false;
            if (isset($idarticulovariante['min'])) {
                $this->addUsingAlias(ArticulovariantereordenPeer::IDARTICULOVARIANTE, $idarticulovariante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idarticulovariante['max'])) {
                $this->addUsingAlias(ArticulovariantereordenPeer::IDARTICULOVARIANTE, $idarticulovariante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticulovariantereordenPeer::IDARTICULOVARIANTE, $idarticulovariante, $comparison);
    }

    /**
     * Filter the query on the minimo column
     *
     * Example usage:
     * <code>
     * $query->filterByMinimo(1234); // WHERE minimo = 1234
     * $query->filterByMinimo(array(12, 34)); // WHERE minimo IN (12, 34)
     * $query->filterByMinimo(array('min' => 12)); // WHERE minimo >= 12
     * $query->filterByMinimo(array('max' => 12)); // WHERE minimo <= 12
     * </code>
     *
     * @param     mixed $minimo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticulovariantereordenQuery The current query, for fluid interface
     */
    public function filterByMinimo($minimo = null, $comparison = null)
    {
        if (is_array($minimo)) {
            $useMinMax = false;
            if (isset($minimo['min'])) {
                $this->addUsingAlias(ArticulovariantereordenPeer::MINIMO, $minimo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minimo['max'])) {
                $this->addUsingAlias(ArticulovariantereordenPeer::MINIMO, $minimo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticulovariantereordenPeer::MINIMO, $minimo, $comparison);
    }

    /**
     * Filter the query on the maximo column
     *
     * Example usage:
     * <code>
     * $query->filterByMaximo(1234); // WHERE maximo = 1234
     * $query->filterByMaximo(array(12, 34)); // WHERE maximo IN (12, 34)
     * $query->filterByMaximo(array('min' => 12)); // WHERE maximo >= 12
     * $query->filterByMaximo(array('max' => 12)); // WHERE maximo <= 12
     * </code>
     *
     * @param     mixed $maximo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticulovariantereordenQuery The current query, for fluid interface
     */
    public function filterByMaximo($maximo = null, $comparison = null)
    {
        if (is_array($maximo)) {
            $useMinMax = false;
            if (isset($maximo['min'])) {
                $this->addUsingAlias(ArticulovariantereordenPeer::MAXIMO, $maximo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maximo['max'])) {
                $this->addUsingAlias(ArticulovariantereordenPeer::MAXIMO, $maximo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticulovariantereordenPeer::MAXIMO, $maximo, $comparison);
    }

    /**
     * Filter the query on the reorden column
     *
     * Example usage:
     * <code>
     * $query->filterByReorden(1234); // WHERE reorden = 1234
     * $query->filterByReorden(array(12, 34)); // WHERE reorden IN (12, 34)
     * $query->filterByReorden(array('min' => 12)); // WHERE reorden >= 12
     * $query->filterByReorden(array('max' => 12)); // WHERE reorden <= 12
     * </code>
     *
     * @param     mixed $reorden The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticulovariantereordenQuery The current query, for fluid interface
     */
    public function filterByReorden($reorden = null, $comparison = null)
    {
        if (is_array($reorden)) {
            $useMinMax = false;
            if (isset($reorden['min'])) {
                $this->addUsingAlias(ArticulovariantereordenPeer::REORDEN, $reorden['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reorden['max'])) {
                $this->addUsingAlias(ArticulovariantereordenPeer::REORDEN, $reorden['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticulovariantereordenPeer::REORDEN, $reorden, $comparison);
    }

    /**
     * Filter the query by a related Articulovariante object
     *
     * @param   Articulovariante|PropelObjectCollection $articulovariante The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticulovariantereordenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByArticulovariante($articulovariante, $comparison = null)
    {
        if ($articulovariante instanceof Articulovariante) {
            return $this
                ->addUsingAlias(ArticulovariantereordenPeer::IDARTICULOVARIANTE, $articulovariante->getIdarticulovariante(), $comparison);
        } elseif ($articulovariante instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArticulovariantereordenPeer::IDARTICULOVARIANTE, $articulovariante->toKeyValue('PrimaryKey', 'Idarticulovariante'), $comparison);
        } else {
            throw new PropelException('filterByArticulovariante() only accepts arguments of type Articulovariante or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Articulovariante relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ArticulovariantereordenQuery The current query, for fluid interface
     */
    public function joinArticulovariante($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Articulovariante');

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
            $this->addJoinObject($join, 'Articulovariante');
        }

        return $this;
    }

    /**
     * Use the Articulovariante relation Articulovariante object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ArticulovarianteQuery A secondary query class using the current class as primary query
     */
    public function useArticulovarianteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinArticulovariante($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Articulovariante', 'ArticulovarianteQuery');
    }

    /**
     * Filter the query by a related Lugar object
     *
     * @param   Lugar|PropelObjectCollection $lugar The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticulovariantereordenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLugar($lugar, $comparison = null)
    {
        if ($lugar instanceof Lugar) {
            return $this
                ->addUsingAlias(ArticulovariantereordenPeer::IDLUGAR, $lugar->getIdlugar(), $comparison);
        } elseif ($lugar instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArticulovariantereordenPeer::IDLUGAR, $lugar->toKeyValue('PrimaryKey', 'Idlugar'), $comparison);
        } else {
            throw new PropelException('filterByLugar() only accepts arguments of type Lugar or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Lugar relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ArticulovariantereordenQuery The current query, for fluid interface
     */
    public function joinLugar($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Lugar');

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
            $this->addJoinObject($join, 'Lugar');
        }

        return $this;
    }

    /**
     * Use the Lugar relation Lugar object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LugarQuery A secondary query class using the current class as primary query
     */
    public function useLugarQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLugar($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Lugar', 'LugarQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Articulovariantereorden $articulovariantereorden Object to remove from the list of results
     *
     * @return ArticulovariantereordenQuery The current query, for fluid interface
     */
    public function prune($articulovariantereorden = null)
    {
        if ($articulovariantereorden) {
            $this->addUsingAlias(ArticulovariantereordenPeer::IDARTICULOVARIANTEREORDEN, $articulovariantereorden->getIdarticulovariantereorden(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
