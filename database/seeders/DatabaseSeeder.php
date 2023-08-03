<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(\Database\Seeders\CellTypeSeeder::class);
        $this->call(\Database\Seeders\CircuitTypeSeeder::class);
        $this->call(\Database\Seeders\CoverStyleSeeder::class);
        $this->call(\Database\Seeders\ForceUnitsSeeder::class);
        $this->call(\Database\Seeders\OtTypeSeeder::class);
        $this->call(\Database\Seeders\UnitsSeeder::class);
        $this->call(\Database\Seeders\ModelSeeder::class);
    }
}
