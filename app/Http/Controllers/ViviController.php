<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ViviController extends Controller
{
    public function index(){
        return view('vivi');
    }
}
