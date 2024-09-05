<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        for ($i = 1; $i <= 100; $i++) {
                // Fake Address
                $address = $faker->city;

                DB::table('users')->insert(
                    [
                        'address' => $address,
                        'user_id' => $faker->numberBetween($min = 1, $max = 100)
                    ]
                );
            }
    }
}
