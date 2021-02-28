import Vue from 'vue'
window.Vue = Vue;
import VueResource from 'vue-resource'
import global from './utli/global.js'
import ElmentUi from 'element-ui'
import SyDialog from './components/fire-dialog/dialog'

import App from './App'

Vue.prototype.ElmentUi = ElmentUi 
Vue.prototype.global = global 
Vue.prototype.VueResource=VueResource
Vue.prototype.Popup = SyDialog
Vue.config.productionTip = false

Vue.use(global)
Vue.use(VueResource);
Vue.use(ElmentUi)
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    // 以form data 方式进行post请求
    Vue.http.options.emulateJSON = true
    Vue.http.options.headers = {
        'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8',
        'X-CSRF-Token':token.content // _csrf验证
    }  
} 

new Vue({
    render: (h) => h(App)
}).$mount()