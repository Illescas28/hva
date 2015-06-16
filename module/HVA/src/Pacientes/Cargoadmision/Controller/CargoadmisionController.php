<?php

namespace Pacientes\Cargoadmision\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Pacientes\Cargoadmision\Form\CargoadmisionForm;

//// Filter ////
use Pacientes\Cargoadmision\Filter\CargoadmisionFilter;

//// Propel ////
use Cargoadmision;
use CargoadmisionQuery;
use BasePeer;

class CargoadmisionController extends AbstractActionController
{
    public function nuevoAction()
    {
        // Almacenamos en un array los registros de todos los consultorios existentes en la base de datos
        $consultaCollection = \ConsultaQuery::create()->find();
        $consultaArray = array();
        foreach ($consultaCollection as $consultaEntity){
            $consultaArray[$consultaEntity->getIdconsulta()] = $consultaEntity->getPaciente()->getPacienteNombre();
        }
        // Almacenamos en un array los registros de todos los servicios existentes en la base de datos
        $servicioCollection = \ServicioQuery::create()->find();
        $servicioArray = array();
        foreach ($servicioCollection as $servicioEntity){
            $servicioArray[$servicioEntity->getIdservicio()] = $servicioEntity->getServicioNombre();
        }
        //Intanciamos nuestro formulario cargoadmision y le mandamos por parametro los medicos y consultorios existentes
        $cargoadmisionForm = new CargoadmisionForm($consultaArray, $servicioArray);
        $request = $this->getRequest();
        if ($request->isPost()) {
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

                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Consulta
                foreach ($cargoadmisionForm->getData() as $cargoadmisionKey => $cargoadmisionValue){
                    $cargoadmision->setByName($cargoadmisionKey, $cargoadmisionValue, \BasePeer::TYPE_FIELDNAME);
                }
                $cargoadmision->save();

                // Validar precio, caducidad y existencia de ordencompradetalle
                $existencia = $cargoadmision->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetalleExistencia();
                $caducidad = $cargoadmision->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetalleCaducidad();
                $precio = $cargoadmision->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetallePrecio();
                $cantidad = $cargoadmision->getCantidad();

                if($existencia > 0){
                    if($caducidad < date('Y-m-d')){
                        $cargoadmision->setMonto($request->getPost()->cantidad*$precio);
                    }
                }

                //Guardamos en nuestra base de datos
                $cargoadmision->save();

                //Redireccionamos a nuestro list
                //return $this->redirect()->toRoute('pacientes');
            } else {
                $messageArray = array();
                foreach ($cargoadmisionForm->getMessages() as $key => $value){
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
            }
        }
        return array('cargoadmisionForm' => $cargoadmisionForm);
    }

    public function verAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if ($id) {
            $cargoadmisionQuery = CargoadmisionQuery::create()->filterByIdcargoadmision($id)->findOne();
        }

        return new ViewModel(array(
            'cargoadmision' => $cargoadmisionQuery,
        ));
    }

    public function listarAction()
    {
        $cargoadmisionsQuery = new \CargoadmisionQuery();

        $result = $cargoadmisionsQuery->paginate();

        $dataCollection = $result->getResults();

        return new ViewModel(array(
            'cargoadmisiones' => $dataCollection,
        ));
    }

    public function editarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('cargoadmision', array(
                'action' => 'nuevo'
            ));
        }

        //Instanciamos nuestra cargoadmisionQuery
        $cargoadmisionQuery = CargoadmisionQuery::create();

        //Verificamos que el Id cargoadmision que se quiere modificar exista
        if($cargoadmisionQuery->create()->filterByIdcargoadmision($id)->exists()){

            $request = $this->getRequest();
            //Instanciamos nuestra cargoadmisionQuery
            $cargoadmisionPKQuery = $cargoadmisionQuery->findPk($id);
            $cargoadmisionQueryArray = $cargoadmisionPKQuery->toArray(BasePeer::TYPE_FIELDNAME);
            $CargoadmisionForm = new CargoadmisionForm();
            $ElementsCargoadmisionForm = $CargoadmisionForm->getElements();

            if ($request->isPost()){
                $CargoadmisionArray = array();
                foreach($ElementsCargoadmisionForm as $key=>$value){
                    if($key != 'submit'){
                        $CargoadmisionArray[$key] = $request->getPost()->$key ? $request->getPost()->$key : $cargoadmisionQueryArray[$key];
                    }
                }
            }else{
                foreach($cargoadmisionQueryArray as $cargoadmisionQueryKey => $cargoadmisionQueryValue){
                    $CargoadmisionArray[$cargoadmisionQueryKey] = $cargoadmisionQueryArray[$cargoadmisionQueryKey];

                }
            }

            $CargoadmisionFilter = new CargoadmisionFilter();
            $CargoadmisionForm->setInputFilter($CargoadmisionFilter->getInputFilter());
            $CargoadmisionForm->setData($CargoadmisionArray);

            if ($CargoadmisionForm->isValid()) {
                foreach($CargoadmisionForm->getData() as $CargoadmisionKey => $CargoadmisionValue){
                    if($CargoadmisionKey != 'submit'){
                        $cargoadmisionPKQuery->setByName($CargoadmisionKey, $CargoadmisionValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                // Si no modifican nada, permanecemos en el formulario.
                if($cargoadmisionPKQuery->isModified()){
                    $cargoadmisionPKQuery->save();
                    return $this->redirect()->toRoute('cargoadmision');
                }
            }else{
                $messageArray = array();
                foreach ($CargoadmisionForm->getMessages() as $key => $value){
                    foreach($value as $val){
                        //Obtenemos el valor de la columna con error
                        $message = $key.' '.$val;
                        array_push($messageArray, $message);
                    }
                }

                return new ViewModel(array(
                    'Error' => $messageArray,
                ));
            }
        }

        return array(
            'id' => $id,
            'cargoadmisionForm' => $CargoadmisionForm,
        );
    }

    public function eliminarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('cargoadmision');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                CargoadmisionQuery::create()->filterByIdcargoadmision($id)->delete();
            }

            // Redireccionamos a los provedores
            return $this->redirect()->toRoute('cargoadmision');
        }

        $cargoadmisionEntity = CargoadmisionQuery::create()->filterByIdcargoadmision($id)->findOne();
        return array(
            'id'    => $id,
            'cargoadmision' => $cargoadmisionEntity->toArray(BasePeer::TYPE_FIELDNAME)
        );
    }
}
