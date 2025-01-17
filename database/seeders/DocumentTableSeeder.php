<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DocumentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('document')->insert(
            [
                [
                    'document_id' => 1,
                    'document_path' => 'document/equipment_detail/equipment_detail_2567.pdf',
                    'document_type' => 'รายละเอียดครุภัณฑ์',
                    'document_date' => '2024-11-18',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 2,
                    'document_path' => 'document/equipment_detail/equipment_detail_2566.pdf',
                    'document_type' => 'รายละเอียดครุภัณฑ์',
                    'document_date' => '2023-11-18',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 3,
                    'document_path' => 'document/equipment_detail/equipment_detail_2565.pdf',
                    'document_type' => 'รายละเอียดครุภัณฑ์',
                    'document_date' => '2022-11-18',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 4,
                    'document_path' => 'document/equipment_detail/equipment_detail_2564.pdf',
                    'document_type' => 'รายละเอียดครุภัณฑ์',
                    'document_date' => '2021-11-18',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 5,
                    'document_path' => 'document/equipment_detail/equipment_detail_2563.pdf',
                    'document_type' => 'รายละเอียดครุภัณฑ์',
                    'document_date' => '2020-11-18',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 6,
                    'document_path' => 'document/equipment_detail/equipment_detail_2560.pdf',
                    'document_type' => 'รายละเอียดครุภัณฑ์',
                    'document_date' => '2017-11-20',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 7,
                    'document_path' => 'document/add_equipment/add_equipment_2566_1.pdf',
                    'document_type' => 'เพิ่มครุภัณฑ์_ผู้ปฎิบัติงานบริหาร',
                    'document_date' => '2023-11-11',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 8,
                    'document_path' => 'document/transfer_equipment/transfer_equipment_2567_1.pdf',
                    'document_type' => 'โอนครุภัณฑ์_ผู้ปฎิบัติงานบริหาร',
                    'document_date' => '2024-11-11',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 9,
                    'document_path' => 'document/add_equipment/add_equipment_2557_1.pdf',
                    'document_type' => 'เพิ่มครุภัณฑ์',
                    'document_date' => '2014-11-11',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 10,
                    'document_path' => 'document/disposal_equipment/disposal_equipment_2561_1.pdf',
                    'document_type' => 'ใบแทงจำหน่ายครุภัณฑ์_ผู้ปฎิบัติงานบริหาร',
                    'document_date' => '2018-11-11',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 11,
                    'document_path' => 'document/transfer_equipment/transfer_equipment_2567_2.pdf',
                    'document_type' => 'โอนครุภัณฑ์_ผู้ปฎิบัติงานบริหาร',
                    'document_date' => '2024-11-11',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 12,
                    'document_path' => 'document/transfer_equipment/transfer_equipment_2567_3.pdf',
                    'document_type' => 'โอนครุภัณฑ์_ผู้ปฎิบัติงานบริหาร',
                    'document_date' => '2024-11-11',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 13,
                    'document_path' => 'document/add_equipment/add_equipment_2556_1.pdf',
                    'document_type' => 'เพิ่มครุภัณฑ์',
                    'document_date' => '2013-11-11',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 14,
                    'document_path' => 'document/disposal_equipment/disposal_equipment_2560_1.pdf',
                    'document_type' => 'แทงจำหน่ายครุภัณฑ์_ผู้ปฎิบัติงานบริหาร',
                    'document_date' => '2017-11-11',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 15,
                    'document_path' => 'document/add_equipment/add_equipment_2566_1.pdf',
                    'document_type' => 'เพิ่มครุภัณฑ์_เจ้าหน้าที่สาขา',
                    'document_date' => '2023-11-11',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 16,
                    'document_path' => 'document/transfer_equipment/transfer_equipment_2567_1.pdf',
                    'document_type' => 'โอนครุภัณฑ์_เจ้าหน้าที่สาขา',
                    'document_date' => '2024-11-11',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 17,
                    'document_path' => 'document/disposal_equipment/disposal_equipment_2561_1.pdf',
                    'document_type' => 'ใบแทงจำหน่ายครุภัณฑ์_เจ้าหน้าที่สาขา',
                    'document_date' => '2018-11-11',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 18,
                    'document_path' => 'document/transfer_equipment/transfer_equipment_2567_2.pdf',
                    'document_type' => 'โอนครุภัณฑ์_เจ้าหน้าที่สาขา',
                    'document_date' => '2024-11-11',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 19,
                    'document_path' => 'document/transfer_equipment/transfer_equipment_2567_3.pdf',
                    'document_type' => 'โอนครุภัณฑ์_เจ้าหน้าที่สาขา',
                    'document_date' => '2024-11-11',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'document_id' => 20,
                    'document_path' => 'document/disposal_equipment/disposal_equipment_2560_1.pdf',
                    'document_type' => 'แทงจำหน่ายครุภัณฑ์_เจ้าหน้าที่สาขา',
                    'document_date' => '2017-11-11',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ]
            ],
        );
    }
}
