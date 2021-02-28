<?php

use yii\db\Migration;

class m210224_172529_diandi_store_label_link extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_store_label_link}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'bloc_id' => "int(11) NOT NULL COMMENT '公司ID'",
            'store_id' => "int(11) NOT NULL COMMENT '商户id'",
            'label_id' => "int(11) NULL COMMENT '标签ID'",
            'create_time' => "varchar(30) NULL",
            'update_time' => "varchar(30) NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%diandi_store_label_link}}',['id'=>'73','bloc_id'=>'8','store_id'=>'62','label_id'=>'63','create_time'=>'1610822721','update_time'=>'1610822721']);
        $this->insert('{{%diandi_store_label_link}}',['id'=>'74','bloc_id'=>'8','store_id'=>'62','label_id'=>'64','create_time'=>'1610822721','update_time'=>'1610822721']);
        $this->insert('{{%diandi_store_label_link}}',['id'=>'75','bloc_id'=>'8','store_id'=>'62','label_id'=>'67','create_time'=>'1610822721','update_time'=>'1610822721']);
        $this->insert('{{%diandi_store_label_link}}',['id'=>'79','bloc_id'=>'8','store_id'=>'63','label_id'=>'64','create_time'=>'1610856390','update_time'=>'1610856390']);
        $this->insert('{{%diandi_store_label_link}}',['id'=>'80','bloc_id'=>'8','store_id'=>'63','label_id'=>'65','create_time'=>'1610856390','update_time'=>'1610856390']);
        $this->insert('{{%diandi_store_label_link}}',['id'=>'81','bloc_id'=>'8','store_id'=>'63','label_id'=>'66','create_time'=>'1610856390','update_time'=>'1610856390']);
        $this->insert('{{%diandi_store_label_link}}',['id'=>'83','bloc_id'=>'11','store_id'=>'64','label_id'=>'64','create_time'=>'1610857089','update_time'=>'1610857089']);
        $this->insert('{{%diandi_store_label_link}}',['id'=>'84','bloc_id'=>'11','store_id'=>'64','label_id'=>'66','create_time'=>'1610857089','update_time'=>'1610857089']);
        $this->insert('{{%diandi_store_label_link}}',['id'=>'85','bloc_id'=>'8','store_id'=>'65','label_id'=>'62','create_time'=>'1610857170','update_time'=>'1610857170']);
        $this->insert('{{%diandi_store_label_link}}',['id'=>'86','bloc_id'=>'8','store_id'=>'65','label_id'=>'63','create_time'=>'1610857170','update_time'=>'1610857170']);
        $this->insert('{{%diandi_store_label_link}}',['id'=>'87','bloc_id'=>'8','store_id'=>'65','label_id'=>'66','create_time'=>'1610857170','update_time'=>'1610857170']);
        $this->insert('{{%diandi_store_label_link}}',['id'=>'90','bloc_id'=>'8','store_id'=>'48','label_id'=>'63','create_time'=>'1610858644','update_time'=>'1610858644']);
        $this->insert('{{%diandi_store_label_link}}',['id'=>'91','bloc_id'=>'8','store_id'=>'48','label_id'=>'65','create_time'=>'1610858644','update_time'=>'1610858644']);
        $this->insert('{{%diandi_store_label_link}}',['id'=>'92','bloc_id'=>'8','store_id'=>'48','label_id'=>'73','create_time'=>'1610858644','update_time'=>'1610858644']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%diandi_store_label_link}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

