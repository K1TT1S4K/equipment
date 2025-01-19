<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Dx06_equipment_history_type extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipment_history_type')->insert(
            [
                [
                    'equipment_history_type_id' => 1,
                    'equipment_history_type_name' => 'เพิ่ม',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'equipment_history_type_id' => 2,
                    'equipment_history_type_name' => 'โอน',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'equipment_history_type_id' => 3,
                    'equipment_history_type_name' => 'แทงจำหน่าย',
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