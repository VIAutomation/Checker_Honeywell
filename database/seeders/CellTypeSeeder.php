<?php

namespace Database\Seeders;

use App\Models\CellType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CellTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CellType::create([
            'name' => 'Low'
        ]);

        CellType::create([
            'name' => 'High'
        ]);
    }
}
