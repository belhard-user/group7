<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use App\Http\Requests;



class TestController extends Controller
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

        return view('test.masterpage', compact('names'));
    }






    public function index()
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

        $names = array_reverse($names);

        return view('test.masterpage', compact('names'));
        // return view('test.masterpage', ['names' => $names]);
        // return view('test.masterpage')->withNames($names);
        // return view('test.masterpage')->with('names', $names);
        // return action('TestController@test', ['name' => 'Neo', 'age' => 23, 'xxx' => 'xxx']);
        // return '<a href="'.route('xz').'">xz route</a>';
    }

    public function test($name, $age)
    {

    }
}
