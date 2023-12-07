<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = Admin::firstOrCreate(
            [
                'email' => 'tds'.'@sanly.tm',
                'username' => 'admintds',
            ],
            [
                'first_name' => 'Admin',
                'last_name' => 'Adminow',
                'password' => Hash::make('041098esca'),
            ]
        );

        $superAdmin->assignRole('super-admin');

        $adminStandart = Admin::firstOrCreate(
            [
                'email' => 'admin-standart'.'@tds.gov.tm',
                'username' => 'admin-standart',
            ],
            [
                'first_name' => 'Admin Standart',
                'last_name' => 'Admin Standartow',
                'password' => Hash::make('Standart2023Admin'),
            ]
        );

        $adminStandart->assignRole('Standartlaryň-döwlet-gaznasy-bölümi');
    }
}
