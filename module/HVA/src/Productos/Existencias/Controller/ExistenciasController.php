<?php

namespace Productos\Existencias\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;



class ExistenciasController extends AbstractActionController
{   

    public function indexAction()
    {

        //Obtenemos nuestros productos
        $articuloCollection = \ArticuloQuery::create()->find();
        
        //obtenemos nuestros almacenes
        $lugarCollection = \LugarQuery::create()->find();
        $lugarCollectionArray = array();
        foreach ($lugarCollection as $kl => $vl){
            $lugarCollectionArray[] = array('nombre' => $vl->getLugarNombre(),'id' => $vl->getIdLugar());
        }

        //De cada articulo obtenemos sus variaciones (articulovariante)
        $productos = array();
        foreach ($articuloCollection as $ka => $av){
            $tmp['nombre'] = $av->getArticuloNombre();
            $articulovarianteCollection = $av->getArticulovariantes();
            //Comenzamos a itinerar sobre las variaciones
            foreach ($articulovarianteCollection as $kav => $vav){
                $tmp['id'] = $vav->getIdarticulovariante();
                $tmp['codigo_barras'] = !is_null($vav->getArticuloVarianteCodigobarras()) ? $vav->getArticuloVarianteCodigobarras() : '';
                $tmp['precio'] = !is_null($vav->getArticuloVariantePrecio()) ? $vav->getArticuloVariantePrecio() : 0.00;      
                $tmp['imagen'] = $vav->getArticuloVarianteImagen();
                
                //Comenzamos a itinerar sobre los lugares disponibles
                foreach ($lugarCollection as $kl => $vl){
                    //Los agregamos a nuestro arreglo
                    $tmp['lugar'][$vl->getLugarNombre()] =0;
                }
                
                
                //Obtenemos las compras que se han realizado del articulo variante
                $compraDetalleCollection = \OrdencompradetalleQuery::create()->findByIdarticulovariante($vav->getIdArticuloVariante());
                
                //Itineramos en la coleccion de compras
                foreach ($compraDetalleCollection as $kcd => $vcd){
                    
                    $idCompraDetalle = $vcd->getIdOrdenCompraDetalle();
                    
                    //por cada compra detalle la buscamos en lugar inventario
                    $lugarInventarioCollection = \LugarinventarioQuery::create()->findByIdordencompradetalle($idCompraDetalle);
                    //empezamos a itinerar en los registros para irlos sumando a nuestro lugar
                    foreach ($lugarInventarioCollection as $kli => $vli){
                         
                        $lugarNombre = $vli->getLugar()->getLugarNombre();
                        $cantidad = $vli->getLugarinventarioCantidad();
                        $tmp['lugar'][$lugarNombre] += $cantidad;

                    }
                    
                }
 
                
                //Por cada valor obtenemos su variaciones
                $articuloVarianteValorCollection = \ArticulovariantevalorQuery::create()->filterByIdarticulovariante($vav->getIdarticulovariante())->find();
                //Comenzamos a itinerar sobre articulovariantevalor para obtener sus resultado
                $tmp['descripcion'] = '';
                $propiedadCount = 0;
                foreach ($articuloVarianteValorCollection as $kavv => $vavv){
                    $propiedadCount ++;
                    $tmp['descripcion'].= \PropiedadQuery::create()->findOneByIdpropiedad($vavv->getIdpropiedad())->getPropiedadNombre(); //Propiedad
                    $tmp['descripcion'].= ':'.\PropiedadvalorQuery::create()->findOneByIdpropiedadvalor($vavv->getIdpropiedadvalor())->getPropiedadvalorNombre(); //PropiedadValor
                    if($propiedadCount<$articuloVarianteValorCollection->count()){
                        $tmp['descripcion'].=' - ';
                    }
                }
               
                array_push($productos, $tmp);
            }  
        }

        //var_dump($this->flashMessenger()->getMessages());
        return new ViewModel(array(
            'flashMessages' => $this->flashMessenger()->getMessages(),
            'lugares' => $lugarCollectionArray,
            'productos' => $productos,
        ));
        
    }
    
