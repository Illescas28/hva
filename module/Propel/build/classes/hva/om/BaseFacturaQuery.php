<?php


/**
 * Base class that represents a query for the 'factura' table.
 *
 *
 *
 * @method FacturaQuery orderByIdfactura($order = Criteria::ASC) Order by the idfactura column
 * @method FacturaQuery orderByIddatosfacturacion($order = Criteria::ASC) Order by the iddatosfacturacion column
 * @method FacturaQuery orderByIdconsulta($order = Criteria::ASC) Order by the idconsulta column
 * @method FacturaQuery orderByIdadmision($order = Criteria::ASC) Order by the idadmision column
 * @method FacturaQuery orderByIdventa($order = Criteria::ASC) Order by the idventa column
 * @method FacturaQuery orderByFacturaUrlXml($order = Criteria::ASC) Order by the factura_url_xml column
 * @method FacturaQuery orderByFacturaUrlPdf($order = Criteria::ASC) Order by the factura_url_pdf column
 * @method FacturaQuery orderByFacturaFecha($order = Criteria::ASC) Order by the factura_fecha column
 * @method FacturaQuery orderByFacturaSellosat($order = Criteria::ASC) Order by the factura_sellosat column
 * @method FacturaQuery orderByFacturaCertificadosat($order = Criteria::ASC) Order by the factura_certificadosat column
 * @method FacturaQuery orderByFacturaCadenaoriginal($order = Criteria::ASC) Order by the factura_cadenaoriginal column
 * @method FacturaQuery orderByFacturaCfdi($order = Criteria::ASC) Order by the factura_cfdi column
 * @method FacturaQuery orderByFacturaMensaje($order = Criteria::ASC) Order by the factura_mensaje column
 * @method FacturaQuery orderByFacturaQrcode($order = Criteria::ASC) Order by the factura_qrcode column
 * @method FacturaQuery orderByFacturaTipodepago($order = Criteria::ASC) Order by the factura_tipodepago column
 * @method FacturaQuery orderByFacturaStatus($order = Criteria::ASC) Order by the factura_status column
 * @method FacturaQuery orderByFacturaTipo($order = Criteria::ASC) Order by the factura_tipo column
 *
 * @method FacturaQuery groupByIdfactura() Group by the idfactura column
 * @method FacturaQuery groupByIddatosfacturacion() Group by the iddatosfacturacion column
 * @method FacturaQuery groupByIdconsulta() Group by the idconsulta column
 * @method FacturaQuery groupByIdadmision() Group by the idadmision column
 * @method FacturaQuery groupByIdventa() Group by the idventa column
 * @method FacturaQuery groupByFacturaUrlXml() Group by the factura_url_xml column
 * @method FacturaQuery groupByFacturaUrlPdf() Group by the factura_url_pdf column
 * @method FacturaQuery groupByFacturaFecha() Group by the factura_fecha column
 * @method FacturaQuery groupByFacturaSellosat() Group by the factura_sellosat column
 * @method FacturaQuery groupByFacturaCertificadosat() Group by the factura_certificadosat column
 * @method FacturaQuery groupByFacturaCadenaoriginal() Group by the factura_cadenaoriginal column
 * @method FacturaQuery groupByFacturaCfdi() Group by the factura_cfdi column
 * @method FacturaQuery groupByFacturaMensaje() Group by the factura_mensaje column
 * @method FacturaQuery groupByFacturaQrcode() Group by the factura_qrcode column
 * @method FacturaQuery groupByFacturaTipodepago() Group by the factura_tipodepago column
 * @method FacturaQuery groupByFacturaStatus() Group by the factura_status column
 * @method FacturaQuery groupByFacturaTipo() Group by the factura_tipo column
 *
 * @method FacturaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FacturaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FacturaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FacturaQuery leftJoinAdmision($relationAlias = null) Adds a LEFT JOIN clause to the query using the Admision relation
 * @method FacturaQuery rightJoinAdmision($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Admision relation
 * @method FacturaQuery innerJoinAdmision($relationAlias = null) Adds a INNER JOIN clause to the query using the Admision relation
 *
 * @method FacturaQuery leftJoinConsulta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Consulta relation
 * @method FacturaQuery rightJoinConsulta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Consulta relation
 * @method FacturaQuery innerJoinConsulta($relationAlias = null) Adds a INNER JOIN clause to the query using the Consulta relation
 *
 * @method FacturaQuery leftJoinPacientefacturacion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pacientefacturacion relation
 * @method FacturaQuery rightJoinPacientefacturacion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pacientefacturacion relation
 * @method FacturaQuery innerJoinPacientefacturacion($relationAlias = null) Adds a INNER JOIN clause to the query using the Pacientefacturacion relation
 *
 * @method FacturaQuery leftJoinVenta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Venta relation
 * @method FacturaQuery rightJoinVenta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Venta relation
 * @method FacturaQuery innerJoinVenta($relationAlias = null) Adds a INNER JOIN clause to the query using the Venta relation
 *
 * @method Factura findOne(PropelPDO $con = null) Return the first Factura matching the query
 * @method Factura findOneOrCreate(PropelPDO $con = null) Return the first Factura matching the query, or a new Factura object populated from the query conditions when no match is found
 *
 * @method Factura findOneByIddatosfacturacion(int $iddatosfacturacion) Return the first Factura filtered by the iddatosfacturacion column
 * @method Factura findOneByIdconsulta(int $idconsulta) Return the first Factura filtered by the idconsulta column
 * @method Factura findOneByIdadmision(int $idadmision) Return the first Factura filtered by the idadmision column
 * @method Factura findOneByIdventa(int $idventa) Return the first Factura filtered by the idventa column
 * @method Factura findOneByFacturaUrlXml(string $factura_url_xml) Return the first Factura filtered by the factura_url_xml column
 * @method Factura findOneByFacturaUrlPdf(string $factura_url_pdf) Return the first Factura filtered by the factura_url_pdf column
 * @method Factura findOneByFacturaFecha(string $factura_fecha) Return the first Factura filtered by the factura_fecha column
 * @method Factura findOneByFacturaSellosat(string $factura_sellosat) Return the first Factura filtered by the factura_sellosat column
 * @method Factura findOneByFacturaCertificadosat(string $factura_certificadosat) Return the first Factura filtered by the factura_certificadosat column
 * @method Factura findOneByFacturaCadenaoriginal(string $factura_cadenaoriginal) Return the first Factura filtered by the factura_cadenaoriginal column
 * @method Factura findOneByFacturaCfdi(string $factura_cfdi) Return the first Factura filtered by the factura_cfdi column
 * @method Factura findOneByFacturaMensaje(string $factura_mensaje) Return the first Factura filtered by the factura_mensaje column
 * @method Factura findOneByFacturaQrcode(string $factura_qrcode) Return the first Factura filtered by the factura_qrcode column
 * @method Factura findOneByFacturaTipodepago(string $factura_tipodepago) Return the first Factura filtered by the factura_tipodepago column
 * @method Factura findOneByFacturaStatus(string $factura_status) Return the first Factura filtered by the factura_status column
 * @method Factura findOneByFacturaTipo(string $factura_tipo) Return the first Factura filtered by the factura_tipo column
 *
 * @method array findByIdfactura(int $idfactura) Return Factura objects filtered by the idfactura column
 * @method array findByIddatosfacturacion(int $iddatosfacturacion) Return Factura objects filtered by the iddatosfacturacion column
 * @method array findByIdconsulta(int $idconsulta) Return Factura objects filtered by the idconsulta column
 * @method array findByIdadmision(int $idadmision) Return Factura objects filtered by the idadmision column
 * @method array findByIdventa(int $idventa) Return Factura objects filtered by the idventa column
 * @method array findByFacturaUrlXml(string $factura_url_xml) Return Factura objects filtered by the factura_url_xml column
 * @method array findByFacturaUrlPdf(string $factura_url_pdf) Return Factura objects filtered by the factura_url_pdf column
 * @method array findByFacturaFecha(string $factura_fecha) Return Factura objects filtered by the factura_fecha column
 * @method array findByFacturaSellosat(string $factura_sellosat) Return Factura objects filtered by the factura_sellosat column
 * @method array findByFacturaCertificadosat(string $factura_certificadosat) Return Factura objects filtered by the factura_certificadosat column
 * @method array findByFacturaCadenaoriginal(string $factura_cadenaoriginal) Return Factura objects filtered by the factura_cadenaoriginal column
 * @method array findByFacturaCfdi(string $factura_cfdi) Return Factura objects filtered by the factura_cfdi column
 * @method array findByFacturaMensaje(string $factura_mensaje) Return Factura objects filtered by the factura_mensaje column
 * @method array findByFacturaQrcode(string $factura_qrcode) Return Factura objects filtered by the factura_qrcode column
 * @method array findByFacturaTipodepago(string $factura_tipodepago) Return Factura objects filtered by the factura_tipodepago column
 * @method array findByFacturaStatus(string $factura_status) Return Factura objects filtered by the factura_status column
 * @method array findByFacturaTipo(string $factura_tipo) Return Factura objects filtered by the factura_tipo column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseFacturaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFacturaQuery object.
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
            $modelName = 'Factura';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FacturaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FacturaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FacturaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FacturaQuery) {
            return $criteria;
        }
        $query = new FacturaQuery(null, null, $modelAlias);

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
     * @return   Factura|Factura[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FacturaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FacturaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Factura A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdfactura($key, $con = null)
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
     * @return                 Factura A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idfactura`, `iddatosfacturacion`, `idconsulta`, `idadmision`, `idventa`, `factura_url_xml`, `factura_url_pdf`, `factura_fecha`, `factura_sellosat`, `factura_certificadosat`, `factura_cadenaoriginal`, `factura_cfdi`, `factura_mensaje`, `factura_qrcode`, `factura_tipodepago`, `factura_status`, `factura_tipo` FROM `factura` WHERE `idfactura` = :p0';
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
            $obj = new Factura();
            $obj->hydrate($row);
            FacturaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Factura|Factura[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Factura[]|mixed the list of results, formatted by the current formatter
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
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FacturaPeer::IDFACTURA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FacturaPeer::IDFACTURA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idfactura column
     *
     * Example usage:
     * <code>
     * $query->filterByIdfactura(1234); // WHERE idfactura = 1234
     * $query->filterByIdfactura(array(12, 34)); // WHERE idfactura IN (12, 34)
     * $query->filterByIdfactura(array('min' => 12)); // WHERE idfactura >= 12
     * $query->filterByIdfactura(array('max' => 12)); // WHERE idfactura <= 12
     * </code>
     *
     * @param     mixed $idfactura The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByIdfactura($idfactura = null, $comparison = null)
    {
        if (is_array($idfactura)) {
            $useMinMax = false;
            if (isset($idfactura['min'])) {
                $this->addUsingAlias(FacturaPeer::IDFACTURA, $idfactura['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idfactura['max'])) {
                $this->addUsingAlias(FacturaPeer::IDFACTURA, $idfactura['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturaPeer::IDFACTURA, $idfactura, $comparison);
    }

    /**
     * Filter the query on the iddatosfacturacion column
     *
     * Example usage:
     * <code>
     * $query->filterByIddatosfacturacion(1234); // WHERE iddatosfacturacion = 1234
     * $query->filterByIddatosfacturacion(array(12, 34)); // WHERE iddatosfacturacion IN (12, 34)
     * $query->filterByIddatosfacturacion(array('min' => 12)); // WHERE iddatosfacturacion >= 12
     * $query->filterByIddatosfacturacion(array('max' => 12)); // WHERE iddatosfacturacion <= 12
     * </code>
     *
     * @see       filterByPacientefacturacion()
     *
     * @param     mixed $iddatosfacturacion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByIddatosfacturacion($iddatosfacturacion = null, $comparison = null)
    {
        if (is_array($iddatosfacturacion)) {
            $useMinMax = false;
            if (isset($iddatosfacturacion['min'])) {
                $this->addUsingAlias(FacturaPeer::IDDATOSFACTURACION, $iddatosfacturacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddatosfacturacion['max'])) {
                $this->addUsingAlias(FacturaPeer::IDDATOSFACTURACION, $iddatosfacturacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturaPeer::IDDATOSFACTURACION, $iddatosfacturacion, $comparison);
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
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByIdconsulta($idconsulta = null, $comparison = null)
    {
        if (is_array($idconsulta)) {
            $useMinMax = false;
            if (isset($idconsulta['min'])) {
                $this->addUsingAlias(FacturaPeer::IDCONSULTA, $idconsulta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconsulta['max'])) {
                $this->addUsingAlias(FacturaPeer::IDCONSULTA, $idconsulta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturaPeer::IDCONSULTA, $idconsulta, $comparison);
    }

    /**
     * Filter the query on the idadmision column
     *
     * Example usage:
     * <code>
     * $query->filterByIdadmision(1234); // WHERE idadmision = 1234
     * $query->filterByIdadmision(array(12, 34)); // WHERE idadmision IN (12, 34)
     * $query->filterByIdadmision(array('min' => 12)); // WHERE idadmision >= 12
     * $query->filterByIdadmision(array('max' => 12)); // WHERE idadmision <= 12
     * </code>
     *
     * @see       filterByAdmision()
     *
     * @param     mixed $idadmision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByIdadmision($idadmision = null, $comparison = null)
    {
        if (is_array($idadmision)) {
            $useMinMax = false;
            if (isset($idadmision['min'])) {
                $this->addUsingAlias(FacturaPeer::IDADMISION, $idadmision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idadmision['max'])) {
                $this->addUsingAlias(FacturaPeer::IDADMISION, $idadmision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturaPeer::IDADMISION, $idadmision, $comparison);
    }

    /**
     * Filter the query on the idventa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdventa(1234); // WHERE idventa = 1234
     * $query->filterByIdventa(array(12, 34)); // WHERE idventa IN (12, 34)
     * $query->filterByIdventa(array('min' => 12)); // WHERE idventa >= 12
     * $query->filterByIdventa(array('max' => 12)); // WHERE idventa <= 12
     * </code>
     *
     * @see       filterByVenta()
     *
     * @param     mixed $idventa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByIdventa($idventa = null, $comparison = null)
    {
        if (is_array($idventa)) {
            $useMinMax = false;
            if (isset($idventa['min'])) {
                $this->addUsingAlias(FacturaPeer::IDVENTA, $idventa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idventa['max'])) {
                $this->addUsingAlias(FacturaPeer::IDVENTA, $idventa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturaPeer::IDVENTA, $idventa, $comparison);
    }

    /**
     * Filter the query on the factura_url_xml column
     *
     * Example usage:
     * <code>
     * $query->filterByFacturaUrlXml('fooValue');   // WHERE factura_url_xml = 'fooValue'
     * $query->filterByFacturaUrlXml('%fooValue%'); // WHERE factura_url_xml LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facturaUrlXml The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByFacturaUrlXml($facturaUrlXml = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facturaUrlXml)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $facturaUrlXml)) {
                $facturaUrlXml = str_replace('*', '%', $facturaUrlXml);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturaPeer::FACTURA_URL_XML, $facturaUrlXml, $comparison);
    }

    /**
     * Filter the query on the factura_url_pdf column
     *
     * Example usage:
     * <code>
     * $query->filterByFacturaUrlPdf('fooValue');   // WHERE factura_url_pdf = 'fooValue'
     * $query->filterByFacturaUrlPdf('%fooValue%'); // WHERE factura_url_pdf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facturaUrlPdf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByFacturaUrlPdf($facturaUrlPdf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facturaUrlPdf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $facturaUrlPdf)) {
                $facturaUrlPdf = str_replace('*', '%', $facturaUrlPdf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturaPeer::FACTURA_URL_PDF, $facturaUrlPdf, $comparison);
    }

    /**
     * Filter the query on the factura_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByFacturaFecha('2011-03-14'); // WHERE factura_fecha = '2011-03-14'
     * $query->filterByFacturaFecha('now'); // WHERE factura_fecha = '2011-03-14'
     * $query->filterByFacturaFecha(array('max' => 'yesterday')); // WHERE factura_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $facturaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByFacturaFecha($facturaFecha = null, $comparison = null)
    {
        if (is_array($facturaFecha)) {
            $useMinMax = false;
            if (isset($facturaFecha['min'])) {
                $this->addUsingAlias(FacturaPeer::FACTURA_FECHA, $facturaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($facturaFecha['max'])) {
                $this->addUsingAlias(FacturaPeer::FACTURA_FECHA, $facturaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FacturaPeer::FACTURA_FECHA, $facturaFecha, $comparison);
    }

    /**
     * Filter the query on the factura_sellosat column
     *
     * Example usage:
     * <code>
     * $query->filterByFacturaSellosat('fooValue');   // WHERE factura_sellosat = 'fooValue'
     * $query->filterByFacturaSellosat('%fooValue%'); // WHERE factura_sellosat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facturaSellosat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByFacturaSellosat($facturaSellosat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facturaSellosat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $facturaSellosat)) {
                $facturaSellosat = str_replace('*', '%', $facturaSellosat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturaPeer::FACTURA_SELLOSAT, $facturaSellosat, $comparison);
    }

    /**
     * Filter the query on the factura_certificadosat column
     *
     * Example usage:
     * <code>
     * $query->filterByFacturaCertificadosat('fooValue');   // WHERE factura_certificadosat = 'fooValue'
     * $query->filterByFacturaCertificadosat('%fooValue%'); // WHERE factura_certificadosat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facturaCertificadosat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByFacturaCertificadosat($facturaCertificadosat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facturaCertificadosat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $facturaCertificadosat)) {
                $facturaCertificadosat = str_replace('*', '%', $facturaCertificadosat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturaPeer::FACTURA_CERTIFICADOSAT, $facturaCertificadosat, $comparison);
    }

    /**
     * Filter the query on the factura_cadenaoriginal column
     *
     * Example usage:
     * <code>
     * $query->filterByFacturaCadenaoriginal('fooValue');   // WHERE factura_cadenaoriginal = 'fooValue'
     * $query->filterByFacturaCadenaoriginal('%fooValue%'); // WHERE factura_cadenaoriginal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facturaCadenaoriginal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByFacturaCadenaoriginal($facturaCadenaoriginal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facturaCadenaoriginal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $facturaCadenaoriginal)) {
                $facturaCadenaoriginal = str_replace('*', '%', $facturaCadenaoriginal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturaPeer::FACTURA_CADENAORIGINAL, $facturaCadenaoriginal, $comparison);
    }

    /**
     * Filter the query on the factura_cfdi column
     *
     * Example usage:
     * <code>
     * $query->filterByFacturaCfdi('fooValue');   // WHERE factura_cfdi = 'fooValue'
     * $query->filterByFacturaCfdi('%fooValue%'); // WHERE factura_cfdi LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facturaCfdi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByFacturaCfdi($facturaCfdi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facturaCfdi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $facturaCfdi)) {
                $facturaCfdi = str_replace('*', '%', $facturaCfdi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturaPeer::FACTURA_CFDI, $facturaCfdi, $comparison);
    }

    /**
     * Filter the query on the factura_mensaje column
     *
     * Example usage:
     * <code>
     * $query->filterByFacturaMensaje('fooValue');   // WHERE factura_mensaje = 'fooValue'
     * $query->filterByFacturaMensaje('%fooValue%'); // WHERE factura_mensaje LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facturaMensaje The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByFacturaMensaje($facturaMensaje = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facturaMensaje)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $facturaMensaje)) {
                $facturaMensaje = str_replace('*', '%', $facturaMensaje);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturaPeer::FACTURA_MENSAJE, $facturaMensaje, $comparison);
    }

    /**
     * Filter the query on the factura_qrcode column
     *
     * Example usage:
     * <code>
     * $query->filterByFacturaQrcode('fooValue');   // WHERE factura_qrcode = 'fooValue'
     * $query->filterByFacturaQrcode('%fooValue%'); // WHERE factura_qrcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facturaQrcode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByFacturaQrcode($facturaQrcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facturaQrcode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $facturaQrcode)) {
                $facturaQrcode = str_replace('*', '%', $facturaQrcode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturaPeer::FACTURA_QRCODE, $facturaQrcode, $comparison);
    }

    /**
     * Filter the query on the factura_tipodepago column
     *
     * Example usage:
     * <code>
     * $query->filterByFacturaTipodepago('fooValue');   // WHERE factura_tipodepago = 'fooValue'
     * $query->filterByFacturaTipodepago('%fooValue%'); // WHERE factura_tipodepago LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facturaTipodepago The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByFacturaTipodepago($facturaTipodepago = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facturaTipodepago)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $facturaTipodepago)) {
                $facturaTipodepago = str_replace('*', '%', $facturaTipodepago);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturaPeer::FACTURA_TIPODEPAGO, $facturaTipodepago, $comparison);
    }

    /**
     * Filter the query on the factura_status column
     *
     * Example usage:
     * <code>
     * $query->filterByFacturaStatus('fooValue');   // WHERE factura_status = 'fooValue'
     * $query->filterByFacturaStatus('%fooValue%'); // WHERE factura_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facturaStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByFacturaStatus($facturaStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facturaStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $facturaStatus)) {
                $facturaStatus = str_replace('*', '%', $facturaStatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturaPeer::FACTURA_STATUS, $facturaStatus, $comparison);
    }

    /**
     * Filter the query on the factura_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByFacturaTipo('fooValue');   // WHERE factura_tipo = 'fooValue'
     * $query->filterByFacturaTipo('%fooValue%'); // WHERE factura_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facturaTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function filterByFacturaTipo($facturaTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facturaTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $facturaTipo)) {
                $facturaTipo = str_replace('*', '%', $facturaTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FacturaPeer::FACTURA_TIPO, $facturaTipo, $comparison);
    }

    /**
     * Filter the query by a related Admision object
     *
     * @param   Admision|PropelObjectCollection $admision The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FacturaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAdmision($admision, $comparison = null)
    {
        if ($admision instanceof Admision) {
            return $this
                ->addUsingAlias(FacturaPeer::IDADMISION, $admision->getIdadmision(), $comparison);
        } elseif ($admision instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FacturaPeer::IDADMISION, $admision->toKeyValue('PrimaryKey', 'Idadmision'), $comparison);
        } else {
            throw new PropelException('filterByAdmision() only accepts arguments of type Admision or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Admision relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function joinAdmision($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Admision');

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
            $this->addJoinObject($join, 'Admision');
        }

        return $this;
    }

    /**
     * Use the Admision relation Admision object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AdmisionQuery A secondary query class using the current class as primary query
     */
    public function useAdmisionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAdmision($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Admision', 'AdmisionQuery');
    }

    /**
     * Filter the query by a related Consulta object
     *
     * @param   Consulta|PropelObjectCollection $consulta The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FacturaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConsulta($consulta, $comparison = null)
    {
        if ($consulta instanceof Consulta) {
            return $this
                ->addUsingAlias(FacturaPeer::IDCONSULTA, $consulta->getIdconsulta(), $comparison);
        } elseif ($consulta instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FacturaPeer::IDCONSULTA, $consulta->toKeyValue('PrimaryKey', 'Idconsulta'), $comparison);
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
     * @return FacturaQuery The current query, for fluid interface
     */
    public function joinConsulta($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useConsultaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinConsulta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Consulta', 'ConsultaQuery');
    }

    /**
     * Filter the query by a related Pacientefacturacion object
     *
     * @param   Pacientefacturacion|PropelObjectCollection $pacientefacturacion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FacturaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPacientefacturacion($pacientefacturacion, $comparison = null)
    {
        if ($pacientefacturacion instanceof Pacientefacturacion) {
            return $this
                ->addUsingAlias(FacturaPeer::IDDATOSFACTURACION, $pacientefacturacion->getIdpacientefacturacion(), $comparison);
        } elseif ($pacientefacturacion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FacturaPeer::IDDATOSFACTURACION, $pacientefacturacion->toKeyValue('PrimaryKey', 'Idpacientefacturacion'), $comparison);
        } else {
            throw new PropelException('filterByPacientefacturacion() only accepts arguments of type Pacientefacturacion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pacientefacturacion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function joinPacientefacturacion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pacientefacturacion');

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
            $this->addJoinObject($join, 'Pacientefacturacion');
        }

        return $this;
    }

    /**
     * Use the Pacientefacturacion relation Pacientefacturacion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PacientefacturacionQuery A secondary query class using the current class as primary query
     */
    public function usePacientefacturacionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPacientefacturacion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pacientefacturacion', 'PacientefacturacionQuery');
    }

    /**
     * Filter the query by a related Venta object
     *
     * @param   Venta|PropelObjectCollection $venta The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FacturaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVenta($venta, $comparison = null)
    {
        if ($venta instanceof Venta) {
            return $this
                ->addUsingAlias(FacturaPeer::IDVENTA, $venta->getIdventa(), $comparison);
        } elseif ($venta instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FacturaPeer::IDVENTA, $venta->toKeyValue('PrimaryKey', 'Idventa'), $comparison);
        } else {
            throw new PropelException('filterByVenta() only accepts arguments of type Venta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Venta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function joinVenta($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Venta');

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
            $this->addJoinObject($join, 'Venta');
        }

        return $this;
    }

    /**
     * Use the Venta relation Venta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentaQuery A secondary query class using the current class as primary query
     */
    public function useVentaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinVenta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Venta', 'VentaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Factura $factura Object to remove from the list of results
     *
     * @return FacturaQuery The current query, for fluid interface
     */
    public function prune($factura = null)
    {
        if ($factura) {
            $this->addUsingAlias(FacturaPeer::IDFACTURA, $factura->getIdfactura(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
