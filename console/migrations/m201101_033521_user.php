<?php

use yii\db\Migration;

class m201101_033521_user extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%user}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'username' => "varchar(255) NOT NULL",
            'auth_key' => "varchar(32) NOT NULL",
            'password_hash' => "varchar(255) NOT NULL",
            'password_reset_token' => "varchar(255) NULL",
            'email' => "varchar(255) NOT NULL",
            'store_id' => "int(11) NULL DEFAULT '0'",
            'bloc_id' => "int(11) NULL DEFAULT '0'",
            'status' => "smallint(6) NOT NULL DEFAULT '10'",
            'created_at' => "int(11) NOT NULL",
            'updated_at' => "int(11) NOT NULL",
            'verification_token' => "varchar(255) NULL",
            'last_time' => "int(11) NULL",
            'avatar' => "varchar(255) NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC");
        
        /* 索引设置 */
        $this->createIndex('username','{{%user}}','username',1);
        $this->createIndex('email','{{%user}}','email',1);
        $this->createIndex('password_reset_token','{{%user}}','password_reset_token',1);
        
        
        /* 表数据 */
        $this->insert('{{%user}}',['id'=>'1','username'=>'2192138785@qq.com','auth_key'=>'NGUmVtGWb0UcEbCpJRBGi9sNGlxFDh2A','password_hash'=>'$2y$13$d6VvsBsK1TUX5m/lqOYXfOyFrAS2XaVwErglmkcUN20BD4wTioZ6q','password_reset_token'=>'HkvxxYGTgDFFAODVLAEuMIliDNSlJPYl_1592302577','email'=>'2192138785@qq.com','store_id'=>'32','bloc_id'=>'4','status'=>'10','created_at'=>'1576871151','updated_at'=>'1593409320','verification_token'=>'MZNKkOQL1eDMOgEUeb9HP7RFiU57r7EO_1576871151','last_time'=>'1590021766','avatar'=>'202006/29/000ecfba-83ec-34d2-8053-d3c8d87a89a3.jpg']);
        $this->insert('{{%user}}',['id'=>'9','username'=>'1065461385@qq.com','auth_key'=>'FUht96Sul95N8TFYKY8X0EHinZwlvUtJ','password_hash'=>'$2y$13$59z2ild711NIbyBCa4d3JObTqRVKbTN5ZfJc4qFQEQ0xIq6.DLdd6','password_reset_token'=>'nWtkDL0XP-Fkh70UL-BS3LgFdu_bQNNC_1586862613','email'=>'1065461385@qq.com','store_id'=>'0','bloc_id'=>'0','status'=>'10','created_at'=>'1582347562','updated_at'=>'1586862613','verification_token'=>'FQfBgfi_eNi4TYRrjMH553TdENmIrTvp_1582347562','last_time'=>NULL,'avatar'=>'202002/22/d4639524-f5ef-3a2f-9ee6-914a1d8049b7.png']);
        $this->insert('{{%user}}',['id'=>'10','username'=>'ceshi','auth_key'=>'wYDEiXVZl-_njSqJQGO_zlErztscMFVW','password_hash'=>'$2y$13$9V1VXn0Gy.k84PfHDkFezOxbMsEIHhwtLYRKTjnCuATB.gv/XBCcu','password_reset_token'=>NULL,'email'=>'123@qq.com','store_id'=>'0','bloc_id'=>'0','status'=>'10','created_at'=>'1586670383','updated_at'=>'1586670383','verification_token'=>NULL,'last_time'=>NULL,'avatar'=>NULL]);
        $this->insert('{{%user}}',['id'=>'11','username'=>'admin','auth_key'=>'ddkNMK6gRRPa82aYfvTfzmQ0xYHyZT-i','password_hash'=>'$2y$13$A2Syvv6yh7SmMc3TAQSwx.UHQoaNJpTTCuKIFmgOuV3EV6cyHNvSW','password_reset_token'=>'Mys4NG_YYujEAlOeNQY9MTEdyQ-ErBkU_1604125010','email'=>'admin@163.com','store_id'=>'0','bloc_id'=>'0','status'=>'10','created_at'=>'1586678074','updated_at'=>'1586678074','verification_token'=>NULL,'last_time'=>'1604125010','avatar'=>NULL]);
        $this->insert('{{%user}}',['id'=>'12','username'=>'dfg','auth_key'=>'-q8yp_xLpRpQHnXrtci6OiwU113VrUWr','password_hash'=>'$2y$13$yMCDqPfbNc15HdAOSB7EH.g3AikIM4zT8R/Z3.oS4ck9JnRS6AIaK','password_reset_token'=>NULL,'email'=>'ss@q.com','store_id'=>'0','bloc_id'=>'0','status'=>'9','created_at'=>'1586935807','updated_at'=>'1586935807','verification_token'=>'F2v8oKETuclP7zej-9UZn4MRDWv80G6J_1586935807','last_time'=>NULL,'avatar'=>NULL]);
        $this->insert('{{%user}}',['id'=>'13','username'=>'diandi','auth_key'=>'v8bGsV07bn4TF4nvfT5JiYh6Xovk2TM9','password_hash'=>'$2y$13$lp29ChORcnGU6/KBkW6I/.FmdfE8HeIeoy1chNsLH3ZYJdoYvG8Tm','password_reset_token'=>'9gRPMUg9s9_PCIXw-UbsYrAOcgzy7XO7_1587521075','email'=>'diandi@163.com','store_id'=>'0','bloc_id'=>'0','status'=>'10','created_at'=>'1587189038','updated_at'=>'1587189107','verification_token'=>NULL,'last_time'=>'1587521075','avatar'=>'202004/18/d8295118-6da2-30ce-ace2-311d6d1f4bea.jpg']);
        $this->insert('{{%user}}',['id'=>'14','username'=>'order','auth_key'=>'OOAkfNC58qLFiZ76FtD__rPlPXHXU3tZ','password_hash'=>'$2y$13$AKfeDL9UR3L8fZ4lkwVJCOduYsVn/UBH/4OOr1wQr4MXkxOqeQnkS','password_reset_token'=>'US1xaHkZaPhTKnnTmayIx8bq-J3fZbP6_1596267977','email'=>'order@163.com','store_id'=>'0','bloc_id'=>'0','status'=>'10','created_at'=>'1587788493','updated_at'=>'1587788493','verification_token'=>NULL,'last_time'=>'1596267977','avatar'=>NULL]);
        $this->insert('{{%user}}',['id'=>'15','username'=>'order1','auth_key'=>'1p8L0npWi7ZOqpAMzVrmoKjVLNaECARU','password_hash'=>'$2y$13$sREbTSc9B1HkK6mH2Fw9xOpruT8rn4vzHyGZ2vNZN7fjNqc00hM5K','password_reset_token'=>'DblmKqQLvsv3-TV38WmBenfrcGc27PuS_1593221556','email'=>'123@163.com','store_id'=>'0','bloc_id'=>'0','status'=>'10','created_at'=>'1587788715','updated_at'=>'1587788715','verification_token'=>NULL,'last_time'=>'1593221556','avatar'=>NULL]);
        $this->insert('{{%user}}',['id'=>'16','username'=>'ninini','auth_key'=>'EnlngA6I8EYiCDuCDQa9CgDyYuJcvvpi','password_hash'=>'$2y$13$jQRkfZ/0ox.Qz8pGaC4vfezVSDamjsk12UJpa5Cur5MtuPdlsd8Hm','password_reset_token'=>'WLEy2GBNLhhHrJZVktQoATZysuGuPsno_1592302405','email'=>'132@qq.com','store_id'=>'28','bloc_id'=>'1','status'=>'10','created_at'=>'1589842427','updated_at'=>'1589843314','verification_token'=>NULL,'last_time'=>'1592302405','avatar'=>'202005/19/3dfb19aa-56c5-3036-a6f7-b2e187c89aa3.jpg']);
        $this->insert('{{%user}}',['id'=>'17','username'=>'hhhh','auth_key'=>'MK7mTWkeb0JwB9bUA6siWhh706fP6Wxy','password_hash'=>'$2y$13$RLIac6GqlGcVDsOlujdMhuccMuis8P0bjOBH.0n.O9gpbDHBgx6VO','password_reset_token'=>NULL,'email'=>'3232@163.com','store_id'=>'0','bloc_id'=>'0','status'=>'10','created_at'=>'1589842601','updated_at'=>'1589842601','verification_token'=>NULL,'last_time'=>NULL,'avatar'=>NULL]);
        $this->insert('{{%user}}',['id'=>'18','username'=>'ccc123','auth_key'=>'9AYOEXKgF-yVniPmfm8_UAK3cKbtSWRq','password_hash'=>'$2y$13$Bd5cQuAfp8eQTPg4IlT0E.JtD04WFBK1y.Rto3oGOBTUEc4BGbLZG','password_reset_token'=>NULL,'email'=>'ccc123@163.com','store_id'=>'0','bloc_id'=>'0','status'=>'10','created_at'=>'1590278995','updated_at'=>'1590278995','verification_token'=>NULL,'last_time'=>NULL,'avatar'=>NULL]);
        $this->insert('{{%user}}',['id'=>'19','username'=>'aaa123','auth_key'=>'k-rL5FNOlwPqCY2HXVoqCfQTl03dr6K3','password_hash'=>'$2y$13$mJBi5/.9LUW6smQBBv/mIua0x6B/BTZyxHLbXduD1WRipadxxCZqa','password_reset_token'=>NULL,'email'=>'aaa123@qq.com','store_id'=>'0','bloc_id'=>'0','status'=>'10','created_at'=>'1590279043','updated_at'=>'1590279043','verification_token'=>NULL,'last_time'=>NULL,'avatar'=>NULL]);
        $this->insert('{{%user}}',['id'=>'20','username'=>'changquan','auth_key'=>'IK15dMg0szhJhppVbpTW6ue5tcT2XiKp','password_hash'=>'$2y$13$TTOA5ntybN3u7Z8NslDT8egnZLScDHU5tO6T03/IaVii7j8Tygm3u','password_reset_token'=>'xEFnzHfg1CdkBlZpqX6aEYbbe9G4PTxV_1597116547','email'=>'changquan@163.com','store_id'=>'0','bloc_id'=>'0','status'=>'10','created_at'=>'1593569260','updated_at'=>'1593569260','verification_token'=>NULL,'last_time'=>'1597116547','avatar'=>NULL]);
        $this->insert('{{%user}}',['id'=>'21','username'=>'choujiang','auth_key'=>'b7G1jnW2Oxdj2Djnw3ClaMJAYDl_ttFh','password_hash'=>'$2y$13$iK84d4e9pDNKxHi7bbnbH.K3kL47/Qt60njkOohiultRBHR6ojdIO','password_reset_token'=>'GLzYB6wrIKhPGhy3zbfz5Rb4L64hCw7D_1593923853','email'=>'12345678@163.com','store_id'=>'0','bloc_id'=>'0','status'=>'10','created_at'=>'1593679620','updated_at'=>'1593679620','verification_token'=>NULL,'last_time'=>'1593923853','avatar'=>NULL]);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%user}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

