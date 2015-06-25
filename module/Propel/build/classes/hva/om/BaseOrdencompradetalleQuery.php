<?php


/**
 * Base class that represents a query for the 'ordencompradetalle' table.
 *
 *
 *
 * @method OrdencompradetalleQuery orderByIdordencompradetalle($order = Criteria::ASC) Order by the idordencompradetalle column
 * @method OrdencompradetalleQuery orderByIdordencompra($order = Criteria::ASC) Order by the idordencompra column
 * @method OrdencompradetalleQuery orderByIdarticulovariante($order = Criteria::ASC) Order by the idarticulovariante column
 * @method OrdencompradetalleQuery orderByOrdencompradetalleCantidad($order = Criteria::ASC) Order by the ordencompradetalle_cantidad column
 * @method OrdencompradetalleQuery orderByOrdencompradetalleCosto($order = Criteria::ASC) Order by the ordencompradetalle_costo column
 * @method OrdencompradetalleQuery orderByOrdencompradetallePrecio($order = Criteria::ASC) Order by the ordencompradetalle_precio column
 * @method OrdencompradetalleQuery orderByOrdencompradetalleImporte($order = Criteria::ASC) Order by the ordencompradetalle_importe column
 * @method OrdencompradetalleQuery orderByOrdencompradetalleCaducidad($order = Criteria::ASC) Order by the ordencompradetalle_caducidad column
 *
 * @method OrdencompradetalleQuery groupByIdordencompradetalle() Group by the idordencompradetalle column
 * @method OrdencompradetalleQuery groupByIdordencompra() Group by the idordencompra column
 * @method OrdencompradetalleQuery groupByIdarticulovariante() Group by the idarticulovariante column
 * @method OrdencompradetalleQuery groupByOrdencompradetalleCantidad() Group by the ordencompradetalle_cantidad column
 * @method OrdencompradetalleQuery groupByOrdencompradetalleCosto() Group by the ordencompradetalle_costo column
 * @method OrdencompradetalleQuery groupByOrdencompradetallePrecio() Group by the ordencompradetalle_precio column
 * @method OrdencompradetalleQuery groupByOrdencompradetalleImporte() Group by the ordencompradetalle_importe column
 * @method OrdencompradetalleQuery groupByOrdencompradetalleCaducidad() Group by the ordencompradetalle_caducidad column
 *
 * @method OrdencompradetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OrdencompradetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OrdencompradetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OrdencompradetalleQuery leftJoinArticulovariante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Articulovariante relation
 * @method OrdencompradetalleQuery rightJoinArticulovariante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Articulovariante relation
 * @method OrdencompradetalleQuery innerJoinArticulovariante($relationAlias = null) Adds a INNER JOIN clause to the query using the Articulovariante relation
 *
 * @method OrdencompradetalleQuery leftJoinOrdencompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ordencompra relation
 * @method OrdencompradetalleQuery rightJoinOrdencompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ordencompra relation
 * @method OrdencompradetalleQuery innerJoinOrdencompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Ordencompra relation
 *
 * @method OrdencompradetalleQuery leftJoinLugarinventario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Lugarinventario relation
 * @method OrdencompradetalleQuery rightJoinLugarinventario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Lugarinventario relation
 * @method OrdencompradetalleQuery innerJoinLugarinventario($relationAlias = null) Adds a INNER JOIN clause to the query using the Lugarinventario relation
 *
 * @method Ordencompradetalle findOne(PropelPDO $con = null) Return the first Ordencompradetalle matching the query
 * @method Ordencompradetalle findOneOrCreate(PropelPDO $con = null) Return the first Ordencompradetalle matching the query, or a new Ordencompradetalle object populated from the query conditions when no match is found
 *
 * @method Ordencompradetalle findOneByIdordencompra(int $idordencompra) Return the first Ordencompradetalle filtered by the idordencompra column
 * @method Ordencompradetalle findOneByIdarticulovariante(int $idarticulovariante) Return the first Ordencompradetalle filtered by the idarticulovariante column
 * @method Ordencompradetalle findOneByOrdencompradetalleCantidad(string $ordencompradetalle_cantidad) Return the first Ordencompradetalle filtered by the ordencompradetalle_cantidad column
 * @method Ordencompradetalle findOneByOrdencompradetalleCosto(string $ordencompradetalle_costo) Return the first Ordencompradetalle filtered by the ordencompradetalle_costo column
 * @method Ordencompradetalle findOneByOrdencompradetallePrecio(string $ordencompradetalle_precio) Return the first Ordencompradetalle filtered by the ordencompradetalle_precio column
 * @method Ordencompradetalle findOneByOrdencompradetalleImporte(string $ordencompradetalle_importe) Return the first Ordencompradetalle filtered by the ordencompradetalle_importe column
 * @method Ordencompradetalle findOneByOrdencompradetalleCaducidad(string $ordencompradetalle_caducidad) Return the first Ordencompradetalle filtered by the ordencompradetalle_caducidad column
 *
 * @method array findByIdordencompradetalle(int $idordencompradetalle) Return Ordencompradetalle objects filtered by the idordencompradetalle column
 * @method array findByIdordencompra(int $idordencompra) Return Ordencompradetalle objects filtered by the idordencompra column
 * @method array findByIdarticulovariante(int $idarticulovariante) Return Ordencompradetalle objects filtered by the idarticulovariante column
 * @method array findByOrdencompradetalleCantidad(string $ordencompradetalle_cantidad) Return Ordencompradetalle objects filtered by the ordencompradetalle_cantidad column
 * @method array findByOrdencompradetalleCosto(string $ordencompradetalle_costo) Return Ordencompradetalle objects filtered by the ordencompradetalle_costo column
 * @method array findByOrdencompradetallePrecio(string $ordencompradetalle_precio) Return Ordencompradetalle objects filtered by the ordencompradetalle_precio column
 * @method array findByOrdencompradetalleImporte(string $ordencompradetalle_importe) Return Ordencompradetalle objects filtered by the ordencompradetalle_importe column
 * @method array findByOrdencompradetalleCaducidad(string $ordencompradetalle_caducidad) Return Ordencompradetalle objects filtered by the ordencompradetalle_caducidad column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseOrdencompradetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOrdencompradetalleQuery object.
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
            $modelName = 'Ordencompradetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OrdencompradetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OrdencompradetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OrdencompradetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OrdencompradetalleQuery) {
            return $criteria;
        }
        $query = new OrdencompradetalleQuery(null, null, $modelAlias);

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
     * @return   Ordencompradetalle|Ordencompradetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OrdencompradetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OrdencompradetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ordencompradetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdordencompradetalle($key, $con = null)
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
     * @return                 Ordencompradetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idordencompradetalle`, `idordencompra`, `idarticulovariante`, `ordencompradetalle_cantidad`, `ordencompradetalle_costo`, `ordencompradetalle_precio`, `ordencompradetalle_importe`, `ordencompradetalle_caducidad` FROM `ordencompradetalle` WHERE `idordencompradetalle` = :p0';
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
            $obj = new Ordencompradetalle();
            $obj->hydrate($row);
            OrdencompradetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ordencompradetalle|Ordencompradetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ordencompradetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return OrdencompradetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OrdencompradetallePeer::IDORDENCOMPRADETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OrdencompradetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OrdencompradetallePeer::IDORDENCOMPRADETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idordencompradetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdordencompradetalle(1234); // WHERE idordencompradetalle = 1234
     * $query->filterByIdordencompradetalle(array(12, 34)); // WHERE idordencompradetalle IN (12, 34)
     * $query->filterByIdordencompradetalle(array('min' => 12)); // WHERE idordencompradetalle >= 12
     * $query->filterByIdordencompradetalle(array('max' => 12)); // WHERE idordencompradetalle <= 12
     * </code>
     *
     * @param     mixed $idordencompradetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdencompradetalleQuery The current query, for fluid interface
     */
    public function filterByIdordencompradetalle($idordencompradetalle = null, $comparison = null)
    {
        if (is_array($idordencompradetalle)) {
            $useMinMax = false;
            if (isset($idordencompradetalle['min'])) {
                $this->addUsingAlias(OrdencompradetallePeer::IDORDENCOMPRADETALLE, $idordencompradetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idordencompradetalle['max'])) {
                $this->addUsingAlias(OrdencompradetallePeer::IDORDENCOMPRADETALLE, $idordencompradetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdencompradetallePeer::IDORDENCOMPRADETALLE, $idordencompradetalle, $comparison);
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
     * @see       filterByOrdencompra()
     *
     * @param     mixed $idordencompra The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdencompradetalleQuery The current query, for fluid interface
     */
    public function filterByIdordencompra($idordencompra = null, $comparison = null)
    {
        if (is_array($idordencompra)) {
            $useMinMax = false;
            if (isset($idordencompra['min'])) {
                $this->addUsingAlias(OrdencompradetallePeer::IDORDENCOMPRA, $idordencompra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idordencompra['max'])) {
                $this->addUsingAlias(OrdencompradetallePeer::IDORDENCOMPRA, $idordencompra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdencompradetallePeer::IDORDENCOMPRA, $idordencompra, $comparison);
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
     * @return OrdencompradetalleQuery The current query, for fluid interface
     */
    public function filterByIdarticulovariante($idarticulovariante = null, $comparison = null)
    {
        if (is_array($idarticulovariante)) {
            $useMinMax = false;
            if (isset($idarticulovariante['min'])) {
                $this->addUsingAlias(OrdencompradetallePeer::IDARTICULOVARIANTE, $idarticulovariante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idarticulovariante['max'])) {
                $this->addUsingAlias(OrdencompradetallePeer::IDARTICULOVARIANTE, $idarticulovariante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdencompradetallePeer::IDARTICULOVARIANTE, $idarticulovariante, $comparison);
    }

    /**
     * Filter the query on the ordencompradetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdencompradetalleCantidad(1234); // WHERE ordencompradetalle_cantidad = 1234
     * $query->filterByOrdencompradetalleCantidad(array(12, 34)); // WHERE ordencompradetalle_cantidad IN (12, 34)
     * $query->filterByOrdencompradetalleCantidad(array('min' => 12)); // WHERE ordencompradetalle_cantidad >= 12
     * $query->filterByOrdencompradetalleCantidad(array('max' => 12)); // WHERE ordencompradetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $ordencompradetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdencompradetalleQuery The current query, for fluid interface
     */
    public function filterByOrdencompradetalleCantidad($ordencompradetalleCantidad = null, $comparison = null)
    {
        if (is_array($ordencompradetalleCantidad)) {
            $useMinMax = false;
            if (isset($ordencompradetalleCantidad['min'])) {
                $this->addUsingAlias(OrdencompradetallePeer::ORDENCOMPRADETALLE_CANTIDAD, $ordencompradetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordencompradetalleCantidad['max'])) {
                $this->addUsingAlias(OrdencompradetallePeer::ORDENCOMPRADETALLE_CANTIDAD, $ordencompradetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdencompradetallePeer::ORDENCOMPRADETALLE_CANTIDAD, $ordencompradetalleCantidad, $comparison);
    }

    /**
     * Filter the query on the ordencompradetalle_costo column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdencompradetalleCosto(1234); // WHERE ordencompradetalle_costo = 1234
     * $query->filterByOrdencompradetalleCosto(array(12, 34)); // WHERE ordencompradetalle_costo IN (12, 34)
     * $query->filterByOrdencompradetalleCosto(array('min' => 12)); // WHERE ordencompradetalle_costo >= 12
     * $query->filterByOrdencompradetalleCosto(array('max' => 12)); // WHERE ordencompradetalle_costo <= 12
     * </code>
     *
     * @param     mixed $ordencompradetalleCosto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdencompradetalleQuery The current query, for fluid interface
     */
    public function filterByOrdencompradetalleCosto($ordencompradetalleCosto = null, $comparison = null)
    {
        if (is_array($ordencompradetalleCosto)) {
            $useMinMax = false;
            if (isset($ordencompradetalleCosto['min'])) {
                $this->addUsingAlias(OrdencompradetallePeer::ORDENCOMPRADETALLE_COSTO, $ordencompradetalleCosto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordencompradetalleCosto['max'])) {
                $this->addUsingAlias(OrdencompradetallePeer::ORDENCOMPRADETALLE_COSTO, $ordencompradetalleCosto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdencompradetallePeer::ORDENCOMPRADETALLE_COSTO, $ordencompradetalleCosto, $comparison);
    }

    /**
     * Filter the query on the ordencompradetalle_precio column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdencompradetallePrecio(1234); // WHERE ordencompradetalle_precio = 1234
     * $query->filterByOrdencompradetallePrecio(array(12, 34)); // WHERE ordencompradetalle_precio IN (12, 34)
     * $query->filterByOrdencompradetallePrecio(array('min' => 12)); // WHERE ordencompradetalle_precio >= 12
     * $query->filterByOrdencompradetallePrecio(array('max' => 12)); // WHERE ordencompradetalle_precio <= 12
     * </code>
     *
     * @param     mixed $ordencompradetallePrecio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdencompradetalleQuery The current query, for fluid interface
     */
    public function filterByOrdencompradetallePrecio($ordencompradetallePrecio = null, $comparison = null)
    {
        if (is_array($ordencompradetallePrecio)) {
            $useMinMax = false;
            if (isset($ordencompradetallePrecio['min'])) {
                $this->addUsingAlias(OrdencompradetallePeer::ORDENCOMPRADETALLE_PRECIO, $ordencompradetallePrecio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordencompradetallePrecio['max'])) {
                $this->addUsingAlias(OrdencompradetallePeer::ORDENCOMPRADETALLE_PRECIO, $ordencompradetallePrecio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdencompradetallePeer::ORDENCOMPRADETALLE_PRECIO, $ordencompradetallePrecio, $comparison);
    }

    /**
     * Filter the query on the ordencompradetalle_importe column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdencompradetalleImporte(1234); // WHERE ordencompradetalle_importe = 1234
     * $query->filterByOrdencompradetalleImporte(array(12, 34)); // WHERE ordencompradetalle_importe IN (12, 34)
     * $query->filterByOrdencompradetalleImporte(array('min' => 12)); // WHERE ordencompradetalle_importe >= 12
     * $query->filterByOrdencompradetalleImporte(array('max' => 12)); // WHERE ordencompradetalle_importe <= 12
     * </code>
     *
     * @param     mixed $ordencompradetalleImporte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdencompradetalleQuery The current query, for fluid interface
     */
    public function filterByOrdencompradetalleImporte($ordencompradetalleImporte = null, $comparison = null)
    {
        if (is_array($ordencompradetalleImporte)) {
            $useMinMax = false;
            if (isset($ordencompradetalleImporte['min'])) {
                $this->addUsingAlias(OrdencompradetallePeer::ORDENCOMPRADETALLE_IMPORTE, $ordencompradetalleImporte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordencompradetalleImporte['max'])) {
                $this->addUsingAlias(OrdencompradetallePeer::ORDENCOMPRADETALLE_IMPORTE, $ordencompradetalleImporte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdencompradetallePeer::ORDENCOMPRADETALLE_IMPORTE, $ordencompradetalleImporte, $comparison);
    }

    /**
     * Filter the query on the ordencompradetalle_caducidad column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdencompradetalleCaducidad('2011-03-14'); // WHERE ordencompradetalle_caducidad = '2011-03-14'
     * $query->filterByOrdencompradetalleCaducidad('now'); // WHERE ordencompradetalle_caducidad = '2011-03-14'
     * $query->filterByOrdencompradetalleCaducidad(array('max' => 'yesterday')); // WHERE ordencompradetalle_caducidad < '2011-03-13'
     * </code>
     *
     * @param     mixed $ordencompradetalleCaducidad The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdencompradetalleQuery The current query, for fluid interface
     */
    public function filterByOrdencompradetalleCaducidad($ordencompradetalleCaducidad = null, $comparison = null)
    {
        if (is_array($ordencompradetalleCaducidad)) {
            $useMinMax = false;
            if (isset($ordencompradetalleCaducidad['min'])) {
                $this->addUsingAlias(OrdencompradetallePeer::ORDENCOMPRADETALLE_CADUCIDAD, $ordencompradetalleCaducidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordencompradetalleCaducidad['max'])) {
                $this->addUsingAlias(OrdencompradetallePeer::ORDENCOMPRADETALLE_CADUCIDAD, $ordencompradetalleCaducidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdencompradetallePeer::ORDENCOMPRADETALLE_CADUCIDAD, $ordencompradetalleCaducidad, $comparison);
    }

    /**
     * Filter the query by a related Articulovariante object
     *
     * @param   Articulovariante|PropelObjectCollection $articulovariante The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrdencompradetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByArticulovariante($articulovariante, $comparison = null)
    {
        if ($articulovariante instanceof Articulovariante) {
            return $this
                ->addUsingAlias(OrdencompradetallePeer::IDARTICULOVARIANTE, $articulovariante->getIdarticulovariante(), $comparison);
        } elseif ($articulovariante instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OrdencompradetallePeer::IDARTICULOVARIANTE, $articulovariante->toKeyValue('PrimaryKey', 'Idarticulovariante'), $comparison);
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
     * @return OrdencompradetalleQuery The current query, for fluid interface
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
     * Filter the query by a related Ordencompra object
     *
     * @param   Ordencompra|PropelObjectCollection $ordencompra The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrdencompradetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdencompra($ordencompra, $comparison = null)
    {
        if ($ordencompra instanceof Ordencompra) {
            return $this
                ->addUsingAlias(OrdencompradetallePeer::IDORDENCOMPRA, $ordencompra->getIdordencompra(), $comparison);
        } elseif ($ordencompra instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OrdencompradetallePeer::IDORDENCOMPRA, $ordencompra->toKeyValue('PrimaryKey', 'Idordencompra'), $comparison);
        } else {
            throw new PropelException('filterByOrdencompra() only accepts arguments of type Ordencompra or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ordencompra relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OrdencompradetalleQuery The current query, for fluid interface
     */
    public function joinOrdencompra($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ordencompra');

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
            $this->addJoinObject($join, 'Ordencompra');
        }

        return $this;
    }

    /**
     * Use the Ordencompra relation Ordencompra object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OrdencompraQuery A secondary query class using the current class as primary query
     */
    public function useOrdencompraQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrdencompra($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ordencompra', 'OrdencompraQuery');
    }

    /**
     * Filter the query by a related Lugarinventario object
     *
     * @param   Lugarinventario|PropelObjectCollection $lugarinventario  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrdencompradetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByLugarinventario($lugarinventario, $comparison = null)
    {
        if ($lugarinventario instanceof Lugarinventario) {
            return $this
                ->addUsingAlias(OrdencompradetallePeer::IDORDENCOMPRADETALLE, $lugarinventario->getIdordencompradetalle(), $comparison);
        } elseif ($lugarinventario instanceof PropelObjectCollection) {
            return $this
                ->useLugarinventarioQuery()
                ->filterByPrimaryKeys($lugarinventario->getPrimaryKeys())
                ->endUse();
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
     * @return OrdencompradetalleQuery The current query, for fluid interface
     */
    public function joinLugarinventario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useLugarinventarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLugarinventario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Lugarinventario', 'LugarinventarioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Ordencompradetalle $ordencompradetalle Object to remove from the list of results
     *
     * @return OrdencompradetalleQuery The current query, for fluid interface
     */
    public function prune($ordencompradetalle = null)
    {
        if ($ordencompradetalle) {
            $this->addUsingAlias(OrdencompradetallePeer::IDORDENCOMPRADETALLE, $ordencompradetalle->getIdordencompradetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
