<?php


/**
 * Base class that represents a query for the 'conceptocajachica' table.
 *
 *
 *
 * @method ConceptocajachicaQuery orderByIdconceptocajachica($order = Criteria::ASC) Order by the idconceptocajachica column
 * @method ConceptocajachicaQuery orderByConceptocajachicaNombre($order = Criteria::ASC) Order by the conceptocajachica_nombre column
 * @method ConceptocajachicaQuery orderByConceptocajachicaDescripcion($order = Criteria::ASC) Order by the conceptocajachica_descripcion column
 *
 * @method ConceptocajachicaQuery groupByIdconceptocajachica() Group by the idconceptocajachica column
 * @method ConceptocajachicaQuery groupByConceptocajachicaNombre() Group by the conceptocajachica_nombre column
 * @method ConceptocajachicaQuery groupByConceptocajachicaDescripcion() Group by the conceptocajachica_descripcion column
 *
 * @method ConceptocajachicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ConceptocajachicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ConceptocajachicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ConceptocajachicaQuery leftJoinCajachica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cajachica relation
 * @method ConceptocajachicaQuery rightJoinCajachica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cajachica relation
 * @method ConceptocajachicaQuery innerJoinCajachica($relationAlias = null) Adds a INNER JOIN clause to the query using the Cajachica relation
 *
 * @method Conceptocajachica findOne(PropelPDO $con = null) Return the first Conceptocajachica matching the query
 * @method Conceptocajachica findOneOrCreate(PropelPDO $con = null) Return the first Conceptocajachica matching the query, or a new Conceptocajachica object populated from the query conditions when no match is found
 *
 * @method Conceptocajachica findOneByConceptocajachicaNombre(string $conceptocajachica_nombre) Return the first Conceptocajachica filtered by the conceptocajachica_nombre column
 * @method Conceptocajachica findOneByConceptocajachicaDescripcion(string $conceptocajachica_descripcion) Return the first Conceptocajachica filtered by the conceptocajachica_descripcion column
 *
 * @method array findByIdconceptocajachica(int $idconceptocajachica) Return Conceptocajachica objects filtered by the idconceptocajachica column
 * @method array findByConceptocajachicaNombre(string $conceptocajachica_nombre) Return Conceptocajachica objects filtered by the conceptocajachica_nombre column
 * @method array findByConceptocajachicaDescripcion(string $conceptocajachica_descripcion) Return Conceptocajachica objects filtered by the conceptocajachica_descripcion column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseConceptocajachicaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseConceptocajachicaQuery object.
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
            $modelName = 'Conceptocajachica';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConceptocajachicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ConceptocajachicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ConceptocajachicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConceptocajachicaQuery) {
            return $criteria;
        }
        $query = new ConceptocajachicaQuery(null, null, $modelAlias);

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
     * @return   Conceptocajachica|Conceptocajachica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ConceptocajachicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ConceptocajachicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Conceptocajachica A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdconceptocajachica($key, $con = null)
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
     * @return                 Conceptocajachica A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idconceptocajachica`, `conceptocajachica_nombre`, `conceptocajachica_descripcion` FROM `conceptocajachica` WHERE `idconceptocajachica` = :p0';
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
            $obj = new Conceptocajachica();
            $obj->hydrate($row);
            ConceptocajachicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Conceptocajachica|Conceptocajachica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Conceptocajachica[]|mixed the list of results, formatted by the current formatter
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
     * @return ConceptocajachicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConceptocajachicaPeer::IDCONCEPTOCAJACHICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ConceptocajachicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConceptocajachicaPeer::IDCONCEPTOCAJACHICA, $keys, Criteria::IN);
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
     * @param     mixed $idconceptocajachica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptocajachicaQuery The current query, for fluid interface
     */
    public function filterByIdconceptocajachica($idconceptocajachica = null, $comparison = null)
    {
        if (is_array($idconceptocajachica)) {
            $useMinMax = false;
            if (isset($idconceptocajachica['min'])) {
                $this->addUsingAlias(ConceptocajachicaPeer::IDCONCEPTOCAJACHICA, $idconceptocajachica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconceptocajachica['max'])) {
                $this->addUsingAlias(ConceptocajachicaPeer::IDCONCEPTOCAJACHICA, $idconceptocajachica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConceptocajachicaPeer::IDCONCEPTOCAJACHICA, $idconceptocajachica, $comparison);
    }

    /**
     * Filter the query on the conceptocajachica_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByConceptocajachicaNombre('fooValue');   // WHERE conceptocajachica_nombre = 'fooValue'
     * $query->filterByConceptocajachicaNombre('%fooValue%'); // WHERE conceptocajachica_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conceptocajachicaNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptocajachicaQuery The current query, for fluid interface
     */
    public function filterByConceptocajachicaNombre($conceptocajachicaNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conceptocajachicaNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conceptocajachicaNombre)) {
                $conceptocajachicaNombre = str_replace('*', '%', $conceptocajachicaNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConceptocajachicaPeer::CONCEPTOCAJACHICA_NOMBRE, $conceptocajachicaNombre, $comparison);
    }

    /**
     * Filter the query on the conceptocajachica_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByConceptocajachicaDescripcion('fooValue');   // WHERE conceptocajachica_descripcion = 'fooValue'
     * $query->filterByConceptocajachicaDescripcion('%fooValue%'); // WHERE conceptocajachica_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conceptocajachicaDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptocajachicaQuery The current query, for fluid interface
     */
    public function filterByConceptocajachicaDescripcion($conceptocajachicaDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conceptocajachicaDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conceptocajachicaDescripcion)) {
                $conceptocajachicaDescripcion = str_replace('*', '%', $conceptocajachicaDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConceptocajachicaPeer::CONCEPTOCAJACHICA_DESCRIPCION, $conceptocajachicaDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Cajachica object
     *
     * @param   Cajachica|PropelObjectCollection $cajachica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConceptocajachicaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCajachica($cajachica, $comparison = null)
    {
        if ($cajachica instanceof Cajachica) {
            return $this
                ->addUsingAlias(ConceptocajachicaPeer::IDCONCEPTOCAJACHICA, $cajachica->getIdconceptocajachica(), $comparison);
        } elseif ($cajachica instanceof PropelObjectCollection) {
            return $this
                ->useCajachicaQuery()
                ->filterByPrimaryKeys($cajachica->getPrimaryKeys())
                ->endUse();
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
     * @return ConceptocajachicaQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Conceptocajachica $conceptocajachica Object to remove from the list of results
     *
     * @return ConceptocajachicaQuery The current query, for fluid interface
     */
    public function prune($conceptocajachica = null)
    {
        if ($conceptocajachica) {
            $this->addUsingAlias(ConceptocajachicaPeer::IDCONCEPTOCAJACHICA, $conceptocajachica->getIdconceptocajachica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
