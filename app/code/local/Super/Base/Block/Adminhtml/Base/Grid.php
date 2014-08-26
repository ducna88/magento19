<?php
class Super_Base_Block_Adminhtml_Base_Grid extends Mage_Adminhtml_Block_Widget_Grid {
    public function __construct() {
        parent::__construct();
        $this->setId('baseGrid');
        $this->setDefaultSort('base_id');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
    }

    /**
     * lay ra collection can hien thi len grid
     */
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('base/base')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    /**
     * hàm chuẩn bị trước khi in ra grid
     */
    protected function _prepareColumns()
    {
        $this->addColumn('base_id', array(
            'header' => Mage::helper('base')->__('ID'),
            'align' =>'right',
            'width' => '50px',
            'index' => 'base_id',
        ));

        $this->addColumn('name', array(
            'header' => Mage::helper('base')->__('Name'),
            'align' =>'left',
            'index' => 'name',
            'width' => '200px'
        ));

        $this->addColumn('items_qty', array(
            'header' => Mage::helper('base')->__('Items Best'),
            'align' =>'left',
            'width' => '100px',
            'index' => 'items_qty',
            'type' => 'number'
        ));

        $currencyCode = Mage::app()->getStore()->getBaseCurrency()->getCode();
        $this->addColumn('totals_sales', array(
            'header' => Mage::helper('base')->__('Totals Sales'),
            'align' =>'right',
            'width' => '100px',
            'index' => 'totals_sales',
            'type' => 'price',
            'currency_code' => $currencyCode
        ));

        if (!Mage::app()->isSingleStoreMode()) {
            $this->addColumn('store_id', array(
                'header'    => Mage::helper('salestaff')->__('Store view'),
                'align'     =>'left',
                'index'     =>'store_id',
                'type'      =>'store',
                'width'     => '150px',
                'store_all' =>true,
                'store_view'=>true,
                'sortable'      => false,
                'filter_condition_callback'
                => array($this, '_filterStoreCondition'),
            ));
        }

        $this->addColumn('birthday', array(
            'header' => Mage::helper('base')->__('Birthday'),
            'width' => '150px',
            'index' => 'birthday',
            'type' => 'date'
        ));

        $this->addColumn('email', array(
            'header'    => Mage::helper('base')->__('Email'),
            'align'     =>'left',
            'index'     => 'email',
            'renderer'  =>   'base/adminhtml_base_renderer_email'
        ));

        $this->addColumn('avatar', array(
            'header'    => Mage::helper('base')->__('Avatar'),
            'align'     =>'left',
            'index'     => 'avatar',
            'sortable'      => false,
            'filter'      => false,
            'renderer'  =>   'base/adminhtml_base_renderer_avatar'
        ));

        $this->addColumn('sex', array(
            'header' => Mage::helper('base')->__('Sex'),
            'align' => 'left',
            'width' => '80px',
            'index' => 'sex',
            'type' => 'options',
            'options' => array(
                1 => 'Male',
                2 => 'Female',
            ),
        ));

        $this->addColumn('status', array(
            'header' => Mage::helper('base')->__('Status'),
            'align' => 'left',
            'width' => '80px',
            'index' => 'status',
            'type' => 'options',
            'options' => array(
                1 => 'Enabled',
                2 => 'Disabled',
            ),
        ));

        return parent::_prepareColumns();
    }

    /**
     * hàm trả lại url cho mỗi row trong grid
     */
    public function getRowUrl($row)
    {
        return '#';
    }

    protected function _filterStoreCondition($collection, $column)
    {
        if (!$value = $column->getFilter()->getValue()) {
            return;
        }

        $this->getCollection()->addFieldToFilter('store_id', $value);
    }

}