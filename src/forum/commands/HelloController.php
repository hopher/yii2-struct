<?php

namespace app\modules\forum\commands;

use yii\console\Controller;
use yii\console\ExitCode;

class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * 示例: `php yii forum/hello "hello test"`
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionIndex($message = 'hello world')
    {
        echo $message . "\n";
        return ExitCode::OK;
    }
}
