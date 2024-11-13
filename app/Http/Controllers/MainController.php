<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        echo "<p>Index</p>";
    }

    public function about()
    {
        echo "<p>About</p>";
    }

    public function contact()
    {
        echo "<p>Contact</p>";
    }
}
