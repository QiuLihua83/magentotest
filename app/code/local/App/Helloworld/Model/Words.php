<?php


class App_Helloworld_Model_Words{
    
    
    public function toOptionArray()
    {
        return array(array('value'=>1,'label'=>Mage::helper('helloworld')->__('Hello')),
                               array('value'=>2,'label'=>Mage::helper('helloworld')->__('Good')),
                               array('value'=>3,'label'=>Mage::helper('helloworld')->__('Bye')),
                               array('value'=>4,'label'=>Mage::helper('helloworld')->__('Hi')),
                               array('value'=>5,'label'=>Mage::helper('helloworld')->__('Thanks')),);
    }
    
}