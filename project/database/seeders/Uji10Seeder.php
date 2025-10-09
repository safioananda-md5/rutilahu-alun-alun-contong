<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Uji10Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $namesToDelete = [
            'MOCHAMAD SUJAK HARUN',
            'HARIYATI',
            'ASRUL HISYAM',
            'HADI SISWANTO',
            'GUNTUR AMBAROWO',
            'ROMIYAH',
            'KUSMIATIN',
            'AGUNG BASUKI',
            'MOCH. NUSRON',
            'WARISAH'
        ];

        DB::table('users')
            ->whereIn('name', $namesToDelete)
            ->delete();

        // Data Warga
        DB::table('users')->insert([
            [
                'name' => 'MOCHAMAD SUJAK HARUN',
                'email' => 'warga1@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('warga1'),
                'nik' => '3578131403550001',
                'no_kk' => '3578130301087948',
                'regency' => 'Kota Surabaya',
                'phone' => '1234567891',
                'phone_verified_at' => Carbon::now(),
                'pic_nik' => '[null]',
                'pic_selfie_nik' => '[null]',
                'pic_no_kk' => '[null]',
                'system_verified_status' => 'verified',
                'role' => 'user',
                'poor_family_status' => 'pramis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'HARIYATI',
                'email' => 'warga2@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('warga2'),
                'nik' => '3578136611520001',
                'no_kk' => '3578132301200024',
                'regency' => 'Kota Surabaya',
                'phone' => '1234567892',
                'phone_verified_at' => Carbon::now(),
                'pic_nik' => '[null]',
                'pic_selfie_nik' => '[null]',
                'pic_no_kk' => '[null]',
                'system_verified_status' => 'verified',
                'role' => 'user',
                'poor_family_status' => 'pramis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'ASRUL HISYAM',
                'email' => 'warga3@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('warga3'),
                'nik' => '3578131007660004',
                'no_kk' => '3578131402200009',
                'regency' => 'Kota Surabaya',
                'phone' => '1234567893',
                'phone_verified_at' => Carbon::now(),
                'pic_nik' => '[null]',
                'pic_selfie_nik' => '[null]',
                'pic_no_kk' => '[null]',
                'system_verified_status' => 'verified',
                'role' => 'user',
                'poor_family_status' => 'non-gamis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'HADI SISWANTO',
                'email' => 'warga4@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('warga4'),
                'nik' => '3578132011670003',
                'no_kk' => '3578130101082185',
                'regency' => 'Kota Surabaya',
                'phone' => '1234567894',
                'phone_verified_at' => Carbon::now(),
                'pic_nik' => '[null]',
                'pic_selfie_nik' => '[null]',
                'pic_no_kk' => '[null]',
                'system_verified_status' => 'verified',
                'role' => 'user',
                'poor_family_status' => 'non-gamis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'GUNTUR AMBAROWO',
                'email' => 'warga5@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('warga5'),
                'nik' => '3578130101088383',
                'no_kk' => '3578132811720003',
                'regency' => 'Kota Surabaya',
                'phone' => '1234567895',
                'phone_verified_at' => Carbon::now(),
                'pic_nik' => '[null]',
                'pic_selfie_nik' => '[null]',
                'pic_no_kk' => '[null]',
                'system_verified_status' => 'verified',
                'role' => 'user',
                'poor_family_status' => 'non-gamis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'ROMIYAH',
                'email' => 'warga6@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('warga6'),
                'nik' => '3578137006500022',
                'no_kk' => '3578131109200004',
                'regency' => 'Kota Surabaya',
                'phone' => '1234567896',
                'phone_verified_at' => Carbon::now(),
                'pic_nik' => '[null]',
                'pic_selfie_nik' => '[null]',
                'pic_no_kk' => '[null]',
                'system_verified_status' => 'verified',
                'role' => 'user',
                'poor_family_status' => 'gamis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'KUSMIATIN',
                'email' => 'warga7@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('warga7'),
                'nik' => '3578134508690006',
                'no_kk' => '3578130201088916',
                'regency' => 'Kota Surabaya',
                'phone' => '1234567897',
                'phone_verified_at' => Carbon::now(),
                'pic_nik' => '[null]',
                'pic_selfie_nik' => '[null]',
                'pic_no_kk' => '[null]',
                'system_verified_status' => 'verified',
                'role' => 'user',
                'poor_family_status' => 'non-gamis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'AGUNG BASUKI',
                'email' => 'warga8@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('warga8'),
                'nik' => '3578131901720002',
                'no_kk' => '3578130101083838',
                'regency' => 'Kota Surabaya',
                'phone' => '1234567898',
                'phone_verified_at' => Carbon::now(),
                'pic_nik' => '[null]',
                'pic_selfie_nik' => '[null]',
                'pic_no_kk' => '[null]',
                'system_verified_status' => 'verified',
                'role' => 'user',
                'poor_family_status' => 'non-gamis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'MOCH. NUSRON',
                'email' => 'warga9@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('warga9'),
                'nik' => '3578133006580002',
                'no_kk' => '3578130101088265',
                'regency' => 'Kota Surabaya',
                'phone' => '1234567899',
                'phone_verified_at' => Carbon::now(),
                'pic_nik' => '[null]',
                'pic_selfie_nik' => '[null]',
                'pic_no_kk' => '[null]',
                'system_verified_status' => 'verified',
                'role' => 'user',
                'poor_family_status' => 'pramis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'WARISAH',
                'email' => 'warga10@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('warga10'),
                'nik' => '3578134110600001',
                'no_kk' => '3578130101082185',
                'regency' => 'Kota Surabaya',
                'phone' => '12345678910',
                'phone_verified_at' => Carbon::now(),
                'pic_nik' => '[null]',
                'pic_selfie_nik' => '[null]',
                'pic_no_kk' => '[null]',
                'system_verified_status' => 'verified',
                'role' => 'user',
                'poor_family_status' => 'non-gamis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);

        $submissionIDToDelete = [
            'RUTILAHU-20251009082842-J8K6A3',
            'RUTILAHU-20251115143000-A2T9Z1',
            'RUTILAHU-20251201090000-B7R4D0',
            'RUTILAHU-20260120235959-Q5W8E7',
            'RUTILAHU-20260305101535-L9P0C2',
            'RUTILAHU-20260412174510-X1G3H5',
            'RUTILAHU-20260630010203-S4M7V9',
            'RUTILAHU-20260825060708-Z0Y6T4',
            'RUTILAHU-20260910121314-F2J5K8',
            'RUTILAHU-20261001000000-N3B1V7'
        ];

        DB::table('submissions')
            ->whereIn('submission_id', $submissionIDToDelete)
            ->delete();

        // Data Pengajuan Warga
        DB::table('submissions')->insert([
            [
                'submission_id' => 'RUTILAHU-20251009082842-J8K6A3',
                'user_id' => DB::table('users')
                    ->where('name', 'MOCHAMAD SUJAK HARUN')
                    ->value('id'),
                'address' => 'JL. KAWATAN VI/14',
                'no_rt' => 3,
                'no_rw' => 6,
                'revenue' => 600000,
                'asset' => 5000000,
                'dependents' => 5,
                'building_area' => 46.69,
                'building_legality' => 7,
                'roof_condition' => 2,
                'wall_condition' => 2,
                'floor_condition' => 1,
                'certificate_of_domicile' => '[none]',
                'certificate_of_ownership' => '[none]',
                'statement_of_nodispute' => '[none]',
                'statement_of_neverreceivedassistance' => '[none]',
                'statement_of_sellthehouse' => '[none]',
                'statement_of_incomebelowminimumwage' => '[none]',
                'status' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'submission_id' => 'RUTILAHU-20251115143000-A2T9Z1',
                'user_id' => DB::table('users')
                    ->where('name', 'HARIYATI')
                    ->value('id'),
                'address' => 'BUBUTAN II/1 SURABAYA',
                'no_rt' => 4,
                'no_rw' => 5,
                'revenue' => 600000,
                'asset' => 5000000,
                'dependents' => 5,
                'building_area' => 32.19,
                'building_legality' => 7,
                'roof_condition' => 2,
                'wall_condition' => 4,
                'floor_condition' => 2,
                'certificate_of_domicile' => '[none]',
                'certificate_of_ownership' => '[none]',
                'statement_of_nodispute' => '[none]',
                'statement_of_neverreceivedassistance' => '[none]',
                'statement_of_sellthehouse' => '[none]',
                'statement_of_incomebelowminimumwage' => '[none]',
                'status' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'submission_id' => 'RUTILAHU-20251201090000-B7R4D0',
                'user_id' => DB::table('users')
                    ->where('name', 'ASRUL HISYAM')
                    ->value('id'),
                'address' => 'JL. KAWATAN VI/15',
                'no_rt' => 3,
                'no_rw' => 6,
                'revenue' => 4000000,
                'asset' => 30000001,
                'dependents' => 2,
                'building_area' => 141.31,
                'building_legality' => 7,
                'roof_condition' => 1,
                'wall_condition' => 3,
                'floor_condition' => 3,
                'certificate_of_domicile' => '[none]',
                'certificate_of_ownership' => '[none]',
                'statement_of_nodispute' => '[none]',
                'statement_of_neverreceivedassistance' => '[none]',
                'statement_of_sellthehouse' => '[none]',
                'statement_of_incomebelowminimumwage' => '[none]',
                'status' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'submission_id' => 'RUTILAHU-20260120235959-Q5W8E7',
                'user_id' => DB::table('users')
                    ->where('name', 'HADI SISWANTO')
                    ->value('id'),
                'address' => 'PRABAN WETAN 3/29',
                'no_rt' => 2,
                'no_rw' => 5,
                'revenue' => 2000000,
                'asset' => 15000000,
                'dependents' => 2,
                'building_area' => 48.58,
                'building_legality' => 7,
                'roof_condition' => 3,
                'wall_condition' => 4,
                'floor_condition' => 2,
                'certificate_of_domicile' => '[none]',
                'certificate_of_ownership' => '[none]',
                'statement_of_nodispute' => '[none]',
                'statement_of_neverreceivedassistance' => '[none]',
                'statement_of_sellthehouse' => '[none]',
                'statement_of_incomebelowminimumwage' => '[none]',
                'status' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'submission_id' => 'RUTILAHU-20260305101535-L9P0C2',
                'user_id' => DB::table('users')
                    ->where('name', 'GUNTUR AMBAROWO')
                    ->value('id'),
                'address' => 'JL. TEMANGGUNGAN I/12 SURABAYA',
                'no_rt' => 3,
                'no_rw' => 5,
                'revenue' => 2000000,
                'asset' => 15000000,
                'dependents' => 4,
                'building_area' => 36.96,
                'building_legality' => 7,
                'roof_condition' => 2,
                'wall_condition' => 1,
                'floor_condition' => 3,
                'certificate_of_domicile' => '[none]',
                'certificate_of_ownership' => '[none]',
                'statement_of_nodispute' => '[none]',
                'statement_of_neverreceivedassistance' => '[none]',
                'statement_of_sellthehouse' => '[none]',
                'statement_of_incomebelowminimumwage' => '[none]',
                'status' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'submission_id' => 'RUTILAHU-20260412174510-X1G3H5',
                'user_id' => DB::table('users')
                    ->where('name', 'ROMIYAH')
                    ->value('id'),
                'address' => 'JEPATIAN VIII/20 SURABAYA',
                'no_rt' => 5,
                'no_rw' => 2,
                'revenue' => 600000,
                'asset' => 5000000,
                'dependents' => 3,
                'building_area' => 29.7,
                'building_legality' => 7,
                'roof_condition' => 2,
                'wall_condition' => 2,
                'floor_condition' => 2,
                'certificate_of_domicile' => '[none]',
                'certificate_of_ownership' => '[none]',
                'statement_of_nodispute' => '[none]',
                'statement_of_neverreceivedassistance' => '[none]',
                'statement_of_sellthehouse' => '[none]',
                'statement_of_incomebelowminimumwage' => '[none]',
                'status' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'submission_id' => 'RUTILAHU-20260630010203-S4M7V9',
                'user_id' => DB::table('users')
                    ->where('name', 'KUSMIATIN')
                    ->value('id'),
                'address' => 'PRABAN WETAN II/20',
                'no_rt' => 1,
                'no_rw' => 2,
                'revenue' => 3000000,
                'asset' => 30000001,
                'dependents' => 4,
                'building_area' => 111.81,
                'building_legality' => 7,
                'roof_condition' => 1,
                'wall_condition' => 4,
                'floor_condition' => 1,
                'certificate_of_domicile' => '[none]',
                'certificate_of_ownership' => '[none]',
                'statement_of_nodispute' => '[none]',
                'statement_of_neverreceivedassistance' => '[none]',
                'statement_of_sellthehouse' => '[none]',
                'statement_of_incomebelowminimumwage' => '[none]',
                'status' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'submission_id' => 'RUTILAHU-20260825060708-Z0Y6T4',
                'user_id' => DB::table('users')
                    ->where('name', 'AGUNG BASUKI')
                    ->value('id'),
                'address' => 'PRABAN WETAN 3/3',
                'no_rt' => 2,
                'no_rw' => 4,
                'revenue' => 3000000,
                'asset' => 15000000,
                'dependents' => 3,
                'building_area' => 141.9,
                'building_legality' => 7,
                'roof_condition' => 2,
                'wall_condition' => 4,
                'floor_condition' => 3,
                'certificate_of_domicile' => '[none]',
                'certificate_of_ownership' => '[none]',
                'statement_of_nodispute' => '[none]',
                'statement_of_neverreceivedassistance' => '[none]',
                'statement_of_sellthehouse' => '[none]',
                'statement_of_incomebelowminimumwage' => '[none]',
                'status' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'submission_id' => 'RUTILAHU-20260910121314-F2J5K8',
                'user_id' => DB::table('users')
                    ->where('name', 'MOCH. NUSRON')
                    ->value('id'),
                'address' => 'KAWATAN 2/4',
                'no_rt' => 1,
                'no_rw' => 6,
                'revenue' => 600000,
                'asset' => 5000000,
                'dependents' => 4,
                'building_area' => 30.66,
                'building_legality' => 7,
                'roof_condition' => 3,
                'wall_condition' => 4,
                'floor_condition' => 3,
                'certificate_of_domicile' => '[none]',
                'certificate_of_ownership' => '[none]',
                'statement_of_nodispute' => '[none]',
                'statement_of_neverreceivedassistance' => '[none]',
                'statement_of_sellthehouse' => '[none]',
                'statement_of_incomebelowminimumwage' => '[none]',
                'status' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'submission_id' => 'RUTILAHU-20261001000000-N3B1V7',
                'user_id' => DB::table('users')
                    ->where('name', 'WARISAH')
                    ->value('id'),
                'address' => 'PRABAN WETAN 3/29',
                'no_rt' => 2,
                'no_rw' => 4,
                'revenue' => 3000000,
                'asset' => 15000000,
                'dependents' => 3,
                'building_area' => 131.95,
                'building_legality' => 7,
                'roof_condition' => 2,
                'wall_condition' => 3,
                'floor_condition' => 4,
                'certificate_of_domicile' => '[none]',
                'certificate_of_ownership' => '[none]',
                'statement_of_nodispute' => '[none]',
                'statement_of_neverreceivedassistance' => '[none]',
                'statement_of_sellthehouse' => '[none]',
                'statement_of_incomebelowminimumwage' => '[none]',
                'status' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
