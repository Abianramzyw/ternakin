<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
            return $query->where('nama_pemilik', 'like', '%' . $cari . '%')
                ->orWhere('jenis_ternak', 'like', '%' . $cari . '%')
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

    public function jenisternak()
    {
        return $this->belongsTo(Jenisternak::class);
    }

    public function jeniskelamin()
    {
        return $this->belongsTo(Jeniskelamin::class);
    }

    public function statusterjual()
    {
        return $this->belongsTo(Statusterjual::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'nama_pemilik';
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