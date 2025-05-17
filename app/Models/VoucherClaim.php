<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoucherClaim extends Model
{
    protected $fillable = [
        'nama', 'email', 'no_hp', 'nama_voucher', 'tanggal_klaim'
    ];
}

