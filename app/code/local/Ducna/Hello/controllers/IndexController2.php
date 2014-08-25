<?php
class Ducna_Hello_IndexController2 extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        $layoutObject = $this->getLayout();
        $block = $layoutObject
            ->createBlock('core/template')
            ->setTemplate('hello/hello-world.phtml')
            ->setMyName('Ducna')
        ;


    }
    public function viewAction()
    {

    }

    public function byeAction() {
        echo 'bye bye';
    }
}