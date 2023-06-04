<?php

namespace App\Models;

use App\Models\User;
use App\Models\Dataternak;
use App\Models\Juduljadwal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penjadwalanternak extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ternaks()
    {
        return $this->hasMany(Dataternak::class);
    }

    public function juduljadwal()
    {
        return $this->belongsTo(Juduljadwal::class);
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