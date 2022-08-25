<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Midia extends Model
{
    use HasFactory;

    protected $table = 'midias';

    protected $connection = 'mysql';

    protected $fillable = [
        'imagem', 'video', 'pdf'
    ];

    public function patente(){
        return $this->belongsTo('App\Models\patente');
    }

}
