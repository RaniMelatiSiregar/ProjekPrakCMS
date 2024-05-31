<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomesController;
use App\Http\Controllers\DashboardHomeController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DashboardContactController;


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

Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');


// Route::get('/curdprofile', function(){
//     return view('layouts.curdprofile');
// })->name('curdprofile');

Route::get('/curdcontact', function(){
    return view('curdcontact');
})->name('curdcontact');

Route::get('/profile', [ProfilesController::class, 'index'])->name('profile');
Route::get('/curdprofile', [DashboardProfileController::class, 'index']);
Route::get('/profile/{profiles:slug}', [ProfilesController::class, 'show']);

Route::get('/', [HomesController::class, 'index'])->name('home');
Route::get('/home', [HomesController::class, 'index'])->name('home');
Route::get('/curdhome', [DashboardHomeController::class, 'index']);
Route::get('/home/{homes:slug}', [HomesController::class, 'show']);

Route::get('/contact', [ContactsController::class, 'index'])->name('contact');
Route::get('/curdcontact', [DashboardContactController::class, 'index']);
Route::get('/contact/{contacts:slug}', [ContactsController::class, 'show']);

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::resource('/curdhome', DashboardHomeController::class);
Route::resource('/curdprofile', DashboardProfileController::class);
Route::resource('/curdcontact', DashboardContactController::class);
Route::resource('/dashboard/profiles', DashboardProfileController::class);
Route::resource('/dashboard/contacts', DashboardContactController::class);
Route::resource('/dashboard/homes', DashboardHomeController::class);

Route::get('/dashboardisi', function(){
    return view('dashboardisi');
})->name('dashboardisi');
