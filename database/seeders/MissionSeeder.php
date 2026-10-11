<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mission;

class MissionSeeder extends Seeder
{
    public function run(): void
    {
        Mission::create([
            'name' => 'Candi',
            'slug' => 'candi',
            'location' => 'Trowulan, Mojokerto',
            'description' => 'Jelajahi peninggalan sejarah Kerajaan Majapahit.',
            'reading' => 'Mojokerto memiliki banyak peninggalan sejarah dari Kerajaan Majapahit. Salah satunya adalah Candi Bajang Ratu yang berada di kawasan Trowulan. Candi ini menjadi salah satu peninggalan penting yang menunjukkan kejayaan Majapahit.',
            'image' => 'candi.jpg',
            'icon' => '🏯',
            'order' => 1,
            'is_unlocked' => true,
            'is_active' => true,
        ]);

        Mission::create([
            'name' => 'Pasar',
            'slug' => 'pasar',
            'location' => 'Mojokerto',
            'description' => 'Belajar mengambil keputusan dalam kehidupan sehari-hari di pasar.',
            'reading' => 'Pasar merupakan tempat bertemunya penjual dan pembeli. Selain kegiatan jual beli, pasar juga mengajarkan kita tentang memilih barang, menggunakan uang dengan bijak, menjaga kebersihan, dan menghargai orang lain.',
            'image' => 'pasar.jpg',
            'icon' => '🛒',
            'order' => 2,
            'is_unlocked' => false,
            'is_active' => true,
        ]);

        Mission::create([
            'name' => 'Sawah',
            'slug' => 'sawah',
            'location' => 'Mojokerto',
            'description' => 'Mengenal kehidupan pertanian dan kearifan lokal masyarakat.',
            'reading' => 'Sawah menjadi bagian penting dari kehidupan masyarakat Mojokerto. Kegiatan bertani membutuhkan kerja sama, ketekunan, dan kepedulian terhadap lingkungan.',
            'image' => 'sawah.jpg',
            'icon' => '🌾',
            'order' => 3,
            'is_unlocked' => false,
            'is_active' => true,
        ]);

        Mission::create([
            'name' => 'Kampung',
            'slug' => 'kampung',
            'location' => 'Mojokerto',
            'description' => 'Mengenal kehidupan masyarakat dan budaya lokal.',
            'reading' => 'Kampung merupakan tempat masyarakat hidup dan berinteraksi. Nilai gotong royong, kepedulian, dan kebersamaan menjadi bagian penting dalam kehidupan masyarakat.',
            'image' => 'kampung.jpg',
            'icon' => '🏘️',
            'order' => 4,
            'is_unlocked' => false,
            'is_active' => true,
        ]);

        Mission::create([
            'name' => 'Sungai',
            'slug' => 'sungai',
            'location' => 'Mojokerto',
            'description' => 'Belajar menjaga lingkungan melalui kehidupan di sekitar sungai.',
            'reading' => 'Sungai memiliki peran penting bagi kehidupan masyarakat. Menjaga sungai tetap bersih merupakan tanggung jawab bersama agar lingkungan tetap sehat dan nyaman.',
            'image' => 'sungai.jpg',
            'icon' => '🌊',
            'order' => 5,
            'is_unlocked' => false,
            'is_active' => true,
        ]);
    }
}