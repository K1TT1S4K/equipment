<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            Dx01_location_of_equipment::class,
            Dx02_equipment_unit::class,
            Dx03_prefix::class,
            Dx04_user_type::class,
            Dx05_document_type::class,
            Dx06_equipment_history_type::class,
            Dx07_users::class,
            Dx08_document::class,
            Dx09_equipment::class,
            Dx10_equipment_history::class
            // เรียกใช้งาน Seeder อื่น ๆ
        ]);
    }
}
