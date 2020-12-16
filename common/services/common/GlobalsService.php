<?php
/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-03-27 12:34:22
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-12-14 13:08:35
 */

namespace common\services\common;

use common\helpers\CacheHelper;
use common\helpers\FileHelper;
use common\helpers\ImageHelper;
use common\models\enums\MessageStatus;
use common\models\MessageNoticeLog;
use common\models\UserBloc;
use common\services\BaseService;
use diandi\admin\models\AuthAssignmentGroup;
use diandi\admin\models\Bloc;
use diandi\admin\models\BlocConfBaidu;
use diandi\admin\models\BlocConfEmail;
use diandi\admin\models\BlocConfSms;
use diandi\admin\models\BlocConfWechat;
use diandi\admin\models\BlocConfWechatpay;
use diandi\admin\models\BlocConfWxapp;
use diandi\admin\models\BlocStore;
use Yii;

/**
 * 全局服务
 *
 * @author chunchun <2192138785@qq.com>
 */
class GlobalsService extends BaseService
{
    // 公司id
    private $bloc_id = 1;
    // 子公司id
    private $store_id = 1;

    
    // 集团id
    private $global_bloc_id = 1;
    
    // 集团主营商户
    private $global_store_id = 1;

    //模块表示
    private $addons = 'system';

    public function initId($bloc_id, $store_id, $addons)
    {
        $this->setbloc_id($bloc_id);
        $this->setStore_id($store_id);
        $this->setAddons($addons);
    }

    // 全局设置商家id
    public function setbloc_id($id)
    {
        $this->bloc_id = $id;
    }

    // 全局集团配置参数
    public function getGlobalBloc()
    {
        $Bloc = new Bloc();
        
        $global_bloc =  $Bloc->find()->where(['status'=>1])->select(['bloc_id','store_id'])->one();
        
        $this->global_bloc_id =   $global_bloc['bloc_id'];
        
        $this->global_store_id =   $global_bloc['store_id'];
        
        Yii::$app->params['global_bloc_id'] = $global_bloc['bloc_id'];
        
        Yii::$app->params['global_store_id'] = $global_bloc['store_id'];
        
        return $this->global_bloc_id;
    }


    // 全局设置商家id
    public function getbloc_id()
    {
        $globalBloc = Yii::$app->cache->get('globalBloc');
        if (isset($globalBloc['bloc_id']) && !empty($globalBloc['bloc_id']) && Yii::$app->id == 'app-backend') {
            return  $globalBloc['bloc_id'];
        }

        return $this->bloc_id;
    }

    // 全局设置子公司id
    public function setStore_id($id)
    {
        $this->store_id = $id;
    }

    // 全局获取子公司id
    public function getStore_id()
    {
        $globalBloc = Yii::$app->cache->get('globalBloc');
        if (isset($globalBloc['store_id']) && !empty($globalBloc['store_id']) && Yii::$app->id == 'app-backend') {
            return  $globalBloc['store_id'];
        }
        return $this->store_id;
    }

    // 全局设置扩展
    public function setAddons($id)
    {
        $this->addons = $id;
    }

    // 全局获取扩展
    public function getAddons()
    {
        return $this->addons;
    }

    public function getBlocAll()
    {
        return  Bloc::find()->where(['status' => 1])->asArray()->all();
    }

    /**
     * 获取全局配置信息.
     *
     * @param int|null post
     *
     * @return string
     *
     * @throws NotFoundHttpException
     */
    public function getConf($bloc_id = 0)
    {
        $logPath = Yii::getAlias('@runtime/config/getConf/'.date('ymd').'.log');

        $cacheKey = 'conf_'.$bloc_id;
        if (Yii::$app->cache->get($cacheKey)) {
            Yii::$app->params['conf'] = Yii::$app->cache->get($cacheKey);
                
            return Yii::$app->cache->get($cacheKey);
        }

        FileHelper::writeLog($logPath, '配置获取'.$bloc_id);

        // 配置优先级 自己--》集团--》系统默认        
  
        
        if(!empty($bloc_id)){
            // 微信支付配置
            $conf['wechatpay'] = BlocConfWechatpay::find()->where(['bloc_id' => $bloc_id])->asArray()->one();
            // 邮件配置
            $conf['email'] = BlocConfEmail::find()->where(['bloc_id' => $bloc_id])->asArray()->one();
            // 小程序配置
            $conf['wxapp'] = BlocConfWxapp::find()->where(['bloc_id' => $bloc_id])->asArray()->one();
            // 短信配置
            $conf['sms'] = BlocConfSms::find()->where(['bloc_id' => $bloc_id])->asArray()->one();
            // 百度ai-sdk
            $conf['baidu'] = BlocConfBaidu::find()->where(['bloc_id' => $bloc_id])->asArray()->one();
            // 公众号配置
            $conf['wechat'] = BlocConfWechat::find()->where(['bloc_id' => $bloc_id])->asArray()->one();
            
        }
       
        
        // 自己配置为空获取集团
        $Bloc = new Bloc();
        $global_bloc =  $Bloc->find()->where(['status'=>1])->select(['bloc_id','store_id'])->one();
        FileHelper::writeLog($logPath, '集团id'.$global_bloc['bloc_id']);
        $global_bloc_id =   $global_bloc['bloc_id'];
        
        Yii::$app->params['global_bloc_id'] = $global_bloc['bloc_id'];
        
        Yii::$app->params['global_store_id'] = $global_bloc['store_id'];
        
        if (empty($conf['baidu'])) {
            // 百度ai-sdk
            $conf['baidu'] = BlocConfBaidu::find()->where(['bloc_id' => $global_bloc_id])->asArray()->one();
        }

        if (empty($conf['wechatpay'])) {
            // 微信支付配置 
            $conf['wechatpay'] = BlocConfWechatpay::find()->where(['bloc_id' => $global_bloc_id])->asArray()->one();
            
        }

        if (empty($conf['sms'])) {
            // 短信配置
            $conf['sms'] = BlocConfSms::find()->where(['bloc_id' => $global_bloc_id])->asArray()->one();
        }

        if (empty($conf['wxapp'])) {
            // 小程序配置
            $conf['wxapp'] = BlocConfWxapp::find()->where(['bloc_id' => $global_bloc_id])->asArray()->one();
        }

        if (empty($conf['wechat'])) {
            // 公众号配置
            $conf['wechat'] = BlocConfWechat::find()->where(['bloc_id' => $global_bloc_id])->asArray()->one();
        }

        if (empty($conf['email'])) {
            
            // 邮件配置
            $conf['email'] = BlocConfEmail::find()->where(['bloc_id' => $global_bloc_id])->asArray()->one();
        }

        // 都为空就使用系统默认的
        if (empty($conf['baidu'])) {
            $conf['baidu'] = Yii::$app->settings->getAllBySection('Baidu');
        }

        if (empty($conf['wechatpay'])) {
            $conf['wechatpay'] = Yii::$app->settings->getAllBySection('Wechatpay');
        }

        if (empty($conf['sms'])) {
            $conf['sms'] = Yii::$app->settings->getAllBySection('Sms');
        }

        if (empty($conf['wxapp'])) {
            $conf['wxapp'] = Yii::$app->settings->getAllBySection('Wxapp');
        }

        if (empty($conf['wechat'])) {
            $conf['wechat'] = Yii::$app->settings->getAllBySection('Wechat');
        }

        if (empty($conf['email'])) {
            $conf['email'] = Yii::$app->settings->getAllBySection('Email');
        }

        
        $cacheClass = new CacheHelper();
        $cacheClass->set($cacheKey, $conf);

        Yii::$app->params['conf'] = $conf;

        return $conf;
    }

