<?php


/**
 * Base class that represents a query for the 'banco' table.
 *
 *
 *
 * @method BancoQuery orderByIdbanco($order = Criteria::ASC) Order by the idbanco column
 * @method BancoQuery orderByBancoNombre($order = Criteria::ASC) Order by the banco_nombre column
 * @method BancoQuery orderByBancoCuenta($order = Criteria::ASC) Order by the banco_cuenta column
 * @method BancoQuery orderByBancoDescripcion($order = Criteria::ASC) Order by the banco_descripcion column
 * @method BancoQuery orderByBancoBalance($order = Criteria::ASC) Order by the banco_balance column
 *
 * @method BancoQuery groupByIdbanco() Group by the idbanco column
 * @method BancoQuery groupByBancoNombre() Group by the banco_nombre column
 * @method BancoQuery groupByBancoCuenta() Group by the banco_cuenta column
 * @method BancoQuery groupByBancoDescripcion() Group by the banco_descripcion column
 * @method BancoQuery groupByBancoBalance() Group by the banco_balance column
 *
 * @method BancoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method BancoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method BancoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method BancoQuery leftJoinBancotransaccion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Bancotransaccion relation
 * @method BancoQuery rightJoinBancotransaccion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Bancotransaccion relation
 * @method BancoQuery innerJoinBancotransaccion($relationAlias = null) Adds a INNER JOIN clause to the query using the Bancotransaccion relation
 *
 * @method Banco findOne(PropelPDO $con = null) Return the first Banco matching the query
 * @method Banco findOneOrCreate(PropelPDO $con = null) Return the first Banco matching the query, or a new Banco object populated from the query conditions when no match is found
 *
 * @method Banco findOneByBancoNombre(string $banco_nombre) Return the first Banco filtered by the banco_nombre column
 * @method Banco findOneByBancoCuenta(string $banco_cuenta) Return the first Banco filtered by the banco_cuenta column
 * @method Banco findOneByBancoDescripcion(string $banco_descripcion) Return the first Banco filtered by the banco_descripcion column
 * @method Banco findOneByBancoBalance(string $banco_balance) Return the first Banco filtered by the banco_balance column
 *
 * @method array findByIdbanco(int $idbanco) Return Banco objects filtered by the idbanco column
 * @method array findByBancoNombre(string $banco_nombre) Return Banco objects filtered by the banco_nombre column
 * @method array findByBancoCuenta(string $banco_cuenta) Return Banco objects filtered by the banco_cuenta column
 * @method array findByBancoDescripcion(string $banco_descripcion) Return Banco objects filtered by the banco_descripcion column
 * @method array findByBancoBalance(string $banco_balance) Return Banco objects filtered by the banco_balance column
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
        $sql = 'SELECT `idbanco`, `banco_nombre`, `banco_cuenta`, `banco_descripcion`, `banco_balance` FROM `banco` WHERE `idbanco` = :p0';
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
     * Filter the query on the banco_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByBancoNombre('fooValue');   // WHERE banco_nombre = 'fooValue'
     * $query->filterByBancoNombre('%fooValue%'); // WHERE banco_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bancoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancoQuery The current query, for fluid interface
     */
    public function filterByBancoNombre($bancoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bancoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bancoNombre)) {
                $bancoNombre = str_replace('*', '%', $bancoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BancoPeer::BANCO_NOMBRE, $bancoNombre, $comparison);
    }

    /**
     * Filter the query on the banco_cuenta column
     *
     * Example usage:
     * <code>
     * $query->filterByBancoCuenta('fooValue');   // WHERE banco_cuenta = 'fooValue'
     * $query->filterByBancoCuenta('%fooValue%'); // WHERE banco_cuenta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bancoCuenta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancoQuery The current query, for fluid interface
     */
    public function filterByBancoCuenta($bancoCuenta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bancoCuenta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bancoCuenta)) {
                $bancoCuenta = str_replace('*', '%', $bancoCuenta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BancoPeer::BANCO_CUENTA, $bancoCuenta, $comparison);
    }

    /**
     * Filter the query on the banco_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByBancoDescripcion('fooValue');   // WHERE banco_descripcion = 'fooValue'
     * $query->filterByBancoDescripcion('%fooValue%'); // WHERE banco_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bancoDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BancoQuery The current query, for fluid interface
     */
    public function filterByBancoDescripcion($bancoDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bancoDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bancoDescripcion)) {
                $bancoDescripcion = str_replace('*', '%', $bancoDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BancoPeer::BANCO_DESCRIPCION, $bancoDescripcion, $comparison);
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
     * Filter the query by a related Bancotransaccion object
     *
     * @param   Bancotransaccion|PropelObjectCollection $bancotransaccion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 BancoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByBancotransaccion($bancotransaccion, $comparison = null)
    {
        if ($bancotransaccion instanceof Bancotransaccion) {
            return $this
                ->addUsingAlias(BancoPeer::IDBANCO, $bancotransaccion->getIdbanco(), $comparison);
        } elseif ($bancotransaccion instanceof PropelObjectCollection) {
            return $this
                ->useBancotransaccionQuery()
                ->filterByPrimaryKeys($bancotransaccion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBancotransaccion() only accepts arguments of type Bancotransaccion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Bancotransaccion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return BancoQuery The current query, for fluid interface
     */
    public function joinBancotransaccion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Bancotransaccion');

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
            $this->addJoinObject($join, 'Bancotransaccion');
        }

        return $this;
    }

    /**
     * Use the Bancotransaccion relation Bancotransaccion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   BancotransaccionQuery A secondary query class using the current class as primary query
     */
    public function useBancotransaccionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBancotransaccion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Bancotransaccion', 'BancotransaccionQuery');
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
