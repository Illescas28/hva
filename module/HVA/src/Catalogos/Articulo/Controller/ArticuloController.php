<?php

namespace Catalogos\Articulo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Articulo\Form\ArticuloForm;

//// Filter ////
use Catalogos\Articulo\Filter\ArticuloFilter;

//// Propel ////
use Articulo;
use ArticuloQuery;
use BasePeer;
use TipoQuery;
use Propiedad;
use Propiedadvalor;
use Articulovariante;
use Articulovariantevalor;

class ArticuloController extends AbstractActionController
{
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        //Almacenamos en un arreglo todas los Tipos
        $tipoCollection = \TipoQuery::create()->find();
       
        $tipoArray = array();
        foreach ($tipoCollection as $tipo){
            $tipoArray[$tipo->getIdtipo()] = $tipo->getTipoNombre();
        }
       
        //Intanciamos nuestro formulario de Articulo
        $articuloForm = new ArticuloForm($tipoArray);
        
        if ($request->isPost()) { //Si hicieron POST
            
            //Instanciamos nuestro filtro de articulo
            $articuloFilter = new ArticuloFilter();

            //Le ponemos nuestro filtro a nuesto fromulario
            $articuloForm->setInputFilter($articuloFilter->getInputFilter());
            
            //Le ponemos los datos a nuestro formulario
            $articuloForm->setData($request->getPost());

            //Validamos nuestro formulario de articulo
            if($articuloForm->isValid()){ 
                
                //Instanciamos un nuevo objeto de nuestro objeto Articulo
                $articulo = new Articulo();
                
                //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Articulo
                foreach ($articuloForm->getData() as $articuloKey => $articuloValue){
                    $articulo->setByName($articuloKey, $articuloValue, \BasePeer::TYPE_FIELDNAME);
                }
                
                //Guardamos en nuestra base de datos Articulo
                $articulo->save();
                
                //Verificamos si nos enviaron propiedades
                foreach($_POST as $key => $value){
                    if(strstr($key, 'propiedad') && $value['nombre'] != null){                      
                        //Guardamos las propiedades
                        $propiedad = new \Propiedad();
                        $propiedad->setIdarticulo($articulo->getIdarticulo());
                        $propiedad->setPropiedadNombre($value["nombre"]);
                        $propiedad->save();
                        
                        //Guardamos las variantes de la propiedad
                        foreach ($value as $varianteKey => $varianteValue){                            
                            if($varianteKey !== "nombre" && $varianteValue !=null){                           
                                $variante = new \Propiedadvalor();
                                $variante->setIdarticulo($articulo->getIdarticulo());
                                $variante->setIdpropiedad($propiedad->getIdpropiedad());
                                $variante->setPropiedadvalorNombre($varianteValue);
                                $variante->save();
                                  
                            }
                        }                 
                    }
                }
                
                //Despues de haber insertado el esquelo, insertamos en las tablas de variaciones
                
                //Comenzamos a itinerar sobre las propiedad para obtener el numero de combinaciones posibles
                $propiedadCollection = $articulo->getPropiedads();
                $combinaciones = 0;
                foreach ($propiedadCollection as $propiedad){
                    if($combinaciones == 0){
                         $combinaciones = $propiedad->getPropiedadvalors()->count();
                    }else{
                         $combinaciones *= $propiedad->getPropiedadvalors()->count();
                    }
                }
                
                //De acuerdo al numero de combinaciones posibles insertamos en la tabla articulo variante
                if($combinaciones>0){
                    for($i=0;$i<$combinaciones;$i++){
                        $articulovariante = new \Articulovariante();
                        $articulovariante->setIdarticulo($articulo->getIdarticulo());
                        $articulovariante->save();
                    }
                }
                                
                //Guardamos en un arreglo las propiedades Valores
                $propiedadValor = array();
                $propiedadValorCollection = \PropiedadvalorQuery::create()->findByIdarticulo($articulo->getIdarticulo());          
                foreach ($propiedadValorCollection as $pvk => $pvv){
                    $idpropiedadNombre = $pvv->getPropiedad()->getPropiedadNombre();
                    $propiedadValor[$idpropiedadNombre][] = $pvv->toArray();
                }          
                
                $idArticuloVarianteArray = array();
                $propiedadVarianteCollection = \ArticulovarianteQuery::create()->findByIdarticulo($articulo->getIdarticulo());

                foreach ($propiedadVarianteCollection as $propiedadVariante){
                    $idArticuloVarianteArray[] = $propiedadVariante->getIdArticuloVariante();
                }

                $i = 0;
                foreach ($propiedadValor as $key => $value){
                    $php .= 'foreach ($propiedadValor[' . $key . '] as $k' . $key . ' => $v' . $key . '){';           
                }
                foreach ($propiedadValor as $key => $value){
                    $php .= '$articulovariantevalor = new \Articulovariantevalor();';
                    $php .= '$articulovariantevalor->setIdarticulo($articulo->getIdarticulo())';
                    $php .= '->setIdpropiedad($v'.$key.'["Idpropiedad"])';
                    $php .= '->setIdpropiedadvalor($v'.$key.'["Idpropiedadvalor"])';
                    $php .= '->setIdarticulovariante($idArticuloVarianteArray[$i])';
                    $php .= '->save();';          
                }
                $php .= '$i++;';
                foreach ($propiedadValor as $key => $value){
                    $php .= '}';           
                }
                
                eval($php);
                
                
                

                //Agregamos un mensaje
                $this->flashMessenger()->addMessage('Articulo guardado exitosamente!');
                
                //Redireccionamos a nuestro list
                $this->redirect()->toRoute('articulo');
                
            }
        
        }

