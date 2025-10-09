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
            ['nome'=>"Interestelar",'lancamento'=>"07-11-2014",'classificacao'=>"12",'duracao'=>"2h49min",'descricao'=>"Um grupo de exploradores viaja através de um buraco de minhoca em busca de um novo lar para a humanidade.",'diretor_id'=> 1,'produtora_id'=> 1,'nacionalidade_id'=> 1],
            ['nome'=>"O Senhor dos Anéis: A Sociedade do Anel",'lancamento'=>"19-12-2001",'classificacao'=>"12",'duracao'=>"2h58min",'descricao'=>"Um hobbit embarca em uma jornada para destruir um anel maligno e salvar a Terra-média.",'diretor_id'=> 2,'produtora_id'=> 2,'nacionalidade_id'=> 2],
            ['nome'=>"Avatar",'lancamento'=>"18-12-2009",'classificacao'=>"12",'duracao'=>"2h42min",'descricao'=>"Um ex-fuzileiro naval se envolve em um conflito em Pandora entre humanos e os nativos Navi.",'diretor_id'=> 3,'produtora_id'=> 3,'nacionalidade_id'=> 3],
            ['nome'=>"Coringa",'lancamento'=>"03-10-2019",'classificacao'=>"16",'duracao'=>"2h02min",'descricao'=>"Um comediante falido se transforma em um dos maiores vilões de Gotham City.",'diretor_id'=> 4,'produtora_id'=> 4,'nacionalidade_id'=> 1],
            ['nome'=>"Cidade de Deus",'lancamento'=>"30-08-2002",'classificacao'=>"18",'duracao'=>"2h10min",'descricao'=>"A história da ascensão do crime organizado na favela Cidade de Deus, no Rio de Janeiro.",'diretor_id'=> 5,'produtora_id'=> 5,'nacionalidade_id'=> 7],
            ['nome'=>"Os Incríveis",'lancamento'=>"05-11-2004",'classificacao'=>"L",'duracao'=>"1h55min",'descricao'=>"Uma família de super-heróis vive disfarçada no subúrbio até ser chamada novamente para salvar o mundo.",'diretor_id'=> 5,'produtora_id'=> 4,'nacionalidade_id'=> 1],
         );
    }
}
