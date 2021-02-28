<?php

use yii\db\Migration;

class m210224_172529_diandi_cloud_auth_user extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_cloud_auth_user}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'member_id' => "int(11) NULL COMMENT '会员ID'",
            'email' => "varchar(255) NULL COMMENT '邮箱'",
            'mobile' => "varchar(255) NULL COMMENT '手机号'",
            'username' => "varchar(50) NULL COMMENT '真实姓名'",
            'web_key' => "varchar(100) NULL COMMENT '系统秘钥'",
            'status' => "int(11) NULL COMMENT '用户状态'",
            'create_time' => "int(11) NULL",
            'update_time' => "int(11) NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%diandi_cloud_auth_user}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

