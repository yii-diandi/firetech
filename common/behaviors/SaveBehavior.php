<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-05-15 22:50:42
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2021-03-04 10:54:27
 */

namespace common\behaviors;

use diandi\addons\models\Bloc;
use Yii;
use yii\base\Behavior;
use yii\db\BaseActiveRecord;

/**
 * @author Skilly
 */
class SaveBehavior extends Behavior
{
    public $createdAttribute = 'create_time';

    public $updatedAttribute = 'update_time';

    public $adminAttribute = 'admin_id';
    
    public $storeAttribute = 'store_id';

    public $blocAttribute = 'bloc_id';
    
    public $blocPAttribute = 'bloc_pid';//集团或上级公司

    public $attributes = [];
    
    public $is_bloc = false;//是否是集团数据模型

    private $_map;

    public function init()
    {
        global $_GPC;
        
        Yii::$app->service->commonGlobalsService->getGlobalBloc();

        
        if (empty($this->attributes)) {
            $this->attributes = [
                BaseActiveRecord::EVENT_BEFORE_INSERT => [$this->createdAttribute, $this->updatedAttribute, $this->blocAttribute, $this->storeAttribute, $this->blocPAttribute,$this->adminAttribute], //准备数据 在插入之前更新created和updated两个字段
                BaseActiveRecord::EVENT_BEFORE_UPDATE => [$this->updatedAttribute, $this->blocAttribute, $this->storeAttribute, $this->blocPAttribute], // 在更新之前更新updated字段
            ];
        }

        if(!$this->is_bloc){
            $bloc_id = Yii::$app->service->commonGlobalsService->getBloc_id();
            $store_id = Yii::$app->service->commonGlobalsService->getStore_id();
        }else{
            $bloc_id  =  Yii::$app->params['global_bloc_id'];
            $store_id =   Yii::$app->params['global_store_id'];
        }
        
        
        
        // 后台用户使用
        if (!empty($_GPC['bloc_id']) && $_GPC['bloc_id'] != $bloc_id) {
            $bloc_id = $_GPC['bloc_id'];
        }

        $blocPid = Bloc::find()->where(['bloc_id'=>$bloc_id])->select('pid')->one();

        // if (Yii::$app->user->identity->store_id) {
        //     $store_id = Yii::$app->user->identity->store_id;
        // }

        $admin_id = Yii::$app->user->identity->id;
        
        $this->_map = [
            $this->createdAttribute => time(), //在这里你可以随意格式化
            $this->updatedAttribute => time(),
            $this->blocAttribute  => $bloc_id,
            $this->storeAttribute => $store_id,
            $this->blocPAttribute => $blocPid['pid'],
            $this->adminAttribute => $admin_id
        ];
        
    }

    //@see http://www.yiichina.com/doc/api/2.0/yii-base-behavior#events()-detail
    public function events()
    {
        return array_fill_keys(array_keys($this->attributes), 'evaluateAttributes');
    }

    public function evaluateAttributes($event)
    {
        
        if (!empty($this->attributes[$event->name])) {
            $attributes = $this->attributes[$event->name];
            foreach ($attributes as $attribute) {
                if (array_key_exists($attribute, $this->owner->attributes) && empty($this->owner->attributes[$attribute])) {
                    $this->owner->$attribute = $this->getValue($attribute);
                }
            }


        }
        
    }

    protected function getValue($attribute)
    {
        return $this->_map[$attribute];
    }
}
