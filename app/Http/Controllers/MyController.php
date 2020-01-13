<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function showPagOne(){
        return view('pag1');
    }

    public function showPagTwo() {
        return view('pag2');
    }
}
