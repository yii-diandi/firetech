<?php

use yii\db\Migration;

class m200624_051745_diandi_bloc extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%diandi_bloc}}', [
            'bloc_id' => "int(10) unsigned NOT NULL AUTO_INCREMENT",
            'business_name' => "varchar(50) NOT NULL COMMENT '公司名称'",
            'pid' => "int(11) NOT NULL DEFAULT '0' COMMENT '上级商户'",
            'category' => "varchar(255) NOT NULL DEFAULT '0'",
            'province' => "varchar(15) NOT NULL COMMENT '省份'",
            'city' => "varchar(15) NOT NULL COMMENT '城市'",
            'district' => "varchar(15) NOT NULL COMMENT '区县'",
            'address' => "varchar(50) NOT NULL COMMENT '具体地址'",
            'longitude' => "varchar(15) NOT NULL COMMENT '经度'",
            'latitude' => "varchar(15) NOT NULL COMMENT '纬度'",
            'telephone' => "varchar(20) NOT NULL COMMENT '电话'",
            'avg_price' => "int(10) unsigned NOT NULL",
            'recommend' => "varchar(255) NOT NULL COMMENT '介绍'",
            'special' => "varchar(255) NOT NULL COMMENT '特色'",
            'introduction' => "varchar(255) NOT NULL COMMENT '详细介绍'",
            'open_time' => "varchar(50) NOT NULL COMMENT '开业时间'",
            'status' => "tinyint(3) unsigned NOT NULL COMMENT '1 审核通过 2 审核中 3审核未通过'",
            'sosomap_poi_uid' => "varchar(50) NOT NULL DEFAULT '' COMMENT '腾讯地图标注id'",
            'license_no' => "varchar(30) NOT NULL DEFAULT '' COMMENT '营业执照注册号或组织机构代码'",
            'license_name' => "varchar(100) NOT NULL DEFAULT '' COMMENT '营业执照名称'",
            'other_files' => "text NULL COMMENT '其他文件'",
            'PRIMARY KEY (`bloc_id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%diandi_bloc}}',['bloc_id'=>'1','business_name'=>'第一个商户','pid'=>'0','category'=>'0','province'=>'1532','city'=>'1685','district'=>'1694','address'=>'1567454','longitude'=>'536','latitude'=>'541','telephone'=>'245','avg_price'=>'10','recommend'=>'介绍','special'=>'特色额','introduction'=>'详细介绍','open_time'=>'2018745','status'=>'1','sosomap_poi_uid'=>'','license_no'=>'34567898','license_name'=>'=-7986654-0','other_files'=>NULL]);
        $this->insert('{{%diandi_bloc}}',['bloc_id'=>'2','business_name'=>'途火科技','pid'=>'0','category'=>'0','province'=>'1964','city'=>'2082','district'=>'2083','address'=>'4536','longitude'=>'456','latitude'=>'567','telephone'=>'5676575','avg_price'=>'23','recommend'=>'34','special'=>'56','introduction'=>'234535','open_time'=>'234','status'=>'1','sosomap_poi_uid'=>'','license_no'=>'23425','license_name'=>'5467','other_files'=>NULL]);
        $this->insert('{{%diandi_bloc}}',['bloc_id'=>'3','business_name'=>'子公司测试','pid'=>'2','category'=>'0','province'=>'820','city'=>'896','district'=>'902','address'=>'具体地址','longitude'=>'456564565454','latitude'=>'54656','telephone'=>'17778984690','avg_price'=>'32','recommend'=>'介绍内容','special'=>'345','introduction'=>'456546','open_time'=>'3435','status'=>'2','sosomap_poi_uid'=>'','license_no'=>'45546','license_name'=>'435435','other_files'=>NULL]);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%diandi_bloc}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

