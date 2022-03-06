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
                'tipe_kamar' => $faker->randomElement(['Standar', 'Executive', 'King Suites']),
                'id_tamu' => $faker->numberBetween(1, 10),
                'tgl' => $faker->dateTimeBetween('-1 years', 'now'),
                'no_kamar' => $faker->numberBetween(1, 100),
                'tgl_checkin' => $faker->dateTimeBetween('-1 years', 'now'),
                'tgl_checkout' => $faker->dateTimeBetween('-1 years', 'now'),
                'status' => $faker->randomElement(['Check-in', 'Check-out']),
            ));
        }
    }
}
