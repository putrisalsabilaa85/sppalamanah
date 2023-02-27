<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $admin = User::create([
            'username' => 'Petugas',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('petugas');

        $user = User::create([
            'username' => 'Siswa',
            'email' => 'siswa@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('siswa');
    }
}
