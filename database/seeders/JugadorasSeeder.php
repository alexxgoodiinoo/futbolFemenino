<?php

namespace Database\Seeders;

use App\Models\Jugadora;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JugadorasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jugadora::factory()->count(5)->create();
    }
}
