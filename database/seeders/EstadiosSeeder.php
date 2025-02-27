<?php

namespace Database\Seeders;

use App\Models\Estadio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estadio::factory()->count(5)->create();
    }
}
