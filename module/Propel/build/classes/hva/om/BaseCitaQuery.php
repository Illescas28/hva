<?php


/**
 * Base class that represents a query for the 'cita' table.
 *
 *
 *
 * @method CitaQuery orderByIdcita($order = Criteria::ASC) Order by the idcita column
 * @method CitaQuery orderByIdpaciente($order = Criteria::ASC) Order by the idpaciente column
 * @method CitaQuery orderByIdmedico($order = Criteria::ASC) Order by the idmedico column
 * @method CitaQuery orderByCitaFecha($order = Criteria::ASC) Order by the cita_fecha column
 * @method CitaQuery orderByCitaHora($order = Criteria::ASC) Order by the cita_hora column
 * @method CitaQuery orderByCitaDescripcion($order = Criteria::ASC) Order by the cita_descripcion column
 *
 * @method CitaQuery groupByIdcita() Group by the idcita column
 * @method CitaQuery groupByIdpaciente() Group by the idpaciente column
 * @method CitaQuery groupByIdmedico() Group by the idmedico column
 * @method CitaQuery groupByCitaFecha() Group by the cita_fecha column
 * @method CitaQuery groupByCitaHora() Group by the cita_hora column
 * @method CitaQuery groupByCitaDescripcion() Group by the cita_descripcion column
 *
 * @method CitaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CitaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CitaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CitaQuery leftJoinMedico($relationAlias = null) Adds a LEFT JOIN clause to the query using the Medico relation
 * @method CitaQuery rightJoinMedico($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Medico relation
 * @method CitaQuery innerJoinMedico($relationAlias = null) Adds a INNER JOIN clause to the query using the Medico relation
 *
 * @method CitaQuery leftJoinPaciente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paciente relation
 * @method CitaQuery rightJoinPaciente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paciente relation
 * @method CitaQuery innerJoinPaciente($relationAlias = null) Adds a INNER JOIN clause to the query using the Paciente relation
 *
 * @method Cita findOne(PropelPDO $con = null) Return the first Cita matching the query
 * @method Cita findOneOrCreate(PropelPDO $con = null) Return the first Cita matching the query, or a new Cita object populated from the query conditions when no match is found
 *
 * @method Cita findOneByIdpaciente(int $idpaciente) Return the first Cita filtered by the idpaciente column
 * @method Cita findOneByIdmedico(int $idmedico) Return the first Cita filtered by the idmedico column
 * @method Cita findOneByCitaFecha(string $cita_fecha) Return the first Cita filtered by the cita_fecha column
 * @method Cita findOneByCitaHora(string $cita_hora) Return the first Cita filtered by the cita_hora column
 * @method Cita findOneByCitaDescripcion(string $cita_descripcion) Return the first Cita filtered by the cita_descripcion column
 *
 * @method array findByIdcita(int $idcita) Return Cita objects filtered by the idcita column
 * @method array findByIdpaciente(int $idpaciente) Return Cita objects filtered by the idpaciente column
 * @method array findByIdmedico(int $idmedico) Return Cita objects filtered by the idmedico column
 * @method array findByCitaFecha(string $cita_fecha) Return Cita objects filtered by the cita_fecha column
 * @method array findByCitaHora(string $cita_hora) Return Cita objects filtered by the cita_hora column
 * @method array findByCitaDescripcion(string $cita_descripcion) Return Cita objects filtered by the cita_descripcion column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseCitaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCitaQuery object.
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
            $modelName = 'Cita';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CitaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CitaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CitaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CitaQuery) {
            return $criteria;
        }
        $query = new CitaQuery(null, null, $modelAlias);

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
     * @return   Cita|Cita[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CitaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CitaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cita A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcita($key, $con = null)
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
     * @return                 Cita A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcita`, `idpaciente`, `idmedico`, `cita_fecha`, `cita_hora`, `cita_descripcion` FROM `cita` WHERE `idcita` = :p0';
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
            $obj = new Cita();
            $obj->hydrate($row);
            CitaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cita|Cita[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cita[]|mixed the list of results, formatted by the current formatter
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
     * @return CitaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CitaPeer::IDCITA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CitaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CitaPeer::IDCITA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcita column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcita(1234); // WHERE idcita = 1234
     * $query->filterByIdcita(array(12, 34)); // WHERE idcita IN (12, 34)
     * $query->filterByIdcita(array('min' => 12)); // WHERE idcita >= 12
     * $query->filterByIdcita(array('max' => 12)); // WHERE idcita <= 12
     * </code>
     *
     * @param     mixed $idcita The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CitaQuery The current query, for fluid interface
     */
    public function filterByIdcita($idcita = null, $comparison = null)
    {
        if (is_array($idcita)) {
            $useMinMax = false;
            if (isset($idcita['min'])) {
                $this->addUsingAlias(CitaPeer::IDCITA, $idcita['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcita['max'])) {
                $this->addUsingAlias(CitaPeer::IDCITA, $idcita['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CitaPeer::IDCITA, $idcita, $comparison);
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
     * @return CitaQuery The current query, for fluid interface
     */
    public function filterByIdpaciente($idpaciente = null, $comparison = null)
    {
        if (is_array($idpaciente)) {
            $useMinMax = false;
            if (isset($idpaciente['min'])) {
                $this->addUsingAlias(CitaPeer::IDPACIENTE, $idpaciente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpaciente['max'])) {
                $this->addUsingAlias(CitaPeer::IDPACIENTE, $idpaciente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CitaPeer::IDPACIENTE, $idpaciente, $comparison);
    }

    /**
     * Filter the query on the idmedico column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmedico(1234); // WHERE idmedico = 1234
     * $query->filterByIdmedico(array(12, 34)); // WHERE idmedico IN (12, 34)
     * $query->filterByIdmedico(array('min' => 12)); // WHERE idmedico >= 12
     * $query->filterByIdmedico(array('max' => 12)); // WHERE idmedico <= 12
     * </code>
     *
     * @see       filterByMedico()
     *
     * @param     mixed $idmedico The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CitaQuery The current query, for fluid interface
     */
    public function filterByIdmedico($idmedico = null, $comparison = null)
    {
        if (is_array($idmedico)) {
            $useMinMax = false;
            if (isset($idmedico['min'])) {
                $this->addUsingAlias(CitaPeer::IDMEDICO, $idmedico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmedico['max'])) {
                $this->addUsingAlias(CitaPeer::IDMEDICO, $idmedico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CitaPeer::IDMEDICO, $idmedico, $comparison);
    }

    /**
     * Filter the query on the cita_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByCitaFecha('2011-03-14'); // WHERE cita_fecha = '2011-03-14'
     * $query->filterByCitaFecha('now'); // WHERE cita_fecha = '2011-03-14'
     * $query->filterByCitaFecha(array('max' => 'yesterday')); // WHERE cita_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $citaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CitaQuery The current query, for fluid interface
     */
    public function filterByCitaFecha($citaFecha = null, $comparison = null)
    {
        if (is_array($citaFecha)) {
            $useMinMax = false;
            if (isset($citaFecha['min'])) {
                $this->addUsingAlias(CitaPeer::CITA_FECHA, $citaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($citaFecha['max'])) {
                $this->addUsingAlias(CitaPeer::CITA_FECHA, $citaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CitaPeer::CITA_FECHA, $citaFecha, $comparison);
    }

    /**
     * Filter the query on the cita_hora column
     *
     * Example usage:
     * <code>
     * $query->filterByCitaHora('2011-03-14'); // WHERE cita_hora = '2011-03-14'
     * $query->filterByCitaHora('now'); // WHERE cita_hora = '2011-03-14'
     * $query->filterByCitaHora(array('max' => 'yesterday')); // WHERE cita_hora < '2011-03-13'
     * </code>
     *
     * @param     mixed $citaHora The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CitaQuery The current query, for fluid interface
     */
    public function filterByCitaHora($citaHora = null, $comparison = null)
    {
        if (is_array($citaHora)) {
            $useMinMax = false;
            if (isset($citaHora['min'])) {
                $this->addUsingAlias(CitaPeer::CITA_HORA, $citaHora['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($citaHora['max'])) {
                $this->addUsingAlias(CitaPeer::CITA_HORA, $citaHora['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CitaPeer::CITA_HORA, $citaHora, $comparison);
    }

    /**
     * Filter the query on the cita_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByCitaDescripcion('fooValue');   // WHERE cita_descripcion = 'fooValue'
     * $query->filterByCitaDescripcion('%fooValue%'); // WHERE cita_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citaDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CitaQuery The current query, for fluid interface
     */
    public function filterByCitaDescripcion($citaDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citaDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $citaDescripcion)) {
                $citaDescripcion = str_replace('*', '%', $citaDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CitaPeer::CITA_DESCRIPCION, $citaDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Medico object
     *
     * @param   Medico|PropelObjectCollection $medico The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CitaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMedico($medico, $comparison = null)
    {
        if ($medico instanceof Medico) {
            return $this
                ->addUsingAlias(CitaPeer::IDMEDICO, $medico->getIdmedico(), $comparison);
        } elseif ($medico instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CitaPeer::IDMEDICO, $medico->toKeyValue('PrimaryKey', 'Idmedico'), $comparison);
        } else {
            throw new PropelException('filterByMedico() only accepts arguments of type Medico or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Medico relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CitaQuery The current query, for fluid interface
     */
    public function joinMedico($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Medico');

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
            $this->addJoinObject($join, 'Medico');
        }

        return $this;
    }

    /**
     * Use the Medico relation Medico object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MedicoQuery A secondary query class using the current class as primary query
     */
    public function useMedicoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinMedico($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Medico', 'MedicoQuery');
    }

    /**
     * Filter the query by a related Paciente object
     *
     * @param   Paciente|PropelObjectCollection $paciente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CitaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPaciente($paciente, $comparison = null)
    {
        if ($paciente instanceof Paciente) {
            return $this
                ->addUsingAlias(CitaPeer::IDPACIENTE, $paciente->getIdpaciente(), $comparison);
        } elseif ($paciente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CitaPeer::IDPACIENTE, $paciente->toKeyValue('PrimaryKey', 'Idpaciente'), $comparison);
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
     * @return CitaQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Cita $cita Object to remove from the list of results
     *
     * @return CitaQuery The current query, for fluid interface
     */
    public function prune($cita = null)
    {
        if ($cita) {
            $this->addUsingAlias(CitaPeer::IDCITA, $cita->getIdcita(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
