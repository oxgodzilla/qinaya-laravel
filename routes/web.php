<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
//     return view('welcome');
// });

Route::redirect('/', '/iniciar');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/iniciar', [HomeController::class, 'iniciar'])->name('iniciar');
Route::get('/registrarse', [HomeController::class, 'registrarse'])->name('registrarse');
Route::get('/compu', [HomeController::class, 'compu'])->name('compu');
Route::get('/planes', [HomeController::class, 'planes'])->name('planes');
Route::get('/refire', [HomeController::class, 'refire_gana'])->name('refire.gana');
Route::get('/preguntas', [HomeController::class, 'preguntas_frecuentes'])->name('preguntas.frecuentes');
Route::get('/instituciones', [HomeController::class, 'instituciones'])->name('instituciones');
Route::get('/qinaya_school', [HomeController::class, 'qinaya_school'])->name('qinaya.school');
Route::get('/qinaya_3play', [HomeController::class, 'qinaya_3play'])->name('qinaya.3play');
Route::get('/quienes_somos', [HomeController::class, 'quienes_somos'])->name('quienes.somos');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/gratis', [HomeController::class, 'gratis'])->name('gratis');
