<?php
class Super_Base_Block_Adminhtml_Base_Renderer_Avatar extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract {
    public function render(Varien_Object $row) {

        return sprintf('
                <a href="%s">%s</a>',
            Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA).$row->getAvatar(),
            '<img alt="" src="'.Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA).$row->getAvatar().'" width="100" />'
        );

    }
}