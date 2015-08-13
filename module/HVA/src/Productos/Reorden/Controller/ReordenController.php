<?php

namespace Productos\Reorden\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;



class ReordenController extends AbstractActionController
{
    

    public function definirAction()
    {
        
        //obtenemos nuestros almacenes
        $lugarCollection = \LugarQuery::create()->find();
        $lugarCollectionArray = array();
        foreach ($lugarCollection as $kl => $vl){
            $lugarCollectionArray[] = array('nombre' => $vl->getLugarNombre(),'id' => $vl->getIdLugar());
        }
        
        
        $request = $this->request;
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            if($post_data['aplicar_todos'] == 'true'){
                foreach ($post_data as $data) {
                    if (is_array($data)) {
                            $min = $data['min'];
                            $reorden = $data['reorden'];
                            $max = $data['max'];
                            break;
                    }
                }
                    $almacenes = \LugarQuery::create()->find();
                    
                    foreach ($almacenes as $almacen){
                        $articuloReorderExist = \ArticulovariantereordenQuery::create()->filterByIdarticulovariante($post_data['idproducto'])->filterByIdlugar($almacen->getIdLugar())->exists();

                        if($articuloReorderExist){
                            $articuloReorder = \ArticulovariantereordenQuery::create()->filterByIdarticulovariante($post_data['idproducto'])->filterByIdlugar($almacen->getIdLugar())->findOne();
                            $articuloReorder->setMinimo($min)
                                            ->setReorden($reorden)
                                            ->setMaximo($max)
                                            ->save();
                        }else{
                            $articuloReorden = new \Articulovariantereorden();
                            $articuloReorden->setIdarticulovariante($post_data['idproducto'])
                                            ->setIdlugar($almacen->getIdLugar())
                                            ->setMinimo($min)
                                            ->setReorden($reorden)
                                            ->setMaximo($max)
                                            ->save();    
                        }
                    }
            }else{
               
                foreach ($post_data as $data) {
                    if (is_array($data)) {
                        $idproducto = $post_data['idproducto'];
                        $idlugar = $data['id'];
                        $min = $data['min'];
                        $reorden = $data['reorden'];
                        $max = $data['max'];
                        
                        $articuloReorderExist = \ArticulovariantereordenQuery::create()->filterByIdarticulovariante($idproducto)->filterByIdlugar($idlugar)->exists();
                        if($articuloReorderExist){
                            $articuloReorder = \ArticulovariantereordenQuery::create()->filterByIdarticulovariante($idproducto)->filterByIdlugar($idlugar)->findOne();
                            $articuloReorder->setMinimo($min)
                                            ->setReorden($reorden)
                                            ->setMaximo($max)
                                            ->save();
                        }else{
                            $articuloReorden = new \Articulovariantereorden();
                            $articuloReorden->setIdarticulovariante($idproducto)
                                            ->setIdlugar($idlugar)
                                            ->setMinimo($min)
                                            ->setReorden($reorden)
                                            ->setMaximo($max)
                                            ->save();   
                        }

                    }
                }
            }
        } 
    
        
        //Obtenemos nuestros productos
        $articuloCollection = \ArticuloQuery::create()->find();

        //De cada articulo obtenemos sus variaciones (articulovariante)
        $productos = array();
        
