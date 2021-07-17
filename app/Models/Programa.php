<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{

    protected $table = "programas";
    protected $fillable = [
        'nome_programa',
        'sinopse',
        'ano',
        'url_poster',
        'url_poster_maior',
        'tags'
    ];
    use HasFactory;
}
