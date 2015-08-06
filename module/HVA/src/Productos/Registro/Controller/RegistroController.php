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

             $post_data = $request->getPost();

             $id = $post_data['idproducto'];           
            if($id){
                
                //Creamos una instacia de nuestro articulovariante
                $articuloVariante = \ArticulovarianteQuery::create()->findOneByIdarticulovariante($id);
                $articuloVariante->setArticulovarianteCodigobarras($request->getPost()->articulovariante_codigobarras);
                $articuloVariante->setArticulovarianteCosto($request->getPost()->articulovariante_costo);
                $articuloVariante->setArticulovariantePrecio($request->getPost()->articulovariante_precio);
                $articuloVariante->setArticulovarianteIva($request->getPost()->articulovariante_iva);
                if($articuloVariante->isModified()){
                    $articuloVariante->save();
                }
            }else{
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
            }
            
            //Ahora las imagen
            if(!empty($_FILES)){
                $upload_folder ='/img/productos/';

                $imagen = $_FILES['articulovariante_imagen'];
                $tipo_archivo = $_FILES['articulovariante_imagen']['type']; $tipo_archivo = explode('/', $tipo_archivo); $tipo_archivo = $tipo_archivo[1];
                $nombre_archivo = 'producto_'.$post_data['idproducto'].'.'.$tipo_archivo;
                $tmp_archivo = $imagen['tmp_name'];
                $archivador = $upload_folder.$nombre_archivo;
                if(move_uploaded_file($tmp_archivo, $_SERVER["DOCUMENT_ROOT"].$archivador)){
                    $articuloVariante->setArticulovarianteImagen($archivador);
                    $articuloVariante->save();
                }

            }
            else{
                $oldulr = $_SERVER["DOCUMENT_ROOT"].$articuloVariante->getArticulovarianteImagen();
                unlink($oldulr);
                $articuloVariante->setArticulovarianteImagen('');   
                if($articuloVariante->isModified()){
                    $articuloVariante->save();

                }
            }
            //Agregamos un mensaje
            //$this->flashMessenger()->addMessage('Registro de productos guardados exitosamente!');
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
