<?php

use yii\db\Migration;

class m200624_051745_wxapp_fans extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%wxapp_fans}}', [
            'fanid' => "int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '粉丝id'",
            'user_id' => "int(10) unsigned NOT NULL COMMENT '会员id'",
            'avatarUrl' => "varchar(255) NULL COMMENT '头像'",
            'openid' => "varchar(50) NOT NULL COMMENT 'OPENID'",
            'nickname' => "varchar(50) NOT NULL COMMENT '昵称'",
            'groupid' => "varchar(60) NULL COMMENT '分组id'",
            'fans_info' => "text NOT NULL COMMENT '所有资料'",
            'update_time' => "int(11) NULL COMMENT '更新时间'",
            'create_time' => "int(10) unsigned NULL COMMENT '创建时间'",
            'unionid' => "varchar(64) NOT NULL DEFAULT '' COMMENT 'unionid'",
            'gender' => "tinyint(4) NULL COMMENT '性别'",
            'country' => "varchar(30) NULL COMMENT '国家'",
            'city' => "varchar(30) NULL COMMENT '城市'",
            'province' => "varchar(30) NULL COMMENT '省份'",
            'secretKey' => "varchar(255) NULL COMMENT '加密键'",
            'PRIMARY KEY (`fanid`)'
        ], "ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='小程序粉丝表'");
        
        /* 索引设置 */
        $this->createIndex('uid','{{%wxapp_fans}}','user_id',0);
        $this->createIndex('openid','{{%wxapp_fans}}','openid',0);
        
        
        /* 表数据 */
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1025','user_id'=>'76','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKnoRhhSy4XfnjeCm6zu9P4hWfFuZE44ibibbSgu3ZcKsjmxH8QSZibLKPnHVJRotNlHiawBgkia7hicjDQ/132','openid'=>'oE5EC0aqNTAdAXpPfikBpkHiSG1o','nickname'=>'王春生','groupid'=>NULL,'fans_info'=>'8d7b4473c7ce14a32f2af878630cc7683b725ca19821372c5074c1c9b1621c11b75543d4efd6306bf95f1a01419a285a510b2ffa77eb70a87a80ab9526463344b8ca7f1f28699fa9f440b83a7a7c376d091e608fc6aae75f780ae1aebcfe17ad700fd26248320eecb574bba417649e4f243a3d08fbfb51805d8f42e756e987127d73d2f51133ea249a033889fc92c77c693a8357ca1cad0acc2bafe825e51dda8bb5b891c76a1c4a28968eb69e9234e1dc8727f592420323e6acc15f3743879ed58c3ecf058c1c0c434c5e7d9e99f49645f9992a0bf190b2a6f6026facabb1d2b493198db01299cb5901e263bbb04cc88c4fe07baa9771df2ae2c8d8b04fbf157ab5636c1744e5257ef7f31d476a93cf9385af25bc12a51444baeb484678d6f2fb451935de09dfa27a3877d0be58215ae6d92932f765da3ea5c47b6edec03d04745c8899bd925daa9b897ce52bb730a3ce74939a52b19349993d10b7abad823a98e4730d71d8792c0e5cde981cf372002fe8263836d2aeb68d6905633747ff4fda7b687d14fbf54b00009f7abc03037ca84a96a285a1f9b1705a0d9881fbafa3b5b6ad2648cfa105119f65451fb4f7c1884c086112f50bc9cb0dd5df3448daea81c57a7fbef4a1c050c605adc0d9b4fc5b6141db1da4e9920876bcb0201b491a97526f8f413dab07013916d9fa7bfa89b5e134f7a3e27bb107a69a7fce46e36d6e8f8448eff82350f8c8494132bc15d9b2ca5cdd067a44295e1029b83ae547f528ea46c76ad594d03c2d8ce91fc4805d86c725de42c902dd5b41061d63e91d3529ca511ae8fd8c0a78c655e1f0a2e50e34f90ea556c0d66ed2e5c1fc39a9d32e','update_time'=>'1584005615','create_time'=>'1584005615','unionid'=>'oVXl3t6x84NarbvCVCn36ZqygLp0','gender'=>'1','country'=>'China','city'=>'Xi\'an','province'=>'Shaanxi','secretKey'=>'wRyryL2p2aNLp4FAa3J2KcifJbz36Wt3']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1026','user_id'=>'77','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/PiajxSqBRaEIrGYe9aVPeIB8f3u2DWuKFTVibLshqEJriam1wibm2hnmH077RjGJicJr4FMdWKtPN854ek6bDiaegFkA/132','openid'=>'oE5EC0afM4V4brNtOqODsq8EnYuQ','nickname'=>'心雨','groupid'=>NULL,'fans_info'=>'oE5EC0afM4V4brNtOqODsq8EnYuQ','update_time'=>'1586935837','create_time'=>'1586935837','unionid'=>'oVXl3tzc5CzOucDyuZhsBWJTLp9M','gender'=>'1','country'=>'China','city'=>'Jinan','province'=>'Shandong','secretKey'=>'VpGhO261anRNbVsuOV8FpsKCMwHlMheK']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1027','user_id'=>'78','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83eq1IVmNUrZOuCib08OxSjHRbXzonicGzRAfNVoHBkwom9XSzzzicHdia7Y4PggZNqaYcw7MKeaiccwUQqQ/132','openid'=>'oE5EC0XZjjKrQXgKc_ONaHO7nu8U','nickname'=>'冯教授','groupid'=>NULL,'fans_info'=>'oE5EC0XZjjKrQXgKc_ONaHO7nu8U','update_time'=>'1586938161','create_time'=>'1586938161','unionid'=>'','gender'=>'1','country'=>'China','city'=>'Taiyuan','province'=>'Shanxi','secretKey'=>'KABJS-wXmr31M2RJQZhixY9jxDF-UmCl']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1028','user_id'=>'79','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTL9wR9gRmCjmnDP0icT7co7r3DTDGwtfeM8KCk199f4fozNnVA040Liaucj8tupnFAhthuZhyJpng8w/132','openid'=>'oE5EC0aRDVDME1L39dYWzt9bUGlI','nickname'=>'盛科','groupid'=>NULL,'fans_info'=>'oE5EC0aRDVDME1L39dYWzt9bUGlI','update_time'=>'1586938850','create_time'=>'1586938850','unionid'=>'','gender'=>'1','country'=>'China','city'=>'Chaoyang','province'=>'Beijing','secretKey'=>'RHIrRATLFArUUJE5AyFwOhY611ehLwID']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1029','user_id'=>'80','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKHictsOUwCco9ZoI5o9WU5sQ5XQBYPibpcViczFOF8hJVV7Q0NBWaa8UqichJicia42aoLPSYIwR1dQzOg/132','openid'=>'oE5EC0eK9X-hguDmEkSqLpakXHIE','nickname'=>'callzjk','groupid'=>NULL,'fans_info'=>'oE5EC0eK9X-hguDmEkSqLpakXHIE','update_time'=>'1586941211','create_time'=>'1586941211','unionid'=>'','gender'=>'1','country'=>'China','city'=>'Shijiazhuang','province'=>'Hebei','secretKey'=>'MNr_MMvxkIgEsBaNakUp-e-42dnkALLx']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1030','user_id'=>'81','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/4KGDYpurPJpHJIw4AnBVCXMpcibdNq7S81kOqJicfM12ERBGUNQibC2PEcg9a2ukJWiaGmvpTvibOUDg4kSnAkj37vg/132','openid'=>'oE5EC0TLr-jpEqRV-x7WqjPax7jA','nickname'=>'魏剑帆','groupid'=>NULL,'fans_info'=>'oE5EC0TLr-jpEqRV-x7WqjPax7jA','update_time'=>'1586982257','create_time'=>'1586982257','unionid'=>'','gender'=>'1','country'=>'China','city'=>'Guangzhou','province'=>'Guangdong','secretKey'=>'LOrmicYV0zLDIlmb_MPICuBlHJufFOVB']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1031','user_id'=>'82','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/dsZ5CFV7mCJBFAqlxyKMAX8GbEMH6ibGT1dFcuWKh1ISC4kF0ZFROypjl9I7SbQXlUzlduIoromApRVUR2rTUjg/132','openid'=>'oE5EC0Uvc4QkT_TgcfhgSfpO4LLQ','nickname'=>'赵博','groupid'=>NULL,'fans_info'=>'oE5EC0Uvc4QkT_TgcfhgSfpO4LLQ','update_time'=>'1586999119','create_time'=>'1586999119','unionid'=>'oVXl3t8FGK6X5FM2GXcb4TCYnkpA','gender'=>'1','country'=>'China','city'=>'Xi\'an','province'=>'Shaanxi','secretKey'=>'kjUiDD3JvMCIKYIMwaGoHLS9rj5p01tD']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1032','user_id'=>'83','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/zgBAkpVibX85cOopDciaf0T5jib4ksicQ0icicRBKqBRicZcKgV2Umibm6I1f5U1ibESe8C45LEOJRJNMN8ibnh2snxQp8sQ/132','openid'=>'oE5EC0S5K7EMf1tCf1S3tIBXIbCw','nickname'=>'ruibaofu','groupid'=>NULL,'fans_info'=>'oE5EC0S5K7EMf1tCf1S3tIBXIbCw','update_time'=>'1586999198','create_time'=>'1586999198','unionid'=>'oVXl3txlbzgCUucsY4NeKtfO3PN4','gender'=>'0','country'=>'','city'=>'','province'=>'','secretKey'=>'--eiyLijtCC6mSvOTVQU_ZxjHYHk0UEd']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1033','user_id'=>'84','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJgdIU1yrB35NnVIgFYhagXeblIDXsEiaSJXNBlrVOKs2JqBS65bcPxsH1Sx1YuFJRlejCsWibZlFbg/132','openid'=>'oE5EC0U4u2ZwyzuwckZrXPBolhnQ','nickname'=>'Sam','groupid'=>NULL,'fans_info'=>'oE5EC0U4u2ZwyzuwckZrXPBolhnQ','update_time'=>'1587000234','create_time'=>'1587000234','unionid'=>'','gender'=>'1','country'=>'China','city'=>'Guangzhou','province'=>'Guangdong','secretKey'=>'pLCtxoBSAShYqFC84BGShZaFewW8idPd']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1034','user_id'=>'85','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJCDUxQD2YXTsNC1rvmc3vZbQuppoFZLIBHpiaTf5cETziclLvEOeYic8qWic3nSHIGicZ9NIn7nGDOuyg/132','openid'=>'oE5EC0WVJ2F3utO_BOm6LluEuN8c','nickname'=>'S','groupid'=>NULL,'fans_info'=>'oE5EC0WVJ2F3utO_BOm6LluEuN8c','update_time'=>'1587009910','create_time'=>'1587009910','unionid'=>'','gender'=>'2','country'=>'China','city'=>'Guangzhou','province'=>'Guangdong','secretKey'=>'4T_YP8nMiiaaOIb1kZ2vqcd60N6oC6KT']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1035','user_id'=>'86','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83epd17gbNG0gahYnqAZGjRV4CgVCmjmMkLicQwLC5rBiaenvHZGAia8ic4v2pqwKc0q65D0TQo71ok7wrA/132','openid'=>'oE5EC0T_WvEAoNipm3VSSPRzdvkY','nickname'=>'崔新道','groupid'=>NULL,'fans_info'=>'oE5EC0T_WvEAoNipm3VSSPRzdvkY','update_time'=>'1587012328','create_time'=>'1587012328','unionid'=>'oVXl3t3drZnaZwyjiNj0rte6u3d0','gender'=>'1','country'=>'China','city'=>'Xi\'an','province'=>'Shaanxi','secretKey'=>'vO0xlDPLhAtHXL1sVGVR8Fh46koTTyn6']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1036','user_id'=>'87','avatarUrl'=>'https://thirdwx.qlogo.cn/mmopen/vi_32/Q3auHgzwzM4oBwTHhUGwOEIrgicfuIoh4b3rks7qI29pHjMVvN1ACTGaN5RFvuTqE5eiaukW4JjPn4RrPkjJArrA/132','openid'=>'oE5EC0b6D5Y4rbunZ898h-xcS6D8','nickname'=>'阿白','groupid'=>NULL,'fans_info'=>'oE5EC0b6D5Y4rbunZ898h-xcS6D8','update_time'=>'1587027160','create_time'=>'1587027160','unionid'=>'','gender'=>'1','country'=>'China','city'=>'','province'=>'','secretKey'=>'V6hpNFT0HDihyVm45dF5a0A1uGNj76vO']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1037','user_id'=>'88','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/IBMAkesxFckbIV52lFN3qkRPwnI0MZOtBb0hLywJKwQIYyNqkiaictM9p9McwRtksUGIZicaO1FHV2lkkMrJLKtXw/132','openid'=>'oE5EC0WsKZhxybJwn8JYdHRg3RQ4','nickname'=>'莫思','groupid'=>NULL,'fans_info'=>'oE5EC0WsKZhxybJwn8JYdHRg3RQ4','update_time'=>'1587040257','create_time'=>'1587040257','unionid'=>'','gender'=>'1','country'=>'China','city'=>'Aksu','province'=>'Xinjiang','secretKey'=>'1OZ-3RnKlqNATHajLGPe_avXsu9i-dss']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1038','user_id'=>'89','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/gFsre4I5gooUrLrWO49t3JQxATZQmIFlgcC0ucMGptauCNicBWskI96tz0icKTiazQANmWyEGibnjTEFF5KZVQhPJQ/132','openid'=>'oE5EC0RVdf3EtKdWYEpJ2kQbDxwY','nickname'=>'王昌栋','groupid'=>NULL,'fans_info'=>'oE5EC0RVdf3EtKdWYEpJ2kQbDxwY','update_time'=>'1587042026','create_time'=>'1587042026','unionid'=>'','gender'=>'2','country'=>'China','city'=>'Guangzhou','province'=>'Guangdong','secretKey'=>'PSV2iluzn9k2dm4Dc_nuikc602FlFu7S']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1039','user_id'=>'90','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/Xjxmoxk9MzuTCpRnOXCZXsRpxAuicaA3Ribna4p7crZBD5QewXpQo8nNN5XbichE8WXd8yI8CjpMfhpPqA9QLGfOg/132','openid'=>'oE5EC0W553U-JFQL3uczY04PMAnk','nickname'=>'judy醒妞','groupid'=>NULL,'fans_info'=>'oE5EC0W553U-JFQL3uczY04PMAnk','update_time'=>'1587085724','create_time'=>'1587085724','unionid'=>'','gender'=>'2','country'=>'China','city'=>'Guangzhou','province'=>'Guangdong','secretKey'=>'HFK0UabfIisFxl2Dbg7vLt5e4ODrU7Pd']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1040','user_id'=>'91','avatarUrl'=>'https://wx.qlogo.cn/mmhead/pqC7DJznNIEehU8IC5iaSiahIdiaQ9Y2KOOWaK0GGwnvMQ/132','openid'=>'oE5EC0UUZxACRdtFZdO_Hfl5FkpE','nickname'=>'惠协发','groupid'=>NULL,'fans_info'=>'oE5EC0UUZxACRdtFZdO_Hfl5FkpE','update_time'=>'1587097119','create_time'=>'1587097119','unionid'=>'oVXl3twrh8WUIAQvlZ-a5s3QT5EA','gender'=>'0','country'=>'','city'=>'','province'=>'','secretKey'=>'UR8tYrkmUvB0rMvWOp8mobiUCQzAonHK']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1041','user_id'=>'92','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/F6POQRUKU5QicAdp4o29O62lwnE6KGd5cNRq2pmdIVF4PAqgfxb0J8ZfdaenGib2H9sZmrA5rreWvlxqcbJah3qQ/132','openid'=>'oE5EC0WCXthR-YCz6nD_YwaMBlbQ','nickname'=>'董','groupid'=>NULL,'fans_info'=>'oE5EC0WCXthR-YCz6nD_YwaMBlbQ','update_time'=>'1587097248','create_time'=>'1587097248','unionid'=>'oVXl3ty8uvGAHnd3KljEc99uZZ10','gender'=>'1','country'=>'China','city'=>'Jiangbei','province'=>'Chongqing','secretKey'=>'tmxCJ--jg4GpY6btMkddtVBecM93yU9Y']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1042','user_id'=>'93','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/zvvtvGbucBuBNbjrQibUIGJOicS1xeN9FdZjKIQF64IOkFic4EMbpicKtAXdM3UDboCUtdFRo26c6SEuicHAib2DI0Pw/132','openid'=>'oE5EC0QznY0pnfvROYus5_4Wcc5I','nickname'=>'周周','groupid'=>NULL,'fans_info'=>'oE5EC0QznY0pnfvROYus5_4Wcc5I','update_time'=>'1587188717','create_time'=>'1587188717','unionid'=>'','gender'=>'2','country'=>'China','city'=>'Xiamen','province'=>'Fujian','secretKey'=>'MEWMFXEHxECkPWyUYDUdVHZ4uTHbAyrT']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1043','user_id'=>'94','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/jLaxc8wlalnd2I9iaNg5lVicAaKrCLrqNqpicTYYhoOlwE3vSYJ2R8INsc5xY4yVnK5icevAnIuL22rEXt9SmmtG3Q/132','openid'=>'oE5EC0ZnVtq0pi_hAlyRzcE8oLOM','nickname'=>'森','groupid'=>NULL,'fans_info'=>'oE5EC0ZnVtq0pi_hAlyRzcE8oLOM','update_time'=>'1587219785','create_time'=>'1587219785','unionid'=>'','gender'=>'0','country'=>'','city'=>'','province'=>'','secretKey'=>'JiHjEbmhf6kxmG2jNcsn1wRmLx0cQp9E']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1044','user_id'=>'95','avatarUrl'=>'https://wx.qlogo.cn/mmhead/hxZ0yTicB8p8jgwKt2RVuGriaqX68m17nTdVicolWxT3NA/132','openid'=>'oE5EC0azpuPFyRcyIbxPkE3zRk5w','nickname'=>'李珮心','groupid'=>NULL,'fans_info'=>'oE5EC0azpuPFyRcyIbxPkE3zRk5w','update_time'=>'1587280987','create_time'=>'1587280987','unionid'=>'oVXl3t20uufJwhBg0EJAcxbgAmz4','gender'=>'0','country'=>'','city'=>'','province'=>'','secretKey'=>'dnkuPHs-SzlJTUjlQsjad-nGZasMJQ6g']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1045','user_id'=>'96','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/2R7dU5YFbLEuKsmPEGib6p5b45TWVgIL0Mzliadrk9ibUqLpibIAhpnZMK1wMoNVUMlXicuPwex6RzVp1GUxNXSpO0A/132','openid'=>'oE5EC0V37yTXf0P_GUKb2KlrWG5s','nickname'=>'清风明月','groupid'=>NULL,'fans_info'=>'oE5EC0V37yTXf0P_GUKb2KlrWG5s','update_time'=>'1587380962','create_time'=>'1587380962','unionid'=>'','gender'=>'1','country'=>'China','city'=>'Xi\'an','province'=>'Shaanxi','secretKey'=>'HX96A3H1Dxm1oZ_jEt8bRtb4ZyADdSBH']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1046','user_id'=>'97','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIcYbE8wicORZmxwpSjsmnTvHFRg7MicLo2hOm4Fmia6lRd3hvFo4IUEfrYmHrtTm9vfDBJKYZz29Sqg/132','openid'=>'oE5EC0YZmEGxxdRNlY6KPT4MMXvw','nickname'=>'达柯店','groupid'=>NULL,'fans_info'=>'oE5EC0YZmEGxxdRNlY6KPT4MMXvw','update_time'=>'1587509316','create_time'=>'1587509316','unionid'=>'oVXl3t9q4DSNKz6VOdZ5xpcUQCcc','gender'=>'1','country'=>'China','city'=>'Kaohsiung City','province'=>'Taiwan','secretKey'=>'HkfmkeWexuWiTn6OOvh85bwTDH6g2lgj']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1047','user_id'=>'98','avatarUrl'=>'https://thirdwx.qlogo.cn/mmopen/vi_32/Q3auHgzwzM6GcEglfricFXXqjfEmNBNm7O2J9AKjYhMQrW1DcHyrevzR3COvHPMjDEsAZR2wia1YtTKZTUbibwYMA/132','openid'=>'oE5EC0cmqtVK_Qs8JLTaFCYQ7rX8','nickname'=>'阿白','groupid'=>NULL,'fans_info'=>'oE5EC0cmqtVK_Qs8JLTaFCYQ7rX8','update_time'=>'1587518780','create_time'=>'1587518780','unionid'=>'','gender'=>'1','country'=>'China','city'=>'Jiangbei','province'=>'Chongqing','secretKey'=>'_uQZMsR7TCmPTkglEzdrsEs7JCw6L7bo']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1048','user_id'=>'99','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83eoB5dU9lFmEYepFib953q3xr20Hic8zC7XpbOiaw8sOVAmlnHH6Q49UTMCb618A3teCYiaNkpxibfWpAvw/132','openid'=>'oE5EC0e33D-2Z6VZVnCw4DjSsDxo','nickname'=>'自强不息','groupid'=>NULL,'fans_info'=>'oE5EC0e33D-2Z6VZVnCw4DjSsDxo','update_time'=>'1587538658','create_time'=>'1587538658','unionid'=>'oVXl3twDTbhclpufQ4_jnXd8IoYo','gender'=>'1','country'=>'China','city'=>'Zhengzhou','province'=>'Henan','secretKey'=>'pwBh6bUXwO0e92zSj-kifPOjG5rN2lMv']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1049','user_id'=>'100','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTINUzDSCibKbeY3o7NVQIYxsDZib4ibMDuTU47q0uHuibaULCbiaIriaMLo7nvxrOt3uduHIaUGhqEoFxeA/132','openid'=>'oE5EC0Wqyg790huSMiaMwmKpAyGw','nickname'=>'、New_lifeZ','groupid'=>NULL,'fans_info'=>'oE5EC0Wqyg790huSMiaMwmKpAyGw','update_time'=>'1587548101','create_time'=>'1587548101','unionid'=>'oVXl3t-UqNOUK2COs-8uWp2ysef4','gender'=>'1','country'=>'China','city'=>'Hefei','province'=>'Anhui','secretKey'=>'7AakQS0bb8tVrv23cEGsBqHnqmMsfYyv']);
        $this->insert('{{%wxapp_fans}}',['fanid'=>'1050','user_id'=>'101','avatarUrl'=>'https://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83eqeOCAYm6CddfHZiaA5QhHQEI2NeSAspwxL883J8rDMqHzNLZQdY0ticB6VuKG4qhCCFRcsxMlvYIxg/132','openid'=>'oE5EC0VxLFXLk44_vWuL8t2FyuXI','nickname'=>'Dobby','groupid'=>NULL,'fans_info'=>'oE5EC0VxLFXLk44_vWuL8t2FyuXI','update_time'=>'1587752939','create_time'=>'1587752939','unionid'=>'','gender'=>'1','country'=>'China','city'=>'Xuhui','province'=>'Shanghai','secretKey'=>'DRyFj7baoLlOMLPxS4p9xMZ_yTP5-Zgv']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%wxapp_fans}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

