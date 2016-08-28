<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function home()
    {
        $names = [
            'Neo',
            'Morpheus',
            'Tank',
            'Dozer',
            'Smith',
            'Trinity',
            'Pifia'
        ];
        \Debugbar::error($names);
        return view('home.index');
    }
}
