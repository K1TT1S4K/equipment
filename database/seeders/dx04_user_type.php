<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Dx04_user_type extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_type')->insert(
            [
                [
                    'user_type_id' => 1,
                    'user_type_name' => 'ผู้ปฏิบัติงานบริหาร',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'user_type_id' => 2,
                    'user_type_name' => 'ผู้ดูแลครุภัณฑ์',
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
