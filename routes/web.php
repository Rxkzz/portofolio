<?php

use App\Http\Controllers\LayoutControl;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LayoutControl::class, 'home']);
Route::get('/home', [LayoutControl::class, 'home'])->name("home");
// Route::get('about', LayoutControl::class)->name('tentang');
Route::get('/about', [LayoutControl::class, 'about'])->name("about");
Route::get('/contact', [LayoutControl::class, 'contact'])->name("contact");
Route::get('/project', [LayoutControl::class, 'project'])->name("project");