<?php

namespace App\Repositories\User;

use LaravelEasyRepository\Repository;

interface UserRepository{

    public function handleGoogle();
    public function createUser($data);
    public function upgradePenjual($data, $id);
    // Write something awesome :)
}
