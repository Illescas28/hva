<?php


/**
 * Base class that represents a query for the 'consultorio' table.
 *
 *
 *
 * @method ConsultorioQuery orderByIdconsultorio($order = Criteria::ASC) Order by the idconsultorio column
 * @method ConsultorioQuery orderByConsultorioNombre($order = Criteria::ASC) Order by the consultorio_nombre column
 * @method ConsultorioQuery orderByConsultorioDescripcion($order = Criteria::ASC) Order by the consultorio_descripcion column
 * @method ConsultorioQuery orderByConsultorioEnuso($order = Criteria::ASC) Order by the consultorio_enuso column
 * @method ConsultorioQuery orderByConsultorioExtension($order = Criteria::ASC) Order by the consultorio_extension column
 *
 * @method ConsultorioQuery groupByIdconsultorio() Group by the idconsultorio column
 * @method ConsultorioQuery groupByConsultorioNombre() Group by the consultorio_nombre column
 * @method ConsultorioQuery groupByConsultorioDescripcion() Group by the consultorio_descripcion column
 * @method ConsultorioQuery groupByConsultorioEnuso() Group by the consultorio_enuso column
 * @method ConsultorioQuery groupByConsultorioExtension() Group by the consultorio_extension column
 *
 * @method ConsultorioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ConsultorioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ConsultorioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ConsultorioQuery leftJoinConsulta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Consulta relation
 * @method ConsultorioQuery rightJoinConsulta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Consulta relation
 * @method ConsultorioQuery innerJoinConsulta($relationAlias = null) Adds a INNER JOIN clause to the query using the Consulta relation
 *
 * @method Consultorio findOne(PropelPDO $con = null) Return the first Consultorio matching the query
 * @method Consultorio findOneOrCreate(PropelPDO $con = null) Return the first Consultorio matching the query, or a new Consultorio object populated from the query conditions when no match is found
 *
 * @method Consultorio findOneByConsultorioNombre(string $consultorio_nombre) Return the first Consultorio filtered by the consultorio_nombre column
 * @method Consultorio findOneByConsultorioDescripcion(string $consultorio_descripcion) Return the first Consultorio filtered by the consultorio_descripcion column
 * @method Consultorio findOneByConsultorioEnuso(boolean $consultorio_enuso) Return the first Consultorio filtered by the consultorio_enuso column
 * @method Consultorio findOneByConsultorioExtension(string $consultorio_extension) Return the first Consultorio filtered by the consultorio_extension column
 *
 * @method array findByIdconsultorio(int $idconsultorio) Return Consultorio objects filtered by the idconsultorio column
 * @method array findByConsultorioNombre(string $consultorio_nombre) Return Consultorio objects filtered by the consultorio_nombre column
 * @method array findByConsultorioDescripcion(string $consultorio_descripcion) Return Consultorio objects filtered by the consultorio_descripcion column
 * @method array findByConsultorioEnuso(boolean $consultorio_enuso) Return Consultorio objects filtered by the consultorio_enuso column
 * @method array findByConsultorioExtension(string $consultorio_extension) Return Consultorio objects filtered by the consultorio_extension column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseConsultorioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseConsultorioQuery object.
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
            $modelName = 'Consultorio';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConsultorioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ConsultorioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ConsultorioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConsultorioQuery) {
            return $criteria;
        }
        $query = new ConsultorioQuery(null, null, $modelAlias);

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
     * @return   Consultorio|Consultorio[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ConsultorioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ConsultorioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Consultorio A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdconsultorio($key, $con = null)
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
     * @return                 Consultorio A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idconsultorio`, `consultorio_nombre`, `consultorio_descripcion`, `consultorio_enuso`, `consultorio_extension` FROM `consultorio` WHERE `idconsultorio` = :p0';
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
            $obj = new Consultorio();
            $obj->hydrate($row);
            ConsultorioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Consultorio|Consultorio[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Consultorio[]|mixed the list of results, formatted by the current formatter
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
     * @return ConsultorioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConsultorioPeer::IDCONSULTORIO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ConsultorioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConsultorioPeer::IDCONSULTORIO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idconsultorio column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconsultorio(1234); // WHERE idconsultorio = 1234
     * $query->filterByIdconsultorio(array(12, 34)); // WHERE idconsultorio IN (12, 34)
     * $query->filterByIdconsultorio(array('min' => 12)); // WHERE idconsultorio >= 12
     * $query->filterByIdconsultorio(array('max' => 12)); // WHERE idconsultorio <= 12
     * </code>
     *
     * @param     mixed $idconsultorio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultorioQuery The current query, for fluid interface
     */
    public function filterByIdconsultorio($idconsultorio = null, $comparison = null)
    {
        if (is_array($idconsultorio)) {
            $useMinMax = false;
            if (isset($idconsultorio['min'])) {
                $this->addUsingAlias(ConsultorioPeer::IDCONSULTORIO, $idconsultorio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconsultorio['max'])) {
                $this->addUsingAlias(ConsultorioPeer::IDCONSULTORIO, $idconsultorio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConsultorioPeer::IDCONSULTORIO, $idconsultorio, $comparison);
    }

    /**
     * Filter the query on the consultorio_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultorioNombre('fooValue');   // WHERE consultorio_nombre = 'fooValue'
     * $query->filterByConsultorioNombre('%fooValue%'); // WHERE consultorio_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultorioNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultorioQuery The current query, for fluid interface
     */
    public function filterByConsultorioNombre($consultorioNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultorioNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultorioNombre)) {
                $consultorioNombre = str_replace('*', '%', $consultorioNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConsultorioPeer::CONSULTORIO_NOMBRE, $consultorioNombre, $comparison);
    }

    /**
     * Filter the query on the consultorio_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultorioDescripcion('fooValue');   // WHERE consultorio_descripcion = 'fooValue'
     * $query->filterByConsultorioDescripcion('%fooValue%'); // WHERE consultorio_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultorioDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultorioQuery The current query, for fluid interface
     */
    public function filterByConsultorioDescripcion($consultorioDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultorioDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultorioDescripcion)) {
                $consultorioDescripcion = str_replace('*', '%', $consultorioDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConsultorioPeer::CONSULTORIO_DESCRIPCION, $consultorioDescripcion, $comparison);
    }

    /**
     * Filter the query on the consultorio_enuso column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultorioEnuso(true); // WHERE consultorio_enuso = true
     * $query->filterByConsultorioEnuso('yes'); // WHERE consultorio_enuso = true
     * </code>
     *
     * @param     boolean|string $consultorioEnuso The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultorioQuery The current query, for fluid interface
     */
    public function filterByConsultorioEnuso($consultorioEnuso = null, $comparison = null)
    {
        if (is_string($consultorioEnuso)) {
            $consultorioEnuso = in_array(strtolower($consultorioEnuso), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ConsultorioPeer::CONSULTORIO_ENUSO, $consultorioEnuso, $comparison);
    }

    /**
     * Filter the query on the consultorio_extension column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultorioExtension('fooValue');   // WHERE consultorio_extension = 'fooValue'
     * $query->filterByConsultorioExtension('%fooValue%'); // WHERE consultorio_extension LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultorioExtension The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultorioQuery The current query, for fluid interface
     */
    public function filterByConsultorioExtension($consultorioExtension = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultorioExtension)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultorioExtension)) {
                $consultorioExtension = str_replace('*', '%', $consultorioExtension);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConsultorioPeer::CONSULTORIO_EXTENSION, $consultorioExtension, $comparison);
    }

    /**
     * Filter the query by a related Consulta object
     *
     * @param   Consulta|PropelObjectCollection $consulta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConsultorioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConsulta($consulta, $comparison = null)
    {
        if ($consulta instanceof Consulta) {
            return $this
                ->addUsingAlias(ConsultorioPeer::IDCONSULTORIO, $consulta->getIdconsultorio(), $comparison);
        } elseif ($consulta instanceof PropelObjectCollection) {
            return $this
                ->useConsultaQuery()
                ->filterByPrimaryKeys($consulta->getPrimaryKeys())
                ->endUse();
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
     * @return ConsultorioQuery The current query, for fluid interface
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
     * @param   Consultorio $consultorio Object to remove from the list of results
     *
     * @return ConsultorioQuery The current query, for fluid interface
     */
    public function prune($consultorio = null)
    {
        if ($consultorio) {
            $this->addUsingAlias(ConsultorioPeer::IDCONSULTORIO, $consultorio->getIdconsultorio(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
