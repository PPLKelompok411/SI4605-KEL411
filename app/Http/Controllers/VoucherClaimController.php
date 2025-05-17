<?php

namespace App\Http\Controllers;

use App\Models\VoucherClaim;

class VoucherClaimController extends Controller
{
    // public function index()
    // {
    //     $claims = VoucherClaim::orderBy('tanggal_klaim', 'desc')->get();
    //     return view('kelolavoucher', compact('claims'));
    // }

    public function index()
{
    // Jangan ambil data dari database dulu, pakai array dummy
    $voucherClaims = [
        (object)[
            'id' => 1,
            'nama_pengguna' => 'Budi',
            'nama_voucher' => 'Diskon 10%',
            'tanggal_klaim' => '2025-05-07'
        ],
        (object)[
            'id' => 2,
            'nama_pengguna' => 'Ani',
            'nama_voucher' => 'Gratis Ongkir',
            'tanggal_klaim' => '2025-05-06'
        ],
    ];

    return view('kelolavoucher', compact('voucherClaims'));
}

}

