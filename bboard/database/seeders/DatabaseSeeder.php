<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
        $password = Hash::make('user');
        for ($i = 0; $i < 3; $i++) {
            User::create(['name' => Str::random(10),
                'email' => Str::random(10) . '@bboard.ru',
                'password' => $password
            ]);
        }
    }
}
