<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 3; $i++) {
            DB::table('kamars')->insert(array(
                'tipe_kamar' => $faker->randomElement(['Standar', 'Deluxe', 'King Suites']),
                'nomor' => $faker->numberBetween(1, 3),
                'fasilitas' => $faker->randomElement(['TV, Meja, Kamar mandi, Lemari es.', 'Desain lebih menarik, ditempatkan di area yang lebih baik dibandingkan standar dan superior room', 'Lebih luas, Fasilitas terbaik']),
                'status' => $faker->randomElement(['Tersedia', 'Booked', 'Tidak tersedia']),
            ));
        }
    }
}
