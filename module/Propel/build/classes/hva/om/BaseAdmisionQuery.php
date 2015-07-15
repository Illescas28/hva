<?php


/**
 * Base class that represents a query for the 'admision' table.
 *
 *
 *
 * @method AdmisionQuery orderByIdadmision($order = Criteria::ASC) Order by the idadmision column
 * @method AdmisionQuery orderByIdpaciente($order = Criteria::ASC) Order by the idpaciente column
 * @method AdmisionQuery orderByIdmedico($order = Criteria::ASC) Order by the idmedico column
 * @method AdmisionQuery orderByIdcuarto($order = Criteria::ASC) Order by the idcuarto column
 * @method AdmisionQuery orderByAdmisionFechaadmision($order = Criteria::ASC) Order by the admision_fechaadmision column
 * @method AdmisionQuery orderByAdmisionFechasalida($order = Criteria::ASC) Order by the admision_fechasalida column
 * @method AdmisionQuery orderByAdmisionDiagnostico($order = Criteria::ASC) Order by the admision_diagnostico column
 * @method AdmisionQuery orderByAdmisionObservaciones($order = Criteria::ASC) Order by the admision_observaciones column
 * @method AdmisionQuery orderByAdmisionStatus($order = Criteria::ASC) Order by the admision_status column
 * @method AdmisionQuery orderByAdmisionTotal($order = Criteria::ASC) Order by the admision_total column
 * @method AdmisionQuery orderByAdmisionPagadaen($order = Criteria::ASC) Order by the admision_pagadaen column
 * @method AdmisionQuery orderByAdmisionTipodepago($order = Criteria::ASC) Order by the admision_tipodepago column
 * @method AdmisionQuery orderByAdmisionReferenciapago($order = Criteria::ASC) Order by the admision_referenciapago column
 * @method AdmisionQuery orderByAdmisionFacturada($order = Criteria::ASC) Order by the admision_facturada column
 * @method AdmisionQuery orderByAdmisionRegistrada($order = Criteria::ASC) Order by the admision_registrada column
 *
 * @method AdmisionQuery groupByIdadmision() Group by the idadmision column
 * @method AdmisionQuery groupByIdpaciente() Group by the idpaciente column
 * @method AdmisionQuery groupByIdmedico() Group by the idmedico column
 * @method AdmisionQuery groupByIdcuarto() Group by the idcuarto column
 * @method AdmisionQuery groupByAdmisionFechaadmision() Group by the admision_fechaadmision column
 * @method AdmisionQuery groupByAdmisionFechasalida() Group by the admision_fechasalida column
 * @method AdmisionQuery groupByAdmisionDiagnostico() Group by the admision_diagnostico column
 * @method AdmisionQuery groupByAdmisionObservaciones() Group by the admision_observaciones column
 * @method AdmisionQuery groupByAdmisionStatus() Group by the admision_status column
 * @method AdmisionQuery groupByAdmisionTotal() Group by the admision_total column
 * @method AdmisionQuery groupByAdmisionPagadaen() Group by the admision_pagadaen column
 * @method AdmisionQuery groupByAdmisionTipodepago() Group by the admision_tipodepago column
 * @method AdmisionQuery groupByAdmisionReferenciapago() Group by the admision_referenciapago column
 * @method AdmisionQuery groupByAdmisionFacturada() Group by the admision_facturada column
 * @method AdmisionQuery groupByAdmisionRegistrada() Group by the admision_registrada column
 *
 * @method AdmisionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AdmisionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AdmisionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AdmisionQuery leftJoinCuarto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cuarto relation
 * @method AdmisionQuery rightJoinCuarto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cuarto relation
 * @method AdmisionQuery innerJoinCuarto($relationAlias = null) Adds a INNER JOIN clause to the query using the Cuarto relation
 *
 * @method AdmisionQuery leftJoinMedico($relationAlias = null) Adds a LEFT JOIN clause to the query using the Medico relation
 * @method AdmisionQuery rightJoinMedico($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Medico relation
 * @method AdmisionQuery innerJoinMedico($relationAlias = null) Adds a INNER JOIN clause to the query using the Medico relation
 *
 * @method AdmisionQuery leftJoinPaciente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Paciente relation
 * @method AdmisionQuery rightJoinPaciente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Paciente relation
 * @method AdmisionQuery innerJoinPaciente($relationAlias = null) Adds a INNER JOIN clause to the query using the Paciente relation
 *
 * @method AdmisionQuery leftJoinAdmisionanticipo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Admisionanticipo relation
 * @method AdmisionQuery rightJoinAdmisionanticipo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Admisionanticipo relation
 * @method AdmisionQuery innerJoinAdmisionanticipo($relationAlias = null) Adds a INNER JOIN clause to the query using the Admisionanticipo relation
 *
 * @method AdmisionQuery leftJoinCargoadmision($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cargoadmision relation
 * @method AdmisionQuery rightJoinCargoadmision($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cargoadmision relation
 * @method AdmisionQuery innerJoinCargoadmision($relationAlias = null) Adds a INNER JOIN clause to the query using the Cargoadmision relation
 *
 * @method Admision findOne(PropelPDO $con = null) Return the first Admision matching the query
 * @method Admision findOneOrCreate(PropelPDO $con = null) Return the first Admision matching the query, or a new Admision object populated from the query conditions when no match is found
 *
 * @method Admision findOneByIdpaciente(int $idpaciente) Return the first Admision filtered by the idpaciente column
 * @method Admision findOneByIdmedico(int $idmedico) Return the first Admision filtered by the idmedico column
 * @method Admision findOneByIdcuarto(int $idcuarto) Return the first Admision filtered by the idcuarto column
 * @method Admision findOneByAdmisionFechaadmision(string $admision_fechaadmision) Return the first Admision filtered by the admision_fechaadmision column
 * @method Admision findOneByAdmisionFechasalida(string $admision_fechasalida) Return the first Admision filtered by the admision_fechasalida column
 * @method Admision findOneByAdmisionDiagnostico(string $admision_diagnostico) Return the first Admision filtered by the admision_diagnostico column
 * @method Admision findOneByAdmisionObservaciones(string $admision_observaciones) Return the first Admision filtered by the admision_observaciones column
 * @method Admision findOneByAdmisionStatus(string $admision_status) Return the first Admision filtered by the admision_status column
 * @method Admision findOneByAdmisionTotal(string $admision_total) Return the first Admision filtered by the admision_total column
 * @method Admision findOneByAdmisionPagadaen(string $admision_pagadaen) Return the first Admision filtered by the admision_pagadaen column
 * @method Admision findOneByAdmisionTipodepago(string $admision_tipodepago) Return the first Admision filtered by the admision_tipodepago column
 * @method Admision findOneByAdmisionReferenciapago(string $admision_referenciapago) Return the first Admision filtered by the admision_referenciapago column
 * @method Admision findOneByAdmisionFacturada(boolean $admision_facturada) Return the first Admision filtered by the admision_facturada column
 * @method Admision findOneByAdmisionRegistrada(boolean $admision_registrada) Return the first Admision filtered by the admision_registrada column
 *
 * @method array findByIdadmision(int $idadmision) Return Admision objects filtered by the idadmision column
 * @method array findByIdpaciente(int $idpaciente) Return Admision objects filtered by the idpaciente column
 * @method array findByIdmedico(int $idmedico) Return Admision objects filtered by the idmedico column
 * @method array findByIdcuarto(int $idcuarto) Return Admision objects filtered by the idcuarto column
 * @method array findByAdmisionFechaadmision(string $admision_fechaadmision) Return Admision objects filtered by the admision_fechaadmision column
 * @method array findByAdmisionFechasalida(string $admision_fechasalida) Return Admision objects filtered by the admision_fechasalida column
 * @method array findByAdmisionDiagnostico(string $admision_diagnostico) Return Admision objects filtered by the admision_diagnostico column
 * @method array findByAdmisionObservaciones(string $admision_observaciones) Return Admision objects filtered by the admision_observaciones column
 * @method array findByAdmisionStatus(string $admision_status) Return Admision objects filtered by the admision_status column
 * @method array findByAdmisionTotal(string $admision_total) Return Admision objects filtered by the admision_total column
 * @method array findByAdmisionPagadaen(string $admision_pagadaen) Return Admision objects filtered by the admision_pagadaen column
 * @method array findByAdmisionTipodepago(string $admision_tipodepago) Return Admision objects filtered by the admision_tipodepago column
 * @method array findByAdmisionReferenciapago(string $admision_referenciapago) Return Admision objects filtered by the admision_referenciapago column
 * @method array findByAdmisionFacturada(boolean $admision_facturada) Return Admision objects filtered by the admision_facturada column
 * @method array findByAdmisionRegistrada(boolean $admision_registrada) Return Admision objects filtered by the admision_registrada column
 *
 * @package    propel.generator.hva.om
 */
