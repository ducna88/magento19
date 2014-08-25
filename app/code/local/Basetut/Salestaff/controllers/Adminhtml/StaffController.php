<?php
class Basetut_Salestaff_Adminhtml_StaffController extends Mage_Adminhtml_Controller_Action
{
    /**
     * index action
     */
    public function indexAction()
    {
        $this->loadLayout()
            ->renderLayout();
    }
}