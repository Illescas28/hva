<?php

namespace Cajachica\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ConceptoController extends AbstractActionController
{
    public function listarAction()
    {
        $collection = \ConceptocajachicaQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
       
        return new ViewModel(array(
            'collection'   => $collection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }
    
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        //Intanciamos nuestro formulario
        $form = new \Cajachica\Form\ConceptoForm();
        
        if ($request->isPost()) { //Si hicieron POST
            
            //Instanciamos nuestro filtro
            $filter = new \Cajachica\Filter\ConceptoFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $form->setInputFilter($filter->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $form->setData($request->getPost());
            
            //Validamos nuestro formulario
            if($form->isValid()){
   
                //Instanciamos un nuevo objeto de nuestro objeto lugar
                $entity = new \Conceptocajachica();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Lugar
                foreach ($form->getData() as $key => $value){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
                
                //Guardamos en nuestra base de datos
                $entity->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Gasto guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                return $this->redirect()->toRoute('cajachica-concepto');
                
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
        if(!\ConceptocajachicaQuery::create()->filterByIdconceptocajachica($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('cajachica-concepto', array(
                'action' => 'nuevo'
            ));
        }

            //Instanciamos nuestro lugar
            $entity = \ConceptocajachicaQuery::create()->findPk($id);
            
            //Instanciamos nuestro formulario
            $form = new \Cajachica\Form\ConceptoForm();

            //Le ponemos los datos de nuestro lugar a nuestro formulario
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
               
                //Instanciamos nuestro filtro
                $filter = new \Cajachica\Filter\ConceptoFilter();

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
                    return $this->redirect()->toRoute('cajachica-concepto');

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
        if(!\ConceptocajachicaQuery::create()->filterByIdconceptocajachica($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('cajachica-concepto', array(
                'action' => 'nuevo'
            ));
        }
        
            //Instanciamos nuestro lugar
            $entity = \ConceptocajachicaQuery::create()->findPk($id);
            
            $entity->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Concepto eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('cajachica-concepto');

    }
    
    public function movimientosAction(){
        
        $collection = \CajachicaQuery::create()->joinConceptocajachica()->orderBy('idcajachica', 'desc')->withColumn('conceptocajachica_nombre')->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        
       
        return new ViewModel(array(
            'collection'   => $collection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
        
    }
    
    public function getconceptosAction(){
        
        $collection = \ConceptocajachicaQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        
        $conceptos_autcomplete = array();
        
        foreach ($collection as $entity){
            $tmp['value'] = $entity["idconceptocajachica"];
            $tmp['label'] = $entity["conceptocajachica_nombre"];
            $conceptos_autcomplete[] = $tmp;
        }
        return $this->getResponse()->setContent(\Zend\Json\Json::encode($conceptos_autcomplete));
        
    }
    
    
    public function nuevomovimientoAction(){
        
      $request = $this->request;
      
      if($request->isPost()){
          
          $post_data = $request->getPost();
          
          //Creamos nuestro movimiento
          
          
          
          
          
//           //Cachamos el valor desde nuestro params
//        $id = (int) $this->params()->fromRoute('id');
//        //Verificamos que el Id lugar que se quiere modificar exista
//        if(!\ConceptocajachicaQuery::create()->filterByIdconceptocajachica($id)->exists()){
//            $id =0;
//        }
//        //Si es incorrecto redireccionavos al action nuevo
//        if (!$id) {
//            return $this->redirect()->toRoute('cajachica-concepto', array(
//                'action' => 'nuevo'
//            ));
//        }
//        
//            //Instanciamos nuestro lugar
//            $entity = \ConceptocajachicaQuery::create()->findPk($id);
//            
//            $entity->delete();
//            
//            //Agregamos un mensaje
//            $this->flashMessenger()->addMessage('Concepto eliminado exitosamente!');
//
//            //Redireccionamos a nuestro list
//            return $this->redirect()->toRoute('cajachica-concepto');
          
          echo '<pre>';var_dump($post_data); echo '<pre>';exit();
      }
        
    }
    
    

    
    
}
