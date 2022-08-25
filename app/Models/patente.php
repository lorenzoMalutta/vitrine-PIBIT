<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patente extends Model
{
    use HasFactory;

    protected $table = 'patentes';
    
    protected $connection = 'mysql';

    
    protected $fillable = [
        'nomeTecnologia', 'setorEconomico', 'area', 'categoria','sinopsePatente',
        'possuiPatente', 'tipoPatente', 'pct', 
        'inpi', 'resumo', 'solucaoProblema',  'vantagem', 'aplicacao',
        'trl', 'telefone', 'email', 'link', 'criacao', 'criadores',
    ];

    public function midia(){
        return $this->hasOne('App\Models\Midia');
    }
}
