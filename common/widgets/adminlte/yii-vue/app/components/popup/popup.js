import Vue from 'vue'
import Popup from './popup.vue'
import $ from 'jquery'

const PopupBox = Vue.extend(Popup)
let  install = function (data) {
  let instance = new PopupBox({
    data
  }).$mount()

  $('#global_dialog').remove();
  Vue.nextTick(() => {
    instance.dialogVisible = true
    // show 和弹窗组件里的show对应，用于控制显隐
  })
  $('#APP').append(instance.$el);
  return instance;
}

export default {
  install
}
