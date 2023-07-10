<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function transaksi()
    {
        return $this->belongsTo(transaksi::class);
    }

    public function request_user()
    {
        return $this->belongsTo(request_user::class);
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
