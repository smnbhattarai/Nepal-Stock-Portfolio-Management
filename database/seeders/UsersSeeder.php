<?php

namespace Database\Seeders;

use App\Models\Profile;
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
        $user = User::create([
            'email' => 'smnbhattarai4@gmail.com',
            'password' => Hash::make('password')
        ]);
        Profile::create(['user_id' => $user->id, 'name' => 'Suman Admin', 'slug' => rand(100000000, 999999999)]);


        $user = User::create([
            'email' => 'smnbhattarai4+1@gmail.com',
            'password' => Hash::make('password')
        ]);
        Profile::create(['user_id' => $user->id, 'name' => 'Suman Editor', 'slug' => rand(100000000, 999999999)]);


        $user = User::create([
            'email' => 'smnbhattarai4+2@gmail.com',
            'password' => Hash::make('password')
        ]);
        Profile::create(['user_id' => $user->id, 'name' => 'Suman Member', 'slug' => rand(100000000, 999999999)]);
    }
}
