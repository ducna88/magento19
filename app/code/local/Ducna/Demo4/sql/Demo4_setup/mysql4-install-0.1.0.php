<?php
$installer = $this;
$installer->startSetup();
$installer->run("
        DROP TABLE IF EXISTS `demo4`;
        CREATE TABLE `demo4` (
          `demo4Id` int(11) unsigned NOT NULL auto_increment,
          `title` varchar(255) NOT NULL default '',
          `content` varchar(255) NOT NULL default '',
          `status` smallint(6) NOT NULL default '0',
          `status2` smallint(6) NOT NULL default '0',
          `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
          `update_time` timestamp NULL default null ,
          PRIMARY KEY (`demo4Id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

");
$installer->endSetup();
?>