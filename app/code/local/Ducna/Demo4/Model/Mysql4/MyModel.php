<?php
class Ducna_Demo4_Model_Mysql4_MyModel extends Mage_Core_Model_Mysql4_Abstract {
    public function _construct() {
        $this->_init("demo4/MyModel","demoId");
    }
}