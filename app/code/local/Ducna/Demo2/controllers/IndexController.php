<?php
class Ducna_Demo2_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
        //echo 'xin chao';
        $this->loadLayout('ducna_demo2_index_index');
        $this->renderLayout();
    }
}