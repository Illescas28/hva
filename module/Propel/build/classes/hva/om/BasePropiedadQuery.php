<?php


/**
 * Base class that represents a query for the 'propiedad' table.
 *
 *
 *
 * @method PropiedadQuery orderByIdpropiedad($order = Criteria::ASC) Order by the idpropiedad column
 * @method PropiedadQuery orderByIdarticulo($order = Criteria::ASC) Order by the idarticulo column
 * @method PropiedadQuery orderByPropiedadNombre($order = Criteria::ASC) Order by the propiedad_nombre column
 *
 * @method PropiedadQuery groupByIdpropiedad() Group by the idpropiedad column
 * @method PropiedadQuery groupByIdarticulo() Group by the idarticulo column
 * @method PropiedadQuery groupByPropiedadNombre() Group by the propiedad_nombre column
 *
 * @method PropiedadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PropiedadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PropiedadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PropiedadQuery leftJoinArticulo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Articulo relation
 * @method PropiedadQuery rightJoinArticulo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Articulo relation
 * @method PropiedadQuery innerJoinArticulo($relationAlias = null) Adds a INNER JOIN clause to the query using the Articulo relation
 *
 * @method PropiedadQuery leftJoinArticulovariantevalor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Articulovariantevalor relation
 * @method PropiedadQuery rightJoinArticulovariantevalor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Articulovariantevalor relation
 * @method PropiedadQuery innerJoinArticulovariantevalor($relationAlias = null) Adds a INNER JOIN clause to the query using the Articulovariantevalor relation
 *
 * @method PropiedadQuery leftJoinPropiedadvalor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Propiedadvalor relation
 * @method PropiedadQuery rightJoinPropiedadvalor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Propiedadvalor relation
 * @method PropiedadQuery innerJoinPropiedadvalor($relationAlias = null) Adds a INNER JOIN clause to the query using the Propiedadvalor relation
 *
 * @method Propiedad findOne(PropelPDO $con = null) Return the first Propiedad matching the query
 * @method Propiedad findOneOrCreate(PropelPDO $con = null) Return the first Propiedad matching the query, or a new Propiedad object populated from the query conditions when no match is found
 *
 * @method Propiedad findOneByIdarticulo(int $idarticulo) Return the first Propiedad filtered by the idarticulo column
 * @method Propiedad findOneByPropiedadNombre(string $propiedad_nombre) Return the first Propiedad filtered by the propiedad_nombre column
 *
 * @method array findByIdpropiedad(int $idpropiedad) Return Propiedad objects filtered by the idpropiedad column
 * @method array findByIdarticulo(int $idarticulo) Return Propiedad objects filtered by the idarticulo column
 * @method array findByPropiedadNombre(string $propiedad_nombre) Return Propiedad objects filtered by the propiedad_nombre column
 *
 * @package    propel.generator.hva.om
 */
