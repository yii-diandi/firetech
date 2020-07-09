<?php

use yii\db\Migration;

class m200624_051745_diandi_bloc_conf_wechatpay extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_bloc_conf_wechatpay}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'bloc_id' => "int(10) unsigned NOT NULL COMMENT '公司ID'",
            'mch_id' => "varchar(50) NOT NULL COMMENT '商户ID'",
            'app_id' => "varchar(100) NOT NULL DEFAULT '0' COMMENT 'APPID'",
            'key' => "varchar(255) NOT NULL DEFAULT '0' COMMENT '支付密钥'",
            'notify_url' => "varchar(100) NOT NULL COMMENT '回调地址'",
            'create_time' => "int(11) NULL",
            'update_time' => "int(11) NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%diandi_bloc_conf_wechatpay}}',['id'=>'2','bloc_id'=>'1','mch_id'=>'1228641802','app_id'=>'wx028eb56f4b4a7d99','key'=>'t2phkrvdglrunljg20vo3etlmtvzz1rp','notify_url'=>'/api/wechat/basics/notify','create_time'=>NULL,'update_time'=>NULL]);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%diandi_bloc_conf_wechatpay}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

