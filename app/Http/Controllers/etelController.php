<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class etelController extends Controller
{
    public function index(){
        return view('etelek');
    }
}
