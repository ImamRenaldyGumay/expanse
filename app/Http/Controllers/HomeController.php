<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Home',
            'content' => 'This is the home page'
        ];
        return view('home')->with($data);
    }
}
