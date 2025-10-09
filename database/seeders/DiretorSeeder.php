<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diretores')->insert(   
            ['nome'=>"Christopher Nolan",'descricao'=>"Diretor britânico",'nacionalidade_id'=> 2],
            ['nome'=>"Steven Spielberg",'descricao'=>"Diretor estadunidense",'nacionalidade_id'=> 1],
            ['nome'=>"Martin Scorsese",'descricao'=>"Diretor estadunidense",'nacionalidade_id'=> 1],
            ['nome'=>"Ridley Scott",'descricao' =>"Diretor britânico",'nacionalidade_id'=> 2],
            ['nome'=>"Denis Villeneuve",'descricao'=>"Diretor canadense",'nacionalidade_id'=> 8],
  
        );
    }
}
