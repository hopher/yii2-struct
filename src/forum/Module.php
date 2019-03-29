<?php
namespace app\modules\forum;

use Yii;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();

        // $this->params['foo'] = 'bar';
        // ...  其他初始化代码 ...

        // 从config.php 加载配置来初始化模块
        Yii::configure($this, require __DIR__ . '/config.php');

        // 命令行
        // 格式: yii <module_id>/<command>/<sub_command>
        if (Yii::$app instanceof \yii\console\Application) {
            $this->controllerNamespace = 'app\modules\forum\commands';
        }

    }

}
