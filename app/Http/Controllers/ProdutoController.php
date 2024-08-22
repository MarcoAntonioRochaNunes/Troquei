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

        return Inertia::render('Produto', [
            'produto' => $produto,
            'user' => Auth::user(),
        ]);
    }

    public function produto($id){

        $produto = Anuncio::where('id', $id)->with('anuncioFoto', 'categoria', 'usuario')->first();

        // dd($produto);
        return $produto;
    }

}
