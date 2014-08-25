<?php
$installer = $this;
$installer->startSetup();
$installer->run("
    CREATE TABLE `{$installer->getTable('Demo/MyDemo')}` (
          `demoId` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'demo Id',
          `firstname` varchar(32) DEFAULT NULL COMMENT 'User First Name',
          `lastname` varchar(32) DEFAULT NULL COMMENT 'User Last Name',
          `email` varchar(128) DEFAULT NULL COMMENT 'User Email',
          `username` varchar(40) DEFAULT NULL COMMENT 'User Login',
          `password` varchar(100) DEFAULT NULL COMMENT 'User Password',
          `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'User Created Time',
          `updated` timestamp NULL DEFAULT NULL COMMENT 'User Last Login Time',
          PRIMARY KEY (`demoId`)
        ) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8
");
$installer->endSetup();
?>