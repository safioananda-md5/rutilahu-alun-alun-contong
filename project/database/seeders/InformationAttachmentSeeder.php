<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InformationAttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('information_attachments')->truncate();

        DB::table('information_attachments')->insert([
            [
                'information_id' => 1,
                'filename' => 'Default_document_1.pdf',
            ],
            [
                'information_id' => 1,
                'filename' => 'Default_document_2.pdf',
            ],
            [
                'information_id' => 1,
                'filename' => 'Default_document_3.pdf',
            ],
        ]);

        DB::table('information_attachments')->update([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
