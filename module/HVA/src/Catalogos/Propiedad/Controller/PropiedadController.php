<?php

namespace Catalogos\Propiedad\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Propiedad\Form\PropiedadForm;

//// Filter ////
use Catalogos\Propiedad\Filter\PropiedadFilter;

//// Propel ////
use Propiedad;
use PropiedadQuery;
use BasePeer;

class PropiedadController extends AbstractActionController
{
    public function nuevoAction()
    {
        $PropiedadForm = new PropiedadForm();
        $PropiedadForm->get('submit')->setValue('Nuevo');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $PropiedadFilter = new PropiedadFilter();
            $PropiedadForm->setInputFilter($PropiedadFilter->getInputFilter());
            $PropiedadForm->setData($request->getPost());

            foreach($request->getPost() as $key => $value){
                if($key == 'idarticulo'){
                    $articuloQuery = \ArticuloQuery::create()->filterByIdarticulo($value)->findOne();
                    // Validamos que exista el idarticulo.
                    if(!$articuloQuery){
                        return new ViewModel(array(
                            'Error' => array(
                                'Invalid idarticulo.' => 'Invalid idarticulo.'
                            ),
                        ));
                    }
                }
            }

            if ($PropiedadForm->isValid()) {
                $Propiedad = new Propiedad();
                foreach($PropiedadForm->getData() as $PropiedadKey => $PropiedadValue){
                    if($PropiedadKey != 'idpropiedad' && $PropiedadKey != 'submit'){
                        $Propiedad->setByName($PropiedadKey, $PropiedadValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                $Propiedad->save();
                return $this->redirect()->toRoute('propiedad');
            }else{
                $messageArray = array();
                foreach ($PropiedadForm->getMessages() as $key => $value){
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
        return array('PropiedadForm' => $PropiedadForm);
    }

    public function listarAction()
    {
        // Instanciamos nuestro formulario propiedadForm
        $propiedadForm = new PropiedadForm();

        // Guardamos en un arrglo los campos a los que el usuario va poder tener acceso de acuerdo a su nivel
        $allowedColumns = array();
        foreach ($propiedadForm->getElements() as $key=>$value){
            array_push($allowedColumns, $key);
        }
        //Verificamos que si nos envian filtros  si no ponemos valores por default
        $limit = (int) $this->params()->fromQuery('limit') ? (int)$this->params()->fromQuery('limit')  : 10;
        if($limit > 100) $limit = 100; //Si el limit es mayor a 100 lo establece en 100 como maximo valor permitido
        $dir = $this->params()->fromQuery('dir') ? $this->params()->fromQuery('dir')  : 'asc';
        $order = in_array($this->params()->fromQuery('order'), $allowedColumns) ? $this->params()->fromQuery('order')  : 'idpropiedad';
        $page = (int) $this->params()->fromQuery('page') ? (int)$this->params()->fromQuery('page')  : 1;

        $propiedadQuery = new PropiedadQuery();

        //Order y Dir
        if($order !=null || $dir !=null){
            $propiedadQuery->orderBy($order, $dir);
        }

        // Obtenemos el filtrado por medio del idcompany del recurso.
        $result = $propiedadQuery->paginate($page,$limit);

        $data = $result->getResults()->toArray(null,false,BasePeer::TYPE_FIELDNAME);

        return new ViewModel(array(
            'Propiedads' => $data,
        ));
    }

    public function editarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('propiedad', array(
                'action' => 'nuevo'
            ));
        }

        //Instanciamos nuestra propiedadQuery
        $propiedadQuery = PropiedadQuery::create();

        //Verificamos que el Id propiedad que se quiere modificar exista
        if($propiedadQuery->create()->filterByIdpropiedad($id)->exists()){

            $request = $this->getRequest();
            //Instanciamos nuestra propiedadQuery
            $propiedadPKQuery = $propiedadQuery->findPk($id);
            $propiedadQueryArray = $propiedadPKQuery->toArray(BasePeer::TYPE_FIELDNAME);
            $PropiedadForm = new PropiedadForm();
            $ElementsPropiedadForm = $PropiedadForm->getElements();

            if ($request->isPost()){
                $PropiedadArray = array();
                foreach($ElementsPropiedadForm as $key=>$value){
                    if($key != 'submit'){
                        $PropiedadArray[$key] = $request->getPost()->$key ? $request->getPost()->$key : $propiedadQueryArray[$key];
                    }
                }
            }else{
                foreach($propiedadQueryArray as $propiedadQueryKey => $propiedadQueryValue){
                    $PropiedadArray[$propiedadQueryKey] = $propiedadQueryArray[$propiedadQueryKey];

                }
            }

            $PropiedadFilter = new PropiedadFilter();
            $PropiedadForm->setInputFilter($PropiedadFilter->getInputFilter());
            $PropiedadForm->setData($PropiedadArray);

            if ($PropiedadForm->isValid()) {
                foreach($PropiedadForm->getData() as $PropiedadKey => $PropiedadValue){
                    if($PropiedadKey != 'submit'){
                        $propiedadPKQuery->setByName($PropiedadKey, $PropiedadValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                // Si no modifican nada, permanecemos en el formulario.
                if($propiedadPKQuery->isModified()){
                    $propiedadPKQuery->save();
                    return $this->redirect()->toRoute('propiedad');
                }
            }else{
                $messageArray = array();
                foreach ($PropiedadForm->getMessages() as $key => $value){
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
            'PropiedadForm' => $PropiedadForm,
        );
    }

    public function eliminarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('propiedad');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                PropiedadQuery::create()->filterByIdpropiedad($id)->delete();
            }

            // Redireccionamos a los provedores
            return $this->redirect()->toRoute('propiedad');
        }

        $provedorEntity = PropiedadQuery::create()->filterByIdpropiedad($id)->findOne();
        return array(
            'id'    => $id,
            'propiedad' => $provedorEntity->toArray(BasePeer::TYPE_FIELDNAME)
        );
    }
}
