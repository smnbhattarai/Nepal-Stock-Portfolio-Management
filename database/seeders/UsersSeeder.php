<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Suman Bhattarai',
            'email' => 'smnbhattarai4@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
