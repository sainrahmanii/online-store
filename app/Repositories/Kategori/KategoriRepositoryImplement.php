<?php

namespace App\Repositories\Kategori;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Kategori;

class KategoriRepositoryImplement implements KategoriRepository
{

    /**
     * Model class to be used in this repository for the common methods inside Eloquent
     * Don't remove or change $this->model variable name
     * @property Model|mixed $model;
     */
    protected $model;

    public function __construct(Kategori $model)
    {
        $this->model = $model;
    }

    public function createKategori($data)
    {
        $kategori = $this->model->create([
            'nama_kategori'         => $data['nama_kategori']
        ]);

        return $kategori;
    }

    // Write something awesome :)
}
