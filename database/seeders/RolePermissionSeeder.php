<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $role = Role::create(['name' => 'admin']);
        $user = User::find(1);
        $user->assignRole($role);


        $role = Role::create(['name' => 'editor']);
        $user = User::find(2);
        $user->assignRole($role);


        $role = Role::create(['name' => 'member']);
        $user = User::find(3);
        $user->assignRole($role);

    }
}
