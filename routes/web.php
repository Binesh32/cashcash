<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');




// Route::get('/organization', function () {
//     return view('frontend.auth.organizationSignUp');
// });
// Route::get('/blogs', function () {
//     return view('frontend.home.blogs');
// });
// Route::get('/postlist', function () {
//     return view('frontend.admin.inboxlist');
// });
// Route::get('/adminProfile', function () {
//     return view('frontend.admin.adminProfile');
// });
