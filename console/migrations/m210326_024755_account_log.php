<?php

use yii\db\Migration;

class m210326_024755_account_log extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%account_log}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'bloc_id' => "int(11) NULL",
            'store_id' => "int(11) NULL",
            'member_id' => "int(11) NULL COMMENT '会员id'",
            'account_type' => "varchar(30) NULL COMMENT '资金类型'",
            'old_money' => "decimal(11,2) NULL",
            'money' => "decimal(11,3) NULL COMMENT '资金'",
            'is_add' => "int(11) NULL DEFAULT '0' COMMENT '0增加，1减少'",
            'remark' => "varchar(255) NULL COMMENT '备注'",
            'money_id' => "int(11) NULL COMMENT '操作日志ID'",
            'update_time' => "int(11) NULL COMMENT '创建时间'",
            'create_time' => "int(11) NULL COMMENT '更新时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%account_log}}',['id'=>'1','bloc_id'=>'8','store_id'=>'48','member_id'=>'17','account_type'=>'user_integral','old_money'=>NULL,'money'=>'-299.000','is_add'=>'0','remark'=>'','money_id'=>NULL,'update_time'=>'1608025940','create_time'=>'1608025940']);
        $this->insert('{{%account_log}}',['id'=>'2','bloc_id'=>'8','store_id'=>'48','member_id'=>'17','account_type'=>'user_integral','old_money'=>NULL,'money'=>'-299.000','is_add'=>'0','remark'=>'','money_id'=>NULL,'update_time'=>'1608025989','create_time'=>'1608025989']);
        $this->insert('{{%account_log}}',['id'=>'3','bloc_id'=>'8','store_id'=>'48','member_id'=>'17','account_type'=>'user_integral','old_money'=>NULL,'money'=>'-299.000','is_add'=>'0','remark'=>'','money_id'=>NULL,'update_time'=>'1608026142','create_time'=>'1608026142']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%account_log}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

