<?php

use yii\db\Migration;

class m201101_033520_member extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%member}}', [
            'member_id' => "int(11) unsigned NOT NULL AUTO_INCREMENT",
            'group_id' => "int(11) NULL",
            'level' => "int(11) NULL",
            'openid' => "varchar(255) NOT NULL DEFAULT ''",
            'store_id' => "int(11) NULL",
            'bloc_id' => "int(11) NOT NULL",
            'username' => "varchar(30) NULL COMMENT '会员名称'",
            'mobile' => "bigint(11) NULL COMMENT '手机号'",
            'address' => "varchar(255) NULL COMMENT '用户地址'",
            'nickName' => "varchar(255) NOT NULL DEFAULT '' COMMENT '微信昵称'",
            'avatarUrl' => "varchar(255) NOT NULL DEFAULT '' COMMENT '会员头像'",
            'gender' => "tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '0男1女'",
            'country' => "varchar(100) NOT NULL DEFAULT '' COMMENT '国家'",
            'province' => "varchar(100) NOT NULL DEFAULT '' COMMENT '省份'",
            'status' => "int(11) NULL DEFAULT '0' COMMENT '会员状态'",
            'city' => "varchar(100) NOT NULL DEFAULT '' COMMENT '城市'",
            'address_id' => "int(11) unsigned NOT NULL DEFAULT '0' COMMENT '收货地址id'",
            'wxapp_id' => "int(11) unsigned NOT NULL DEFAULT '0'",
            'verification_token' => "varchar(255) NULL COMMENT '验证token'",
            'create_time' => "bigint(11) unsigned NOT NULL DEFAULT '0'",
            'update_time' => "bigint(11) unsigned NOT NULL DEFAULT '0'",
            'auth_key' => "varchar(32) NOT NULL",
            'password_hash' => "varchar(255) NOT NULL",
            'password_reset_token' => "varchar(255) NULL",
            'PRIMARY KEY (`member_id`)'
        ], "ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
        
        /* 索引设置 */
        $this->createIndex('openid','{{%member}}','openid',0);
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%member}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

