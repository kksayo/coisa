<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produtoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
DB::table('produtos')->insert(
[
    [
        'name'=> 'Cássio de Pelúcia',
        'descricao'=> 'Uma miniatura do melhor goleiro do mundo',
        'valor'=> 129000.00,
        'foto'=> 'https://www.golstore.com.br/wp-content/uploads/2024/03/CASSIO-PELUCIA-E-COPO-700-JOGOS-1024x987.png',
        'user_id'=> 1,
    ],

    [
        'name'=> 'Miniatura Relampago Marquinhos',
        'descricao'=> 'É uma miniatura em tamanho real do relampago marcos, alcança em torno de 3000 km/h',
        'valor'=> 133339.99,
        'foto'=> 'https://a-static.mlcdn.com.br/450x450/carrinhos-relampago-mcqueen-friccao-brinquedo-filme-carros/insidetech/6carmqcx/dbc2cbbf1cc77afaf32104f8a973d3d6.jpeg',
        'user_id'=> 1,
    ],

    [
        'name'=> 'Bomba foda de encher bike',
        'descricao'=> 'É uma bomba, ela é foda, e ela enche bike',
        'valor'=> 39.99,
        'foto'=> 'https://images.tcdn.com.br/img/img_prod/1100542/bomba_para_encher_pneu_bike_com_manometro_43132_001_tramontina_20801_1_fdf021754184dbbbb0f9adb3963e2e88.jpg',
        'user_id'=> 1,
    ],

    [
        'name'=> 'Anti depressivo',
        'descricao'=> 'Toma pra n se morrer',
        'valor'=> 79.90,
        'foto'=> 'https://img.freepik.com/vetores-premium/pilula-capsula-vermelha-e-branca_92242-102.jpg',
        'user_id'=> 1,
    ],

    

    [
        'name'=> 'Computador Gamer roda tudo',
        'descricao'=> 'Uma máquina de combate, uma abominação da natureza',
        'valor'=> 20000.00,
        'foto'=> 'https://a-static.mlcdn.com.br/450x450/laptop-da-xuxa-candide-musical-x-bilingue-60-atividades-3098-candide-brinquedos/gazinshop/1130/4591c28f8224f2a650ab843a310b881c.jpeg',
        'user_id'=> 1,
    ],
    
    [
        'name'=> '𓉔 𓉕 𓉖',
        'descricao'=> '𓀀 𓀁 𓀂 𓀃 𓀄 𓀅 𓀆 𓀇 𓀈 𓀉 𓀊 𓀋 𓀌 𓀍 𓀎 𓀏 𓀐 𓀑 𓀒 𓀓 𓀔 𓀕 𓀖 𓀗 𓀘 𓀙 𓀚 𓀛 𓀜 𓀝 𓀞 𓀟 𓀠 𓀡 𓀢 𓀣 𓀤 𓀥 𓀦 𓀧 𓀨 𓀩 𓀪 𓀫 𓀬 𓀭 𓀮 𓀯 𓀰 𓀱 𓀲 𓀳 𓀴 𓀵 𓀶 𓀷 𓀸 𓀹 𓀺 𓀻 𓀼 𓀽 𓀾 𓀿 𓁀 𓁁 𓁂 𓁃 𓁄 𓁅 𓁆 𓁇 𓁈 𓁉 𓁊 𓁋 𓁌 𓁍 𓁎 𓁏 𓁐 𓁑 𓁒 𓁓 𓁔 𓁕 𓁖 𓁗 𓁘 𓁙 𓁚 𓁛 𓁜 𓁝 𓁞 𓁟 𓁠 𓁡 𓁢 𓁣 𓁤 𓁥 𓁦 𓁧 𓁨 𓁩 𓁪 𓁫 𓁬 𓁭 𓁮 𓁯 𓁰 𓁱',
        'valor'=> 12.50,
        'foto'=> 'https://i.pinimg.com/736x/c3/de/88/c3de88d424033d2695e617733fa43d7f.jpg',
        'user_id'=> 1,
    ],

    [
        'name'=> 'Cartão Clonado',
        'descricao'=> '200 reais em cartão clonado livres para você gastar',
        'valor'=> 399.99,
        'foto'=> 'https://www.iq.com.br/wp-content/uploads/2020/07/Cartao-Meliuz-1.jpeg',
        'user_id'=> 1,
    ],

    [
        'name'=> 'Guaxinim real',
        'descricao'=> 'É um guaxinim 100% real, ele come e dorme engual um guaxinim real, quase uma criança só q sem as parte ruim',
        'valor'=> 1479.99,
        'foto'=> 'https://img.freepik.com/fotos-premium/guaxinim-de-terno-ia-generativa_343887-304.jpg',
        'user_id'=> 1,
    ],
    
]

);
    }
}
