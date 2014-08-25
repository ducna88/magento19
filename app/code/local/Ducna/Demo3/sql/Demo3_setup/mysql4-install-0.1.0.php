<?php
$installer = $this;
$installer->startSetup();
$installer->run("
        --DROP TABLE IF EXISTS {$this->getTable('demo3')}
        CREATE TABLE {$this->getTable('demo3')} (
            `demo3_id` varchar(255) NOT NULL default '',
            `title` text NOT NULL default '',
            `content` text NOT NULL default '',
            `status` text NOT NULL default '',
            `created_time` datetime NULL,
            `update_time` datetime NULL,
            PRIMARY KEY (`demo3_id`)
        ) ENGINE = InnoDB DEFAULT CHARSET=utf8;
    ");
$installer->endSetup();