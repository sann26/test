<?php
class Pfay_Test_Block_Monblock extends Mage_Core_Block_Template
{
    public function methodblock()
    {
        $retour='';
        $collection = Mage::getModel('test/test')
            ->getCollection()
            ->setOrder('id_pfay_test','asc');
        foreach($collection as $data)
        {
            $retour .= $data->getData('nom').' '.$data->getData('prenom')
                .' '.$data->getData('telephone').'<br />';
        }
        Mage::getSingleton('adminhtml/session')->addSuccess('Cool Ca marche !!');
        return $retour;
    }
}