<?php

namespace App\Repositories\User;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Repositories\User\UserRepository;

class UserRepositoryImplement extends Eloquent implements UserRepository
{

    /**
     * Model class to be used in this repository for the common methods inside Eloquent
     * Don't remove or change $this->model variable name
     * @property Model|mixed $model;
     */
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function createUser($data)
    {
        $image = $data->file('user_photo');
        $image->storeAs('public/user', $image->hashName());
        $gambar = $this->model->gambar()->create([
            'url'       => $image->hashName()
        ]);
        $user = $gambar->user()->create([
            'nama_lengkap'      => $data['nama_lengkap'],
            'email'      => $data['email'],
            'role_id'      => $data['role_id'],
            'password'      => Hash::make($data['password']),
        ]);

        return $user;
    }

    // Write something awesome :)
}
