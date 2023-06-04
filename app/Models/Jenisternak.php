<?php

namespace App\Models;

use App\Models\Dataternak;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jenisternak extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ternaks()
    {
        return $this->hasMany(Dataternak::class);
    }
}
