<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int string>
     */
    // protected $fillable = [
    //     'nama_akun',
    //     'email_akun',
    //     'password_akun',
    //     'alamat_akun',
    // ];
    protected $guarded = ['id'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public function ternaks(){
        return $this->hasMany(Dataternak::class);
    }

/**
 * The attributes that should be cast.
 *
 * @var array<string, string>
 */
}