<?php

namespace Facturacion\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class EmitidasController extends AbstractActionController
{

    public function listarAction(){
        
        $collection =  \FacturaQuery::create()->orderByIdfactura('DESC')->filterByFacturaStatus('creada')->find();
        $arr = array();
        foreach ($collection->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $entity){
            $fecha = new \DateTime($entity['factura_fecha']);
            $tmp['id'] = $entity['idfactura'];
            $tmp['fecha'] = $fecha->format('d-m-Y H:s');
            if(!is_null($entity['idadmision'])){
                $tmp['movimiento'] = 'ADM-'.$entity['idadmision'];
            }else if(!is_null($entity['idconsulta'])){
                $tmp['movimiento'] = 'CON-'.$entity['idconsulta'];
            }else{
                $tmp['movimiento'] = 'VP-'.$entity['idventa'];
            }
            $tmp['uuid'] = $entity['factura_cfdi'];
            $arr[] = $tmp;
        }
        
        return new ViewModel(array(
            'collection' => $arr,
            'flashErrorMessages' => $this->flashMessenger()->getErrorMessages(),
            'flashMessages' => $this->flashMessenger()->getMessages(),
        ));
    }

}
