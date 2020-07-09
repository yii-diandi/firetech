<?php

use yii\db\Migration;

class m200624_051745_diandi_lottery_slide extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_lottery_slide}}', [
            'id' => "int(11) NOT NULL",
            'thumb' => "varchar(255) NULL COMMENT '图片'",
            'store_id' => "int(11) NULL COMMENT '商户id'",
            'bloc_id' => "int(11) NULL COMMENT '公司id'",
            'title' => "varchar(255) NULL COMMENT '名称'",
            'update_time' => "int(11) NULL",
            'create_time' => "int(11) NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC COMMENT='抽奖幻灯片'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%diandi_lottery_slide}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

