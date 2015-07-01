<?php


/**
 * Base class that represents a query for the 'banco' table.
 *
 *
 *
 * @method BancoQuery orderByIdbanco($order = Criteria::ASC) Order by the idbanco column
 * @method BancoQuery orderByIdconceptobanco($order = Criteria::ASC) Order by the idconceptobanco column
 * @method BancoQuery orderByBancoFecha($order = Criteria::ASC) Order by the banco_fecha column
 * @method BancoQuery orderByBancoTipomovimiento($order = Criteria::ASC) Order by the banco_tipomovimiento column
 * @method BancoQuery orderByBancoCantidad($order = Criteria::ASC) Order by the banco_cantidad column
 * @method BancoQuery orderByBancoBalance($order = Criteria::ASC) Order by the banco_balance column
 * @method BancoQuery orderByBancoNota($order = Criteria::ASC) Order by the banco_nota column
 *
 * @method BancoQuery groupByIdbanco() Group by the idbanco column
 * @method BancoQuery groupByIdconceptobanco() Group by the idconceptobanco column
 * @method BancoQuery groupByBancoFecha() Group by the banco_fecha column
 * @method BancoQuery groupByBancoTipomovimiento() Group by the banco_tipomovimiento column
 * @method BancoQuery groupByBancoCantidad() Group by the banco_cantidad column
 * @method BancoQuery groupByBancoBalance() Group by the banco_balance column
 * @method BancoQuery groupByBancoNota() Group by the banco_nota column
 *
 * @method BancoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method BancoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method BancoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method BancoQuery leftJoinConceptobanco($relationAlias = null) Adds a LEFT JOIN clause to the query using the Conceptobanco relation
 * @method BancoQuery rightJoinConceptobanco($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Conceptobanco relation
 * @method BancoQuery innerJoinConceptobanco($relationAlias = null) Adds a INNER JOIN clause to the query using the Conceptobanco relation
 *
 * @method BancoQuery leftJoinReferenciaabono($relationAlias = null) Adds a LEFT JOIN clause to the query using the Referenciaabono relation
 * @method BancoQuery rightJoinReferenciaabono($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Referenciaabono relation
 * @method BancoQuery innerJoinReferenciaabono($relationAlias = null) Adds a INNER JOIN clause to the query using the Referenciaabono relation
 *
 * @method Banco findOne(PropelPDO $con = null) Return the first Banco matching the query
 * @method Banco findOneOrCreate(PropelPDO $con = null) Return the first Banco matching the query, or a new Banco object populated from the query conditions when no match is found
 *
 * @method Banco findOneByIdconceptobanco(int $idconceptobanco) Return the first Banco filtered by the idconceptobanco column
 * @method Banco findOneByBancoFecha(string $banco_fecha) Return the first Banco filtered by the banco_fecha column
 * @method Banco findOneByBancoTipomovimiento(string $banco_tipomovimiento) Return the first Banco filtered by the banco_tipomovimiento column
 * @method Banco findOneByBancoCantidad(string $banco_cantidad) Return the first Banco filtered by the banco_cantidad column
 * @method Banco findOneByBancoBalance(string $banco_balance) Return the first Banco filtered by the banco_balance column
 * @method Banco findOneByBancoNota(string $banco_nota) Return the first Banco filtered by the banco_nota column
 *
 * @method array findByIdbanco(int $idbanco) Return Banco objects filtered by the idbanco column
 * @method array findByIdconceptobanco(int $idconceptobanco) Return Banco objects filtered by the idconceptobanco column
 * @method array findByBancoFecha(string $banco_fecha) Return Banco objects filtered by the banco_fecha column
 * @method array findByBancoTipomovimiento(string $banco_tipomovimiento) Return Banco objects filtered by the banco_tipomovimiento column
 * @method array findByBancoCantidad(string $banco_cantidad) Return Banco objects filtered by the banco_cantidad column
 * @method array findByBancoBalance(string $banco_balance) Return Banco objects filtered by the banco_balance column
 * @method array findByBancoNota(string $banco_nota) Return Banco objects filtered by the banco_nota column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseBancoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseBancoQuery object.
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
            $modelName = 'Banco';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new BancoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   BancoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return BancoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof BancoQuery) {
            return $criteria;
        }
        $query = new BancoQuery(null, null, $modelAlias);

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
     * @return   Banco|Banco[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = BancoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(BancoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Banco A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdbanco($key, $con = null)
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
     * @return                 Banco A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idbanco`, `idconceptobanco`, `banco_fecha`, `banco_tipomovimiento`, `banco_cantidad`, `banco_balance`, `banco_nota` FROM `banco` WHERE `idbanco` = :p0';
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
            $obj = new Banco();
            $obj->hydrate($row);
            BancoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Banco|Banco[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Banco[]|mixed the list of results, formatted by the current formatter
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
     * @return BancoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(BancoPeer::IDBANCO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return BancoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(BancoPeer::IDBANCO, $keys, Criteria::IN);
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
     * @param     mixed $idbanco The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancoQuery The current query, for fluid interface
     */
    public function filterByIdbanco($idbanco = null, $comparison = null)
    {
        if (is_array($idbanco)) {
            $useMinMax = false;
            if (isset($idbanco['min'])) {
                $this->addUsingAlias(BancoPeer::IDBANCO, $idbanco['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idbanco['max'])) {
                $this->addUsingAlias(BancoPeer::IDBANCO, $idbanco['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BancoPeer::IDBANCO, $idbanco, $comparison);
    }

    /**
     * Filter the query on the idconceptobanco column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconceptobanco(1234); // WHERE idconceptobanco = 1234
     * $query->filterByIdconceptobanco(array(12, 34)); // WHERE idconceptobanco IN (12, 34)
     * $query->filterByIdconceptobanco(array('min' => 12)); // WHERE idconceptobanco >= 12
     * $query->filterByIdconceptobanco(array('max' => 12)); // WHERE idconceptobanco <= 12
     * </code>
     *
     * @see       filterByConceptobanco()
     *
     * @param     mixed $idconceptobanco The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancoQuery The current query, for fluid interface
     */
    public function filterByIdconceptobanco($idconceptobanco = null, $comparison = null)
    {
        if (is_array($idconceptobanco)) {
            $useMinMax = false;
            if (isset($idconceptobanco['min'])) {
                $this->addUsingAlias(BancoPeer::IDCONCEPTOBANCO, $idconceptobanco['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconceptobanco['max'])) {
                $this->addUsingAlias(BancoPeer::IDCONCEPTOBANCO, $idconceptobanco['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BancoPeer::IDCONCEPTOBANCO, $idconceptobanco, $comparison);
    }

    /**
     * Filter the query on the banco_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByBancoFecha('fooValue');   // WHERE banco_fecha = 'fooValue'
     * $query->filterByBancoFecha('%fooValue%'); // WHERE banco_fecha LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bancoFecha The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancoQuery The current query, for fluid interface
     */
    public function filterByBancoFecha($bancoFecha = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bancoFecha)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bancoFecha)) {
                $bancoFecha = str_replace('*', '%', $bancoFecha);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BancoPeer::BANCO_FECHA, $bancoFecha, $comparison);
    }

    /**
     * Filter the query on the banco_tipomovimiento column
     *
     * Example usage:
     * <code>
     * $query->filterByBancoTipomovimiento('fooValue');   // WHERE banco_tipomovimiento = 'fooValue'
     * $query->filterByBancoTipomovimiento('%fooValue%'); // WHERE banco_tipomovimiento LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bancoTipomovimiento The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancoQuery The current query, for fluid interface
     */
    public function filterByBancoTipomovimiento($bancoTipomovimiento = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bancoTipomovimiento)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bancoTipomovimiento)) {
                $bancoTipomovimiento = str_replace('*', '%', $bancoTipomovimiento);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BancoPeer::BANCO_TIPOMOVIMIENTO, $bancoTipomovimiento, $comparison);
    }

    /**
     * Filter the query on the banco_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByBancoCantidad(1234); // WHERE banco_cantidad = 1234
     * $query->filterByBancoCantidad(array(12, 34)); // WHERE banco_cantidad IN (12, 34)
     * $query->filterByBancoCantidad(array('min' => 12)); // WHERE banco_cantidad >= 12
     * $query->filterByBancoCantidad(array('max' => 12)); // WHERE banco_cantidad <= 12
     * </code>
     *
     * @param     mixed $bancoCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancoQuery The current query, for fluid interface
     */
    public function filterByBancoCantidad($bancoCantidad = null, $comparison = null)
    {
        if (is_array($bancoCantidad)) {
            $useMinMax = false;
            if (isset($bancoCantidad['min'])) {
                $this->addUsingAlias(BancoPeer::BANCO_CANTIDAD, $bancoCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bancoCantidad['max'])) {
                $this->addUsingAlias(BancoPeer::BANCO_CANTIDAD, $bancoCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BancoPeer::BANCO_CANTIDAD, $bancoCantidad, $comparison);
    }

    /**
     * Filter the query on the banco_balance column
     *
     * Example usage:
     * <code>
     * $query->filterByBancoBalance(1234); // WHERE banco_balance = 1234
     * $query->filterByBancoBalance(array(12, 34)); // WHERE banco_balance IN (12, 34)
     * $query->filterByBancoBalance(array('min' => 12)); // WHERE banco_balance >= 12
     * $query->filterByBancoBalance(array('max' => 12)); // WHERE banco_balance <= 12
     * </code>
     *
     * @param     mixed $bancoBalance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancoQuery The current query, for fluid interface
     */
    public function filterByBancoBalance($bancoBalance = null, $comparison = null)
    {
        if (is_array($bancoBalance)) {
            $useMinMax = false;
            if (isset($bancoBalance['min'])) {
                $this->addUsingAlias(BancoPeer::BANCO_BALANCE, $bancoBalance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bancoBalance['max'])) {
                $this->addUsingAlias(BancoPeer::BANCO_BALANCE, $bancoBalance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BancoPeer::BANCO_BALANCE, $bancoBalance, $comparison);
    }

    /**
     * Filter the query on the banco_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByBancoNota('fooValue');   // WHERE banco_nota = 'fooValue'
     * $query->filterByBancoNota('%fooValue%'); // WHERE banco_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bancoNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancoQuery The current query, for fluid interface
     */
    public function filterByBancoNota($bancoNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bancoNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bancoNota)) {
                $bancoNota = str_replace('*', '%', $bancoNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BancoPeer::BANCO_NOTA, $bancoNota, $comparison);
    }

    /**
     * Filter the query by a related Conceptobanco object
     *
     * @param   Conceptobanco|PropelObjectCollection $conceptobanco The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 BancoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConceptobanco($conceptobanco, $comparison = null)
    {
        if ($conceptobanco instanceof Conceptobanco) {
            return $this
                ->addUsingAlias(BancoPeer::IDCONCEPTOBANCO, $conceptobanco->getIdbancotransaccion(), $comparison);
        } elseif ($conceptobanco instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(BancoPeer::IDCONCEPTOBANCO, $conceptobanco->toKeyValue('PrimaryKey', 'Idbancotransaccion'), $comparison);
        } else {
            throw new PropelException('filterByConceptobanco() only accepts arguments of type Conceptobanco or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Conceptobanco relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return BancoQuery The current query, for fluid interface
     */
    public function joinConceptobanco($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Conceptobanco');

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
            $this->addJoinObject($join, 'Conceptobanco');
        }

        return $this;
    }

    /**
     * Use the Conceptobanco relation Conceptobanco object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ConceptobancoQuery A secondary query class using the current class as primary query
     */
    public function useConceptobancoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinConceptobanco($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Conceptobanco', 'ConceptobancoQuery');
    }

    /**
     * Filter the query by a related Referenciaabono object
     *
     * @param   Referenciaabono|PropelObjectCollection $referenciaabono  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 BancoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByReferenciaabono($referenciaabono, $comparison = null)
    {
        if ($referenciaabono instanceof Referenciaabono) {
            return $this
                ->addUsingAlias(BancoPeer::IDBANCO, $referenciaabono->getIdbanco(), $comparison);
        } elseif ($referenciaabono instanceof PropelObjectCollection) {
            return $this
                ->useReferenciaabonoQuery()
                ->filterByPrimaryKeys($referenciaabono->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByReferenciaabono() only accepts arguments of type Referenciaabono or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Referenciaabono relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return BancoQuery The current query, for fluid interface
     */
    public function joinReferenciaabono($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Referenciaabono');

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
            $this->addJoinObject($join, 'Referenciaabono');
        }

        return $this;
    }

    /**
     * Use the Referenciaabono relation Referenciaabono object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ReferenciaabonoQuery A secondary query class using the current class as primary query
     */
    public function useReferenciaabonoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinReferenciaabono($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Referenciaabono', 'ReferenciaabonoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Banco $banco Object to remove from the list of results
     *
     * @return BancoQuery The current query, for fluid interface
     */
    public function prune($banco = null)
    {
        if ($banco) {
            $this->addUsingAlias(BancoPeer::IDBANCO, $banco->getIdbanco(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
