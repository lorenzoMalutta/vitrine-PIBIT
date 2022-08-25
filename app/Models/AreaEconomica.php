<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaEconomica extends Model
{
    use HasFactory;

    protected $table = 'area_economicas';

    protected $connection = 'mysql';

    protected $fillable = [
        'denominacao',
    ];
}
