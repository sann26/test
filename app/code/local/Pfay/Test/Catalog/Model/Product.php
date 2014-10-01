<?php
/**
 * Created by PhpStorm.
 * User: sann26
 * Date: 24.09.14
 * Time: 22:38
 */

class Pfay_Test_Catalog_Model_Product extends Mage_Catalog_Model_Product {
    public function getName()
    {
        $temp = $this->_getData('name');
        echo $temp.'<br>';
        $temp = substr($temp, 0, -1);
        return $temp;
    }
}