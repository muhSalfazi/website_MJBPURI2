<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('users')->insert([
    'username' => 'admin',
    'password' => Hash::make('password'), // Password is 'password'
    'last_login' => null,
    'created_at' => now(),
    'updated_at' => now(),
    ]);
    }
}