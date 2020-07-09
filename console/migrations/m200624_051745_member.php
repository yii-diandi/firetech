<?php

use yii\db\Migration;

class m200624_051745_member extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%member}}', [
            'member_id' => "int(11) unsigned NOT NULL AUTO_INCREMENT",
            'level' => "int(11) NULL",
            'openid' => "varchar(255) NOT NULL DEFAULT ''",
            'store_id' => "int(11) NULL",
            'bloc_id' => "int(11) NOT NULL",
            'username' => "varchar(30) NULL",
            'mobile' => "bigint(11) NULL",
            'address' => "varchar(255) NULL",
            'nickName' => "varchar(255) NOT NULL DEFAULT ''",
            'avatarUrl' => "varchar(255) NOT NULL DEFAULT ''",
            'gender' => "tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '0男1女'",
            'country' => "varchar(50) NOT NULL DEFAULT ''",
            'province' => "varchar(50) NOT NULL DEFAULT ''",
            'status' => "int(11) NULL DEFAULT '0'",
            'city' => "varchar(50) NOT NULL DEFAULT ''",
            'address_id' => "int(11) unsigned NOT NULL DEFAULT '0'",
            'wxapp_id' => "int(11) unsigned NOT NULL DEFAULT '0'",
            'verification_token' => "varchar(255) NULL",
            'create_time' => "bigint(11) unsigned NOT NULL DEFAULT '0'",
            'update_time' => "bigint(11) unsigned NOT NULL DEFAULT '0'",
            'auth_key' => "varchar(32) NOT NULL",
            'password_hash' => "varchar(255) NOT NULL",
            'password_reset_token' => "varchar(255) NULL",
            'PRIMARY KEY (`member_id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT");
        
        /* 索引设置 */
        $this->createIndex('openid','{{%member}}','openid',0);
        
        
        /* 表数据 */
        $this->insert('{{%member}}',['member_id'=>'76','level'=>'1','openid'=>'oE5EC0aqNTAdAXpPfikBpkHiSG1o','store_id'=>'0','bloc_id'=>'0','username'=>'王春生','mobile'=>'17778984690','address'=>'','nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'LOUHYVzzbOsjJqRLZsyJy1bUV9lEzeDm_1591169367','create_time'=>'1584005614','update_time'=>'1591169366','auth_key'=>'6yP7Yhvb63LQo4lP8Q9afWSkJgnEofUv','password_hash'=>'$2y$13$5Vz6dEkrtQYpPnxxxecLG./iqXYj5FaPDt761CTN.KLDNpAh46jY.','password_reset_token'=>'obU4Vd09ToTDi8q9VEdT_XOasYUVaujL_1591169366']);
        $this->insert('{{%member}}',['member_id'=>'77','level'=>'1','openid'=>'oE5EC0afM4V4brNtOqODsq8EnYuQ','store_id'=>NULL,'bloc_id'=>'0','username'=>'心雨','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'HGfBlGl8Q6pH0Zbr2spMCqWE44lvHLX6_1586935837','create_time'=>'1586935836','update_time'=>'1586935836','auth_key'=>'BTqhWRp3sbeG_e0v0qyOempilPyWrqxo','password_hash'=>'$2y$13$9znBNU5WMdcCYhMP41T0h.yOG36Y6xZFeOZzvw0Q5dentiNHnx5Ly','password_reset_token'=>'aZzlBOCKqK13jgIKxH_4ISUlfB_i-8b7_1586935837']);
        $this->insert('{{%member}}',['member_id'=>'78','level'=>'1','openid'=>'oE5EC0XZjjKrQXgKc_ONaHO7nu8U','store_id'=>NULL,'bloc_id'=>'0','username'=>'冯教授','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'_IHfaZRnQhBdJ2iKwPlfQDM_oobJLEaH_1586938161','create_time'=>'1586938161','update_time'=>'1586938161','auth_key'=>'NbuwjxPh6vXzSLaBN3Iq4fDSHmKXD5BR','password_hash'=>'$2y$13$5XbU4va1BYafWpG8nCdwF.c6LXvwcA.glVBEojmQGbAkXpYRPEnxm','password_reset_token'=>'7phXmrVb9UDRLuUYGVC7QZy4uq4Jx9Bm_1586938161']);
        $this->insert('{{%member}}',['member_id'=>'79','level'=>'1','openid'=>'oE5EC0aRDVDME1L39dYWzt9bUGlI','store_id'=>NULL,'bloc_id'=>'0','username'=>'盛科','mobile'=>'15600388714','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'z8XjkW94HB2efhUaaZTDK_vUgRB2JC7h_1586938850','create_time'=>'1586938849','update_time'=>'1586938849','auth_key'=>'812_g-ek2Lt1P4VjOtf-mRpI3-cveSiO','password_hash'=>'$2y$13$GnUAPChzzd8YxpT3yK5RqedbNmwEd1o2QXEN.au.tjkxhikCi6XZm','password_reset_token'=>'Nvq_YScdm-hAK6cNtPE2Q5Y8byrpHIOD_1586938850']);
        $this->insert('{{%member}}',['member_id'=>'80','level'=>'1','openid'=>'oE5EC0eK9X-hguDmEkSqLpakXHIE','store_id'=>NULL,'bloc_id'=>'0','username'=>'callzjk','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'mIMshxdka-fiMIeY3cKcOaFeYAuXRExh_1586941211','create_time'=>'1586941211','update_time'=>'1586941211','auth_key'=>'fgkLU6INwFC8Z9xk9SQKUwHLOJGfxvX8','password_hash'=>'$2y$13$/FQasaZJhDDO19xZcb745u.CBY0LgVpzamH9pASgCsqHZjOp0Y6rK','password_reset_token'=>'YvJfQWR229CanLkgAnRkCuH36hp-9w3O_1586941211']);
        $this->insert('{{%member}}',['member_id'=>'81','level'=>'1','openid'=>'oE5EC0TLr-jpEqRV-x7WqjPax7jA','store_id'=>NULL,'bloc_id'=>'0','username'=>'魏剑帆','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'jYZla-ATHyN68eBPAEyYQ8Gi83722jVg_1586982257','create_time'=>'1586982257','update_time'=>'1586982257','auth_key'=>'h2zFSRcWU4vYrY6TQlpq7b8JsJ0Dc7L5','password_hash'=>'$2y$13$EppJ4zs9k5qJgzbWiZpDou4k6XKHjegQb2hGxv7VdygpMmPSYszDa','password_reset_token'=>'x2LQe7VJ2aBRP3JEPb6K-1XhMyqQ_8O8_1586982257']);
        $this->insert('{{%member}}',['member_id'=>'82','level'=>'1','openid'=>'oE5EC0Uvc4QkT_TgcfhgSfpO4LLQ','store_id'=>NULL,'bloc_id'=>'0','username'=>'赵博','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'8AVOURHN_tWXEAADZ_2vaByPKlztwTcD_1586999119','create_time'=>'1586999118','update_time'=>'1586999118','auth_key'=>'GsYkPT_tzZmek1MvLksXNOVCsxNichJf','password_hash'=>'$2y$13$mreeHcE5nXkH6s0H/uiIj.7UHIUEhdFsmsgl4B80Bpg9waPnU/YFW','password_reset_token'=>'nF3ApTwwjOx1YQphmdsh6U-_PppEOO_b_1586999119']);
        $this->insert('{{%member}}',['member_id'=>'83','level'=>'1','openid'=>'oE5EC0S5K7EMf1tCf1S3tIBXIbCw','store_id'=>NULL,'bloc_id'=>'0','username'=>'ruibaofu','mobile'=>'13513366999','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'-FypVMOyPcojmiNQwwjTty_jMLAzS5E5_1586999197','create_time'=>'1586999197','update_time'=>'1586999197','auth_key'=>'DYVKJ4MG_a-Tx3fx9y_TfxJEcN4jMPv5','password_hash'=>'$2y$13$.43Y5ity0B3Gno9M9J3r5e/7rcgm6RKECcEsJBL/M6rD6lJ1THB5a','password_reset_token'=>'P1S1Sp1JcKzC6JXiF0phM_WeYkdPUb6A_1586999197']);
        $this->insert('{{%member}}',['member_id'=>'84','level'=>'1','openid'=>'oE5EC0U4u2ZwyzuwckZrXPBolhnQ','store_id'=>NULL,'bloc_id'=>'0','username'=>'Sam','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'K7eCPLgRGj6fBUTWTSddVTDh_lq7_szH_1587000233','create_time'=>'1587000233','update_time'=>'1587000233','auth_key'=>'v7zRu-EkyRMSHS0UsIJW58EbRnGAG630','password_hash'=>'$2y$13$JhxvYZjZT9PHXJ5lhx.E5eYn4nMqMeHGoG4nNkan/yeFXfuZ/QsNO','password_reset_token'=>'IiH-F32nioh6NAAYGtzjt-MEpvToLCor_1587000233']);
        $this->insert('{{%member}}',['member_id'=>'85','level'=>'1','openid'=>'oE5EC0WVJ2F3utO_BOm6LluEuN8c','store_id'=>NULL,'bloc_id'=>'0','username'=>'S','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'Ow47vmThaDQMLNdjEthyN9O9sHVdH3LW_1587009910','create_time'=>'1587009909','update_time'=>'1587009909','auth_key'=>'gOIIUeaKc8-QjE6Jh2VGIVHHoEvaPmYa','password_hash'=>'$2y$13$DvpmC/vJI1QfIN2kXH52NOibiKvBijqbCPNiEguSBLzIMs6UwABzy','password_reset_token'=>'6LwLxYYPdmN5y4-z_4pb20APe3RIgcEt_1587009910']);
        $this->insert('{{%member}}',['member_id'=>'86','level'=>'1','openid'=>'oE5EC0T_WvEAoNipm3VSSPRzdvkY','store_id'=>NULL,'bloc_id'=>'0','username'=>'崔新道','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'H2hL-Q0jgT607dMyXCpuHAePcMz_R36-_1587012328','create_time'=>'1587012327','update_time'=>'1587012327','auth_key'=>'MEAi44sd2iDMkWgrwLJl_gbh3kWQUKRH','password_hash'=>'$2y$13$LOva1fXx.H.WCCMmSQyuk.scFO.niKfKN5/uLePvSGfp2c5fU02VW','password_reset_token'=>'KTRlhjEWEYNZ2nqf5SyMqDm2CXnCKiO9_1587012328']);
        $this->insert('{{%member}}',['member_id'=>'87','level'=>'1','openid'=>'oE5EC0b6D5Y4rbunZ898h-xcS6D8','store_id'=>NULL,'bloc_id'=>'0','username'=>'阿白','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'FX4KfKyiHw36xmxZ7q_2SV_C68ZACyzt_1587027160','create_time'=>'1587027160','update_time'=>'1587027160','auth_key'=>'oIciN-MAF89XKtdVZH_567MkgcToPxcJ','password_hash'=>'$2y$13$d97LA/40HzH88rh3Foq5ouToSbJZmk927RvTukyPQiow4s77aRwgy','password_reset_token'=>'tP6mNHuSOyHvfLwtGQFckK0lr03kRzdu_1587027160']);
        $this->insert('{{%member}}',['member_id'=>'88','level'=>'1','openid'=>'oE5EC0WsKZhxybJwn8JYdHRg3RQ4','store_id'=>NULL,'bloc_id'=>'0','username'=>'莫思','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'WUCHWu7FQXmHhmaBI0hl6kvjshRcEuj8_1587040257','create_time'=>'1587040257','update_time'=>'1587040257','auth_key'=>'SMyEuXI3LkHGrQieucFx1Iw78A3m7Jrb','password_hash'=>'$2y$13$n/SiuBEdViGzoiakOQTwjODZBdP9PdIpQ81BW1H6AphWpnuxojeVi','password_reset_token'=>'UbdyiXSm5NOC9mxXAAHw-PdWS5yqTAMD_1587040257']);
        $this->insert('{{%member}}',['member_id'=>'89','level'=>'1','openid'=>'oE5EC0RVdf3EtKdWYEpJ2kQbDxwY','store_id'=>NULL,'bloc_id'=>'0','username'=>'王昌栋','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'Ltn1w9BHaqahs18TYcKBonMmpA4sHtyD_1587042026','create_time'=>'1587042025','update_time'=>'1587042025','auth_key'=>'l1e8-lo74giTLmO2mRaMpktj4-xXmik7','password_hash'=>'$2y$13$xo2DV3pSZxprt8b1pxO3Eer/KqsZXtb93uAnVP9/Cf9le6AVQvMhC','password_reset_token'=>'l8yVHEQCWTT3Kn-UZU5Sk0vnRHFa10CZ_1587042026']);
        $this->insert('{{%member}}',['member_id'=>'90','level'=>'1','openid'=>'oE5EC0W553U-JFQL3uczY04PMAnk','store_id'=>NULL,'bloc_id'=>'0','username'=>'judy醒妞','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'rhlg8O9ffIXRZxywiHLscOkCWNsmQB4P_1587085724','create_time'=>'1587085724','update_time'=>'1587085724','auth_key'=>'cDKfgxRDxRvJEbnvxBUmvkU_5LPYPtMO','password_hash'=>'$2y$13$KiXwz1mDnMZXPVLGbxn.s.UAK3e1OT04QMNmJqguObKUHHJKV.QG2','password_reset_token'=>'5WO-IM0jKSBZHoGvuZOzFsVvd_r-0wZh_1587085724']);
        $this->insert('{{%member}}',['member_id'=>'91','level'=>'1','openid'=>'oE5EC0UUZxACRdtFZdO_Hfl5FkpE','store_id'=>NULL,'bloc_id'=>'0','username'=>'惠协发','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'1-MLTpzD9YJQgN3T76R4VHO4Xa19n2F8_1587097119','create_time'=>'1587097119','update_time'=>'1587097119','auth_key'=>'EM4AZW5ohcJ8YO6uqP5tvHWKaW-mVBma','password_hash'=>'$2y$13$Wmg921guVULJFiTfv/XhDO0grX.y3j3uX1lgjmbmEuYiLvvITbgky','password_reset_token'=>'oxMJ6O2wyxX3uCL3Y-cz6QR6GA_BKpNb_1587097119']);
        $this->insert('{{%member}}',['member_id'=>'92','level'=>'1','openid'=>'oE5EC0WCXthR-YCz6nD_YwaMBlbQ','store_id'=>NULL,'bloc_id'=>'0','username'=>'董','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'w5fgviJYoYSi6hGlvf9ZPHI-6345-QNI_1587097248','create_time'=>'1587097248','update_time'=>'1587097248','auth_key'=>'iaDZTc4vMu6mUV8GIgOBOsY7Hk7PFqqr','password_hash'=>'$2y$13$defZuV15jtgb1n86cFgGoeIIUlEuLg7BVcE3vVCzl6RzBMEp4r6D.','password_reset_token'=>'LrZunr10RLUPkAxpLhkmGf-ine5t9_6u_1587097248']);
        $this->insert('{{%member}}',['member_id'=>'93','level'=>'1','openid'=>'oE5EC0QznY0pnfvROYus5_4Wcc5I','store_id'=>NULL,'bloc_id'=>'0','username'=>'周周','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'On7b8PsZrw82BDmAIw7fht6Hhh4wfvx6_1587188717','create_time'=>'1587188716','update_time'=>'1587188716','auth_key'=>'VZMlVC1phfEYo0wuinwkwKE-eMrl6B5j','password_hash'=>'$2y$13$GYDgXMNH76K.CLUTb/QA6.SgxX2uLAWuYp6JFiD3UlX54Fu1UK4jC','password_reset_token'=>'Uq4VX9r1s454VHYJ2cGbVCVuyX0RisTq_1587188717']);
        $this->insert('{{%member}}',['member_id'=>'94','level'=>'1','openid'=>'oE5EC0ZnVtq0pi_hAlyRzcE8oLOM','store_id'=>NULL,'bloc_id'=>'0','username'=>'森','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'j2w85_sVkmN3KO1UVpZew-kXvIpee5m7_1587219784','create_time'=>'1587219784','update_time'=>'1587219784','auth_key'=>'wGwHh2iBaQhmQxILQdoyS1XGGkWdmVBN','password_hash'=>'$2y$13$mPh..edy8TqctSN/BUx5Pu.EuuoffvrGWngD1sJ4texk9jTuD27Tu','password_reset_token'=>'D0uFdjBUTTeQpMH2kfur46w4-GVvLx2l_1587219784']);
        $this->insert('{{%member}}',['member_id'=>'95','level'=>'1','openid'=>'oE5EC0azpuPFyRcyIbxPkE3zRk5w','store_id'=>NULL,'bloc_id'=>'0','username'=>'李珮心','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'UczyD5hWym9OxUDaippTixB7GAQ-R1E0_1587280987','create_time'=>'1587280987','update_time'=>'1587280987','auth_key'=>'oib-vxoO_JTKThYq9mOO1BRevC3G7fyF','password_hash'=>'$2y$13$N0ntfcKMfypeG4h.4Xy9z.ItsnOyVTyPUMS8WKOd79hFJF/VThR8m','password_reset_token'=>'1-eN7xD1KXBzZgcq4AB18JRltINAc2OD_1587280987']);
        $this->insert('{{%member}}',['member_id'=>'96','level'=>'1','openid'=>'oE5EC0V37yTXf0P_GUKb2KlrWG5s','store_id'=>NULL,'bloc_id'=>'0','username'=>'清风明月','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'11yEBw_ayoU5A90CCzhMUmKThKP0d8Qy_1587380962','create_time'=>'1587380962','update_time'=>'1587380962','auth_key'=>'o7Mul1Dyk7tlNKPdLBpUmEv4HSXhRJWK','password_hash'=>'$2y$13$OMMRs.Pl8N.ZdJXaoy0bo.nFukBVOzsIWLG5a7jyRaNbqhQGPk7yK','password_reset_token'=>'AvvWXWrRAp0THrhBpUtK7IBPgwENAG_F_1587380962']);
        $this->insert('{{%member}}',['member_id'=>'97','level'=>'1','openid'=>'oE5EC0YZmEGxxdRNlY6KPT4MMXvw','store_id'=>NULL,'bloc_id'=>'0','username'=>'达柯店','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'aG-Y-w86S8VBKeP4nzV76AB-9n1AA-ca_1587509316','create_time'=>'1587509315','update_time'=>'1587509315','auth_key'=>'vyi5whg7C6WXwYy5rhdh3_3zqEhmh087','password_hash'=>'$2y$13$fIG95KKB36PcUnhZpT6hn.9OvnliIXGvkOZc1YTcR.03kTXMMDXZS','password_reset_token'=>'3BOtYs7v1I91PNwSLcX2ZK9AT78h47uX_1587509316']);
        $this->insert('{{%member}}',['member_id'=>'98','level'=>'1','openid'=>'oE5EC0cmqtVK_Qs8JLTaFCYQ7rX8','store_id'=>NULL,'bloc_id'=>'0','username'=>'阿白','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'rqUgDq1eytecIEBtjFyYtx-pFrlutFCk_1587518780','create_time'=>'1587518780','update_time'=>'1587518780','auth_key'=>'hpbFh0x9cPC7b3ZvPKyFcK18Ib7RUjNz','password_hash'=>'$2y$13$DNSdB79klPXRQp50FSAkZ.JgeN2dqjNN651.7T30BU9I6KuMlINAu','password_reset_token'=>'OIs2PEujq87zK8eGaupFaMEozjBD-ag1_1587518780']);
        $this->insert('{{%member}}',['member_id'=>'99','level'=>'1','openid'=>'oE5EC0e33D-2Z6VZVnCw4DjSsDxo','store_id'=>NULL,'bloc_id'=>'0','username'=>'自强不息','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'DshF7prnE9mE52-TKzdBo2Kd_l7iaP_1_1587538658','create_time'=>'1587538658','update_time'=>'1587538658','auth_key'=>'DgjQ69rvQzjxRO82jIps-NB9o3biyLg3','password_hash'=>'$2y$13$1gbfnz5WNdkrJQQkSxvPl.q6.0ypNoGLuLy8D1ZcADyiLZuf/lhcS','password_reset_token'=>'A9-o6HCELP74yfxWP9b_LIehfJp10HTD_1587538658']);
        $this->insert('{{%member}}',['member_id'=>'100','level'=>'1','openid'=>'oE5EC0Wqyg790huSMiaMwmKpAyGw','store_id'=>NULL,'bloc_id'=>'0','username'=>'、New_lifeZ','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'9TBQ-D9P1ehjr4v6T75eFMky6k629Y2K_1587548101','create_time'=>'1587548100','update_time'=>'1587548100','auth_key'=>'fgrIdwCo6kKCLR3NLhZNY7aJF2XmQ6_4','password_hash'=>'$2y$13$.aJWqJFOBmff/thk.t0tyObInDi.78PjM1SRXJFLiBPq5SZw4swie','password_reset_token'=>'5bwmlI8hXjuIeTYWgqQDhV1PrXg6ifsx_1587548101']);
        $this->insert('{{%member}}',['member_id'=>'101','level'=>'1','openid'=>'oE5EC0VxLFXLk44_vWuL8t2FyuXI','store_id'=>NULL,'bloc_id'=>'0','username'=>'Dobby','mobile'=>'0','address'=>NULL,'nickName'=>'','avatarUrl'=>'','gender'=>'0','country'=>'','province'=>'','status'=>'0','city'=>'','address_id'=>'0','wxapp_id'=>'0','verification_token'=>'oAZ68w2nUbGQVN4NtsCNCcEO8KAqckz3_1587752939','create_time'=>'1587752938','update_time'=>'1587752938','auth_key'=>'_lJ7JoFB0AKy-iomWhkiCc-TSgU2IGBA','password_hash'=>'$2y$13$5qneg.9eIc9jko8W2cV22O.ZGuq800JB202Nnl.94Lengu3.m76q2','password_reset_token'=>'53rgPb1SpmUix8ercezKnBpDeo5j9iFY_1587752939']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%member}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

