<?php

namespace Bancos\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ConceptoController extends AbstractActionController
{
    public function listarAction()
    {
        $collection = \ConceptobancoQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
       
        return new ViewModel(array(
            'collection'   => $collection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }
    
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        //Intanciamos nuestro formulario
        $form = new \Bancos\Form\ConceptoForm();
        
        if ($request->isPost()) { //Si hicieron POST
            
            //Instanciamos nuestro filtro
            $filter = new \Bancos\Filter\ConceptoFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $form->setInputFilter($filter->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $form->setData($request->getPost());
            
            //Validamos nuestro formulario
            if($form->isValid()){
   
                //Instanciamos un nuevo objeto de nuestro objeto lugar
                $entity = new \Conceptobanco();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Lugar
                foreach ($form->getData() as $key => $value){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
                
                //Guardamos en nuestra base de datos
                $entity->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Concepto guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('bancos-concepto');
                
            }else{
                var_dump($form->getMessages());   
            }
        }
        
        return new ViewModel(array(
            'form' => $form,
        ));

    }

    
    public function editarAction()
    {   
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id lugar que se quiere modificar exista
        if(!\ConceptobancoQuery::create()->filterByIdbancotransaccion($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('bancos-concepto', array(
                'action' => 'nuevo'
            ));
        }

            //Instanciamos nuestro lugar
            $entity = \ConceptobancoQuery::create()->findPk($id);
            
            //Instanciamos nuestro formulario
            $form = new \Bancos\Form\ConceptoForm();

            //Le ponemos los datos de nuestro lugar a nuestro formulario
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
               
                //Instanciamos nuestro filtro
                $filter = new \Bancos\Filter\ConceptoFilter();

                //Le ponemos nuestro filtro a nuesto fromulario
                $form->setInputFilter($filter->getInputFilter());

                //Le ponemos los datos a nuestro formulario
                $form->setData($request->getPost());
                
                //Validamos nuestro formulario
                if($form->isValid()){
                    
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Lugar
                    foreach ($form->getData() as $key => $value){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                    
                    //Guardamos en nuestra base de datos
                    $entity->save();

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Concepto modificado exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('bancos-concepto');

                }else{
                    
                }  
            }
            
            return new ViewModel(array(
                'id'  => $id,
                'form' => $form,
            ));
        

    }
    
    public function eliminarAction()
    {
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id lugar que se quiere modificar exista
        if(!\ConceptobancoQuery::create()->filterByIdbancotransaccion($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('bancos-concepto', array(
                'action' => 'nuevo'
            ));
        }
        
            //Instanciamos nuestro lugar
            $entity = \ConceptobancoQuery::create()->findPk($id);
            
            $entity->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Concepto eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('bancos-concepto');

    }
    
    

    
    
}
