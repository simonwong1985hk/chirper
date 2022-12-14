<?php

namespace Database\Seeders;

use App\Models\Chirp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChirpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chirp::factory()->count(10)->create();
    }
}
