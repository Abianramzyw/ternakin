<?php

namespace App\Models;

use App\Models\User;
use App\Models\Dataternak;
use App\Models\Hasilternak;
use App\Models\Kondisiternak;
use App\Models\Statuskesehatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporanprogress extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ternaks()
    {
        return $this->hasMany(Dataternak::class);
    }

    public function hasilternak()
    {
        return $this->belongsTo(Hasilternak::class);
    }

    public function statuskesehatan()
    {
        return $this->belongsTo(Statuskesehatan::class);
    }

    public function kondisiternak()
    {
        return $this->belongsTo(Kondisiternak::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}