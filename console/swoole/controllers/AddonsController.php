<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2021-03-21 20:46:34
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2021-03-22 00:00:13
 */
namespace swooleService\controllers;


use diandi\addons\models\Bloc;
use swooleService\tasks\DemoTask;
use Yii;
use yii\db\Exception;
use yii\web\Controller;

class AddonsController extends AController
{
    public $modelClass = '';
    
    

    public function actionIndex()
    {
        return [
            'addons'=>6
        ];
    }

}