<?php

//USER_Login
Route::get('/users','UserController@index')->name('index');


////Dashboardhome
Route::get('/dashboard','DashboardhomeController@index')->name('index');


//Patients
Route::get('/patient','PatientController@index')->name('patient');
Route::post('/patient/create','PatientController@create')->name('patient_create');
Route::get('/allpatient','PatientController@allpatient')->name('allpatient');
Route::get('/patientdetails','PatientController@patientdetails')->name('patientdetails');

//Doctor
Route::get('/doctor','DoctorController@index')->name('doctor');
Route::post('/doctor/create','DoctorController@create')->name('doctor_create');

//Birthreport
Route::get('/Birthreport','BirthreportController@index')->name('Birthreport');
//Deathreport
Route::get('/Deathreport','DeathreportController@index')->name('Deathreport');


//Operation Report

Route::get('/Operation','OperationreportController@index')->name('Operationreport');

//investigationReport

Route::get('/Investigation','InvestigationController@index')->name('Investigation');

//addmedicine

Route::get('/addmedicine','MedicineController@index')->name('addmedicine');

//
Route::get('/Department','DepartmentController@index')->name('Department');

//addnotice

Route::get('/Notice','NoticeController@index')->name('Notice');



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home');
