<?php

use yii\db\Migration;

class m210326_024755_auth_assignment extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%auth_assignment}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'item_id' => "int(11) NOT NULL",
            'item_name' => "varchar(64) NOT NULL",
            'user_id' => "varchar(64) NOT NULL",
            'created_at' => "int(11) NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='用户与权限关系'");
        
        /* 索引设置 */
        $this->createIndex('auth_assignment_user_id_idx','{{%auth_assignment}}','user_id',0);
        
        
        /* 表数据 */
        $this->insert('{{%auth_assignment}}',['id'=>'1','item_id'=>'0','item_name'=>'人脸库管理','user_id'=>'11','created_at'=>'1586678304']);
        $this->insert('{{%auth_assignment}}',['id'=>'2','item_id'=>'0','item_name'=>'人脸识别','user_id'=>'11','created_at'=>'1586678304']);
        $this->insert('{{%auth_assignment}}',['id'=>'3','item_id'=>'31','item_name'=>'价格配置','user_id'=>'20','created_at'=>'1593573915']);
        $this->insert('{{%auth_assignment}}',['id'=>'4','item_id'=>'0','item_name'=>'会员管理','user_id'=>'11','created_at'=>'1586678304']);
        $this->insert('{{%auth_assignment}}',['id'=>'5','item_id'=>'39','item_name'=>'分类管理','user_id'=>'22','created_at'=>'1607682783']);
        $this->insert('{{%auth_assignment}}',['id'=>'6','item_id'=>'32','item_name'=>'分销商品管理','user_id'=>'20','created_at'=>'1593575206']);
        $this->insert('{{%auth_assignment}}',['id'=>'7','item_id'=>'43','item_name'=>'分销默认入口','user_id'=>'22','created_at'=>'1607682998']);
        $this->insert('{{%auth_assignment}}',['id'=>'8','item_id'=>'42','item_name'=>'售后管理','user_id'=>'22','created_at'=>'1607682783']);
        $this->insert('{{%auth_assignment}}',['id'=>'9','item_id'=>'25','item_name'=>'商品分类','user_id'=>'20','created_at'=>'1593569319']);
        $this->insert('{{%auth_assignment}}',['id'=>'10','item_id'=>'25','item_name'=>'商品分类','user_id'=>'22','created_at'=>'1607683531']);
        $this->insert('{{%auth_assignment}}',['id'=>'11','item_id'=>'35','item_name'=>'商品标签管理','user_id'=>'20','created_at'=>'1593575206']);
        $this->insert('{{%auth_assignment}}',['id'=>'12','item_id'=>'24','item_name'=>'商品管理','user_id'=>'15','created_at'=>'1589108423']);
        $this->insert('{{%auth_assignment}}',['id'=>'13','item_id'=>'24','item_name'=>'商品管理','user_id'=>'20','created_at'=>'1593569319']);
        $this->insert('{{%auth_assignment}}',['id'=>'14','item_id'=>'24','item_name'=>'商品管理','user_id'=>'22','created_at'=>'1607683531']);
        $this->insert('{{%auth_assignment}}',['id'=>'15','item_id'=>'26','item_name'=>'商家','user_id'=>'20','created_at'=>'1593569319']);
        $this->insert('{{%auth_assignment}}',['id'=>'16','item_id'=>'27','item_name'=>'商家信息维护','user_id'=>'20','created_at'=>'1593569319']);
        $this->insert('{{%auth_assignment}}',['id'=>'17','item_id'=>'44','item_name'=>'商户信息','user_id'=>'22','created_at'=>'1607683448']);
        $this->insert('{{%auth_assignment}}',['id'=>'18','item_id'=>'41','item_name'=>'商户订单管理','user_id'=>'22','created_at'=>'1607682783']);
        $this->insert('{{%auth_assignment}}',['id'=>'19','item_id'=>'0','item_name'=>'基础权限组','user_id'=>'1','created_at'=>'1588809678']);
        $this->insert('{{%auth_assignment}}',['id'=>'20','item_id'=>'0','item_name'=>'基础权限组','user_id'=>'11','created_at'=>'1586678304']);
        $this->insert('{{%auth_assignment}}',['id'=>'21','item_id'=>'4','item_name'=>'基础权限组','user_id'=>'20','created_at'=>'1593569288']);
        $this->insert('{{%auth_assignment}}',['id'=>'22','item_id'=>'4','item_name'=>'基础权限组','user_id'=>'22','created_at'=>'1607682831']);
        $this->insert('{{%auth_assignment}}',['id'=>'23','item_id'=>'6','item_name'=>'开发示例','user_id'=>'1','created_at'=>'1596469274']);
        $this->insert('{{%auth_assignment}}',['id'=>'24','item_id'=>'0','item_name'=>'开发示例','user_id'=>'11','created_at'=>'1586678304']);
        $this->insert('{{%auth_assignment}}',['id'=>'25','item_id'=>'0','item_name'=>'扩展功能','user_id'=>'11','created_at'=>'1586678304']);
        $this->insert('{{%auth_assignment}}',['id'=>'26','item_id'=>'36','item_name'=>'抽奖权限','user_id'=>'21','created_at'=>'1593679676']);
        $this->insert('{{%auth_assignment}}',['id'=>'27','item_id'=>'0','item_name'=>'权限控制','user_id'=>'11','created_at'=>'1586678304']);
        $this->insert('{{%auth_assignment}}',['id'=>'28','item_id'=>'0','item_name'=>'模块生成','user_id'=>'11','created_at'=>'1586678305']);
        $this->insert('{{%auth_assignment}}',['id'=>'29','item_id'=>'0','item_name'=>'模块统一入口','user_id'=>'1','created_at'=>'1588809691']);
        $this->insert('{{%auth_assignment}}',['id'=>'30','item_id'=>'10','item_name'=>'模块统一入口','user_id'=>'20','created_at'=>'1593569292']);
        $this->insert('{{%auth_assignment}}',['id'=>'31','item_id'=>'10','item_name'=>'模块统一入口','user_id'=>'22','created_at'=>'1607682831']);
        $this->insert('{{%auth_assignment}}',['id'=>'32','item_id'=>'0','item_name'=>'站点管理','user_id'=>'11','created_at'=>'1586678305']);
        $this->insert('{{%auth_assignment}}',['id'=>'33','item_id'=>'0','item_name'=>'系统设置','user_id'=>'11','created_at'=>'1586678305']);
        $this->insert('{{%auth_assignment}}',['id'=>'34','item_id'=>'20','item_name'=>'订单操作','user_id'=>'20','created_at'=>'1593569319']);
        $this->insert('{{%auth_assignment}}',['id'=>'35','item_id'=>'17','item_name'=>'订单管理','user_id'=>'15','created_at'=>'1589031171']);
        $this->insert('{{%auth_assignment}}',['id'=>'36','item_id'=>'17','item_name'=>'订单管理','user_id'=>'20','created_at'=>'1593569319']);
        $this->insert('{{%auth_assignment}}',['id'=>'37','item_id'=>'40','item_name'=>'订单维护','user_id'=>'22','created_at'=>'1607682783']);
        $this->insert('{{%auth_assignment}}',['id'=>'38','item_id'=>'0','item_name'=>'订座','user_id'=>'11','created_at'=>'1586678305']);
        $this->insert('{{%auth_assignment}}',['id'=>'39','item_id'=>'33','item_name'=>'评论管理','user_id'=>'20','created_at'=>'1593575206']);
        $this->insert('{{%auth_assignment}}',['id'=>'40','item_id'=>'0','item_name'=>'资源上传','user_id'=>'11','created_at'=>'1586678305']);
        $this->insert('{{%auth_assignment}}',['id'=>'41','item_id'=>'19','item_name'=>'资源上传','user_id'=>'20','created_at'=>'1593569297']);
        $this->insert('{{%auth_assignment}}',['id'=>'42','item_id'=>'19','item_name'=>'资源上传','user_id'=>'22','created_at'=>'1607682831']);
        $this->insert('{{%auth_assignment}}',['id'=>'43','item_id'=>'30','item_name'=>'配置权限','user_id'=>'20','created_at'=>'1593573915']);
        $this->insert('{{%auth_assignment}}',['id'=>'44','item_id'=>'34','item_name'=>'配送点管理','user_id'=>'20','created_at'=>'1593575206']);
        $this->insert('{{%auth_assignment}}',['id'=>'45','item_id'=>'28','item_name'=>'默认入口','user_id'=>'15','created_at'=>'1589034117']);
        $this->insert('{{%auth_assignment}}',['id'=>'46','item_id'=>'28','item_name'=>'默认入口','user_id'=>'20','created_at'=>'1593569319']);
        $this->insert('{{%auth_assignment}}',['id'=>'47','item_id'=>'28','item_name'=>'默认入口','user_id'=>'22','created_at'=>'1607682934']);
        $this->insert('{{%auth_assignment}}',['id'=>'48','item_id'=>'4','item_name'=>'基础权限组','user_id'=>'16','created_at'=>'1614087805']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%auth_assignment}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

