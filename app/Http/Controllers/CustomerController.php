<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer=[1,2,3,4,5];
        return view('customer.index')
        ->with(['customer'=>$customer]);
    }
    public function show($id)
    {
        return view('customer.show')
        ->with(['id'=>$id]);
    }
    public function create()
    {
        return view('customer.create');
    }
    public function store()
    {
        return 'store()';
    }
}
