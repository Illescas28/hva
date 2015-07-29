<?php


/**
 * Base class that represents a query for the 'consultaanticipo' table.
 *
 *
 *
 * @method ConsultaanticipoQuery orderByIdconsultaanticipo($order = Criteria::ASC) Order by the idconsultaanticipo column
 * @method ConsultaanticipoQuery orderByIdconsulta($order = Criteria::ASC) Order by the idconsulta column
 * @method ConsultaanticipoQuery orderByConsultaanticipoFecha($order = Criteria::ASC) Order by the consultaanticipo_fecha column
 * @method ConsultaanticipoQuery orderByConsultaanticipoCantidad($order = Criteria::ASC) Order by the consultaanticipo_cantidad column
 * @method ConsultaanticipoQuery orderByConsultaanticipoNota($order = Criteria::ASC) Order by the consultaanticipo_nota column
 * @method ConsultaanticipoQuery orderByConsultaanticipoTipo($order = Criteria::ASC) Order by the consultaanticipo_tipo column
 *
 * @method ConsultaanticipoQuery groupByIdconsultaanticipo() Group by the idconsultaanticipo column
 * @method ConsultaanticipoQuery groupByIdconsulta() Group by the idconsulta column
 * @method ConsultaanticipoQuery groupByConsultaanticipoFecha() Group by the consultaanticipo_fecha column
 * @method ConsultaanticipoQuery groupByConsultaanticipoCantidad() Group by the consultaanticipo_cantidad column
 * @method ConsultaanticipoQuery groupByConsultaanticipoNota() Group by the consultaanticipo_nota column
 * @method ConsultaanticipoQuery groupByConsultaanticipoTipo() Group by the consultaanticipo_tipo column
 *
 * @method ConsultaanticipoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ConsultaanticipoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ConsultaanticipoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ConsultaanticipoQuery leftJoinConsulta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Consulta relation
 * @method ConsultaanticipoQuery rightJoinConsulta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Consulta relation
 * @method ConsultaanticipoQuery innerJoinConsulta($relationAlias = null) Adds a INNER JOIN clause to the query using the Consulta relation
 *
 * @method Consultaanticipo findOne(PropelPDO $con = null) Return the first Consultaanticipo matching the query
 * @method Consultaanticipo findOneOrCreate(PropelPDO $con = null) Return the first Consultaanticipo matching the query, or a new Consultaanticipo object populated from the query conditions when no match is found
 *
 * @method Consultaanticipo findOneByIdconsulta(int $idconsulta) Return the first Consultaanticipo filtered by the idconsulta column
 * @method Consultaanticipo findOneByConsultaanticipoFecha(string $consultaanticipo_fecha) Return the first Consultaanticipo filtered by the consultaanticipo_fecha column
 * @method Consultaanticipo findOneByConsultaanticipoCantidad(string $consultaanticipo_cantidad) Return the first Consultaanticipo filtered by the consultaanticipo_cantidad column
 * @method Consultaanticipo findOneByConsultaanticipoNota(string $consultaanticipo_nota) Return the first Consultaanticipo filtered by the consultaanticipo_nota column
 * @method Consultaanticipo findOneByConsultaanticipoTipo(string $consultaanticipo_tipo) Return the first Consultaanticipo filtered by the consultaanticipo_tipo column
 *
 * @method array findByIdconsultaanticipo(int $idconsultaanticipo) Return Consultaanticipo objects filtered by the idconsultaanticipo column
 * @method array findByIdconsulta(int $idconsulta) Return Consultaanticipo objects filtered by the idconsulta column
 * @method array findByConsultaanticipoFecha(string $consultaanticipo_fecha) Return Consultaanticipo objects filtered by the consultaanticipo_fecha column
 * @method array findByConsultaanticipoCantidad(string $consultaanticipo_cantidad) Return Consultaanticipo objects filtered by the consultaanticipo_cantidad column
 * @method array findByConsultaanticipoNota(string $consultaanticipo_nota) Return Consultaanticipo objects filtered by the consultaanticipo_nota column
 * @method array findByConsultaanticipoTipo(string $consultaanticipo_tipo) Return Consultaanticipo objects filtered by the consultaanticipo_tipo column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseConsultaanticipoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseConsultaanticipoQuery object.
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
            $modelName = 'Consultaanticipo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConsultaanticipoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ConsultaanticipoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ConsultaanticipoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConsultaanticipoQuery) {
            return $criteria;
        }
        $query = new ConsultaanticipoQuery(null, null, $modelAlias);

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
     * @return   Consultaanticipo|Consultaanticipo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ConsultaanticipoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ConsultaanticipoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Consultaanticipo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdconsultaanticipo($key, $con = null)
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
     * @return                 Consultaanticipo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idconsultaanticipo`, `idconsulta`, `consultaanticipo_fecha`, `consultaanticipo_cantidad`, `consultaanticipo_nota`, `consultaanticipo_tipo` FROM `consultaanticipo` WHERE `idconsultaanticipo` = :p0';
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
            $obj = new Consultaanticipo();
            $obj->hydrate($row);
            ConsultaanticipoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Consultaanticipo|Consultaanticipo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Consultaanticipo[]|mixed the list of results, formatted by the current formatter
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
     * @return ConsultaanticipoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConsultaanticipoPeer::IDCONSULTAANTICIPO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ConsultaanticipoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConsultaanticipoPeer::IDCONSULTAANTICIPO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idconsultaanticipo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconsultaanticipo(1234); // WHERE idconsultaanticipo = 1234
     * $query->filterByIdconsultaanticipo(array(12, 34)); // WHERE idconsultaanticipo IN (12, 34)
     * $query->filterByIdconsultaanticipo(array('min' => 12)); // WHERE idconsultaanticipo >= 12
     * $query->filterByIdconsultaanticipo(array('max' => 12)); // WHERE idconsultaanticipo <= 12
     * </code>
     *
     * @param     mixed $idconsultaanticipo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaanticipoQuery The current query, for fluid interface
     */
    public function filterByIdconsultaanticipo($idconsultaanticipo = null, $comparison = null)
    {
        if (is_array($idconsultaanticipo)) {
            $useMinMax = false;
            if (isset($idconsultaanticipo['min'])) {
                $this->addUsingAlias(ConsultaanticipoPeer::IDCONSULTAANTICIPO, $idconsultaanticipo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconsultaanticipo['max'])) {
                $this->addUsingAlias(ConsultaanticipoPeer::IDCONSULTAANTICIPO, $idconsultaanticipo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConsultaanticipoPeer::IDCONSULTAANTICIPO, $idconsultaanticipo, $comparison);
    }

    /**
     * Filter the query on the idconsulta column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconsulta(1234); // WHERE idconsulta = 1234
     * $query->filterByIdconsulta(array(12, 34)); // WHERE idconsulta IN (12, 34)
     * $query->filterByIdconsulta(array('min' => 12)); // WHERE idconsulta >= 12
     * $query->filterByIdconsulta(array('max' => 12)); // WHERE idconsulta <= 12
     * </code>
     *
     * @see       filterByConsulta()
     *
     * @param     mixed $idconsulta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaanticipoQuery The current query, for fluid interface
     */
    public function filterByIdconsulta($idconsulta = null, $comparison = null)
    {
        if (is_array($idconsulta)) {
            $useMinMax = false;
            if (isset($idconsulta['min'])) {
                $this->addUsingAlias(ConsultaanticipoPeer::IDCONSULTA, $idconsulta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconsulta['max'])) {
                $this->addUsingAlias(ConsultaanticipoPeer::IDCONSULTA, $idconsulta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConsultaanticipoPeer::IDCONSULTA, $idconsulta, $comparison);
    }

    /**
     * Filter the query on the consultaanticipo_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultaanticipoFecha('2011-03-14'); // WHERE consultaanticipo_fecha = '2011-03-14'
     * $query->filterByConsultaanticipoFecha('now'); // WHERE consultaanticipo_fecha = '2011-03-14'
     * $query->filterByConsultaanticipoFecha(array('max' => 'yesterday')); // WHERE consultaanticipo_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $consultaanticipoFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaanticipoQuery The current query, for fluid interface
     */
    public function filterByConsultaanticipoFecha($consultaanticipoFecha = null, $comparison = null)
    {
        if (is_array($consultaanticipoFecha)) {
            $useMinMax = false;
            if (isset($consultaanticipoFecha['min'])) {
                $this->addUsingAlias(ConsultaanticipoPeer::CONSULTAANTICIPO_FECHA, $consultaanticipoFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultaanticipoFecha['max'])) {
                $this->addUsingAlias(ConsultaanticipoPeer::CONSULTAANTICIPO_FECHA, $consultaanticipoFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConsultaanticipoPeer::CONSULTAANTICIPO_FECHA, $consultaanticipoFecha, $comparison);
    }

    /**
     * Filter the query on the consultaanticipo_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultaanticipoCantidad(1234); // WHERE consultaanticipo_cantidad = 1234
     * $query->filterByConsultaanticipoCantidad(array(12, 34)); // WHERE consultaanticipo_cantidad IN (12, 34)
     * $query->filterByConsultaanticipoCantidad(array('min' => 12)); // WHERE consultaanticipo_cantidad >= 12
     * $query->filterByConsultaanticipoCantidad(array('max' => 12)); // WHERE consultaanticipo_cantidad <= 12
     * </code>
     *
     * @param     mixed $consultaanticipoCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaanticipoQuery The current query, for fluid interface
     */
    public function filterByConsultaanticipoCantidad($consultaanticipoCantidad = null, $comparison = null)
    {
        if (is_array($consultaanticipoCantidad)) {
            $useMinMax = false;
            if (isset($consultaanticipoCantidad['min'])) {
                $this->addUsingAlias(ConsultaanticipoPeer::CONSULTAANTICIPO_CANTIDAD, $consultaanticipoCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultaanticipoCantidad['max'])) {
                $this->addUsingAlias(ConsultaanticipoPeer::CONSULTAANTICIPO_CANTIDAD, $consultaanticipoCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConsultaanticipoPeer::CONSULTAANTICIPO_CANTIDAD, $consultaanticipoCantidad, $comparison);
    }

    /**
     * Filter the query on the consultaanticipo_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultaanticipoNota('fooValue');   // WHERE consultaanticipo_nota = 'fooValue'
     * $query->filterByConsultaanticipoNota('%fooValue%'); // WHERE consultaanticipo_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultaanticipoNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaanticipoQuery The current query, for fluid interface
     */
    public function filterByConsultaanticipoNota($consultaanticipoNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultaanticipoNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultaanticipoNota)) {
                $consultaanticipoNota = str_replace('*', '%', $consultaanticipoNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConsultaanticipoPeer::CONSULTAANTICIPO_NOTA, $consultaanticipoNota, $comparison);
    }

    /**
     * Filter the query on the consultaanticipo_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultaanticipoTipo('fooValue');   // WHERE consultaanticipo_tipo = 'fooValue'
     * $query->filterByConsultaanticipoTipo('%fooValue%'); // WHERE consultaanticipo_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultaanticipoTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaanticipoQuery The current query, for fluid interface
     */
    public function filterByConsultaanticipoTipo($consultaanticipoTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultaanticipoTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultaanticipoTipo)) {
                $consultaanticipoTipo = str_replace('*', '%', $consultaanticipoTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConsultaanticipoPeer::CONSULTAANTICIPO_TIPO, $consultaanticipoTipo, $comparison);
    }

    /**
     * Filter the query by a related Consulta object
     *
     * @param   Consulta|PropelObjectCollection $consulta The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConsultaanticipoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConsulta($consulta, $comparison = null)
    {
        if ($consulta instanceof Consulta) {
            return $this
                ->addUsingAlias(ConsultaanticipoPeer::IDCONSULTA, $consulta->getIdconsulta(), $comparison);
        } elseif ($consulta instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ConsultaanticipoPeer::IDCONSULTA, $consulta->toKeyValue('PrimaryKey', 'Idconsulta'), $comparison);
        } else {
            throw new PropelException('filterByConsulta() only accepts arguments of type Consulta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Consulta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ConsultaanticipoQuery The current query, for fluid interface
     */
    public function joinConsulta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Consulta');

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
            $this->addJoinObject($join, 'Consulta');
        }

        return $this;
    }

    /**
     * Use the Consulta relation Consulta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ConsultaQuery A secondary query class using the current class as primary query
     */
    public function useConsultaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinConsulta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Consulta', 'ConsultaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Consultaanticipo $consultaanticipo Object to remove from the list of results
     *
     * @return ConsultaanticipoQuery The current query, for fluid interface
     */
    public function prune($consultaanticipo = null)
    {
        if ($consultaanticipo) {
            $this->addUsingAlias(ConsultaanticipoPeer::IDCONSULTAANTICIPO, $consultaanticipo->getIdconsultaanticipo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
