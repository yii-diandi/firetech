<?php

use yii\db\Migration;

class m201105_033807_diandi_ai_member extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_ai_member}}', [
            'user_id' => "int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '人脸招聘'",
            'face_group_id' => "int(11) NOT NULL COMMENT '人脸库组id'",
            'nickName' => "varchar(255) NOT NULL DEFAULT ''",
            'face_image' => "varchar(255) NOT NULL DEFAULT '' COMMENT '人脸照片'",
            'gender' => "varchar(10) NOT NULL DEFAULT '0'",
            'face_token' => "varchar(255) NULL COMMENT '脸部图片唯一标识'",
            'wxapp_id' => "int(11) unsigned NULL",
            'create_time' => "int(11) unsigned NOT NULL DEFAULT '0'",
            'update_time' => "int(11) unsigned NOT NULL DEFAULT '0'",
            'ai_age' => "int(11) NULL COMMENT 'ai年龄'",
            'ai_gender' => "enum('male','female') NULL COMMENT 'ai性别'",
            'ai_glasses' => "varchar(255) NULL",
            'ai_race' => "varchar(255) NULL COMMENT 'ai种族'",
            'ai_emotion' => "varchar(255) NULL COMMENT 'ai情绪'",
            'face_shape' => "varchar(255) NULL COMMENT 'ai脸型'",
            'ai_quality_blur' => "varchar(255) NULL COMMENT 'ai图片质量1'",
            'ai_quality_illumination' => "varchar(255) NULL COMMENT 'ai图片质量1'",
            'ai_quality_completeness' => "varchar(255) NULL COMMENT 'ai图片质量1'",
            'PRIMARY KEY (`user_id`)'
        ], "ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='店滴ai会员表'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%diandi_ai_member}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

