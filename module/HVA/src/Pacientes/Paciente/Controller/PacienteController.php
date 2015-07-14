<?php
namespace Pacientes\Paciente\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Validator\Explode;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

//// Form ////
use Pacientes\Paciente\Form\PacienteForm;
use Pacientes\Consulta\Form\ConsultaForm;
use Pacientes\Admision\Form\AdmisionForm;
use Pacientes\Cargoconsulta\Form\CargoconsultaForm;
use Pacientes\Cargoadmision\Form\CargoadmisionForm;

//// Filter ////
use Pacientes\Paciente\Filter\PacienteFilter;
use Pacientes\Consulta\Filter\ConsultaFilter;
use Pacientes\Admision\Filter\AdmisionFilter;
use Pacientes\Cargoconsulta\Filter\CargoconsultaFilter;
use Pacientes\Cargoadmision\Filter\CargoadmisionFilter;

//// Form ////
use Pacientes\Admisionanticipo\Form\AdmisionanticipoForm;
//// Filter ////
use Pacientes\Admisionanticipo\Filter\AdmisionanticipoFilter;

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
        $pacienteQuery = \PacienteQuery::create()->find();
        $pacienteArray = array();
        foreach($pacienteQuery as $pacienteValue){
            $consultaQuery = \ConsultaQuery::create()->filterByIdpaciente($pacienteValue->getIdpaciente())->findOne();
            if(!$consultaQuery){
                $paciente = \PacienteQuery::create()->filterByIdpaciente($pacienteValue->getIdpaciente())->findOne();
            }
            $admisionQuery = \AdmisionQuery::create()->filterByIdpaciente($pacienteValue->getIdpaciente())->findOne();
            if(!$admisionQuery){
                $paciente = \PacienteQuery::create()->filterByIdpaciente($pacienteValue->getIdpaciente())->findOne();
            }
            if($paciente != null){
                array_push($pacienteArray, $paciente);
            }
        }
        $this->flashMessenger()->addMessage('Paciente guardado exitosamente!');

        return new ViewModel(array(
            'pacientes' => $pacienteArray,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        /*
        // Instanciamos nuestro formulario pacienteForm
        $pacienteQuery = new PacienteQuery();
        $result = $pacienteQuery->paginate($page,$limit);
        $dataCollection = $result->getResults();
        $this->flashMessenger()->addMessage('Paciente guardado exitosamente!');

        return new ViewModel(array(
            'pacientes' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        */
    }

    public function actualesAction()
    {
        $pacienteQuery = \PacienteQuery::create()->find();
        $consultaArray = array();
        $admisionArray = array();
        foreach($pacienteQuery as $pacienteValue){
            $consultaQuery = \ConsultaQuery::create()->filterByIdpaciente($pacienteValue->getIdpaciente())->findOne();
            if($consultaQuery){
                array_push($consultaArray, $consultaQuery);
            }
            $admisionQuery = \AdmisionQuery::create()->filterByIdpaciente($pacienteValue->getIdpaciente())->findOne();
            if($admisionQuery){
                array_push($admisionArray, $admisionQuery);
            }
        }

        $consultaCollection = $consultaArray;
        $admisionCollection = $admisionArray;

        return new ViewModel(array(
            'pacientesConsulta' => $consultaCollection,
            'pacientesAdmision' => $admisionCollection,
        ));
    }

    public function detallesAction()
    {
        $request = $this->getRequest();

        $id = (int) $this->params()->fromRoute('id', 0);
        if($id){


            return new ViewModel(array(

            ));
        }else{
            return $this->redirect()->toRoute('pacientes');
        }
    }

    public function asignarAction(){

        $request = $this->getRequest();

        // Start Eliminar cargoadmision
        if($request->getPost()->idcargoadmision){
            if($request->getPost()->eliminar_cargoadmision_tipo == 'articulo'){
                if(\CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->exists()){

                    $cargoadmisionEliminado = \CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->findOne();
                    $lugarinventarioEntity = $cargoadmisionEliminado->getLugarinventario();
                    $cantidad = $lugarinventarioEntity->getLugarinventarioCantidad();
                    $lugarinventarioEntity->setLugarinventarioCantidad($cantidad+$request->getPost()->cantidad);
                    $lugarinventarioEntity->save();
                    $cargoadmisionEliminadoArray = array();
                    if($cargoadmisionEliminado->getIdlugarinventario() != null){
                        $articulovarianteEliminado = $cargoadmisionEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();
                        foreach($articulovarianteEliminado->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEliminado){
                            $propiedadEliminadoQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEliminado->getIdpropiedad())->findOne();
                            $propiedadNombreEliminado = $propiedadEliminadoQuery->getPropiedadNombre();
                        }
                        foreach($articulovarianteEliminado->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEliminado){
                            $propiedadvalorEliminadoQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEliminado->getIdpropiedadvalor())->findOne();
                            $propiedadvalorNombreEliminado = $propiedadvalorEliminadoQuery->getPropiedadvalorNombre();
                        }
                        $cargoadmisionEliminado = array(
                            'idcargoadmision' => $cargoadmisionEliminado->getIdcargoadmision(),
                            'idadmision' => $cargoadmisionEliminado->getIdadmision(),
                            'status' => $cargoadmisionEliminado->getAdmision()->getAdmisionStatus(),
                            'cargoadmision_cantidad' => $cargoadmisionEliminado->getCargoadmisionCantidad(),
                            'articulo' => $cargoadmisionEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                            'descripcion' => utf8_encode($propiedadNombreEliminado." ".$propiedadvalorNombreEliminado),
                            'salida' => $cargoadmisionEliminado->getLugarinventario()->getLugar()->getLugarNombre(),
                            'fechahora' => $cargoadmisionEliminado->getCargoadmisionFecha(),
                            'precio' => $cargoadmisionEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                            'subtotal' => $cargoadmisionEliminado->getCargoadmisionMonto(),
                        );
                        array_push($cargoadmisionEliminadoArray, $cargoadmisionEliminado);
                    }
                    \CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->delete();


                    $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($request->getPost()->idadmision)->find();
                    if($cargoadmisionQuery->getArrayCopy()){
                        $cargoadmisionArray = array();
                        foreach($cargoadmisionQuery as $cargoadmisionEntity){
                            if($cargoadmisionEntity->getIdlugarinventario() != null){
                                $articulovarianteEntity = $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();
                                foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                    $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                                }
                                foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                    $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                                }
                                $cargoadmision = array(
                                    'idcargoadmision' => $cargoadmisionEntity->getIdcargoadmision(),
                                    'idadmision' => $cargoadmisionEntity->getIdadmision(),
                                    'status' => $cargoadmisionEntity->getAdmision()->getAdmisionStatus(),
                                    'cargoadmision_cantidad' => $cargoadmisionEntity->getCargoadmisionCantidad(),
                                    'articulo' => $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                    'descripcion' => utf8_encode($propiedadNombre." ".$propiedadvalorNombre),
                                    'salida' => $cargoadmisionEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                    'fechahora' => $cargoadmisionEntity->getCargoadmisionFecha(),
                                    'precio' => $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                    'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                                );
                                array_push($cargoadmisionArray, $cargoadmision);
                            }
                        }
                    }
                    return new JsonModel(array(
                        'cargoadmisionArray' => $cargoadmisionArray,
                        'cargoadmisionEliminadoArray' => $cargoadmisionEliminadoArray,
                    ));
                }
            }
            if($request->getPost()->eliminar_cargoadmision_tipo == 'servicio'){
                if(\CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->exists()){

                    $cargoadmisionEliminado = \CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->findOne();
                    $cargoadmisionEliminadoArray = array();
                    if($cargoadmisionEliminado->getIdservicio() != null){
                        $cargoadmisionEliminado = array(
                            'idcargoadmision' => $cargoadmisionEliminado->getIdcargoadmision(),
                            'idadmision' => $cargoadmisionEliminado->getIdadmision(),
                            'status' => $cargoadmisionEliminado->getAdmision()->getAdmisionStatus(),
                            'cargoadmision_cantidad' => $cargoadmisionEliminado->getCargoadmisionCantidad(),
                            'servicio' => $cargoadmisionEliminado->getServicio()->getServicioNombre(),
                            'descripcion' => $cargoadmisionEliminado->getServicio()->getServicioDescripcion(),
                            'precio' => $cargoadmisionEliminado->getServicio()->getServicioPrecio(),
                            'subtotal' => $cargoadmisionEliminado->getCargoadmisionMonto(),
                            'fechahora' => $cargoadmisionEliminado->getCargoadmisionFecha(),
                        );
                        array_push($cargoadmisionEliminadoArray, $cargoadmisionEliminado);
                    }
                    \CargoadmisionQuery::create()->filterByIdcargoadmision($request->getPost()->idcargoadmision)->delete();

                    $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($request->getPost()->idadmision)->find();
                    if($cargoadmisionQuery->getArrayCopy()){
                        $cargoadmisionArray = array();
                        foreach($cargoadmisionQuery as $cargoadmisionEntity){
                            if($cargoadmisionEntity->getIdservicio() != null){
                                $cargoadmision = array(
                                    'idcargoadmision' => $cargoadmisionEntity->getIdcargoadmision(),
                                    'idadmision' => $cargoadmisionEntity->getIdadmision(),
                                    'status' => $cargoadmisionEntity->getAdmision()->getAdmisionStatus(),
                                    'cargoadmision_cantidad' => $cargoadmisionEntity->getCargoadmisionCantidad(),
                                    'servicio' => $cargoadmisionEntity->getServicio()->getServicioNombre(),
                                    'descripcion' => $cargoadmisionEntity->getServicio()->getServicioDescripcion(),
                                    'precio' => $cargoadmisionEntity->getServicio()->getServicioPrecio(),
                                    'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                                    'fechahora' => date('Y-m-d H:i:s'),
                                );
                                array_push($cargoadmisionArray, $cargoadmision);
                            }
                        }
                    }

                    return new JsonModel(array(
                        'cargoadmisionArray' => $cargoadmisionArray,
                        'cargoadmisionEliminadoArray' => $cargoadmisionEliminadoArray,
                    ));
                }
            }
        }
        // End Eliminar cargoadmision

        // Start Eliminar cargoconsulta
        if($request->getPost()->idcargoconsulta){
            if($request->getPost()->eliminar_cargoconsulta_tipo == 'articulo'){
                if(\CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->exists()){

                    $cargoconsultaEliminado = \CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->findOne();
                    $lugarinventarioEntity = $cargoconsultaEliminado->getLugarinventario();
                    $cantidad = $lugarinventarioEntity->getLugarinventarioCantidad();
                    $lugarinventarioEntity->setLugarinventarioCantidad($cantidad+$request->getPost()->cantidad);
                    $lugarinventarioEntity->save();
                    $cargoconsultaEliminadoArray = array();
                    if($cargoconsultaEliminado->getIdlugarinventario() != null){
                        $articulovarianteEliminado = $cargoconsultaEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();
                        foreach($articulovarianteEliminado->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEliminado){
                            $propiedadEliminadoQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEliminado->getIdpropiedad())->findOne();
                            $propiedadNombreEliminado = $propiedadEliminadoQuery->getPropiedadNombre();
                        }
                        foreach($articulovarianteEliminado->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEliminado){
                            $propiedadvalorEliminadoQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEliminado->getIdpropiedadvalor())->findOne();
                            $propiedadvalorNombreEliminado = $propiedadvalorEliminadoQuery->getPropiedadvalorNombre();
                        }
                        $cargoconsultaEliminado = array(
                            'idcargoconsulta' => $cargoconsultaEliminado->getIdcargoconsulta(),
                            'idconsulta' => $cargoconsultaEliminado->getIdconsulta(),
                            'status' => $cargoconsultaEliminado->getConsulta()->getConsultaStatus(),
                            'cantidad' => $cargoconsultaEliminado->getCantidad(),
                            'articulo' => $cargoconsultaEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                            'descripcion' => utf8_encode($propiedadNombreEliminado." ".$propiedadvalorNombreEliminado),
                            'salida' => $cargoconsultaEliminado->getLugarinventario()->getLugar()->getLugarNombre(),
                            'fechahora' => $cargoconsultaEliminado->getCargoconsultaFecha(),
                            'precio' => $cargoconsultaEliminado->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                            'subtotal' => $cargoconsultaEliminado->getMonto(),
                        );
                        array_push($cargoconsultaEliminadoArray, $cargoconsultaEliminado);
                    }
                    \CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->delete();


                    $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($request->getPost()->idconsulta)->find();
                    if($cargoconsultaQuery->getArrayCopy()){
                        $cargoconsultaArray = array();
                        foreach($cargoconsultaQuery as $cargoconsultaEntity){
                            if($cargoconsultaEntity->getIdlugarinventario() != null){
                                $articulovarianteEntity = $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();
                                foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                    $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                                }
                                foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                    $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                    $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                                }
                                $cargoconsulta = array(
                                    'idcargoconsulta' => $cargoconsultaEntity->getIdcargoconsulta(),
                                    'idconsulta' => $cargoconsultaEntity->getIdconsulta(),
                                    'status' => $cargoconsultaEntity->getConsulta()->getConsultaStatus(),
                                    'cantidad' => $cargoconsultaEntity->getCantidad(),
                                    'articulo' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                    'descripcion' => utf8_encode($propiedadNombre." ".$propiedadvalorNombre),
                                    'salida' => $cargoconsultaEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                    'fechahora' => $cargoconsultaEntity->getCargoconsultaFecha(),
                                    'precio' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                    'subtotal' => $cargoconsultaEntity->getMonto(),
                                );
                                array_push($cargoconsultaArray, $cargoconsulta);
                            }
                        }
                    }
                    return new JsonModel(array(
                        'cargoconsultaArray' => $cargoconsultaArray,
                        'cargoconsultaEliminadoArray' => $cargoconsultaEliminadoArray,
                    ));
                }
            }
            if($request->getPost()->eliminar_cargoconsulta_tipo == 'servicio'){
                if(\CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->exists()){

                    $cargoconsultaEliminado = \CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->findOne();
                    $cargoconsultaEliminadoArray = array();
                    if($cargoconsultaEliminado->getIdservicio() != null){
                        $cargoconsultaEliminado = array(
                            'idcargoconsulta' => $cargoconsultaEliminado->getIdcargoconsulta(),
                            'idconsulta' => $cargoconsultaEliminado->getIdconsulta(),
                            'status' => $cargoconsultaEliminado->getConsulta()->getConsultaStatus(),
                            'cantidad' => $cargoconsultaEliminado->getCantidad(),
                            'servicio' => $cargoconsultaEliminado->getServicio()->getServicioNombre(),
                            'descripcion' => $cargoconsultaEliminado->getServicio()->getServicioDescripcion(),
                            'precio' => $cargoconsultaEliminado->getServicio()->getServicioPrecio(),
                            'subtotal' => $cargoconsultaEliminado->getMonto(),
                            'fechahora' => $cargoconsultaEliminado->getCargoconsultaFecha(),
                        );
                        array_push($cargoconsultaEliminadoArray, $cargoconsultaEliminado);
                    }
                    \CargoconsultaQuery::create()->filterByIdcargoconsulta($request->getPost()->idcargoconsulta)->delete();

                    $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($request->getPost()->idconsulta)->find();
                    if($cargoconsultaQuery->getArrayCopy()){
                        $cargoconsultaArray = array();
                        foreach($cargoconsultaQuery as $cargoconsultaEntity){
                            if($cargoconsultaEntity->getIdservicio() != null){
                                $cargoconsulta = array(
                                    'idcargoconsulta' => $cargoconsultaEntity->getIdcargoconsulta(),
                                    'idconsulta' => $cargoconsultaEntity->getIdconsulta(),
                                    'status' => $cargoconsultaEntity->getConsulta()->getConsultaStatus(),
                                    'cantidad' => $cargoconsultaEntity->getCantidad(),
                                    'servicio' => $cargoconsultaEntity->getServicio()->getServicioNombre(),
                                    'descripcion' => $cargoconsultaEntity->getServicio()->getServicioDescripcion(),
                                    'precio' => $cargoconsultaEntity->getServicio()->getServicioPrecio(),
                                    'subtotal' => $cargoconsultaEntity->getMonto(),
                                    'fechahora' => date('Y-m-d H:i:s'),
                                );
                                array_push($cargoconsultaArray, $cargoconsulta);
                            }
                        }
                    }

                    return new JsonModel(array(
                        'cargoconsultaArray' => $cargoconsultaArray,
                        'cargoconsultaEliminadoArray' => $cargoconsultaEliminadoArray,
                    ));
                }
            }
        }
        // End Eliminar cargoconsulta

        // Inicio Anticipo Admision
        //Intanciamos nuestro formulario admisionanticipo
        $admisionanticipoForm = new AdmisionanticipoForm();
        //Instanciamos nuestro filtro
        $admisionanticipoFilter = new AdmisionanticipoFilter();
        //Le ponemos nuestro filtro a nuesto fromulario
        $admisionanticipoForm->setInputFilter($admisionanticipoFilter->getInputFilter());

        //Le ponemos los datos a nuestro formulario
        $admisionanticipoForm->setData($request->getPost());

        //Validamos nuestro formulario
        if($admisionanticipoForm->isValid()){

            $admisionanticipo = new \Admisionanticipo();

            //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Admisionanticipo
            foreach ($admisionanticipoForm->getData() as $admisionanticipoKey => $admisionanticipoValue){
                $admisionanticipo->setByName($admisionanticipoKey, $admisionanticipoValue, \BasePeer::TYPE_FIELDNAME);
            }
            $admisionanticipo->setAdmisionanticipoFecha(date('Y-m-d H:i:s'));
            //Guardamos en nuestra base de datos
            $admisionanticipo->save();

            $admisionanticipoArray = \AdmisionanticipoQuery::create()->filterByIdadmisionanticipo($admisionanticipo->getIdadmisionanticipo())->findOne()->toArray(\BasePeer::TYPE_FIELDNAME);

            return new JsonModel(array(
                'admisionanticipoArray' => $admisionanticipoArray,
            ));
        }
        // Fin Anticipo Admision

        // Inicio Pago Admision
        //Intanciamos nuestro formulario admisionanticipo
        $admisionanticipoForm = new AdmisionanticipoForm();
        //Instanciamos nuestro filtro
        $admisionanticipoFilter = new AdmisionanticipoFilter();
        //Le ponemos nuestro filtro a nuesto fromulario
        $admisionanticipoForm->setInputFilter($admisionanticipoFilter->getInputFilter());

        //Le ponemos los datos a nuestro formulario
        $admisionanticipoForm->setData($request->getPost());

        //Validamos nuestro formulario
        if($admisionanticipoForm->isValid()){

            $admisionanticipo = new \Admisionanticipo();

            //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Admisionanticipo
            foreach ($admisionanticipoForm->getData() as $admisionanticipoKey => $admisionanticipoValue){
                $admisionanticipo->setByName($admisionanticipoKey, $admisionanticipoValue, \BasePeer::TYPE_FIELDNAME);
            }
            $admisionanticipo->setAdmisionanticipoFecha(date('Y-m-d H:i:s'));
            //Guardamos en nuestra base de datos
            $admisionanticipo->save();

            $admisionanticipoArray = \AdmisionanticipoQuery::create()->filterByIdadmisionanticipo($admisionanticipo->getIdadmisionanticipo())->findOne()->toArray(\BasePeer::TYPE_FIELDNAME);

            return new JsonModel(array(
                'admisionanticipoArray' => $admisionanticipoArray,
            ));
        }
        // Fin Pago Admision

        $id = (int) $this->params()->fromRoute('id', 0);
        if($id){
            $paciente = PacienteQuery::create()->filterByIdpaciente($id)->findOne();
            $fechaNacimiento = date('m/d/Y', strtotime($paciente->getPacienteFechanacimiento()));

            // Inicio Preparando Form Admision
            // Almacenamos en un array los registros de todos los medicos existentes en la base de datos
            $medicoCollection = \MedicoQuery::create()->find();
            $medicoArray = array();
            foreach ($medicoCollection as $medicoEntity){
                $medicoArray[$medicoEntity->getIdmedico()] = $medicoEntity->getMedicoNombre();
            }
            // Almacenamos en un array los registros de todos los cuartos existentes en la base de datos
            $cuartoCollection = \CuartoQuery::create()->filterByCuartoEnuso(false)->find();
            $cuartoArray = array();
            foreach ($cuartoCollection as $cuartoEntity){
                $cuartoArray[$cuartoEntity->getIdcuarto()] = $cuartoEntity->getCuartoNombre();
            }
            //Intanciamos nuestro formulario admision y le mandamos por parametro los medicos y cuartos existentes
            $admisionForm = new AdmisionForm($medicoArray, $cuartoArray);
            //Instanciamos un nuevo objeto de nuestro objeto Paciente
            $admision = new \Admision();
            // Fin Preparando Form Admision

            // Inicio Preparando Form Consultorio
            // Almacenamos en un array los registros de todos los consultorios existentes en la base de datos
            $consultorioCollection = \ConsultorioQuery::create()->filterByConsultorioEnuso(false)->find();
            $consultorioArray = array();
            foreach ($consultorioCollection as $consultorioEntity){
                $consultorioArray[$consultorioEntity->getIdconsultorio()] = $consultorioEntity->getConsultorioNombre();
            }
            //Intanciamos nuestro formulario consulta y le mandamos por parametro los medicos y consultorios existentes
            $consultaForm = new ConsultaForm($medicoArray, $consultorioArray);
            //Instanciamos un nuevo objeto de nuestro objeto Paciente
            $consulta = new \Consulta();
            // Fin Preparando Form Consultorio

            //Intanciamos nuestro formulario cargoconsulta "SIN PARAMETROS"
            $cargoconsultaForm = new CargoconsultaForm();

            if($request->getPost()->cargoconsultaarticulo_by != null){

                if($request->getPost()->cargoconsultaarticulo_by == 'nombre'){
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
                if($request->getPost()->cargoconsultaarticulo_by == 'código de barras'){
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
                if($request->getPost()->cargoconsultaarticulo_by == 'proveedor'){
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

                        $ordencompradetalle = array(
                            'idordencompradetalle' => $ordencompradetalleEntity->getIdordencompradetalle(),
                            'idlugarinventario' => $idlugarinventario,
                            'cargoconsulta_tipo' => 'articulo',
                            'cargoconsulta_fecha' => date('Y-m-d H:i:s'),
                            'ordencompradetalle_caducidad' => $ordencompradetalleEntity->getOrdencompradetalleCaducidad(),
                            'existencia' => $lugarinventarioCantidad,
                            'articulo' => $articuloNombre,
                            'descripcion' => utf8_encode($propiedadNombre." ".$propiedadvalorNombre),
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

            if($request->getPost()->cargoconsultaservicio_by != null){

                if($request->getPost()->cargoconsultaservicio_by == 'nombre'){
                    if($request->getPost()->busquedaServicio != null){
                        $servicioQuery = \ServicioQuery::create()
                            ->filterBy(BasePeer::translateFieldname('servicio', 'servivio_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaServicio.'%', \Criteria::LIKE)
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
                            'cargoconsulta_tipo' => 'servicio',
                            'cargoconsulta_fecha' => date('Y-m-d H:i:s'),
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
            // Fin Preparando Form Cargoconsulta

            //Intanciamos nuestro formulario cargoadmision "SIN PARAMETROS"
            $cargoadmisionForm = new CargoadmisionForm();

            if($request->getPost()->cargoadmisionarticulo_by != null){

                if($request->getPost()->cargoadmisionarticulo_by == 'nombre'){
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
                if($request->getPost()->cargoadmisionarticulo_by == 'código de barras'){
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
                if($request->getPost()->cargoadmisionarticulo_by == 'proveedor'){
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

                        $ordencompradetalle = array(
                            'idordencompradetalle' => $ordencompradetalleEntity->getIdordencompradetalle(),
                            'idlugarinventario' => $idlugarinventario,
                            'cargoadmision_tipo' => 'articulo',
                            'cargoadmision_fecha' => date('Y-m-d H:i:s'),
                            'ordencompradetalle_caducidad' => $ordencompradetalleEntity->getOrdencompradetalleCaducidad(),
                            'existencia' => $lugarinventarioCantidad,
                            'articulo' => $articuloNombre,
                            'descripcion' => utf8_encode($propiedadNombre." ".$propiedadvalorNombre),
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

            if($request->getPost()->cargoadmisionservicio_by != null){

                if($request->getPost()->cargoadmisionservicio_by == 'nombre'){
                    if($request->getPost()->busquedaServicio != null){
                        $servicioQuery = \ServicioQuery::create()
                            ->filterBy(BasePeer::translateFieldname('servicio', 'servivio_nombre', BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME), '%'.$request->getPost()->busquedaServicio.'%', \Criteria::LIKE)
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
                            'cargoadmision_tipo' => 'servicio',
                            'cargoadmision_fecha' => date('Y-m-d H:i:s'),
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
            // Fin Preparando Form Cargoadmision

            if ($request->isPost()) { //Si hicieron POST
                //Instanciamos nuestro filtro
                $consultaFilter = new ConsultaFilter();
                //Le ponemos nuestro filtro a nuesto fromulario
                $consultaForm->setInputFilter($consultaFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $consultaForm->setData($request->getPost());

                //Validamos nuestro formulario
                if($consultaForm->isValid()){

                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Consulta
                    foreach ($consultaForm->getData() as $consultaKey => $consultaValue){
                        $consulta->setByName($consultaKey, $consultaValue, \BasePeer::TYPE_FIELDNAME);
                        $consulta->setConsultaStatus('no pagada');
                    }
                    //Guardamos en nuestra base de datos
                    $consulta->save();

                    $consultaArray = \ConsultaQuery::create()->filterByIdconsulta($consulta->getIdconsulta())->findOne()->toArray(BasePeer::TYPE_FIELDNAME);

                    return new JsonModel(array(
                        'consultaArray' => $consultaArray,
                    ));
                    //Redireccionamos a nuestro list
                    //return $this->redirect()->toRoute('pacientes');
                }

                //Instanciamos nuestro filtro
                $cargoconsultaFilter = new CargoconsultaFilter();
                //Le ponemos nuestro filtro a nuesto fromulario
                $cargoconsultaForm->setInputFilter($cargoconsultaFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $cargoconsultaForm->setData($request->getPost());

                //Validamos nuestro formulario
                if($cargoconsultaForm->isValid()){

                    $cargoconsultaArray = array();
                    if($request->getPost()->cargoconsulta_tipo == 'articulo'){

                        //Instanciamos un nuevo objeto de nuestro objeto Paciente
                        $cargoconsulta = new \Cargoconsulta();

                        //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Consulta
                        foreach ($cargoconsultaForm->getData() as $cargoconsultaKey => $cargoconsultaValue){
                            if($cargoconsultaKey != 'cargoconsultaarticulo_by' && $cargoconsultaKey != 'cargoconsultaservicio_by' && $cargoconsultaKey != 'busquedaArticulo' && $cargoconsultaKey != 'busquedaServicio'){
                                $cargoconsulta->setByName($cargoconsultaKey, $cargoconsultaValue, \BasePeer::TYPE_FIELDNAME);
                            }
                        }
                        // Validar precio, caducidad y existencia de ordencompradetalle
                        $existencia = $cargoconsulta->getLugarinventario()->getLugarinventarioCantidad();
                        $caducidad = $cargoconsulta->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetalleCaducidad();
                        $precio = $cargoconsulta->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio();

                        if($existencia > 0){
                            if($caducidad < date('Y-m-d')){
                                $cargoconsulta->setMonto($request->getPost()->cantidad*$precio);
                            }
                        }

                        //Guardamos en nuestra base de datos
                        $cargoconsulta->save();

                        $lugarinventarioQuery = $cargoconsulta->getLugarinventario();
                        $lugarinventarioQuery->setLugarinventarioCantidad($lugarinventarioQuery->getLugarinventarioCantidad()-$cargoconsulta->getCantidad());
                        $lugarinventarioQuery->save();

                        $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($cargoconsulta->getIdconsulta())->find();
                        if($cargoconsultaQuery->getArrayCopy()){
                            foreach($cargoconsultaQuery as $cargoconsultaEntity){
                                if($cargoconsultaEntity->getIdlugarinventario() != null){
                                    $articulovarianteEntity = $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();
                                    foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                        $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                        $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                                    }
                                    foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                        $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                        $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                                    }
                                    $cargoconsulta = array(
                                        'idcargoconsulta' => $cargoconsultaEntity->getIdcargoconsulta(),
                                        'idconsulta' => $cargoconsultaEntity->getIdconsulta(),
                                        'status' => $cargoconsultaEntity->getConsulta()->getConsultaStatus(),
                                        'cantidad' => $cargoconsultaEntity->getCantidad(),
                                        'articulo' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                        'descripcion' => utf8_encode($propiedadNombre." ".$propiedadvalorNombre),
                                        'salida' => $cargoconsultaEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                        'fechahora' => $cargoconsultaEntity->getCargoconsultaFecha(),
                                        'precio' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                        'subtotal' => $cargoconsultaEntity->getMonto(),
                                    );
                                    array_push($cargoconsultaArray, $cargoconsulta);
                                }
                            }
                        }
                    }
                    if($request->getPost()->cargoconsulta_tipo == 'servicio'){

                        //Instanciamos un nuevo objeto de nuestro objeto Paciente
                        $cargoconsulta = new \Cargoconsulta();

                        //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Consulta
                        foreach ($cargoconsultaForm->getData() as $cargoconsultaKey => $cargoconsultaValue){
                            if($cargoconsultaKey != 'cargoconsultaarticulo_by' && $cargoconsultaKey != 'cargoconsultaservicio_by' && $cargoconsultaKey != 'busquedaArticulo' && $cargoconsultaKey != 'busquedaServicio'){
                                $cargoconsulta->setByName($cargoconsultaKey, $cargoconsultaValue, \BasePeer::TYPE_FIELDNAME);
                            }
                        }

                        $precio = $cargoconsulta->getServicio()->getServicioPrecio();
                        $cargoconsulta->setMonto($request->getPost()->cantidad*$precio);
                        //Guardamos en nuestra base de datos
                        $cargoconsulta->save();

                        $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($cargoconsulta->getIdconsulta())->find();
                        if($cargoconsultaQuery->getArrayCopy()){
                            foreach($cargoconsultaQuery as $cargoconsultaEntity){
                                if($cargoconsultaEntity->getIdservicio() != null){
                                    $cargoconsulta = array(
                                        'idcargoconsulta' => $cargoconsultaEntity->getIdcargoconsulta(),
                                        'idconsulta' => $cargoconsultaEntity->getIdconsulta(),
                                        'status' => $cargoconsultaEntity->getConsulta()->getConsultaStatus(),
                                        'cantidad' => $cargoconsultaEntity->getCantidad(),
                                        'servicio' => $cargoconsultaEntity->getServicio()->getServicioNombre(),
                                        'descripcion' => $cargoconsultaEntity->getServicio()->getServicioDescripcion(),
                                        'precio' => $cargoconsultaEntity->getServicio()->getServicioPrecio(),
                                        'subtotal' => $cargoconsultaEntity->getMonto(),
                                        'fechahora' => date('Y-m-d H:i:s'),
                                    );
                                    array_push($cargoconsultaArray, $cargoconsulta);
                                }
                            }
                        }
                    }

                    return new JsonModel(array(
                        'cargoconsultaArray' => $cargoconsultaArray
                    ));
                }/* else {
                    $messageArray = array();
                    foreach ($cargoconsultaForm->getMessages() as $key => $value){
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

                //Instanciamos nuestro filtro
                $admisionFilter = new AdmisionFilter();
                //Le ponemos nuestro filtro a nuesto fromulario
                $admisionForm->setInputFilter($admisionFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $admisionForm->setData($request->getPost());

                //Validamos nuestro formulario
                if($admisionForm->isValid()){

                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Admision
                    foreach ($admisionForm->getData() as $admisionKey => $admisionValue){
                        $admision->setByName($admisionKey, $admisionValue, \BasePeer::TYPE_FIELDNAME);
                        if($admisionKey == 'admision_fechaadmision'){
                            $admision->setAdmisionFechaadmision($admisionValue." ".date('H:i:s'));
                        }
                        $admision->setAdmisionStatus('no pagada');
                    }
                    //Guardamos en nuestra base de datos
                    $admision->save();

                    $admisionArray = \AdmisionQuery::create()->filterByIdadmision($admision->getIdadmision())->findOne()->toArray(BasePeer::TYPE_FIELDNAME);

                    return new JsonModel(array(
                        'admisionArray' => $admisionArray,
                    ));
                    //Redireccionamos a nuestro list
                    //return $this->redirect()->toRoute('pacientes');
                }/*else {
                    $messageArray = array();
                    foreach ($cargoadmisionForm->getMessages() as $key => $value){
                        foreach($value as $val){
                            //Obtenemos el valor de la columna con error
                            $message = $key.' '.$val;
                            array_push($messageArray, $message);
                        }
                    }
                    var_dump($messageArray);
                    return new JsonModel(array(
                        'error' => $messageArray,
                    ));
                }*/

                //Instanciamos nuestro filtro
                $cargoadmisionFilter = new CargoadmisionFilter();
                //Le ponemos nuestro filtro a nuesto fromulario
                $cargoadmisionForm->setInputFilter($cargoadmisionFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $cargoadmisionForm->setData($request->getPost());

                //Validamos nuestro formulario
                if($cargoadmisionForm->isValid()){
                    $cargoadmisionArray = array();
                    if($request->getPost()->cargoadmision_tipo == 'articulo'){

                        //Instanciamos un nuevo objeto de nuestro objeto Paciente
                        $cargoadmision = new \Cargoadmision();

                        //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Admision
                        foreach ($cargoadmisionForm->getData() as $cargoadmisionKey => $cargoadmisionValue){
                            if($cargoadmisionKey != 'cargoadmisionarticulo_by' && $cargoadmisionKey != 'cargoadmisionservicio_by' && $cargoadmisionKey != 'busquedaArticulo' && $cargoadmisionKey != 'busquedaServicio'){
                                $cargoadmision->setByName($cargoadmisionKey, $cargoadmisionValue, \BasePeer::TYPE_FIELDNAME);
                            }
                        }
                        // Validar precio, caducidad y existencia de ordencompradetalle
                        $existencia = $cargoadmision->getLugarinventario()->getLugarinventarioCantidad();
                        $caducidad = $cargoadmision->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetalleCaducidad();
                        $precio = $cargoadmision->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio();

                        if($existencia > 0){
                            if($caducidad < date('Y-m-d')){
                                $cargoadmision->setCargoadmisionMonto($request->getPost()->cargoadmision_cantidad*$precio);
                            }
                        }

                        //Guardamos en nuestra base de datos
                        $cargoadmision->save();

                        $lugarinventarioQuery = $cargoadmision->getLugarinventario();
                        $lugarinventarioQuery->setLugarinventarioCantidad($lugarinventarioQuery->getLugarinventarioCantidad()-$cargoadmision->getCargoadmisionCantidad());
                        $lugarinventarioQuery->save();

                        $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($cargoadmision->getIdadmision())->find();
                        if($cargoadmisionQuery->getArrayCopy()){
                            foreach($cargoadmisionQuery as $cargoadmisionEntity){
                                if($cargoadmisionEntity->getIdlugarinventario() != null){
                                    $articulovarianteEntity = $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante();
                                    foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                        $propiedadQuery = \PropiedadQuery::create()->filterByIdpropiedad($articulovariantevalorEntity->getIdpropiedad())->findOne();
                                        $propiedadNombre = $propiedadQuery->getPropiedadNombre();
                                    }
                                    foreach($articulovarianteEntity->getArticulovariantevalors()->getArrayCopy() as $articulovariantevalorEntity){
                                        $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByIdpropiedadvalor($articulovariantevalorEntity->getIdpropiedadvalor())->findOne();
                                        $propiedadvalorNombre = $propiedadvalorQuery->getPropiedadvalorNombre();
                                    }
                                    $cargoadmision = array(
                                        'idcargoadmision' => $cargoadmisionEntity->getIdcargoadmision(),
                                        'idadmision' => $cargoadmisionEntity->getIdadmision(),
                                        'status' => $cargoadmisionEntity->getAdmision()->getAdmisionStatus(),
                                        'cargoadmision_cantidad' => $cargoadmisionEntity->getCargoadmisionCantidad(),
                                        'articulo' => $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                        'descripcion' => utf8_encode($propiedadNombre." ".$propiedadvalorNombre),
                                        'salida' => $cargoadmisionEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                        'fechahora' => $cargoadmisionEntity->getCargoadmisionFecha(),
                                        'precio' => $cargoadmisionEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovariantePrecio(),
                                        'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                                    );
                                    array_push($cargoadmisionArray, $cargoadmision);
                                }
                            }
                        }
                    }
                    if($request->getPost()->cargoadmision_tipo == 'servicio'){

                        //Instanciamos un nuevo objeto de nuestro objeto Paciente
                        $cargoadmision = new \Cargoadmision();

                        //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Admision
                        foreach ($cargoadmisionForm->getData() as $cargoadmisionKey => $cargoadmisionValue){
                            if($cargoadmisionKey != 'cargoadmisionarticulo_by' && $cargoadmisionKey != 'cargoadmisionservicio_by' && $cargoadmisionKey != 'busquedaArticulo' && $cargoadmisionKey != 'busquedaServicio'){
                                $cargoadmision->setByName($cargoadmisionKey, $cargoadmisionValue, \BasePeer::TYPE_FIELDNAME);
                            }
                        }

                        $precio = $cargoadmision->getServicio()->getServicioPrecio();
                        $cargoadmision->setCargoadmisionMonto($request->getPost()->cargoadmision_cantidad*$precio);
                        //Guardamos en nuestra base de datos
                        $cargoadmision->save();

                        $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($cargoadmision->getIdadmision())->find();
                        if($cargoadmisionQuery->getArrayCopy()){
                            foreach($cargoadmisionQuery as $cargoadmisionEntity){
                                if($cargoadmisionEntity->getIdservicio() != null){
                                    $cargoadmision = array(
                                        'idcargoadmision' => $cargoadmisionEntity->getIdcargoadmision(),
                                        'idadmision' => $cargoadmisionEntity->getIdadmision(),
                                        'status' => $cargoadmisionEntity->getAdmision()->getAdmisionStatus(),
                                        'cargoadmision_cantidad' => $cargoadmisionEntity->getCargoadmisionCantidad(),
                                        'servicio' => $cargoadmisionEntity->getServicio()->getServicioNombre(),
                                        'descripcion' => $cargoadmisionEntity->getServicio()->getServicioDescripcion(),
                                        'precio' => $cargoadmisionEntity->getServicio()->getServicioPrecio(),
                                        'subtotal' => $cargoadmisionEntity->getCargoadmisionMonto(),
                                        'fechahora' => date('Y-m-d H:i:s'),
                                    );
                                    array_push($cargoadmisionArray, $cargoadmision);
                                }
                            }
                        }
                    }

                    return new JsonModel(array(
                        'cargoadmisionArray' => $cargoadmisionArray,
                    ));
                }/* else {
                    $messageArray = array();
                    foreach ($cargoadmisionForm->getMessages() as $key => $value){
                        foreach($value as $val){
                            //Obtenemos el valor de la columna con error
                            $message = $key.' '.$val;
                            array_push($messageArray, $message);
                        }
                    }
                    return new JsonModel(array(
                        'error' => $messageArray,
                    ));
                }*/
            }

            return new ViewModel(array(
                'pacienteEntity' => $paciente,
                'edad' => $this->calculaEdad($fechaNacimiento),
                'consultaForm' => $consultaForm,
                'admisionForm' => $admisionForm,
                'cargoconsultaForm' => $cargoconsultaForm,
                'cargoadmisionForm' => $cargoadmisionForm,
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
            return $this->redirect()->toRoute('pacientes', array(
                'action' => 'listar'
            ));
        }

        //Instanciamos nuestro paciente
        $paciente = PacienteQuery::create()->findPk($id);

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
        $id = (int) $this->params()->fromRoute('id', 0);
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('paciente', array('action' => 'asignar'));
        }

        //Verificamos que el Id medico que se quiere eliminar exista
        if(PacienteQuery::create()->filterByIdpaciente($id)->exists()){

            //Instanciamos nuestro paciente
            $paciente = PacienteQuery::create()->findPk($id);

            $paciente->delete();

            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Paciente eliminado exitosamente!');
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('pacientes');

        }
    }
}