<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnuncioImagem extends Model
{
    use HasFactory;

    protected $table = 'anuncios_imagens';

    protected $fillable = [
        'id',
        'url',
        'anuncio_id',
        'principal',
    ];

}
