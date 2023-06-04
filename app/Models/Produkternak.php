<?php

namespace App\Models;

use App\Models\User;
use App\Models\Datatransaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produkternak extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function transaksis()
    {
        return $this->hasMany(Datatransaksi::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}