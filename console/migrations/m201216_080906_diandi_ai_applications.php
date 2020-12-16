<?php

use yii\db\Migration;

class m201216_080906_diandi_ai_applications extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_ai_applications}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'name' => "varchar(50) NULL COMMENT '人脸库应用名称'",
            'APP_ID' => "varchar(50) NULL COMMENT 'appid'",
            'SECRET_KEY' => "varchar(255) NULL",
            'API_KEY' => "varchar(255) NULL",
            'create_time' => "varchar(30) NULL",
            'updatetime' => "varchar(30) NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='ai应用管理'");
        
        /* 索引设置 */
        $this->createIndex('APP_ID','{{%diandi_ai_applications}}','APP_ID',1);
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%diandi_ai_applications}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

