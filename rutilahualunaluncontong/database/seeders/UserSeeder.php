<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'=>1,
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin_123'), // bcrypt
            'nik' => '123456789',
            'no_kk' => '123456789',
            'address' => 'Jl. Contoh Alamat No. 1, Surabaya',
            'phone_number' => '081234567890',
            'ktp_image' => 'uploads/ktp/admin.jpg', // pastikan path file valid
            'kk_image' => 'uploads/kk/admin.jpg',   // pastikan path file valid
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
