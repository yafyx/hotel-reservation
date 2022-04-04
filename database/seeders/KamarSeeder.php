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
                'deskripsi_kamar' => $faker->text(100),
                'fasilitas' => $faker->randomElement(['["AC","Televisi"]', '["AC","Televisi","Kulkas", "Bathtub"]', '["AC","Televisi","Bathtub"]']),
                'harga' => $faker->numberBetween(500000, 1000000),
                'gambar' => $faker->randomElement(['["images\/deluxe.jpeg"]', '["images\/standar.jpeg"]', '["images\/kingsuites.jpeg"]']),
                'jumlah_kamar' => $faker->numberBetween(5, 200),
                'id_user' => $i
            ));
        }
    }
}
