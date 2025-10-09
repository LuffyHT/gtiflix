<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtoras')->insert(
            ['nome'=>"Walt Disney"],
            ['nome'=>"Warner Bros"],
            ['nome'=>"Universal"],
            ['nome'=>"Pixar"],
        );
    }
}
