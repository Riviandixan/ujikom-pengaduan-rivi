<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'nik' => '1200001',
            'name' => 'Guru Kesiswaan',
            'username' => 'admin',
            'password' => Hash::make('12345'),
            'phone' => '0813887621',
            'role' => 'admin',
        ]);

        User::insert([
            'nik' => '1200002',
            'name' => 'Pembina OSIS',
            'username' => 'petugas',
            'password' => Hash::make('12345'),
            'phone' => '0813887621',
            'role' => 'petugas',
        ]);

        User::insert([
            'nik' => '12008137',
            'name' => 'Siswa',
            'username' => 'masyarakat',
            'password' => Hash::make('12345'),
            'phone' => '0813887621',
            'role' => 'masyarakat',
        ]);
    }
}
