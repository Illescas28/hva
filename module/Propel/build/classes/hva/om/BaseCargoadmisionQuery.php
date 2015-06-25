<?php


/**
 * Base class that represents a query for the 'cargoadmision' table.
 *
 *
 *
 * @method CargoadmisionQuery orderByIdcargoadmision($order = Criteria::ASC) Order by the idcargoadmision column
 * @method CargoadmisionQuery orderByIdadmision($order = Criteria::ASC) Order by the idadmision column
 * @method CargoadmisionQuery orderByIdlugarinventario($order = Criteria::ASC) Order by the idlugarinventario column
 * @method CargoadmisionQuery orderByIdservicio($order = Criteria::ASC) Order by the idservicio column
 * @method CargoadmisionQuery orderByCargoadmisionTipo($order = Criteria::ASC) Order by the cargoadmision_tipo column
 * @method CargoadmisionQuery orderByCargoadmisionFecha($order = Criteria::ASC) Order by the cargoadmision_fecha column
 * @method CargoadmisionQuery orderByCargoadmisionCantidad($order = Criteria::ASC) Order by the cargoadmision_cantidad column
 * @method CargoadmisionQuery orderByCargoadmisionMonto($order = Criteria::ASC) Order by the cargoadmision_monto column
 *
 * @method CargoadmisionQuery groupByIdcargoadmision() Group by the idcargoadmision column
 * @method CargoadmisionQuery groupByIdadmision() Group by the idadmision column
 * @method CargoadmisionQuery groupByIdlugarinventario() Group by the idlugarinventario column
 * @method CargoadmisionQuery groupByIdservicio() Group by the idservicio column
 * @method CargoadmisionQuery groupByCargoadmisionTipo() Group by the cargoadmision_tipo column
 * @method CargoadmisionQuery groupByCargoadmisionFecha() Group by the cargoadmision_fecha column
 * @method CargoadmisionQuery groupByCargoadmisionCantidad() Group by the cargoadmision_cantidad column
 * @method CargoadmisionQuery groupByCargoadmisionMonto() Group by the cargoadmision_monto column
 *
 * @method CargoadmisionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CargoadmisionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CargoadmisionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CargoadmisionQuery leftJoinAdmision($relationAlias = null) Adds a LEFT JOIN clause to the query using the Admision relation
 * @method CargoadmisionQuery rightJoinAdmision($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Admision relation
 * @method CargoadmisionQuery innerJoinAdmision($relationAlias = null) Adds a INNER JOIN clause to the query using the Admision relation
 *
 * @method CargoadmisionQuery leftJoinLugarinventario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Lugarinventario relation
 * @method CargoadmisionQuery rightJoinLugarinventario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Lugarinventario relation
 * @method CargoadmisionQuery innerJoinLugarinventario($relationAlias = null) Adds a INNER JOIN clause to the query using the Lugarinventario relation
 *
 * @method CargoadmisionQuery leftJoinServicio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Servicio relation
 * @method CargoadmisionQuery rightJoinServicio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Servicio relation
 * @method CargoadmisionQuery innerJoinServicio($relationAlias = null) Adds a INNER JOIN clause to the query using the Servicio relation
 *
 * @method Cargoadmision findOne(PropelPDO $con = null) Return the first Cargoadmision matching the query
 * @method Cargoadmision findOneOrCreate(PropelPDO $con = null) Return the first Cargoadmision matching the query, or a new Cargoadmision object populated from the query conditions when no match is found
 *
 * @method Cargoadmision findOneByIdadmision(int $idadmision) Return the first Cargoadmision filtered by the idadmision column
 * @method Cargoadmision findOneByIdlugarinventario(int $idlugarinventario) Return the first Cargoadmision filtered by the idlugarinventario column
 * @method Cargoadmision findOneByIdservicio(int $idservicio) Return the first Cargoadmision filtered by the idservicio column
 * @method Cargoadmision findOneByCargoadmisionTipo(string $cargoadmision_tipo) Return the first Cargoadmision filtered by the cargoadmision_tipo column
 * @method Cargoadmision findOneByCargoadmisionFecha(string $cargoadmision_fecha) Return the first Cargoadmision filtered by the cargoadmision_fecha column
 * @method Cargoadmision findOneByCargoadmisionCantidad(string $cargoadmision_cantidad) Return the first Cargoadmision filtered by the cargoadmision_cantidad column
 * @method Cargoadmision findOneByCargoadmisionMonto(string $cargoadmision_monto) Return the first Cargoadmision filtered by the cargoadmision_monto column
 *
 * @method array findByIdcargoadmision(int $idcargoadmision) Return Cargoadmision objects filtered by the idcargoadmision column
 * @method array findByIdadmision(int $idadmision) Return Cargoadmision objects filtered by the idadmision column
 * @method array findByIdlugarinventario(int $idlugarinventario) Return Cargoadmision objects filtered by the idlugarinventario column
 * @method array findByIdservicio(int $idservicio) Return Cargoadmision objects filtered by the idservicio column
 * @method array findByCargoadmisionTipo(string $cargoadmision_tipo) Return Cargoadmision objects filtered by the cargoadmision_tipo column
 * @method array findByCargoadmisionFecha(string $cargoadmision_fecha) Return Cargoadmision objects filtered by the cargoadmision_fecha column
 * @method array findByCargoadmisionCantidad(string $cargoadmision_cantidad) Return Cargoadmision objects filtered by the cargoadmision_cantidad column
 * @method array findByCargoadmisionMonto(string $cargoadmision_monto) Return Cargoadmision objects filtered by the cargoadmision_monto column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseCargoadmisionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCargoadmisionQuery object.
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
            $modelName = 'Cargoadmision';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CargoadmisionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CargoadmisionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CargoadmisionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CargoadmisionQuery) {
            return $criteria;
        }
        $query = new CargoadmisionQuery(null, null, $modelAlias);

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
     * @return   Cargoadmision|Cargoadmision[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CargoadmisionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CargoadmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cargoadmision A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcargoadmision($key, $con = null)
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
     * @return                 Cargoadmision A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcargoadmision`, `idadmision`, `idlugarinventario`, `idservicio`, `cargoadmision_tipo`, `cargoadmision_fecha`, `cargoadmision_cantidad`, `cargoadmision_monto` FROM `cargoadmision` WHERE `idcargoadmision` = :p0';
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
            $obj = new Cargoadmision();
            $obj->hydrate($row);
            CargoadmisionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cargoadmision|Cargoadmision[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cargoadmision[]|mixed the list of results, formatted by the current formatter
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
     * @return CargoadmisionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CargoadmisionPeer::IDCARGOADMISION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CargoadmisionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CargoadmisionPeer::IDCARGOADMISION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcargoadmision column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcargoadmision(1234); // WHERE idcargoadmision = 1234
     * $query->filterByIdcargoadmision(array(12, 34)); // WHERE idcargoadmision IN (12, 34)
     * $query->filterByIdcargoadmision(array('min' => 12)); // WHERE idcargoadmision >= 12
     * $query->filterByIdcargoadmision(array('max' => 12)); // WHERE idcargoadmision <= 12
     * </code>
     *
     * @param     mixed $idcargoadmision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoadmisionQuery The current query, for fluid interface
     */
    public function filterByIdcargoadmision($idcargoadmision = null, $comparison = null)
    {
        if (is_array($idcargoadmision)) {
            $useMinMax = false;
            if (isset($idcargoadmision['min'])) {
                $this->addUsingAlias(CargoadmisionPeer::IDCARGOADMISION, $idcargoadmision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcargoadmision['max'])) {
                $this->addUsingAlias(CargoadmisionPeer::IDCARGOADMISION, $idcargoadmision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoadmisionPeer::IDCARGOADMISION, $idcargoadmision, $comparison);
    }

    /**
     * Filter the query on the idadmision column
     *
     * Example usage:
     * <code>
     * $query->filterByIdadmision(1234); // WHERE idadmision = 1234
     * $query->filterByIdadmision(array(12, 34)); // WHERE idadmision IN (12, 34)
     * $query->filterByIdadmision(array('min' => 12)); // WHERE idadmision >= 12
     * $query->filterByIdadmision(array('max' => 12)); // WHERE idadmision <= 12
     * </code>
     *
     * @see       filterByAdmision()
     *
     * @param     mixed $idadmision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoadmisionQuery The current query, for fluid interface
     */
    public function filterByIdadmision($idadmision = null, $comparison = null)
    {
        if (is_array($idadmision)) {
            $useMinMax = false;
            if (isset($idadmision['min'])) {
                $this->addUsingAlias(CargoadmisionPeer::IDADMISION, $idadmision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idadmision['max'])) {
                $this->addUsingAlias(CargoadmisionPeer::IDADMISION, $idadmision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoadmisionPeer::IDADMISION, $idadmision, $comparison);
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
     * @see       filterByLugarinventario()
     *
     * @param     mixed $idlugarinventario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoadmisionQuery The current query, for fluid interface
     */
    public function filterByIdlugarinventario($idlugarinventario = null, $comparison = null)
    {
        if (is_array($idlugarinventario)) {
            $useMinMax = false;
            if (isset($idlugarinventario['min'])) {
                $this->addUsingAlias(CargoadmisionPeer::IDLUGARINVENTARIO, $idlugarinventario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idlugarinventario['max'])) {
                $this->addUsingAlias(CargoadmisionPeer::IDLUGARINVENTARIO, $idlugarinventario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoadmisionPeer::IDLUGARINVENTARIO, $idlugarinventario, $comparison);
    }

    /**
     * Filter the query on the idservicio column
     *
     * Example usage:
     * <code>
     * $query->filterByIdservicio(1234); // WHERE idservicio = 1234
     * $query->filterByIdservicio(array(12, 34)); // WHERE idservicio IN (12, 34)
     * $query->filterByIdservicio(array('min' => 12)); // WHERE idservicio >= 12
     * $query->filterByIdservicio(array('max' => 12)); // WHERE idservicio <= 12
     * </code>
     *
     * @see       filterByServicio()
     *
     * @param     mixed $idservicio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoadmisionQuery The current query, for fluid interface
     */
    public function filterByIdservicio($idservicio = null, $comparison = null)
    {
        if (is_array($idservicio)) {
            $useMinMax = false;
            if (isset($idservicio['min'])) {
                $this->addUsingAlias(CargoadmisionPeer::IDSERVICIO, $idservicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idservicio['max'])) {
                $this->addUsingAlias(CargoadmisionPeer::IDSERVICIO, $idservicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoadmisionPeer::IDSERVICIO, $idservicio, $comparison);
    }

    /**
     * Filter the query on the cargoadmision_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByCargoadmisionTipo('fooValue');   // WHERE cargoadmision_tipo = 'fooValue'
     * $query->filterByCargoadmisionTipo('%fooValue%'); // WHERE cargoadmision_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cargoadmisionTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoadmisionQuery The current query, for fluid interface
     */
    public function filterByCargoadmisionTipo($cargoadmisionTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cargoadmisionTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cargoadmisionTipo)) {
                $cargoadmisionTipo = str_replace('*', '%', $cargoadmisionTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CargoadmisionPeer::CARGOADMISION_TIPO, $cargoadmisionTipo, $comparison);
    }

    /**
     * Filter the query on the cargoadmision_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByCargoadmisionFecha('2011-03-14'); // WHERE cargoadmision_fecha = '2011-03-14'
     * $query->filterByCargoadmisionFecha('now'); // WHERE cargoadmision_fecha = '2011-03-14'
     * $query->filterByCargoadmisionFecha(array('max' => 'yesterday')); // WHERE cargoadmision_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $cargoadmisionFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoadmisionQuery The current query, for fluid interface
     */
    public function filterByCargoadmisionFecha($cargoadmisionFecha = null, $comparison = null)
    {
        if (is_array($cargoadmisionFecha)) {
            $useMinMax = false;
            if (isset($cargoadmisionFecha['min'])) {
                $this->addUsingAlias(CargoadmisionPeer::CARGOADMISION_FECHA, $cargoadmisionFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cargoadmisionFecha['max'])) {
                $this->addUsingAlias(CargoadmisionPeer::CARGOADMISION_FECHA, $cargoadmisionFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoadmisionPeer::CARGOADMISION_FECHA, $cargoadmisionFecha, $comparison);
    }

    /**
     * Filter the query on the cargoadmision_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByCargoadmisionCantidad(1234); // WHERE cargoadmision_cantidad = 1234
     * $query->filterByCargoadmisionCantidad(array(12, 34)); // WHERE cargoadmision_cantidad IN (12, 34)
     * $query->filterByCargoadmisionCantidad(array('min' => 12)); // WHERE cargoadmision_cantidad >= 12
     * $query->filterByCargoadmisionCantidad(array('max' => 12)); // WHERE cargoadmision_cantidad <= 12
     * </code>
     *
     * @param     mixed $cargoadmisionCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoadmisionQuery The current query, for fluid interface
     */
    public function filterByCargoadmisionCantidad($cargoadmisionCantidad = null, $comparison = null)
    {
        if (is_array($cargoadmisionCantidad)) {
            $useMinMax = false;
            if (isset($cargoadmisionCantidad['min'])) {
                $this->addUsingAlias(CargoadmisionPeer::CARGOADMISION_CANTIDAD, $cargoadmisionCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cargoadmisionCantidad['max'])) {
                $this->addUsingAlias(CargoadmisionPeer::CARGOADMISION_CANTIDAD, $cargoadmisionCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoadmisionPeer::CARGOADMISION_CANTIDAD, $cargoadmisionCantidad, $comparison);
    }

    /**
     * Filter the query on the cargoadmision_monto column
     *
     * Example usage:
     * <code>
     * $query->filterByCargoadmisionMonto(1234); // WHERE cargoadmision_monto = 1234
     * $query->filterByCargoadmisionMonto(array(12, 34)); // WHERE cargoadmision_monto IN (12, 34)
     * $query->filterByCargoadmisionMonto(array('min' => 12)); // WHERE cargoadmision_monto >= 12
     * $query->filterByCargoadmisionMonto(array('max' => 12)); // WHERE cargoadmision_monto <= 12
     * </code>
     *
     * @param     mixed $cargoadmisionMonto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CargoadmisionQuery The current query, for fluid interface
     */
    public function filterByCargoadmisionMonto($cargoadmisionMonto = null, $comparison = null)
    {
        if (is_array($cargoadmisionMonto)) {
            $useMinMax = false;
            if (isset($cargoadmisionMonto['min'])) {
                $this->addUsingAlias(CargoadmisionPeer::CARGOADMISION_MONTO, $cargoadmisionMonto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cargoadmisionMonto['max'])) {
                $this->addUsingAlias(CargoadmisionPeer::CARGOADMISION_MONTO, $cargoadmisionMonto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CargoadmisionPeer::CARGOADMISION_MONTO, $cargoadmisionMonto, $comparison);
    }

    /**
     * Filter the query by a related Admision object
     *
     * @param   Admision|PropelObjectCollection $admision The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CargoadmisionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAdmision($admision, $comparison = null)
    {
        if ($admision instanceof Admision) {
            return $this
                ->addUsingAlias(CargoadmisionPeer::IDADMISION, $admision->getIdadmision(), $comparison);
        } elseif ($admision instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CargoadmisionPeer::IDADMISION, $admision->toKeyValue('PrimaryKey', 'Idadmision'), $comparison);
        } else {
            throw new PropelException('filterByAdmision() only accepts arguments of type Admision or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Admision relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CargoadmisionQuery The current query, for fluid interface
     */
    public function joinAdmision($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Admision');

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
            $this->addJoinObject($join, 'Admision');
        }

        return $this;
    }

    /**
     * Use the Admision relation Admision object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AdmisionQuery A secondary query class using the current class as primary query
     */
    public function useAdmisionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAdmision($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Admision', 'AdmisionQuery');
    }

    /**
     * Filter the query by a related Lugarinventario object
     *
     * @param   Lugarinventario|PropelObjectCollection $lugarinventario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CargoadmisionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLugarinventario($lugarinventario, $comparison = null)
    {
        if ($lugarinventario instanceof Lugarinventario) {
            return $this
                ->addUsingAlias(CargoadmisionPeer::IDLUGARINVENTARIO, $lugarinventario->getIdlugarinventario(), $comparison);
        } elseif ($lugarinventario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CargoadmisionPeer::IDLUGARINVENTARIO, $lugarinventario->toKeyValue('PrimaryKey', 'Idlugarinventario'), $comparison);
        } else {
            throw new PropelException('filterByLugarinventario() only accepts arguments of type Lugarinventario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Lugarinventario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CargoadmisionQuery The current query, for fluid interface
     */
    public function joinLugarinventario($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Lugarinventario');

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
            $this->addJoinObject($join, 'Lugarinventario');
        }

        return $this;
    }

    /**
     * Use the Lugarinventario relation Lugarinventario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LugarinventarioQuery A secondary query class using the current class as primary query
     */
    public function useLugarinventarioQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinLugarinventario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Lugarinventario', 'LugarinventarioQuery');
    }

    /**
     * Filter the query by a related Servicio object
     *
     * @param   Servicio|PropelObjectCollection $servicio The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CargoadmisionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByServicio($servicio, $comparison = null)
    {
        if ($servicio instanceof Servicio) {
            return $this
                ->addUsingAlias(CargoadmisionPeer::IDSERVICIO, $servicio->getIdservicio(), $comparison);
        } elseif ($servicio instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CargoadmisionPeer::IDSERVICIO, $servicio->toKeyValue('PrimaryKey', 'Idservicio'), $comparison);
        } else {
            throw new PropelException('filterByServicio() only accepts arguments of type Servicio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Servicio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CargoadmisionQuery The current query, for fluid interface
     */
    public function joinServicio($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Servicio');

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
            $this->addJoinObject($join, 'Servicio');
        }

        return $this;
    }

    /**
     * Use the Servicio relation Servicio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ServicioQuery A secondary query class using the current class as primary query
     */
    public function useServicioQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinServicio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Servicio', 'ServicioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Cargoadmision $cargoadmision Object to remove from the list of results
     *
     * @return CargoadmisionQuery The current query, for fluid interface
     */
    public function prune($cargoadmision = null)
    {
        if ($cargoadmision) {
            $this->addUsingAlias(CargoadmisionPeer::IDCARGOADMISION, $cargoadmision->getIdcargoadmision(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