    public function caducidadbylugarAction(){
        
        $request = $this->request;
        
        if($request->isPost()){
            

            $post_data = $request->getPost();
           
            
            
            //Creamos una nueva Orden de compra, donde el proveedor va ser el mismo hospital
            $orden = new \Ordencompra();
            $orden->setIdproveedor(1);
            $fecha = new \DateTime();
            $orden->setOrdencompraNofactura($fecha->getTimestamp());
            $orden->setOrdencompraFecha($fecha->format('Y-m-d'));
            $orden->setOrdencompraImporte(0);
            $orden->setOrdencompraStatus('inventario');
            $orden->setOrdencompraFechaapagar($fecha->format('Y-m-d'));
            
            $post_data_array = array();
            foreach ($post_data as $post){
                if(is_array($post)){
                    $post_data_array[]= $post;
                }
            }
             
            //Comenzamos a itinerar sobre el post
            foreach ($post_data_array as $row){
                
                //Si ya es una orden de compra detalle existente
                if(isset($row['id'])){
                    
                    //Creamos una instancia de la orden compra detalle
                    $ocd = \OrdencompradetalleQuery::create()->findPk($row['id']);
                    //Setiamos los valores
                    $newCaducidad = new \DateTime();         
                    //Si nos envian la fecha, le damos formato
                    if(!empty($row['caducidad'])){
                         $newCaducidad = $newCaducidad->createFromFormat('d/m/y', '01/'.$row['caducidad']);
                    }else{
                        $newCaducidad = null;
                    }
                    $ocd->setOrdencompradetalleCantidad($row['cantidad']);
                    
                    if(!is_null($newCaducidad)){
                        $ocd->setOrdencompradetalleCaducidad($newCaducidad->format('Y-m-d'));
                    }
                    
                    $ocd->save(); 
                    

                    //Ahora actualizamos en lugarInventario
                    $lugarInventario = \LugarinventarioQuery::create()->filterByIdlugar($post_data['idlugar'])->filterByIdordencompradetalle($ocd->getIdordencompradetalle())->findOne();
                    $lugarInventario->setLugarinventarioCantidad($row['cantidad']);
                    $lugarInventario->save();
                }else{
                    //En dado caso que no exista...
                    if(is_null($orden->getIdordencompra())){
                        $orden->save(); 
                    }
                    
                    
                    //Nueva instancia de orden compra detalle
                    $ocd = new \Ordencompradetalle();
                    $newCaducidad = new \DateTime();      
                    
                    //Si nos envian la fecha, le damos formato
                    if(!empty($row['caducidad'])){
                         $newCaducidad = $newCaducidad->createFromFormat('d/m/y', '01/'.$row['caducidad']);
                    }else{
                        $newCaducidad = null;
                    }
                   
                    $ocd->setIdordencompra($orden->getIdordencompra())
                        ->setIdarticulovariante($post_data['idarticulovariante'])
                        ->setOrdencompradetalleCantidad($row['cantidad'])
                        ->setOrdencompradetalleCosto(0)
                        ->setOrdencompradetallePrecio(0)
                        ->setOrdencompradetalleImporte(0);
                    
                    if(!is_null($newCaducidad)){
                        $ocd->setOrdencompradetalleCaducidad($newCaducidad->format('Y-m-d'));
                    }
                    
                    $ocd->save();                       
                    
                    //Hacemos el insert en lugar inventario
                    $lugarInventario = new \Lugarinventario();
                    $lugarInventario->setIdlugar($post_data['idlugar'])
                                    ->setIdordencompradetalle($ocd->getIdordencompradetalle())
                                    ->setLugarinventarioCantidad($ocd->getOrdencompradetalleCantidad())
                                    ->save();
                }
            }
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Existencias guardadas exitosamente!');
            
            //Redireccionamos
            return $this->redirect()->toUrl('/productos/existencias');
        }
        
        //Cachamos los datos de la url
        $idarticulovariante = $this->params()->fromQuery('idarticulovariante');
        $idlugar = $this->params()->fromQuery('idlugar');
        $descripcion = $this->params()->fromQuery('descripcion');
        $existencias = $this->params()->fromQuery('existencias');
        $lugarNombre = $this->params()->fromQuery('lugarNombre');
        $modalName = 'modal-producto-'.$idarticulovariante.'-lugar-'.$idlugar;
        
        $modal = array(
            'id' => $idarticulovariante,
            'idlugar' => $idlugar,
            'nombre' => \ArticulovarianteQuery::create()->findOneByIdarticulovariante($idarticulovariante)->getArticulo()->getArticuloNombre(),
            'descripcion' => $descripcion,
            'caducidad' => array(),
            'existencias' => $existencias,
            'lugar_nombre' => $lugarNombre,
        );
        
        //Obtenemos todas las ordenes de compra por idarticulovariante
        $ordenCompraDetalleCollection = \OrdencompradetalleQuery::create()->findByIdarticulovariante($idarticulovariante);
        //Comenzamos a itinerar
        foreach($ordenCompraDetalleCollection as $kocd => $vocd){
            $tmp['idordendetallecompra'] = $vocd->getIdordencompradetalle(); 
            
            if(!is_null($vocd->getOrdencompradetalleCaducidad())){
                $date = new \DateTime($vocd->getOrdencompradetalleCaducidad());
                $tmp['caducidad'] = $date->format('m/y'); 
            }else{
                $tmp['caducidad'] = '';
            }
             
            
            //Por cada item de articulovariante revisamos su lugar en el inventrario
            $idodencompreadetalle = $vocd->getIdordencompradetalle();
            $lugarinventarioCollection = \LugarinventarioQuery::create()->filterByIdlugar($idlugar)->filterByIdordencompradetalle($idodencompreadetalle)->find();
            //Itineramos en lugarInventario
            foreach ($lugarinventarioCollection as $kli => $vli){
                $tmp['cantidad'] = $vli->getLugarinventarioCantidad();
                $modal['caducidad'][] = $tmp;
            }
           
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
