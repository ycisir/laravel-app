<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController; // make sure to import first
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\UnderConstruction;


// Route::get('/', function(){
//     return view('home');
// })->name('home');


Route::get('/', [StudentController::class, 'index'])->name('home');
// Route::get('cs/students', [StudentController::class, 'index'])->name('home');

Route::get('dashboard', function(){
    return view('dashboard');
})->name('dashboard')->middleware(UnderConstruction::class.':guest');


// Route middleware with addition args
Route::get('stock', function(){
    return view('stock');
})->name('stock')->middleware(UnderConstruction::class.':guest');

Route::get('report', [ReportController::class, 'show'])->name('report')->middleware(UnderConstruction::class.':guest');

Route::get('register', [RegistrationController::class, 'new'])->name('new');
Route::post('register', [RegistrationController::class, 'register'])->name('register');

Route::view('olddata', 'olddata')->name('old');



// Groups middleware
// Route::get('stock', function(){
//     return view('stock');
// })->name('stock')->middleware(['construction']);

// Route::get('report', [ReportController::class, 'show'])->name('report')->middleware(['construction']);


// Groups middleware same as above
// Route::middleware(['construction'])->group(function() {
//     Route::get('stock', function(){
//         return view('stock');
//     })->name('stock')->middleware(['construction']);

//     Route::get('report', [ReportController::class, 'show'])->name('report')->middleware(['construction']);

// });




// Parameterized route with regex
// Route::get('product/{productName}', function($productName) {
//     return view('product', ['name' => $productName]);
// })->where('productName', '[A-Za-z]+');


// Multiple parameterized route with regex
// Route::get('manager/{id}/{name}', function($id, $name) {
//     return view('manager', ['id' => $id, 'name' => $name]);
// })->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);


// Parameterized route with regex using helper method
// Route::get('employee/{id}/{name}', function($id, $name) {
//     return view('employee', ['id' => $id, 'name' => $name]);
// })->whereNumber('id')->whereAlpha('name');


// Route redirect
// Route::redirect('login-success', 'dashboard');


// Route redirect with status code
// Route::redirect('signup-success', 'login', 301);
// Route::view('login', 'login');


// Route permanentRedirect with status code
// Route::redirect('logout-success', '/');


// Route fallbac
Route::fallback(function() {
    return view('404');
});