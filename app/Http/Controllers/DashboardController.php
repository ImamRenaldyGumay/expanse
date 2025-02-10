<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Dashboard',
            'content' => 'This is the dashboard page'
        ];
        return view('dashboard')->with($data);
    }
}
