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
        ));

        $this->addColumn('birthday', array(
            'header' => Mage::helper('base')->__('Birthday'),
            'width' => '150px',
            'index' => 'birthday',
            'type' => 'date'
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

}