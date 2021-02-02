<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-09-19 11:03:51
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2021-01-22 21:42:01
 */
 

namespace addons\diandi_ai\frontend;


use Yii;
use yii\helpers\Url;
use yii\web\Controller;


/**
 * @SWG\Swagger(
 *     schemes={"http"},
 *     host="www.ai.com/api",
 *     basePath="/",
 *     produces={"application/json"},
 *     consumes={"application/x-www-form-urlencoded"},
 *     @SWG\Info(version="1.0", title="店滴AI接口文档",
 *     description="店滴AI接口文档",
 *         @SWG\Contact(
 *             name="王春生",
 *             email="2192138785@qq.com"
 *         )),
 *     )
 */
class DocController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'index' => [
                'class' => 'yii2mod\swagger\SwaggerUIRenderer',
                // 'restUrls' => Url::to(['doc/json-schema']),
                'restUrl' => [
                    ['url' => Url::to(['doc/json-base']), 'name' => '店滴AI接口'],
                ],
                'view' => '@frontend/views/apidoc/index'
            ],
            'json-base' => [
                'class' => 'yii2mod\swagger\OpenAPIRenderer',
                'scanDir' => [
                    Yii::getAlias('@addons/diandi_ai/api'),
                    Yii::getAlias('@frontend/controllers')
                ],
                'cacheKey' => 'diandi_ai-api',
            ],
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
}
