<?php


/**
 * Base class that represents a query for the 'admisionanticipo' table.
 *
 *
 *
 * @method AdmisionanticipoQuery orderByIdadmisionanticipo($order = Criteria::ASC) Order by the idadmisionanticipo column
 * @method AdmisionanticipoQuery orderByIdadmision($order = Criteria::ASC) Order by the idadmision column
 * @method AdmisionanticipoQuery orderByAdmisionanticipoFecha($order = Criteria::ASC) Order by the admisionanticipo_fecha column
 * @method AdmisionanticipoQuery orderByAdmisionanticipoCantidad($order = Criteria::ASC) Order by the admisionanticipo_cantidad column
 * @method AdmisionanticipoQuery orderByAdmisionanticipoNota($order = Criteria::ASC) Order by the admisionanticipo_nota column
 * @method AdmisionanticipoQuery orderByAdmisionanticipoTipo($order = Criteria::ASC) Order by the admisionanticipo_tipo column
 *
 * @method AdmisionanticipoQuery groupByIdadmisionanticipo() Group by the idadmisionanticipo column
 * @method AdmisionanticipoQuery groupByIdadmision() Group by the idadmision column
 * @method AdmisionanticipoQuery groupByAdmisionanticipoFecha() Group by the admisionanticipo_fecha column
 * @method AdmisionanticipoQuery groupByAdmisionanticipoCantidad() Group by the admisionanticipo_cantidad column
 * @method AdmisionanticipoQuery groupByAdmisionanticipoNota() Group by the admisionanticipo_nota column
 * @method AdmisionanticipoQuery groupByAdmisionanticipoTipo() Group by the admisionanticipo_tipo column
 *
 * @method AdmisionanticipoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AdmisionanticipoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AdmisionanticipoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AdmisionanticipoQuery leftJoinAdmision($relationAlias = null) Adds a LEFT JOIN clause to the query using the Admision relation
 * @method AdmisionanticipoQuery rightJoinAdmision($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Admision relation
 * @method AdmisionanticipoQuery innerJoinAdmision($relationAlias = null) Adds a INNER JOIN clause to the query using the Admision relation
 *
 * @method Admisionanticipo findOne(PropelPDO $con = null) Return the first Admisionanticipo matching the query
 * @method Admisionanticipo findOneOrCreate(PropelPDO $con = null) Return the first Admisionanticipo matching the query, or a new Admisionanticipo object populated from the query conditions when no match is found
 *
 * @method Admisionanticipo findOneByIdadmision(int $idadmision) Return the first Admisionanticipo filtered by the idadmision column
 * @method Admisionanticipo findOneByAdmisionanticipoFecha(string $admisionanticipo_fecha) Return the first Admisionanticipo filtered by the admisionanticipo_fecha column
 * @method Admisionanticipo findOneByAdmisionanticipoCantidad(string $admisionanticipo_cantidad) Return the first Admisionanticipo filtered by the admisionanticipo_cantidad column
 * @method Admisionanticipo findOneByAdmisionanticipoNota(string $admisionanticipo_nota) Return the first Admisionanticipo filtered by the admisionanticipo_nota column
 * @method Admisionanticipo findOneByAdmisionanticipoTipo(string $admisionanticipo_tipo) Return the first Admisionanticipo filtered by the admisionanticipo_tipo column
 *
 * @method array findByIdadmisionanticipo(int $idadmisionanticipo) Return Admisionanticipo objects filtered by the idadmisionanticipo column
 * @method array findByIdadmision(int $idadmision) Return Admisionanticipo objects filtered by the idadmision column
 * @method array findByAdmisionanticipoFecha(string $admisionanticipo_fecha) Return Admisionanticipo objects filtered by the admisionanticipo_fecha column
 * @method array findByAdmisionanticipoCantidad(string $admisionanticipo_cantidad) Return Admisionanticipo objects filtered by the admisionanticipo_cantidad column
 * @method array findByAdmisionanticipoNota(string $admisionanticipo_nota) Return Admisionanticipo objects filtered by the admisionanticipo_nota column
 * @method array findByAdmisionanticipoTipo(string $admisionanticipo_tipo) Return Admisionanticipo objects filtered by the admisionanticipo_tipo column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseAdmisionanticipoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAdmisionanticipoQuery object.
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
            $modelName = 'Admisionanticipo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AdmisionanticipoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AdmisionanticipoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AdmisionanticipoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AdmisionanticipoQuery) {
            return $criteria;
        }
        $query = new AdmisionanticipoQuery(null, null, $modelAlias);

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
     * @return   Admisionanticipo|Admisionanticipo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AdmisionanticipoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AdmisionanticipoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Admisionanticipo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdadmisionanticipo($key, $con = null)
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
     * @return                 Admisionanticipo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idadmisionanticipo`, `idadmision`, `admisionanticipo_fecha`, `admisionanticipo_cantidad`, `admisionanticipo_nota`, `admisionanticipo_tipo` FROM `admisionanticipo` WHERE `idadmisionanticipo` = :p0';
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
            $obj = new Admisionanticipo();
            $obj->hydrate($row);
            AdmisionanticipoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Admisionanticipo|Admisionanticipo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Admisionanticipo[]|mixed the list of results, formatted by the current formatter
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
     * @return AdmisionanticipoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AdmisionanticipoPeer::IDADMISIONANTICIPO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AdmisionanticipoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AdmisionanticipoPeer::IDADMISIONANTICIPO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idadmisionanticipo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdadmisionanticipo(1234); // WHERE idadmisionanticipo = 1234
     * $query->filterByIdadmisionanticipo(array(12, 34)); // WHERE idadmisionanticipo IN (12, 34)
     * $query->filterByIdadmisionanticipo(array('min' => 12)); // WHERE idadmisionanticipo >= 12
     * $query->filterByIdadmisionanticipo(array('max' => 12)); // WHERE idadmisionanticipo <= 12
     * </code>
     *
     * @param     mixed $idadmisionanticipo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionanticipoQuery The current query, for fluid interface
     */
    public function filterByIdadmisionanticipo($idadmisionanticipo = null, $comparison = null)
    {
        if (is_array($idadmisionanticipo)) {
            $useMinMax = false;
            if (isset($idadmisionanticipo['min'])) {
                $this->addUsingAlias(AdmisionanticipoPeer::IDADMISIONANTICIPO, $idadmisionanticipo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idadmisionanticipo['max'])) {
                $this->addUsingAlias(AdmisionanticipoPeer::IDADMISIONANTICIPO, $idadmisionanticipo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdmisionanticipoPeer::IDADMISIONANTICIPO, $idadmisionanticipo, $comparison);
    }

    /**
     * Filter the query on the idadmision column
     *
     * Example usage:
     * <code>
     * $query->filterByIdadmision(1234); // WHERE idadmision = 1234
     * $query->filterByIdadmision(array(12, 34)); // WHERE idadmision IN (12, 34)
     * $query->filterByIdadmision(array('min' => 12)); // WHERE idadmision >= 12
     * $query->filterByIdadmision(array('max' => 12)); // WHERE idadmision <= 12
     * </code>
     *
     * @see       filterByAdmision()
     *
     * @param     mixed $idadmision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionanticipoQuery The current query, for fluid interface
     */
    public function filterByIdadmision($idadmision = null, $comparison = null)
    {
        if (is_array($idadmision)) {
            $useMinMax = false;
            if (isset($idadmision['min'])) {
                $this->addUsingAlias(AdmisionanticipoPeer::IDADMISION, $idadmision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idadmision['max'])) {
                $this->addUsingAlias(AdmisionanticipoPeer::IDADMISION, $idadmision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdmisionanticipoPeer::IDADMISION, $idadmision, $comparison);
    }

    /**
     * Filter the query on the admisionanticipo_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmisionanticipoFecha('2011-03-14'); // WHERE admisionanticipo_fecha = '2011-03-14'
     * $query->filterByAdmisionanticipoFecha('now'); // WHERE admisionanticipo_fecha = '2011-03-14'
     * $query->filterByAdmisionanticipoFecha(array('max' => 'yesterday')); // WHERE admisionanticipo_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $admisionanticipoFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionanticipoQuery The current query, for fluid interface
     */
    public function filterByAdmisionanticipoFecha($admisionanticipoFecha = null, $comparison = null)
    {
        if (is_array($admisionanticipoFecha)) {
            $useMinMax = false;
            if (isset($admisionanticipoFecha['min'])) {
                $this->addUsingAlias(AdmisionanticipoPeer::ADMISIONANTICIPO_FECHA, $admisionanticipoFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($admisionanticipoFecha['max'])) {
                $this->addUsingAlias(AdmisionanticipoPeer::ADMISIONANTICIPO_FECHA, $admisionanticipoFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdmisionanticipoPeer::ADMISIONANTICIPO_FECHA, $admisionanticipoFecha, $comparison);
    }

    /**
     * Filter the query on the admisionanticipo_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmisionanticipoCantidad(1234); // WHERE admisionanticipo_cantidad = 1234
     * $query->filterByAdmisionanticipoCantidad(array(12, 34)); // WHERE admisionanticipo_cantidad IN (12, 34)
     * $query->filterByAdmisionanticipoCantidad(array('min' => 12)); // WHERE admisionanticipo_cantidad >= 12
     * $query->filterByAdmisionanticipoCantidad(array('max' => 12)); // WHERE admisionanticipo_cantidad <= 12
     * </code>
     *
     * @param     mixed $admisionanticipoCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionanticipoQuery The current query, for fluid interface
     */
    public function filterByAdmisionanticipoCantidad($admisionanticipoCantidad = null, $comparison = null)
    {
        if (is_array($admisionanticipoCantidad)) {
            $useMinMax = false;
            if (isset($admisionanticipoCantidad['min'])) {
                $this->addUsingAlias(AdmisionanticipoPeer::ADMISIONANTICIPO_CANTIDAD, $admisionanticipoCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($admisionanticipoCantidad['max'])) {
                $this->addUsingAlias(AdmisionanticipoPeer::ADMISIONANTICIPO_CANTIDAD, $admisionanticipoCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdmisionanticipoPeer::ADMISIONANTICIPO_CANTIDAD, $admisionanticipoCantidad, $comparison);
    }

    /**
     * Filter the query on the admisionanticipo_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmisionanticipoNota('fooValue');   // WHERE admisionanticipo_nota = 'fooValue'
     * $query->filterByAdmisionanticipoNota('%fooValue%'); // WHERE admisionanticipo_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $admisionanticipoNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionanticipoQuery The current query, for fluid interface
     */
    public function filterByAdmisionanticipoNota($admisionanticipoNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($admisionanticipoNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $admisionanticipoNota)) {
                $admisionanticipoNota = str_replace('*', '%', $admisionanticipoNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdmisionanticipoPeer::ADMISIONANTICIPO_NOTA, $admisionanticipoNota, $comparison);
    }

    /**
     * Filter the query on the admisionanticipo_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmisionanticipoTipo('fooValue');   // WHERE admisionanticipo_tipo = 'fooValue'
     * $query->filterByAdmisionanticipoTipo('%fooValue%'); // WHERE admisionanticipo_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $admisionanticipoTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionanticipoQuery The current query, for fluid interface
     */
    public function filterByAdmisionanticipoTipo($admisionanticipoTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($admisionanticipoTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $admisionanticipoTipo)) {
                $admisionanticipoTipo = str_replace('*', '%', $admisionanticipoTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdmisionanticipoPeer::ADMISIONANTICIPO_TIPO, $admisionanticipoTipo, $comparison);
    }

    /**
     * Filter the query by a related Admision object
     *
     * @param   Admision|PropelObjectCollection $admision The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AdmisionanticipoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAdmision($admision, $comparison = null)
    {
        if ($admision instanceof Admision) {
            return $this
                ->addUsingAlias(AdmisionanticipoPeer::IDADMISION, $admision->getIdadmision(), $comparison);
        } elseif ($admision instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AdmisionanticipoPeer::IDADMISION, $admision->toKeyValue('PrimaryKey', 'Idadmision'), $comparison);
        } else {
            throw new PropelException('filterByAdmision() only accepts arguments of type Admision or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Admision relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AdmisionanticipoQuery The current query, for fluid interface
     */
    public function joinAdmision($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Admision');

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
            $this->addJoinObject($join, 'Admision');
        }

        return $this;
    }

    /**
     * Use the Admision relation Admision object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AdmisionQuery A secondary query class using the current class as primary query
     */
    public function useAdmisionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAdmision($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Admision', 'AdmisionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Admisionanticipo $admisionanticipo Object to remove from the list of results
     *
     * @return AdmisionanticipoQuery The current query, for fluid interface
     */
    public function prune($admisionanticipo = null)
    {
        if ($admisionanticipo) {
            $this->addUsingAlias(AdmisionanticipoPeer::IDADMISIONANTICIPO, $admisionanticipo->getIdadmisionanticipo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
