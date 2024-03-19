<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function registration()
    {
        return view('Frontend.Pages.registration');
    }
    public function store(Request $request)
    {

        //to check


        //another way

        // dd($request);

        //     $request->validate([
        //  'name'=>'required',
        //  'email'=>'required|email',
        //  'password'=>'required|confirmed',
        //  'password_confirmation'=>'required'

        //         ]);

        $validator=Validator::make($request->all(),[
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required|confirmed',
            'password_confirmation'=> 'required',
        ]);

            if($validator->fails())
            {
                notify()->error($validator->getMessageBag());
                return redirect()->back();

            }

        // echo "<pre>";
        // print_r($request->all());



    }
}
