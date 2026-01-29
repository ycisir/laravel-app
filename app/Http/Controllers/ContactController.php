<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show() 
    {
        $email = 'harry@example.com';
        $name = 'harry';
        $users = ['root', 'admin', 'user', 'guest'];
        $userMode = 'guest';
        return view('contact', ['email' => $email, 'name' => $name, 'users' => $users, 'userMode' => $userMode]);
    }
}
