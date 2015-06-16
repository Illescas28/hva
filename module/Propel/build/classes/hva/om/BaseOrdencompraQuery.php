<?php


/**
 * Base class that represents a query for the 'ordencompra' table.
 *
 *
 *
 * @method OrdencompraQuery orderByIdordencompra($order = Criteria::ASC) Order by the idordencompra column
 * @method OrdencompraQuery orderByIdproveedor($order = Criteria::ASC) Order by the idproveedor column
 * @method OrdencompraQuery orderByOrdencompraNofactura($order = Criteria::ASC) Order by the ordencompra_nofactura column
 * @method OrdencompraQuery orderByOrdencompraFacturapdf($order = Criteria::ASC) Order by the ordencompra_facturapdf column
 * @method OrdencompraQuery orderByOrdencompraFecha($order = Criteria::ASC) Order by the ordencompra_fecha column
 * @method OrdencompraQuery orderByOrdencompraImporte($order = Criteria::ASC) Order by the ordencompra_importe column
 * @method OrdencompraQuery orderByOrdencompraStatus($order = Criteria::ASC) Order by the ordencompra_status column
 * @method OrdencompraQuery orderByOrdencompraFechaapagar($order = Criteria::ASC) Order by the ordencompra_fechaapagar column
 *
 * @method OrdencompraQuery groupByIdordencompra() Group by the idordencompra column
 * @method OrdencompraQuery groupByIdproveedor() Group by the idproveedor column
 * @method OrdencompraQuery groupByOrdencompraNofactura() Group by the ordencompra_nofactura column
 * @method OrdencompraQuery groupByOrdencompraFacturapdf() Group by the ordencompra_facturapdf column
 * @method OrdencompraQuery groupByOrdencompraFecha() Group by the ordencompra_fecha column
 * @method OrdencompraQuery groupByOrdencompraImporte() Group by the ordencompra_importe column
 * @method OrdencompraQuery groupByOrdencompraStatus() Group by the ordencompra_status column
 * @method OrdencompraQuery groupByOrdencompraFechaapagar() Group by the ordencompra_fechaapagar column
 *
 * @method OrdencompraQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OrdencompraQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OrdencompraQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OrdencompraQuery leftJoinProveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedor relation
 * @method OrdencompraQuery rightJoinProveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedor relation
 * @method OrdencompraQuery innerJoinProveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedor relation
 *
 * @method OrdencompraQuery leftJoinOrdencompradetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ordencompradetalle relation
 * @method OrdencompraQuery rightJoinOrdencompradetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ordencompradetalle relation
 * @method OrdencompraQuery innerJoinOrdencompradetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Ordencompradetalle relation
 *
 * @method Ordencompra findOne(PropelPDO $con = null) Return the first Ordencompra matching the query
 * @method Ordencompra findOneOrCreate(PropelPDO $con = null) Return the first Ordencompra matching the query, or a new Ordencompra object populated from the query conditions when no match is found
 *
 * @method Ordencompra findOneByIdproveedor(int $idproveedor) Return the first Ordencompra filtered by the idproveedor column
 * @method Ordencompra findOneByOrdencompraNofactura(string $ordencompra_nofactura) Return the first Ordencompra filtered by the ordencompra_nofactura column
 * @method Ordencompra findOneByOrdencompraFacturapdf(string $ordencompra_facturapdf) Return the first Ordencompra filtered by the ordencompra_facturapdf column
 * @method Ordencompra findOneByOrdencompraFecha(string $ordencompra_fecha) Return the first Ordencompra filtered by the ordencompra_fecha column
 * @method Ordencompra findOneByOrdencompraImporte(string $ordencompra_importe) Return the first Ordencompra filtered by the ordencompra_importe column
 * @method Ordencompra findOneByOrdencompraStatus(string $ordencompra_status) Return the first Ordencompra filtered by the ordencompra_status column
 * @method Ordencompra findOneByOrdencompraFechaapagar(string $ordencompra_fechaapagar) Return the first Ordencompra filtered by the ordencompra_fechaapagar column
 *
 * @method array findByIdordencompra(int $idordencompra) Return Ordencompra objects filtered by the idordencompra column
 * @method array findByIdproveedor(int $idproveedor) Return Ordencompra objects filtered by the idproveedor column
 * @method array findByOrdencompraNofactura(string $ordencompra_nofactura) Return Ordencompra objects filtered by the ordencompra_nofactura column
 * @method array findByOrdencompraFacturapdf(string $ordencompra_facturapdf) Return Ordencompra objects filtered by the ordencompra_facturapdf column
 * @method array findByOrdencompraFecha(string $ordencompra_fecha) Return Ordencompra objects filtered by the ordencompra_fecha column
 * @method array findByOrdencompraImporte(string $ordencompra_importe) Return Ordencompra objects filtered by the ordencompra_importe column
 * @method array findByOrdencompraStatus(string $ordencompra_status) Return Ordencompra objects filtered by the ordencompra_status column
 * @method array findByOrdencompraFechaapagar(string $ordencompra_fechaapagar) Return Ordencompra objects filtered by the ordencompra_fechaapagar column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseOrdencompraQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOrdencompraQuery object.
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
            $modelName = 'Ordencompra';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OrdencompraQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OrdencompraQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OrdencompraQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OrdencompraQuery) {
            return $criteria;
        }
        $query = new OrdencompraQuery(null, null, $modelAlias);

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
     * @return   Ordencompra|Ordencompra[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OrdencompraPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OrdencompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ordencompra A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdordencompra($key, $con = null)
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
     * @return                 Ordencompra A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idordencompra`, `idproveedor`, `ordencompra_nofactura`, `ordencompra_facturapdf`, `ordencompra_fecha`, `ordencompra_importe`, `ordencompra_status`, `ordencompra_fechaapagar` FROM `ordencompra` WHERE `idordencompra` = :p0';
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
            $obj = new Ordencompra();
            $obj->hydrate($row);
            OrdencompraPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ordencompra|Ordencompra[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ordencompra[]|mixed the list of results, formatted by the current formatter
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
     * @return OrdencompraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OrdencompraPeer::IDORDENCOMPRA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OrdencompraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OrdencompraPeer::IDORDENCOMPRA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idordencompra column
     *
     * Example usage:
     * <code>
     * $query->filterByIdordencompra(1234); // WHERE idordencompra = 1234
     * $query->filterByIdordencompra(array(12, 34)); // WHERE idordencompra IN (12, 34)
     * $query->filterByIdordencompra(array('min' => 12)); // WHERE idordencompra >= 12
     * $query->filterByIdordencompra(array('max' => 12)); // WHERE idordencompra <= 12
     * </code>
     *
     * @param     mixed $idordencompra The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdencompraQuery The current query, for fluid interface
     */
    public function filterByIdordencompra($idordencompra = null, $comparison = null)
    {
        if (is_array($idordencompra)) {
            $useMinMax = false;
            if (isset($idordencompra['min'])) {
                $this->addUsingAlias(OrdencompraPeer::IDORDENCOMPRA, $idordencompra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idordencompra['max'])) {
                $this->addUsingAlias(OrdencompraPeer::IDORDENCOMPRA, $idordencompra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdencompraPeer::IDORDENCOMPRA, $idordencompra, $comparison);
    }

    /**
     * Filter the query on the idproveedor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproveedor(1234); // WHERE idproveedor = 1234
     * $query->filterByIdproveedor(array(12, 34)); // WHERE idproveedor IN (12, 34)
     * $query->filterByIdproveedor(array('min' => 12)); // WHERE idproveedor >= 12
     * $query->filterByIdproveedor(array('max' => 12)); // WHERE idproveedor <= 12
     * </code>
     *
     * @see       filterByProveedor()
     *
     * @param     mixed $idproveedor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdencompraQuery The current query, for fluid interface
     */
    public function filterByIdproveedor($idproveedor = null, $comparison = null)
    {
        if (is_array($idproveedor)) {
            $useMinMax = false;
            if (isset($idproveedor['min'])) {
                $this->addUsingAlias(OrdencompraPeer::IDPROVEEDOR, $idproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedor['max'])) {
                $this->addUsingAlias(OrdencompraPeer::IDPROVEEDOR, $idproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdencompraPeer::IDPROVEEDOR, $idproveedor, $comparison);
    }

    /**
     * Filter the query on the ordencompra_nofactura column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdencompraNofactura('fooValue');   // WHERE ordencompra_nofactura = 'fooValue'
     * $query->filterByOrdencompraNofactura('%fooValue%'); // WHERE ordencompra_nofactura LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ordencompraNofactura The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdencompraQuery The current query, for fluid interface
     */
    public function filterByOrdencompraNofactura($ordencompraNofactura = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ordencompraNofactura)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ordencompraNofactura)) {
                $ordencompraNofactura = str_replace('*', '%', $ordencompraNofactura);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdencompraPeer::ORDENCOMPRA_NOFACTURA, $ordencompraNofactura, $comparison);
    }

    /**
     * Filter the query on the ordencompra_facturapdf column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdencompraFacturapdf('fooValue');   // WHERE ordencompra_facturapdf = 'fooValue'
     * $query->filterByOrdencompraFacturapdf('%fooValue%'); // WHERE ordencompra_facturapdf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ordencompraFacturapdf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdencompraQuery The current query, for fluid interface
     */
    public function filterByOrdencompraFacturapdf($ordencompraFacturapdf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ordencompraFacturapdf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ordencompraFacturapdf)) {
                $ordencompraFacturapdf = str_replace('*', '%', $ordencompraFacturapdf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdencompraPeer::ORDENCOMPRA_FACTURAPDF, $ordencompraFacturapdf, $comparison);
    }

    /**
     * Filter the query on the ordencompra_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdencompraFecha('2011-03-14'); // WHERE ordencompra_fecha = '2011-03-14'
     * $query->filterByOrdencompraFecha('now'); // WHERE ordencompra_fecha = '2011-03-14'
     * $query->filterByOrdencompraFecha(array('max' => 'yesterday')); // WHERE ordencompra_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $ordencompraFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdencompraQuery The current query, for fluid interface
     */
    public function filterByOrdencompraFecha($ordencompraFecha = null, $comparison = null)
    {
        if (is_array($ordencompraFecha)) {
            $useMinMax = false;
            if (isset($ordencompraFecha['min'])) {
                $this->addUsingAlias(OrdencompraPeer::ORDENCOMPRA_FECHA, $ordencompraFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordencompraFecha['max'])) {
                $this->addUsingAlias(OrdencompraPeer::ORDENCOMPRA_FECHA, $ordencompraFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdencompraPeer::ORDENCOMPRA_FECHA, $ordencompraFecha, $comparison);
    }

    /**
     * Filter the query on the ordencompra_importe column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdencompraImporte(1234); // WHERE ordencompra_importe = 1234
     * $query->filterByOrdencompraImporte(array(12, 34)); // WHERE ordencompra_importe IN (12, 34)
     * $query->filterByOrdencompraImporte(array('min' => 12)); // WHERE ordencompra_importe >= 12
     * $query->filterByOrdencompraImporte(array('max' => 12)); // WHERE ordencompra_importe <= 12
     * </code>
     *
     * @param     mixed $ordencompraImporte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdencompraQuery The current query, for fluid interface
     */
    public function filterByOrdencompraImporte($ordencompraImporte = null, $comparison = null)
    {
        if (is_array($ordencompraImporte)) {
            $useMinMax = false;
            if (isset($ordencompraImporte['min'])) {
                $this->addUsingAlias(OrdencompraPeer::ORDENCOMPRA_IMPORTE, $ordencompraImporte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordencompraImporte['max'])) {
                $this->addUsingAlias(OrdencompraPeer::ORDENCOMPRA_IMPORTE, $ordencompraImporte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdencompraPeer::ORDENCOMPRA_IMPORTE, $ordencompraImporte, $comparison);
    }

    /**
     * Filter the query on the ordencompra_status column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdencompraStatus('fooValue');   // WHERE ordencompra_status = 'fooValue'
     * $query->filterByOrdencompraStatus('%fooValue%'); // WHERE ordencompra_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ordencompraStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdencompraQuery The current query, for fluid interface
     */
    public function filterByOrdencompraStatus($ordencompraStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ordencompraStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ordencompraStatus)) {
                $ordencompraStatus = str_replace('*', '%', $ordencompraStatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdencompraPeer::ORDENCOMPRA_STATUS, $ordencompraStatus, $comparison);
    }

    /**
     * Filter the query on the ordencompra_fechaapagar column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdencompraFechaapagar('2011-03-14'); // WHERE ordencompra_fechaapagar = '2011-03-14'
     * $query->filterByOrdencompraFechaapagar('now'); // WHERE ordencompra_fechaapagar = '2011-03-14'
     * $query->filterByOrdencompraFechaapagar(array('max' => 'yesterday')); // WHERE ordencompra_fechaapagar < '2011-03-13'
     * </code>
     *
     * @param     mixed $ordencompraFechaapagar The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdencompraQuery The current query, for fluid interface
     */
    public function filterByOrdencompraFechaapagar($ordencompraFechaapagar = null, $comparison = null)
    {
        if (is_array($ordencompraFechaapagar)) {
            $useMinMax = false;
            if (isset($ordencompraFechaapagar['min'])) {
                $this->addUsingAlias(OrdencompraPeer::ORDENCOMPRA_FECHAAPAGAR, $ordencompraFechaapagar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordencompraFechaapagar['max'])) {
                $this->addUsingAlias(OrdencompraPeer::ORDENCOMPRA_FECHAAPAGAR, $ordencompraFechaapagar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdencompraPeer::ORDENCOMPRA_FECHAAPAGAR, $ordencompraFechaapagar, $comparison);
    }

    /**
     * Filter the query by a related Proveedor object
     *
     * @param   Proveedor|PropelObjectCollection $proveedor The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrdencompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedor($proveedor, $comparison = null)
    {
        if ($proveedor instanceof Proveedor) {
            return $this
                ->addUsingAlias(OrdencompraPeer::IDPROVEEDOR, $proveedor->getIdproveedor(), $comparison);
        } elseif ($proveedor instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OrdencompraPeer::IDPROVEEDOR, $proveedor->toKeyValue('PrimaryKey', 'Idproveedor'), $comparison);
        } else {
            throw new PropelException('filterByProveedor() only accepts arguments of type Proveedor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Proveedor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OrdencompraQuery The current query, for fluid interface
     */
    public function joinProveedor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Proveedor');

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
            $this->addJoinObject($join, 'Proveedor');
        }

        return $this;
    }

    /**
     * Use the Proveedor relation Proveedor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProveedorQuery A secondary query class using the current class as primary query
     */
    public function useProveedorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProveedor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Proveedor', 'ProveedorQuery');
    }

    /**
     * Filter the query by a related Ordencompradetalle object
     *
     * @param   Ordencompradetalle|PropelObjectCollection $ordencompradetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrdencompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdencompradetalle($ordencompradetalle, $comparison = null)
    {
        if ($ordencompradetalle instanceof Ordencompradetalle) {
            return $this
                ->addUsingAlias(OrdencompraPeer::IDORDENCOMPRA, $ordencompradetalle->getIdordencompra(), $comparison);
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
     * @return OrdencompraQuery The current query, for fluid interface
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
     * @param   Ordencompra $ordencompra Object to remove from the list of results
     *
     * @return OrdencompraQuery The current query, for fluid interface
     */
    public function prune($ordencompra = null)
    {
        if ($ordencompra) {
            $this->addUsingAlias(OrdencompraPeer::IDORDENCOMPRA, $ordencompra->getIdordencompra(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
