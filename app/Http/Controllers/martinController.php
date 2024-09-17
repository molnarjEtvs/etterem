<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class martinController extends Controller
{
  public function index(){
      return view('martin');
  }
}
