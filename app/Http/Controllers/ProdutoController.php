<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ProdutoController extends Controller
{
    public function index()
    {
        return Inertia::render('Produto', [
            'user' => Auth::user(),
        ]);
    }
    public function index2()
    {
        return Inertia::render('ProdutoDois', [
            'user' => Auth::user(),
        ]);
    }
}
