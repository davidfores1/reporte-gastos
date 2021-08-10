<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
public function index(Request $request){

    return view("welcome",[
        'title' => $request->query('title', 'no hay nada')
    ]);
}

}
