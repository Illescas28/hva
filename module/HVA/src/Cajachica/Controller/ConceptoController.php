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
        
        $collection = \CajachicaQuery::create()->joinConceptocajachica()->orderBy('idcajachica', 'asc')->withColumn('conceptocajachica_nombre')->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        
        $current_balance = 0.00;
        if(\CajachicaQuery::create()->exists()){
            $cajachica = \CajachicaQuery::create()->orderByIdcajachica('asc')->findOne();
            $current_balance = $cajachica->getCajachicaBalance();
        }
       
        return new ViewModel(array(
            'current_balance' => $current_balance,
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
          
          $fecha = \DateTime::createFromFormat('d/m/Y', $post_data['cajachica_fecha']);
            
          //Creamos nuestro movimiento
          $cajachica = new \Cajachica();
          $cajachica->setCajachicaFecha($fecha->format('Y-m-d'))
                    ->setIdconceptocajachica($post_data['idconcepto'])
                    ->setCajachicaTipomovimiento($post_data['cajachica_tipomoviento'])
                    ->setCajachicaCantidad($post_data['cajachica_cantidad'])
                    ->setCajachicaComprobante($post_data['cajachica_comprobante'])
                    ->setCajachicaPacientedoctor($post_data['cajachica_pacientedoctor'])
                    ->setCajachicaNota($post_data['cajachica_nota']);
   
          
           
          //Ya existe un movimiento?
          if(\CajachicaQuery::create()->exists()){
             
              //Modificamos el balance de nuestra caja
              $first_row = \CajachicaQuery::create()->orderByIdcajachica('asc')->findOne();
              $current_balance = $first_row->getCajachicaBalance();
              if($post_data['cajachica_tipomoviento'] == 'cargo'){
                  $new_balance = $current_balance + $post_data['cajachica_cantidad'];
              }else{
                  $new_balance = $current_balance - $post_data['cajachica_cantidad'];
              }
              $first_row->setCajachicaBalance($new_balance);
              $first_row->save();   
          }else{
              $cajachica->setCajachicaBalance($post_data['cajachica_cantidad']);
          }
          
          $cajachica->save();

          if(!$cajachica->isPrimaryKeyNull()){
              return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true, 'data' => array('idconceptocajachica' => $cajachica->getIdconceptocajachica() ,'id' => $cajachica->getIdcajachica(),'fecha' => $cajachica->getCajachicaFecha('d-m-Y'),'fecha_js' => $cajachica->getCajachicaFecha('m/d/Y') ))));
          }else{
              return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false)));
          }
      }
        
    }
    
    public function eliminarmovmientoAction(){
        
        $request = $this->request;
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $id = $post_data['id'];
            
            $movmiento = \CajachicaQuery::create()->findPk($id);
            $movmiento_array = $movmiento->toArray(\BasePeer::TYPE_FIELDNAME);

            //Recalculamos el balance
            $first_row = \CajachicaQuery::create()->orderByIdcajachica('asc')->findOne();
            $first_row_array = $first_row->toArray();
            
            //Si estamos eliminando el registro que tiene el balance
            if($first_row->getIdcajachica() == $id){ 
                
                //Le ponemos el balance al siguiente registro s lo hay
                $movmiento->delete();
                if(\CajachicaQuery::create()->exists()){
                    $first_row = \CajachicaQuery::create()->orderByIdcajachica('asc')->findOne();
                    $first_row->setCajachicaBalance($first_row_array["CajachicaBalance"]);
                    $first_row->save();
                    
                }
                 
            }else{
                //De lo contrario solo eliminmos
                $movmiento->delete();
            }

            //Recalculamos el balance
            if(\CajachicaQuery::create()->exists()){
                 $first_row = \CajachicaQuery::create()->orderByIdcajachica('asc')->findOne();
                
                 $current_balance = $first_row->getCajachicaBalance();
                 
                if($movmiento_array["cajachica_tipomovimiento"] == 'cargo'){
                   
                    $new_balance = $current_balance - $movmiento_array['cajachica_cantidad'];

                }else{
                    $new_balance = $current_balance + $movmiento_array['cajachica_cantidad'];
                }
                
                $first_row->setCajachicaBalance($new_balance);
                $first_row->save();
                return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true, 'data' => array('new_balance' => $new_balance))));
            }else{
                return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true,'data' => array('new_balance' => 0))));
            }

        }
        
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        $viewModel->setTemplate('hva/modal/eliminar');
        $viewModel->setVariable('message', 'Esta seguro que desea eliminar este movimiento?');
        return $viewModel;
        
    }
    
    
        public function editarmovmientoAction(){
        $request = $this->request;
        if($request->isPost()){
            
            $post_data = $request->getPost();
           
             $id = $post_data['idcajachica'];
             
             $caja = \CajachicaQuery::create()->findOneByIdcajachica($id);
             $caja_old = $caja->toArray(\BasePeer::TYPE_FIELDNAME);
             
             $caja_fecha = \DateTime::createFromFormat('d-m-Y', $post_data['cajachica_fecha']);

             $caja->setIdconceptocajachica($post_data['idconcepto'])
                   ->setCajachicaFecha($caja_fecha->format('Y-m-d'))
                   ->setCajachicaTipomovimiento($post_data["cajachica_tipomoviento"])
                   ->setCajachicaCantidad($post_data['cajachica_cantidad'])
                   ->setCajachicaComprobante($post_data['cajachica_comprobante'])
                   ->setCajachicaPacientedoctor($post_data['cajachica_pacientedoctor'])
                   ->setCajachicaNota($post_data['cajachica_nota']);
           
             $caja->save();
             
             //Actualizamos nustro balance
             $first_row = \CajachicaQuery::create()->orderByIdcajachica('asc')->findOne();
             $current_balance = $first_row->getCajachicaBalance();
             if($caja_old['cajachica_tipomovimiento'] == 'cargo'){
                 $reset_balance =  $current_balance - $caja_old['cajachica_cantidad'];
                 $newbalance = $reset_balance + $caja->getCajachicaCantidad();
             }else{
                 $reset_balance =  $current_balance + $caja_old['cajachica_cantidad'];
                 $newbalance = $reset_balance - $caja->getCajachicaCantidad();
             }
             $first_row->setCajachicaBalance($newbalance);
             $first_row->save();

             
             $caja = \CajachicaQuery::create()->joinConceptocajachica()->withColumn('conceptocajachica_nombre')->findOneByIdcajachica($id);
             $caja_array = $caja->toArray(\BasePeer::TYPE_FIELDNAME);
             
             $caja_array['new_balance'] = $newbalance;
             $caja_array['caja_fecha'] = $caja_fecha->format('d-m-Y');
             $caja_array['caja_fecha_js'] = $caja_fecha->format('m/d/Y');
             $caja_array['cajatransaccion_nombre'] = $caja->getConceptocajachica()->getConceptocajachicaNombre();
             
              
             return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true, 'caja' => $caja_array)));
             
            
        }
        
        if($this->params()->fromQuery('id')){
            
            $id = $this->params()->fromQuery('id');
            
            $caja = \CajachicaQuery::create()->joinConceptocajachica()->withColumn('conceptocajachica_nombre')->findOneByIdcajachica($id)->toArray(\BasePeer::TYPE_FIELDNAME);

            $dateJS = new \DateTime($caja['cajachica_fecha']);
            
            $caja['cajachica_fecha'] = $dateJS->format('d-m-Y');
            //echo '<pre>';var_dump($caja); echo '<pre>';exit();
            $viewModel = new ViewModel();
            $viewModel->setTerminal(true);
            $viewModel->setVariable('caja', $caja);
            return $viewModel;
            
        }
        
        
    }
    
    

    
    
}
