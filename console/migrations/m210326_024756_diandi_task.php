<?php

use yii\db\Migration;

class m210326_024756_diandi_task extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_task}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'job_id' => "int(11) NOT NULL COMMENT '任务ID'",
            'task_bloc_id' => "int(11) NULL COMMENT '任务公司'",
            'task_store_id' => "int(11) NULL COMMENT '任务商户'",
            'name' => "varchar(50) NULL COMMENT '任务名称'",
            'status' => "int(11) NOT NULL COMMENT '任务状态'",
            'type' => "int(11) NOT NULL COMMENT '任务类型'",
            'addons' => "varchar(50) NULL COMMENT '任务插件'",
            'addons_server' => "varchar(50) NULL COMMENT '插件服务'",
            'addons_func' => "varchar(50) NULL COMMENT '任务方法'",
            'addons_option' => "varchar(255) NULL COMMENT '参数方法'",
            'addons_route' => "varchar(255) NULL COMMENT '任务路由'",
            'task_time' => "varchar(30) NULL COMMENT '执行时间'",
            'url' => "varchar(255) NULL COMMENT '任务请求地址'",
            'create_time' => "int(11) NULL COMMENT '创建时间'",
            'update_time' => "int(11) NULL COMMENT '更新时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%diandi_task}}',['id'=>'1','job_id'=>'0','task_bloc_id'=>'10','task_store_id'=>'49','name'=>'测试任务','status'=>'1','type'=>'0','addons'=>'128','addons_server'=>'cron','addons_func'=>'run','addons_option'=>'addons=5','addons_route'=>NULL,'task_time'=>'1 * * ? * 1#1 *','url'=>NULL,'create_time'=>'1616143756','update_time'=>'1616143756']);
        $this->insert('{{%diandi_task}}',['id'=>'2','job_id'=>'0','task_bloc_id'=>'8','task_store_id'=>'48','name'=>'测试任务1','status'=>'0','type'=>'0','addons'=>'128','addons_server'=>'cron','addons_func'=>'run','addons_option'=>'nih=34
erretr=7676','addons_route'=>NULL,'task_time'=>'2-59 * * * * ?','url'=>NULL,'create_time'=>'1616260037','update_time'=>'1616260037']);
        $this->insert('{{%diandi_task}}',['id'=>'3','job_id'=>'1','task_bloc_id'=>'8','task_store_id'=>'48','name'=>'1发送任务','status'=>'0','type'=>'0','addons'=>'diandi_sms','addons_server'=>'sms','addons_func'=>'run','addons_option'=>'','addons_route'=>'','task_time'=>'53 03 15 17 03 ?','url'=>'','create_time'=>'1616310215','update_time'=>'1616310215']);
        $this->insert('{{%diandi_task}}',['id'=>'4','job_id'=>'6','task_bloc_id'=>'8','task_store_id'=>'48','name'=>'6发送任务','status'=>'0','type'=>'0','addons'=>'diandi_sms','addons_server'=>'sms','addons_func'=>'run','addons_option'=>'','addons_route'=>'','task_time'=>'22 03 12 20 03 ?','url'=>'','create_time'=>'1616310629','update_time'=>'1616310629']);
        $this->insert('{{%diandi_task}}',['id'=>'5','job_id'=>'9','task_bloc_id'=>'8','task_store_id'=>'48','name'=>'9发送任务','status'=>'0','type'=>'0','addons'=>'diandi_sms','addons_server'=>'sms','addons_func'=>'run','addons_option'=>'','addons_route'=>'','task_time'=>'44 11 14 20 03 ?','url'=>'','create_time'=>'1616310952','update_time'=>'1616310952']);
        $this->insert('{{%diandi_task}}',['id'=>'6','job_id'=>'4','task_bloc_id'=>'8','task_store_id'=>'48','name'=>'4发送任务','status'=>'0','type'=>'0','addons'=>'diandi_sms','addons_server'=>'sms','addons_func'=>'run','addons_option'=>'','addons_route'=>'','task_time'=>'25 24 15 17 03 ?','url'=>'','create_time'=>'1616311231','update_time'=>'1616311231']);
        $this->insert('{{%diandi_task}}',['id'=>'7','job_id'=>'8','task_bloc_id'=>'8','task_store_id'=>'48','name'=>'8发送任务','status'=>'0','type'=>'0','addons'=>'diandi_sms','addons_server'=>'sms','addons_func'=>'run','addons_option'=>'','addons_route'=>'','task_time'=>'38 06 14 23 03 ?','url'=>'','create_time'=>'1616311476','update_time'=>'1616311476']);
        $this->insert('{{%diandi_task}}',['id'=>'8','job_id'=>'3','task_bloc_id'=>'8','task_store_id'=>'48','name'=>'3发送任务','status'=>'0','type'=>'0','addons'=>'128','addons_server'=>'sms','addons_func'=>'run','addons_option'=>'we=345','addons_route'=>'','task_time'=>'10 23 15 17 03 ?','url'=>'','create_time'=>'1616312594','update_time'=>'1616312594']);
        
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

