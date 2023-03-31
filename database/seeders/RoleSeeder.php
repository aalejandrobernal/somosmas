<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $Role1 = Role::create(['name' => 'Admin']);
        $Role2 = Role::create(['name' => 'User']);


        Permission::create(['name' => 'admin'])->assignRole($Role1);
        Permission::create(['name' => 'admin.users'])->assignRole($Role1);
    }
}
