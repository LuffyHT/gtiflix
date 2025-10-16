<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filmes')->insert(
            [
            ['nome'=>"Interestelar",'lancamento'=>"2014-11-07",'classificacao'=>"12",'duracao'=>"169",'descricao'=>"Um grupo de exploradores viaja através de um buraco de minhoca em busca de um novo lar para a humanidade.",'diretor_id'=> 1,'produtora_id'=> 1,'nacionalidade_id'=> 1],
            ['nome'=>"O Senhor dos Anéis: A Sociedade do Anel",'lancamento'=>"2001-12-19",'classificacao'=>"12",'duracao'=>"178",'descricao'=>"Um hobbit embarca em uma jornada para destruir um anel maligno e salvar a Terra-média.",'diretor_id'=> 2,'produtora_id'=> 2,'nacionalidade_id'=> 2],
            ['nome'=>"Avatar",'lancamento'=>"2009-12-18",'classificacao'=>"12",'duracao'=>"162",'descricao'=>"Um ex-fuzileiro naval se envolve em um conflito em Pandora entre humanos e os nativos Navi.",'diretor_id'=> 3,'produtora_id'=> 3,'nacionalidade_id'=> 3],
            ['nome'=>"Coringa",'lancamento'=>"2019-10-03",'classificacao'=>"16",'duracao'=>"124",'descricao'=>"Um comediante falido se transforma em um dos maiores vilões de Gotham City.",'diretor_id'=> 4,'produtora_id'=> 4,'nacionalidade_id'=> 1],
            ['nome'=>"Cidade de Deus",'lancamento'=>"2002-08-03",'classificacao'=>"18",'duracao'=>"130",'descricao'=>"A história da ascensão do crime organizado na favela Cidade de Deus, no Rio de Janeiro.",'diretor_id'=> 5,'produtora_id'=> 5,'nacionalidade_id'=> 7],
            ['nome'=>"Os Incríveis",'lancamento'=>"2004-11-05",'classificacao'=>"1",'duracao'=>"115",'descricao'=>"Uma família de super-heróis vive disfarçada no subúrbio até ser chamada novamente para salvar o mundo.",'diretor_id'=> 5,'produtora_id'=> 4,'nacionalidade_id'=> 1],
            ]
         );
    }
}
