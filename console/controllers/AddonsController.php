<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-07-02 12:49:11
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2021-01-25 12:56:19
 */

namespace console\controllers;

use common\services\backend\NavService;
use Yii;
use yii\console\Controller;

// 使用示例： ./yii addons -addons=diandi_lottery -bloc_id=1 -store_id=3   job ninini

class AddonsController extends BaseController
{
    public function actionCreatemenu()
    {
        NavService::addonsMens($this->addons);
    }
    
}
