<?php

/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-03-28 16:00:03
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-06-07 01:07:15
 */
use common\widgets\adminlte\Alert;
use richardfan\widget\JSRegister;

?>
<section class="content" id="APP">
<?= Alert::widget(); ?>
    <?= $content; ?>
</section>
<?php JSRegister::begin([
    'id' => '1',
]); ?>
<script>
    var parentPageid = $(window.parent.document).find(".tab-pane.active").data('pageid');
    var src = $(window.parent.document).find("#iframe_" + parentPageid).attr('src');

    if (window.location.pathname != src) {
        $('.backMenu').show();
    }

    // 以form data 方式进行post请求
    Vue.http.options.emulateJSON = true
    Vue.http.options.headers = {
        'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8',
        "<?= \yii\web\Request::CSRF_HEADER; ?>" : "<?= Yii::$app->request->csrfToken; ?>" // _csrf验证

    }    
</script>
<?= JSRegister::end(); ?>