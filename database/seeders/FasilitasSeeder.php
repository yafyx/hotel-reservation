<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FasilitasSeeder extends Seeder
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
            DB::table('fasilitas')->insert(array(
                'nama_fasilitas' => $faker->randomElement(['Bar', 'Kolam renang', 'Restaurant']),
                'gambar' => $faker->randomElement(['["images\/bar.jpeg"]', '["images\/pool.jpeg"]', '["images\/restaurant.jpeg"]']),
                'id_user' => $i
            ));
        }
    }
}
