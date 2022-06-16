<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;




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

Route::get('/financial_investment_services', function () {
    return view('financial-investment-services');
});

Route::get('/supply-management-services', function () {
    return view('supply-management-services');
});

Route::get('/expert-advice', function () {
    return view('expert-advice');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::post('/user_login', [UserController::class, 'login']);

Route::view('/user_dashboard', 'user_dashboard');

Route::get('/personal_form', [FormController::class, 'personal_form_show']);

Route::get('/company_form', [FormController::class, 'company_form_show']);

Route::get('/premiun_retainer', [FormController::class, 'premiun_retainer_show']);

Route::get('/inspection', [FormController::class, 'inspection_show']);

Route::get('/spv', [FormController::class, 'spv_show']);

Route::get('/closing', [FormController::class, 'closing_show']);

Route::get('/collateral', [FormController::class, 'collateral_show']);

Route::get('/bank_details', [FormController::class, 'bank_details_show']);

Route::get('/plan_upgarde', [FormController::class, 'plan_upgarde_show']);

Route::post('/add_premiun_retainer', [FormController::class, 'premiun_retainer_add']);

Route::post('/add_inspection', [FormController::class, 'inspection_add']);

Route::post('/add_spv', [FormController::class, 'spv_add']);

Route::post('/add_collateral', [FormController::class, 'collateral_add']);

Route::post('/add_closing', [FormController::class, 'closing_add']);

Route::post('/add_newsletter', [FormController::class, 'newsletter_add']);

Route::post('/user_signup', [UserController::class, 'user_signup']);









