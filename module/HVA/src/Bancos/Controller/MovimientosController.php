<?php

namespace Bancos\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class MovimientosController extends AbstractActionController
{
    public function indexAction()
    {
        
        $collection = \BancoQuery::create()->joinConceptobanco()->orderBy('idbanco', 'asc')->withColumn('bancotransaccion_nombre')->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        $current_balance = 0.00;
        if(\BancoQuery::create()->exists()){
            $bancos = \BancoQuery::create()->orderByIdbanco('asc')->findOne();
            $current_balance = $bancos->getBancoBalance();
        }
       
        return new ViewModel(array(
            'current_balance' => $current_balance,
            'collection'   => $collection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
        
    }
    
    public function getconceptosAction(){
        
        $collection = \ConceptobancoQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);
        
        $conceptos_autcomplete = array();
        
        foreach ($collection as $entity){
            $tmp['value'] = $entity["idbancotransaccion"];
            $tmp['label'] = $entity["bancotransaccion_nombre"];
            $conceptos_autcomplete[] = $tmp;
        }
        return $this->getResponse()->setContent(\Zend\Json\Json::encode($conceptos_autcomplete));
        
    }
    
    public function nuevomovimientoAction(){

      $request = $this->request;
      
      if($request->isPost()){
          
          $post_data = $request->getPost();
          
          $fecha = \DateTime::createFromFormat('d/m/Y', $post_data['banco_fecha']);
            
          //Creamos nuestro movimiento
          $banco = new \Banco();
          $banco->setBancoFecha($fecha->format('Y-m-d'))
                    ->setIdconceptobanco($post_data['idconcepto'])
                    ->setBancoTipomovimiento($post_data['banco_tipomoviento'])
                    ->setBancoCantidad($post_data['banco_cantidad'])
                    ->setBancoComprobante($post_data['banco_comprobante'])
                    ->setBancoNota($post_data['banco_nota']);
   
          
           
          //Ya existe un movimiento?
          if(\BancoQuery::create()->exists()){  
              
              //Modificamos el balance de nuestra caja
              $first_row = \BancoQuery::create()->orderByIdbanco('asc')->findOne();
              $current_balance = $first_row->getBancoBalance();
              if($post_data['banco_tipomoviento'] == 'cargo'){
                  $new_balance = $current_balance + $post_data['banco_cantidad'];
              }else{
                  $new_balance = $current_balance - $post_data['banco_cantidad'];
              }
              $first_row->setBancoBalance($new_balance);
              $first_row->save();   
          }else{
              if($post_data['banco_tipomoviento'] == 'cargo'){
                  $new_balance = 0 + $post_data['banco_cantidad'];
                  $banco->setBancoBalance($new_balance);
              }else{
                  $new_balance = 0 - $post_data['banco_cantidad'];
                   $banco->setBancoBalance($new_balance);
              }
          }
          
          $banco->save();
          
          $fecha = new \DateTime($banco->getBancoFecha());
          $fechaJS = $fecha->format('m/d/Y');
          $fecha = $fecha->format('d-m-Y');
          if(!$banco->isPrimaryKeyNull()){
              return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true, 'data' => array('id' => $banco->getIdbanco(),'fecha' => $fecha,'fecha_js' => $fechaJS))));
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
            
            $movmiento = \BancoQuery::create()->findPk($id);
            $movmiento_array = $movmiento->toArray(\BasePeer::TYPE_FIELDNAME);

            //Recalculamos el balance
            $first_row = \BancoQuery::create()->orderByIdbanco('asc')->findOne();
            $first_row_array = $first_row->toArray();
            
            //Si estamos eliminando el registro que tiene el balance
            if($first_row->getIdbanco() == $id){ 
                
                //Le ponemos el balance al siguiente registro s lo hay
                $movmiento->delete();
                if(\BancoQuery::create()->exists()){
                    $first_row = \BancoQuery::create()->orderByIdbanco('asc')->findOne();
                    $first_row->setBancoBalance($first_row_array["BancoBalance"]);
                    $first_row->save();
                    
                }
                 
            }else{
                //De lo contrario solo eliminmos
                $movmiento->delete();
            }

            //Recalculamos el balance
            if(\BancoQuery::create()->exists()){
                 $first_row = \BancoQuery::create()->orderByIdbanco('asc')->findOne();
                
                 $current_balance = $first_row->getBancoBalance();
                 
                if($movmiento_array["banco_tipomovimiento"] == 'cargo'){
                   
                    $new_balance = $current_balance - $movmiento_array['banco_cantidad'];

                }else{
                    $new_balance = $current_balance + $movmiento_array['banco_cantidad'];
                }
                
                $first_row->setBancoBalance($new_balance);
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

             $id = $post_data['idbanco'];
             
             $banco = \BancoQuery::create()->findOneByIdbanco($id);
             $banco_old = $banco->toArray(\BasePeer::TYPE_FIELDNAME);
             
             $banco_fecha = \DateTime::createFromFormat('d-m-Y', $post_data['banco_fecha']);

             $banco->setIdconceptobanco($post_data['idconcepto'])
                   ->setBancoFecha($banco_fecha->format('Y-m-d'))
                   ->setBancoTipomovimiento($post_data["banco_tipomoviento"])
                   ->setBancoCantidad($post_data['banco_cantidad'])
                   ->setBancoComprobante($post_data['banco_comprobante'])
                   ->setBancoNota($post_data['banco_nota']);
             
             $banco->save();
             
             //Actualizamos nustro balance
             $first_row = \BancoQuery::create()->orderByIdbanco('asc')->findOne();
             $current_balance = $first_row->getBancoBalance();
             if($banco_old['banco_tipomovimiento'] == 'cargo'){
                 $reset_balance =  $current_balance - $banco_old['banco_cantidad'];
                 $newbalance = $reset_balance + $banco->getBancoCantidad();
             }else{
                 $reset_balance =  $current_balance + $banco_old['banco_cantidad'];
                 $newbalance = $reset_balance - $banco->getBancoCantidad();
             }
             $first_row->setBancoBalance($newbalance);
             $first_row->save();

             
             $banco = \BancoQuery::create()->joinConceptobanco()->withColumn('bancotransaccion_nombre')->findOneByIdbanco($id);
             $banco_array = $banco->toArray(\BasePeer::TYPE_FIELDNAME);
             
             $banco_array['new_balance'] = $newbalance;
             $banco_array['banco_fecha'] = $banco_fecha->format('d-m-Y');
             $banco_array['banco_fecha_js'] = $banco_fecha->format('m/d/Y');
             $banco_array['bancotransaccion_nombre'] = $banco->getConceptobanco()->getBancotransaccionNombre();
             
              
             return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true, 'banco' => $banco_array)));
             
            
        }
        
        if($this->params()->fromQuery('id')){
            
            $id = $this->params()->fromQuery('id');
            
            $banco = \BancoQuery::create()->joinConceptobanco()->withColumn('bancotransaccion_nombre')->findOneByIdbanco($id)->toArray(\BasePeer::TYPE_FIELDNAME);
           
            $dateJS = new \DateTime($banco['banco_fecha']);
            
            $banco['banco_fecha'] = $dateJS->format('d-m-Y');
            //echo '<pre>';var_dump($banco); echo '<pre>';exit();
            $viewModel = new ViewModel();
            $viewModel->setTerminal(true);
            $viewModel->setVariable('banco', $banco);
            return $viewModel;
            
        }
        
        
    }
    
    
}
