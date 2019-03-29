<?php

namespace app\modules\forum\repositories;

use app\modules\forum\models\User;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * 查找大于 id 用户
     *
     * @return void
     */
    public function findIdLargeThan($id)
    {
        return $this->user->findIdentity(102);
    }

}
