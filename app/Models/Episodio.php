<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    protected $table = "episodios";
    protected $fillable = [
        'id_programa',
        'titulo',
        'url_video',
        'duracao',
        'data_lançamento'
    ];
    use HasFactory;
}
