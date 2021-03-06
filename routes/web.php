<?php






//USER_Login
Route::get('/users','UserController@abc')->name('abc');





//
Route::post('/save-user', 'TblUserController@index');
Route::post('/user-login', 'TblUserController@login_user');
Route::get('/user-profile', 'TblUserController@user_profile');
Route::get('/logout', 'TblUserController@user_logout');
Route::get('/edit-profile/{user_id}', 'TblUserController@edit_profile');
Route::get('/change-profile', 'TblUserController@user_change');
Route::post('/update-profile/{user_id}', 'TblUserController@update_profile');
Route::post('/change-designation/{user_id}', 'TblUserController@change_designation');

///bloodbank
//Route::get('/bloodbank/about','BloodbankController@about')->name('about');
//Route::get('/bloodbank/userregistration','TblUserController@index')->name('index');
//Route::post('/bloodbank/userregistration/create','TblUserController@create')->name('userregistration_create');

//publiccontroller

Route::get('/bloodbank', 'TblAdminController@home');
Route::get('/login-user', 'TblAdminController@login_user');
Route::get('/donar-view', 'TblAdminController@donar');
Route::get('/registration-form', 'TblAdminController@registration');
//Route::get('/about-us', 'TblAdminController@about');
Route::get('/community', 'TblAdminController@community_page');
Route::get('/details', 'TblAdminController@details_page');



//Post related routing-------------------------------
Route::post('/create-post/{user_id}', 'TblPostController@index');
Route::post('/post-create/{user_id}', 'TblPostController@post_create');

//Admin related routing-----------------------------------
Route::get('/login-admin', 'TblPostController@login_page');
Route::post('/admin-panel', 'TblPostController@login_admin');
Route::get('/admin-profile', 'TblPostController@admin_profile');
Route::get('/profile-edit/{admin_id}', 'TblPostController@edit_profile');
Route::get('/admin-change-profile', 'TblPostController@admin_change');
Route::post('/profile-update/{admin_id}', 'TblPostController@profile_update');
Route::get('/all-donar', 'TblPostController@all_donar');
Route::get('/all-user', 'TblPostController@all_user');
Route::get('/ban-donar/{user_id}', 'TblPostController@ban_donar');
Route::get('/ban-user/{user_id}', 'TblPostController@ban_user');
Route::get('/create-admin', 'TblPostController@admin_registration');
Route::post('/admin-save', 'TblPostController@save_admin');





////////////////////////


////Dashboardhome

////Dashboardhome

Route::get('/role','RoleController@index')->name('role_index');//role
Route::post('/role/create','RoleController@create')->name('role_create');//homepage
Route::get('/allrole','RoleController@allrole')->name('allrole');
Route::get('/allrole/{role_id}','RoleController@single_role')->name('single_role');
Route::get('/deleterole/{role_id}','RoleController@deleterole')->name('deletepatient');

///

Route::get('/array/register','RegistrationController@index')->name('register_index');//homepage
Route::post('/register/create','RegistrationController@create')->name('register_create');



///


Route::get('/dashboard','DashboardhomeController@index');


//Patients
//Patients
Route::get('/patient','PatientController@index')->name('patient');
Route::post('/patient/create','PatientController@create')->name('patient_create');
Route::get('/allpatient','PatientController@allpatient')->name('allpatient');
Route::get('/patientdetails','PatientController@patientdetails')->name('patientdetails');
Route::get('/allpatient/{patient_id}','PatientController@single_patient')->name('single_patient');
Route::get('/deletepatient/{patient_id}','PatientController@deletepatient')->name('deletepatient');




//Doctor

Route::get('/doctor','DoctorController@index')->name('doctor');
Route::post('/doctor/create','DoctorController@create')->name('doctor_create');
Route::get('/alldoctor','DoctorController@alldoctor')->name('alldoctor');






//Appointment





Route::get('/appointment','AppointmentController@index')->name('appointment');
Route::get('/appointmentview','AppointmentController@viewindex')->name('viewindex');

Route::post('/appointment/create','AppointmentController@create')->name('appointment_create');
Route::get('/allappointment','AppointmentController@allappointment')->name('allappointment');









//Schedules

Route::get('/schedule','ScheduleController@index')->name('schedule');
Route::post('/schedule/create','ScheduleController@create')->name('schedule_create');
Route::get('/allschedule','ScheduleController@allschedule')->name('allschedule');
Route::get('/allschedule/{schedule_id}','ScheduleController@single_schedule')->name('single_schedule');
Route::get('/deleteschedule/{schedule_id}','ScheduleController@deleteschedule')->name('deleteschedule');





///RoomAllocation

Route::get('/addroom','RoomAllotmentController@index')->name('addroom');
Route::post('/addroom/create','RoomAllotmentController@create')->name('room_create');
Route::get('/allroom','RoomAllotmentController@allroom')->name('allroom');







///payments
Route::get('/addpayment','PaymentController@index')->name('addpayment');

//Birthreport
Route::get('/Birthreport','BirthreportController@index')->name('Birthreport');
Route::post('/Birthreport/create','BirthreportController@create')->name('Birthreport_create');
Route::get('/allBirthreport','BirthreportController@allbirthreport')->name('allbirthreport');
Route::get('/allBirthreport/{birthreport_id}','BirthreportController@single_birthreport')->name('single_birthreport');
Route::get('/deletebirthreport/{birthreport_id}','BirthreportController@deletebirthreport')->name('deletebirthreport');




//PrescriptionController

Route::get('/add_case_study','PrescriptionController@index')->name('add_case_study');
Route::post('/add_case_study/create','PrescriptionController@create')->name('add_case_study_create');
Route::get('/allcasestudy','PrescriptionController@allcasestudy')->name('allcasestudy');
Route::get('/allcasestudy/{$prescription_id}','PrescriptionController@single_prescription')->name('single_prescription');
Route::get('/deleteprescription/{$prescription_id}','PrescriptionController@deleteprescription')->name('deleteprescription');








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



//
Route::get('/Department','DepartmentController@index')->name('Department');
Route::post('/Department/create','DepartmentController@create')->name('Department_create');
Route::get('/alldepartment','DepartmentController@alldepartment')->name('alldepartment');
Route::get('/alldepartment/{department_id}','DepartmentController@single_department')->name('single_department');
Route::get('/deletedepartment/{department_id}','DepartmentController@deletedepartment')->name('deletedepartment');





//addnotice

Route::get('/Notice','NoticeController@index')->name('Notice');
Route::post('/Notice/create','NoticeController@create')->name('Notice_create');



///////







Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home');
