<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Dx05_document_type extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('document_type')->insert(
            [
                [
                    'document_type_id' => 1,
                    'document_type_name' => 'รายละเอียดครุภัณฑ์',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_type_id' => 2,
                    'document_type_name' => 'เพิ่มครุภัณฑ์',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_type_id' => 3,
                    'document_type_name' => 'โอนครุภัณฑ์',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_type_id' => 4,
                    'document_type_name' => 'แทงจำหน่ายครุภัณฑ์',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
            ],
        );
    }
}
