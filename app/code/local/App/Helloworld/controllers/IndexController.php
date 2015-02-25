<?php


class App_Helloworld_IndexController extends Mage_Core_Controller_Front_Action{
    
    
    public  function indexAction()
    {
        echo "welcom to magentotest.";
        $this->loadLayout();
        $this->renderLayout();
    }
    
    public  function goodbyeAction()
    {
        echo 'welcome next time.';
        echo 'your params are:<br/>';
        $params = $this->getRequest()->getParams();
        var_dump($params);
    }
    
    public function testAction()
    {
        $collection_of_products = Mage::getModel('catalog/product')->getCollection()
                                                    ->addAttributeToSelect('*');
        var_dump($collection_of_products->getFirstItem()->getData());
        var_dump($collection_of_products->getSelect());
    }
    
    public function blockAction()
    {
        echo "in block action.";
        $this->loadLayout();
        $this->renderLayout();
        echo "end block action.";
    }
    
}