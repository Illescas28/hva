<?php

namespace Productos\Registro\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;



class RegistroController extends AbstractActionController
{   
    public $target_dir = "/img/productos/";
    
    public function indexAction()
    {
        
        $request = $this->request;
        
        if($request->isPost()){//Si envian el formulario
            //Comenzamos a itinerar sobre nuestro los elementos enviados
            foreach ($request->getPost() as $key => $value){
               if(strpos($key, 'producto') !== false){
                    $idArticuloVariante = explode("-", $key);
                    $idArticuloVariante = $idArticuloVariante[1];
                    
                    //Creamos una instacia de nuestro articulovariante
                    $articuloVariante = \ArticulovarianteQuery::create()->findOneByIdarticulovariante($idArticuloVariante);
                    
                    $articuloVariante->setArticulovarianteCodigobarras($value["codigobarras"]);
                    $articuloVariante->setArticulovarianteCosto($value["costo"]);
                    $articuloVariante->setArticulovariantePrecio($value["precio"]);
                    $articuloVariante->setArticulovarianteIva($value["iva"]);
                    
                    if($articuloVariante->isModified()){
                        $articuloVariante->save();
                    }
               }
            }
            
            //Ahora las imagenes
            foreach ($_FILES as $key => $value){
                if(strpos($key, 'producto') !== false){
                    
                        $idArticuloVariante = explode("-", $key);
                        $idArticuloVariante = $idArticuloVariante[1];
                        
                        //Creamos una instacia de nuestro articulovariante
                        $articuloVariante = \ArticulovarianteQuery::create()->findOneByIdarticulovariante($idArticuloVariante);
                        
                        if(!empty($value['name'])){
                            $target_file = $this->target_dir . basename($value["name"]);
                            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                            $new_name_file = $this->target_dir.'img_producto_'.$idArticuloVariante.'.'.$imageFileType;
                            if (move_uploaded_file($_FILES[$key]["tmp_name"], $_SERVER["DOCUMENT_ROOT"].$new_name_file)) {
                                $articuloVariante->setArticulovarianteImagen($new_name_file);
                                $articuloVariante->save();
                            }
                        }else{
                            $oldulr = $_SERVER["DOCUMENT_ROOT"].$articuloVariante->getArticulovarianteImagen();
                            $articuloVariante->setArticulovarianteImagen('');   
                            if($articuloVariante->isModified()){
                                $articuloVariante->save();
                             
                            }
                        }
                }
                
            }
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Registro de productos guardados exitosamente!');
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
    
    public function eliminarAction()
    {
        //Cachamos el valor desde nuestro params
        $id = (int) $this->params()->fromRoute('id');
        
        //Verificamos que el Id articulo que se quiere eliminar exista
        if(!\ArticulovarianteQuery::create()->filterByIdarticulovariante($id)->exists()){
            $id=0;
        }
        //Si es incorrecto redireccionavos al action nuevo
        if (!$id) {
            return $this->redirect()->toRoute('productos-registro');
        }
        
            //Instanciamos nuestro articulo
            $articulovariante = \ArticulovarianteQuery::create()->findPk($id);
            
            $articulovariante->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addMessage('Producto eliminado exitosamente!');

            //Redireccionamos a nuestro list
            return $this->redirect()->toRoute('productos-registro');

    }
      
}