abstract class BaseAdmisionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAdmisionQuery object.
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
            $modelName = 'Admision';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AdmisionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AdmisionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AdmisionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AdmisionQuery) {
            return $criteria;
        }
        $query = new AdmisionQuery(null, null, $modelAlias);

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
     * @return   Admision|Admision[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AdmisionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AdmisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Admision A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdadmision($key, $con = null)
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
     * @return                 Admision A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idadmision`, `idpaciente`, `idmedico`, `idcuarto`, `admision_fechaadmision`, `admision_fechasalida`, `admision_diagnostico`, `admision_observaciones`, `admision_status`, `admision_total`, `admision_pagadaen`, `admision_tipodepago`, `admision_referenciapago`, `admision_facturada`, `admision_registrada` FROM `admision` WHERE `idadmision` = :p0';
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
            $obj = new Admision();
            $obj->hydrate($row);
            AdmisionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Admision|Admision[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Admision[]|mixed the list of results, formatted by the current formatter
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
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AdmisionPeer::IDADMISION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AdmisionPeer::IDADMISION, $keys, Criteria::IN);
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
     * @param     mixed $idadmision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function filterByIdadmision($idadmision = null, $comparison = null)
    {
        if (is_array($idadmision)) {
            $useMinMax = false;
            if (isset($idadmision['min'])) {
                $this->addUsingAlias(AdmisionPeer::IDADMISION, $idadmision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idadmision['max'])) {
                $this->addUsingAlias(AdmisionPeer::IDADMISION, $idadmision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdmisionPeer::IDADMISION, $idadmision, $comparison);
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
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function filterByIdpaciente($idpaciente = null, $comparison = null)
    {
        if (is_array($idpaciente)) {
            $useMinMax = false;
            if (isset($idpaciente['min'])) {
                $this->addUsingAlias(AdmisionPeer::IDPACIENTE, $idpaciente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpaciente['max'])) {
                $this->addUsingAlias(AdmisionPeer::IDPACIENTE, $idpaciente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdmisionPeer::IDPACIENTE, $idpaciente, $comparison);
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
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function filterByIdmedico($idmedico = null, $comparison = null)
    {
        if (is_array($idmedico)) {
            $useMinMax = false;
            if (isset($idmedico['min'])) {
                $this->addUsingAlias(AdmisionPeer::IDMEDICO, $idmedico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmedico['max'])) {
                $this->addUsingAlias(AdmisionPeer::IDMEDICO, $idmedico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdmisionPeer::IDMEDICO, $idmedico, $comparison);
    }

    /**
     * Filter the query on the idcuarto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcuarto(1234); // WHERE idcuarto = 1234
     * $query->filterByIdcuarto(array(12, 34)); // WHERE idcuarto IN (12, 34)
     * $query->filterByIdcuarto(array('min' => 12)); // WHERE idcuarto >= 12
     * $query->filterByIdcuarto(array('max' => 12)); // WHERE idcuarto <= 12
     * </code>
     *
     * @see       filterByCuarto()
     *
     * @param     mixed $idcuarto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function filterByIdcuarto($idcuarto = null, $comparison = null)
    {
        if (is_array($idcuarto)) {
            $useMinMax = false;
            if (isset($idcuarto['min'])) {
                $this->addUsingAlias(AdmisionPeer::IDCUARTO, $idcuarto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcuarto['max'])) {
                $this->addUsingAlias(AdmisionPeer::IDCUARTO, $idcuarto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdmisionPeer::IDCUARTO, $idcuarto, $comparison);
    }

    /**
     * Filter the query on the admision_fechaadmision column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmisionFechaadmision('2011-03-14'); // WHERE admision_fechaadmision = '2011-03-14'
     * $query->filterByAdmisionFechaadmision('now'); // WHERE admision_fechaadmision = '2011-03-14'
     * $query->filterByAdmisionFechaadmision(array('max' => 'yesterday')); // WHERE admision_fechaadmision < '2011-03-13'
     * </code>
     *
     * @param     mixed $admisionFechaadmision The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function filterByAdmisionFechaadmision($admisionFechaadmision = null, $comparison = null)
    {
        if (is_array($admisionFechaadmision)) {
            $useMinMax = false;
            if (isset($admisionFechaadmision['min'])) {
                $this->addUsingAlias(AdmisionPeer::ADMISION_FECHAADMISION, $admisionFechaadmision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($admisionFechaadmision['max'])) {
                $this->addUsingAlias(AdmisionPeer::ADMISION_FECHAADMISION, $admisionFechaadmision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdmisionPeer::ADMISION_FECHAADMISION, $admisionFechaadmision, $comparison);
    }

    /**
     * Filter the query on the admision_fechasalida column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmisionFechasalida('2011-03-14'); // WHERE admision_fechasalida = '2011-03-14'
     * $query->filterByAdmisionFechasalida('now'); // WHERE admision_fechasalida = '2011-03-14'
     * $query->filterByAdmisionFechasalida(array('max' => 'yesterday')); // WHERE admision_fechasalida < '2011-03-13'
     * </code>
     *
     * @param     mixed $admisionFechasalida The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function filterByAdmisionFechasalida($admisionFechasalida = null, $comparison = null)
    {
        if (is_array($admisionFechasalida)) {
            $useMinMax = false;
            if (isset($admisionFechasalida['min'])) {
                $this->addUsingAlias(AdmisionPeer::ADMISION_FECHASALIDA, $admisionFechasalida['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($admisionFechasalida['max'])) {
                $this->addUsingAlias(AdmisionPeer::ADMISION_FECHASALIDA, $admisionFechasalida['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdmisionPeer::ADMISION_FECHASALIDA, $admisionFechasalida, $comparison);
    }

    /**
     * Filter the query on the admision_diagnostico column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmisionDiagnostico('fooValue');   // WHERE admision_diagnostico = 'fooValue'
     * $query->filterByAdmisionDiagnostico('%fooValue%'); // WHERE admision_diagnostico LIKE '%fooValue%'
     * </code>
     *
     * @param     string $admisionDiagnostico The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function filterByAdmisionDiagnostico($admisionDiagnostico = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($admisionDiagnostico)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $admisionDiagnostico)) {
                $admisionDiagnostico = str_replace('*', '%', $admisionDiagnostico);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdmisionPeer::ADMISION_DIAGNOSTICO, $admisionDiagnostico, $comparison);
    }

    /**
     * Filter the query on the admision_observaciones column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmisionObservaciones('fooValue');   // WHERE admision_observaciones = 'fooValue'
     * $query->filterByAdmisionObservaciones('%fooValue%'); // WHERE admision_observaciones LIKE '%fooValue%'
     * </code>
     *
     * @param     string $admisionObservaciones The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function filterByAdmisionObservaciones($admisionObservaciones = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($admisionObservaciones)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $admisionObservaciones)) {
                $admisionObservaciones = str_replace('*', '%', $admisionObservaciones);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdmisionPeer::ADMISION_OBSERVACIONES, $admisionObservaciones, $comparison);
    }

    /**
     * Filter the query on the admision_status column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmisionStatus('fooValue');   // WHERE admision_status = 'fooValue'
     * $query->filterByAdmisionStatus('%fooValue%'); // WHERE admision_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $admisionStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function filterByAdmisionStatus($admisionStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($admisionStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $admisionStatus)) {
                $admisionStatus = str_replace('*', '%', $admisionStatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdmisionPeer::ADMISION_STATUS, $admisionStatus, $comparison);
    }

    /**
     * Filter the query on the admision_total column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmisionTotal(1234); // WHERE admision_total = 1234
     * $query->filterByAdmisionTotal(array(12, 34)); // WHERE admision_total IN (12, 34)
     * $query->filterByAdmisionTotal(array('min' => 12)); // WHERE admision_total >= 12
     * $query->filterByAdmisionTotal(array('max' => 12)); // WHERE admision_total <= 12
     * </code>
     *
     * @param     mixed $admisionTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function filterByAdmisionTotal($admisionTotal = null, $comparison = null)
    {
        if (is_array($admisionTotal)) {
            $useMinMax = false;
            if (isset($admisionTotal['min'])) {
                $this->addUsingAlias(AdmisionPeer::ADMISION_TOTAL, $admisionTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($admisionTotal['max'])) {
                $this->addUsingAlias(AdmisionPeer::ADMISION_TOTAL, $admisionTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdmisionPeer::ADMISION_TOTAL, $admisionTotal, $comparison);
    }

    /**
     * Filter the query on the admision_pagadaen column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmisionPagadaen('2011-03-14'); // WHERE admision_pagadaen = '2011-03-14'
     * $query->filterByAdmisionPagadaen('now'); // WHERE admision_pagadaen = '2011-03-14'
     * $query->filterByAdmisionPagadaen(array('max' => 'yesterday')); // WHERE admision_pagadaen < '2011-03-13'
     * </code>
     *
     * @param     mixed $admisionPagadaen The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function filterByAdmisionPagadaen($admisionPagadaen = null, $comparison = null)
    {
        if (is_array($admisionPagadaen)) {
            $useMinMax = false;
            if (isset($admisionPagadaen['min'])) {
                $this->addUsingAlias(AdmisionPeer::ADMISION_PAGADAEN, $admisionPagadaen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($admisionPagadaen['max'])) {
                $this->addUsingAlias(AdmisionPeer::ADMISION_PAGADAEN, $admisionPagadaen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AdmisionPeer::ADMISION_PAGADAEN, $admisionPagadaen, $comparison);
    }

    /**
     * Filter the query on the admision_tipodepago column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmisionTipodepago('fooValue');   // WHERE admision_tipodepago = 'fooValue'
     * $query->filterByAdmisionTipodepago('%fooValue%'); // WHERE admision_tipodepago LIKE '%fooValue%'
     * </code>
     *
     * @param     string $admisionTipodepago The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function filterByAdmisionTipodepago($admisionTipodepago = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($admisionTipodepago)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $admisionTipodepago)) {
                $admisionTipodepago = str_replace('*', '%', $admisionTipodepago);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdmisionPeer::ADMISION_TIPODEPAGO, $admisionTipodepago, $comparison);
    }

    /**
     * Filter the query on the admision_referenciapago column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmisionReferenciapago('fooValue');   // WHERE admision_referenciapago = 'fooValue'
     * $query->filterByAdmisionReferenciapago('%fooValue%'); // WHERE admision_referenciapago LIKE '%fooValue%'
     * </code>
     *
     * @param     string $admisionReferenciapago The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function filterByAdmisionReferenciapago($admisionReferenciapago = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($admisionReferenciapago)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $admisionReferenciapago)) {
                $admisionReferenciapago = str_replace('*', '%', $admisionReferenciapago);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AdmisionPeer::ADMISION_REFERENCIAPAGO, $admisionReferenciapago, $comparison);
    }

    /**
     * Filter the query on the admision_facturada column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmisionFacturada(true); // WHERE admision_facturada = true
     * $query->filterByAdmisionFacturada('yes'); // WHERE admision_facturada = true
     * </code>
     *
     * @param     boolean|string $admisionFacturada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function filterByAdmisionFacturada($admisionFacturada = null, $comparison = null)
    {
        if (is_string($admisionFacturada)) {
            $admisionFacturada = in_array(strtolower($admisionFacturada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(AdmisionPeer::ADMISION_FACTURADA, $admisionFacturada, $comparison);
    }

    /**
     * Filter the query on the admision_registrada column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmisionRegistrada(true); // WHERE admision_registrada = true
     * $query->filterByAdmisionRegistrada('yes'); // WHERE admision_registrada = true
     * </code>
     *
     * @param     boolean|string $admisionRegistrada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function filterByAdmisionRegistrada($admisionRegistrada = null, $comparison = null)
    {
        if (is_string($admisionRegistrada)) {
            $admisionRegistrada = in_array(strtolower($admisionRegistrada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(AdmisionPeer::ADMISION_REGISTRADA, $admisionRegistrada, $comparison);
    }

    /**
     * Filter the query by a related Cuarto object
     *
     * @param   Cuarto|PropelObjectCollection $cuarto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AdmisionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCuarto($cuarto, $comparison = null)
    {
        if ($cuarto instanceof Cuarto) {
            return $this
                ->addUsingAlias(AdmisionPeer::IDCUARTO, $cuarto->getIdcuarto(), $comparison);
        } elseif ($cuarto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AdmisionPeer::IDCUARTO, $cuarto->toKeyValue('PrimaryKey', 'Idcuarto'), $comparison);
        } else {
            throw new PropelException('filterByCuarto() only accepts arguments of type Cuarto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cuarto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function joinCuarto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cuarto');

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
            $this->addJoinObject($join, 'Cuarto');
        }

        return $this;
    }

    /**
     * Use the Cuarto relation Cuarto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CuartoQuery A secondary query class using the current class as primary query
     */
    public function useCuartoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCuarto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cuarto', 'CuartoQuery');
    }

    /**
     * Filter the query by a related Medico object
     *
     * @param   Medico|PropelObjectCollection $medico The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AdmisionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMedico($medico, $comparison = null)
    {
        if ($medico instanceof Medico) {
            return $this
                ->addUsingAlias(AdmisionPeer::IDMEDICO, $medico->getIdmedico(), $comparison);
        } elseif ($medico instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AdmisionPeer::IDMEDICO, $medico->toKeyValue('PrimaryKey', 'Idmedico'), $comparison);
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
     * @return AdmisionQuery The current query, for fluid interface
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
     * @return                 AdmisionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPaciente($paciente, $comparison = null)
    {
        if ($paciente instanceof Paciente) {
            return $this
                ->addUsingAlias(AdmisionPeer::IDPACIENTE, $paciente->getIdpaciente(), $comparison);
        } elseif ($paciente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AdmisionPeer::IDPACIENTE, $paciente->toKeyValue('PrimaryKey', 'Idpaciente'), $comparison);
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
     * @return AdmisionQuery The current query, for fluid interface
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
     * Filter the query by a related Admisionanticipo object
     *
     * @param   Admisionanticipo|PropelObjectCollection $admisionanticipo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AdmisionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAdmisionanticipo($admisionanticipo, $comparison = null)
    {
        if ($admisionanticipo instanceof Admisionanticipo) {
            return $this
                ->addUsingAlias(AdmisionPeer::IDADMISION, $admisionanticipo->getIdadmision(), $comparison);
        } elseif ($admisionanticipo instanceof PropelObjectCollection) {
            return $this
                ->useAdmisionanticipoQuery()
                ->filterByPrimaryKeys($admisionanticipo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAdmisionanticipo() only accepts arguments of type Admisionanticipo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Admisionanticipo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function joinAdmisionanticipo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Admisionanticipo');

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
            $this->addJoinObject($join, 'Admisionanticipo');
        }

        return $this;
    }

    /**
     * Use the Admisionanticipo relation Admisionanticipo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AdmisionanticipoQuery A secondary query class using the current class as primary query
     */
    public function useAdmisionanticipoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAdmisionanticipo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Admisionanticipo', 'AdmisionanticipoQuery');
    }

    /**
     * Filter the query by a related Cargoadmision object
     *
     * @param   Cargoadmision|PropelObjectCollection $cargoadmision  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AdmisionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCargoadmision($cargoadmision, $comparison = null)
    {
        if ($cargoadmision instanceof Cargoadmision) {
            return $this
                ->addUsingAlias(AdmisionPeer::IDADMISION, $cargoadmision->getIdadmision(), $comparison);
        } elseif ($cargoadmision instanceof PropelObjectCollection) {
            return $this
                ->useCargoadmisionQuery()
                ->filterByPrimaryKeys($cargoadmision->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCargoadmision() only accepts arguments of type Cargoadmision or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cargoadmision relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function joinCargoadmision($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cargoadmision');

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
            $this->addJoinObject($join, 'Cargoadmision');
        }

        return $this;
    }

    /**
     * Use the Cargoadmision relation Cargoadmision object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CargoadmisionQuery A secondary query class using the current class as primary query
     */
    public function useCargoadmisionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCargoadmision($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cargoadmision', 'CargoadmisionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Admision $admision Object to remove from the list of results
     *
     * @return AdmisionQuery The current query, for fluid interface
     */
    public function prune($admision = null)
    {
        if ($admision) {
            $this->addUsingAlias(AdmisionPeer::IDADMISION, $admision->getIdadmision(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
