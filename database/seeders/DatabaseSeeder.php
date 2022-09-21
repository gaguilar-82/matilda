<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        User::factory([
            'name'              => 'Maritza Alcaraz',
            'email'             => 'maritza.alcaraz@gmail.com',
            'email_verified_at' => now(),
            'password'          => bcrypt('password'),
            'role'              => 'admin',
            'is_active'         => true
        ])->create();
    }
}
