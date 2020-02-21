<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function test() {
        return view('test');
    }

    public function view(){
        $data = 'Qualquer dado';
        return view('test2')->with('stringx', $data);
    }

}
