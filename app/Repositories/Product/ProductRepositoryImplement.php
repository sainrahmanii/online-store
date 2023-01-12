<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Http\Traits\ImageTrait;
use LaravelEasyRepository\Implementations\Eloquent;

class ProductRepositoryImplement implements ProductRepository
{
    use ImageTrait;

    /**
     * Model class to be used in this repository for the common methods inside Eloquent
     * Don't remove or change $this->model variable name
     * @property Model|mixed $model;
     */
    protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function createProduct($data)
    {
        $product = $this->model->create([
            'user_id'               => $data['user_id'],
            'kategori_id'           => $data['kategori_id'],
            'nama_product'          => $data['nama_product'],
            'harga'                 => $data['harga'],
            'deskripsi'             => $data['deskripsi'],
        ]);

        $data['product_id'] = $product->id;
        $gambar = $this->uploadImageProduct($data);

        $product->variasis()->create([
            'warna'     => $data['warna'],
            'ukuran'     => $data['ukuran'],
        ]);

        return $product;
    }

    // Write something awesome :)
}
