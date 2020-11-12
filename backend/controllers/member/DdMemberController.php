<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-11-02 15:01:16
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-11-02 22:51:18
 */
 

namespace backend\controllers\member;

use Yii;
use common\models\DdMember;
use common\models\searchs\DdMemberSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\controllers\BaseController;
use common\helpers\ResultHelper;

/**
 * DdMemberController implements the CRUD actions for DdMember model.
 */
class DdMemberController extends BaseController
{
    public $modelSearchName = "DdMemberSearch
";
    
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['verbs'] = [
            'class' => VerbFilter::className(),
            'actions' => [
                'delete' => ['POST'],
            ],
        ];

        return $behaviors;
    }

    /**
     * Lists all DdMember models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DdMemberSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->renderView('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DdMember model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->renderView('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new DdMember model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DdMember();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->member_id]);
        }

        return $this->renderView('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DdMember model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->member_id]);
        }

        return $this->renderView('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DdMember model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete()
    {
        global $_GPC;

        if(Yii::$app->request->isPost){
            
            $ids = explode(',',$_GPC['ids']);
            $model = new DdMember();
            $where = ['in', 'member_id', $ids];
            $model->deleteAll($where);
            
            return ResultHelper::json(200,'删除成功',[]);    
        
        }else{
            
            return ResultHelper::json(400,'非ajax操作不能删除',[]);    
            
        }
        
    }

    /**
     * Finds the DdMember model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DdMember the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DdMember::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
