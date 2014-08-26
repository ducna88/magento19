<?php
class Super_Base_Model_Mysql4_Base_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {
    public function _construct() {
        $this->_init('base/base');
    }
}