abstract class BasePropiedadQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePropiedadQuery object.
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
            $modelName = 'Propiedad';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PropiedadQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PropiedadQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PropiedadQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PropiedadQuery) {
            return $criteria;
        }
        $query = new PropiedadQuery(null, null, $modelAlias);

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
     * @return   Propiedad|Propiedad[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PropiedadPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PropiedadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Propiedad A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdpropiedad($key, $con = null)
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
     * @return                 Propiedad A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idpropiedad`, `idarticulo`, `propiedad_nombre` FROM `propiedad` WHERE `idpropiedad` = :p0';
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
            $obj = new Propiedad();
            $obj->hydrate($row);
            PropiedadPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Propiedad|Propiedad[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Propiedad[]|mixed the list of results, formatted by the current formatter
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
     * @return PropiedadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PropiedadPeer::IDPROPIEDAD, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PropiedadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PropiedadPeer::IDPROPIEDAD, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idpropiedad column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpropiedad(1234); // WHERE idpropiedad = 1234
     * $query->filterByIdpropiedad(array(12, 34)); // WHERE idpropiedad IN (12, 34)
     * $query->filterByIdpropiedad(array('min' => 12)); // WHERE idpropiedad >= 12
     * $query->filterByIdpropiedad(array('max' => 12)); // WHERE idpropiedad <= 12
     * </code>
     *
     * @param     mixed $idpropiedad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PropiedadQuery The current query, for fluid interface
     */
    public function filterByIdpropiedad($idpropiedad = null, $comparison = null)
    {
        if (is_array($idpropiedad)) {
            $useMinMax = false;
            if (isset($idpropiedad['min'])) {
                $this->addUsingAlias(PropiedadPeer::IDPROPIEDAD, $idpropiedad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpropiedad['max'])) {
                $this->addUsingAlias(PropiedadPeer::IDPROPIEDAD, $idpropiedad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PropiedadPeer::IDPROPIEDAD, $idpropiedad, $comparison);
    }

    /**
     * Filter the query on the idarticulo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdarticulo(1234); // WHERE idarticulo = 1234
     * $query->filterByIdarticulo(array(12, 34)); // WHERE idarticulo IN (12, 34)
     * $query->filterByIdarticulo(array('min' => 12)); // WHERE idarticulo >= 12
     * $query->filterByIdarticulo(array('max' => 12)); // WHERE idarticulo <= 12
     * </code>
     *
     * @see       filterByArticulo()
     *
     * @param     mixed $idarticulo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PropiedadQuery The current query, for fluid interface
     */
    public function filterByIdarticulo($idarticulo = null, $comparison = null)
    {
        if (is_array($idarticulo)) {
            $useMinMax = false;
            if (isset($idarticulo['min'])) {
                $this->addUsingAlias(PropiedadPeer::IDARTICULO, $idarticulo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idarticulo['max'])) {
                $this->addUsingAlias(PropiedadPeer::IDARTICULO, $idarticulo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PropiedadPeer::IDARTICULO, $idarticulo, $comparison);
    }

    /**
     * Filter the query on the propiedad_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByPropiedadNombre('fooValue');   // WHERE propiedad_nombre = 'fooValue'
     * $query->filterByPropiedadNombre('%fooValue%'); // WHERE propiedad_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $propiedadNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PropiedadQuery The current query, for fluid interface
     */
    public function filterByPropiedadNombre($propiedadNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($propiedadNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $propiedadNombre)) {
                $propiedadNombre = str_replace('*', '%', $propiedadNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PropiedadPeer::PROPIEDAD_NOMBRE, $propiedadNombre, $comparison);
    }

    /**
     * Filter the query by a related Articulo object
     *
     * @param   Articulo|PropelObjectCollection $articulo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PropiedadQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByArticulo($articulo, $comparison = null)
    {
        if ($articulo instanceof Articulo) {
            return $this
                ->addUsingAlias(PropiedadPeer::IDARTICULO, $articulo->getIdarticulo(), $comparison);
        } elseif ($articulo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PropiedadPeer::IDARTICULO, $articulo->toKeyValue('PrimaryKey', 'Idarticulo'), $comparison);
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
     * @return PropiedadQuery The current query, for fluid interface
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
     * Filter the query by a related Articulovariantevalor object
     *
     * @param   Articulovariantevalor|PropelObjectCollection $articulovariantevalor  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PropiedadQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByArticulovariantevalor($articulovariantevalor, $comparison = null)
    {
        if ($articulovariantevalor instanceof Articulovariantevalor) {
            return $this
                ->addUsingAlias(PropiedadPeer::IDPROPIEDAD, $articulovariantevalor->getIdpropiedad(), $comparison);
        } elseif ($articulovariantevalor instanceof PropelObjectCollection) {
            return $this
                ->useArticulovariantevalorQuery()
                ->filterByPrimaryKeys($articulovariantevalor->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByArticulovariantevalor() only accepts arguments of type Articulovariantevalor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Articulovariantevalor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PropiedadQuery The current query, for fluid interface
     */
    public function joinArticulovariantevalor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Articulovariantevalor');

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
            $this->addJoinObject($join, 'Articulovariantevalor');
        }

        return $this;
    }

    /**
     * Use the Articulovariantevalor relation Articulovariantevalor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ArticulovariantevalorQuery A secondary query class using the current class as primary query
     */
    public function useArticulovariantevalorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinArticulovariantevalor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Articulovariantevalor', 'ArticulovariantevalorQuery');
    }

    /**
     * Filter the query by a related Propiedadvalor object
     *
     * @param   Propiedadvalor|PropelObjectCollection $propiedadvalor  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PropiedadQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPropiedadvalor($propiedadvalor, $comparison = null)
    {
        if ($propiedadvalor instanceof Propiedadvalor) {
            return $this
                ->addUsingAlias(PropiedadPeer::IDPROPIEDAD, $propiedadvalor->getIdpropiedad(), $comparison);
        } elseif ($propiedadvalor instanceof PropelObjectCollection) {
            return $this
                ->usePropiedadvalorQuery()
                ->filterByPrimaryKeys($propiedadvalor->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPropiedadvalor() only accepts arguments of type Propiedadvalor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Propiedadvalor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PropiedadQuery The current query, for fluid interface
     */
    public function joinPropiedadvalor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Propiedadvalor');

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
            $this->addJoinObject($join, 'Propiedadvalor');
        }

        return $this;
    }

    /**
     * Use the Propiedadvalor relation Propiedadvalor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PropiedadvalorQuery A secondary query class using the current class as primary query
     */
    public function usePropiedadvalorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPropiedadvalor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Propiedadvalor', 'PropiedadvalorQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Propiedad $propiedad Object to remove from the list of results
     *
     * @return PropiedadQuery The current query, for fluid interface
     */
    public function prune($propiedad = null)
    {
        if ($propiedad) {
            $this->addUsingAlias(PropiedadPeer::IDPROPIEDAD, $propiedad->getIdpropiedad(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
