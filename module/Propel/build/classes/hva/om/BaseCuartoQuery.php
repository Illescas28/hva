<?php


/**
 * Base class that represents a query for the 'cuarto' table.
 *
 *
 *
 * @method CuartoQuery orderByIdcuarto($order = Criteria::ASC) Order by the idcuarto column
 * @method CuartoQuery orderByCuartoNombre($order = Criteria::ASC) Order by the cuarto_nombre column
 * @method CuartoQuery orderByCuartoDescripcion($order = Criteria::ASC) Order by the cuarto_descripcion column
 * @method CuartoQuery orderByCuartoEnuso($order = Criteria::ASC) Order by the cuarto_enuso column
 * @method CuartoQuery orderByCuartoExtension($order = Criteria::ASC) Order by the cuarto_extension column
 *
 * @method CuartoQuery groupByIdcuarto() Group by the idcuarto column
 * @method CuartoQuery groupByCuartoNombre() Group by the cuarto_nombre column
 * @method CuartoQuery groupByCuartoDescripcion() Group by the cuarto_descripcion column
 * @method CuartoQuery groupByCuartoEnuso() Group by the cuarto_enuso column
 * @method CuartoQuery groupByCuartoExtension() Group by the cuarto_extension column
 *
 * @method CuartoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CuartoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CuartoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CuartoQuery leftJoinAdmision($relationAlias = null) Adds a LEFT JOIN clause to the query using the Admision relation
 * @method CuartoQuery rightJoinAdmision($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Admision relation
 * @method CuartoQuery innerJoinAdmision($relationAlias = null) Adds a INNER JOIN clause to the query using the Admision relation
 *
 * @method Cuarto findOne(PropelPDO $con = null) Return the first Cuarto matching the query
 * @method Cuarto findOneOrCreate(PropelPDO $con = null) Return the first Cuarto matching the query, or a new Cuarto object populated from the query conditions when no match is found
 *
 * @method Cuarto findOneByCuartoNombre(string $cuarto_nombre) Return the first Cuarto filtered by the cuarto_nombre column
 * @method Cuarto findOneByCuartoDescripcion(string $cuarto_descripcion) Return the first Cuarto filtered by the cuarto_descripcion column
 * @method Cuarto findOneByCuartoEnuso(boolean $cuarto_enuso) Return the first Cuarto filtered by the cuarto_enuso column
 * @method Cuarto findOneByCuartoExtension(string $cuarto_extension) Return the first Cuarto filtered by the cuarto_extension column
 *
 * @method array findByIdcuarto(int $idcuarto) Return Cuarto objects filtered by the idcuarto column
 * @method array findByCuartoNombre(string $cuarto_nombre) Return Cuarto objects filtered by the cuarto_nombre column
 * @method array findByCuartoDescripcion(string $cuarto_descripcion) Return Cuarto objects filtered by the cuarto_descripcion column
 * @method array findByCuartoEnuso(boolean $cuarto_enuso) Return Cuarto objects filtered by the cuarto_enuso column
 * @method array findByCuartoExtension(string $cuarto_extension) Return Cuarto objects filtered by the cuarto_extension column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseCuartoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCuartoQuery object.
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
            $modelName = 'Cuarto';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CuartoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CuartoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CuartoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CuartoQuery) {
            return $criteria;
        }
        $query = new CuartoQuery(null, null, $modelAlias);

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
     * @return   Cuarto|Cuarto[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CuartoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CuartoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cuarto A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcuarto($key, $con = null)
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
     * @return                 Cuarto A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcuarto`, `cuarto_nombre`, `cuarto_descripcion`, `cuarto_enuso`, `cuarto_extension` FROM `cuarto` WHERE `idcuarto` = :p0';
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
            $obj = new Cuarto();
            $obj->hydrate($row);
            CuartoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cuarto|Cuarto[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cuarto[]|mixed the list of results, formatted by the current formatter
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
     * @return CuartoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CuartoPeer::IDCUARTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CuartoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CuartoPeer::IDCUARTO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcuarto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcuarto(1234); // WHERE idcuarto = 1234
     * $query->filterByIdcuarto(array(12, 34)); // WHERE idcuarto IN (12, 34)
     * $query->filterByIdcuarto(array('min' => 12)); // WHERE idcuarto >= 12
     * $query->filterByIdcuarto(array('max' => 12)); // WHERE idcuarto <= 12
     * </code>
     *
     * @param     mixed $idcuarto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuartoQuery The current query, for fluid interface
     */
    public function filterByIdcuarto($idcuarto = null, $comparison = null)
    {
        if (is_array($idcuarto)) {
            $useMinMax = false;
            if (isset($idcuarto['min'])) {
                $this->addUsingAlias(CuartoPeer::IDCUARTO, $idcuarto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcuarto['max'])) {
                $this->addUsingAlias(CuartoPeer::IDCUARTO, $idcuarto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuartoPeer::IDCUARTO, $idcuarto, $comparison);
    }

    /**
     * Filter the query on the cuarto_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByCuartoNombre('fooValue');   // WHERE cuarto_nombre = 'fooValue'
     * $query->filterByCuartoNombre('%fooValue%'); // WHERE cuarto_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cuartoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuartoQuery The current query, for fluid interface
     */
    public function filterByCuartoNombre($cuartoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cuartoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cuartoNombre)) {
                $cuartoNombre = str_replace('*', '%', $cuartoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CuartoPeer::CUARTO_NOMBRE, $cuartoNombre, $comparison);
    }

    /**
     * Filter the query on the cuarto_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByCuartoDescripcion('fooValue');   // WHERE cuarto_descripcion = 'fooValue'
     * $query->filterByCuartoDescripcion('%fooValue%'); // WHERE cuarto_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cuartoDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuartoQuery The current query, for fluid interface
     */
    public function filterByCuartoDescripcion($cuartoDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cuartoDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cuartoDescripcion)) {
                $cuartoDescripcion = str_replace('*', '%', $cuartoDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CuartoPeer::CUARTO_DESCRIPCION, $cuartoDescripcion, $comparison);
    }

    /**
     * Filter the query on the cuarto_enuso column
     *
     * Example usage:
     * <code>
     * $query->filterByCuartoEnuso(true); // WHERE cuarto_enuso = true
     * $query->filterByCuartoEnuso('yes'); // WHERE cuarto_enuso = true
     * </code>
     *
     * @param     boolean|string $cuartoEnuso The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuartoQuery The current query, for fluid interface
     */
    public function filterByCuartoEnuso($cuartoEnuso = null, $comparison = null)
    {
        if (is_string($cuartoEnuso)) {
            $cuartoEnuso = in_array(strtolower($cuartoEnuso), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CuartoPeer::CUARTO_ENUSO, $cuartoEnuso, $comparison);
    }

    /**
     * Filter the query on the cuarto_extension column
     *
     * Example usage:
     * <code>
     * $query->filterByCuartoExtension('fooValue');   // WHERE cuarto_extension = 'fooValue'
     * $query->filterByCuartoExtension('%fooValue%'); // WHERE cuarto_extension LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cuartoExtension The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuartoQuery The current query, for fluid interface
     */
    public function filterByCuartoExtension($cuartoExtension = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cuartoExtension)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cuartoExtension)) {
                $cuartoExtension = str_replace('*', '%', $cuartoExtension);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CuartoPeer::CUARTO_EXTENSION, $cuartoExtension, $comparison);
    }

    /**
     * Filter the query by a related Admision object
     *
     * @param   Admision|PropelObjectCollection $admision  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CuartoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAdmision($admision, $comparison = null)
    {
        if ($admision instanceof Admision) {
            return $this
                ->addUsingAlias(CuartoPeer::IDCUARTO, $admision->getIdcuarto(), $comparison);
        } elseif ($admision instanceof PropelObjectCollection) {
            return $this
                ->useAdmisionQuery()
                ->filterByPrimaryKeys($admision->getPrimaryKeys())
                ->endUse();
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
     * @return CuartoQuery The current query, for fluid interface
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
     * @param   Cuarto $cuarto Object to remove from the list of results
     *
     * @return CuartoQuery The current query, for fluid interface
     */
    public function prune($cuarto = null)
    {
        if ($cuarto) {
            $this->addUsingAlias(CuartoPeer::IDCUARTO, $cuarto->getIdcuarto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
