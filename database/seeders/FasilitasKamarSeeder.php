<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FasilitasKamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 5; $i++) {
            DB::table('fasilitas_kamars')->insert(array(
                'nama_fasilitas' => $faker->unique()
                    ->randomElement(['AC', 'Bathtub', 'Televisi', 'Brankas dalam kamar', 'Pembuat kopi / teh']),
                'id_user' => $i
            ));
        }
    }
}
