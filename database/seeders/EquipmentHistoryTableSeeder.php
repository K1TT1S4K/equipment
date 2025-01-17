<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EquipmentHistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipment_history')->insert([
            [
                'equipment_history_id' => 1,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 1,
                'total' => 55,
                'document_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 2,
                'equipment_history_type' => 'โอน',
                'equipment_id' => 1,
                'total' => 55,
                'document_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 3,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 2,
                'total' => 1,
                'document_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 4,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 3,
                'total' => 1,
                'document_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 5,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 4,
                'total' => 1,
                'document_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 6,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 5,
                'total' => 1,
                'document_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 7,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 6,
                'total' => 1,
                'document_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 8,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 7,
                'total' => 1,
                'document_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 9,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 8,
                'total' => 1,
                'document_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 10,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 9,
                'total' => 1,
                'document_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 11,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 10,
                'total' => 1,
                'document_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 12,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 11,
                'total' => 1,
                'document_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 13,
                'equipment_history_type' => 'แทงจำหน่าย',
                'equipment_id' => 12,
                'total' => 1,
                'document_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 14,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 13,
                'total' => 1,
                'document_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 15,
                'equipment_history_type' => 'แทงจำหน่าย',
                'equipment_id' => 13,
                'total' => 1,
                'document_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 16,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 14,
                'total' => 1,
                'document_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 17,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 15,
                'total' => 1,
                'document_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 18,
                'equipment_history_type' => 'โอน',
                'equipment_id' => 15,
                'total' => 1,
                'document_id' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 19,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 16,
                'total' => 1,
                'document_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 20,
                'equipment_history_type' => 'โอน',
                'equipment_id' => 16,
                'total' => 1,
                'document_id' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 21,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 17,
                'total' => 1,
                'document_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 22,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 18,
                'total' => 1,
                'document_id' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 23,
                'equipment_history_type' => 'แทงจำหน่าย',
                'equipment_id' => 18,
                'total' => 1,
                'document_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ],
            [
                'equipment_history_id' => 24,
                'equipment_history_type' => 'เพิ่ม',
                'equipment_id' => 19,
                'total' => 1,
                'document_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
                'created_by' => null,
                'updated_by' => null,
                'deleted_by' => null
            ]
        ]);
    }
}