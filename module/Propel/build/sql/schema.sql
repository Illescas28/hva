
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- admision
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `admision`;

CREATE TABLE `admision`
(
    `idadmision` INTEGER NOT NULL AUTO_INCREMENT,
    `idpaciente` INTEGER NOT NULL,
    `idmedico` INTEGER NOT NULL,
    `idcuarto` INTEGER NOT NULL,
    `admision_fechaadmision` DATETIME NOT NULL,
    `admision_fechasalida` DATETIME,
    `admision_diagnostico` TEXT,
    `admision_observaciones` TEXT,
    `admision_status` enum('pagada','no pagada','pendiente') DEFAULT 'pendiente',
    `admision_total` DECIMAL(10,2),
    `admision_pagadaen` DATETIME,
    `admision_tipodepago` enum('efectivo','tarjeta debito','tarjeta credito','cheque'),
    `admision_referenciapago` VARCHAR(45),
    `admision_facturada` TINYINT(1),
    `admision_registrada` TINYINT(1),
    PRIMARY KEY (`idadmision`),
    INDEX `idmedico` (`idmedico`),
    INDEX `idpaciente` (`idpaciente`),
    INDEX `idcuarto` (`idcuarto`),
    CONSTRAINT `idcuarto_admision`
        FOREIGN KEY (`idcuarto`)
        REFERENCES `cuarto` (`idcuarto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idmedico_admision`
        FOREIGN KEY (`idmedico`)
        REFERENCES `medico` (`idmedico`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idpaciente_admision`
        FOREIGN KEY (`idpaciente`)
        REFERENCES `paciente` (`idpaciente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- admisionanticipo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `admisionanticipo`;

CREATE TABLE `admisionanticipo`
(
    `idadmisionanticipo` INTEGER NOT NULL AUTO_INCREMENT,
    `idadmision` INTEGER NOT NULL,
    `admisionanticipo_fecha` DATETIME NOT NULL,
    `admisionanticipo_cantidad` DECIMAL(10,2) NOT NULL,
    `admisionanticipo_nota` TEXT,
    PRIMARY KEY (`idadmisionanticipo`),
    INDEX `idadmision` (`idadmision`),
    CONSTRAINT `idadmision_admisionanticipo`
        FOREIGN KEY (`idadmision`)
        REFERENCES `admision` (`idadmision`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- articulo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `articulo`;

CREATE TABLE `articulo`
(
    `idarticulo` INTEGER NOT NULL AUTO_INCREMENT,
    `idtipo` INTEGER NOT NULL,
    `articulo_nombre` VARCHAR(300),
    `articulo_descripcion` TEXT,
    PRIMARY KEY (`idarticulo`),
    INDEX `idtipo` (`idtipo`),
    CONSTRAINT `idtipo_articulo`
        FOREIGN KEY (`idtipo`)
        REFERENCES `tipo` (`idtipo`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- articulovariante
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `articulovariante`;

CREATE TABLE `articulovariante`
(
    `idarticulovariante` INTEGER NOT NULL AUTO_INCREMENT,
    `idarticulo` INTEGER NOT NULL,
    `articulovariante_codigobarras` VARCHAR(100),
    `articulovariante_costo` DECIMAL(10,2),
    `articulovariante_precio` DECIMAL(10,2),
    `articulovariante_iva` enum('exento','0','16'),
    `articulovariante_imagen` TEXT,
    PRIMARY KEY (`idarticulovariante`),
    INDEX `idproducto` (`idarticulo`),
    CONSTRAINT `idproducto_articulovariante`
        FOREIGN KEY (`idarticulo`)
        REFERENCES `articulo` (`idarticulo`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- articulovariantereorden
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `articulovariantereorden`;

CREATE TABLE `articulovariantereorden`
(
    `idarticulovariantereorden` INTEGER NOT NULL AUTO_INCREMENT,
    `idlugar` INTEGER NOT NULL,
    `idarticulovariante` INTEGER NOT NULL,
    `minimo` DECIMAL(10,2) NOT NULL,
    `maximo` DECIMAL(10,2) NOT NULL,
    `reorden` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idarticulovariantereorden`),
    INDEX `idlugar` (`idlugar`),
    INDEX `idarticulovariante` (`idarticulovariante`),
    CONSTRAINT `idarticulovariante_articulovariantereorden`
        FOREIGN KEY (`idarticulovariante`)
        REFERENCES `articulovariante` (`idarticulovariante`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idlugar_articulovariantereorden`
        FOREIGN KEY (`idlugar`)
        REFERENCES `lugar` (`idlugar`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- articulovariantevalor
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `articulovariantevalor`;

CREATE TABLE `articulovariantevalor`
(
    `idarticulovariantevalor` INTEGER NOT NULL AUTO_INCREMENT,
    `idarticulo` INTEGER NOT NULL,
    `idpropiedad` INTEGER NOT NULL,
    `idpropiedadvalor` INTEGER NOT NULL,
    `idarticulovariante` INTEGER NOT NULL,
    PRIMARY KEY (`idarticulovariantevalor`),
    INDEX `idarticulo` (`idarticulo`),
    INDEX `idpropiedad` (`idpropiedad`),
    INDEX `idpropiedadvalor` (`idpropiedadvalor`),
    INDEX `idarticulovariante` (`idarticulovariante`),
    CONSTRAINT `idarticulo_articulovariantevalor`
        FOREIGN KEY (`idarticulo`)
        REFERENCES `articulo` (`idarticulo`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idarticulovariante_articulovariantevalor`
        FOREIGN KEY (`idarticulovariante`)
        REFERENCES `articulovariante` (`idarticulovariante`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idpropiedad_articulovariantevalor`
        FOREIGN KEY (`idpropiedad`)
        REFERENCES `propiedad` (`idpropiedad`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idpropiedadvalor_articulovariantevalor`
        FOREIGN KEY (`idpropiedadvalor`)
        REFERENCES `propiedadvalor` (`idpropiedadvalor`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- banco
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `banco`;

CREATE TABLE `banco`
(
    `idbanco` INTEGER NOT NULL AUTO_INCREMENT,
    `idconceptobanco` INTEGER NOT NULL,
    `banco_fecha` VARCHAR(100) NOT NULL,
    `banco_tipomovimiento` enum('cargo','abono') NOT NULL,
    `banco_cantidad` DECIMAL(10,2) NOT NULL,
    `banco_balance` DECIMAL(10,2) DEFAULT 0.00 NOT NULL,
    `banco_comprobante` VARCHAR(255),
    `banco_nota` TEXT,
    PRIMARY KEY (`idbanco`),
    INDEX `idconceptobanco` (`idconceptobanco`),
    CONSTRAINT `idconceptobanco_banco`
        FOREIGN KEY (`idconceptobanco`)
        REFERENCES `conceptobanco` (`idbancotransaccion`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cajachica
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cajachica`;

CREATE TABLE `cajachica`
(
    `idcajachica` INTEGER NOT NULL AUTO_INCREMENT,
    `idconceptocajachica` INTEGER NOT NULL,
    `cajachica_tipomovimiento` enum('cargo','abono') NOT NULL,
    `cajachica_cantidad` DECIMAL(10,2),
    `cajachica_fecha` DATE NOT NULL,
    `cajachica_balance` DECIMAL(10,2),
    `cajachica_comprobante` VARCHAR(45),
    `cajachica_nota` TEXT,
    `cajachica_pacientedoctor` VARCHAR(255),
    PRIMARY KEY (`idcajachica`),
    INDEX `idconceptocajachica` (`idconceptocajachica`),
    CONSTRAINT `idconceptocajachica_cajachica`
        FOREIGN KEY (`idconceptocajachica`)
        REFERENCES `conceptocajachica` (`idconceptocajachica`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cargoadmision
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cargoadmision`;

CREATE TABLE `cargoadmision`
(
    `idcargoadmision` INTEGER NOT NULL AUTO_INCREMENT,
    `idadmision` INTEGER NOT NULL,
    `idlugarinventario` INTEGER,
    `idservicio` INTEGER,
    `cargoadmision_tipo` enum('articulo','servicio') NOT NULL,
    `cargoadmision_fecha` DATETIME NOT NULL,
    `cargoadmision_cantidad` DECIMAL(10,2) NOT NULL,
    `cargoadmision_monto` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idcargoadmision`),
    INDEX `idadmision` (`idadmision`),
    INDEX `idlugarinventario` (`idlugarinventario`),
    INDEX `idservicio` (`idservicio`),
    CONSTRAINT `idadmision_cargoadmision`
        FOREIGN KEY (`idadmision`)
        REFERENCES `admision` (`idadmision`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idlugarinventario_cargoadmision`
        FOREIGN KEY (`idlugarinventario`)
        REFERENCES `lugarinventario` (`idlugarinventario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idservicio_cargoadmision`
        FOREIGN KEY (`idservicio`)
        REFERENCES `servicio` (`idservicio`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cargoconsulta
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cargoconsulta`;

CREATE TABLE `cargoconsulta`
(
    `idcargoconsulta` INTEGER NOT NULL AUTO_INCREMENT,
    `idconsulta` INTEGER NOT NULL,
    `idlugarinventario` INTEGER,
    `idservicio` INTEGER,
    `cargoconsulta_tipo` enum('articulo','servicio') NOT NULL,
    `cargoconsulta_fecha` DATETIME NOT NULL,
    `cantidad` DECIMAL(10,2) NOT NULL,
    `monto` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idcargoconsulta`),
    INDEX `idconsulta` (`idconsulta`),
    INDEX `idlugarinventario` (`idlugarinventario`),
    INDEX `idservicio` (`idservicio`),
    CONSTRAINT `idconsulta_cargoconsulta`
        FOREIGN KEY (`idconsulta`)
        REFERENCES `consulta` (`idconsulta`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idlugarinventario_cargoconsulta`
        FOREIGN KEY (`idlugarinventario`)
        REFERENCES `lugarinventario` (`idlugarinventario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idservicio_cargoconsulta`
        FOREIGN KEY (`idservicio`)
        REFERENCES `servicio` (`idservicio`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cargoventa
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cargoventa`;

CREATE TABLE `cargoventa`
(
    `idcargoventa` INTEGER NOT NULL AUTO_INCREMENT,
    `idventa` INTEGER NOT NULL,
    `idlugarinventario` INTEGER,
    `idservicio` INTEGER,
    `cargoventa_tipo` enum('articulo','servicio') NOT NULL,
    `cargoventa_fecha` DATETIME NOT NULL,
    `cantidad` DECIMAL(10,2) NOT NULL,
    `monto` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idcargoventa`),
    INDEX `idlugarinventario` (`idlugarinventario`),
    INDEX `idservicio` (`idservicio`),
    INDEX `idventa` (`idventa`),
    CONSTRAINT `idlugarinventario_cargoventa`
        FOREIGN KEY (`idlugarinventario`)
        REFERENCES `lugarinventario` (`idlugarinventario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idservicio_cargoventa`
        FOREIGN KEY (`idservicio`)
        REFERENCES `servicio` (`idservicio`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idventa_cargoventa`
        FOREIGN KEY (`idventa`)
        REFERENCES `venta` (`idventa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cita
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cita`;

CREATE TABLE `cita`
(
    `idcita` INTEGER NOT NULL AUTO_INCREMENT,
    `idpaciente` INTEGER NOT NULL,
    `idmedico` INTEGER,
    `cita_fecha` DATE NOT NULL,
    `cita_hora` TIME NOT NULL,
    `cita_descripcion` TEXT NOT NULL,
    PRIMARY KEY (`idcita`),
    INDEX `idpaciente` (`idpaciente`),
    INDEX `idmedico` (`idmedico`),
    CONSTRAINT `idmedico_cita`
        FOREIGN KEY (`idmedico`)
        REFERENCES `medico` (`idmedico`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idpaciente_cita`
        FOREIGN KEY (`idpaciente`)
        REFERENCES `paciente` (`idpaciente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- conceptobanco
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `conceptobanco`;

CREATE TABLE `conceptobanco`
(
    `idbancotransaccion` INTEGER NOT NULL AUTO_INCREMENT,
    `bancotransaccion_nombre` VARCHAR(255) NOT NULL,
    `bancotransaccion_descripcion` TEXT NOT NULL,
    PRIMARY KEY (`idbancotransaccion`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- conceptocajachica
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `conceptocajachica`;

CREATE TABLE `conceptocajachica`
(
    `idconceptocajachica` INTEGER NOT NULL AUTO_INCREMENT,
    `conceptocajachica_nombre` VARCHAR(45) NOT NULL,
    `conceptocajachica_descripcion` TEXT NOT NULL,
    PRIMARY KEY (`idconceptocajachica`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- consulta
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `consulta`;

CREATE TABLE `consulta`
(
    `idconsulta` INTEGER NOT NULL AUTO_INCREMENT,
    `idpaciente` INTEGER NOT NULL,
    `idmedico` INTEGER NOT NULL,
    `idconsultorio` INTEGER NOT NULL,
    `consulta_fecha` DATE NOT NULL,
    `consulta_hora` TIME NOT NULL,
    `consulta_diagnostico` TEXT,
    `consulta_observaciones` TEXT,
    `consulta_status` enum('pagada','no pagada','pendiente') DEFAULT 'pendiente',
    `consulta_total` DECIMAL(10,2),
    `consulta_tipodepago` enum('efectivo','tarjeta debito','tarjeta credito','cheque'),
    `consulta_referenciapago` VARCHAR(45),
    `consulta_facturada` TINYINT(1),
    `consulta_registrada` TINYINT(1),
    PRIMARY KEY (`idconsulta`),
    INDEX `idmedico` (`idmedico`),
    INDEX `idpaciente` (`idpaciente`),
    INDEX `idconsultorio` (`idconsultorio`),
    CONSTRAINT `idconsultorio_consulta`
        FOREIGN KEY (`idconsultorio`)
        REFERENCES `consultorio` (`idconsultorio`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idmedico_consulta`
        FOREIGN KEY (`idmedico`)
        REFERENCES `medico` (`idmedico`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idpaciente_consulta`
        FOREIGN KEY (`idpaciente`)
        REFERENCES `paciente` (`idpaciente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- consultaanticipo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `consultaanticipo`;

CREATE TABLE `consultaanticipo`
(
    `idconsultaanticipo` INTEGER NOT NULL AUTO_INCREMENT,
    `idconsulta` INTEGER NOT NULL,
    `consultaanticipo_fecha` DATETIME NOT NULL,
    `consultaanticipo_cantidad` DECIMAL(10,2) NOT NULL,
    `consultaanticipo_nota` TEXT,
    PRIMARY KEY (`idconsultaanticipo`),
    INDEX `idconsulta` (`idconsulta`),
    CONSTRAINT `idconsulta_consultaanticipo`
        FOREIGN KEY (`idconsulta`)
        REFERENCES `consulta` (`idconsulta`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- consultorio
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `consultorio`;

CREATE TABLE `consultorio`
(
    `idconsultorio` INTEGER NOT NULL AUTO_INCREMENT,
    `consultorio_nombre` VARCHAR(300) NOT NULL,
    `consultorio_descripcion` TEXT NOT NULL,
    `consultorio_enuso` TINYINT(1) NOT NULL,
    `consultorio_extension` VARCHAR(45),
    PRIMARY KEY (`idconsultorio`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cuarto
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cuarto`;

CREATE TABLE `cuarto`
(
    `idcuarto` INTEGER NOT NULL AUTO_INCREMENT,
    `cuarto_nombre` VARCHAR(300) NOT NULL,
    `cuarto_descripcion` TEXT NOT NULL,
    `cuarto_enuso` TINYINT(1) NOT NULL,
    `cuarto_extension` VARCHAR(45),
    PRIMARY KEY (`idcuarto`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- empleado
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `empleado`;

CREATE TABLE `empleado`
(
    `idempleado` INTEGER NOT NULL AUTO_INCREMENT,
    `idrol` INTEGER NOT NULL,
    `empleado_nombre` VARCHAR(45) NOT NULL,
    `empleado_apellidopaterno` VARCHAR(45) NOT NULL,
    `empleado_apellidomaterno` VARCHAR(45) NOT NULL,
    `empleado_nombreusuario` VARCHAR(45) NOT NULL,
    `empleado_password` VARCHAR(45) NOT NULL,
    `empleado_email` VARCHAR(100) NOT NULL,
    `empleado_imagen` VARCHAR(255),
    PRIMARY KEY (`idempleado`),
    INDEX `idrol` (`idrol`),
    CONSTRAINT `idrol_empleado`
        FOREIGN KEY (`idrol`)
        REFERENCES `rol` (`idrol`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- empleadofacturacion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `empleadofacturacion`;

CREATE TABLE `empleadofacturacion`
(
    `idempleadofacturacion` INTEGER NOT NULL AUTO_INCREMENT,
    `idempleado` INTEGER NOT NULL,
    `empleadofacturacion_razonsocial` VARCHAR(45),
    `empleadofacturacion_rfc` VARCHAR(45),
    `empleadofacturacion_calle` VARCHAR(45),
    `empleadofacturacion_noexterior` VARCHAR(45),
    `empleadofacturacion_nointerior` VARCHAR(45),
    `empleadofacturacion_colonia` VARCHAR(45),
    `empleadofacturacion_ciudad` VARCHAR(45),
    `empleadofacturacion_estado` VARCHAR(45),
    `empleadofacturacion_pais` VARCHAR(45),
    `empleadofacturacion_codigopostal` VARCHAR(45),
    `empleadofacturacion_telefono` VARCHAR(45),
    `empleadofacturacion_email` VARCHAR(45),
    PRIMARY KEY (`idempleadofacturacion`),
    INDEX `idempleado` (`idempleado`),
    CONSTRAINT `idempleado_empleadofacturacion`
        FOREIGN KEY (`idempleado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- especialidad
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `especialidad`;

CREATE TABLE `especialidad`
(
    `idespecialidad` INTEGER NOT NULL AUTO_INCREMENT,
    `especialidad_nombre` VARCHAR(45) NOT NULL,
    `especialidad_descripcion` VARCHAR(45),
    PRIMARY KEY (`idespecialidad`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- factura
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `factura`;

CREATE TABLE `factura`
(
    `idfactura` INTEGER NOT NULL AUTO_INCREMENT,
    `iddatosfacturacion` INTEGER NOT NULL,
    `idconsulta` INTEGER NOT NULL,
    `factura_url_xml` VARCHAR(45) NOT NULL,
    `factura_url_pdf` VARCHAR(45) NOT NULL,
    `factura_fecha` DATETIME NOT NULL,
    `factura_sellosat` TEXT NOT NULL,
    `factura_certificadosat` TEXT NOT NULL,
    `factura_cadenaoriginal` VARCHAR(45) NOT NULL,
    `factura_cfdi` VARCHAR(45) NOT NULL,
    `factura_mensaje` VARCHAR(45) NOT NULL,
    `factura_qrcode` VARCHAR(45) NOT NULL,
    `factura_tipodepago` enum('unico','parcial'),
    `factura_status` enum('creada','cancelada'),
    `factura_tipo` enum('ingreso','egreso'),
    PRIMARY KEY (`idfactura`),
    INDEX `iddatosfacturacion` (`iddatosfacturacion`),
    INDEX `idconsulta` (`idconsulta`),
    CONSTRAINT `idconsulta_factura`
        FOREIGN KEY (`idconsulta`)
        REFERENCES `consulta` (`idconsulta`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `iddatosfacturacion_factura`
        FOREIGN KEY (`iddatosfacturacion`)
        REFERENCES `pacientefacturacion` (`idpacientefacturacion`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- lugar
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `lugar`;

CREATE TABLE `lugar`
(
    `idlugar` INTEGER NOT NULL AUTO_INCREMENT,
    `lugar_nombre` VARCHAR(45) NOT NULL,
    `lugar_descripcion` VARCHAR(45),
    PRIMARY KEY (`idlugar`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- lugarinventario
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `lugarinventario`;

CREATE TABLE `lugarinventario`
(
    `idlugarinventario` INTEGER NOT NULL AUTO_INCREMENT,
    `idlugar` INTEGER NOT NULL,
    `idordencompradetalle` INTEGER NOT NULL,
    `lugarinventario_cantidad` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idlugarinventario`),
    INDEX `idlugar` (`idlugar`),
    INDEX `idordencompradetalle` (`idordencompradetalle`),
    CONSTRAINT `idlugar_lugarinventario`
        FOREIGN KEY (`idlugar`)
        REFERENCES `lugar` (`idlugar`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idordencompradetalle_lugarinventario`
        FOREIGN KEY (`idordencompradetalle`)
        REFERENCES `ordencompradetalle` (`idordencompradetalle`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- medico
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `medico`;

CREATE TABLE `medico`
(
    `idmedico` INTEGER NOT NULL AUTO_INCREMENT,
    `idespecialidad` INTEGER NOT NULL,
    `medico_nombre` VARCHAR(45) NOT NULL,
    `medico_apellidopaterno` VARCHAR(45) NOT NULL,
    `medico_apellidomaterno` VARCHAR(45) NOT NULL,
    `medico_calle` VARCHAR(45),
    `medico_noexterior` VARCHAR(45),
    `medico_nointerior` VARCHAR(45),
    `medico_colonia` VARCHAR(45),
    `medico_codigopostal` VARCHAR(45),
    `medico_ciudad` VARCHAR(45),
    `medico_estado` VARCHAR(45),
    `medico_pais` VARCHAR(45),
    `medico_telefono` VARCHAR(45),
    `medico_telefonocelular` VARCHAR(45) NOT NULL,
    `medico_clave` VARCHAR(45),
    `medico_dgp` VARCHAR(45) NOT NULL,
    `medico_ssa` VARCHAR(45),
    `medico_ae` VARCHAR(45),
    `medico_fotografia` TEXT,
    `medico_perfilcompleto` TINYINT(1) NOT NULL,
    PRIMARY KEY (`idmedico`),
    INDEX `idespecialidad` (`idespecialidad`),
    CONSTRAINT `idespecialidad_medico`
        FOREIGN KEY (`idespecialidad`)
        REFERENCES `especialidad` (`idespecialidad`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- medicoespecialidad
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `medicoespecialidad`;

CREATE TABLE `medicoespecialidad`
(
    `idmedicoespecialidad` INTEGER NOT NULL AUTO_INCREMENT,
    `idmedico` INTEGER NOT NULL,
    `idespecialidad` INTEGER NOT NULL,
    PRIMARY KEY (`idmedicoespecialidad`),
    INDEX `idmedico` (`idmedico`),
    INDEX `idespecialidad` (`idespecialidad`),
    CONSTRAINT `idespecialidad_medicoespecialidad`
        FOREIGN KEY (`idespecialidad`)
        REFERENCES `especialidad` (`idespecialidad`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idmedico_medicoespecialidad`
        FOREIGN KEY (`idmedico`)
        REFERENCES `medico` (`idmedico`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- medicofacturacion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `medicofacturacion`;

CREATE TABLE `medicofacturacion`
(
    `idmedicofacturacion` INTEGER NOT NULL AUTO_INCREMENT,
    `idmedico` INTEGER NOT NULL,
    `medicofacturacion_razonsocial` VARCHAR(45),
    `medicofacturacion_rfc` VARCHAR(45),
    `medicofacturacion_calle` VARCHAR(45),
    `medicofacturacion_noexterior` VARCHAR(45),
    `medicofacturacion_nointerior` VARCHAR(45),
    `medicofacturacion_colonia` VARCHAR(45),
    `medicofacturacion_ciudad` VARCHAR(45),
    `medicofacturacion_estado` VARCHAR(45),
    `medicofacturacion_pais` VARCHAR(45),
    `medicofacturacion_codigopostal` VARCHAR(45),
    `medicofacturacion_telefono` VARCHAR(45),
    `medicofacturacion_email` VARCHAR(45),
    PRIMARY KEY (`idmedicofacturacion`),
    INDEX `idmedico` (`idmedico`),
    CONSTRAINT `idmedico_medicofacturacion`
        FOREIGN KEY (`idmedico`)
        REFERENCES `medico` (`idmedico`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- modulo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `modulo`;

CREATE TABLE `modulo`
(
    `idmodulo` INTEGER NOT NULL AUTO_INCREMENT,
    `modulo_nombre` VARCHAR(250) NOT NULL,
    `modulo_descripcion` TEXT,
    PRIMARY KEY (`idmodulo`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- ordencompra
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ordencompra`;

CREATE TABLE `ordencompra`
(
    `idordencompra` INTEGER NOT NULL AUTO_INCREMENT,
    `idproveedor` INTEGER NOT NULL,
    `ordencompra_nofactura` VARCHAR(45) NOT NULL,
    `ordencompra_facturapdf` TEXT,
    `ordencompra_fecha` DATETIME NOT NULL,
    `ordencompra_importe` DECIMAL(10,2) NOT NULL,
    `ordencompra_status` enum('pagada','no pagada','inventario') NOT NULL,
    `ordencompra_fechaapagar` DATE NOT NULL,
    PRIMARY KEY (`idordencompra`),
    INDEX `idproveedor` (`idproveedor`),
    CONSTRAINT `idproveedor_ordencompra`
        FOREIGN KEY (`idproveedor`)
        REFERENCES `proveedor` (`idproveedor`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- ordencompradetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ordencompradetalle`;

CREATE TABLE `ordencompradetalle`
(
    `idordencompradetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idordencompra` INTEGER NOT NULL,
    `idarticulovariante` INTEGER NOT NULL,
    `ordencompradetalle_cantidad` DECIMAL(10,2) NOT NULL,
    `ordencompradetalle_costo` DECIMAL(10,2) NOT NULL,
    `ordencompradetalle_precio` DECIMAL(10,2) NOT NULL,
    `ordencompradetalle_importe` DECIMAL(10,2) NOT NULL,
    `ordencompradetalle_caducidad` DATE,
    PRIMARY KEY (`idordencompradetalle`),
    INDEX `irordencompra` (`idordencompra`),
    INDEX `idarticulovariante` (`idarticulovariante`),
    CONSTRAINT `idarticulovariante_ordencompradetalle`
        FOREIGN KEY (`idarticulovariante`)
        REFERENCES `articulovariante` (`idarticulovariante`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idordencompra_ordencompradetalle`
        FOREIGN KEY (`idordencompra`)
        REFERENCES `ordencompra` (`idordencompra`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- paciente
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `paciente`;

CREATE TABLE `paciente`
(
    `idpaciente` INTEGER NOT NULL AUTO_INCREMENT,
    `paciente_nombre` VARCHAR(250) NOT NULL,
    `paciente_ap` VARCHAR(100) NOT NULL,
    `paciente_am` VARCHAR(45) NOT NULL,
    `paciente_calle` VARCHAR(45) NOT NULL,
    `paciente_noexterior` VARCHAR(45) NOT NULL,
    `paciente_nointerior` VARCHAR(45) NOT NULL,
    `paciente_colonia` VARCHAR(45) NOT NULL,
    `paciente_codigopostal` VARCHAR(5) NOT NULL,
    `paciente_ciudad` VARCHAR(45) NOT NULL,
    `paciente_estado` VARCHAR(45) NOT NULL,
    `paciente_pais` VARCHAR(45) NOT NULL,
    `paciente_telefono` VARCHAR(45) NOT NULL,
    `paciente_telefonocelular` VARCHAR(45) NOT NULL,
    `paciente_fechanacimiento` DATE NOT NULL,
    `paciente_sexo` enum('Masculino','Femenino') NOT NULL,
    `paciente_estadocivil` enum('Soltero(a)','Casado(a)','Divorciado(a)','Viudo(a)') NOT NULL,
    `paciente_ocupacion` VARCHAR(45) NOT NULL,
    `paciente_conyuge` VARCHAR(45) NOT NULL,
    `paciente_padre` VARCHAR(45) NOT NULL,
    `paciente_madre` VARCHAR(45) NOT NULL,
    `paciente_responsable` VARCHAR(45) NOT NULL,
    `paciente_telefonoresponsable` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`idpaciente`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- pacientefacturacion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `pacientefacturacion`;

CREATE TABLE `pacientefacturacion`
(
    `idpacientefacturacion` INTEGER NOT NULL AUTO_INCREMENT,
    `idpaciente` INTEGER NOT NULL,
    `pacientefacturacion_razonsocial` VARCHAR(45),
    `pacientefacturacion_rfc` VARCHAR(45),
    `pacientefacturacion_calle` VARCHAR(45),
    `pacientefacturacion_noexterior` VARCHAR(45),
    `pacientefacturacion_nointerior` VARCHAR(45),
    `pacientefacturacion_colonia` VARCHAR(45),
    `pacientefacturacion_ciudad` VARCHAR(45),
    `pacientefacturacion_estado` VARCHAR(45),
    `pacientefacturacion_pais` VARCHAR(45),
    `pacientefacturacion_codigopostal` VARCHAR(45),
    `pacientefacturacion_telefono` VARCHAR(45),
    `pacientefacturacion_email` VARCHAR(45),
    PRIMARY KEY (`idpacientefacturacion`),
    INDEX `idpaciente` (`idpaciente`),
    CONSTRAINT `idpaciente_pacientefacturacion`
        FOREIGN KEY (`idpaciente`)
        REFERENCES `paciente` (`idpaciente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- propiedad
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `propiedad`;

CREATE TABLE `propiedad`
(
    `idpropiedad` INTEGER NOT NULL AUTO_INCREMENT,
    `idarticulo` INTEGER NOT NULL,
    `propiedad_nombre` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`idpropiedad`),
    INDEX `idarticulo` (`idarticulo`),
    CONSTRAINT `idarticulo_propiedad`
        FOREIGN KEY (`idarticulo`)
        REFERENCES `articulo` (`idarticulo`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- propiedadvalor
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `propiedadvalor`;

CREATE TABLE `propiedadvalor`
(
    `idpropiedadvalor` INTEGER NOT NULL AUTO_INCREMENT,
    `idpropiedad` INTEGER NOT NULL,
    `idarticulo` INTEGER NOT NULL,
    `propiedadvalor_nombre` VARCHAR(45),
    PRIMARY KEY (`idpropiedadvalor`),
    INDEX `idarticulo` (`idarticulo`),
    INDEX `idpropiedad` (`idpropiedad`),
    CONSTRAINT `idarticulo_propiedadvalor`
        FOREIGN KEY (`idarticulo`)
        REFERENCES `articulo` (`idarticulo`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idpropiedad_propiedadvalor`
        FOREIGN KEY (`idpropiedad`)
        REFERENCES `propiedad` (`idpropiedad`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- proveedor
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `proveedor`;

CREATE TABLE `proveedor`
(
    `idproveedor` INTEGER NOT NULL AUTO_INCREMENT,
    `proveedor_nombre` VARCHAR(45),
    `proveedor_contacto` VARCHAR(45),
    `proveedor_direccion` VARCHAR(45),
    `proveedor_direccion2` VARCHAR(45),
    `proveedor_colonia` VARCHAR(45),
    `proveedor_codigopostal` VARCHAR(45),
    `proveedor_ciudad` VARCHAR(45),
    `proveedor_estado` VARCHAR(45),
    `proveedor_pais` VARCHAR(45),
    `proveedor_email` VARCHAR(45),
    `proveedor_telefono` VARCHAR(45),
    `proveedor_telefonocelular` VARCHAR(45),
    `proveedor_fax` VARCHAR(45),
    `proveedor_rfc` VARCHAR(45),
    PRIMARY KEY (`idproveedor`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- referenciaabono
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `referenciaabono`;

CREATE TABLE `referenciaabono`
(
    `idreferenciaabono` INTEGER NOT NULL,
    `idbanco` INTEGER,
    `referenciaabono_tipo` enum('consulta','admision','venta'),
    `referenciaabono_referencia` INTEGER,
    PRIMARY KEY (`idreferenciaabono`),
    INDEX `idbanco` (`idbanco`),
    CONSTRAINT `idbanco_referenciaabono`
        FOREIGN KEY (`idbanco`)
        REFERENCES `banco` (`idbanco`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- rol
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol`
(
    `idrol` INTEGER NOT NULL AUTO_INCREMENT,
    `rol_nombre` VARCHAR(100) NOT NULL,
    `rol_descripcion` TEXT,
    PRIMARY KEY (`idrol`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- rolmodulo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `rolmodulo`;

CREATE TABLE `rolmodulo`
(
    `idrolmodulo` INTEGER NOT NULL AUTO_INCREMENT,
    `idrol` INTEGER NOT NULL,
    `idmodulo` INTEGER NOT NULL,
    PRIMARY KEY (`idrolmodulo`),
    INDEX `idrol` (`idrol`),
    INDEX `idmodulo` (`idmodulo`),
    CONSTRAINT `idmodulo_rolmodulo`
        FOREIGN KEY (`idmodulo`)
        REFERENCES `modulo` (`idmodulo`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idrol_rolmodulo`
        FOREIGN KEY (`idrol`)
        REFERENCES `rol` (`idrol`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- servicio
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `servicio`;

CREATE TABLE `servicio`
(
    `idservicio` INTEGER NOT NULL AUTO_INCREMENT,
    `servicio_nombre` VARCHAR(300) NOT NULL,
    `servicio_descripcion` TEXT NOT NULL,
    `servicio_precio` DECIMAL(10,2) NOT NULL,
    `servicio_iva` enum('exento','0','16') NOT NULL,
    PRIMARY KEY (`idservicio`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- tipo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tipo`;

CREATE TABLE `tipo`
(
    `idtipo` INTEGER NOT NULL AUTO_INCREMENT,
    `tipo_nombre` VARCHAR(300) NOT NULL,
    `tipo_descripcion` TEXT NOT NULL,
    PRIMARY KEY (`idtipo`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- traspaso
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `traspaso`;

CREATE TABLE `traspaso`
(
    `idinventariolugar` INTEGER NOT NULL,
    `idordencompra` INTEGER NOT NULL,
    `idlugarremitente` INTEGER NOT NULL,
    `idlugardestinatario` INTEGER NOT NULL,
    `traspaso_fecha` DATETIME NOT NULL,
    `traspaso_status` enum('recibido','cancelado','en transito','no recibido') NOT NULL,
    PRIMARY KEY (`idinventariolugar`,`idlugarremitente`,`idlugardestinatario`),
    INDEX `idlugarremitente` (`idlugarremitente`),
    INDEX `idlugardestinantario` (`idlugardestinatario`),
    INDEX `idordencompra` (`idordencompra`),
    CONSTRAINT `idlugardestinatario_traspaso`
        FOREIGN KEY (`idlugardestinatario`)
        REFERENCES `lugar` (`idlugar`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idlugarremitente_traspaso`
        FOREIGN KEY (`idlugarremitente`)
        REFERENCES `lugar` (`idlugar`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idordencompra_traspaso`
        FOREIGN KEY (`idordencompra`)
        REFERENCES `ordencompra` (`idordencompra`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- traspasodetalles
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `traspasodetalles`;

CREATE TABLE `traspasodetalles`
(
    `idtraspasodetalles` INTEGER NOT NULL AUTO_INCREMENT,
    `idtraspaso` INTEGER NOT NULL,
    `idlugarinventario` INTEGER NOT NULL,
    `traspaso_cantidad` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`idtraspasodetalles`),
    INDEX `idtraspaso` (`idtraspaso`),
    INDEX `idlugarinventario` (`idlugarinventario`),
    CONSTRAINT `idlugarinventario_traspasodetalles`
        FOREIGN KEY (`idlugarinventario`)
        REFERENCES `lugarinventario` (`idlugarinventario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idtraspaso_traspasodetalles`
        FOREIGN KEY (`idtraspaso`)
        REFERENCES `traspaso` (`idinventariolugar`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- udm
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `udm`;

CREATE TABLE `udm`
(
    `idudm` INTEGER NOT NULL AUTO_INCREMENT,
    `udm_nombre` VARCHAR(45) NOT NULL,
    `udm_descripcion` VARCHAR(45),
    PRIMARY KEY (`idudm`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- venta
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `venta`;

CREATE TABLE `venta`
(
    `idventa` INTEGER NOT NULL AUTO_INCREMENT,
    `idpaciente` INTEGER NOT NULL,
    `venta_fecha` DATETIME NOT NULL,
    `venta_tipodepago` enum('efectivo','tarjeta debito','tarjeta credito','cheque'),
    `venta_status` enum('pagada','no pagada','pendiente'),
    `venta_facturada` TINYINT(1),
    `venta_registrada` TINYINT(1),
    `venta_total` DECIMAL(10,2),
    `venta_referenciapago` VARCHAR(45),
    PRIMARY KEY (`idventa`),
    INDEX `idpaciente` (`idpaciente`),
    CONSTRAINT `idpaciente_venta`
        FOREIGN KEY (`idpaciente`)
        REFERENCES `paciente` (`idpaciente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
