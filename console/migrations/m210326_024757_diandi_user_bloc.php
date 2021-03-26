<?php

use yii\db\Migration;

class m210326_024757_diandi_user_bloc extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_user_bloc}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'user_id' => "int(11) NULL DEFAULT '0' COMMENT '管理员id'",
            'bloc_id' => "int(11) NULL DEFAULT '0' COMMENT '集团id'",
            'store_id' => "int(11) NULL DEFAULT '0' COMMENT '子公司id'",
            'status' => "int(11) NULL COMMENT '是否启用'",
            'create_time' => "varchar(30) NULL",
            'update_time' => "varchar(30) NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%diandi_user_bloc}}',['id'=>'1','user_id'=>'10','bloc_id'=>'1','store_id'=>'38','status'=>'1','create_time'=>'1594112911','update_time'=>NULL]);
        $this->insert('{{%diandi_user_bloc}}',['id'=>'2','user_id'=>'20','bloc_id'=>'4','store_id'=>'43','status'=>'1','create_time'=>'1594556651','update_time'=>NULL]);
        $this->insert('{{%diandi_user_bloc}}',['id'=>'3','user_id'=>'22','bloc_id'=>'10','store_id'=>'49','status'=>'1','create_time'=>'1607682870','update_time'=>NULL]);
        $this->insert('{{%diandi_user_bloc}}',['id'=>'7','user_id'=>'13','bloc_id'=>'8','store_id'=>'61','status'=>'1','create_time'=>'1614425015','update_time'=>NULL]);
        $this->insert('{{%diandi_user_bloc}}',['id'=>'5','user_id'=>'16','bloc_id'=>'8','store_id'=>'61','status'=>'1','create_time'=>'1614424481','update_time'=>NULL]);
        $this->insert('{{%diandi_user_bloc}}',['id'=>'6','user_id'=>'16','bloc_id'=>'8','store_id'=>'62','status'=>'1','create_time'=>'1614424481','update_time'=>NULL]);
        $this->insert('{{%diandi_user_bloc}}',['id'=>'8','user_id'=>'13','bloc_id'=>'8','store_id'=>'62','status'=>'1','create_time'=>'1614425015','update_time'=>NULL]);
        $this->insert('{{%diandi_user_bloc}}',['id'=>'9','user_id'=>'13','bloc_id'=>'8','store_id'=>'63','status'=>'1','create_time'=>'1614425015','update_time'=>NULL]);
        $this->insert('{{%diandi_user_bloc}}',['id'=>'10','user_id'=>'20','bloc_id'=>'8','store_id'=>'59','status'=>'1','create_time'=>'1614425318','update_time'=>NULL]);
        $this->insert('{{%diandi_user_bloc}}',['id'=>'11','user_id'=>'1','bloc_id'=>'8','store_id'=>'61','status'=>'1','create_time'=>'1614425570','update_time'=>NULL]);
        $this->insert('{{%diandi_user_bloc}}',['id'=>'12','user_id'=>'1','bloc_id'=>'8','store_id'=>'62','status'=>'1','create_time'=>'1614425570','update_time'=>NULL]);
        $this->insert('{{%diandi_user_bloc}}',['id'=>'13','user_id'=>'1','bloc_id'=>'8','store_id'=>'63','status'=>'1','create_time'=>'1614425570','update_time'=>NULL]);
        $this->insert('{{%diandi_user_bloc}}',['id'=>'14','user_id'=>'1','bloc_id'=>'8','store_id'=>'61','status'=>'1','create_time'=>'1614425720','update_time'=>NULL]);
        $this->insert('{{%diandi_user_bloc}}',['id'=>'15','user_id'=>'10','bloc_id'=>'8','store_id'=>'48','status'=>'1','create_time'=>'1614445337','update_time'=>NULL]);
        $this->insert('{{%diandi_user_bloc}}',['id'=>'16','user_id'=>'10','bloc_id'=>'8','store_id'=>'57','status'=>'1','create_time'=>'1614445337','update_time'=>NULL]);
        $this->insert('{{%diandi_user_bloc}}',['id'=>'17','user_id'=>'10','bloc_id'=>'8','store_id'=>'59','status'=>'1','create_time'=>'1614445337','update_time'=>NULL]);
        $this->insert('{{%diandi_user_bloc}}',['id'=>'18','user_id'=>'1','bloc_id'=>'8','store_id'=>'48','status'=>'1','create_time'=>'1614447595','update_time'=>NULL]);
        $this->insert('{{%diandi_user_bloc}}',['id'=>'19','user_id'=>'1','bloc_id'=>'8','store_id'=>'51','status'=>'1','create_time'=>'1614448595','update_time'=>NULL]);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%diandi_user_bloc}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

