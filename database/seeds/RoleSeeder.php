<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Role Administrador
        $roleA = Role::create([
            'name' => 'admin',
            'description' => 'Administrador'
        ]);
        $roleM = Role::create([
            'name' => 'mantenedor',
            'description' => 'Resp. de RR.HH'
        ]);
        $roleU = Role::create([
            'name' => 'user',
            'description' => 'Usuario' // Clientes
        ]);
        $roleA->givePermissionTo([
            'access_dashboard',
            'access_permission',
            'create_employee',
            'store_employee',
            'edit_employee',
            'update_employee',
            'destroy_employee',
            'restore_employee',

            /*
            'view_shipping',
            'store_shipping',
            'update_shipping',
            'delete_shipping',

            'view_payments',
            'store_payments',
            'delete_payments',
            'update_payments',

            'list_user',
            'create_user',
            'update_user',
            'destroy_user',
            'list_role',
            'create_role',
            'update_role',
            'destroy_role',
            'list_permission',
            'create_permission',
            'update_permission',
            'destroy_permission',

            'list_customer',
            'create_customer',
            'update_customer',
            'destroy_customer',
            */

        ]);

        $roleM->givePermissionTo([
            'access_dashboard',
            'create_employee',
            'store_employee',
            'edit_employee',
            'update_employee',
            'destroy_employee',
            'restore_employee',
        ]);
    }
}
