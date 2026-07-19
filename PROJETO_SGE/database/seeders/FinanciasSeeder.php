<?php

namespace Database\Seeders;

use Database\Factories\FinanciaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Financia;

class FinanciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Financia::factory(7)->create();
    }
}
