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
        DB::table('atores')->insert(
            ['nome'=>"Leonardo DiCaprio",'descricao'=>"Ator estadunidense",'nacionalidade_id'=> 1],
            ['nome'=>"Christian Bale",'descricao'=>"Ator britânico",'nacionalidade_id'=> 2],
            ['nome'=>"Cillian Murphy",'descricao'=>"Ator irlandês",'nacionalidade_id'=> 3],
            ['nome'=>"Tom Hanks",'descricao'=>"Ator estadunidense",'nacionalidade_id'=> 1],
            ['nome'=>"Daniel Kaluuya",'descricao'=>"Ator britânico",'nacionalidade_id'=> 2],
            ['nome'=>"Adam Sandler",'descricao'=>"Ator estadunidense",'nacionalidade_id'=> 1],


            
        );
    }
}
