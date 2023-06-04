<?php

namespace App\Models;

use App\Models\Role;
use App\Models\User;
use App\Models\Hasilternak;
use App\Models\Jenisternak;
use App\Models\Juduljadwal;
use App\Models\Jeniskelamin;
use App\Models\Kondisiternak;
use App\Models\Statusterjual;
use App\Models\Laporanprogress;
use App\Models\Statuskesehatan;
use App\Models\Penjadwalanternak;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dataternak extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['jenisternak', 'user'];

    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['cari']) ? $filters['cari'] : false) {
        //     return $query->where('nama_pemilik', 'like', '%' . $filters['cari'] . '%')
        //         ->orWhere('jenis_ternak', 'like', '%' . $filters['cari'] . '%')
        //         ->orWhere('berat_ternak', 'like', '%' . $filters['cari'] . '%')
        //         ->orWhere('status_terjual', 'like', '%' . $filters['cari'] . '%')
        //         ->orWhere('deskripsi_tambahan', 'like', '%' . $filters['cari'] . '%');
        // }

        $query->when($filters['cari'] ?? false, function ($query, $cari) {
            return $query->Where('jenis_ternak', 'like', '%' . $cari . '%')
                ->orWhere('berat_ternak', 'like', '%' . $cari . '%')
                ->orWhere('status_terjual', 'like', '%' . $cari . '%')
                ->orWhere('deskripsi_tambahan', 'like', '%' . $cari . '%');
        });

        $query->when($filters['jenisternak'] ?? false, function ($query, $jenisternak) {
            return $query->whereHas('jenisternak', function ($query) use ($jenisternak) {
                $query->where('nama_jenis_ternak', $jenisternak);
            });
        });

        $query->when($filters['user'] ?? false, fn($query, $user) => $query->whereHas('user', fn($query) => $query->where('nama_akun', $user)));

    }


    public function jeniskelamin()
    {
        return $this->belongsTo(Jeniskelamin::class);
    }

    public function statusterjual()
    {
        return $this->belongsTo(Statusterjual::class);
    }

    public function jenisternak()
    {
        return $this->belongsTo(Jenisternak::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function user_role()
    {
        return $this->belongsTo(Role::class);
    }

    public function jadwalternak()
    {
        return $this->belongsTo(Penjadwalanternak::class);
    }

    public function jadwalternak_juduljadwal()
    {
        return $this->belongsTo(Juduljadwal::class);
    }

    public function laporanprogress()
    {
        return $this->belongsTo(Laporanprogress::class);
    }

    public function laporanprogress_statuskesehatan()
    {
        return $this->belongsTo(Statuskesehatan::class);
    }
    public function laporanprogress_kondisiternak()
    {
        return $this->belongsTo(Kondisiternak::class);
    }
    public function laporanprogress_hasilternak()
    {
        return $this->belongsTo(Hasilternak::class);
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }
}

// class Dataternak
// {
//     private static $data_ternak = [
//         [
//             "title" => "Judul Pertama",
//             'author' => "Abian",
//             "slug" => "judul-pertama",
//             "body" => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis in quos consequatur necessitatibus minima, architecto inventore, dolor eos eveniet animi fuga iusto dolores ipsum consequuntur amet temporibus, recusandae omnis nulla! Architecto ipsum vitae reprehenderit, sit veniam facere voluptatibus, adipisci commodi, rem enim laborum atque soluta tempore deleniti neque porro dolor?'
//         ],
//         [
//             "title" => "Judul Kedua",
//             'author' => 'Fayza',
//             "slug" => "judul-kedua",
//             "body" => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis in quos consequatur necessitatibus minima, architecto inventore, dolor eos eveniet animi fuga iusto dolores ipsum consequuntur amet temporibus, recusandae omnis nulla! Architecto ipsum vitae reprehenderit, sit veniam facere voluptatibus, adipisci commodi, rem enim laborum atque soluta tempore deleniti neque porro dolor?'
//         ]
//     ];

//     public static function all()
//     {
//         return collect(self::$data_ternak);
//     }

//     public static function find($slug)
//     {
//         $ternaks = static::all();
//         return $ternaks->firstWhere('slug', $slug);
//     }
// }