        return new ViewModel(array(
            'articuloForm' => $articuloForm,
        ));
    
    }

    public function listarAction()
    {
        $articuloQuery = new ArticuloQuery();

        $result = $articuloQuery->paginate($page,$limit);

        $dataCollection = $result->getResults();
        
        //Verificamos si el producto tiene porpiedades
        
        return new ViewModel(array(
            'articulos' => $dataCollection,
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
        
    }

    public function editarAction()
    {   
        $request = $this->getRequest();
        
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        //Verificamos que el Id articulo que se quiere modificar exista
        if(!ArticuloQuery::create()->filterByIdarticulo($id)->exists()){
            $id =0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('articulo', array(
                'action' => 'nuevo'
            ));
        }

            //Instanciamos nuestro articulo
            $articulo = ArticuloQuery::create()->findPk($id);
            
            //propiedades
            $propiedades = \PropiedadQuery::create()->filterByIdarticulo($articulo->getIdarticulo())->find();
            
            //Almacenamos en un arreglo todas los Tipos
            $tipoCollection = \TipoQuery::create()->find();

            $tipoArray = array();
            foreach ($tipoCollection as $tipo) {
                $tipoArray[$tipo->getIdtipo()] = $tipo->getTipoNombre();
            }

            //Instanciamos nuestro formulario
            $articuloForm = new ArticuloForm($tipoArray);
            
            //Le ponemos los datos de nuestro articulo a nuestro formulario
            $articuloForm->setData($articulo->toArray(BasePeer::TYPE_FIELDNAME));
            
            if ($request->isPost()) { //Si hicieron POST
                
                //Instanciamos nuestro filtro de articulo
                $articuloFilter = new ArticuloFilter();
                
                //Le ponemos nuestro filtro a nuesto fromulario
                $articuloForm->setInputFilter($articuloFilter->getInputFilter());
                
                //Le ponemos los datos a nuestro formulario
                $articuloForm->setData($request->getPost());
                
                //Validamos nuestro formulario de articulo
                if($articuloForm->isValid()){
                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Articulo
                    foreach ($articuloForm->getData() as $articuloKey => $articuloValue){
                        
                        $articulo->setByName($articuloKey, $articuloValue, \BasePeer::TYPE_FIELDNAME);
                       
                    }
                    
                    //Guardamos en nuestra base de datos Articulo
                    $articulo->save();
                    
                    //Si el articulo tiene propiedades las eliminamos para volverlas a setear
                    if($propiedades->count()){
                        foreach ($propiedades as $propiedad){
                            $propiedad->delete(); //Eliminamos de la base de datos
                        }
                    }
                    
                    //Verificamos si nos enviaron propiedades
                    foreach($_POST as $key => $value){
                        if(strstr($key, 'propiedad') && $value['nombre'] != null){                      
                            //Guardamos las propiedades
                            $propiedad = new \Propiedad();
                            $propiedad->setIdarticulo($articulo->getIdarticulo());
                            $propiedad->setPropiedadNombre($value["nombre"]);
                            $propiedad->save();

                            //Guardamos las variantes de la propiedad
                            foreach ($value as $varianteKey => $varianteValue){                            
                                if($varianteKey !== "nombre" && $varianteValue !=null){                           
                                    $variante = new \Propiedadvalor();
                                    $variante->setIdarticulo($articulo->getIdarticulo());
                                    $variante->setIdpropiedad($propiedad->getIdpropiedad());
                                    $variante->setPropiedadvalorNombre($varianteValue);
                                    $variante->save();
                                }
                            }          
                        }
                    }
                    
                    //Despues de haber insertado el esquelo, insertamos en las tablas de variaciones
                
                    //Comenzamos a itinerar sobre las propiedad para obtener el numero de combinaciones posibles
                    $propiedadCollection = $articulo->getPropiedads();
                    $combinaciones = 0;
                    foreach ($propiedadCollection as $propiedad){
                        if($combinaciones == 0){
                             $combinaciones = $propiedad->getPropiedadvalors()->count();
                        }else{
                             $combinaciones *= $propiedad->getPropiedadvalors()->count();
                        }
                    }

                    //De acuerdo al numero de combinaciones posibles insertamos en la tabla articulo variante
                    
                    if($combinaciones>0){
                        for($i=0;$i<$combinaciones;$i++){
                            $articulovariante = new \Articulovariante();
                            $articulovariante->setIdarticulo($articulo->getIdarticulo());
                            $articulovariante->save();
                        }
                    }

                    //Guardamos en un arreglo las propiedades Valores
                    $propiedadValor = array();
                    $propiedadValorCollection = \PropiedadvalorQuery::create()->findByIdarticulo($articulo->getIdarticulo());          
                    foreach ($propiedadValorCollection as $pvk => $pvv){
                        $idpropiedadNombre = $pvv->getPropiedad()->getPropiedadNombre();
                        $propiedadValor[$idpropiedadNombre][] = $pvv->toArray();
                    }          

                    $idArticuloVarianteArray = array();
                    $propiedadVarianteCollection = \ArticulovarianteQuery::create()->findByIdarticulo($articulo->getIdarticulo());

                    foreach ($propiedadVarianteCollection as $propiedadVariante){
                        $idArticuloVarianteArray[] = $propiedadVariante->getIdArticuloVariante();
                    }

                    $i = 0;
                    foreach ($propiedadValor as $key => $value){
                        $php .= 'foreach ($propiedadValor[' . $key . '] as $k' . $key . ' => $v' . $key . '){';           
                    }
                    foreach ($propiedadValor as $key => $value){
                        $php .= '$articulovariantevalor = new \Articulovariantevalor();';
                        $php .= '$articulovariantevalor->setIdarticulo($articulo->getIdarticulo())';
                        $php .= '->setIdpropiedad($v'.$key.'["Idpropiedad"])';
                        $php .= '->setIdpropiedadvalor($v'.$key.'["Idpropiedadvalor"])';
                        $php .= '->setIdarticulovariante($idArticuloVarianteArray[$i])';
                        $php .= '->save();';          
                    }
                    $php .= '$i++;';
                    foreach ($propiedadValor as $key => $value){
                        $php .= '}';           
                    }

                    eval($php);

                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Articulo Modificado exitosamente!');

                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('articulo');
                    
                }else{

                }

            }
            
            return new ViewModel(array(
                'id'  => $id,
                'articuloForm' => $articuloForm,
                'propiedades' => $propiedades,
            ));
        

    }

    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id articulo que se quiere eliminar exista
        if(!ArticuloQuery::create()->filterByIdarticulo($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('articulo');
        }
        

            //Instanciamos nuestro articulo
            $articulo = ArticuloQuery::create()->findPk($id);
            
            $articulo->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Articulo eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('articulo');

    }
    
}