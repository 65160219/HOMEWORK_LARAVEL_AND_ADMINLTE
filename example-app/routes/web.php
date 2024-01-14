<?php
use App\Http\Controllers\HW5_Controller;
use Illuminate\Http\Request;
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


/* HOMEWORK 5 Author : Miss Duangkamon Lueariyasap ID : 65160219 SEC : 1 */
Route::get('/my-form', [HW5_Controller::class, 'index']);
