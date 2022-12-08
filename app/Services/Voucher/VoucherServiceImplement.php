<?php

namespace App\Services\Voucher;

use App\Repositories\Voucher\VoucherRepositoryImplement;

class VoucherServiceImplement implements VoucherService
{

    /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
    protected $mainRepository;

    public function __construct(VoucherRepositoryImplement $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }


    public function createVoucher($data)
    {
        try {
            $voucher = $this->mainRepository->createVoucher($data);
            return $voucher;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    // Define your custom methods :)
}
