<?php

use yii\db\Migration;

class m200624_051745_diandi_bloc_conf_wxapp extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_bloc_conf_wxapp}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'bloc_id' => "int(10) unsigned NOT NULL",
            'name' => "varchar(50) NOT NULL COMMENT '公司名称'",
            'description' => "varchar(200) NOT NULL DEFAULT '0' COMMENT '上级商户'",
            'original' => "varchar(200) NOT NULL DEFAULT '0'",
            'AppId' => "varchar(100) NOT NULL COMMENT '省份'",
            'headimg' => "varchar(100) NOT NULL COMMENT '城市'",
            'AppSecret' => "varchar(100) NOT NULL COMMENT '区县'",
            'create_time' => "int(11) NULL",
            'update_time' => "int(11) NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='公司小程序配置'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%diandi_bloc_conf_wxapp}}',['id'=>'2','bloc_id'=>'1','name'=>'有ta平台09','description'=>'店滴会员','original'=>'wx028eb56f4b4a7d99','AppId'=>'wx028eb56f4b4a7d99','headimg'=>'202004/25/4c931202-71c6-3ea5-9e77-501823c05d89.jpg','AppSecret'=>'44f188b226d3c04c403d798d8963817b','create_time'=>NULL,'update_time'=>'1589153624']);
        $this->insert('{{%diandi_bloc_conf_wxapp}}',['id'=>'3','bloc_id'=>'2','name'=>'有ta平台009','description'=>'店滴会员','original'=>'wx028eb56f4b4a7d99','AppId'=>'wx028eb56f4b4a7d99','headimg'=>'202004/25/4c931202-71c6-3ea5-9e77-501823c05d89.jpg','AppSecret'=>'44f188b226d3c04c403d798d8963817b','create_time'=>'1589153563','update_time'=>'1589153563']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%diandi_bloc_conf_wxapp}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

