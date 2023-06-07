<?php

namespace App\Models;

use App\Models\Produkternak;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategorihewanproduk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function produks()
    {
        return $this->hasMany(Produkternak::class);
    }
}