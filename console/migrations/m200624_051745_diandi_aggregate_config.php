<?php

use yii\db\Migration;

class m200624_051745_diandi_aggregate_config extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_aggregate_config}}', [
            'id' => "int(11) unsigned NOT NULL AUTO_INCREMENT",
            'bloc_id' => "int(11) NULL COMMENT '公司ID'",
            'store_id' => "int(11) NULL COMMENT '商户ID'",
            'inst_no' => "varchar(50) NOT NULL DEFAULT '' COMMENT '机构号'",
            'key' => "varchar(50) NOT NULL DEFAULT '' COMMENT '令牌'",
            'merchant_no' => "varchar(50) NOT NULL DEFAULT '' COMMENT '商户号'",
            'terminal_id' => "varchar(30) NOT NULL DEFAULT '0' COMMENT '终端号'",
            'token' => "varchar(50) NOT NULL DEFAULT '0' COMMENT 'Token'",
            'url' => "varchar(100) NOT NULL DEFAULT '0' COMMENT '接口地址'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='扫呗支付配置'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%diandi_aggregate_config}}',['id'=>'8','bloc_id'=>'1','store_id'=>'38','inst_no'=>'52100021','key'=>'2d7c2a70e2cd4e33902f6215cd368400','merchant_no'=>'824200203000002','terminal_id'=>'30759267','token'=>'416bcc325af048bdb0d0dedaa2210b3b','url'=>'http://test.lcsw.cn:8045/lcsw/']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%diandi_aggregate_config}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

