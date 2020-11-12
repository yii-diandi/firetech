<?php

/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-03-28 16:00:03
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-11-04 03:16:06
 */
use common\widgets\adminlte\Alert;
use richardfan\widget\JSRegister;

?>
<section class="content" id="APP" style="background:#e8e8e8;">
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
</script>
<?= JSRegister::end(); ?>