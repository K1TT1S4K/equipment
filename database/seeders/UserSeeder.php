<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    protected static ?string $password;

    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => fake()->userName(),
                'prefix_id' => 1,
                'firstname' => fake()->firstNameMale(),
                'lastname' => fake()->lastName(),
                'user_type' => 'admin',
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => static::$password ??= Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'username' => fake()->userName(),
                'prefix_id' => 2,
                'firstname' => fake()->firstNameFemale(),
                'lastname' => fake()->lastName(),
                'user_type' => 'department_officer',
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => static::$password ??= Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'username' => fake()->userName(),
                'prefix_id' => 3,
                'firstname' => fake()->firstNameFemale(),
                'lastname' => fake()->lastName(),
                'user_type' => 'administrative_officer',
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => static::$password ??= Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'username' => 'userT111',
                'prefix_id' => 4,
                'firstname' => 'บุญเหลือ',
                'lastname' => 'นาบำรุง',
                'user_type' => 'user',
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => static::$password ??= Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'username' => 'userT222',
                'prefix_id' => 4,
                'firstname' => 'นราศักดิ์',
                'lastname' => 'วงษ์วาสน์',
                'user_type' => 'user',
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => static::$password ??= Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
            [
                'username' => 'user1',
                'prefix_id' => 1,
                'firstname' => 'กิตติศักดิ์',
                'lastname' => 'ผาทอง',
                'user_type' => 'admin',
                'email' => 'test@example.com',
                'email_verified_at' => now(),
                'password' => static::$password ??= Hash::make('password'),
                'remember_token' => Str::random(10),
            ],
        ]);
    }
}
