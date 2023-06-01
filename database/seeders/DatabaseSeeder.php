<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'password' => bcrypt('wijaya')
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

        Jenisternak::create([
            'nama_jenis_ternak' => 'Sapi'
        ]);

        Jenisternak::create([
            'nama_jenis_ternak' => 'Kambing'
        ]);

        Jenisternak::create([
            'nama_jenis_ternak' => 'Domba'
        ]);

        // Jeniskelamin::create([
        //     'nama_jenis_kelamin' => 'Jantan'
        // ]);

        // Jeniskelamin::create([
        //     'nama_jenis_kelamin' => 'Betina'
        // ]);

        // Statusterjual::create([
        //     'nama_status_terjual' => 'Ada'
        // ]);

        // Statusterjual::create([
        //     'nama_status_terjual' => 'Terjual'
        // ]);



        User::factory(5)->create();

        Dataternak::factory(50)->create();
    }
}