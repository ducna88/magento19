<?php
class Ducna_Demo5_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
       /* $demo5 = Mage::getModel('demo5/mymodel');
        echo get_class($demo5);*/

        $params = $this->getRequest()->getParams();
        $demo5 = Mage::getModel('demo5/MyModel');
        echo("Loading the demo5 with an ID of ".$params['id']);
        $demo5->load($params['id']);
        $data = $demo5->getData();
        var_dump($data);
    }
}