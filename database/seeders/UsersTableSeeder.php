<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'user_id' => 1,
                    'username' => 'user11',
                    'prefix' => 'นาง',
                    'first_name' => 'สุหรรษา',
                    'last_name' => 'ใจหนึ่ง',
                    'user_type' => 'ผู้ปฏิบัติงานบริหาร',
                    'email' => 'user11@gmail.com',
                    'password' => '12345678',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'user_id' => 2,
                    'username' => 'user22',
                    'prefix' => 'อ.',
                    'first_name' => 'นิพนธ์',
                    'last_name' => 'พิมพ์เบ้าธรรม',
                    'user_type' => 'ผู้ดูแลครุภัณฑ์',
                    'email' => 'user22@gmail.com',
                    'password' => '12345678',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'deleted_at' => null,
                    'created_by' => null,
                    'updated_by' => null,
                    'deleted_by' => null
                ],
                [
                    'user_id' => 3,
                    'username' => 'user33',
                    'prefix' => 'ผศ.ดร.',
                    'first_name' => 'ทองมี',
                    'last_name' => 'ละครพล',
                    'user_type' => 'ผู้ดูแลครุภัณฑ์',
                    'email' => 'user33@gmil.com',
                    'password' => '12345678',
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