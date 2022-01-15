<?php

use Illuminate\Support\Facades\Route;

// import Controllers
use App\Http\Controllers\Web;

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

// Public Routs for starting pages
Route::get('/', [Web::class, 'indexPage']);
Route::get('/forget-password', [Web::class, 'forgetPasswordPage']);
Route::get('/about', [Web::class, 'aboutPage']);
Route::post('/user', [Web::class, 'login']);
