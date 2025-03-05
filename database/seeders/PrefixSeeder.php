<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrefixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
        {
        DB :: table('prefixes') -> insert( [
            [
                'name' => 'น.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'นาง',
                'created_at' => now(),
                'updayed_at' => now(),
            ],
            [
                'name' => 'น.ส.',
                'created_at' => now(),
                'updayed_at' => now(),
            ],
            [
                'name' => 'อ.',
                'created_at' => now(),
                'updayed_at' => now(),
            ],
<<<<<<< HEAD
            [
                'name' => 'ดร.',
                'created_at' => now(),
                'updayed_at' => now(),
            ],
            [
                'name' => 'ผศ.',
                'created_at' => now(),
                'updayed_at' => now(),
            ],
            [
                'name' => 'รศ.',
                'created_at' => now(),
                'updayed_at' => now(),
            ],
            [
                'name' => 'ศ.',
                'created_at' => now(),
                'updayed_at' => now(),
            ],
=======
>>>>>>> 3fef48bc14544366ee69680f689bd460d547a870
        ]);
    }
}
