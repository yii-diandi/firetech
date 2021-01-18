<?php

use yii\db\Migration;

class m210118_090649_auth_assignment extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%auth_assignment}}', [
            'item_id' => "int(11) NOT NULL",
            'item_name' => "varchar(64) NOT NULL",
            'user_id' => "varchar(64) NOT NULL",
            'created_at' => "int(11) NULL",
            'PRIMARY KEY (`item_name`,`user_id`)'
        ], "ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='用户与权限关系'");
        
        /* 索引设置 */
        $this->createIndex('auth_assignment_user_id_idx','{{%auth_assignment}}','user_id',0);
        
        
        /* 表数据 */
        $this->insert('{{%auth_assignment}}',['item_id'=>'0','item_name'=>'人脸库管理','user_id'=>'1','created_at'=>'1586678304']);
        $this->insert('{{%auth_assignment}}',['item_id'=>'0','item_name'=>'人脸识别','user_id'=>'1','created_at'=>'1586678304']);
        $this->insert('{{%auth_assignment}}',['item_id'=>'0','item_name'=>'会员管理','user_id'=>'1','created_at'=>'1586678304']);
        $this->insert('{{%auth_assignment}}',['item_id'=>'0','item_name'=>'基础权限组','user_id'=>'1','created_at'=>'1588809678']);
        $this->insert('{{%auth_assignment}}',['item_id'=>'6','item_name'=>'开发示例','user_id'=>'1','created_at'=>'1596469274']);
        $this->insert('{{%auth_assignment}}',['item_id'=>'0','item_name'=>'扩展功能','user_id'=>'1','created_at'=>'1586678304']);
        $this->insert('{{%auth_assignment}}',['item_id'=>'0','item_name'=>'权限控制','user_id'=>'1','created_at'=>'1586678304']);
        $this->insert('{{%auth_assignment}}',['item_id'=>'0','item_name'=>'模块生成','user_id'=>'1','created_at'=>'1586678305']);
        $this->insert('{{%auth_assignment}}',['item_id'=>'0','item_name'=>'模块统一入口','user_id'=>'1','created_at'=>'1588809691']);
        $this->insert('{{%auth_assignment}}',['item_id'=>'0','item_name'=>'站点管理','user_id'=>'1','created_at'=>'1586678305']);
        $this->insert('{{%auth_assignment}}',['item_id'=>'0','item_name'=>'系统设置','user_id'=>'1','created_at'=>'1586678305']);
        $this->insert('{{%auth_assignment}}',['item_id'=>'0','item_name'=>'订座','user_id'=>'1','created_at'=>'1586678305']);
        $this->insert('{{%auth_assignment}}',['item_id'=>'0','item_name'=>'资源上传','user_id'=>'1','created_at'=>'1586678305']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%auth_assignment}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

