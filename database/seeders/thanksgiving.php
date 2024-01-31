<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class thanksgiving extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Hapus data existing
        \App\Models\thanksgiving::truncate();

        $names = [
            'Nur rohman',
            'Dede wahyudin',
            'Qisthi Ramadhani',
            'Farhan Noval Hidayat',
            'Andra Ristiano',
            'M Ikhsan gumanof',
            'Karntino chevy',
            'Shaddam Alghafiqih',
            'Reddy Adhi',
            'Moch Akbar Maulana',
            'Achmad Syahrul Hanafi',
            'Muhammad Iqbal',
            'M Rizal Fauzi',
            'Titan Bramantyo',
            'Tika Qur',
            'Eldi Anugrah',
            'Solihah Nurasiyah',
            'Ummu Izzatul Kharimah',
            'Eltansha Raksa Gama',
            'Nanda Nurisya',
            'Mukti Adhy Suryawan',
            'Nanditia Fitra A',
            'Atep Taopik H',
            'Rahmi Rahayu',
            'Dicky puja pratama',
            'Evanta Yudistira',
            'Purwa Darozatun Akbar',
            'Agnes Nabela',
            'Diantia Gresafira',
            'Nurul Afifah',
            'Vevilya Cinta',
            'Listi',
            'Novi Setiani',
            'Anita Nur Hidayati',
            'Nadia Alkatsiri',
            'Raden Nanda Teguh',
            'Dika Priska',
            'Muhammad Fiqri Muthohar',
            'Bayu Hendra Winata',
            'Wisnu Manupraba',
            'Indra Sakti',
        ];

        foreach ($names as $name) {
            DB::table('thanksgiving')->insert([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
