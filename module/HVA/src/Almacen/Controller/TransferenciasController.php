<?php

namespace Almacen\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TransferenciasController extends AbstractActionController
{
    public function listarAction()
    {
        $transferencias = \TraspasoQuery::create()->find();
        $transferenciasTable = array();
        foreach ($transferencias as $transferencia){
            $transferencia_fecha = new \DateTime($transferencia->getTraspasoFecha());
            $tmp['id'] = $transferencia->getIdinventariolugar();
            $tmp['fecha'] = $transferencia_fecha->format('d-m-Y');
            $tmp['remitente'] = $transferencia->getLugarRelatedByIdlugarremitente()->getLugarNombre();
            $tmp['receptor'] = $transferencia->getLugarRelatedByIdlugardestinatario()->getLugarNombre();
            $tmp['cantidad'] = $transferencia->getTraspasodetalless()->count();
            $transferenciasTable[] = $tmp;
        }
        
        return new ViewModel(array(
            'transferencias'         => $transferenciasTable,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }
    
    public function nuevoAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
              
                
                $traspaso_fecha = \DateTime::createFromFormat('d/m/Y',$post_data['traspaso_fecha']);
            
                //Si existen items en el traspaso
                if(isset($post_data["traspaso_detalles"])){
                    //Creamos una nueva orden donde vamos a registrar el traspaso
                    $orden = new \Ordencompra();
                    $orden->setIdproveedor(1) //Setiamos el proveedor HVA
                          ->setOrdencompraNofactura($traspaso_fecha->getTimestamp())
                          ->setOrdencompraFecha($traspaso_fecha->format('Y-m-d h:m:s'))
                          ->setOrdencompraImporte(0.00)
                          ->setOrdencompraStatus('inventario')
                          ->setOrdencompraFechaapagar($traspaso_fecha->format('Y-m-d'))
                          ->save();
                    
                    //Generamos el traspaso
                    if(!\TraspasoQuery::create()->exists()){
                        $idtraspaso = 1;
                    }else{
                        $lastRow = \TraspasoQuery::create()->orderByIdinventariolugar(\Criteria::DESC)->find()->toArray();
                        $idtraspaso = $lastRow[0]['Idinventariolugar'] + 1;
                       
                    }
                   
                    
                    $traspaso = new \Traspaso();
                    $traspaso_fecha = \DateTime::createFromFormat('d/m/Y',$post_data['traspaso_fecha']);
                    $traspaso->setIdinventariolugar($idtraspaso);
                    $traspaso->setTraspasoFecha($traspaso_fecha->format('Y-m-d h:m:s'));
                    $traspaso->setIdordencompra($orden->getIdordencompra());
                    $traspaso->setTraspasoStatus('recibido');
                    $traspaso->setIdlugarremitente($post_data['traspaso_idlugarorigen']);
                    $traspaso->setIdlugardestinatario($post_data["traspaso_idlugardestinatario"]);
                    $traspaso->save();
                    
                    $idtraspaso = $traspaso->getIdinventariolugar();
                    
                    //Se guardo con exito la orden
                    if((!$orden->isPrimaryKeyNull())){
                        $idorden = $orden->getIdordencompra();
                        //Modificamos el idorden de nuestro traspaso
                        
                        //Insertamos los orden items
                        foreach ($post_data["traspaso_detalles"] as $detalle){
                            //Agregamos los detalles del traspaso
                           
                            $traspaso_detalle = new \Traspasodetalles();
                            $traspaso_detalle->setIdtraspaso($idtraspaso)
                                             ->setIdlugarinventario($detalle["idlugarinventario"])
                                             ->setTraspasoCantidad($detalle["traspaso_cantidad"])
                                             ->save();
                            

                            //Agregamos el order item a la orden
                            $orden_detalle = new \Ordencompradetalle();
                            $orden_detalle->setIdordencompra($idorden)
                                          ->setIdarticulovariante($detalle["idarticulovariante"])
                                          ->setOrdencompradetalleCantidad($detalle["traspaso_cantidad"])
                                          ->setOrdencompradetalleCosto(0.00)
                                          ->setOrdencompradetallePrecio(0.00)
                                          ->setOrdencompradetalleImporte(0.00);
                            if($detalle['caducidad'] != 'N/D'){
                                $caducidad = \DateTime::createFromFormat('m/Y', $detalle['caducidad']);
                                $orden_detalle->setOrdencompradetalleCaducidad($caducidad->format('Y-m-d'));
                            }
                            
                            $orden_detalle->save();
                            
                            //Insertamos en nuestro almacen destinatario
                            $lugar_inventario = new \Lugarinventario();
                            $lugar_inventario->setIdlugar($post_data["traspaso_idlugardestinatario"])
                                             ->setIdordencompradetalle($orden_detalle->getIdordencompradetalle())
                                             ->setLugarinventarioCantidad($orden_detalle->getOrdencompradetalleCantidad())
                                             ->save();
                            
                            //Restamos del lugarinventario remitente (almacen general)
                            $lugar_inventario = \LugarinventarioQuery::create()->findPk($detalle["idlugarinventario"]);
                            $current_stock = $lugar_inventario->getLugarinventarioCantidad();
                            $new_stock = $current_stock - $orden_detalle->getOrdencompradetalleCantidad();
                            $lugar_inventario->setLugarinventarioCantidad($new_stock)
                                             ->save();
                                          
                            
                            
                        }
                        
                    }   
                }
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Transferencia realizada exitosamente!');
                return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true)));
            
            
        }
        
        //Instanciamos nuestro lugares
        $lugaresCollection = \LugarQuery::create()->find();
        $lugarArray = array();
        foreach ($lugaresCollection as $lugar){
            $lugarArray[] = array('value' => $lugar->getIdLugar(), 'name' => $lugar->getLugarNombre());
        }
        
        $viewModel = new ViewModel();
        $viewModel->setVariables(array(
            'lugares'       => $lugarArray,
        ));
        return $viewModel; 
       
    }
    
    public function getproductosAction(){
        $productos = array();
        
        //$query = \LugarinventarioQuery::create()->filterByIdlugar(1)->useOrdencompradetalleQuery()->groupByIdarticulovariante()->groupByOrdencompradetalleCaducidad()->withColumn('SUM(ordencompradetalle.ordencompradetalle_cantidad)','suma')->endUse()->find();
        $query = \LugarinventarioQuery::create()->filterByIdlugar(1)->joinOrdencompradetalle()->withColumn('SUM(ordencompradetalle_cantidad)','total')->withColumn('ordencompradetalle_caducidad')->withColumn('idarticulovariante')->groupBy('idarticulovariante')->groupBy('ordencompradetalle_caducidad')->find();

        foreach ($query->toArray() as $inventario){
           
            $articulo = \ArticulovarianteQuery::create()->findPk($inventario['idarticulovariante']);
            //Nombre
            $tmp['idarticulovariante'] = $inventario['idarticulovariante'];
            $tmp['id'] = $inventario['Idlugarinventario'];
            $tmp['nombre'] = $articulo->getArticulo()->getArticuloNombre();
            $tmp['costo'] = $articulo->getArticulovarianteCosto();
            //Descripcion (variaciones)
            $variantes = \ArticulovariantevalorQuery::create()->findByIdarticulovariante($articulo->getIdarticulovariante());
            $tmp['descripcion'] = '';
            $variantes_count = $variantes->count(); $count = 0;
            foreach ($variantes as $variante){
                $count ++;
                $tmp['descripcion'].= \PropiedadQuery::create()->findOneByIdpropiedad($variante->getIdpropiedad())->getPropiedadNombre(); 
                $tmp['descripcion'].= ':'.\PropiedadvalorQuery::create()->findOneByIdpropiedadvalor($variante->getIdpropiedadvalor())->getPropiedadvalorNombre(); //PropiedadValor
                if($count<$variantes_count){
                    $tmp['descripcion'].=' - ';
                }
            }
            //existencias
           
            $tmp['existencias'] = (int)$inventario['LugarinventarioCantidad'];
            if(!is_null($inventario['ordencompradetalle_caducidad'])){
                $date = new \DateTime($inventario['ordencompradetalle_caducidad']);
                $tmp['caducidad'] = $date->format('m/Y');
            }else{
                $tmp['caducidad'] = 'N/D';
            }
            $tmp['label'] = $tmp['nombre'].' '.$tmp['descripcion'].' ; Existencias: ' .$tmp['existencias'] . '; Caducidad: '.$tmp['caducidad']; 
            //$tmp['caducidad'] = (!is_null($inventario['ordencompradetalle_caducidad'])) ? new \DateTime($inventario['ordencompradetalle_caducidad']) : 'N/D';
            $productos[] = $tmp;
       
        }
        return $this->getResponse()->setContent(\Zend\Json\Json::encode($productos));
    }
    
    public function getproductosbyalmacenAction(){
        
        $idlugar = $this->params()->fromQuery('id');
        
        $productos = array();
        
        //$query = \LugarinventarioQuery::create()->filterByIdlugar(1)->useOrdencompradetalleQuery()->groupByIdarticulovariante()->groupByOrdencompradetalleCaducidad()->withColumn('SUM(ordencompradetalle.ordencompradetalle_cantidad)','suma')->endUse()->find();
        $query = \LugarinventarioQuery::create()->filterByIdlugar($idlugar)->joinOrdencompradetalle()->withColumn('SUM(ordencompradetalle_cantidad)','total')->withColumn('ordencompradetalle_caducidad')->withColumn('idarticulovariante')->groupBy('idarticulovariante')->groupBy('ordencompradetalle_caducidad')->find();

        foreach ($query->toArray() as $inventario){
           
            $articulo = \ArticulovarianteQuery::create()->findPk($inventario['idarticulovariante']);
            //Nombre
            $tmp['idarticulovariante'] = $inventario['idarticulovariante'];
            $tmp['id'] = $inventario['Idlugarinventario'];
            $tmp['nombre'] = $articulo->getArticulo()->getArticuloNombre();
            $tmp['costo'] = $articulo->getArticulovarianteCosto();
            //Descripcion (variaciones)
            $variantes = \ArticulovariantevalorQuery::create()->findByIdarticulovariante($articulo->getIdarticulovariante());
            $tmp['descripcion'] = '';
            $variantes_count = $variantes->count(); $count = 0;
            foreach ($variantes as $variante){
                $count ++;
                $tmp['descripcion'].= \PropiedadQuery::create()->findOneByIdpropiedad($variante->getIdpropiedad())->getPropiedadNombre(); 
                $tmp['descripcion'].= ':'.\PropiedadvalorQuery::create()->findOneByIdpropiedadvalor($variante->getIdpropiedadvalor())->getPropiedadvalorNombre(); //PropiedadValor
                if($count<$variantes_count){
                    $tmp['descripcion'].=' - ';
                }
            }
            //existencias
           
            $tmp['existencias'] = (int)$inventario['LugarinventarioCantidad'];
            if(!is_null($inventario['ordencompradetalle_caducidad'])){
                $date = new \DateTime($inventario['ordencompradetalle_caducidad']);
                $tmp['caducidad'] = $date->format('m/Y');
            }else{
                $tmp['caducidad'] = 'N/D';
            }
            $tmp['label'] = $tmp['nombre'].' '.$tmp['descripcion'].' ; Existencias: ' .$tmp['existencias'] . '; Caducidad: '.$tmp['caducidad']; 
            //$tmp['caducidad'] = (!is_null($inventario['ordencompradetalle_caducidad'])) ? new \DateTime($inventario['ordencompradetalle_caducidad']) : 'N/D';
            $productos[] = $tmp;
       
        }
        return $this->getResponse()->setContent(\Zend\Json\Json::encode($productos));
    }
    
    
    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id articulo que se quiere eliminar exista
        if(!\TraspasoQuery::create()->filterByIdinventariolugar($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('empleados');
        }
        
            //Instanciamos nuestro articulo
            $traspaso = \TraspasoQuery::create()->findOneByIdinventariolugar($id);
            
            $traspaso_idorden = $traspaso->getIdOrdencompra();
           
            $traspaso_detalles = $traspaso->getTraspasodetalless();
            
            //Eliminamos los detalles y los regresamos a almacen general
            foreach ($traspaso_detalles as $detalle){
                //Instanciamos nuestro el lugar inventario del detalle
                $lugar_inventario = $detalle->getLugarinventario();
                $current_stock = $lugar_inventario->getLugarinventarioCantidad();
                $new_stock = $current_stock + $detalle->getTraspasoCantidad();
                $lugar_inventario->setLugarinventarioCantidad($new_stock);
                $lugar_inventario->save();
            }
            
            //Eliminamos el traspaso y la orden
            $traspaso->delete();
            \OrdencompraQuery::create()->findPk($traspaso_idorden)->delete();

            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Transferencia eliminada exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('almacen-transferencias');

    }
    
    public function editarAction(){
       
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id articulo que se quiere modificar exista
        if(!\TraspasoQuery::create()->filterByIdinventariolugar($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('almacen-transferencias', array(
                'action' => 'nuevo'
            ));
        }
        
         $request = $this->getRequest();
         
         $entity = \TraspasoQuery::create()->findOneByIdinventariolugar($id);
         $entity_array = $entity->toArray();
         $entity_array['detalles'] = array();
         
         $traspaso_detalles = $entity->getTraspasodetalless();
        
        foreach ($traspaso_detalles as $detalle){
            $tmp['costo'] = $detalle->getLugarinventario()->getOrdencompradetalle()->getArticulovariante()->getArticulovarianteCosto();
            $tmp['idarticulovariante'] = $detalle->getLugarinventario()->getOrdencompradetalle()->getIdarticulovariante();
            $tmp['idlugarinventario'] = $detalle->getIdlugarinventario();
            $tmp['cantidad'] = (int)$detalle->getTraspasoCantidad();
            $tmp['descripcion'] = '';
            
            $idarticulovariante = $detalle->getLugarinventario()->getOrdencompradetalle()->getIdarticulovariante();
            $articulovariante = \ArticulovarianteQuery::create()->findPk($idarticulovariante);
            $articulovariantevalor = \ArticulovariantevalorQuery::create()->filterByIdarticulovariante($idarticulovariante)->find();
            $tmp['descripcion'].= $articulovariante->getArticulo()->getArticuloNombre().' ';
            $propiedadCount = 0;
            foreach ($articulovariantevalor as $key => $value){
                $propiedadCount ++;
                $tmp['descripcion'].= \PropiedadQuery::create()->findOneByIdpropiedad($value->getIdpropiedad())->getPropiedadNombre(); //Propiedad
                $tmp['descripcion'].= ':'.\PropiedadvalorQuery::create()->findOneByIdpropiedadvalor($value->getIdpropiedadvalor())->getPropiedadvalorNombre(); //PropiedadValor
                if($propiedadCount<$articulovariantevalor->count()){
                   $tmp['descripcion'].=' - ';
                }
            }
            
            $tmp['caducidad'] = (!is_null($detalle->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetalleCaducidad('m/Y'))) ? $detalle->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetalleCaducidad('m/Y') : 'N/D';
            
            array_push($entity_array['detalles'], $tmp);

        }
        
        //Instanciamos nuestro lugares
        $lugaresCollection = \LugarQuery::create()->find();
        $lugarArray = array();
        foreach ($lugaresCollection as $lugar){
            $lugarArray[] = array('value' => $lugar->getIdLugar(), 'name' => $lugar->getLugarNombre());
        }

         if ($request->isPost()) { //Si hicieron POST
             
             $post_data = $request->getPost();
            //echo '<pre>';var_dump($entity_array); echo '<pre>';exit();
             //Eliminamos nuestra anterior transferencia
            
            $traspaso = \TraspasoQuery::create()->findOneByIdinventariolugar($id);
            
            $traspaso_idorden = $traspaso->getIdOrdencompra();
           
            $traspaso_detalles = $traspaso->getTraspasodetalless();
            
            //Eliminamos los detalles y los regresamos a almacen general
            foreach ($traspaso_detalles as $detalle){
                //Instanciamos nuestro el lugar inventario del detalle
                $lugar_inventario = $detalle->getLugarinventario();
                $current_stock = $lugar_inventario->getLugarinventarioCantidad();
                $new_stock = $current_stock + $detalle->getTraspasoCantidad();
                $lugar_inventario->setLugarinventarioCantidad($new_stock);
                $lugar_inventario->save();
            }
            
            //Eliminamos el traspaso y la orden
            $traspaso->delete();
            \OrdencompraQuery::create()->findPk($traspaso_idorden)->delete();
            
            /*
             * Creamos la nueva
             */
            
            $traspaso_fecha = \DateTime::createFromFormat('d/m/Y',$post_data['traspaso_fecha']);
            
                //Si existen items en el traspaso
                if(isset($post_data["traspaso_detalles"])){
                    //Creamos una nueva orden donde vamos a registrar el traspaso
                    $orden = new \Ordencompra();
                    $orden->setIdproveedor(1) //Setiamos el proveedor HVA
                          ->setOrdencompraNofactura($traspaso_fecha->getTimestamp())
                          ->setOrdencompraFecha($traspaso_fecha->format('Y-m-d h:m:s'))
                          ->setOrdencompraImporte(0.00)
                          ->setOrdencompraStatus('inventario')
                          ->setOrdencompraFechaapagar($traspaso_fecha->format('Y-m-d'))
                          ->save();
                    
                    //Generamos el traspaso
                    $traspaso = new \Traspaso();
                    $traspaso->setIdinventariolugar($entity_array['Idinventariolugar']);
                    $traspaso_fecha = \DateTime::createFromFormat('d/m/Y',$post_data['traspaso_fecha']);
                    $traspaso->setTraspasoFecha($traspaso_fecha->format('Y-m-d h:m:s'));
                    $traspaso->setIdordencompra($orden->getIdordencompra());
                    $traspaso->setTraspasoStatus('recibido');
                    $traspaso->setIdlugarremitente($post_data['traspaso_idlugarorigen']);
                    $traspaso->setIdlugardestinatario($post_data["traspaso_idlugardestinatario"]);
                    $traspaso->save();
                    
                    $idtraspaso = $traspaso->getIdinventariolugar();
                    
                    //Se guardo con exito la orden
                    if((!$orden->isPrimaryKeyNull())){
                        $idorden = $orden->getIdordencompra();
                        //Modificamos el idorden de nuestro traspaso
                        
                        //Insertamos los orden items
                        foreach ($post_data["traspaso_detalles"] as $detalle){
                            //Agregamos los detalles del traspaso
                           
                            $traspaso_detalle = new \Traspasodetalles();
                            $traspaso_detalle->setIdtraspaso($idtraspaso)
                                             ->setIdlugarinventario($detalle["idlugarinventario"])
                                             ->setTraspasoCantidad($detalle["traspaso_cantidad"])
                                             ->save();
                            

                            //Agregamos el order item a la orden
                            $orden_detalle = new \Ordencompradetalle();
                            $orden_detalle->setIdordencompra($idorden)
                                          ->setIdarticulovariante($detalle["idarticulovariante"])
                                          ->setOrdencompradetalleCantidad($detalle["traspaso_cantidad"])
                                          ->setOrdencompradetalleCosto(0.00)
                                          ->setOrdencompradetallePrecio(0.00)
                                          ->setOrdencompradetalleImporte(0.00);
                            if($detalle['caducidad'] != 'N/D'){
                                $caducidad = \DateTime::createFromFormat('m/Y', $detalle['caducidad']);
                                $orden_detalle->setOrdencompradetalleCaducidad($caducidad->format('Y-m-d'));
                            }
                            
                            $orden_detalle->save();
                            
                            //Insertamos en nuestro almacen destinatario
                            $lugar_inventario = new \Lugarinventario();
                            $lugar_inventario->setIdlugar($post_data["traspaso_idlugardestinatario"])
                                             ->setIdordencompradetalle($orden_detalle->getIdordencompradetalle())
                                             ->setLugarinventarioCantidad($orden_detalle->getOrdencompradetalleCantidad())
                                             ->save();
                            
                            //Restamos del lugarinventario remitente (almacen general)
                            $lugar_inventario = \LugarinventarioQuery::create()->findPk($detalle["idlugarinventario"]);
                            $current_stock = $lugar_inventario->getLugarinventarioCantidad();
                            $new_stock = $current_stock - $orden_detalle->getOrdencompradetalleCantidad();
                            $lugar_inventario->setLugarinventarioCantidad($new_stock)
                                             ->save();
                                          
                            
                            
                        }
                        
                    }   
                }
                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Transferencia modificada exitosamente!');
                return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true)));


             
             
             
         }
         
         return new ViewModel(array(
            'id'  => $id,
            'transferencia' => $entity_array,
             'lugares' => $lugarArray,
        ));

    }

    
    public function transferenciadetallesAction(){
        
        $id = $this->params()->fromQuery('id');
        $modalName = 'modal-preview-'.$id;
        
        $modal = array();
        
        $entity = \TraspasoQuery::create()->findOneByIdinventariolugar($id);
         
        $modal['id'] = $entity->getIdinventariolugar();
        $modal['fecha'] = $entity->getTraspasoFecha('d-m-Y');
        $modal['remitente'] = $entity->getLugarRelatedByIdlugarremitente()->getLugarNombre();
        $modal['receptor'] = $entity->getLugarRelatedByIdlugardestinatario()->getLugarNombre();
        $modal['detalles'] = array();
        
        $traspaso_detalles = $entity->getTraspasodetalless();
        
        foreach ($traspaso_detalles as $detalle){
            $tmp['cantidad'] = (int)$detalle->getTraspasoCantidad();
            $tmp['descripcion'] = '';
            
            $idarticulovariante = $detalle->getLugarinventario()->getOrdencompradetalle()->getIdarticulovariante();
            $articulovariante = \ArticulovarianteQuery::create()->findPk($idarticulovariante);
            $articulovariantevalor = \ArticulovariantevalorQuery::create()->filterByIdarticulovariante($idarticulovariante)->find();
            $tmp['descripcion'].= $articulovariante->getArticulo()->getArticuloNombre().' ';
            foreach ($articulovariantevalor as $key => $value){
                $propiedadCount ++;
                $tmp['descripcion'].= \PropiedadQuery::create()->findOneByIdpropiedad($value->getIdpropiedad())->getPropiedadNombre(); //Propiedad
                $tmp['descripcion'].= ':'.\PropiedadvalorQuery::create()->findOneByIdpropiedadvalor($value->getIdpropiedadvalor())->getPropiedadvalorNombre(); //PropiedadValor
                if($propiedadCount<$articulovariantevalor->count()){
                   $tmp['descripcion'].=' - ';
                }
            }
            
            $tmp['caducidad'] = (!is_null($detalle->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetalleCaducidad('m/Y'))) ? $detalle->getLugarinventario()->getOrdencompradetalle()->getOrdencompradetalleCaducidad('m/Y') : 'N/D';
            
            array_push($modal['detalles'], $tmp);

        }
        
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        $viewModel->setVariables(array(
            'modalName' => $modalName,
            'modal'     => $modal,
        )); 
        
        return $viewModel;
    }
    
    
}
