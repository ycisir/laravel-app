<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    function show_profile() {
        return view('admin.profile');
    }
}
