<?php

namespace Database\Seeders;

use App\Models\CircuitType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CircuitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            ['name' => 'SPDT'],
            ['name' => 'Double Snap'],
            ['name' => 'NC Only'],
            ['name' => 'NO Only'],
        ];

        foreach($array as $row) {
            CircuitType::create([
                'name' => $row['name']
            ]);
        }
    }
}
