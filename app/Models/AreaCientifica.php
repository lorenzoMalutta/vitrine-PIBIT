<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaCientifica extends Model
{
    use HasFactory;

    protected $table = 'area_cientificas';

    protected $connection = 'mysql';

    protected $fillable = [
        'denominacao',
    ];
}
