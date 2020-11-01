<?php

use yii\db\Migration;

class m201101_033521_user_address extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%user_address}}', [
            'address_id' => "int(11) unsigned NOT NULL AUTO_INCREMENT",
            'name' => "varchar(30) NOT NULL DEFAULT ''",
            'phone' => "varchar(20) NOT NULL DEFAULT ''",
            'province_id' => "int(11) unsigned NOT NULL DEFAULT '0'",
            'city_id' => "int(11) unsigned NOT NULL DEFAULT '0'",
            'region_id' => "int(11) unsigned NOT NULL DEFAULT '0'",
            'detail' => "varchar(255) NOT NULL DEFAULT ''",
            'user_id' => "int(11) unsigned NOT NULL DEFAULT '0'",
            'wxapp_id' => "int(11) unsigned NOT NULL DEFAULT '0'",
            'is_default' => "tinyint(4) NULL DEFAULT '0'",
            'create_time' => "int(11) unsigned NOT NULL DEFAULT '0'",
            'update_time' => "int(11) unsigned NOT NULL DEFAULT '0'",
            'PRIMARY KEY (`address_id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%user_address}}',['address_id'=>'10006','name'=>'王春生','phone'=>'17778984690','province_id'=>'1','city_id'=>'3','region_id'=>'1','detail'=>'收货具体地址555569','user_id'=>'76','wxapp_id'=>'0','is_default'=>'0','create_time'=>'1584019022','update_time'=>'1584019022']);
        $this->insert('{{%user_address}}',['address_id'=>'10007','name'=>'王春生','phone'=>'17778984690','province_id'=>'1','city_id'=>'3','region_id'=>'1','detail'=>'收货具体地址555人','user_id'=>'76','wxapp_id'=>'0','is_default'=>'1','create_time'=>'1584023328','update_time'=>'1584023328']);
        $this->insert('{{%user_address}}',['address_id'=>'10008','name'=>'幸福里社区','phone'=>'undefined','province_id'=>'2898','city_id'=>'3016','region_id'=>'3019','detail'=>'undefined','user_id'=>'76','wxapp_id'=>'0','is_default'=>'0','create_time'=>'1584087176','update_time'=>'1584087176']);
        $this->insert('{{%user_address}}',['address_id'=>'10009','name'=>'王春生','phone'=>'17778984690','province_id'=>'1','city_id'=>'3','region_id'=>'1','detail'=>'收货具体地址555569','user_id'=>'76','wxapp_id'=>'0','is_default'=>'0','create_time'=>'1584088164','update_time'=>'1584088164']);
        $this->insert('{{%user_address}}',['address_id'=>'10010','name'=>'王春生','phone'=>'17778984690','province_id'=>'1','city_id'=>'3','region_id'=>'1','detail'=>'收货具体地址555569','user_id'=>'76','wxapp_id'=>'0','is_default'=>'0','create_time'=>'1584088306','update_time'=>'1584088306']);
        $this->insert('{{%user_address}}',['address_id'=>'10011','name'=>'王春生','phone'=>'17778984690','province_id'=>'1','city_id'=>'3','region_id'=>'1','detail'=>'收货具体地址555569','user_id'=>'76','wxapp_id'=>'0','is_default'=>'0','create_time'=>'1584088403','update_time'=>'1584088403']);
        $this->insert('{{%user_address}}',['address_id'=>'10012','name'=>'王春生','phone'=>'17778984690','province_id'=>'1','city_id'=>'2','region_id'=>'13','detail'=>'北京市昌平区政府街19号','user_id'=>'76','wxapp_id'=>'0','is_default'=>'0','create_time'=>'1585322028','update_time'=>'1585322028']);
        $this->insert('{{%user_address}}',['address_id'=>'10013','name'=>'毛毛','phone'=>'18729404118','province_id'=>'2898','city_id'=>'2931','region_id'=>'2934','detail'=>'空港东三路','user_id'=>'82','wxapp_id'=>'0','is_default'=>'1','create_time'=>'1586999211','update_time'=>'1586999211']);
        $this->insert('{{%user_address}}',['address_id'=>'10014','name'=>'王春生','phone'=>'17749039605','province_id'=>'801','city_id'=>'802','region_id'=>'813','detail'=>'具体地址','user_id'=>'396','wxapp_id'=>'0','is_default'=>'1','create_time'=>'1594179617','update_time'=>'1594179617']);
        $this->insert('{{%user_address}}',['address_id'=>'10015','name'=>'王春生','phone'=>'15029641258','province_id'=>'801','city_id'=>'802','region_id'=>'813','detail'=>'详细地址','user_id'=>'404','wxapp_id'=>'0','is_default'=>'1','create_time'=>'1594288500','update_time'=>'1594288500']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%user_address}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

