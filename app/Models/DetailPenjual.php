<?php

namespace App\Models;

use App\Models\DetailPayment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailPenjual extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function detailPayment()
    {
        return $this->hasOne(DetailPayment::class);
    }
}
