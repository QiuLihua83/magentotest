<?php


class App_Helloworld_BlogController extends Mage_Core_Controller_Front_Action{
    
    
    public  function indexAction()
    {
        Mage::log("in Blogpost class index();");
        //echo "welcom to blog.";
         $blogpost = Mage::getModel('helloworld/blogpost');
         echo get_class($blogpost);
    }
    
    
    
}