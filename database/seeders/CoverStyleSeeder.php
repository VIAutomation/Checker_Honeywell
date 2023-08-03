<?php

namespace Database\Seeders;

use App\Models\CoverStyle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoverStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            ['name' => 'Open Switch'],
            ['name' => 'Railed Cover'],
            ['name' => 'Pin Plunger'],
        ];

        foreach($array as $row) {
            CoverStyle::create([
                'name' => $row['name']
            ]);
        }
    }
}
