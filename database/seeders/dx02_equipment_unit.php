<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Dx02_equipment_unit extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipment_unit')->insert(
            [
                [
                    'equipment_unit_id' => 1,
                    'equipment_unit_name' => 'ตัว',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'equipment_unit_id' => 2,
                    'equipment_unit_name' => 'เครื่อง',
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
