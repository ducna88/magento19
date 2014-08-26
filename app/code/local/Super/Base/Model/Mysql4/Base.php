<?php
class Super_Base_Model_Mysql4_Base extends Mage_Core_Model_Mysql4_Abstract {
    public function _construct() {
        $this->_init('base/base','db_base');
    }
}