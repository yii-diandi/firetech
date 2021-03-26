import Vue from 'vue'
window.Vue = Vue;
__webpack_public_path__ = document.head.querySelector('meta[name="__webpack_public_path__"]').content+'/src/'

import VueResource from 'vue-resource'
import global from './utli/global.js'
// import ElmentUi from 'element-ui'
import SyDialog from './components/fire-dialog/dialog'

import EleFormUploadFile from 'vue-ele-form-upload-file'

// 注册 upload-file 组件
Vue.component('upload-file', EleFormUploadFile)



require.ensure([], function(require) {
    let EleForm = require('vue-ele-form')
    Vue.use(EleForm)   
},'EleForm')



require.ensure(['vue-ele-form'], function(require) {
    let EleFormImageUploader = require('vue-ele-form-image-uploader')
    Vue.use(EleFormImageUploader)

},'image-uploader')

require.ensure(['vue-ele-form'], function(require) {
    let EleFormVideoUploader = require('vue-ele-form-video-uploader')
    Vue.use(EleFormVideoUploader)
},'video-uploader')

require.ensure(['vue-ele-form'], function(require) {
    let EleFormTableEditor = require('vue-ele-form-table-editor')
    Vue.use(EleFormTableEditor)
},'table-editor')


import App from './App'

Vue.prototype.global = global 
Vue.prototype.VueResource=VueResource
Vue.prototype.Popup = SyDialog
Vue.config.productionTip = false

Vue.use(global)
Vue.use(VueResource);

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