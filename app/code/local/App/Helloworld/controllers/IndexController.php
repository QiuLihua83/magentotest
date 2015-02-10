<?php


class App_Helloworld_IndexController extends Mage_Core_Controller_Front_Action{
    
    
    public  function indexAction()
    {
        echo "welcom to magentotest.";
    }
    
    public  function goodbyeAction()
    {
        echo 'welcome next time.';
    }
    
}