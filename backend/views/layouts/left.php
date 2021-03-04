<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-05-01 11:01:01
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2021-03-03 01:49:37
 */
use common\helpers\ImageHelper;

?>

<fire-sidebar-logo  :title="Website.name" :logo="Website.blogo" :background="menuBgColor" :borderRight="menuTextColor"></fire-sidebar-logo>       
<div class="sidebar">

<el-menu  class="el-menu-vertical-demo" 
    
    @open="handleOpen" @close="handleClose" :collapse="isCollapse">

    <template  v-for="(item,index) in leftMenu" v-if=" item.type == menuCate || isLeftAll">
        
        <el-submenu :index="index" v-show="item.children.length>0">
            <template slot="title">
                <i  :class="item.icon"></i>
                <span  slot="title">{{item.text}}</span>
            </template>
            <el-menu-item-grou>       
                <el-menu-item @click="addTabs(child)" :index="index+'-'+childIndex"  v-for="(child,childIndex) in item.children"> 
                    <i  :class="child.icon"></i>
                    <span slot="title">{{child.text}}</span>
                </el-menu-item>
            </el-menu-item-group>
        </el-submenu>
  
        <el-menu-item :index="index" @click="addTabs(item)" v-show="item.children.length==0">
            <i :class="item.icon"></i>
            <span slot="title">{{item.text}}</span>
        </el-menu-item>
            
    </template>           
</el-menu>

</div>  