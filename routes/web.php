<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QrCodeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});

Auth::routes();



Route::resource('homepage', \App\Http\Controllers\ProjectcttController::class);
Route::resource('about', \App\Http\Controllers\AboutController::class);

Route::resource('contact', \App\Http\Controllers\ContactController::class);

Route::resource('region', \App\Http\Controllers\RegionController::class)
    ->middleware(['auth', 'verified']);
Route::resource('cities', \App\Http\Controllers\CityController::class)
    ->middleware(['auth', 'verified']);
Route::resource('buildings', \App\Http\Controllers\BuildingController::class)
    ->middleware(['auth', 'verified']);
Route::resource('desk', \App\Http\Controllers\DeskController::class)
    ->middleware(['auth', 'verified']);
Route::resource('reservations', \App\Http\Controllers\ReservationController::class);

Route::resource('clients', \App\Http\Controllers\ClientController::class)
    ->middleware(['auth', 'verified']);
Route::resource('clientsdesk', \App\Http\Controllers\ClientsDesksController::class)
    ->middleware(['auth', 'verified']);

Route::middleware(['user-role:admin'])->group(function()
{
    Route::get("/admin/home",[\App\Http\Controllers\ProjectcttController::class, 'adminHome'])->name("admin.home");

});

Route::middleware(['user-role:user'])->group(function()
{

    Route::get("homepage",[\App\Http\Controllers\ProjectcttController::class, 'index'])->name("user.home");
});

Route::get('/qrcode', [QRCodeController::class, 'generateQRCode']);
Route::resource('profile', \App\Http\Controllers\ProfileController::class);






