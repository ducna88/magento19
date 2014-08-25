<?php
class Ducna_Demo1_InfoController2 extends Mage_Core_Controller_Front_Action {
    public function indexAction123() {

        //$this->loadLayout('demo1');
        //$this->renderLayout();
        //goi 1 block
       /* $layouObject = $this->getLayout();
        $block = $layouObject
            ->createBlock('core/template')
            ->setTemplate('demo1/demo1.phtml')
            ->setYourname('magento name')
        ;*/
        // tao 1 block
        /*$layouObject = $this->getLayout();
        $block = $layouObject
            ->createBlock('demo1/blockhello');*/

        $layoutObject = $this->getLayout('');


        $childBlock = $layoutObject
            ->createBlock('demo1/demo1','child1')
            ->setTemplate('demo1/demo1_1.phtml')

        ;

        $block_left = $layoutObject
            ->createBlock('demo1/blockhello', 'block_left')
            ->setTemplate('demo1/demo1.phtml')
            ->setYourname('magento name')
            //->append($childBlock, 'block_child_alias')
        ;

        $block_content = $layoutObject
            ->createBlock('demo1/blockhello', 'block_content')
            ->setTemplate('demo1/demo1.phtml')
            ->setYourname('magento name')
            //->append($childBlock, 'block_child_alias')
        ;

        $block_right = $layoutObject
            ->createBlock('demo1/blockhello', 'block_right')
            ->setTemplate('demo1/demo1.phtml')
            ->setYourname('magento name')
            ->append($childBlock, 'block_child_alias')
        ;


       /* $pageBlock = $layoutObject
            ->createBlock('')
            ->setTemplate('')
            ->append($block, 'block_alias')
            ;*/


        //echo $block->toHtml();
        //echo $block_content->toHtml();
        //echo $block_right->toHtml();
        //echo $block2->toHtml();

        $this->loadLayout();


       $this->getLayout()->getBlock('content')->append($block_content);
       $this->getLayout()->getBlock('right')->append($block_right);
       $this->getLayout()->getBlock('left')->append($block_left);
        /*$this->getLayout()->getBlock('content')->append($block_content);
       $this->getLayout()->getBlock('right')->append($block_right);*/

        //$this->getLayout()->getBlock('left')->append($block, 'block_demo1');
        //$this->renderLayout();


       // var_dump($this->loadLayout());

        //$this->getLayout()->getBlock('left')->append($block);
        $this->renderLayout();

        //var_dump($this->getLayout()->getUpdate()->getHandles());


    }
    public function goodbyeAction() {
        //echo 'bye bye';
        $this->loadLayout();
        $this->renderLayout();
    }
}