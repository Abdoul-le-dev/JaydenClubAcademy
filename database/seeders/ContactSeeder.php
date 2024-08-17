<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('contacts')->insert([
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'message' => $faker->realText(200),
                'email' => $faker->email,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
