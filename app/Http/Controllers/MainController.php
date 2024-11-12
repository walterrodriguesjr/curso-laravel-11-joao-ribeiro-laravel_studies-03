<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        echo "index";
    }

    public function about()
    {
        echo "about";
    }

    public function mostrarValor()
    {
        echo "testando";
    }

    public function mostrarValores($valor1, $valor2)
    {
        echo "Valor enviado pela route: $valor1 e $valor2";
    }
}
