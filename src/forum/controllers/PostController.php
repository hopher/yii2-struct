<?php

namespace app\modules\forum\controllers;

use Yii;
use yii\web\Controller;

class PostController extends Controller
{
    protected $userService;

    public function init()
    {
        $this->userService = Yii::$container->get('app\modules\forum\services\UserService');
    }

    public function actionIndex()
    {
        $message = $this->userService->findIdLargeThan(100);
        print_r($message);
        echo "===========";
    }
}
