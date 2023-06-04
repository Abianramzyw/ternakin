<?php

namespace App\Models;

use App\Models\Laporanprogress;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Statuskesehatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function laporanprogress()
    {
        return $this->hasMany(Laporanprogress::class);
    }
}
