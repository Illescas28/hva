<?php
namespace Venta\Paciente\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Validator\Explode;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

//// Form ////
use Venta\Paciente\Form\PacienteForm;
use Venta\Venta\Form\VentaForm;
use Venta\Cargoventa\Form\CargoventaForm;

//// Filter ////
use Venta\Paciente\Filter\PacienteFilter;
use Venta\Venta\Filter\VentaFilter;
use Venta\Cargoventa\Filter\CargoventaFilter;

//// Propel ////
use Paciente;
use PacienteQuery;
use BasePeer;

class PacienteController extends AbstractActionController
{
    public function calculaEdad( $fecha ) {
        list($m,$d,$Y) = explode("/",$fecha);
        return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
    }

    /*
    public function calcularEdades($fecha){
        $dias = explode('/', $fecha, 3);
        $dias = mktime(0, 0, 0, $dias[1], $dias[0], $dias[2]);
        $edad = (int)((time()-$dias)/31556926);
        return $edad;
    }
    */

    public function nuevoAction()
    {
        $request = $this->getRequest();

        //Intanciamos nuestro formulario
        $pacienteForm = new PacienteForm();

        if ($request->isPost()) { //Si hicieron POST

            //Instanciamos nuestro filtro
            $pacienteFilter = new PacienteFilter();
            //Le ponemos nuestro filtro a nuesto fromulario
            $pacienteForm->setInputFilter($pacienteFilter->getInputFilter());

            //Le ponemos los datos a nuestro formulario
            $pacienteForm->setData($request->getPost());

            //Validamos nuestro formulario
            if($pacienteForm->isValid()){
                //Instanciamos un nuevo objeto de nuestro objeto Paciente
                $paciente = new Paciente();

                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Paciente
                foreach ($pacienteForm->getData() as $pacienteKey => $pacienteValue){
                    if($pacienteKey != 'pacientefacturacion_rfc'){
                        $paciente->setByName($pacienteKey, $pacienteValue, \BasePeer::TYPE_FIELDNAME);
                    }
                }
                //Guardamos en nuestra base de datos
                $paciente->save();

                // Si nos mandan RFC
                if($request->getPost()->pacientefacturacion_rfc != null){
                    $pacientefacturacion = new \Pacientefacturacion();
                    $pacientefacturacion->setIdpaciente($paciente->getIdpaciente());
                    $pacientefacturacion->setPacientefacturacionCalle($paciente->getPacienteCalle());
                    $pacientefacturacion->setPacientefacturacionNoexterior($paciente->getPacienteNoexterior());
                    $pacientefacturacion->setPacientefacturacionNointerior($paciente->getPacienteNointerior());
                    $pacientefacturacion->setPacientefacturacionColonia($paciente->getPacienteColonia());
                    $pacientefacturacion->setPacientefacturacionCiudad($paciente->getPacienteCiudad());
                    $pacientefacturacion->setPacientefacturacionCodigopostal($paciente->getPacienteCodigopostal());
                    $pacientefacturacion->setPacientefacturacionEstado($paciente->getPacienteEstado());
                    $pacientefacturacion->setPacientefacturacionPais($paciente->getPacientePais());
                    $pacientefacturacion->setPacientefacturacionRfc($request->getPost()->pacientefacturacion_rfc);
                    $pacientefacturacion->save();
                }

                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Paciente guardado exitosamente!');
                $pacienteQuery = PacienteQuery::create()->filterByIdpaciente($paciente->getIdpaciente())->findOne();
                return new ViewModel(array(
                    'pacienteQuery' => $pacienteQuery,
                    'pacienteForm' => $pacienteForm,
                    'flashMessages' => $this->flashMessenger()->getMessages(),
                ));

                //Redireccionamos a nuestro list
                //return $this->redirect()->toRoute('pacientes');
            }
        }

        return new ViewModel(array(
            'pacienteForm' => $pacienteForm,
        ));
    }

    public function listarAction()
    {
        $ventasQuery = \VentaQuery::create()->find();
        $ventasArray = array();
        foreach($ventasQuery as $ventasValue){
            array_push($ventasArray, $ventasValue);
        }

        return new ViewModel(array(
            'ventas' => $ventasArray,
        ));

    }

