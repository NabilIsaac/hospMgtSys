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


Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::resource('patients', 'PatientController');
Route::resource('nurses', 'NurseController');
Route::resource('drugs', 'DrugController');
Route::resource('appointments', 'AppointmentController');
Route::resource('prescriptions', 'PrescriptionController');
Route::resource('receptionists', 'ReceptionistController');
Route::resource('doctors', 'DoctorController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
