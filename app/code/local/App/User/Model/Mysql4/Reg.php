<?php


class App_User_Model_Mysql4_Reg extends Mage_Core_Model_Mysql4_Abstract{
    
    
    
    public function _construct()
    {
        $this->_init("user/reg", "id");
    }
    
    
    
}