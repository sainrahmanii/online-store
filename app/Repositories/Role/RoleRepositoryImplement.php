<?php

namespace App\Repositories\Role;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Role;

class RoleRepositoryImplement implements RoleRepository
{

    /**
     * Model class to be used in this repository for the common methods inside Eloquent
     * Don't remove or change $this->model variable name
     * @property Model|mixed $model;
     */
    protected $model;

    public function __construct(Role $model)
    {
        $this->model = $model;
    }

    public function createRole($data)
    {
        $role = $this->model->create([
            'nama_role'     => $data['nama_role']
        ]);

        return $role;
    }

    // Write something awesome :)
}
