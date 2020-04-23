<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Admin', 'email' => 'admin@opat.id', 'password' => Hash::make('admin123'), 'password_helper' => 'admin123', 'status' => 'admin'],
            ['name' => 'Petugas', 'email' => 'petugas@opat.id', 'password' => Hash::make('petugas123'), 'password_helper' => 'petugas123', 'status' => 'petugas'],
        ];
        User::insert($data);
    }
}
