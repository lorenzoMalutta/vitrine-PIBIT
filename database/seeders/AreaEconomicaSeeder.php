<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AreaEconomica;

class AreaEconomicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new AreaEconomica();
        $a->denominacao = 'AGRICULTURA';
        $a->save();
       
        $a = new AreaEconomica();
        $a->denominacao = 'PECUÁRIA';
        $a->save();
       
        $a = new AreaEconomica();
        $a->denominacao = 'PESCA E AQÜICULTURA';
        $a->save();
       
        $a = new AreaEconomica();
        $a->denominacao = 'ELETRICIDADE E GÁS';
        $a->save();
       
        $a = new AreaEconomica();
        $a->denominacao = 'ATIVIDADES DE GESTÃO DE RESÍDUOS E DESCONTAMINAÇÃO';
        $a->save();
       
        $a = new AreaEconomica();
        $a->denominacao = 'COMÉRCIO';
        $a->save();
       
        $a = new AreaEconomica();
        $a->denominacao = 'TRANSPORTE';
        $a->save();
       
        $a = new AreaEconomica();
        $a->denominacao = 'INFORMAÇÃO E COMUNICAÇÃO';
        $a->save();


    }
}
