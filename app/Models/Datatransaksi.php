<?php

namespace App\Models;

use App\Models\Role;
use App\Models\User;
use App\Models\Produkternak;
use App\Models\Pembayarantransaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Datatransaksi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pembayarantransaksi()
    {
        return $this->belongsTo(Pembayarantransaksi::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function user_role()
    {
        return $this->belongsTo(Role::class);
    }

    public function dataproduk()
    {
        return $this->belongsTo(Produkternak::class);
    }
}