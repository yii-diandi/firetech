<?php

use yii\db\Migration;

class m210224_172529_addons extends Migration
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
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='扩展模块表'");
        
        /* 索引设置 */
        $this->createIndex('idx_name','{{%addons}}','identifie',0);
        
        
        /* 表数据 */
        $this->insert('{{%addons}}',['mid'=>'126','identifie'=>'diandi_distribution','type'=>'','title'=>'店滴分销','version'=>'1.0.0','ability'=>'1','description'=>'分销','author'=>'wanchunsheng','url'=>'www.baidu.com','settings'=>'0','logo'=>'/backend/addons/addons/logo?addon=diandi_distribution','versions'=>NULL,'is_install'=>NULL]);
        $this->insert('{{%addons}}',['mid'=>'128','identifie'=>'diandi_cloud','type'=>'','title'=>'店滴云','version'=>'1.0','ability'=>'店滴独立模块授权管理系统','description'=>'店滴独立模块授权管理系统','author'=>'chunchun','url'=>'https://www.hopesfire.com/','settings'=>'0','logo'=>'/backend/addons/addons/logo?addon=diandi_cloud','versions'=>NULL,'is_install'=>NULL]);
        $this->insert('{{%addons}}',['mid'=>'131','identifie'=>'diandi_task','type'=>'','title'=>'任务调度','version'=>'1.0','ability'=>'结合swoole完成定时任务调度','description'=>'结合swoole完成定时任务调度','author'=>'chunchun','url'=>'https://www.hopesfire.com/','settings'=>'0','logo'=>'/backend/addons/addons/logo?addon=diandi_task','versions'=>NULL,'is_install'=>NULL]);
        $this->insert('{{%addons}}',['mid'=>'132','identifie'=>'diandi_im','type'=>'','title'=>'店滴客服','version'=>'1.0','ability'=>'实时在线客服聊天','description'=>'实时在线客服聊天','author'=>'chunchun','url'=>'https://www.hopesfire.com/','settings'=>'0','logo'=>'/backend/addons/addons/logo?addon=diandi_im','versions'=>NULL,'is_install'=>NULL]);
        $this->insert('{{%addons}}',['mid'=>'133','identifie'=>'diandi_ai','type'=>'','title'=>'店滴AI','version'=>'1.0','ability'=>'店滴ai','description'=>'人脸识别，OCR认证，人脸会员等','author'=>'王春生','url'=>'http://bbs.wayfirer.com/','settings'=>'0','logo'=>'/backend/addons/addons/logo?addon=diandi_ai','versions'=>NULL,'is_install'=>NULL]);
        $this->insert('{{%addons}}',['mid'=>'134','identifie'=>'diandi_shop','type'=>'business','title'=>'店滴点单','version'=>'1.3.8','ability'=>'店滴点餐','description'=>'店滴点餐','author'=>'tuhuokeji','url'=>'','settings'=>'0','logo'=>'/backend/addons/addons/logo?addon=diandi_shop','versions'=>NULL,'is_install'=>NULL]);
        $this->insert('{{%addons}}',['mid'=>'135','identifie'=>'diandi_integral','type'=>'business','title'=>'积分商城','version'=>'0.1','ability'=>'积分商城','description'=>'积分商城','author'=>'tuhuokeji','url'=>'','settings'=>'0','logo'=>'/backend/addons/addons/logo?addon=diandi_integral','versions'=>NULL,'is_install'=>NULL]);
        
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

