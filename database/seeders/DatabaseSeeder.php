<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;


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

        User::create(
        [
            'nis' => 'adm000n',
            'roles' => 'admin',
            'nama' => 'Admin',
            'kelas' => 'Admin',
            'password' => '123456',
        ]);
     

        Candidate::create([
            "slug"=>"visi-misi-paslon-1",
            "ketua"=>"NADIASTUTI PRADNYA PARAMITA",
            "wakil"=>"RADHITYA KURNIA ASMARA",
            "visi"=> "<p>Harmonisasi kerukunan untuk mencapai revolusi kreatifitas guna mewujudkan siswa siswi SMKN 7 Semarang aktif yang mampu bergerak secara lepas.</p>",
            "misi"=> "
            <ul class=list-misi style='list-style: disc'>
                <li class='misi-p'>Mengutamakan iman dan takwa serta solidaritas dalam segala aspek.</li>
                <li class='misi-p'>Mengoptimalkan peran serta fungsi OSIS sebagai penyelenggara berbagai kegiatan siswa.</li>
                <li class='misi-p'>Menjalin kerja sama antara OSIS dengan ekstrakurikuler dalam membuat kegiatan yang mengasah kreatifitas, minat, serta potensi siswa guna meningkatkan mutu sekolah.</li>
                <li class='misi-p'>Menerapkan tekad semangat KITA (Kreatif, Inovatif, Terampil, serta aktif).</li>
            </ul>",
            "foto"=> "paslon1.jpg",
        ]);
        Candidate::create([
            "slug"=>"visi-misi-paslon-2",
            "ketua"=>"AIDA ARIFATUR ROCHMAH",
            "wakil"=>"MUHAMMAD HABIB",
            "visi"=> "<p>Menjadikan OSIS sebagai sarana untuk menampung aspirasi dan kreatifitas siswa, untuk mewujudkan generasi muda yang kreatif, berwawasan global berideologi Pancasila, serta berlandaskan iman dan taqwa</p>",
            "misi"=> "
            <ul class=list-misi style='list-style: disc'>
                <li class='misi-p'>Taqwa kepada Tuhan Yang Maha Esa serta menciptakan kehidupan yang penuh dengan toleransi dan tenggang rasa.</li>
                <li class='misi-p'>Mampu menunjukkan eksistensi sekolah dengan meningkatkan kualitas prestasi akademik dan non akademik.</li>
                <li class='misi-p'>Menumbuhkan rasa kekeluargaan, membudayakan sikap saling tolong menolong, selalu menjaga kesopanan dan kesederhanaan.</li>
            </ul>",
            "foto"=> "paslon2.jpg",
        ]);
        Candidate::create([
            "slug"=>"visi-misi-paslon-3",
            "ketua"=>"RAIHAN FATUROCHIM",
            "wakil"=>"FIKRI CAHYO WICAKSONO",
            "visi"=> "<p>Unggul dalam prestasi dengan dilandasi akhlak mulia serta mewujudkan siswa yang aktif, kreatif, dan produktif baik dalam aspek akademik maupun non akademik</p>",
            "misi"=> "
            <ul class=list-misi style='list-style: disc'>
                <li class='misi-p'>Mendukung dan melaksanakan program sekolah yang positif dan dapat meningkatkan hubungan baik antar guru dan murid.</li>
                <li class='misi-p'>Meningkatkan mutu dalam sdm di lingkup sekolah.</li>
                <li class='misi-p'>Mewujudkan osis SMK N 7 Semarang sebagai organisasi yang inklusif, adaptif, dan dapat menjalankan fungsinya sebagai wadah aspirasi siswa.</li>
                <li class='misi-p'>Menjalin hubungan baik antar organisasi dan ekstrakurikuler di SMK N 7 Semarang guna meningkatkan prestasi baik akademik maupun non akademik.</li>
                <li class='misi-p'>Membantu mewujudkan lingkungan sekolah yang layak anak bebas dari perundungan, diskriminasi, dan intoleransi.</li>
            </ul>",
            "foto"=> "paslon3.jpg",
        ]);
    }
}
