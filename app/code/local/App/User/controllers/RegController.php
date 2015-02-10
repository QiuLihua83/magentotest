<?php


class App_User_RegController extends Mage_Core_Controller_Front_Action{
    
    
    
    public  function  IndexAction()
    {
        
        echo "welcome to reg to me.<br/>";
        $md = Mage::getModel("user/reg");
        echo get_class($md);
        
        $md->load(1);
        $data = $md->getData();
        
        var_dump($data);
    }
    
    
    
    
}