<?php


/**
 * Base class that represents a query for the 'gasto' table.
 *
 *
 *
 * @method GastoQuery orderByIdgasto($order = Criteria::ASC) Order by the idgasto column
 * @method GastoQuery orderByGastoNombre($order = Criteria::ASC) Order by the gasto_nombre column
 * @method GastoQuery orderByGastoDescripcion($order = Criteria::ASC) Order by the gasto_descripcion column
 *
 * @method GastoQuery groupByIdgasto() Group by the idgasto column
 * @method GastoQuery groupByGastoNombre() Group by the gasto_nombre column
 * @method GastoQuery groupByGastoDescripcion() Group by the gasto_descripcion column
 *
 * @method GastoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GastoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GastoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GastoQuery leftJoinCajachicadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cajachicadetalle relation
 * @method GastoQuery rightJoinCajachicadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cajachicadetalle relation
 * @method GastoQuery innerJoinCajachicadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Cajachicadetalle relation
 *
 * @method Gasto findOne(PropelPDO $con = null) Return the first Gasto matching the query
 * @method Gasto findOneOrCreate(PropelPDO $con = null) Return the first Gasto matching the query, or a new Gasto object populated from the query conditions when no match is found
 *
 * @method Gasto findOneByGastoNombre(string $gasto_nombre) Return the first Gasto filtered by the gasto_nombre column
 * @method Gasto findOneByGastoDescripcion(string $gasto_descripcion) Return the first Gasto filtered by the gasto_descripcion column
 *
 * @method array findByIdgasto(int $idgasto) Return Gasto objects filtered by the idgasto column
 * @method array findByGastoNombre(string $gasto_nombre) Return Gasto objects filtered by the gasto_nombre column
 * @method array findByGastoDescripcion(string $gasto_descripcion) Return Gasto objects filtered by the gasto_descripcion column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseGastoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGastoQuery object.
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
            $modelName = 'Gasto';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GastoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GastoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GastoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GastoQuery) {
            return $criteria;
        }
        $query = new GastoQuery(null, null, $modelAlias);

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
     * @return   Gasto|Gasto[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GastoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GastoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Gasto A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdgasto($key, $con = null)
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
     * @return                 Gasto A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idgasto`, `gasto_nombre`, `gasto_descripcion` FROM `gasto` WHERE `idgasto` = :p0';
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
            $obj = new Gasto();
            $obj->hydrate($row);
            GastoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Gasto|Gasto[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Gasto[]|mixed the list of results, formatted by the current formatter
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
     * @return GastoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GastoPeer::IDGASTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GastoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GastoPeer::IDGASTO, $keys, Criteria::IN);
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
     * @param     mixed $idgasto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GastoQuery The current query, for fluid interface
     */
    public function filterByIdgasto($idgasto = null, $comparison = null)
    {
        if (is_array($idgasto)) {
            $useMinMax = false;
            if (isset($idgasto['min'])) {
                $this->addUsingAlias(GastoPeer::IDGASTO, $idgasto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idgasto['max'])) {
                $this->addUsingAlias(GastoPeer::IDGASTO, $idgasto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GastoPeer::IDGASTO, $idgasto, $comparison);
    }

    /**
     * Filter the query on the gasto_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByGastoNombre('fooValue');   // WHERE gasto_nombre = 'fooValue'
     * $query->filterByGastoNombre('%fooValue%'); // WHERE gasto_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gastoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GastoQuery The current query, for fluid interface
     */
    public function filterByGastoNombre($gastoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gastoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gastoNombre)) {
                $gastoNombre = str_replace('*', '%', $gastoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GastoPeer::GASTO_NOMBRE, $gastoNombre, $comparison);
    }

    /**
     * Filter the query on the gasto_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByGastoDescripcion('fooValue');   // WHERE gasto_descripcion = 'fooValue'
     * $query->filterByGastoDescripcion('%fooValue%'); // WHERE gasto_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gastoDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GastoQuery The current query, for fluid interface
     */
    public function filterByGastoDescripcion($gastoDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gastoDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gastoDescripcion)) {
                $gastoDescripcion = str_replace('*', '%', $gastoDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GastoPeer::GASTO_DESCRIPCION, $gastoDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Cajachicadetalle object
     *
     * @param   Cajachicadetalle|PropelObjectCollection $cajachicadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GastoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCajachicadetalle($cajachicadetalle, $comparison = null)
    {
        if ($cajachicadetalle instanceof Cajachicadetalle) {
            return $this
                ->addUsingAlias(GastoPeer::IDGASTO, $cajachicadetalle->getIdgasto(), $comparison);
        } elseif ($cajachicadetalle instanceof PropelObjectCollection) {
            return $this
                ->useCajachicadetalleQuery()
                ->filterByPrimaryKeys($cajachicadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCajachicadetalle() only accepts arguments of type Cajachicadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cajachicadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GastoQuery The current query, for fluid interface
     */
    public function joinCajachicadetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cajachicadetalle');

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
            $this->addJoinObject($join, 'Cajachicadetalle');
        }

        return $this;
    }

    /**
     * Use the Cajachicadetalle relation Cajachicadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CajachicadetalleQuery A secondary query class using the current class as primary query
     */
    public function useCajachicadetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCajachicadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cajachicadetalle', 'CajachicadetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Gasto $gasto Object to remove from the list of results
     *
     * @return GastoQuery The current query, for fluid interface
     */
    public function prune($gasto = null)
    {
        if ($gasto) {
            $this->addUsingAlias(GastoPeer::IDGASTO, $gasto->getIdgasto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
