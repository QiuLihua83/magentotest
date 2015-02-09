<?php

class pig_HelloWorld_Model_Resource_Mysql4_Blogpost extends Mage_Core_Model_Resource_Abstract{
	
	
	protected function _construct()
	{
		$this->_init('helloworld/blogpost', 'blogpost_id'); 
	}
	
	
}