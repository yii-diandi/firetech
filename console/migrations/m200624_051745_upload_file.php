<?php

use yii\db\Migration;

class m200624_051745_upload_file extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%upload_file}}', [
            'file_id' => "int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '文件ID'",
            'storage' => "varchar(20) NOT NULL DEFAULT '' COMMENT '对象存储'",
            'group_id' => "int(11) unsigned NOT NULL DEFAULT '0' COMMENT '文件分组'",
            'file_url' => "varchar(255) NOT NULL DEFAULT '' COMMENT '文件地址'",
            'file_name' => "varchar(255) NOT NULL DEFAULT '' COMMENT '文件名称'",
            'file_size' => "int(11) unsigned NOT NULL DEFAULT '0' COMMENT '文件尺寸'",
            'file_type' => "varchar(20) NOT NULL DEFAULT '' COMMENT '文件类型'",
            'extension' => "varchar(20) NOT NULL DEFAULT '' COMMENT '文件后缀'",
            'is_delete' => "tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除'",
            'bloc_id' => "int(11) unsigned NULL DEFAULT '0' COMMENT '公司ID'",
            'create_time' => "int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间'",
            'store_id' => "int(11) NULL COMMENT '商户ID'",
            'PRIMARY KEY (`file_id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT");
        
        /* 索引设置 */
        $this->createIndex('path_idx','{{%upload_file}}','file_name',1);
        $this->createIndex('bloc_id','{{%upload_file}}','bloc_id',0);
        $this->createIndex('dd_upload_file_ibfk_3','{{%upload_file}}','store_id',0);
        
        
        /* 表数据 */
        $this->insert('{{%upload_file}}',['file_id'=>'10067','storage'=>'local','group_id'=>'0','file_url'=>'202005/21/11681f8d-2a12-394e-ab6e-59d2f4b382c5.png','file_name'=>'11681f8d-2a12-394e-ab6e-59d2f4b382c5.png','file_size'=>'201936','file_type'=>'image/png','extension'=>'png','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1590071982','store_id'=>'30']);
        $this->insert('{{%upload_file}}',['file_id'=>'10069','storage'=>'local','group_id'=>'0','file_url'=>'202005/21/8ec7a956-af1d-3818-8715-132606737a04.png','file_name'=>'8ec7a956-af1d-3818-8715-132606737a04.png','file_size'=>'201936','file_type'=>'image/png','extension'=>'png','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1590073891','store_id'=>'28']);
        $this->insert('{{%upload_file}}',['file_id'=>'10070','storage'=>'local','group_id'=>'0','file_url'=>'202005/26/a3ff171a-6ea0-3341-85d2-0e3b0b7390de.jpg','file_name'=>'a3ff171a-6ea0-3341-85d2-0e3b0b7390de.jpg','file_size'=>'83855','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1590506269','store_id'=>'28']);
        $this->insert('{{%upload_file}}',['file_id'=>'10071','storage'=>'local','group_id'=>'0','file_url'=>'202005/27/67f62b31-d5e1-3ed7-bff9-6c6ce04ff5b7.jpg','file_name'=>'67f62b31-d5e1-3ed7-bff9-6c6ce04ff5b7.jpg','file_size'=>'94054','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1590574655','store_id'=>'32']);
        $this->insert('{{%upload_file}}',['file_id'=>'10072','storage'=>'local','group_id'=>'0','file_url'=>'202005/29/6b7afdb2-9d5d-3e1c-9438-a8a195f43d02.png','file_name'=>'6b7afdb2-9d5d-3e1c-9438-a8a195f43d02.png','file_size'=>'568924','file_type'=>'image/png','extension'=>'png','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1590764675','store_id'=>'32']);
        $this->insert('{{%upload_file}}',['file_id'=>'10073','storage'=>'local','group_id'=>'0','file_url'=>'202005/29/46472efe-4fd4-3ab6-81c3-c2ed16708e27.png','file_name'=>'46472efe-4fd4-3ab6-81c3-c2ed16708e27.png','file_size'=>'568924','file_type'=>'image/png','extension'=>'png','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1590764763','store_id'=>'32']);
        $this->insert('{{%upload_file}}',['file_id'=>'10074','storage'=>'local','group_id'=>'0','file_url'=>'202005/29/7b29556a-4b5b-3d40-9e00-7e52916f79a1.png','file_name'=>'7b29556a-4b5b-3d40-9e00-7e52916f79a1.png','file_size'=>'568924','file_type'=>'image/png','extension'=>'png','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1590765463','store_id'=>'32']);
        $this->insert('{{%upload_file}}',['file_id'=>'10075','storage'=>'local','group_id'=>'0','file_url'=>'202006/02/1838144c-dd4d-3e89-b956-f894c24a7443.jpg','file_name'=>'1838144c-dd4d-3e89-b956-f894c24a7443.jpg','file_size'=>'81590','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1591072185','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10076','storage'=>'local','group_id'=>'0','file_url'=>'202006/02/f6a98bf1-4976-3617-986b-fe3bf8020fa7.jpg','file_name'=>'f6a98bf1-4976-3617-986b-fe3bf8020fa7.jpg','file_size'=>'81590','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1591112313','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10077','storage'=>'local','group_id'=>'0','file_url'=>'202006/13/ebb05b2a-f3b4-3106-b9be-590d5ca33370.jpg','file_name'=>'ebb05b2a-f3b4-3106-b9be-590d5ca33370.jpg','file_size'=>'83855','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592055560','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10078','storage'=>'local','group_id'=>'0','file_url'=>'202006/13/e31d3ae0-a3b6-3d15-8467-5a5259d32b0b.jpg','file_name'=>'e31d3ae0-a3b6-3d15-8467-5a5259d32b0b.jpg','file_size'=>'19181','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592055575','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10079','storage'=>'local','group_id'=>'0','file_url'=>'202006/13/2cc1a3ca-0f0b-32f4-8641-17102d64ec95.png','file_name'=>'2cc1a3ca-0f0b-32f4-8641-17102d64ec95.png','file_size'=>'568924','file_type'=>'image/png','extension'=>'png','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592055576','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10080','storage'=>'local','group_id'=>'0','file_url'=>'202006/13/3c4dc454-0460-39f4-b636-f494a98c2b5f.jpg','file_name'=>'3c4dc454-0460-39f4-b636-f494a98c2b5f.jpg','file_size'=>'41054','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592055586','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10081','storage'=>'local','group_id'=>'0','file_url'=>'202006/16/c98f656d-3322-3346-80c8-5ea04ada3ea7.jpg','file_name'=>'c98f656d-3322-3346-80c8-5ea04ada3ea7.jpg','file_size'=>'83855','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592316210','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10082','storage'=>'local','group_id'=>'0','file_url'=>'202006/16/5bafac85-6df0-3539-9a29-5f766c12872f.jpg','file_name'=>'5bafac85-6df0-3539-9a29-5f766c12872f.jpg','file_size'=>'94054','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592316211','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10083','storage'=>'local','group_id'=>'0','file_url'=>'202006/16/7a256b09-55f5-3578-a071-61ddf3560977.jpg','file_name'=>'7a256b09-55f5-3578-a071-61ddf3560977.jpg','file_size'=>'83855','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592316221','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10084','storage'=>'local','group_id'=>'0','file_url'=>'202006/16/d91f480e-35a0-303c-99cb-c3ca4c08a054.jpg','file_name'=>'d91f480e-35a0-303c-99cb-c3ca4c08a054.jpg','file_size'=>'83855','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592316248','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10085','storage'=>'local','group_id'=>'0','file_url'=>'202006/16/40c3de28-039f-3978-a94a-f63576821f0f.jpg','file_name'=>'40c3de28-039f-3978-a94a-f63576821f0f.jpg','file_size'=>'83855','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592316329','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10086','storage'=>'local','group_id'=>'0','file_url'=>'202006/16/a7d7b539-0772-3fc0-a170-aa3b3829f7cf.png','file_name'=>'a7d7b539-0772-3fc0-a170-aa3b3829f7cf.png','file_size'=>'568924','file_type'=>'image/png','extension'=>'png','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592316339','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10087','storage'=>'local','group_id'=>'0','file_url'=>'202006/16/142c24a6-a513-34c3-a323-9e41b1071c7a.jpg','file_name'=>'142c24a6-a513-34c3-a323-9e41b1071c7a.jpg','file_size'=>'94054','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592317205','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10088','storage'=>'local','group_id'=>'0','file_url'=>'202006/16/25440045-d582-3f20-a4d6-fc4a4c5de536.png','file_name'=>'25440045-d582-3f20-a4d6-fc4a4c5de536.png','file_size'=>'568924','file_type'=>'image/png','extension'=>'png','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592317206','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10089','storage'=>'local','group_id'=>'0','file_url'=>'202006/16/7abcda59-f615-32bb-8332-2123b53c4691.jpg','file_name'=>'7abcda59-f615-32bb-8332-2123b53c4691.jpg','file_size'=>'83855','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592317651','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10090','storage'=>'local','group_id'=>'0','file_url'=>'202006/16/a235a67e-91eb-3353-96d5-127f648c258a.jpg','file_name'=>'a235a67e-91eb-3353-96d5-127f648c258a.jpg','file_size'=>'83855','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592317673','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10091','storage'=>'local','group_id'=>'0','file_url'=>'202006/16/99a34aad-eda9-3898-925e-273dc1471072.jpg','file_name'=>'99a34aad-eda9-3898-925e-273dc1471072.jpg','file_size'=>'94054','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592317683','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10092','storage'=>'local','group_id'=>'0','file_url'=>'202006/16/c143b432-efd3-3fd7-a661-aaf260e8e587.png','file_name'=>'c143b432-efd3-3fd7-a661-aaf260e8e587.png','file_size'=>'568924','file_type'=>'image/png','extension'=>'png','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592317684','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10093','storage'=>'local','group_id'=>'0','file_url'=>'202006/16/aae86bc7-2a78-3132-9715-3ead114cb2c7.jpg','file_name'=>'aae86bc7-2a78-3132-9715-3ead114cb2c7.jpg','file_size'=>'83855','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592318627','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10094','storage'=>'local','group_id'=>'0','file_url'=>'202006/16/c983ed24-80ec-3c64-a927-0ede0afa1096.png','file_name'=>'c983ed24-80ec-3c64-a927-0ede0afa1096.png','file_size'=>'568924','file_type'=>'image/png','extension'=>'png','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592318628','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10095','storage'=>'local','group_id'=>'0','file_url'=>'202006/16/7d2b32b0-59ee-3f3d-9a5f-9dd5fc759150.jpg','file_name'=>'7d2b32b0-59ee-3f3d-9a5f-9dd5fc759150.jpg','file_size'=>'94054','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592318628','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10096','storage'=>'local','group_id'=>'0','file_url'=>'202006/16/52942eae-8ccd-33d5-99c4-12cc6233e5f4.png','file_name'=>'52942eae-8ccd-33d5-99c4-12cc6233e5f4.png','file_size'=>'41490','file_type'=>'image/png','extension'=>'png','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592318629','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10097','storage'=>'local','group_id'=>'0','file_url'=>'202006/18/ad2a95e5-3ae4-3f96-b6a0-bdb077f6b599.jpg','file_name'=>'ad2a95e5-3ae4-3f96-b6a0-bdb077f6b599.jpg','file_size'=>'26129','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592453652','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10098','storage'=>'local','group_id'=>'0','file_url'=>'202006/18/cc98cfb3-95ec-37c1-8fa0-6f7fe95d71a7.jpg','file_name'=>'cc98cfb3-95ec-37c1-8fa0-6f7fe95d71a7.jpg','file_size'=>'94054','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592453662','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10099','storage'=>'local','group_id'=>'0','file_url'=>'202006/20/ed7485ae-2349-3b56-a372-8d57a2f7e2d5.png','file_name'=>'ed7485ae-2349-3b56-a372-8d57a2f7e2d5.png','file_size'=>'568924','file_type'=>'image/png','extension'=>'png','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592582987','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10100','storage'=>'local','group_id'=>'0','file_url'=>'202006/20/938a461c-3ffc-30a5-8102-2070e5983187.jpg','file_name'=>'938a461c-3ffc-30a5-8102-2070e5983187.jpg','file_size'=>'10363','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592583425','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10101','storage'=>'local','group_id'=>'0','file_url'=>'202006/20/13f914a6-4794-3e1e-9669-663ddaab269f.png','file_name'=>'13f914a6-4794-3e1e-9669-663ddaab269f.png','file_size'=>'568924','file_type'=>'image/png','extension'=>'png','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592583621','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10102','storage'=>'local','group_id'=>'0','file_url'=>'202006/20/a1cf8c5c-a4a7-303e-b9f2-f6beff80f344.jpeg','file_name'=>'a1cf8c5c-a4a7-303e-b9f2-f6beff80f344.jpeg','file_size'=>'12126','file_type'=>'image/jpeg','extension'=>'jpeg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592643868','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10103','storage'=>'local','group_id'=>'0','file_url'=>'202006/20/34031fb6-0e4d-3eef-b0d7-2c168c1d3f00.jpg','file_name'=>'34031fb6-0e4d-3eef-b0d7-2c168c1d3f00.jpg','file_size'=>'70463','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592643877','store_id'=>'38']);
        $this->insert('{{%upload_file}}',['file_id'=>'10104','storage'=>'local','group_id'=>'0','file_url'=>'202006/20/5739f1dc-b79c-337a-8226-ef00274a8a8e.jpg','file_name'=>'5739f1dc-b79c-337a-8226-ef00274a8a8e.jpg','file_size'=>'41067','file_type'=>'image/jpeg','extension'=>'jpg','is_delete'=>'0','bloc_id'=>'1','create_time'=>'1592643878','store_id'=>'38']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%upload_file}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

