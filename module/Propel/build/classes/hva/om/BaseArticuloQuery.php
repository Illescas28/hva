<?php


/**
 * Base class that represents a query for the 'articulo' table.
 *
 *
 *
 * @method ArticuloQuery orderByIdarticulo($order = Criteria::ASC) Order by the idarticulo column
 * @method ArticuloQuery orderByIdtipo($order = Criteria::ASC) Order by the idtipo column
 * @method ArticuloQuery orderByArticuloNombre($order = Criteria::ASC) Order by the articulo_nombre column
 * @method ArticuloQuery orderByArticuloDescripcion($order = Criteria::ASC) Order by the articulo_descripcion column
 *
 * @method ArticuloQuery groupByIdarticulo() Group by the idarticulo column
 * @method ArticuloQuery groupByIdtipo() Group by the idtipo column
 * @method ArticuloQuery groupByArticuloNombre() Group by the articulo_nombre column
 * @method ArticuloQuery groupByArticuloDescripcion() Group by the articulo_descripcion column
 *
 * @method ArticuloQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ArticuloQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ArticuloQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ArticuloQuery leftJoinTipo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tipo relation
 * @method ArticuloQuery rightJoinTipo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tipo relation
 * @method ArticuloQuery innerJoinTipo($relationAlias = null) Adds a INNER JOIN clause to the query using the Tipo relation
 *
 * @method ArticuloQuery leftJoinArticulovariante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Articulovariante relation
 * @method ArticuloQuery rightJoinArticulovariante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Articulovariante relation
 * @method ArticuloQuery innerJoinArticulovariante($relationAlias = null) Adds a INNER JOIN clause to the query using the Articulovariante relation
 *
 * @method ArticuloQuery leftJoinArticulovariantevalor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Articulovariantevalor relation
 * @method ArticuloQuery rightJoinArticulovariantevalor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Articulovariantevalor relation
 * @method ArticuloQuery innerJoinArticulovariantevalor($relationAlias = null) Adds a INNER JOIN clause to the query using the Articulovariantevalor relation
 *
 * @method ArticuloQuery leftJoinPropiedad($relationAlias = null) Adds a LEFT JOIN clause to the query using the Propiedad relation
 * @method ArticuloQuery rightJoinPropiedad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Propiedad relation
 * @method ArticuloQuery innerJoinPropiedad($relationAlias = null) Adds a INNER JOIN clause to the query using the Propiedad relation
 *
 * @method ArticuloQuery leftJoinPropiedadvalor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Propiedadvalor relation
 * @method ArticuloQuery rightJoinPropiedadvalor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Propiedadvalor relation
 * @method ArticuloQuery innerJoinPropiedadvalor($relationAlias = null) Adds a INNER JOIN clause to the query using the Propiedadvalor relation
 *
 * @method Articulo findOne(PropelPDO $con = null) Return the first Articulo matching the query
 * @method Articulo findOneOrCreate(PropelPDO $con = null) Return the first Articulo matching the query, or a new Articulo object populated from the query conditions when no match is found
 *
 * @method Articulo findOneByIdtipo(int $idtipo) Return the first Articulo filtered by the idtipo column
 * @method Articulo findOneByArticuloNombre(string $articulo_nombre) Return the first Articulo filtered by the articulo_nombre column
 * @method Articulo findOneByArticuloDescripcion(string $articulo_descripcion) Return the first Articulo filtered by the articulo_descripcion column
 *
 * @method array findByIdarticulo(int $idarticulo) Return Articulo objects filtered by the idarticulo column
 * @method array findByIdtipo(int $idtipo) Return Articulo objects filtered by the idtipo column
 * @method array findByArticuloNombre(string $articulo_nombre) Return Articulo objects filtered by the articulo_nombre column
 * @method array findByArticuloDescripcion(string $articulo_descripcion) Return Articulo objects filtered by the articulo_descripcion column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseArticuloQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseArticuloQuery object.
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
            $modelName = 'Articulo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ArticuloQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ArticuloQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ArticuloQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ArticuloQuery) {
            return $criteria;
        }
        $query = new ArticuloQuery(null, null, $modelAlias);

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
     * @return   Articulo|Articulo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ArticuloPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ArticuloPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Articulo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdarticulo($key, $con = null)
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
     * @return                 Articulo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idarticulo`, `idtipo`, `articulo_nombre`, `articulo_descripcion` FROM `articulo` WHERE `idarticulo` = :p0';
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
            $obj = new Articulo();
            $obj->hydrate($row);
            ArticuloPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Articulo|Articulo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Articulo[]|mixed the list of results, formatted by the current formatter
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
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ArticuloPeer::IDARTICULO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ArticuloPeer::IDARTICULO, $keys, Criteria::IN);
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
     * @param     mixed $idarticulo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByIdarticulo($idarticulo = null, $comparison = null)
    {
        if (is_array($idarticulo)) {
            $useMinMax = false;
            if (isset($idarticulo['min'])) {
                $this->addUsingAlias(ArticuloPeer::IDARTICULO, $idarticulo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idarticulo['max'])) {
                $this->addUsingAlias(ArticuloPeer::IDARTICULO, $idarticulo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::IDARTICULO, $idarticulo, $comparison);
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
     * @see       filterByTipo()
     *
     * @param     mixed $idtipo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByIdtipo($idtipo = null, $comparison = null)
    {
        if (is_array($idtipo)) {
            $useMinMax = false;
            if (isset($idtipo['min'])) {
                $this->addUsingAlias(ArticuloPeer::IDTIPO, $idtipo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtipo['max'])) {
                $this->addUsingAlias(ArticuloPeer::IDTIPO, $idtipo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::IDTIPO, $idtipo, $comparison);
    }

    /**
     * Filter the query on the articulo_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByArticuloNombre('fooValue');   // WHERE articulo_nombre = 'fooValue'
     * $query->filterByArticuloNombre('%fooValue%'); // WHERE articulo_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $articuloNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByArticuloNombre($articuloNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($articuloNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $articuloNombre)) {
                $articuloNombre = str_replace('*', '%', $articuloNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::ARTICULO_NOMBRE, $articuloNombre, $comparison);
    }

    /**
     * Filter the query on the articulo_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByArticuloDescripcion('fooValue');   // WHERE articulo_descripcion = 'fooValue'
     * $query->filterByArticuloDescripcion('%fooValue%'); // WHERE articulo_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $articuloDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function filterByArticuloDescripcion($articuloDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($articuloDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $articuloDescripcion)) {
                $articuloDescripcion = str_replace('*', '%', $articuloDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ArticuloPeer::ARTICULO_DESCRIPCION, $articuloDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Tipo object
     *
     * @param   Tipo|PropelObjectCollection $tipo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticuloQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTipo($tipo, $comparison = null)
    {
        if ($tipo instanceof Tipo) {
            return $this
                ->addUsingAlias(ArticuloPeer::IDTIPO, $tipo->getIdtipo(), $comparison);
        } elseif ($tipo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArticuloPeer::IDTIPO, $tipo->toKeyValue('PrimaryKey', 'Idtipo'), $comparison);
        } else {
            throw new PropelException('filterByTipo() only accepts arguments of type Tipo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tipo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function joinTipo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Tipo');

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
            $this->addJoinObject($join, 'Tipo');
        }

        return $this;
    }

    /**
     * Use the Tipo relation Tipo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TipoQuery A secondary query class using the current class as primary query
     */
    public function useTipoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTipo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tipo', 'TipoQuery');
    }

    /**
     * Filter the query by a related Articulovariante object
     *
     * @param   Articulovariante|PropelObjectCollection $articulovariante  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticuloQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByArticulovariante($articulovariante, $comparison = null)
    {
        if ($articulovariante instanceof Articulovariante) {
            return $this
                ->addUsingAlias(ArticuloPeer::IDARTICULO, $articulovariante->getIdarticulo(), $comparison);
        } elseif ($articulovariante instanceof PropelObjectCollection) {
            return $this
                ->useArticulovarianteQuery()
                ->filterByPrimaryKeys($articulovariante->getPrimaryKeys())
                ->endUse();
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
     * @return ArticuloQuery The current query, for fluid interface
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
     * Filter the query by a related Articulovariantevalor object
     *
     * @param   Articulovariantevalor|PropelObjectCollection $articulovariantevalor  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticuloQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByArticulovariantevalor($articulovariantevalor, $comparison = null)
    {
        if ($articulovariantevalor instanceof Articulovariantevalor) {
            return $this
                ->addUsingAlias(ArticuloPeer::IDARTICULO, $articulovariantevalor->getIdarticulo(), $comparison);
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
     * @return ArticuloQuery The current query, for fluid interface
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
     * Filter the query by a related Propiedad object
     *
     * @param   Propiedad|PropelObjectCollection $propiedad  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticuloQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPropiedad($propiedad, $comparison = null)
    {
        if ($propiedad instanceof Propiedad) {
            return $this
                ->addUsingAlias(ArticuloPeer::IDARTICULO, $propiedad->getIdarticulo(), $comparison);
        } elseif ($propiedad instanceof PropelObjectCollection) {
            return $this
                ->usePropiedadQuery()
                ->filterByPrimaryKeys($propiedad->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPropiedad() only accepts arguments of type Propiedad or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Propiedad relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function joinPropiedad($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Propiedad');

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
            $this->addJoinObject($join, 'Propiedad');
        }

        return $this;
    }

    /**
     * Use the Propiedad relation Propiedad object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PropiedadQuery A secondary query class using the current class as primary query
     */
    public function usePropiedadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPropiedad($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Propiedad', 'PropiedadQuery');
    }

    /**
     * Filter the query by a related Propiedadvalor object
     *
     * @param   Propiedadvalor|PropelObjectCollection $propiedadvalor  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticuloQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPropiedadvalor($propiedadvalor, $comparison = null)
    {
        if ($propiedadvalor instanceof Propiedadvalor) {
            return $this
                ->addUsingAlias(ArticuloPeer::IDARTICULO, $propiedadvalor->getIdarticulo(), $comparison);
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
     * @return ArticuloQuery The current query, for fluid interface
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
     * @param   Articulo $articulo Object to remove from the list of results
     *
     * @return ArticuloQuery The current query, for fluid interface
     */
    public function prune($articulo = null)
    {
        if ($articulo) {
            $this->addUsingAlias(ArticuloPeer::IDARTICULO, $articulo->getIdarticulo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
