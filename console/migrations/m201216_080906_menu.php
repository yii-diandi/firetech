<?php

use yii\db\Migration;

class m201216_080906_menu extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%menu}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'name' => "varchar(128) NOT NULL",
            'parent' => "int(11) NULL",
            'route' => "varchar(255) NULL",
            'order' => "int(11) NULL DEFAULT '0'",
            'data' => "blob NULL",
            'type' => "varchar(20) NULL",
            'icon' => "varchar(30) NULL",
            'is_sys' => "enum('system','addons') NULL DEFAULT 'system'",
            'module_name' => "varchar(30) NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8");
        
        /* 索引设置 */
        $this->createIndex('parent','{{%menu}}','parent',0);
        
        
        /* 表数据 */
        $this->insert('{{%menu}}',['id'=>'1','name'=>'权限管理','parent'=>NULL,'route'=>'/admin/default/index','order'=>'5','data'=>NULL,'type'=>'auth','icon'=>'fa fa-fw fa-sitemap','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'2','name'=>'权限维护','parent'=>'1','route'=>'/admin/permission/index','order'=>NULL,'data'=>NULL,'type'=>'auth','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'3','name'=>'菜单路由','parent'=>'1','route'=>'/admin/route/index','order'=>NULL,'data'=>NULL,'type'=>'auth','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'4','name'=>'用户组','parent'=>'27','route'=>'/admin/group/index','order'=>NULL,'data'=>NULL,'type'=>'auth','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'5','name'=>'权限分配','parent'=>'1','route'=>'/admin/assignment/index','order'=>NULL,'data'=>NULL,'type'=>'auth','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'6','name'=>'系统菜单','parent'=>'1','route'=>'/admin/menu/index','order'=>NULL,'data'=>NULL,'type'=>'auth','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'9','name'=>'权限规则','parent'=>'1','route'=>'/admin/rule/index','order'=>NULL,'data'=>NULL,'type'=>'auth','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'11','name'=>'系统设置','parent'=>'75','route'=>'/system/settings/weburl','order'=>'1','data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'25','name'=>'会员管理','parent'=>NULL,'route'=>'/member/dd-member/index','order'=>'7','data'=>NULL,'type'=>'member','icon'=>'fa fa-fw fa-user-plus','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'27','name'=>'管理员管理','parent'=>NULL,'route'=>NULL,'order'=>'4','data'=>NULL,'type'=>'auth','icon'=>'fa fa-fw fa-group','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'28','name'=>'管理员','parent'=>'27','route'=>'/admin/user/index','order'=>NULL,'data'=>NULL,'type'=>'auth','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'39','name'=>'站点管理','parent'=>NULL,'route'=>'/website/dd-website-slide/index','order'=>'3','data'=>NULL,'type'=>'sysai','icon'=>'fa fa-fw fa-cubes','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'40','name'=>'幻灯片','parent'=>'39','route'=>'/website/dd-website-slide/index','order'=>NULL,'data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>NULL]);
        $this->insert('{{%menu}}',['id'=>'41','name'=>'文章管理','parent'=>'39','route'=>'/article/dd-article/index','order'=>NULL,'data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>NULL]);
        $this->insert('{{%menu}}',['id'=>'42','name'=>'文章分类','parent'=>'41','route'=>'/article/dd-article-category/index','order'=>NULL,'data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>NULL]);
        $this->insert('{{%menu}}',['id'=>'43','name'=>'文章列表','parent'=>'41','route'=>'/article/dd-article/index','order'=>NULL,'data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>NULL]);
        $this->insert('{{%menu}}',['id'=>'44','name'=>'联系我们','parent'=>'39','route'=>'/website/dd-website-contact/index','order'=>NULL,'data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>NULL]);
        $this->insert('{{%menu}}',['id'=>'45','name'=>'顶部导航','parent'=>'1','route'=>'/admin/menu-top/index','order'=>NULL,'data'=>NULL,'type'=>'auth','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'46','name'=>'会员管理','parent'=>'25','route'=>'/member/dd-member/index','order'=>NULL,'data'=>NULL,'type'=>'member','icon'=>'','is_sys'=>'system','module_name'=>NULL]);
        $this->insert('{{%menu}}',['id'=>'49','name'=>'会员组','parent'=>'25','route'=>'/member/dd-member-group/index','order'=>NULL,'data'=>NULL,'type'=>'member','icon'=>'','is_sys'=>'system','module_name'=>NULL]);
        $this->insert('{{%menu}}',['id'=>'75','name'=>'系统管理','parent'=>NULL,'route'=>NULL,'order'=>'3','data'=>NULL,'type'=>'sysai','icon'=>'fa fa-fw fa-dashboard','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'197','name'=>'站点设置','parent'=>'39','route'=>'/website/setting/website','order'=>NULL,'data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'222','name'=>'公司管理','parent'=>'531','route'=>'/admin/bloc/index','order'=>'1','data'=>NULL,'type'=>'sysai','icon'=>'fa fa-fw fa-cogs','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'223','name'=>'快速生成','parent'=>NULL,'route'=>NULL,'order'=>'10','data'=>NULL,'type'=>'sysai','icon'=>'fa fa-fw fa-key','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'224','name'=>'模块生成','parent'=>'223','route'=>'/gii/addons','order'=>NULL,'data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'246','name'=>'配置项管理','parent'=>'75','route'=>'/settings/default/index','order'=>NULL,'data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'254','name'=>'扩展模块','parent'=>NULL,'route'=>'/addons/addons/index','order'=>'2','data'=>NULL,'type'=>'sysai','icon'=>'fa fa-fw fa-cloud-download','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'320','name'=>'数据库','parent'=>'75','route'=>'/system/database/backups','order'=>NULL,'data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'531','name'=>'集团组织','parent'=>NULL,'route'=>NULL,'order'=>NULL,'data'=>NULL,'type'=>'sysai','icon'=>'fa fa-fw fa-cubes','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%menu}}',['id'=>'532','name'=>'商户类型','parent'=>'531','route'=>'/admin/category/index','order'=>NULL,'data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>'']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%menu}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

