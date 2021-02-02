<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-05-30 16:57:52
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2021-01-20 22:03:46
 */

?>
<div class="box">
    <div class="box-body table-responsive">
            <div class="module-form">
            <?php
                        echo $form->field($generator, 'moduleID');
                        echo $form->field($generator, 'title');
                        echo $form->field($generator, 'version');
                        echo $form->field($generator, 'type');
                        echo $form->field($generator, 'ability');
                        echo $form->field($generator, 'description');
                        echo $form->field($generator, 'author');
                        echo $form->field($generator, 'url');
                    ?>
        
            </div>
    </div>
</div>