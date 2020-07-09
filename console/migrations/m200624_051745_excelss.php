<?php

use yii\db\Migration;

class m200624_051745_excelss extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%excelss}}', [
            'a' => "varchar(255) NULL",
            'b' => "varchar(255) NULL",
            'c' => "varchar(255) NULL",
            'd' => "varchar(255) NULL",
            'a1' => "varchar(255) NULL",
            'b1' => "varchar(255) NULL",
            'c1' => "varchar(255) NULL",
            'd1' => "varchar(255) NULL",
            'a2' => "varchar(255) NULL",
            'b2' => "varchar(255) NULL",
            'c2' => "varchar(255) NULL",
            'd2' => "varchar(255) NULL",
            'a3' => "varchar(255) NULL",
            'b3' => "varchar(255) NULL",
            'c3' => "varchar(255) NULL",
            'd3' => "varchar(255) NULL",
            'a4' => "varchar(255) NULL",
            'b4' => "varchar(255) NULL",
            'c4' => "varchar(255) NULL",
            'd4' => "varchar(255) NULL",
            'a5' => "varchar(255) NULL",
            'b5' => "varchar(255) NULL",
            'c5' => "varchar(255) NULL",
            'd5' => "varchar(255) NULL",
            'a6' => "varchar(255) NULL",
            'b6' => "varchar(255) NULL",
            'c6' => "varchar(255) NULL",
            'd6' => "varchar(255) NULL",
            'a7' => "varchar(255) NULL",
            'b7' => "varchar(255) NULL",
            'c7' => "varchar(255) NULL",
            'd7' => "varchar(255) NULL",
            'a8' => "varchar(255) NULL",
            'b8' => "varchar(255) NULL",
            'f35' => "varchar(255) NULL",
        ], "ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%excelss}}',['a'=>'1','b'=>'变换及热回收初期雨水池','c'=>'123-P-1001A/B','d'=>'初期雨水泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN32','d1'=>'50','a2'=>'40','b2'=>'常压','c2'=>'ZG230-450','d2'=>'304SS','a3'=>'dⅡCT4','b3'=>'15','c3'=>'2950','d3'=>'404','a4'=>NULL,'b4'=>'泵, 离心泵， OH1型，铸铁，有轴封 -','c4'=>'铸铁，','d4'=>'set','a5'=>'2','b5'=>'CNY','c5'=>'86586','d5'=>'86586','a6'=>'86586','b6'=>'大连利欧华能泵业有限公司','c6'=>'BP-T19002-EQU-19035','d6'=>'2019-8-26 0:00:00','a7'=>'T19002','b7'=>'广西华谊能源化工有限公司工业气体岛项目净化及CO分离装置工程总承包','c7'=>'煤制乙二醇','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'2','b'=>'变换及热回收初期雨水池','c'=>'123-P-2001A/B','d'=>'初期雨水泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN32','d1'=>'50','a2'=>'40','b2'=>'常压','c2'=>'ZG230-450','d2'=>'304SS','a3'=>'dⅡCT4','b3'=>'15','c3'=>'2950','d3'=>'404','a4'=>NULL,'b4'=>'泵, 离心泵， OH1型，铸铁，有轴封 -','c4'=>'铸铁，','d4'=>'set','a5'=>'2','b5'=>'CNY','c5'=>'86586','d5'=>'86586','a6'=>'86586','b6'=>'大连利欧华能泵业有限公司','c6'=>'BP-T19002-EQU-19035','d6'=>'2019-8-26 0:00:00','a7'=>'T19002','b7'=>'广西华谊能源化工有限公司工业气体岛项目净化及CO分离装置工程总承包','c7'=>'煤制乙二醇','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'3','b'=>'净化初期雨水池','c'=>'135-P-1001A/B','d'=>'初期雨水泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN32','d1'=>'100','a2'=>'40','b2'=>'常压','c2'=>'ZG230-450','d2'=>'304SS','a3'=>'dⅡCT4','b3'=>'30','c3'=>'2950','d3'=>'573','a4'=>NULL,'b4'=>'泵, 离心泵， OH1型，铸铁，有轴封 -','c4'=>'铸铁，','d4'=>'set','a5'=>'2','b5'=>'CNY','c5'=>'119230','d5'=>'119230','a6'=>'119230','b6'=>'大连利欧华能泵业有限公司','c6'=>'BP-T19002-EQU-19035','d6'=>'2019-8-26 0:00:00','a7'=>'T19002','b7'=>'广西华谊能源化工有限公司工业气体岛项目净化及CO分离装置工程总承包','c7'=>'煤制乙二醇','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'4','b'=>'净化初期雨水池','c'=>'135-P-2001A/B','d'=>'初期雨水泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN32','d1'=>'100','a2'=>'40','b2'=>'常压','c2'=>'ZG230-450','d2'=>'304SS','a3'=>'dⅡCT4','b3'=>'30','c3'=>'2950','d3'=>'573','a4'=>NULL,'b4'=>'泵, 离心泵， OH1型，铸铁，有轴封 -','c4'=>'铸铁，','d4'=>'set','a5'=>'2','b5'=>'CNY','c5'=>'119230','d5'=>'119230','a6'=>'119230','b6'=>'大连利欧华能泵业有限公司','c6'=>'BP-T19002-EQU-19035','d6'=>'2019-8-26 0:00:00','a7'=>'T19002','b7'=>'广西华谊能源化工有限公司工业气体岛项目净化及CO分离装置工程总承包','c7'=>'煤制乙二醇','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'5','b'=>'液化及辅料制备单元','c'=>'P-2201A/B','d'=>'调浆水泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN11','d1'=>'253','a2'=>'77','b2'=>'0.1','c2'=>'304SS','d2'=>'304SS','a3'=>'N/A','b3'=>'90','c3'=>'1480','d3'=>'685.666667','a4'=>NULL,'b4'=>'泵, 离心泵， OH1型， 304不锈钢，有轴封 -','c4'=>'304不锈钢，','d4'=>'set','a5'=>'2','b5'=>'CNY','c5'=>'182120','d5'=>'182120','a6'=>'182120','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'6','b'=>'液化及辅料制备单元','c'=>'P-2204AB','d'=>'粉浆泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN54','d1'=>'495','a2'=>'70','b2'=>'0.02','c2'=>'304SS','d2'=>'304SS','a3'=>'N/A','b3'=>'220','c3'=>'1480','d3'=>'770.166667','a4'=>NULL,'b4'=>'泵,离心泵，OH1型，304不锈钢，有轴封 -','c4'=>'304不锈钢，','d4'=>'set','a5'=>'2','b5'=>'CNY','c5'=>'410960','d5'=>'410960','a6'=>'410960','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'7','b'=>'液化及辅料制备单元','c'=>'P-2206AB','d'=>'2#液化醪泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN54','d1'=>'369','a2'=>'130','b2'=>'0.142','c2'=>'304SS','d2'=>'304SS','a3'=>'N/A','b3'=>'315','c3'=>'1480','d3'=>'854.666667','a4'=>NULL,'b4'=>'泵, 离心泵， OH1型， 304不锈钢，有轴封 -','c4'=>'304不锈钢，','d4'=>'set','a5'=>'2','b5'=>'CNY','c5'=>'462500','d5'=>'462500','a6'=>'462500','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'8','b'=>'液化及辅料制备单元','c'=>'P-2206C','d'=>'液化醪接力泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN54','d1'=>'369','a2'=>'93','b2'=>'0.85','c2'=>'304SS','d2'=>'304SS','a3'=>'N/A','b3'=>'220','c3'=>'1480','d3'=>'939.166667','a4'=>NULL,'b4'=>'泵,离心泵，OH1型，304不锈钢，有轴封 -','c4'=>'304不锈钢，','d4'=>'set','a5'=>'1','b5'=>'CNY','c5'=>'289180','d5'=>'144590','a6'=>'144590','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'9','b'=>'液化及辅料制备单元','c'=>'P-2206DE','d'=>'1#液化醪泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN54','d1'=>'369','a2'=>'36','b2'=>'0.142','c2'=>'304SS','d2'=>'304SS','a3'=>'N/A','b3'=>'75','c3'=>'1475','d3'=>'1023.666667','a4'=>NULL,'b4'=>'泵, 离心泵， OH1型， 304不锈钢，有轴封 -','c4'=>'304不锈钢，','d4'=>'set','a5'=>'2','b5'=>'CNY','c5'=>'133700','d5'=>'133700','a6'=>'133700','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'10','b'=>'液化及辅料制备单元','c'=>'P-2210','d'=>'CIP碱液泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN11+62','d1'=>'61','a2'=>'35','b2'=>'0.06','c2'=>'A890 3A 双相不锈钢','d2'=>'A890 3A 双相不锈钢','a3'=>'N/A','b3'=>'18.5','c3'=>'2910','d3'=>'1108.166667','a4'=>NULL,'b4'=>'泵,离心泵，OH1型，316不锈钢，有轴封 -','c4'=>'316不锈钢，','d4'=>'set','a5'=>'1','b5'=>'CNY','c5'=>'55200','d5'=>'27600','a6'=>'27600','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'11','b'=>'液化及辅料制备单元','c'=>'P-2211','d'=>'低压CIP泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN11+62','d1'=>'506','a2'=>'65','b2'=>'0.07','c2'=>'304SS','d2'=>'304SS','a3'=>'N/A','b3'=>'160','c3'=>'1480','d3'=>'1192.666667','a4'=>NULL,'b4'=>'泵, 离心泵， OH1型， 304不锈钢，有轴封 -','c4'=>'304不锈钢，','d4'=>'set','a5'=>'1','b5'=>'CNY','c5'=>'241340','d5'=>'120670','a6'=>'120670','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'12','b'=>'液化及辅料制备单元','c'=>'P-2212','d'=>'高压CIP泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN11+62','d1'=>'216','a2'=>'125','b2'=>'0.07','c2'=>'304SS','d2'=>'304SS','a3'=>'N/A','b3'=>'160','c3'=>'2960','d3'=>'1277.166667','a4'=>NULL,'b4'=>'泵, 离心泵， OH1型， 304不锈钢，有轴封 -','c4'=>'304不锈钢，','d4'=>'set','a5'=>'1','b5'=>'CNY','c5'=>'163480','d5'=>'81740','a6'=>'81740','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'13','b'=>'液化及辅料制备单元','c'=>'P-2213','d'=>'废碱液泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN11+62','d1'=>'55','a2'=>'35','b2'=>'0.07','c2'=>'304SS','d2'=>'304SS','a3'=>'N/A','b3'=>'11','c3'=>'2910','d3'=>'1361.666667','a4'=>NULL,'b4'=>'泵, 离心泵， OH1型， 304不锈钢，有轴封 -','c4'=>'304不锈钢，','d4'=>'set','a5'=>'1','b5'=>'CNY','c5'=>'46980','d5'=>'23490','a6'=>'23490','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'14','b'=>'液化及辅料制备单元','c'=>'P-2214AB','d'=>'蒸汽凝水泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN21','d1'=>'110','a2'=>'50','b2'=>'0.02','c2'=>'C.S','d2'=>'304','a3'=>'N/A','b3'=>'30','c3'=>'1465','d3'=>'1446.166667','a4'=>NULL,'b4'=>'泵,离心泵，OH1型，碳钢，有轴封 -','c4'=>'碳钢，','d4'=>'set','a5'=>'2','b5'=>'CNY','c5'=>'90000','d5'=>'90000','a6'=>'90000','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'15','b'=>'液化及辅料制备单元','c'=>'P-2216','d'=>'碱液卸料泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN11+62','d1'=>'22','a2'=>'10','b2'=>'-0.011','c2'=>'A890 3A 双相不锈','d2'=>'A890 3A 双相不锈','a3'=>'N/A','b3'=>'2.2','c3'=>'1420','d3'=>'1530.666667','a4'=>NULL,'b4'=>'泵,离心泵，OH1型，316不锈钢，有轴封 -','c4'=>'316不锈钢，','d4'=>'set','a5'=>'1','b5'=>'CNY','c5'=>'42680','d5'=>'21340','a6'=>'21340','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'16','b'=>'发酵单元','c'=>'P-2301','d'=>'活化液泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN54','d1'=>'35','a2'=>'49','b2'=>'0.067','c2'=>'304SS','d2'=>'304SS','a3'=>'N/A','b3'=>'15','c3'=>'2910','d3'=>'1615.166667','a4'=>NULL,'b4'=>'泵, 离心泵， OH1型， 304不锈钢，有轴封 -','c4'=>'304不锈钢，','d4'=>'set','a5'=>'1','b5'=>'CNY','c5'=>'50240','d5'=>'25120','a6'=>'25120','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'17','b'=>'发酵单元','c'=>'P-2302ABC','d'=>'酒母泵A/B/C','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN54','d1'=>'407','a2'=>'52','b2'=>'0.149','c2'=>'304SS','d2'=>'304SS','a3'=>'N/A','b3'=>'110','c3'=>'1485','d3'=>'1699.666667','a4'=>NULL,'b4'=>'泵, 离心泵， OH1型， 304不锈钢，有轴封 -','c4'=>'304不锈钢，','d4'=>'set','a5'=>'3','b5'=>'CNY','c5'=>'178080','d5'=>'267120','a6'=>'267120','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'18','b'=>'发酵单元','c'=>'P-2303A~H','d'=>'发酵液泵A-H','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN54','d1'=>'1400','a2'=>'30','b2'=>'0.175','c2'=>'304SS','d2'=>'304SS','a3'=>'N/A','b3'=>'185','c3'=>'980','d3'=>'1784.166667','a4'=>NULL,'b4'=>'泵, 离心泵， OH1型， 304不锈钢，有轴封 -','c4'=>'304不锈钢，','d4'=>'set','a5'=>'8','b5'=>'CNY','c5'=>'352320','d5'=>'1409280','a6'=>'1409280','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'19','b'=>'发酵单元','c'=>'P-2304AB','d'=>'成熟醪泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN54','d1'=>'398','a2'=>'91','b2'=>'0.158','c2'=>'304SS','d2'=>'304SS','a3'=>'N/A','b3'=>'185','c3'=>'1480','d3'=>'1868.666667','a4'=>NULL,'b4'=>'泵, 离心泵， OH1型， 304不锈钢，有轴封 -','c4'=>'304不锈钢，','d4'=>'set','a5'=>'2','b5'=>'CNY','c5'=>'243880','d5'=>'243880','a6'=>'243880','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'20','b'=>'发酵单元','c'=>'P-2305AB','d'=>'洗涤塔泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN11','d1'=>'26','a2'=>'42','b2'=>'0.035','c2'=>'304SS','d2'=>'304SS','a3'=>'N/A','b3'=>'7.5','c3'=>'2910','d3'=>'1953.166667','a4'=>NULL,'b4'=>'泵, 离心泵， OH1型， 304不锈钢，有轴封 -','c4'=>'304不锈钢，','d4'=>'set','a5'=>'2','b5'=>'CNY','c5'=>'41540','d5'=>'41540','a6'=>'41540','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'21','b'=>'发酵单元','c'=>'P-2306~2309','d'=>'发酵1#-4#CIP泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN54','d1'=>'220','a2'=>'35','b2'=>'0.024','c2'=>'304SS','d2'=>'304SS','a3'=>'N/A','b3'=>'37','c3'=>'1480','d3'=>'2037.666667','a4'=>NULL,'b4'=>'泵, 离心泵， OH1型， 304不锈钢，有轴封 -','c4'=>'304不锈钢，','d4'=>'set','a5'=>'4','b5'=>'CNY','c5'=>'94820','d5'=>'189640','a6'=>'189640','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        $this->insert('{{%excelss}}',['a'=>'22','b'=>'发酵单元','c'=>'P-2310AB','d'=>'密封液循环泵','a1'=>'OH1型','b1'=>'机械密封','c1'=>'PLAN11','d1'=>'22','a2'=>'71','b2'=>'0.004','c2'=>'304SS','d2'=>'304SS','a3'=>'N/A','b3'=>'15','c3'=>'2950','d3'=>'2122.166667','a4'=>NULL,'b4'=>'泵, 离心泵， OH1型， 304不锈钢，有轴封 -','c4'=>'304不锈钢，','d4'=>'set','a5'=>'2','b5'=>'CNY','c5'=>'51140','d5'=>'51140','a6'=>'51140','b6'=>'大连苏尔寿泵及压缩机有限公司','c6'=>'BP-T19032-EQU-19018','d6'=>'2019-9-20 0:00:00','a7'=>'T19032','b7'=>'国投生物（海伦）年产30万吨燃料乙醇项目 EPC总承包','c7'=>'其它','d7'=>'整体','a8'=>'DDP','b8'=>'项目现场','f35'=>NULL]);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%excelss}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

