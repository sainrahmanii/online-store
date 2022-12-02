<?php

namespace App\Services\User;

use App\Repositories\User\UserRepositoryImplement;

class UserServiceImplement implements UserService
{

    /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
    protected $mainRepository;

    public function __construct(UserRepositoryImplement $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }

    public function createUser($data)
    {
        try {
            $user = $this->mainRepository->createUser($data);
            return $user;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    // Define your custom methods :)
}
