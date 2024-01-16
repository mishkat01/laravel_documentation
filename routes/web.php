<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Basic Routing
Route::get('/greeting', function () {
    return 'hi';
});


//crud
Route::get('/',[App\Http\Controllers\Employees::class,'view']);
Route::get('/insert',[App\Http\Controllers\Employees::class,'insert'])->name('insert');
Route::post('store_data',[App\Http\Controllers\Employees::class,'store_data']);
// Route with Parameters
// You may define as many route parameters as required by your route:
Route::get('delete/{id}',[App\Http\Controllers\Employees::class,'delete']);
Route::get('edit/{id}',[App\Http\Controllers\Employees::class,'edit']);
Route::get('update/{id}',[App\Http\Controllers\Employees::class,'update']);



//available router method 

// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);
// Route::match(['get', 'post'], '/', function () {
   // ...
// });
// Route::any('/', function () {
   // ...
// });
// Route::redirect('/here', '/there');
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);


// The Route List
// php artisan route:list
