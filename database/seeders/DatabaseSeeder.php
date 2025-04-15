<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Group::factory()->createMany([
            ['name' => "21IT-PI"],
            ['name' => "22IT-PI"],
            ['name' => "23IT-PI"]
        ]);
    }
}
