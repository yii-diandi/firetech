<?php

use yii\db\Migration;

class m200624_051745_diandi_bloc_conf_baidu extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_bloc_conf_baidu}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'bloc_id' => "int(10) unsigned NOT NULL COMMENT '公司ID'",
            'APP_ID' => "varchar(50) NOT NULL COMMENT 'APP_ID'",
            'API_KEY' => "int(11) NOT NULL DEFAULT '0' COMMENT 'API_KEY'",
            'SECRET_KEY' => "varchar(255) NOT NULL DEFAULT '0' COMMENT 'SECRET_KEY'",
            'name' => "varchar(15) NOT NULL COMMENT '应用名称'",
            'create_time' => "int(11) NULL",
            'update_time' => "int(11) NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT");
        
        /* 索引设置 */
        $this->createIndex('bloc_id','{{%diandi_bloc_conf_baidu}}','bloc_id',1);
        
        
        /* 表数据 */
        $this->insert('{{%diandi_bloc_conf_baidu}}',['id'=>'3','bloc_id'=>'1','APP_ID'=>'1567','API_KEY'=>'5465','SECRET_KEY'=>'3243245','name'=>'店滴AI','create_time'=>NULL,'update_time'=>NULL]);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%diandi_bloc_conf_baidu}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

