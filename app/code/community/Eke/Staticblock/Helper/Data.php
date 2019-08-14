<?php
class Eke_Staticblock_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isSaticEnabled()
    {
        return Mage::getStoreConfig("eke_staticblock/static/enabled");
    }
	

}