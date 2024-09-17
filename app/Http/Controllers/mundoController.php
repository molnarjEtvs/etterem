<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mundoController extends Controller
{
    public function index(){
        return view('mundo');
    }
}
