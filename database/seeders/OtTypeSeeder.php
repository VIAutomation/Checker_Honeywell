<?php

namespace Database\Seeders;

use App\Models\OtType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OtTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            ['name' => 'Full OT'],
            ['name' => 'Verify min'],
        ];

        foreach($array as $row) {
            OtType::create([
                'name' => $row['name']
            ]);
        }
    }
}
