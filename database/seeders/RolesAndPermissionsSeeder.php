<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'agent']);

        // Create permissions
        $createPostPermission = Permission::create(['name' => 'create post']);
        $editPostPermission = Permission::create(['name' => 'view post']);

        // Assign permissions to roles
        $adminRole->givePermissionTo($createPostPermission, $editPostPermission);
        $userRole->givePermissionTo($editPostPermission);

        // Add more roles and permissions as needed
    }
}
