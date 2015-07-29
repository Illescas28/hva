<?php


/**
 * Base class that represents a query for the 'venta' table.
 *
 *
 *
 * @method VentaQuery orderByIdventa($order = Criteria::ASC) Order by the idventa column
 * @method VentaQuery orderByIdpaciente($order = Criteria::ASC) Order by the idpaciente column
 * @method VentaQuery orderByVentaFecha($order = Criteria::ASC) Order by the venta_fecha column
 * @method VentaQuery orderByVentaTipodepago($order = Criteria::ASC) Order by the venta_tipodepago column
 * @method VentaQuery orderByVentaStatus($order = Criteria::ASC) Order by the venta_status column
 * @method VentaQuery orderByVentaFacturada($order = Criteria::ASC) Order by the venta_facturada column
 * @method VentaQuery orderByVentaRegistrada($order = Criteria::ASC) Order by the venta_registrada column
 * @method VentaQuery orderByVentaTotal($order = Criteria::ASC) Order by the venta_total column
 * @method VentaQuery orderByVentaReferenciapago($order = Criteria::ASC) Order by the venta_referenciapago column
 *
 * @method VentaQuery groupByIdventa() Group by the idventa column
 * @method VentaQuery groupByIdpaciente() Group by the idpaciente column
 * @method VentaQuery groupByVentaFecha() Group by the venta_fecha column
 * @method VentaQuery groupByVentaTipodepago() Group by the venta_tipodepago column
 * @method VentaQuery groupByVentaStatus() Group by the venta_status column
 * @method VentaQuery groupByVentaFacturada() Group by the venta_facturada column
 * @method VentaQuery groupByVentaRegistrada() Group by the venta_registrada column
 * @method VentaQuery groupByVentaTotal() Group by the venta_total column
 * @method VentaQuery groupByVentaReferenciapago() Group by the venta_referenciapago column
 *
 * @method VentaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VentaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VentaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method VentaQuery leftJoinPaciente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paciente relation
 * @method VentaQuery rightJoinPaciente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paciente relation
 * @method VentaQuery innerJoinPaciente($relationAlias = null) Adds a INNER JOIN clause to the query using the Paciente relation
 *
 * @method VentaQuery leftJoinCargoventa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cargoventa relation
 * @method VentaQuery rightJoinCargoventa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cargoventa relation
 * @method VentaQuery innerJoinCargoventa($relationAlias = null) Adds a INNER JOIN clause to the query using the Cargoventa relation
 *
 * @method VentaQuery leftJoinFactura($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factura relation
 * @method VentaQuery rightJoinFactura($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factura relation
 * @method VentaQuery innerJoinFactura($relationAlias = null) Adds a INNER JOIN clause to the query using the Factura relation
 *
 * @method Venta findOne(PropelPDO $con = null) Return the first Venta matching the query
 * @method Venta findOneOrCreate(PropelPDO $con = null) Return the first Venta matching the query, or a new Venta object populated from the query conditions when no match is found
 *
 * @method Venta findOneByIdpaciente(int $idpaciente) Return the first Venta filtered by the idpaciente column
 * @method Venta findOneByVentaFecha(string $venta_fecha) Return the first Venta filtered by the venta_fecha column
 * @method Venta findOneByVentaTipodepago(string $venta_tipodepago) Return the first Venta filtered by the venta_tipodepago column
 * @method Venta findOneByVentaStatus(string $venta_status) Return the first Venta filtered by the venta_status column
 * @method Venta findOneByVentaFacturada(boolean $venta_facturada) Return the first Venta filtered by the venta_facturada column
 * @method Venta findOneByVentaRegistrada(boolean $venta_registrada) Return the first Venta filtered by the venta_registrada column
 * @method Venta findOneByVentaTotal(string $venta_total) Return the first Venta filtered by the venta_total column
 * @method Venta findOneByVentaReferenciapago(string $venta_referenciapago) Return the first Venta filtered by the venta_referenciapago column
 *
 * @method array findByIdventa(int $idventa) Return Venta objects filtered by the idventa column
 * @method array findByIdpaciente(int $idpaciente) Return Venta objects filtered by the idpaciente column
 * @method array findByVentaFecha(string $venta_fecha) Return Venta objects filtered by the venta_fecha column
 * @method array findByVentaTipodepago(string $venta_tipodepago) Return Venta objects filtered by the venta_tipodepago column
 * @method array findByVentaStatus(string $venta_status) Return Venta objects filtered by the venta_status column
 * @method array findByVentaFacturada(boolean $venta_facturada) Return Venta objects filtered by the venta_facturada column
 * @method array findByVentaRegistrada(boolean $venta_registrada) Return Venta objects filtered by the venta_registrada column
 * @method array findByVentaTotal(string $venta_total) Return Venta objects filtered by the venta_total column
 * @method array findByVentaReferenciapago(string $venta_referenciapago) Return Venta objects filtered by the venta_referenciapago column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseVentaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVentaQuery object.
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
            $modelName = 'Venta';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VentaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VentaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VentaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VentaQuery) {
            return $criteria;
        }
        $query = new VentaQuery(null, null, $modelAlias);

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
     * @return   Venta|Venta[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VentaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Venta A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdventa($key, $con = null)
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
     * @return                 Venta A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idventa`, `idpaciente`, `venta_fecha`, `venta_tipodepago`, `venta_status`, `venta_facturada`, `venta_registrada`, `venta_total`, `venta_referenciapago` FROM `venta` WHERE `idventa` = :p0';
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
            $obj = new Venta();
            $obj->hydrate($row);
            VentaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Venta|Venta[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Venta[]|mixed the list of results, formatted by the current formatter
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
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VentaPeer::IDVENTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VentaPeer::IDVENTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idventa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdventa(1234); // WHERE idventa = 1234
     * $query->filterByIdventa(array(12, 34)); // WHERE idventa IN (12, 34)
     * $query->filterByIdventa(array('min' => 12)); // WHERE idventa >= 12
     * $query->filterByIdventa(array('max' => 12)); // WHERE idventa <= 12
     * </code>
     *
     * @param     mixed $idventa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByIdventa($idventa = null, $comparison = null)
    {
        if (is_array($idventa)) {
            $useMinMax = false;
            if (isset($idventa['min'])) {
                $this->addUsingAlias(VentaPeer::IDVENTA, $idventa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idventa['max'])) {
                $this->addUsingAlias(VentaPeer::IDVENTA, $idventa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentaPeer::IDVENTA, $idventa, $comparison);
    }

    /**
     * Filter the query on the idpaciente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpaciente(1234); // WHERE idpaciente = 1234
     * $query->filterByIdpaciente(array(12, 34)); // WHERE idpaciente IN (12, 34)
     * $query->filterByIdpaciente(array('min' => 12)); // WHERE idpaciente >= 12
     * $query->filterByIdpaciente(array('max' => 12)); // WHERE idpaciente <= 12
     * </code>
     *
     * @see       filterByPaciente()
     *
     * @param     mixed $idpaciente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByIdpaciente($idpaciente = null, $comparison = null)
    {
        if (is_array($idpaciente)) {
            $useMinMax = false;
            if (isset($idpaciente['min'])) {
                $this->addUsingAlias(VentaPeer::IDPACIENTE, $idpaciente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpaciente['max'])) {
                $this->addUsingAlias(VentaPeer::IDPACIENTE, $idpaciente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentaPeer::IDPACIENTE, $idpaciente, $comparison);
    }

    /**
     * Filter the query on the venta_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByVentaFecha('2011-03-14'); // WHERE venta_fecha = '2011-03-14'
     * $query->filterByVentaFecha('now'); // WHERE venta_fecha = '2011-03-14'
     * $query->filterByVentaFecha(array('max' => 'yesterday')); // WHERE venta_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $ventaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByVentaFecha($ventaFecha = null, $comparison = null)
    {
        if (is_array($ventaFecha)) {
            $useMinMax = false;
            if (isset($ventaFecha['min'])) {
                $this->addUsingAlias(VentaPeer::VENTA_FECHA, $ventaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventaFecha['max'])) {
                $this->addUsingAlias(VentaPeer::VENTA_FECHA, $ventaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentaPeer::VENTA_FECHA, $ventaFecha, $comparison);
    }

    /**
     * Filter the query on the venta_tipodepago column
     *
     * Example usage:
     * <code>
     * $query->filterByVentaTipodepago('fooValue');   // WHERE venta_tipodepago = 'fooValue'
     * $query->filterByVentaTipodepago('%fooValue%'); // WHERE venta_tipodepago LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ventaTipodepago The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByVentaTipodepago($ventaTipodepago = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ventaTipodepago)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ventaTipodepago)) {
                $ventaTipodepago = str_replace('*', '%', $ventaTipodepago);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VentaPeer::VENTA_TIPODEPAGO, $ventaTipodepago, $comparison);
    }

    /**
     * Filter the query on the venta_status column
     *
     * Example usage:
     * <code>
     * $query->filterByVentaStatus('fooValue');   // WHERE venta_status = 'fooValue'
     * $query->filterByVentaStatus('%fooValue%'); // WHERE venta_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ventaStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByVentaStatus($ventaStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ventaStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ventaStatus)) {
                $ventaStatus = str_replace('*', '%', $ventaStatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VentaPeer::VENTA_STATUS, $ventaStatus, $comparison);
    }

    /**
     * Filter the query on the venta_facturada column
     *
     * Example usage:
     * <code>
     * $query->filterByVentaFacturada(true); // WHERE venta_facturada = true
     * $query->filterByVentaFacturada('yes'); // WHERE venta_facturada = true
     * </code>
     *
     * @param     boolean|string $ventaFacturada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByVentaFacturada($ventaFacturada = null, $comparison = null)
    {
        if (is_string($ventaFacturada)) {
            $ventaFacturada = in_array(strtolower($ventaFacturada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VentaPeer::VENTA_FACTURADA, $ventaFacturada, $comparison);
    }

    /**
     * Filter the query on the venta_registrada column
     *
     * Example usage:
     * <code>
     * $query->filterByVentaRegistrada(true); // WHERE venta_registrada = true
     * $query->filterByVentaRegistrada('yes'); // WHERE venta_registrada = true
     * </code>
     *
     * @param     boolean|string $ventaRegistrada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByVentaRegistrada($ventaRegistrada = null, $comparison = null)
    {
        if (is_string($ventaRegistrada)) {
            $ventaRegistrada = in_array(strtolower($ventaRegistrada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VentaPeer::VENTA_REGISTRADA, $ventaRegistrada, $comparison);
    }

    /**
     * Filter the query on the venta_total column
     *
     * Example usage:
     * <code>
     * $query->filterByVentaTotal(1234); // WHERE venta_total = 1234
     * $query->filterByVentaTotal(array(12, 34)); // WHERE venta_total IN (12, 34)
     * $query->filterByVentaTotal(array('min' => 12)); // WHERE venta_total >= 12
     * $query->filterByVentaTotal(array('max' => 12)); // WHERE venta_total <= 12
     * </code>
     *
     * @param     mixed $ventaTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByVentaTotal($ventaTotal = null, $comparison = null)
    {
        if (is_array($ventaTotal)) {
            $useMinMax = false;
            if (isset($ventaTotal['min'])) {
                $this->addUsingAlias(VentaPeer::VENTA_TOTAL, $ventaTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventaTotal['max'])) {
                $this->addUsingAlias(VentaPeer::VENTA_TOTAL, $ventaTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentaPeer::VENTA_TOTAL, $ventaTotal, $comparison);
    }

    /**
     * Filter the query on the venta_referenciapago column
     *
     * Example usage:
     * <code>
     * $query->filterByVentaReferenciapago('fooValue');   // WHERE venta_referenciapago = 'fooValue'
     * $query->filterByVentaReferenciapago('%fooValue%'); // WHERE venta_referenciapago LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ventaReferenciapago The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByVentaReferenciapago($ventaReferenciapago = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ventaReferenciapago)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ventaReferenciapago)) {
                $ventaReferenciapago = str_replace('*', '%', $ventaReferenciapago);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VentaPeer::VENTA_REFERENCIAPAGO, $ventaReferenciapago, $comparison);
    }

    /**
     * Filter the query by a related Paciente object
     *
     * @param   Paciente|PropelObjectCollection $paciente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPaciente($paciente, $comparison = null)
    {
        if ($paciente instanceof Paciente) {
            return $this
                ->addUsingAlias(VentaPeer::IDPACIENTE, $paciente->getIdpaciente(), $comparison);
        } elseif ($paciente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VentaPeer::IDPACIENTE, $paciente->toKeyValue('PrimaryKey', 'Idpaciente'), $comparison);
        } else {
            throw new PropelException('filterByPaciente() only accepts arguments of type Paciente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Paciente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function joinPaciente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Paciente');

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
            $this->addJoinObject($join, 'Paciente');
        }

        return $this;
    }

    /**
     * Use the Paciente relation Paciente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacienteQuery A secondary query class using the current class as primary query
     */
    public function usePacienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPaciente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Paciente', 'PacienteQuery');
    }

    /**
     * Filter the query by a related Cargoventa object
     *
     * @param   Cargoventa|PropelObjectCollection $cargoventa  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCargoventa($cargoventa, $comparison = null)
    {
        if ($cargoventa instanceof Cargoventa) {
            return $this
                ->addUsingAlias(VentaPeer::IDVENTA, $cargoventa->getIdventa(), $comparison);
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
     * @return VentaQuery The current query, for fluid interface
     */
    public function joinCargoventa($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useCargoventaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCargoventa($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cargoventa', 'CargoventaQuery');
    }

    /**
     * Filter the query by a related Factura object
     *
     * @param   Factura|PropelObjectCollection $factura  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactura($factura, $comparison = null)
    {
        if ($factura instanceof Factura) {
            return $this
                ->addUsingAlias(VentaPeer::IDVENTA, $factura->getIdventa(), $comparison);
        } elseif ($factura instanceof PropelObjectCollection) {
            return $this
                ->useFacturaQuery()
                ->filterByPrimaryKeys($factura->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFactura() only accepts arguments of type Factura or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Factura relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function joinFactura($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Factura');

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
            $this->addJoinObject($join, 'Factura');
        }

        return $this;
    }

    /**
     * Use the Factura relation Factura object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FacturaQuery A secondary query class using the current class as primary query
     */
    public function useFacturaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFactura($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Factura', 'FacturaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Venta $venta Object to remove from the list of results
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function prune($venta = null)
    {
        if ($venta) {
            $this->addUsingAlias(VentaPeer::IDVENTA, $venta->getIdventa(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
