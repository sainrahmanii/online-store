<?php

namespace App\Services\Product;

use App\Repositories\Product\ProductRepositoryImplement;

class ProductServiceImplement implements ProductService
{

    /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
    protected $mainRepository;

    public function __construct(ProductRepositoryImplement $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }

    public function createProduct($data)
    {
        $product = $this->mainRepository->createProduct($data);
        return $product;
    }

    // Define your custom methods :)
}
