<?php

use yii\db\Migration;

class m210301_130336_diandi_task extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_task}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'task_id' => "int(11) NOT NULL COMMENT '任务ID'",
            'name' => "varchar(50) NULL COMMENT '任务名称'",
            'status' => "int(11) NOT NULL COMMENT '任务状态'",
            'type' => "int(11) NOT NULL COMMENT '任务类型'",
            'addons' => "varchar(50) NULL COMMENT '任务插件'",
            'addons_server' => "varchar(50) NULL COMMENT '插件服务'",
            'addons_func' => "varchar(50) NULL COMMENT '任务方法'",
            'addons_option' => "varchar(255) NULL COMMENT '参数方法'",
            'addons_route' => "varchar(255) NULL COMMENT '任务路由'",
            'url' => "varchar(255) NULL COMMENT '任务请求地址'",
            'create_time' => "int(11) NULL COMMENT '创建时间'",
            'update_time' => "int(11) NULL COMMENT '更新时间'",
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
        $this->dropTable('{{%diandi_task}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}
