<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 8/25/14
 * Time: 3:59 PM
 */ 
class Dungmv_test_Helper_Data extends Mage_Core_Helper_Abstract {
    public function indexAction(){
        echo (int)((0.1+0.7)*10);
    }
}