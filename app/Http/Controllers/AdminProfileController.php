<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    function show_profile() {
        $name = 'Jack Sparrow';
        return view('admin.profile', ['name'=>$name]);
    }
}
