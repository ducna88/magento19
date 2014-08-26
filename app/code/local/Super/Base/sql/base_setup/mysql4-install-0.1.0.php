<?php

/** @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

/**
 * tao bang salestaff_staff
 */
$installer->run("

DROP TABLE IF EXISTS {$this->getTable('db_base')};

CREATE TABLE {$this->getTable('db_base')} (
  `base_id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `birthday` date NULL,
  `sex` smallint(1) NOT NULL default '1',
  `status` smallint(6) NOT NULL default '1',
  PRIMARY KEY (`base_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

");

$installer->endSetup();

