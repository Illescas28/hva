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
                $tmp['id'] = $vav->getIdarticulovariante();
     

                
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
        
        $productos_array = array();
        foreach ($productos as $producto){
            $tmp2['value'] = $producto['id'];
            $tmp2['label'] = $producto['nombre'].' '.$producto['descripcion'];
            array_push($productos_array, $tmp2);
        }
        
        return $this->getResponse()->setContent(\Zend\Json\Json::encode($productos_array));


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
        $orden = $this->params()->fromQuery('orden');
        
        //Cre un nuevo objeto de ordencompra
        $ordenCompra = new \Ordencompra();
        //Seteo los datos
        
        $ordencompra_fecha = new \DateTime();
        $ordencompra_fecha = $ordencompra_fecha->createFromFormat('d/m/Y', $orden['orden_fecha']);
        
        $ordencompra_importe = $orden['orden_importe'];
        $ordencompra_importe_split = explode('$ ', $ordencompra_importe);
        $ordencompra_importe = $ordencompra_importe_split[1];
        $ordencompra_importe = str_replace(',', '',$ordencompra_importe);
        
        //Guardamos nuestra compra
        $ordenCompra->setIdproveedor($orden['orden_proveedor'])
                    ->setOrdencompraStatus($orden['orden_status'])
                    ->setOrdencompraNofactura($orden['orden_folio'])
                    ->setOrdencompraFecha($ordencompra_fecha->format('Y-m-d'))
                    ->setOrdencompraFechaapagar($ordencompra_fecha->format('Y-m-d'))
                    ->setOrdencompraImporte($ordencompra_importe)
                    ->save();
        
        
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
                    $ordenCompraDetalle->setOrdencompradetalleCaducidad($item['ordencompradetalle_caducidad']);
                }
                
              
                $ordenCompraDetalle->save();
            }
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Orden generada exitosamente!');
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true)));

    }
    
}
