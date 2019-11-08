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
Route::get('/alldoctor','DoctorController@alldoctor')->name('alldoctor');
//Schedules

Route::get('/schedule','ScheduleController@index')->name('schedule');
Route::post('/schedule/create','ScheduleController@create')->name('schedule_create');




//Birthreport
Route::get('/Birthreport','BirthreportController@index')->name('Birthreport');
Route::post('/Birthreport/create','BirthreportController@create')->name('Birthreport_create');
Route::get('/allBirthreport','BirthreportController@allbirthreport')->name('allbirthreport');






//Deathreport
Route::get('/Deathreport','DeathreportController@index')->name('Deathreport');
Route::post('/Deathreport/create','DeathreportController@create')->name('Deathreport_create');
Route::get('/allDeathreports','DeathreportController@alldeathreport')->name('alldeathreport');



//Operation Report

Route::get('/Operation','OperationreportController@index')->name('Operationreport');
Route::post('/Operation/create','OperationreportController@create')->name('Operationreport_create');
Route::get('/alloperationreport','OperationreportController@alloperationreport')->name('alloperationreport');
//investigationReport

Route::get('/Investigation','InvestigationController@index')->name('Investigation');
Route::post('/Investigation/create','InvestigationController@create')->name('Investigation_create');
Route::get('/allinvestigation','InvestigationController@allinvestigation')->name('allinvestigation');
//addmedicine

Route::get('/addmedicine','MedicineController@index')->name('addmedicine');
Route::post('/addmedicine/create','MedicineController@create')->name('addmedicine_create');
Route::get('/allmedicine','MedicineController@allmedicine')->name('allmedicine');
//
Route::get('/Department','DepartmentController@index')->name('Department');
Route::post('/Department/create','DepartmentController@create')->name('Department_create');
Route::get('/alldepartment','DepartmentController@alldepartment')->name('alldepartment');
//addnotice

Route::get('/Notice','NoticeController@index')->name('Notice');
Route::post('/Notice/create','NoticeController@create')->name('Notice_create');




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home');
