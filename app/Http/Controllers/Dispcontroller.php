<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dispcontroller extends Controller
{
    public function index()
    {
        $data=\App\Display::all();
        return view('project.display',compact('data'));
    }
    public function store()
    {

        $data=request()->validate([
            'name'=>'required|string'
        ]);
        \App\Display::create($data);

        return redirect()->back();
    }
}
