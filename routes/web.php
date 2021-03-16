<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\IndexController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\Auth\VerificationController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\MemberController;

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


/*     FONT-END    */ 

Route::get('/', [IndexController::class, 'index']);


/*     BACK-END    */ 

Route::prefix('/admin_panel')->group(function(){

    // PAINEL ADMINISTRATIVO
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    // TELA DE LOGIN
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'auth']);

    // TELA DE REGISTRO
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);

    // LOGOUT

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    // CRUD USUÁRIOS

    Route::resource('members', 'Admin\MemberController');

    //Route::get('password_reset', [ForgotPasswordController::class, 'index'])->name('password_reset');
});