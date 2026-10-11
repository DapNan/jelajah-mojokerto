<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Choice;

class ChoiceSeeder extends Seeder
{
    public function run(): void
    {
        // ==========================
        // CANDI
        // ==========================

        $q1 = Question::where(
            'question',
            'Candi Bajang Ratu merupakan salah satu peninggalan dari kerajaan apa?'
        )->first();

        Choice::create([
            'question_id' => $q1->id,
            'choice' => 'Majapahit',
            'is_correct' => true,
            'score' => 10,
            'feedback' => 'Benar! Candi Bajang Ratu merupakan salah satu peninggalan Kerajaan Majapahit.',
        ]);

        Choice::create([
            'question_id' => $q1->id,
            'choice' => 'Sriwijaya',
            'is_correct' => false,
            'score' => 0,
            'feedback' => 'Belum tepat. Candi Bajang Ratu berkaitan dengan Kerajaan Majapahit.',
        ]);

        Choice::create([
            'question_id' => $q1->id,
            'choice' => 'Mataram Kuno',
            'is_correct' => false,
            'score' => 0,
            'feedback' => 'Belum tepat. Coba perhatikan kembali bacaan tentang Candi Bajang Ratu.',
        ]);


        $q2 = Question::where(
            'question',
            'Di wilayah mana banyak ditemukan peninggalan Kerajaan Majapahit?'
        )->first();

        Choice::create([
            'question_id' => $q2->id,
            'choice' => 'Trowulan',
            'is_correct' => true,
            'score' => 10,
            'feedback' => 'Benar! Trowulan merupakan kawasan yang memiliki banyak peninggalan Majapahit.',
        ]);

        Choice::create([
            'question_id' => $q2->id,
            'choice' => 'Jakarta',
            'is_correct' => false,
            'score' => 0,
            'feedback' => 'Belum tepat.',
        ]);

        Choice::create([
            'question_id' => $q2->id,
            'choice' => 'Bandung',
            'is_correct' => false,
            'score' => 0,
            'feedback' => 'Belum tepat.',
        ]);


        $q3 = Question::where(
            'question',
            'Mengapa peninggalan sejarah perlu kita jaga?'
        )->first();

        Choice::create([
            'question_id' => $q3->id,
            'choice' => 'Agar sejarah dan budaya tetap dikenal generasi berikutnya',
            'is_correct' => true,
            'score' => 10,
            'feedback' => 'Tepat! Menjaga peninggalan sejarah berarti menjaga warisan budaya.',
        ]);

        Choice::create([
            'question_id' => $q3->id,
            'choice' => 'Agar bisa dirusak',
            'is_correct' => false,
            'score' => 0,
            'feedback' => 'Coba pikirkan manfaat peninggalan sejarah bagi generasi mendatang.',
        ]);

        Choice::create([
            'question_id' => $q3->id,
            'choice' => 'Agar cepat hilang',
            'is_correct' => false,
            'score' => 0,
            'feedback' => 'Belum tepat.',
        ]);


        // ==========================
        // PASAR
        // ==========================

        $q4 = Question::where(
            'question',
            'Kamu memiliki uang terbatas. Kamu menemukan dua barang yang kamu sukai, tetapi hanya bisa membeli satu. Apa yang kamu lakukan?'
        )->first();

        Choice::create([
            'question_id' => $q4->id,
            'choice' => 'Memilih barang yang paling dibutuhkan',
            'is_correct' => true,
            'score' => 10,
            'feedback' => 'Pilihan yang bijak. Kita dapat menentukan kebutuhan sebelum membeli sesuatu.',
        ]);

        Choice::create([
            'question_id' => $q4->id,
            'choice' => 'Membeli keduanya meskipun uang tidak cukup',
            'is_correct' => false,
            'score' => 5,
            'feedback' => 'Pertimbangkan kembali kemampuan uang yang kamu miliki.',
        ]);

        Choice::create([
            'question_id' => $q4->id,
            'choice' => 'Tidak mempertimbangkan kebutuhan',
            'is_correct' => false,
            'score' => 5,
            'feedback' => 'Sebaiknya pertimbangkan kebutuhan sebelum mengambil keputusan.',
        ]);


        // ==========================
        // SAWAH
        // ==========================

        $q5 = Question::where(
            'question',
            'Apa sikap yang penting dalam bekerja bersama di sawah?'
        )->first();

        Choice::create([
            'question_id' => $q5->id,
            'choice' => 'Gotong royong',
            'is_correct' => true,
            'score' => 10,
            'feedback' => 'Benar! Gotong royong membantu pekerjaan menjadi lebih ringan.',
        ]);

        Choice::create([
            'question_id' => $q5->id,
            'choice' => 'Bekerja sendiri dan tidak peduli orang lain',
            'is_correct' => false,
            'score' => 0,
            'feedback' => 'Kerja bersama membutuhkan kepedulian dan kerja sama.',
        ]);


        // ==========================
        // KAMPUNG
        // ==========================

        $q6 = Question::where(
            'question',
            'Kegiatan bersama yang dilakukan masyarakat untuk membantu satu sama lain disebut...'
        )->first();

        Choice::create([
            'question_id' => $q6->id,
            'choice' => 'Gotong royong',
            'is_correct' => true,
            'score' => 10,
            'feedback' => 'Benar! Gotong royong merupakan bentuk kerja sama masyarakat.',
        ]);

        Choice::create([
            'question_id' => $q6->id,
            'choice' => 'Persaingan',
            'is_correct' => false,
            'score' => 0,
            'feedback' => 'Belum tepat.',
        ]);


        // ==========================
        // SUNGAI
        // ==========================

        $q7 = Question::where(
            'question',
            'Apa tindakan yang tepat untuk menjaga kebersihan sungai?'
        )->first();

        Choice::create([
            'question_id' => $q7->id,
            'choice' => 'Membuang sampah pada tempatnya',
            'is_correct' => true,
            'score' => 10,
            'feedback' => 'Benar! Menjaga kebersihan sungai merupakan tanggung jawab bersama.',
        ]);

        Choice::create([
            'question_id' => $q7->id,
            'choice' => 'Membuang sampah ke sungai',
            'is_correct' => false,
            'score' => 0,
            'feedback' => 'Membuang sampah ke sungai dapat mencemari lingkungan.',
        ]);
    }
}