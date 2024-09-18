<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deszertController extends Controller
{
    public function index(){
        return view('deszert');
    }
}
