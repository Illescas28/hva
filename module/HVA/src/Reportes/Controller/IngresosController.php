<?php

namespace Reportes\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IngresosController extends AbstractActionController
{
    public function indexAction()
    {
        
        $request = $this->request;
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $fecha_from = $post_data['fecha_from'];
            $fecha_from = \DateTime::createFromFormat('d-m-Y', $fecha_from);
            
            $fecha_to   = $post_data['fecha_to'];
            if(!empty($fecha_to)){
                 $fecha_to = \DateTime::createFromFormat('d-m-Y', $fecha_to);
            }else{
                $fecha_to = new \DateTime();
            }
          
            $total_productos = 0;
            $total_servicios = 0;
            
            
            $q = \CargoadmisionQuery::create()->filterByCargoadmisionTipo('articulo')->filterByCargoadmisionFecha(array('min' => $fecha_from->format('Y-m-d'), 'max'=>$fecha_to->format('Y-m-d')))->withColumn('SUM(cargoadmision_monto)','total')->findOne()->toArray();
            if(!is_null($q['total'])){
                $total_productos += $q['total'];
            }
            $q = \CargoconsultaQuery::create()->filterByCargoconsultaTipo('articulo')->filterByCargoconsultaFecha(array('min' => $fecha_from->format('Y-m-d'), 'max'=>$fecha_to->format('Y-m-d')))->withColumn('SUM(monto)','total')->findOne()->toArray();
            if(!is_null($q['total'])){
                $total_productos += $q['total'];
            }
            $q = \CargoventaQuery::create()->filterByCargoventaTipo('articulo')->filterByCargoventaFecha(array('min' => $fecha_from->format('Y-m-d'), 'max'=>$fecha_to->format('Y-m-d')))->withColumn('SUM(monto)','total')->findOne()->toArray();
            if(!is_null($q['total'])){
                $total_productos += $q['total'];
            }
            
            $q = \CargoadmisionQuery::create()->filterByCargoadmisionTipo('servicio')->filterByCargoadmisionFecha(array('min' => $fecha_from->format('Y-m-d'), 'max'=>$fecha_to->format('Y-m-d')))->withColumn('SUM(cargoadmision_monto)','total')->findOne()->toArray();
            if(!is_null($q['total'])){
                $total_servicios += $q['total'];
            }
            $q = \CargoconsultaQuery::create()->filterByCargoconsultaTipo('servicio')->filterByCargoconsultaFecha(array('min' => $fecha_from->format('Y-m-d'), 'max'=>$fecha_to->format('Y-m-d')))->withColumn('SUM(monto)','total')->findOne()->toArray();
            if(!is_null($q['total'])){
                $total_servicios += $q['total'];
            }
            $q = \CargoventaQuery::create()->filterByCargoventaTipo('servicio')->filterByCargoventaFecha(array('min' => $fecha_from->format('Y-m-d'), 'max'=>$fecha_to->format('Y-m-d')))->withColumn('SUM(monto)','total')->findOne()->toArray();
            if(!is_null($q['total'])){
                $total_servicios += $q['total'];
            }
            
            return $this->getResponse()->setContent(\Zend\Json\Json::encode(array('total_servicios' => $total_servicios, 'total_productos' => $total_productos)));
            

            
            
            
        }
        

    }

    
}
