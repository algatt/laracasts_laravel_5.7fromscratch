<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        //session(['name'=>'John']);
        return(session('name'));
        return view('welcome', [
            'foo' => 'bar'
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
    
}
