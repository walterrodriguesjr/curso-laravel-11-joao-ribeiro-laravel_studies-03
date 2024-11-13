<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function teste($value)
    {
        echo "A string final é: " . $this->cleanupperCaseString($value);
    }
}
