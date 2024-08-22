<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory;

    protected $table = 'anuncios';

    protected $fillable = [

        'id',
        'titulo',
        'slug',
        'preco',
        'negociavel',
        'descricao',
        'contato',
        'views',
        'user_id',
        'estado_id',
        'categoria_id',

    ];

    public function anuncioFoto(){

        return $this->hasMany(AnuncioImagem::class, 'anuncio_id');
    }

    public function usuario(){

        return $this->belongsTo(User::class, 'user_id');
    }

    public function estado(){

        return $this->belongsTo(Estado::class, 'estado_id');
    }

    public function categoria(){

        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
