<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create-application', 'guard_name' => 'admin']);
        Permission::create(['name' => 'edit-application', 'guard_name' => 'admin']);
        Permission::create(['name' => 'show-application', 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete-application', 'guard_name' => 'admin']);

        Permission::create(['name' => 'user-full-access', 'guard_name' => 'web']);

        // Roles Begin::
        // admin guard

        $role = Role::create(['name' => 'super-admin', 'guard_name' => 'admin']);

        $role = Role::create(['name' => '"Türkmenstandartlary"-baş-döwlet-gullugy', 'guard_name' => 'admin'])
            ->givePermissionTo(['show-application']);

        $role = Role::create(['name' => 'Standartlaşdyryş-we-Sertifikatlaşdyryş-bölümi', 'guard_name' => 'admin'])
            ->givePermissionTo(['show-application']);

        $role = Role::create(['name' => 'Metrologiýa-bölümi', 'guard_name' => 'admin'])
            ->givePermissionTo(['show-application']);
        
        $role = Role::create(['name' => 'Zähmeti-we-ýerasty-baýlyklary-goramak-bölümi', 'guard_name' => 'admin'])
            ->givePermissionTo(['show-application']);
        
        $role = Role::create(['name' => 'Kiberhowpsuzlyk-boýunça-sertifikatlaşdyryş-bölümi', 'guard_name' => 'admin'])
            ->givePermissionTo(['show-application']);

            
        $role = Role::create(['name' => 'Türkmen-standart-maglumat-merkezi', 'guard_name' => 'admin'])
            ->givePermissionTo(['show-application']);
            
        $role = Role::create(['name' => 'Akkreditasiýa-bölümi', 'guard_name' => 'admin'])
            ->givePermissionTo(['show-application']);

        $role = Role::create(['name' => 'Guramaçylyk-bölümi', 'guard_name' => 'admin'])
            ->givePermissionTo(['show-application']);
            
        $role = Role::create(['name' => 'Standartlaryň-döwlet-gaznasy-bölümi', 'guard_name' => 'admin'])
            ->givePermissionTo(['show-application']);

        // web guard
        
        $role = Role::create(['name' => 'raýat', 'guard_name' => 'web'])
            ->givePermissionTo(['user-full-access']);

        $role = Role::create(['name' => 'telekeçi', 'guard_name' => 'web'])
        ->givePermissionTo(['user-full-access']);

        $role = Role::create(['name' => 'döwlet-edara', 'guard_name' => 'web'])
            ->givePermissionTo(['user-full-access']);

        // Roles End::
    }
}