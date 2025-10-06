<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RTRWSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->where('role', 'rtrw')->delete();
        DB::table('rtrws')->truncate();

        $countRW = 6;
        $countRT = [
            1 => 6,
            2 => 7,
            3 => 3,
            4 => 4,
            5 => 4,
            6 => 6,
        ];

        for ($i = 1; $i <= $countRW; $i++) {
            $inputRW = User::create(
                [
                    'name' => '[none]',
                    'email' => 'RW' . str_pad($i, 2, '0', STR_PAD_LEFT) . '@alunaluncontong.go.id',
                    'email_verified_at' => Carbon::now(),
                    'password' => '@AAC_Rw' . str_pad($i, 2, '0', STR_PAD_LEFT),
                    'nik' => '[none' . $i . ']',
                    'no_kk' => '[none]',
                    'regency' => '[none]',
                    'phone' => '[none' . $i . ']',
                    'phone_verified_at' => Carbon::now(),
                    'pic_nik' => '[none]',
                    'pic_selfie_nik' => '[none]',
                    'pic_no_kk' => '[none]',
                    'system_verified_status' => 'unverified',
                    'role' => 'rtrw',
                    'poor_family_status' => '[none]',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            );

            DB::table('rtrws')->insert(
                [
                    'parent' => null,
                    'status' => 'RW',
                    'number' => $i,
                    'user_id' => $inputRW->id,
                ]
            );

            foreach ($countRT as $indexcountRT => $RT) {
                if ($indexcountRT === $i) {
                    for ($j = 1; $j <= $RT; $j++) {
                        $inputRT = User::create(
                            [
                                'name' => '[none]',
                                'email' => 'RW' . str_pad($i, 2, '0', STR_PAD_LEFT) . 'RT' . str_pad($j, 2, '0', STR_PAD_LEFT) . '@alunaluncontong.go.id',
                                'email_verified_at' => Carbon::now(),
                                'password' => '@AAC_Rt' . str_pad($j, 2, '0', STR_PAD_LEFT),
                                'nik' => '[none' . $i . $j . ']',
                                'no_kk' => '[none]',
                                'regency' => '[none]',
                                'phone' => '[none' . $i . $j . ']',
                                'phone_verified_at' => Carbon::now(),
                                'pic_nik' => '[none]',
                                'pic_selfie_nik' => '[none]',
                                'pic_no_kk' => '[none]',
                                'system_verified_status' => 'unverified',
                                'role' => 'rtrw',
                                'poor_family_status' => '[none]',
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                            ]
                        );

                        DB::table('rtrws')->insert(
                            [
                                'parent' => $i,
                                'status' => 'RT',
                                'number' => $j,
                                'user_id' => $inputRT->id,
                            ]
                        );
                    }
                }
            }
        }
    }
}
