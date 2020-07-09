<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-06-01 19:54:55
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-06-01 19:57:31
 */
 

namespace api\modules\v1\controllers;

use Yii;
use api\controllers\AController;
use common\models\DdAiFaces;
use common\models\DdAiMember;
use diandi\diandiai\AipFace;

/**
 * Class AifaceController
 */
class AifaceController extends AController
{
    public $modelClass = '\common\models\DdAiMember';
    public $client;
    public function init()
    {
        $settings = Yii::$app->settings;
        $APP_ID   = $settings->get('Baidu', 'APP_ID');
        $API_KEY   = $settings->get('Baidu', 'API_KEY');
        $SECRET_KEY   = $settings->get('Baidu', 'SECRET_KEY');
        $this->client = new AipFace($APP_ID, $API_KEY, $SECRET_KEY);
    }

    public function actionSearch()
    {
        return [
            'error_code'    => 20,
            'res_msg'       => 'ok',
        ];
    }


    /**
     * @SWG\Post(path="/v1/aiface/detect",
     *     tags={"人脸检测"},
     *     summary="人脸检测接口",
     *     @SWG\Response(
     *         response = 200,
     *         description = "人脸检测接口",
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */


    public function actionDetect()
    {

        $data = Yii::$app->request->post();
        // $ac = get_class_methods($client);
        // return $ac;
        $images = $data['images'];
        $image = base64_encode(file_get_contents($images));
        $imageType = "BASE64";
        // 如果有可选参数
        $options = array();
        // 包括age,
        // beauty 美丽程度,
        // expression 表情,
        // face_shape 身材 ,
        // gender 性别,
        // glasses 眼镜,
        // landmark,
        // landmark72，
        // landmark150，
        // race 人种,
        // quality 图片质量,
        // eye_status,
        // emotion 情绪,
        // face_type 信息
        // 逗号分隔. 默认只返回face_token、人脸框、概率和旋转角度
        $options["face_field"] = "age,beauty,expression,face_shape,gender,glasses,race,quality,eye_status,emotion";
        $options["max_face_num"] = 2;
        $options["face_type"] = "LIVE";
        $options["liveness_control"] = "LOW";
        $DdAiMember = new  DdAiMember();

        // 人脸检索存在就返回
        $groupIdList = 1;
        $face_exit = $this->client->search($image, $imageType, $groupIdList, $options);
        // return $face_exit['result']['user_list']; 
        if ($face_exit['result']['user_list'][0]['score'] > 95) {
            $user_id = $face_exit['result']['user_list'][0]['user_id'];
            return $DdAiMember::find()->where(['user_id' => $user_id])->one();
        }
        // 带参数调用人脸检测
        $aidatas = $this->client->detect($image, $imageType, $options);
        $face_group_id = 1;
        if ($aidatas['error_msg'] == 'SUCCESS') {
            /* 脸部校验成功 */
            $face_list = $aidatas['result']['face_list'];
            $DdAiFaces = new DdAiFaces();
            foreach ($face_list as $key => $value) {
                $_DdAiMember = clone $DdAiMember;
                $_DdAiFaces = clone $DdAiFaces;
                $face_id = $_DdAiMember->addMember($value, $images, $face_group_id);
                if (is_numeric($face_id) && $face_id > 0) {
                    $res[$face_id] = $this->client->addUser($image, $imageType, $face_group_id, $face_id);
                    if ($res[$face_id]['error_code'] == 0) {
                        $faceadd = [
                            'ai_user_id' => $face_id,
                            'ai_group_id' => $face_group_id,
                            'ai_face_status' => 'ok',
                            'face_image' => $images,
                            'face_token' => $value['face_token'],
                        ];
                        $_DdAiFaces->setAttributes($faceadd);
                        $_DdAiFaces->save();
                    }
                } else {
                    return $face_id;
                }
            }
        }
        return $res;
    }

