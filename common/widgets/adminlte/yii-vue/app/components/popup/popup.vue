<template>
  <div id="global_dialog">
        <el-dialog
                :title="title"
                :visible.sync="dialogVisible"
                width="70%"
                height="80%"
                top="50px"
                @open="openbefore"
                custom-class="globaldialog"
                :before-close="handleClose">
            <el-row  class="dialogLoad" v-if="loading" v-loading="loading"  element-loading-text="拼命加载中" element-loading-spinner="el-icon-loading">
            </el-row>    
            <iframe  :src="url"    @load="getTi()" frameborder="0" width="100%" height="600px"></iframe>

            <span slot="footer" class="dialog-footer">
                <el-button type="primary" @click="dialogVisible = false">关闭</el-button>
            </span>
        </el-dialog>
</div>
</template>

<script>
export default {
    name:'Popup',
    data() {
        return {
            dialogVisible: false,
            url:'http://www.wayfirer.com/',
            title:'店滴AI',
            loading: true
        };
    },
    created: function () {
        let that = this;
    },
    methods: {
        getTi(){
            this.loading = false
            
            console.log('加载事件',this.loading)
        },
        openbefore(){  
             this.loading = true
            console.log('加载',this.loading)
        },
        handleClose(done) {
            this.url =''
            
            done();
            
            // this.$confirm('确认关闭？')
            //     .then(_ => {
            //         alert("确定")
            //         done();
            //     })
            //     .catch(_ => {
            //         alert("取消")
            //     });
        }
    }
}
</script>
