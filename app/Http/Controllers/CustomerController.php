<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer; // Import the customers class

class CustomerController extends Controller
{
    public function index()
    {
        return view('insta');
    }

    public function instareset()
    {
        $data = customer::all();
        //dd($data);
        return view('instaview', compact('data'));
    }

    public function inputdata(Request $request)
    {

        //dd($request->all());
        Customer::create($request->all());
        return redirect()->route('succsess');

    }

    public function succsess()
    {
        return view('succsess');
    }

}
