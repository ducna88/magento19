<?php
class Ducna_Demo5_Model_MySql4_MyModel extends Mage_Core_Model_Mysql4_Abstract {
    protected function _construct() {
        $this->_init('demo5/MyModel','demo5');
    }
}