<?php

namespace App\Services\User;

use Illuminate\Support\Facades\DB;
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
            DB::beginTransaction();
            $user = $this->mainRepository->createUser($data);
            DB::commit();
            return $user;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function createPenjual($data)
    {
        try {
            DB::beginTransaction();
            $penjual = $this->mainRepository->createPenjual($data);
            DB::commit();
            return $penjual;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    // Define your custom methods :)
}
