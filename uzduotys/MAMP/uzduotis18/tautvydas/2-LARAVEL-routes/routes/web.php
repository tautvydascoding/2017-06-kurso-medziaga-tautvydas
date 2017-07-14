<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home'); // uzkrauna visa "home.php" faila
});

Route::get('/gallery', function () {
    echo " <h2>Mano galerija bus </h2>";  // taip nedaryti
});
Route::get('/contacts', function () {
      return view('contact');  // uzkrauna visa "home.php" faila
});


// ? - reiskia kad
Route::get('/doctor/{fraze?}', function ($fraze =  "neivestas") {
     echo "<h2>ivesta fraze: $fraze</h2>";
})->where('fraze', '[A-Za-z]+');

Route::get('/{neradome}', function ($page) {
      return view('404-page');  // uzkrauna visa "home.php" faila
});






//
