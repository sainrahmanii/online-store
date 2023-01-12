<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Product\ProductServiceImplement;

class ProductController extends Controller
{
    private $mainService;

    public function __construct(ProductServiceImplement $mainService)
    {
        $this->mainService = $mainService;
    }

    public function createProduct(Request $data)
    {
        $product = $this->mainService->createProduct($data);
        return response()->json($product);
    }
}
