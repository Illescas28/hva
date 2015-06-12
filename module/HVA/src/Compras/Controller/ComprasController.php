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
            array_push($proveedor_array, $proveedor->getProveedorNombre());
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
            array_push($productos_array, $producto['nombre'].' '.$producto['descripcion']);
        }
        
        return $this->getResponse()->setContent(\Zend\Json\Json::encode($productos_array));


    }
    
}
