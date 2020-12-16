<?php

use yii\db\Migration;

class m201216_080906_diandi_store_category extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_store_category}}', [
            'category_id' => "int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类id'",
            'name' => "varchar(50) NOT NULL DEFAULT '' COMMENT '分类名称'",
            'parent_id' => "int(11) unsigned NOT NULL DEFAULT '0' COMMENT '父级id'",
            'thumb' => "varchar(250) NOT NULL COMMENT '分类图片'",
            'sort' => "int(11) unsigned NOT NULL DEFAULT '0' COMMENT '分类排序'",
            'create_time' => "int(11) unsigned NOT NULL DEFAULT '0'",
            'update_time' => "int(11) unsigned NOT NULL DEFAULT '0'",
            'PRIMARY KEY (`category_id`)'
        ], "ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='分类管理'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%diandi_store_category}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

