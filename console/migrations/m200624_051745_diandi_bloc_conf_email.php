<?php

use yii\db\Migration;

class m200624_051745_diandi_bloc_conf_email extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_bloc_conf_email}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'bloc_id' => "int(10) unsigned NOT NULL COMMENT '公司ID'",
            'host' => "varchar(50) NULL",
            'port' => "int(11) NULL DEFAULT '0'",
            'username' => "varchar(255) NULL DEFAULT '0' COMMENT '邮箱地址'",
            'password' => "varchar(15) NULL COMMENT '邮箱密码'",
            'title' => "varchar(15) NULL COMMENT '发送人'",
            'encryption' => "varchar(15) NULL COMMENT '发送方式'",
            'create_time' => "int(11) NOT NULL",
            'update_time' => "int(11) NOT NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%diandi_bloc_conf_email}}',['id'=>'1','bloc_id'=>'1','host'=>'1','port'=>'1','username'=>'11','password'=>'1','title'=>'12','encryption'=>'tls','create_time'=>'1588259700','update_time'=>'1588259700']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%diandi_bloc_conf_email}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

