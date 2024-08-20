<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    use HasFactory;

    protected $table = 'imagens';

    protected $fillable = [

        'id',
        'url',
        'principal',
        'user_id',

    ];

    public function usuario(){

        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
