<?php

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

Route::get('/dashboard', 'DashboardController@index');

Route::resource('/expenseReports', 'ExpenseReportController');

Route::get('/expenseReports/{id}/confirmDelete', 'ExpenseReportController@confirmDelete');

Route::get('/expenseReports/{expense_report}/expenses/create', 'ExpenseController@create');
Route::post('/expenseReports/{expense_report}/expenses', 'ExpenseController@store');
Route::get('/expenseReports/{expense_report}/confirmSendEmail', 'ExpenseReportController@confirmSendEmail');
Route::post('/expenseReports/{expense_report}/sendEmail', 'ExpenseReportController@sendEmail');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
