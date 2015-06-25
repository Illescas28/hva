<?php


/**
 * Base class that represents a query for the 'lugarinventario' table.
 *
 *
 *
 * @method LugarinventarioQuery orderByIdlugarinventario($order = Criteria::ASC) Order by the idlugarinventario column
 * @method LugarinventarioQuery orderByIdlugar($order = Criteria::ASC) Order by the idlugar column
 * @method LugarinventarioQuery orderByIdordencompradetalle($order = Criteria::ASC) Order by the idordencompradetalle column
 * @method LugarinventarioQuery orderByLugarinventarioCantidad($order = Criteria::ASC) Order by the lugarinventario_cantidad column
 *
 * @method LugarinventarioQuery groupByIdlugarinventario() Group by the idlugarinventario column
 * @method LugarinventarioQuery groupByIdlugar() Group by the idlugar column
 * @method LugarinventarioQuery groupByIdordencompradetalle() Group by the idordencompradetalle column
 * @method LugarinventarioQuery groupByLugarinventarioCantidad() Group by the lugarinventario_cantidad column
 *
 * @method LugarinventarioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LugarinventarioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LugarinventarioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method LugarinventarioQuery leftJoinLugar($relationAlias = null) Adds a LEFT JOIN clause to the query using the Lugar relation
 * @method LugarinventarioQuery rightJoinLugar($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Lugar relation
 * @method LugarinventarioQuery innerJoinLugar($relationAlias = null) Adds a INNER JOIN clause to the query using the Lugar relation
 *
 * @method LugarinventarioQuery leftJoinOrdencompradetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ordencompradetalle relation
 * @method LugarinventarioQuery rightJoinOrdencompradetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ordencompradetalle relation
 * @method LugarinventarioQuery innerJoinOrdencompradetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Ordencompradetalle relation
 *
 * @method LugarinventarioQuery leftJoinCargoadmision($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cargoadmision relation
 * @method LugarinventarioQuery rightJoinCargoadmision($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cargoadmision relation
 * @method LugarinventarioQuery innerJoinCargoadmision($relationAlias = null) Adds a INNER JOIN clause to the query using the Cargoadmision relation
 *
 * @method LugarinventarioQuery leftJoinCargoconsulta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cargoconsulta relation
 * @method LugarinventarioQuery rightJoinCargoconsulta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cargoconsulta relation
 * @method LugarinventarioQuery innerJoinCargoconsulta($relationAlias = null) Adds a INNER JOIN clause to the query using the Cargoconsulta relation
 *
 * @method LugarinventarioQuery leftJoinCargoventa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cargoventa relation
 * @method LugarinventarioQuery rightJoinCargoventa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cargoventa relation
 * @method LugarinventarioQuery innerJoinCargoventa($relationAlias = null) Adds a INNER JOIN clause to the query using the Cargoventa relation
 *
 * @method LugarinventarioQuery leftJoinTraspasodetalles($relationAlias = null) Adds a LEFT JOIN clause to the query using the Traspasodetalles relation
 * @method LugarinventarioQuery rightJoinTraspasodetalles($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Traspasodetalles relation
 * @method LugarinventarioQuery innerJoinTraspasodetalles($relationAlias = null) Adds a INNER JOIN clause to the query using the Traspasodetalles relation
 *
 * @method Lugarinventario findOne(PropelPDO $con = null) Return the first Lugarinventario matching the query
 * @method Lugarinventario findOneOrCreate(PropelPDO $con = null) Return the first Lugarinventario matching the query, or a new Lugarinventario object populated from the query conditions when no match is found
 *
 * @method Lugarinventario findOneByIdlugar(int $idlugar) Return the first Lugarinventario filtered by the idlugar column
 * @method Lugarinventario findOneByIdordencompradetalle(int $idordencompradetalle) Return the first Lugarinventario filtered by the idordencompradetalle column
 * @method Lugarinventario findOneByLugarinventarioCantidad(string $lugarinventario_cantidad) Return the first Lugarinventario filtered by the lugarinventario_cantidad column
 *
 * @method array findByIdlugarinventario(int $idlugarinventario) Return Lugarinventario objects filtered by the idlugarinventario column
 * @method array findByIdlugar(int $idlugar) Return Lugarinventario objects filtered by the idlugar column
 * @method array findByIdordencompradetalle(int $idordencompradetalle) Return Lugarinventario objects filtered by the idordencompradetalle column
 * @method array findByLugarinventarioCantidad(string $lugarinventario_cantidad) Return Lugarinventario objects filtered by the lugarinventario_cantidad column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseLugarinventarioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLugarinventarioQuery object.
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
            $modelName = 'Lugarinventario';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LugarinventarioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LugarinventarioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LugarinventarioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LugarinventarioQuery) {
            return $criteria;
        }
        $query = new LugarinventarioQuery(null, null, $modelAlias);

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
     * @return   Lugarinventario|Lugarinventario[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LugarinventarioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LugarinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Lugarinventario A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdlugarinventario($key, $con = null)
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
     * @return                 Lugarinventario A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idlugarinventario`, `idlugar`, `idordencompradetalle`, `lugarinventario_cantidad` FROM `lugarinventario` WHERE `idlugarinventario` = :p0';
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
            $obj = new Lugarinventario();
            $obj->hydrate($row);
            LugarinventarioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Lugarinventario|Lugarinventario[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Lugarinventario[]|mixed the list of results, formatted by the current formatter
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
     * @return LugarinventarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LugarinventarioPeer::IDLUGARINVENTARIO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LugarinventarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LugarinventarioPeer::IDLUGARINVENTARIO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idlugarinventario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdlugarinventario(1234); // WHERE idlugarinventario = 1234
     * $query->filterByIdlugarinventario(array(12, 34)); // WHERE idlugarinventario IN (12, 34)
     * $query->filterByIdlugarinventario(array('min' => 12)); // WHERE idlugarinventario >= 12
     * $query->filterByIdlugarinventario(array('max' => 12)); // WHERE idlugarinventario <= 12
     * </code>
     *
     * @param     mixed $idlugarinventario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LugarinventarioQuery The current query, for fluid interface
     */
    public function filterByIdlugarinventario($idlugarinventario = null, $comparison = null)
    {
        if (is_array($idlugarinventario)) {
            $useMinMax = false;
            if (isset($idlugarinventario['min'])) {
                $this->addUsingAlias(LugarinventarioPeer::IDLUGARINVENTARIO, $idlugarinventario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idlugarinventario['max'])) {
                $this->addUsingAlias(LugarinventarioPeer::IDLUGARINVENTARIO, $idlugarinventario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LugarinventarioPeer::IDLUGARINVENTARIO, $idlugarinventario, $comparison);
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
     * @return LugarinventarioQuery The current query, for fluid interface
     */
    public function filterByIdlugar($idlugar = null, $comparison = null)
    {
        if (is_array($idlugar)) {
            $useMinMax = false;
            if (isset($idlugar['min'])) {
                $this->addUsingAlias(LugarinventarioPeer::IDLUGAR, $idlugar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idlugar['max'])) {
                $this->addUsingAlias(LugarinventarioPeer::IDLUGAR, $idlugar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LugarinventarioPeer::IDLUGAR, $idlugar, $comparison);
    }

    /**
     * Filter the query on the idordencompradetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdordencompradetalle(1234); // WHERE idordencompradetalle = 1234
     * $query->filterByIdordencompradetalle(array(12, 34)); // WHERE idordencompradetalle IN (12, 34)
     * $query->filterByIdordencompradetalle(array('min' => 12)); // WHERE idordencompradetalle >= 12
     * $query->filterByIdordencompradetalle(array('max' => 12)); // WHERE idordencompradetalle <= 12
     * </code>
     *
     * @see       filterByOrdencompradetalle()
     *
     * @param     mixed $idordencompradetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LugarinventarioQuery The current query, for fluid interface
     */
    public function filterByIdordencompradetalle($idordencompradetalle = null, $comparison = null)
    {
        if (is_array($idordencompradetalle)) {
            $useMinMax = false;
            if (isset($idordencompradetalle['min'])) {
                $this->addUsingAlias(LugarinventarioPeer::IDORDENCOMPRADETALLE, $idordencompradetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idordencompradetalle['max'])) {
                $this->addUsingAlias(LugarinventarioPeer::IDORDENCOMPRADETALLE, $idordencompradetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LugarinventarioPeer::IDORDENCOMPRADETALLE, $idordencompradetalle, $comparison);
    }

    /**
     * Filter the query on the lugarinventario_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByLugarinventarioCantidad(1234); // WHERE lugarinventario_cantidad = 1234
     * $query->filterByLugarinventarioCantidad(array(12, 34)); // WHERE lugarinventario_cantidad IN (12, 34)
     * $query->filterByLugarinventarioCantidad(array('min' => 12)); // WHERE lugarinventario_cantidad >= 12
     * $query->filterByLugarinventarioCantidad(array('max' => 12)); // WHERE lugarinventario_cantidad <= 12
     * </code>
     *
     * @param     mixed $lugarinventarioCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LugarinventarioQuery The current query, for fluid interface
     */
    public function filterByLugarinventarioCantidad($lugarinventarioCantidad = null, $comparison = null)
    {
        if (is_array($lugarinventarioCantidad)) {
            $useMinMax = false;
            if (isset($lugarinventarioCantidad['min'])) {
                $this->addUsingAlias(LugarinventarioPeer::LUGARINVENTARIO_CANTIDAD, $lugarinventarioCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lugarinventarioCantidad['max'])) {
                $this->addUsingAlias(LugarinventarioPeer::LUGARINVENTARIO_CANTIDAD, $lugarinventarioCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LugarinventarioPeer::LUGARINVENTARIO_CANTIDAD, $lugarinventarioCantidad, $comparison);
    }

    /**
     * Filter the query by a related Lugar object
     *
     * @param   Lugar|PropelObjectCollection $lugar The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LugarinventarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLugar($lugar, $comparison = null)
    {
        if ($lugar instanceof Lugar) {
            return $this
                ->addUsingAlias(LugarinventarioPeer::IDLUGAR, $lugar->getIdlugar(), $comparison);
        } elseif ($lugar instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LugarinventarioPeer::IDLUGAR, $lugar->toKeyValue('PrimaryKey', 'Idlugar'), $comparison);
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
     * @return LugarinventarioQuery The current query, for fluid interface
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
     * Filter the query by a related Ordencompradetalle object
     *
     * @param   Ordencompradetalle|PropelObjectCollection $ordencompradetalle The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LugarinventarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdencompradetalle($ordencompradetalle, $comparison = null)
    {
        if ($ordencompradetalle instanceof Ordencompradetalle) {
            return $this
                ->addUsingAlias(LugarinventarioPeer::IDORDENCOMPRADETALLE, $ordencompradetalle->getIdordencompradetalle(), $comparison);
        } elseif ($ordencompradetalle instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LugarinventarioPeer::IDORDENCOMPRADETALLE, $ordencompradetalle->toKeyValue('PrimaryKey', 'Idordencompradetalle'), $comparison);
        } else {
            throw new PropelException('filterByOrdencompradetalle() only accepts arguments of type Ordencompradetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ordencompradetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LugarinventarioQuery The current query, for fluid interface
     */
    public function joinOrdencompradetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ordencompradetalle');

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
            $this->addJoinObject($join, 'Ordencompradetalle');
        }

        return $this;
    }

    /**
     * Use the Ordencompradetalle relation Ordencompradetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OrdencompradetalleQuery A secondary query class using the current class as primary query
     */
    public function useOrdencompradetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrdencompradetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ordencompradetalle', 'OrdencompradetalleQuery');
    }

    /**
     * Filter the query by a related Cargoadmision object
     *
     * @param   Cargoadmision|PropelObjectCollection $cargoadmision  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LugarinventarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCargoadmision($cargoadmision, $comparison = null)
    {
        if ($cargoadmision instanceof Cargoadmision) {
            return $this
                ->addUsingAlias(LugarinventarioPeer::IDLUGARINVENTARIO, $cargoadmision->getIdlugarinventario(), $comparison);
        } elseif ($cargoadmision instanceof PropelObjectCollection) {
            return $this
                ->useCargoadmisionQuery()
                ->filterByPrimaryKeys($cargoadmision->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCargoadmision() only accepts arguments of type Cargoadmision or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cargoadmision relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LugarinventarioQuery The current query, for fluid interface
     */
    public function joinCargoadmision($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cargoadmision');

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
            $this->addJoinObject($join, 'Cargoadmision');
        }

        return $this;
    }

    /**
     * Use the Cargoadmision relation Cargoadmision object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CargoadmisionQuery A secondary query class using the current class as primary query
     */
    public function useCargoadmisionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCargoadmision($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cargoadmision', 'CargoadmisionQuery');
    }

    /**
     * Filter the query by a related Cargoconsulta object
     *
     * @param   Cargoconsulta|PropelObjectCollection $cargoconsulta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LugarinventarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCargoconsulta($cargoconsulta, $comparison = null)
    {
        if ($cargoconsulta instanceof Cargoconsulta) {
            return $this
                ->addUsingAlias(LugarinventarioPeer::IDLUGARINVENTARIO, $cargoconsulta->getIdlugarinventario(), $comparison);
        } elseif ($cargoconsulta instanceof PropelObjectCollection) {
            return $this
                ->useCargoconsultaQuery()
                ->filterByPrimaryKeys($cargoconsulta->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCargoconsulta() only accepts arguments of type Cargoconsulta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cargoconsulta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LugarinventarioQuery The current query, for fluid interface
     */
    public function joinCargoconsulta($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cargoconsulta');

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
            $this->addJoinObject($join, 'Cargoconsulta');
        }

        return $this;
    }

    /**
     * Use the Cargoconsulta relation Cargoconsulta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CargoconsultaQuery A secondary query class using the current class as primary query
     */
    public function useCargoconsultaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCargoconsulta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cargoconsulta', 'CargoconsultaQuery');
    }

    /**
     * Filter the query by a related Cargoventa object
     *
     * @param   Cargoventa|PropelObjectCollection $cargoventa  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LugarinventarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCargoventa($cargoventa, $comparison = null)
    {
        if ($cargoventa instanceof Cargoventa) {
            return $this
                ->addUsingAlias(LugarinventarioPeer::IDLUGARINVENTARIO, $cargoventa->getIdlugarinventario(), $comparison);
        } elseif ($cargoventa instanceof PropelObjectCollection) {
            return $this
                ->useCargoventaQuery()
                ->filterByPrimaryKeys($cargoventa->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCargoventa() only accepts arguments of type Cargoventa or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cargoventa relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LugarinventarioQuery The current query, for fluid interface
     */
    public function joinCargoventa($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cargoventa');

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
            $this->addJoinObject($join, 'Cargoventa');
        }

        return $this;
    }

    /**
     * Use the Cargoventa relation Cargoventa object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CargoventaQuery A secondary query class using the current class as primary query
     */
    public function useCargoventaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCargoventa($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cargoventa', 'CargoventaQuery');
    }

    /**
     * Filter the query by a related Traspasodetalles object
     *
     * @param   Traspasodetalles|PropelObjectCollection $traspasodetalles  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 LugarinventarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTraspasodetalles($traspasodetalles, $comparison = null)
    {
        if ($traspasodetalles instanceof Traspasodetalles) {
            return $this
                ->addUsingAlias(LugarinventarioPeer::IDLUGARINVENTARIO, $traspasodetalles->getIdlugarinventario(), $comparison);
        } elseif ($traspasodetalles instanceof PropelObjectCollection) {
            return $this
                ->useTraspasodetallesQuery()
                ->filterByPrimaryKeys($traspasodetalles->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTraspasodetalles() only accepts arguments of type Traspasodetalles or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Traspasodetalles relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LugarinventarioQuery The current query, for fluid interface
     */
    public function joinTraspasodetalles($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Traspasodetalles');

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
            $this->addJoinObject($join, 'Traspasodetalles');
        }

        return $this;
    }

    /**
     * Use the Traspasodetalles relation Traspasodetalles object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TraspasodetallesQuery A secondary query class using the current class as primary query
     */
    public function useTraspasodetallesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTraspasodetalles($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Traspasodetalles', 'TraspasodetallesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Lugarinventario $lugarinventario Object to remove from the list of results
     *
     * @return LugarinventarioQuery The current query, for fluid interface
     */
    public function prune($lugarinventario = null)
    {
        if ($lugarinventario) {
            $this->addUsingAlias(LugarinventarioPeer::IDLUGARINVENTARIO, $lugarinventario->getIdlugarinventario(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
