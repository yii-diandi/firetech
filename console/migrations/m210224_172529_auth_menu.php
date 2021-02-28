<?php

use yii\db\Migration;

class m210224_172529_auth_menu extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%auth_menu}}', [
            'id' => "int(11) NOT NULL AUTO_INCREMENT",
            'name' => "varchar(128) NOT NULL",
            'parent' => "int(11) NOT NULL",
            'route' => "varchar(255) NULL",
            'order' => "int(11) NOT NULL DEFAULT '0'",
            'data' => "blob NULL",
            'type' => "varchar(20) NULL",
            'icon' => "varchar(30) NULL",
            'is_sys' => "enum('system','addons') NULL DEFAULT 'system'",
            'module_name' => "varchar(30) NULL",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8");
        
        /* 索引设置 */
        $this->createIndex('parent','{{%auth_menu}}','parent',0);
        
        
        /* 表数据 */
        $this->insert('{{%auth_menu}}',['id'=>'1','name'=>'权限管理','parent'=>'0','route'=>'/admin/default/index','order'=>'5','data'=>NULL,'type'=>'auth','icon'=>'fa fa-fw fa-sitemap','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'2','name'=>'权限维护','parent'=>'1','route'=>'/admin/permission/index','order'=>'0','data'=>NULL,'type'=>'auth','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'3','name'=>'菜单路由','parent'=>'1','route'=>'/admin/route/index','order'=>'0','data'=>NULL,'type'=>'auth','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'4','name'=>'用户组','parent'=>'27','route'=>'/admin/group/index','order'=>'0','data'=>NULL,'type'=>'auth','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'5','name'=>'权限分配','parent'=>'1','route'=>'/admin/assignment/index','order'=>'0','data'=>NULL,'type'=>'auth','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'6','name'=>'系统菜单','parent'=>'1','route'=>'/admin/menu/index','order'=>'0','data'=>NULL,'type'=>'auth','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'9','name'=>'权限规则','parent'=>'1','route'=>'/admin/rule/index','order'=>'0','data'=>NULL,'type'=>'auth','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'11','name'=>'系统设置','parent'=>'75','route'=>'/system/settings/weburl','order'=>'1','data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'25','name'=>'会员管理','parent'=>'0','route'=>'/member/dd-member/index','order'=>'7','data'=>NULL,'type'=>'member','icon'=>'fa fa-fw fa-user-plus','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'27','name'=>'管理员管理','parent'=>'0','route'=>NULL,'order'=>'4','data'=>NULL,'type'=>'auth','icon'=>'fa fa-fw fa-group','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'28','name'=>'管理员','parent'=>'27','route'=>'/admin/user/index','order'=>'0','data'=>NULL,'type'=>'auth','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'39','name'=>'站点管理','parent'=>'0','route'=>'/website/dd-website-slide/index','order'=>'3','data'=>NULL,'type'=>'sysai','icon'=>'fa fa-fw fa-cubes','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'40','name'=>'幻灯片','parent'=>'39','route'=>'/website/dd-website-slide/index','order'=>'0','data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>NULL]);
        $this->insert('{{%auth_menu}}',['id'=>'41','name'=>'文章管理','parent'=>'39','route'=>'/article/dd-article/index','order'=>'0','data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>NULL]);
        $this->insert('{{%auth_menu}}',['id'=>'42','name'=>'文章分类','parent'=>'41','route'=>'/article/dd-article-category/index','order'=>'0','data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>NULL]);
        $this->insert('{{%auth_menu}}',['id'=>'43','name'=>'文章列表','parent'=>'41','route'=>'/article/dd-article/index','order'=>'0','data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>NULL]);
        $this->insert('{{%auth_menu}}',['id'=>'44','name'=>'联系我们','parent'=>'39','route'=>'/website/dd-website-contact/index','order'=>'0','data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>NULL]);
        $this->insert('{{%auth_menu}}',['id'=>'45','name'=>'顶部导航','parent'=>'1','route'=>'/admin/menu-top/index','order'=>'0','data'=>NULL,'type'=>'auth','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'46','name'=>'会员管理','parent'=>'25','route'=>'/member/dd-member/index','order'=>'0','data'=>NULL,'type'=>'member','icon'=>'','is_sys'=>'system','module_name'=>NULL]);
        $this->insert('{{%auth_menu}}',['id'=>'49','name'=>'会员组','parent'=>'25','route'=>'/member/dd-member-group/index','order'=>'0','data'=>NULL,'type'=>'member','icon'=>'','is_sys'=>'system','module_name'=>NULL]);
        $this->insert('{{%auth_menu}}',['id'=>'60','name'=>'商品管理','parent'=>'63','route'=>'/diandi_shop/goods/dd-goods/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_shop']);
        $this->insert('{{%auth_menu}}',['id'=>'61','name'=>'商品分类','parent'=>'63','route'=>'/diandi_shop/goods/dd-category/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_shop']);
        $this->insert('{{%auth_menu}}',['id'=>'62','name'=>'订单管理','parent'=>'0','route'=>NULL,'order'=>'4','data'=>NULL,'type'=>'plugins','icon'=>'fa fa-fw fa-list','is_sys'=>'addons','module_name'=>'diandi_shop']);
        $this->insert('{{%auth_menu}}',['id'=>'63','name'=>'商品管理','parent'=>'0','route'=>NULL,'order'=>'3','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_shop']);
        $this->insert('{{%auth_menu}}',['id'=>'64','name'=>'订单管理','parent'=>'62','route'=>'/diandi_shop/order/dd-order/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'fa fa-fw fa-clone','is_sys'=>'addons','module_name'=>'diandi_shop']);
        $this->insert('{{%auth_menu}}',['id'=>'69','name'=>'商家设置','parent'=>'0','route'=>'/diandi_shop/setting/store/index','order'=>'2','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_shop']);
        $this->insert('{{%auth_menu}}',['id'=>'70','name'=>'商家设置','parent'=>'69','route'=>'/diandi_shop/setting/store/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_shop']);
        $this->insert('{{%auth_menu}}',['id'=>'71','name'=>'评论管理','parent'=>'69','route'=>'/diandi_shop/setting/comment/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_shop']);
        $this->insert('{{%auth_menu}}',['id'=>'74','name'=>'配送点管理','parent'=>'69','route'=>'/diandi_shop/setting/area/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_shop']);
        $this->insert('{{%auth_menu}}',['id'=>'75','name'=>'系统管理','parent'=>'0','route'=>NULL,'order'=>'3','data'=>NULL,'type'=>'sysai','icon'=>'fa fa-fw fa-dashboard','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'197','name'=>'站点设置','parent'=>'39','route'=>'/website/setting/website','order'=>'0','data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'221','name'=>'商品标签','parent'=>'63','route'=>'/diandi_shop/goods/label/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_shop']);
        $this->insert('{{%auth_menu}}',['id'=>'222','name'=>'公司管理','parent'=>'531','route'=>'/admin/bloc/index','order'=>'1','data'=>NULL,'type'=>'sysai','icon'=>'fa fa-fw fa-cogs','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'223','name'=>'快速生成','parent'=>'0','route'=>NULL,'order'=>'10','data'=>NULL,'type'=>'sysai','icon'=>'fa fa-fw fa-key','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'224','name'=>'模块生成','parent'=>'223','route'=>'/gii/addons','order'=>'0','data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'246','name'=>'配置项管理','parent'=>'75','route'=>'/settings/default/index','order'=>'0','data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'247','name'=>'商圈管理1','parent'=>'0','route'=>'area1','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_store']);
        $this->insert('{{%auth_menu}}',['id'=>'248','name'=>'商圈管理11','parent'=>'247','route'=>'area1_1','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_store']);
        $this->insert('{{%auth_menu}}',['id'=>'249','name'=>'商圈管理12','parent'=>'247','route'=>'area1_2','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_store']);
        $this->insert('{{%auth_menu}}',['id'=>'250','name'=>'商圈管理2','parent'=>'0','route'=>'area2','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_store']);
        $this->insert('{{%auth_menu}}',['id'=>'251','name'=>'商圈管理21','parent'=>'250','route'=>'area2_1','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_store']);
        $this->insert('{{%auth_menu}}',['id'=>'252','name'=>'商圈管理22','parent'=>'250','route'=>'area2_2','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_store']);
        $this->insert('{{%auth_menu}}',['id'=>'253','name'=>'订座','parent'=>'0','route'=>'/diandi_store/default/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_store']);
        $this->insert('{{%auth_menu}}',['id'=>'254','name'=>'扩展模块','parent'=>'0','route'=>'/addons/addons/index','order'=>'2','data'=>NULL,'type'=>'sysai','icon'=>'fa fa-fw fa-cloud-download','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'298','name'=>'店滴电商采集','parent'=>'0','route'=>'/diandi_gathergoods/default/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_gathergoods']);
        $this->insert('{{%auth_menu}}',['id'=>'299','name'=>'数据采集','parent'=>'0','route'=>'/diandi_gathergoods/ceshi/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'fa fa-fw fa-cart-plus','is_sys'=>'addons','module_name'=>'diandi_gathergoods']);
        $this->insert('{{%auth_menu}}',['id'=>'300','name'=>'淘宝采集','parent'=>'299','route'=>'/diandi_gathergoods/tao/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_gathergoods']);
        $this->insert('{{%auth_menu}}',['id'=>'303','name'=>'聚合支付','parent'=>'0','route'=>'/diandi_aggregate/default/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_aggregate']);
        $this->insert('{{%auth_menu}}',['id'=>'304','name'=>'首页','parent'=>'0','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'fa fa-fw fa-cog','is_sys'=>'addons','module_name'=>'diandi_aggregate']);
        $this->insert('{{%auth_menu}}',['id'=>'305','name'=>'参数配置','parent'=>'304','route'=>'/diandi_aggregate/set/config/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_aggregate']);
        $this->insert('{{%auth_menu}}',['id'=>'314','name'=>'材料管理','parent'=>'0','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'fa fa-fw fa-bar-chart','is_sys'=>'addons','module_name'=>'diandi_pro']);
        $this->insert('{{%auth_menu}}',['id'=>'315','name'=>'产品管理','parent'=>'314','route'=>'/diandi_pro/goods/goods/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_pro']);
        $this->insert('{{%auth_menu}}',['id'=>'317','name'=>'公共属性','parent'=>'314','route'=>'/diandi_pro/template/param/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_pro']);
        $this->insert('{{%auth_menu}}',['id'=>'318','name'=>'模板库','parent'=>'314','route'=>'/diandi_pro/template/template/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_pro']);
        $this->insert('{{%auth_menu}}',['id'=>'319','name'=>'科目管理','parent'=>'314','route'=>'/diandi_pro/goods/category/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_pro']);
        $this->insert('{{%auth_menu}}',['id'=>'320','name'=>'数据库','parent'=>'75','route'=>'/system/database/backups','order'=>'0','data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'349','name'=>'店滴视频','parent'=>'0','route'=>'/diandi_video/default/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_video']);
        $this->insert('{{%auth_menu}}',['id'=>'350','name'=>'店滴视频','parent'=>'0','route'=>'/diandi_video/default/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_video']);
        $this->insert('{{%auth_menu}}',['id'=>'351','name'=>'测试使用','parent'=>'0','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_video']);
        $this->insert('{{%auth_menu}}',['id'=>'352','name'=>'视频分类','parent'=>'351','route'=>'/diandi_video/category/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_video']);
        $this->insert('{{%auth_menu}}',['id'=>'400','name'=>'商圈管理1','parent'=>'0','route'=>'area1','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_store']);
        $this->insert('{{%auth_menu}}',['id'=>'401','name'=>'商圈管理11','parent'=>'400','route'=>'area1_1','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_store']);
        $this->insert('{{%auth_menu}}',['id'=>'402','name'=>'商圈管理12','parent'=>'400','route'=>'area1_2','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_store']);
        $this->insert('{{%auth_menu}}',['id'=>'403','name'=>'商圈管理2','parent'=>'0','route'=>'area2','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_store']);
        $this->insert('{{%auth_menu}}',['id'=>'404','name'=>'商圈管理21','parent'=>'403','route'=>'area2_1','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_store']);
        $this->insert('{{%auth_menu}}',['id'=>'405','name'=>'商圈管理22','parent'=>'403','route'=>'area2_2','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_store']);
        $this->insert('{{%auth_menu}}',['id'=>'406','name'=>'订座','parent'=>'0','route'=>'/diandi_store/default/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_store']);
        $this->insert('{{%auth_menu}}',['id'=>'407','name'=>'电信运营商','parent'=>'0','route'=>'/diandi_operator/default/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'410','name'=>'卡片管理','parent'=>'0','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'411','name'=>'首页','parent'=>'410','route'=>'/diandi_operator/default/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'412','name'=>'卡片管理','parent'=>'410','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'413','name'=>'流量卡','parent'=>'412','route'=>'/diandi_operator/cardlist/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'414','name'=>'更换卡管理','parent'=>'412','route'=>'/diandi_operator/change/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'415','name'=>'卡片转移记录','parent'=>'412','route'=>'/diandi_operator/transfer/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'416','name'=>'失效卡管理','parent'=>'412','route'=>'/diandi_operator/cardloseefficacy/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'417','name'=>'代理商','parent'=>'0','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'418','name'=>'代理商管理','parent'=>'417','route'=>'/diandi_operator/bloc/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'419','name'=>'财务管理','parent'=>'417','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'420','name'=>'提现审核','parent'=>'419','route'=>'/diandi_operator/withdraw/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'421','name'=>'充值订单','parent'=>'419','route'=>'/diandi_operator/order/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'422','name'=>'实名认证','parent'=>'417','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'423','name'=>'卡片实名','parent'=>'422','route'=>'/diandi_operator/cardreal/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'424','name'=>'客户实名','parent'=>'422','route'=>'/diandi_operator/clientreal/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'425','name'=>'套餐管理','parent'=>'410','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'426','name'=>'通道管理','parent'=>'425','route'=>'/diandi_operator/channel/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'427','name'=>'运营商套餐','parent'=>'425','route'=>'/diandi_operator/setmeal/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'428','name'=>'套餐管理','parent'=>'425','route'=>'/diandi_operator/meallist/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'429','name'=>'预处理订单','parent'=>'419','route'=>'/diandi_operator/pretreatment/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'430','name'=>'注册用户','parent'=>'417','route'=>'/diandi_operator/user/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'431','name'=>'轮询管理','parent'=>'0','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'432','name'=>'流量池','parent'=>'431','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'433','name'=>'流量池管理','parent'=>'432','route'=>'/diandi_operator/pond/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'434','name'=>'流量池预警','parent'=>'432','route'=>'/diandi_operator/pondwarning/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'435','name'=>'注销卡管理','parent'=>'412','route'=>'/diandi_operator/channel/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'436','name'=>'卡片分配记录','parent'=>'412','route'=>'/diandi_operator/allocation/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'437','name'=>'数据统计','parent'=>'410','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'438','name'=>'数据分析首页','parent'=>'437','route'=>'/diandi_operator/statistics/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'439','name'=>'激活分析','parent'=>'437','route'=>'/diandi_operator/statistics/activate','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'440','name'=>'流量分析','parent'=>'437','route'=>'/diandi_operator/statistics/flux','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'441','name'=>'客户概览','parent'=>'437','route'=>'/diandi_operator/statistics/client','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'442','name'=>'系统配置','parent'=>'410','route'=>'/diandi_operator/config/chinamobile','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'478','name'=>'店滴抽奖','parent'=>'0','route'=>'/diandi_lottery/default/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_lottery']);
        $this->insert('{{%auth_menu}}',['id'=>'479','name'=>'抽奖管理','parent'=>'0','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_lottery']);
        $this->insert('{{%auth_menu}}',['id'=>'480','name'=>'抽奖说明','parent'=>'479','route'=>'/diandi_lottery/template/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_lottery']);
        $this->insert('{{%auth_menu}}',['id'=>'481','name'=>'抽奖联系人','parent'=>'479','route'=>'/diandi_lottery/contact/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_lottery']);
        $this->insert('{{%auth_menu}}',['id'=>'482','name'=>'参与记录','parent'=>'479','route'=>'/diandi_lottery/prizewin/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_lottery']);
        $this->insert('{{%auth_menu}}',['id'=>'483','name'=>'幻灯片','parent'=>'479','route'=>'/diandi_lottery/slide/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_lottery']);
        $this->insert('{{%auth_menu}}',['id'=>'484','name'=>'抽奖活动','parent'=>'479','route'=>'/diandi_lottery/active/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_lottery']);
        $this->insert('{{%auth_menu}}',['id'=>'485','name'=>'套餐类型','parent'=>'425','route'=>'/diandi_operator/mealtype/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'486','name'=>'幻灯片','parent'=>'410','route'=>'/diandi_operator/slide/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_operator']);
        $this->insert('{{%auth_menu}}',['id'=>'487','name'=>'人脸识别','parent'=>'0','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_ai']);
        $this->insert('{{%auth_menu}}',['id'=>'488','name'=>'人脸库','parent'=>'487','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_ai']);
        $this->insert('{{%auth_menu}}',['id'=>'489','name'=>'人脸库分组','parent'=>'488','route'=>'/diandi_ai/groups/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_ai']);
        $this->insert('{{%auth_menu}}',['id'=>'490','name'=>'人脸管理','parent'=>'488','route'=>'/diandi_ai/faces/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_ai']);
        $this->insert('{{%auth_menu}}',['id'=>'491','name'=>'人脸库应用','parent'=>'488','route'=>'/diandi_ai/applications/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_ai']);
        $this->insert('{{%auth_menu}}',['id'=>'492','name'=>'会员管理','parent'=>'0','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_ai']);
        $this->insert('{{%auth_menu}}',['id'=>'493','name'=>'AI会员','parent'=>'492','route'=>'/diandi_ai/member/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_ai']);
        $this->insert('{{%auth_menu}}',['id'=>'506','name'=>'店滴分销','parent'=>'0','route'=>'/diandi_distribution/default/index','order'=>'1','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'507','name'=>'首页','parent'=>'0','route'=>NULL,'order'=>'1','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'508','name'=>'首页','parent'=>'507','route'=>'/diandi_distribution/default/index','order'=>'1','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'509','name'=>'幻灯片','parent'=>'507','route'=>'/diandi_distribution/conf/slide/index','order'=>'1','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'510','name'=>'广告位','parent'=>'507','route'=>NULL,'order'=>'2','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'511','name'=>'广告位','parent'=>'510','route'=>'/diandi_distribution/goods/location/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'512','name'=>'商品推荐','parent'=>'510','route'=>'/diandi_distribution/goods/location-goods/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'513','name'=>'商品','parent'=>'0','route'=>NULL,'order'=>'2','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'514','name'=>'分销活动','parent'=>'513','route'=>'/diandi_distribution/goods/goods/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'515','name'=>'礼包管理','parent'=>'513','route'=>'/diandi_distribution/goods/gift/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'516','name'=>'库存管理','parent'=>'513','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'517','name'=>'库存管理','parent'=>'516','route'=>'/diandi_distribution/goods/dd-goods/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'518','name'=>'分类管理','parent'=>'516','route'=>'/diandi_distribution/goods/dd-category/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'519','name'=>'商品标签','parent'=>'516','route'=>'/diandi_distribution/goods/label/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'520','name'=>'订单','parent'=>'0','route'=>NULL,'order'=>'3','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'521','name'=>'订单管理','parent'=>'520','route'=>'/diandi_distribution/order/dd-order/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'522','name'=>'评论管理','parent'=>'520','route'=>'/diandi_distribution/setting/comment/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'523','name'=>'配送点管理','parent'=>'535','route'=>'/diandi_distribution/setting/area/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'524','name'=>'分销','parent'=>'0','route'=>NULL,'order'=>'4','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'525','name'=>'分销团队','parent'=>'524','route'=>'/diandi_distribution/member/memberlevel/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'526','name'=>'团队等级','parent'=>'527','route'=>'/diandi_distribution/level/level/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'527','name'=>'配置','parent'=>'524','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'528','name'=>'价格配置','parent'=>'527','route'=>'/diandi_distribution/conf/price-conf/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'529','name'=>'广告管理','parent'=>'510','route'=>'/diandi_distribution/setting/ad/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'530','name'=>'商户配置','parent'=>'538','route'=>'/diandi_distribution/setting/store/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'531','name'=>'集团组织','parent'=>'0','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'sysai','icon'=>'fa fa-fw fa-cubes','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'532','name'=>'商户类型','parent'=>'531','route'=>'/admin/category/index','order'=>'0','data'=>NULL,'type'=>'sysai','icon'=>'','is_sys'=>'system','module_name'=>'']);
        $this->insert('{{%auth_menu}}',['id'=>'533','name'=>'首页菜单','parent'=>'507','route'=>'/diandi_distribution/setting/menu/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'534','name'=>'商户申请','parent'=>'538','route'=>'/diandi_distribution/store/store/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'535','name'=>'配送管理','parent'=>'520','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'536','name'=>'物流管理','parent'=>'535','route'=>'/diandi_distribution/express/express/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'537','name'=>'运费模板','parent'=>'535','route'=>'/diandi_distribution/express/template/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'538','name'=>'商户管理','parent'=>'507','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'539','name'=>'售后处理','parent'=>'520','route'=>NULL,'order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'540','name'=>'售后原由','parent'=>'539','route'=>'/diandi_distribution/order/reason/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'541','name'=>'售后管理','parent'=>'539','route'=>'/diandi_distribution/order/refund/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'542','name'=>'会员管理','parent'=>'525','route'=>'/diandi_distribution/member/memberlevel/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'543','name'=>'财务','parent'=>'0','route'=>NULL,'order'=>'5','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'544','name'=>'订单分佣','parent'=>'543','route'=>'/diandi_distribution/account/order/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'545','name'=>'代理分佣','parent'=>'543','route'=>'/diandi_distribution/account/agent/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'546','name'=>'到店支付','parent'=>'543','route'=>'/diandi_distribution/store/storepay/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'547','name'=>'资金日志','parent'=>'543','route'=>'/diandi_distribution/account/log/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>'','is_sys'=>'addons','module_name'=>'diandi_distribution']);
        $this->insert('{{%auth_menu}}',['id'=>'548','name'=>'订单管理','parent'=>'0','route'=>NULL,'order'=>'4','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_integral']);
        $this->insert('{{%auth_menu}}',['id'=>'549','name'=>'订单管理','parent'=>'548','route'=>'/diandi_integral/order/dd-order/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_integral']);
        $this->insert('{{%auth_menu}}',['id'=>'550','name'=>'商品管理','parent'=>'0','route'=>NULL,'order'=>'3','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_integral']);
        $this->insert('{{%auth_menu}}',['id'=>'551','name'=>'商品管理','parent'=>'550','route'=>'/diandi_integral/goods/dd-goods/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_integral']);
        $this->insert('{{%auth_menu}}',['id'=>'552','name'=>'商品分类','parent'=>'550','route'=>'/diandi_integral/goods/dd-category/index','order'=>'0','data'=>NULL,'type'=>'plugins','icon'=>NULL,'is_sys'=>'addons','module_name'=>'diandi_integral']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%auth_menu}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

