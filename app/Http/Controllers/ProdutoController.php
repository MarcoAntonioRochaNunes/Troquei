<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ProdutoController extends Controller
{
    public function index($id)
    {

        $produto = $this->produto($id);
        $produtosRel = $this->produtosRelacionados($id);

        return Inertia::render('Produto', [
            'produto' => $produto,
            'user' => Auth::user(),
        ]);
    }

    public function produto($id){

        $produto = Anuncio::where('id', $id)->with('anuncioFoto', 'categoria', 'usuario.foto', 'usuario.estado' )->first();

        // dd($produto);
        return $produto;
    }

    public function produtosRelacionados($id){

        $item = Anuncio::where('id', $id)->first()->only('categoria_id');

        $produtos = Anuncio::where('categoria_id', $item['categoria_id'])->with('anuncioFoto', 'categoria', 'usuario.foto', 'usuario.estado' )->get();

        // dd($produtos);
        return $produtos;
    }


}
