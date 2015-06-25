<?php


/**
 * Base class that represents a query for the 'medicoespecialidad' table.
 *
 *
 *
 * @method MedicoespecialidadQuery orderByIdmedicoespecialidad($order = Criteria::ASC) Order by the idmedicoespecialidad column
 * @method MedicoespecialidadQuery orderByIdmedico($order = Criteria::ASC) Order by the idmedico column
 * @method MedicoespecialidadQuery orderByIdespecialidad($order = Criteria::ASC) Order by the idespecialidad column
 *
 * @method MedicoespecialidadQuery groupByIdmedicoespecialidad() Group by the idmedicoespecialidad column
 * @method MedicoespecialidadQuery groupByIdmedico() Group by the idmedico column
 * @method MedicoespecialidadQuery groupByIdespecialidad() Group by the idespecialidad column
 *
 * @method MedicoespecialidadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MedicoespecialidadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MedicoespecialidadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MedicoespecialidadQuery leftJoinEspecialidad($relationAlias = null) Adds a LEFT JOIN clause to the query using the Especialidad relation
 * @method MedicoespecialidadQuery rightJoinEspecialidad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Especialidad relation
 * @method MedicoespecialidadQuery innerJoinEspecialidad($relationAlias = null) Adds a INNER JOIN clause to the query using the Especialidad relation
 *
 * @method MedicoespecialidadQuery leftJoinMedico($relationAlias = null) Adds a LEFT JOIN clause to the query using the Medico relation
 * @method MedicoespecialidadQuery rightJoinMedico($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Medico relation
 * @method MedicoespecialidadQuery innerJoinMedico($relationAlias = null) Adds a INNER JOIN clause to the query using the Medico relation
 *
 * @method Medicoespecialidad findOne(PropelPDO $con = null) Return the first Medicoespecialidad matching the query
 * @method Medicoespecialidad findOneOrCreate(PropelPDO $con = null) Return the first Medicoespecialidad matching the query, or a new Medicoespecialidad object populated from the query conditions when no match is found
 *
 * @method Medicoespecialidad findOneByIdmedico(int $idmedico) Return the first Medicoespecialidad filtered by the idmedico column
 * @method Medicoespecialidad findOneByIdespecialidad(int $idespecialidad) Return the first Medicoespecialidad filtered by the idespecialidad column
 *
 * @method array findByIdmedicoespecialidad(int $idmedicoespecialidad) Return Medicoespecialidad objects filtered by the idmedicoespecialidad column
 * @method array findByIdmedico(int $idmedico) Return Medicoespecialidad objects filtered by the idmedico column
 * @method array findByIdespecialidad(int $idespecialidad) Return Medicoespecialidad objects filtered by the idespecialidad column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseMedicoespecialidadQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMedicoespecialidadQuery object.
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
            $modelName = 'Medicoespecialidad';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MedicoespecialidadQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MedicoespecialidadQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MedicoespecialidadQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MedicoespecialidadQuery) {
            return $criteria;
        }
        $query = new MedicoespecialidadQuery(null, null, $modelAlias);

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
     * @return   Medicoespecialidad|Medicoespecialidad[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MedicoespecialidadPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MedicoespecialidadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Medicoespecialidad A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdmedicoespecialidad($key, $con = null)
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
     * @return                 Medicoespecialidad A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idmedicoespecialidad`, `idmedico`, `idespecialidad` FROM `medicoespecialidad` WHERE `idmedicoespecialidad` = :p0';
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
            $obj = new Medicoespecialidad();
            $obj->hydrate($row);
            MedicoespecialidadPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Medicoespecialidad|Medicoespecialidad[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Medicoespecialidad[]|mixed the list of results, formatted by the current formatter
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
     * @return MedicoespecialidadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MedicoespecialidadPeer::IDMEDICOESPECIALIDAD, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MedicoespecialidadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MedicoespecialidadPeer::IDMEDICOESPECIALIDAD, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idmedicoespecialidad column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmedicoespecialidad(1234); // WHERE idmedicoespecialidad = 1234
     * $query->filterByIdmedicoespecialidad(array(12, 34)); // WHERE idmedicoespecialidad IN (12, 34)
     * $query->filterByIdmedicoespecialidad(array('min' => 12)); // WHERE idmedicoespecialidad >= 12
     * $query->filterByIdmedicoespecialidad(array('max' => 12)); // WHERE idmedicoespecialidad <= 12
     * </code>
     *
     * @param     mixed $idmedicoespecialidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoespecialidadQuery The current query, for fluid interface
     */
    public function filterByIdmedicoespecialidad($idmedicoespecialidad = null, $comparison = null)
    {
        if (is_array($idmedicoespecialidad)) {
            $useMinMax = false;
            if (isset($idmedicoespecialidad['min'])) {
                $this->addUsingAlias(MedicoespecialidadPeer::IDMEDICOESPECIALIDAD, $idmedicoespecialidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmedicoespecialidad['max'])) {
                $this->addUsingAlias(MedicoespecialidadPeer::IDMEDICOESPECIALIDAD, $idmedicoespecialidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MedicoespecialidadPeer::IDMEDICOESPECIALIDAD, $idmedicoespecialidad, $comparison);
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
     * @return MedicoespecialidadQuery The current query, for fluid interface
     */
    public function filterByIdmedico($idmedico = null, $comparison = null)
    {
        if (is_array($idmedico)) {
            $useMinMax = false;
            if (isset($idmedico['min'])) {
                $this->addUsingAlias(MedicoespecialidadPeer::IDMEDICO, $idmedico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmedico['max'])) {
                $this->addUsingAlias(MedicoespecialidadPeer::IDMEDICO, $idmedico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MedicoespecialidadPeer::IDMEDICO, $idmedico, $comparison);
    }

    /**
     * Filter the query on the idespecialidad column
     *
     * Example usage:
     * <code>
     * $query->filterByIdespecialidad(1234); // WHERE idespecialidad = 1234
     * $query->filterByIdespecialidad(array(12, 34)); // WHERE idespecialidad IN (12, 34)
     * $query->filterByIdespecialidad(array('min' => 12)); // WHERE idespecialidad >= 12
     * $query->filterByIdespecialidad(array('max' => 12)); // WHERE idespecialidad <= 12
     * </code>
     *
     * @see       filterByEspecialidad()
     *
     * @param     mixed $idespecialidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicoespecialidadQuery The current query, for fluid interface
     */
    public function filterByIdespecialidad($idespecialidad = null, $comparison = null)
    {
        if (is_array($idespecialidad)) {
            $useMinMax = false;
            if (isset($idespecialidad['min'])) {
                $this->addUsingAlias(MedicoespecialidadPeer::IDESPECIALIDAD, $idespecialidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idespecialidad['max'])) {
                $this->addUsingAlias(MedicoespecialidadPeer::IDESPECIALIDAD, $idespecialidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MedicoespecialidadPeer::IDESPECIALIDAD, $idespecialidad, $comparison);
    }

    /**
     * Filter the query by a related Especialidad object
     *
     * @param   Especialidad|PropelObjectCollection $especialidad The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MedicoespecialidadQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEspecialidad($especialidad, $comparison = null)
    {
        if ($especialidad instanceof Especialidad) {
            return $this
                ->addUsingAlias(MedicoespecialidadPeer::IDESPECIALIDAD, $especialidad->getIdespecialidad(), $comparison);
        } elseif ($especialidad instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MedicoespecialidadPeer::IDESPECIALIDAD, $especialidad->toKeyValue('PrimaryKey', 'Idespecialidad'), $comparison);
        } else {
            throw new PropelException('filterByEspecialidad() only accepts arguments of type Especialidad or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Especialidad relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MedicoespecialidadQuery The current query, for fluid interface
     */
    public function joinEspecialidad($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Especialidad');

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
            $this->addJoinObject($join, 'Especialidad');
        }

        return $this;
    }

    /**
     * Use the Especialidad relation Especialidad object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EspecialidadQuery A secondary query class using the current class as primary query
     */
    public function useEspecialidadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEspecialidad($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Especialidad', 'EspecialidadQuery');
    }

    /**
     * Filter the query by a related Medico object
     *
     * @param   Medico|PropelObjectCollection $medico The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MedicoespecialidadQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMedico($medico, $comparison = null)
    {
        if ($medico instanceof Medico) {
            return $this
                ->addUsingAlias(MedicoespecialidadPeer::IDMEDICO, $medico->getIdmedico(), $comparison);
        } elseif ($medico instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MedicoespecialidadPeer::IDMEDICO, $medico->toKeyValue('PrimaryKey', 'Idmedico'), $comparison);
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
     * @return MedicoespecialidadQuery The current query, for fluid interface
     */
    public function joinMedico($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useMedicoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMedico($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Medico', 'MedicoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Medicoespecialidad $medicoespecialidad Object to remove from the list of results
     *
     * @return MedicoespecialidadQuery The current query, for fluid interface
     */
    public function prune($medicoespecialidad = null)
    {
        if ($medicoespecialidad) {
            $this->addUsingAlias(MedicoespecialidadPeer::IDMEDICOESPECIALIDAD, $medicoespecialidad->getIdmedicoespecialidad(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
