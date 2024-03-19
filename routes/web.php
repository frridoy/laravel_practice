<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\RegistrationController;
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

// Route::get('/{name?}', function ($name = null) {
//     $data = compact('name');
//     return view('welcome')->with( $data);
// });

Route::get('/',[RegistrationController::class,'registration'])->name('user.registration');
Route::post('/registration/store',[RegistrationController::class,'store'])->name('registration.store');


//customer

Route::get('/customer/form', [CustomerController::class,'form'])->name('customer.form');
Route::post('/customer/form/store', [CustomerController::class,'store'])->name('customer_form.store');
