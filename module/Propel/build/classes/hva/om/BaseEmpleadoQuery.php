<?php


/**
 * Base class that represents a query for the 'empleado' table.
 *
 *
 *
 * @method EmpleadoQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method EmpleadoQuery orderByIdrol($order = Criteria::ASC) Order by the idrol column
 * @method EmpleadoQuery orderByEmpleadoNombre($order = Criteria::ASC) Order by the empleado_nombre column
 * @method EmpleadoQuery orderByEmpleadoApellidopaterno($order = Criteria::ASC) Order by the empleado_apellidopaterno column
 * @method EmpleadoQuery orderByEmpleadoApellidomaterno($order = Criteria::ASC) Order by the empleado_apellidomaterno column
 * @method EmpleadoQuery orderByEmpleadoNombreusuario($order = Criteria::ASC) Order by the empleado_nombreusuario column
 * @method EmpleadoQuery orderByEmpleadoPassword($order = Criteria::ASC) Order by the empleado_password column
 * @method EmpleadoQuery orderByEmpleadoEmail($order = Criteria::ASC) Order by the empleado_email column
 *
 * @method EmpleadoQuery groupByIdempleado() Group by the idempleado column
 * @method EmpleadoQuery groupByIdrol() Group by the idrol column
 * @method EmpleadoQuery groupByEmpleadoNombre() Group by the empleado_nombre column
 * @method EmpleadoQuery groupByEmpleadoApellidopaterno() Group by the empleado_apellidopaterno column
 * @method EmpleadoQuery groupByEmpleadoApellidomaterno() Group by the empleado_apellidomaterno column
 * @method EmpleadoQuery groupByEmpleadoNombreusuario() Group by the empleado_nombreusuario column
 * @method EmpleadoQuery groupByEmpleadoPassword() Group by the empleado_password column
 * @method EmpleadoQuery groupByEmpleadoEmail() Group by the empleado_email column
 *
 * @method EmpleadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmpleadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmpleadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmpleadoQuery leftJoinRol($relationAlias = null) Adds a LEFT JOIN clause to the query using the Rol relation
 * @method EmpleadoQuery rightJoinRol($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Rol relation
 * @method EmpleadoQuery innerJoinRol($relationAlias = null) Adds a INNER JOIN clause to the query using the Rol relation
 *
 * @method EmpleadoQuery leftJoinEmpleadofacturacion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleadofacturacion relation
 * @method EmpleadoQuery rightJoinEmpleadofacturacion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleadofacturacion relation
 * @method EmpleadoQuery innerJoinEmpleadofacturacion($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleadofacturacion relation
 *
 * @method Empleado findOne(PropelPDO $con = null) Return the first Empleado matching the query
 * @method Empleado findOneOrCreate(PropelPDO $con = null) Return the first Empleado matching the query, or a new Empleado object populated from the query conditions when no match is found
 *
 * @method Empleado findOneByIdrol(int $idrol) Return the first Empleado filtered by the idrol column
 * @method Empleado findOneByEmpleadoNombre(string $empleado_nombre) Return the first Empleado filtered by the empleado_nombre column
 * @method Empleado findOneByEmpleadoApellidopaterno(string $empleado_apellidopaterno) Return the first Empleado filtered by the empleado_apellidopaterno column
 * @method Empleado findOneByEmpleadoApellidomaterno(string $empleado_apellidomaterno) Return the first Empleado filtered by the empleado_apellidomaterno column
 * @method Empleado findOneByEmpleadoNombreusuario(string $empleado_nombreusuario) Return the first Empleado filtered by the empleado_nombreusuario column
 * @method Empleado findOneByEmpleadoPassword(string $empleado_password) Return the first Empleado filtered by the empleado_password column
 * @method Empleado findOneByEmpleadoEmail(string $empleado_email) Return the first Empleado filtered by the empleado_email column
 *
 * @method array findByIdempleado(int $idempleado) Return Empleado objects filtered by the idempleado column
 * @method array findByIdrol(int $idrol) Return Empleado objects filtered by the idrol column
 * @method array findByEmpleadoNombre(string $empleado_nombre) Return Empleado objects filtered by the empleado_nombre column
 * @method array findByEmpleadoApellidopaterno(string $empleado_apellidopaterno) Return Empleado objects filtered by the empleado_apellidopaterno column
 * @method array findByEmpleadoApellidomaterno(string $empleado_apellidomaterno) Return Empleado objects filtered by the empleado_apellidomaterno column
 * @method array findByEmpleadoNombreusuario(string $empleado_nombreusuario) Return Empleado objects filtered by the empleado_nombreusuario column
 * @method array findByEmpleadoPassword(string $empleado_password) Return Empleado objects filtered by the empleado_password column
 * @method array findByEmpleadoEmail(string $empleado_email) Return Empleado objects filtered by the empleado_email column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseEmpleadoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmpleadoQuery object.
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
            $modelName = 'Empleado';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmpleadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EmpleadoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmpleadoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmpleadoQuery) {
            return $criteria;
        }
        $query = new EmpleadoQuery(null, null, $modelAlias);

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
     * @return   Empleado|Empleado[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmpleadoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Empleado A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdempleado($key, $con = null)
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
     * @return                 Empleado A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idempleado`, `idrol`, `empleado_nombre`, `empleado_apellidopaterno`, `empleado_apellidomaterno`, `empleado_nombreusuario`, `empleado_password`, `empleado_email` FROM `empleado` WHERE `idempleado` = :p0';
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
            $obj = new Empleado();
            $obj->hydrate($row);
            EmpleadoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Empleado|Empleado[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Empleado[]|mixed the list of results, formatted by the current formatter
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
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idempleado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleado(1234); // WHERE idempleado = 1234
     * $query->filterByIdempleado(array(12, 34)); // WHERE idempleado IN (12, 34)
     * $query->filterByIdempleado(array('min' => 12)); // WHERE idempleado >= 12
     * $query->filterByIdempleado(array('max' => 12)); // WHERE idempleado <= 12
     * </code>
     *
     * @param     mixed $idempleado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the idrol column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrol(1234); // WHERE idrol = 1234
     * $query->filterByIdrol(array(12, 34)); // WHERE idrol IN (12, 34)
     * $query->filterByIdrol(array('min' => 12)); // WHERE idrol >= 12
     * $query->filterByIdrol(array('max' => 12)); // WHERE idrol <= 12
     * </code>
     *
     * @see       filterByRol()
     *
     * @param     mixed $idrol The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByIdrol($idrol = null, $comparison = null)
    {
        if (is_array($idrol)) {
            $useMinMax = false;
            if (isset($idrol['min'])) {
                $this->addUsingAlias(EmpleadoPeer::IDROL, $idrol['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrol['max'])) {
                $this->addUsingAlias(EmpleadoPeer::IDROL, $idrol['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::IDROL, $idrol, $comparison);
    }

    /**
     * Filter the query on the empleado_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoNombre('fooValue');   // WHERE empleado_nombre = 'fooValue'
     * $query->filterByEmpleadoNombre('%fooValue%'); // WHERE empleado_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoNombre($empleadoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoNombre)) {
                $empleadoNombre = str_replace('*', '%', $empleadoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_NOMBRE, $empleadoNombre, $comparison);
    }

    /**
     * Filter the query on the empleado_apellidopaterno column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoApellidopaterno('fooValue');   // WHERE empleado_apellidopaterno = 'fooValue'
     * $query->filterByEmpleadoApellidopaterno('%fooValue%'); // WHERE empleado_apellidopaterno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoApellidopaterno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoApellidopaterno($empleadoApellidopaterno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoApellidopaterno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoApellidopaterno)) {
                $empleadoApellidopaterno = str_replace('*', '%', $empleadoApellidopaterno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_APELLIDOPATERNO, $empleadoApellidopaterno, $comparison);
    }

    /**
     * Filter the query on the empleado_apellidomaterno column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoApellidomaterno('fooValue');   // WHERE empleado_apellidomaterno = 'fooValue'
     * $query->filterByEmpleadoApellidomaterno('%fooValue%'); // WHERE empleado_apellidomaterno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoApellidomaterno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoApellidomaterno($empleadoApellidomaterno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoApellidomaterno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoApellidomaterno)) {
                $empleadoApellidomaterno = str_replace('*', '%', $empleadoApellidomaterno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_APELLIDOMATERNO, $empleadoApellidomaterno, $comparison);
    }

    /**
     * Filter the query on the empleado_nombreusuario column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoNombreusuario('fooValue');   // WHERE empleado_nombreusuario = 'fooValue'
     * $query->filterByEmpleadoNombreusuario('%fooValue%'); // WHERE empleado_nombreusuario LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoNombreusuario The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoNombreusuario($empleadoNombreusuario = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoNombreusuario)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoNombreusuario)) {
                $empleadoNombreusuario = str_replace('*', '%', $empleadoNombreusuario);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_NOMBREUSUARIO, $empleadoNombreusuario, $comparison);
    }

    /**
     * Filter the query on the empleado_password column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoPassword('fooValue');   // WHERE empleado_password = 'fooValue'
     * $query->filterByEmpleadoPassword('%fooValue%'); // WHERE empleado_password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoPassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoPassword($empleadoPassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoPassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoPassword)) {
                $empleadoPassword = str_replace('*', '%', $empleadoPassword);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_PASSWORD, $empleadoPassword, $comparison);
    }

    /**
     * Filter the query on the empleado_email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoEmail('fooValue');   // WHERE empleado_email = 'fooValue'
     * $query->filterByEmpleadoEmail('%fooValue%'); // WHERE empleado_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoEmail($empleadoEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoEmail)) {
                $empleadoEmail = str_replace('*', '%', $empleadoEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_EMAIL, $empleadoEmail, $comparison);
    }

    /**
     * Filter the query by a related Rol object
     *
     * @param   Rol|PropelObjectCollection $rol The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRol($rol, $comparison = null)
    {
        if ($rol instanceof Rol) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDROL, $rol->getIdrol(), $comparison);
        } elseif ($rol instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpleadoPeer::IDROL, $rol->toKeyValue('PrimaryKey', 'Idrol'), $comparison);
        } else {
            throw new PropelException('filterByRol() only accepts arguments of type Rol or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Rol relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinRol($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Rol');

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
            $this->addJoinObject($join, 'Rol');
        }

        return $this;
    }

    /**
     * Use the Rol relation Rol object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RolQuery A secondary query class using the current class as primary query
     */
    public function useRolQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRol($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Rol', 'RolQuery');
    }

    /**
     * Filter the query by a related Empleadofacturacion object
     *
     * @param   Empleadofacturacion|PropelObjectCollection $empleadofacturacion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadofacturacion($empleadofacturacion, $comparison = null)
    {
        if ($empleadofacturacion instanceof Empleadofacturacion) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $empleadofacturacion->getIdempleado(), $comparison);
        } elseif ($empleadofacturacion instanceof PropelObjectCollection) {
            return $this
                ->useEmpleadofacturacionQuery()
                ->filterByPrimaryKeys($empleadofacturacion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEmpleadofacturacion() only accepts arguments of type Empleadofacturacion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empleadofacturacion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinEmpleadofacturacion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empleadofacturacion');

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
            $this->addJoinObject($join, 'Empleadofacturacion');
        }

        return $this;
    }

    /**
     * Use the Empleadofacturacion relation Empleadofacturacion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadofacturacionQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadofacturacionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadofacturacion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empleadofacturacion', 'EmpleadofacturacionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Empleado $empleado Object to remove from the list of results
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function prune($empleado = null)
    {
        if ($empleado) {
            $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $empleado->getIdempleado(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
