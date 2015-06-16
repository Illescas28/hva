<?php

namespace Catalogos\Producto\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

//// Form ////
use Catalogos\Producto\Form\ProductoForm;

//// Filter ////
use Catalogos\Producto\Filter\ProductoFilter;

//// Propel ////
use Articulo;
use ArticuloQuery;
use BasePeer;

class ProductoController extends AbstractActionController
{
    public function nuevoAction()
    {
        $tipoQuery = \TipoQuery::create()->find();

        $tipoArray = array();
        foreach($tipoQuery as $tipo){
            $tipoArray[$tipo->getIdtipo()] = $tipo->getTipoNombre();
        }
        $productoForm = new ProductoForm($tipoArray);

        $request = $this->getRequest();
        if ($request->isPost()) {

            $productoFilter = new ProductoFilter();
            $productoForm->setInputFilter($productoFilter->getInputFilter());

            $productoForm->setData($request->getPost());

            if ($productoForm->isValid()) {
                if(\ArticuloQuery::create()->filterByArticuloNombre($request->getPost()->articulo_nombre)->exists()){
                    $ProductoQuery = \ArticuloQuery::create()->filterByArticuloNombre($request->getPost()->articulo_nombre)->findOne();

                    if(\PropiedadQuery::create()->filterByPropiedadNombre($request->getPost()->propiedad_nombre)->exists()){
                        $PropiedadQuery = \PropiedadQuery::create()->filterByPropiedadNombre($request->getPost()->propiedad_nombre)->findOne();

                        $Propiedadvalor = new \Propiedadvalor();
                        $Propiedadvalor->setIdarticulo($ProductoQuery->getIdarticulo());
                        $Propiedadvalor->setIdpropiedad($PropiedadQuery->getIdpropiedad());
                        $Propiedadvalor->setPropiedadvalorNombre($request->getPost()->propiedadvalor_nombre);
                        $Propiedadvalor->save();

                    }
                }
                $Producto = new \Articulo();
                foreach($productoForm->getData() as $ProductoKey => $ProductoValue){
                    if($ProductoKey != 'idarticulo' && $ProductoKey != 'propiedad_nombre' && $ProductoKey != 'idpropiedad' && $ProductoKey != 'propiedadvalor_nombre' && $ProductoKey != 'submit'){
                        $Producto->setByName($ProductoKey, $ProductoValue, BasePeer::TYPE_FIELDNAME);
                    }
                }
                $Producto->save();

                $Propiedad = new \Propiedad();
                $Propiedad->setIdarticulo($Producto->getIdarticulo());
                $Propiedad->setPropiedadNombre($request->getPost()->propiedad_nombre);
                $Propiedad->save();

                $Propiedadvalor = new \Propiedadvalor();
                $Propiedadvalor->setIdarticulo($Producto->getIdarticulo());
                $Propiedadvalor->setIdpropiedad($Propiedad->getIdpropiedad());
                $Propiedadvalor->setPropiedadvalorNombre($request->getPost()->propiedadvalor_nombre);
                $Propiedadvalor->save();

                $propiedadvalorQuery = \PropiedadvalorQuery::create()->filterByPropiedadvalorNombre($Propiedadvalor->getPropiedadvalorNombre())->find();
                $propiedadvalorArray = array();
                foreach($propiedadvalorQuery as $propiedadvalorEntity){
                    $propiedadvalorArray[$propiedadvalorEntity->getIdpropiedadvalor()] = $propiedadvalorEntity->getPropiedadvalorNombre();
                }

                /*
                return array(
                    'productoForm' => $productoForm,
                    'propiedadvalor' => $propiedadvalorArray,
                );
                */

                if($error =! null){
                    return $this->redirect()->toRoute('producto');
                }
            }
        }
        return array(
            'productoForm' => $productoForm,
        );
    }

    public function listarAction()
    {
        $productoQuery = new \PropiedadvalorQuery();

        $result = $productoQuery->paginate();

        $dataCollection = $result->getResults();

        return new ViewModel(array(
            'productos' => $dataCollection,
        ));
    }

