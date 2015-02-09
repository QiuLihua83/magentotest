<?php
class pig_Helloworld_BlogController extends Mage_Core_Controller_Front_Action { 
	
	
	public function indexAction()
    {
    	//$blogpost = Mage::getModel('helloworld/blogpost');
    	//echo get_class($blogpost);
    	
//     	$params = $this->getRequest()->getParams();
//     	$blogpost = Mage::getModel('helloworld/blogpost'); 
//     	echo("Loading the blogpost with an ID of ".$params['id']."<br />"); $blogpost->load($params['id']);
//     	$data = $blogpost->getData();
//     	var_dump($data);
    	
	    echo 'Hello Blog'; 
    }
    
    
}