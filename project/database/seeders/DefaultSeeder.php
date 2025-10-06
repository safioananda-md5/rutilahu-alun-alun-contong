<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RTRWSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\File;
use Database\Seeders\SubmissionSeeder;
use Database\Seeders\InformationSeeder;
use Illuminate\Support\Facades\Storage;
use Database\Seeders\InformationAttachmentSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        File::deleteDirectory(storage_path('app/public/file_foto_ktp'));
        File::deleteDirectory(storage_path('app/public/file_foto_kk'));
        File::deleteDirectory(storage_path('app/public/file_foto_selfi_ktp'));
        File::deleteDirectory(storage_path('app/public/informasi_coverbesar'));
        File::deleteDirectory(storage_path('app/public/informasi_coverkecil'));
        File::deleteDirectory(storage_path('app/public/informasi_lampiran'));
        File::deleteDirectory(storage_path('app/public/pernyataan_pendapatan_dibawah_umk'));
        File::deleteDirectory(storage_path('app/public/pernyataan_tidak_bantuan'));
        File::deleteDirectory(storage_path('app/public/pernyataan_tidak_menjual_rumah'));
        File::deleteDirectory(storage_path('app/public/pernyataan_tidak_sengketa'));
        File::deleteDirectory(storage_path('app/public/sertifikat_domisili'));
        File::deleteDirectory(storage_path('app/public/sertifikat_hak_milik'));

        $this->call([
            UserSeeder::class,
            InformationSeeder::class,
            InformationAttachmentSeeder::class,
            SubmissionSeeder::class,
            RTRWSeeder::class,
        ]);
    }
}
