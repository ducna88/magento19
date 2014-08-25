<?php

$demo5 = $this;
$demo5->startSetup();
$demo5->run("
         DROP TABLE IF EXISTS `demo5`;
        CREATE TABLE `demo5` (
          `demo5Id` int(11) unsigned NOT NULL auto_increment,
          `title` varchar(255) NOT NULL default '',
          `content` varchar(255) NOT NULL default '',
          `status` smallint(6) NOT NULL default '0',
          `status2` smallint(6) NOT NULL default '0',
          `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
          `update_time` timestamp NULL default null ,
          PRIMARY KEY (`demo5Id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ");
$demo5->endSetup();