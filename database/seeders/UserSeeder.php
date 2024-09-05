<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // Insert the post into the database
        for ($i = 1; $i <= 100; $i++) {
        // username
            $firstName = $faker->city;
            $lastName = $faker->lastname;

        // first initial last name @ random email safe url
            $email = $firstName[0].$lastName.'@'.$faker->safeEmailDomain;
            DB::table('users')->insert(
                [
                    'name' => $firstName.' '.$lastName,
                    'email' => $email,
                    'email_verified_at' => date('Y-m-d')
                ]
            );
        }

    }
}
