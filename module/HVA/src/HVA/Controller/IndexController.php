<?php

namespace HVA\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function getalmacenesAction() {
        $collection = \LugarQuery::create()->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME);

        $autcomplete = array();

        foreach ($collection as $entity) {
            $tmp['value'] = $entity["idlugar"];
            $tmp['label'] = $entity["lugar_nombre"];
            $autcomplete[] = $tmp;
        }
        return $this->getResponse()->setContent(\Zend\Json\Json::encode($autcomplete));
    }
}
