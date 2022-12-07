<?php

namespace App\Http\Traits;
use App\Models\Gambar;

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
}
