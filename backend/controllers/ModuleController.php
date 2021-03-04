<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-05-03 16:37:30
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2021-03-01 23:30:26
 */

namespace backend\controllers;

use Yii;
use common\models\DdAiApplications;
use diandi\addons\models\searchs\DdAddons;
use yii\web\NotFoundHttpException;

/**
 * DdAiApplicationsController implements the CRUD actions for DdAiApplications model.
 */
class ModuleController extends BaseController
{
    public $layout = '@backend/views/layouts/main-base';

    /**
     * Lists all DdAiApplications models.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $module = Yii::$app->params['addons'];

        if(empty(Yii::$app->params['store_id'])){
            Yii::$app->session->setFlash('error', '请点击右上角选择商户后进入模块');
            $this->refresh();
            return $this->goHome();
        } 

        $moduleName = DdAddons::findOne(['identifie' => $module]);
        

        return $this->render('index', [
            'title' => $moduleName['title'],
        ]);
    }
}
