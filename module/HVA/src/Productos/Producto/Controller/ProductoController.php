<?php

namespace Productos\Producto\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;



class ProductoController extends AbstractActionController
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
                    $tmp['lugar'][$vl->getLugarNombre()] =NULL;
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
            'lugares' => $lugarCollectionArray,
            'productos' => $productos,
        ));
        
    }
    
    public function caducidadbylugarAction(){
        
        //Cachamos los datos de la url
        $idarticulovariante = $this->params()->fromQuery('idarticulovariante');
        $idlugar = $this->params()->fromQuery('idlugar');
        $descripcion = $this->params()->fromQuery('descripcion');
        $existencias = $this->params()->fromQuery('existencias');
        $lugarNombre = $this->params()->fromQuery('lugarNombre');
        $modalName = 'modal-producto-'.$idarticulovariante.'-lugar-'.$idlugar;
        
        $modal = array(
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
            $date = new \DateTime($vocd->getOrdencompradetalleCaducidad());   
            $tmp['caducidad'] = $date->format('m/y'); 
            $tmp['id'] = $vocd->getIdOrdencompradetalle();
            
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
