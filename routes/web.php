<?php

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

Route::get('/', function () {
    return redirect()->route('login');
});
// +--------+----------+------------------------+------------------+
// | Domain | Method   | URI                    | Name             |
// +--------+----------+------------------------+------------------+
// |        | GET|HEAD | login                  | login            |
// |        |          |                        |                  |
// |        | POST     | login                  |                  |
// |        |          |                        |                  |
// |        | POST     | logout                 | logout           |
// |        | GET|HEAD | password/confirm       | password.confirm |
// |        |          |                        |                  |
// |        | POST     | password/confirm       |                  |
// |        |          |                        |                  |
// |        | POST     | password/email         | password.email   |
// |        | GET|HEAD | password/reset         | password.request |
// |        | POST     | password/reset         | password.update  |
// |        | GET|HEAD | password/reset/{token} | password.reset   |
// |        | GET|HEAD | register               | register         |
// |        |          |                        |                  |
// |        | POST     | register               |                  |
// |        |          |                        |                  |
// +--------+----------+------------------------+------------------+
// ------------------------------------------------------------------------+------------+
//  Action                                                                 | Middleware |
// ------------------------------------------------------------------------+------------+
//  App\Http\Controllers\Auth\LoginController@showLoginForm                | web        |
//                                                                         | guest      |
//  App\Http\Controllers\Auth\LoginController@login                        | web        |
//                                                                         | guest      |
//  App\Http\Controllers\Auth\LoginController@logout                       | web        |
//  App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm    | web        |
//                                                                         | auth       |
//  App\Http\Controllers\Auth\ConfirmPasswordController@confirm            | web        |
//                                                                         | auth       |
//  App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web        |
//  App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web        |
//  App\Http\Controllers\Auth\ResetPasswordController@reset                | web        |
//  App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web        |
//  App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web        |
//                                                                         | guest      |
//  App\Http\Controllers\Auth\RegisterController@register                  | web        |
//                                                                         | guest      |
// ------------------------------------------------------------------------+------------+



Route::get('login',[App\Http\Controllers\MasterController    ::class,'getLogin'])->name('login');
Route::POST('login',[App\Http\Controllers\MasterController   ::class,'loginAction'])->name('login');
Route::get('register',[App\Http\Controllers\MasterController ::class, 'getRegister'])->name('register');
Route::POST('register',[App\Http\Controllers\MasterController::class, 'registerAction'])->name('register');
Route::get('logout',[App\Http\Controllers\MasterController   ::class, 'logout'])->name('logout');
// admin
Route::group(['middleware'=>'auth'],function(){

    Route::get('dashboard',[App\Http\Controllers\MasterController::class, 'dashboard'])->name('dashboard');

});