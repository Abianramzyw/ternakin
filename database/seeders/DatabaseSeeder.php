<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Datatransaksi;
use App\Models\Hasilternak;
use App\Models\Juduljadwal;
use App\Models\Kategorihewanproduk;
use App\Models\Kondisiternak;
use App\Models\Laporanprogress;
use App\Models\Pembayarantransaksi;
use App\Models\Penjadwalanternak;
use App\Models\Produkternak;
use App\Models\Role;
use App\Models\Statuskesehatan;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Jenisternak;
use App\Models\Dataternak;
use App\Models\Statusterjual;
use App\Models\Jeniskelamin;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'nama_akun' => 'Test User',
        //     'email_akun' => 'test@example.com',
        // ]);

        User::create([
            'nama_akun' => 'Abian',
            'email_akun' => 'ramzy@gmail.com',
            'alamat_akun' => 'Bwz',
            'password' => bcrypt('wijaya'),
            'role_id' => '2',
            // 'slug' => 'abian'
        ]);

        // User::create([
        //     'nama_akun' => 'fayza',
        //     'email_akun' => 'permata@gmail.com',
        //     'alamat_akun' => 'bkz',
        //     'password' => bcrypt('wijaya')
        // ]);

        // Dataternak::create([
        //     'nama_pemilik' => 'Abian',
        //     'jenis_ternak' => 'Sapi',
        //     'berat_ternak' => '100',
        //     'deskripsi_tambahan' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla earum aliquam quam nesciunt. Maiores provident dicta quam quod aspernatur nesciunt temporibus obcaecati praesentium ullam, est incidunt tenetur, enim officia nobis nihil magni nam laboriosam repellat modi dolor neque! Nam ad necessitatibus cum quos ipsam veritatis! Officiis neque itaque, nobis sapiente ipsam mollitia possimus voluptates illo eaque. Rem doloribus enim mollitia sed repellat voluptatibus expedita quae amet dolorum, illo vero iste? Dignissimos tempora corporis cum iusto libero perferendis placeat nostrum quae, dolorum debitis vitae modi, aperiam laborum, at magnam consequuntur quibusdam molestias voluptatem enim tempore adipisci blanditiis! Ipsam vel distinctio necessitatibus?',
        //     'status_terjual' => 'ada',
        //     'foto_ternak' => '0',
        //     'jenisternak_id' => 1,
        //     'user_id' => 1
        // ]);

        // Dataternak::create([
        //     'nama_pemilik' => 'Fayza',
        //     'jenis_ternak' => 'Kambing',
        //     'berat_ternak' => '50',
        //     'deskripsi_tambahan' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla earum aliquam quam nesciunt. Maiores provident dicta quam quod aspernatur nesciunt temporibus obcaecati praesentium ullam, est incidunt tenetur, enim officia nobis nihil magni nam laboriosam repellat modi dolor neque! Nam ad necessitatibus cum quos ipsam veritatis! Officiis neque itaque, nobis sapiente ipsam mollitia possimus voluptates illo eaque. Rem doloribus enim mollitia sed repellat voluptatibus expedita quae amet dolorum, illo vero iste? Dignissimos tempora corporis cum iusto libero perferendis placeat nostrum quae, dolorum debitis vitae modi, aperiam laborum, at magnam consequuntur quibusdam molestias voluptatem enim tempore adipisci blanditiis! Ipsam vel distinctio necessitatibus?',
        //     'status_terjual' => 'ada',
        //     'foto_ternak' => '0',
        //     'jenisternak_id' => 2,
        //     'user_id' => 2

        // ]);

        // Dataternak::create([
        //     'nama_pemilik' => 'Fadil',
        //     'jenis_ternak' => 'Kambing',
        //     'berat_ternak' => '50',
        //     'deskripsi_tambahan' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla earum aliquam quam nesciunt. Maiores provident dicta quam quod aspernatur nesciunt temporibus obcaecati praesentium ullam, est incidunt tenetur, enim officia nobis nihil magni nam laboriosam repellat modi dolor neque! Nam ad necessitatibus cum quos ipsam veritatis! Officiis neque itaque, nobis sapiente ipsam mollitia possimus voluptates illo eaque. Rem doloribus enim mollitia sed repellat voluptatibus expedita quae amet dolorum, illo vero iste? Dignissimos tempora corporis cum iusto libero perferendis placeat nostrum quae, dolorum debitis vitae modi, aperiam laborum, at magnam consequuntur quibusdam molestias voluptatem enim tempore adipisci blanditiis! Ipsam vel distinctio necessitatibus?',
        //     'status_terjual' => 'ada',
        //     'foto_ternak' => '0',
        //     'jenisternak_id' => 2,
        //     'user_id' => 1

        // ]);

        ///////////////////////////////////////////////////////////
        Jenisternak::create([
            'nama_jenis_ternak' => 'Kambing',
            'slug' => 'kambing'
        ]);
        Jenisternak::create([
            'nama_jenis_ternak' => 'Domba',
            'slug' => 'domba'
        ]);
        ///////////////////////////////////////////////////////////
        Statusterjual::create([
            'nama_status_terjual' => 'Ada',
            'slug' => 'ada'
        ]);
        Statusterjual::create([
            'nama_status_terjual' => 'Terjual',
            'slug' => 'terjual'
        ]);
        ///////////////////////////////////////////////////////////
        Role::create([
            'nama_role' => 'User',
            'slug' => 'user'
        ]);
        Role::create([
            'nama_role' => 'Peternak',
            'slug' => 'peternak'
        ]);
        Role::create([
            'nama_role' => 'Dinas Ketahanan Pangan dan Peternakan',
            'slug' => 'dinas-ketahanan-pangan-dan-ternak'
        ]);
        ///////////////////////////////////////////////////////////
        Jeniskelamin::create([
            'nama_jenis_kelamin' => 'Jantan',
            'slug' => 'jantan'
        ]);

        Jeniskelamin::create([
            'nama_jenis_kelamin' => 'Betina',
            'slug' => 'betina'
        ]);
        ///////////////////////////////////////////////////////////
        Juduljadwal::create([
            'nama_judul_jadwal' => 'Vaksinasi',
            'slug' => 'vaksinasi'
        ]);
        Juduljadwal::create([
            'nama_judul_jadwal' => 'Masa Subur',
            'slug' => 'masa-subur'
        ]);
        Juduljadwal::create([
            'nama_judul_jadwal' => 'Pemeriksaan Rutin',
            'slug' => 'pemeriksaan-rutin'
        ]);
        ///////////////////////////////////////////////////////////
        Hasilternak::create([
            'nama_hasil_ternak' => 'Kambing',
            'slug' => 'kambing'
        ]);
        Hasilternak::create([
            'nama_hasil_ternak' => 'Domba',
            'slug' => 'domba'
        ]);
        ///////////////////////////////////////////////////////////
        Statuskesehatan::create([
            'nama_status_kesehatan' => 'Vaksinasi',
            'slug' => 'vaksinasi'
        ]);
        Statuskesehatan::create([
            'nama_status_kesehatan' => 'Masa Subur',
            'slug' => 'masa-subur'
        ]);
        Statuskesehatan::create([
            'nama_status_kesehatan' => 'Pemeriksaan Rutin',
            'slug' => 'pemeriksaan-rutin'
        ]);
        ///////////////////////////////////////////////////////////
        Kondisiternak::create([
            'nama_kondisi_ternak' => 'Sehat',
            'slug' => 'sehat'
        ]);
        Kondisiternak::create([
            'nama_kondisi_ternak' => 'Sakit',
            'slug' => 'sakit'
        ]);
        ///////////////////////////////////////////////////////////
        Kategorihewanproduk::create([
            'nama_kategori_hewan' => 'Kambing',
            'slug' => 'kambing'
        ]);
        Kategorihewanproduk::create([
            'nama_kategori_hewan' => 'Domba',
            'slug' => 'domba'
        ]);
        ///////////////////////////////////////////////////////////
        Dataternak::factory(50)->create();
        ///////////////////////////////////////////////////////////
        User::factory(5)->create();
        ///////////////////////////////////////////////////////////
        Penjadwalanternak::factory(50)->create();
        ///////////////////////////////////////////////////////////
        Laporanprogress::factory(50)->create();
        ///////////////////////////////////////////////////////////
        Produkternak::factory(50)->create();
        ///////////////////////////////////////////////////////////
        Datatransaksi::factory(3)->create();
        ///////////////////////////////////////////////////////////
        Pembayarantransaksi::factory(3)->create();
        ///////////////////////////////////////////////////////////

    }
}