<?php


/**
 * Base class that represents a query for the 'modulo' table.
 *
 *
 *
 * @method ModuloQuery orderByIdmodulo($order = Criteria::ASC) Order by the idmodulo column
 * @method ModuloQuery orderByModuloNombre($order = Criteria::ASC) Order by the modulo_nombre column
 * @method ModuloQuery orderByModuloDescripcion($order = Criteria::ASC) Order by the modulo_descripcion column
 *
 * @method ModuloQuery groupByIdmodulo() Group by the idmodulo column
 * @method ModuloQuery groupByModuloNombre() Group by the modulo_nombre column
 * @method ModuloQuery groupByModuloDescripcion() Group by the modulo_descripcion column
 *
 * @method ModuloQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ModuloQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ModuloQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ModuloQuery leftJoinRolmodulo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Rolmodulo relation
 * @method ModuloQuery rightJoinRolmodulo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Rolmodulo relation
 * @method ModuloQuery innerJoinRolmodulo($relationAlias = null) Adds a INNER JOIN clause to the query using the Rolmodulo relation
 *
 * @method Modulo findOne(PropelPDO $con = null) Return the first Modulo matching the query
 * @method Modulo findOneOrCreate(PropelPDO $con = null) Return the first Modulo matching the query, or a new Modulo object populated from the query conditions when no match is found
 *
 * @method Modulo findOneByModuloNombre(string $modulo_nombre) Return the first Modulo filtered by the modulo_nombre column
 * @method Modulo findOneByModuloDescripcion(string $modulo_descripcion) Return the first Modulo filtered by the modulo_descripcion column
 *
 * @method array findByIdmodulo(int $idmodulo) Return Modulo objects filtered by the idmodulo column
 * @method array findByModuloNombre(string $modulo_nombre) Return Modulo objects filtered by the modulo_nombre column
 * @method array findByModuloDescripcion(string $modulo_descripcion) Return Modulo objects filtered by the modulo_descripcion column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseModuloQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseModuloQuery object.
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
            $modelName = 'Modulo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ModuloQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ModuloQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ModuloQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ModuloQuery) {
            return $criteria;
        }
        $query = new ModuloQuery(null, null, $modelAlias);

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
     * @return   Modulo|Modulo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ModuloPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ModuloPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Modulo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdmodulo($key, $con = null)
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
     * @return                 Modulo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idmodulo`, `modulo_nombre`, `modulo_descripcion` FROM `modulo` WHERE `idmodulo` = :p0';
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
            $obj = new Modulo();
            $obj->hydrate($row);
            ModuloPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Modulo|Modulo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Modulo[]|mixed the list of results, formatted by the current formatter
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
     * @return ModuloQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ModuloPeer::IDMODULO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ModuloQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ModuloPeer::IDMODULO, $keys, Criteria::IN);
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
     * @param     mixed $idmodulo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ModuloQuery The current query, for fluid interface
     */
    public function filterByIdmodulo($idmodulo = null, $comparison = null)
    {
        if (is_array($idmodulo)) {
            $useMinMax = false;
            if (isset($idmodulo['min'])) {
                $this->addUsingAlias(ModuloPeer::IDMODULO, $idmodulo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmodulo['max'])) {
                $this->addUsingAlias(ModuloPeer::IDMODULO, $idmodulo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ModuloPeer::IDMODULO, $idmodulo, $comparison);
    }

    /**
     * Filter the query on the modulo_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByModuloNombre('fooValue');   // WHERE modulo_nombre = 'fooValue'
     * $query->filterByModuloNombre('%fooValue%'); // WHERE modulo_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moduloNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ModuloQuery The current query, for fluid interface
     */
    public function filterByModuloNombre($moduloNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moduloNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $moduloNombre)) {
                $moduloNombre = str_replace('*', '%', $moduloNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ModuloPeer::MODULO_NOMBRE, $moduloNombre, $comparison);
    }

    /**
     * Filter the query on the modulo_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByModuloDescripcion('fooValue');   // WHERE modulo_descripcion = 'fooValue'
     * $query->filterByModuloDescripcion('%fooValue%'); // WHERE modulo_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moduloDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ModuloQuery The current query, for fluid interface
     */
    public function filterByModuloDescripcion($moduloDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moduloDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $moduloDescripcion)) {
                $moduloDescripcion = str_replace('*', '%', $moduloDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ModuloPeer::MODULO_DESCRIPCION, $moduloDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Rolmodulo object
     *
     * @param   Rolmodulo|PropelObjectCollection $rolmodulo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ModuloQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRolmodulo($rolmodulo, $comparison = null)
    {
        if ($rolmodulo instanceof Rolmodulo) {
            return $this
                ->addUsingAlias(ModuloPeer::IDMODULO, $rolmodulo->getIdmodulo(), $comparison);
        } elseif ($rolmodulo instanceof PropelObjectCollection) {
            return $this
                ->useRolmoduloQuery()
                ->filterByPrimaryKeys($rolmodulo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRolmodulo() only accepts arguments of type Rolmodulo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Rolmodulo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ModuloQuery The current query, for fluid interface
     */
    public function joinRolmodulo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Rolmodulo');

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
            $this->addJoinObject($join, 'Rolmodulo');
        }

        return $this;
    }

    /**
     * Use the Rolmodulo relation Rolmodulo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RolmoduloQuery A secondary query class using the current class as primary query
     */
    public function useRolmoduloQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRolmodulo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Rolmodulo', 'RolmoduloQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Modulo $modulo Object to remove from the list of results
     *
     * @return ModuloQuery The current query, for fluid interface
     */
    public function prune($modulo = null)
    {
        if ($modulo) {
            $this->addUsingAlias(ModuloPeer::IDMODULO, $modulo->getIdmodulo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
