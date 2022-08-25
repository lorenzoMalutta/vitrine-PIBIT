<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AreaConhecimento;

class AreaConhecimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new AreaConhecimento();
        $a->denominacao = 'Ciências Exatas e da Terra';
        $a->save();
       
        $a = new AreaConhecimento();
        $a->denominacao = 'Química';
        $a->save();
       
        $a = new AreaConhecimento();
        $a->denominacao = 'GeoCiências';
        $a->save();
       
        $a = new AreaConhecimento();
        $a->denominacao = 'Ciências Biológicas';
        $a->save();
       
        $a = new AreaConhecimento();
        $a->denominacao = 'Engenharias';
        $a->save();
       
        $a = new AreaConhecimento();
        $a->denominacao = 'Ciências da Saúde';
        $a->save();
       
        $a = new AreaConhecimento();
        $a->denominacao = 'Ciências Agrárias';
        $a->save();
       
        $a = new AreaConhecimento();
        $a->denominacao = 'Ciências Sociais';
        $a->save();
    }
}
