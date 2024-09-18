<?php

namespace App\Http\Controllers;


use App\Models\Anuncio;
use App\Models\Categoria;
use App\Models\Estado;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $estados = Estado::all();
        $produtos = $this->produtos();
        $categorias = $this->Categorias();

        return Inertia::render('Home', [
            'estados' => $estados,
            'produtos' => $produtos,
            'categorias' => $categorias,
            'user' => Auth::user(),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }

    public function produtos()
    {
        $data = Anuncio::with('anuncioFoto', 'estado', 'usuario', 'usuario.foto', 'usuario.estado')
        ->orderBy('created_at', 'asc')
        ->orderBy('views', 'desc')
        ->limit(8)
        ->get();

        return $data;
    }

    public function produtosCategoria(Request $request)
    {
        $data = Anuncio::with('anuncioFoto', 'estado', 'usuario', 'usuario.foto', 'usuario.estado')->where('categoria_id')->get();
        dd($data);
        return $data;
    }

    public function Categorias()
    {
        $data = Categoria::inRandomOrder()->take(4)->get();
        return $data;
    }

}
