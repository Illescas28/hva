<?php


/**
 * Base class that represents a query for the 'proveedor' table.
 *
 *
 *
 * @method ProveedorQuery orderByIdproveedor($order = Criteria::ASC) Order by the idproveedor column
 * @method ProveedorQuery orderByProveedorNombre($order = Criteria::ASC) Order by the proveedor_nombre column
 * @method ProveedorQuery orderByProveedorContacto($order = Criteria::ASC) Order by the proveedor_contacto column
 * @method ProveedorQuery orderByProveedorDireccion($order = Criteria::ASC) Order by the proveedor_direccion column
 * @method ProveedorQuery orderByProveedorDireccion2($order = Criteria::ASC) Order by the proveedor_direccion2 column
 * @method ProveedorQuery orderByProveedorColonia($order = Criteria::ASC) Order by the proveedor_colonia column
 * @method ProveedorQuery orderByProveedorCodigopostal($order = Criteria::ASC) Order by the proveedor_codigopostal column
 * @method ProveedorQuery orderByProveedorCiudad($order = Criteria::ASC) Order by the proveedor_ciudad column
 * @method ProveedorQuery orderByProveedorEstado($order = Criteria::ASC) Order by the proveedor_estado column
 * @method ProveedorQuery orderByProveedorPais($order = Criteria::ASC) Order by the proveedor_pais column
 * @method ProveedorQuery orderByProveedorEmail($order = Criteria::ASC) Order by the proveedor_email column
 * @method ProveedorQuery orderByProveedorTelefono($order = Criteria::ASC) Order by the proveedor_telefono column
 * @method ProveedorQuery orderByProveedorTelefonocelular($order = Criteria::ASC) Order by the proveedor_telefonocelular column
 * @method ProveedorQuery orderByProveedorFax($order = Criteria::ASC) Order by the proveedor_fax column
 *
 * @method ProveedorQuery groupByIdproveedor() Group by the idproveedor column
 * @method ProveedorQuery groupByProveedorNombre() Group by the proveedor_nombre column
 * @method ProveedorQuery groupByProveedorContacto() Group by the proveedor_contacto column
 * @method ProveedorQuery groupByProveedorDireccion() Group by the proveedor_direccion column
 * @method ProveedorQuery groupByProveedorDireccion2() Group by the proveedor_direccion2 column
 * @method ProveedorQuery groupByProveedorColonia() Group by the proveedor_colonia column
 * @method ProveedorQuery groupByProveedorCodigopostal() Group by the proveedor_codigopostal column
 * @method ProveedorQuery groupByProveedorCiudad() Group by the proveedor_ciudad column
 * @method ProveedorQuery groupByProveedorEstado() Group by the proveedor_estado column
 * @method ProveedorQuery groupByProveedorPais() Group by the proveedor_pais column
 * @method ProveedorQuery groupByProveedorEmail() Group by the proveedor_email column
 * @method ProveedorQuery groupByProveedorTelefono() Group by the proveedor_telefono column
 * @method ProveedorQuery groupByProveedorTelefonocelular() Group by the proveedor_telefonocelular column
 * @method ProveedorQuery groupByProveedorFax() Group by the proveedor_fax column
 *
 * @method ProveedorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProveedorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProveedorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProveedorQuery leftJoinOrdencompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ordencompra relation
 * @method ProveedorQuery rightJoinOrdencompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ordencompra relation
 * @method ProveedorQuery innerJoinOrdencompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Ordencompra relation
 *
 * @method Proveedor findOne(PropelPDO $con = null) Return the first Proveedor matching the query
 * @method Proveedor findOneOrCreate(PropelPDO $con = null) Return the first Proveedor matching the query, or a new Proveedor object populated from the query conditions when no match is found
 *
 * @method Proveedor findOneByProveedorNombre(string $proveedor_nombre) Return the first Proveedor filtered by the proveedor_nombre column
 * @method Proveedor findOneByProveedorContacto(string $proveedor_contacto) Return the first Proveedor filtered by the proveedor_contacto column
 * @method Proveedor findOneByProveedorDireccion(string $proveedor_direccion) Return the first Proveedor filtered by the proveedor_direccion column
 * @method Proveedor findOneByProveedorDireccion2(string $proveedor_direccion2) Return the first Proveedor filtered by the proveedor_direccion2 column
 * @method Proveedor findOneByProveedorColonia(string $proveedor_colonia) Return the first Proveedor filtered by the proveedor_colonia column
 * @method Proveedor findOneByProveedorCodigopostal(string $proveedor_codigopostal) Return the first Proveedor filtered by the proveedor_codigopostal column
 * @method Proveedor findOneByProveedorCiudad(string $proveedor_ciudad) Return the first Proveedor filtered by the proveedor_ciudad column
 * @method Proveedor findOneByProveedorEstado(string $proveedor_estado) Return the first Proveedor filtered by the proveedor_estado column
 * @method Proveedor findOneByProveedorPais(string $proveedor_pais) Return the first Proveedor filtered by the proveedor_pais column
 * @method Proveedor findOneByProveedorEmail(string $proveedor_email) Return the first Proveedor filtered by the proveedor_email column
 * @method Proveedor findOneByProveedorTelefono(string $proveedor_telefono) Return the first Proveedor filtered by the proveedor_telefono column
 * @method Proveedor findOneByProveedorTelefonocelular(string $proveedor_telefonocelular) Return the first Proveedor filtered by the proveedor_telefonocelular column
 * @method Proveedor findOneByProveedorFax(string $proveedor_fax) Return the first Proveedor filtered by the proveedor_fax column
 *
 * @method array findByIdproveedor(int $idproveedor) Return Proveedor objects filtered by the idproveedor column
 * @method array findByProveedorNombre(string $proveedor_nombre) Return Proveedor objects filtered by the proveedor_nombre column
 * @method array findByProveedorContacto(string $proveedor_contacto) Return Proveedor objects filtered by the proveedor_contacto column
 * @method array findByProveedorDireccion(string $proveedor_direccion) Return Proveedor objects filtered by the proveedor_direccion column
 * @method array findByProveedorDireccion2(string $proveedor_direccion2) Return Proveedor objects filtered by the proveedor_direccion2 column
 * @method array findByProveedorColonia(string $proveedor_colonia) Return Proveedor objects filtered by the proveedor_colonia column
 * @method array findByProveedorCodigopostal(string $proveedor_codigopostal) Return Proveedor objects filtered by the proveedor_codigopostal column
 * @method array findByProveedorCiudad(string $proveedor_ciudad) Return Proveedor objects filtered by the proveedor_ciudad column
 * @method array findByProveedorEstado(string $proveedor_estado) Return Proveedor objects filtered by the proveedor_estado column
 * @method array findByProveedorPais(string $proveedor_pais) Return Proveedor objects filtered by the proveedor_pais column
 * @method array findByProveedorEmail(string $proveedor_email) Return Proveedor objects filtered by the proveedor_email column
 * @method array findByProveedorTelefono(string $proveedor_telefono) Return Proveedor objects filtered by the proveedor_telefono column
 * @method array findByProveedorTelefonocelular(string $proveedor_telefonocelular) Return Proveedor objects filtered by the proveedor_telefonocelular column
 * @method array findByProveedorFax(string $proveedor_fax) Return Proveedor objects filtered by the proveedor_fax column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseProveedorQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProveedorQuery object.
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
            $modelName = 'Proveedor';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProveedorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProveedorQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProveedorQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProveedorQuery) {
            return $criteria;
        }
        $query = new ProveedorQuery(null, null, $modelAlias);

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
     * @return   Proveedor|Proveedor[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProveedorPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Proveedor A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproveedor($key, $con = null)
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
     * @return                 Proveedor A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproveedor`, `proveedor_nombre`, `proveedor_contacto`, `proveedor_direccion`, `proveedor_direccion2`, `proveedor_colonia`, `proveedor_codigopostal`, `proveedor_ciudad`, `proveedor_estado`, `proveedor_pais`, `proveedor_email`, `proveedor_telefono`, `proveedor_telefonocelular`, `proveedor_fax` FROM `proveedor` WHERE `idproveedor` = :p0';
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
            $obj = new Proveedor();
            $obj->hydrate($row);
            ProveedorPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Proveedor|Proveedor[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Proveedor[]|mixed the list of results, formatted by the current formatter
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
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idproveedor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproveedor(1234); // WHERE idproveedor = 1234
     * $query->filterByIdproveedor(array(12, 34)); // WHERE idproveedor IN (12, 34)
     * $query->filterByIdproveedor(array('min' => 12)); // WHERE idproveedor >= 12
     * $query->filterByIdproveedor(array('max' => 12)); // WHERE idproveedor <= 12
     * </code>
     *
     * @param     mixed $idproveedor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByIdproveedor($idproveedor = null, $comparison = null)
    {
        if (is_array($idproveedor)) {
            $useMinMax = false;
            if (isset($idproveedor['min'])) {
                $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $idproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedor['max'])) {
                $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $idproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $idproveedor, $comparison);
    }

    /**
     * Filter the query on the proveedor_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorNombre('fooValue');   // WHERE proveedor_nombre = 'fooValue'
     * $query->filterByProveedorNombre('%fooValue%'); // WHERE proveedor_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorNombre($proveedorNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorNombre)) {
                $proveedorNombre = str_replace('*', '%', $proveedorNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_NOMBRE, $proveedorNombre, $comparison);
    }

    /**
     * Filter the query on the proveedor_contacto column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorContacto('fooValue');   // WHERE proveedor_contacto = 'fooValue'
     * $query->filterByProveedorContacto('%fooValue%'); // WHERE proveedor_contacto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorContacto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorContacto($proveedorContacto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorContacto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorContacto)) {
                $proveedorContacto = str_replace('*', '%', $proveedorContacto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_CONTACTO, $proveedorContacto, $comparison);
    }

    /**
     * Filter the query on the proveedor_direccion column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorDireccion('fooValue');   // WHERE proveedor_direccion = 'fooValue'
     * $query->filterByProveedorDireccion('%fooValue%'); // WHERE proveedor_direccion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorDireccion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorDireccion($proveedorDireccion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorDireccion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorDireccion)) {
                $proveedorDireccion = str_replace('*', '%', $proveedorDireccion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_DIRECCION, $proveedorDireccion, $comparison);
    }

    /**
     * Filter the query on the proveedor_direccion2 column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorDireccion2('fooValue');   // WHERE proveedor_direccion2 = 'fooValue'
     * $query->filterByProveedorDireccion2('%fooValue%'); // WHERE proveedor_direccion2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorDireccion2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorDireccion2($proveedorDireccion2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorDireccion2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorDireccion2)) {
                $proveedorDireccion2 = str_replace('*', '%', $proveedorDireccion2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_DIRECCION2, $proveedorDireccion2, $comparison);
    }

    /**
     * Filter the query on the proveedor_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorColonia('fooValue');   // WHERE proveedor_colonia = 'fooValue'
     * $query->filterByProveedorColonia('%fooValue%'); // WHERE proveedor_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorColonia($proveedorColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorColonia)) {
                $proveedorColonia = str_replace('*', '%', $proveedorColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_COLONIA, $proveedorColonia, $comparison);
    }

    /**
     * Filter the query on the proveedor_codigopostal column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorCodigopostal('fooValue');   // WHERE proveedor_codigopostal = 'fooValue'
     * $query->filterByProveedorCodigopostal('%fooValue%'); // WHERE proveedor_codigopostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorCodigopostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorCodigopostal($proveedorCodigopostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorCodigopostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorCodigopostal)) {
                $proveedorCodigopostal = str_replace('*', '%', $proveedorCodigopostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_CODIGOPOSTAL, $proveedorCodigopostal, $comparison);
    }

    /**
     * Filter the query on the proveedor_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorCiudad('fooValue');   // WHERE proveedor_ciudad = 'fooValue'
     * $query->filterByProveedorCiudad('%fooValue%'); // WHERE proveedor_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorCiudad($proveedorCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorCiudad)) {
                $proveedorCiudad = str_replace('*', '%', $proveedorCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_CIUDAD, $proveedorCiudad, $comparison);
    }

    /**
     * Filter the query on the proveedor_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorEstado('fooValue');   // WHERE proveedor_estado = 'fooValue'
     * $query->filterByProveedorEstado('%fooValue%'); // WHERE proveedor_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorEstado($proveedorEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorEstado)) {
                $proveedorEstado = str_replace('*', '%', $proveedorEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_ESTADO, $proveedorEstado, $comparison);
    }

    /**
     * Filter the query on the proveedor_pais column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorPais('fooValue');   // WHERE proveedor_pais = 'fooValue'
     * $query->filterByProveedorPais('%fooValue%'); // WHERE proveedor_pais LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorPais The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorPais($proveedorPais = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorPais)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorPais)) {
                $proveedorPais = str_replace('*', '%', $proveedorPais);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_PAIS, $proveedorPais, $comparison);
    }

    /**
     * Filter the query on the proveedor_email column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorEmail('fooValue');   // WHERE proveedor_email = 'fooValue'
     * $query->filterByProveedorEmail('%fooValue%'); // WHERE proveedor_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorEmail($proveedorEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorEmail)) {
                $proveedorEmail = str_replace('*', '%', $proveedorEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_EMAIL, $proveedorEmail, $comparison);
    }

    /**
     * Filter the query on the proveedor_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorTelefono('fooValue');   // WHERE proveedor_telefono = 'fooValue'
     * $query->filterByProveedorTelefono('%fooValue%'); // WHERE proveedor_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorTelefono($proveedorTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorTelefono)) {
                $proveedorTelefono = str_replace('*', '%', $proveedorTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_TELEFONO, $proveedorTelefono, $comparison);
    }

    /**
     * Filter the query on the proveedor_telefonocelular column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorTelefonocelular('fooValue');   // WHERE proveedor_telefonocelular = 'fooValue'
     * $query->filterByProveedorTelefonocelular('%fooValue%'); // WHERE proveedor_telefonocelular LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorTelefonocelular The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorTelefonocelular($proveedorTelefonocelular = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorTelefonocelular)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorTelefonocelular)) {
                $proveedorTelefonocelular = str_replace('*', '%', $proveedorTelefonocelular);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_TELEFONOCELULAR, $proveedorTelefonocelular, $comparison);
    }

    /**
     * Filter the query on the proveedor_fax column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorFax('fooValue');   // WHERE proveedor_fax = 'fooValue'
     * $query->filterByProveedorFax('%fooValue%'); // WHERE proveedor_fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorFax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorFax($proveedorFax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorFax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorFax)) {
                $proveedorFax = str_replace('*', '%', $proveedorFax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_FAX, $proveedorFax, $comparison);
    }

    /**
     * Filter the query by a related Ordencompra object
     *
     * @param   Ordencompra|PropelObjectCollection $ordencompra  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdencompra($ordencompra, $comparison = null)
    {
        if ($ordencompra instanceof Ordencompra) {
            return $this
                ->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $ordencompra->getIdproveedor(), $comparison);
        } elseif ($ordencompra instanceof PropelObjectCollection) {
            return $this
                ->useOrdencompraQuery()
                ->filterByPrimaryKeys($ordencompra->getPrimaryKeys())
                ->endUse();
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
     * @return ProveedorQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Proveedor $proveedor Object to remove from the list of results
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function prune($proveedor = null)
    {
        if ($proveedor) {
            $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $proveedor->getIdproveedor(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
