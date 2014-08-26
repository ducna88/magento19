<?php
class Super_Base_Block_Adminhtml_Base extends Mage_Adminhtml_Block_Widget_Grid_Container {
    public function __construct() {
        $this->_controller = 'adminhtml_base';
        $this->_blockGroup = 'base';
        $this->_headerText = Mage::helper('base')->__('Base Manager');
        parent::__construct();
        $this->_removeButton('add');
    }
}