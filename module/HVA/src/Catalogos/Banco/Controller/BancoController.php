<?php

namespace Catalogos\Banco\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Banco\Form\BancoForm;

//// Filter ////
use Catalogos\Banco\Filter\BancoFilter;

//// Propel ////
use Banco;
use BancoQuery;
use BasePeer;


class BancoController extends AbstractActionController
{
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        //Intanciamos nuestro formulario
        $bancoForm = new BancoForm();
        
        if ($request->isPost()) { //Si hicieron POST
            
            //Instanciamos nuestro filtro
            $bancoFilter = new BancoFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $bancoForm->setInputFilter($bancoFilter->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $bancoForm->setData($request->getPost());
            
            //Validamos nuestro formulario
            if($bancoForm->isValid()){
   
                //Instanciamos un nuevo objeto de nuestro objeto banco
                $banco = new Banco();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Banco
                foreach ($bancoForm->getData() as $bancoKey => $bancoValue){
                    $banco->setByName($bancoKey, $bancoValue, \BasePeer::TYPE_FIELDNAME);
                }
                
                //Guardamos en nuestra base de datos
                $banco->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Cuenta bancaria guardada exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('banco');
                
            }else{
                var_dump($bancoForm->getMessages());   
            }
        }
        
        return new ViewModel(array(
            'bancoForm' => $bancoForm,
        ));

    }

    public function listarAction()
    {
        $bancoQuery = new BancoQuery();

        $result = $bancoQuery->paginate($page,$limit);

        $dataCollection = $result->getResults();
        
        return new ViewModel(array(
            'bancos' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }

    public function editarAction()
    {   
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id banco que se quiere modificar exista
        if(!BancoQuery::create()->filterByIdbanco($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('banco', array(
                'action' => 'nuevo'
            ));
        }

            //Instanciamos nuestro banco
            $banco = bancoQuery::create()->findPk($id);
            
            //Instanciamos nuestro formulario
            $bancoForm = new BancoForm();
            
            //Le ponemos los datos de nuestro banco a nuestro formulario
            $bancoForm->setData($banco->toArray(BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
               
                //Instanciamos nuestro filtro
                $bancoFilter = new BancoFilter();

                //Le ponemos nuestro filtro a nuesto fromulario
                $bancoForm->setInputFilter($bancoFilter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $bancoForm->setData($request->getPost());
                
                //Validamos nuestro formulario
                if($bancoForm->isValid()){
                    
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Banco
                    foreach ($bancoForm->getData() as $bancoKey => $bancoValue){
                        $banco->setByName($bancoKey, $bancoValue, \BasePeer::TYPE_FIELDNAME);
                    }
                    
                    //Guardamos en nuestra base de datos
                    $banco->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Banco guardada exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('banco');

                }else{
                    
                }  
            }
            
            return new ViewModel(array(
                'id'  => $id,
                'bancoForm' => $bancoForm,
            ));
        

    }

    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id banco que se quiere eliminar exista
        if(!BancoQuery::create()->filterByIdbanco($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('banco');
        }
        
        
            
            //Instanciamos nuestro banco
            $banco = BancoQuery::create()->findPk($id);
            
            $banco->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Cuenta bancaria eliminada exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('banco');
            
        

    }
}

