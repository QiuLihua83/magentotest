<?php


class App_User_Model_Reg extends  Mage_Core_Model_Abstract{
    
    
    public  function _construct()
    {
        parent::_construct();
        $this->_init("user/reg");
    }
    
    
}