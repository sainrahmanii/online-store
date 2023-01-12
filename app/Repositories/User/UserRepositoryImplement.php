<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Models\Gambar;
use App\Http\Traits\ImageTrait;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use App\Repositories\User\UserRepository;
use LaravelEasyRepository\Implementations\Eloquent;
// use App\Http\Traits\ImageTrait;

class UserRepositoryImplement implements UserRepository
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

    public function handleGoogle()
    {
        $callback = Socialite::driver('google')->user();
        $gambar = $this->uploadImageGoogle($callback->getAvatar());
        $data = [
            'nama_lengkap'      => $callback->getName(),
            'email'     => $callback->getEmail(),
            'gambar_id'     => $gambar->id,
            'role_id'       => 1,
            'password' => encrypt('my-google')
        ];

        $user = $this->model->firstOrCreate(['email' => $data['email']], $data);

        return $user;
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

    public function upgradePenjual($data, $id)
    {
        $user = $this->model->find($id);

        $user->update([
            'role_id'      => 2,
        ]);

        $detail_penjual = $user->detailPenjual()->create([
            'alamat'            => $data['alamat']
        ]);

        $detail_penjual->detailPayment()->create([
            'nama_bank'         => $data['nama_bank'],
            'nomor_bank'        => $data['nomor_bank']
        ]);

        return $user;
    }

    // Write something awesome :)
}
