<?php


/**
 * Base class that represents a query for the 'especialidad' table.
 *
 *
 *
 * @method EspecialidadQuery orderByIdespecialidad($order = Criteria::ASC) Order by the idespecialidad column
 * @method EspecialidadQuery orderByEspecialidadNombre($order = Criteria::ASC) Order by the especialidad_nombre column
 * @method EspecialidadQuery orderByEspecialidadDescripcion($order = Criteria::ASC) Order by the especialidad_descripcion column
 *
 * @method EspecialidadQuery groupByIdespecialidad() Group by the idespecialidad column
 * @method EspecialidadQuery groupByEspecialidadNombre() Group by the especialidad_nombre column
 * @method EspecialidadQuery groupByEspecialidadDescripcion() Group by the especialidad_descripcion column
 *
 * @method EspecialidadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EspecialidadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EspecialidadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EspecialidadQuery leftJoinMedico($relationAlias = null) Adds a LEFT JOIN clause to the query using the Medico relation
 * @method EspecialidadQuery rightJoinMedico($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Medico relation
 * @method EspecialidadQuery innerJoinMedico($relationAlias = null) Adds a INNER JOIN clause to the query using the Medico relation
 *
 * @method EspecialidadQuery leftJoinMedicoespecialidad($relationAlias = null) Adds a LEFT JOIN clause to the query using the Medicoespecialidad relation
 * @method EspecialidadQuery rightJoinMedicoespecialidad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Medicoespecialidad relation
 * @method EspecialidadQuery innerJoinMedicoespecialidad($relationAlias = null) Adds a INNER JOIN clause to the query using the Medicoespecialidad relation
 *
 * @method Especialidad findOne(PropelPDO $con = null) Return the first Especialidad matching the query
 * @method Especialidad findOneOrCreate(PropelPDO $con = null) Return the first Especialidad matching the query, or a new Especialidad object populated from the query conditions when no match is found
 *
 * @method Especialidad findOneByEspecialidadNombre(string $especialidad_nombre) Return the first Especialidad filtered by the especialidad_nombre column
 * @method Especialidad findOneByEspecialidadDescripcion(string $especialidad_descripcion) Return the first Especialidad filtered by the especialidad_descripcion column
 *
 * @method array findByIdespecialidad(int $idespecialidad) Return Especialidad objects filtered by the idespecialidad column
 * @method array findByEspecialidadNombre(string $especialidad_nombre) Return Especialidad objects filtered by the especialidad_nombre column
 * @method array findByEspecialidadDescripcion(string $especialidad_descripcion) Return Especialidad objects filtered by the especialidad_descripcion column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseEspecialidadQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEspecialidadQuery object.
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
            $modelName = 'Especialidad';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EspecialidadQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EspecialidadQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EspecialidadQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EspecialidadQuery) {
            return $criteria;
        }
        $query = new EspecialidadQuery(null, null, $modelAlias);

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
     * @return   Especialidad|Especialidad[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EspecialidadPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EspecialidadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Especialidad A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdespecialidad($key, $con = null)
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
     * @return                 Especialidad A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idespecialidad`, `especialidad_nombre`, `especialidad_descripcion` FROM `especialidad` WHERE `idespecialidad` = :p0';
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
            $obj = new Especialidad();
            $obj->hydrate($row);
            EspecialidadPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Especialidad|Especialidad[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Especialidad[]|mixed the list of results, formatted by the current formatter
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
     * @return EspecialidadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EspecialidadPeer::IDESPECIALIDAD, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EspecialidadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EspecialidadPeer::IDESPECIALIDAD, $keys, Criteria::IN);
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
     * @param     mixed $idespecialidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EspecialidadQuery The current query, for fluid interface
     */
    public function filterByIdespecialidad($idespecialidad = null, $comparison = null)
    {
        if (is_array($idespecialidad)) {
            $useMinMax = false;
            if (isset($idespecialidad['min'])) {
                $this->addUsingAlias(EspecialidadPeer::IDESPECIALIDAD, $idespecialidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idespecialidad['max'])) {
                $this->addUsingAlias(EspecialidadPeer::IDESPECIALIDAD, $idespecialidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EspecialidadPeer::IDESPECIALIDAD, $idespecialidad, $comparison);
    }

    /**
     * Filter the query on the especialidad_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByEspecialidadNombre('fooValue');   // WHERE especialidad_nombre = 'fooValue'
     * $query->filterByEspecialidadNombre('%fooValue%'); // WHERE especialidad_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $especialidadNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EspecialidadQuery The current query, for fluid interface
     */
    public function filterByEspecialidadNombre($especialidadNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($especialidadNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $especialidadNombre)) {
                $especialidadNombre = str_replace('*', '%', $especialidadNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EspecialidadPeer::ESPECIALIDAD_NOMBRE, $especialidadNombre, $comparison);
    }

    /**
     * Filter the query on the especialidad_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByEspecialidadDescripcion('fooValue');   // WHERE especialidad_descripcion = 'fooValue'
     * $query->filterByEspecialidadDescripcion('%fooValue%'); // WHERE especialidad_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $especialidadDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EspecialidadQuery The current query, for fluid interface
     */
    public function filterByEspecialidadDescripcion($especialidadDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($especialidadDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $especialidadDescripcion)) {
                $especialidadDescripcion = str_replace('*', '%', $especialidadDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EspecialidadPeer::ESPECIALIDAD_DESCRIPCION, $especialidadDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Medico object
     *
     * @param   Medico|PropelObjectCollection $medico  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EspecialidadQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMedico($medico, $comparison = null)
    {
        if ($medico instanceof Medico) {
            return $this
                ->addUsingAlias(EspecialidadPeer::IDESPECIALIDAD, $medico->getIdespecialidad(), $comparison);
        } elseif ($medico instanceof PropelObjectCollection) {
            return $this
                ->useMedicoQuery()
                ->filterByPrimaryKeys($medico->getPrimaryKeys())
                ->endUse();
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
     * @return EspecialidadQuery The current query, for fluid interface
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
     * Filter the query by a related Medicoespecialidad object
     *
     * @param   Medicoespecialidad|PropelObjectCollection $medicoespecialidad  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EspecialidadQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMedicoespecialidad($medicoespecialidad, $comparison = null)
    {
        if ($medicoespecialidad instanceof Medicoespecialidad) {
            return $this
                ->addUsingAlias(EspecialidadPeer::IDESPECIALIDAD, $medicoespecialidad->getIdespecialidad(), $comparison);
        } elseif ($medicoespecialidad instanceof PropelObjectCollection) {
            return $this
                ->useMedicoespecialidadQuery()
                ->filterByPrimaryKeys($medicoespecialidad->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByMedicoespecialidad() only accepts arguments of type Medicoespecialidad or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Medicoespecialidad relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EspecialidadQuery The current query, for fluid interface
     */
    public function joinMedicoespecialidad($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Medicoespecialidad');

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
            $this->addJoinObject($join, 'Medicoespecialidad');
        }

        return $this;
    }

    /**
     * Use the Medicoespecialidad relation Medicoespecialidad object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MedicoespecialidadQuery A secondary query class using the current class as primary query
     */
    public function useMedicoespecialidadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMedicoespecialidad($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Medicoespecialidad', 'MedicoespecialidadQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Especialidad $especialidad Object to remove from the list of results
     *
     * @return EspecialidadQuery The current query, for fluid interface
     */
    public function prune($especialidad = null)
    {
        if ($especialidad) {
            $this->addUsingAlias(EspecialidadPeer::IDESPECIALIDAD, $especialidad->getIdespecialidad(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
