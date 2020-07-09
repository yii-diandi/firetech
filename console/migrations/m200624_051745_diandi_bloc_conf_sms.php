<?php

use yii\db\Migration;

class m200624_051745_diandi_bloc_conf_sms extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_bloc_conf_sms}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'bloc_id' => "int(10) unsigned NULL",
            'access_key_id' => "varchar(50) NULL",
            'access_key_secret' => "varchar(200) NULL DEFAULT '0'",
            'sign_name' => "varchar(255) NULL DEFAULT '0'",
            'template_code' => "varchar(15) NULL",
            'update_time' => "int(11) NULL",
            'create_time' => "int(11) NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT");
        
        /* 索引设置 */
        $this->createIndex('bloc_id','{{%diandi_bloc_conf_sms}}','bloc_id',1);
        
        
        /* 表数据 */
        $this->insert('{{%diandi_bloc_conf_sms}}',['id'=>'15','bloc_id'=>'1','access_key_id'=>'LTAI3Vun6MH6MzyZ','access_key_secret'=>'tXI6xfEppupV8r0OKjkC93yBWAPu4V','sign_name'=>'店滴会员卡','template_code'=>'SMS_163645027','update_time'=>'1588257419','create_time'=>'1588252211']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%diandi_bloc_conf_sms}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

