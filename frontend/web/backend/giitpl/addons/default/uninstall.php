<?php

/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-03-26 00:09:42
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-06-23 15:01:12
 */
echo "<?php\n";
?>

namespace <?= $generator->getControllerNamespace(); ?>;

use yii\db\Migration;
use common\enums\AppEnum;
use common\models\rbac\AuthItemChild;
use common\models\rbac\AuthRole;
use common\models\common\ConfigValue;
use common\helpers\MigrateHelper;
use common\interfaces\AddonWidget;

/**
 * 卸载
 *
 * Class UnInstall
 * @package addons\Merchants
 */
class UnInstall extends Migration implements AddonWidget
{
    /**
     * @param $addon
     * @return mixed|void
     * @throws \yii\base\InvalidConfigException
     * @throws \yii\web\NotFoundHttpException
     * @throws \yii\web\UnprocessableEntityHttpException
     */
    public function run($addon)
    {
        // 移除商家角色
        AuthRole::deleteAll(['app_id' => AppEnum::MERCHANT]);
        // 移除商家权限
        AuthItemChild::deleteAll(['app_id' => AppEnum::MERCHANT]);
        // 清理配置
        ConfigValue::deleteAll(['app_id' => AppEnum::MERCHANT]);

        MigrateHelper::downByPath([
            '@addons/Merchants/console/migrations/'
        ]);
    }
}
