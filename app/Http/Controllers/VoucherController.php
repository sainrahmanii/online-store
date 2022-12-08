<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Voucher\VoucherService;
use App\Services\Voucher\VoucherServiceImplement;

class VoucherController extends Controller
{
    private $mainService;

    public function __construct(VoucherServiceImplement $mainService)
    {
        $this->mainService = $mainService;
    }


    public function createVoucher(Request $request)
    {
        $voucher = $this->mainService->createVoucher($request);
        return $voucher;
    }
}
