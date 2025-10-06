<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // pw
        // pelayanan_luar_biasa_terpercaya

        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => "Admin Alun-Alun Contong Kota Surabaya",
                'email' => 'kelurahan.alun2contong@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('pelayanan_luar_biasa_terpercaya'),
                'nik' => '3578139999999999',
                'no_kk' => '3578139999999999',
                'regency' => 'Kota Surabaya',
                'phone' => '082147702966',
                'phone_verified_at' => Carbon::now(),
                'pic_nik' => '[null]',
                'pic_selfie_nik' => '[null]',
                'pic_no_kk' => '[null]',
                'system_verified_status' => 'verified',
                'role' => 'admin99',
                'poor_family_status' => 'non-gamis',
            ],
            [
                'name' => "John Doe",
                'email' => 'john.doe@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('itsjohn'),
                'nik' => '3578139999999998',
                'no_kk' => '3578139999999998',
                'regency' => 'Kota Surabaya',
                'phone' => '082345678900',
                'phone_verified_at' => Carbon::now(),
                'pic_nik' => '[null]',
                'pic_selfie_nik' => '[null]',
                'pic_no_kk' => '[null]',
                'system_verified_status' => 'verified',
                'role' => 'user',
                'poor_family_status' => 'non-gamis',
            ],
            [
                'name' => "Jean Doe",
                'email' => 'Jean.doe@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('itsjean'),
                'nik' => '3578139999999988',
                'no_kk' => '3578139999999988',
                'regency' => 'Kota Surabaya',
                'phone' => '082345678800',
                'phone_verified_at' => Carbon::now(),
                'pic_nik' => '[null]',
                'pic_selfie_nik' => '[null]',
                'pic_no_kk' => '[null]',
                'system_verified_status' => 'verified',
                'role' => 'user',
                'poor_family_status' => 'non-gamis',
            ],
        ]);

        DB::table('users')->update([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
