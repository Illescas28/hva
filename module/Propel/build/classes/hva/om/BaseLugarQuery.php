<?php


/**
 * Base class that represents a query for the 'lugar' table.
 *
 *
 *
 * @method LugarQuery orderByIdlugar($order = Criteria::ASC) Order by the idlugar column
 * @method LugarQuery orderByLugarNombre($order = Criteria::ASC) Order by the lugar_nombre column
 * @method LugarQuery orderByLugarDescripcion($order = Criteria::ASC) Order by the lugar_descripcion column
 *
 * @method LugarQuery groupByIdlugar() Group by the idlugar column
 * @method LugarQuery groupByLugarNombre() Group by the lugar_nombre column
 * @method LugarQuery groupByLugarDescripcion() Group by the lugar_descripcion column
 *
 * @method LugarQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LugarQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LugarQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method LugarQuery leftJoinArticulovariantereorden($relationAlias = null) Adds a LEFT JOIN clause to the query using the Articulovariantereorden relation
 * @method LugarQuery rightJoinArticulovariantereorden($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Articulovariantereorden relation
 * @method LugarQuery innerJoinArticulovariantereorden($relationAlias = null) Adds a INNER JOIN clause to the query using the Articulovariantereorden relation
 *
 * @method LugarQuery leftJoinLugarinventario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Lugarinventario relation
 * @method LugarQuery rightJoinLugarinventario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Lugarinventario relation
 * @method LugarQuery innerJoinLugarinventario($relationAlias = null) Adds a INNER JOIN clause to the query using the Lugarinventario relation
 *
 * @method LugarQuery leftJoinTraspasoRelatedByIdlugardestinatario($relationAlias = null) Adds a LEFT JOIN clause to the query using the TraspasoRelatedByIdlugardestinatario relation
 * @method LugarQuery rightJoinTraspasoRelatedByIdlugardestinatario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TraspasoRelatedByIdlugardestinatario relation
 * @method LugarQuery innerJoinTraspasoRelatedByIdlugardestinatario($relationAlias = null) Adds a INNER JOIN clause to the query using the TraspasoRelatedByIdlugardestinatario relation
 *
 * @method LugarQuery leftJoinTraspasoRelatedByIdlugarremitente($relationAlias = null) Adds a LEFT JOIN clause to the query using the TraspasoRelatedByIdlugarremitente relation
 * @method LugarQuery rightJoinTraspasoRelatedByIdlugarremitente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TraspasoRelatedByIdlugarremitente relation
 * @method LugarQuery innerJoinTraspasoRelatedByIdlugarremitente($relationAlias = null) Adds a INNER JOIN clause to the query using the TraspasoRelatedByIdlugarremitente relation
 *
 * @method Lugar findOne(PropelPDO $con = null) Return the first Lugar matching the query
 * @method Lugar findOneOrCreate(PropelPDO $con = null) Return the first Lugar matching the query, or a new Lugar object populated from the query conditions when no match is found
 *
 * @method Lugar findOneByLugarNombre(string $lugar_nombre) Return the first Lugar filtered by the lugar_nombre column
 * @method Lugar findOneByLugarDescripcion(string $lugar_descripcion) Return the first Lugar filtered by the lugar_descripcion column
 *
 * @method array findByIdlugar(int $idlugar) Return Lugar objects filtered by the idlugar column
 * @method array findByLugarNombre(string $lugar_nombre) Return Lugar objects filtered by the lugar_nombre column
 * @method array findByLugarDescripcion(string $lugar_descripcion) Return Lugar objects filtered by the lugar_descripcion column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseLugarQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLugarQuery object.
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
            $modelName = 'Lugar';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LugarQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LugarQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LugarQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LugarQuery) {
            return $criteria;
        }
        $query = new LugarQuery(null, null, $modelAlias);

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
     * @return   Lugar|Lugar[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LugarPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LugarPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Lugar A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdlugar($key, $con = null)
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
     * @return                 Lugar A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idlugar`, `lugar_nombre`, `lugar_descripcion` FROM `lugar` WHERE `idlugar` = :p0';
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
            $obj = new Lugar();
            $obj->hydrate($row);
            LugarPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Lugar|Lugar[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Lugar[]|mixed the list of results, formatted by the current formatter
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
     * @return LugarQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LugarPeer::IDLUGAR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LugarQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LugarPeer::IDLUGAR, $keys, Criteria::IN);
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
     * @param     mixed $idlugar The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LugarQuery The current query, for fluid interface
     */
    public function filterByIdlugar($idlugar = null, $comparison = null)
    {
        if (is_array($idlugar)) {
            $useMinMax = false;
            if (isset($idlugar['min'])) {
                $this->addUsingAlias(LugarPeer::IDLUGAR, $idlugar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idlugar['max'])) {
                $this->addUsingAlias(LugarPeer::IDLUGAR, $idlugar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LugarPeer::IDLUGAR, $idlugar, $comparison);
    }

    /**
     * Filter the query on the lugar_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByLugarNombre('fooValue');   // WHERE lugar_nombre = 'fooValue'
     * $query->filterByLugarNombre('%fooValue%'); // WHERE lugar_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lugarNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LugarQuery The current query, for fluid interface
     */
    public function filterByLugarNombre($lugarNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lugarNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lugarNombre)) {
                $lugarNombre = str_replace('*', '%', $lugarNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LugarPeer::LUGAR_NOMBRE, $lugarNombre, $comparison);
    }

    /**
     * Filter the query on the lugar_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByLugarDescripcion('fooValue');   // WHERE lugar_descripcion = 'fooValue'
     * $query->filterByLugarDescripcion('%fooValue%'); // WHERE lugar_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lugarDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LugarQuery The current query, for fluid interface
     */
    public function filterByLugarDescripcion($lugarDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lugarDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lugarDescripcion)) {
                $lugarDescripcion = str_replace('*', '%', $lugarDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LugarPeer::LUGAR_DESCRIPCION, $lugarDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Articulovariantereorden object
     *
     * @param   Articulovariantereorden|PropelObjectCollection $articulovariantereorden  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LugarQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByArticulovariantereorden($articulovariantereorden, $comparison = null)
    {
        if ($articulovariantereorden instanceof Articulovariantereorden) {
            return $this
                ->addUsingAlias(LugarPeer::IDLUGAR, $articulovariantereorden->getIdlugar(), $comparison);
        } elseif ($articulovariantereorden instanceof PropelObjectCollection) {
            return $this
                ->useArticulovariantereordenQuery()
                ->filterByPrimaryKeys($articulovariantereorden->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByArticulovariantereorden() only accepts arguments of type Articulovariantereorden or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Articulovariantereorden relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LugarQuery The current query, for fluid interface
     */
    public function joinArticulovariantereorden($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Articulovariantereorden');

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
            $this->addJoinObject($join, 'Articulovariantereorden');
        }

        return $this;
    }

    /**
     * Use the Articulovariantereorden relation Articulovariantereorden object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ArticulovariantereordenQuery A secondary query class using the current class as primary query
     */
    public function useArticulovariantereordenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinArticulovariantereorden($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Articulovariantereorden', 'ArticulovariantereordenQuery');
    }

    /**
     * Filter the query by a related Lugarinventario object
     *
     * @param   Lugarinventario|PropelObjectCollection $lugarinventario  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LugarQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLugarinventario($lugarinventario, $comparison = null)
    {
        if ($lugarinventario instanceof Lugarinventario) {
            return $this
                ->addUsingAlias(LugarPeer::IDLUGAR, $lugarinventario->getIdlugar(), $comparison);
        } elseif ($lugarinventario instanceof PropelObjectCollection) {
            return $this
                ->useLugarinventarioQuery()
                ->filterByPrimaryKeys($lugarinventario->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLugarinventario() only accepts arguments of type Lugarinventario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Lugarinventario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LugarQuery The current query, for fluid interface
     */
    public function joinLugarinventario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Lugarinventario');

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
            $this->addJoinObject($join, 'Lugarinventario');
        }

        return $this;
    }

    /**
     * Use the Lugarinventario relation Lugarinventario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LugarinventarioQuery A secondary query class using the current class as primary query
     */
    public function useLugarinventarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLugarinventario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Lugarinventario', 'LugarinventarioQuery');
    }

    /**
     * Filter the query by a related Traspaso object
     *
     * @param   Traspaso|PropelObjectCollection $traspaso  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LugarQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTraspasoRelatedByIdlugardestinatario($traspaso, $comparison = null)
    {
        if ($traspaso instanceof Traspaso) {
            return $this
                ->addUsingAlias(LugarPeer::IDLUGAR, $traspaso->getIdlugardestinatario(), $comparison);
        } elseif ($traspaso instanceof PropelObjectCollection) {
            return $this
                ->useTraspasoRelatedByIdlugardestinatarioQuery()
                ->filterByPrimaryKeys($traspaso->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTraspasoRelatedByIdlugardestinatario() only accepts arguments of type Traspaso or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TraspasoRelatedByIdlugardestinatario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LugarQuery The current query, for fluid interface
     */
    public function joinTraspasoRelatedByIdlugardestinatario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TraspasoRelatedByIdlugardestinatario');

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
            $this->addJoinObject($join, 'TraspasoRelatedByIdlugardestinatario');
        }

        return $this;
    }

    /**
     * Use the TraspasoRelatedByIdlugardestinatario relation Traspaso object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TraspasoQuery A secondary query class using the current class as primary query
     */
    public function useTraspasoRelatedByIdlugardestinatarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTraspasoRelatedByIdlugardestinatario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TraspasoRelatedByIdlugardestinatario', 'TraspasoQuery');
    }

    /**
     * Filter the query by a related Traspaso object
     *
     * @param   Traspaso|PropelObjectCollection $traspaso  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LugarQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTraspasoRelatedByIdlugarremitente($traspaso, $comparison = null)
    {
        if ($traspaso instanceof Traspaso) {
            return $this
                ->addUsingAlias(LugarPeer::IDLUGAR, $traspaso->getIdlugarremitente(), $comparison);
        } elseif ($traspaso instanceof PropelObjectCollection) {
            return $this
                ->useTraspasoRelatedByIdlugarremitenteQuery()
                ->filterByPrimaryKeys($traspaso->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTraspasoRelatedByIdlugarremitente() only accepts arguments of type Traspaso or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TraspasoRelatedByIdlugarremitente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LugarQuery The current query, for fluid interface
     */
    public function joinTraspasoRelatedByIdlugarremitente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TraspasoRelatedByIdlugarremitente');

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
            $this->addJoinObject($join, 'TraspasoRelatedByIdlugarremitente');
        }

        return $this;
    }

    /**
     * Use the TraspasoRelatedByIdlugarremitente relation Traspaso object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TraspasoQuery A secondary query class using the current class as primary query
     */
    public function useTraspasoRelatedByIdlugarremitenteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTraspasoRelatedByIdlugarremitente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TraspasoRelatedByIdlugarremitente', 'TraspasoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Lugar $lugar Object to remove from the list of results
     *
     * @return LugarQuery The current query, for fluid interface
     */
    public function prune($lugar = null)
    {
        if ($lugar) {
            $this->addUsingAlias(LugarPeer::IDLUGAR, $lugar->getIdlugar(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
