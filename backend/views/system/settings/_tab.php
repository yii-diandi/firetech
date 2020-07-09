<?php

/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-03-29 00:31:24
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-05-17 08:56:00
 */


use yii\helpers\Html;
use yii\widgets\ActiveForm;

$acname = Yii::$app->controller->action->id;

/* @var $model \app\models\forms\ConfigurationForm */
/* @var $this \yii\web\View */
?>
<ul class="nav nav-tabs">
    <li <?php if ($acname == 'weburl') : ?> class="active" <?php endif; ?>>
        <?= Html::a('域名设置', ['weburl', 'plugins' => $plugins], []) ?>
    </li>
    <li <?php if ($acname == 'baidu') : ?> class="active" <?php endif; ?>>
        <?= Html::a('百度SDK参数', ['baidu', 'plugins' => $plugins], []) ?>
    </li>

    <li <?php if ($acname == 'wxapp') : ?> class="active" <?php endif; ?>>
        <?= Html::a('小程序设置', ['wxapp', 'plugins' => $plugins], []) ?>
    </li>
    <li <?php if ($acname == 'wechatpay') : ?> class="active" <?php endif; ?>>
        <?= Html::a('微信支付', ['wechatpay', 'plugins' => $plugins], []) ?>
    </li>
    <li <?php if ($acname == 'sms') : ?> class="active" <?php endif; ?>>
        <?= Html::a('短信设置', ['sms', 'plugins' => $plugins], []) ?>
    </li>
    <li <?php if ($acname == 'email') : ?> class="active" <?php endif; ?>>
        <?= Html::a('邮箱服务器', ['email', 'plugins' => $plugins], []) ?>
    </li>
    <li <?php if ($acname == 'map') : ?> class="active" <?php endif; ?>>
        <?= Html::a('地图设置', ['map', 'plugins' => $plugins], []) ?>
    </li>

</ul>