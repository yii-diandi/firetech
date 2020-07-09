<?php

/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-03-18 06:48:40
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-07-08 22:11:48
 */

namespace api\controllers;

use common\helpers\ResultHelper;
use Yii;
use yii\rest\ActiveController;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

/**
 * 基类控制器.
 *
 * Class AController
 */
class AController extends ActiveController
{
    /**
     * 不用进行登录验证的方法
     * 例如： ['index', 'update', 'create', 'view', 'delete']
     * 默认全部需要验证
     *
     * @var array
     */
    protected $authOptional = [];

    /**
     * 不用进行签名验证的方法
     * 例如： ['index', 'update', 'create', 'view', 'delete']
     * 默认全部需要验证
     *
     * @var array
     */
    protected $signOptional = [];

    public function behaviors()
    {
        /* 添加行为 */
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => CompositeAuth::className(),
            'authMethods' => [
                HttpBasicAuth::className(),
                HttpBearerAuth::className(),
                QueryParamAuth::className(),
            ],
            // 不进行认证判断方法
            'optional' => $this->authOptional,
        ];
        // 跨域支持
        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::className(),
            'cors' => [
                // restrict access to
                'Origin' => ['http://www.ai.com', 'https://locahost:8080'],
                // Allow only POST and PUT methods
                'Access-Control-Request-Method' => ['POST', 'PUT'],
                // Allow only headers 'X-Wsse'
                'Access-Control-Request-Headers' => ['X-Wsse'],
                // Allow credentials (cookies, authorization headers, etc.) to be exposed to the browser
                'Access-Control-Allow-Credentials' => true,
                // Allow OPTIONS caching
                'Access-Control-Max-Age' => 3600,
                // Allow the X-Pagination-Current-Page header to be exposed to the browser.
                'Access-Control-Expose-Headers' => ['X-Pagination-Current-Page'],
            ],
        ];

        return $behaviors;
    }

    public function beforeAction($action)
    {
        
        Yii::$app->params['bloc_id'] = Yii::$app->service->commonGlobalsService->getBloc_id();
        Yii::$app->params['store_id'] = Yii::$app->service->commonGlobalsService->getStore_id();
        if(empty(Yii::$app->params['bloc_id'])){
            return ResultHelper::json('400','缺少公司参数bloc_id');
        }
        if(empty(Yii::$app->params['store_id'])){
            return ResultHelper::json('400','缺少门户参数参数store_id');
        }
        return parent::beforeAction($action);
    }

    public function actions()
    {

        $actions = parent::actions();
        // header('content-type:application/json;charset=utf8');
        // header('Access-Control-Allow-Origin:*');
        // header('Access-Control-Allow-Methods:POST');
        // header('Access-Control-Allow-Headers:x-requested-with,content-type');
        // 注销系统自带的实现方法
        unset($actions['index'], $actions['update'], $actions['create'], $actions['delete'], $actions['view']);
        // 自定义数据indexDataProvider覆盖IndexAction中的prepareDataProvider()方法
        // $actions['index']['prepareDataProvider'] = [$this, 'indexDataProvider'];
        //需要在使用的方法加上跨域请求   

        return $actions;
    }

    /**
     * 首页.
     *
     * @return ActiveDataProvider
     */
    public function actionIndex()
    {
        $modelClass = $this->modelClass;
        $query = $modelClass::find();

        return new ActiveDataProvider([
            'query' => $query,
        ]);
    }

    /**
     * 创建.
     *
     * @return bool
     */
    public function actionCreate()
    {
        $model = new $this->modelClass();
        $model->member_id = Yii::$app->user->identity->user_id;
        $model->attributes = Yii::$app->request->post();

        if (!$model->save()) {
            // 返回数据验证失败
            return $this->setResponse($this->analysisError($model->getFirstErrors()));
        }

        return $model;
    }

    /**
     * 更新.
     *
     * @param $id
     *
     * @return mixed|void
     *
     * @throws NotFoundHttpException
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->attributes = Yii::$app->request->post();
        if (!$model->save()) {
            // 返回数据验证失败
            return $this->setResponse($this->analysisError($model->getFirstErrors()));
        }

        return $model;
    }

    /**
     * 删除.
     *
     * @param $id
     *
     * @return mixed
     *
     * @throws NotFoundHttpException
     */
    public function actionDelete($id)
    {
        return $this->findModel($id)->delete();
    }

    /**
     * 详情.
     *
     * @param $id
     *
     * @return mixed
     *
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        return $this->findModel($id);
    }

    /**
     * 返回模型.
     *
     * @param $id
     *
     * @return mixed
     *
     * @throws NotFoundHttpException
     */
    protected function findModel($id)
    {
        if (empty($id)) {
            throw new NotFoundHttpException('请求的数据失败.');
        }
        if ($model = $this->modelClass::findOne($id)) {
            return $model;
        }

        throw new NotFoundHttpException('请求的数据失败.');
    }
}
