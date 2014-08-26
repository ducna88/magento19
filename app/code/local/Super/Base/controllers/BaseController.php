<?php
class Super_Base_BaseController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
        $this->loadLayout()
            ->renderLayout();
    }
}