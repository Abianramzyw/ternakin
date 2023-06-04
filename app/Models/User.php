<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use App\Models\Dataternak;
use App\Models\Produkternak;
use App\Models\Datatransaksi;
use App\Models\Laporanprogress;
use App\Models\Penjadwalanternak;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    public function ternaks()
    {
        return $this->hasMany(Dataternak::class);
    }

    public function laporanprogresses()
    {
        return $this->hasMany(Laporanprogress::class);

    }

    public function produkternaks()
    {
        return $this->hasMany(Produkternak::class);

    }

    public function penjadwalanternaks()
    {
        return $this->hasMany(Penjadwalanternak::class);

    }

    public function transaksis()
    {
        return $this->hasMany(Datatransaksi::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

/**
 * The attributes that should be cast.
 *
 * @var array<string, string>
 */
}