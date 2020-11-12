<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-11-05 12:17:02
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-11-05 12:17:03
 */
 

use yii\db\Migration;

class m201105_033815_website_contact extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%website_contact}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'name' => "varchar(255) NULL",
            'contact' => "varchar(255) NULL",
            'createtime' => "varchar(30) NULL",
            'updatetime' => "varchar(30) NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='幻灯片'");
        
        /* 索引设置 */
               
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%website_contact}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

