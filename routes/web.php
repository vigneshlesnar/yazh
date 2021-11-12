<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/', 'App\Http\Controllers\TemplateController@index');

Route::get('/', function () {
  return view('home');
});

Route::get('/about', function () {
      return view('about');
   });

   Route::get('/services', function () {
    return view('services');
 });

 Route::get('/contact', function () {
  return view('contact');
});

Route::get('/layout', function () {
  return view('/layouts/layout2');
});


Route::get('/storage', function () {
  Artisan::call('storage:link');
});

Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');