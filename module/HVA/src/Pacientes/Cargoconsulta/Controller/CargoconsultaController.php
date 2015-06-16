<?php

namespace Pacientes\Cargoconsulta\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Pacientes\Cargoconsulta\Form\CargoconsultaForm;

//// Filter ////
use Pacientes\Cargoconsulta\Filter\CargoconsultaFilter;

//// Propel ////
use Cargoconsulta;
use CargoconsultaQuery;
use BasePeer;

class CargoconsultaController extends AbstractActionController
{
    public function nuevoAction()
    {
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
        $request = $this->getRequest();
        if ($request->isPost()) {
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
                $cargoconsulta->save();

                // Validar precio, caducidad y existencia de ordencompradetalle
                $existencia = $cargoconsulta->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetalleExistencia();
                $caducidad = $cargoconsulta->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetalleCaducidad();
                $precio = $cargoconsulta->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetallePrecio();
                $cantidad = $cargoconsulta->getCantidad();

                if($existencia > 0){
                    if($caducidad < date('Y-m-d')){
                        $cargoconsulta->setMonto($request->getPost()->cantidad*$precio);
                    }
                }

                //Guardamos en nuestra base de datos
                $cargoconsulta->save();

                //Redireccionamos a nuestro list
                //return $this->redirect()->toRoute('pacientes');
            } else {
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
            }
        }
        return array('cargoconsultaForm' => $cargoconsultaForm);
    }

    public function verAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if ($id) {
            $cargoconsultaQuery = CargoconsultaQuery::create()->filterByIdcargoconsulta($id)->findOne();
        }

        return new ViewModel(array(
            'cargoconsulta' => $cargoconsultaQuery,
        ));
    }

    public function listarAction()
    {
        $cargoconsultasQuery = new \CargoconsultaQuery();

        $result = $cargoconsultasQuery->paginate();

        $dataCollection = $result->getResults();

        return new ViewModel(array(
            'cargoconsultaes' => $dataCollection,
        ));
    }

    public function editarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('cargoconsulta', array(
                'action' => 'nuevo'
            ));
        }

        //Instanciamos nuestra cargoconsultaQuery
        $cargoconsultaQuery = CargoconsultaQuery::create();

        //Verificamos que el Id cargoconsulta que se quiere modificar exista
        if($cargoconsultaQuery->create()->filterByIdcargoconsulta($id)->exists()){

            $request = $this->getRequest();
            //Instanciamos nuestra cargoconsultaQuery
            $cargoconsultaPKQuery = $cargoconsultaQuery->findPk($id);
            $cargoconsultaQueryArray = $cargoconsultaPKQuery->toArray(BasePeer::TYPE_FIELDNAME);
            $CargoconsultaForm = new CargoconsultaForm();
            $ElementsCargoconsultaForm = $CargoconsultaForm->getElements();

            if ($request->isPost()){
                $CargoconsultaArray = array();
                foreach($ElementsCargoconsultaForm as $key=>$value){
                    if($key != 'submit'){
                        $CargoconsultaArray[$key] = $request->getPost()->$key ? $request->getPost()->$key : $cargoconsultaQueryArray[$key];
                    }
                }
            }else{
                foreach($cargoconsultaQueryArray as $cargoconsultaQueryKey => $cargoconsultaQueryValue){
                    $CargoconsultaArray[$cargoconsultaQueryKey] = $cargoconsultaQueryArray[$cargoconsultaQueryKey];

                }
            }

            $CargoconsultaFilter = new CargoconsultaFilter();
            $CargoconsultaForm->setInputFilter($CargoconsultaFilter->getInputFilter());
            $CargoconsultaForm->setData($CargoconsultaArray);

            if ($CargoconsultaForm->isValid()) {
                foreach($CargoconsultaForm->getData() as $CargoconsultaKey => $CargoconsultaValue){
                    if($CargoconsultaKey != 'submit'){
                        $cargoconsultaPKQuery->setByName($CargoconsultaKey, $CargoconsultaValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                // Si no modifican nada, permanecemos en el formulario.
                if($cargoconsultaPKQuery->isModified()){
                    $cargoconsultaPKQuery->save();
                    return $this->redirect()->toRoute('cargoconsulta');
                }
            }else{
                $messageArray = array();
                foreach ($CargoconsultaForm->getMessages() as $key => $value){
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
            'cargoconsultaForm' => $CargoconsultaForm,
        );
    }

    public function eliminarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('cargoconsulta');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                CargoconsultaQuery::create()->filterByIdcargoconsulta($id)->delete();
            }

            // Redireccionamos a los provedores
            return $this->redirect()->toRoute('cargoconsulta');
        }

        $cargoconsultaEntity = CargoconsultaQuery::create()->filterByIdcargoconsulta($id)->findOne();
        return array(
            'id'    => $id,
            'cargoconsulta' => $cargoconsultaEntity->toArray(BasePeer::TYPE_FIELDNAME)
        );
    }
}
