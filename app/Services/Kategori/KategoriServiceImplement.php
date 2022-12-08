<?php

namespace App\Services\Kategori;

use App\Repositories\Kategori\KategoriRepositoryImplement;

class KategoriServiceImplement implements KategoriService{

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected $mainRepository;

    public function __construct(KategoriRepositoryImplement $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    public function createKategori($data)
    {
        try {
            $kategori = $this->mainRepository->createKategori($data);
            return $kategori;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    // Define your custom methods :)
}
