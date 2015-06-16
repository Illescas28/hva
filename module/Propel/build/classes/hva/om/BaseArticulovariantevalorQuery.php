<?php


/**
 * Base class that represents a query for the 'articulovariantevalor' table.
 *
 *
 *
 * @method ArticulovariantevalorQuery orderByIdarticulovariantevalor($order = Criteria::ASC) Order by the idarticulovariantevalor column
 * @method ArticulovariantevalorQuery orderByIdarticulo($order = Criteria::ASC) Order by the idarticulo column
 * @method ArticulovariantevalorQuery orderByIdpropiedad($order = Criteria::ASC) Order by the idpropiedad column
 * @method ArticulovariantevalorQuery orderByIdpropiedadvalor($order = Criteria::ASC) Order by the idpropiedadvalor column
 * @method ArticulovariantevalorQuery orderByIdarticulovariante($order = Criteria::ASC) Order by the idarticulovariante column
 *
 * @method ArticulovariantevalorQuery groupByIdarticulovariantevalor() Group by the idarticulovariantevalor column
 * @method ArticulovariantevalorQuery groupByIdarticulo() Group by the idarticulo column
 * @method ArticulovariantevalorQuery groupByIdpropiedad() Group by the idpropiedad column
 * @method ArticulovariantevalorQuery groupByIdpropiedadvalor() Group by the idpropiedadvalor column
 * @method ArticulovariantevalorQuery groupByIdarticulovariante() Group by the idarticulovariante column
 *
 * @method ArticulovariantevalorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ArticulovariantevalorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ArticulovariantevalorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ArticulovariantevalorQuery leftJoinArticulo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Articulo relation
 * @method ArticulovariantevalorQuery rightJoinArticulo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Articulo relation
 * @method ArticulovariantevalorQuery innerJoinArticulo($relationAlias = null) Adds a INNER JOIN clause to the query using the Articulo relation
 *
 * @method ArticulovariantevalorQuery leftJoinArticulovariante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Articulovariante relation
 * @method ArticulovariantevalorQuery rightJoinArticulovariante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Articulovariante relation
 * @method ArticulovariantevalorQuery innerJoinArticulovariante($relationAlias = null) Adds a INNER JOIN clause to the query using the Articulovariante relation
 *
 * @method ArticulovariantevalorQuery leftJoinPropiedad($relationAlias = null) Adds a LEFT JOIN clause to the query using the Propiedad relation
 * @method ArticulovariantevalorQuery rightJoinPropiedad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Propiedad relation
 * @method ArticulovariantevalorQuery innerJoinPropiedad($relationAlias = null) Adds a INNER JOIN clause to the query using the Propiedad relation
 *
 * @method ArticulovariantevalorQuery leftJoinPropiedadvalor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Propiedadvalor relation
 * @method ArticulovariantevalorQuery rightJoinPropiedadvalor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Propiedadvalor relation
 * @method ArticulovariantevalorQuery innerJoinPropiedadvalor($relationAlias = null) Adds a INNER JOIN clause to the query using the Propiedadvalor relation
 *
 * @method Articulovariantevalor findOne(PropelPDO $con = null) Return the first Articulovariantevalor matching the query
 * @method Articulovariantevalor findOneOrCreate(PropelPDO $con = null) Return the first Articulovariantevalor matching the query, or a new Articulovariantevalor object populated from the query conditions when no match is found
 *
 * @method Articulovariantevalor findOneByIdarticulo(int $idarticulo) Return the first Articulovariantevalor filtered by the idarticulo column
 * @method Articulovariantevalor findOneByIdpropiedad(int $idpropiedad) Return the first Articulovariantevalor filtered by the idpropiedad column
 * @method Articulovariantevalor findOneByIdpropiedadvalor(int $idpropiedadvalor) Return the first Articulovariantevalor filtered by the idpropiedadvalor column
 * @method Articulovariantevalor findOneByIdarticulovariante(int $idarticulovariante) Return the first Articulovariantevalor filtered by the idarticulovariante column
 *
 * @method array findByIdarticulovariantevalor(int $idarticulovariantevalor) Return Articulovariantevalor objects filtered by the idarticulovariantevalor column
 * @method array findByIdarticulo(int $idarticulo) Return Articulovariantevalor objects filtered by the idarticulo column
 * @method array findByIdpropiedad(int $idpropiedad) Return Articulovariantevalor objects filtered by the idpropiedad column
 * @method array findByIdpropiedadvalor(int $idpropiedadvalor) Return Articulovariantevalor objects filtered by the idpropiedadvalor column
 * @method array findByIdarticulovariante(int $idarticulovariante) Return Articulovariantevalor objects filtered by the idarticulovariante column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseArticulovariantevalorQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseArticulovariantevalorQuery object.
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
            $modelName = 'Articulovariantevalor';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ArticulovariantevalorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ArticulovariantevalorQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ArticulovariantevalorQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ArticulovariantevalorQuery) {
            return $criteria;
        }
        $query = new ArticulovariantevalorQuery(null, null, $modelAlias);

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
     * @return   Articulovariantevalor|Articulovariantevalor[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ArticulovariantevalorPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantevalorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Articulovariantevalor A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdarticulovariantevalor($key, $con = null)
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
     * @return                 Articulovariantevalor A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idarticulovariantevalor`, `idarticulo`, `idpropiedad`, `idpropiedadvalor`, `idarticulovariante` FROM `articulovariantevalor` WHERE `idarticulovariantevalor` = :p0';
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
            $obj = new Articulovariantevalor();
            $obj->hydrate($row);
            ArticulovariantevalorPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Articulovariantevalor|Articulovariantevalor[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Articulovariantevalor[]|mixed the list of results, formatted by the current formatter
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
     * @return ArticulovariantevalorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ArticulovariantevalorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idarticulovariantevalor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdarticulovariantevalor(1234); // WHERE idarticulovariantevalor = 1234
     * $query->filterByIdarticulovariantevalor(array(12, 34)); // WHERE idarticulovariantevalor IN (12, 34)
     * $query->filterByIdarticulovariantevalor(array('min' => 12)); // WHERE idarticulovariantevalor >= 12
     * $query->filterByIdarticulovariantevalor(array('max' => 12)); // WHERE idarticulovariantevalor <= 12
     * </code>
     *
     * @param     mixed $idarticulovariantevalor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticulovariantevalorQuery The current query, for fluid interface
     */
    public function filterByIdarticulovariantevalor($idarticulovariantevalor = null, $comparison = null)
    {
        if (is_array($idarticulovariantevalor)) {
            $useMinMax = false;
            if (isset($idarticulovariantevalor['min'])) {
                $this->addUsingAlias(ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR, $idarticulovariantevalor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idarticulovariantevalor['max'])) {
                $this->addUsingAlias(ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR, $idarticulovariantevalor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR, $idarticulovariantevalor, $comparison);
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
     * @return ArticulovariantevalorQuery The current query, for fluid interface
     */
    public function filterByIdarticulo($idarticulo = null, $comparison = null)
    {
        if (is_array($idarticulo)) {
            $useMinMax = false;
            if (isset($idarticulo['min'])) {
                $this->addUsingAlias(ArticulovariantevalorPeer::IDARTICULO, $idarticulo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idarticulo['max'])) {
                $this->addUsingAlias(ArticulovariantevalorPeer::IDARTICULO, $idarticulo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticulovariantevalorPeer::IDARTICULO, $idarticulo, $comparison);
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
     * @see       filterByPropiedad()
     *
     * @param     mixed $idpropiedad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticulovariantevalorQuery The current query, for fluid interface
     */
    public function filterByIdpropiedad($idpropiedad = null, $comparison = null)
    {
        if (is_array($idpropiedad)) {
            $useMinMax = false;
            if (isset($idpropiedad['min'])) {
                $this->addUsingAlias(ArticulovariantevalorPeer::IDPROPIEDAD, $idpropiedad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpropiedad['max'])) {
                $this->addUsingAlias(ArticulovariantevalorPeer::IDPROPIEDAD, $idpropiedad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticulovariantevalorPeer::IDPROPIEDAD, $idpropiedad, $comparison);
    }

    /**
     * Filter the query on the idpropiedadvalor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpropiedadvalor(1234); // WHERE idpropiedadvalor = 1234
     * $query->filterByIdpropiedadvalor(array(12, 34)); // WHERE idpropiedadvalor IN (12, 34)
     * $query->filterByIdpropiedadvalor(array('min' => 12)); // WHERE idpropiedadvalor >= 12
     * $query->filterByIdpropiedadvalor(array('max' => 12)); // WHERE idpropiedadvalor <= 12
     * </code>
     *
     * @see       filterByPropiedadvalor()
     *
     * @param     mixed $idpropiedadvalor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticulovariantevalorQuery The current query, for fluid interface
     */
    public function filterByIdpropiedadvalor($idpropiedadvalor = null, $comparison = null)
    {
        if (is_array($idpropiedadvalor)) {
            $useMinMax = false;
            if (isset($idpropiedadvalor['min'])) {
                $this->addUsingAlias(ArticulovariantevalorPeer::IDPROPIEDADVALOR, $idpropiedadvalor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpropiedadvalor['max'])) {
                $this->addUsingAlias(ArticulovariantevalorPeer::IDPROPIEDADVALOR, $idpropiedadvalor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticulovariantevalorPeer::IDPROPIEDADVALOR, $idpropiedadvalor, $comparison);
    }

    /**
     * Filter the query on the idarticulovariante column
     *
     * Example usage:
     * <code>
     * $query->filterByIdarticulovariante(1234); // WHERE idarticulovariante = 1234
     * $query->filterByIdarticulovariante(array(12, 34)); // WHERE idarticulovariante IN (12, 34)
     * $query->filterByIdarticulovariante(array('min' => 12)); // WHERE idarticulovariante >= 12
     * $query->filterByIdarticulovariante(array('max' => 12)); // WHERE idarticulovariante <= 12
     * </code>
     *
     * @see       filterByArticulovariante()
     *
     * @param     mixed $idarticulovariante The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticulovariantevalorQuery The current query, for fluid interface
     */
    public function filterByIdarticulovariante($idarticulovariante = null, $comparison = null)
    {
        if (is_array($idarticulovariante)) {
            $useMinMax = false;
            if (isset($idarticulovariante['min'])) {
                $this->addUsingAlias(ArticulovariantevalorPeer::IDARTICULOVARIANTE, $idarticulovariante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idarticulovariante['max'])) {
                $this->addUsingAlias(ArticulovariantevalorPeer::IDARTICULOVARIANTE, $idarticulovariante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticulovariantevalorPeer::IDARTICULOVARIANTE, $idarticulovariante, $comparison);
    }

    /**
     * Filter the query by a related Articulo object
     *
     * @param   Articulo|PropelObjectCollection $articulo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticulovariantevalorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByArticulo($articulo, $comparison = null)
    {
        if ($articulo instanceof Articulo) {
            return $this
                ->addUsingAlias(ArticulovariantevalorPeer::IDARTICULO, $articulo->getIdarticulo(), $comparison);
        } elseif ($articulo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArticulovariantevalorPeer::IDARTICULO, $articulo->toKeyValue('PrimaryKey', 'Idarticulo'), $comparison);
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
     * @return ArticulovariantevalorQuery The current query, for fluid interface
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
     * Filter the query by a related Articulovariante object
     *
     * @param   Articulovariante|PropelObjectCollection $articulovariante The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticulovariantevalorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByArticulovariante($articulovariante, $comparison = null)
    {
        if ($articulovariante instanceof Articulovariante) {
            return $this
                ->addUsingAlias(ArticulovariantevalorPeer::IDARTICULOVARIANTE, $articulovariante->getIdarticulovariante(), $comparison);
        } elseif ($articulovariante instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArticulovariantevalorPeer::IDARTICULOVARIANTE, $articulovariante->toKeyValue('PrimaryKey', 'Idarticulovariante'), $comparison);
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
     * @return ArticulovariantevalorQuery The current query, for fluid interface
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
     * Filter the query by a related Propiedad object
     *
     * @param   Propiedad|PropelObjectCollection $propiedad The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticulovariantevalorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPropiedad($propiedad, $comparison = null)
    {
        if ($propiedad instanceof Propiedad) {
            return $this
                ->addUsingAlias(ArticulovariantevalorPeer::IDPROPIEDAD, $propiedad->getIdpropiedad(), $comparison);
        } elseif ($propiedad instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArticulovariantevalorPeer::IDPROPIEDAD, $propiedad->toKeyValue('PrimaryKey', 'Idpropiedad'), $comparison);
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
     * @return ArticulovariantevalorQuery The current query, for fluid interface
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
     * @param   Propiedadvalor|PropelObjectCollection $propiedadvalor The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticulovariantevalorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPropiedadvalor($propiedadvalor, $comparison = null)
    {
        if ($propiedadvalor instanceof Propiedadvalor) {
            return $this
                ->addUsingAlias(ArticulovariantevalorPeer::IDPROPIEDADVALOR, $propiedadvalor->getIdpropiedadvalor(), $comparison);
        } elseif ($propiedadvalor instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArticulovariantevalorPeer::IDPROPIEDADVALOR, $propiedadvalor->toKeyValue('PrimaryKey', 'Idpropiedadvalor'), $comparison);
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
     * @return ArticulovariantevalorQuery The current query, for fluid interface
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
     * @param   Articulovariantevalor $articulovariantevalor Object to remove from the list of results
     *
     * @return ArticulovariantevalorQuery The current query, for fluid interface
     */
    public function prune($articulovariantevalor = null)
    {
        if ($articulovariantevalor) {
            $this->addUsingAlias(ArticulovariantevalorPeer::IDARTICULOVARIANTEVALOR, $articulovariantevalor->getIdarticulovariantevalor(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