        foreach ($articuloCollection as $ka => $av){
             $tmp = array();
             $tmp['nombre'] = $av->getArticuloNombre();
             $articulovarianteCollection = $av->getArticulovariantes();
             
             foreach ($articulovarianteCollection as $kav => $vav){
                 
                //Por cada variacion obtenemos los datos de reorden
                 
                $reordenCollection = \ArticulovariantereordenQuery::create()->findByIdarticulovariante($vav->getIdArticulovariante());  
                $reordenArray = $reordenCollection->toArray();
       
                
                if(!empty($reordenArray)){
                   
                    //Itineramos en el
                    foreach ($reordenCollection as $krc => $vro){
                        
                        $tmp['reorden']['id'] = $vro->getIdArticulovariantereorden();
                        $tmp['reorden'][$vro->getLugar()->getLugarNombre()]['min'] = (int)$vro->getMinimo();
                        $tmp['reorden'][$vro->getLugar()->getLugarNombre()]['reorden'] = (int)$vro->getReorden();
                        $tmp['reorden'][$vro->getLugar()->getLugarNombre()]['max'] = (int)$vro->getMaximo();
                        
                    }
                }
                else{
                    
                    foreach ($lugarCollection as $kl => $vl){
                        $tmp['reorden'][$vl->getLugarNombre()]['min'] = NULL;
                        $tmp['reorden'][$vl->getLugarNombre()]['reorden'] = NULL;
                        $tmp['reorden'][$vl->getLugarNombre()]['max'] = NULL;
                    }
                    
                }
                
                $tmp['id'] = $vav->getIdarticulovariante();
                  
                 //Por cada valor obtenemos su variaciones
                 $articuloVarianteValorCollection = \ArticulovariantevalorQuery::create()->filterByIdarticulovariante($vav->getIdarticulovariante())->find();
                 
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
        
        return new ViewModel(array( 
            'flashMessages' => $this->flashMessenger()->getMessages(),
            'lugares' => $lugarCollectionArray,
            'productos' => $productos,
        ));
        
    }
    
    
    public function listaAction(){
        
        //obtenemos nuestros almacenes
        $lugarCollection = \LugarQuery::create()->find();
        $lugarCollectionArray = array();
        foreach ($lugarCollection as $kl => $vl){
            $lugarCollectionArray[] = array('nombre' => $vl->getLugarNombre(),'id' => $vl->getIdLugar());
        }
        
        //Obtenemos nuestros productos
        $articuloCollection = \ArticuloQuery::create()->find();

        //De cada articulo obtenemos sus variaciones (articulovariante)
        $productos = array();
        
        foreach ($articuloCollection as $ka => $av){
            
             $tmp = array();
             $tmp['nombre'] = $av->getArticuloNombre();
             $articulovarianteCollection = $av->getArticulovariantes();
             
             foreach ($articulovarianteCollection as $kav => $vav){
                 
                 $tmp['id'] = $vav->getIdarticulovariante();
                 $tmp['codigo_barras'] = $vav->getArticulovarianteCodigoBarras();
                 $tmp['precio'] = $vav->getArticulovariantePrecio();
                 $tmp['imagen'] = $vav->getArticuloVarianteImagen();
                 
                 //Por cada valor obtenemos su variaciones
                 $articuloVarianteValorCollection = \ArticulovariantevalorQuery::create()->filterByIdarticulovariante($vav->getIdarticulovariante())->find();
                 
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
                
                //Por cada variacion obtenemos los datos de reorden
                 
                $reordenCollection = \ArticulovariantereordenQuery::create()->findByIdarticulovariante($vav->getIdArticulovariante());  
                $reordenArray = $reordenCollection->toArray();
                
                if(!empty($reordenArray)){
                   
                    //Itineramos en el
                    foreach ($reordenCollection as $krc => $vro){
                        
                        $tmp['reorden']['id'] = $vro->getIdArticulovariantereorden();
                        $tmp['reorden'][$vro->getLugar()->getLugarNombre()]['min'] = (int)$vro->getMinimo();
                        $tmp['reorden'][$vro->getLugar()->getLugarNombre()]['reorden'] = (int)$vro->getReorden();
                        $tmp['reorden'][$vro->getLugar()->getLugarNombre()]['max'] = (int)$vro->getMaximo();
                        
                    }
                }
                else{
                    
                    foreach ($lugarCollection as $kl => $vl){
                        $tmp['reorden'][$vl->getLugarNombre()]['min'] = 0;
                        $tmp['reorden'][$vl->getLugarNombre()]['reorden'] = 0;
                        $tmp['reorden'][$vl->getLugarNombre()]['max'] = 0;
                    }
                    
                }
                
                //Comenzamos a itinerar sobre los lugares disponibles
                foreach ($lugarCollection as $kl => $vl){
                    //Los agregamos a nuestro arreglo
                    $tmp['reorden'][$vl->getLugarNombre()]['existencias'] =0;
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
                        $tmp['reorden'][$lugarNombre]['existencias'] += $cantidad;

                    }
                    
                }
               
                array_push($productos, $tmp);
             }
            
        }
        
        return new ViewModel(array( 
            'lugares' => $lugarCollectionArray,
            'productos' => $productos,
        ));
    }
   
}
