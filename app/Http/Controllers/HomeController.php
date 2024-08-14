<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $teste = "Ola, Teste.";

        return Inertia::render('Home', [
            'title' => $teste,
        ]);
    }



}
