<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function showPage(): View
    {
        $data = [
            'João' => [
                'Português',
                'Inglês'
            ],
            'Maria' => [
                'Português',
                'Espanhol'
            ],
            'Ana' => [
                'Português',
                'Inglês',
                'Francês'
            ]
        ];
        return view('home', ['pessoas_linguas' => $data]);
    }
}
