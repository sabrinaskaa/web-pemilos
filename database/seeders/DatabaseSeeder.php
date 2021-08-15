<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'nis' => '123456',
            'roles' => 'admin',
            'nama' => 'Admin',
            'kelas' => 'Admin',
            
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'nis' => '654321',
            'nama' => 'Siswa Pertama',
            'kelas' => 'XI KGSP 2',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'nis' => '111112',
            'nama' => 'Siswa Kedua',
            'kelas' => 'XII TME 1',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'nis' => '111111',
            'nama' => 'Siswa Kedua',
            'kelas' => 'XII TME 1',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'nis' => '111114',
            'nama' => 'Siswa Kedua',
            'kelas' => 'XII TME 1',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'nis' => '111161',
            'nama' => 'Siswa Kedua',
            'kelas' => 'XII TME 1',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'nis' => '110161',
            'nama' => 'Siswa Kedua',
            'kelas' => 'XII TME 1',
            'password' => bcrypt('123456'),
        ]);

        Candidate::create([
            "slug"=>"visi-misi-paslon-1",
            "ketua"=>"a",
            "wakil"=>"b",
            "visi"=> "<p>ini visi pertama</p>",
            "misi"=> "<ul class=list-misi style='list-style: disc'><li class='misi-p'>Membentuk wadah belajar kelompok tsherpadu bagi    siswa.</li><li class='misi-p'>
            Menyelenggarakan perlombaan yang mendidik.</li><li class='misi-p'>
            Menyelenggarakan kegiatan masa orientasi siswa yang jauh dari kesan pembodohan.</li><li class='misi-p'>
            Aktif belajar di media sosial seperti Brainly, Edmodo, dan Quipper.</li><li class='misi-p'>
            Ikut membantu penyelenggaran kegiatan hari besar keagamaan.</li></ul>",
            "foto"=> "image.jpg",
        ]);

        Candidate::create([
            "slug"=>"visi-misi-paslon-2",
            "ketua"=>"a",
            "wakil"=>"b",
            "visi"=> "<p>ini visi kedua</p>",
            "misi"=> "<ul class=list-misi style='list-style: disc'><li class='misi-p'>Membentuk wadah belajar kelompok terpadu bagi    siswa.</li><li class='misi-p'>
            Menyelenggarakan perlombaan yang mendidik.</li><li class='misi-p'>
            Menyelenggarakan kegiatan masa orientasi siswa yang jauh dari kesan pembodohan.</li><li class='misi-p'>
            Aktif belajar di media sosial seperti Brainly, Edmodo, dan Quipper.</li><li class='misi-p'>
            Ikut membantu penyelenggaran kegiatan hari besar keagamaan.</li></ul>",
            "foto"=> "gambar.png",
        ]);
        Candidate::create([
            "slug"=>"visi-misi-paslon-3",
            "ketua"=>"a",
            "wakil"=>"b",
            "visi"=> "<p>ini visi ketiga</p>",
            "misi"=> "<ul class=list-misi style='list-style: disc'><li class='misi-p'>Membentuk wadah belajar kelompok terpadu bagi    siswa.</li><li class='misi-p'>
            Menyelenggarakan perlombaan yang mendidik.</li><li class='misi-p'>
            Menyelenggarakan kegiatan masa orientasi siswa yang jauh dari kesan pembodohan.</li><li class='misi-p'>
            Aktif belajar di media sosial seperti Brainly, Edmodo, dan Quipper.</li><li class='misi-p'>
            Ikut membantu penyelenggaran kegiatan hari besar keagamaan.</li></ul>",
            "foto"=> "foto1.jpg",
        ]);
    }
}
