<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navcontroller extends Controller
{
  public function add()
  {
    return view('index');
  }

  public function about()
  {
    return view('nav');
  }
  public function footer()
  {
    return view('footer');
  }

}
