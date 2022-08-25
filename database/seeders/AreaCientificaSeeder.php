<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AreaCientifica;

class AreaCientificaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new AreaCientifica();
        $a->denominacao = 'Administração';
        $a->save();
       
        $a = new AreaCientifica();
        $a->denominacao = 'Agronomia';
        $a->save();
       
        $a = new AreaCientifica();
        $a->denominacao = 'Bioquímica';
        $a->save();
       
        $a = new AreaCientifica();
        $a->denominacao = 'Demografia';
        $a->save();
       
        $a = new AreaCientifica();
        $a->denominacao = 'Economia';
        $a->save();
       
        $a = new AreaCientifica();
        $a->denominacao = 'Engenharia Civil';
        $a->save();
       
        $a = new AreaCientifica();
        $a->denominacao = 'Farmacologia';
        $a->save();
       
        $a = new AreaCientifica();
        $a->denominacao = 'Nutrição';
        $a->save();
    }
}
