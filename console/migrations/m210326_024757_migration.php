<?php

use yii\db\Migration;

class m210326_024757_migration extends Migration
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
        ], "ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%migration}}',['version'=>'m000000_000000_base','apply_time'=>'1605597582']);
        $this->insert('{{%migration}}',['version'=>'m201105_033806_addons','apply_time'=>'1605597584']);
        $this->insert('{{%migration}}',['version'=>'m201105_033806_addons_user','apply_time'=>'1605597584']);
        $this->insert('{{%migration}}',['version'=>'m201105_033806_ai_sms_log','apply_time'=>'1605597584']);
        $this->insert('{{%migration}}',['version'=>'m201105_033806_api_access_token','apply_time'=>'1605597586']);
        $this->insert('{{%migration}}',['version'=>'m201105_033806_api_log','apply_time'=>'1605597586']);
        $this->insert('{{%migration}}',['version'=>'m201105_033806_article','apply_time'=>'1605597586']);
        $this->insert('{{%migration}}',['version'=>'m201105_033806_article_category','apply_time'=>'1605597586']);
        $this->insert('{{%migration}}',['version'=>'m201105_033806_auth_assignment','apply_time'=>'1605597586']);
        $this->insert('{{%migration}}',['version'=>'m201105_033806_auth_assignment_group','apply_time'=>'1605597586']);
        $this->insert('{{%migration}}',['version'=>'m201105_033806_auth_item','apply_time'=>'1605597586']);
        $this->insert('{{%migration}}',['version'=>'m201105_033806_auth_item_child','apply_time'=>'1605597590']);
        $this->insert('{{%migration}}',['version'=>'m201105_033806_auth_menu','apply_time'=>'1605597591']);
        $this->insert('{{%migration}}',['version'=>'m201105_033806_auth_route','apply_time'=>'1605597595']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_auth_rule','apply_time'=>'1605597595']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_auth_user_group','apply_time'=>'1605597595']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_bloc_conf_map','apply_time'=>'1605597595']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_core_paylog','apply_time'=>'1605597596']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_aggregate_config','apply_time'=>'1605597596']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_ai_applications','apply_time'=>'1605597596']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_ai_baidu_config','apply_time'=>'1605597596']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_ai_faces','apply_time'=>'1605597596']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_ai_groups','apply_time'=>'1605597596']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_ai_member','apply_time'=>'1605597596']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_bloc','apply_time'=>'1605597596']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_bloc_conf_baidu','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_bloc_conf_email','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_bloc_conf_sms','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_bloc_conf_wechat','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_bloc_conf_wechatpay','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_bloc_conf_wxapp','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_coupon','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_coupon_groups','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_coupon_location','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_coupon_modules','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_coupon_record','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033807_diandi_coupon_store','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033813_diandi_store','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033813_diandi_user_bloc','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033813_dictionary','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033814_member','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033814_member_account','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033814_member_group','apply_time'=>'1605597597']);
        $this->insert('{{%migration}}',['version'=>'m201105_033814_menu','apply_time'=>'1605597598']);
        $this->insert('{{%migration}}',['version'=>'m201105_033814_menu_cate','apply_time'=>'1605597598']);
        $this->insert('{{%migration}}',['version'=>'m201105_033814_message_notice_log','apply_time'=>'1605597598']);
        $this->insert('{{%migration}}',['version'=>'m201105_033814_modules','apply_time'=>'1605597598']);
        $this->insert('{{%migration}}',['version'=>'m201105_033815_region','apply_time'=>'1605597613']);
        $this->insert('{{%migration}}',['version'=>'m201105_033815_setting','apply_time'=>'1605597614']);
        $this->insert('{{%migration}}',['version'=>'m201105_033815_store_user','apply_time'=>'1605597614']);
        $this->insert('{{%migration}}',['version'=>'m201105_033815_upload_file','apply_time'=>'1605597615']);
        $this->insert('{{%migration}}',['version'=>'m201105_033815_upload_file_group','apply_time'=>'1605597615']);
        $this->insert('{{%migration}}',['version'=>'m201105_033815_upload_file_used','apply_time'=>'1605597615']);
        $this->insert('{{%migration}}',['version'=>'m201105_033815_upload_group','apply_time'=>'1605597615']);
        $this->insert('{{%migration}}',['version'=>'m201105_033815_user','apply_time'=>'1605597615']);
        $this->insert('{{%migration}}',['version'=>'m201105_033815_user_address','apply_time'=>'1605597615']);
        $this->insert('{{%migration}}',['version'=>'m201105_033815_website_contact','apply_time'=>'1605597615']);
        $this->insert('{{%migration}}',['version'=>'m201105_033815_website_slide','apply_time'=>'1605597615']);
        $this->insert('{{%migration}}',['version'=>'m201105_033815_wechat_fans','apply_time'=>'1605597615']);
        $this->insert('{{%migration}}',['version'=>'m201105_033815_wxapp_fans','apply_time'=>'1605597615']);
        
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

