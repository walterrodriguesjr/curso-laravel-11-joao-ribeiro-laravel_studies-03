<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function cleanupperCaseString($string)
    {
        return strtoupper(trim($string));
    }
}
