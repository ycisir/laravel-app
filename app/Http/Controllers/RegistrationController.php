<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rules\Uppercase;

use Illuminate\Support\Facades\Validator;
use Closure;

use App\Http\Requests\RegistrationRequest;

class RegistrationController
{
    // public function register(Request $request)
    // {
        // dd($request);
        // print_r($request->all());

        // print_r($request->input());
        // print_r($request->input('email'));
        // print_r($request->email);

        // check data is present or not
        // if($request->has('email')) {
        //     print_r($request->email);
        // }


        // check multiple data present or not
        // if($request->has(['name', 'email', 'password'])) {
        //     print_r($request->all());
        // }


        // true if any of given present
        // if($request->hasAny(['name', 'email', 'password'])) {
        //     print_r($request->all());
        // }


        // true if given params has value
        // if($request->filled('email')) {
        //     print_r($request->email);
        // }


        // true if given key is missing
        // if($request->missing('username')) {
        //     echo "username is missing";
        // }


        // also accept empty value
        // if($request->whenHas('email', function($input){
        //     print_r($input);
        //     print_r('Data modified');
        // }));



        // if($request->whenFilled('email', function($input){
        //     print_r($input);
        //     print_r('Data modified');
        // }));


        // used to store data when user filled form but some input have validations and page got refresh then this will give us old data 
        // flash --- store current input in session so we get those data in next request
        // $request->flash();
        // print_r($request->old('name')); 
        // print_r($request->old('email')); 
        // print_r($request->old('password')); 


        // $request->flashOnly('email'); // Only given value
        // $request->flashOnly(['email', 'name']);
        // print_r($request->old('email'));




        // $request->flashExcept('password');
        // print_r($request->old('name')); 
        // print_r($request->old('email')); 
        // print_r($request->old('password'));


        // return redirect('olddata')->withInput();
        // return redirect()->route('old')->withInput();
        // return redirect()->route('old')->withInput($request->except('password'));
        // return redirect()->route('register')->withInput($request->except('password'));


        // $input = $request->input();
        // $input = $request->except('_token');

        // Single rule
        // $validate = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);



        // Multiple rule
        // $validated = $request->validate([
            // 'name' => 'required|min:10|string| new Uppercase', // also written in ['required', 'min:20']

            // custom valudation rules 
            // two types
            // 1. Rule Object
            // 2. Closure

            // 1. Using Rule Object
            // 'name' => ['required', 'min:10', 'string', new Uppercase],


            // 2. Using Closure (use this if want to use for one attribute)
        //     'email' => [
        //         'required',
        //         'email',
        //         function($attribute, $value, $fail) {
        //             if($value == 'admin@example.com') {
        //                 $fail("$attribute address is invalid!");
        //             }
        //         }
        //     ],

        //     'password' => 'required|min:6',
        // ]);

        // dd($validated);
        // print_r('form validated');
        // $input = $request->except('_token');
        // return view('register', ['data'=>$validated]);
    // }



    // form validation using form request
    public function register(RegistrationRequest $request) {
        $request->validated();
        $input = $request->except('_token');
        return view('register', ['data'=>$input]);
    }


    public function new() {
        return view('register');
    }
}
