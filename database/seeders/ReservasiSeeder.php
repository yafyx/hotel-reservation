<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ReservasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('reservasis')->insert(array(
                'id_kamar' => $faker->numberBetween(1, 3),
                'id_tamu' => $faker->numberBetween(1, 10),
                'tgl' => $faker->dateTimeBetween('-1 years', 'now'),
                'no_kamar' => $faker->numberBetween(1, 100),
                'tgl_checkin' => $faker->dateTimeBetween('-1 years', 'now', $timezone = null),
                'tgl_checkout' => $faker->dateTimeBetween('-1 years', 'now', $timezone = null),
                'status' => $faker->boolean(50),
            ));
        }
    }
}
