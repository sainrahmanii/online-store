<?php

namespace App\Repositories\Voucher;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Voucher;

class VoucherRepositoryImplement implements VoucherRepository
{

    /**
     * Model class to be used in this repository for the common methods inside Eloquent
     * Don't remove or change $this->model variable name
     * @property Model|mixed $model;
     */
    protected $model;

    public function __construct(Voucher $model)
    {
        $this->model = $model;
    }

    public function createVoucher($data)
    {
        $voucher = $this->model->create([
            'nama_voucher'              => $data['nama_voucher'],
            'potongan'              => $data['potongan'],
            'awal_tanggal'              => $data['awal_tanggal'],
            'akhir_tanggal'              => $data['akhir_tanggal'],
        ]);

        return $voucher;
    }
}
