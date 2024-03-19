<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function form (){
        return view('Admin.Customer.form');
    }

    public function store(Request $request){
       $validate=Validator::make($request->all(),[
        'name'=> 'required',
        'email'=> 'required|email',
        'address'=> 'required',
        'country'=> 'required',
        'number'=> 'required|regex:/^01[3-9][0-9]{8}$/|numeric',

       ]);

    if ($validate->fails()) {
        notify()->error($validate->getMessageBag());
        return redirect()->back();
    }
    // echo "<pre>";
    //     print_r($request->all());
}

}
