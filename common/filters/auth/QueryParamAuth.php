<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-12-30 01:48:37
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2021-01-02 00:38:16
 */
 
namespace common\filters\auth;


use common\models\enums\CodeStatus;
use yii\filters\auth\QueryParamAuth as AuthQueryParamAuth;

class QueryParamAuth extends AuthQueryParamAuth
{

    /**
     * {@inheritdoc}
     */
    public function handleFailure($response)
    {
        echo(json_encode([
            'code'=>CodeStatus::getValueByName('token失效'),
            'message'=>'用户token验证失败',
            'data'=>[]
            ]));
        die;
    }
    

}