<?php

namespace Pacientes\Historico\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class HistoricoController extends AbstractActionController
{
    public function listarAction()
    {
        
        $historico_array = array();
        $movimiento_arraty = array();
        
        $admisiones = \AdmisionQuery::create()->find();
        foreach ($admisiones as $admision){
            $tmp['fecha'] =  $admision->getAdmisionFechaadmision('d-m-Y');
            $hora =  date("g:i A", strtotime($admision->getAdmisionFechaadmision('h:i')));
            $tmp['hora'] = $hora;
            $tmp['id'] = 'ADM-'.$admision->getIdadmision();
            $tmp['paciente'] = $admision->getPaciente()->getPacienteNombre().' '.$admision->getPaciente()->getPacienteAp().' '.$admision->getPaciente()->getPacienteAm();
            $tmp['medico'] = $admision->getMedico()->getMedicoNombre().' '.$admision->getMedico()->getMedicoApellidopaterno().' '.$admision->getMedico()->getMedicoApellidomaterno();
            $tmp['tipo'] = 'admision';
            $movimiento_array['ADM-'.$admision->getIdadmision()] = 'ADM-'.$admision->getIdadmision();
            $historico_array[] = $tmp;
        }
        
        $consultas = \ConsultaQuery::create()->find();
        foreach ($consultas as $consulta){
            $tmp['fecha'] =  $consulta->getConsultaFecha('d-m-Y');
            $hora =  date("g:i A", strtotime($consulta->getConsultaHora('h:i')));
            $tmp['hora'] = $hora;
            $tmp['id'] = 'CON-'.$consulta->getIdconsulta();
            $tmp['paciente'] = $consulta->getPaciente()->getPacienteNombre().' '.$consulta->getPaciente()->getPacienteAp().' '.$consulta->getPaciente()->getPacienteAm();
            $tmp['medico'] = $consulta->getMedico()->getMedicoNombre().' '.$consulta->getMedico()->getMedicoApellidopaterno().' '.$consulta->getMedico()->getMedicoApellidomaterno();
            $tmp['tipo'] = 'consulta';
            $movimiento_array['CON-'.$consulta->getIdconsulta()] = 'CON-'.$consulta->getIdconsulta();
            $historico_array[] = $tmp;
        }
        
        return new ViewModel(array(
            'movimientos' => json_encode($movimiento_array),
            'collection' => $historico_array
        ));
        
    }

    
}
