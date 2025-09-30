<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\InformationSeeder;
use Database\Seeders\InformationAttachmentSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $this->call([
            UserSeeder::class,
            InformationSeeder::class,
            InformationAttachmentSeeder::class,
        ]);
    }
}
