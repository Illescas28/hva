<?php


/**
 * Base class that represents a query for the 'bancotransaccion' table.
 *
 *
 *
 * @method BancotransaccionQuery orderByIdbancotransaccion($order = Criteria::ASC) Order by the idbancotransaccion column
 * @method BancotransaccionQuery orderByIdbanco($order = Criteria::ASC) Order by the idbanco column
 * @method BancotransaccionQuery orderByBancotransaccionTipo($order = Criteria::ASC) Order by the bancotransaccion_tipo column
 * @method BancotransaccionQuery orderByBancotransaccionReferencia($order = Criteria::ASC) Order by the bancotransaccion_referencia column
 * @method BancotransaccionQuery orderByIdtransaccion($order = Criteria::ASC) Order by the idtransaccion column
 * @method BancotransaccionQuery orderByBancotransaccionCantidad($order = Criteria::ASC) Order by the bancotransaccion_cantidad column
 * @method BancotransaccionQuery orderByBancotransaccionFecha($order = Criteria::ASC) Order by the bancotransaccion_fecha column
 * @method BancotransaccionQuery orderByBancotransaccionNota($order = Criteria::ASC) Order by the bancotransaccion_nota column
 *
 * @method BancotransaccionQuery groupByIdbancotransaccion() Group by the idbancotransaccion column
 * @method BancotransaccionQuery groupByIdbanco() Group by the idbanco column
 * @method BancotransaccionQuery groupByBancotransaccionTipo() Group by the bancotransaccion_tipo column
 * @method BancotransaccionQuery groupByBancotransaccionReferencia() Group by the bancotransaccion_referencia column
 * @method BancotransaccionQuery groupByIdtransaccion() Group by the idtransaccion column
 * @method BancotransaccionQuery groupByBancotransaccionCantidad() Group by the bancotransaccion_cantidad column
 * @method BancotransaccionQuery groupByBancotransaccionFecha() Group by the bancotransaccion_fecha column
 * @method BancotransaccionQuery groupByBancotransaccionNota() Group by the bancotransaccion_nota column
 *
 * @method BancotransaccionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method BancotransaccionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method BancotransaccionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method BancotransaccionQuery leftJoinBanco($relationAlias = null) Adds a LEFT JOIN clause to the query using the Banco relation
 * @method BancotransaccionQuery rightJoinBanco($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Banco relation
 * @method BancotransaccionQuery innerJoinBanco($relationAlias = null) Adds a INNER JOIN clause to the query using the Banco relation
 *
 * @method Bancotransaccion findOne(PropelPDO $con = null) Return the first Bancotransaccion matching the query
 * @method Bancotransaccion findOneOrCreate(PropelPDO $con = null) Return the first Bancotransaccion matching the query, or a new Bancotransaccion object populated from the query conditions when no match is found
 *
 * @method Bancotransaccion findOneByIdbanco(int $idbanco) Return the first Bancotransaccion filtered by the idbanco column
 * @method Bancotransaccion findOneByBancotransaccionTipo(string $bancotransaccion_tipo) Return the first Bancotransaccion filtered by the bancotransaccion_tipo column
 * @method Bancotransaccion findOneByBancotransaccionReferencia(string $bancotransaccion_referencia) Return the first Bancotransaccion filtered by the bancotransaccion_referencia column
 * @method Bancotransaccion findOneByIdtransaccion(int $idtransaccion) Return the first Bancotransaccion filtered by the idtransaccion column
 * @method Bancotransaccion findOneByBancotransaccionCantidad(string $bancotransaccion_cantidad) Return the first Bancotransaccion filtered by the bancotransaccion_cantidad column
 * @method Bancotransaccion findOneByBancotransaccionFecha(string $bancotransaccion_fecha) Return the first Bancotransaccion filtered by the bancotransaccion_fecha column
 * @method Bancotransaccion findOneByBancotransaccionNota(string $bancotransaccion_nota) Return the first Bancotransaccion filtered by the bancotransaccion_nota column
 *
 * @method array findByIdbancotransaccion(int $idbancotransaccion) Return Bancotransaccion objects filtered by the idbancotransaccion column
 * @method array findByIdbanco(int $idbanco) Return Bancotransaccion objects filtered by the idbanco column
 * @method array findByBancotransaccionTipo(string $bancotransaccion_tipo) Return Bancotransaccion objects filtered by the bancotransaccion_tipo column
 * @method array findByBancotransaccionReferencia(string $bancotransaccion_referencia) Return Bancotransaccion objects filtered by the bancotransaccion_referencia column
 * @method array findByIdtransaccion(int $idtransaccion) Return Bancotransaccion objects filtered by the idtransaccion column
 * @method array findByBancotransaccionCantidad(string $bancotransaccion_cantidad) Return Bancotransaccion objects filtered by the bancotransaccion_cantidad column
 * @method array findByBancotransaccionFecha(string $bancotransaccion_fecha) Return Bancotransaccion objects filtered by the bancotransaccion_fecha column
 * @method array findByBancotransaccionNota(string $bancotransaccion_nota) Return Bancotransaccion objects filtered by the bancotransaccion_nota column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseBancotransaccionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseBancotransaccionQuery object.
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
            $modelName = 'Bancotransaccion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new BancotransaccionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   BancotransaccionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return BancotransaccionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof BancotransaccionQuery) {
            return $criteria;
        }
        $query = new BancotransaccionQuery(null, null, $modelAlias);

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
     * @return   Bancotransaccion|Bancotransaccion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = BancotransaccionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(BancotransaccionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Bancotransaccion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdbancotransaccion($key, $con = null)
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
     * @return                 Bancotransaccion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idbancotransaccion`, `idbanco`, `bancotransaccion_tipo`, `bancotransaccion_referencia`, `idtransaccion`, `bancotransaccion_cantidad`, `bancotransaccion_fecha`, `bancotransaccion_nota` FROM `bancotransaccion` WHERE `idbancotransaccion` = :p0';
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
            $obj = new Bancotransaccion();
            $obj->hydrate($row);
            BancotransaccionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Bancotransaccion|Bancotransaccion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Bancotransaccion[]|mixed the list of results, formatted by the current formatter
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
     * @return BancotransaccionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(BancotransaccionPeer::IDBANCOTRANSACCION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return BancotransaccionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(BancotransaccionPeer::IDBANCOTRANSACCION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idbancotransaccion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdbancotransaccion(1234); // WHERE idbancotransaccion = 1234
     * $query->filterByIdbancotransaccion(array(12, 34)); // WHERE idbancotransaccion IN (12, 34)
     * $query->filterByIdbancotransaccion(array('min' => 12)); // WHERE idbancotransaccion >= 12
     * $query->filterByIdbancotransaccion(array('max' => 12)); // WHERE idbancotransaccion <= 12
     * </code>
     *
     * @param     mixed $idbancotransaccion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancotransaccionQuery The current query, for fluid interface
     */
    public function filterByIdbancotransaccion($idbancotransaccion = null, $comparison = null)
    {
        if (is_array($idbancotransaccion)) {
            $useMinMax = false;
            if (isset($idbancotransaccion['min'])) {
                $this->addUsingAlias(BancotransaccionPeer::IDBANCOTRANSACCION, $idbancotransaccion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idbancotransaccion['max'])) {
                $this->addUsingAlias(BancotransaccionPeer::IDBANCOTRANSACCION, $idbancotransaccion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BancotransaccionPeer::IDBANCOTRANSACCION, $idbancotransaccion, $comparison);
    }

    /**
     * Filter the query on the idbanco column
     *
     * Example usage:
     * <code>
     * $query->filterByIdbanco(1234); // WHERE idbanco = 1234
     * $query->filterByIdbanco(array(12, 34)); // WHERE idbanco IN (12, 34)
     * $query->filterByIdbanco(array('min' => 12)); // WHERE idbanco >= 12
     * $query->filterByIdbanco(array('max' => 12)); // WHERE idbanco <= 12
     * </code>
     *
     * @see       filterByBanco()
     *
     * @param     mixed $idbanco The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancotransaccionQuery The current query, for fluid interface
     */
    public function filterByIdbanco($idbanco = null, $comparison = null)
    {
        if (is_array($idbanco)) {
            $useMinMax = false;
            if (isset($idbanco['min'])) {
                $this->addUsingAlias(BancotransaccionPeer::IDBANCO, $idbanco['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idbanco['max'])) {
                $this->addUsingAlias(BancotransaccionPeer::IDBANCO, $idbanco['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BancotransaccionPeer::IDBANCO, $idbanco, $comparison);
    }

    /**
     * Filter the query on the bancotransaccion_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByBancotransaccionTipo('fooValue');   // WHERE bancotransaccion_tipo = 'fooValue'
     * $query->filterByBancotransaccionTipo('%fooValue%'); // WHERE bancotransaccion_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bancotransaccionTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancotransaccionQuery The current query, for fluid interface
     */
    public function filterByBancotransaccionTipo($bancotransaccionTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bancotransaccionTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bancotransaccionTipo)) {
                $bancotransaccionTipo = str_replace('*', '%', $bancotransaccionTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BancotransaccionPeer::BANCOTRANSACCION_TIPO, $bancotransaccionTipo, $comparison);
    }

    /**
     * Filter the query on the bancotransaccion_referencia column
     *
     * Example usage:
     * <code>
     * $query->filterByBancotransaccionReferencia('fooValue');   // WHERE bancotransaccion_referencia = 'fooValue'
     * $query->filterByBancotransaccionReferencia('%fooValue%'); // WHERE bancotransaccion_referencia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bancotransaccionReferencia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancotransaccionQuery The current query, for fluid interface
     */
    public function filterByBancotransaccionReferencia($bancotransaccionReferencia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bancotransaccionReferencia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bancotransaccionReferencia)) {
                $bancotransaccionReferencia = str_replace('*', '%', $bancotransaccionReferencia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BancotransaccionPeer::BANCOTRANSACCION_REFERENCIA, $bancotransaccionReferencia, $comparison);
    }

    /**
     * Filter the query on the idtransaccion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtransaccion(1234); // WHERE idtransaccion = 1234
     * $query->filterByIdtransaccion(array(12, 34)); // WHERE idtransaccion IN (12, 34)
     * $query->filterByIdtransaccion(array('min' => 12)); // WHERE idtransaccion >= 12
     * $query->filterByIdtransaccion(array('max' => 12)); // WHERE idtransaccion <= 12
     * </code>
     *
     * @param     mixed $idtransaccion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancotransaccionQuery The current query, for fluid interface
     */
    public function filterByIdtransaccion($idtransaccion = null, $comparison = null)
    {
        if (is_array($idtransaccion)) {
            $useMinMax = false;
            if (isset($idtransaccion['min'])) {
                $this->addUsingAlias(BancotransaccionPeer::IDTRANSACCION, $idtransaccion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtransaccion['max'])) {
                $this->addUsingAlias(BancotransaccionPeer::IDTRANSACCION, $idtransaccion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BancotransaccionPeer::IDTRANSACCION, $idtransaccion, $comparison);
    }

    /**
     * Filter the query on the bancotransaccion_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByBancotransaccionCantidad(1234); // WHERE bancotransaccion_cantidad = 1234
     * $query->filterByBancotransaccionCantidad(array(12, 34)); // WHERE bancotransaccion_cantidad IN (12, 34)
     * $query->filterByBancotransaccionCantidad(array('min' => 12)); // WHERE bancotransaccion_cantidad >= 12
     * $query->filterByBancotransaccionCantidad(array('max' => 12)); // WHERE bancotransaccion_cantidad <= 12
     * </code>
     *
     * @param     mixed $bancotransaccionCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancotransaccionQuery The current query, for fluid interface
     */
    public function filterByBancotransaccionCantidad($bancotransaccionCantidad = null, $comparison = null)
    {
        if (is_array($bancotransaccionCantidad)) {
            $useMinMax = false;
            if (isset($bancotransaccionCantidad['min'])) {
                $this->addUsingAlias(BancotransaccionPeer::BANCOTRANSACCION_CANTIDAD, $bancotransaccionCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bancotransaccionCantidad['max'])) {
                $this->addUsingAlias(BancotransaccionPeer::BANCOTRANSACCION_CANTIDAD, $bancotransaccionCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BancotransaccionPeer::BANCOTRANSACCION_CANTIDAD, $bancotransaccionCantidad, $comparison);
    }

    /**
     * Filter the query on the bancotransaccion_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByBancotransaccionFecha('2011-03-14'); // WHERE bancotransaccion_fecha = '2011-03-14'
     * $query->filterByBancotransaccionFecha('now'); // WHERE bancotransaccion_fecha = '2011-03-14'
     * $query->filterByBancotransaccionFecha(array('max' => 'yesterday')); // WHERE bancotransaccion_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $bancotransaccionFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancotransaccionQuery The current query, for fluid interface
     */
    public function filterByBancotransaccionFecha($bancotransaccionFecha = null, $comparison = null)
    {
        if (is_array($bancotransaccionFecha)) {
            $useMinMax = false;
            if (isset($bancotransaccionFecha['min'])) {
                $this->addUsingAlias(BancotransaccionPeer::BANCOTRANSACCION_FECHA, $bancotransaccionFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bancotransaccionFecha['max'])) {
                $this->addUsingAlias(BancotransaccionPeer::BANCOTRANSACCION_FECHA, $bancotransaccionFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BancotransaccionPeer::BANCOTRANSACCION_FECHA, $bancotransaccionFecha, $comparison);
    }

    /**
     * Filter the query on the bancotransaccion_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByBancotransaccionNota('fooValue');   // WHERE bancotransaccion_nota = 'fooValue'
     * $query->filterByBancotransaccionNota('%fooValue%'); // WHERE bancotransaccion_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bancotransaccionNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancotransaccionQuery The current query, for fluid interface
     */
    public function filterByBancotransaccionNota($bancotransaccionNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bancotransaccionNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bancotransaccionNota)) {
                $bancotransaccionNota = str_replace('*', '%', $bancotransaccionNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BancotransaccionPeer::BANCOTRANSACCION_NOTA, $bancotransaccionNota, $comparison);
    }

    /**
     * Filter the query by a related Banco object
     *
     * @param   Banco|PropelObjectCollection $banco The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 BancotransaccionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByBanco($banco, $comparison = null)
    {
        if ($banco instanceof Banco) {
            return $this
                ->addUsingAlias(BancotransaccionPeer::IDBANCO, $banco->getIdbanco(), $comparison);
        } elseif ($banco instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(BancotransaccionPeer::IDBANCO, $banco->toKeyValue('PrimaryKey', 'Idbanco'), $comparison);
        } else {
            throw new PropelException('filterByBanco() only accepts arguments of type Banco or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Banco relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return BancotransaccionQuery The current query, for fluid interface
     */
    public function joinBanco($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Banco');

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
            $this->addJoinObject($join, 'Banco');
        }

        return $this;
    }

    /**
     * Use the Banco relation Banco object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   BancoQuery A secondary query class using the current class as primary query
     */
    public function useBancoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBanco($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Banco', 'BancoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Bancotransaccion $bancotransaccion Object to remove from the list of results
     *
     * @return BancotransaccionQuery The current query, for fluid interface
     */
    public function prune($bancotransaccion = null)
    {
        if ($bancotransaccion) {
            $this->addUsingAlias(BancotransaccionPeer::IDBANCOTRANSACCION, $bancotransaccion->getIdbancotransaccion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
