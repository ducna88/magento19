<?php
class Super_Basic_Adminhtml_BasicController extends Mage_Adminhtml_Controller_Action {
    protected function _initAction() {
        $this->loadLayout()
            ->_setActiveMenu('basic/items')
            ->_addBreadcrumb(Mage::helper('adminhtml')->__('Items Manager'),
                Mage::helper('adminhtml')->__('Item Manager'));
        return $this;
    }

    public function indexAction() {
        $this->_initAction()
            ->renderLayout();
    }

    public function editAction() {
        $id = $this->getRequest()->getParam('id');
        $model = Mage::getModel('basic/MyModel')->load($id);
        if($model->getId() || $id==0) {
            $data = Mage::getSingleton('adminhtml/session')->getFormData(true);
            if(!empty($data)) {
                $model->setData($data);
            }
            Mage::register('basic_data',$model);



        }

    }

}