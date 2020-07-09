<?php

use yii\db\Migration;

class m200624_051745_migration extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%migration}}', [
            'version' => "varchar(180) NOT NULL",
            'apply_time' => "int(11) NULL",
            'PRIMARY KEY (`version`)'
        ], "ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%migration}}',['version'=>'m000000_000000_base','apply_time'=>'1576869783']);
        $this->insert('{{%migration}}',['version'=>'m130524_201442_init','apply_time'=>'1576869791']);
        $this->insert('{{%migration}}',['version'=>'m190124_110200_add_verification_token_column_to_user_table','apply_time'=>'1576869793']);
        $this->insert('{{%migration}}',['version'=>'m140602_111327_create_menu_table','apply_time'=>'1576871609']);
        $this->insert('{{%migration}}',['version'=>'m160312_050000_create_user','apply_time'=>'1576871609']);
        $this->insert('{{%migration}}',['version'=>'m150227_114524_init','apply_time'=>'1579094792']);
        $this->insert('{{%migration}}',['version'=>'m161109_104201_rename_setting_table','apply_time'=>'1579094792']);
        $this->insert('{{%migration}}',['version'=>'m170323_102933_add_description_column_to_setting_table','apply_time'=>'1579094793']);
        $this->insert('{{%migration}}',['version'=>'m170413_125133_rename_date_columns','apply_time'=>'1579094793']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%migration}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

