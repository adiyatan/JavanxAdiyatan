<?php

namespace Database\Seeders;

use App\Models\Thanksgiving;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class thanksgivingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        thanksgiving::truncate();

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
            'Lubnatul Hilwah',
        ];

        foreach ($names as $name) {
            Thanksgiving::create([
                'name' => $name,
                'idDetail' => Str::uuid(),
            ]);
        }
    }
}
