<?php

namespace app\modules\forum\services;

use app\modules\forum\repositories\UserRepository;

class UserService
{
    protected $user;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * 这里用魔术方法，做了简单处理
     * 请根据实际做要应修改
     */
    public function __call($method, $args)
    {
        return call_user_func_array([$this->userRepository, $method], $args);
    }

}
