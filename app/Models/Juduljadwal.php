<?php

namespace App\Models;

use App\Models\Penjadwalanternak;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Juduljadwal extends Model
{
    use HasFactory;

    public function jadwalternaks()
    {
        return $this->hasMany(Penjadwalanternak::class);
    }
}
