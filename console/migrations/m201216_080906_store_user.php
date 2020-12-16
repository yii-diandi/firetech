<?php

use yii\db\Migration;

class m201216_080906_store_user extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%store_user}}', [
            'store_user_id' => "int(11) unsigned NOT NULL AUTO_INCREMENT",
            'user_name' => "varchar(255) NOT NULL DEFAULT ''",
            'password' => "varchar(255) NOT NULL DEFAULT ''",
            'wxapp_id' => "int(11) unsigned NOT NULL DEFAULT '0'",
            'create_time' => "int(11) unsigned NOT NULL DEFAULT '0'",
            'update_time' => "int(11) NOT NULL",
            'PRIMARY KEY (`store_user_id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8");
        
        /* 索引设置 */
        $this->createIndex('user_name','{{%store_user}}','user_name',1);
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%store_user}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

