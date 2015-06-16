<?php


/**
 * Base class that represents a query for the 'udm' table.
 *
 *
 *
 * @method UdmQuery orderByIdudm($order = Criteria::ASC) Order by the idudm column
 * @method UdmQuery orderByUdmNombre($order = Criteria::ASC) Order by the udm_nombre column
 * @method UdmQuery orderByUdmDescripcion($order = Criteria::ASC) Order by the udm_descripcion column
 *
 * @method UdmQuery groupByIdudm() Group by the idudm column
 * @method UdmQuery groupByUdmNombre() Group by the udm_nombre column
 * @method UdmQuery groupByUdmDescripcion() Group by the udm_descripcion column
 *
 * @method UdmQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UdmQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UdmQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Udm findOne(PropelPDO $con = null) Return the first Udm matching the query
 * @method Udm findOneOrCreate(PropelPDO $con = null) Return the first Udm matching the query, or a new Udm object populated from the query conditions when no match is found
 *
 * @method Udm findOneByUdmNombre(string $udm_nombre) Return the first Udm filtered by the udm_nombre column
 * @method Udm findOneByUdmDescripcion(string $udm_descripcion) Return the first Udm filtered by the udm_descripcion column
 *
 * @method array findByIdudm(int $idudm) Return Udm objects filtered by the idudm column
 * @method array findByUdmNombre(string $udm_nombre) Return Udm objects filtered by the udm_nombre column
 * @method array findByUdmDescripcion(string $udm_descripcion) Return Udm objects filtered by the udm_descripcion column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseUdmQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUdmQuery object.
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
            $modelName = 'Udm';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UdmQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UdmQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UdmQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UdmQuery) {
            return $criteria;
        }
        $query = new UdmQuery(null, null, $modelAlias);

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
     * @return   Udm|Udm[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UdmPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UdmPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Udm A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdudm($key, $con = null)
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
     * @return                 Udm A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idudm`, `udm_nombre`, `udm_descripcion` FROM `udm` WHERE `idudm` = :p0';
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
            $obj = new Udm();
            $obj->hydrate($row);
            UdmPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Udm|Udm[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Udm[]|mixed the list of results, formatted by the current formatter
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
     * @return UdmQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UdmPeer::IDUDM, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UdmQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UdmPeer::IDUDM, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idudm column
     *
     * Example usage:
     * <code>
     * $query->filterByIdudm(1234); // WHERE idudm = 1234
     * $query->filterByIdudm(array(12, 34)); // WHERE idudm IN (12, 34)
     * $query->filterByIdudm(array('min' => 12)); // WHERE idudm >= 12
     * $query->filterByIdudm(array('max' => 12)); // WHERE idudm <= 12
     * </code>
     *
     * @param     mixed $idudm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UdmQuery The current query, for fluid interface
     */
    public function filterByIdudm($idudm = null, $comparison = null)
    {
        if (is_array($idudm)) {
            $useMinMax = false;
            if (isset($idudm['min'])) {
                $this->addUsingAlias(UdmPeer::IDUDM, $idudm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idudm['max'])) {
                $this->addUsingAlias(UdmPeer::IDUDM, $idudm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UdmPeer::IDUDM, $idudm, $comparison);
    }

    /**
     * Filter the query on the udm_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByUdmNombre('fooValue');   // WHERE udm_nombre = 'fooValue'
     * $query->filterByUdmNombre('%fooValue%'); // WHERE udm_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $udmNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UdmQuery The current query, for fluid interface
     */
    public function filterByUdmNombre($udmNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($udmNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $udmNombre)) {
                $udmNombre = str_replace('*', '%', $udmNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UdmPeer::UDM_NOMBRE, $udmNombre, $comparison);
    }

    /**
     * Filter the query on the udm_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByUdmDescripcion('fooValue');   // WHERE udm_descripcion = 'fooValue'
     * $query->filterByUdmDescripcion('%fooValue%'); // WHERE udm_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $udmDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UdmQuery The current query, for fluid interface
     */
    public function filterByUdmDescripcion($udmDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($udmDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $udmDescripcion)) {
                $udmDescripcion = str_replace('*', '%', $udmDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UdmPeer::UDM_DESCRIPCION, $udmDescripcion, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Udm $udm Object to remove from the list of results
     *
     * @return UdmQuery The current query, for fluid interface
     */
    public function prune($udm = null)
    {
        if ($udm) {
            $this->addUsingAlias(UdmPeer::IDUDM, $udm->getIdudm(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
