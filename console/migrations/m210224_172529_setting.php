<?php

use yii\db\Migration;

class m210224_172529_setting extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%setting}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'cate_name' => "varchar(255) NULL",
            'type' => "varchar(10) NOT NULL",
            'section' => "varchar(255) NOT NULL",
            'key' => "varchar(255) NOT NULL",
            'store_id' => "int(11) NULL",
            'bloc_id' => "int(11) NULL",
            'value' => "text NOT NULL",
            'status' => "smallint(6) NOT NULL DEFAULT '1'",
            'description' => "varchar(255) NULL",
            'created_at' => "int(11) NOT NULL",
            'updated_at' => "int(11) NOT NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%setting}}',['id'=>'1','cate_name'=>NULL,'type'=>'string','section'=>'Wechat','key'=>'app_id','store_id'=>NULL,'bloc_id'=>NULL,'value'=>'wxfb7bf418c2a81515','status'=>'1','description'=>NULL,'created_at'=>'1605602761','updated_at'=>'1605602761']);
        $this->insert('{{%setting}}',['id'=>'2','cate_name'=>NULL,'type'=>'string','section'=>'Wechat','key'=>'secret','store_id'=>NULL,'bloc_id'=>NULL,'value'=>'8da6a965258d4ea1a08e139adc916d02','status'=>'1','description'=>NULL,'created_at'=>'1605602761','updated_at'=>'1605602761']);
        $this->insert('{{%setting}}',['id'=>'3','cate_name'=>NULL,'type'=>'string','section'=>'Wechat','key'=>'token','store_id'=>NULL,'bloc_id'=>NULL,'value'=>'e694275623e62e3f3d0948f8cd1cc2d1','status'=>'1','description'=>NULL,'created_at'=>'1605602761','updated_at'=>'1605605618']);
        $this->insert('{{%setting}}',['id'=>'4','cate_name'=>NULL,'type'=>'string','section'=>'Wechat','key'=>'aes_key','store_id'=>NULL,'bloc_id'=>NULL,'value'=>'Ry9whRljgf68E5bjxVCfwX3EByuCzh0w88MiORw3nnz','status'=>'1','description'=>NULL,'created_at'=>'1605602761','updated_at'=>'1605605056']);
        $this->insert('{{%setting}}',['id'=>'5','cate_name'=>NULL,'type'=>'string','section'=>'Wechat','key'=>'headimg','store_id'=>NULL,'bloc_id'=>NULL,'value'=>'202011/17/692847cb-da31-311a-8f6c-64d4744be142.jpg','status'=>'1','description'=>NULL,'created_at'=>'1605602761','updated_at'=>'1605602761']);
        $this->insert('{{%setting}}',['id'=>'6','cate_name'=>NULL,'type'=>'string','section'=>'Wechatpay','key'=>'mch_id','store_id'=>NULL,'bloc_id'=>NULL,'value'=>'1604197062','status'=>'1','description'=>NULL,'created_at'=>'1605602798','updated_at'=>'1605602798']);
        $this->insert('{{%setting}}',['id'=>'7','cate_name'=>NULL,'type'=>'string','section'=>'Wechatpay','key'=>'key','store_id'=>NULL,'bloc_id'=>NULL,'value'=>'3fa7W3nGp7KllG7rl7L5F6bRaJRDRt27','status'=>'1','description'=>NULL,'created_at'=>'1605602798','updated_at'=>'1605602798']);
        $this->insert('{{%setting}}',['id'=>'8','cate_name'=>NULL,'type'=>'string','section'=>'Wechatpay','key'=>'app_id','store_id'=>NULL,'bloc_id'=>NULL,'value'=>'wxfb7bf418c2a81515','status'=>'1','description'=>NULL,'created_at'=>'1605602808','updated_at'=>'1605602808']);
        $this->insert('{{%setting}}',['id'=>'9','cate_name'=>NULL,'type'=>'string','section'=>'Map','key'=>'baiduApk','store_id'=>NULL,'bloc_id'=>NULL,'value'=>'sY7GGnljSvLzM44mEwVtGozS','status'=>'1','description'=>NULL,'created_at'=>'1605602979','updated_at'=>'1605602979']);
        $this->insert('{{%setting}}',['id'=>'10','cate_name'=>NULL,'type'=>'string','section'=>'Map','key'=>'amapApk','store_id'=>NULL,'bloc_id'=>NULL,'value'=>'5d9113062999b9931fcf992c085a3b2a','status'=>'1','description'=>NULL,'created_at'=>'1605602979','updated_at'=>'1608147228']);
        $this->insert('{{%setting}}',['id'=>'11','cate_name'=>NULL,'type'=>'string','section'=>'Map','key'=>'tencentApk','store_id'=>NULL,'bloc_id'=>NULL,'value'=>'1','status'=>'1','description'=>NULL,'created_at'=>'1605602979','updated_at'=>'1605602979']);
        $this->insert('{{%setting}}',['id'=>'12','cate_name'=>NULL,'type'=>'string','section'=>'Weburl','key'=>'urls','store_id'=>NULL,'bloc_id'=>NULL,'value'=>'dulaituan.hopesfire.com,dulaituanh5.hopesfire.com,localhost:81','status'=>'1','description'=>NULL,'created_at'=>'1605630454','updated_at'=>'1605630897']);
        $this->insert('{{%setting}}',['id'=>'13','cate_name'=>NULL,'type'=>'string','section'=>'Website','key'=>'themcolor','store_id'=>NULL,'bloc_id'=>NULL,'value'=>'skin-blue','status'=>'1','description'=>NULL,'created_at'=>'1606656776','updated_at'=>'1606656776']);
        $this->insert('{{%setting}}',['id'=>'14','cate_name'=>NULL,'type'=>'string','section'=>'Website','key'=>'bloc_id','store_id'=>NULL,'bloc_id'=>NULL,'value'=>'8','status'=>'1','description'=>NULL,'created_at'=>'1606656776','updated_at'=>'1606656776']);
        $this->insert('{{%setting}}',['id'=>'15','cate_name'=>NULL,'type'=>'string','section'=>'Website','key'=>'store_id','store_id'=>NULL,'bloc_id'=>NULL,'value'=>'48','status'=>'1','description'=>NULL,'created_at'=>'1606656776','updated_at'=>'1606656776']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%setting}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

