<?php


/**
 * Base class that represents a query for the 'consulta' table.
 *
 *
 *
 * @method ConsultaQuery orderByIdconsulta($order = Criteria::ASC) Order by the idconsulta column
 * @method ConsultaQuery orderByIdpaciente($order = Criteria::ASC) Order by the idpaciente column
 * @method ConsultaQuery orderByIdmedico($order = Criteria::ASC) Order by the idmedico column
 * @method ConsultaQuery orderByIdconsultorio($order = Criteria::ASC) Order by the idconsultorio column
 * @method ConsultaQuery orderByConsultaFecha($order = Criteria::ASC) Order by the consulta_fecha column
 * @method ConsultaQuery orderByConsultaHora($order = Criteria::ASC) Order by the consulta_hora column
 * @method ConsultaQuery orderByConsultaDiagnostico($order = Criteria::ASC) Order by the consulta_diagnostico column
 * @method ConsultaQuery orderByConsultaObservaciones($order = Criteria::ASC) Order by the consulta_observaciones column
 * @method ConsultaQuery orderByConsultaStatus($order = Criteria::ASC) Order by the consulta_status column
 * @method ConsultaQuery orderByConsultaTotal($order = Criteria::ASC) Order by the consulta_total column
 * @method ConsultaQuery orderByConsultaTipodepago($order = Criteria::ASC) Order by the consulta_tipodepago column
 * @method ConsultaQuery orderByConsultaReferenciapago($order = Criteria::ASC) Order by the consulta_referenciapago column
 * @method ConsultaQuery orderByConsultaFacturada($order = Criteria::ASC) Order by the consulta_facturada column
 * @method ConsultaQuery orderByConsultaRegistrada($order = Criteria::ASC) Order by the consulta_registrada column
 *
 * @method ConsultaQuery groupByIdconsulta() Group by the idconsulta column
 * @method ConsultaQuery groupByIdpaciente() Group by the idpaciente column
 * @method ConsultaQuery groupByIdmedico() Group by the idmedico column
 * @method ConsultaQuery groupByIdconsultorio() Group by the idconsultorio column
 * @method ConsultaQuery groupByConsultaFecha() Group by the consulta_fecha column
 * @method ConsultaQuery groupByConsultaHora() Group by the consulta_hora column
 * @method ConsultaQuery groupByConsultaDiagnostico() Group by the consulta_diagnostico column
 * @method ConsultaQuery groupByConsultaObservaciones() Group by the consulta_observaciones column
 * @method ConsultaQuery groupByConsultaStatus() Group by the consulta_status column
 * @method ConsultaQuery groupByConsultaTotal() Group by the consulta_total column
 * @method ConsultaQuery groupByConsultaTipodepago() Group by the consulta_tipodepago column
 * @method ConsultaQuery groupByConsultaReferenciapago() Group by the consulta_referenciapago column
 * @method ConsultaQuery groupByConsultaFacturada() Group by the consulta_facturada column
 * @method ConsultaQuery groupByConsultaRegistrada() Group by the consulta_registrada column
 *
 * @method ConsultaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ConsultaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ConsultaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ConsultaQuery leftJoinConsultorio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Consultorio relation
 * @method ConsultaQuery rightJoinConsultorio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Consultorio relation
 * @method ConsultaQuery innerJoinConsultorio($relationAlias = null) Adds a INNER JOIN clause to the query using the Consultorio relation
 *
 * @method ConsultaQuery leftJoinMedico($relationAlias = null) Adds a LEFT JOIN clause to the query using the Medico relation
 * @method ConsultaQuery rightJoinMedico($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Medico relation
 * @method ConsultaQuery innerJoinMedico($relationAlias = null) Adds a INNER JOIN clause to the query using the Medico relation
 *
 * @method ConsultaQuery leftJoinPaciente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paciente relation
 * @method ConsultaQuery rightJoinPaciente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paciente relation
 * @method ConsultaQuery innerJoinPaciente($relationAlias = null) Adds a INNER JOIN clause to the query using the Paciente relation
 *
 * @method ConsultaQuery leftJoinCargoconsulta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cargoconsulta relation
 * @method ConsultaQuery rightJoinCargoconsulta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cargoconsulta relation
 * @method ConsultaQuery innerJoinCargoconsulta($relationAlias = null) Adds a INNER JOIN clause to the query using the Cargoconsulta relation
 *
 * @method ConsultaQuery leftJoinConsultaanticipo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Consultaanticipo relation
 * @method ConsultaQuery rightJoinConsultaanticipo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Consultaanticipo relation
 * @method ConsultaQuery innerJoinConsultaanticipo($relationAlias = null) Adds a INNER JOIN clause to the query using the Consultaanticipo relation
 *
 * @method ConsultaQuery leftJoinFactura($relationAlias = null) Adds a LEFT JOIN clause to the query using the Factura relation
 * @method ConsultaQuery rightJoinFactura($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Factura relation
 * @method ConsultaQuery innerJoinFactura($relationAlias = null) Adds a INNER JOIN clause to the query using the Factura relation
 *
 * @method Consulta findOne(PropelPDO $con = null) Return the first Consulta matching the query
 * @method Consulta findOneOrCreate(PropelPDO $con = null) Return the first Consulta matching the query, or a new Consulta object populated from the query conditions when no match is found
 *
 * @method Consulta findOneByIdpaciente(int $idpaciente) Return the first Consulta filtered by the idpaciente column
 * @method Consulta findOneByIdmedico(int $idmedico) Return the first Consulta filtered by the idmedico column
 * @method Consulta findOneByIdconsultorio(int $idconsultorio) Return the first Consulta filtered by the idconsultorio column
 * @method Consulta findOneByConsultaFecha(string $consulta_fecha) Return the first Consulta filtered by the consulta_fecha column
 * @method Consulta findOneByConsultaHora(string $consulta_hora) Return the first Consulta filtered by the consulta_hora column
 * @method Consulta findOneByConsultaDiagnostico(string $consulta_diagnostico) Return the first Consulta filtered by the consulta_diagnostico column
 * @method Consulta findOneByConsultaObservaciones(string $consulta_observaciones) Return the first Consulta filtered by the consulta_observaciones column
 * @method Consulta findOneByConsultaStatus(string $consulta_status) Return the first Consulta filtered by the consulta_status column
 * @method Consulta findOneByConsultaTotal(string $consulta_total) Return the first Consulta filtered by the consulta_total column
 * @method Consulta findOneByConsultaTipodepago(string $consulta_tipodepago) Return the first Consulta filtered by the consulta_tipodepago column
 * @method Consulta findOneByConsultaReferenciapago(string $consulta_referenciapago) Return the first Consulta filtered by the consulta_referenciapago column
 * @method Consulta findOneByConsultaFacturada(boolean $consulta_facturada) Return the first Consulta filtered by the consulta_facturada column
 * @method Consulta findOneByConsultaRegistrada(boolean $consulta_registrada) Return the first Consulta filtered by the consulta_registrada column
 *
 * @method array findByIdconsulta(int $idconsulta) Return Consulta objects filtered by the idconsulta column
 * @method array findByIdpaciente(int $idpaciente) Return Consulta objects filtered by the idpaciente column
 * @method array findByIdmedico(int $idmedico) Return Consulta objects filtered by the idmedico column
 * @method array findByIdconsultorio(int $idconsultorio) Return Consulta objects filtered by the idconsultorio column
 * @method array findByConsultaFecha(string $consulta_fecha) Return Consulta objects filtered by the consulta_fecha column
 * @method array findByConsultaHora(string $consulta_hora) Return Consulta objects filtered by the consulta_hora column
 * @method array findByConsultaDiagnostico(string $consulta_diagnostico) Return Consulta objects filtered by the consulta_diagnostico column
 * @method array findByConsultaObservaciones(string $consulta_observaciones) Return Consulta objects filtered by the consulta_observaciones column
 * @method array findByConsultaStatus(string $consulta_status) Return Consulta objects filtered by the consulta_status column
 * @method array findByConsultaTotal(string $consulta_total) Return Consulta objects filtered by the consulta_total column
 * @method array findByConsultaTipodepago(string $consulta_tipodepago) Return Consulta objects filtered by the consulta_tipodepago column
 * @method array findByConsultaReferenciapago(string $consulta_referenciapago) Return Consulta objects filtered by the consulta_referenciapago column
 * @method array findByConsultaFacturada(boolean $consulta_facturada) Return Consulta objects filtered by the consulta_facturada column
 * @method array findByConsultaRegistrada(boolean $consulta_registrada) Return Consulta objects filtered by the consulta_registrada column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseConsultaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseConsultaQuery object.
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
            $modelName = 'Consulta';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConsultaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ConsultaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ConsultaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConsultaQuery) {
            return $criteria;
        }
        $query = new ConsultaQuery(null, null, $modelAlias);

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
     * @return   Consulta|Consulta[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ConsultaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ConsultaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Consulta A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdconsulta($key, $con = null)
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
     * @return                 Consulta A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idconsulta`, `idpaciente`, `idmedico`, `idconsultorio`, `consulta_fecha`, `consulta_hora`, `consulta_diagnostico`, `consulta_observaciones`, `consulta_status`, `consulta_total`, `consulta_tipodepago`, `consulta_referenciapago`, `consulta_facturada`, `consulta_registrada` FROM `consulta` WHERE `idconsulta` = :p0';
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
            $obj = new Consulta();
            $obj->hydrate($row);
            ConsultaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Consulta|Consulta[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Consulta[]|mixed the list of results, formatted by the current formatter
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
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConsultaPeer::IDCONSULTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConsultaPeer::IDCONSULTA, $keys, Criteria::IN);
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
     * @param     mixed $idconsulta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByIdconsulta($idconsulta = null, $comparison = null)
    {
        if (is_array($idconsulta)) {
            $useMinMax = false;
            if (isset($idconsulta['min'])) {
                $this->addUsingAlias(ConsultaPeer::IDCONSULTA, $idconsulta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconsulta['max'])) {
                $this->addUsingAlias(ConsultaPeer::IDCONSULTA, $idconsulta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConsultaPeer::IDCONSULTA, $idconsulta, $comparison);
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
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByIdpaciente($idpaciente = null, $comparison = null)
    {
        if (is_array($idpaciente)) {
            $useMinMax = false;
            if (isset($idpaciente['min'])) {
                $this->addUsingAlias(ConsultaPeer::IDPACIENTE, $idpaciente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpaciente['max'])) {
                $this->addUsingAlias(ConsultaPeer::IDPACIENTE, $idpaciente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConsultaPeer::IDPACIENTE, $idpaciente, $comparison);
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
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByIdmedico($idmedico = null, $comparison = null)
    {
        if (is_array($idmedico)) {
            $useMinMax = false;
            if (isset($idmedico['min'])) {
                $this->addUsingAlias(ConsultaPeer::IDMEDICO, $idmedico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmedico['max'])) {
                $this->addUsingAlias(ConsultaPeer::IDMEDICO, $idmedico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConsultaPeer::IDMEDICO, $idmedico, $comparison);
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
     * @see       filterByConsultorio()
     *
     * @param     mixed $idconsultorio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByIdconsultorio($idconsultorio = null, $comparison = null)
    {
        if (is_array($idconsultorio)) {
            $useMinMax = false;
            if (isset($idconsultorio['min'])) {
                $this->addUsingAlias(ConsultaPeer::IDCONSULTORIO, $idconsultorio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconsultorio['max'])) {
                $this->addUsingAlias(ConsultaPeer::IDCONSULTORIO, $idconsultorio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConsultaPeer::IDCONSULTORIO, $idconsultorio, $comparison);
    }

    /**
     * Filter the query on the consulta_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultaFecha('2011-03-14'); // WHERE consulta_fecha = '2011-03-14'
     * $query->filterByConsultaFecha('now'); // WHERE consulta_fecha = '2011-03-14'
     * $query->filterByConsultaFecha(array('max' => 'yesterday')); // WHERE consulta_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $consultaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByConsultaFecha($consultaFecha = null, $comparison = null)
    {
        if (is_array($consultaFecha)) {
            $useMinMax = false;
            if (isset($consultaFecha['min'])) {
                $this->addUsingAlias(ConsultaPeer::CONSULTA_FECHA, $consultaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultaFecha['max'])) {
                $this->addUsingAlias(ConsultaPeer::CONSULTA_FECHA, $consultaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConsultaPeer::CONSULTA_FECHA, $consultaFecha, $comparison);
    }

    /**
     * Filter the query on the consulta_hora column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultaHora('2011-03-14'); // WHERE consulta_hora = '2011-03-14'
     * $query->filterByConsultaHora('now'); // WHERE consulta_hora = '2011-03-14'
     * $query->filterByConsultaHora(array('max' => 'yesterday')); // WHERE consulta_hora < '2011-03-13'
     * </code>
     *
     * @param     mixed $consultaHora The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByConsultaHora($consultaHora = null, $comparison = null)
    {
        if (is_array($consultaHora)) {
            $useMinMax = false;
            if (isset($consultaHora['min'])) {
                $this->addUsingAlias(ConsultaPeer::CONSULTA_HORA, $consultaHora['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultaHora['max'])) {
                $this->addUsingAlias(ConsultaPeer::CONSULTA_HORA, $consultaHora['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConsultaPeer::CONSULTA_HORA, $consultaHora, $comparison);
    }

    /**
     * Filter the query on the consulta_diagnostico column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultaDiagnostico('fooValue');   // WHERE consulta_diagnostico = 'fooValue'
     * $query->filterByConsultaDiagnostico('%fooValue%'); // WHERE consulta_diagnostico LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultaDiagnostico The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByConsultaDiagnostico($consultaDiagnostico = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultaDiagnostico)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultaDiagnostico)) {
                $consultaDiagnostico = str_replace('*', '%', $consultaDiagnostico);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConsultaPeer::CONSULTA_DIAGNOSTICO, $consultaDiagnostico, $comparison);
    }

    /**
     * Filter the query on the consulta_observaciones column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultaObservaciones('fooValue');   // WHERE consulta_observaciones = 'fooValue'
     * $query->filterByConsultaObservaciones('%fooValue%'); // WHERE consulta_observaciones LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultaObservaciones The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByConsultaObservaciones($consultaObservaciones = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultaObservaciones)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultaObservaciones)) {
                $consultaObservaciones = str_replace('*', '%', $consultaObservaciones);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConsultaPeer::CONSULTA_OBSERVACIONES, $consultaObservaciones, $comparison);
    }

    /**
     * Filter the query on the consulta_status column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultaStatus('fooValue');   // WHERE consulta_status = 'fooValue'
     * $query->filterByConsultaStatus('%fooValue%'); // WHERE consulta_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultaStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByConsultaStatus($consultaStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultaStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultaStatus)) {
                $consultaStatus = str_replace('*', '%', $consultaStatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConsultaPeer::CONSULTA_STATUS, $consultaStatus, $comparison);
    }

    /**
     * Filter the query on the consulta_total column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultaTotal(1234); // WHERE consulta_total = 1234
     * $query->filterByConsultaTotal(array(12, 34)); // WHERE consulta_total IN (12, 34)
     * $query->filterByConsultaTotal(array('min' => 12)); // WHERE consulta_total >= 12
     * $query->filterByConsultaTotal(array('max' => 12)); // WHERE consulta_total <= 12
     * </code>
     *
     * @param     mixed $consultaTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByConsultaTotal($consultaTotal = null, $comparison = null)
    {
        if (is_array($consultaTotal)) {
            $useMinMax = false;
            if (isset($consultaTotal['min'])) {
                $this->addUsingAlias(ConsultaPeer::CONSULTA_TOTAL, $consultaTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultaTotal['max'])) {
                $this->addUsingAlias(ConsultaPeer::CONSULTA_TOTAL, $consultaTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConsultaPeer::CONSULTA_TOTAL, $consultaTotal, $comparison);
    }

    /**
     * Filter the query on the consulta_tipodepago column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultaTipodepago('fooValue');   // WHERE consulta_tipodepago = 'fooValue'
     * $query->filterByConsultaTipodepago('%fooValue%'); // WHERE consulta_tipodepago LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultaTipodepago The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByConsultaTipodepago($consultaTipodepago = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultaTipodepago)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultaTipodepago)) {
                $consultaTipodepago = str_replace('*', '%', $consultaTipodepago);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConsultaPeer::CONSULTA_TIPODEPAGO, $consultaTipodepago, $comparison);
    }

    /**
     * Filter the query on the consulta_referenciapago column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultaReferenciapago('fooValue');   // WHERE consulta_referenciapago = 'fooValue'
     * $query->filterByConsultaReferenciapago('%fooValue%'); // WHERE consulta_referenciapago LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultaReferenciapago The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByConsultaReferenciapago($consultaReferenciapago = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultaReferenciapago)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultaReferenciapago)) {
                $consultaReferenciapago = str_replace('*', '%', $consultaReferenciapago);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConsultaPeer::CONSULTA_REFERENCIAPAGO, $consultaReferenciapago, $comparison);
    }

    /**
     * Filter the query on the consulta_facturada column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultaFacturada(true); // WHERE consulta_facturada = true
     * $query->filterByConsultaFacturada('yes'); // WHERE consulta_facturada = true
     * </code>
     *
     * @param     boolean|string $consultaFacturada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByConsultaFacturada($consultaFacturada = null, $comparison = null)
    {
        if (is_string($consultaFacturada)) {
            $consultaFacturada = in_array(strtolower($consultaFacturada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ConsultaPeer::CONSULTA_FACTURADA, $consultaFacturada, $comparison);
    }

    /**
     * Filter the query on the consulta_registrada column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultaRegistrada(true); // WHERE consulta_registrada = true
     * $query->filterByConsultaRegistrada('yes'); // WHERE consulta_registrada = true
     * </code>
     *
     * @param     boolean|string $consultaRegistrada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function filterByConsultaRegistrada($consultaRegistrada = null, $comparison = null)
    {
        if (is_string($consultaRegistrada)) {
            $consultaRegistrada = in_array(strtolower($consultaRegistrada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ConsultaPeer::CONSULTA_REGISTRADA, $consultaRegistrada, $comparison);
    }

    /**
     * Filter the query by a related Consultorio object
     *
     * @param   Consultorio|PropelObjectCollection $consultorio The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConsultaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConsultorio($consultorio, $comparison = null)
    {
        if ($consultorio instanceof Consultorio) {
            return $this
                ->addUsingAlias(ConsultaPeer::IDCONSULTORIO, $consultorio->getIdconsultorio(), $comparison);
        } elseif ($consultorio instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ConsultaPeer::IDCONSULTORIO, $consultorio->toKeyValue('PrimaryKey', 'Idconsultorio'), $comparison);
        } else {
            throw new PropelException('filterByConsultorio() only accepts arguments of type Consultorio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Consultorio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function joinConsultorio($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Consultorio');

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
            $this->addJoinObject($join, 'Consultorio');
        }

        return $this;
    }

    /**
     * Use the Consultorio relation Consultorio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ConsultorioQuery A secondary query class using the current class as primary query
     */
    public function useConsultorioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinConsultorio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Consultorio', 'ConsultorioQuery');
    }

    /**
     * Filter the query by a related Medico object
     *
     * @param   Medico|PropelObjectCollection $medico The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConsultaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMedico($medico, $comparison = null)
    {
        if ($medico instanceof Medico) {
            return $this
                ->addUsingAlias(ConsultaPeer::IDMEDICO, $medico->getIdmedico(), $comparison);
        } elseif ($medico instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ConsultaPeer::IDMEDICO, $medico->toKeyValue('PrimaryKey', 'Idmedico'), $comparison);
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
     * @return ConsultaQuery The current query, for fluid interface
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
     * Filter the query by a related Paciente object
     *
     * @param   Paciente|PropelObjectCollection $paciente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConsultaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPaciente($paciente, $comparison = null)
    {
        if ($paciente instanceof Paciente) {
            return $this
                ->addUsingAlias(ConsultaPeer::IDPACIENTE, $paciente->getIdpaciente(), $comparison);
        } elseif ($paciente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ConsultaPeer::IDPACIENTE, $paciente->toKeyValue('PrimaryKey', 'Idpaciente'), $comparison);
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
     * @return ConsultaQuery The current query, for fluid interface
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
     * Filter the query by a related Cargoconsulta object
     *
     * @param   Cargoconsulta|PropelObjectCollection $cargoconsulta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConsultaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCargoconsulta($cargoconsulta, $comparison = null)
    {
        if ($cargoconsulta instanceof Cargoconsulta) {
            return $this
                ->addUsingAlias(ConsultaPeer::IDCONSULTA, $cargoconsulta->getIdconsulta(), $comparison);
        } elseif ($cargoconsulta instanceof PropelObjectCollection) {
            return $this
                ->useCargoconsultaQuery()
                ->filterByPrimaryKeys($cargoconsulta->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCargoconsulta() only accepts arguments of type Cargoconsulta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cargoconsulta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function joinCargoconsulta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cargoconsulta');

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
            $this->addJoinObject($join, 'Cargoconsulta');
        }

        return $this;
    }

    /**
     * Use the Cargoconsulta relation Cargoconsulta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CargoconsultaQuery A secondary query class using the current class as primary query
     */
    public function useCargoconsultaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCargoconsulta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cargoconsulta', 'CargoconsultaQuery');
    }

    /**
     * Filter the query by a related Consultaanticipo object
     *
     * @param   Consultaanticipo|PropelObjectCollection $consultaanticipo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConsultaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConsultaanticipo($consultaanticipo, $comparison = null)
    {
        if ($consultaanticipo instanceof Consultaanticipo) {
            return $this
                ->addUsingAlias(ConsultaPeer::IDCONSULTA, $consultaanticipo->getIdconsulta(), $comparison);
        } elseif ($consultaanticipo instanceof PropelObjectCollection) {
            return $this
                ->useConsultaanticipoQuery()
                ->filterByPrimaryKeys($consultaanticipo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByConsultaanticipo() only accepts arguments of type Consultaanticipo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Consultaanticipo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function joinConsultaanticipo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Consultaanticipo');

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
            $this->addJoinObject($join, 'Consultaanticipo');
        }

        return $this;
    }

    /**
     * Use the Consultaanticipo relation Consultaanticipo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ConsultaanticipoQuery A secondary query class using the current class as primary query
     */
    public function useConsultaanticipoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinConsultaanticipo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Consultaanticipo', 'ConsultaanticipoQuery');
    }

    /**
     * Filter the query by a related Factura object
     *
     * @param   Factura|PropelObjectCollection $factura  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConsultaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactura($factura, $comparison = null)
    {
        if ($factura instanceof Factura) {
            return $this
                ->addUsingAlias(ConsultaPeer::IDCONSULTA, $factura->getIdconsulta(), $comparison);
        } elseif ($factura instanceof PropelObjectCollection) {
            return $this
                ->useFacturaQuery()
                ->filterByPrimaryKeys($factura->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFactura() only accepts arguments of type Factura or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Factura relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function joinFactura($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Factura');

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
            $this->addJoinObject($join, 'Factura');
        }

        return $this;
    }

    /**
     * Use the Factura relation Factura object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FacturaQuery A secondary query class using the current class as primary query
     */
    public function useFacturaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFactura($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Factura', 'FacturaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Consulta $consulta Object to remove from the list of results
     *
     * @return ConsultaQuery The current query, for fluid interface
     */
    public function prune($consulta = null)
    {
        if ($consulta) {
            $this->addUsingAlias(ConsultaPeer::IDCONSULTA, $consulta->getIdconsulta(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
