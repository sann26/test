<?php
class Pfay_Test_Block_Adminhtml_Grid extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_test';
        $this->_blockGroup = 'test';
        $this->_headerText = 'Adressbook management';
        $this->_addButtonLabel = 'Add a contact';
        parent::__construct();
    }
}