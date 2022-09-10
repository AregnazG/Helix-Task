<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        User::create([
            'username' => 'Aregnaz',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'username' => 'Hrahat',
            'password' => bcrypt('123456'),
        ]);
    }
}
