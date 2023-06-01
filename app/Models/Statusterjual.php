<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statusterjual extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ternaks()
    {
        return $this->hasMany(Dataternak::class);
    }
}
