<?php

namespace backend\controllers\diandiai;

use Yii;
use common\models\DdAiFaces;
use common\models\searchs\DdAiFacesSearch;
use backend\controllers\BaseController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\searchs\DdAiMemberSearch;
use yii\web\BadRequestHttpException;
/**
 * DdAiFacesController implements the CRUD actions for DdAiFaces model.
 */
class DdAiFacesController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all DdAiFaces models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DdAiFacesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DdAiFaces model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new DdAiFaces model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DdAiFaces();

        if(Yii::$app->request->isPost){
            $data = Yii::$app->request->post();
            if ($model->load($data) && $model->save()) {
                $model->addUser($data['DdAiFaces']['face_image'], $data['DdAiFaces']['ai_group_id'], $data['DdAiFaces']['ai_user_id']);
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                $message = $model->getErrors();
               
                throw new BadRequestHttpException($message);
            }

        }
       


        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUsers()
    {
        $searchModel = new DdAiMemberSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->renderAjax('users', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }

    /**
     * Updates an existing DdAiFaces model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if(Yii::$app->request->isPost){
            $data = Yii::$app->request->post();
            if ($model->load($data) && $model->save()) {
                $model->updateUser($data['DdAiFaces']['face_image'], $data['DdAiFaces']['ai_group_id'], $data['DdAiFaces']['ai_user_id']);
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                $message = $model->getErrors();
               
                throw new BadRequestHttpException($message);
            }

        }
       

       

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DdAiFaces model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
      
        $group_id = $model->ai_group_id;
        $faceToken = $model->face_token;
        $ai_user_id =$model->ai_user_id;

        $res = $model->faceDelete($ai_user_id,$group_id,$faceToken);
        if($res['error_code']==0){
            $this->findModel($id)->delete();

        }else{
            
            $message = Yii::$app->params['aierror'][$res['error_code']];
               
            throw new BadRequestHttpException($message);

        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the DdAiFaces model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DdAiFaces the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DdAiFaces::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
