<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employees;
use App\Models\Employee;

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
// Grouped Routes
Route::middleware(['api'])->group(function () {
   // Routes that require authentication with 'auth'

   // Route with Parameters
   // You may define as many route parameters as required by your route:
   Route::get('delete/{id}', [Employees::class, 'delete']);
   Route::get('edit/{id}', [Employees::class, 'edit']);
   Route::post('update/{id}', [Employees::class, 'update']);
});



 // common controller  group route 

// Route::controller(Employees::class)->group(function () {
//     Route::get('/insert', 'insert');
//     Route::post('/store_data', 'store_data');
// });


//  prefix in route
// Route::prefix('admin')->group(function () {
//    Route::get('insert', [Employees::class, 'insert']);
//    //http://127.0.0.1:8000/admin/insert
//    Route::get('/', [Employees::class, 'view']);
// });


// Route Model Binding
// Route::get('/{id}', function (Employee $user) {
//    return $user;
// });




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