    public function asignarAction(){

        $pacienteQuery = \PacienteQuery::create()->filterByPacienteNombre('Publico')->filterByPacienteAp('en')->filterByPacienteAm('general')->findOne();
        $id = $pacienteQuery->getIdpaciente();

        $request = $this->getRequest();

        // Start Actualizar consulta_status = pagada
        if($request->getPost()->subTotalVenta == "0"){
            if(\VentaQuery::create()->filterByIdventa($request->getPost()->idventa)->exists()){

                $ventaActualizarStatus = \VentaQuery::create()->filterByIdventa($request->getPost()->idventa)->findOne();
                $ventaActualizarStatus->setVentaStatus($request->getPost()->venta_status)->setVentaReferenciapago($request->getPost()->venta_referenciapago)->setVentaTipodepago($request->getPost()->venta_tipodepago)/*->setConsultaPagadaen(date('Y-m-d H:i:s'))*/->setVentaFacturada(0)->setVentaTotal($request->getPost()->venta_total)->save();
                $ventaArray = $ventaActualizarStatus->toArray(BasePeer::TYPE_FIELDNAME);
                return new JsonModel(array(
                    'ventaArray' => $ventaArray,
                ));
            }
        }
        // End Actualizar consulta_status = pagada

        // Start Cancelar Venta
        if($request->getPost()->ecancelar == "true"){
            if(\VentaQuery::create()->filterByIdventa($request->getPost()->idventa)->exists()){
                \VentaQuery::create()->filterByIdventa($request->getPost()->idventa)->delete();
                return new JsonModel(array(
                    'ventaEliminada' => true,
                ));
            }
        }
        // End Cancelar Venta

        // Start Eliminar cargoventa
        if($request->getPost()->idcargoventa){
            if($request->getPost()->eliminar_cargoventa_tipo == 'articulo'){
                if(\CargoventaQuery::create()->filterByIdcargoventa($request->getPost()->idcargoventa)->exists()){

                    $cargoventaEliminado = \CargoventaQuery::create()->filterByIdcargoventa($request->getPost()->idcargoventa)->findOne();
                    $lugarinventarioEntity = $cargoventaEliminado->getLugarinventario();
                    $cantidad = $lugarinventarioEntity->getLugarinventarioCantidad();
                    $lugarinventarioEntity->setLugarinventarioCantidad($cantidad+$request->getPost()->cantidad);
                    $lugarinventarioEntity->save();
                    $cargoventaEliminadoArray = array();
                    if($cargoventaEliminado->getIdlugarinventario() != null){
                        $articulovarianteEliminado = $cargoventaEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();

                        $propiedadvalorNombreEliminado = null;
                        foreach($articulovarianteEliminado->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEliminado){
                            $propiedadEliminadoQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEliminado->getIdpropiedad())->findOne();
                            $propiedadvalorEliminadoQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEliminado->getIdpropiedadvalor())->findOne();
                            $propiedadvalorNombreEliminado .= $propiedadEliminadoQuery->getPropiedadNombre() . " " . $propiedadvalorEliminadoQuery->getPropiedadvalorNombre(). " ";
                        }
                        $cargoventaEliminado = array(
                            'idcargoventa' => $cargoventaEliminado->getIdcargoventa(),
                            'idventa' => $cargoventaEliminado->getIdventa(),
                            'status' => $cargoventaEliminado->getVenta()->getVentaStatus(),
                            'cantidad' => $cargoventaEliminado->getCantidad(),
                            'articulo' => $cargoventaEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                            'descripcion' => utf8_encode($propiedadvalorNombreEliminado),
                            'salida' => $cargoventaEliminado->getLugarinventario()->getLugar()->getLugarNombre(),
                            'fechahora' => $cargoventaEliminado->getCargoventaFecha(),
                            'precio' => $cargoventaEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                            'subtotal' => $cargoventaEliminado->getMonto(),
                        );
                        array_push($cargoventaEliminadoArray, $cargoventaEliminado);
                    }
                    \CargoventaQuery::create()->filterByIdcargoventa($request->getPost()->idcargoventa)->delete();


                    $cargoventaQuery = \CargoventaQuery::create()->filterByIdventa($request->getPost()->idventa)->find();
                    if($cargoventaQuery->getArrayCopy()){
                        $cargoventaArray = array();
                        foreach($cargoventaQuery as $cargoventaEntity){
                            if($cargoventaEntity->getIdlugarinventario() != null){
                                $articulovarianteEntity = $cargoventaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();

                                $propiedadvalorNombre = null;
                                foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                    $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                    $propiedadvalorNombre .= $propiedadQuery->getPropiedadNombre() . " " . $propiedadvalorQuery->getPropiedadvalorNombre(). " ";
                                }
                                $cargoventa = array(
                                    'idcargoventa' => $cargoventaEntity->getIdcargoventa(),
                                    'idventa' => $cargoventaEntity->getIdventa(),
                                    'status' => $cargoventaEntity->getVenta()->getVentaStatus(),
                                    'cantidad' => $cargoventaEntity->getCantidad(),
                                    'articulo' => $cargoventaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                    'descripcion' => utf8_encode($propiedadvalorNombre),
                                    'salida' => $cargoventaEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                    'fechahora' => $cargoventaEntity->getCargoventaFecha(),
                                    'precio' => $cargoventaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                    'subtotal' => $cargoventaEntity->getMonto(),
                                );
                                array_push($cargoventaArray, $cargoventa);
                            }
                        }
                    }
                    return new JsonModel(array(
                        'cargoventaArray' => $cargoventaArray,
                        'cargoventaEliminadoArray' => $cargoventaEliminadoArray,
                    ));
                }
            }
            if($request->getPost()->eliminar_cargoventa_tipo == 'servicio'){
                if(\CargoventaQuery::create()->filterByIdcargoventa($request->getPost()->idcargoventa)->exists()){

                    $cargoventaEliminado = \CargoventaQuery::create()->filterByIdcargoventa($request->getPost()->idcargoventa)->findOne();
                    $cargoventaEliminadoArray = array();
                    if($cargoventaEliminado->getIdservicio() != null){
                        $cargoventaEliminado = array(
                            'idcargoventa' => $cargoventaEliminado->getIdcargoventa(),
                            'idventa' => $cargoventaEliminado->getIdventa(),
                            'status' => $cargoventaEliminado->getVenta()->getVentaStatus(),
                            'cantidad' => $cargoventaEliminado->getCantidad(),
                            'servicio' => $cargoventaEliminado->getServicio()->getServicioNombre(),
                            'descripcion' => $cargoventaEliminado->getServicio()->getServicioDescripcion(),
                            'precio' => $cargoventaEliminado->getServicio()->getServicioPrecio(),
                            'subtotal' => $cargoventaEliminado->getMonto(),
                            'fechahora' => $cargoventaEliminado->getCargoventaFecha(),
                        );
                        array_push($cargoventaEliminadoArray, $cargoventaEliminado);
                    }
                    \CargoventaQuery::create()->filterByIdcargoventa($request->getPost()->idcargoventa)->delete();

                    $cargoventaQuery = \CargoventaQuery::create()->filterByIdventa($request->getPost()->idventa)->find();
                    if($cargoventaQuery->getArrayCopy()){
                        $cargoventaArray = array();
                        foreach($cargoventaQuery as $cargoventaEntity){
                            if($cargoventaEntity->getIdservicio() != null){
                                $cargoventa = array(
                                    'idcargoventa' => $cargoventaEntity->getIdcargoventa(),
                                    'idventa' => $cargoventaEntity->getIdventa(),
                                    'status' => $cargoventaEntity->getVenta()->getVentaStatus(),
                                    'cantidad' => $cargoventaEntity->getCantidad(),
                                    'servicio' => $cargoventaEntity->getServicio()->getServicioNombre(),
                                    'descripcion' => $cargoventaEntity->getServicio()->getServicioDescripcion(),
                                    'precio' => $cargoventaEntity->getServicio()->getServicioPrecio(),
                                    'subtotal' => $cargoventaEntity->getMonto(),
                                    'fechahora' => date('Y-m-d H:i:s'),
                                );
                                array_push($cargoventaArray, $cargoventa);
                            }
                        }
                    }

                    return new JsonModel(array(
                        'cargoventaArray' => $cargoventaArray,
                        'cargoventaEliminadoArray' => $cargoventaEliminadoArray,
                    ));
                }
            }
        }
        // End Eliminar cargoventa

        if($id){
            $paciente = PacienteQuery::create()->filterByIdpaciente($id)->findOne();

            //Intanciamos nuestro formulario venta
            $ventaForm = new VentaForm();
            //Instanciamos un nuevo objeto de nuestro objeto Paciente
            $venta = new \Venta();

            //Intanciamos nuestro formulario cargoventa "SIN PARAMETROS"
            $cargoventaForm = new CargoventaForm();

            if($request->getPost()->cargoventaarticulo_by != null){

                if($request->getPost()->cargoventaarticulo_by == 'nombre'){
                    if($request->getPost()->busquedaArticulo != null){
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()
                            ->useArticulovarianteQuery()
                            ->useArticuloQuery()
                            ->filterBy(BasePeer::translateFieldname('articulo', 'articulo_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaArticulo.'%', \Criteria::LIKE)
                            ->endUse()
                            ->endUse()
                            ->find();
                    }else{
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()->find();
                    }
                }
                if($request->getPost()->cargoventaarticulo_by == 'código de barras'){
                    if($request->getPost()->busquedaArticulo != null){
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()
                            ->useArticulovarianteQuery()
                            ->filterBy(BasePeer::translateFieldname('articulovariante', 'articulovariante_codigobarras', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaArticulo.'%', \Criteria::LIKE)
                            ->endUse()
                            ->find();
                    }else{
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()->find();
                    }
                }
                if($request->getPost()->cargoventaarticulo_by == 'proveedor'){
                    if($request->getPost()->busquedaArticulo != null){
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()
                            ->useOrdencompraQuery()
                            ->useProveedorQuery()
                            ->filterBy(BasePeer::translateFieldname('proveedor', 'proveedor_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaArticulo.'%', \Criteria::LIKE)
                            ->endUse()
                            ->endUse()
                            ->find();
                    }else{
                        $ordencompradetalleQuery = \OrdencompradetalleQuery::create()->find();
                    }
                }

                if($ordencompradetalleQuery->getArrayCopy()){
                    $ordencompradetalleArray = array();
                    $lugarNombre = null;
                    foreach($ordencompradetalleQuery as $ordencompradetalleEntity){
                        /*
                        foreach($ordencompradetalleEntity->getLugarinventarios()->getArrayCopy() as $lugarinventarioEntity){
                            $idlugarinventario = $lugarinventarioEntity->getIdlugarinventario();
                            $lugarNombre = $lugarinventarioEntity->getLugar()->getLugarNombre();
                            $lugarinventarioCantidad = $lugarinventarioEntity->getLugarinventarioCantidad();
                            $articuloNombre = $ordencompradetalleEntity->getArticulovariante()->getArticulo()->getArticuloNombre();

                            foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                            }
                            foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                            }
                        }
                        */

                        foreach($ordencompradetalleEntity->getLugarinventarios()->getArrayCopy() as $lugarinventarioEntity){
                            $idlugarinventario = $lugarinventarioEntity->getIdlugarinventario();
                            $lugarNombre = $lugarinventarioEntity->getLugar()->getLugarNombre();
                            $lugarinventarioCantidad = $lugarinventarioEntity->getLugarinventarioCantidad();
                            $articuloNombre = $ordencompradetalleEntity->getArticulovariante()->getArticulo()->getArticuloNombre();

                            /*
                            foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                                array_push($propiedadArray, $propiedadNombre);

                            }
                            foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                                array_push($propiedadValorArray, $propiedadvalorNombre);
                            }
                            */

                            $propiedadvalorNombre = null;
                            foreach($ordencompradetalleEntity->getArticulovariante()->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                $propiedadvalorNombre .= $propiedadQuery->getPropiedadNombre() . " " . $propiedadvalorQuery->getPropiedadvalorNombre(). " ";
                            }
                        }

                        $ordencompradetalle = array(
                            'idordencompradetalle' => $ordencompradetalleEntity->getIdordencompradetalle(),
                            'idlugarinventario' => $idlugarinventario,
                            'cargoventa_tipo' => 'articulo',
                            'cargoventa_fecha' => date('Y-m-d H:i:s'),
                            'ordencompradetalle_caducidad' => $ordencompradetalleEntity->getOrdencompradetalleCaducidad(),
                            'existencia' => $lugarinventarioCantidad,
                            'articulo' => $articuloNombre,
                            'descripcion' => utf8_encode($propiedadvalorNombre),
                            'precio' => $ordencompradetalleEntity->getArticulovariante()->getArticulovariantePrecio(),
                            'salida' => $lugarNombre,
                        );

                        array_push($ordencompradetalleArray, $ordencompradetalle);
                    }
                }


                return new JsonModel(array(
                    'ordencompradetalleArray' => $ordencompradetalleArray
                ));
            }

            if($request->getPost()->cargoventaservicio_by != null){

                if($request->getPost()->cargoventaservicio_by == 'nombre'){

                    if($request->getPost()->busquedaServicio != null){
                        $servicioQuery = \ServicioQuery::create()
                            ->filterBy(BasePeer::translateFieldname('servicio', 'servicio_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaServicio.'%', \Criteria::LIKE)
                            ->find();
                    }else{
                        $servicioQuery = \ServicioQuery::create()->find();
                    }
                }

                if($servicioQuery->getArrayCopy()){
                    $servicioArray = array();
                    foreach($servicioQuery as $servicioEntity){
                        $servicio = array(
                            'idservicio' => $servicioEntity->getIdservicio(),
                            'cargoventa_tipo' => 'servicio',
                            'cargoventa_fecha' => date('Y-m-d H:i:s'),
                            'servicio_nombre' => $servicioEntity->getServicioNombre(),
                            'servicio_descripcion' => $servicioEntity->getServicioDescripcion(),
                            'servicio_precio' => $servicioEntity->getServicioPrecio(),
                        );
                        array_push($servicioArray, $servicio);
                    }
                }

                return new JsonModel(array(
                    'servicioArray' => $servicioArray
                ));
            }
            // Fin Preparando Form Cargoventa

            if ($request->isPost()) { //Si hicieron POST
                //Instanciamos nuestro filtro
                $ventaFilter = new VentaFilter();
                //Le ponemos nuestro filtro a nuesto fromulario
                $ventaForm->setInputFilter($ventaFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $ventaForm->setData($request->getPost());

                //Validamos nuestro formulario
                if($ventaForm->isValid()){

                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Venta
                    foreach ($ventaForm->getData() as $ventaKey => $ventaValue){
                        $venta->setByName($ventaKey, $ventaValue, \BasePeer::TYPE_FIELDNAME);
                        $venta->setVentaStatus('no pagada');
                    }
                    //Guardamos en nuestra base de datos
                    $venta->save();

                    $ventaArray = \VentaQuery::create()->filterByIdventa($venta->getIdventa())->findOne()->toArray(BasePeer::TYPE_FIELDNAME);


                    return new JsonModel(array(
                        'ventaArray' => $ventaArray,
                    ));
                    //Redireccionamos a nuestro list
                    //return $this->redirect()->toRoute('pacientes');
                }

                //Instanciamos nuestro filtro
                $cargoventaFilter = new CargoventaFilter();
                //Le ponemos nuestro filtro a nuesto fromulario
                $cargoventaForm->setInputFilter($cargoventaFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $cargoventaForm->setData($request->getPost());

                //Validamos nuestro formulario
                if($cargoventaForm->isValid()){

                    $cargoventaArray = array();
                    if($request->getPost()->cargoventa_tipo == 'articulo'){

                        //Instanciamos un nuevo objeto de nuestro objeto Paciente
                        $cargoventa = new \Cargoventa();

                        //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Venta
                        foreach ($cargoventaForm->getData() as $cargoventaKey => $cargoventaValue){
                            if($cargoventaKey != 'cargoventaarticulo_by' && $cargoventaKey != 'cargoventaservicio_by' && $cargoventaKey != 'busquedaArticulo' && $cargoventaKey != 'busquedaServicio'){
                                $cargoventa->setByName($cargoventaKey, $cargoventaValue, \BasePeer::TYPE_FIELDNAME);
                            }
                        }
                        // Validar precio, caducidad y existencia de ordencompradetalle
                        $existencia = $cargoventa->getLugarinventario()->getLugarinventarioCantidad();
                        $caducidad = $cargoventa->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetalleCaducidad();
                        $precio = $cargoventa->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio();

                        if($existencia > 0){
                            if($caducidad < date('Y-m-d')){
                                $cargoventa->setMonto($request->getPost()->cantidad*$precio);
                            }
                        }

                        //Guardamos en nuestra base de datos
                        $cargoventa->save();

                        $lugarinventarioQuery = $cargoventa->getLugarinventario();
                        $lugarinventarioQuery->setLugarinventarioCantidad($lugarinventarioQuery->getLugarinventarioCantidad()-$cargoventa->getCantidad());
                        $lugarinventarioQuery->save();

                        $cargoventaQuery = \CargoventaQuery::create()->filterByIdventa($cargoventa->getIdventa())->find();
                        if($cargoventaQuery->getArrayCopy()){
                            foreach($cargoventaQuery as $cargoventaEntity){
                                if($cargoventaEntity->getIdlugarinventario() != null){
                                    $articulovarianteEntity = $cargoventaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();
                                    $propiedadvalorNombre = null;
                                    foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                        $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                        $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                        $propiedadvalorNombre .= $propiedadQuery->getPropiedadNombre() . " " . $propiedadvalorQuery->getPropiedadvalorNombre(). " ";
                                    }

                                    $cargoventa = array(
                                        'idcargoventa' => $cargoventaEntity->getIdcargoventa(),
                                        'idventa' => $cargoventaEntity->getIdventa(),
                                        'venta_status' => $cargoventaEntity->getVenta()->getVentaStatus(),
                                        'cantidad' => $cargoventaEntity->getCantidad(),
                                        'articulo' => $cargoventaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                        'descripcion' => utf8_encode($propiedadvalorNombre),
                                        'salida' => $cargoventaEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                        'fechahora' => $cargoventaEntity->getCargoventaFecha(),
                                        'precio' => $cargoventaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                        'subtotal' => $cargoventaEntity->getMonto(),
                                    );
                                    array_push($cargoventaArray, $cargoventa);
                                }
                            }
                        }
                    }
                    if($request->getPost()->cargoventa_tipo == 'servicio'){

                        //Instanciamos un nuevo objeto de nuestro objeto Paciente
                        $cargoventa = new \Cargoventa();

                        //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Venta
                        foreach ($cargoventaForm->getData() as $cargoventaKey => $cargoventaValue){
                            if($cargoventaKey != 'cargoventaarticulo_by' && $cargoventaKey != 'cargoventaservicio_by' && $cargoventaKey != 'busquedaArticulo' && $cargoventaKey != 'busquedaServicio'){
                                $cargoventa->setByName($cargoventaKey, $cargoventaValue, \BasePeer::TYPE_FIELDNAME);
                            }
                        }

                        $precio = $cargoventa->getServicio()->getServicioPrecio();
                        $cargoventa->setMonto($request->getPost()->cantidad*$precio);
                        //Guardamos en nuestra base de datos
                        $cargoventa->save();

                        $cargoventaQuery = \CargoventaQuery::create()->filterByIdventa($cargoventa->getIdventa())->find();
                        if($cargoventaQuery->getArrayCopy()){
                            foreach($cargoventaQuery as $cargoventaEntity){
                                if($cargoventaEntity->getIdservicio() != null){
                                    $cargoventa = array(
                                        'idcargoventa' => $cargoventaEntity->getIdcargoventa(),
                                        'idventa' => $cargoventaEntity->getIdventa(),
                                        'venta_status' => $cargoventaEntity->getVenta()->getVentaStatus(),
                                        'cantidad' => $cargoventaEntity->getCantidad(),
                                        'servicio' => $cargoventaEntity->getServicio()->getServicioNombre(),
                                        'descripcion' => $cargoventaEntity->getServicio()->getServicioDescripcion(),
                                        'precio' => $cargoventaEntity->getServicio()->getServicioPrecio(),
                                        'subtotal' => $cargoventaEntity->getMonto(),
                                        'fechahora' => date('Y-m-d H:i:s'),
                                    );
                                    array_push($cargoventaArray, $cargoventa);
                                }
                            }
                        }
                    }

                    return new JsonModel(array(
                        'cargoventaArray' => $cargoventaArray
                    ));
                }/* else {
                    $messageArray = array();
                    foreach ($cargoventaForm->getMessages() as $key => $value){
                        foreach($value as $val){
                            //Obtenemos el valor de la columna con error
                            $message = $key.' '.$val;
                            array_push($messageArray, $message);
                        }
                    }
                    var_dump($messageArray);
                    return new ViewModel(array(
                        'input_error' => $messageArray
                    ));
                }*/

            }
            return new ViewModel(array(
                'pacienteEntity' => $paciente,
                'ventaForm' => $ventaForm,
                'cargoventaForm' => $cargoventaForm,
            ));

        }else{
            return $this->redirect()->toRoute('pacientes');
        }
    }

    public function editarAction()
    {

        $request = $this->getRequest();

        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id paciente que se quiere modificar exista
        if(!PacienteQuery::create()->filterByIdpaciente($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('pacientes');
        }

        //Instanciamos nuestro paciente
        $paciente = PacienteQuery::create()->filterByIdpaciente($id)->findOne();

        //Instanciamos nuestro formulario
        $pacienteForm = new PacienteForm();

        //Le ponemos los datos de nuestro paciente a nuestro formulario
        $pacienteForm->setData($paciente->toArray(BasePeer::TYPE_FIELDNAME));

        if ($request->isPost()) { //Si hicieron POST

            //Instanciamos nuestro filtro
            $pacienteFilter = new PacienteFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $pacienteForm->setInputFilter($pacienteFilter->getInputFilter());

            //Le ponemos los datos a nuestro formulario
            $pacienteForm->setData($request->getPost());

            //Validamos nuestro formulario
            if($pacienteForm->isValid()){

                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Paciente
                foreach ($pacienteForm->getData() as $pacienteKey => $pacienteValue){
                    if($pacienteKey != 'pacientefacturacion_rfc'){
                        $paciente->setByName($pacienteKey, $pacienteValue, \BasePeer::TYPE_FIELDNAME);
                    }
                }

                //Guardamos en nuestra base de datos
                $paciente->save();

                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Paciente guardado exitosamente!');

                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('pacientes');

            }
        }

        return new ViewModel(array(
            'id'  => $id,
            'pacienteForm' => $pacienteForm,
        ));
    }

    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');

        //Verificamos que el Id medico que se quiere eliminar exista
        if(\VentaQuery::create()->filterByIdventa($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('venta');
        }



        //Instanciamos nuestro medico
        $venta = \VentaQuery::create()->findPk($id);

        $venta->delete();

        //Agregamos un mensaje
        $this->flashMessenger()->addMessage('Venta eliminado exitosamente!');

        //Redireccionamos a nuestro list
        return $this->redirect()->toRoute('venta');
    }
    
    public  function getpacientesAction(){
        $collection = \PacienteQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        
        $autcomplete = array();
        
        foreach ($collection as $entity){
            $tmp['value'] = $entity["idpaciente"];
            $tmp['label'] = $entity["paciente_nombre"].' '.$entity['paciente_ap'].' '.$entity['paciente_am'];
            $conceptos_autcomplete[] = $tmp;
        }
        return $this->getResponse()->setContent(\Zend\Json\Json::encode($conceptos_autcomplete));
    }
}