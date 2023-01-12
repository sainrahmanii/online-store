<?php

namespace App\Http\Traits;

use App\Models\Gambar;
use App\Models\GambarProduct;

trait ImageTrait
{
    function uploadImage($data, $field_name = 'image', $path = 'image')
    {
        $image = $data->file($field_name);
        $image->storeAs("public/$path", $image->hashName());
        $gambar = Gambar::create([
            'url'       => $image->hashName()
        ]);

        return $gambar;
    }

    function uploadImageGoogle($url)
    {
        $gambar = Gambar::firstOrCreate(['url' => $url], ['url' => $url]);
        return $gambar;
    }

    function uploadImageProduct($data, $field_name = 'image', $path = 'image')
    {
        $image = $data->file($field_name);
        $image->storeAs("public/$path", $image->hashName());
        $gambar = Gambar::create([
            'url'       => $image->hashName()
        ]);

        $gambar_product = GambarProduct::create([
            'product_id'        => $data['product_id'],
            'gambar_id'         => $data['gambar_id']
        ]);

        return $gambar;
    }
}
