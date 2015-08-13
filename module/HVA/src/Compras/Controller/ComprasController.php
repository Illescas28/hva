<?php

namespace Compras\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class ComprasController extends AbstractActionController {
    
    public function listarAction(){        
        $orden_compra_query = new \OrdencompraQuery();
        
        $data_collection = $orden_compra_query->filterByOrdencompraStatus('inventario',\Criteria::NOT_EQUAL)->find();
        
        return new ViewModel(array(
            'compras'     => $data_collection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
    }
    
    public function  compradetalleAction(){
        
        $idorden = $this->params()->fromQuery('idorden');
        $modalName = 'modal-order-'.$idorden.'-detalles';
        
        $modal = array();
        
        $orden = \OrdencompraQuery::create()->findPk($idorden);
        
        $modal['id'] = $orden->getIdordencompra();
        $modal['no_factura'] = $orden->getOrdencompraNofactura();
        $modal['proveedor'] = $orden->getProveedor()->getProveedorNombre();
        $modal['importe'] = $orden->getOrdencompraImporte();
        $modal['status'] = $orden->getOrdencompraStatus();
        $fecha = new \DateTime($orden->getOrdencompraFecha()); $fecha = $fecha->format('d/m/Y');
        $modal['fecha'] = $fecha;
        $fechaapagar = new \DateTime($orden->getOrdencompraFechaapagar()); $fechaapagar = $fechaapagar->format('d/m/Y');
        $modal['fechaapagar'] = $fechaapagar;
        
        $orden_detalles = \OrdencompradetalleQuery::create()->filterByIdordencompra($idorden)->find();
        
        $d = new \Ordencompradetalle();

        $orden_detalles_array = array();
        foreach ($orden_detalles as $detalle){
            $detalle_array = array();
            $detalle_array['cantidad'] = (int)$detalle->getOrdencompradetalleCantidad();
            
            $idarticulovariate = $detalle->getIdarticulovariante();
            //Por cada valor obtenemos su variaciones
            $articuloVarianteValorCollection = \ArticulovariantevalorQuery::create()->filterByIdarticulovariante($idarticulovariate)->find();
            $detalle_array['descripcion'] = '';
            //Comenzamos a itinerar sobre articulovariantevalor para obtener sus resultado
            foreach ($articuloVarianteValorCollection as $kavv => $vavv){
                $propiedadCount ++;
                $detalle_array['descripcion'].= \PropiedadQuery::create()->findOneByIdpropiedad($vavv->getIdpropiedad())->getPropiedadNombre(); //Propiedad
                $detalle_array['descripcion'].= ':'.\PropiedadvalorQuery::create()->findOneByIdpropiedadvalor($vavv->getIdpropiedadvalor())->getPropiedadvalorNombre(); //PropiedadValor
                if($propiedadCount<$articuloVarianteValorCollection->count()){
                   $detalle_array['descripcion'].=' - ';
                }
            }
            $detalle_array['costo']  =  $detalle->getOrdencompradetalleCosto();
            $detalle_array['importe'] = $detalle->getOrdencompradetalleImporte();
            
            array_push($orden_detalles_array, $detalle_array);
        }
        $modal['detalles'] = $orden_detalles_array;
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        $viewModel->setVariables(array(
            'modalName'    => $modalName,
            'modal'        => $modal,
        ));
        return $viewModel;        
    }
    
    public function  nuevoAction(){
        $almacenes = \LugarQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);

        return new ViewModel(array(
            'almacenes' => $almacenes,
        ));
    }
    
    public function getproveedoresAction(){
        
        $proveedores = \ProveedorQuery::create()->find();
  
        $proveedor_array = array();
        foreach ($proveedores as $proveedor){
           $tmp['value'] = $proveedor->getIdproveedor();
           $tmp['label'] = $proveedor->getProveedorNombre();
           array_push($proveedor_array, $tmp);
        }
        return $this->getResponse()->setContent(\Zend\Json\Json::encode($proveedor_array));

    }
    
    public function getproductosAction(){
        
        //Obtenemos nuestros productos
        $articuloCollection = \ArticuloQuery::create()->find();
        
        $productos = array();
        
        foreach ($articuloCollection as $ka => $av){
            $tmp['nombre'] = $av->getArticuloNombre();
            $articulovarianteCollection = $av->getArticulovariantes();
            //Comenzamos a itinerar sobre las variaciones
            foreach ($articulovarianteCollection as $kav => $vav){
                $tmp['value'] = $vav->getIdarticulovariante();
                $articulovariante = \ArticulovarianteQuery::create()->findPk($tmp['value']);
                $tmp['precio'] = (!is_null($articulovariante->getArticulovariantePrecio())) ? $articulovariante->getArticulovariantePrecio() : 0.00;

                
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
                    $tmp['label'] = $tmp['nombre'].' '.$tmp['descripcion'];
                }

                array_push($productos, $tmp);
            }  
        }
        
        $producto_array = array();
        foreach ($productos as $producto){

                unset( $producto['descripcion']);
                unset( $producto['nombre']);
                array_push($producto_array,$producto);

        }
        
        return $this->getResponse()->setContent(\Zend\Json\Json::encode($producto_array));


    }       
    
