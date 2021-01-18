<?php

use yii\db\Migration;

class m210118_090649_diandi_ai_faces extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_ai_faces}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'ai_user_id' => "int(11) NULL",
            'ai_group_id' => "int(11) NULL",
            'ai_face_status' => "int(11) NULL",
            'face_image' => "varchar(255) NULL",
            'face_token' => "varchar(255) NULL",
            'createtime' => "varchar(30) NULL",
            'updatetime' => "varchar(30) NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='ai检测用户'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%diandi_ai_faces}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

