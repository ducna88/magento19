<?php
class Ducna_Hello_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        $layoutObject = $this->getLayout();

        /*$this->loadLayout('hello_world_view');
        var_dump($this->getLayout()->getUpdate()->getHandles());
        return;*/

        $childBlock = $layoutObject
            ->createBlock('ducna/child_block', 'blockDucna')
            ->setTemplate('hello/child.phtml');
        // sau khi khoi tao, co the goi no o moi noi bang lenh >>>
        // $layoutObject->getBlock('ducna');
        $block = $layoutObject
            ->createBlock('ducna/hello_world')
            ->setTemplate('hello/hello-world.phtml')
            ->append($childBlock, 'block_alias')
        ;
        echo $block->toHtml();

        $this->loadLayout('hello_world_view');
        $this->renderLayout();


    }
    public function viewAction()
    {

    }

    public function byeAction() {
        echo 'bye bye';
    }
}