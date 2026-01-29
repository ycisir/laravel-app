<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // controller return string
    // function show() {
    //     return 'Welcome to Laravel from About Controller class';
    // }

    // controller return string with parameters
    // function show($name) {
    //     return 'Hey, ' . $name . ' welcome to Laravel';
    // }



    // return view from controller class
    // function show() {
    //     return view('about');
    // }

    // return view from controller class with parameter
    // function show($name) {
    //     return view('about', ['name' => $name]);
    // }

    // pass data from controller to view
    function show() {
        $name = 'Jack Sparrow';
        return view('about', ['name' => $name]);
    }

    // multiple methods inside controller
    function contact() {
        $email = 'harry@example.com';
        return view('contact', ['email' => $email]);
    }
}
