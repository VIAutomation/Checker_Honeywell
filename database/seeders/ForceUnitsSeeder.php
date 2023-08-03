<?php

namespace Database\Seeders;

use App\Models\ForceUnit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ForceUnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            ['name' => 'Oz'],
            ['name' => 'Grms'],
        ];

        foreach($array as $row) {
            ForceUnit::create([
                'name' => $row['name']
            ]);
        }
    }
}
