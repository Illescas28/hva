<?php


/**
 * Base class that represents a query for the 'medicofacturacion' table.
 *
 *
 *
 * @method MedicofacturacionQuery orderByIdmedicofacturacion($order = Criteria::ASC) Order by the idmedicofacturacion column
 * @method MedicofacturacionQuery orderByIdmedico($order = Criteria::ASC) Order by the idmedico column
 * @method MedicofacturacionQuery orderByMedicofacturacionRazonsocial($order = Criteria::ASC) Order by the medicofacturacion_razonsocial column
 * @method MedicofacturacionQuery orderByMedicofacturacionRfc($order = Criteria::ASC) Order by the medicofacturacion_rfc column
 * @method MedicofacturacionQuery orderByMedicofacturacionCalle($order = Criteria::ASC) Order by the medicofacturacion_calle column
 * @method MedicofacturacionQuery orderByMedicofacturacionNoexterior($order = Criteria::ASC) Order by the medicofacturacion_noexterior column
 * @method MedicofacturacionQuery orderByMedicofacturacionNointerior($order = Criteria::ASC) Order by the medicofacturacion_nointerior column
 * @method MedicofacturacionQuery orderByMedicofacturacionColonia($order = Criteria::ASC) Order by the medicofacturacion_colonia column
 * @method MedicofacturacionQuery orderByMedicofacturacionCiudad($order = Criteria::ASC) Order by the medicofacturacion_ciudad column
 * @method MedicofacturacionQuery orderByMedicofacturacionEstado($order = Criteria::ASC) Order by the medicofacturacion_estado column
 * @method MedicofacturacionQuery orderByMedicofacturacionPais($order = Criteria::ASC) Order by the medicofacturacion_pais column
 * @method MedicofacturacionQuery orderByMedicofacturacionCodigopostal($order = Criteria::ASC) Order by the medicofacturacion_codigopostal column
 * @method MedicofacturacionQuery orderByMedicofacturacionTelefono($order = Criteria::ASC) Order by the medicofacturacion_telefono column
 * @method MedicofacturacionQuery orderByMedicofacturacionEmail($order = Criteria::ASC) Order by the medicofacturacion_email column
 *
 * @method MedicofacturacionQuery groupByIdmedicofacturacion() Group by the idmedicofacturacion column
 * @method MedicofacturacionQuery groupByIdmedico() Group by the idmedico column
 * @method MedicofacturacionQuery groupByMedicofacturacionRazonsocial() Group by the medicofacturacion_razonsocial column
 * @method MedicofacturacionQuery groupByMedicofacturacionRfc() Group by the medicofacturacion_rfc column
 * @method MedicofacturacionQuery groupByMedicofacturacionCalle() Group by the medicofacturacion_calle column
 * @method MedicofacturacionQuery groupByMedicofacturacionNoexterior() Group by the medicofacturacion_noexterior column
 * @method MedicofacturacionQuery groupByMedicofacturacionNointerior() Group by the medicofacturacion_nointerior column
 * @method MedicofacturacionQuery groupByMedicofacturacionColonia() Group by the medicofacturacion_colonia column
 * @method MedicofacturacionQuery groupByMedicofacturacionCiudad() Group by the medicofacturacion_ciudad column
 * @method MedicofacturacionQuery groupByMedicofacturacionEstado() Group by the medicofacturacion_estado column
 * @method MedicofacturacionQuery groupByMedicofacturacionPais() Group by the medicofacturacion_pais column
 * @method MedicofacturacionQuery groupByMedicofacturacionCodigopostal() Group by the medicofacturacion_codigopostal column
 * @method MedicofacturacionQuery groupByMedicofacturacionTelefono() Group by the medicofacturacion_telefono column
 * @method MedicofacturacionQuery groupByMedicofacturacionEmail() Group by the medicofacturacion_email column
 *
 * @method MedicofacturacionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MedicofacturacionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MedicofacturacionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MedicofacturacionQuery leftJoinMedico($relationAlias = null) Adds a LEFT JOIN clause to the query using the Medico relation
 * @method MedicofacturacionQuery rightJoinMedico($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Medico relation
 * @method MedicofacturacionQuery innerJoinMedico($relationAlias = null) Adds a INNER JOIN clause to the query using the Medico relation
 *
 * @method Medicofacturacion findOne(PropelPDO $con = null) Return the first Medicofacturacion matching the query
 * @method Medicofacturacion findOneOrCreate(PropelPDO $con = null) Return the first Medicofacturacion matching the query, or a new Medicofacturacion object populated from the query conditions when no match is found
 *
 * @method Medicofacturacion findOneByIdmedico(int $idmedico) Return the first Medicofacturacion filtered by the idmedico column
 * @method Medicofacturacion findOneByMedicofacturacionRazonsocial(string $medicofacturacion_razonsocial) Return the first Medicofacturacion filtered by the medicofacturacion_razonsocial column
 * @method Medicofacturacion findOneByMedicofacturacionRfc(string $medicofacturacion_rfc) Return the first Medicofacturacion filtered by the medicofacturacion_rfc column
 * @method Medicofacturacion findOneByMedicofacturacionCalle(string $medicofacturacion_calle) Return the first Medicofacturacion filtered by the medicofacturacion_calle column
 * @method Medicofacturacion findOneByMedicofacturacionNoexterior(string $medicofacturacion_noexterior) Return the first Medicofacturacion filtered by the medicofacturacion_noexterior column
 * @method Medicofacturacion findOneByMedicofacturacionNointerior(string $medicofacturacion_nointerior) Return the first Medicofacturacion filtered by the medicofacturacion_nointerior column
 * @method Medicofacturacion findOneByMedicofacturacionColonia(string $medicofacturacion_colonia) Return the first Medicofacturacion filtered by the medicofacturacion_colonia column
 * @method Medicofacturacion findOneByMedicofacturacionCiudad(string $medicofacturacion_ciudad) Return the first Medicofacturacion filtered by the medicofacturacion_ciudad column
 * @method Medicofacturacion findOneByMedicofacturacionEstado(string $medicofacturacion_estado) Return the first Medicofacturacion filtered by the medicofacturacion_estado column
 * @method Medicofacturacion findOneByMedicofacturacionPais(string $medicofacturacion_pais) Return the first Medicofacturacion filtered by the medicofacturacion_pais column
 * @method Medicofacturacion findOneByMedicofacturacionCodigopostal(string $medicofacturacion_codigopostal) Return the first Medicofacturacion filtered by the medicofacturacion_codigopostal column
 * @method Medicofacturacion findOneByMedicofacturacionTelefono(string $medicofacturacion_telefono) Return the first Medicofacturacion filtered by the medicofacturacion_telefono column
 * @method Medicofacturacion findOneByMedicofacturacionEmail(string $medicofacturacion_email) Return the first Medicofacturacion filtered by the medicofacturacion_email column
 *
 * @method array findByIdmedicofacturacion(int $idmedicofacturacion) Return Medicofacturacion objects filtered by the idmedicofacturacion column
 * @method array findByIdmedico(int $idmedico) Return Medicofacturacion objects filtered by the idmedico column
 * @method array findByMedicofacturacionRazonsocial(string $medicofacturacion_razonsocial) Return Medicofacturacion objects filtered by the medicofacturacion_razonsocial column
 * @method array findByMedicofacturacionRfc(string $medicofacturacion_rfc) Return Medicofacturacion objects filtered by the medicofacturacion_rfc column
 * @method array findByMedicofacturacionCalle(string $medicofacturacion_calle) Return Medicofacturacion objects filtered by the medicofacturacion_calle column
 * @method array findByMedicofacturacionNoexterior(string $medicofacturacion_noexterior) Return Medicofacturacion objects filtered by the medicofacturacion_noexterior column
 * @method array findByMedicofacturacionNointerior(string $medicofacturacion_nointerior) Return Medicofacturacion objects filtered by the medicofacturacion_nointerior column
 * @method array findByMedicofacturacionColonia(string $medicofacturacion_colonia) Return Medicofacturacion objects filtered by the medicofacturacion_colonia column
 * @method array findByMedicofacturacionCiudad(string $medicofacturacion_ciudad) Return Medicofacturacion objects filtered by the medicofacturacion_ciudad column
 * @method array findByMedicofacturacionEstado(string $medicofacturacion_estado) Return Medicofacturacion objects filtered by the medicofacturacion_estado column
 * @method array findByMedicofacturacionPais(string $medicofacturacion_pais) Return Medicofacturacion objects filtered by the medicofacturacion_pais column
 * @method array findByMedicofacturacionCodigopostal(string $medicofacturacion_codigopostal) Return Medicofacturacion objects filtered by the medicofacturacion_codigopostal column
 * @method array findByMedicofacturacionTelefono(string $medicofacturacion_telefono) Return Medicofacturacion objects filtered by the medicofacturacion_telefono column
 * @method array findByMedicofacturacionEmail(string $medicofacturacion_email) Return Medicofacturacion objects filtered by the medicofacturacion_email column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseMedicofacturacionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMedicofacturacionQuery object.
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
            $modelName = 'Medicofacturacion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MedicofacturacionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MedicofacturacionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MedicofacturacionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MedicofacturacionQuery) {
            return $criteria;
        }
        $query = new MedicofacturacionQuery(null, null, $modelAlias);

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
     * @return   Medicofacturacion|Medicofacturacion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MedicofacturacionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MedicofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Medicofacturacion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdmedicofacturacion($key, $con = null)
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
     * @return                 Medicofacturacion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idmedicofacturacion`, `idmedico`, `medicofacturacion_razonsocial`, `medicofacturacion_rfc`, `medicofacturacion_calle`, `medicofacturacion_noexterior`, `medicofacturacion_nointerior`, `medicofacturacion_colonia`, `medicofacturacion_ciudad`, `medicofacturacion_estado`, `medicofacturacion_pais`, `medicofacturacion_codigopostal`, `medicofacturacion_telefono`, `medicofacturacion_email` FROM `medicofacturacion` WHERE `idmedicofacturacion` = :p0';
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
            $obj = new Medicofacturacion();
            $obj->hydrate($row);
            MedicofacturacionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Medicofacturacion|Medicofacturacion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Medicofacturacion[]|mixed the list of results, formatted by the current formatter
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
     * @return MedicofacturacionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MedicofacturacionPeer::IDMEDICOFACTURACION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MedicofacturacionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MedicofacturacionPeer::IDMEDICOFACTURACION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idmedicofacturacion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmedicofacturacion(1234); // WHERE idmedicofacturacion = 1234
     * $query->filterByIdmedicofacturacion(array(12, 34)); // WHERE idmedicofacturacion IN (12, 34)
     * $query->filterByIdmedicofacturacion(array('min' => 12)); // WHERE idmedicofacturacion >= 12
     * $query->filterByIdmedicofacturacion(array('max' => 12)); // WHERE idmedicofacturacion <= 12
     * </code>
     *
     * @param     mixed $idmedicofacturacion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicofacturacionQuery The current query, for fluid interface
     */
    public function filterByIdmedicofacturacion($idmedicofacturacion = null, $comparison = null)
    {
        if (is_array($idmedicofacturacion)) {
            $useMinMax = false;
            if (isset($idmedicofacturacion['min'])) {
                $this->addUsingAlias(MedicofacturacionPeer::IDMEDICOFACTURACION, $idmedicofacturacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmedicofacturacion['max'])) {
                $this->addUsingAlias(MedicofacturacionPeer::IDMEDICOFACTURACION, $idmedicofacturacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MedicofacturacionPeer::IDMEDICOFACTURACION, $idmedicofacturacion, $comparison);
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
     * @return MedicofacturacionQuery The current query, for fluid interface
     */
    public function filterByIdmedico($idmedico = null, $comparison = null)
    {
        if (is_array($idmedico)) {
            $useMinMax = false;
            if (isset($idmedico['min'])) {
                $this->addUsingAlias(MedicofacturacionPeer::IDMEDICO, $idmedico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmedico['max'])) {
                $this->addUsingAlias(MedicofacturacionPeer::IDMEDICO, $idmedico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MedicofacturacionPeer::IDMEDICO, $idmedico, $comparison);
    }

    /**
     * Filter the query on the medicofacturacion_razonsocial column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicofacturacionRazonsocial('fooValue');   // WHERE medicofacturacion_razonsocial = 'fooValue'
     * $query->filterByMedicofacturacionRazonsocial('%fooValue%'); // WHERE medicofacturacion_razonsocial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicofacturacionRazonsocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicofacturacionQuery The current query, for fluid interface
     */
    public function filterByMedicofacturacionRazonsocial($medicofacturacionRazonsocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicofacturacionRazonsocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicofacturacionRazonsocial)) {
                $medicofacturacionRazonsocial = str_replace('*', '%', $medicofacturacionRazonsocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicofacturacionPeer::MEDICOFACTURACION_RAZONSOCIAL, $medicofacturacionRazonsocial, $comparison);
    }

    /**
     * Filter the query on the medicofacturacion_rfc column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicofacturacionRfc('fooValue');   // WHERE medicofacturacion_rfc = 'fooValue'
     * $query->filterByMedicofacturacionRfc('%fooValue%'); // WHERE medicofacturacion_rfc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicofacturacionRfc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicofacturacionQuery The current query, for fluid interface
     */
    public function filterByMedicofacturacionRfc($medicofacturacionRfc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicofacturacionRfc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicofacturacionRfc)) {
                $medicofacturacionRfc = str_replace('*', '%', $medicofacturacionRfc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicofacturacionPeer::MEDICOFACTURACION_RFC, $medicofacturacionRfc, $comparison);
    }

    /**
     * Filter the query on the medicofacturacion_calle column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicofacturacionCalle('fooValue');   // WHERE medicofacturacion_calle = 'fooValue'
     * $query->filterByMedicofacturacionCalle('%fooValue%'); // WHERE medicofacturacion_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicofacturacionCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicofacturacionQuery The current query, for fluid interface
     */
    public function filterByMedicofacturacionCalle($medicofacturacionCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicofacturacionCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicofacturacionCalle)) {
                $medicofacturacionCalle = str_replace('*', '%', $medicofacturacionCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicofacturacionPeer::MEDICOFACTURACION_CALLE, $medicofacturacionCalle, $comparison);
    }

    /**
     * Filter the query on the medicofacturacion_noexterior column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicofacturacionNoexterior('fooValue');   // WHERE medicofacturacion_noexterior = 'fooValue'
     * $query->filterByMedicofacturacionNoexterior('%fooValue%'); // WHERE medicofacturacion_noexterior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicofacturacionNoexterior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicofacturacionQuery The current query, for fluid interface
     */
    public function filterByMedicofacturacionNoexterior($medicofacturacionNoexterior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicofacturacionNoexterior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicofacturacionNoexterior)) {
                $medicofacturacionNoexterior = str_replace('*', '%', $medicofacturacionNoexterior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicofacturacionPeer::MEDICOFACTURACION_NOEXTERIOR, $medicofacturacionNoexterior, $comparison);
    }

    /**
     * Filter the query on the medicofacturacion_nointerior column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicofacturacionNointerior('fooValue');   // WHERE medicofacturacion_nointerior = 'fooValue'
     * $query->filterByMedicofacturacionNointerior('%fooValue%'); // WHERE medicofacturacion_nointerior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicofacturacionNointerior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicofacturacionQuery The current query, for fluid interface
     */
    public function filterByMedicofacturacionNointerior($medicofacturacionNointerior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicofacturacionNointerior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicofacturacionNointerior)) {
                $medicofacturacionNointerior = str_replace('*', '%', $medicofacturacionNointerior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicofacturacionPeer::MEDICOFACTURACION_NOINTERIOR, $medicofacturacionNointerior, $comparison);
    }

    /**
     * Filter the query on the medicofacturacion_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicofacturacionColonia('fooValue');   // WHERE medicofacturacion_colonia = 'fooValue'
     * $query->filterByMedicofacturacionColonia('%fooValue%'); // WHERE medicofacturacion_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicofacturacionColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicofacturacionQuery The current query, for fluid interface
     */
    public function filterByMedicofacturacionColonia($medicofacturacionColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicofacturacionColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicofacturacionColonia)) {
                $medicofacturacionColonia = str_replace('*', '%', $medicofacturacionColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicofacturacionPeer::MEDICOFACTURACION_COLONIA, $medicofacturacionColonia, $comparison);
    }

    /**
     * Filter the query on the medicofacturacion_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicofacturacionCiudad('fooValue');   // WHERE medicofacturacion_ciudad = 'fooValue'
     * $query->filterByMedicofacturacionCiudad('%fooValue%'); // WHERE medicofacturacion_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicofacturacionCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicofacturacionQuery The current query, for fluid interface
     */
    public function filterByMedicofacturacionCiudad($medicofacturacionCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicofacturacionCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicofacturacionCiudad)) {
                $medicofacturacionCiudad = str_replace('*', '%', $medicofacturacionCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicofacturacionPeer::MEDICOFACTURACION_CIUDAD, $medicofacturacionCiudad, $comparison);
    }

    /**
     * Filter the query on the medicofacturacion_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicofacturacionEstado('fooValue');   // WHERE medicofacturacion_estado = 'fooValue'
     * $query->filterByMedicofacturacionEstado('%fooValue%'); // WHERE medicofacturacion_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicofacturacionEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicofacturacionQuery The current query, for fluid interface
     */
    public function filterByMedicofacturacionEstado($medicofacturacionEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicofacturacionEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicofacturacionEstado)) {
                $medicofacturacionEstado = str_replace('*', '%', $medicofacturacionEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicofacturacionPeer::MEDICOFACTURACION_ESTADO, $medicofacturacionEstado, $comparison);
    }

    /**
     * Filter the query on the medicofacturacion_pais column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicofacturacionPais('fooValue');   // WHERE medicofacturacion_pais = 'fooValue'
     * $query->filterByMedicofacturacionPais('%fooValue%'); // WHERE medicofacturacion_pais LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicofacturacionPais The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicofacturacionQuery The current query, for fluid interface
     */
    public function filterByMedicofacturacionPais($medicofacturacionPais = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicofacturacionPais)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicofacturacionPais)) {
                $medicofacturacionPais = str_replace('*', '%', $medicofacturacionPais);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicofacturacionPeer::MEDICOFACTURACION_PAIS, $medicofacturacionPais, $comparison);
    }

    /**
     * Filter the query on the medicofacturacion_codigopostal column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicofacturacionCodigopostal('fooValue');   // WHERE medicofacturacion_codigopostal = 'fooValue'
     * $query->filterByMedicofacturacionCodigopostal('%fooValue%'); // WHERE medicofacturacion_codigopostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicofacturacionCodigopostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicofacturacionQuery The current query, for fluid interface
     */
    public function filterByMedicofacturacionCodigopostal($medicofacturacionCodigopostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicofacturacionCodigopostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicofacturacionCodigopostal)) {
                $medicofacturacionCodigopostal = str_replace('*', '%', $medicofacturacionCodigopostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicofacturacionPeer::MEDICOFACTURACION_CODIGOPOSTAL, $medicofacturacionCodigopostal, $comparison);
    }

    /**
     * Filter the query on the medicofacturacion_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicofacturacionTelefono('fooValue');   // WHERE medicofacturacion_telefono = 'fooValue'
     * $query->filterByMedicofacturacionTelefono('%fooValue%'); // WHERE medicofacturacion_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicofacturacionTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicofacturacionQuery The current query, for fluid interface
     */
    public function filterByMedicofacturacionTelefono($medicofacturacionTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicofacturacionTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicofacturacionTelefono)) {
                $medicofacturacionTelefono = str_replace('*', '%', $medicofacturacionTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicofacturacionPeer::MEDICOFACTURACION_TELEFONO, $medicofacturacionTelefono, $comparison);
    }

    /**
     * Filter the query on the medicofacturacion_email column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicofacturacionEmail('fooValue');   // WHERE medicofacturacion_email = 'fooValue'
     * $query->filterByMedicofacturacionEmail('%fooValue%'); // WHERE medicofacturacion_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medicofacturacionEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedicofacturacionQuery The current query, for fluid interface
     */
    public function filterByMedicofacturacionEmail($medicofacturacionEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medicofacturacionEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medicofacturacionEmail)) {
                $medicofacturacionEmail = str_replace('*', '%', $medicofacturacionEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedicofacturacionPeer::MEDICOFACTURACION_EMAIL, $medicofacturacionEmail, $comparison);
    }

    /**
     * Filter the query by a related Medico object
     *
     * @param   Medico|PropelObjectCollection $medico The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MedicofacturacionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMedico($medico, $comparison = null)
    {
        if ($medico instanceof Medico) {
            return $this
                ->addUsingAlias(MedicofacturacionPeer::IDMEDICO, $medico->getIdmedico(), $comparison);
        } elseif ($medico instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MedicofacturacionPeer::IDMEDICO, $medico->toKeyValue('PrimaryKey', 'Idmedico'), $comparison);
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
     * @return MedicofacturacionQuery The current query, for fluid interface
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
     * @param   Medicofacturacion $medicofacturacion Object to remove from the list of results
     *
     * @return MedicofacturacionQuery The current query, for fluid interface
     */
    public function prune($medicofacturacion = null)
    {
        if ($medicofacturacion) {
            $this->addUsingAlias(MedicofacturacionPeer::IDMEDICOFACTURACION, $medicofacturacion->getIdmedicofacturacion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
