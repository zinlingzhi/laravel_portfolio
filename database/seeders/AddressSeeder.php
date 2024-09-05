<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

                DB::table('addresses')->insert(
                    [
                        'address' => $address,
                        'user_id' => $faker->numberBetween($min = 1, $max = 100)
                    ]
                );
            }
    }
}
