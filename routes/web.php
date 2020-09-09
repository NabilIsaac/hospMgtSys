<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix'=>'admin', 'middleware'=>'auth', 'namespace'=>'admin'], function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('/patients', 'PatientController');
    Route::resource('/nurses', 'NurseController');
    Route::resource('/drugs', 'DrugController');
    Route::resource('/appointments', 'AppointmentController');
    Route::resource('/prescriptions', 'PrescriptionController');
    Route::resource('/receptionists', 'ReceptionistController');
    Route::resource('/doctors', 'DoctorController');
    Route::resource('/examinations', 'ExaminationController');
    Route::get('/examinations/{examination}', 'ExaminationController@show')->name('exam.show');
    Route::resource('/rooms', 'RoomController');
    Route::resource('/wards', 'WardController');
    Route::resource('/users', 'UserController');
    Route::resource('/roles', 'RoleController');
    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes();