    function getarticulobyidAction(){
        
        //Cachamos los datos de la url
        $idarticulovariante = $this->params()->fromQuery('idarticulovariante');
        $productname = $this->params()->fromQuery('product_name');

        $articuloVarainte = \ArticulovarianteQuery::create()->findPk($idarticulovariante);
        
        $modal['id'] = $idarticulovariante;
        $modal['product_name'] = $productname;
        $modal['product_photo'] = $articuloVarainte->getArticulovarianteImagen();
        $modal['product_codigo'] = $articuloVarainte->getArticulovarianteCodigobarras();
        
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        $viewModel->setVariables(array(
            'modalName' => $modalName,
            'modal'     => $modal,
        )); 
        
        return $viewModel;
    }
    
    public function guardarordenAction(){
        
        //Recibimos la orden como parametro
        $request = $this->request;
        
        $orden = $request->getPost('orden');

        //Cre un nuevo objeto de ordencompra
        $ordenCompra = new \Ordencompra();
        //Seteo los datos
        
        $ordencompra_fecha = new \DateTime();
        $ordencompra_fecha = $ordencompra_fecha->createFromFormat('d/m/Y', $orden['orden_fecha']);
        
        if(!empty($orden['orden_fechaapagar'])){
            $ordencompra_fechapagar = new \DateTime();
            $ordencompra_fechapagar = $ordencompra_fechapagar->createFromFormat('d/m/Y', $orden['orden_fechaapagar']);     
        }
        
       
        
        $ordencompra_importe = $orden['orden_importe'];
        $ordencompra_importe_split = explode('$ ', $ordencompra_importe);
        $ordencompra_importe = $ordencompra_importe_split[1];
        $ordencompra_importe = str_replace(',', '',$ordencompra_importe);
        
        //Guardamos nuestra compra
        $ordenCompra->setIdproveedor($orden['orden_proveedor'])
                    ->setOrdencompraStatus($orden['orden_status'])
                    ->setOrdencompraNofactura($orden['orden_folio'])
                    ->setOrdencompraFecha($ordencompra_fecha->format('Y-m-d'))
                    ->setOrdencompraImporte($ordencompra_importe);
        
        if(isset($ordencompra_fechapagar)){
            $ordenCompra->setOrdencompraFechaapagar($ordencompra_fechapagar->format('Y-m-d'));
        }
        
        if(!is_null($orden['orden_facturapdf'])){
            $ordenCompra->setOrdencompraFacturapdf($orden['orden_facturapdf']);
        }

        //echo '<pre>';var_dump($ordenCompra->toArray()); echo '<pre>';exit();
        $ordenCompra->save();
        
        
            //Itenaramos sobre los items
            foreach ($orden['orden_items'] as $item){
                
                
                $item_importe = $item['ordencompradetalle_importe'];
                $item_importe_split = explode('$ ', $item_importe);
                $item_importe = $item_importe_split[1];
                $item_importe = str_replace(',', '',$item_importe);

                
                $ordenCompraDetalle = new \Ordencompradetalle();
                $ordenCompraDetalle->setIdordencompra($ordenCompra->getIdordencompra())
                                   ->setIdarticulovariante($item['idarticulovariante'])
                                   ->setOrdencompradetalleCantidad($item['ordencompradetalle_cantidad'])
                                   ->setOrdencompradetalleCosto($item['ordencompradetalle_costo'])
                                   ->setOrdencompradetallePrecio($item['ordencompradetalle_precio'])
                                   ->setOrdencompradetalleImporte($item_importe);
                
                if(!empty($item['ordencompradetalle_caducidad'])){
                    
                    $caducidad = \DateTime::createFromFormat('m/Y', $item['ordencompradetalle_caducidad']);

                    $caducidad = $caducidad->format('Y-m-d');
                    
                    $ordenCompraDetalle->setOrdencompradetalleCaducidad($caducidad);
                }
                
                $ordenCompraDetalle->save();
                //Tambien actualizamos el precio del articulo variante
                $articulo_variante = \ArticulovarianteQuery::create()->findPk($item['idarticulovariante']);
                $articulo_variante->setArticulovariantePrecio($item['ordencompradetalle_precio']);
                $articulo_variante->save();
                
                //Los insertamos en nuestro almacen general
                $lugarInventario = new \Lugarinventario();
                $lugarInventario->setIdlugar($orden['orden_lugar']) //Equivale al almacen general
                                ->setIdordencompradetalle($ordenCompraDetalle->getIdordencompradetalle())
                                ->setLugarinventarioCantidad($ordenCompraDetalle->getOrdencompradetalleCantidad())
                                ->save();
                
            }
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Orden generada exitosamente!');
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true)));

    }
    
    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id compra que se quiere eliminar exista
        if(!\OrdencompraQuery::create()->filterByIdordencompra($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('compras');
        }
        
            //Instanciamos nuestro compra
            $compra = \OrdencompraQuery::create()->findPk($id);
            
            $compra->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Compra eliminada exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('compras');

    }
    
    public function editarAction()
    {
        
        $request = $this->getRequest();
        
        if($request->isPost()){
                        
            //Guaradamos nuestra variable de orden
            $orden = $request->getPost('orden');
           
            $idorden = $orden['idorden'];
            $orden_compra = \OrdencompraQuery::create()->findPk($idorden);
            
            
            //Setiamos los valores que nos envian
            $ordencompra_fecha = new \DateTime();
            $ordencompra_fecha = $ordencompra_fecha->createFromFormat('d/m/Y', $orden['orden_fecha']);
        
            if(!empty($orden['orden_fechaapagar'])){
                $ordencompra_fechapagar = new \DateTime();
                $ordencompra_fechapagar = $ordencompra_fechapagar->createFromFormat('d/m/Y', $orden['orden_fechaapagar']);     
            }
        
            $ordencompra_importe = $orden['orden_importe'];
            $ordencompra_importe_split = explode('$ ', $ordencompra_importe);
            $ordencompra_importe = $ordencompra_importe_split[1];
            $ordencompra_importe = str_replace(',', '',$ordencompra_importe);
            
          
            //Guardamos nuestra compra
            $orden_compra->setIdproveedor($orden["orden_proveedor"])
                        ->setOrdencompraStatus($orden['orden_status'])
                        ->setOrdencompraNofactura($orden['orden_folio'])
                        ->setOrdencompraFecha($ordencompra_fecha->format('Y-m-d'))
                        ->setOrdencompraImporte($ordencompra_importe);

            if(isset($ordencompra_fechapagar)){
                $orden_compra->setOrdencompraFechaapagar($ordencompra_fechapagar->format('Y-m-d'));
            }
            
            if(!is_null($orden['orden_facturapdf'])){
                $orden_compra->setOrdencompraFacturapdf($orden['orden_facturapdf']);
            }
            
             $orden_compra->save();
            
            //Itenaramos sobre los items
            foreach ($orden['orden_items'] as $item){
               
                if(isset($item["idordendetalle"])){
                   
                    $item_importe = $item['ordencompradetalle_importe'];
                    $item_importe_split = explode('$ ', $item_importe);
                    $item_importe = $item_importe_split[1];
                    $item_importe = str_replace(',', '',$item_importe);
                    
                    $ordenCompraDetalle = \OrdencompradetalleQuery::create()->findPk($item["idordendetalle"]);
                    
                    
                    $ordenCompraDetalle
                                   ->setIdarticulovariante($item['idarticulovariante'])
                                   ->setOrdencompradetalleCantidad($item['ordencompradetalle_cantidad'])
                                   ->setOrdencompradetalleCosto($item['ordencompradetalle_costo'])
                                   ->setOrdencompradetallePrecio($item['ordencompradetalle_precio'])
                                   ->setOrdencompradetalleImporte($item_importe);
                     
                     if(!empty($item['ordencompradetalle_caducidad'])){
                        $ordenCompraDetalle->setOrdencompradetalleCaducidad($item['ordencompradetalle_caducidad']);
                    }
                    
                    $ordenCompraDetalle->save();
                    
                    //Tambien actualizamos el precio del articulo variante
                    $articulo_variante = \ArticulovarianteQuery::create()->findPk($item['idarticulovariante']);
                    $articulo_variante->setArticulovariantePrecio($item['ordencompradetalle_precio']);
                    $articulo_variante->save();
                    
                    //Actualizamos el lugar inventario
                    $lugarInventario = \LugarinventarioQuery::create()->findOneByIdordencompradetalle($item["idordendetalle"]);
                    $lugarInventario->setLugarinventarioCantidad($ordenCompraDetalle->getOrdencompradetalleCantidad());
                    $lugarInventario->setIdlugar($orden['orden_lugar']);
                    $lugarInventario->save();
                    
                }else{
                     
                    $item_importe = $item['ordencompradetalle_importe'];
                    $item_importe_split = explode('$ ', $item_importe);
                    $item_importe = $item_importe_split[1];
                    $item_importe = str_replace(',', '',$item_importe);
                    
                    

                    $ordenCompraDetalle = new \Ordencompradetalle();
                    $ordenCompraDetalle
                                       ->setIdordencompra($orden_compra->getIdordencompra())
                                       ->setIdarticulovariante($item['idarticulovariante'])
                                       ->setOrdencompradetalleCantidad($item['ordencompradetalle_cantidad'])
                                       ->setOrdencompradetalleCosto($item['ordencompradetalle_costo'])
                                       ->setOrdencompradetallePrecio($item['ordencompradetalle_precio'])
                                       ->setOrdencompradetalleImporte($item_importe);

                    if(!empty($item['ordencompradetalle_caducidad'])){
                        $ordenCompraDetalle->setOrdencompradetalleCaducidad($item['ordencompradetalle_caducidad']);
                    }
                    
                   
                    $ordenCompraDetalle->save();
                    //Tambien actualizamos el precio del articulo variante
                    $articulo_variante = \ArticulovarianteQuery::create()->findPk($item['idarticulovariante']);
                    $articulo_variante->setArticulovariantePrecio($item['ordencompradetalle_precio']);
                    $articulo_variante->save();
                    
                    //Los insertamos en nuestro almacen general
                    $lugarInventario = new \Lugarinventario();
                    $lugarInventario->setIdlugar($orden['orden_lugar']) //Equivale al almacen general
                                    ->setIdOrdencompradetalle($ordenCompraDetalle->getIdordencompradetalle())
                                    ->setLugarinventarioCantidad($ordenCompraDetalle->getOrdencompradetalleCantidad())
                                    ->save();
                    
                }
                
            }
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Orden guardada exitosamente!');
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true)));

        }
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id compra que se quiere editar
        if(!\OrdencompraQuery::create()->filterByIdordencompra($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('compras');
        }
        

        
        $orden = array();
        
        //Instanciamos nuestro compra
        $compra = \OrdencompraQuery::create()->findPk($id);
        
        
        
        //Almacenamos los valores que nos importan en nuestro arreglo orden
        $orden['id']         = $id;
        $orden['facturapdf']  = $compra->getOrdencompraFacturapdf();
        $orden['idproveedor']  = $compra->getIdproveedor();
        $orden['proveedor']  = $compra->getProveedor()->getProveedorNombre();
        $orden['nofactura']  = $compra->getOrdencompraNofactura();
        $orden['fecha']      = $compra->getOrdencompraFecha($format = 'd/m/Y');
        $orden['fechapagar'] = $compra->getOrdencompraFechaapagar($format = 'd/m/Y');
        $orden['importe']    = $compra->getOrdencompraImporte();
        $orden['status']     = $compra->getOrdencompraStatus();
        $orden['orden_items'] = array();
        
        //Los detalles
        $orden_detalles = \OrdencompradetalleQuery::create()->filterByIdordencompra($id)->find();
        $i = new \Ordencompradetalle();
        
        $orden['idlugar'] = null;
        foreach ($orden_detalles as $item){
            
            $tmp['id'] = $item->getIdordencompradetalle();
            $tmp['idarticulo'] = $item->getIdarticulovariante();
            $tmp['articulo'] = $this->getArticuloNombreByid($item->getIdarticulovariante());
            $tmp['cantidad'] = $item->getOrdencompradetalleCantidad();
            $tmp['costo']   = $item->getOrdencompradetalleCosto();
            $tmp['precio']  = $item->getOrdencompradetallePrecio();
            $tmp['importe']   = $item->getOrdencompradetalleImporte();
            $tmp['caducidad']   = $item->getOrdencompradetalleCaducidad();
            if(!is_null($tmp['caducidad'])){
                $date_caducidad = new \DateTime($tmp['caducidad']);
                $tmp['caducidad'] = $date_caducidad->format('m/y');
            }
             $li = \LugarinventarioQuery::create()->findOneByIdordencompradetalle($item->getIdordencompradetalle());
             $orden['idlugar'] = $li->getIdlugar();
             $orden['orden_items'][] = $tmp;
        }
        
        
        $almacenes = \LugarQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
        return new ViewModel(array(
            'almacenes' => $almacenes,
            'orden'     => $orden,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
 
    }
    
    function getArticuloNombreByid($id){
        
        $articulovariante = \ArticulovarianteQuery::create()->findPk($id);
        //Nombre
        $articulo_nombre = $articulovariante->getArticulo()->getArticuloNombre();
        //Descripcion
        $articulo_descripcion= '';
        $articulovariantevalor = \ArticulovariantevalorQuery::create()->filterByIdarticulovariante($id)->find();
        $articulovariantevalorCount = count($articulovariantevalor->toArray());
        $count = 0;
        foreach ($articulovariantevalor as $valor){
            $articulo_descripcion .= $valor->getPropiedad()->getPropiedadNombre().':';
            $articulo_descripcion .= $valor->getPropiedadvalor()->getPropiedadvalorNombre();
            $count ++;
            if($count<$articulovariantevalorCount){
                $articulo_descripcion.=' - ';
            }
        }
        
        return $articulo_nombre.' '.$articulo_descripcion; 
        
    }
    
    public function deleteitemAction(){
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromQuery('id');
        $html = $this->params()->fromQuery('html');
        
        if($html){
            $viewModel = new ViewModel();
            $viewModel->setTerminal(true);
            $viewModel->setVariable('id', $id);
            return $viewModel;
        }
        
        $request = $this->request;
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            
            $ordenDetalle = \OrdencompradetalleQuery::create()->findPk($post_data['id']);
            $idorden = $ordenDetalle->getIdordencompra();
            
            //Eliminamos
            $ordenDetalle->delete();
            
            if($ordenDetalle->isDeleted()){
                //Recalculamos el importe de la factura
                $ordenDetalle = \OrdencompradetalleQuery::create()->filterByIdordencompra($idorden)->find();
                $orden_importe = 0;
                foreach ($ordenDetalle as $item){
                    $orden_importe += $item->getOrdencompradetalleImporte();
                }
                

                
                $orden = \OrdencompraQuery::create()->findPK($idorden);
                $orden->setOrdencompraImporte($orden_importe);
                $orden->save();
                
                return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true)));
            }
            
        }

    }
    
    public function uploadcomprapdfAction(){
        $date = new \DateTime();
        $upload_folder ='/img/compras/';
        $nombre_archivo = 'compra-'.$date->getTimestamp().'.pdf';
        $tipo_archivo = $_FILES['archivo']['type'];
        $tamano_archivo = $_FILES['archivo']['size'];
        $tmp_archivo = $_FILES['archivo']['tmp_name'];
        $archivador = $upload_folder.$nombre_archivo;
        if(!move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)) {
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'msg' => 'Ocurrio un error al subir el archivo. No pudo guardarse.', 'status' => 'error')));
        }    
        return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true,'compra_facturapdf' => $archivador)));

    }
    
    public function removefacturapdfAction(){
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromQuery('idorden');
        $html = $this->params()->fromQuery('html');
        
        if($html){
            $viewModel = new ViewModel();
            $viewModel->setTerminal(true);
            $viewModel->setVariable('id', $id);
            return $viewModel;
        }
        
        $request = $this->request;
        if($request->isPost()){
            
            $idorden = $request->getPost('id');
            
            //Elimnamos de la base de datos
            $orden = \OrdencompraQuery::create()->findPk($idorden);
            $facturapdf = $orden->getOrdencompraFacturapdf();
            $orden->setOrdencompraFacturapdf(NULL);
            $orden->save();
            
            //Eliminamos del servidor;
            if(file_exists($_SERVER["DOCUMENT_ROOT"].$facturapdf)){
                unlink($_SERVER["DOCUMENT_ROOT"].$facturapdf);
                return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true)));
            }
             
            
        }
        
        
        
       
        
    }
    
}
