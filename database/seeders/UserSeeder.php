<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rayat = User::firstOrCreate(
            [
                'email' => 'user'.'@gmail.com',
            ],
            [
                'first_name' => 'User',
                'last_name' => 'Userow',
                'password' => Hash::make('password'),
                'phone_number' => 65656585,
                'address' => "Aşgabat ş. 30mkr 2-geç, 17-öý, 7-otag",
                'company_name' => "Google LLC",
                'email_verified_at' => date('Y-m-d H:i:s')
            ]
        );

        $rayat->assignRole('raýat');

        $telekeci = User::firstOrCreate(
            [
                'email' => 'esca656585'.'@gmail.com',
            ],
            [
                'first_name' => 'Esen',
                'last_name' => 'Meredow',
                'password' => Hash::make('password'),
                'phone_number' => 65656585,
                'address' => "Aşgabat ş. Çoganly Balkan 16",
                'company_name' => "Apple Inc",
                'email_verified_at' => date('Y-m-d H:i:s')
            ]
        );

        $telekeci->assignRole('telekeçi');

        $edara = User::firstOrCreate(
            [
                'email' => 'edara'.'@gmail.com',
            ],
            [
                'first_name' => 'Esca',
                'last_name' => 'Meredoff',
                'password' => Hash::make('password'),
                'phone_number' => 65656585,
                'address' => "Aşgabat ş. Çoganly Balkan 16",
                'company_name' => "Apple Inc",
                'email_verified_at' => date('Y-m-d H:i:s')
            ]
        );

        $edara->assignRole('döwlet-edara');
    }
}
