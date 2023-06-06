<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    use HasFactory;
    protected $table = 'transaksi_detail';
    protected $guarded = [];

    public function produk()
    {
        return $this->belongsTo(produk::class);
    }

    public function bank()
    {
        return $this->belongsTo(bank::class);
    }

    public function ewallet()
    {
        return $this->belongsTo(ewallet::class);
    }
}
