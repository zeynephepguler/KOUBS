<?php

use Illuminate\Support\Facades\Route;
use App\Resource\View;
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

Route::View("/","layouts.anasayfa");
Route::get('/', function()
{
  return view('layouts.anasayfa');
})->name('anasayfa');
Route::View("/Admin","layouts.admin");
Route::View("/Adminanasayfa","layouts.adminanasayfa");
