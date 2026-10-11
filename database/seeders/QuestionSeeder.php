<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mission;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        $candi = Mission::where('slug', 'candi')->first();

        Question::create([
            'mission_id' => $candi->id,
            'question' => 'Candi Bajang Ratu merupakan salah satu peninggalan dari kerajaan apa?',
            'type' => 'multiple_choice',
            'points' => 10,
            'order' => 1,
            'is_active' => true,
        ]);

        Question::create([
            'mission_id' => $candi->id,
            'question' => 'Di wilayah mana banyak ditemukan peninggalan Kerajaan Majapahit?',
            'type' => 'multiple_choice',
            'points' => 10,
            'order' => 2,
            'is_active' => true,
        ]);

        Question::create([
            'mission_id' => $candi->id,
            'question' => 'Mengapa peninggalan sejarah perlu kita jaga?',
            'type' => 'multiple_choice',
            'points' => 10,
            'order' => 3,
            'is_active' => true,
        ]);


        // ==========================
        // MISI PASAR
        // ==========================

        $pasar = Mission::where('slug', 'pasar')->first();

        Question::create([
            'mission_id' => $pasar->id,
            'question' => 'Kamu memiliki uang terbatas. Kamu menemukan dua barang yang kamu sukai, tetapi hanya bisa membeli satu. Apa yang kamu lakukan?',
            'type' => 'decision',
            'points' => 10,
            'order' => 1,
            'is_active' => true,
        ]);


        // ==========================
        // MISI SAWAH
        // ==========================

        $sawah = Mission::where('slug', 'sawah')->first();

        Question::create([
            'mission_id' => $sawah->id,
            'question' => 'Apa sikap yang penting dalam bekerja bersama di sawah?',
            'type' => 'multiple_choice',
            'points' => 10,
            'order' => 1,
            'is_active' => true,
        ]);


        // ==========================
        // MISI KAMPUNG
        // ==========================

        $kampung = Mission::where('slug', 'kampung')->first();

        Question::create([
            'mission_id' => $kampung->id,
            'question' => 'Kegiatan bersama yang dilakukan masyarakat untuk membantu satu sama lain disebut...',
            'type' => 'multiple_choice',
            'points' => 10,
            'order' => 1,
            'is_active' => true,
        ]);


        // ==========================
        // MISI SUNGAI
        // ==========================

        $sungai = Mission::where('slug', 'sungai')->first();

        Question::create([
            'mission_id' => $sungai->id,
            'question' => 'Apa tindakan yang tepat untuk menjaga kebersihan sungai?',
            'type' => 'multiple_choice',
            'points' => 10,
            'order' => 1,
            'is_active' => true,
        ]);
    }
}