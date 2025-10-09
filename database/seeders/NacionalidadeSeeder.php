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
        DB::table('nacionalidades')->insert(
            ['nome'=>"Estados Unidos"],
            ['nome'=>"Reino Unido"],
            ['nome'=>"Irlanda"],
            ['nome'=>"Níger"],
            ['nome'=>"Nigéria"],
            ['nome'=>"Angola"],
            ['nome'=>"Brasil"],
            ['nome'=>"Canadá"],
            ['nome'=>"China"],
            ['nome'=>"Coréia do Sul"],
            ['nome'=>"África do Sul"],
            ['nome'=>"Mongólia"],
            ['nome'=>"Israel"],
            ['nome'=>"Vietnã"],
            ['nome'=>"Japão"],
            ['nome'=>"Uzbequistão"],
            ['nome'=>"Líbano"],
            ['nome'=>"Afeganistão"],
            
        );
    }
}
