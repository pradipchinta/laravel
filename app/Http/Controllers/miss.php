<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class miss extends Controller
{
    //
    public function new()
    {
        $date="this is your file file sdfhjskdfhjkdfhjkf";
        return view('newfle',compact('date'));
    }
}