    /**
     * @SWG\Post(path="/v1/aiface/searchs",
     *     tags={"人脸搜索"},
     *     summary="人脸搜索接口",
     *     @SWG\Response(
     *         response = 200,
     *         description = "人脸搜索接口"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionSearchs()
    {
        $data = Yii::$app->request->post();



        $client = $this->client;
        // $ac = get_class_methods($client);
        // return $ac;
        $images = $data['images'];
        $image = base64_encode(file_get_contents($images));
        $imageType = "BASE64";


        // 如果有可选参数
        $options = array();
        $options["face_field"] = "age";
        $options["max_face_num"] = 2;
        $options["face_type"] = "LIVE";
        $options["liveness_control"] = "LOW";
        $groupIdList = 1;
        // 带参数调用人脸检测
        $res = $client->search($image, $imageType, $groupIdList, $options);
        return $res;
    }
    /**
     * @SWG\Post(path="/v1/aiface/MultiSearch",
     *     tags={"人脸搜索"},
     *     summary="人脸搜索 M:N 识别接口",
     *     @SWG\Response(
     *         response = 200,
     *         description = "人脸搜索 M:N 识别接口"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionMultiSearch()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/AddUser",
     *     tags={"人脸库管理"},
     *     summary="人脸注册接口",
     *     @SWG\Response(
     *         response = 200,
     *         description = "人脸注册接口"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionAddUser()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/UpdateUser",
     *     tags={"人脸识别"},
     *     summary="人脸更新接口",
     *     @SWG\Response(
     *         response = 200,
     *         description = "人脸更新接口"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionUpdateUser()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/FaceDelete",
     *     tags={"人脸库管理"},
     *     summary="人脸删除接口",
     *     @SWG\Response(
     *         response = 200,
     *         description = "人脸删除接口"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionFaceDelete()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/GetUser",
     *     tags={"人脸库管理"},
     *     summary="用户信息查询接口",
     *     @SWG\Response(
     *         response = 200,
     *         description = "用户信息查询接口"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionGetUser()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/FaceGetlist",
     *     tags={"人脸识别"},
     *     summary="获取用户人脸列表接口",
     *     @SWG\Response(
     *         response = 200,
     *         description = "获取用户人脸列表接口"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionFaceGetlist()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/GetGroupUsers",
     *     tags={"人脸识别"},
     *     summary="获取用户列表接口",
     *     @SWG\Response(
     *         response = 200,
     *         description = "获取用户列表接口"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionGetGroupUsers()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/UserCopy",
     *     tags={"人脸库管理"},
     *     summary="复制用户接口",
     *     @SWG\Response(
     *         response = 200,
     *         description = "复制用户接口"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionUserCopy()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/DeleteUser",
     *     tags={"人脸识别"},
     *     summary="删除用户接口",
     *     @SWG\Response(
     *         response = 200,
     *         description = "删除用户接口"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionDeleteUser()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/GroupAdd",
     *     tags={"人脸库管理"},
     *     summary="创建用户组接口",
     *     @SWG\Response(
     *         response = 200,
     *         description = "创建用户组接口"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionGroupAdd()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/GroupDelete",
     *     tags={"人脸库管理"},
     *     summary="删除用户组接口",
     *     @SWG\Response(
     *         response = 200,
     *         description = "删除用户组接口"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionGroupDelete()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/GetGroupList",
     *     tags={"人脸库管理"},
     *     summary="组列表查询接口",
     *     @SWG\Response(
     *         response = 200,
     *         description = "组列表查询接口"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionGetGroupList()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/PersonVerify",
     *     tags={"人脸库管理"},
     *     summary="身份验证接口",
     *     @SWG\Response(
     *         response = 200,
     *         description = "身份验证接口"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionPersonVerify()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/VideoSessioncode",
     *     tags={"语音接口"},
     *     summary="语音校验码接口接口",
     *     @SWG\Response(
     *         response = 200,
     *         description = "语音校验码接口接口"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionVideoSessioncode()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/Faceverify",
     *     tags={"人脸检测"},
     *     summary="在线活体检测",
     *     @SWG\Response(
     *         response = 200,
     *         description = "在线活体检测"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionFaceverify()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/Match",
     *     tags={"人脸搜索"},
     *     summary="人脸比对",
     *     @SWG\Response(
     *         response = 200,
     *         description = "人脸比对"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */
    public function actionMatch()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/GetVersion",
     *     tags={"人脸识别"},
     *     summary="人脸比对接口",
     *     @SWG\Response(
     *         response = 200,
     *         description = "人脸比对接口"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionGetVersion()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/SetConnectionTimeoutInMillis",
     *     tags={"人脸识别"},
     *     summary="脸部识别",
     *     @SWG\Response(
     *         response = 200,
     *         description = "脸部识别base"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */
    public function actionSetConnectionTimeoutInMillis()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/SetSocketTimeoutInMillis",
     *     tags={"人脸识别"},
     *     summary="脸部识别",
     *     @SWG\Response(
     *         response = 200,
     *         description = "脸部识别base"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionSetSocketTimeoutInMillis()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/SetProxies",
     *     tags={"人脸识别"},
     *     summary="脸部识别",
     *     @SWG\Response(
     *         response = 200,
     *         description = "脸部识别base"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */
    public function actionSetProxies()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/Report",
     *     tags={"人脸识别"},
     *     summary="脸部识别",
     *     @SWG\Response(
     *         response = 200,
     *         description = "脸部识别base"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */

    public function actionReport()
    {
    }
    /**
     * @SWG\Post(path="/v1/aiface/Npost",
     *     tags={"人脸识别"},
     *     summary="脸部识别",
     *     @SWG\Response(
     *         response = 200,
     *         description = "脸部识别base"
     *     ),
     *     @SWG\Parameter(
     *      in="formData",
     *      name="images",
     *      type="string",
     *      description="脸部图片路径",
     *      required=true,
     *    ),
     * @SWG\Parameter(
     *      name="access-token",
     *      type="string",
     *      in="query",
     *      required=true
     *  )
     * )
     *
     */
    public function actioNpost()
    {
    }
}
