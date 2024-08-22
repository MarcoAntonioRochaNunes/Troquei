<?php

namespace App\Http\Controllers;


use App\Models\Anuncio;
use App\Models\Estado;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $estados = Estado::all();
        $produtos = $this->produtos();

        return Inertia::render('Home', [
            'estados' => $estados,
            'produtos' => $produtos,
            'user' => Auth::user(),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }

    public function produtos()
    {
        $data = Anuncio::with('anuncioFoto', 'estado')->get();


        return $data;
    }


}
