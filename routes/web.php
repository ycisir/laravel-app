<?php

use Illuminate\Support\Facades\Route;


// Route returning string
Route::get('about', function() {
    return 'Learning Laravel';
});


// Parameterized route
Route::get('user/{userId}', function($userId) {
    return $userId;
});


// Multiple parameterized route
Route::get('post/{postId}/comment/{commentId}', function($postId, $commentId) {
    return "Post ID: " . $postId . " Comment ID: " . $commentId;
});


// Optional paramaterized route
Route::get('student/{name?}', function($name = null) {
    return "Hey, " . $name;
});


// Parameterized route with regex
Route::get('product/{productName}', function($productName) {
    return "Product: " . $productName;
})->where('productName', '[A-Za-z]+');


// Multiple parameterized route with regex
Route::get('manager/{id}/{name}', function($id, $name) {
    return "Manager ID: " . $id . " Manager name: " . $name;
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);


// Parameterized route with regex using helper method
Route::get('employee/{id}/{name}', function($id, $name) {
    return "Manager ID: " . $id . " Manager name: " . $name;
})->whereNumber('id')->whereAlpha('name');


// Route redirect
Route::redirect('login-success', 'dashboard');


// Route redirect with status code
Route::redirect('signup-success', 'login', 301);


// Route permanentRedirect with status code
Route::redirect('logout-success', 'home');


// Route fallback
Route::fallback(function() {
    return 'Page not found!';
});