<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController; // make sure to import first
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;

Route::get('/', function() {
    return view('welcome', ['name' => 'Jack']);
});

Route::get('about', [AboutController::class, 'show']);
// Route::get('about/{name}', [AboutController::class, 'show']);

Route::get('admin/profile', [AdminProfileController::class, 'show_profile']);


Route::get('contact', [ContactController::class, 'show']);

Route::get('dashboard', DashboardController::class);

// when only pass single piece of data use with
// Route::get('contact', function() {
//     return view('contact')->with('email', 'harry@example.com');
// });


// If your route only needs to return a view, you may use the Route::view method
// Route::view('about', 'about');
// Route::view('admin/profile', 'admin.profile');
// Route::view('contact', 'contact', ['email' => 'harry@example.com']);
// Route::view('contact', 'contact', ['name' => 'Harry Potter', 'email' => 'harry@example.com']);




// Parameterized route
Route::get('user/{id}', function($id) {
    return view('user', ["id" => $id]);
});


// Multiple parameterized route
Route::get('post/{postId}/comment/{commentId}', function($postId, $commentId) {
    return view('post', ['postId' => $postId, 'commentId' => $commentId]);
});


// Optional paramaterized route
// also set default like $name = 'jack' instead of null
Route::get('student/{name?}', function($name = null) {
    return view('student', ['name' => $name]);
});


// Parameterized route with regex
Route::get('product/{productName}', function($productName) {
    return view('product', ['name' => $productName]);
})->where('productName', '[A-Za-z]+');


// Multiple parameterized route with regex
Route::get('manager/{id}/{name}', function($id, $name) {
    return view('manager', ['id' => $id, 'name' => $name]);
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);


// Parameterized route with regex using helper method
Route::get('employee/{id}/{name}', function($id, $name) {
    return view('employee', ['id' => $id, 'name' => $name]);
})->whereNumber('id')->whereAlpha('name');


// Route redirect
Route::redirect('login-success', 'dashboard');


// Route redirect with status code
Route::redirect('signup-success', 'login', 301);
Route::view('login', 'login');


// Route permanentRedirect with status code
Route::redirect('logout-success', '/');


// Route fallback
Route::fallback(function() {
    return view('404');
});