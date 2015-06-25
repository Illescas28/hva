<?php


/**
 * Base class that represents a query for the 'tipo' table.
 *
 *
 *
 * @method TipoQuery orderByIdtipo($order = Criteria::ASC) Order by the idtipo column
 * @method TipoQuery orderByTipoNombre($order = Criteria::ASC) Order by the tipo_nombre column
 * @method TipoQuery orderByTipoDescripcion($order = Criteria::ASC) Order by the tipo_descripcion column
 *
 * @method TipoQuery groupByIdtipo() Group by the idtipo column
 * @method TipoQuery groupByTipoNombre() Group by the tipo_nombre column
 * @method TipoQuery groupByTipoDescripcion() Group by the tipo_descripcion column
 *
 * @method TipoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TipoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TipoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TipoQuery leftJoinArticulo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Articulo relation
 * @method TipoQuery rightJoinArticulo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Articulo relation
 * @method TipoQuery innerJoinArticulo($relationAlias = null) Adds a INNER JOIN clause to the query using the Articulo relation
 *
 * @method Tipo findOne(PropelPDO $con = null) Return the first Tipo matching the query
 * @method Tipo findOneOrCreate(PropelPDO $con = null) Return the first Tipo matching the query, or a new Tipo object populated from the query conditions when no match is found
 *
 * @method Tipo findOneByTipoNombre(string $tipo_nombre) Return the first Tipo filtered by the tipo_nombre column
 * @method Tipo findOneByTipoDescripcion(string $tipo_descripcion) Return the first Tipo filtered by the tipo_descripcion column
 *
 * @method array findByIdtipo(int $idtipo) Return Tipo objects filtered by the idtipo column
 * @method array findByTipoNombre(string $tipo_nombre) Return Tipo objects filtered by the tipo_nombre column
 * @method array findByTipoDescripcion(string $tipo_descripcion) Return Tipo objects filtered by the tipo_descripcion column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseTipoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTipoQuery object.
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
            $modelName = 'Tipo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TipoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TipoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TipoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TipoQuery) {
            return $criteria;
        }
        $query = new TipoQuery(null, null, $modelAlias);

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
     * @return   Tipo|Tipo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TipoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TipoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Tipo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdtipo($key, $con = null)
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
     * @return                 Tipo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idtipo`, `tipo_nombre`, `tipo_descripcion` FROM `tipo` WHERE `idtipo` = :p0';
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
            $obj = new Tipo();
            $obj->hydrate($row);
            TipoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Tipo|Tipo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Tipo[]|mixed the list of results, formatted by the current formatter
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
     * @return TipoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TipoPeer::IDTIPO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TipoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TipoPeer::IDTIPO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idtipo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtipo(1234); // WHERE idtipo = 1234
     * $query->filterByIdtipo(array(12, 34)); // WHERE idtipo IN (12, 34)
     * $query->filterByIdtipo(array('min' => 12)); // WHERE idtipo >= 12
     * $query->filterByIdtipo(array('max' => 12)); // WHERE idtipo <= 12
     * </code>
     *
     * @param     mixed $idtipo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipoQuery The current query, for fluid interface
     */
    public function filterByIdtipo($idtipo = null, $comparison = null)
    {
        if (is_array($idtipo)) {
            $useMinMax = false;
            if (isset($idtipo['min'])) {
                $this->addUsingAlias(TipoPeer::IDTIPO, $idtipo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtipo['max'])) {
                $this->addUsingAlias(TipoPeer::IDTIPO, $idtipo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TipoPeer::IDTIPO, $idtipo, $comparison);
    }

    /**
     * Filter the query on the tipo_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByTipoNombre('fooValue');   // WHERE tipo_nombre = 'fooValue'
     * $query->filterByTipoNombre('%fooValue%'); // WHERE tipo_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tipoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipoQuery The current query, for fluid interface
     */
    public function filterByTipoNombre($tipoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tipoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tipoNombre)) {
                $tipoNombre = str_replace('*', '%', $tipoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TipoPeer::TIPO_NOMBRE, $tipoNombre, $comparison);
    }

    /**
     * Filter the query on the tipo_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByTipoDescripcion('fooValue');   // WHERE tipo_descripcion = 'fooValue'
     * $query->filterByTipoDescripcion('%fooValue%'); // WHERE tipo_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tipoDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipoQuery The current query, for fluid interface
     */
    public function filterByTipoDescripcion($tipoDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tipoDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tipoDescripcion)) {
                $tipoDescripcion = str_replace('*', '%', $tipoDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TipoPeer::TIPO_DESCRIPCION, $tipoDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Articulo object
     *
     * @param   Articulo|PropelObjectCollection $articulo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TipoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByArticulo($articulo, $comparison = null)
    {
        if ($articulo instanceof Articulo) {
            return $this
                ->addUsingAlias(TipoPeer::IDTIPO, $articulo->getIdtipo(), $comparison);
        } elseif ($articulo instanceof PropelObjectCollection) {
            return $this
                ->useArticuloQuery()
                ->filterByPrimaryKeys($articulo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByArticulo() only accepts arguments of type Articulo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Articulo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TipoQuery The current query, for fluid interface
     */
    public function joinArticulo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Articulo');

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
            $this->addJoinObject($join, 'Articulo');
        }

        return $this;
    }

    /**
     * Use the Articulo relation Articulo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ArticuloQuery A secondary query class using the current class as primary query
     */
    public function useArticuloQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinArticulo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Articulo', 'ArticuloQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Tipo $tipo Object to remove from the list of results
     *
     * @return TipoQuery The current query, for fluid interface
     */
    public function prune($tipo = null)
    {
        if ($tipo) {
            $this->addUsingAlias(TipoPeer::IDTIPO, $tipo->getIdtipo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
