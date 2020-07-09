<?php

use yii\db\Migration;

class m200624_051744_api_access_token extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%api_access_token}}', [
            'id' => "int(10) unsigned NOT NULL AUTO_INCREMENT",
            'refresh_token' => "varchar(60) NULL DEFAULT '' COMMENT '刷新令牌'",
            'access_token' => "varchar(60) NULL DEFAULT '' COMMENT '授权令牌'",
            'member_id' => "int(10) unsigned NULL DEFAULT '0' COMMENT '用户id'",
            'openid' => "varchar(50) NULL DEFAULT '' COMMENT '授权对象openid'",
            'group_id' => "varchar(100) NULL DEFAULT '' COMMENT '组别'",
            'bloc_id' => "int(11) NULL",
            'store_id' => "int(11) NULL",
            'status' => "tinyint(4) NULL DEFAULT '1' COMMENT '状态[-1:删除;0:禁用;1启用]'",
            'create_time' => "int(10) unsigned NULL DEFAULT '0' COMMENT '创建时间'",
            'updated_time' => "int(10) unsigned NULL DEFAULT '0' COMMENT '修改时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT COMMENT='api_授权秘钥表'");
        
        /* 索引设置 */
        $this->createIndex('access_token','{{%api_access_token}}','access_token',1);
        $this->createIndex('refresh_token','{{%api_access_token}}','refresh_token',1);
        
        
        /* 表数据 */
        $this->insert('{{%api_access_token}}',['id'=>'45','refresh_token'=>'Bkbt-icls3u0NaMsDIhv1ZkjENmqQfdT_1591177246','access_token'=>'5IcA3tr7VWC4iA-4Ew9U6CJy9IwmNgYY_1591177246','member_id'=>'76','openid'=>'oE5EC0aqNTAdAXpPfikBpkHiSG1o','group_id'=>'1','bloc_id'=>'0','store_id'=>'0','status'=>'1','create_time'=>'1591177246','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'46','refresh_token'=>'lnbofuY-t79Fo5nvwldqz-QSL3H_EAVU_1586982257','access_token'=>'Zqoj7sjc7WMQ4Uo8uJ8ihJpUCCW1BuIv_1586982257','member_id'=>'81','openid'=>'oE5EC0TLr-jpEqRV-x7WqjPax7jA','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1586982257','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'47','refresh_token'=>'Vhb-QrR9nIfVc_Gir-6noFi3CuQZzZOB_1587700016','access_token'=>'wXXybp_ZOvepJXZzp891wZsbUkx2uFri_1587700016','member_id'=>'82','openid'=>'oE5EC0Uvc4QkT_TgcfhgSfpO4LLQ','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587700016','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'48','refresh_token'=>'VUj-Aowcx7fCdtycshtWHbsNPQTe6Aqm_1587299157','access_token'=>'gS6mTMBTvXIZoPrxgRBToBKQXkAcrxiu_1587299157','member_id'=>'83','openid'=>'oE5EC0S5K7EMf1tCf1S3tIBXIbCw','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587299157','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'49','refresh_token'=>'rFmZ94DBs0x46pBMQzoiBhF540yYsIFN_1587624234','access_token'=>'s958XXfU6BFiUIIAE5rXwWxmQBeHqhCC_1587624234','member_id'=>'79','openid'=>'','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587624234','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'50','refresh_token'=>'pr4TugYf2HSiWPkPHdQ9JyhiiARSHzsW_1587000233','access_token'=>'fd9V1cgT-o8mY8fD3KOo87u0eO6GWTfl_1587000233','member_id'=>'84','openid'=>'oE5EC0U4u2ZwyzuwckZrXPBolhnQ','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587000233','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'51','refresh_token'=>'3FBrd1g8rL5OACDz62x_u0aXAun4HK7R_1587009910','access_token'=>'KJ7hNHOZqKMdwfQYGVbQYbYeMVwDJC9t_1587009910','member_id'=>'85','openid'=>'oE5EC0WVJ2F3utO_BOm6LluEuN8c','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587009910','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'52','refresh_token'=>'8pJ1wl8sntVhpDtTC9IaN-HSbDV4ZNdm_1587012328','access_token'=>'0QdH_wDQulxrSAYRyFchY-xVBct_xtb8_1587012328','member_id'=>'86','openid'=>'oE5EC0T_WvEAoNipm3VSSPRzdvkY','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587012328','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'53','refresh_token'=>'6MBSZkN0lOjfnJNY5_dHxCY5z0MJh-AF_1587027160','access_token'=>'-qgoHpG_4YE7AXPZB-gKvVroMglz0FD1_1587027160','member_id'=>'87','openid'=>'oE5EC0b6D5Y4rbunZ898h-xcS6D8','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587027160','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'54','refresh_token'=>'GDfIJKyOEnvzgAwWKGut1bM0ZGuhWUTv_1587701480','access_token'=>'qkdxPmjPikZqDC9yWPiAOmSFAitq94Nl_1587701480','member_id'=>'80','openid'=>'','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587701480','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'55','refresh_token'=>'zJf2Wb4QNjgDdske4iYIaULwU6xhnxDT_1587040257','access_token'=>'r76m0zajOsTcXiv8rCY3JyOCGivwwnkl_1587040257','member_id'=>'88','openid'=>'oE5EC0WsKZhxybJwn8JYdHRg3RQ4','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587040257','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'56','refresh_token'=>'1I_Yg4VG1cAMm3WxsGvkNU0nldmBQnLl_1587042026','access_token'=>'rS6H5SIAauUaJin-z6_vI_Z_gJo2e-6o_1587042026','member_id'=>'89','openid'=>'oE5EC0RVdf3EtKdWYEpJ2kQbDxwY','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587042026','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'57','refresh_token'=>'vxveHD7a7qmMTVaFMc6AgCCmwvLGTNsi_1587085724','access_token'=>'rBLHFcdEgsq-sO3JTPbPfYbvYu2IO5MV_1587085724','member_id'=>'90','openid'=>'oE5EC0W553U-JFQL3uczY04PMAnk','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587085724','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'58','refresh_token'=>'_JrKwTMrD1Tbg3wFOjOHFGGoMONO3TO1_1587097119','access_token'=>'aZycKWpyNdvpbvqF5ohtCW1gAV_5tovT_1587097119','member_id'=>'91','openid'=>'oE5EC0UUZxACRdtFZdO_Hfl5FkpE','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587097119','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'59','refresh_token'=>'2tEDcBlROIh61HkRHuZVmMiPgxAjQoBE_1587097248','access_token'=>'T95Fq-3OCDk-n9OdkBwiWvW5cZQU5DxS_1587097248','member_id'=>'92','openid'=>'oE5EC0WCXthR-YCz6nD_YwaMBlbQ','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587097248','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'60','refresh_token'=>'ss4HoMPykG4S9X8nQFjGg2wXC8sgIcr4_1587188717','access_token'=>'MA2o5tfSDtNMz1tZfrzx6ToiPW2Q9-D6_1587188717','member_id'=>'93','openid'=>'oE5EC0QznY0pnfvROYus5_4Wcc5I','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587188717','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'61','refresh_token'=>'XqGC2FjshB7sIDFNAKp9wNdcbvBAxfgB_1587219784','access_token'=>'_peWoRzDvxs7A24SZ8hGa6Ux611aK7F1_1587219784','member_id'=>'94','openid'=>'oE5EC0ZnVtq0pi_hAlyRzcE8oLOM','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587219784','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'62','refresh_token'=>'-ncV0XkKFw-FpbtV-IEPoDJT7yCpF1B__1587280987','access_token'=>'f_LPnyyhX0DIfWfzlRR49Mnu6Z_NzubR_1587280987','member_id'=>'95','openid'=>'oE5EC0azpuPFyRcyIbxPkE3zRk5w','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587280987','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'63','refresh_token'=>'2WDNFPyVYqTr2O42XFGXPoDJOAjWIHP1_1587380962','access_token'=>'Yn63tuRHBoOPz_9ir00MFbA80SDb30yr_1587380962','member_id'=>'96','openid'=>'oE5EC0V37yTXf0P_GUKb2KlrWG5s','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587380962','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'64','refresh_token'=>'0gvuWHsToo9CwGVCNmfj5HeOJFdyoa6c_1587723980','access_token'=>'fqrGTKBP2NiIOSHSfSwztxhdb_TKD-cu_1587723980','member_id'=>'97','openid'=>'oE5EC0YZmEGxxdRNlY6KPT4MMXvw','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587723980','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'65','refresh_token'=>'NjhFzCrOcFtdSxA7995-jcEd1WTnmkUP_1587518780','access_token'=>'G3ZT-NBsFXYHqaTSmd_C286HAnS5QeHF_1587518780','member_id'=>'98','openid'=>'oE5EC0cmqtVK_Qs8JLTaFCYQ7rX8','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587518780','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'66','refresh_token'=>'WpsbSfa9yvuRBZux66p5GwjqexX2fzwV_1587538658','access_token'=>'aFqo3bnXMrSP9qVCFO-9AgSOU0wv6jdk_1587538658','member_id'=>'99','openid'=>'oE5EC0e33D-2Z6VZVnCw4DjSsDxo','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587538658','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'67','refresh_token'=>'HweFirI95Lz9KSkYh-ZpxjF2mdxrh8OP_1587548101','access_token'=>'H1dFxqkpE6iOIwNvRLshQQnGrVNYERra_1587548101','member_id'=>'100','openid'=>'oE5EC0Wqyg790huSMiaMwmKpAyGw','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587548101','updated_time'=>'0']);
        $this->insert('{{%api_access_token}}',['id'=>'68','refresh_token'=>'5DVv5o9os7pTbvQ0FjJ-Epscydxucqko_1587752939','access_token'=>'MIWsWyJrbPyYhtsD6jIg9oMiPxotJvTT_1587752939','member_id'=>'101','openid'=>'oE5EC0VxLFXLk44_vWuL8t2FyuXI','group_id'=>'1','bloc_id'=>NULL,'store_id'=>NULL,'status'=>'1','create_time'=>'1587752939','updated_time'=>'0']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%api_access_token}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

