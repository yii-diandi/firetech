<?php

use yii\db\Migration;

class m201101_033521_diandi_dingzuo_record extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_dingzuo_record}}', [
            'id' => "int(11) NOT NULL",
            'user_id' => "int(11) NULL COMMENT '用户id'",
            'create_time' => "int(11) NULL",
            'update_time' => "int(11) NULL",
            'merchant' => "int(11) NULL COMMENT '商家id'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=FIXED");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%diandi_dingzuo_record}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

