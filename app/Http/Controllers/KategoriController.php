<?php

namespace App\Http\Controllers;

use App\Services\Kategori\KategoriServiceImplement;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    private $mainService;

    public function __construct(KategoriServiceImplement $mainService)
    {
        $this->mainService = $mainService;
    }

    public function createKategori(Request $request)
    {
        $kategori = $this->mainService->createKategori($request);
        return $kategori;
    }
}
