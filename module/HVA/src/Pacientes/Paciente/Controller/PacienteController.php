<?php
namespace Pacientes\Paciente\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Validator\Explode;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

//// Form ////
use Pacientes\Paciente\Form\PacienteForm;
use Pacientes\Paciente\Form\ConsultaForm;
use Pacientes\Paciente\Form\AdmisionForm;
use Pacientes\Cargoconsulta\Form\CargoconsultaForm;
use Pacientes\Cargoadmision\Form\CargoadmisionForm;

//// Filter ////
use Pacientes\Paciente\Filter\PacienteFilter;
use Pacientes\Paciente\Filter\ConsultaFilter;
use Pacientes\Paciente\Filter\AdmisionFilter;
use Pacientes\Cargoconsulta\Filter\CargoconsultaFilter;
use Pacientes\Cargoadmision\Filter\CargoadmisionFilter;

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
        // Instanciamos nuestro formulario pacienteForm
        $pacienteQuery = new PacienteQuery();
        $result = $pacienteQuery->paginate($page,$limit);
        $dataCollection = $result->getResults();
        $this->flashMessenger()->addMessage('Paciente guardado exitosamente!');


        return new ViewModel(array(
            'pacientes' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
    }

    public function actualesAction()
    {
        // Instanciamos nuestro formulario pacienteForm
        $pacienteQuery = new PacienteQuery();
        $result = $pacienteQuery->paginate($page,$limit);
        $dataCollection = $result->getResults();
        var_dump($dataCollection);
        $this->flashMessenger()->addMessage('Paciente guardado exitosamente!');


        return new ViewModel(array(
            'pacientes' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
    }

    public function verAction(){

        $request = $this->getRequest();

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

            // Inicio Preparando Form Cargoconsulta
            // Almacenamos en un array los registros de todos los consultorios existentes en la base de datos
            $consultaCollection = \ConsultaQuery::create()->find();
            $consultaArray = array();
            foreach ($consultaCollection as $consultaEntity){
                $consultaArray[$consultaEntity->getIdconsulta()] = $consultaEntity->getPaciente()->getPacienteNombre();
            }
            // Almacenamos en un array los registros de todos los Lugarinventario para obtener el nombre de los productos existentes en la base de datos
            $lugarinventarioCollection = \LugarinventarioQuery::create()->find();
            $lugarinventarioArray = array();
            foreach ($lugarinventarioCollection as $lugarinventarioEntity){
                $lugarinventarioArray[$lugarinventarioEntity->getIdlugarinventario()] = $lugarinventarioEntity->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre();
            }

            //Intanciamos nuestro formulario cargoconsulta y le mandamos por parametro los medicos y consultorios existentes
            $cargoconsultaForm = new CargoconsultaForm($consultaArray, $lugarinventarioArray);
            // Fin Preparando Form Cargoconsulta

            // Inicio Preparando Form Cargoadmision
            // Almacenamos en un array los registros de todos los servicios existentes en la base de datos
            $servicioCollection = \ServicioQuery::create()->find();
            $servicioArray = array();
            foreach ($servicioCollection as $servicioEntity){
                $servicioArray[$servicioEntity->getIdservicio()] = $servicioEntity->getServicioNombre();
            }
            //Intanciamos nuestro formulario cargoadmision y le mandamos por parametro las consultas y servicios
            $cargoadmisionForm = new CargoadmisionForm($servicioArray);
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
                        if($consultaKey == 'consulta_fechaadmision'){
                            $consulta->setConsultaFechaadmision($consultaValue." ".date('H:i:s'));
                        }
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
                $admisionFilter = new AdmisionFilter();
                //Le ponemos nuestro filtro a nuesto fromulario
                $admisionForm->setInputFilter($admisionFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $admisionForm->setData($request->getPost());

                //Validamos nuestro formulario
                if($admisionForm->isValid()){

                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Cargoadmision
                    foreach ($admisionForm->getData() as $admisionKey => $admisionValue){
                        $admision->setByName($admisionKey, $admisionValue, \BasePeer::TYPE_FIELDNAME);
                    }
                    //Guardamos en nuestra base de datos
                    $admision->save();

                    $admisionQuery = \AdmisionQuery::create()->filterByIdadmision($admision->getIdadmision())->findOne();
                    $cargoadmisionQuery = \CargoadmisionQuery::create()->filterByIdadmision($admision->getIdadmision())->find();

                    return new JsonModel(array(
                        'admisionQuery' => $admisionQuery
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

                    //Instanciamos un nuevo objeto de nuestro objeto Paciente
                    $cargoconsulta = new \Cargoconsulta();

                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Consulta
                    foreach ($cargoconsultaForm->getData() as $cargoconsultaKey => $cargoconsultaValue){
                        if($cargoconsultaKey != 'cargoconsulta_by'){
                            $cargoconsulta->setByName($cargoconsultaKey, $cargoconsultaValue, \BasePeer::TYPE_FIELDNAME);
                        }
                    }
                    // Validar precio, caducidad y existencia de ordencompradetalle
                    $existencia = $cargoconsulta->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetalleExistencia();
                    $caducidad = $cargoconsulta->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetalleCaducidad();
                    $precio = $cargoconsulta->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetallePrecio();

                    if($existencia > 0){
                        if($caducidad < date('Y-m-d')){
                            $cargoconsulta->setMonto($request->getPost()->cantidad*$precio);
                        }
                    }

                    //Guardamos en nuestra base de datos
                    $cargoconsulta->save();

                    $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($cargoconsulta->getIdconsulta())->find();
                    if($cargoconsultaQuery->getArrayCopy()){
                        $cargoconsultaArray = array();
                        foreach($cargoconsultaQuery as $cargoconsultaEntity){
                            $cargoconsulta = array(
                                'idcargoconsulta' => $cargoconsultaEntity->getIdcargoconsulta(),
                                'cantidad' => $cargoconsultaEntity->getCantidad(),
                                'articulo' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloNombre(),
                                'descripcion' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulo()->getArticuloDescripcion(),
                                'salida' => $cargoconsultaEntity->getLugarinventario()->getLugar()->getLugarNombre(),
                                'fechahora' => date('Y-m-d H:i:s'),
                                'costo' => $cargoconsultaEntity->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetallePrecio(),
                                'subtotal' => $cargoconsultaEntity->getMonto(),
                            );
                            array_push($cargoconsultaArray, $cargoconsulta);
                        }
                    }
                    return new JsonModel(array(
                        'cargoconsultaArray' => $cargoconsultaArray
                    ));

                    /*
                    $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($cargoconsulta->getIdconsulta())->find();
                    return new ViewModel(array(
                        'cargoconsultaQuery' => $cargoconsultaQuery->getArrayCopy()
                    ));
                    */

                    //Redireccionamos a nuestro list
                    //return $this->redirect()->toRoute('pacientes');
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
                $cargoadmisionFilter = new CargoadmisionFilter();
                //Le ponemos nuestro filtro a nuesto fromulario
                $cargoadmisionForm->setInputFilter($cargoadmisionFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $cargoadmisionForm->setData($request->getPost());

                //Validamos nuestro formulario
                if($cargoadmisionForm->isValid()){

                    //Instanciamos un nuevo objeto de nuestro objeto Paciente
                    $cargoadmision = new \Cargoadmision();

                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Cargoadmision
                    foreach ($cargoadmisionForm->getData() as $cargoadmisionKey => $cargoadmisionValue){
                        $cargoadmision->setByName($cargoadmisionKey, $cargoadmisionValue, \BasePeer::TYPE_FIELDNAME);
                    }
                    $precio = $cargoadmision->getServicio()->getServicioPrecio();

                    if($existencia > 0){
                        if($caducidad < date('Y-m-d')){
                            $cargoadmision->setCargoadmisionMonto($request->getPost()->cargoadmision_cantidad*$precio);
                        }
                    }

                    //Guardamos en nuestra base de datos
                    $cargoadmision->save();

                    //Redireccionamos a nuestro list
                    //return $this->redirect()->toRoute('pacientes');
                }
            }

            return new ViewModel(array(
                'pacienteEntity' => $paciente,
                'edad' => $this->calculaEdad($fechaNacimiento),
                'consultaForm' => $consultaForm,
                'consultaQuery' => $consultaQuery,
                'admisionForm' => $admisionForm,
                'admisionQuery' => $admisionQuery,
                'cargoconsultaForm' => $cargoconsultaForm,
                'cargoconsultaQuery' => $cargoconsultaQuery,
                'cargoadmisionForm' => $cargoadmisionForm,
                'cargoadmisionuery' => $cargoadmisionQuery,
            ));

        }else{
            return $this->redirect()->toRoute('pacientes');
        }
    }

    /*
    public function verAction(){

        $request = $this->getRequest();

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

            // Inicio Preparando Form Cargoconsulta
            // Almacenamos en un array los registros de todos los consultorios existentes en la base de datos
            $consultaCollection = \ConsultaQuery::create()->find();
            $consultaArray = array();
            foreach ($consultaCollection as $consultaEntity){
                $consultaArray[$consultaEntity->getIdconsulta()] = $consultaEntity->getPaciente()->getPacienteNombre();
            }
            //Intanciamos nuestro formulario cargoconsulta y le mandamos por parametro los medicos y consultorios existentes
            $cargoconsultaForm = new CargoconsultaForm($consultaArray);
            // Fin Preparando Form Cargoconsulta

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
                        if($consultaKey == 'consulta_fechaadmision'){
                            $consulta->setConsultaFechaadmision($consultaValue." ".date('H:i:s'));
                        }
                        $consulta->setConsultaStatus('no pagada');
                    }
                    //Guardamos en nuestra base de datos
                    $consulta->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Consulta guardado exitosamente!');
                    $consultaQuery = \ConsultaQuery::create()->filterByIdconsulta($consulta->getIdconsulta())->findOne();
                    $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdconsulta($consulta->getIdconsulta())->find();
                    return new ViewModel(array(
                        'cargoconsultaForm' => $cargoconsultaForm,
                        'cargoconsultaQuery' => $cargoconsultaQuery,
                        'pacienteEntity' => $paciente,
                        'edad' => $this->calculaEdad($fechaNacimiento),
                        'consultaQuery' => $consultaQuery,
                        'consultaForm' => $consultaForm,
                        'admisionForm' => $admisionForm,
                        'flashMessages' => $this->flashMessenger()->getMessages(),
                    ));

                    //Redireccionamos a nuestro list
                    //return $this->redirect()->toRoute('pacientes');
                }

                //Instanciamos nuestro filtro
                $admisionFilter = new AdmisionFilter();
                //Le ponemos nuestro filtro a nuesto fromulario
                $admisionForm->setInputFilter($admisionFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $admisionForm->setData($request->getPost());

                //Validamos nuestro formulario
                if($admisionForm->isValid()){

                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Consulta
                    foreach ($admisionForm->getData() as $admisionKey => $admisionValue){
                        $admision->setByName($admisionKey, $admisionValue, \BasePeer::TYPE_FIELDNAME);
                    }
                    //Guardamos en nuestra base de datos
                    $admision->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Consulta guardado exitosamente!');
                    $admisionQuery = \AdmisionQuery::create()->filterByIdadmision($admision->getIdadmision())->findOne();
                    return new ViewModel(array(
                        'pacienteEntity' => $paciente,
                        'edad' => $this->calculaEdad($fechaNacimiento),
                        'admisionQuery' => $admisionQuery,
                        'consultaForm' => $consultaForm,
                        'admisionForm' => $admisionForm,
                        'flashMessages' => $this->flashMessenger()->getMessages(),
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
                    //Instanciamos un nuevo objeto de nuestro objeto Paciente
                    $cargoconsulta = new \Cargoconsulta();

                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Consulta
                    foreach ($cargoconsultaForm->getData() as $cargoconsultaKey => $cargoconsultaValue){
                        $cargoconsulta->setByName($cargoconsultaKey, $cargoconsultaValue, \BasePeer::TYPE_FIELDNAME);
                    }
                    //Guardamos en nuestra base de datos
                    $cargoconsulta->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Consulta guardado exitosamente!');
                    $cargoconsultaQuery = \CargoconsultaQuery::create()->filterByIdcargoconsulta($cargoconsulta->getIdcargoconsulta())->findOne();
                    return new ViewModel(array(
                        'pacienteEntity' => $paciente,
                        'edad' => $this->calculaEdad($fechaNacimiento),
                        'cargoconsultaQuery' => $cargoconsultaQuery,
                        'consultaForm' => $consultaForm,
                        'admisionForm' => $admisionForm,
                        'cargoconsultaForm' => $cargoconsultaForm,
                        'flashMessages' => $this->flashMessenger()->getMessages(),
                    ));

                    //Redireccionamos a nuestro list
                    //return $this->redirect()->toRoute('pacientes');
                }
            }

            return new ViewModel(array(
                'pacienteEntity' => $paciente,
                'edad' => $this->calculaEdad($fechaNacimiento),
                'consultaForm' => $consultaForm,
                'admisionForm' => $admisionForm,
                'cargoconsultaForm' => $cargoconsultaForm,
            ));
        }else{
            return $this->redirect()->toRoute('pacientes');
        }
    }
    */

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

            }else{

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
            return $this->redirect()->toRoute('paciente', array('action' => 'ver'));
        }

        //Verificamos que el Id medico que se quiere eliminar exista
        if(PacienteQuery::create()->filterByIdpaciente($id)->exists()){

            //Instanciamos nuestro medico
            $medico = PacienteQuery::create()->findPk($id);

            $medico->delete();

            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Medico eliminado exitosamente!');
            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('pacientes');

        }
    }
}