    public function editarAction()
    {

        $id = (int) $this->params()->fromRoute('id', 0);

        if (!$id) {
            return $this->redirect()->toRoute('producto', array(
                'action' => 'nuevo'
            ));
        }

        $request = $this->getRequest();

        //Verificamos que el idarticulo que se quiere modificar exista
        if(ArticuloQuery::create()->filterByIdarticulo($id)->exists()){

            //Instanciamos nuestro idarticulo
            $articulo = ArticuloQuery::create()->findPk($id);

            //Almacenamos en un arreglo todas las propiedades
            $tipoCollection = \TipoQuery::create()->find();
            $tipoArray = array();
            foreach ($tipoCollection as $tipoEntity){
                $tipoArray[$tipoEntity->getIdtipo()] = $tipoEntity->getTipoNombre();
            }

            //Instanciamos nuestro formulario
            $productoForm = new ProductoForm($tipoArray);

            $productoArray = array();
            foreach ($articulo->toArray(BasePeer::TYPE_FIELDNAME) as $articuloKey => $articuloValue){
                $productoArray[$articuloKey] = $articuloValue;
            }

            //Almacenamos en un arreglo todas las propiedades
            $propiedadCollection = \PropiedadQuery::create()->filterByIdarticulo($productoArray['idarticulo'])->find();
            $propiedadArray = array();
            // Si existen registros
            if($propiedadCollection->getArrayCopy()){

                foreach($propiedadCollection->getArrayCopy() as $propiedadEntity){

                    foreach($propiedadEntity->toArray(BasePeer::TYPE_FIELDNAME) as $propiedadKey => $propiedadValue){

                        //Si los keys son igual a idpropiedad o propiedad_nombre
                        if($propiedadKey == 'idpropiedad' || $propiedadKey == 'propiedad_nombre'){
                            $propiedadArray[$propiedadKey] = $propiedadValue;
                            //Almacenamos en un arreglo todas los valores de las propiedades
                            $propiedadvalorCollection = \PropiedadvalorQuery::create()->filterByIdpropiedad($propiedadArray['idpropiedad'])->filterByIdarticulo($productoArray['idarticulo'])->find();
                            $propiedadvalorArray = array();
                            if($propiedadvalorCollection->getArrayCopy()){
                                foreach($propiedadvalorCollection->getArrayCopy() as $propiedadvalorEntity){
                                    foreach($propiedadvalorEntity->toArray(BasePeer::TYPE_FIELDNAME) as $propiedadvalorKey => $propiedadvalorValue){
                                        if($propiedadvalorKey == 'idpropiedadvalor' || $propiedadvalorKey == 'propiedadvalor_nombre'){
                                            $propiedadvalorArray[$propiedadvalorKey] = $propiedadvalorValue;
                                            array_push($productoArray, $propiedadvalorArray);
                                        }
                                    }
                                }
                            }
                            array_push($productoArray, $propiedadArray);
                        }
                    }
                }
            }

            //Le ponemos los datos de nuestro producto a nuestro formulario
            $productoForm->setData($productoArray);

            if ($request->isPost()) { //Si hicieron POST

                //Instanciamos nuestro filtro
                $productoFilter = new ProductoFilter();
                //Le ponemos nuestro filtro a nuesto fromulario
                $productoForm->setInputFilter($productoFilter->getInputFilter());
                //Le ponemos los datos a nuestro formulario
                $productoForm->setData($request->getPost());

                //Validamos nuestro formulario
                if($productoForm->isValid()){


                    //Recorremos nuestro formulario y seteamos los valores a nuestro objeto Medico
                    foreach ($productoForm->getData() as $productoKey => $productoValue){
                        $articulo->setByName($productoKey, $productoValue, \BasePeer::TYPE_FIELDNAME);
                    }

                    //Guardamos en nuestra base de datos
                    $articulo->save();
                    //Agregamos un mensaje
                    $this->flashMessenger()->addMessage('Medico guardado exitosamente!');
                    //Redireccionamos a nuestro list
                    return $this->redirect()->toRoute('producto');
                }else{

                }
            }

            return new ViewModel(array(
                'id'  => $id,
                'ProductoForm' => $productoForm,
            ));
        }
    }

    public function eliminarAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('producto');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                $ProductoQuery = ProductoQuery::create()->filterByIdproducto($id)->findOne();
                // Almacenamos la ruta en donde se encuentra el archivo que remplasaremos.
                $dirFile = '/Applications/AMPPS/www/Project/HVA/public'.$ProductoQuery->getProductoImagen();
                if(unlink($dirFile)){//El archivo fue borrado.
                    ProductoQuery::create()->filterByIdproducto($id)->delete();
                }else{
                    ProductoQuery::create()->filterByIdproducto($id)->delete();
                }
            }

            // Redireccionamos a los provedores
            return $this->redirect()->toRoute('producto');
        }

        $provedorEntity = ProductoQuery::create()->filterByIdproducto($id)->findOne();
        return array(
            'id'    => $id,
            'producto' => $provedorEntity->toArray(BasePeer::TYPE_FIELDNAME)
        );
    }
}