    public static function isSelf()
    {
        $store_id = Yii::$app->params['store_id'];
        
        return $store_id == Yii::$app->settings->get('Website', 'store_id'); 
    }

    /**
     * 获取一个用户所有得公司.
     */
    public function getBlocByuserId($user_id)
    {
        $Bloc = new Bloc();
        $key = $user_id.'_blocs';
        if (Yii::$app->cache->get($key)) {
            Yii::$app->params['userBloc'] = Yii::$app->cache->get($key);

            return Yii::$app->cache->get($key);
        }

        $group = AuthAssignmentGroup::findAll(['user_id' => $user_id]);
        $where = [];
        $list = [];
        Yii::$app->params['userBloc'] = [];
        if (!in_array('总管理员', array_column($group, 'item_name'))) {
            $where = ['user_id' => $user_id];
            $UserBloc = new UserBloc();
            $bloc_ids = $UserBloc->find()->where($where)->with(['bloc', 'store'])->select(['bloc_id', 'store_id'])->asArray()->all();
            foreach ($bloc_ids as $key => $value) {
                $value['bloc']['store'][] = $value['store'];
                $list[$value['bloc_id']] = $value['bloc'];
            }
            Yii::$app->params['userBloc'] = array_values($list);
        } else {
            $list = $Bloc->find()
            ->with(['store'])
            ->asArray()
            ->all();
            Yii::$app->params['userBloc'] = $list;
        }
        
        $cacheClass = new CacheHelper();
        $cacheClass->set($key, $list);

        return $list;
    }

    /**
     * 获取公司与商户详细信息.
     *
     * @param int|null post
     *
     * @return string
     *
     * @throws NotFoundHttpException
     */
    public function getStoreDetail($store_id)
    {
        $key = 'StoreDetail_'.intval($store_id);
        if (Yii::$app->cache->get($key)) {
            return Yii::$app->cache->get($key);
        } else {
            $BlocStore = new BlocStore();
            $store = $BlocStore->find()->where(['store_id' => $store_id])->with(['bloc'])->asArray()->one();
            $info = [];
            if ($store) {
                $store['logopath'] = yii::getAlias("@attachment/".$store['logo']);
                $store['logo'] = ImageHelper::tomedia($store['logo']);
                $extra = unserialize($store['extra']);
                $extra = $extra ? $extra : [];
                $info = array_merge($store, $extra);
            }
            
            $info['isself']  = self::isSelf();

            $cacheClass = new CacheHelper();
            $cacheClass->set($key, $info);

            return $info;
        }
    }
    
    // 获取一个公司的所有子公司
    public function getBlocChild($bloc_id)
    {
        return Bloc::find()->where(['pid'=>$bloc_id])->asArray()->all();
    }

    /**
     * 获取全局系统消息.
     */
    public function getMessage($bloc_id = 0)
    {
        $cacheKey = 'message_'.$bloc_id;
        if (Yii::$app->cache->get($cacheKey)) {
            Yii::$app->params['message'] = Yii::$app->cache->get($cacheKey);

            return;
        }
        $MessageNoticeLog = new MessageNoticeLog();
        $list = $MessageNoticeLog->find()->asArray()->all();
        $status = MessageStatus::listData();
        foreach ($list as $key => &$value) {
            $value['type'] = $status[$value['type']];
        }

        $message = [
            'list' => $list,
            'total' => count($list),
        ];
        $cacheClass = new CacheHelper();
        $cacheClass->set($cacheKey, $message);

        return $message;
    }
}
