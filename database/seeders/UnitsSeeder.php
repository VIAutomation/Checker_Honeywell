<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            ['name' => 'in'],
            ['name' => 'mm'],
        ];

        foreach($array as $row) {
            Unit::create([
                'name' => $row['name']
            ]);
        }
    }
}
