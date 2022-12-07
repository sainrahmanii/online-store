<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Http\Traits\ImageTrait;
use Illuminate\Support\Facades\Hash;
use App\Repositories\User\UserRepository;
use LaravelEasyRepository\Implementations\Eloquent;
// use App\Http\Traits\ImageTrait;

class UserRepositoryImplement extends Eloquent implements UserRepository
{
    use ImageTrait;

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
        $gambar = $this->uploadImage($data);
        $user = $this->model->create([
            'nama_lengkap'      => $data['nama_lengkap'],
            'gambar_id'      => $gambar['id'],
            'email'      => $data['email'],
            'role_id'      => $data['role_id'],
            'password'      => Hash::make($data['password']),
        ]);

        return $user;
    }

    public function createPenjual($data)
    {
        $gambar = $this->uploadImage($data);
        $user = $this->model->create([
            'nama_lengkap'      => $data['nama_lengkap'],
            'gambar_id'      => $gambar['id'],
            'email'      => $data['email'],
            'role_id'      => $data['role_id'],
            'password'      => Hash::make($data['password']),
        ]);

        $detail_penjual = $user->detailPenjual()->create([
            'alamat'            => $data['alamat']
        ]);

        $detail_penjual->detailPayment()->create([
            'nama_bank'         => $data['nama_bank'],
            'nomor_bank'        => $data['nomor_bank']
        ]);
    }

    // Write something awesome :)
}
