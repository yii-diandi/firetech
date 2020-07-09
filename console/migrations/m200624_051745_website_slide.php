<?php

use yii\db\Migration;

class m200624_051745_website_slide extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%website_slide}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'images' => "varchar(255) NULL",
            'title' => "varchar(255) NULL",
            'description' => "varchar(255) NULL",
            'menuname' => "varchar(255) NULL",
            'menuurl' => "varchar(255) NULL",
            'createtime' => "int(30) NULL",
            'updatetime' => "int(30) NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='幻灯片'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%website_slide}}',['id'=>'1','images'=>'202002/29/6771f327-b3fb-3d32-b1bd-1f2b6a1476f3.jpg','title'=>'人脸识别','description'=>'基于人脸识别的会员管理系统，比传统的会员制更机敏','menuname'=>'了解我们','menuurl'=>'wwwww','createtime'=>NULL,'updatetime'=>NULL]);
        $this->insert('{{%website_slide}}',['id'=>'2','images'=>'202002/29/7dc349f8-fd96-3a6c-8800-4ec14f0d58a8.jpg','title'=>'人脸库','description'=>'可以自建人脸库，主动的会员和被动的会员都是您的资产','menuname'=>'了解我们','menuurl'=>'www','createtime'=>NULL,'updatetime'=>NULL]);
        $this->insert('{{%website_slide}}',['id'=>'3','images'=>'202002/29/e27b62f6-33cc-3de0-b64e-9e33f7cf0977.jpg','title'=>'电商小程序','description'=>'适合于快速应用的小程序，依托人脸识别，消费更精准','menuname'=>'了解我们','menuurl'=>'www','createtime'=>NULL,'updatetime'=>NULL]);
        $this->insert('{{%website_slide}}',['id'=>'4','images'=>'202002/29/0d0f4753-4417-3698-8be0-b2b6bf17c16d.jpg','title'=>'代码开源','description'=>'代码完全开源，助您享受科技改变生活的便利','menuname'=>'GIT下载','menuurl'=>'https://gitee.com/wayfiretech_admin/firetech','createtime'=>NULL,'updatetime'=>NULL]);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%website_slide}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

