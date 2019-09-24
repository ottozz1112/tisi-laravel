<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staticController extends Controller
{
    public function hello()
    {
// return 'hello world';
return view('statics.hello');
    }
    public function surname($surname='jeamjuankhaw')
    {
        return view('static.name')
        ->with(['surname'=>$surname]);
    }
}