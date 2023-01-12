<?php

namespace App\Services\User;

interface UserService{

    // Write something awesome :)
    public function handleGoogle();
    public function createUser($data);
    public function upgradePenjual($data, $id);
}
