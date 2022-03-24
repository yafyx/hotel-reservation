<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 4; $i++) {
            DB::table('users')->insert(array(
                'name' => $faker->name,
                'isAdmin' => $faker->boolean(50),
                'email' => $faker->freeEmail,
                'password' => Hash::make("password"),
            ));
        }
    }
}
