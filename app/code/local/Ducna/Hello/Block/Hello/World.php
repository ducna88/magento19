<?php
class Ducna_Hello_Block_Hello_World extends Mage_Core_Block_Template {
    protected function _construct() {
        $this->setTemplate('hello/hello-world.phtml');
    }

    public function getMyName() {
        return "Ducna";
    }
}