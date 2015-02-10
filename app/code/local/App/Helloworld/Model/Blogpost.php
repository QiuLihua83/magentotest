<?php


class App_Helloworld_Model_Blogpost extends Mage_Core_Model_Abstract{
    
    
    
    public function _construct()
    {
        parent::_construct();
        $this->_init('helloworld/blogpost');
    }
    
    public function hello()
    {
        return "hello world blog model.<br/>";
    }
    
}

