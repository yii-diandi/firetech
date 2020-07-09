<?php

/**
 * @Author: Wang Chunsheng 2192138785@qq.com
 * @Date:   2020-03-26 00:09:42
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-06-23 15:00:41
 */
echo "<?php\n";
?>

namespace <?= $generator->getControllerNamespace(); ?>;

use Yii;
use yii\db\Migration;
use common\helpers\MigrateHelper;
use common\interfaces\AddonWidget;

/**
 * 安装
 *
 * Class Install
 * @package addons\Merchants
 */
class Install extends Migration implements AddonWidget
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
    MigrateHelper::upByPath([
      '@addons/Merchants/console/migrations/'
    ]);
  }
}
