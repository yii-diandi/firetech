<?php

use yii\db\Migration;

class m210301_130335_auth_assignment_group extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%auth_assignment_group}}', [
            'group_id' => "int(11) NOT NULL",
            'item_name' => "varchar(64) NOT NULL",
            'user_id' => "varchar(64) NOT NULL",
            'created_at' => "int(11) NULL",
            'PRIMARY KEY (`item_name`,`user_id`)'
        ], "ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='用户权限组'");
        
        /* 索引设置 */
        $this->createIndex('auth_assignment_user_id_idx','{{%auth_assignment_group}}','user_id',0);
        
        
        /* 表数据 */
        $this->insert('{{%auth_assignment_group}}',['group_id'=>'551','item_name'=>'基础权限组','user_id'=>'1','created_at'=>'1589288351']);
        $this->insert('{{%auth_assignment_group}}',['group_id'=>'552','item_name'=>'总管理员','user_id'=>'1','created_at'=>'1589288348']);
        $this->insert('{{%auth_assignment_group}}',['group_id'=>'552','item_name'=>'总管理员','user_id'=>'11','created_at'=>'1614187434']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%auth_assignment_group}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

