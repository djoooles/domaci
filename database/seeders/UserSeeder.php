<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $amount = $this->command->getOutput()->ask("Koliko korisnika zelite da napravite?",default: 500);

        $password = $this->command->getOutput()->ask("Koju lozinku zelite da korisnik ima?");


        $faker = Factory::create("sr_RS");

        $this->command->getOutput()->progressStart($amount);

        for($i = 0; $i < $amount; $i++)
        {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make($password)
            ]);

            $this->command->getOutput()->progressAdvance();

        }
            $this->command->getOutput()->progressFinish();
    }
}
