<?php

namespace App\Models;

use App\Models\Datatransaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayarantransaksi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function datatransaksi()
    {
        return $this->hasMany(Datatransaksi::class);
    }
}
