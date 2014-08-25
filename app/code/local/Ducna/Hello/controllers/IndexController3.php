<?php
class Ducna_Hello_IndexController3 extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        $layoutObject = $this->getLayout();

        $block =$layoutObject
            ->createBlock('unique_group/hello_world');
        echo $block->toHtml();
    }
    public function viewAction()
    {

    }

    public function byeAction() {
        echo 'bye bye';
    }
}