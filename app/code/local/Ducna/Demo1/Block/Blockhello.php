<?php
class Ducna_Demo1_Block_Blockhello extends Mage_Core_Block_Template {
    protected function _construct() {
        parent::_construct();
        //$this->setTemplate('demo1/demo1.phtml');
    }

    public function getMyName() {
        return "DucNA";
    }
}
