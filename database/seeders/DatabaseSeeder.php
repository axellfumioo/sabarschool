<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Quiz;
use App\Models\User;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Materi;
use App\Models\Application;
use App\Models\Thread;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();
        Application::create([
            'name_app' => 'SABar School',
            'description_app' => 'SABar School adalah platform edukasi terpercaya nomor satu di Dunia.'
        ]);

        User::create([
            'name' => 'Nayif Aditya',
            'email' => 'nay@gmail.com',
            'username' => 'admin',
            'image' => 'profil-images/nay.png',
            'is_admin' => 1,
            'gender' => 'Laki-Laki',
            'password' => bcrypt('@Admin123')
        ]);

        User::create([
            'name' => 'Amanda Putri',
            'email' => 'amandap@gmail.com',
            'username' => 'amanda',
            'image' => 'profil-images/1.jpeg',
            'gender' => 'Perempuan',
            'password' => bcrypt('@Member123')
        ]);

        User::create([
            'name' => 'Angie Anatasya',
            'email' => 'angieanatasya@gmail.com',
            'username' => 'angieanatasya',
            'image' => 'profil-images/3.jpeg',
            'gender' => 'Perempuan',
            'password' => bcrypt('@Angieanatasya123')
        ]);

        User::create([
            'name' => 'Axel Azhar Putra',
            'email' => 'axel@gmail.com',
            'username' => 'admin1',
            'image' => 'profil-images/axel.png',
            'is_admin' => 1,
            'gender' => 'Laki-Laki',
            'password' => bcrypt('@Admin123')
        ]);

        User::create([
            'name' => 'Laurent Gabriella',
            'email' => 'laurentgabriella@gmail.com',
            'username' => 'laurentgabriella',
            'image' => 'profil-images/4.jpeg',
            'gender' => 'Perempuan',
            'password' => bcrypt('@Laurentgabriella123')
        ]);

        User::create([
            'name' => 'Syukron Maulana',
            'email' => 'syukron@gmail.com',
            'username' => 'syukron',
            'gender' => 'Laki-Laki',
            'image' => 'profil-images/kron.png',
            'password' => bcrypt('@Syukron123')
        ]);

        User::create([
            'name' => 'Ivan Mulya Tanata',
            'email' => 'ivan@gmail.com',
            'username' => 'ivan',
            'image' => 'profil-images/ivan.png',
            'gender' => 'Laki-Laki',
            'password' => bcrypt('@Ivan123')
        ]);

        // materi

        // forum
        Thread::create([
            'user_id' =>  1,
            'title' =>  'Seberapa kenal sih kalian sama SABar School?',
            'content' => 'Aku pengen tau dong, seberapa kenal sih kalian sama SABar School guys, coba comment dong. Misalnya ada siapa Founder dari SABar School atau yang lainnya!'
        ]);
        Thread::create([
            'user_id' =>  4,
            'title' =>  'Evolusi Teknologi dalam Pengembangan Perangkat Lunak',
            'content' => 'Bagaimana evolusi bahasa pemrograman telah membantu dalam meningkatkan efisiensi dan kemampuan pengembangan perangkat lunak?'
        ]);
        Thread::create([
            'user_id' =>  7,
            'title' =>  'Masa Depan Pengembangan Perangkat Lunak',
            'content' => 'Bagaimana integrasi teknologi baru akan mempengaruhi cara kita mengembangkan perangkat lunak di masa depan?'
        ]);

        // Comment
        Comment::create([
            'user_id' => 2,
            'thread_id' => 1,
            'comment' => 'Waterfall: Metode Waterfall mengadopsi pendekatan linear yang terstruktur. Setiap fase pengembangan (analisis, desain, pengembangan, pengujian, implementasi) dilakukan secara berurutan, dan fase selanjutnya dimulai setelah selesai dari fase sebelumnya. Agile & DevOps: Pendekatan Agile dan DevOps berfokus pada siklus pengembangan iteratif dan inkremental. Proyek dikerjakan dalam iterasi pendek yang disebut "sprint" (Agile) atau dengan pendekatan kontinu (DevOps), yang memungkinkan perubahan yang lebih cepat dan tanggap terhadap kebutuhan perubahan.'
        ]);

        Comment::create([
            'user_id' => 1,
            'thread_id' => 1,
            'comment' => 'Thank You',
            'parent_id' => 1
        ]);

        Comment::create([
            'user_id' => 3,
            'thread_id' => 1,
            'comment' => 'Waterfall: Interaksi dengan pengguna seringkali terjadi di awal dan akhir siklus pengembangan. Perubahan setelah fase awal seringkali sulit dan mahal. Agile & DevOps: Melalui pendekatan iteratif, pengguna terlibat secara terus-menerus selama proses pengembangan. Ini memungkinkan perubahan yang lebih fleksibel dan responsif terhadap umpan balik pengguna.'
        ]);

        Comment::create([
            'user_id' => 3,
            'thread_id' => 2,
            'comment' => 'Kesederhanaan dan Produktivitas: Bahasa pemrograman modern cenderung lebih mudah dipahami dan lebih ekspresif. Peningkatan ini telah memungkinkan pengembang untuk menulis kode yang lebih singkat, lebih jelas, dan lebih mudah di-maintain, yang pada gilirannya meningkatkan produktivitas.'
        ]);

        Comment::create([
            'user_id' => 2,
            'thread_id' => 2,
            'comment' => 'Makasih Angie',
            'parent_id' => 9
        ]);

        Comment::create([
            'user_id' => 7,
            'thread_id' => 2,
            'comment' => 'Bahasa pemrograman modern menawarkan tingkat abstraksi yang lebih tinggi, memungkinkan pengembang untuk fokus pada konsep dan solusi daripada implementasi teknis yang rumit. Ini membantu dalam menciptakan kode yang lebih fleksibel, mudah diubah, dan mudah,'
        ]);


        Comment::create([
            'user_id' => 6,
            'thread_id' => 3,
            'comment' => 'Teknologi baru seperti alat pengembangan yang lebih canggih, platform cloud, dan penggunaan otomatisasi akan mempercepat siklus pengembangan perangkat lunak. Hal ini akan memungkinkan pengembang untuk membuat, menguji, dan merilis perangkat lunak dengan lebih cepat.'
        ]);

        Comment::create([
            'user_id' => 2,
            'thread_id' => 3,
            'comment' => 'Integrasi teknologi kolaboratif, seperti platform kerja tim yang lebih baik, akan memungkinkan pengembang dari berbagai lokasi untuk bekerja bersama secara efisien. Hal ini akan meningkatkan komunikasi, koordinasi, dan produktivitas tim pengembangan.'
        ]);

        // like
        $idUser = [1, 2, 3, 4, 5, 6, 7];
        foreach ($idUser as $id) {
            like::create([
                'thread_id' => 1,
                'user_id' => $id
            ]);
        }

        $idUser = [1, 2, 3, 5, 6, 7];
        foreach ($idUser as $id) {
            like::create([
                'thread_id' => 2,
                'user_id' => $id
            ]);
        }

        $idUser = [4, 3, 5, 6];
        foreach ($idUser as $id) {
            like::create([
                'thread_id' => 3,
                'user_id' => $id
            ]);
        }

        $idUser = [3, 5, 6, 4, 7];
        foreach ($idUser as $id) {
            like::create([
                'thread_id' => 4,
                'user_id' => $id
            ]);
        }

        $idUser = [2, 5, 4];
        foreach ($idUser as $id) {
            like::create([
                'thread_id' => 5,
                'user_id' => $id
            ]);
        }
        $idUser = [1, 6, 5, 4, 3, 2];
        foreach ($idUser as $id) {
            like::create([
                'thread_id' => 6,
                'user_id' => $id
            ]);
        }
        $idUser = [4, 7];
        foreach ($idUser as $id) {
            like::create([
                'thread_id' => 7,
                'user_id' => $id
            ]);
        }

        Quiz::create([
            'title' => 'Apa itu SABar School',
            'description' => 'Pengenalan sejarah sekolah melalui Quiz untuk murid baru seberapa mengenal tentang SABar School.',
            'slug' => encrypt('apaitusabarschool')
        ]);

        Question::create([
            'question' => 'Purwokerto Life School merupakan konsep sister school dari sekolah mana?',
            'score' => 10,
            'quiz_id' => 1
        ]);

        Answer::create([
            'question_id' => 1,
            'answer' => 'Sekolah Alam Indonesia'
        ]);
        Answer::create([
            'question_id' => 1,
            'answer' => 'Sekolah Alam Nusantara'
        ]);
        Answer::create([
            'question_id' => 1,
            'answer' => 'Sekolah Alam Baturraden',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => 1,
            'answer' => 'Sekolah Alam Purwokerto'
        ]);

        Question::create([
            'question' => 'Siapa pendiri Purwokerto Life School?',
            'score' => 10,
            'quiz_id' => 1
        ]);

        Answer::create([
            'question_id' => 2,
            'answer' => 'Dr. Mira Purnamasari Safar dan Anas Rosyadi, S.E.',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => 2,
            'answer' => 'Dr. Mira Purnamasari Safar dan Bambang Sutrisno'
        ]);
        Answer::create([
            'question_id' => 2,
            'answer' => 'Anas Rosyadi, S.E. dan Bambang Sutrisno'
        ]);
        Answer::create([
            'question_id' => 2,
            'answer' => 'Dr. Mira Purnamasari Safar dan Anas Rosyadi, M.Sc.'
        ]);

        Question::create([
            'question' => 'Pada tahun berapa Purwokerto Life School didirikan?',
            'score' => 10,
            'quiz_id' => 1
        ]);

        Answer::create([
            'question_id' => 3,
            'answer' => '2018',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => 3,
            'answer' => '2017'
        ]);
        Answer::create([
            'question_id' => 3,
            'answer' => '2019'
        ]);
        Answer::create([
            'question_id' => 3,
            'answer' => '2020'
        ]);

        Question::create([
            'question' => 'Apa nama resmi yang diberikan pada Purwokerto Life School oleh orangtua siswa?',
            'score' => 10,
            'quiz_id' => 1
        ]);

        Answer::create([
            'question_id' => 4,
            'answer' => 'PKBM Alam Purwokerto'
        ]);
        Answer::create([
            'question_id' => 4,
            'answer' => 'SABar School',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => 4,
            'answer' => 'Yayasan Masyarakat Madani Indonesia Baru'
        ]);
        Answer::create([
            'question_id' => 4,
            'answer' => 'Sekolah Alam Nusantara'
        ]);

        Question::create([
            'question' => 'Apa saja program yang ditawarkan Purwokerto Life School untuk siswa?',
            'score' => 10,
            'quiz_id' => 1
        ]);

        Answer::create([
            'question_id' => 5,
            'answer' => 'Paket A/SD dan Paket B/SMP'
        ]);
        Answer::create([
            'question_id' => 5,
            'answer' => 'Paket A/SD dan Paket C/SMA'
        ]);
        Answer::create([
            'question_id' => 5,
            'answer' => 'Paket B/SMP dan Paket C/SMA',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => 5,
            'answer' => 'Paket A/SD, Paket B/SMP, dan Paket C/SMA'
        ]);

        Question::create([
            'question' => 'Apa metode yang digunakan dalam pengembangan akhlak di Purwokerto Life School?',
            'score' => 10,
            'quiz_id' => 1
        ]);

        Answer::create([
            'question_id' => 6,
            'answer' => 'Action Learning'
        ]);
        Answer::create([
            'question_id' => 6,
            'answer' => 'Metode Teladan',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => 6,
            'answer' => 'Outbond Learning'
        ]);
        Answer::create([
            'question_id' => 6,
            'answer' => 'Green Therapy'
        ]);

        Question::create([
            'question' => 'Apa saja pilar utama yang dikembangkan dalam proses pendidikan di Purwokerto Life School?',
            'score' => 10,
            'quiz_id' => 1
        ]);

        Answer::create([
            'question_id' => 7,
            'answer' => 'Pendidikan Akhlak, Logika, Kepemimpinan, Bisnis',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => 7,
            'answer' => 'Pendidikan Akhlak, Sains, Kepemimpinan, Kesenian'
        ]);
        Answer::create([
            'question_id' => 7,
            'answer' => 'Pendidikan Akhlak, Bahasa, Kepemimpinan, Bisnis'
        ]);
        Answer::create([
            'question_id' => 7,
            'answer' => 'Pendidikan Akhlak, Teknologi, Kepemimpinan, Bisnis'
        ]);

        Question::create([
            'question' => 'Apa yang dimaksud dengan PISA dalam konteks Purwokerto Life School?',
            'score' => 10,
            'quiz_id' => 1
        ]);

        Answer::create([
            'question_id' => 8,
            'answer' => 'Programme for International Student Asessment',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => 8,
            'answer' => 'Programme for Indonesian Student Asessment'
        ]);
        Answer::create([
            'question_id' => 8,
            'answer' => 'Programme for Internal Student Asessment'
        ]);
        Answer::create([
            'question_id' => 8,
            'answer' => 'Programme for Innovative Student Asessment'
        ]);

        Question::create([
            'question' => 'Berikut adalah beberapa kegiatan utama belajar di Purwokerto Life School, kecuali!',
            'score' => 10,
            'quiz_id' => 1
        ]);

        Answer::create([
            'question_id' => 9,
            'answer' => 'Belajar Bersama Alam'
        ]);
        Answer::create([
            'question_id' => 9,
            'answer' => 'Kurikulum Aqil Baligh'
        ]);
        Answer::create([
            'question_id' => 9,
            'answer' => 'Teknologi Informasi dan Komunikasi',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => 9,
            'answer' => 'Akhlaq dan Tahfidz Quran'
        ]);

        Question::create([
            'question' => "Dalam konteks PISA, mata pelajaran apa saja yang dinilai di Purwokerto Life School?",
            'score' => 10,
            'quiz_id' => 1
        ]);

        Answer::create([
            'question_id' => 10,
            'answer' => 'Matematika, Sains Alam, Membaca – Bahasa',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => 10,
            'answer' => 'Matematika, Sains, Bahasa Inggris'
        ]);
        Answer::create([
            'question_id' => 10,
            'answer' => 'Matematika, Sains Sosial, Membaca – Bahasa'
        ]);
        Answer::create([
            'question_id' => 10,
            'answer' => 'Matematika, Sains, Teknologi'
        ]);

        Quiz::create([
            'title' => 'Memahami Apa itu Internet',
            'description' => 'Quiz ini dirancang untuk menguji pemahaman Anda tentang konsep Internet, Hosting, Domain dan SLL.',
            'slug' => encrypt('memahamiinternet')
        ]);

        Question::create([
            'question' => "Apa definisi dari Internet?",
            'score' => 20,
            'quiz_id' => 2
        ]);

        Answer::create([
            'question_id' => 11,
            'answer' => 'Jaringan global yang menghubungkan jutaan komputer di seluruh dunia',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => 11,
            'answer' => 'Jaringan lokal yang menghubungkan komputer di satu gedung'
        ]);
        Answer::create([
            'question_id' => 11,
            'answer' => 'Sistem operasi komputer yang digunakan untuk mengakses web'
        ]);
        Answer::create([
            'question_id' => 11,
            'answer' => 'Layanan penyimpanan data situs web'
        ]);

        Question::create([
            'question' => "Komponen utama dari domain adalah?",
            'score' => 20,
            'quiz_id' => 2
        ]);

        Answer::create([
            'question_id' => 12,
            'answer' => 'SSL dan DNS'
        ]);
        Answer::create([
            'question_id' => 12,
            'answer' => 'IP Address dan URL'
        ]);
        Answer::create([
            'question_id' => 12,
            'answer' => 'Hosting dan Server'
        ]);
        Answer::create([
            'question_id' => 12,
            'answer' => 'Nama Domain dan Ekstensi Domain',
            'correct' => 1
        ]);

        Question::create([
            'question' => "Jenis hosting yang memberikan kontrol lebih dengan sumber daya yang dialokasikan adalah?",
            'score' => 20,
            'quiz_id' => 2
        ]);

        Answer::create([
            'question_id' => 13,
            'answer' => 'Shared Hosting'
        ]);
        Answer::create([
            'question_id' => 13,
            'answer' => 'VPS Hosting',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => 13,
            'answer' => 'Dedicated Hosting'
        ]);
        Answer::create([
            'question_id' => 13,
            'answer' => 'Cloud Hosting'
        ]);

        Question::create([
            'question' => "Apa fungsi utama dari Sertifikat SSL??",
            'score' => 20,
            'quiz_id' => 2
        ]);

        Answer::create([
            'question_id' => 14,
            'answer' => 'Menerjemahkan nama domain menjadi alamat IP'
        ]);
        Answer::create([
            'question_id' => 14,
            'answer' => 'Menyimpan file dan data situs web'
        ]);
        Answer::create([
            'question_id' => 14,
            'answer' => 'Melindungi data pengguna dan memastikan integritas data',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => 14,
            'answer' => 'Menyediakan hosting untuk beberapa situs web pada satu server'
        ]);

        Question::create([
            'question' => "Langkah-langkah keamanan website yang disarankan adalah, kecuali!",
            'score' => 20,
            'quiz_id' => 2
        ]);

        Answer::create([
            'question_id' => 15,
            'answer' => 'Menggunakan kata sandi kuat'
        ]);
        Answer::create([
            'question_id' => 15,
            'answer' => 'Menggunakan SSL'
        ]);
        Answer::create([
            'question_id' => 15,
            'answer' => 'Menggunakan SSL'
        ]);
        Answer::create([
            'question_id' => 15,
            'answer' => 'Mengabaikan backup data secara berkala',
            'correct' => 1
        ]);
    }
}
