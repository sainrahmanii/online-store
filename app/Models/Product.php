<?php

namespace App\Models;

use App\Models\Variasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function variasis() {
        return $this->hasMany(Variasi::class);
    }
}
