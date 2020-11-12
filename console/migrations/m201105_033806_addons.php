<?php

use yii\db\Migration;

class m201105_033806_addons extends Migration
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
        $this->insert('{{%addons}}',['mid'=>'102','identifie'=>'diandi_distribution','type'=>'','title'=>'店滴分销','version'=>'1.0.0','ability'=>'1','description'=>'分销','author'=>'wanchunsheng','url'=>'www.baidu.com','settings'=>'0','logo'=>'/backend/addons/addons/logo?addon=diandi_distribution','versions'=>NULL,'is_install'=>NULL]);
        $this->insert('{{%addons}}',['mid'=>'108','identifie'=>'diandi_video','type'=>'','title'=>'店滴视频','version'=>'1.0.0','ability'=>'视频展示小程序','description'=>'视频展示小程序','author'=>'wanchunsheng','url'=>'http://bbs.wayfirer.com/','settings'=>'0','logo'=>'/backend/addons/addons/logo?addon=diandi_video','versions'=>NULL,'is_install'=>NULL]);
        $this->insert('{{%addons}}',['mid'=>'116','identifie'=>'diandi_store','type'=>'business','title'=>'订座','version'=>'1.3.8','ability'=>'订座','description'=>'同城商家快速订座','author'=>'tuhuokeji','url'=>'','settings'=>'0','logo'=>'/backend/addons/addons/logo?addon=diandi_store','versions'=>NULL,'is_install'=>NULL]);
        $this->insert('{{%addons}}',['mid'=>'117','identifie'=>'diandi_operator','type'=>'','title'=>'电信运营商','version'=>'1.0.0','ability'=>'店滴三大运营商接口对接输出','description'=>'店滴三大运营商接口对接输出','author'=>'wanchunsheng','url'=>'http://bbs.wayfirer.com/','settings'=>'0','logo'=>'/backend/addons/addons/logo?addon=diandi_operator','versions'=>NULL,'is_install'=>NULL]);
        $this->insert('{{%addons}}',['mid'=>'124','identifie'=>'diandi_lottery','type'=>'','title'=>'店滴抽奖','version'=>'1.0.0','ability'=>'店滴抽奖','description'=>'店滴抽奖','author'=>'wanchunsheng','url'=>'www.baidu.com','settings'=>'0','logo'=>'/backend/addons/addons/logo?addon=diandi_lottery','versions'=>NULL,'is_install'=>NULL]);
        $this->insert('{{%addons}}',['mid'=>'125','identifie'=>'diandi_ai','type'=>'','title'=>'店滴AI','version'=>'1.0','ability'=>'店滴ai','description'=>'人脸识别，OCR认证，人脸会员等','author'=>'王春生','url'=>'http://bbs.wayfirer.com/','settings'=>'0','logo'=>'/backend/addons/addons/logo?addon=diandi_ai','versions'=>NULL,'is_install'=>NULL]);
        
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

