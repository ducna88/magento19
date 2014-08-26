<?php
class Super_Base_Adminhtml_BaseController extends Mage_Adminhtml_Controller_Action {
    public function indexAction() {
        $this->loadLayout()
            ->renderLayout();
    }
}