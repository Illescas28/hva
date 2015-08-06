<?php

namespace Productos\Precios\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;



class PreciosController extends AbstractActionController
{   

    public function indexAction()
    {
        
        $request = $this->request;
        
        if($request->isPost()){//Si envian el formulario
            $post_data = $request->getPost();
            
            //Creamos una instacia de nuestro articulovariante
            $articuloVariante = \ArticulovarianteQuery::create()->findOneByIdarticulovariante($post_data['idproducto']);
            $articuloVariante->setArticulovarianteCosto($request->getPost()->articulovariante_costo);
            $articuloVariante->setArticulovariantePrecio($request->getPost()->articulovariante_precio);
            $articuloVariante->setArticulovarianteIva($request->getPost()->articulovariante_iva);
            if($articuloVariante->isModified()){
                $articuloVariante->save();
            }
            return;
        }

        //Obtenemos nuestros productos
        $articuloCollection = \ArticuloQuery::create()->find();
        
        //De cada articulo obtenemos sus variaciones (articulovariante)
        $productos = array();
        foreach ($articuloCollection as $ka => $av){
            $tmp['nombre'] = $av->getArticuloNombre();
            $articulovarianteCollection = $av->getArticulovariantes();
            //Comenzamos a itinerar sobre las variaciones
            foreach ($articulovarianteCollection as $kav => $vav){
               
                $tmp['id'] = $vav->getIdarticulovariante();
                $tmp['codigo_barras'] = !is_null($vav->getArticuloVarianteCodigobarras()) ? $vav->getArticuloVarianteCodigobarras() : '';
                $tmp['costo'] = !is_null($vav->getArticuloVarianteCosto()) ? $vav->getArticuloVarianteCosto() : 0.00;
                $tmp['precio'] = !is_null($vav->getArticuloVariantePrecio()) ? $vav->getArticuloVariantePrecio() : 0.00;
                $tmp['iva'] = !is_null($vav->getArticuloVarianteIva()) ? $vav->getArticuloVarianteIva() : 0;
                $tmp['imagen'] = $vav->getArticuloVarianteImagen();
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
            'productos' => $productos,
        ));

    }
    
    function comprasbyarticulovarianteAction(){
        
        //Cachamos los datos de la url
        $idarticulovariante = $this->params()->fromQuery('idarticulovariante');
        $descripcion = $this->params()->fromQuery('descripcion');
        $modalName = 'modal-producto-'.$idarticulovariante.'-compras';
        
        $producto = array();
        
        $articuloVariante = \ArticulovarianteQuery::create()->findPk($idarticulovariante);
        
        $producto['nombre'] = $articuloVariante->getArticulo()->getArticuloNombre();
        $producto['descripcion'] = $descripcion;
        $producto['imagen'] = $articuloVariante->getArticulovarianteImagen();
        
        //Ahora las compras
        $compras = array();
        
        $compraDetalle = \OrdencompradetalleQuery::create()->filterByIdarticulovariante($idarticulovariante)->useOrdencompraQuery()->filterByIdproveedor(1,\Criteria::NOT_EQUAL)->endUse()->find();
        
        
        foreach ($compraDetalle as $kcd => $vcd){
            $tmp = array();
            $tmp['costo'] = $vcd->getOrdencompradetalleCosto();
            $tmp['fecha'] = $vcd->getOrdencompra()->getOrdencompraFecha('d-m-Y');
            $tmp['proveedor'] = $vcd->getOrdencompra()->getProveedor()->getProveedorNombre();
            array_push($compras, $tmp);
        }
       
        //var_dump($this->flashMessenger()->getMessages());
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        $viewModel->setVariables(array(
            'modalName' => $modalName,
            'producto'     => $producto,
            'compras'     => $compras,
        ));
        return $viewModel;
    }
   
}
