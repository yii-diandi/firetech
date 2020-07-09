<?php

use yii\db\Migration;

class m200624_051744_addons extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%addons}}', [
            'mid' => "int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '模块id'",
            'identifie' => "varchar(100) NOT NULL COMMENT '英文标识'",
            'type' => "enum('base','business','marketing','member','other','system','enterprise','services') NOT NULL DEFAULT 'base' COMMENT '模块类型'",
            'title' => "varchar(100) NOT NULL COMMENT '名称'",
            'version' => "varchar(15) NOT NULL COMMENT '版本'",
            'ability' => "varchar(500) NOT NULL COMMENT '简介'",
            'description' => "varchar(1000) NOT NULL COMMENT '描述'",
            'author' => "varchar(50) NOT NULL COMMENT '作者'",
            'url' => "varchar(255) NOT NULL COMMENT '社区地址'",
            'settings' => "tinyint(1) NOT NULL DEFAULT '0' COMMENT '配置'",
            'logo' => "varchar(250) NOT NULL COMMENT 'logo'",
            'versions' => "varchar(50) NULL COMMENT '适应的软件版本'",
            'is_install' => "tinyint(1) NULL",
            'PRIMARY KEY (`mid`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='扩展模块表'");
        
        /* 索引设置 */
        $this->createIndex('idx_name','{{%addons}}','identifie',0);
        
        
        /* 表数据 */
        $this->insert('{{%addons}}',['mid'=>'17','identifie'=>'diandi_shop','type'=>'business','title'=>'店滴商城','version'=>'1.0.0','ability'=>'店滴商城','description'=>'店滴商城','author'=>'chunchun','url'=>'23','settings'=>'1','logo'=>'202002/16/b4b9135c-5c04-38bf-ae78-2eb751fb428a.png','versions'=>NULL,'is_install'=>NULL]);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%addons}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

