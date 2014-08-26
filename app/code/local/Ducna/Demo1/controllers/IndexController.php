<?php
class Ducna_Demo1_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {

        $this->loadLayout();
        $this->renderLayout();
    }
    public function goodbyeAction() {
        //echo 'bye bye';
        $this->loadLayout();
        $this->renderLayout();
    }
}