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
    
    public function testAction()
    {
        $collection_of_products = Mage::getModel('catalog/product')->getCollection()
                                                    ->addAttributeToSelect('*');
        var_dump($collection_of_products->getFirstItem()->getData());
        var_dump($collection_of_products->getSelect());
    }
    
}