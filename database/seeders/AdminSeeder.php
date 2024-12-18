<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin_login')->insert([
            [
                'email' => 'chelsea@aero.ac.id',
                'password' => '364726',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
