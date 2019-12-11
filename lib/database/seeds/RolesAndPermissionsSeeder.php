<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        $permission = [];
        if (count($permission) > 0) {
            foreach ($permission as $k => $v) {
                if (is_array($v) && count($v) > 0) {
                    foreach ($v as $k1 => $v1) {
                        Permission::create(['name' => $permission[$k][$k1]]);
                    }
                }

            }
        }

        // this can be done as separate statements
        $role = Role::create(['name' => 'System Admin']);
        $role->givePermissionTo(Permission::all());
    }
}
