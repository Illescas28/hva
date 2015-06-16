<?php

namespace Catalogos\Tipo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Tipo\Form\TipoForm;

//// Filter ////
use Catalogos\Tipo\Filter\TipoFilter;

//// Propel ////
use Tipo;
use TipoQuery;
use BasePeer;

class TipoController extends AbstractActionController
{
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        //Intanciamos nuestro formulario
        $tipoForm = new TipoForm($especialidadArray);
        
        if ($request->isPost()) { //Si hicieron POST
            
            //Instanciamos nuestro filtro
            $tipoFilter = new TipoFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $tipoForm->setInputFilter($tipoFilter->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $tipoForm->setData($request->getPost());
            
            //Validamos nuestro formulario
            if($tipoForm->isValid()){
                
                //Instanciamos un nuevo objeto de nuestro objeto tipo
                $tipo = new Tipo();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Tipo
                foreach ($tipoForm->getData() as $tipoKey => $tipoValue){
                    $tipo->setByName($tipoKey, $tipoValue, \BasePeer::TYPE_FIELDNAME);
                }
              
                //Guardamos en nuestra base de datos
                $tipo->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Tipo de Articulo guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('tipo');
                
            }else{
                
            }
        }
        
        return new ViewModel(array(
            'tipoForm' => $tipoForm,
        ));

    }

    public function listarAction()
    {
        // Instanciamos nuestro formulario tipoForm
        $tipoForm = new tipoForm();

        $tipoQuery = new TipoQuery();

        $result = $tipoQuery->paginate($page,$limit);

        $dataCollection = $result->getResults();

        return new ViewModel(array(
            'tipos' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));    
    }

    public function editarAction()
    {   
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id tipo que se quiere modificar exista
        if(!TipoQuery::create()->filterByIdtipo($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('tipo', array(
                'action' => 'nuevo'
            ));
        }

            //Instanciamos nuestro tipo
            $tipo = TipoQuery::create()->findPk($id);
                        
            //Instanciamos nuestro formulario
            $tipoForm = new TipoForm();
            
            //Le ponemos los datos de nuestro tipo a nuestro formulario
            $tipoForm->setData($tipo->toArray(BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
                
                //Instanciamos nuestro filtro
                $tipoFilter = new TipoFilter();

                //Le ponemos nuestro filtro a nuesto fromulario
                $tipoForm->setInputFilter($tipoFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $tipoForm->setData($request->getPost());
                
                //Validamos nuestro formulario
                if($tipoForm->isValid()){
                    
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto tipo
                    foreach ($tipoForm->getData() as $tipoKey => $tipoValue){
                        $tipo->setByName($tipoKey, $tipoValue, \BasePeer::TYPE_FIELDNAME);
                    }
   
                    //Guardamos en nuestra base de datos
                    $tipo->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Tipo de Articulo guardado exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('tipo');

                }else{
                    
                }  
            }
            
            return new ViewModel(array(
                'id'  => $id,
                'tipoForm' => $tipoForm,
            ));
        

    }

    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id tipo que se quiere eliminar exista
        if(!TipoQuery::create()->filterByIdtipo($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('tipo');
        }
        
                  
            //Instanciamos nuestro tipo
            $tipo = TipoQuery::create()->findPk($id);
            
            $tipo->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Tipo de Articulo eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('tipo');
            
        

    }
}