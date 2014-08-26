<?php
class Super_Base_Model_Base extends Mage_Core_Model_Abstract {
    public function _construct() {
        $this->_init('base/base');
    }
}