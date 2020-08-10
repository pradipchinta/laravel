<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class thisController extends Controller
{
    public function add()
    {
        // return view('index');
        $services =\App\Service::all();
        return view('nav',compact('services'));
    }
    public function store()
    {
        $data = request()->validate(
            [
                'name' =>'required'
            ]
        );
        $services = new \App\Service();

         $services->name=request('name');

         $services->save();

        return redirect()->back();
    }
  public function p()
    {
        return view('project.ss');
    }

}
