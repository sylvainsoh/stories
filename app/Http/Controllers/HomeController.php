<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController
{
    function home(): view
    {
        return view('welcome');
    }
}
