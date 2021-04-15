<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Mail\ContactanosMailable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', HomeController::class)->name('home');
Route::resource('Productos', ProductoController::class)->names('productos')->parameters(['Productos'=>'producto']);
//los parametros y nombres se ocupan para que funcione la ruta, de otra manera no funciona y manda un Route not defined y los parametros un missing parameter
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');