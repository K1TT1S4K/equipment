<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Dx03_prefix extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prefix')->insert(
            [
                [
                    'prefix_id' => 1,
                    'prefix_name' => 'นาง',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'prefix_id' => 2,
                    'prefix_name' => 'อ.',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'prefix_id' => 3,
                    'prefix_name' => 'ผศ.ดร.',
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
