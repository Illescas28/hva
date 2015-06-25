<?php


/**
 * Base class that represents a query for the 'articulovariante' table.
 *
 *
 *
 * @method ArticulovarianteQuery orderByIdarticulovariante($order = Criteria::ASC) Order by the idarticulovariante column
 * @method ArticulovarianteQuery orderByIdarticulo($order = Criteria::ASC) Order by the idarticulo column
 * @method ArticulovarianteQuery orderByArticulovarianteCodigobarras($order = Criteria::ASC) Order by the articulovariante_codigobarras column
 * @method ArticulovarianteQuery orderByArticulovarianteCosto($order = Criteria::ASC) Order by the articulovariante_costo column
 * @method ArticulovarianteQuery orderByArticulovariantePrecio($order = Criteria::ASC) Order by the articulovariante_precio column
 * @method ArticulovarianteQuery orderByArticulovarianteIva($order = Criteria::ASC) Order by the articulovariante_iva column
 * @method ArticulovarianteQuery orderByArticulovarianteImagen($order = Criteria::ASC) Order by the articulovariante_imagen column
 *
 * @method ArticulovarianteQuery groupByIdarticulovariante() Group by the idarticulovariante column
 * @method ArticulovarianteQuery groupByIdarticulo() Group by the idarticulo column
 * @method ArticulovarianteQuery groupByArticulovarianteCodigobarras() Group by the articulovariante_codigobarras column
 * @method ArticulovarianteQuery groupByArticulovarianteCosto() Group by the articulovariante_costo column
 * @method ArticulovarianteQuery groupByArticulovariantePrecio() Group by the articulovariante_precio column
 * @method ArticulovarianteQuery groupByArticulovarianteIva() Group by the articulovariante_iva column
 * @method ArticulovarianteQuery groupByArticulovarianteImagen() Group by the articulovariante_imagen column
 *
 * @method ArticulovarianteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ArticulovarianteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ArticulovarianteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ArticulovarianteQuery leftJoinArticulo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Articulo relation
 * @method ArticulovarianteQuery rightJoinArticulo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Articulo relation
 * @method ArticulovarianteQuery innerJoinArticulo($relationAlias = null) Adds a INNER JOIN clause to the query using the Articulo relation
 *
 * @method ArticulovarianteQuery leftJoinArticulovariantereorden($relationAlias = null) Adds a LEFT JOIN clause to the query using the Articulovariantereorden relation
 * @method ArticulovarianteQuery rightJoinArticulovariantereorden($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Articulovariantereorden relation
 * @method ArticulovarianteQuery innerJoinArticulovariantereorden($relationAlias = null) Adds a INNER JOIN clause to the query using the Articulovariantereorden relation
 *
 * @method ArticulovarianteQuery leftJoinArticulovariantevalor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Articulovariantevalor relation
 * @method ArticulovarianteQuery rightJoinArticulovariantevalor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Articulovariantevalor relation
 * @method ArticulovarianteQuery innerJoinArticulovariantevalor($relationAlias = null) Adds a INNER JOIN clause to the query using the Articulovariantevalor relation
 *
 * @method ArticulovarianteQuery leftJoinOrdencompradetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ordencompradetalle relation
 * @method ArticulovarianteQuery rightJoinOrdencompradetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ordencompradetalle relation
 * @method ArticulovarianteQuery innerJoinOrdencompradetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Ordencompradetalle relation
 *
 * @method Articulovariante findOne(PropelPDO $con = null) Return the first Articulovariante matching the query
 * @method Articulovariante findOneOrCreate(PropelPDO $con = null) Return the first Articulovariante matching the query, or a new Articulovariante object populated from the query conditions when no match is found
 *
 * @method Articulovariante findOneByIdarticulo(int $idarticulo) Return the first Articulovariante filtered by the idarticulo column
 * @method Articulovariante findOneByArticulovarianteCodigobarras(string $articulovariante_codigobarras) Return the first Articulovariante filtered by the articulovariante_codigobarras column
 * @method Articulovariante findOneByArticulovarianteCosto(string $articulovariante_costo) Return the first Articulovariante filtered by the articulovariante_costo column
 * @method Articulovariante findOneByArticulovariantePrecio(string $articulovariante_precio) Return the first Articulovariante filtered by the articulovariante_precio column
 * @method Articulovariante findOneByArticulovarianteIva(string $articulovariante_iva) Return the first Articulovariante filtered by the articulovariante_iva column
 * @method Articulovariante findOneByArticulovarianteImagen(string $articulovariante_imagen) Return the first Articulovariante filtered by the articulovariante_imagen column
 *
 * @method array findByIdarticulovariante(int $idarticulovariante) Return Articulovariante objects filtered by the idarticulovariante column
 * @method array findByIdarticulo(int $idarticulo) Return Articulovariante objects filtered by the idarticulo column
 * @method array findByArticulovarianteCodigobarras(string $articulovariante_codigobarras) Return Articulovariante objects filtered by the articulovariante_codigobarras column
 * @method array findByArticulovarianteCosto(string $articulovariante_costo) Return Articulovariante objects filtered by the articulovariante_costo column
 * @method array findByArticulovariantePrecio(string $articulovariante_precio) Return Articulovariante objects filtered by the articulovariante_precio column
 * @method array findByArticulovarianteIva(string $articulovariante_iva) Return Articulovariante objects filtered by the articulovariante_iva column
 * @method array findByArticulovarianteImagen(string $articulovariante_imagen) Return Articulovariante objects filtered by the articulovariante_imagen column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseArticulovarianteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseArticulovarianteQuery object.
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
            $modelName = 'Articulovariante';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ArticulovarianteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ArticulovarianteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ArticulovarianteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ArticulovarianteQuery) {
            return $criteria;
        }
        $query = new ArticulovarianteQuery(null, null, $modelAlias);

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
     * @return   Articulovariante|Articulovariante[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ArticulovariantePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ArticulovariantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Articulovariante A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdarticulovariante($key, $con = null)
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
     * @return                 Articulovariante A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idarticulovariante`, `idarticulo`, `articulovariante_codigobarras`, `articulovariante_costo`, `articulovariante_precio`, `articulovariante_iva`, `articulovariante_imagen` FROM `articulovariante` WHERE `idarticulovariante` = :p0';
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
            $obj = new Articulovariante();
            $obj->hydrate($row);
            ArticulovariantePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Articulovariante|Articulovariante[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Articulovariante[]|mixed the list of results, formatted by the current formatter
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
     * @return ArticulovarianteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ArticulovariantePeer::IDARTICULOVARIANTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ArticulovarianteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ArticulovariantePeer::IDARTICULOVARIANTE, $keys, Criteria::IN);
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
     * @param     mixed $idarticulovariante The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticulovarianteQuery The current query, for fluid interface
     */
    public function filterByIdarticulovariante($idarticulovariante = null, $comparison = null)
    {
        if (is_array($idarticulovariante)) {
            $useMinMax = false;
            if (isset($idarticulovariante['min'])) {
                $this->addUsingAlias(ArticulovariantePeer::IDARTICULOVARIANTE, $idarticulovariante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idarticulovariante['max'])) {
                $this->addUsingAlias(ArticulovariantePeer::IDARTICULOVARIANTE, $idarticulovariante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticulovariantePeer::IDARTICULOVARIANTE, $idarticulovariante, $comparison);
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
     * @return ArticulovarianteQuery The current query, for fluid interface
     */
    public function filterByIdarticulo($idarticulo = null, $comparison = null)
    {
        if (is_array($idarticulo)) {
            $useMinMax = false;
            if (isset($idarticulo['min'])) {
                $this->addUsingAlias(ArticulovariantePeer::IDARTICULO, $idarticulo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idarticulo['max'])) {
                $this->addUsingAlias(ArticulovariantePeer::IDARTICULO, $idarticulo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticulovariantePeer::IDARTICULO, $idarticulo, $comparison);
    }

    /**
     * Filter the query on the articulovariante_codigobarras column
     *
     * Example usage:
     * <code>
     * $query->filterByArticulovarianteCodigobarras('fooValue');   // WHERE articulovariante_codigobarras = 'fooValue'
     * $query->filterByArticulovarianteCodigobarras('%fooValue%'); // WHERE articulovariante_codigobarras LIKE '%fooValue%'
     * </code>
     *
     * @param     string $articulovarianteCodigobarras The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticulovarianteQuery The current query, for fluid interface
     */
    public function filterByArticulovarianteCodigobarras($articulovarianteCodigobarras = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($articulovarianteCodigobarras)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $articulovarianteCodigobarras)) {
                $articulovarianteCodigobarras = str_replace('*', '%', $articulovarianteCodigobarras);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ArticulovariantePeer::ARTICULOVARIANTE_CODIGOBARRAS, $articulovarianteCodigobarras, $comparison);
    }

    /**
     * Filter the query on the articulovariante_costo column
     *
     * Example usage:
     * <code>
     * $query->filterByArticulovarianteCosto(1234); // WHERE articulovariante_costo = 1234
     * $query->filterByArticulovarianteCosto(array(12, 34)); // WHERE articulovariante_costo IN (12, 34)
     * $query->filterByArticulovarianteCosto(array('min' => 12)); // WHERE articulovariante_costo >= 12
     * $query->filterByArticulovarianteCosto(array('max' => 12)); // WHERE articulovariante_costo <= 12
     * </code>
     *
     * @param     mixed $articulovarianteCosto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticulovarianteQuery The current query, for fluid interface
     */
    public function filterByArticulovarianteCosto($articulovarianteCosto = null, $comparison = null)
    {
        if (is_array($articulovarianteCosto)) {
            $useMinMax = false;
            if (isset($articulovarianteCosto['min'])) {
                $this->addUsingAlias(ArticulovariantePeer::ARTICULOVARIANTE_COSTO, $articulovarianteCosto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($articulovarianteCosto['max'])) {
                $this->addUsingAlias(ArticulovariantePeer::ARTICULOVARIANTE_COSTO, $articulovarianteCosto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticulovariantePeer::ARTICULOVARIANTE_COSTO, $articulovarianteCosto, $comparison);
    }

    /**
     * Filter the query on the articulovariante_precio column
     *
     * Example usage:
     * <code>
     * $query->filterByArticulovariantePrecio(1234); // WHERE articulovariante_precio = 1234
     * $query->filterByArticulovariantePrecio(array(12, 34)); // WHERE articulovariante_precio IN (12, 34)
     * $query->filterByArticulovariantePrecio(array('min' => 12)); // WHERE articulovariante_precio >= 12
     * $query->filterByArticulovariantePrecio(array('max' => 12)); // WHERE articulovariante_precio <= 12
     * </code>
     *
     * @param     mixed $articulovariantePrecio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticulovarianteQuery The current query, for fluid interface
     */
    public function filterByArticulovariantePrecio($articulovariantePrecio = null, $comparison = null)
    {
        if (is_array($articulovariantePrecio)) {
            $useMinMax = false;
            if (isset($articulovariantePrecio['min'])) {
                $this->addUsingAlias(ArticulovariantePeer::ARTICULOVARIANTE_PRECIO, $articulovariantePrecio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($articulovariantePrecio['max'])) {
                $this->addUsingAlias(ArticulovariantePeer::ARTICULOVARIANTE_PRECIO, $articulovariantePrecio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArticulovariantePeer::ARTICULOVARIANTE_PRECIO, $articulovariantePrecio, $comparison);
    }

    /**
     * Filter the query on the articulovariante_iva column
     *
     * Example usage:
     * <code>
     * $query->filterByArticulovarianteIva('fooValue');   // WHERE articulovariante_iva = 'fooValue'
     * $query->filterByArticulovarianteIva('%fooValue%'); // WHERE articulovariante_iva LIKE '%fooValue%'
     * </code>
     *
     * @param     string $articulovarianteIva The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticulovarianteQuery The current query, for fluid interface
     */
    public function filterByArticulovarianteIva($articulovarianteIva = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($articulovarianteIva)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $articulovarianteIva)) {
                $articulovarianteIva = str_replace('*', '%', $articulovarianteIva);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ArticulovariantePeer::ARTICULOVARIANTE_IVA, $articulovarianteIva, $comparison);
    }

    /**
     * Filter the query on the articulovariante_imagen column
     *
     * Example usage:
     * <code>
     * $query->filterByArticulovarianteImagen('fooValue');   // WHERE articulovariante_imagen = 'fooValue'
     * $query->filterByArticulovarianteImagen('%fooValue%'); // WHERE articulovariante_imagen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $articulovarianteImagen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArticulovarianteQuery The current query, for fluid interface
     */
    public function filterByArticulovarianteImagen($articulovarianteImagen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($articulovarianteImagen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $articulovarianteImagen)) {
                $articulovarianteImagen = str_replace('*', '%', $articulovarianteImagen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ArticulovariantePeer::ARTICULOVARIANTE_IMAGEN, $articulovarianteImagen, $comparison);
    }

    /**
     * Filter the query by a related Articulo object
     *
     * @param   Articulo|PropelObjectCollection $articulo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticulovarianteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByArticulo($articulo, $comparison = null)
    {
        if ($articulo instanceof Articulo) {
            return $this
                ->addUsingAlias(ArticulovariantePeer::IDARTICULO, $articulo->getIdarticulo(), $comparison);
        } elseif ($articulo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArticulovariantePeer::IDARTICULO, $articulo->toKeyValue('PrimaryKey', 'Idarticulo'), $comparison);
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
     * @return ArticulovarianteQuery The current query, for fluid interface
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
     * Filter the query by a related Articulovariantereorden object
     *
     * @param   Articulovariantereorden|PropelObjectCollection $articulovariantereorden  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticulovarianteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByArticulovariantereorden($articulovariantereorden, $comparison = null)
    {
        if ($articulovariantereorden instanceof Articulovariantereorden) {
            return $this
                ->addUsingAlias(ArticulovariantePeer::IDARTICULOVARIANTE, $articulovariantereorden->getIdarticulovariante(), $comparison);
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
     * @return ArticulovarianteQuery The current query, for fluid interface
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
     * Filter the query by a related Articulovariantevalor object
     *
     * @param   Articulovariantevalor|PropelObjectCollection $articulovariantevalor  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticulovarianteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByArticulovariantevalor($articulovariantevalor, $comparison = null)
    {
        if ($articulovariantevalor instanceof Articulovariantevalor) {
            return $this
                ->addUsingAlias(ArticulovariantePeer::IDARTICULOVARIANTE, $articulovariantevalor->getIdarticulovariante(), $comparison);
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
     * @return ArticulovarianteQuery The current query, for fluid interface
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
     * Filter the query by a related Ordencompradetalle object
     *
     * @param   Ordencompradetalle|PropelObjectCollection $ordencompradetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArticulovarianteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdencompradetalle($ordencompradetalle, $comparison = null)
    {
        if ($ordencompradetalle instanceof Ordencompradetalle) {
            return $this
                ->addUsingAlias(ArticulovariantePeer::IDARTICULOVARIANTE, $ordencompradetalle->getIdarticulovariante(), $comparison);
        } elseif ($ordencompradetalle instanceof PropelObjectCollection) {
            return $this
                ->useOrdencompradetalleQuery()
                ->filterByPrimaryKeys($ordencompradetalle->getPrimaryKeys())
                ->endUse();
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
     * @return ArticulovarianteQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Articulovariante $articulovariante Object to remove from the list of results
     *
     * @return ArticulovarianteQuery The current query, for fluid interface
     */
    public function prune($articulovariante = null)
    {
        if ($articulovariante) {
            $this->addUsingAlias(ArticulovariantePeer::IDARTICULOVARIANTE, $articulovariante->getIdarticulovariante(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
