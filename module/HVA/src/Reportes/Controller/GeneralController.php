<?php

namespace Reportes\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class GeneralController extends AbstractActionController
{
    public function indexAction()
    {
        
        //Hacemos una peticion a todas nuestras admisiones
        $admisiones = \AdmisionQuery::create()->orderByIdadmision('asc')->find();
        
        $general_array = array();
        
        //Comenzamos a itinerar para darl el formato que necesitamos
        foreach ($admisiones as $admision){
            $tmp['fecha'] = new \DateTime($admision->getAdmisionFechaadmision());
            $tmp['fecha'] = $tmp['fecha']->format('d-m-Y'); 
            $tmp['movimiento'] = 'ADM-'.$admision->getIdadmision();
            $tmp['paciente'] = $admision->getPaciente()->getPacienteNombre().' '.$admision->getPaciente()->getPacienteAp().' '.$admision->getPaciente()->getPacienteAm();
            $tmp['medico'] = $admision->getMedico()->getMedicoNombre().' '.$admision->getMedico()->getMedicoApellidopaterno().' '.$admision->getMedico()->getMedicoApellidomaterno();
            $tmp['diagnostico'] = $admision->getAdmisionDiagnostico();
            $tmp['status_pago'] = $admision->getAdmisionStatus();
            //Verificar con George
            $tmp['razon_social'] = NULL;
            //Pagos
            $tmp['total'] = $admision->getAdmisionTotal();
            
            $tmp['efectivo'] = \AdmisionanticipoQuery::create()->filterByIdadmision($admision->getIdadmision())->filterByAdmisionanticipoTipo('Efectivo')->withColumn('SUM(admisionanticipo_cantidad)','total')->findOne()->toArray();
            $tmp['efectivo'] = $tmp['efectivo']['total'];
            
            $tmp['tarjeta'] = \AdmisionanticipoQuery::create()->filterByIdadmision($admision->getIdadmision())->filterByAdmisionanticipoTipo(array('Tarjeta de debito','Tarjeta de credito'))->withColumn('SUM(admisionanticipo_cantidad)','total')->findOne()->toArray();
            $tmp['tarjeta'] = $tmp['tarjeta']['total'];
            
            $tmp['cheque'] = \AdmisionanticipoQuery::create()->filterByIdadmision($admision->getIdadmision())->filterByAdmisionanticipoTipo('Cheque')->withColumn('SUM(admisionanticipo_cantidad)','total')->findOne()->toArray();
            $tmp['cheque'] = $tmp['cheque']['total'];
            
            $tmp['spei'] = \AdmisionanticipoQuery::create()->filterByIdadmision($admision->getIdadmision())->filterByAdmisionanticipoTipo('SPEI')->withColumn('SUM(admisionanticipo_cantidad)','total')->findOne()->toArray();
            $tmp['spei'] = $tmp['spei']['total'];
            //Verificar con George (status alta/admision)
            $tmp['status'] = NULL;
            
            $general_array[] = $tmp;

        }
        
        $consultas = \ConsultaQuery::create()->orderByIdconsulta('asc')->find();
        //Comenzamos a itinerar para darl el formato que necesitamos
        foreach ($consultas as $consulta){
            $tmp['fecha'] = new \DateTime($consulta->getConsultaFecha());
            $tmp['fecha'] = $tmp['fecha']->format('d-m-Y'); 
            $tmp['movimiento'] = 'CON-'.$consulta->getIdconsulta();
            $tmp['paciente'] = $consulta->getPaciente()->getPacienteNombre().' '.$consulta->getPaciente()->getPacienteAp().' '.$consulta->getPaciente()->getPacienteAm();
            $tmp['medico'] = $consulta->getMedico()->getMedicoNombre().' '.$consulta->getMedico()->getMedicoApellidopaterno().' '.$consulta->getMedico()->getMedicoApellidomaterno();
            $tmp['diagnostico'] = $consulta->getConsultaDiagnostico();
            $tmp['status_pago'] = $consulta->getConsultaStatus();
            //Verificar con George
            $tmp['razon_social'] = NULL;
            //Pagos
            $tmp['total'] = $consulta->getConsultaTotal();
            
            $tmp['efectivo'] = \ConsultaanticipoQuery::create()->filterByIdconsulta($consulta->getIdconsulta())->filterByConsultaanticipoTipo('Efectivo')->withColumn('SUM(consultaanticipo_cantidad)','total')->findOne()->toArray();
            $tmp['efectivo'] = $tmp['efectivo']['total'];
            
            $tmp['tarjeta'] = \ConsultaanticipoQuery::create()->filterByIdconsulta($consulta->getIdconsulta())->filterByConsultaanticipoTipo(array('Tarjeta de debito','Tarjeta de credito'))->withColumn('SUM(consultaanticipo_cantidad)','total')->findOne()->toArray();
            $tmp['tarjeta'] = $tmp['tarjeta']['total'];
            
            $tmp['cheque'] = \ConsultaanticipoQuery::create()->filterByIdconsulta($consulta->getIdconsulta())->filterByConsultaanticipoTipo('Cheque')->withColumn('SUM(consultaanticipo_cantidad)','total')->findOne()->toArray();
            $tmp['cheque'] = $tmp['cheque']['total'];
            
            $tmp['spei'] = \ConsultaanticipoQuery::create()->filterByIdconsulta($consulta->getIdconsulta())->filterByConsultaanticipoTipo('SPEI')->withColumn('SUM(consultaanticipo_cantidad)','total')->findOne()->toArray();
            $tmp['spei'] = $tmp['spei']['total'];
            //Verificar con George (status alta/admision)
            $tmp['status'] = NULL;
            
            $general_array[] = $tmp;

        }
        
        return new ViewModel(array(
            'reportes' => $general_array,
        ));
        
    }
    
    public function getmovimientosAction(){
        
        $admisiones = \AdmisionQuery::create()->orderByIdadmision('asc')->find();
        $consultas = \ConsultaQuery::create()->orderByIdconsulta('asc')->find();
        
        $movimientos_array = array();
        foreach ($admisiones as $admision){
            $id = 'ADM-'.$admision->getIdadmision();
            $movimientos_array[$id] = 'ADM-'.$admision->getIdadmision();
        }
        foreach ($consultas as $consulta){
            $id = 'CON-'.$consulta->getIdconsulta();
            $movimientos_array[$id] = 'CON-'.$consulta->getIdconsulta();
        }
        
        return $this->getResponse()->setContent(\Zend\Json\Json::encode($movimientos_array));

    }

    
}
