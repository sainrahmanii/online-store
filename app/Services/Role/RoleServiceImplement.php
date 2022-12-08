<?php

namespace App\Services\Role;

use LaravelEasyRepository\Service;
use App\Repositories\Role\RoleRepository;
use App\Repositories\Role\RoleRepositoryImplement;

class RoleServiceImplement implements RoleService
{

    /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
    protected $mainRepository;

    public function __construct(RoleRepositoryImplement $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }

    public function createRole($data)
    {
        try {
            $role = $this->mainRepository->createRole($data);
            return $role;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    // Define your custom methods :)
}
