<?php

use yii\db\Migration;

class m210326_024755_addons_user extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%addons_user}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'type' => "smallint(6) NULL COMMENT '用户类型'",
            'module_name' => "varchar(50) NULL COMMENT '所属模块'",
            'user_id' => "int(11) NULL COMMENT '用户id'",
            'status' => "smallint(6) NULL COMMENT '审核状态'",
            'create_time' => "int(11) NULL",
            'update_time' => "int(11) NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='扩展模块用户表'");
        
        /* 索引设置 */
        $this->createIndex('module_name','{{%addons_user}}','module_name',0);
        $this->createIndex('user_id','{{%addons_user}}','user_id',0);
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%addons_user}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

