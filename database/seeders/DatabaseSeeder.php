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
            UsersTableSeeder::class,
            DocumentTableSeeder::class,
            EquipmentTableSeeder::class,
            EquipmentHistoryTableSeeder::class
            // เรียกใช้งาน Seeder อื่น ๆ
        ]);
    }
}