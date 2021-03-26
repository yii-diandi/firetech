<?php

use yii\db\Migration;

class m210326_024756_diandi_bloc extends Migration
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
            'status' => "tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '1 审核通过 2 审核中 3审核未通过'",
            'sosomap_poi_uid' => "varchar(50) NOT NULL DEFAULT '' COMMENT '腾讯地图标注id'",
            'license_no' => "varchar(30) NOT NULL DEFAULT '' COMMENT '营业执照注册号或组织机构代码'",
            'license_name' => "varchar(100) NOT NULL DEFAULT '' COMMENT '营业执照名称'",
            'store_id' => "int(11) NOT NULL",
            'other_files' => "text NULL COMMENT '其他文件'",
            'extra' => "text NULL COMMENT '扩展字段'",
            'PRIMARY KEY (`bloc_id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%diandi_bloc}}',['bloc_id'=>'8','business_name'=>'都唻团','pid'=>'0','category'=>'0','province'=>'2367','city'=>'2368','district'=>'2373','address'=>'4536','longitude'=>'456','latitude'=>'567','telephone'=>'5676575','avg_price'=>'20','recommend'=>'34','special'=>'乐乐巴布','introduction'=>'234535','open_time'=>'234','status'=>'1','sosomap_poi_uid'=>'','license_no'=>'23425','license_name'=>'5467','store_id'=>'48','other_files'=>NULL,'extra'=>NULL]);
        $this->insert('{{%diandi_bloc}}',['bloc_id'=>'10','business_name'=>'齐享创客','pid'=>'8','category'=>'0','province'=>'2898','city'=>'2899','district'=>'2905','address'=>'陕西省西安市雁塔区崇业路23号','longitude'=>'23','latitude'=>'66','telephone'=>'13772145451','avg_price'=>'10000','recommend'=>'本公司经营酒类 化妆品类等产品','special'=>'酒类 化妆品类','introduction'=>'本公司经营酒类 化妆品类等产品','open_time'=>'2017.09.05','status'=>'0','sosomap_poi_uid'=>'','license_no'=>'91611104MA6THK8F50','license_name'=>'陕西齐享创客商贸有限公司','store_id'=>'0','other_files'=>NULL,'extra'=>NULL]);
        $this->insert('{{%diandi_bloc}}',['bloc_id'=>'11','business_name'=>'陕西德智体健康管理有限公司','pid'=>'8','category'=>'0','province'=>'2898','city'=>'2899','district'=>'2901','address'=>'陕西省西安市碑林区雁塔路中段26号博诚数码广场第-1层第030','longitude'=>'108.93425','latitude'=>'34.23053','telephone'=>'15771712861','avg_price'=>'10000','recommend'=>'身体体检与健康管理','special'=>'身体体检与健康管理','introduction'=>'身体体检与健康管理','open_time'=>'2020-04-01','status'=>'0','sosomap_poi_uid'=>'','license_no'=>'91610103MA712UNP45','license_name'=>'陕西德智体健康管理有限公司','store_id'=>'0','other_files'=>NULL,'extra'=>NULL]);
        $this->insert('{{%diandi_bloc}}',['bloc_id'=>'12','business_name'=>'客户演示','pid'=>'8','category'=>'0','province'=>'801','city'=>'802','district'=>'806','address'=>'3243','longitude'=>'3435','latitude'=>'45','telephone'=>'5656','avg_price'=>'10','recommend'=>'2112','special'=>'4345','introduction'=>'3434','open_time'=>'23','status'=>'2','sosomap_poi_uid'=>'','license_no'=>'343','license_name'=>'56','store_id'=>'0','other_files'=>NULL,'extra'=>NULL]);
        $this->insert('{{%diandi_bloc}}',['bloc_id'=>'13','business_name'=>'测绘公司升级处理','pid'=>'8','category'=>'0','province'=>'2670','city'=>'2696','district'=>'2699','address'=>'3243','longitude'=>'3435','latitude'=>'45','telephone'=>'5656','avg_price'=>'10','recommend'=>'2112','special'=>'4345','introduction'=>'3434','open_time'=>'23','status'=>'2','sosomap_poi_uid'=>'','license_no'=>'343','license_name'=>'56','store_id'=>'0','other_files'=>NULL,'extra'=>'N;']);
        $this->insert('{{%diandi_bloc}}',['bloc_id'=>'14','business_name'=>'短信云','pid'=>'8','category'=>'0','province'=>'1','city'=>'2','district'=>'7','address'=>'3243','longitude'=>'3435','latitude'=>'45','telephone'=>'5656','avg_price'=>'10','recommend'=>'2112','special'=>'4345','introduction'=>'3434','open_time'=>'23','status'=>'2','sosomap_poi_uid'=>'','license_no'=>'343','license_name'=>'56','store_id'=>'0','other_files'=>NULL,'extra'=>'a:1:{s:8:"sendtime";s:18:"扩展字段测试";}']);
        
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

