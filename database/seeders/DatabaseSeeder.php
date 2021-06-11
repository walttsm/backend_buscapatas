<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User as User;
use App\Models\Animal as Animal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Limpando as tabelas antes de inserir novos dados
        User::truncate();
        Animal::truncate();

        $number_of_users = 4;
        User::factory($number_of_users)->create();
        for ($i = 1; $i <= $number_of_users; $i++) {
            $user = User::find($i);
            $number_of_animals = $user->number_of_animals;
            for ($j = 0; $j < $number_of_animals; $j++) {
                Animal::factory(1)->createOne([
                    'owner_id' => $i,
                ]);
            }

        }

    }
}
