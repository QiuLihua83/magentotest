<?php
echo "Running this upgrade: " . get_class ( $this ) . "<br/>";

$installer = $this;
$installer->startSetup ();
$sql = "CREATE TABLE {$installer->getTable('helloworld/blogpost')} (
blogpost_id int(11) NOT NULL auto_increment,
title text,
post text,
date datetime default NULL,
timestamp timestamp NOT NULL default CURRENT_TIMESTAMP,
PRIMARY KEY (blogpost_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO {$installer->getTable('helloworld/blogpost')} VALUES (1,'My New Title','This is a blog post','2009-07-01 00:00:00','2009-07-02 23:12:30');
";
echo "".$sql."<br/>";
$installer->Run($sql);

// $table = $installer->getConnection()
//               ->newTable($installer->getTable('helloworld/blogpost'))
//               ->addColumn("blogpost_id",Varien_Db_Ddl_Table::TYPE_INTEGER,null, array(
//                                         'identity'  => true,
//                                         'unsigned'  => true,
//                                         'nullable'  => false,
//                                         'auto_increment' => true,
//                                         'primary'   => true), 'ID');


$installer->endSetup();

echo "install end.";