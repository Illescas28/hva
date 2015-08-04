<?php

namespace Facturacion\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Facturacion\FPDF\FPDF;
class FacturarController extends AbstractActionController
{
    
    public $emisorArr = array(
        'noCertificado' => '20001000000200000293', 
        'LugarExpedicion' => 'ZAPOPAN',
        'rfc' => 'AAD990814BP7',
        'nombre' => 'HOSPITAL DEL VALLE DE ATEMAJAC',
        'regimen' => 'S.A. de C.V.',
        'Domicilio' => array(
            'calle' => 'RAMON CORONA',
            'noExterior' => '55',
            'colonia' => 'ATEMAJAC',
            'noInterior' => '',
            'localidad' => '',
            'municipio' => 'ZAPOPAN',
            'estado' => 'JALISCO',
            'pais'  => 'MEXICO',
            'codigoPostal' => '45190',
        ),
        
        
    );
    
    
    public function listarAction()
    {
        $historico_array = array();
        $movimiento_arraty = array();
        
        $admisiones = \AdmisionQuery::create()->orderByIdadmision('desc')->filterByAdmisionStatus('pagada')->filterByAdmisionFacturada(false)->find();
        foreach ($admisiones as $admision){
            $tmp['fecha'] =  $admision->getAdmisionFechaadmision('d-m-Y H:i');
            $tmp['id'] = 'ADM-'.$admision->getIdadmision();
            $tmp['paciente'] = $admision->getPaciente()->getPacienteNombre().' '.$admision->getPaciente()->getPacienteAp().' '.$admision->getPaciente()->getPacienteAm();
            $tmp['medico'] = $admision->getMedico()->getMedicoNombre().' '.$admision->getMedico()->getMedicoApellidopaterno().' '.$admision->getMedico()->getMedicoApellidomaterno();
            $tmp['pagada'] = $admision->getAdmisionPagadaen('d-m-Y H:i');
            $tmp['tipo_pago'] = $admision->getAdmisionTipodepago();
            $tmp['total'] = $admision->getAdmisionTotal();
            $tmp['tipo'] = 'admision';
            $movimiento_array['ADM-'.$admision->getIdadmision()] = 'ADM-'.$admision->getIdadmision();
            $historico_array[] = $tmp;
        }
        
        $consultas = \ConsultaQuery::create()->orderByIdconsulta('desc')->filterByConsultaStatus('pagada')->filterByConsultaFacturada(false)->find();
        foreach ($consultas as $consulta){
            $tmp['fecha'] =  $consulta->getConsultaFecha('d-m-Y');
            $tmp['fecha'].= ' '.$consulta->getConsultaHora();
            $tmp['id'] = 'CON-'.$consulta->getIdconsulta();
            $tmp['paciente'] = $consulta->getPaciente()->getPacienteNombre().' '.$consulta->getPaciente()->getPacienteAp().' '.$consulta->getPaciente()->getPacienteAm();
            $tmp['medico'] = $consulta->getMedico()->getMedicoNombre().' '.$consulta->getMedico()->getMedicoApellidopaterno().' '.$consulta->getMedico()->getMedicoApellidomaterno();
            $tmp['pagada'] = $consulta->getConsultaFecha('d-m-Y');
            $tmp['pagada'].= ' '.$consulta->getConsultaHora();
            $tmp['tipo_pago'] = $consulta->getConsultaTipodepago();
            $tmp['total'] = $consulta->getConsultaTotal();
            $tmp['tipo'] = 'consulta';
            $movimiento_array['CON-'.$consulta->getIdconsulta()] = 'ADM-'.$consulta->getIdconsulta();
            $historico_array[] = $tmp;
        }
        
        $ventas = \VentaQuery::create()->orderByIdventa('desc')->filterByVentaStatus('pagada')->filterByVentaFacturada(false)->find();
        foreach ($ventas as $venta){
            $tmp['fecha'] =  $venta->getVentaFecha('d-m-Y H:i');
            $tmp['id'] = 'VP-'.$venta->getIdventa();
            $tmp['paciente'] = $venta->getPaciente()->getPacienteNombre().' '.$venta->getPaciente()->getPacienteAp().' '.$venta->getPaciente()->getPacienteAm();
            $tmp['medico'] = 'N/A';
            $tmp['pagada'] = $venta->getVentaFecha('d-m-Y H:i');
            $tmp['tipo_pago'] = $venta->getVentaTipodepago();
            $tmp['total'] = $venta->getVentaTotal();
            $tmp['tipo'] = 'venta al publico';
            $movimiento_array['VP-'.$venta->getIdventa()] = 'VP-'.$venta->getIdventa();
            $historico_array[] = $tmp;
        }
       
       return new ViewModel(array(
            'movimientos' => json_encode($movimiento_array),
            'collection' => $historico_array
        ));
  
    }
    
    
    public function generarAction(){
//        require(__DIR__.'/../FPDF/'.'fpdf.php');
//        $pdf = new FPDF();
//        $pdf->AddPage();
//        $pdf->SetFont('Arial','B',16);
//        $pdf->Cell(40,10,'¡Hola, Mundo!');
//        $pdf->Output();
//        
//        echo '<pre>';var_dump($request); echo '</pre>';exit();
        
        
        $request = $this->getRequest();
        
        if($request->isPost()){

            $post_data = $request->getPost();
            
            $cerpem = file_get_contents(__DIR__.'/../Certificados/aad990814bp7_1210261233s.cer.pem');
            $this->emisorArr['cerpem'] = $cerpem;
            $keypem = file_get_contents(__DIR__.'/../Certificados/aad990814bp7_1210261233s.key.pem');
            $this->emisorArr['keypem'] = $keypem;
            
            $receptorArr = \PacientefacturacionQuery::create()->findPk($post_data['idpacientefacturacion'])->toArray(\BasePeer::TYPE_FIELDNAME);

            $idmovimiento = $post_data['idmovimiento'];
            $type = explode('-', $idmovimiento);
            $idmovimiento= $type[1];
            $type = $type[0];
            
            switch ($type){
                case 'ADM':{
                    
                    $admision = \AdmisionQuery::create()->findPk($idmovimiento)->toArray(\BasePeer::TYPE_FIELDNAME);

                    //Los "items"
                    $admision_detalles_servicios = \CargoadmisionQuery::create()->filterByCargoadmisionTipo('servicio')->filterByIdadmision($idmovimiento)->find();
                    
                    foreach ($admision_detalles_servicios as $detalle){ 
                       $item = $detalle->toArray(\BasePeer::TYPE_FIELDNAME);
                      
                       $servicio_nombre = $detalle->getServicio()->getServicioNombre();
                       $servicio_valorunitario = $detalle->getServicio()->getServicioPrecio();
                       $item['servicio_tasa'] = $detalle->getServicio()->getServicioIva();
                       $item['servicio_nombre'] = $servicio_nombre;
                       $item['servicio_valorunitario'] = $servicio_valorunitario;
                       $item['servicio_unidad'] = 'No aplica';
                       
                       $admision['detalles'][] = $item;
                       
                    }
                   
                    $admision_detalles_articulo = \CargoadmisionQuery::create()->filterByCargoadmisionTipo('articulo')->filterByIdadmision($idmovimiento)->find();
                    foreach ($admision_detalles_articulo as $detalle){ 

                        $articulo = $detalle->getLugarinventario()->getOrdencompradetalle()->getArticuloVariante()->getArticulo();
                        $articulo_variante = $detalle->getLugarinventario()->getOrdencompradetalle()->getArticuloVariante();
                        
                        $articulo_nombre = '';
                        $articulo_nombre.=$articulo->getArticuloNombre().' ';
                        
                        //Descripcion
                        $articuloVarianteValorCollection = \ArticulovariantevalorQuery::create()->filterByIdarticulovariante($articulo_variante->getIdarticulovariante())->find();
                        
                        $propiedadCount = 0;
                        foreach ($articuloVarianteValorCollection as $kavv => $vavv){
                            $propiedadCount ++;
                            $articulo_nombre.= \PropiedadQuery::create()->findOneByIdpropiedad($vavv->getIdpropiedad())->getPropiedadNombre(); //Propiedad
                            $articulo_nombre.= ':'.\PropiedadvalorQuery::create()->findOneByIdpropiedadvalor($vavv->getIdpropiedadvalor())->getPropiedadvalorNombre(); //PropiedadValor
                            if($propiedadCount<$articuloVarianteValorCollection->count()){
                                $articulo_nombre.=' - ';
                            }
                        }
                       
                        $item = $detalle->toArray(\BasePeer::TYPE_FIELDNAME);
                        $item['articulo_nombre'] = $articulo_nombre;
                        $item['articulo_unidad']  = 'pieza';
                        $item['articulo_valorunitario']  = $articulo_variante->getArticulovariantePrecio();
                         $item['articulo_tasa']  = $articulo_variante->getArticulovarianteIva();
                       
                        $admision['detalles'][] = $item;
                       
                    }
                    $generalOrder = $admision;
                    break;
                }
                
                case 'CON':{
                    
                    $consulta = \ConsultaQuery::create()->findPk($idmovimiento)->toArray(\BasePeer::TYPE_FIELDNAME);

                    //Los "items"
                    $consulta_detalles_servicios = \CargoconsultaQuery::create()->filterByCargoconsultaTipo('servicio')->filterByIdconsulta($idmovimiento)->find();
                    
                    foreach ($consulta_detalles_servicios as $detalle){ 
                       $item = $detalle->toArray(\BasePeer::TYPE_FIELDNAME);
                      
                       $servicio_nombre = $detalle->getServicio()->getServicioNombre();
                       $servicio_valorunitario = $detalle->getServicio()->getServicioPrecio();
                       $item['servicio_tasa'] = $detalle->getServicio()->getServicioIva();
                       $item['servicio_nombre'] = $servicio_nombre;
                       $item['servicio_valorunitario'] = $servicio_valorunitario;
                       $item['servicio_unidad'] = 'No aplica';
                       
                       $consulta['detalles'][] = $item;
                       
                    }
                   
                    $consulta_detalles_articulo = \CargoconsultaQuery::create()->filterByCargoconsultaTipo('articulo')->filterByIdconsulta($idmovimiento)->find();
                    foreach ($consulta_detalles_articulo as $detalle){ 

                        $articulo = $detalle->getLugarinventario()->getOrdencompradetalle()->getArticuloVariante()->getArticulo();
                        $articulo_variante = $detalle->getLugarinventario()->getOrdencompradetalle()->getArticuloVariante();
                        
                        $articulo_nombre = '';
                        $articulo_nombre.=$articulo->getArticuloNombre().' ';
                        
                        //Descripcion
                        $articuloVarianteValorCollection = \ArticulovariantevalorQuery::create()->filterByIdarticulovariante($articulo_variante->getIdarticulovariante())->find();
                        
                        $propiedadCount = 0;
                        foreach ($articuloVarianteValorCollection as $kavv => $vavv){
                            $propiedadCount ++;
                            $articulo_nombre.= \PropiedadQuery::create()->findOneByIdpropiedad($vavv->getIdpropiedad())->getPropiedadNombre(); //Propiedad
                            $articulo_nombre.= ':'.\PropiedadvalorQuery::create()->findOneByIdpropiedadvalor($vavv->getIdpropiedadvalor())->getPropiedadvalorNombre(); //PropiedadValor
                            if($propiedadCount<$articuloVarianteValorCollection->count()){
                                $articulo_nombre.=' - ';
                            }
                        }
                       
                        $item = $detalle->toArray(\BasePeer::TYPE_FIELDNAME);
                        $item['articulo_nombre'] = $articulo_nombre;
                        $item['articulo_unidad']  = 'pieza';
                        $item['articulo_valorunitario']  = $articulo_variante->getArticulovariantePrecio();
                         $item['articulo_tasa']  = $articulo_variante->getArticulovarianteIva();
                       
                        $consulta['detalles'][] = $item;
                       
                    }
                    $generalOrder = $consulta;
                    break;
                }
            }
            

            // Aqui hacer conexion con el timbrador
            $bridgeFacturas = new \Facturacion\Timbradores\BridgeFacturas('finkok');
            
            //// A la pasarela  ------------------------------------------------------------
            $res = $bridgeFacturas->timbrar('factura', $type, $generalOrder, $this->emisorArr, $receptorArr);
            
            //Verificamos que no exista error al timbrar
            if (isset($res['error']) && $res['error'] != '') {
                $details = $res['error'];
                return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => false, 'details' =>  $details)));
            }else{
                $xmlTimbrado = $res['response'];
                $filePathXML = '/tmp/xml/' . $res['xmlId'] . '.xml';
                $filePathPDF = '/tmp/pdf/' . $res['xmlId'] . '.pdf';
                //Guardamos los datos de la factura
                $factura = new \Factura();
                $factura->setIddatosfacturacion($post_data['idpacientefacturacion']);
               
                if($type == 'ADM'){
                    $factura->setIdadmision($idmovimiento);
                    $admision = \AdmisionQuery::create()->findPk($idmovimiento);
                    $admision->setAdmisionFacturada(1);
                    $admision->save();
                    
                }else if($type = 'CON'){
                    $factura->setIdconsulta($idmovimiento);
                    $consulta = \ConsultaQuery::create()->findPk($idmovimiento);
                    $consulta->setConsultaFacturada(1);
                    $consulta->save();
                }else{
                    $factura->setIdventa($idmovimiento);
                }
                
                $factura->setFacturaUrlXml($filePathXML);
                $factura->setFacturaUrlPdf($filePathPDF);
                $factura->setFacturaFecha($xmlTimbrado['fecha']);
                $factura->setFacturaSellosat($xmlTimbrado['SatSeal']);
                $factura->setFacturaCertificadosat($xmlTimbrado['NoCertificadoSAT']);
                $factura->setFacturaCfdi($xmlTimbrado['uuid']);
                $factura->setFacturaMensaje($xmlTimbrado['codEstatus']);
                $factura->setFacturaTipodepago('unico');
                $factura->setFacturaTipo('ingreso');
                $factura->setFacturaStatus('creada');
                $factura->save();                
                $this->flashMessenger()->addMessage('Factura emitida exitosamente!');
                return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true)));
            } 
        }
        
        if($this->params()->fromRoute('id')){
            $id = $this->params()->fromRoute('id');
            $type = explode('-', $id);
            $id= $type[1];
            $type = $type[0];
            
            $factura_info = array();
            switch ($type){
                case 'ADM':{
                   
                    $admision = \AdmisionQuery::create()->findPk($id);
                    $factura_info['fecha'] =  $admision->getAdmisionFechaadmision('d-m-Y H:i');
                    $factura_info['id'] = 'ADM-'.$admision->getIdadmision();
                    $factura_info['paciente'] = $admision->getPaciente()->getPacienteNombre().' '.$admision->getPaciente()->getPacienteAp().' '.$admision->getPaciente()->getPacienteAm();
                    $factura_info['idpaciente'] = $admision->getPaciente()->getIdpaciente();
                    $factura_info['medico'] = $admision->getMedico()->getMedicoNombre().' '.$admision->getMedico()->getMedicoApellidopaterno().' '.$admision->getMedico()->getMedicoApellidomaterno();
                    $factura_info['pagada'] = $admision->getAdmisionPagadaen('d-m-Y H:i');
                    $factura_info['tipo_pago'] = $admision->getAdmisionTipodepago();
                    $factura_info['total'] = $admision->getAdmisionTotal();
                    $factura_info['tipo'] = 'admision';
                    
                    $direcciones = \PacientefacturacionQuery::create()->filterByIdpaciente($admision->getPaciente()->getIdpaciente())->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);

                    break;
                }
                case 'CON':{
                   
                    $consulta = \ConsultaQuery::create()->findPk($id);
                    $factura_info['fecha'] =  $consulta->getConsultaFecha('d-m-Y');
                    $factura_info['fecha'].= ' '.$consulta->getConsultaHora();
                    $factura_info['id'] = 'CON-'.$consulta->getIdconsulta();
                    $factura_info['paciente'] = $consulta->getPaciente()->getPacienteNombre().' '.$consulta->getPaciente()->getPacienteAp().' '.$consulta->getPaciente()->getPacienteAm();
                    $factura_info['idpaciente'] = $consulta->getPaciente()->getIdpaciente();
                    $factura_info['medico'] = $consulta->getMedico()->getMedicoNombre().' '.$consulta->getMedico()->getMedicoApellidopaterno().' '.$consulta->getMedico()->getMedicoApellidomaterno();
                    $factura_info['pagada'] = $consulta->getConsultaFecha('d-m-Y');
                    $factura_info['pagada'].= ' '.$consulta->getConsultaHora();
                    $factura_info['tipo_pago'] = $consulta->getConsultaTipodepago();
                    $factura_info['total'] = $consulta->getConsultaTotal();
                    $factura_info['tipo'] = 'consulta';
                    $direcciones = \PacientefacturacionQuery::create()->filterByIdpaciente($consulta->getPaciente()->getIdpaciente())->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
                    break;
                }
                case 'VP':{
                    $venta = \VentaQuery::create()->findPk($id);
                    $factura_info['id'] = 'VP-'.$venta->getIdventa();
                    $factura_info['paciente'] = $venta->getPaciente()->getPacienteNombre().' '.$venta->getPaciente()->getPacienteAp().' '.$venta->getPaciente()->getPacienteAm();
                    $factura_info['idpaciente'] = $venta->getPaciente()->getIdpaciente();
                    $factura_info['medico'] = 'N/A';
                    $factura_info['pagada'] = $venta->getVentaFecha('d-m-Y H:i');
                    $factura_info['tipo_pago'] = $venta->getVentaTipodepago();
                    $factura_info['total'] = $venta->getVentaTotal();
                    $factura_info['tipo'] = 'venta al publico';
                    
                    $direcciones = \PacientefacturacionQuery::create()->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME);
                    break;
                }

            }
           
            return new ViewModel(array(
                'general_info' => $factura_info,
                'facturacion_info' => $direcciones,
            ));
            
           
        }
        
        $this->getResponse()->setStatusCode(404);
        return;

    }
    
    public function nuevodatosfacturacionAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $pacientefactuacion = new \Pacientefacturacion();
            
            foreach ($post_data as $key => $value){
                $pacientefactuacion->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
            }
            
            $pacientefactuacion->save();
            
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('response' => true, 'data' => $pacientefactuacion->toArray(\BasePeer::TYPE_FIELDNAME))));
            
           
            
            
        }
        
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        return $viewModel;

        
    }
    
  
}
